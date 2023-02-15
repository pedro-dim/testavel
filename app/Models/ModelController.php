<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelController extends Model
{
    use HasFactory;

     
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
        return strpos($controller, 'App\Models') !== false;
    });
    
    $controllers = array_map(function ($controller) {
    
        return str_replace('App\Models\\', '', $controller);
    }, $controllers);
    
    
    foreach ($controllers as $contName){
    
    
        echo $contName.'<br>';
    }
    
    
    
    
    
    
    }
}
