<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableFurniture extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'furniture_id'		=> [
				'type'				=> 'INT',
				'constraint'		=> 36,
				'unsigned'			=> TRUE,
				'auto_increment'	=> TRUE
			],
			'nama_item'				=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '255'
			],
			'kode'					=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '255'
			],
			'harga'					=> [
				'type'				=> 'INT',
				'constraint'		=> 250
			],

			'qty'					=> [
				'type'				=> 'INT',
				'constraint'		=> 250
			],

			'tanggal_beli'			=> [
				'type'				=> 'DATE',
			],

			'total'					=> [
				'type'				=> 'INT',
				'constraint'		=> 250
			],

			'kondisi'				=> [
				'type'				=> 'ENUM',
				'constraint'		=> "'BARU','BEKAS'",
			],

			'karyawan_id'			=> [
				'type'				=> 'INT',
				'constraint'		=> 36,
				'unsigned'			=> TRUE,
				'null'				=> TRUE
			]
		]);


		$this->forge->addKey('furniture_id', true);
		$this->forge->addForeignKey('karyawan_id', 'karyawan', 'karyawan_id', 'cascade', 'cascade');
		$this->forge->createTable('furniture', true);
	}

	public function down()
	{
		$this->forge->dropTable('furniture', true);
	}
}
