<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Conference;
class Intervenant extends Model
{
   // use HasFactory;
    protected $hidden =['pivot'];
    public $timestamps = true;

    public function conferences()
    {

        return $this->belongsToMany(Conference::class, 'inter_conf','intervenant_id','conference_id','id','id');

    }
}
