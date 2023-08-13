<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class AddDepartmentModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        "departmentname" ];
   protected $table="adddepartments";
}
