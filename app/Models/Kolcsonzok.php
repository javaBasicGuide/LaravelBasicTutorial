<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kolcsonzok extends Model
{
    use HasFactory;

    protected $table =  "kolcsonzok";
    protected $primaryKey = "kolcsonzo_id";

    public $timestamps = false;

    protected $fillable =[
        "nev",
        "szuletesi_datum",
    ];
    public function Kolcsonzesek(){
        return $this-> hasMany(Kolcsonzesek::class, "kolcsonzo_id","kolcsonzo_id");
    }
}
