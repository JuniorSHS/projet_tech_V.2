<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attributions extends Model
{
    protected $table = 'attributions';
    protected $fillable = ['users_id','ordi_id','date','heureDebut','heureFin'];
}
