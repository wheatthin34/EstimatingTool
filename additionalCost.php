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
<div class="container">
  <h2>	<center>Additional Cost<center></h2>
		<div align="center" class="p-3">

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
				<td><input type="text" class="form-control" placeholder="Price Adjust" name="priceAdjust" id="priceAdjust"></td>
				</tr>
				<tr>
				<th scope="row">2</th>
				<td>1,200</td>
				<td>600</td>
				<td>300</td>
				<td>Straight Base @ 48"x6"x3/8"; finish @ 200 grit (TZ-2)</td>
				<td>75% Standard Marble <br> 25% Recycled Clear Glass <br> Epoxy: TBD <br> Filler: ATF-20 <br> Sealer: Terroxy WB Urethane <br> Finish: 200 grit</td>
				<td>Per SF: $1.00<br>Per LF: $1.00 <br> Per PC: $1.00 <br> Total: $1.00</td>
				<td><input type="text" class="form-control" placeholder="Price Adjust" name="priceAdjust" id="priceAdjust"></td>
				</tr>
				<tr>
				<th scope="row">3</th>
				<td>77</td>
				<td>124.3</td>
				<td>14</td>
				<td>Tread/risers @ 66"x12.5"x6.75x1" with 3 abrasive strips; finish @ 200 grit (TZ-2)</td>
				<td>75% Standard Marble <br> 25% Recycled Clear Glass <br> Epoxy: TBD <br> Filler: ATF-20 <br> Sealer: Terroxy WB Urethane <br> Finish: 200 grit</td>
				<td>Per SF: $1.00<br>Per LF: $1.00 <br> Per PC: $1.00 <br> Total: $1.00</td>
				<td><input type="text" class="form-control" placeholder="Price Adjust" name="priceAdjust" id="priceAdjust"></td>
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


		<form action="finalCost.php">
				<div class="form-group dropdownWrapper">
					<input type="text" style="width: 100%; margin: 0px 10px 0px 0px" class="form-control" placeholder="Additional Fee" name="additionalCost" id="additionalCost">
				<select id="pricetype" class="leaveCode" name="pricetype" onclick="openMyddl();">
					<option value="percent">%</option>
					<option value="dollar">$</option>
				</select>
		</div>		
		<div class="form-group">
			<input type="text"  style="width: 100%" class="form-control" placeholder="Freight Cost" name="freightCost" id="freightCost">
		</div>
		<div class="form-group dropdownWrapper">
			<input type="text" class="form-control" style="width: 100%" placeholder="State/Country" name="state" id="state" required>
			<input type="decimal" class="form-control" style="width: 100%; margin: 0px 0px 0px 10px" placeholder="Tax %" name="taxpercent" id="taxpercent" required>
		</div>


		 <!--	<select id="states" class="leaveCode" name="state" onclick="openMyddl();">
				<option value="Alaska">AK</option>
				<option value="Alabama">AL</option>
				<option value="Arkansas">AR</option>
				<option value="Arizona">AZ</option>
				<option value="California">CA</option>
				<option value="Colorado">CO</option>
				<option value="Connecticut">CT</option>
				<option value="Washington, D.C.">DC</option>
				<option value="Delaware">DE</option>
				<option value="Florida">FL</option>
				<option value="Georgia">GA</option>
				<option value="Hawaii">HI</option>
				<option value="Iowa">IA</option>
				<option value="Idaho">ID</option>
				<option value="Illinois">IL</option>
				<option value="Indiana">IN</option>
				<option value="Kansas">KS</option>
				<option value="Kentucky">KY</option>
				<option value="Louisiana">LA</option>
				<option value="Massachusetts">MA</option>
				<option value="Maryland">MD</option>
				<option value="Maine">ME</option>
				<option value="Michigan">MI</option>
				<option value="Minnesota">MN</option>
				<option value="Missouri">MO</option>
				<option value="Mississippi">MS</option>
				<option value="Montana">MT</option>
				<option value="North Carolina">NC</option>
				<option value="North Dakota">ND</option>
				<option value="Nebraska">NE</option>
				<option value="New Hampshire">NH</option>
				<option value="New Jersey">NJ</option>
				<option value="New Mexico">NM</option>
				<option value="Nevada">NV</option>
				<option value="New York">NY</option>
				<option value="Ohio">OH</option>
				<option value="Oklahoma">OK</option>
				<option value="Oregon">OR</option>
				<option value="Pennsylvania">PA</option>
				<option value="Rhode Island">RI</option>
				<option value="South Carolina">SC</option>
				<option value="South Dakota">SD</option>
				<option value="Tennessee">TN</option>
				<option value="Texas">TX</option>
				<option value="Utah">UT</option>
				<option value="Virginia">VA</option>
				<option value="Vermont">VT</option>
				<option value="Washington">WA</option>
				<option value="Wisconsin">WI</option>
				<option value="West Virginia">WV</option>
				<option value="Wyoming">WY</option>
				<option value="Other">Other</option>
			</select>
		</div> 
		-->
		
		<br><br>
		<div align="center">
		<button type="submit" id="submitbtn" class="btn btn-primary btn-lg">Submit</button>
		</div>
		</form>	
		</div>
<?php
	
?>
    </tbody>
  </table>
</div>
			
</body>