<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductionController extends CI_Controller
{   
	public function __constructor(){
		parent::__construct();
		$this->load->model('ProductionModel');
		$this->load->model('DataModel');

	}
    public function update_daily()
    {
        $from = date('Y-m-d', strtotime('-300 days'));
        $to = date('Y-m-d', strtotime('-1 days'));

        try {
            $this->bills_data($from, $to);
            $this->payment_data($from, $to);
		    $this->top_payers_data($from, $to);
            $this->top_deptors_data($from, $to);
                   } catch (\Exception $e) {
            // Handle exception
            echo 'An error occurred: ' . $e->getMessage();
        }
    }

    public function update_minutes()
    {
        $from = date('Y-m-d');
        $to = date('Y-m-d');

        try {
            $this->bills_data($from, $to);
            $this->payment_details($from, $to);
            $this->top_deptors_data($from, $to);
            $this->top_payers_data($from, $to);
        } catch (\Exception $e) {
            // Handle exception
            echo 'An error occurred: ' . $e->getMessage();
        }
    }

public function bills_data($from, $to)
{
    try {
        $this->load->model('ProductionModel');
        $result = $this->ProductionModel->get_bill_data($from, $to);

        if ($result !== false) {
            $destinationDB = $this->load->database('otherdb', TRUE); // Load the destination database
           // echo "DATA INSERTED TO THE DATABASE";
            $this->load->model('DataModel');
            $deletedRows = $this->DataModel->delete_bills_data($from, $to);

            if ($deletedRows >= 0) {
                 $builder = $destinationDB->insert_batch('billstb', $result);
    
                 if ($builder) {
                     log_message('info', 'Data updated successfully');
                 } 
				 else {
                     log_message('error', 'Failed to update data');
                }
            } 
			else {
                log_message('error', 'Failed to delete data');
            }
        } 
		else {
            log_message('error', 'Data not available or failed to delete');
        }
    } 
	catch (\PDOException $e) {
        // Handle database exception
        log_message('error', 'Database error occurred: ' . $e->getMessage());
    } 
	catch (\Exception $e) {
        // Handle other exceptions
        log_message('error', 'An error occurred: ' . $e->getMessage());
    }
}
    public function payment_data($from, $to)
    {
        try {
			
             // Load the destination database
			 $this->load->model('ProductionModel');
			$payment_data = $this->ProductionModel->payment_data($from, $to);
			if($payment_data != false){
               
				$destinationDB = $this->load->database('otherdb', TRUE);
				$this->load->model('DataModel');
				$deleted_rows = $this->DataModel->delete_payment_data($from, $to);
				
				if ($deleted_rows >= 0) {
					$builder = $destinationDB->insert_batch('collectiontb', $payment_data);
				        
				 	if ($builder) {
						log_message('info', 'Data updated successfully');
					} 
					else {
						log_message('error', 'Failed to update data');
				   }
			   } 
			   else {
				   log_message('error', 'Failed to delete data');
			   }
		   } 
		   else {
			   log_message('error', 'Data not available or failed to delete');
		   }
	   } 
	   catch (\PDOException $e) {
		   // Handle database exception
		   log_message('error', 'Database error occurred: ' . $e->getMessage());
	   } 
	   catch (\Exception $e) {
		   // Handle other exceptions
		   log_message('error', 'An error occurred: ' . $e->getMessage());
	   }

}


public function top_payers_data($from, $to)
    {
        try {
			
             // Load the destination database
			 $this->load->model('ProductionModel');
			$top_payer_data = $this->ProductionModel->top_payers_data($from, $to);
			if($top_payer_data != false) {
               
				$destinationDB = $this->load->database('otherdb', TRUE);
				$this->load->model('DataModel');
 				$deleted_rows = $this->DataModel->delete_top_payers_data($from, $to);
								
				if ($deleted_rows >= 0) {
				         $builder = $destinationDB->insert_batch('top_payerstb', $top_payer_data);
				        
				 	if ($builder) {
						log_message('info', 'Data updated successfully');
					} else {
						log_message('error', 'Failed to update data');
				   }
			   } 
			   else {
				   log_message('error', 'Failed to delete data');
			   }
		   } 
		   else {
			   log_message('error', 'Data not available or failed to delete');
		   }
	   }
	    catch (\PDOException $e) {
		   // Handle database exception
		   log_message('error', 'Database error occurred: ' . $e->getMessage());
	   } 
	   catch (\Exception $e) {
		   // Handle other exceptions
		   log_message('error', 'An error occurred: ' . $e->getMessage());
	   }

}

public function top_deptors_data($from, $to)
    {
        try {
			
             // Load the destination database
			 $this->load->model('ProductionModel');
			$top_dept_data = $this->ProductionModel->topdeptors_data($from, $to);
			if($top_dept_data != false) {
               
				$destinationDB = $this->load->database('otherdb', TRUE);
				$this->load->model('DataModel');
 				$deleted_rows = $this->DataModel->delete_topdeptors_data($from, $to);
								
				if ($deleted_rows >= 0) {
				        $builder = $destinationDB->insert_batch('top_depttb', $top_dept_data);
				        
				 	if ($builder) {
						log_message('info', 'Data updated successfully');
					} else {
						log_message('error', 'Failed to update data');
				   }
			   } 
			   else {
				   log_message('error', 'Failed to delete data');
			   }
		   } 
		   else {
			   log_message('error', 'Data not available or failed to delete');
		   }
	   } 
	   catch (\PDOException $e) {
		   // Handle database exception
		   log_message('error', 'Database error occurred: ' . $e->getMessage());
	   } 
	   catch (\Exception $e) {
		   // Handle other exceptions
		   log_message('error', 'An error occurred: ' . $e->getMessage());
	   }

}

	public function load_total_collection()
{
         $con = $this->load->database('otherdb', TRUE);


	                    $start_date = '2022-07-01';
						$current_date = date('Y-m-d');
						$quarters = ['Q1', 'Q2', 'Q3', 'Q4'];
						$start_date = DateTime::createFromFormat('Y-m-d', $start_date);
						$current_date = DateTime::createFromFormat('Y-m-d', $current_date);
						$interval = $start_date->diff($current_date);
						$quarter_diff = (($interval->format('%y') * 12) + $interval->format('%m')) / 3;
						$current_quarter = $quarters[(int)$quarter_diff];

	                    $top_payrs_per_month = "SELECT  t.region, client_name, COALESCE(t.amount, 0.0) as total_amount, date(payment_date) 
	                    FROM top_payerstb t INNER JOIN region r ON r.region_name = t.region
	                    WHERE date(payment_date) = CURDATE() GROUP BY gfs_code ORDER BY total_amount DESC";

			            //  $query=$con->query($top_payrs_per_month);
			            //  $data['moth_top_payers'] = $query->result();

						//  $sql = "SELECT t.region, t.client_name, COALSCE(t.amount, 0.0) as tota_amount 
		                //             date(t.payment_date) as pyment_date FROM top_payerstb t INNER JOIN region r
				        //             ON r.region_name = t.region
				        //             WHERE date(t.payment_date) BETWEEN YEAR('2022-07-01')";

				        //             $query = $con->query($sql);
				        //           $data['top_payers'] = $query->result();
                        //            var_dump($data);
						
						

    // $this->load->view('data_view', $data);
}

	
}

