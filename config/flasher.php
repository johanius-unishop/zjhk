<?php // config/flasher.php

return [
    'plugins' => [
        'toastr' => [
            'scripts' => [
                '/vendor/flasher/jquery.min.js',
                '/vendor/flasher/toastr.min.js',
                '/vendor/flasher/flasher-toastr.min.js',
            ],
            'styles' => [
                '/vendor/flasher/toastr.min.css',
            ],
            'options' => [
                // Optional: Add global options here
                'newestOnTop' => false,
                'timeOut' => 30000,
                'tapToDismiss' => true,
                'closeButton' => false
            ],
        ],
    ],
];
