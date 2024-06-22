<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Transaksi extends Model
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
        'total_harga',
        'total_bayar',
        'tanggal_transaksi',
        'snap_token',
        'status',
        'status_transaksi_uuid',
        'pengunjung_uuid',
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
            $model->no_transaksi = strtotime(date('Y-m-d')) + $model->count();
        });
    }

    /**
     * Relationship to tiket
     *
     * @return \illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tiket()
    {
        return $this->belongsToMany(Tiket::class, 'transaksi_tikets', 'transaksi_uuid', 'tiket_uuid')->withPivot('no_tiket', 'jumlah', 'tiket_uuid', 'transaksi_uuid')->using(TransaksiTiket::class);
    }

    //   /**
    //    * Relationship to transaksiTiket
    //    *
    //    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //    */
    //   public function transaksiTiket()
    //   {
    //     return $this->hasMany(TransaksiTiket::class, 'transaksi_uuid', 'uuid');
    //   }

    /**
     * Relationship to pengunjung
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengunjung()
    {
        return $this->belongsTo(Pengunjung::class, 'pengunjung_uuid', 'uuid');
    }
}
