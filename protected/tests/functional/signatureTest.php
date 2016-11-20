<?php

class signatureTest extends WebTestCase
{
	public $fixtures=array(
		'signatures'=>'signature',
	);

	public function testShow()
	{
		$this->open('?r=signature/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=signature/create');
	}

	public function testUpdate()
	{
		$this->open('?r=signature/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=signature/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=signature/index');
	}

	public function testAdmin()
	{
		$this->open('?r=signature/admin');
	}
}
