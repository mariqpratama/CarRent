<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Passenger;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            // 'posts' => Post::where('user_id', auth()->user()->id)->get(),
            'posts' => Post::filter(request(['search', 'category','passenger']))->where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all(),
            'passengers' => Passenger::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'brand' => 'required|max:255',
            'model' => 'required|max:255',
            'number_plate' => 'required|max:10|unique:posts',
            'slug' => 'required|max:10|unique:posts',
            'rental_rate' => 'required',
            'category_id' => 'required',
            'passenger_id' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Post::create($validatedData);

        return redirect('/dashboard/cars')->with('success','New car has been added!');

        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'detail' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}