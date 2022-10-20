<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo'];

    // Relations With Player
    public function Player(){
        return $this->hasMany(Player::class, 'league_id');
    }
}
