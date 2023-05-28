<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comic;

class PageController extends Controller
{
    public function index()
    {
        $comics = config('db.comics');
        return view('layouts.home', compact('comics'));
    }
}
