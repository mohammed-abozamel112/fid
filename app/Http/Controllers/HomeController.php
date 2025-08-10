<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Image;
use App\Models\Project;
use App\Models\Review;
use App\Models\Service;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all services with their tags
        $services = Service::with('tags')->get();
        // Fetch latest 5 blog posts with their tags
        $latestPosts = Blog::latest()->with('tags')->take(5)->get();
        //images with type gallery
        $gallery = Image::where('type', 'gallery')->get();
        //images with type home
        $homeImages = Image::where('type', 'home')->get();
        //images with type works
        $worksImages = Image::where('type', 'works')->get();
        //images with type client
        $clientImages = Image::where('type', 'client')->get();
        //images with type profile
        $profileImages = Image::where('type', 'profile')->get();
        //return latest 4 reviews
        $latestReviews = Review::latest()->take(4)->get();
        //get all projects in filter according to category
        $portfolioProjects = Project::with('tags')->get();
        //return view with all data
        return view('home', compact('services', 'latestPosts', 'gallery', 'homeImages', 'worksImages', 'clientImages', 'profileImages', 'latestReviews', 'portfolioProjects'));
    }

}
