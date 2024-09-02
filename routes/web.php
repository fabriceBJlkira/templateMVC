<?php
/**
 * on ne doit pas ajouter un slash avant chaque route definis
 * comme par exemple: '/index' => 'controller'
 */
$router->get('', "HomeController@index"); // nomController@fonction

