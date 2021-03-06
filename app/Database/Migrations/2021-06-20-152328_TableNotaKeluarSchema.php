<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableNotaKeluarSchema extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'notakeluar_id'		=> [
				'type'				=> 'INT',
				'constraint'		=> 36,
				'unsigned'			=> TRUE,
				'auto_increment'	=> TRUE
			],
			'kode_nota'				=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100'
			],
			'vendor'				=> [
				'type'				=> 'ENUM',
				'constraint'		=> "'KJB','HSRCC'",
			],
			'nama_barang'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100'
			],
			'jumlah_barang'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100'
			],
			'status_document'				=> [
				'type'				=> 'ENUM',
				'constraint'		=> "'Masuk','Keluar'",
			],
			'tanggal_keluar'		=> [
				'type'				=> 'DATE',
			],
			'karyawan_id'			=> [
				'type'				=> 'INT',
				'constraint'		=> 36,
				'unsigned'			=> TRUE,
				'null'				=> TRUE
			]

		]);

		$this->forge->addKey('notakeluar_id', true);
		$this->forge->addForeignKey('karyawan_id', 'karyawan', 'karyawan_id', 'cascade', 'cascade');
		$this->forge->createTable('notakeluar', true);
	}

	public function down()
	{
		$this->forge->dropTable('notakeluar', true);
	}
}
