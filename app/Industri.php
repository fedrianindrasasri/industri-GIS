<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    //
    protected $primaryKey = 'No';
    protected $table = "tb_industri";
    protected $fillable = ['nama','alamat','x', 'y', 'foto'];
}
