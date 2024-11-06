<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceProviderController extends Controller
{
    public function index(): JsonResource
    {
        return ServiceProviderResource::make();
    }
    public function store(Request $request)
    {
        //$sp = ServiceProvider::q
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceProvider $serviceProvider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServiceProvider $serviceProvider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceProvider $serviceProvider)
    {
        //
    }
}
