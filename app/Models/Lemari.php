<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lemari extends Model
{
    //definisikan tabel yang akan terhubung dengan model lemari
    protected $table = 'lemari';

    protected $fillable = [
        'nama_lemari', 'deskripsi'
    ];

}
