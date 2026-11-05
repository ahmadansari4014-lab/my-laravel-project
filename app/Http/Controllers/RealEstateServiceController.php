<?php

namespace App\Http\Controllers;

class RealEstateServiceController extends Controller
{
    public function show(string $slug)
    {
        $service = config("real-estate-services.$slug");

        abort_unless(is_array($service), 404);

        return view('service-detail', compact('slug', 'service'));
    }

    /** Old /real-estate-virtual-assistants/{slug} links -> /services/{slug} (301). */
    public function legacyRedirect(string $slug)
    {
        return redirect()->route('services.show', $slug, 301);
    }
}
