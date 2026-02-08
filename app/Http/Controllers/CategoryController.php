<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Request $request)
    {
        // Contoh: Menangani data yang dikirim dari form di halaman category
        $categories = Category::all();
        $categoryId = $request->input('category_id');  
        return view('category', compact('categoryId', 'categories')); 
    }

    public function create()
    {
        return view('category_create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        // Simpan kategori baru
        Category::create([
            'name' => $request->input('name'),
        ]);

        return redirect()
            ->route('category')
            ->with('success', 'Kategori berhasil ditambahkan!');
    }
    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()
            ->route('category')
            ->with('success', 'Kategori berhasil dihapus!');
    }
}
