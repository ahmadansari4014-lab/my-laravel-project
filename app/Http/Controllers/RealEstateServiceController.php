<?php

namespace App\Http\Controllers;

class RealEstateServiceController extends Controller
{
    public function show(string $slug)
    {
        $service = config("real-estate-services.$slug");

        abort_unless(is_array($service), 404);

        return view('real-estate-service', compact('slug', 'service'));
    }
}
