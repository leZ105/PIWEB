<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/chat/bot' => [[['_route' => 'app_chat_bot', '_controller' => 'App\\Controller\\ChatBotController::index'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/commande/back' => [[['_route' => 'app_commande_back_index', '_controller' => 'App\\Controller\\CommandeBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/back/export-pdf' => [[['_route' => 'app_commande_back_export_pdf', '_controller' => 'App\\Controller\\CommandeBackController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/commande/back/new' => [[['_route' => 'app_commande_back_new', '_controller' => 'App\\Controller\\CommandeBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'app_homeBack', '_controller' => 'App\\Controller\\HomeController::indexBack'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'suc_payment', '_controller' => 'App\\Controller\\PaymentController::success'], null, null, null, false, false, null]],
        '/fail' => [[['_route' => 'fail_payment', '_controller' => 'App\\Controller\\PaymentController::fail'], null, null, null, false, false, null]],
        '/resto/back' => [[['_route' => 'app_resto_back_index', '_controller' => 'App\\Controller\\RestoBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/resto/back/new' => [[['_route' => 'app_resto_back_new', '_controller' => 'App\\Controller\\RestoBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/resto/back/export-excel' => [[['_route' => 'app_resto_back_export_excel', '_controller' => 'App\\Controller\\RestoBackController::exportExcel'], null, ['GET' => 0], null, false, false, null]],
        '/resto/back/resto/back/export-pdf' => [[['_route' => 'app_resto_back_export_pdf', '_controller' => 'App\\Controller\\RestoBackController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/resto' => [[['_route' => 'app_resto_index', '_controller' => 'App\\Controller\\RestoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/resto/new' => [[['_route' => 'app_resto_new', '_controller' => 'App\\Controller\\RestoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/chatbot/interact' => [[['_route' => 'app_chatbot', '_controller' => 'App\\Controller\\CommandeController::chat'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/commande/(?'
                    .'|back/([^/]++)(?'
                        .'|(*:36)'
                        .'|/edit(*:48)'
                        .'|(*:55)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:74)'
                        .'|/edit(*:86)'
                        .'|(*:93)'
                    .')'
                    .'|back/([^/]++)/change\\-status/([^/]++)(*:138)'
                .')'
                .'|/resto/(?'
                    .'|back/([^/]++)(?'
                        .'|(*:173)'
                        .'|/edit(*:186)'
                        .'|(*:194)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:214)'
                        .'|/edit(*:227)'
                        .'|(*:235)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:276)'
                    .'|wdt/([^/]++)(*:296)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:342)'
                            .'|router(*:356)'
                            .'|exception(?'
                                .'|(*:376)'
                                .'|\\.css(*:389)'
                            .')'
                        .')'
                        .'|(*:399)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'app_commande_back_show', '_controller' => 'App\\Controller\\CommandeBackController::show'], ['numc'], ['GET' => 0], null, false, true, null]],
        48 => [[['_route' => 'app_commande_back_edit', '_controller' => 'App\\Controller\\CommandeBackController::edit'], ['numc'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        55 => [[['_route' => 'app_commande_back_delete', '_controller' => 'App\\Controller\\CommandeBackController::delete'], ['numc'], ['POST' => 0], null, false, true, null]],
        74 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['numc'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['numc'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        93 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['numc'], ['POST' => 0], null, false, true, null]],
        138 => [[['_route' => 'app_commande_change_status', '_controller' => 'App\\Controller\\CommandeBackController::changeStatus'], ['numc', 'status'], null, null, false, true, null]],
        173 => [[['_route' => 'app_resto_back_show', '_controller' => 'App\\Controller\\RestoBackController::show'], ['idResto'], ['GET' => 0], null, false, true, null]],
        186 => [[['_route' => 'app_resto_back_edit', '_controller' => 'App\\Controller\\RestoBackController::edit'], ['idResto'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        194 => [[['_route' => 'app_resto_back_delete', '_controller' => 'App\\Controller\\RestoBackController::delete'], ['idResto'], ['POST' => 0], null, false, true, null]],
        214 => [[['_route' => 'app_resto_show', '_controller' => 'App\\Controller\\RestoController::show'], ['idResto'], ['GET' => 0], null, false, true, null]],
        227 => [[['_route' => 'app_resto_edit', '_controller' => 'App\\Controller\\RestoController::edit'], ['idResto'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        235 => [[['_route' => 'app_resto_delete', '_controller' => 'App\\Controller\\RestoController::delete'], ['idResto'], ['POST' => 0], null, false, true, null]],
        276 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        296 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        342 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        356 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        376 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        389 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        399 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
