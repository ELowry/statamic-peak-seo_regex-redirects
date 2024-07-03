<?php

return [
    'social_image' => [
        'tries' => env('SOCIAL_IMAGE_TRIES', 3),
        'release_after' => env('SOCIAL_IMAGE_RELEASE_AFTER', 5),
        'node_binary' => env('SOCIAL_IMAGE_NODE_BINARY'),
        'npm_binary' => env('SOCIAL_IMAGE_NPM_BINARY'),
        'queue_name' => env('SOCIAL_IMAGE_QUEUE_NAME', 'default')
    ],
];
