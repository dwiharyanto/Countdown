<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>
</head>
<body>
<?php
$date = "Jan 5, 2021 15:37:25";

$jumlah = 5;
for ($i=1;$i<=5;$i++) {
		$row = strval($i);
?>
<p id="<?php echo $row ?>"></p>
<?php
}
?>
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $date ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  var i;
  for (i = 1; i <= <?php echo $jumlah ?>; i++) {
  // Output the result in an element with id="demo"
  document.getElementById(i).innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById(i).innerHTML = "EXPIRED";
  }
 }
}, 1000);
</script>

</body>
</html>
