
<?php
$name = $_POST['name'];
$from = $_POST['email'];
$message = $_POST['message'];
$headers = "From: $name <$from>\r\n"."MIME-Version: 1.0" . "\r\n" ."Content-type: text/html; charset=UTF-8" . "\r\n"; 
if(mail('shubham.trivedi2013@gmail.com', $subject, $message,$headers))
{
	?>  
	<script type="text/javascript">
		document.getElementById('middle').innerHTML = "Succeessfully Sent<br>We will contact soon";
	</script>
	<?php
}
else
{
	?>  
	<script type="text/javascript">
		document.getElementById('middle').innerHTML = "Something Went wrong";
	</script>
	<?php
}

?>
