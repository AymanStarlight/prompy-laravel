<?php

namespace App\Http\Controllers;

use App\Models\Prompt;
use Illuminate\Http\Request;

class PromptController extends Controller
{
    public function store(Request $request) {

        $data = [
            'user_id' => auth()->user()->id,
            'prompt' => $request->prompt,
            'tag' => $request->tag
        ];

        Prompt::create($data);

        return redirect()->route('home.index')->with('success', 'Prompt Created Successfuly');

    }
}
