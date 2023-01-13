<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bundle extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // protected $fillable = [
    //     'judulBundle', 'hargaBundle', 'deskripsiBundle', 'tanggalExpBundle'
    // ]; //ganti

    public function scopeFilter($query){
        
        if(request('search')){ 
            return $query->where('judulBundle', 'like', '%' . request('search') . '%');
        }
    }

    public function wisata(){
        return $this->hasMany(wisata::class);
    }
    public function pesanan(){
        return $this->hasMany(pesanan::class);
    }
}
