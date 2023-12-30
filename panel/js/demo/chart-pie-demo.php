<?php

include_once("../panel/DB.php");

if($_SESSION["usertype"] == "admin"){

$status_count = "SELECT COUNT(`id`), SUM(`inprogress`), SUM(`delivered`) FROM `tbl_couriers`";
$count_result = mysqli_query($connect,$status_count);
if(mysqli_num_rows($count_result)){

$count_data = mysqli_fetch_array($count_result);

if($count_data[0] == 0){
$shipment_count = 0;
$inprogress_count = 0;
$delivery_count = 0;
}
else{ 
$shipment_count = $count_data["COUNT(`id`)"];
$inprogress_count = $count_data["SUM(`inprogress`)"];
$delivery_count = $count_data["SUM(`delivered`)"];
}

}
?>

<script>

  // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Shipment Count", "In Progress Count", "Delivery Count"],
    datasets: [{
      data: [<?php echo $shipment_count ?>, <?php echo $inprogress_count ?>, <?php echo $delivery_count ?>],
      backgroundColor: ['#fd7d43', '#ffd078', '#efca9f'],
      hoverBackgroundColor: ['#fe9043', '#f8ce65', '#fff0fb'],
      hoverBorderColor: "rgba(234, 236, 244, 1)", 
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>

<?php

}

elseif ($_SESSION["usertype"] == "agent") {
  
$check_branch = $_SESSION["branches"];
$status_count = "SELECT COUNT(`id`), SUM(`inprogress`), SUM(`delivered`) FROM `tbl_couriers` WHERE `branches` = '$check_branch'";
$count_result = mysqli_query($connect,$status_count);
if(mysqli_num_rows($count_result)){
  $count_data = mysqli_fetch_array($count_result);

  if($count_data[0] == 0){
  $shipment_count = 0;
  $inprogress_count = 0;
  $delivery_count = 0;
  }
  else{ 
  $shipment_count = $count_data["COUNT(`id`)"];
  $inprogress_count = $count_data["SUM(`inprogress`)"];
  $delivery_count = $count_data["SUM(`delivered`)"];
  }
}
?>
<script>
  
  // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Shipment Count", "In Progress Count", "Delivery Count"],
    datasets: [{
      data: [<?php echo $shipment_count ?>, <?php echo $inprogress_count ?>, <?php echo $delivery_count ?>],
      backgroundColor: ['#fd7d43', '#ffd078', '#efca9f'],
      hoverBackgroundColor: ['#fe9043', '#f8ce65', '#fff3db'],
      hoverBorderColor: "rgba(234, 236, 244, 1)", 
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>

<?php
}
?>