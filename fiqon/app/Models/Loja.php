<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;

    protected $fillable = [ 'nome', 'email' ];

    /**
     * Pegar todos os produtos
     */

     public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
