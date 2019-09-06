<?php
$tel = '03301132499';
$sitename = env('APP_NAME');
$siteloc = 'Manchester';
$sitecountry = 'UK';
$email = env('MAIL_USERNAME');
return [

    //SITE METADATA
    'meta' => [
        'sitename' => $sitename,
        'logoalt' => "$siteloc Taxis Minibus Hire",
        'tel' => $tel,
        'email' => $email,
        'address' => '2 Exchange Quay, Imperial Court,
Manchester,
M5 3EB',
        'fb' => '#',
        'insta' => '#',
        'gplus' => '#',
        'twitter' => '#',
        'url' => env('APP_URL'),
    ]
];
?>