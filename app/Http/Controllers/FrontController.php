<?php

namespace App\Http\Controllers;

use App\Services\CourseService;
use App\Services\HourService;
use App\Services\TrainerService;
use Illuminate\Http\Request;
use function compact;
use function view;

class FrontController extends Controller
{
    public function index(TrainerService $trainerService, HourService $hourService)
    {
        $trainers = $trainerService->index();
        $orario = $hourService->index();
        return view('inizio', compact('trainers', 'orario'));
    }

    public function calendario(TrainerService $trainerService, HourService $hourService, CourseService $courseService)
    {
        $trainers = $trainerService->index();
        $orario = $hourService->index();
        $courses = $courseService->listaCorsiConCalendario();
        return view('calendario', compact('trainers', 'orario', 'courses'));
    }
}
