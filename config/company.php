<?php

/*
|--------------------------------------------------------------------------
| Company Identity
|--------------------------------------------------------------------------
|
| Single source of truth for the legal name, address and contact details
| shown across the website. The legal name and address must match the
| IRS SS-4 / EIN letter exactly (RingCentral SMS registration checks this).
|
*/

return [

    'brand' => 'Cloud Dextra',

    'legal_name' => 'Cloud Dextra LLC',

    'entity_description' => 'a New Mexico limited liability company',

    'address' => [
        'street' => '1209 Mountain Road Pl NE',
        'suite' => 'Ste R',
        'city' => 'Albuquerque',
        'state' => 'NM',
        'zip' => '87110',
        'country' => 'United States',
    ],

    'phone' => [
        'display' => '+1 (505) 528-9454',
        'tel' => '+15055289454',
    ],

    'whatsapp' => [
        'display' => '+92 312 8958125',
        'link' => 'https://wa.me/923128958125',
    ],

    'email' => 'info@clouddextra.com',

    /*
    | Exact wording shown next to the SMS consent checkbox. This same text is
    | stored with each lead that opts in, as the record of what they agreed to.
    */
    'sms_consent_text' => 'I agree to receive conversational and informational text messages from Cloud Dextra LLC about my inquiry. Message frequency may vary. Message and data rates may apply. Reply STOP to opt out, HELP for help.',

];
