<script>
$( document ).ready(function() {

	$('#tests_table').dataTable({
		"bJQueryUI":true, 
		//"sAjaxSource": "<?php //echo base_url('poc/tests/ss_dt_tests'); ?>" ,
		"aoColumnDefs": [
		{ "bSortable": false, "aTargets": [ 0 ] }
		],
		"aaSorting": [[1, 'asc']]

		
	});	
});
</script>