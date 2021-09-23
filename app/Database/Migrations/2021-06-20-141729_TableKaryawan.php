<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableKaryawan extends Migration
{
	public function up()
	{

		//list field
		$this->forge->addField([
			'karyawan_id'          	=> [
				'type'           	=> 'INT',
				'constraint'     	=> 36,
				'unsigned'       	=> TRUE,
				'auto_increment' 	=> TRUE
			],
			'nama_karyawan'      	=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100',
			],
			'divisi'      		  	=> [
				'type'           	=> 'VARCHAR',
				'constraint'     	=> '100'
			],
			'jabatan'				=> [
				'type'				=> 'ENUM',
				'constraint'		=> "'Manager','Translator','Staff Engginer', 'General Affair','HC'",
			],
			'status'				=> [
				'type'				=> 'ENUM',
				'constraint'		=> "'AKTIF','OFF'",
			],
			'tanggalmasuk'			=> [
				'type'				=> 'DATE',
			],

		]);
		//primary key
		$this->forge->addKey('karyawan_id', TRUE);
		$this->forge->createTable('karyawan', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('karyawan');
	}
}
