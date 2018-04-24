<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected	$table      = 'students';
	
	protected	$primaryKey = 'id';
	
	protected	$fillable   = ['name','class','school','department','grades','phone','status','admin','date'];
}
