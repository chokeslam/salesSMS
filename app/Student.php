<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected	$table      = 'Students';
	
	protected	$primaryKey = 'id';
	
	protected	$fillable   = ['name','class','school','department','phone','status','admin','date'];
}