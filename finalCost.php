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
<title>Additional Cost</title>
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

@media print {
  .no-print {
    visibility: hidden;
  }
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

<body>
<div id="finalCost">
<div class="container">
  <h2>	<center>Project Breakdown<center></h2>
		<div align="center" class="p-3">

		<p align="left">
		Project: ________________ <br>
		Company: ________________ <br>
		Company Contact: ________________ <br>
		Email: ________________  <br>
		Phone Number: _________________  <br>
		</p>


		<table class="table table-striped">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">LF</th>
				<th scope="col">SF</th>
				<th scope="col">Qty.</th>
				<th scope="col">Desctiption</th>
				<th scope="col">Formula</th>
				<th scope="col">Price</th>
				<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<th scope="row">1</th>
				<td>796</td>
				<td>398</td>
				<td>199</td>
				<td>Straight Base @ 48"x6"x3/8"; finish @ 200 grit (TZ-1)</td>
				<td>10% River Rock #1 <br> 10% River Rock #2 <br> 80% Diablo White #1 <br> Epoxy: SW-7042 Shoji White <br> Filler: ATF-20 <br> Sealer: Terroxy WB Urethane <br> Finish: 200 grit</td>
				<td>Per SF: $1.00<br>Per LF: $1.00 <br> Per PC: $1.00 <br> Total: $1.00</td>
				</tr>
				<tr>
				<th scope="row">2</th>
				<td>1,200</td>
				<td>600</td>
				<td>300</td>
				<td>Straight Base @ 48"x6"x3/8"; finish @ 200 grit (TZ-2)</td>
				<td>75% Standard Marble <br> 25% Recycled Clear Glass <br> Epoxy: TBD <br> Filler: ATF-20 <br> Sealer: Terroxy WB Urethane <br> Finish: 200 grit</td>
				<td>Per SF: $1.00<br>Per LF: $1.00 <br> Per PC: $1.00 <br> Total: $1.00</td>
				</tr>
				<tr>
				<th scope="row">3</th>
				<td>77</td>
				<td>124.3</td>
				<td>14</td>
				<td>Tread/risers @ 66"x12.5"x6.75x1" with 3 abrasive strips; finish @ 200 grit (TZ-2)</td>
				<td>75% Standard Marble <br> 25% Recycled Clear Glass <br> Epoxy: TBD <br> Filler: ATF-20 <br> Sealer: Terroxy WB Urethane <br> Finish: 200 grit</td>
				<td>Per SF: $1.00<br>Per LF: $1.00 <br> Per PC: $1.00 <br> Total: $1.00</td>
				</tr>
				<th scope="row">Sub-Total</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>$1.00</td>
				</tr>
				<th scope="row">Tax</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>Kentucky: 6%</td>
				<td>$1.00</td>
				</tr>
				<th scope="row">Total</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>$1.00</td>
				</tr>
			</tbody>
			</table>

			<br>
			<br>

			<h2><center>Materials Needed<center></h2>
			<table  id="finalMaterials"class="table table-striped">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Material</th>
				<th scope="col">Name</th>
				<th scope="col">Amount Needed</th>
				<th scope="col">Price</th>
				<th scope="col">Total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<th scope="row">1</th>
				<td>Epoxy per gallon</td>
				<td>SW White</td>
				<td>42 gal</td>
				<td>$1.00</td>
				<td>$1.00</td>
				</tr>
				<tr>
				<th scope="row">2</th>
				<td>Filler</td>
				<td>ATF-20</td>
				<td>7 bags</td>
				<td>$1.00</td>
				<td>$1.00</td>
				</tr>
				<tr>
				<th scope="row">3</th>
				<td>Chips (50lb per)</td>
				<td>New Pure White</td>
				<td>50 bags</td>
				<td>$1.00</td>
				<td>$1.00</td>
				</tr>
				<tr>
				<th scope="row">4</th>
				<td>Chips (50lb per)</td>
				<td>China White</td>
				<td>20 bags</td>
				<td>$1.00</td>
				<td>$1.00</td>
				</tr>
				<tr>
				<th scope="row">5</th>
				<td>Grout</td>
				<td>Name?</td>
				<td>2 bags</td>
				<td>$1.00</td>
				<td>$1.00</td>
				</tr>
				<tr>
				<th scope="row">6</th>
				<td>Sealer</td>
				<td>Terroxy WB Urethane</td>
				<td>2 gal</td>
				<td>$1.00</td>
				<td>$1.00</td>
				</tr>
			</tbody>
			</table>

			<br>
			<br>
			
			<h2><center>Labor Costs<center></h2>
			<table  id="finalMaterials"class="table table-striped">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Labor Type</th>
				<th scope="col">Labor Cost</th>
				<th scope="col">Hours</th>
				<th scope="col">Labor Total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<th scope="row">1</th>
				<td>Process Lead</td>
				<td>$1.00</td>
				<td>40 hours</td>
				<td>$1.00</td>
				</tr>
				<tr>
				<th scope="row">2</th>
				<td>Process Assist</td>
				<td>$1.00</td>
				<td>100 hours</td>
				<td>$1.00</td>
				</tr>
			</tbody>
			</table>
		</div>
	</div>	
</div>
		<br>
		<div align="center">
		<button type="submit" id="printbtn" onclick="window.print()" class="btn btn-primary btn-lg no-print">Print Estimate</button>
		<form action="mainMenu.php">		
		<br>
		<div align="center">
		<button type="submit" id="completebtn" class="btn btn-primary btn-lg no-print">Complete</button>
		</div>
		</form>	
		</div>
<?php
	
?>
    </tbody>
  </table>
</div>
			
</body>