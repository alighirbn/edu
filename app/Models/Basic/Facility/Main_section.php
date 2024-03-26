<?php

namespace App\Models\Basic\Facility;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_Section extends Model
{
    use HasFactory;
    protected $table = 'main_sections';
    protected $fillable = [
        'main_sections',
        'amount_type_id',
        'amount',
    ];
}
