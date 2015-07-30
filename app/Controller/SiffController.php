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
	}

} 