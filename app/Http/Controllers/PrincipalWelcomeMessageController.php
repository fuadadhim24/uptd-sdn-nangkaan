<?php

namespace App\Http\Controllers;

use App\Models\PrincipalWelcomeMessage;
use Illuminate\Http\Request;

class PrincipalWelcomeMessageController extends Controller
{
    public function index()
    {
        $messages = PrincipalWelcomeMessage::all();
        return view('principal_welcome_messages.index', compact('messages'));
    }

    public function create()
    {
        return view('principal_welcome_messages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'photo_path' => 'nullable|string',
        ]);

        PrincipalWelcomeMessage::create($request->all());
        return redirect()->route('principal_welcome_messages.index')->with('success', 'Principal Welcome Message created successfully.');
    }

    public function show(PrincipalWelcomeMessage $principalWelcomeMessage)
    {
        return view('principal_welcome_messages.show', compact('principalWelcomeMessage'));
    }

    public function edit(PrincipalWelcomeMessage $principalWelcomeMessage)
    {
        return view('principal_welcome_messages.edit', compact('principalWelcomeMessage'));
    }

    public function update(Request $request, PrincipalWelcomeMessage $principalWelcomeMessage)
    {
        $request->validate([
            'message' => 'required|string',
            'photo_path' => 'nullable|string',
        ]);

        $principalWelcomeMessage->update($request->all());
        return redirect()->route('principal_welcome_messages.index')->with('success', 'Principal Welcome Message updated successfully.');
    }

    public function destroy(PrincipalWelcomeMessage $principalWelcomeMessage)
    {
        $principalWelcomeMessage->delete();
        return redirect()->route('principal_welcome_messages.index')->with('success', 'Principal Welcome Message deleted successfully.');
    }
}
