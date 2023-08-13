<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class HomeModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=["name","email","password","gender","hobby","phone","photo","cid","sid"];
    protected $table="customers";
    
}
