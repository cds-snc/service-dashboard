<?php

namespace App\Http\Controllers\Api;

use App\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramServiceController extends Controller
{
    public function index(Program $program)
    {
        return $program->services;
    }
}
