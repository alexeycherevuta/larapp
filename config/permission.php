<?php
return [
    'models' => [
        'permission' => Spatie\Permission\Models\Permission::class,
        'role' => Spatie\Permission\Models\Role::class,
    ],
    'table_names' => [
        'roles' => 'roles',
        'permissions' => 'permissions',
        'model_has_permissions' => 'user_has_permissions',
        'model_has_roles' => 'user_has_roles',
        'role_has_permissions' => 'role_has_permissions',
    ],
    'cache_expiration_time' => 60 * 24,
];
