<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        // Total berita
        $totalPosts = Post::count();

        // Berita yang dibuat hari ini
        $todayPosts = Post::whereDate('created_at', Carbon::today())->count();

        // Total kategori
        $totalCategories = Category::count();

        // Total tags
        $totalTags = Tag::count();

        $userStats = User::count();
        // ============================
        // 1. Chart Jumlah Post per Bulan
        // ============================
        $months = [];
        $postsCount = [];

        for ($i = 1; $i <= 12; $i++) {
            $months[] = Carbon::create()->month($i)->format('F'); // Nama bulan Inggris
            $postsCount[] = Post::whereMonth('created_at', $i)->count();
        }

        // ============================
        // 2. Chart Jumlah Post per Category
        // ============================
        $categoryStats = Category::withCount('posts')->get();

        // Ambil data post dengan pagination
        $posts = Post::latest()->paginate(10);
        $categories = Category::all();

        // Kirim ke view
        return view('layouts.master', compact('posts', 'categories','months',
            'postsCount',
            'categoryStats',
            'totalPosts',
            'todayPosts',
            'totalCategories',
            'totalTags',
            'userStats'));
    }
}
