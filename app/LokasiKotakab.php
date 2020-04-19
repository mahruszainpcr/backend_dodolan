<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class LokasiKotakab extends Model {

    protected $fillable = ["lokasi_propinsis_id"];

    protected $dates = [];

    public static $rules = [
        "lokasi_propinsis_id" => "numeric",
    ];

    public $timestamps = false;

    // Relationships

}
