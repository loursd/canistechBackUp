<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiciosModel extends Model
{
	protected $table ='servicios';
	protected $primaryKey ='id_servicio';

	protected $useAutoIncrement=true;


	protected $returnType= 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['nombre_servicio', 'tipo', 'descripcion', 'id_usuario',  'estado'];

	protected $useaTimestamps = false;
	protected $createdField = '' ;
	protected $updatedField= '';
	protected $deletedField = '';

	public function getProductoAll(){
		$db = \Config\Database::connect();
		$builder = $db->table('servicios');
		$builder->select('*');
		$builder->join('nombre_servicio', 'nombre_servicio.id_servicio = servicios.id_servicio');
		$query = $builder->get();
		return $query->getResultArray();
	  }

}  