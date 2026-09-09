<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index(): View
    {
        return view('home', [
            'yearsExperience' => 7,
            'projectContributions' => 12,
            'certificationsEarned' => 4,
        ]);
    }
}
