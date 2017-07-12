<?php

return [

    /*
     * Laravel-admin name.
     */
    'name'      => 'Laravel-admin',

    /*
     * Logo in admin panel header.
     */
    'logo'      => '<b>Laravel</b> admin',

    /*
     * Mini-logo in admin panel header.
     */
    'logo-mini' => '<b>La</b>',

    /*
     * Laravel-admin url prefix.
     */
    'prefix'    => 'admin',

    /*
     * Laravel-admin install directory.
     */
    'directory' => app_path('Admin'),

    /*
     * Laravel-admin html title.
     */
    'title'  => 'Admin',

    /*
     * Laravel-admin auth setting.
     */
    'auth' => [
        'driver'   => 'session',
        'provider' => '',
        'model'    => Encore\Admin\Auth\Database\Administrator::class,
    ],

    /*
     * Laravel-admin upload setting.
     */
    'upload'  => [

        'disk' => 'admin',

        'directory'  => [
            'image'  => 'image',
            'file'   => 'file',
        ],

        'host' => 'http://localhost:8000/upload/',
    ],

    /*
     * Laravel-admin database setting.
     */
    'database' => [

        // Database connection for following tables.
        'connection'  => '',

        // User tables and model.
        'users_table' => 'admin_users',
        'users_model' => Encore\Admin\Auth\Database\Administrator::class,

        // Role table and model.
        'roles_table' => 'admin_roles',
        'roles_model' => Encore\Admin\Auth\Database\Role::class,

        // Permission table and model.
        'permissions_table' => 'admin_permissions',
        'permissions_model' => Encore\Admin\Auth\Database\Permission::class,

        // Menu table and model.
        'menu_table'  => 'admin_menu',
        'menu_model'  => Encore\Admin\Auth\Database\Menu::class,

        // Pivot table for table above.
        'operation_log_table'    => 'admin_operation_log',
        'user_permissions_table' => 'admin_user_permissions',
        'role_users_table'       => 'admin_role_users',
        'role_permissions_table' => 'admin_role_permissions',
        'role_menu_table'        => 'admin_role_menu',
    ],

    /*
     * By setting this option to open or close operation log in laravel-admin.
     */
    'operation_log'   => true,

    /*
     * Laravel-admin form fields setting.
     */
    'components' => [
        'button'            => \Encore\Admin\Form\Field\Button::class,
        'checkbox'          => \Encore\Admin\Form\Field\Checkbox::class,
        'color'             => \Encore\Admin\Form\Field\Color::class,
        'currency'          => \Encore\Admin\Form\Field\Currency::class,
        'date'              => \Encore\Admin\Form\Field\Date::class,
        'dateRange'         => \Encore\Admin\Form\Field\DateRange::class,
        'datetime'          => \Encore\Admin\Form\Field\Datetime::class,
        'dateTimeRange'     => \Encore\Admin\Form\Field\DatetimeRange::class,
        'datetimeRange'     => \Encore\Admin\Form\Field\DatetimeRange::class,
        'decimal'           => \Encore\Admin\Form\Field\Decimal::class,
        'display'           => \Encore\Admin\Form\Field\Display::class,
        'divider'           => \Encore\Admin\Form\Field\Divide::class,
        'divide'            => \Encore\Admin\Form\Field\Divide::class,
        'embeds'            => \Encore\Admin\Form\Field\Embeds::class,
        'editor'            => \Encore\Admin\Form\Field\Editor::class,
        'email'             => \Encore\Admin\Form\Field\Email::class,
        'file'              => \Encore\Admin\Form\Field\File::class,
        'hasMany'           => \Encore\Admin\Form\Field\HasMany::class,
        'hidden'            => \Encore\Admin\Form\Field\Hidden::class,
        'id'                => \Encore\Admin\Form\Field\Id::class,
        'image'             => \Encore\Admin\Form\Field\Image::class,
        'ip'                => \Encore\Admin\Form\Field\Ip::class,
        'map'               => \Encore\Admin\Form\Field\Map::class,
        'mobile'            => \Encore\Admin\Form\Field\Mobile::class,
        'month'             => \Encore\Admin\Form\Field\Month::class,
        'multipleSelect'    => \Encore\Admin\Form\Field\MultipleSelect::class,
        'number'            => \Encore\Admin\Form\Field\Number::class,
        'password'          => \Encore\Admin\Form\Field\Password::class,
        'radio'             => \Encore\Admin\Form\Field\Radio::class,
        'rate'              => \Encore\Admin\Form\Field\Rate::class,
        'select'            => \Encore\Admin\Form\Field\Select::class,
        'slider'            => \Encore\Admin\Form\Field\Slider::class,
        'switch'            => \Encore\Admin\Form\Field\SwitchField::class,
        'text'              => \Encore\Admin\Form\Field\Text::class,
        'textarea'          => \Encore\Admin\Form\Field\Textarea::class,
        'time'              => \Encore\Admin\Form\Field\Time::class,
        'timeRange'         => \Encore\Admin\Form\Field\TimeRange::class,
        'url'               => \Encore\Admin\Form\Field\Url::class,
        'year'              => \Encore\Admin\Form\Field\Year::class,
        'html'              => \Encore\Admin\Form\Field\Html::class,
        'tags'              => \Encore\Admin\Form\Field\Tags::class,
        'icon'              => \Encore\Admin\Form\Field\Icon::class,
        'multipleFile'      => \Encore\Admin\Form\Field\MultipleFile::class,
        'multipleImage'     => \Encore\Admin\Form\Field\MultipleImage::class,
        'captcha'           => \Encore\Admin\Form\Field\Captcha::class,
    ],

    /*
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
     */
    'skin'    => 'skin-blue',

    /*
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
     */
    'layout'  => ['sidebar-mini'],

    /*
     * Version displayed in footer.
     */
    'version'   => '1.0',
];
