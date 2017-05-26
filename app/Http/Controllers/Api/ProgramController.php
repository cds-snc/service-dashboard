<?php

namespace App\Http\Controllers\Api;

use App\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    public function show(Program $program)
    {
        return $program;
    }
}
