<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;
    protected $table = 'lamaran';
    protected $primaryKey = 'id_lamaran';
    protected $guarded = [];

    public function alumni(){
        return $this->belongsTo(Alumni::class, 'nisn', 'nisn');
    }
    public function lowongan(){
        return $this->belongsTo(Lowongan::class, 'id_lowongan', 'id_lowongan');
    }
}
