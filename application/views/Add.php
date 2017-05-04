<?php ?>
<!doctype html>
<head>
<title>Add Form</title>
  	<meta charset="UTF-8">
  	<meta name="description" content="Codeigniter test">
  	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
  	<meta name="author" content="Sagar Madabhavi">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" type="text/css">
	   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
	   <script src="<?php echo base_url();?>/assets/js/jquery-3.2.1.min.js" charset="utf-8"></script>
<script>

$(document).ready(function() {

});

</script>
</head>
<body>
<div>Add Form Customer</div>
<br/>
<div>
<?php
	$attributes = array (
							'class'=>"",
							'id'=>'myform',
							'name'=> ''
					);
echo form_open( 'main/insert_cust', $attributes );
?>
<?php 
$attributes = array(
		'class' => '',
		'style' => 'color: #000;'
);

echo form_label('First Name :', 'first_name', $attributes);

?>
<?php 

$data = array(
		'type'  => 'text',
		'name'  => 'first_name',
		'id'    => 'first_name',
		'value' => '',
		'class' => 'form-control',
	 	'maxlength'=> '100',
        'size'=> '50'
		);

echo form_input($data);

?>
<br/><br/>
<?php 
$attributes = array(
		'class' => '',
		'style' => 'color: #000;'
);

echo form_label('Last Name :', 'last_name', $attributes);

?>

<?php 

$data = array(
		'type'  => 'text',
		'name'  => 'last_name',
		'id'    => 'last_name',
		'value' => '',
		'class' => 'form-control',
	 	'maxlength'=> '100',
        'size'=> '50'
		);

echo form_input($data);

?>
<br/><br/>
<?php 
$attributes = array(
		'class' => '',
		'style' => 'color: #000;'
);

echo form_label('Address :', 'address', $attributes);

?>
<?php 

$data = array(
		'type'  => 'text',
		'name'  => 'address',
		'id'    => 'address',
		'value' => '',
		'class' => 'form-control',
	 	'maxlength'=> '100',
        'size'=> '100'
		);

echo form_input($data);

?>
<br/><br/>

<?php 
$data = array(
		'type'  => 'submit',
		'name'  => 'mysubmit',
		'id'    => 'mysubmit',
		'value' => 'Submit',
		'class' => 'btn btn-primary',
		'maxlength'=> '100',
		'size'=> '100'
);
echo form_submit($data);

?>

</div>

   
</body>

</html>