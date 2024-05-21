<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kolcsonzesek extends Model
{
    use HasFactory;

    protected $table = "kolcsonzesek";
    protected $primaryKey = "kolcsonzes_id";

    public $timestamps = false;

    protected $fillable =[
        "kolcsonzo_id",
        "iro",
        "mufaj",
        "cim",
    ];
    public function Kolcsonzok(){
        return $this-> belongsTo(Kolcsonzok::class, "kolcsonzo_id","kolcsonzo_id");
    }
}
