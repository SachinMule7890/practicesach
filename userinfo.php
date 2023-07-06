<?php 
session_start();
$con = new mysqli("localhost", "root", "" ,"test");
if($_POST['submit']);

{
    $Order_Date           = $_POST["Order_Date"];
    $Company              = $_POST["Company"];
    $Owner                = $_POST["Owner"];
    $Items                = $_POST["Items"];
    $Quantity             = $_POST["Quantity"];
    $Weight               = $_POST["Weight"];
    $Request_for_Shipment = $_POST["Request_for_Shipment"];
    $Tracking_ID          = $_POST["Tracking_ID"];
    $Shipment_Size        = $_POST["Shipment_Size"];
    $Box_Count            = $_POST["Box_Count"];
    $Specification        = $_POST["Specification"];
    $Checklist_Quantity   = $_POST["Checklist_Quantity"];
    $username=$_SESSION['username'];

    $query = "INSERT INTO USER_INFO VALUES('$Order_Date ','$username','$Company ','$Owner','$Items','$Quantity','$Weight','$Request_for_Shipment',
    '$Tracking_ID','$Shipment_Size','$Box_Count','$Specification','$Checklist_Quantity')";

    $data = mysqli_query($con,$query);
    if($data){
        echo"Data Inserted Into Database";
    }
    else{
        echo"Failed";
    }
    
}

?>





