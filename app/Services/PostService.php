<?php


namespace App\Services;

use App\Models\Post;
use Storage;
use function dd;

class PostService
{
    public function index()
    {
        return Post::latest()->simplePaginate(10);
    }

    public function lista()
    {
        return Post::latest()->simplePaginate(3);
    }

    public function inEvidenza()
    {
        return Post::where('evidenza', 1)->latest()->take(3)->get();
    }

    public function show($id)
    {
        return Post::find($id);
    }

    public function elimina($id)
    {
        $post = Post::find($id);
        if ($post->foto){
            Storage::disk('public')->delete('notizie/'.$post->foto);
        }
        $post->delete();
    }

    public function aggiungi($request)
    {
        $post = new Post();
        $post->titolo = $request->titolo;
        $post->evidenza = $request->evidenza;
        $post->testo = $request->testo;
        $post->save();

        if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $filename = $post->id . '.' . $file->extension();
            $file->storeAs('public/notizie/', $filename);
            $post->foto = $filename;
            $post->save();
        }
    }
}
