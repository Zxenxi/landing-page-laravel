<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'testimoni';
    protected $fillable = ['nama', 'email', 'kritik_dan_saran', 'testimoni'];
    
    public $timestamps = false; // Tambahkan baris ini
}
