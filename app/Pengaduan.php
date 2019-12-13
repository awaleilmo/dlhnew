<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pengaduan extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "tanggal",
        "tempat",
        "nama",
        "alamat",
        "notelp",
        "alamatkejadian",
        "jeniskegiatan",
        "namakegiatan",
        "waktu",
        "uraiankejadian",
        "dampak",
        "penyelesaian",
        "namainstansi",
        "tgl",
        "foto",
        "lokasi",
    ];
}
