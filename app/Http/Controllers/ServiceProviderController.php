<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceProviderController extends Controller
{
    public function index(): JsonResource
    {
        //phpfactor fails to load this class
        return ServiceProviderResource::make();
    }
    public function store(Request $request): JsonResource
    {
        // this shouldn't be done but for testing purposes
        // we will pass in the whole request object
        $sp = ServiceProvider::query()->create($request->all());

        return ServiceProviderResource::make($sp);
    }

    public function show(ServiceProvider $serviceProvider)
    {
        return ServiceProviderResource::make($serviceProvider);
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
