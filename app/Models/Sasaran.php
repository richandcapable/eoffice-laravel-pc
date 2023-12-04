<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sasaran extends Model
{
    use HasFactory;
    protected $table = 'sasarans';
    protected $fillable = [
        'kode',
        'nama_sasaran',
        'misi',
        'tujuan',
        'indikator_tujuan'
    ];

    // Sasaran memiliki banyak Visi
    public function visis()
    {
        return $this->hasMany(Visi::class);
    }

    // Sasaran memiliki banyak Misi melalui Visi
    public function misis()
    {
        return $this->hasManyThrough(Misi::class, Visi::class);
    }

    // Sasaran memiliki banyak Indikator melalui Misi
    public function indikators()
    {
        return $this->hasManyThrough(Indikator::class, Misi::class);
    }

    // Sasaran memiliki banyak Tujuan melalui Indikator
    public function tujuans()
    {
        return $this->hasManyThrough(Tujuan::class, Indikator::class);
    }

    // Sasaran memiliki banyak IndikatorSasaran melalui Tujuan
    public function indikatorSasarans()
    {
        return $this->hasManyThrough(IndikatorSasaran::class, Tujuan::class);
    }
}
