<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'question';


    protected $fillable = [
        'title',
        'message',
        'id_registered_user',
        'vote_number'





    ];
    



}

