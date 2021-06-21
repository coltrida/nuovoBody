<?php


namespace App\Services;

use App\Models\Post;

class PostService
{
    public function index()
    {
        return Post::orderBy('nome')->get();
    }

    public function show($id)
    {
        return Post::find($id);
    }

    public function elimina($id)
    {
        return Post::destroy($id);
    }

    public function aggiungi($request)
    {
        return Post::create($request->all());
    }
}
