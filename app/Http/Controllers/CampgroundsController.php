<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CampgroundsController extends Controller
{
    public function index()
    {
        $camps = Camp::get();

        return view('campgrounds', ['camps' => $camps]);
    }

    public function add()
    {
        if (Auth::check()) {
            return view('add-campground');
        }

        return redirect()->route('login')->with('status', 'Credential has been needed.');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'camp_name' => 'required',
            'price' => 'required|numeric',
            'image_url' => 'required|url',
            'description' => 'required',
        ]);

        $request->user()->camps()->create([
            'camp_name' => $request->camp_name,
            // 'price' => $request->price,
            'image_url' => $request->image_url,
            'description' => $request->description,
        ]);

        return redirect()->route('campgrounds');
    }

    public function detail(Request $request, string $slug)
    {
        $camp = Camp::where('slug', $slug)->firstOrFail();

        if (!$camp) return abort(404);

        return view('campgrounds-detail', ['camp' => $camp]);
    }
}
