<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cloudinary Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your Cloudinary settings. These settings are
    | used by the Cloudinary Laravel package to connect to your Cloudinary
    | account and perform various operations.
    |
    */

    'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
    'api_key' => env('CLOUDINARY_API_KEY'),
    'api_secret' => env('CLOUDINARY_API_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | Upload Preset
    |--------------------------------------------------------------------------
    |
    | An upload preset is a set of pre-defined options that you can apply
    | to your uploads. You can create upload presets in your Cloudinary
    | dashboard. If you don't specify a preset, the default options will
    | be used.
    |
    */
    'upload_preset' => env('CLOUDINARY_UPLOAD_PRESET', null),

    /*
    |--------------------------------------------------------------------------
    | Default Upload Options
    |--------------------------------------------------------------------------
    |
    | These options will be used as defaults when uploading files to
    | Cloudinary. You can override these options on a per-upload basis.
    |
    */
    'default_upload_options' => [
        'folder' => 'beauté-naturelle/products',
        'transformation' => [
            ['width' => 800, 'height' => 600, 'crop' => 'limit'],
            ['quality' => 'auto'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Notification URL
    |--------------------------------------------------------------------------
    |
    | If you want to receive notifications when uploads are completed,
    | you can specify a notification URL here.
    |
    */
    'notification_url' => env('CLOUDINARY_NOTIFICATION_URL', null),

];