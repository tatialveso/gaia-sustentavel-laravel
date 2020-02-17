<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [];

    public function loja () {
        return $this->HasOne('app\Loja', 'loja_id', 'id');
    }

    public function pedido () {
        return $this->HasMany('app\Pedido', 'pedido_id', 'id');
    }

    public function uf() {
        return $this->belongsTo('app\UF', 'uf_id', 'id');
    }
}
