<?php namespace App\Models;
use CodeIgniter\Model;



class AgendaModel extends Model
{

	protected $table = 'agenda';
    protected $primaryKey = 'ID';
	//protected $useAutoIncrement = true;
    protected $allowedFields = ['Nome','Endereco', 'Telefone'];
    protected $validationRules    = [
        'Nome'     => 'max_length[100]',
        'Endereco'         => 'max_length[255]',
        'Telefone'         => 'max_length[30]'       
    ];
	protected $db;
	
	public function funcao_teste(){
		
		//$db = \Config\Database::connect('default');  //versão completa
		//$db = db_connect();	  // versão resumida

		$query = $this->db->query('SELECT * FROM agenda');
		$ret   = $query->getResultArray();
		return $ret;		
	}
}