<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
    public $timestamps = false;
    public $fillable = ['name','designation'];
}
