<head>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="apple-icon.png">

<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div align="center" class="logo-image" id="spacetaker">
<img src="venosa_logo.jpg" style="max-width:100%; height:auto !important;">
</div>
<title>Main Menu</title>
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->

<style>
  .navbar {
    display: flex;
    bottom: 0;
    width: 100%;
    padding: 1px;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: whitesmoke;
    margin-bottom: 0px;
    width: 100%;
  }

  li {
    float: left;
  }
  
  li a {
    display: flex;
    color: rgba(0, 0, 0, .65);
    text-align: center;
    padding: 14px 14px;
    background-color: whitesmoke;
    text-decoration: none;
    bottom: 0;
    font-size: 14px;
  }

  a:hover {
    background-color: #007bff;
    color: white;
  }

.inputForm {
	  margin: 5px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: #333;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: #333;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: #007bff;
  color: white;
}

.dropdown-content {
  display: none;
  position: fixed;
  background-color: whitesmoke;
  min-width: 160px;
  max-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: #333;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #007bff;
}

.show {
  display: block;
}
</style>

</head>





<script type="text/javascript">

$(document).ready(function () {
  $('#estimatestbl').DataTable({
	"order": []
  });
  $('.dataTables_length').addClass('bs-select');
});
</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropDownFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>





<body>
<div>
  <h2>	<center>Main Menu<center></h2>
	<div style="background-color: whitesmoke" class="navbar">
        <ul>
			<li style="float:left"><a href="#home">Home</a></li>
			<li style="float:left"><a href="projectInfo.php">Create New Quote</a></li>
			<div class="dropdown">
			<button class="dropbtn" onclick="dropDownFunction()">Estimates
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content" id="myDropdown">
				<a href="#sent">Sent</a>
        <a href="#approved">Approved</a>
        <a href="#active">Active</a>
				<a href="#declined">Declined</a>
        <a href="#inProgress">In Progress</a>
        <a href="#reviewed">Reviewed</a>
        <a href="#notReviewed">Not Reviewed</a>
			</div>
			</div> 
			      <li style="float:right"><a href="logout.php">Logout</a></li>
            <li style="float:right"><a href="#admin">Admin</a></li>
        </ul>
	</div>
</div>
<br>
<div class="container">
<table id="estimatestbl" class="table table-bordered">
    <thead>
      <tr>
      <th>Project Name</th>
      <th>Company</th>
      <th>Items</th>
      <th>Total Cost</th>
      <th>Status</th>
      </tr>
      </thead>
    <tbody>
</div>

<?php
	require('connect.php');

  $statusquery = mysqli_query($connection, "	SELECT project.projectName, Company.company, QuoteStatus.statusName, Item.itemType, Pricing.total
                                              FROM projects project 
                                              LEFT JOIN quotestatus QuoteStatus
                                              ON project.statusID = QuoteStatus.statusID
                                              LEFT JOIN item Item
                                              ON project.projectID = Item.projectID
                                              LEFT JOIN pricing Pricing
                                              ON project.projectID = Pricing.projectID
                                              LEFT JOIN projects company
                                              ON project.projectID = Company.projectID
                                              WHERE 1");

	$emptyarray = array();
	while ($result = mysqli_fetch_array($statusquery, MYSQLI_ASSOC)){
		
    $projectName = $result['projectName'];
    $statusName = $result['statusName'];
    $statusID = $result['StatusID'];
    $item = $result['itemType'];
    $totalPrice = $result['total'];
    $companyName = $result['company'];

			  echo '<tr>';
				echo '<td>'.$projectName.'</td><td>'.$companyName.'</td><td>'.$item.'</td><td>'.$totalPrice.'</td><td>'.$statusName.'</td>';
				echo '</tr>';
		}
	
?>
    </tbody>
  </table>
</div>
			
</body>