<?php

namespace App\Http\Controllers;

use App\Models\Prompt;
use Illuminate\Http\Request;

class PromptController extends Controller
{
    public function store(Request $request)
    {

        $data = [
            'user_id' => auth()->user()->id,
            'prompt' => $request->prompt,
            'tag' => $request->tag
        ];

        Prompt::create($data);

        return redirect()->route('home.index')->with('success', 'Prompt Created Successfuly');

    }

    public function edit(Prompt $prompt)
    {
        return view('frontend.profile.pages.edit', compact('prompt'));
    }

    public function update(Request $request, Prompt $prompt)
    {

        if (auth()->user()->id !== $prompt->user->id) {
            return redirect()->route('home.index')->with('error', "You can't edit a Prompt that's not yours!!!");
        }

        $data = [
            'prompt' => $request->prompt,
            'tag' => $request->tag,
        ];

        $prompt->update($data);

        return redirect()->route('profile.index')->with('success', 'Prompt Updated Successfuly');
    }

    public function delete(Prompt $prompt)
    {

        $prompt->delete();

        return back()->with('error', 'Prompt Deleted Successfuly');
    }

}