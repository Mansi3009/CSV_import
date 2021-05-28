<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $fillable = ['name','email'];

    /*public static function getAllStudents()
    {
    	$result = DB::table('student')->select('id','name','email')->get()->toArray();
    	return $result;
    }*/
}
