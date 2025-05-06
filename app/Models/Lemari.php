<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lemari extends Model
{

    use HasFactory;

    //definisikan tabel yang akan terhubung dengan model lemari
    protected $table = 'lemari';

    protected $fillable = [
        'nama_lemari', 'deskripsi'
    ];

}
