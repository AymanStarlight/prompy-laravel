<?php

namespace App\Http\Controllers;

use App\Models\Prompt;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home($tag = null)
    {
        if ($tag) {
            $ps = Prompt::where('tag', $tag)->get()->first();
            if ($ps) {
                $prompts = Prompt::where('tag', $tag)->get();
            } else {
                $prompts = Prompt::all();
                return redirect()->route('home.index')->with('warning', 'Tag not Found');
            }
        } else {
            $prompts = Prompt::all();
        }
        return view('frontend.home.home', compact('prompts', 'tag'));
    }

    public function create()
    {
        return view('frontend.create.create');
    }

    public function profile()
    {
        return view('frontend.profile.profile');
    }
}