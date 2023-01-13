<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travel_agent extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // protected $fillable = [
    //     'name', 'email', 'password','level','username'
    // ]; //ganti
    
    public function scopeFilter($query){
        
        if(request('search')){ 
            return $query->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('username', 'like', '%' . request('search') . '%');
        }
    }
    public function wisata(){
        return $this->hasMany(wisata::class);
    }
    public function pesanan(){
        return $this->hasMany(pesanan::class);
    }

    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }

}
