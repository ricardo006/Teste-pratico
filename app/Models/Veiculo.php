<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Veiculo extends Model {

    protected $table = 'Veiculos';

    private $id;
    private $placa;
    private $renavam;
    private $modelo;
    private $marca;
    private $ano;
    private $propietario;

    protected $fillable = [
        'placa',
        'renavam',
        'modelo',
        'marca',
        'ano',
        'propietario',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }
}