<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Book extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
				],
			'judul'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
				],
				'penerbit'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
				],
				'foto'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
				],
			'keterangan' => [
					'type' => 'TEXT',
					'null' => true,
				],
				'created_at' => [
					'type' => 'DATETIME',
				],
				'updated_at' => [
					'type' => 'DATETIME',
				],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('books');
	}

	public function down()
	{
		$this->forge->dropTable('books');
	}
}
