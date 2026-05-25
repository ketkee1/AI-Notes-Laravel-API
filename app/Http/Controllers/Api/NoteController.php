<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        return Note::all();
    }

    public function store(Request $request)
    {
        $note = Note::create($request->all());
        return response()->json($note, 201);
    }

    public function show($id)
    {
        return Note::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);
        $note->update($request->all());

        return response()->json($note, 200);
    }

    public function destroy($id)
    {
        Note::destroy($id);

        return response()->json(null, 204);
    }
}