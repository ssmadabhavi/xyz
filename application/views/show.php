
<html>
<body><br/>
<?php foreach($customer as $val) {?>
<label>First Name : </label><?php echo $val['first_name'];?><br/>
<label>Last Name : </label><?php echo $val['last_name'];?><br/>
<label>Address : </label><?php echo $val['address'];?><br/>
<br/>
<?php } ?>
</body>
</html>