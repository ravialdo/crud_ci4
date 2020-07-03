<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'kelas' => [
				'type' => 'VARCHAR',
				'constraint' => 30
			],
			'alamat' => [
				'type' => 'TEXT',
				'null' => TRUE
			],
			'created_at' => [
				'type' => 'TIMESTAMP',
				'null' => TRUE
			],
			'updated_at' => [
				'type' => 'TIMESTAMP',
				'null' => TRUE
			]
		]);	
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('siswa');
	}
	
	public function down()
	{
		$this->forge->dropTable('siswa');
	}
}
