<?php
namespace App;

class Main
{
	public function execute()
	{
		$user = new User('joe', 'Scheider');

		print $user->getFullName() . PHP_EOL;
	}
}
