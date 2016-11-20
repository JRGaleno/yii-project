<?php

class student_courseTest extends WebTestCase
{
	public $fixtures=array(
		'student_courses'=>'student_course',
	);

	public function testShow()
	{
		$this->open('?r=student_course/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=student_course/create');
	}

	public function testUpdate()
	{
		$this->open('?r=student_course/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=student_course/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=student_course/index');
	}

	public function testAdmin()
	{
		$this->open('?r=student_course/admin');
	}
}
