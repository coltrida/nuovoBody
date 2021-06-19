<?php

namespace App\Http\Controllers;

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
}
