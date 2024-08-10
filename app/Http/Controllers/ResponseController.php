<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index()
    {
        $responses = Response::all();
        return view('responses.index', compact('responses'));
    }

    public function create()
    {
        return view('responses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'respondent_id' => 'required|exists:respondents,id',
            'answer_id' => 'required|exists:answers,id',
        ]);

        Response::create($request->all());
        return redirect()->route('responses.index')->with('success', 'Response created successfully.');
    }

    public function show(Response $response)
    {
        return view('responses.show', compact('response'));
    }

    public function edit(Response $response)
    {
        return view('responses.edit', compact('response'));
    }

    public function update(Request $request, Response $response)
    {
        $request->validate([
            'respondent_id' => 'required|exists:respondents,id',
            'answer_id' => 'required|exists:answers,id',
        ]);

        $response->update($request->all());
        return redirect()->route('responses.index')->with('success', 'Response updated successfully.');
    }

    public function destroy(Response $response)
    {
        $response->delete();
        return redirect()->route('responses.index')->with('success', 'Response deleted successfully.');
    }
}
