<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchHistory extends Model
{
    protected $table = 'search_histories';
    protected $primaryKey = 'id';
    protected $fillable = ['city_id', 'timestamp_history'];
    public $timestamps = true;
    use HasFactory;

    public function city()
    {
        return $this->hasOne(Cities::class, 'id', 'city_id');
    }
}
