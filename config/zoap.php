<?php

return [
    
    // Service configurations.

    'services'          => [
        'helloworld'            => [
            'name'              => 'Hello World',
            'class'             => 'App\SOAP\Helloworld\HelloWorldService',
            'exceptions'        => [
                'Exception'
            ],
            'types'             => [
                'helloworld'           => 'App\SOAP\Types\HelloWorld'
            ],
            'strategy'          => 'AnyType',
            'headers'           => [
                'Cache-Control'     => 'no-cache, no-store'
            ],
            'options'           => []
        ],
        'countries'            => [
            'name'              => 'Countries and cities',
            'class'             => 'App\SOAP\Country\CountryService',
            'exceptions'        => [
                'Exception'
            ],
            'types'             => [
                'country'           => 'App\SOAP\Types\Country',
                'city'              => 'App\Soap\Types\City'
            ],
            'strategy'          => 'AnyType',
            'headers'           => [
                'Cache-Control'     => 'no-cache, no-store'
            ],
            'options'           => []
        ]
    ],

    
    // Log exception trace stack?

    'logging'       => true,

    
    // Mock credentials for demo.

    'mock'          => [
        'user'              => 'test@test.com',
        'password'          => 'tester',
        'token'             => 'tGSGYv8al1Ce6Rui8oa4Kjo8ADhYvR9x8KFZOeEGWgU1iscF7N2tUnI3t9bX'
    ],

    
];
