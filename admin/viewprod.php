<?php
ob_start();
session_start();
include_once("../framework/sitefunc.php");
include_once("../framework/config.php");



if(isset($_SESSION['log']))
{
    // logged in
    include_once("header.php");
    $result=mysqli_query($con,"SELECT * FROM product");
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Category name</th>
                              <th>Product Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    
            <?php
            while($row=mysqli_fetch_array($result))
            {
                ?>
                        <tr>
                            
                            <td><?php echo $row['p_id']; ?></td>
                            <td><?php echo $row['p_name']; ?></td>
                            <?php
                            $pcid=$row['pc_id'];
                            $result1= mysqli_query($con,"SELECT c_name FROM category WHERE c_id='$pcid'");
                            if($result1)
                            {
                                $row1=mysqli_fetch_array($result1);
                                $cname=$row1['c_name'];
                                ?>
                                <td><?php echo $row1['c_name']; ?></td>
                                <?php
                                
                            }
                            ?>
                            
                           <td><img src="../imgs/<?php echo $row['p_img']; ?>" style="width: 200px; height: 200px;"></td>
                           
                            <td><a href="editprod.php?pid=<?php echo $row['p_id']; ?>"><span>edit</span></a></td>
                            <td><a href="deleteprod.php?pid=<?php echo $row['p_id']; ?>"><span style="color: red">delete</span></a></td>
                        </tr>
                <?php
            }
            ?>
                    </tbody>
                </table>
            <?php
        }
        else
        {
            output_msg("f","There is no data");
            redirect("2","addprod.php");
        }
    }
    else
    {
        output_msg("f","Unexpected Error");
        redirect(2,"viewprod.php");
    }
    include_once("footer.php");
}
else
{
    include_once("login.php");
}

?>