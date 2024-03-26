<?php

namespace App\Models\Basic\Building;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{

    use HasFactory;

    protected $table = 'buildings';

    public function get_building_status()
    {
        return $this->hasone(Building_Status::class, 'id', 'building_status_id');
    }

    public function get_building_type()
    {
        return $this->hasone(Building_Type::class, 'id', 'building_type_id');
    }

    public function get_user_create()
    {
        return $this->hasone(User::class, 'id', 'user_id_create');
    }
    public function get_user_update()
    {
        return $this->hasone(User::class, 'id', 'user_id_update');
    }

    /*     public function get_Last_School_id()
    {
        return $this->hasone(School::class,'id','Last_School_id');
    } */


    protected $fillable = [

        'building_reference',
        'url_address',
        'user_id_create',
        'user_id_update',

        //foreign id and reference
        'building_status_id',
        'building_type_id',
        //'Last_School_id',

        //normal fields

        'city',
        'district',
        'quarter',
        'latitude',
        'longitude',
        'class_count',
        'hall_count',
        'floor_count',
        'sanitary_units_count',
        'lab_count',
        'school_length',
        'school_width',
        'building_area',
        'building_year',
        'is_extend_area',
        'is_sport_area',
        'is_garden_area',
    ];
}
