<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */
    'google' => [
        'client_id'     => '794234075741-4uj491ra7n7tdsb2bpr2f226lhlljdri.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect'      => 'http://127.0.0.1:8000/callback/google',

        'drive_folder_id_survey' => env('GOOGLE_DRIVE_FOLDER_ID_SURVEY'),
        'credentials_path' => env('GOOGLE_APPLICATION_CREDENTIALS'),

    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
