<x-master-layout>
    <div class="min-h-screen" style="background-color: #fcf7f9;">
        <!-- Hero Section -->
        <section class="relative py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto text-center">
                <div class="mb-8">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 tracking-tight">
                        <span style="color: #A31621;">Get in Touch</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Ready to transform your business? We'd love to hear from you.
                        Let's discuss how we can help bring your vision to life.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <button
                        class="px-8 py-6 text-lg font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg"
                        style="background-color: #A31621; color: #fcf7f9;"
                        onclick="document.getElementById('contact-form').scrollIntoView({ behavior: 'smooth' })"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5">
                            <path d="m22 2-7 20-4-9-9-4Z"/>
                            <path d="M22 2 11 13"/>
                        </svg>
                        Start a Conversation
                    </button>
                    <button
                        class="px-8 py-6 text-lg font-semibold border-2 transition-all duration-300 hover:scale-105"
                        style="border-color: #A31621; color: #A31621;"
                        onclick="document.getElementById('offices').scrollIntoView({ behavior: 'smooth' })"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        Visit Our Offices
                    </button>
                </div>
            </div>
        </section>

        <!-- Contact Form & Info Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8" style="background-color: #ffffff;">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-16">
                    <!-- Contact Form -->
                    <div id="contact-form">
                        <div class="shadow-xl border-0 h-full bg-white rounded-lg">
                            <div class="p-6 pb-8">
                                <h3 class="text-3xl font-bold" style="color: #A31621;">
                                    Send us a Message
                                </h3>
                                <p class="text-gray-600 text-lg mt-2">
                                    Fill out the form below and we'll get back to you as soon as possible.
                                </p>
                            </div>
                            <div class="p-6 pt-0">
                                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                                    @csrf
                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-sm font-semibold mb-2" style="color: #A31621;">
                                                Full Name *
                                            </label>
                                            <input
                                                type="text"
                                                name="name"
                                                value="{{ old('name') }}"
                                                placeholder="John Doe"
                                                required
                                                class="h-12 border-2 focus:border-red-300 transition-colors w-full px-3 py-2 border-gray-300 rounded-md"
                                            />
                                            @error('name')
                                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label class="block text-sm font-semibold mb-2" style="color: #A31621;">
                                                Email Address *
                                            </label>
                                            <input
                                                type="email"
                                                name="email"
                                                value="{{ old('email') }}"
                                                placeholder="john@company.com"
                                                required
                                                class="h-12 border-2 focus:border-red-300 transition-colors w-full px-3 py-2 border-gray-300 rounded-md"
                                            />
                                            @error('email')
                                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div>
                                            <label class="block text-sm font-semibold mb-2" style="color: #A31621;">
                                                Phone Number
                                            </label>
                                            <input
                                                type="tel"
                                                name="phone"
                                                value="{{ old('phone') }}"
                                                placeholder="+1 (555) 123-4567"
                                                class="h-12 border-2 focus:border-red-300 transition-colors w-full px-3 py-2 border-gray-300 rounded-md"
                                            />
                                            @error('phone')
                                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label class="block text-sm font-semibold mb-2" style="color: #A31621;">
                                                Company
                                            </label>
                                            <input
                                                type="text"
                                                name="company"
                                                value="{{ old('company') }}"
                                                placeholder="Your Company"
                                                class="h-12 border-2 focus:border-red-300 transition-colors w-full px-3 py-2 border-gray-300 rounded-md"
                                            />
                                            @error('company')
                                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold mb-2" style="color: #A31621;">
                                            Subject *
                                        </label>
                                        <input
                                            type="text"
                                            name="subject"
                                            value="{{ old('subject') }}"
                                            placeholder="How can we help you?"
                                            required
                                            class="h-12 border-2 focus:border-red-300 transition-colors w-full px-3 py-2 border-gray-300 rounded-md"
                                        />
                                        @error('subject')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold mb-2" style="color: #A31621;">
                                            Message *
                                        </label>
                                        <textarea
                                            name="message"
                                            placeholder="Tell us about your project..."
                                            required
                                            rows="6"
                                            class="border-2 focus:border-red-300 transition-colors resize-none w-full px-3 py-2 border-gray-300 rounded-md"
                                        >{{ old('message') }}</textarea>
                                        @error('message')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button
                                        type="submit"
                                        class="w-full h-14 text-lg font-semibold transition-all duration-300 hover:scale-[1.02] disabled:scale-100"
                                        style="background-color: #A31621; color: #fcf7f9;"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5">
                                            <path d="m22 2-7 20-4-9-9-4Z"/>
                                            <path d="M22 2 11 13"/>
                                        </svg>
                                        Send Message
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="space-y-8">
                        <div>
                            <h2 class="text-3xl font-bold mb-6" style="color: #A31621;">
                                Contact Information
                            </h2>
                            <p class="text-gray-600 text-lg mb-8">
                                Ready to get started? Reach out to us through any of the following channels.
                            </p>
                        </div>

                        <div class="space-y-6">
                            <div class="p-6 border-l-4 transition-all duration-300 hover:shadow-lg hover:scale-[1.02] bg-white rounded-lg shadow" style="border-left-color: #A31621;">
                                <div class="flex items-center space-x-4">
                                    <div class="p-3 rounded-full" style="background-color: #fcf7f9;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #A31621;">
                                            <rect width="20" height="16" x="2" y="4" rx="2"/>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-lg" style="color: #A31621;">Email Us</h3>
                                        <p class="text-gray-600">contact@fidcompany.com</p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 border-l-4 transition-all duration-300 hover:shadow-lg hover:scale-[1.02] bg-white rounded-lg shadow" style="border-left-color: #A31621;">
                                <div class="flex items-center space-x-4">
                                    <div class="p-3 rounded-full" style="background-color: #fcf7f9;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #A31621;">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-lg" style="color: #A31621;">Call Us</h3>
                                        <p class="text-gray-600">+1 (555) 123-4567</p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 border-l-4 transition-all duration-300 hover:shadow-lg hover:scale-[1.02] bg-white rounded-lg shadow" style="border-left-color: #A31621;">
                                <div class="flex items-center space-x-4">
                                    <div class="p-3 rounded-full" style="background-color: #fcf7f9;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #A31621;">
                                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                            <circle cx="12" cy="10" r="3"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-lg" style="color: #A31621;">Visit Us</h3>
                                        <p class="text-gray-600">123 Tech Street, Innovation City, CA 90210</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="pt-8">
                            <h3 class="text-xl font-semibold mb-4" style="color: #A31621;">
                                Follow Us
                            </h3>
                            <div class="flex space-x-4">
                                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="p-3 rounded-full transition-all duration-300 hover:scale-110 hover:shadow-lg" style="background-color: #A31621; color: #fcf7f9;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                                        <rect width="4" height="12" x="2" y="9"/>
                                        <circle cx="4" cy="4" r="2"/>
                                    </svg>
                                </a>
                                <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="p-3 rounded-full transition-all duration-300 hover:scale-110 hover:shadow-lg" style="background-color: #A31621; color: #fcf7f9;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 4s-.7 2.1-2 3.4c1.6 1.4 3.3 4.9 3.3 4.9s-1.4-.6-2.8-.9c-1.2 2.1-2.9 3.4-4.8 3.4-3.3 0-6-2.7-6-6s2.7-6 6-6c.3 0 .6 0 .9.1C15.3 7.4 17 4 17 4s-2.7 1.4-5.2 1.4c-1.7 0-3.3-.5-4.6-1.5-1.2 1.2-1.9 2.8-1.9 4.6 0 3.9 3.1 7 7 7 3.9 0 7-3.1 7-7 0-1.2-.3-2.3-.8-3.2.8-.3 1.6-.7 2.3-1.2z"/>
                                    </svg>
                                </a>
                                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="p-3 rounded-full transition-all duration-300 hover:scale-110 hover:shadow-lg" style="background-color: #A31621; color: #fcf7f9;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                                    </svg>
                                </a>
                                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="p-3 rounded-full transition-all duration-300 hover:scale-110 hover:shadow-lg" style="background-color: #A31621; color: #fcf7f9;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Office Locations -->
        <section id="offices" class="py-20 px-4 sm:px-6 lg:px-8" style="background-color: #fcf7f9;">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold mb-6" style="color: #A31621;">
                        Our Offices
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Visit us at one of our locations or schedule a virtual meeting.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="relative overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-[1.02] bg-white rounded-lg shadow">
                        <div class="absolute top-4 right-4 z-10 px-3 py-1 rounded-full text-sm" style="background-color: #A31621; color: #fcf7f9;">
                            Headquarters
                        </div>
                        <div class="p-6">
                            <h3 class="flex items-center text-2xl font-bold mb-4" style="color: #A31621;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-3 h-6 w-6">
                                    <rect width="16" height="20" x="4" y="2" rx="2" ry="2"/>
                                    <path d="M9 22v-4h6v4"/>
                                    <path d="M8 6h.01"/>
                                    <path d="M16 6h.01"/>
                                    <path d="M12 6h.01"/>
                                    <path d="M12 10h.01"/>
                                    <path d="M12 14h.01"/>
                                    <path d="M16 10h.01"/>
                                    <path d="M16 14h.01"/>
                                    <path d="M8 10h.01"/>
                                    <path d="M8 14h.01"/>
                                </svg>
                                San Francisco
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #A31621;">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    <p class="text-gray-600">123 Market Street, San Francisco, CA 94105</p>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #A31621;">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                    <p class="text-gray-600">+1 (415) 555-0123</p>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #A31621;">
                                        <rect width="20" height="16" x="2" y="4" rx="2"/>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                    </svg>
                                    <p class="text-gray-600">sf@fidcompany.com</p>
                                </div>
                                <button
                                    class="w-full mt-4 border-2 transition-all duration-300 hover:scale-[1.02] px-4 py-2 rounded-md"
                                    style="border-color: #A31621; color: #A31621;"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    Get Directions
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="relative overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-[1.02] bg-white rounded-lg shadow">
                        <div class="p-6">
                            <h3 class="flex items-center text-2xl font-bold mb-4" style="color: #A31621;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-3 h-6 w-6">
                                    <rect width="16" height="20" x="4" y="2" rx="2" ry="2"/>
                                    <path d="M9 22v-4h6v4"/>
                                    <path d="M8 6h.01"/>
                                    <path d="M16 6h.01"/>
                                    <path d="M12 6h.01"/>
                                    <path d="M12 10h.01"/>
                                    <path d="M12 14h.01"/>
                                    <path d="M16 10h.01"/>
                                    <path d="M16 14h.01"/>
                                    <path d="M8 10h.01"/>
                                    <path d="M8 14h.01"/>
                                </svg>
                                New York
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #A31621;">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    <p class="text-gray-600">456 Broadway, New York, NY 10013</p>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #A31621;">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                    <p class="text-gray-600">+1 (212) 555-0456</p>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #A31621;">
                                        <rect width="20" height="16" x="2" y="4" rx="2"/>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                    </svg>
                                    <p class="text-gray-600">ny@fidcompany.com</p>
                                </div>
                                <button
                                    class="w-full mt-4 border-2 transition-all duration-300 hover:scale-[1.02] px-4 py-2 rounded-md"
                                    style="border-color: #A31621; color: #A31621;"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    Get Directions
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="relative overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-[1.02] bg-white rounded-lg shadow">
                        <div class="p-6">
                            <h3 class="flex items-center text-2xl font-bold mb-4" style="color: #A31621;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-3 h-6 w-6">
                                    <rect width="16" height="20" x="4" y="2" rx="2" ry="2"/>
                                    <path d="M9 22v-4h6v4"/>
                                    <path d="M8 6h.01"/>
                                    <path d="M16 6h.01"/>
                                    <path d="M12 6h.01"/>
                                    <path d="M12 10h.01"/>
                                    <path d="M12 14h.01"/>
                                    <path d="M16 10h.01"/>
                                    <path d="M16 14h.01"/>
                                    <path d="M8 10h.01"/>
                                    <path d="M8 14h.01"/>
                                </svg>
                                Austin
                            </h3>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #A31621;">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    <p class="text-gray-600">789 Tech Boulevard, Austin, TX 73301</p>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #A31621;">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                    <p class="text-gray-600">+1 (512) 555-0789</p>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #A31621;">
                                        <rect width="20" height="16" x="2" y="4" rx="2"/>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                    </svg>
                                    <p class="text-gray-600">austin@fidcompany.com</p>
                                </div>
                                <button
                                    class="w-full mt-4 border-2 transition-all duration-300 hover:scale-[1.02] px-4 py-2 rounded-md"
                                    style="border-color: #A31621; color: #A31621;"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    Get Directions
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8" style="background-color: #ffffff;">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold mb-6" style="color: #A31621;">
                        Meet Our Team
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Get to know the passionate professionals behind our success.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-[1.02] bg-white rounded-lg shadow">
                        <div class="pt-6 p-6">
                            <div class="mb-6">
                                <img
                                    src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=face"
                                    alt="John Smith"
                                    class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4"
                                    style="border-color: #fcf7f9;"
                                />
                                <h3 class="text-xl font-bold mb-2" style="color: #A31621;">
                                    John Smith
                                </h3>
                                <p class="text-gray-600 font-semibold">CEO & Founder</p>
                            </div>
                            <div class="space-y-2 text-sm text-gray-600">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="20" height="16" x="2" y="4" rx="2"/>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                    </svg>
                                    <span>john@fidcompany.com</span>
                                </div>
                                <div class="flex items-center justify-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                    <span>+1 (555) 123-0001</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-[1.02] bg-white rounded-lg shadow">
                        <div class="pt-6 p-6">
                            <div class="mb-6">
                                <img
                                    src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=150&h=150&fit=crop&crop=face"
                                    alt="Sarah Johnson"
                                    class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4"
                                    style="border-color: #fcf7f9;"
                                />
                                <h3 class="text-xl font-bold mb-2" style="color: #A31621;">
                                    Sarah Johnson
                                </h3>
                                <p class="text-gray-600 font-semibold">Head of Operations</p>
                            </div>
                            <div class="space-y-2 text-sm text-gray-600">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="20" height="16" x="2" y="4" rx="2"/>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                    </svg>
                                    <span>sarah@fidcompany.com</span>
                                </div>
                                <div class="flex items-center justify-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                    <span>+1 (555) 123-0002</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-[1.02] bg-white rounded-lg shadow">
                        <div class="pt-6 p-6">
                            <div class="mb-6">
                                <img
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face"
                                    alt="Michael Chen"
                                    class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4"
                                    style="border-color: #fcf7f9;"
                                />
                                <h3 class="text-xl font-bold mb-2" style="color: #A31621;">
                                    Michael Chen
                                </h3>
                                <p class="text-gray-600 font-semibold">Technical Lead</p>
                            </div>
                            <div class="space-y-2 text-sm text-gray-600">
                                <div class="flex items-center justify-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="20" height="16" x="2" y="4" rx="2"/>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                    </svg>
                                    <span>michael@fidcompany.com</span>
                                </div>
                                <div class="flex items-center justify-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                    <span>+1 (555) 123-0003</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8" style="background-color: #fcf7f9;">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold mb-6" style="color: #A31621;">
                        Frequently Asked Questions
                    </h2>
                    <p class="text-xl text-gray-600">
                        Find answers to common questions about our services and processes.
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="bg-white rounded-lg border-0 shadow-lg overflow-hidden">
                        <button class="w-full px-6 py-4 text-left font-semibold text-lg transition-colors" style="color: #A31621;">
                            How long does a typical project take?
                        </button>
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            Project timelines vary depending on scope and complexity. Small projects typically take 2-4 weeks, while larger enterprise solutions can take 3-6 months. We'll provide a detailed timeline during our initial consultation.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg border-0 shadow-lg overflow-hidden">
                        <button class="w-full px-6 py-4 text-left font-semibold text-lg transition-colors" style="color: #A31621;">
                            What industries do you specialize in?
                        </button>
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            We have extensive experience across various industries including technology, healthcare, finance, retail, and education. Our adaptable approach allows us to deliver solutions tailored to your specific industry needs.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg border-0 shadow-lg overflow-hidden">
                        <button class="w-full px-6 py-4 text-left font-semibold text-lg transition-colors" style="color: #A31621;">
                            Do you offer ongoing support?
                        </button>
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            Yes, we offer comprehensive support packages including maintenance, updates, and technical support. Our team is available 24/7 to ensure your systems run smoothly.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg border-0 shadow-lg overflow-hidden">
                        <button class="w-full px-6 py-4 text-left font-semibold text-lg transition-colors" style="color: #A31621;">
                            How do you handle project pricing?
                        </button>
                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                            We offer flexible pricing models including fixed-price, time & materials, and retainer-based options. We'll work with you to determine the best approach based on your project requirements and budget.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Placeholder -->
        <section class="py-20 px-4 sm:px-6 lg:px-8" style="background-color: #ffffff;">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold mb-6" style="color: #A31621;">
                        Find Us on the Map
                    </h2>
                    <p class="text-xl text-gray-600">
                        Located in the heart of the tech industry.
                    </p>
                </div>

                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <div
                        class="h-96 flex items-center justify-center text-white relative"
                        style="background-color: #A31621;"
                    >
                        <div class="absolute inset-0 bg-gradient-to-br from-transparent to-black/20"></div>
                        <div class="relative z-10 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-16 w-16 mx-auto mb-4 opacity-80">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            <h3 class="text-2xl font-bold mb-2">Interactive Map</h3>
                            <p class="text-lg opacity-90">Click to view our location on Google Maps</p>
                            <button
                                class="mt-6 bg-white hover:bg-gray-100 transition-colors px-4 py-2 rounded-md"
                                style="color: #A31621;"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                                Open in Google Maps
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="py-20 px-4 sm:px-6 lg:px-8 text-center" style="background-color: #A31621;">
            <div class="max-w-4xl mx-auto text-white">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Ready to Get Started?
                </h2>
                <p class="text-xl mb-8 opacity-90">
                    Let's transform your ideas into reality. Contact us today for a free consultation.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button
                        class="px-8 py-6 text-lg font-semibold bg-white hover:bg-gray-100 transition-all duration-300 hover:scale-105 rounded-md"
                        style="color: #A31621;"
                        onclick="document.getElementById('contact-form').scrollIntoView({ behavior: 'smooth' })"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5">
                            <path d="m22 2-7 20-4-9-9-4Z"/>
                            <path d="M22 2 11 13"/>
                        </svg>
                        Get Started Now
                    </button>
                    <button
                        class="px-8 py-6 text-lg font-semibold border-2 border-white text-white hover:bg-white hover:text-red-600 transition-all duration-300 hover:scale-105 rounded-md"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        Schedule a Call
                    </button>
                </div>
            </div>
        </section>
    </div>
</x-master-layout>
