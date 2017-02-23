<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Meeting Booking</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  function changeAdvisor(){
	  var today = new Date();
	  var tomorrow = new Date();
	  tomorrow.setDate(tomorrow.getDate() + 1);
	  today.setHours(0,0,0,0);
	  tomorrow.setHours(0,0,0,0);
	  
	  var selected_date = $("#datepicker").datepicker("getDate");
	  selected_date.setHours(0,0,0,0);
	  var day = selected_date.getUTCDay();
	  if(selected_date < today || selected_date > tomorrow) {
		  if(1 <= day && day <= 4){
			document.getElementById("datepicker").value = "Select today/tomorrow's date";
			document.getElementById("advisor_name").value = "";
		  }else {
			document.getElementById("datepicker").value = "";
			document.getElementById("advisor_name").value = "No Advising on this day";
		  }
	  } else{
		  if(day == 1 || day == 3){
			  document.getElementById("advisor_name").value = "Mr. John Smith";
		  }else if(day == 2 || day == 4){
			  document.getElementById("advisor_name").value = "Mr. Doe";
		  }else {
			  document.getElementById("advisor_name").value = "No Advising on this day";
		  }
	  }
  }
  
  </script>
</head>

<body>
	<div class="title">Meeting Booking System</div>
	<form class="loginbox" action="submit.php" method="post" id="appointment.php">	
		<input type="text" name="student_name" placeholder="Full Name" required>
		<div class="line_separator">
			<i></i>
		</div>
		<input type="text" name="student_id" placeholder="xxx0000" required>
		<div class="line_separator">
			<i></i>
		</div>
		<input type="text" id="datepicker" onchange="changeAdvisor()" name="date" placeholder="mm/dd/yyyy" required>
		<div class="line_separator">
			<i></i>
		</div>
		<input type="text" id="advisor_name" name="advisor_name" readonly>
		<input type="submit" name="Book Appointment"></input>
	</form>
</body>
</html>