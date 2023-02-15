<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueueController extends Controller
{
    
/**
 * Retorna todas as filas existentes no projeto
 *
 *
 * @param Type $var Description
 * @return type
 * @throws conditon
 **/

public function getAll(){


$controllers = require_once base_path('vendor/composer/autoload_classmap.php');
$controllers = array_keys($controllers);
$controllers = array_filter($controllers, function ($controller) {
    return strpos($controller, 'App\Http\Controllers') !== false;
});

$controllers = array_map(function ($controller) {

    return str_replace('App\Http\Controllers\\', '', $controller);
}, $controllers);


foreach ($controllers as $contName){


    echo $contName.'<br>';
}






}


}
