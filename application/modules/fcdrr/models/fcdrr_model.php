<?php

class fcdrr_model extends MY_Model{

/* these function the commodities in the databse */

function get_facs_calibur_commodities()
{
	$facs_calibur_commodities=array();

	$sql_commodity="SELECT c.name,c.unit,c.category_id FROM commodity c, commodity_category cc where cc.id='1' AND cc.id=c.category_id ORDER BY cc.id";

	$commodity_results=$this->db->query($sql_commodity);

	foreach($commodity_results->result_array() as $commodity)
	{
		$facs_calibur_commodities[]=$commodity;
	}

	return $facs_calibur_commodities;
}

function get_facs_count_commodities()
{
	$facs_count_commodities=array();

	$sql_commodity="SELECT c.name,c.unit,c.category_id FROM commodity c, commodity_category cc where cc.id='3' AND cc.id=c.category_id ORDER BY cc.id";

	$commodity_results=$this->db->query($sql_commodity);

	foreach($commodity_results->result_array() as $commodity)
	{
		$facs_count_commodities[]=$commodity;
	}

	return $facs_count_commodities;
}

function get_cyflow_commodities()
{
	$cyflow_commodities=array();

	$sql_commodity="SELECT c.name,c.unit,c.category_id FROM commodity c, commodity_category cc where cc.id='2' AND cc.id=c.category_id ORDER BY cc.id";

	$commodity_results=$this->db->query($sql_commodity);

	foreach($commodity_results->result_array() as $commodity)
	{
		$cyflow_commodities[]=$commodity;
	}

	return $cyflow_commodities;
}

function get_poc_commodities()
{
	$poc_commodities=array();

	$sql_commodity="SELECT c.name,c.unit,c.category_id FROM commodity c, commodity_category cc where cc.id='4' AND cc.id=c.category_id ORDER BY cc.id";

	$commodity_results=$this->db->query($sql_commodity);

	foreach($commodity_results->result_array() as $commodity)
	{
		$poc_commodities[]=$commodity;
	}

	return $poc_commodities;
}

function get_haematology_commodities()
{
	$haematology_commodities=array();

	$sql_commodity="SELECT c.name,c.unit,c.category_id FROM commodity c, commodity_category cc where cc.id='5' AND cc.id=c.category_id ORDER BY cc.id";

	$commodity_results=$this->db->query($sql_commodity);

	foreach($commodity_results->result_array() as $commodity)
	{
		$haematology_commodities[]=$commodity;
	}

	return $haematology_commodities;
}

function get_biochemistry_commodities()
{
	$biochemistry_commodities=array();

	$sql_commodity="SELECT c.name,c.unit,c.category_id FROM commodity c, commodity_category cc where cc.id='6' AND cc.id=c.category_id ORDER BY cc.id";

	$commodity_results=$this->db->query($sql_commodity);

	foreach($commodity_results->result_array() as $commodity)
	{
		$biochemistry_commodities[]=$commodity;
	}

	return $biochemistry_commodities;
}



}
?>