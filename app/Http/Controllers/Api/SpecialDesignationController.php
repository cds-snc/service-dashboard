<?php

namespace App\Http\Controllers\Api;

use App\SpecialDesignation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialDesignationController extends Controller
{
    public function index()
    {
        return SpecialDesignation::all();
    }
}
