<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use App\Models\Resource;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredSolutions = Solution::active()->featured()->orderBy('order')->take(3)->get();
        $featuredResources = Resource::active()->featured()->orderBy('order')->take(4)->get();
        $services = Service::active()->orderBy('order')->take(6)->get();

        return view('home', compact('featuredSolutions', 'featuredResources', 'services'));
    }

    public function solutions()
    {
        $solutions = Solution::active()->orderBy('order')->get();
        $categories = Solution::active()->distinct()->pluck('category');

        return view('solutions', compact('solutions', 'categories'));
    }

    public function solution($slug)
    {
        $solution = Solution::where('slug', $slug)->active()->firstOrFail();
        $relatedSolutions = Solution::where('category', $solution->category)
            ->where('id', '!=', $solution->id)
            ->active()
            ->take(3)
            ->get();

        return view('solution', compact('solution', 'relatedSolutions'));
    }

    public function resources(Request $request)
    {
        $query = Resource::active()->orderBy('published_date', 'desc');
        
        if ($request->has('type') && $request->type) {
            $query->where('type', $request->type);
        }
        
        $resources = $query->paginate(12);
        $types = Resource::active()->distinct()->pluck('type');

        return view('resources', compact('resources', 'types'));
    }

    public function resource($slug)
    {
        $resource = Resource::where('slug', $slug)->active()->firstOrFail();
        $relatedResources = Resource::where('type', $resource->type)
            ->where('id', '!=', $resource->id)
            ->active()
            ->take(3)
            ->get();

        return view('resource', compact('resource', 'relatedResources'));
    }

    public function services()
    {
        $services = Service::active()->orderBy('order')->get();

        return view('services', compact('services'));
    }

    public function service($slug)
    {
        $service = Service::where('slug', $slug)->active()->firstOrFail();

        return view('service', compact('service'));
    }
}
