<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ResumeController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('resume', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('edit-resume', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'skills' => 'nullable|string',
            'education' => 'nullable|string',
            'hobbies' => 'nullable|string',
            'address' => 'nullable|string',
            'birthday' => 'nullable|string',
            'age' => 'nullable|integer',
            'photo' => 'nullable|image|max:2048'
        ]);

        $user = Auth::user();

        // handle image upload
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
            $user->photo = $path;
        }

        $user->update($request->except('photo'));

        return redirect()->route('resume')->with('success', '✅ Resume updated successfully!');
    }

    public function publicView($id)
    {
        $user = User::findOrFail($id);
        return view('public-resume', compact('user'));
    }
}
