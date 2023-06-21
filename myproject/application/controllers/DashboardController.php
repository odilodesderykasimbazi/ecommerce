<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductionController extends CI_Controller
{   

	public function __constructor(){
		 parent::__construct();
		  helper('form', 'url');
	}


//     public function get_today_collection(){
		
// 	$conection = $this->load->database('otherdb', TRUE);
// 	$this->$conection->select('(SELECT SUM(payments.amount) FROM collectiontb');
//    $query = $this->$conection->get('mytable');

//    print_r($query);

//    //$this->load->view('tpc_dashboard', $query);

// 	}

	
    

	public function load_total_collection(){
		$con = $this->load->database('otherdb', TRUE);
		$sql_gfs_code = "SELECT id,gfs_code,COALESCE (SUM(amount),0.00) as collection_per_day
		                     FROM collectiontb WHERE DATE(payment_date) = current_date() GROUP BY gfs_code;";

                        $data['gfs'] = $gfs;
                       $query = $this->$con->query($sql_gfs_code);
                       $gfs['gfs_cod_data'] = $query->result();
					   //$data['gfs'] = $gfs;
		              $this->load->view('data_view', $gfs);
	}

	// public function dataview_dashboard(){
	// 	$this->laod->view('dashboard_view');
	// }
	
}




?>
