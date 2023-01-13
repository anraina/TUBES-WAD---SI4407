<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    use HasFactory;


    protected $guarded = ['id'];
    // protected $primaryKey = ['id'];
    public function scopeFilter($query){
        
        if(request('search')){ 
            return $query->where('namaWisata', 'like', '%' . request('search') . '%')
            ->orWhere('lokasiWisata', 'like', '%' . request('search') . '%');
        }
    }

    public function pesanan(){
        return $this->hasMany(pesanan::class);
    }
    public function travel_agent(){
        return $this->belongsTo(travel_agent::class);
    }
    public function bundle(){
        return $this->belongsTo(bundle::class);
    }
}
