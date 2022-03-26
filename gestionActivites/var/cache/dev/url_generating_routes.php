<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'activity_index' => [[], ['_controller' => 'App\\Controller\\ActivityController::index'], [], [['text', '/activity/']], [], [], []],
    'activity_index_child' => [[], ['_controller' => 'App\\Controller\\ActivityController::indexChild'], [], [['text', '/activity/child']], [], [], []],
    'activity_inscrit' => [['user_id'], ['_controller' => 'App\\Controller\\ActivityController::activityInscrit'], [], [['variable', '/', '[^/]++', 'user_id', true], ['text', '/activity/inscrit']], [], [], []],
    'myActivity_index' => [[], ['_controller' => 'App\\Controller\\ActivityController::index_myActivity'], [], [['text', '/activity/myActivity']], [], [], []],
    'activity_new' => [[], ['_controller' => 'App\\Controller\\ActivityController::new'], [], [['text', '/activity/new']], [], [], []],
    'activity_show' => [['id'], ['_controller' => 'App\\Controller\\ActivityController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activity']], [], [], []],
    'activity_show_child' => [['id'], ['_controller' => 'App\\Controller\\ActivityController::showChild'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activity/child']], [], [], []],
    'myActivity_show' => [['id'], ['_controller' => 'App\\Controller\\ActivityController::showMyActivity'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activity/myActivity']], [], [], []],
    'activity_edit' => [['id'], ['_controller' => 'App\\Controller\\ActivityController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/activity']], [], [], []],
    'activity_delete' => [['id'], ['_controller' => 'App\\Controller\\ActivityController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activity']], [], [], []],
    'activity_register' => [['id'], ['_controller' => 'App\\Controller\\ActivityRegistrationController::edit'], [], [['text', '/register'], ['variable', '/', '[^/]++', 'id', true], ['text', '/registration']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], [], []],
    'pageNotAllowed' => [[], ['_controller' => 'App\\Controller\\SecurityController::notAllowed'], [], [['text', '/notAllowed']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'user_animator_index' => [[], ['_controller' => 'App\\Controller\\admin\\UserAnimatorController::index'], [], [['text', '/admin/']], [], [], []],
    'user_animator_new' => [[], ['_controller' => 'App\\Controller\\admin\\UserAnimatorController::new'], [], [['text', '/admin/new']], [], [], []],
    'user_animator_show' => [['id'], ['_controller' => 'App\\Controller\\admin\\UserAnimatorController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin']], [], [], []],
    'user_animator_edit' => [['id'], ['_controller' => 'App\\Controller\\admin\\UserAnimatorController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin']], [], [], []],
    'user_animator_delete' => [['id'], ['_controller' => 'App\\Controller\\admin\\UserAnimatorController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin']], [], [], []],
];