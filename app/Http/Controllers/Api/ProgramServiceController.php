<?php

namespace App\Http\Controllers\Api;

use App\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class ProgramServiceController
 * @package App\Http\Controllers\Api
 * @resource Programs
 */
class ProgramServiceController extends Controller
{
    /**
     * Get Services of a Program
     * @param Program $program
     * @return mixed
     */
    public function index(Program $program)
    {
        return $program->services;
    }
}
