<?php

/*
|--------------------------------------------------------------------------
| Real Estate Services
|--------------------------------------------------------------------------
|
| Content for /real-estate-virtual-assistants and each service detail page
| (/real-estate-virtual-assistants/{slug}). 'core' => true services appear
| as large cards at the top; the rest appear under "More Services".
| 'mock' picks the illustration in resources/views/partials/re-mockups.
|
| Video Editing: add client videos to 'videos' to show them on that page.
| Each entry: ['title' => '...', 'url' => 'https://www.youtube.com/embed/VIDEO_ID']
| (YouTube/Vimeo embed URL) or ['title' => '...', 'file' => 'videos/clip.mp4']
| (a file placed in public/videos). Only add videos the client has approved.
|
*/

return [

    'social-media-management' => [
        'core' => true,
        'mock' => 'social',
        'title' => 'Social Media Management',
        'short' => 'Consistent, on-brand posts that keep you top of mind with buyers and sellers.',
        'description' => 'Your assistant plans, designs and schedules your social media so you post consistently without spending your evenings on it. Content is built around your listings, your market and your brand, and every post goes out on schedule.',
        'includes' => ['Monthly content calendar', 'Just Listed / Just Sold / Open House graphics', 'Captions and hashtags', 'Scheduling on Instagram, Facebook and LinkedIn', 'Replying to comments and messages', 'Monthly performance summary'],
    ],

    'backend-operations' => [
        'core' => true,
        'mock' => 'calendar',
        'title' => 'Backend Operations',
        'short' => 'Inbox, calendar, documents and daily admin handled so nothing slips.',
        'description' => 'The day-to-day admin that keeps your business running: inbox, calendar, paperwork and follow-ups. Your assistant works in your tools, keeps your schedule tight and gives you a clear daily update.',
        'includes' => ['Inbox and calendar management', 'Showing and appointment scheduling', 'Document preparation and filing', 'Vendor and client coordination', 'Daily task list and reminders', 'Expense and receipt tracking'],
    ],

    'crm-management' => [
        'core' => true,
        'mock' => 'crm',
        'title' => 'CRM Management',
        'short' => 'A clean, up-to-date CRM where every lead sits in the right stage.',
        'description' => 'A CRM only works when it is kept up to date. Your assistant sets up your pipeline, cleans your contacts and keeps notes, tags and follow-up tasks current, so you always know who to call next.',
        'includes' => ['Pipeline and stage set-up', 'Contact import, clean-up and de-duplication', 'Tags, notes and follow-up tasks', 'Automated follow-up sequences', 'Lead source tracking', 'Weekly pipeline report'],
    ],

    'cold-calling' => [
        'core' => true,
        'mock' => 'dialer',
        'title' => 'Cold Calling & ISA',
        'short' => 'Prospecting calls that turn lists into booked appointments on your calendar.',
        'description' => 'Your inside sales assistant calls your leads and prospect lists, qualifies interest and books appointments directly on your calendar. Calls follow US rules: numbers are checked against the Do Not Call list and opt-outs are honored.',
        'includes' => ['Calling expired, FSBO, past-client and sphere lists', 'Lead qualification with your script', 'Appointment booking on your calendar', 'Do Not Call list checks', 'Call notes logged in your CRM', 'Daily calling report'],
    ],

    'mls-listing-management' => [
        'core' => true,
        'mock' => 'listing',
        'title' => 'MLS Listing Management',
        'short' => 'Listings entered accurately, kept updated and supported from launch to sold.',
        'description' => 'Your assistant prepares and maintains your listings so they go live quickly and stay accurate, and keeps sellers informed with regular updates.',
        'includes' => ['MLS listing input and updates', 'Listing descriptions and photo ordering', 'Scheduling photographers and showings', 'Showing feedback collection', 'Price change and status updates', 'Weekly seller reports'],
    ],

    'transaction-coordination' => [
        'core' => true,
        'mock' => 'transaction',
        'title' => 'Transaction Coordination',
        'short' => 'Every deadline tracked from accepted offer to closing day.',
        'description' => 'From signed contract to closing, your coordinator tracks each date and document, keeps everyone on the same page and updates your clients, so deals close smoothly.',
        'includes' => ['Contract-to-close timeline tracking', 'Coordination with lender, title and the other agent', 'Collecting signatures and documents', 'Inspection and appraisal scheduling', 'Client status updates', 'Closing checklist and file completion'],
    ],

    'video-editing' => [
        'core' => true,
        'mock' => 'video',
        'title' => 'Video Editing',
        'short' => 'Listing tours, Reels and market updates edited and ready to post.',
        'description' => 'Send your raw clips and get back polished videos sized for each platform: listing tours, short Reels, client stories and market updates, with captions, music and your branding.',
        'includes' => ['Listing tour videos', 'Reels, TikTok and Shorts editing', 'Captions and on-screen text', 'Branded intros and outros', 'Music and color correction', 'Sizing for every platform'],
        'videos' => [
            // ['title' => 'Listing tour', 'url' => 'https://www.youtube.com/embed/VIDEO_ID'],
        ],
    ],

    'email-marketing' => [
        'core' => true,
        'mock' => 'email',
        'title' => 'Email Marketing',
        'short' => 'Newsletters and drip campaigns that keep your database warm.',
        'description' => 'Stay in touch with your whole database without writing every email yourself. Your assistant writes, designs and sends newsletters and follow-up campaigns, and tracks who engages.',
        'includes' => ['Monthly newsletters', 'New listing and open house emails', 'Drip campaigns for new leads', 'List segmentation and clean-up', 'Unsubscribe and compliance handling', 'Open and click reporting'],
    ],

    'website-management' => [
        'core' => false,
        'mock' => 'website',
        'title' => 'Website Design & Management',
        'short' => 'A fast, professional agent website that turns visitors into leads.',
        'description' => 'We build new agent websites or take over your existing one: updates, listings, lead forms and speed, so your site keeps working for you.',
        'includes' => ['New website design', 'Updates to your existing site', 'Listing and IDX pages', 'Lead capture forms', 'Speed and security maintenance', 'Monthly backups'],
    ],

    'seo' => [
        'core' => false,
        'mock' => 'seo',
        'title' => 'SEO Management',
        'short' => 'Help local buyers and sellers find your website on Google.',
        'description' => 'Improve how your website shows up in local search with keyword research, on-page improvements, content and citations. Rankings depend on many factors, so we report progress monthly.',
        'includes' => ['Local keyword research', 'On-page SEO fixes', 'Neighborhood and blog content', 'Local citations', 'Technical SEO checks', 'Monthly ranking report'],
    ],

    'google-business-profile' => [
        'core' => false,
        'mock' => 'gmb',
        'title' => 'Google Business Profile',
        'short' => 'An optimized, active Google profile that wins local trust.',
        'description' => 'Your Google Business Profile is often the first thing local clients see. We optimize it and keep it active with posts, photos and review replies.',
        'includes' => ['Profile set-up and optimization', 'Weekly Google posts', 'Photo updates', 'Review requests and replies', 'Q&A management', 'Monthly insights summary'],
    ],

    'lead-capture' => [
        'core' => false,
        'mock' => 'form',
        'title' => 'Lead Capture & Follow-Up',
        'short' => 'Forms and landing pages that capture leads, plus fast follow-up.',
        'description' => 'Landing pages and forms such as home valuation and buyer guides capture new leads, and your assistant follows up fast and adds them to your CRM.',
        'includes' => ['Home valuation and buyer landing pages', 'Lead forms connected to your CRM', 'Same-day follow-up', 'Re-engaging past and cold leads', 'Appointment booking', 'Lead source reporting'],
    ],

];
