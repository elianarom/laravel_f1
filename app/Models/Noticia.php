<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 *
 *
 * @property int $noticia_id
 * @property string $titulo
 * @property string $descripcion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia query()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereNoticiaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Noticia extends Model
{
    use HasFactory;
    protected $primaryKey = "noticia_id";
    protected $fillable = ['titulo', 'descripcion', 'escuderia_fk', 'portada', 'portada_descripcion'];

    /*protected function precio(): Attribute
    {
        return Attribute::make(
            get: fn ($precio) => $precio / 100,
            set: fn ($precio) => $precio * 100
        );
    }*/

    public function escuderia(): BelongsTo
    {
        return $this->belongsTo(Escuderia::class, 'escuderia_fk', 'escuderia_id');
    }

    public function categorias(): BelongsToMany
    {
        return $this->belongsToMany(Categoria::class, 'noticias_have_categorias', 'noticia_fk', 'categoria_fk', 'noticia_id', 'categoria_id');
    }

}
