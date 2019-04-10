<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Meeting;
use function view;

class AdminController extends Controller
{
    public function index()
    {
        // todo refactoring, it should be just a general views with routes to sub-functionality
        return view('layouts.admin.main', [
        ]);
    }
}
