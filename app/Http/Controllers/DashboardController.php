<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    
    public function index()
    {
        $portfolios = Portfolio::where('user_id', Auth::id())->get();

        Log::debug(count($portfolios));

        return view('dashboard.index')->with('portfolios', $portfolios);
    }
}
