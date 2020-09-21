<?php include 'connectdb.php'; ?>
<?php $sqluser = "SELECT us_firstname,us_lastname FROM tb_user where us_company_id = 1 " ; 
     $queryuser = mysqli_query($mysqli,$sqluser);
     $resultuser = mysqli_fetch_array($queryuser,MYSQLI_ASSOC);
    
    echo $resultuser[0];
    
   }

    // echo $resultuser["us_firstname"] ; 
    // echo " " ;
    // echo $resultuser["us_lastname" ];

    

?>
