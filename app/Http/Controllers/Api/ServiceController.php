<?php

namespace App\Http\Controllers\Api;

use App\Service;
use App\Transformers\ServiceTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class ServiceController
 * @package App\Http\Controllers\Api
 * @resource Services
 */
class ServiceController extends Controller
{
    /**
     * Get All Services
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return ServiceTransformer::transform(Service::all());
    }

    /**
     * Get a Specific Service
     * @param Service $service
     * @return Service
     */
    public function show(Service $service)
    {
        return ServiceTransformer::transform($service);
    }
}
