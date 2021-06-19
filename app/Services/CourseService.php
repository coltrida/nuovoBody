<?php


namespace App\Services;


use App\Models\Course;

class CourseService
{
    public function index()
    {
        return Course::orderBy('nome')->get();
    }

    public function listaCorsiConTrainer()
    {
        return Course::with('trainer')->orderBy('nome')->get();
    }

    public function elimina($id)
    {
        return Course::destroy($id);
    }

    public function aggiungi($request)
    {
        return Course::create($request->all());
    }
}
