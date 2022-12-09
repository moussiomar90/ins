<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Intervenant;

class Conference extends Model
{
   // use HasFactory;

   protected $hidden =["cat_conf","updated_at","created_at",'pivot'];
    public function intervenants()
    {

        return $this->belongsToMany(Intervenant::class, 'inter_conf','conference_id','intervenant_id', 'id','id');

    }
}
