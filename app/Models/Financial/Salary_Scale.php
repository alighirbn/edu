<?php

namespace App\Models\Financial;

use App\Models\Basic\Employee\Career_Stage;
use App\Models\Basic\Employee\Job_Grade;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary_Scale extends Model
{
    use HasFactory;
    protected $table = 'salary_scales';
    public function get_job_grade()
    {
        return $this->hasone(Job_Grade::class,'id','job_grade_id');
    }
        public function get_career_stage()
    {
        return $this->hasone(Career_Stage::class,'id','career_stage_id');
    }
        protected $fillable = [
            'job_grade_id',
            'career_stage_id',
            'salary',
        ];

}
