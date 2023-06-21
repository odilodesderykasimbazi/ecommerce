
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductionModel extends CI_Model
{
       
	   	public function get_bill_data($from, $to)
		{
         
                           $sql = "SELECT b.gfscode as gfs_code, b.region, b.branch, SUM(b.amount) as amount, b.controlno as control_no, 1 as customer_type, 
		                   date(b.tdate) as bill_date
		                   FROM billing b 
		                    WHERE date(b.tdate) >= '$from' AND date(b.tdate) <= '$to'
		                    GROUP BY b.gfscode, b.region, b.branch, date(b.tdate)";

		                   $query = $this->db->query($sql);
		                   $data = $query->result();
		                   return $data;
		
	 }

	public function payment_data($from, $to)
    {
                    $payment_sql = "SELECT b.gfscode as gfs_code, b.region, b.branch, SUM(p.amount) as amount, 
                    date(p.tdate) as payment_date, 1 as customer_type, service
                    FROM billing b 
                    INNER JOIN payments p 
                    ON p.billid = b.billid 
                    WHERE date(p.tdate) BETWEEN '$from' AND '$to'
                    GROUP BY b.gfscode, b.region, b.branch, service, date(p.tdate)";

                    $query = $this->db->query($payment_sql);
                    $payment_data = $query->result();
                    return $payment_data;
     } 


	 public function top_payers_data($from, $to)
	 {
					$toppay_sql = "SELECT b.gfscode as gfs_code, b.region, b.branch, b.item as client_name, 
					p.amount, p.controlno as control_no, p.tdate as payment_date, 1 as customer_type
					FROM billing b 
					INNER JOIN payments p 
					ON p.billid = b.billid 
					WHERE p.tdate >= '$from' AND date(p.tdate) <='$to' 
					ORDER BY p.amount DESC";
 
					 $query = $this->db->query($toppay_sql);
					 $top_payers_data = $query->result(); // Retrieve the query result
 
					 return $top_payers_data;
 }


	public function topdeptors_data($from, $to)
    {

		// SQL to select the data from the production database with query binding
        $topdept_sql = "SELECT b.gfscode as gfs_code, b.region, b.branch, b.item as client_name, b.amount,
                        b.controlno as control_no, b.tdate as bill_date, 1 as customer_type
                       FROM billing b 
                       LEFT JOIN payments p 
                       ON p.billid = b.billid 
                       WHERE b.tdate >=  '$to' AND date(b.tdate) <= '$to' AND p.amount IS NULL
                       ORDER BY b.amount DESC";

                       $query = $this->db->query($topdept_sql);

					   $top_dept_data = $query->result();
                      return $top_dept_data;
    }





}


?>
