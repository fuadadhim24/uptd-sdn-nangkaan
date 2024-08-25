<?php

namespace App\Http\Controllers;

use App\Models\DataSekolah;
use App\Models\PrincipalWelcomeMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PrincipalWelcomeMessageController extends Controller
{
    public function index()
    {
        $message = PrincipalWelcomeMessage::latest()->first(); 
        return view('admin.sambutan.index', compact('message'));
    }
    

    public function update(Request $request, PrincipalWelcomeMessage $principalWelcomeMessage)
    {
        $request->validate([
            'message' => 'required|string',
            'photo_path' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->only(['message']);

        if ($request->hasFile('photo_path')) {
            if ($principalWelcomeMessage->photo_path) {
                Storage::disk('public')->delete('principal_welcome_messages/' . $principalWelcomeMessage->photo_path);
            }

            $file = $request->file('photo_path');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('principal_welcome_messages', $filename, 'public');
            $data['photo_path'] = $filename;
        }

        $principalWelcomeMessage->update($data);
        return redirect()->route('admin.sambutan')->with('success', 'Principal Welcome Message updated successfully.');
    }
    public function lPIndex()
    {
        $message = PrincipalWelcomeMessage::latest()->first(); 
        
        $data = DataSekolah::all();
        // dd($message);
        return view('sambutan-kepala-sekolah', compact('message','data'));
    }
}
