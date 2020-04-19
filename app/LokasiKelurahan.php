<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class LokasiKelurahan extends Model {

    protected $fillable = ["nama", "lokasi_kotakabs_id"];

    protected $dates = [];

    public static $rules = [
        "nama" => "required",
        "lokasi_kotakabs_id" => "numeric",
    ];

    // Relationships

}
