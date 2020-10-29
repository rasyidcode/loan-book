<?php namespace App\Models;

use CodeIgniter\Model;

class LoanModel extends Model
{
	protected $DBGroup 	= 'default';
	
	protected $table  	= 'loans';
	protected $primaryKey = 'loan_id';
	protected $allowedFields = [
		'loan_name', 'how_much', 'due_date', 'is_paid'
	];

	protected $returnType = 'App\Entities\LoanEntity';
	protected $useTimestamps = true;
	protected $useSoftDeletes = true;

	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $validationRules = [];
	protected $validationMessages = [];

	protected $skipValidation = false;
}
