<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function utama()
    {
        $posts = Post::all();
        return view('website.index', compact('posts'));
        // return "ini adalah halaman postingan";
        // return view('welcome-bc');
    }

    public function index()
    {
        $posts = Post::where('author_id', Auth::id())->latest('updated_at')->get();
        return view('backend.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return " ini halaman baru";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "ini adalah berita yang ke-".$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return " ini halamana ke-".$id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Model::find($id); 
        $data->delete();
    
        return redirect()->back();
    }
}

// boleh tambah fungsi tapi, harus panggil seperti biasa