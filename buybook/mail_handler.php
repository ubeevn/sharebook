<?php
	if(isset($_POST['submit'])){
		$namebook=$_POST['namebook'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$soluong=$_POST['soluong'];
		$address=$_POST['address'];
		$msg=$_POST['msg'];
		


		$to='truongcongloi1998@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="namebook :".$namebook."\n"."soluong :".$soluong."\n"."Name :".$name."\n"."email :".$email."\n"."Phone :".$phone."\n"."Address :".$address."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>