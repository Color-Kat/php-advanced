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

    '/posts' => [
        'controller' => 'posts',
        'action'     => 'getPosts'
    ],

    '/posts/:postId' => [
        'controller' => 'posts',
        'action'     => 'getPostById'
    ]
];
