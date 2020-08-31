<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $table = 'series';
    public $primaryKey = "id";
    public $timestamps = false;
    protected $guarded = [];
    protected $fillable = ['nome'];

    public function temporadas()
    {
        return $this->hasMany(Temporada::class);
    }

}
