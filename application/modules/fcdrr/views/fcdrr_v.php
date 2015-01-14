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
				<select class="form-control" name="month" id="month" onchange="changeDate()" required >
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
			<table width="" id="commodities-table" >
				<thead>
					<tr>
						<td rowspan="2"><b>COMMODITY CODE</b></td>
						<td rowspan="2"><b>COMMODITY NAME</b></td>
						<td rowspan="2"><b>UNIT OF ISSUE</b></td>
						<td rowspan="2"><b>BEGINNING BALANCE</b></td>
						<td colspan="2"><b>QUANTITY RECEIVED FROM CENTRAL<br/> WAREHOUSE (e.g. KEMSA)</b></td>             
						<td rowspan="2"><b>QUANTITY USED</b></td>
						<td rowspan="2"><b>LOSSES/WASTAGE</b></td>
						<td colspan="2"><b>ADJUSTMENTS<br/><i>Indicate if (+) or (-)</i></b></td>
						<td rowspan="2"><b>ENDING BALANCE <br/>PYSICAL COUNT at end of the Month</b></td>
						<td rowspan="2"><b>QUANTITY REQUESTED</b></td>
					</tr>
					<tr>
						<td>Quantity</td>
						<td>Lot No.</td>
						<td>Positive</td>
						<td>Negative</td>    
					</tr>
				</thead>	    
				<tbody>  
					<?php

					?>
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

		<?php echo form_close();?>
</div>