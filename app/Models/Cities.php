<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'cities';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'country_id', 'lat', 'lng'];
    public $timestamps = true;
    use HasFactory;

    public function country()
    {
        return $this->hasOne(Countries::class, 'id', 'country_id');
    }
}
