<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home() {
        $cars = Car::latest()->take(6)->get();
        
        return view('index', compact('cars'));
    }
}
