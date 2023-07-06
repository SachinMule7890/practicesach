<?php 
$con = new mysqli("localhost", "root", "" ,"test");
$query = "select SUM(Quantity) AS total_quantity, SUM(Weight) AS total_weight, SUM(Box_Count) AS total_box_count from user_info where username='customer1'";
$result = mysqli_query($con,$query);

$query2 = "select SUM(Quantity) AS total_quantity, SUM(Weight) AS total_weight, SUM(Box_Count) AS total_box_count from user_info where username='customer2'";
$result2 = mysqli_query($con,$query2);

 //print_r($result);
 while($row = mysqli_fetch_assoc($result)){

 $total_quantity1= $row['total_quantity'];
 $total_weight1= $row['total_weight'];
 $total_box_count1= $row['total_box_count'];
    

}

while($row2 = mysqli_fetch_assoc($result2)){

    $total_quantity2= $row2['total_quantity'];
    $total_weight2= $row2['total_weight'];
    $total_box_count2= $row2['total_box_count'];
       
   
   }
   $final_quantity=$total_quantity1+$total_quantity2;
   $final_weight=$total_weight1+$total_weight2;
   $final_box_count=$total_box_count1+$total_box_count2;
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <style>
        table {
          border-collapse: collapse;
          width: 100%;
        }
        
        th, td {
          border: 1px solid black;
          padding: 8px;
          text-align: left;
        }
        </style>
</head>
<body>
    <form action="connection.php">
        <div class="card-body">
         <table class="table" >
            <tr >
                <th style="background-color: Aqua;">Items/Coustomer</th>
                <th style="background-color: RoyalBlue;">Customer1</th>
                <th style="background-color: RoyalBlue;">Customer2</th>
                <th style="background-color: RoyalBlue;">Total</th>
            </tr>
            <tr>
                <th style="background-color: Khaki;">Quantity</th>
                <td style="background-color: Silver ;"> <?php echo $total_quantity1; ?></td>
                <td style="background-color: Silver ;"> <?php echo $total_quantity2; ?></td>
                <td style="background-color: Silver ;"> <?php echo $final_quantity; ?></td>
                    
                    
                    
              
                
            </tr>
            <tr>
                <th style="background-color: Khaki;">Weight</th>
              
                    <td style="background-color: Aqua;"><?php echo $total_weight1; ?></td>
                    <td style="background-color: Aqua;"><?php echo $total_weight2; ?></td>
                    <td style="background-color: Aqua;"><?php echo $final_weight; ?></td>
                    
                    
                    
               
            </tr>
            <tr>
                <th style="background-color: Khaki;">Box Count</th>
                <td style="background-color: Silver ;"><?php echo $total_box_count1; ?></td>
                <td style="background-color: Silver ;"><?php echo $total_box_count2; ?></td>
                <td style="background-color: Silver ;"><?php echo $final_box_count; ?></td>

            </tr>

         </table>
        </div>

       
    </form>
    
</body>
</html>