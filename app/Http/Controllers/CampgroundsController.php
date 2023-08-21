<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use App\Models\Comment;
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
            'camp_name' => 'required|string',
            'price' => 'required|numeric',
            'image_url' => 'required|url',
            'description' => 'required|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string'
        ]);
        

        $request->user()->camps()->create([
            'camp_name' => $request->camp_name,
            'price' => $request->price,
            'slug' => Str::slug($request->camp_name, '-'),
            'image_url' => $request->image_url,
            'description' => $request->description,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return redirect()->route('campgrounds');
    }

    public function detail(Request $request, string $slug)
    {
        $camp = Camp::where('slug', $slug)->firstOrFail();

        $comments = Comment::where('camp_id', $camp->id)->get();

        if (!$camp) return abort(404);

        return view('campgrounds-detail', ['camp' => $camp, 'comments' => $comments]);
    }

    public function comment(Request $request, string $slug)
    {
        $camp = Camp::where('slug', $slug)->firstOrFail();

        if (!$camp) return abort(404);

        return view('campgrounds-comment');
    }

    public function storeComment(Request $request, string $slug)
    {
        $camp_id = Camp::where('slug', $slug)->firstOrFail()->id;
        $user_id = Auth::user()->id;

        $this->validate($request, [
            'description' => 'required|string',
        ]);

        if ($camp_id and $user_id) {
            $comment = new Comment;

            $comment->user_id = $user_id;
            $comment->camp_id = $camp_id;
            $comment->description = $request->description;
            $comment->save();

            return redirect()->route('campgrounds-detail', [$slug]);

        }

        return abort(500);
    }
}
