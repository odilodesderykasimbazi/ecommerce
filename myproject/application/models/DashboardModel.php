<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model{

	public function mySum(){
		$conection = $this->load->database('otherdb', TRUE);


		//$this->$conection->select('(SELECT SUM(amount)');
       $this->$conection->select("SUM(amount) AS collection");
        $this->conection->from("collectiontb");
        $query1 = $this->$conection->get();
        if($query1->num_rows() > 0)
        { 
         $res = $query1->row_array();
         return $res['collection'];
        }
    }


}



?>
