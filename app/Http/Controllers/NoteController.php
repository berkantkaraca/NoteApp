<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;

class NoteController extends Controller
{
    public function index()
    {
        if (session()->has('isLogin')) {
            if (!session('isLogin')) {
                return redirect()->route('login');
            }
        } else {
            return redirect()->route('login');
        }

        $notes = Note::where('user_id', session('userId'))->orderBy('updated_at', 'desc')->get();
        return view('note.index', compact('notes'));
    }

    public function show(Note $note)
    {
        return view('note.show', compact('note'));
    }

    public function store(StoreNoteRequest $request)
    {
        $validatedData = $request->validated();
        Note::create($validatedData);

        return redirect()->route('notes.index');
    }

    public function update(UpdateNoteRequest $request, Note $note)
    {
        $note->update($request->validated());
        return redirect()->route('notes.index');
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index');
    }
}
