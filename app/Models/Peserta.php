<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
class Peserta extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "peserta";
    protected $fillable = [
        'mother_name', 'kids_name', 'kids_age', 'student_id_url', 'email',
        'phone', 'instagram','purchase_receipt_url'
    ];

}
