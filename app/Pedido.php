<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [];

    public function pagamento () {
        return $this->belongsTo('app\Pagamento', 'pagamento_id', 'id');
    }

    public function rastreamento () {
        return $this->hasOne('app\Rastreamento', 'rastreamento_id', 'id');
    }

    public function user () {
        return $this->belongsTo('app\User', 'user_id', 'id');
    }

    public function produto () {
        return $this->hasMany('app\Produto', 'produto_id', 'id');
    }

}