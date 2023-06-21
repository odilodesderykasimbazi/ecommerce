<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataModel extends CI_Model{


public function delete_bills_data($from, $to)
{
    $connection = $this->load->database('otherdb', TRUE);
         $sql = "DELETE FROM billstb 
                 WHERE date(bill_date) >= ? AND date(bill_date) <= ?";
                 $query = $connection->query($sql, array($from, $to));
			    return $connection->affected_rows();
}


    public function delete_payment_data($from, $to){
                $db = $this->load->database('otherdb', TRUE);
               // SQL to select the data from the production database with query binding
                 $sql = "DELETE FROM collectiontb 
                         WHERE date(payment_date) >= '$from' AND date(payment_date) <= '$to'";
                         return $result = $db->query($sql);
    }
           
	public function delete_top_payers_data($from, $to){
         		$connection = $this->load->database('otherdb', TRUE);
                // SQL to select the data from the production database with query binding
          $sql = "DELETE FROM top_payerstb 
                    WHERE date(payment_date) >= '$from' AND date(payment_date) <= '$to'";
			        $query = $connection->query($sql);
			        return $connection->affected_rows();

		
    }

    public function delete_topdeptors_data($from, $to){
        $db = $this->load->database('otherdb', TRUE);
         // SQL to select the data from the production database with query binding
          $sql = "DELETE FROM top_depttb 
         WHERE date(bill_date) >='$from' AND date(bill_date) <= '$to'";
		 return $result = $db->query($sql);
    }

   

}



?>


