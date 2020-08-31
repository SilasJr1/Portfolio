<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    public $table = 'episodios';
    public $primaryKey = "id";
    public $timestamps = false;
    protected $guarded = [];
    protected $fillable = ['numero'];

    public function temporada()
    {
        return $this->belongsTo(Temporada::class);
    }
}
