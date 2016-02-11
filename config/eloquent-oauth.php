<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        'facebook' => [
            'client_id' => '1696886703929425',
            'client_secret' => 'ce9529556a4c068ce081e2e6b33ca391',
            'redirect_uri' => 'http://ec2-52-10-0-44.us-west-2.compute.amazonaws.com',
            'scope' => [],
        ],
        'google' => [
            'client_id' => '311447366874-kf7um0arh91tt5mk0m6k51poemjudeik.apps.googleusercontent.com',
            'client_secret' => 'zGNZxMM-HAHMzIdCn_qpYMOy',
            'redirect_uri' => 'https://example.com/your/google/redirect',
            'scope' => [],
        ],
        'github' => [
            'client_id' => 'd892334af06ec30567f3',
            'client_secret' => '0b3d92560552a994d00d3943cca1507fc4f28f64',
            'redirect_uri' => 'http://ec2-52-10-0-44.us-west-2.compute.amazonaws.com',
            'scope' => [],
        ],
        'linkedin' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/linkedin/redirect',
            'scope' => [],
        ],
        'instagram' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/instagram/redirect',
            'scope' => [],
        ],
        'soundcloud' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
            'scope' => [],
        ],
    ],
];
