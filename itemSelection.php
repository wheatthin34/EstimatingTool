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
<title>Item Selection</title>
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

.coveBase {
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.5;
	color: #495057;
}

.noDisplay{
	display:none;
}

.buttonWrapper {
	display: flex;
	justify-content: center;
	align-items: center;
}

.formulaFormat {
	display: flex;
	justify-content: center;
	align-items: center;
}
</style>


</head>





<script>
	function showDiv(selectObject){
    	var value = selectObject.value;
		console.log(value);
		if (value == 'Straight Base'){
		document.getElementById('base').style.display = 'block';
		document.getElementById('addchipbtn').style.display = 'block';
		document.getElementById('submitbtn').style.display = 'block';
		document.getElementById('coveBase').style.display = 'none';
		}
		else if (value == 'Cove Base'){	
		document.getElementById('base').style.display = 'block';
		document.getElementById('coveBase').style.display = 'block';
		document.getElementById('addchipbtn').style.display = 'block';
		document.getElementById('submitbtn').style.display = 'block';
		}

// Display area for first chip in formula
		document.getElementById('chipMix0').style.display = value != '' ? 'block' : 'none';
	}

// Convert chip number to string and combine with chipmix for add chipButton. 
var addNum = 1;
	function addChipDiv(){
		var chip = 'chipMix';
		var output = chip + addNum;
		addNum++;
		console.log(addNum)
		document.getElementById(output).style.display = 'block';
		document.getElementById('removechipbtn').style.display = 'block';
	}

// Remove added chips
	function removeChipDiv(){
		var chip = 'chipMix';
		var output = chip + (addNum - 1);
		if(addNum > 1){
		addNum--;
		console.log(addNum)
		document.getElementById(output).style.display = "none";
		if(addNum == 1){
			document.getElementById('removechipbtn').style.display = 'none';
		}
		}
	}
</script>

<script type="text/javascript">

/*$(document).ready(function () {
  $('#inventorystatustbl').DataTable({
	"order": []
  });
  $('.dataTables_length').addClass('bs-select');
});
*/
</script>

<?php
		require('connect.php');

		if(isset($_POST['nextbtn'])){
			$projectname = mysqli_real_escape_string($connection, $_POST['projectName']);
			$jobID = uniqid();
			$companyname = mysqli_real_escape_string($connection, $_POST['companyName']);
			$companycontact = mysqli_real_escape_string($connection, $_POST['companyContact']);
			$contactemail = mysqli_real_escape_string($connection, $_POST['contactEmail']);
			$contactnumber = mysqli_real_escape_string($connection, $_POST['contactNumber']);   
			$notes = mysqli_real_escape_string($connection, $_POST['notes']);
			
			$Sql = "INSERT INTO projects (`projectName`, `jobID`, `company`, `companyContact`, `contactEmail`, `contactNumber`, `notes`,  `lastUpdate`)
					  VALUES ('$projectname', '$jobID', '$companyname', '$companycontact', '$contactemail', '$contactnumber', '$notes', CURRENT_TIMESTAMP)";

			//var_dump($Sql);
			//echo "<br>";
			mysqli_query($connection, $Sql);
		}  
		
		if(isset($_GET['ProjID'])){	
			$project_id = $_GET['ProjID'];
		}
		else {
			$project_id = mysqli_insert_id($connection);
		}
		
?> 


<body>
<div class="container">
  <h2>	<center>Item Selection<center></h2>
		<div align="center" class="p-3">

<!-- Item selection for estimate -->
<form id="itemSelection" action="orderList.php" method="POST">
	<select class="select-css" name="itemType" id="itemType" onchange="showDiv(this)">
		<option disabled selected>Choose item: </option>
		<option value="Straight Base">Straight Base</option>
		<option value="Cove Base">Cove Base</option>
		<option value="Tread Only">Tread Only (not working)</option>
		<option value="Tread Riser Combo">Tread Riser Combo (not working)</option>
		<option value="Slab">Slab (not working)</option>
		<option value="Tile">Tiles (not working)</option>
	</select>

<!-- Attributes to fill out for straight base -->
		<div class="noDisplay" id="base">
			<div>
				<input type="hidden" name="projectID" value="<?php echo $project_id; ?>"/>
			</div>
			<div class="form-group">
				<input type="text" style="margin: 10px 0px 0px 0px" class="form-control" placeholder="Item Description" name="description" id="description" required>
			</div>	
			<div class="form-group formulaFormat">
				<input type="text" style="margin: 0px 5px 0px 0px" class="form-control" placeholder="Lineal Feet" name="linealFeet" id="linealFeet" required>
				<input type="text" style="margin: 0px 5px 0px 5px" class="form-control" placeholder="Height" name="height" id="height" required>
				<input type="text" style="margin: 0px 5px 0px 5px" class="form-control" placeholder="Thickness" name="thickness" id="thickness" required>
				<input type="text" style="margin: 0px 0px 0px 5px" class="form-control" placeholder="Finish" name="finish" id="finish" required>
			</div>	
			<div class="form-group formulaFormat">
				<input type="text" style="margin: 0px 5px 0px 0px" class="form-control" placeholder="Epoxy" name="epoxy" id="epoxy" required>
				<input type="decimal" style="margin: 0px 0px 0px 5px; flex-basis: 30%" class="form-control" placeholder="Epoxy Price Per Gallon" name="epoxyprice" id="epoxyprice" required>
			</div>
			<div class="form-group formulaFormat">
				<input type="text" style="margin: 0px 5px 0px 0px" class="form-control" placeholder="Filler" name="filler" id="filler" required>
				<input type="decimal" style="margin: 0px 0px 0px 5px; flex-basis: 30%" class="form-control" placeholder="Filler Price" name="fillerprice" id="fillerprice" required>
			</div>
			<div class="form-group formulaFormat">
				<input type="text" style="margin: 0px 5px 0px 0px" class="form-control" placeholder="Sealer" name="sealer" id="sealer" required>
				<input type="decimal" style="margin: 0px 0px 0px 5px; flex-basis: 30%" class="form-control" placeholder="Sealer Price" name="sealerprice" id="sealerprice" required>
			</div>
		</div>

<!-- Adds the toe strip option to straight base when selecting cove base -->
		<div class="coveBase noDisplay" id="coveBase" required>
			<p>Toe strip: 
				<input type="radio" id="yes" style="margin: 7px" name="toeStrip" value="yes">
				<label for="yes">Yes</label>
				<input type="radio" id="no" style="margin: 7px" name="toeStrip" value="no">
				<label for="no">No</label></p>
		</div>	
		
<!-- Input formula -->
	<!-- Chip 0 -->
	<div class="noDisplay" id="chipMix0">	
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<input type="decimal" class="form-control" placeholder="%" name="chipper0" id="chipper0" required>
					</div>	
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Chip Name" name="chipname0" id="chipname0" required>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<input type="number" class="form-control" placeholder="Size" name="chipsize0" id="chipsize0" required>
					</div>	
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<input type="decimal" class="form-control" placeholder="Cost per bag" name="chipcost0" id="chipcost0" required>
					</div>	
				</div>
			</div>
		</div>

	<!-- Chip 1 -->
		<div class="noDisplay" id="chipMix1">	
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<input type="decimal" class="form-control" placeholder="%" name="chipper1" id="chipper1">
					</div>	
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Chip Name" name="chipname1" id="chipname1">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<input type="number" class="form-control" placeholder="Size" name="chipsize1" id="chipsize1">
					</div>	
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<input type="decimal" class="form-control" placeholder="Cost per bag" name="chipcost1" id="chipcost1">
					</div>	
				</div>
			</div>
		</div>

	<!-- Chip 2 -->
		<div class="noDisplay" id="chipMix2">	
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<input type="decimal" class="form-control" placeholder="%" name="chipper2" id="chipper2">
					</div>	
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Chip Name" name="chipname2" id="chipname2">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<input type="number" class="form-control" placeholder="Size" name="chipsize2" id="chipsize2">
					</div>	
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<input type="decimal" class="form-control" placeholder="Cost per bag" name="chipcost2" id="chipcost2">
					</div>	
				</div>
			</div>
		</div>

	<!-- Chip 3 -->
		<div class="noDisplay" id="chipMix3">	
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<input type="decimal" class="form-control" placeholder="%" name="chipper3" id="chipper3">
					</div>	
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Chip Name" name="chipname3" id="chipname3">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<input type="number" class="form-control" placeholder="Size" name="chipsize3" id="chipsize3">
					</div>	
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<input type="decimal" class="form-control" placeholder="Cost per bag" name="chipcost3" id="chipcost3">
					</div>	
				</div>
			</div>
		</div>

	<!-- Chip 4 -->
		<div class="noDisplay" id="chipMix4">	
				<div class="row">
					<div class="col-md-2">
						<div class="form-group">
							<input type="decimal" class="form-control" placeholder="%" name="chipper4" id="chipper4">
						</div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Chip Name" name="chipname4" id="chipname4">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="number" class="form-control" placeholder="Size" name="chipsize4" id="chipsize4">
						</div>	
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<input type="decimal" class="form-control" placeholder="Cost per bag" name="chipcost4" id="chipcost4">
						</div>	
					</div>
				</div>
			</div>	

	<!-- Chip 5 -->
		<div class="noDisplay" id="chipMix5">	
					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
								<input type="decimal" class="form-control" placeholder="%" name="chipper5" id="chipper5">
							</div>	
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Chip Name" name="chipname5" id="chipname5">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<input type="number" class="form-control" placeholder="Size" name="chipsize5" id="chipsize5">
							</div>	
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<input type="decimal" class="form-control" placeholder="Cost per bag" name="chipcost5" id="chipcost5">
							</div>	
						</div>
					</div>
				</div>

	<!-- Chip 6 -->
		<div class="noDisplay" id="chipMix6">	
						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<input type="decimal" class="form-control" placeholder="%" name="chipper6" id="chipper6">
								</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Chip Name" name="chipname6" id="chipname6">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<input type="number" class="form-control" placeholder="Size" name="chipsize6" id="chipsize6">
								</div>	
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<input type="decimal" class="form-control" placeholder="Cost per bag" name="chipcost6" id="chipcost6">
								</div>	
							</div>
						</div>
					</div>	

	<!-- Chip 7 -->
		<div class="noDisplay" id="chipMix7">	
							<div class="row">
								<div class="col-md-2">
									<div class="form-group">
										<input type="decimal" class="form-control" placeholder="%" name="chipper7" id="chipper7">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Chip Name" name="chipname7" id="chipname7">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<input type="number" class="form-control" placeholder="Size" name="chipsize7" id="chipsize7">
									</div>	
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<input type="decimal" class="form-control" placeholder="Cost per bag" name="chipcost7" id="chipcost7">
									</div>	
								</div>
							</div>
						</div>

	<!-- Chip 8 -->
		<div class="noDisplay" id="chipMix8">	
								<div class="row">
									<div class="col-md-2">
										<div class="form-group">
											<input type="decimal" class="form-control" placeholder="%" name="chipper8" id="chipper8">
										</div>	
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Chip Name" name="chipname8" id="chipname8">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="number" class="form-control" placeholder="Size" name="chipsize8" id="chipsize8">
										</div>	
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="decimal" class="form-control" placeholder="Cost per bag" name="chipcost8" id="chipcost8">
										</div>	
									</div>
								</div>
							</div>	
							
	<!-- Chip 9 -->
		<div class="noDisplay" id="chipMix9">	
								<div class="row">
									<div class="col-md-2">
										<div class="form-group">
											<input type="decimal" class="form-control" placeholder="%" name="chipper9" id="chipper9">
										</div>	
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Chip Name" name="chipname9" id="chipname9">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="number" class="form-control" placeholder="Size" name="chipsize9" id="chipsize9">
										</div>	
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="decimal" class="form-control" placeholder="Cost per bag" name="chipcost9" id="chipcost9">
										</div>	
									</div>
								</div>
							</div>	

	<!-- Chip 10 -->
		<div class="noDisplay" id="chipMix10">	
								<div class="row">
									<div class="col-md-2">
										<div class="form-group">
											<input type="decimal" class="form-control" placeholder="%" name="chipper10" id="chipper10">
										</div>	
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Chip Name" name="chipname10" id="chipname10">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="number" class="form-control" placeholder="Size" name="chipsize10" id="chipsize10">
										</div>	
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="decimal" class="form-control" placeholder="Cost per bag" name="chipcost10" id="chipcost10">
										</div>	
									</div>
								</div>
							</div>	

<!-- Button to add chips to the formula -->
	<div class="buttonWrapper">
			<button type="button" style="margin: 10px" id="addchipbtn" class="btn btn-success btn-lg noDisplay" onclick="addChipDiv()">Add Chip</button>
			<button type="button"  id="removechipbtn" class="btn btn-danger btn-lg noDisplay" onclick="removeChipDiv()">Remove Chip</button>
	</div>
<!-- Button to submit item to the estimate -->
		<button type="submit" style="margin: 10px" name="submitbtn" id="submitbtn" class="noDisplay btn btn-primary btn-lg">Submit</button>
	</div>
</form>





<?php
	
?>




    </tbody>
  </table>
</div>
			
</body>