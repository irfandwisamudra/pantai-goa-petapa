<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Kendaraan extends Model
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
    'jenis_kendaraan',
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
   * Relationship to tiket
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function tiket()
  {
    return $this->hasMany(Tiket::class, 'kendaraan_uuid', 'uuid');
  }
}
