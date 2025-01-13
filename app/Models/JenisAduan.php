<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAduan extends Model
{
    use HasFactory;

    protected $table = 'jenis_aduan';

    protected $fillable = [
        'code',
        'title',
    ];

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
