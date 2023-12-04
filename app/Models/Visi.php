<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{
    use HasFactory;

    protected $table = 'visis';
    protected $primarykey = "id";
    protected $fillable = [
        'visi',
        'sasaran_id',
    ];

    public function sasaran()
    {
        return $this->belongsTo(Sasaran::class);
    }
}
