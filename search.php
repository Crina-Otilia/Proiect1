<?php
          include 'connection.php';
          $sql="SELECT * FROM porduct ";
           
        $query= mysqli_query($con, $sql) or die(mysqli_error($con));
          //if(!isset($_POST['reset']))
            //{
            if(isset($_POST["search"]))
                    {
                        $search_term = mysqli_real_escape_string($con, $_POST["search"]);
                        $sql.="WHERE title='{$search_term}'";?>
                        <table width="30%" cellpadding="4"cellspace="4"rules="rows">
            <tr>
                <th>Nume </th>
                <th>Image</th>
                <th colspan="3"align="center">Action</th>
            </tr>
            <?php
            while($row= mysqli_fetch_array($query)){
                if($row['title']==$search_term){
?>
            <tr style="border-bottom: 1px solid black;">
                <td><div class="h5 mb-0 font-weight-bold text-gray-800">Nume:</div>
                            <div class="h5 mb-0 font-italic text-gray-500"><?php echo $row['title'];?></div>
                    </div>
        </td>
                <td><img src="<?php echo $row['image'];?>"</td>
                <td>
                    <?php echo "<a href=\"view.php?id=".$row['id']."\">View</a> <a href=\"edit.php?id=".$row['id']."\">Edit</a> <a href=\"delete.php?id=".$row['id']."\" onclick=\"return confirm('Are yu sure?')\">Delete</a> "?>
                </td>
            </tr>
            <?php }} ?>
             </table>
          <a href="upload.php">Incarca un alt produs</a><?php
                        
                    }
           // }
          $query=mysqli_query($con,$sql)or die(mysqli_error($con));
         ?>