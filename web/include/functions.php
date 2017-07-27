<?php
/**
 * returns navigation config array
 * vrati konfiguraciu navigacie
 *
 * @return array
 */

function getNavigationConfig(){
    return include 'config/navigation.php';
}

/**
 * vrati konfiguraciu clankov
 */
function getArticlesConfig(){
    return include 'config/articles.config.php';
}

function getQueryParam($key){
    return trim(filter_input(INPUT_GET, $key, FILTER_SANITIZE_STRING));

}

function getPostParam($key){
    return trim(filter_input(INPUT_POST, $key, FILTER_SANITIZE_STRING));

}

function url($key){
    $cfg = getNavigationConfig();
    return $cfg[$key]['href'];
}

function isAuthenticated(){
    return !empty($_SESSION['authenticated']);
}