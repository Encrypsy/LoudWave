<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function tag(Request $request)
    {
        $tags = Tag::all();
        return view('tag', compact('tags'));
    }
    public function create()
    {
        return view('tag_create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255|unique:tags,name',
        ]);

        // Simpan tag baru
        Tag::create([
            'name' => $request->input('name'),
        ]);
        
        return redirect()
        ->route('tag')
            ->with('success', 'Tag berhasil ditambahkan!');
    }
    public function delete($id)
    {
        $tags = Tag::findOrFail($id);
        $tags->delete();

        return redirect()
            ->route('tag')
            ->with('success', 'Tag berhasil dihapus!');
    }
}
