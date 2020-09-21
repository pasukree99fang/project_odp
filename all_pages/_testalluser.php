<?php include 'connectdb.php';?>
<?php session_start();?>   
         <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <!-- Loop for show all user-->
                  <?php
                  $sqluser = "SELECT * FROM tb_user "; 

                  $queryuser = mysqli_query($mysqli,$sqluser);
                  $resultuser = mysqli_fetch_array($queryuser,MYSQLI_ASSOC);
                  do{ ?>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html"><?php echo $resultuser['us_firstname'];//echo $resultuser['us_lastname'];?></a></td>
                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">5 mins ago</td>
                  </tr>
                  <?php } while($resultuser = null) ; ?>

                </tbody>
                </table>

            </div>