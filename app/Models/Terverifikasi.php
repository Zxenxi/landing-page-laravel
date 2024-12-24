<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terverifikasi extends Model
{
    use HasFactory;

    protected $table = 'terverifikasi'; // Sesuaikan dengan nama tabel yang ada di database

    protected $fillable = ['nama', 'email', 'kritik_dan_saran', 'testimoni'];

    public $timestamps = false; // Sesuaikan dengan kebutuhan
}
