<?php

namespace App\Http\Controllers\Api;

use App\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class ProgramController
 * @package App\Http\Controllers\Api
 * @resource Programs
 */
class ProgramController extends Controller
{
    /**
     * Get a Specific Program
     * @param Program $program
     * @return Program
     */
    public function show(Program $program)
    {
        return $program;
    }
}
