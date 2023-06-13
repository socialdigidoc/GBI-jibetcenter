<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'w_reboncel',
    'language' => 'id',
    'name'=> 'Dashboard Reboncel',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        [
            'class' => 'app\components\LanguageSelector',
        ],
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['Guest'], 
        ],
        'request' => [
            'cookieValidationKey' => 'dWTamT6jTvt7jjVhKvsFFfANQH72ewsB',
            'csrfParam' => '_w_reboncel',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-user', 'httpOnly' => true],
            'idParam' => '_id_user',
        ],
        'errorHandler' => [
            'errorAction' =>  'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'session' => [
            'name' => 'reboncel-xxx',
        ],
        'db' => $db,
        'urlManager' => [
            'hostInfo' => 'reboncel.id',
            'class' => 'yii\web\UrlManager',
            'showScriptName' => false,
            'enablePrettyUrl' => true,
            'rules' => [
                            '<alias:treatment|tags|user|layanan-unggulan|artikel|produk|produk-kategori|produk-layanan|produk-packages|produk-favorit>' => '<alias>/index',
                            'ID/<id>' => '/site/idn',
                            'EN/<en>' => '/site/eng',
                            'services/tags/<tags>' => '/site/service',
                            'services/category/<ctgr>' => '/site/service',
                            [
                                'pattern' => 'panelReboncel',
                                'route'   => '/site/login',
                            ],
                            [
                                'pattern' => 'home',
                                'route'   => '/site/index',
                            ],
                            [
                                'pattern' => 'about',
                                'route'   => '/site/about',
                            ],
                            [
                                'pattern' => 'services',
                                'route'   => '/site/service',
                            ],
                            [
                                'pattern' => 'service/<key:(?:[^_\W]|-)+>',
                                'route'   => '/site/detail-service',
                            ],
                            [
                                'pattern' => 'products',
                                'route'   => '/site/product',
                            ],
                            [
                                'pattern' => 'detailProduct/<name:(?:[^_\W]|-)+>',
                                'route'   => '/site/product-detail',
                            ],
                            [
                                'pattern' => 'contact',
                                'route'   => '/site/contact',
                            ],
                            [
                                'pattern' => 'tagservice',
                                'route'   => '/treatment/tag-service',
                            ],
                            [
                                'pattern' => 'promo',
                                'route'   => '/site/promo',
                            ],
                            [
                                'pattern' => 'faq',
                                'route'   => '/site/faq',
                            ],
                            [
                                'pattern' => 'events/<key:(?:[^_\W]|-)+>',
                                'route'   => '/site/read-events',
                            ],
                            [
                                'pattern' => 'shop',
                                'route'   => '/site/shop',
                            ],
                            [
                                'pattern' => 'shop-detail',
                                'route'   => '/site/shop-detail',
                            ],
                            [
                                'pattern' => 'skinsolution',
                                'route'   => '/site/skin-solution',
                            ],
                            [
                                'pattern' => 'story',
                                'route'   => '/site/story',
                            ],
                            [
                                'pattern' => 'technology',
                                'route'   => '/site/history',
                            ],
                            [
                                'pattern' => 'search',
                                'route'   => '/site/search',
                            ],
                            [
                                'pattern' => 'wishlist',
                                'route'   => '/site/wishlist',
                            ],
                        ],
        ],
        'mycomponent' => [
            'class' => 'app\components\MyComponent',
            ],
    ],        
    'params' => $params,
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu',
            'mainLayout' => '@app/views/layouts/main.php',
            'menus' => [
                'user' => null
            ],
        ],
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ]
    ],
    'as access' => [
            'class' => 'mdm\admin\components\AccessControl',
            'allowActions' => [
                //'admin/user/signup',      
                'site/*',      
            ]
        ],

];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
