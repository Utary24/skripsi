<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableDocumentMasukSchema extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'documentmasuk_id'		=> [
				'type'				=> 'INT',
				'constraint'		=> 36,
				'unsigned'			=> TRUE,
				'auto_increment'	=> TRUE
			],
			'kode_dokumen'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100'
			],
			'document_type'			=> [
				'type'				=> 'ENUM',
				'constraint'		=> "'BRIDGE','ALIGNMENT','CULVERT','TUNNEL NO.3','SUBGRADE'",
			],
			'document_number'		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100',

			],
			'judul_dokumen'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '100'
			],
			'vendor'				=> [
				'type'				=> 'ENUM',
				'constraint'		=> "'KJB','HSRCC'",
			],
			'bahasa'				=> [
				'type'				=> 'ENUM',
				'constraint'		=> "'ENGLISH & CHINESE','ENGLISH','CHINESE'",
			],

			'status_document'		=> [
				'type'				=> 'ENUM',
				'constraint'		=> "'Masuk','Keluar'",
				'default'			=> 'Masuk'
			],
			'tanggal_masuk'			=> [
				'type'				=> 'DATE',
			],
			'karyawan_id'			=> [
				'type'				=> 'INT',
				'constraint'		=> 36,
				'unsigned'			=> TRUE,
				'null'				=> TRUE
			]
		]);


		$this->forge->addKey('documentmasuk_id', true);
		$this->forge->addForeignKey('karyawan_id', 'karyawan', 'karyawan_id', 'cascade', 'cascade');
		$this->forge->createTable('documentmasuk', true);
	}

	public function down()
	{
		$this->forge->dropTable('documentmasuk', true);
	}
}
