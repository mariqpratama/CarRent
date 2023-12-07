<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Models\Post;

class CarRentalController extends Controller
{
    public function index() {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' Rental by ' . $category->name;
        }
        if(request('passenger')) {
            $passenger = Passenger::firstWhere('slug', request('passenger'));
            $title = ' in ' . $passenger->name;
        }
        return view('carRental', [
            "title" => "All Cars",
            "posts"=> Post::latest()->filter(request(['search', 'category','passenger']))->paginate(6)
        ]);
    }

    public function show(Post $post) {
        return view("detail", [
            "title"=> "Detail",
            "active"=> "All Cars",
            "detail"=> $post
        ]);
    }
}