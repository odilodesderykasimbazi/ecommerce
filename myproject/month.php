<?php

$top_payrs_per_month = "SELECT region, client_name, COALESCE(amount, 0.0) as total_amount, 
					                        date(payment_date) as pyment_date 
													FROM top_payerstb
					                        WHERE payment_date BETWEEN DATE_SUB(CURRENT_DATE, INTERVAL 2 MONTH) 
													AND CURRENT_DATE ORDER BY total_amount  DESC LIMIT 10";
$starting_date = todate()



?>
