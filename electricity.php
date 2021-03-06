<!DOCTYPE html>

<head>
	<title>Calculate Electricity Bill</title>
</head>

<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' = ' . $result;
    }
}
/**
 * To calculate electricity bill as per unit cost
 */
function calculate_bill($units) {
    $unit_cost_first = 9.00;    //For first 50 units, it will charge Rs 9 per unit
    $unit_cost_second = 12.00;  //For next 50 units, it will charge Rs 12
    $unit_cost_third = 15.00;   //And above it, charges will be 15
    

    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    
    else {
        $temp = (50 * 9) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    return number_format((float)$bill, 2, '.', '');
}

?>

<body style="background-color:#EBDEF0;>
	<div id="page-wrap" align="center">
        <h1><center>CA-Open Source Technologies</center></h1>
        <h1><center>Electricity Bill Calculator</center></h1>
		
		<form action="" method="post" id="quiz-form">            
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />            
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />		
		</form>

		<div>
		    <?php echo '<br />' . $result_str; ?>
        </div>
        <div align="right">
            <h1>By Mukul Kathayat</h1>
        </div>	
	</div>
</body>
</html>