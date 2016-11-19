<?php

class genderTest extends WebTestCase
{
	public $fixtures=array(
		'genders'=>'gender',
	);

	public function testShow()
	{
		$this->open('?r=gender/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=gender/create');
	}

	public function testUpdate()
	{
		$this->open('?r=gender/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=gender/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=gender/index');
	}

	public function testAdmin()
	{
		$this->open('?r=gender/admin');
	}
}
