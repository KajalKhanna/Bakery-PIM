<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/user/dashboard' => [[['_route' => 'front_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/user/profile' => [[['_route' => 'front_profile', '_controller' => 'App\\Controller\\DashboardController::profile'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/terms-and-conditions' => [[['_route' => 'page_terms', '_controller' => 'App\\Controller\\HomeController::page_terms'], null, null, null, false, false, null]],
        '/api/list' => [[['_route' => 'api.product_api', '_controller' => 'App\\Controller\\ProductApiController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/product/([^/]++)(*:24)'
                .'|/category/([^/]++)(*:49)'
                .'|/api(?'
                    .'|/list/([^/]++)(*:77)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:112)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:143)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:179)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:225)'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:287)'
                    .'|([A-z0-9_-]*)/(.+)(*:313)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'show_product', '_controller' => 'App\\Controller\\DashboardController::show_product'], ['id'], null, null, false, true, null]],
        49 => [[['_route' => 'show_category', '_controller' => 'App\\Controller\\HomeController::show_category'], ['id'], null, null, false, true, null]],
        77 => [[['_route' => 'api.product_api_show', '_controller' => 'App\\Controller\\ProductApiController::show'], ['id'], null, null, false, true, null]],
        112 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        143 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        179 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        225 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        287 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        313 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
