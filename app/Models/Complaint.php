<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $table = 'complaints';

    protected $fillable = [
        'user_id',
        'name_customer',
        'number_phone_customer',
        'jenis_aduan_id',
        'catatan',
        'bukti_ss',
        'status_aduan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jenisAduan()
    {
        return $this->belongsTo(JenisAduan::class);
    }
}
