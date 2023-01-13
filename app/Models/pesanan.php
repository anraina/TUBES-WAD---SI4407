<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $primaryKey = ['id'];
    // protected $with = ['wisata', 'bundle', 'travel_agent'];
    public function wisata(){
        return $this->belongsTo(wisata::class);
    }
    public function bundle(){
        return $this->belongsTo(bundle::class);
    }
    public function travel_agent(){
        return $this->belongsTo(travel_agent::class);
    }

}
