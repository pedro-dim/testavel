<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Phone extends Model
{
    use HasFactory;



protected $fillable = [

'number','type','user_id'
];



public function getUser(){

return $this->belongsTo(User::class);

}


public  function scopePhone($query)
{
    return $query->where('user_id', '>', 1);
}




}
