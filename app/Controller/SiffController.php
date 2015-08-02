<?php

namespace App\Controller;

/**
 * Class SiffController
 * @package App\Controller
 * @author Tobias Maxham <git2015@maxham.de>
 */
class SiffController extends BaseController
{

	public function index()
	{
		$this->lyer('dashboard');
		$this->addToken('headline', 'Hallo Welt');
		$this->addToken('subline', 'An a Sub');


		$this->addVar('items', $this->getItems());
	}

	public function getItems()
	{
		$a = [
			new \App\Breads\Test(),
			new \App\Breads\Test(),
			new \App\Breads\Test(),
			new \App\Breads\Test(),
		];

		$a[0]->firstname = '<b>Leo</b>';
		$a[0]->lastname = '<i>Miller</i>';
		$a[0]->email = 'leo@miller.de';
		$a[0]->phone = '07331 1234';
		$a[0]->location = 'Stadt Alpha';

		$a[1]->firstname = '<b>Fritz</b>';
		$a[1]->lastname = '<i>Wagner</i>';
		$a[1]->email = 'fritz@wagner.de';
		$a[1]->phone = '07331 56789';
		$a[1]->location = 'Stadt Beta';
		return $a;
	}

} 