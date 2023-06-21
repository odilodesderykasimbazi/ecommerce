<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TpcConctroller extends CI_Controller {
   
   public function __construct() {
      parent::__construct();
      $this->load->helper('url');
   }
   
   public function index() {
         

		//-----Calling functions to check for year and quarter of repective year-----------;
		$quater_start_date = $this->get_current_quater();  
		$current_year = $this->get_current_year();


      $con = $this->load->database('otherdb', TRUE); // Load the database library

      //-----------------Sql to select the total collection for a day----------------------------
      $sql = "SELECT COALESCE(SUM(amount), 0.00) AS total_collection 
                     FROM collectiontb 
                      WHERE DATE(payment_date) = CURDATE()";

                      $query = $con->query($sql);
                      $data['collection'] = ($query->num_rows() > 0) ? $query->row()->total_collection : 0;

      // -----------------Sql to select the total control number per day------------------------------
      $control_numb = "SELECT COALESCE(SUM(amount), 0.00) AS total_received_control_number_today 
                      FROM postadsdb.billstb WHERE DATE(bill_date) = CURDATE()";
                      $query = $con->query($control_numb);

       if ($query !== false) {
               if ($query->num_rows() > 0) {
                       $control_no['control'] = $query->row()->total_received_control_number_today;
   } else {
       $control_no['control'] = 0;
   }
} else {
   // Handle the query execution error
   $control_no['control'] = 0;
   $data['control_no'] = $control_no;

	

      //----------------------------Sql to find the total amount per month-------------------------
      $monthly_collection = "SELECT  COALESCE(SUM(amount), 0.00) AS total_collection_per_month 
                              FROM postadsbd.collectiontb 
                              WHERE MONTH(payment_date) = MONTH(CURDATE())";
                              $query = $con->query($monthly_collection);
                              $monthly_collect['monthlycollection'] = ($query->num_rows() > 0) ? $query->row()->total_collection_per_month : 0;
                              $data['monthly_collect'] = $monthly_collect;

      // Sql to find the total control number for the month
      $monthly_control_query = "SELECT COALESCE(SUM(amount), 0.00) AS total_received_control_number_per_month 
                                FROM postadsbd.billstb 
                                WHERE MONTH(bill_date) = MONTH(CURDATE())";

                                $query = $con->query($monthly_control_query);
                                $monthly_control['month_control'] = ($query->num_rows() > 0) ? $query->row()->total_received_control_number_per_month : 0;
                                $data['monthly_control'] = $monthly_control;

      // Sql to display the service performance per year based on gfs code
      $sql_gfs_code = "SELECT gfs_code, COALESCE(SUM(amount), 0.00) AS collection_per_day
                                 FROM collectiontb WHERE DATE(payment_date) = CURRENT_DATE GROUP BY gfs_code";

                                 $query = $con->query($sql_gfs_code);
                                 $data['gfs_cod_data'] = $query->result();


		//-----------------     Sql to display the gfs_code per three months -------------------------------//
      $sql_per_month = "SELECT gfs_code, service, SUM(amount) As collection_per_threemonths from collectiontb 
		                              WHERE date(payment_date) BETWEEN ".$quater_start_date."  AND CURRENT_DATE()
	                                  group by gfs_code, service ORDER BY collection_per_threemonths, gfs_code DESC LIMIT 15";

                                      $query = $con->query($sql_per_month);
                                      $data['gfs_code_per_month'] = ($query->num_rows() > 0) ? $query->result() : [];


 
		//--------------------geting sum of amount collected per year-------------------------------//
      $sql_gfs_per_year = "SELECT gfs_code,service, COALESCE(SUM(amount), 0.00) AS collection_per_year 
                                   FROM collectiontb c INNER JOIN region r ON c.region = r.region_name
								  WHERE YEAR(payment_date) = YEAR(CURRENT_DATE) 
                                   GROUP BY region, service,gfs_code ORDER BY collection_per_year DESC LIMIT 10";

                                   $query = $con->query($sql_gfs_per_year);
                                   $data['gfs_cod_data_peryear'] = $query->result();

      //----------------------geting the regional collection per day-----------------------------------------//
      $sqli_region_per_day = "SELECT region, COALESCE(SUM(amount), 0.00) 
		                             AS regional_collection_per_days, region 
                                   FROM postadsbd.collectiontb WHERE DATE(payment_date) = CURDATE()
								   GROUP BY region";

                                       $query = $con->query($sqli_region_per_day);
                                       $data['gfs_region_per_day'] = $query->result();

               
					//--------------------geting Regional collection per three monthes year----------------------------------//
					$regional_three_month = "SELECT c.region, COALESCE(SUM(c.amount), 0.00) AS region_collection_per_threemonths
				                          	FROM collectiontb c INNER JOIN region r ON c.region= r.region_name
				                             WHERE date(payment_date) BETWEEN ".$quater_start_date."  AND CURRENT_DATE()
				                            GROUP BY c.region ORDER BY c.region,region_collection_per_threemonths DESC";
											$query = $con->query($regional_three_month);
											$data['regianal_month'] = $query->result();	



	                       //---------------Getting regional collection payers per year-------------------------------------------//
					$region_data_per_year = "SELECT  c.region, COALESCE(SUM(amount), 0.00) AS regional_collection_per_year 
					                         FROM collectiontb c INNER JOIN region r
											 ON c.region = r.region_name
											WHERE YEAR(payment_date) BETWEEN ".$current_year." AND YEAR(CURRENT_DATE())
											GROUP BY  region DESC";  
													
											$query = $con->query($region_data_per_year);
											$data['regional_per_year'] = $query->result();
    


						//----------------------Geting top payers per day-----------------------------------------------//
					$top_payers_per_day = "SELECT  t.region, client_name, COALESCE(t.amount, 0.0) as total_amount, date(payment_date) 
													  FROM top_payerstb t INNER JOIN region r ON r.region_name = t.region
													  WHERE date(payment_date) = CURDATE() GROUP BY gfs_code ORDER BY total_amount DESC";		
													  $query = $con->query($top_payers_per_day);
													  $data['top_payers_per_day'] = $query->result();

													
					//---------------------Top payers per htree month--------------------------------------------------------------//
					$top_payrs_per_month = "SELECT t.region, t.client_name, COALESCE(t.amount, 0.0) as total_amount, 
					                         date(t.payment_date) as pyment_date 
							                FROM top_payerstb t INNER JOIN region r ON r.region_name = t.region
											WHERE date(payment_date) BETWEEN ".$quater_start_date."  AND CURRENT_DATE()
							                GROUP BY region,gfs_code ORDER BY gfs_code  DESC LIMIT 10";
													
											$query=$con->query($top_payrs_per_month);
											$data['moth_top_payers'] = $query->result();
					
                  //------------------Geting top payers per year-------------------------------------------------------//
					$top_payers_per_year = "SELECT t.region, t.client_name, COALESCE(t.amount, 0.0) 
								               as total_amount, date(t.payment_date) as pyment_date 
								               FROM top_payerstb t  
													INNER JOIN region r
													 ON r.region_name = t.region 
													 WHERE YEAR(payment_date) BETWEEN ".$current_year." AND YEAR(CURRENT_DATE())
													 ORDER BY total_amount DESC LIMIT 10";
													$query = $con->query($top_payers_per_year);
													$data['top_payers'] = $query->result();
							
													

					//-------------- present data to view with the $data[]-----------------------------------------
													$this->load->view('tpc_dashboard', $data);		
   }

}
						public function get_current_quater(){
								$current_month = date("n");;
								$current_year = date('Y');
								
								if ($current_month >= 7 && $current_month <= 9) {
									$current_quater_start_date = $current_year."-"."07-01";
								} elseif ($current_month >= 10 && $current_month <= 12) {
									$current_quater_start_date = $current_year."-"."10-01";
								} elseif ($current_month >= 1 && $current_month <= 3) {
									$current_quater_start_date = $current_year."-"."01-01";
								} elseif ($current_month >= 4 && $current_month <= 6) {
									$current_quater_start_date = $current_year."-"."04-01";
								}
							return $current_quater_start_date;
						}

						public function get_current_year(){
							
							$current_month = date("n");;
							$current_year = date('Y');
							
							if ($current_month >= 7 && $current_month <= 12) {
									$current_year_start_date = $current_year."-"."07-01";

							} elseif ($current_month >= 01 && $current_month <= 06) {
								$current_year_date = $current_year-1;
								$current_year_start_date = $current_year_date."-"."07-01";
							} 	  

							return $current_year_start_date;
}



}   




?>
