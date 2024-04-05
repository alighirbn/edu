<?php

namespace App\Models\Hr\Thanks_Book;

use App\Models\Hr\Raise\Raise_Line;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thanks_Book extends Model
{
    use HasFactory;
    protected $table = 'thanks_book';

    public function get_raise_line()
    {
        return $this->belongsTo(Raise_Line::class, 'id', 'raise_line_id');
    }
    protected $fillable = [
        'employee_id',
        'raise_line_id',
        'stage_date',

    ];
}
