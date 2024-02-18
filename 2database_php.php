
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database1234";
$feedback=0;
$About_Web=0;
$Eligibility=0;
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $Name = $_POST['Name'];
	 $Email = $_POST['Email'];
	 $Phone = $_POST['Phone'];
      $Message = $_POST['Message'];


	 

	 $sql_query = "INSERT INTO `entry`(`Name`, `Email`, `Phone`,`Message`) VALUES 
	  ('$Name','$Email','$Phone','$Message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "Hey Harshal , New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Email Repeated";
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>