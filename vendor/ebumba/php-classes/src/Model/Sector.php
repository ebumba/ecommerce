<?php 
namespace Ebumba\Model;

use \Ebumba\DB\Sql;
use \Ebumba\Model;
use \Ebumba\Mailer;

class Sector extends Model {

	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_sector ORDER BY idsector");

	}


public function save(){

		$sql = new Sql();

		$results = $sql->select("CALL sp_sector_save(:idsector, :dtnome)", array(
			":idsector"=>$this->getidsector(),
			":dtnome"=>$this->getdtnome()
		));

		$this->setData($results[0]);

		Sector::updateFile();
	}

	public function get($idsector)
	{

		$sql = new Sql();

	    $results = $sql->select("SELECT * FROM tb_sector WHERE idsector = :idsector", [
			':idsector'=>$idsector
		]);

		$this->setData($results[0]);

	}

	public function delete()
	{

		$sql = new Sql();

		$sql->query("DELETE FROM tb_sector WHERE idsector = :idsector", [
			':idsector'=>$this->getidsector()
		]);

	}


}
 ?>