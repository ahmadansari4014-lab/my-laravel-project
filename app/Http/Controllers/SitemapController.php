<?php

namespace App\Http\Controllers;

class SitemapController extends Controller
{
    /** XML sitemap listing every public page, for Google Search Console. */
    public function index()
    {
        $urls = [
            ['loc' => route('home'), 'priority' => '1.0'],
            ['loc' => route('services'), 'priority' => '0.9'],
        ];

        foreach (array_keys(config('real-estate-services')) as $slug) {
            $urls[] = ['loc' => route('services.show', $slug), 'priority' => '0.8'];
        }

        foreach (['about', 'contact'] as $name) {
            $urls[] = ['loc' => route($name), 'priority' => '0.6'];
        }

        foreach (['privacy', 'terms', 'sms-terms'] as $name) {
            $urls[] = ['loc' => route($name), 'priority' => '0.3'];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n"
            . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        foreach ($urls as $url) {
            $xml .= '  <url><loc>' . e($url['loc']) . '</loc><priority>' . $url['priority'] . '</priority></url>' . "\n";
        }
        $xml .= '</urlset>' . "\n";

        return response($xml, 200, ['Content-Type' => 'application/xml']);
    }
}
