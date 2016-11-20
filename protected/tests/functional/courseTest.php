<?php

class courseTest extends WebTestCase
{
	public $fixtures=array(
		'courses'=>'course',
	);

	public function testShow()
	{
		$this->open('?r=course/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=course/create');
	}

	public function testUpdate()
	{
		$this->open('?r=course/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=course/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=course/index');
	}

	public function testAdmin()
	{
		$this->open('?r=course/admin');
	}
}
