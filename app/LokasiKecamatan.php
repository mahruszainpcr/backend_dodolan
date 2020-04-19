<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class LokasiKecamatan extends Model {

    protected $fillable = ["nama", "kode_pos", "lokasi_kotakabs_id"];

    protected $dates = [];

    public static $rules = [
        "nama" => "required",
        "kode_pos" => "required",
        "lokasi_kotakabs_id" => "numeric",
    ];

    // Relationships

}
