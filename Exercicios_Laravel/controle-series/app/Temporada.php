<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Temporada extends Model
{
    public $table = 'temporadas';
    public $primaryKey = "id";
    public $timestamps = false;
    protected $guarded = [];
    protected $fillable = ['numero'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }

    public function getEpisodiosAssistidos(): Collection
{
    return $this->episodios->filter(function (Episodio $episodio) {
        return $episodio->assistido;
    });
}
}
