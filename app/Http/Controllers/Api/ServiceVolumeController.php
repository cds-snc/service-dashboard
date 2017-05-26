<?php

namespace App\Http\Controllers\Api;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class ServiceVolumeController
 * @package App\Http\Controllers\Api
 * @resource Services
 */
class ServiceVolumeController extends Controller
{
    /**
     * Get Channel Volumes for a Service
     * @param Service $service
     * @return mixed
     */
    public function index(Service $service)
    {
        return $service->channelVolumes;
    }
}
