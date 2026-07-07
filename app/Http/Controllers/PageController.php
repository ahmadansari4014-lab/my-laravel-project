<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        // Upgraded array with detailed business descriptions and specific icon keys
        $services = [
            (object)[
                'name' => 'Virtual Assistant Services', 
                'icon_key' => 'va',
                'desc' => 'Elite administrative support, calendar management, and daily operational handling to give you back your most valuable asset: time.'
            ],
            (object)[
                'name' => 'Website Design & Management', 
                'icon_key' => 'web',
                'desc' => 'Custom, high-converting websites built with modern frameworks and maintained daily for optimal security and speed.'
            ],
            (object)[
                'name' => 'SEO Services', 
                'icon_key' => 'seo',
                'desc' => 'Data-driven search engine optimization to guarantee your business ranks higher and captures organic, high-intent leads.'
            ],
            (object)[
                'name' => 'Lead Generation', 
                'icon_key' => 'lead',
                'desc' => 'Targeted prospecting and pipeline development, keeping your CRM filled with qualified buyers and motivated clients.'
            ],
            (object)[
                'name' => 'Social Media Management', 
                'icon_key' => 'social',
                'desc' => 'Strategic content creation, community engagement, and brand scaling across Meta, LinkedIn, and modern social platforms.'
            ],
            (object)[
                'name' => 'Digital Marketing', 
                'icon_key' => 'marketing',
                'desc' => 'Comprehensive ad campaigns, funnel optimization, and conversion tracking to maximize your return on ad spend (ROAS).'
            ],
            (object)[
                'name' => 'Email Marketing', 
                'icon_key' => 'email',
                'desc' => 'Automated nurturing sequences, newsletters, and promotional blasts designed to turn cold subscribers into loyal customers.'
            ],
            (object)[
                'name' => 'QuickBooks Management', 
                'icon_key' => 'finance',
                'desc' => 'Precise financial tracking, invoicing, and reconciliation so your books are perfectly balanced and tax-ready all year round.'
            ]
        ];
        
        return view('services', compact('services'));
    }

    public function contact()
    {
        return view('contact');
    }
}