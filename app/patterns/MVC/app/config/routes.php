<?php

return [
    '/' => [
        'controller' => 'main',
        'action'     => 'index'
    ],

    '/account/login' => [
        'controller' => 'account',
        'action'     => 'login'
    ],

    '/account/registration' => [
        'controller' => 'account',
        'action'     => 'registration'
    ],

    '/posts' => [
        'controller' => 'post',
        'action'     => 'posts'
    ],

    '/posts/:postId' => [
        'controller' => 'post',
        'action'     => 'post'
    ]
];
