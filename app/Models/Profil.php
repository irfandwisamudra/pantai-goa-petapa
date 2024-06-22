<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Profil extends Model
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
    'nama',
    'deskripsi',
    'alamat',
    'logo',
    'email',
    'alamat',
    'no_telpon'
  ];

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
   * Relationship to profil
   *
   * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function profil()
  {
    return $this->belongsToMany(Profil::class, 'profil_media_sosial', 'profil_uuid', 'media_sosial_uuid');
  }

  public function mediaSosial()
  {
    return $this->belongsToMany(MediaSosial::class, 'profil_media_sosials', 'profil_uuid', 'media_sosial_uuid')->withPivot(['keterangan', 'profil_uuid', 'media_sosial_uuid'])->using(ProfilMediaSosial::class);
  }
}
