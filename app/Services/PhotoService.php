<?php


namespace App\Services;

use Storage;
use function dd;

class PhotoService
{
    public function firstMain()
    {
        $directory = 'firstMain/';
        return Storage::disk('public')->files($directory);
    }

    public function secondMain()
    {
        $directory = 'secondMain/';
        return Storage::disk('public')->files($directory);
    }

    public function aggiungi($request)
    {
        if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $filename = $request->posizione;
            $file->storeAs('public/', $filename);
        }
    }
}
