<?php


namespace App\Services;


use App\Models\Calendar;
use function dd;

class CalendarService
{
    public function index()
    {
        return Calendar::with('course')->orderBy('giorno')->orderBy('oraInizio')->get();
    }

    public function elimina($id)
    {
        return Calendar::destroy($id);
    }

    public function aggiungi($request)
    {
        return Calendar::create($request->all());
    }
}
