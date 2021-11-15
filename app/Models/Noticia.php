<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticia extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'noticias';

    protected $primaryKey = 'id';

    protected $keyType = 'integer';

    public $incrementing = true;

    protected $fillable = [
        'id',
        'noticia_categoria_id',
        'titulo',
        'manchete',
        'noticia',
    ];

    protected $casts = [
        'id' => 'integer',
        'categoria_id' => 'integer',
    ];
}
