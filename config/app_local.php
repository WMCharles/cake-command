<?php

use Cake\Database\Connection;

return [

    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),

    'Security' => [
        'salt' => env('SECURITY_SALT', '317bdf9ec6883cac0b89347bafe13c6e15e4276fa1bbbd2bacb722d306d132e1'),
    ],
    'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Sqlserver',
            'persistent' => false,
            'port' => 1433,
            'host' => 'delware-sql.database.windows.net',
            'username' => "delware",
            'password' => "mssql@2022",
            'database' => 'home_db',
            'schema' => 'dbo',
            'prefix' => '',
            'timezone' => 'UTC',
            'quoteIdentifiers' => true,
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,
            'encrypt' => 'no',
            'trustServerCertificate' => 'yes',
            # other configs
        ],

        'delware_db' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Sqlserver',
            'persistent' => false,
            'port' => 1433,

            'host' => 'delware-sql.database.windows.net',
            'username' => "delware",
            'password' => "mssql@2022",
            'database' => 'delware_db',
            'prefix' => '',
            'timezone' => 'UTC',
            'quoteIdentifiers' => true,
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,
            'encrypt' => 'no',
            'trustServerCertificate' => 'yes'
        ],
    ],


    'EmailTransport' => [
        'default' => [
            'className' => 'Smtp',
            'host' => 'smtp.ionos.com',
            'port'      =>  'DELWARE_SMTP_PORT',
            'timeout'   =>  30,
            'username'  => 'noreply@firstadvantageconsulting.com',
            'password'  => 'DELWARE_SMTP_PASSWORD', 'fac@2023',
            'client'    => null,
            'tls'       => true,
            'url'       => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];
