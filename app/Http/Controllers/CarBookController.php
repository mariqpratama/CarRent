<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarBookController extends Controller
{
    public function index() {
        return view("book", [
            "title"=> "Booking",
            "active"=> "All Cars",
        ]);
    }
}