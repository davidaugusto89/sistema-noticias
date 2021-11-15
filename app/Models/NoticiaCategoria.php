<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NoticiaCategoria extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'noticias_categorias';

    protected $primaryKey = 'id';

    protected $keyType = 'integer';

    public $incrementing = true;

    protected $fillable = [
        'id',
        'categoria',
    ];
}
