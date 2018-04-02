<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('students')->truncate();
//USER A
    	for ($i=1; $i < 6; $i++) { 
    		 Student::create([

				'name'       => '我是轉學考學生'.$i,
				'class'      =>'轉學考',
				'school'     =>'國立台灣大學',
				'department' =>'資工系',
				'phone'      =>'095809081'.$i,
				'status'     =>'N',
				'admin'      =>'張瀚元',
				'date'       =>'2018-2-1'.$i

        	]);
    	}

    	for ($i=1; $i < 6; $i++) { 
    		 Student::create([

				'name'       => '我是工研學生'.$i,
				'class'      =>'工研',
				'school'     =>'國立交通大學',
				'department' =>'電機系',
				'phone'      =>'092693247'.$i,
				'status'     =>'Y',
				'admin'      =>'張瀚元',
				'date'       =>'2018-3-1'.$i

        	]);
    	}

    	for ($i=1; $i < 6; $i++) { 
    		 Student::create([

				'name'       => '我是商研學生'.$i,
				'class'      =>'商研',
				'school'     =>'國立成功大學',
				'department' =>'經濟系',
				'phone'      =>'095818233'.$i,
				'status'     =>'S',
				'admin'      =>'張瀚元',
				'date'       =>'2018-3-2'.$i

        	]);
    	}
//USER B
    	for ($i=1; $i < 6; $i++) { 
    		 Student::create([

				'name'       => '我是轉學考學生'.$i,
				'class'      =>'轉學考',
				'school'     =>'國立大葉大學',
				'department' =>'水壺系',
				'phone'      =>'091111111'.$i,
				'status'     =>'N',
				'admin'      =>'徐大賢',
				'date'       =>'2017-2-1'.$i

        	]);
    	}

    	for ($i=1; $i < 6; $i++) { 
    		 Student::create([

				'name'       => '我是工研學生'.$i,
				'class'      =>'工研',
				'school'     =>'國立玫瑰大學',
				'department' =>'白紙系',
				'phone'      =>'092222222'.$i,
				'status'     =>'Y',
				'admin'      =>'徐大賢',
				'date'       =>'2017-3-1'.$i

        	]);
    	}

    	for ($i=1; $i < 6; $i++) { 
    		 Student::create([

				'name'       => '我是商研學生'.$i,
				'class'      =>'商研',
				'school'     =>'國立經濟大學',
				'department' =>'化妝系',
				'phone'      =>'093333333'.$i,
				'status'     =>'S',
				'admin'      =>'徐大賢',
				'date'       =>'2017-3-2'.$i

        	]);
    	}
    }
}
