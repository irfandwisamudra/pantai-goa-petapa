<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Postingan extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'uuid';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul',
        'thumbnail',
        'body',
        'kategori_uuid'
    ];

    /**
     * Indicates if model has constraints
     *
     * @var array
     */
    protected $constraints = ['komentar'];

    /**
     * Check if model has constraints
     *
     * @return boolean
     */
    public function hasConstraints()
    {
        foreach ($this->constraints as $constraints) {
            if ($this->$constraints()->count() > 0) {
                return true;
            }
        }

        return false;
    }

    /**
     * The booting method of the model
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }

    /**
     * Relationship to komentar
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function komentar()
    {
        return $this->belongsToMany(User::class, 'komentars', 'postingan_uuid', 'user_uuid')->withPivot(['body', 'user_uuid', 'postingan_uuid'])->using(Komentar::class);
    }

    /**
     * Relationship to kategori
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_uuid', 'uuid');
    }
}
