<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'w_eonni',
    'language' => 'id',
    'name'=> 'Dashboard Eonni',
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
            'csrfParam' => '_w_eonni',
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
                            '<alias:treatment|tags|user|layanan-unggulan|artikel>' => '<alias>/index',
                            'ID/<id>' => '/site/idn',
                            'EN/<en>' => '/site/eng',
                            'services/tags/<tags>' => '/site/service',
                            'services/category/<ctgr>' => '/site/service',
                            [
                                'pattern' => 'panelEonni',
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
                                'pattern' => 'product/<key:(?:[^_\W]|-)+>',
                                'route'   => '/site/detail-product',
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
                                'pattern' => 'events/<key:(?:[^_\W]|-)+>',
                                'route'   => '/site/read-events',
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
