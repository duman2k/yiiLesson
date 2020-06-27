<?php

$config = [
    'id' => 'video',
    'basePath' => realpath(__DIR__.'/../'),
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ]
];

return $config;
