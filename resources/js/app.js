import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.start();

// AJAX Service Filtering
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const tagsContainer = document.getElementById('tags-container');
    const loadingSpinner = document.getElementById('loading-spinner');

    // Get current language from URL
    const lang = window.location.pathname.split('/')[1];

    // Add click event listeners to filter buttons
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.dataset.filter;
            const url = filter === 'all'
                ? `/${lang}/services/filter`
                : `/${lang}/services/filter?filter=${filter}`;

            // Show loading spinner
            loadingSpinner.classList.remove('hidden');
            tagsContainer.classList.add('opacity-50');

            // Update active button styles
            filterButtons.forEach(btn => {
                btn.classList.remove('bg-[#A31621]', 'text-white');
                btn.classList.add('bg-[#A31621]/10', 'text-[#A31621]');
            });
            this.classList.remove('bg-[#A31621]/10', 'text-[#A31621]');
            this.classList.add('bg-[#A31621]', 'text-white');

            // Make AJAX request
            fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then(response => response.json())
            .then(data => {
                // Update the tags container with new content
                tagsContainer.innerHTML = data.html;

                // Hide loading spinner
                loadingSpinner.classList.add('hidden');
                tagsContainer.classList.remove('opacity-50');

                // Smooth scroll to top
                window.scrollTo({ top: 0, behavior: 'smooth' });
            })
            .catch(error => {
                console.error('Error:', error);
                loadingSpinner.classList.add('hidden');
                tagsContainer.classList.remove('opacity-50');
            });
        });
    });
});
