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

<div align="center" class="logo-image" id="spacetaker"><a href="mainMenu.php">
<img src="venosa_logo.jpg" style="max-width:100%; height:auto !important;">
</a>
</div>
<title>Order List</title>
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->

<style>
.select-css {
	display: block;
	font-size: 16px;
	font-family: sans-serif;
	font-weight: 700;
	color: #444;
	line-height: 1.3;
	padding: .6em 1.4em .5em .8em;
	width: 100%;
	max-width: 100%;
	box-sizing: border-box;
	margin: 0;
	border: 1px solid #aaa;
	box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
	border-radius: .5em;
	-moz-appearance: none;
	-webkit-appearance: none;
	appearance: none;
	background-color: #fff;
	background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
	  linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
	background-repeat: no-repeat, repeat;
	background-position: right .7em top 50%, 0 0;
	background-size: .65em auto, 100%;
}
.select-css::-ms-expand {
	display: none;
}
.select-css:hover {
	border-color: #888;
}
.select-css:focus {
	border-color: #aaa;
	box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
	box-shadow: 0 0 0 3px -moz-mac-focusring;
	color: #222;
	outline: none;
}
.select-css option {
	font-weight:normal;
}

.buttonShadow:focus {
	border-color: #aaa;
	box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
	box-shadow: 0 0 0 3px -moz-mac-focusring;
	color: #222;
	outline: none;
}

.inputForm {
	margin: 5px;
}

.leaveCode{
	position: static;
	left:-170px;
	height: 37px;
	color: #495057;
	border: 1px solid #ced4da;
	border-radius: .25rem;
}

.dropdownWrapper {
	display: flex;
	justify-content: center;
	align-items: center;
}
</style>

</head>

<script type="text/javascript">

$(document).ready(function () {
  $('#inventorystatustbl').DataTable({
	"order": []
  });
  $('.dataTables_length').addClass('bs-select');
});

</script>


<script>
    function SelectElement(valueToSelect)
    {    
        var element = document.getElementById('leaveCode');
        element.value = valueToSelect;
        $('#myddl').attr('style', 'visibility:hidden');

    }

    function openMyddl()
    {
        $('#myddl').removeAttr('style');
        var dropdown = document.getElementById('myddl');
        showDropdown(dropdown);
    }

    showDropdown = function (element) {
        var event;
        event = document.createEvent('MouseEvents');
        event.initMouseEvent('mousedown', true, true, window);
        element.dispatchEvent(event);
    };
</script>

<?php
require('connect.php');

if(isset($_POST['submitbtn'])){

	// Item table insert
	$itemtype = $_POST['itemType'];
	$itemdescription = mysqli_real_escape_string($connection, $_POST['description']);
	$linealfeet = $_POST['linealFeet'];
	$height = $_POST['height'];
	$thickness = $_POST['thickness'];
	$project_id = $_POST['projectID'];
	$finish = $_POST['finish'];

	// Material table insert
	$epoxy = mysqli_real_escape_string($connection, $_POST['epoxy']);
	$epoxyprice = $_POST['epoxyprice'];
	$epoxyprice = filter_var($epoxyprice, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	
	$filler = mysqli_real_escape_string($connection, $_POST['filler']);
	$fillerprice = $_POST['fillerprice'];
	$fillerprice = filter_var($fillerprice, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

	$sealer = mysqli_real_escape_string($connection, $_POST['sealer']);
	$sealerprice = $_POST['sealerprice'];
	$sealerprice = filter_var($sealerprice, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);


	// Chip Formula insert 
	// Chip 0
	$chipper0 = $_POST['chipper0'];
	$chipname0 = mysqli_real_escape_string($connection, $_POST['chipname0']);
	$chipsize0 = mysqli_real_escape_string($connection, $_POST['chipsize0']);
	$chipcost0 = $_POST['chipcost0'];
	$chipcost0 = filter_var($chipcost0, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

	// Chip 1
	$chipper1 = $_POST['chipper1'];
	$chipname1 = mysqli_real_escape_string($connection, $_POST['chipname1']);
	$chipsize1 = mysqli_real_escape_string($connection, $_POST['chipsize1']);
	$chipcost1 = $_POST['chipcost1'];
	$chipcost1 = filter_var($chipcost1, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

	// Chip 2
	$chipper2 = $_POST['chipper2'];
	$chipname2 = mysqli_real_escape_string($connection, $_POST['chipname2']);
	$chipsize2 = mysqli_real_escape_string($connection, $_POST['chipsize2']);
	$chipcost2 = $_POST['chipcost2'];
	$chipcost2 = filter_var($chipcost2, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

	// Chip 3
	$chipper3 = $_POST['chipper3'];
	$chipname3 = mysqli_real_escape_string($connection, $_POST['chipname3']);
	$chipsize3 = mysqli_real_escape_string($connection, $_POST['chipsize3']);
	$chipcost3 = $_POST['chipcost3'];
	$chipcost3 = filter_var($chipcost3, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

	// Chip 4
	$chipper4 = $_POST['chipper4'];
	$chipname4 = mysqli_real_escape_string($connection, $_POST['chipname4']);
	$chipsize4 = mysqli_real_escape_string($connection, $_POST['chipsize4']);
	$chipcost4 = $_POST['chipcost4'];
	$chipcost4 = filter_var($chipcost4, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

	// Chip 5
	$chipper5 = $_POST['chipper5'];
	$chipname5 = mysqli_real_escape_string($connection, $_POST['chipname5']);
	$chipsize5 = mysqli_real_escape_string($connection, $_POST['chipsize5']);
	$chipcost5 = $_POST['chipcost5'];
	$chipcost5 = filter_var($chipcost5, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

	// Chip 6
	$chipper6 = $_POST['chipper6'];
	$chipname6 = mysqli_real_escape_string($connection, $_POST['chipname6']);
	$chipsize6 = mysqli_real_escape_string($connection, $_POST['chipsize6']);
	$chipcost6 = $_POST['chipcost6'];
	$chipcost6 = filter_var($chipcost6, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	
	// Chip 7
	$chipper7 = $_POST['chipper7'];
	$chipname7 = mysqli_real_escape_string($connection, $_POST['chipname7']);
	$chipsize7 = mysqli_real_escape_string($connection, $_POST['chipsize7']);
	$chipcost7 = $_POST['chipcost7'];
	$chipcost7 = filter_var($chipcost7, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	
	// Chip 8
	$chipper8 = $_POST['chipper8'];
	$chipname8 = mysqli_real_escape_string($connection, $_POST['chipname8']);
	$chipsize8 = mysqli_real_escape_string($connection, $_POST['chipsize8']);
	$chipcost8 = $_POST['chipcost8'];
	$chipcost8 = filter_var($chipcost8, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	
	// Chip 9
	$chipper9 = $_POST['chipper9'];
	$chipname9 = mysqli_real_escape_string($connection, $_POST['chipname9']);
	$chipsize9 = mysqli_real_escape_string($connection, $_POST['chipsize9']);
	$chipcost9 = $_POST['chipcost9'];
	$chipcost9 = filter_var($chipcost9, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	
	// Chip 10
	$chipper10 = $_POST['chipper10'];
	$chipname10 = mysqli_real_escape_string($connection, $_POST['chipname10']);
	$chipsize10 = mysqli_real_escape_string($connection, $_POST['chipsize10']);
	$chipcost10 = $_POST['chipcost10'];
	$chipcost10 = filter_var($chipcost10, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	

	// Post Item 
	$itemTableInsert = "INSERT INTO item (`itemType`, `description`, `linealFeet`, `height`, `thickness`, `finish`, `projectID`, `lastUpdate`)
						VALUES ('$itemtype', '$itemdescription', '$linealfeet', '$height', '$thickness', '$finish', '$project_id', CURRENT_TIMESTAMP)";

	mysqli_query($connection, $itemTableInsert);
	$itemID = mysqli_insert_id($connection);
	
	// Post Materials
	$epoxyInsert = "INSERT INTO material (`materialName`, `materialType`, `price`, `units`, `itemID`, `lastUpdate`)
					VALUES ('$epoxy', 'Epoxy', '$epoxyprice', 'Gallons', '$itemID', CURRENT_TIMESTAMP)";

	$fillerInsert = "INSERT INTO material (`materialName`, `materialType`, `price`, `units`, `itemID`, `lastUpdate`)
					VALUES ('$filler', 'Filler', '$fillerprice', 'Pounds', '$itemID', CURRENT_TIMESTAMP)";

	$sealerInsert = "INSERT INTO material (`materialName`, `materialType`, `price`, `units`, `itemID`, `lastUpdate`)
					VALUES ('$sealer', 'Sealer', '$sealerprice', 'Gallons', '$itemID', CURRENT_TIMESTAMP)";

	
	// Post Chip Mix
	if ($chipname0){
	$chipInsert0 = "INSERT INTO chipformula (`chipPercentage`, `chipName`, `chipSize`, `chipPrice`, `itemID`, `lastUpdate`)
					VALUES ('$chipper0', '$chipname0', '$chipsize0', '$chipcost0', '$itemID', CURRENT_TIMESTAMP)";
	}

	if ($chipname1){
	$chipInsert1 = "INSERT INTO chipformula (`chipPercentage`, `chipName`, `chipSize`, `chipPrice`, `itemID`, `lastUpdate`)
					VALUES ('$chipper1', '$chipname1', '$chipsize1', '$chipcost1', '$itemID', CURRENT_TIMESTAMP)";
	}

	if ($chipname2){
	$chipInsert2 = "INSERT INTO chipformula (`chipPercentage`, `chipName`, `chipSize`, `chipPrice`, `itemID`, `lastUpdate`)
					VALUES ('$chipper2', '$chipname2', '$chipsize2', '$chipcost2', '$itemID', CURRENT_TIMESTAMP)";
	}

	if ($chipname3){
	$chipInsert3 = "INSERT INTO chipformula (`chipPercentage`, `chipName`, chipSize`, chipPrice`, `itemID`, `lastUpdate`)
					VALUES ('$chipper3', '$chipname3', '$chipsize3', '$chipcost3', '$itemID', CURRENT_TIMESTAMP)";
	}
	
	if ($chipname4){
	$chipInsert4 = "INSERT INTO chipformula (`chipPercentage`, `chipName`, `chipSize`, `chipPrice`, `itemID`, `lastUpdate`)
					VALUES ('$chipper4', '$chipname4', '$chipsize4', '$chipcost4', '$itemID', CURRENT_TIMESTAMP)";
	}
	
	if ($chipname5){
	$chipInsert5 = "INSERT INTO chipformula (`chipPercentage`, `chipName`, `chipSize`, `chipPrice`, `itemID`, `lastUpdate`)
					VALUES ('$chipper5', '$chipname5', '$chipsize5', '$chipcost5', '$itemID', CURRENT_TIMESTAMP)";
	}

	if ($chipname6){
	$chipInsert6 = "INSERT INTO chipformula (`chipPercentage`, `chipName`, `chipSize`, `chipPrice`, `itemID`, `lastUpdate`)
					VALUES ('$chipper6', '$chipname6', '$chipsize6', '$chipcost6', '$itemID', CURRENT_TIMESTAMP)";
	}

	if ($chipname7){
	$chipInsert7 = "INSERT INTO chipformula (`chipPercentage`, `chipName`, `chipSize`, `chipPrice`, `itemID`, `lastUpdate`)
					VALUES ('$chipper7', '$chipname7', '$chipsize7', '$chipcost7', '$itemID', CURRENT_TIMESTAMP)";
	}

	if ($chipname8){
	$chipInsert8 = "INSERT INTO chipformula (`chipPercentage`, `chipName`, `chipSize`, `chipPrice`, `itemID`, `lastUpdate`)
					VALUES ('$chipper8', '$chipname8', '$chipsize8', '$chipcost8', '$itemID', CURRENT_TIMESTAMP)";
	}

	if ($chipname9){
	$chipInsert9 = "INSERT INTO chipformula (`chipPercentage`, `chipName`, `chipSize`, `chipPrice`, `itemID`, `lastUpdate`)
					VALUES ('$chipper9', '$chipname9', '$chipsize9', '$chipcost9', '$itemID', CURRENT_TIMESTAMP)";
	}
	
	if ($chipname10){
	$chipInsert10 = "INSERT INTO chipformula (`chipPercentage`, `chipName`, `chipSize`, `chipPrice`, `itemID`, `lastUpdate`)
					VALUES ('$chipper10', '$chipname10', '$chipsize10', '$chipcost10', '$itemID', CURRENT_TIMESTAMP)";
	}

	mysqli_query($connection, $epoxyInsert);
	mysqli_query($connection, $fillerInsert);
	mysqli_query($connection, $sealerInsert);
	mysqli_query($connection, $chipInsert0);
	mysqli_query($connection, $chipInsert1);
	mysqli_query($connection, $chipInsert2);
	mysqli_query($connection, $chipInsert3);
	mysqli_query($connection, $chipInsert4);
	mysqli_query($connection, $chipInsert5);
	mysqli_query($connection, $chipInsert6);
	mysqli_query($connection, $chipInsert7);
	mysqli_query($connection, $chipInsert8);
	mysqli_query($connection, $chipInsert9);
	mysqli_query($connection, $chipInsert10);

	mysqli_close($connection);
} 


	/*
	$orderquery = "SELECT a.itemID, a.chipName, a.chipPercentage, a.chipSize, b.itemID
	FROM chipformula a
	LEFT JOIN item b
	ON a.itemID = b.itemID
	WHERE b.projectID = $project_id;

	SELECT a.itemID, a.Description, a.LinealFeet, a.squareFeet, a.quantity, c.MaterialName, a.Finish 
	FROM item a
	LEFT JOIN material c
	ON a.itemID = c.itemID
	WHERE b.projectID = $project_id;";

	$itemquery = mysqli_query($connection, $orderquery);
	while ($result = mysqli_fetch_array($itemquery, MYSQLI_ASSOC)){

	$linealfeet = $result['LinealFeet'];
	$itemdescription = $result['Description'];
	$chipper = $result['chipPercentage'];
	$chipname = $result['chipName'];
	$chipsize = $result['chipSize'];
	}

	
	echo "Project ID: ";
	echo  $project_id;
	echo "<br>";
	echo "Item description: "; 
	echo $itemdescription;
	echo "<br>";
	echo "Lineal feet: ";
	echo $linealfeet;
	echo "<br>";
	echo "Chip percentage: ";
	echo $chipper; 
	echo "<br>";
	echo "Chip name: ";
	echo $chipname; 
	echo "<br>";
	echo "Chip size: ";
	echo $chipsize;
	
	//var_dump($itemquery);
	//var_dump($sqlst);
	*/
?>

<body>
<div class="container">
  <h2>	<center>Order List<center></h2>
		<div align="center" class="p-3">

		<table class="table table-striped">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">LF</th>
				<th scope="col">SF</th>
				<th scope="col">Qty.</th>
				<th scope="col">Description</th>
				<th scope="col">Formula</th>
				<th scope="col">Price</th>
				</tr>
			</thead>
			<tbody>
		</div>
<?php
	$orderquery = "SELECT a.itemID, a.chipName, a.chipPercentage, a.chipSize, b.itemID
	FROM chipformula a
	LEFT JOIN item b
	ON a.itemID = b.itemID
	WHERE b.projectID = $project_id;

	SELECT a.itemID, a.Description, a.LinealFeet, a.squareFeet, a.quantity, c.MaterialName, a.Finish 
	FROM item a
	LEFT JOIN material c
	ON a.itemID = c.itemID
	WHERE b.projectID = $project_id;";

	$itemquery = mysqli_query($connection, $orderquery);

	while ($result = mysqli_fetch_array($itemquery, MYSQLI_ASSOC)){

	$linealfeet = $result['LinealFeet'];
	$itemdescription = $result['Description'];
	$chipper = $result['chipPercentage'];
	$chipname = $result['chipName'];
	$chipsize = $result['chipSize'];

	echo '<tr>';
	echo '<td>'.$linealfeet.'</td><td>'.$linealfeet.'</td><td>'.$linealfeet.'</td><td>'.$linealfeet.'</td><td>'.$linealfeet.'</td><td>'.$itemdescription.'</td><td>'.$chipname.'</td>';
	echo '</tr>';
	}

		
	echo "Project ID: ";
	echo  $project_id;
	echo "<br>";
	echo "Item description: "; 
	echo $itemdescription;
	echo "<br>";
	echo "Lineal feet: ";
	echo $linealfeet;
	echo "<br>";
	echo "Chip percentage: ";
	echo $chipper; 
	echo "<br>";
	echo "Chip name: ";
	echo $chipname; 
	echo "<br>";
	echo "Chip size: ";
	echo $chipsize;
?>
    </tbody>
  </table>
</div>
<!--			<tr>
				<th scope="row">1</th>
				<td>370</td>
				<td>398</td>
				<td>199</td>
				<td>370 LF 4" Straight Base (TZ-1)</td>
				<td>20% River Rock #1 & #2 <br> 80% Diablo White #1 <br> Epoxy: SW-7042 Shoji White <br> Filler: ATF-20 <br> Sealer: Terroxy WB Urethane <br> Finish: 200 grit</td>
				<td>Per SF: $1.00<br>Per LF: $1.00 <br> Per PC: $1.00 <br> Total: $1.00</td>
				</tr>
			</tbody>
			</table>
-->

		<br><br>
		<div align="center">
		<button onclick="<?php echo "location.href='itemSelection.php?ProjID=". $project_id . "'"; ?>" type="submit" style="margin: 0px 0px 10px 0px" name="additembtn" id="additembtn" class="btn btn-success btn-lg">Add Item</button>
		</div>	
		<div align="center">
		<button style="text-align: center" onclick="location.href='additionalCost.php'" type="submit" id="submitbtn" class="btn btn-primary btn-lg">Submit</button>
		</div>			
</body>

<!-- 
SELECT a.itemID, a.Description, a.LinealFeet, b.ChipPercentage, b.ChipName, b.ChipSize, c.MaterialName, c.MaterialType, a.Finish 
FROM item a, chipformula b, material c 
WHERE b.itemID = a.itemID AND c.itemID = a.itemID

----------------------------------------------------------------------------------------------------

SELECT a.itemID, a.chipName, a.chipPercentage, a.chipSize
FROM chipformula a
WHERE a.itemID = 81;

SELECT a.itemID, a.Description, a.LinealFeet, c.MaterialName, a.Finish 
FROM item a
LEFT JOIN material c
ON a.itemID = c.itemID
WHERE a.itemID = 81




SELECT a.itemID, a.chipName, a.chipPercentage, a.chipSize
FROM chipformula a
WHERE a.itemID = 81;

SELECT a.itemID, a.Description, a.LinealFeet, a.squareFeet, a.quantity, c.MaterialName, a.Finish, a.projectID
FROM item a
LEFT JOIN material c
ON a.itemID = c.itemID
WHERE a.itemID = 81
-->