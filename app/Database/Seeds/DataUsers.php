<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataUsers extends Seeder
{
	public function run()
	{
		$users = [
			[

				'id'		=> 1,
				'nama_user'	=> 'Bagas Shidarta',
				'username'  => 'bagas001',
				'password'	=> 'bagas001',
				'level'	    => 1
			],

			[
				'id'		=> 2,
				'nama_user'	=> 'Dainara',
				'username'	=> 'dainara001',
				'password'	=> 'dainara001',
				'level'		=> 3
			],

			[
				'id'		=> 3,
				'nama_user'	=> 'Sheila .M',
				'username'	=> 'sheila001',
				'password'	=> 'sheila001',
				'level'		=> 3
			],

			[
				'id'		=> 4,
				'nama_user'	=> 'Waladun Shalihun',
				'username'	=> 'waladun001',
				'password'	=> 'waladun001',
				'level'		=> 2
			],

			[
				'id'		=> 5,
				'nama_user'	=> 'Utari Pratiwi',
				'username'	=> 'utari001',
				'password'	=> 'utari001',
				'level'		=> 2
			],
			
			[
				'id'		=> 6,
				'nama_user'	=> 'Ajuar Ramanda',
				'username'	=> 'ajuar001',
				'password'	=> 'ajuar001',
				'level'		=> 4
			],

		];

		$this->db->table('users')->insertBatch($users);

	}
}
