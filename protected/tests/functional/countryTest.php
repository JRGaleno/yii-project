<?php

class countryTest extends WebTestCase
{
	public $fixtures=array(
		'countries'=>'country',
	);

	public function testShow()
	{
		$this->open('?r=country/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=country/create');
	}

	public function testUpdate()
	{
		$this->open('?r=country/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=country/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=country/index');
	}

	public function testAdmin()
	{
		$this->open('?r=country/admin');
	}
}
