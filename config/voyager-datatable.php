<?php

return [

    /*
     * The config_key for voyager-datatable package.
     */
    'config_key' => env('VOYAGER_DATATABLE_CONFIG_KEY', 'joy-voyager-datatable'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerDatatable\\Http\\Controllers',
    ],

    /*
     * List of available builders for DataTables.
     * This is where you can register your custom dataTables builder.
     */
    'engines'        => [
        'dataType'   => Joy\VoyagerDatatable\DataTypeDataTable::class,
        // 'eloquent'   => Yajra\DataTables\EloquentDataTable::class,
        // 'query'      => Yajra\DataTables\QueryDataTable::class,
        // 'collection' => Yajra\DataTables\CollectionDataTable::class,
        // 'resource'   => Yajra\DataTables\ApiResourceDataTable::class,
        // 'resource'   => Yajra\DataTables\ApiResourceDataTable::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Filters config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager datatable filters settings
    |
    */
    'filters'        => [
        'hidden'   => [
            'password',
        ]
    ],
    'users'        => [
        'filters' => [
            'hidden'   => [
                'remember_token',
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Quick Edit/Add/Preview config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager datatable quick edit-add-preview settings
    |
    */

    'quick-edit' => [
        /*
        * If enabled for voyager-datatable quick edit package.
        */
        'enabled' => env('VOYAGER_DATATABLE_QUICK_EDIT_ENABLED', true),

        /*
        | Here you can specify for which data type slugs bulk-update is enabled
        | 
        | Supported: "*", or data type slugs "users", "roles"
        |
        */

        'allowed_slugs' => array_filter(explode(',', env('VOYAGER_DATATABLE_QUICK_EDIT_ALLOWED_SLUGS', '*'))),

        /*
        | Here you can specify for which data type slugs bulk-update is not allowed
        | 
        | Supported: "*", or data type slugs "users", "roles"
        |
        */

        'not_allowed_slugs' => array_filter(explode(',', env('VOYAGER_DATATABLE_QUICK_EDIT_NOT_ALLOWED_SLUGS', ''))),
    ],

    'quick-add' => [
        /*
        * If enabled for voyager-datatable quick add package.
        */
        'enabled' => env('VOYAGER_DATATABLE_QUICK_ADD_ENABLED', true),

        /*
        | Here you can specify for which data type slugs bulk-update is enabled
        | 
        | Supported: "*", or data type slugs "users", "roles"
        |
        */

        'allowed_slugs' => array_filter(explode(',', env('VOYAGER_DATATABLE_QUICK_ADD_ALLOWED_SLUGS', '*'))),

        /*
        | Here you can specify for which data type slugs bulk-update is not allowed
        | 
        | Supported: "*", or data type slugs "users", "roles"
        |
        */

        'not_allowed_slugs' => array_filter(explode(',', env('VOYAGER_DATATABLE_QUICK_ADD_NOT_ALLOWED_SLUGS', ''))),
    ],

    'quick-preview' => [
        /*
        * If enabled for voyager-datatable quick preview package.
        */
        'enabled' => env('VOYAGER_DATATABLE_QUICK_PREVIEW_ENABLED', true),

        /*
        | Here you can specify for which data type slugs bulk-update is enabled
        | 
        | Supported: "*", or data type slugs "users", "roles"
        |
        */

        'allowed_slugs' => array_filter(explode(',', env('VOYAGER_DATATABLE_QUICK_PREVIEW_ALLOWED_SLUGS', '*'))),

        /*
        | Here you can specify for which data type slugs bulk-update is not allowed
        | 
        | Supported: "*", or data type slugs "users", "roles"
        |
        */

        'not_allowed_slugs' => array_filter(explode(',', env('VOYAGER_DATATABLE_QUICK_PREVIEW_NOT_ALLOWED_SLUGS', ''))),
    ]
];
