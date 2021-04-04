<?php
return [
    'secret' => env('JWT_SECRET', 'clnTG5nItTGVuMwwk91ffmf2NsW3xgGt'),
    'ttl' => 60,
    'refresh_ttl' => 20160,
    'algo' => 'HS256',
    'user' => 'App\User',
    'identifier' => 'id',
    'required_claims' => ['iss', 'iat', 'exp', 'nbf', 'sub', 'jti'],
    'blacklist_enabled' => env('JWT_BLACKLIST_ENABLED', true),
    'providers' => [
        'user' => 'Tymon\JWTAuth\Providers\User\EloquentUserAdapter',
        'jwt' => 'Tymon\JWTAuth\Providers\JWT\NamshiAdapter',
        'auth' => 'Tymon\JWTAuth\Providers\Auth\IlluminateAuthAdapter',
        'storage' => 'Tymon\JWTAuth\Providers\Storage\IlluminateCacheAdapter',
    ],
];
