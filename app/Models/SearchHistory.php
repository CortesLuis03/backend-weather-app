<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchHistory extends Model
{
    protected $table = 'search_histories';
    protected $primaryKey = 'id';
    protected $fillable = ['timestamp'];
    public $timestamps = true;
    use HasFactory;
}
