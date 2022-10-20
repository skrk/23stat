<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'league_id', 'user_id', 'team', 'birthdate', 'number', 'photo'];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('name', 'like', '%'.request('search').'%');
        }
        if($filters['league_id'] ?? false){
            $query->where('league_id', '=', request('league_id'));
        }
    }

    // Relations To League
    public function League(){
        return $this->belongsTo(League::class, 'league_id');
    }

    // Relations To User
    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    } 
}
