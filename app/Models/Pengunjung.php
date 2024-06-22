<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pengunjung extends Model
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
    'nama'
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
   * Relationship to user
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function user()
  {
    return $this->hasOne(User::class, 'pengunjung_uuid', 'uuid');
  }

  /**
   * Relationship to guest
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function guest()
  {
    return $this->hasOne(Guest::class, 'pengunjung_uuid', 'uuid');
  }

  /**
   * Relationship to transaksi
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function transaksi()
  {
    return $this->hasMany(Transaksi::class, 'pengunjung_uuid', 'uuid');
  }
}
