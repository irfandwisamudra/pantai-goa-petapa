<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
  use HasFactory, Notifiable;

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
   * @var array<int, string>
   */
  protected $fillable = [
    'no_telepon',
    'email',
    'password',
    'pengunjung_uuid'
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * Get the attributes that should be cast.
   *
   * @return array<string, string>
   */
  protected function casts(): array
  {
    return [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
    ];
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
   * Relationship to pengunjung
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function pengunjung()
  {
    return $this->belongsTo(Pengunjung::class, 'pengunjung_uuid', 'uuid');
  }

  /**
   * Relationship to komentar
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function komentar()
  {
    return $this->belongsToMany(Postingan::class, 'komentars', 'user_uuid', 'postingan_uuid')->withPivot(['body', 'user_uuid', 'postingan_uuid'])->using(Komentar::class);
  }
}
