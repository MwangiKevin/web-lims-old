<div>
	<?php
		echo form_open('fcdrr/submit',"id='commodity' onsubmit='return doOnSubmit()'");
	?>
	<h2 class= "ui header"style="text-align:center; font-size: 20px; font-family: tahoma;font-style: normal;font-variant: normal;font-weight: normal;">FACILITY CONSUMPTION DATA REPORT & REQUEST FORM(F-CDRR) FOR ART LABORATORY MONITORING REAGENTS</h2>
	
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active"><a href="#">FCDRR</a></li>
	</ol>
	<h1 class="lighter">
		<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
		<a href="#" data-toggle="modal" class="pink"> Fill The Form and Click Submit </a>
	</h1>
	<div class="ui horizontal divider">Start</div>
	<div class="row">
		<div class="col-md-3">
			<div class="input-group my-input-group   ">
				<span class="input-group-addon my-input-group-caption">
					Facility
				</span>
				<input readonly="" name="facility" id="facility" class="form-control" style="" type="text">
			</div>
		</div>
		<div class="col-md-3">
			<div class="input-group my-input-group   ">
				<span class="input-group-addon my-input-group-caption">
					Sub-County
				</span>
				<input readonly="" name="sub_county" id="sub_county" class="form-control" style="" type="text">
			</div>
		</div>
		<div class="col-md-3">
			<div class="input-group my-input-group   ">
				<span class="input-group-addon my-input-group-caption">
					County
				</span>
				<input readonly="" name="county" id="county" class="form-control" style="" type="text">
			</div>
		</div>
		<div class="col-md-3">
			<div class="input-group my-input-group  ">
				<span class="input-group-addon my-input-group-caption">
					Affiliation
				</span>
				<input readonly="" name="affiliation" id="affiliation" class="form-control" style="" type="text">
			</div>
		</div>
	</div>
	
	<div class="row" style="margin-top:20px;">
		<div class="col-md-3">Report for The period:</div>
		<div class="col-md-3">
			<div class="input-group my-input-group  ">
				<span class="input-group-addon my-input-group-caption">
					Select Year
				</span>
				<select class="form-control" name="year" id="year" onchange="changeDate()" required >
					<option value="">Select A Year</option>
				</select>
			</div>
		</div>
		<div class="col-md-3">
			<div class="input-group my-input-group  ">
				<span class="input-group-addon my-input-group-caption">
					Select Month
				</span>
				<select class="form-control" name="month" id="month" onchange="changeDate()" required >
					<option value="">Select A Month</option>
					<option value="01">January</option>
					<option value="02">February</option>
					<option value="03">March</option>
					<option value="04">April </option>
					<option value="05">May</option>
					<option value="06">June</option>
					<option value="07">July</option>
					<option value="08">August</option>
					<option value="09">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
			</div>
		</div>
		<div class="col-md-3">
			<div class="input-group my-input-group  ">				
				<input readonly="" name="affiliation" id="affiliation" class="form-control" type="text" style="width:19em;-webkit-box-sizing: border-box;  -moz-box-sizing: border-box;    box-sizing: border-box; ">
			</div>
		</div>
	</div>
	
	<div class="row" style="margin-top:20px;">
		<div class="col-md-3">State the number of CD4 Tests conducted:</div>
		<div class="col-md-3">			
			<div class="input-group my-input-group   ">
				<span class="input-group-addon my-input-group-caption">
					Facs-Calibur
				</span>
				<input name="sub_county" id="sub_county" class="form-control" style="" type="text" placeholder="adults">
				<input name="sub_county" id="sub_county" class="form-control" style="" type="text" placeholder="peads">
			</div>
		</div>
		<div class="col-md-3">		
			<div class="input-group my-input-group   ">
				<span class="input-group-addon my-input-group-caption">
					Facs-Count
				</span>
				<input name="sub_county" id="sub_county" class="form-control" style="" type="text" placeholder="adults">
				<input name="sub_county" id="sub_county" class="form-control" style="" type="text" placeholder="peads">
			</div>
			
		</div>
		<div class="col-md-3">		
			<div class="input-group my-input-group   ">
				<span class="input-group-addon my-input-group-caption">
					CYflow-Partec
				</span>
				<input name="sub_county" id="sub_county" class="form-control" style="" type="text" placeholder="adults">
				<input name="sub_county" id="sub_county" class="form-control" style="" type="text" placeholder="peads">
			</div>
		</div>
	</div>

	<div class="row" style="margin-top:20px;">
		<div class="col-md-12">
			<table width="" id="commodities-heading" style="font-size:12px;" >
				<thead>
					<tr>
						<td style="border:1px solid black !important" rowspan="2"><b><center>Commodity Name</center></b></td>
						<td rowspan="2" style="border:1px solid black !important"><b><center>Unit Of Issue</center></b></td>
						<td rowspan="2" style="border:1px solid black !important"><b><center>Beginning<br />Balance</center></b></td>
						<td rowspan="2"style="border:1px solid black !important"><b>Quantity Recevied This Month From Central<br/> WAREHOUSE (e.g. KEMSA)</b></td>             
						<td rowspan="2" style="border:1px solid black !important"><b><center>Quantity Used</center></b></td>
						<td rowspan="2" style="border:1px solid black !important"><b><center>Losses / Wastages &nbsp;</center></b></td>
						<td colspan="2"style="border:1px solid black !important"><b>Adjustments<br/><i>Indicate if (+) or (-)</i></b></td>
						<td rowspan="2" style="border:1px solid black !important"><b><center>End Of Month<br/>Physical Count</center></b></td>
						<td rowspan="2" style="border:1px solid black !important"><b><center>Quantity<br />Requested</center></b></td>
					</tr>
					<tr>
						<!-- <td style="border:1px solid black !important">Quantity</td>
						<td style="border:1px solid black !important">Lot No.</td> -->
						<td style="border:1px solid black !important">Positive</td>
						<td style="border:1px solid black !important">Negative</td>    
					</tr>

					<tr>
					</tr>
				</thead>	    
				<tbody>  
					<tr><td rowspan="1" colspan="10" style="border:1px solid black !important;background:#eeeeee;">FACS Calibur reagents and consumables</td></tr>
					<tr>
						<td>Tri-TEST CD3/CD4/CD45 with<br />TruCOUNT Tubes</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Falcon Tubes</td>
						<td><center>Pieces</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Printing Paper</td>
						<td><center>Reams</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Printer Catridge</td>
						<td><center>Reams</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr><td rowspan="1" colspan="10" style="border:1px solid black !important;background:#eeeeee;">FACS Count Reagents</td></tr>
					<tr>
						<td>FACSCount CD4/CD3 Reagent [Adult]</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>FACSCount CD4 % reagent[Paediatric]</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr><td rowspan="1" colspan="10" style="border:1px solid black !important;background:#eeeeee;">Cyflow Partec reagents</td></tr>
					<tr>
						<td>EASY Count CD4/CD3 Reagent[Adult]</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>EASY Count CD4 % reagent[Paediatric]</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr><td rowspan="1" colspan="10" style="border:1px solid black !important;background:#eeeeee;">Point of Care CD4 reagents (e.g. PIMA, etc)</td></tr>
					<tr>
						<td>Catridges</td>
						<td><center>Pieces</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr><td rowspan="1" colspan="10" style="border:1px solid black !important;background:#eeeeee;">Haematology</td></tr>
					<tr><td rowspan="1" colspan="4" style="border:1px solid black !important;background:#eeeeee;">
									Indicate the type of equipment in your facility
									(e.g. Celtac 6400, Coulter, Celtac 8222, etc)
						</td>
						<td rowspan="1" colspan="6" style="border:1px solid black !important;background:#eeeeee;"></td>
					</tr>
					<tr>
						<td>Cell / ACT Pack </td>
						<td><center>Litres</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Cell Clean / ACT Rinse</td>
						<td><center>Litres</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>ACT Diff 3 kits </td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>ACT Diff 5 kits</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Celtac 6400 kits</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Celtac 8222</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Haemo cuvettes</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr><td rowspan="1" colspan="10" style="border:1px solid black !important;background:#eeeeee;">Biochemistry</td></tr>
					<tr><td rowspan="1" colspan="4" style="border:1px solid black !important;background:#eeeeee;">
									Indicate the type of equipment in your facility
									(e.g. BTS 330/310/305, Urolyser, Humalizer
									2000/3000, C111 Cobas, etc)
						</td>
						<td rowspan="1" colspan="6" style="border:1px solid black !important;background:#eeeeee;"></td>
					</tr>
					<tr>
						<td>Albumin</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Alkaline phosphatase</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>ALT (SGPT)</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>AST (SGOT)</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Creatinine</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Potassium</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Sodium </td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Gamma GT</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Glucose test strips</td>
						<td><center>Pieces</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>HDL Cholestero</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Pregnancy test strips</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Serum Amylase test kit </td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Haemo cuvettes</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Serum protein kit</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Total Cholesterol</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Triglycerides</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Bilirubin</td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
					<tr>
						<td>Urea </td>
						<td><center>Tests</center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><center><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></center></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
						<td><input name="" id="" style="width:100px;" size="5" type="text" class="form-control" required/></td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>

	<div class="row" style="margin-top:20px;">
		<div class="col-md-12">
			<div class="input-group my-input-group  ">
				<span class="input-group-addon my-input-group-caption">
					Comments
				</span>
				<textarea class="form-control" placeholder="FCDRR Comments" name="comments" id="comments" cols="150" style="width: 99%;">
				</textarea>
			</div>
		</div>
	</div>

	<div class="ui horizontal divider">END</div>

	<div class="row" style="margin-top:20px;">
		<div class="col-md-12">
			<input type="submit" name="submit" value="Submit Commodity Report" class="button" />
			<input type="hidden" value="true" name="exists" id="exists" />
			<input type="hidden" value="true" name="repeat" id="repeat" /> 
			<input type="button" value="Reset" class="button" onclick="clearTempData()"/>
			<input type="button" onclick="printCommodity()" name="print" value="Print" class="button"  />
		</div>
	</div>

	<div class="ui horizontal divider"></div>

	<?php echo form_close();?>
</div>