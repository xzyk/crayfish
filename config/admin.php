<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin name 站点标题
    |--------------------------------------------------------------------------
    |
    | This value is the name of laravel-admin, This setting is displayed on the
    | login page.
    |
    */
    'name'                      => '虾閙閙',

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin logo 页面顶部 Logo
    |--------------------------------------------------------------------------
    |
    | The logo of all admin pages. You can also set it as an image by using a
    | `img` tag, eg '<img src="http://logo-url" alt="Admin logo">'.
    |
    */
//    'logo' => '<b>虾閙閙</b> 管理后台',
    'logo'                      => '<b>Crayfish</b> admin',

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin mini logo 页面顶部小 Logo
    |--------------------------------------------------------------------------
    |
    | The logo of all admin pages when the sidebar menu is collapsed. You can
    | also set it as an image by using a `img` tag, eg
    | '<img src="http://logo-url" alt="Admin logo">'.
    |
    */
    'logo-mini'                 => '<b>CF</b>',

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin bootstrap setting 启动文件路径
    |--------------------------------------------------------------------------
    |
    | This value is the path of laravel-admin bootstrap file.
    |
    */
    'bootstrap'                 => app_path('Admin/bootstrap.php'),

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin route settings 路由配置
    |--------------------------------------------------------------------------
    |
    | The routing configuration of the admin page, including the path prefix,
    | the controller namespace, and the default middleware. If you want to
    | access through the root path, just set the prefix to empty string.
    |
    */
    'route'                     => [

        // 路由前缀
        'prefix'     => env('ADMIN_ROUTE_PREFIX', 'admin'),

        // 控制器命名空间前缀
        'namespace'  => 'App\\Admin\\Controllers',

        // 默认中间件列表
        'middleware' => ['web', 'admin'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin install directory 安装目录
    |--------------------------------------------------------------------------
    |
    | The installation directory of the controller and routing configuration
    | files of the administration page. The default is `app/Admin`, which must
    | be set before running `artisan admin::install` to take effect.
    |
    */
    'directory'                 => app_path('Admin'),

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin html title 页面标题
    |--------------------------------------------------------------------------
    |
    | Html title for all pages.
    |
    */
    'title'                     => '虾閙閙管理后台',

    /*
    |--------------------------------------------------------------------------
    | Access via `https` 是否使用 https
    |--------------------------------------------------------------------------
    |
    | If your page is going to be accessed via https, set it to `true`.
    |
    */
    'https'                     => env('ADMIN_HTTPS', false),

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin auth setting 用户认证设置
    |--------------------------------------------------------------------------
    |
    | Authentication settings for all admin pages. Include an authentication
    | guard and a user provider setting of authentication driver.
    |
    | You can specify a controller for `login` `logout` and other auth routes.
    |
    */
    'auth'                      => [

        'controller' => App\Admin\Controllers\AuthController::class,

        'guard' => 'admin',

        'guards' => [
            'admin' => [
                'driver'   => 'session',
                'provider' => 'admin',
            ],
        ],

        'providers'   => [
            'admin' => [
                'driver' => 'eloquent',
                'model'  => Encore\Admin\Auth\Database\Administrator::class,
            ],
        ],

        // 是否展示 保持登录 选项
        'remember'    => true,

        // 登录页面 URL
        'redirect_to' => 'auth/login',

        // 无需认证即可访问的地址.
        'excepts'     => [
            'auth/login',
            'auth/logout',
            '_handle_action_',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin upload setting 文件上传设置
    |--------------------------------------------------------------------------
    |
    | File system configuration for form upload files and images, including
    | disk and upload path.
    |
    */
    'upload'                    => [

        // 对应 filesystem.php 中的 disks
//        'disk' => 'admin',
        'disk'      => 'public',

        // Image and file upload path under the disk above.
        'directory' => [
            'image' => 'images',
            'file'  => 'files',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel-admin database settings 数据库设置
    |--------------------------------------------------------------------------
    |
    | Here are database settings for laravel-admin builtin model & tables.
    |
    */
    'database'                  => [

        // 数据库连接名称
        'connection'             => '',

        // 管理员用户表及模型
        'users_table'            => 'admin_users',
        'users_model'            => Encore\Admin\Auth\Database\Administrator::class,

        // 角色表及模型.
        'roles_table'            => 'admin_roles',
        'roles_model'            => Encore\Admin\Auth\Database\Role::class,

        // 权限表及模型.
        'permissions_table'      => 'admin_permissions',
        'permissions_model'      => Encore\Admin\Auth\Database\Permission::class,

        // 菜单表及模型.
        'menu_table'             => 'admin_menu',
        'menu_model'             => Encore\Admin\Auth\Database\Menu::class,

        // 多对多关联中间表.
        'operation_log_table'    => 'admin_operation_log',
        'user_permissions_table' => 'admin_user_permissions',
        'role_users_table'       => 'admin_role_users',
        'role_permissions_table' => 'admin_role_permissions',
        'role_menu_table'        => 'admin_role_menu',
    ],

    /*
    |--------------------------------------------------------------------------
    | User operation log setting 操作日志设置
    |--------------------------------------------------------------------------
    |
    | By setting this option to open or close operation log in laravel-admin.
    |
    */
    'operation_log'             => [

        'enable'          => true,

        /*
         * 只记录以下类型请求
         */
        'allowed_methods' => ['GET', 'HEAD', 'POST', 'PUT', 'DELETE', 'CONNECT', 'OPTIONS', 'TRACE', 'PATCH'],

        /*
         * Routes that will not log to database.
         * 不记录日志的路由
         *
         * All method to path like: admin/auth/logs
         * or specific method to path like: get:admin/auth/logs.
         */
        'except'          => [
            'admin/auth/logs*',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Indicates whether to check route permission. 路由是否检查权限
    |--------------------------------------------------------------------------
    */
    'check_route_permission'    => true,

    /*
    |--------------------------------------------------------------------------
    | Indicates whether to check menu roles. 菜单是否检查权限
    |--------------------------------------------------------------------------
    */
    'check_menu_roles'          => true,

    /*
    |--------------------------------------------------------------------------
    | User default avatar 管理员默认头像
    |--------------------------------------------------------------------------
    |
    | Set a default avatar for newly created users.
    |
    */
    'default_avatar'            => '/vendor/laravel-admin/AdminLTE/dist/img/user2-160x160.jpg',

    /*
    |--------------------------------------------------------------------------
    | Admin map field provider 地图组件提供商
    |--------------------------------------------------------------------------
    |
    | Supported: "tencent", "google", "yandex".
    |
    */
    'map_provider'              => 'google',

    /*
    |--------------------------------------------------------------------------
    | Application Skin 页面风格
    |--------------------------------------------------------------------------
    |
    | This value is the skin of admin pages.
    | @see https://adminlte.io/docs/2.4/layout
    |
    | Supported:
    |    "skin-blue", "skin-blue-light", "skin-yellow", "skin-yellow-light",
    |    "skin-green", "skin-green-light", "skin-purple", "skin-purple-light",
    |    "skin-red", "skin-red-light", "skin-black", "skin-black-light".
    |
    */
    'skin'                      => 'skin-green-light',

    /*
    |--------------------------------------------------------------------------
    | Application layout 后台布局
    |--------------------------------------------------------------------------
    |
    | This value is the layout of admin pages.
    | @see https://adminlte.io/docs/2.4/layout
    |
    | Supported: "fixed", "layout-boxed", "layout-top-nav", "sidebar-collapse",
    | "sidebar-mini".
    |
    */
    'layout'                    => ['sidebar-mini', 'sidebar-collapse'],

    /*
    |--------------------------------------------------------------------------
    | Login page background image 登录页背景图
    |--------------------------------------------------------------------------
    |
    | This value is used to set the background image of login page.
    |
    */
    'login_background_image'    => '',

    /*
    |--------------------------------------------------------------------------
    | Show version at footer 显示版本
    |--------------------------------------------------------------------------
    |
    | Whether to display the version number of laravel-admin at the footer of
    | each page
    |
    */
    'show_version'              => true,

    /*
    |--------------------------------------------------------------------------
    | Show environment at footer 显示环境
    |--------------------------------------------------------------------------
    |
    | Whether to display the environment at the footer of each page
    |
    */
    'show_environment'          => true,

    /*
    |--------------------------------------------------------------------------
    | Menu bind to permission 菜单绑定权限
    |--------------------------------------------------------------------------
    |
    | whether enable menu bind to a permission
    */
    'menu_bind_permission'      => true,

    /*
    |--------------------------------------------------------------------------
    | Enable default breadcrumb 默认启用面包屑
    |--------------------------------------------------------------------------
    |
    | Whether enable default breadcrumb for every page content.
    */
    'enable_default_breadcrumb' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable/Disable assets minify 压缩资源文件
    |--------------------------------------------------------------------------
    */
    'minify_assets'             => [

        // 不需要被压缩的资源
        'excepts' => [

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Enable/Disable sidebar menu search 启用菜单搜索
    |--------------------------------------------------------------------------
    */
    'enable_menu_search'        => true,

    /*
    |--------------------------------------------------------------------------
    | Alert message that will displayed on top of the page. 顶部警告信息
    |--------------------------------------------------------------------------
    */
    'top_alert'                 => '',

    /*
    |--------------------------------------------------------------------------
    | The global Grid action display class. 表格操作展示样式
    |--------------------------------------------------------------------------
    */
    'grid_action_class'         => \Encore\Admin\Grid\Displayers\DropdownActions::class,

    /*
    |--------------------------------------------------------------------------
    | Extension Directory 扩展所在的目录
    |--------------------------------------------------------------------------
    |
    | When you use command `php artisan admin:extend` to generate extensions,
    | the extension files will be generated in this directory.
    */
    'extension_dir'             => app_path('Admin/Extensions'),

    /*
    |--------------------------------------------------------------------------
    | Settings for extensions. 扩展设置
    |--------------------------------------------------------------------------
    |
    | You can find all available extensions here
    | https://github.com/laravel-admin-extensions.
    |
    */
    'extensions'                => [
        // 新增编辑器配置开始
        'quill' => [
            // If the value is set to false, this extension will be disabled
            'enable' => true,
            'config' => [
                'modules' => [
                    'syntax'  => true,
                    'toolbar' =>
                        [
                            ['size' => []],
                            ['header' => []],
                            'bold',
                            'italic',
                            'underline',
                            'strike',
                            ['script' => 'super'],
                            ['script' => 'sub'],
                            ['color' => []],
                            ['background' => []],
                            'blockquote',
                            'code-block',
                            ['list' => 'ordered'],
                            ['list' => 'bullet'],
                            ['indent' => '-1'],
                            ['indent' => '+1'],
                            'direction',
                            ['align' => []],
                            'link',
                            'image',
                            'video',
                            'formula',
                            'clean'
                        ],
                ],
                'theme'   => 'snow',
                'height'  => '200px',
            ]
        ]
        // 新增编辑器配置结束
    ],

];
