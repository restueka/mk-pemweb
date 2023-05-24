<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelangan extends Model
{
    use SoftDeletes, HasFactory;

    public $table  = 'pelanggan';

    protected $dates = [
        'created_at',
        'update_at',
        'deleted_at',
    ];

    protected $fillable = [
        'pelangganname',
        'email',
        'nomor_pelanggan',
        'umur_pelanggan',
        'jenis_kelamin',
        'alamat',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}