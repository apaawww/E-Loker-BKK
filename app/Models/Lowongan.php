<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    protected $table = 'lowongan';
    protected $primaryKey = 'id_lowongan';
    protected $guarded = [];

    public function alumni(){
        return $this->belongsTo(Alumni::class, 'nisn', 'nisn');
    }
    public function admin(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
    public function perusahaan(){
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan', 'id_perusahaan');
    }
}
