<?php 

	if (isset($_POST)['submit'])) 
	{
		$UserName = $_POST['name'];
		$Email = $_POST['email'];
		$Phone = $_POST['number'];
		$Message = $_POST['message'];

		if(empty($UserName)) || empty($Email) || empty($Phone) || empty($Message))
		{
			header('location:index.php?error');
		}
		else
		{
			$to = "gunawanrazer@gmail.com";

			if (mail($to,$Email,$Phone,$Message)) 
			{
				header("location:index.php?success");
			}
		}
	}
	else
	{
		header("location:index.php");
	}
?>
