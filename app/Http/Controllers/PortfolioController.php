<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index() {
        $portfolios = Portfolio::withCount(['resources', 'items'])->get();
        return view('portfolios.index', compact('portfolios'));
    }

    public function show(Portfolio $portfolio) {
        return view('portfolios.show', compact('portfolio'));
    }

    public function create() {
        return view('portfolios.create');
    }

    public function store(Request $request) {
        $portfolio = Portfolio::create($request->all());
        return redirect()->route('portfolios.show', $portfolio);
    }

    public function edit(Portfolio $portfolio) {
        return view('portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio) {
        $portfolio->update($request->all());
        return redirect()->route('portfolios.show', $portfolio);
    }

    public function destroy(Portfolio $portfolio) {
        $portfolio->delete();
        return redirect()->route('portfolios.index');
    }
}
