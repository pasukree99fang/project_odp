<?php include 'connectdb.php';?>
<?phpsession_start();?>

    <?php
        $strSQL = "SELECT * FROM tb_form_element";
        $objQuery = mysqli_query($mysqli,$strSQL);
    ?>
    <table width="400" border="1">
        <tr>
            <th width="100"> <div align="center">Files ID </div></th>
            <th width="150"> <div align="center">Files Name </div></th>
            <th width="150"> <div align="center">... </div></th>
        </tr>
        <?php
            while($objResult = mysqli_fetch_array($objQuery))
            { ?>
        <tr>
            <td><div align="center"><?php echo $objResult["ele_id"];?></div></td>
            <td><center><a href="file/<?php echo $objResult["ele_version_id"];?>"><?php echo $objResult["ele_version_id"];?></a></center></td>
            <td><div align="center">Edit</div></td>
        </tr>
        <?php } ?>
    </table>
    <?php
    mysqli_close($mysqli);
    ?>