<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataKaryawan extends Seeder
{
	public function run()
	{
		$karyawan = [
			[
				'karyawan_id' 	=> 1,
				'nama_karyawan'	=> 'Didit Mulyana',
				'divisi'		=> 'Engineer',
				'jabatan'		=> 'Manager',
				'status'		=> 'AKTIF',
				'tanggalmasuk'	=> '2021-07-03'
			],
			[
				'karyawan_id' 	=> 2,
				'nama_karyawan'	=> 'Dainara',
				'divisi'		=> 'Engineer',
				'jabatan'		=> 'Translator',
				'status'		=> 'AKTIF',
				'tanggalmasuk'	=> '2021-07-03'
			],
			[
				'karyawan_id' 	=> 3,
				'nama_karyawan'	=> 'Sheila M',
				'divisi'		=> 'Engineer',
				'jabatan'		=> 'Translator',
				'status'		=> 'AKTIF',
				'tanggalmasuk'	=> '2021-07-03'
			],
			[
				'karyawan_id' 	=> 4,
				'nama_karyawan'	=> 'Waladun Shalihun',
				'divisi'		=> 'Engineer',
				'jabatan'		=> 'Staff Engginer',
				'status'		=> 'AKTIF',
				'tanggalmasuk'	=> '2021-07-03'
			],
			[
				'karyawan_id' 	=> 5,
				'nama_karyawan'	=> 'Utari Pratiwi',
				'divisi'		=> 'Engineer',
				'jabatan'		=> 'Staff Engginer',
				'status'		=> 'AKTIF',
				'tanggalmasuk'	=> '2021-07-03'
			],
			[
				'karyawan_id' 	=> 6,
				'nama_karyawan'	=> 'Ajuar Amanda',
				'divisi'		=> 'Umum',
				'jabatan'		=> 'General Affair',
				'status'		=> 'AKTIF',
				'tanggalmasuk'	=> '2021-07-03'
			],
			[
				'karyawan_id' 	=> 7,
				'nama_karyawan'	=> 'Bagas',
				'divisi'		=> 'Umum',
				'jabatan'		=> 'Manager HC',
				'status'		=> 'AKTIF',
				'tanggalmasuk'	=> '2021-07-03'
			],
			


		];
		$this->db->table('karyawan')->insertBatch($karyawan);

	}
}
