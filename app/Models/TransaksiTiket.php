<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Str;

class TransaksiTiket extends Pivot
{
  use HasFactory;

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'transaksi_tikets';

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
    'jumlah',
    'status',
    'transaksi_uuid',
    'tiket_uuid'
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
      $model->no_tiket = strtotime(date('Y-m-d')) + $model->count();
      $model->expire_in = date('Y-m-d H:i:s', strtotime('+3 day'));
    });
  }

  /**
   * Relationship to kendaraan
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function tiket()
  {
    return $this->belongsTo(Tiket::class, 'tiket_uuid', 'uuid');
  }
}
