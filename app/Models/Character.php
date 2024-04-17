<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'attack', 'defence', 'speed', 'life', 'type_id', 'image'];

    public function type() {
        return $this->belongsTo(Type::class);
    }
    public function items(){
        return $this->belongsToMany(Item::class);
    }

    public function getAbstract($n_char){
        return (strlen($this->description) > $n_char) ? substr($this->description, 0, $n_char) . '...' : $this->description;
    }
}
