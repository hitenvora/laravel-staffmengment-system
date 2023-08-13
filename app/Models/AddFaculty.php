<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddFaculty extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        "photo","name","department_id","college_id","subject","age","mobile","address"
    ];
   protected $table="addfaculties";
}
