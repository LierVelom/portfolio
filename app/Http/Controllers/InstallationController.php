<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InstallationController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        if ($user->portfolios->count() > 0) {
            return redirect()->route('dashboard');
        }

        return view('installation.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'theme' => 'nullable|string',
            'about' => 'required|string',
            'social_links' => 'nullable|array',
            'social_links.*.platform' => 'required_with:social_links.*.url|string|max:255',
            'social_links.*.url' => 'required_with:social_links.*.platform|url|max:255',
        ]);

        Portfolio::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'theme' => $request->theme,
            'information_config' => [
                'about' => $request->about,
                'social_links' => array_values($request->social_links ?? []), // Chuyển đổi thành array hợp lệ
            ],
        ]);

        return redirect()->route('dashboard')->with('success', 'Portfolio được thiết lập thành công!');
    }
}
