<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/candidat' => [[['_route' => 'candidat_index', '_controller' => 'App\\Controller\\CandidatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidat/entretien' => [[['_route' => 'candidat_entretien', '_controller' => 'App\\Controller\\CandidatController::indexEntretien'], null, ['GET' => 0], null, false, false, null]],
        '/entretien' => [[['_route' => 'entretien', '_controller' => 'App\\Controller\\EntretienController::Entretiennew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\IndexController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\IndexController::homee'], null, null, null, false, false, null]],
        '/registerRecruteur' => [[['_route' => 'app_registerRec', '_controller' => 'App\\Controller\\IndexController::registerRec'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\IndexController::registration'], null, null, null, false, false, null]],
        '/app' => [[['_route' => 'acceuil', '_controller' => 'App\\Controller\\IndexController::index22'], null, ['GET' => 0], null, false, false, null]],
        '/dashboardRecruteur' => [[['_route' => 'dashboard_recruteur', '_controller' => 'App\\Controller\\RecruteurController::recruteurDashboard'], null, ['GET' => 0], null, false, false, null]],
        '/offreEmploi' => [[['_route' => 'offre_emploi', '_controller' => 'App\\Controller\\RecruteurController::offre_emploi'], null, ['GET' => 0], null, false, false, null]],
        '/profileRecruteur' => [[['_route' => 'profile_recruteur', '_controller' => 'App\\Controller\\RecruteurController::profileRecruteur'], null, ['GET' => 0], null, false, false, null]],
        '/gereroffreEmploi' => [[['_route' => 'gererOffre_emploi', '_controller' => 'App\\Controller\\RecruteurController::GererOffre_emploi'], null, ['GET' => 0], null, false, false, null]],
        '/off2' => [[['_route' => 'offrEmploi_creation', '_controller' => 'App\\Controller\\RecruteurController::ajoutoffre'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recruteur/gererrecruteur' => [[['_route' => 'app_gr', '_controller' => 'App\\Controller\\gerer_recruteurController::affiche'], null, null, null, false, false, null]],
        '/recruteur' => [[['_route' => 'recruteur_new', '_controller' => 'App\\Controller\\gerer_recruteurController::new'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/candidat(?'
                    .'|/(?'
                        .'|edit/([^/]++)(*:198)'
                        .'|cv/([^/]++)(*:217)'
                    .')'
                    .'|s(?'
                        .'|Detail/([^/]++)(*:245)'
                        .'|Postule/([^/]++)(*:269)'
                    .')'
                .')'
                .'|/re(?'
                    .'|ponseCandidat/([^/]++)(*:307)'
                    .'|cruteur/(?'
                        .'|edit/([^/]++)(*:339)'
                        .'|delete/([^/]++)(*:362)'
                    .')'
                .')'
                .'|/e(?'
                    .'|ntretien(?'
                        .'|candidat/([^/]++)/([^/]++)(*:414)'
                        .'|/([^/]++)(*:431)'
                    .')'
                    .'|xperience/profissionnelle/(?'
                        .'|([^/]++)(*:477)'
                        .'|delete/([^/]++)/([^/]++)(*:509)'
                    .')'
                .')'
                .'|/p(?'
                    .'|ostuler/([^/]++)(*:540)'
                    .'|lanifierEntretien/([^/]++)(*:574)'
                    .'|rofileCandidat/([^/]++)(*:605)'
                .')'
                .'|/d(?'
                    .'|offre/([^/]++)(*:633)'
                    .'|elete/([^/]++)(*:655)'
                .')'
                .'|/mesEntretiens/([^/]++)(*:687)'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:730)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:761)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:797)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'candidat_edit', '_controller' => 'App\\Controller\\CandidatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        217 => [[['_route' => 'cv_index', '_controller' => 'App\\Controller\\CandidatController::indexcv'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        245 => [[['_route' => 'candidatsDetail', '_controller' => 'App\\Controller\\EntretienController::candidatsDetail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        269 => [[['_route' => 'candidatsPostule', '_controller' => 'App\\Controller\\RecruteurController::candidatPostule'], ['id'], ['GET' => 0], null, false, true, null]],
        307 => [[['_route' => 'reponseCandidat', '_controller' => 'App\\Controller\\EntretienController::reponse'], ['idee'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        339 => [[['_route' => 'recruteur_edit', '_controller' => 'App\\Controller\\gerer_recruteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        362 => [[['_route' => 'recruteur_delete', '_controller' => 'App\\Controller\\gerer_recruteurController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        414 => [[['_route' => 'ajouter_candidatEntretien', '_controller' => 'App\\Controller\\EntretienController::entretiencandidat'], ['id', 'idd'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        431 => [[['_route' => 'interview', '_controller' => 'App\\Controller\\IndexController::interview'], ['ide'], ['GET' => 0], null, false, true, null]],
        477 => [[['_route' => 'experience_profissionnelle_index', '_controller' => 'App\\Controller\\ExperienceProfissionnelleController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        509 => [[['_route' => 'experience_profissionnelle_delete', '_controller' => 'App\\Controller\\ExperienceProfissionnelleController::delete'], ['id', 'idc'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        540 => [[['_route' => 'entretiencan', '_controller' => 'App\\Controller\\IndexController::entretiencan'], ['ido'], ['GET' => 0], null, false, true, null]],
        574 => [[['_route' => 'planifierEntretien', '_controller' => 'App\\Controller\\RecruteurController::planifierEntretien'], ['id'], ['GET' => 0], null, false, true, null]],
        605 => [[['_route' => 'profileCandidat', '_controller' => 'App\\Controller\\RecruteurController::profileCandidat'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        633 => [[['_route' => 'doffre', '_controller' => 'App\\Controller\\IndexController::detail_offre'], ['ido'], ['GET' => 0], null, false, true, null]],
        655 => [[['_route' => 'offree_delete', '_controller' => 'App\\Controller\\RecruteurController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        687 => [[['_route' => 'MesEntretiens', '_controller' => 'App\\Controller\\RecruteurController::entretiensRecruteur'], ['id'], ['GET' => 0], null, false, true, null]],
        730 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        761 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        797 => [
            [['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
