<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produto';
    public $timestamps = true;

    protected $casts = [
        'preco' => 'float'
    ];

    protected $fillable = [
        'nome_produto',
        'id_categoria',
        'preco',
        'created_at'
    ];

}
