<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Loan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'loan_id' 	=> [
				'type' 				=> 'INT',
				'constraint'		=> 11,
				'unsigned' 			=> true,
				'auto_increment' 	=> true
			],
			'loan_name'	=> [
				'type'				=> 'VARCHAR',
				'constraint' 		=> 255,
				'null' 				=> false
			],
			'how_much' => [
				'type' 				=> 'BIGINT',
				'constraint' 		=> 11,
				'null' 				=> false
			],
			'due_date' => [
				'type' 				=> 'DATE',
				'null' 				=> false
			],
			'is_paid' => [
				'type'				=> 'TINYINT',
				'constraint' 		=> 1,
				'null' 				=> false,
				'default' 			=> '0'
			],
			'is_active' => [
				'type'				=> 'TINYINT',
				'constraint' 		=> 1,
				'null'				=> false,
				'default'			=> '1'
			],
			'created_at datetime not null default current_timestamp',
			'updated_at datetime not null default current_timestamp on update current_timestamp',
			'deleted_at datetime null'  
		]);
		$this->forge->addKey('loan_id', true);
        $this->forge->createTable('loans');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('loans');
	}
}
