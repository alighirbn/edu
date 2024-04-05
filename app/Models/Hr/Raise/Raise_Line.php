<?php

namespace App\Models\Hr\Raise;

use App\Models\Hr\Thanks_Book\Thanks_Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raise_Line extends Model
{
    use HasFactory;
    protected $table = 'raise_line';

    public function get_thanks_book()
    {
        return $this->hasMany(Thanks_Book::class, 'raise_line_id', 'id');
    }

    protected $fillable = [
        'employee_id',
        'job_grade_id',
        'career_stage_id',
        'due_date',
        'bonce_date',
        'promotion_date',
        'stage_date',

    ];
}
