<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfileForm()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'bio' => 'required|string|max:255',
            
        ]);

        Profile::create([
            'user_id' => Auth::id(),
            'address' => $validatedData['address'],
            'number' => $validatedData['number'],
            'bio' => $validatedData['bio'],
        ]);

        return redirect()->route('showDashboard');
    }

    public function editProfile($profile)
    {
        $profile = Profile::findOrFail($profile);

        if ($profile->user_id !== Auth::id()) {
            abort(401, "Unauthorized Action");
        }

        return view('profile.edit', ['profile' => $profile]);   
    }

    public function update(Request $request, $profile)
    {
        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'bio' => 'required|string|max:255'
        ]);

        $profile = Profile::findOrFail($profile);

        if ($profile->user_id !== Auth::id()) {
            abort(401,'Unauthorized action.');
        }

        $profile->update([
            'address' => $validatedData['address'],
            'number' => $validatedData['number'],
            'bio' => $validatedData['bio']
        ]);

        return redirect()->route('showDashboard')->with('success', 'Profile updated successfully.');
    }
}