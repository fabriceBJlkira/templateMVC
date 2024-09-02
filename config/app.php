<?php
return [
    /**
     * configuration pour MYSQL,
     * pour SQLITE juste dbname iany no atao eo
     * dia afaka commentena ny sasany
     */
    'database' => [
        'host' => '127.0.0.1',
        'dbname' => 'nomDatabase', // nomDatabase.db ra ohatra ka SQLITE
        'user' => 'root',
        'password' => '',
    ],
    /**
     * ra mampiasa api
     */
    'FRONTEND_DOMAIN_NAME'=> "http://localhost:3000"
];