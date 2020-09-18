<?php
ob_start();
session_start();
include_once("../framework/sitefunc.php");
include_once("../framework/config.php");



if(isset($_SESSION['log']))
{
    // logged in
    include_once("header.php");
    $result=mysqli_query($con,"SELECT * FROM branchnumber");
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Branch Name</th>
                             <th>Branch phone number</th>
                            <th>edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    
            <?php
            while($row=mysqli_fetch_array($result))
            {
                ?>
                        <tr>
                              <?php
                              $ph=$row['bn_id'];
                              $result1=mysqli_query($con,"SELECT * FROM branch WHERE b_id =$ph");
                              if($result1)
                              {
                                $row1=mysqli_fetch_array($result1)
                                ?>
                                <td><?php echo $row1['b_name']; ?></td>
                                <td><?php echo $row['bn_phonenum']; ?></td>
                                <?php
                                
                              }
                              
                              ?>
                              
                             <td><a href="editphone.php?phone=<?php echo $row['bn_phonenum']; ?>"><span style="color: blue" >edit</span></a></td>
                            <td><a href="deletephone.php?phone=<?php echo $row['bn_phonenum']; ?>"><span style="color: red">delete</span></a></td>
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
            redirect("2","addbranch.php");
        }
    }
    else
    {
        output_msg("f","Unexpected Error");
        redirect(2,"viewbranch.php");
    }
    include_once("footer.php");
}
else
{
    include_once("login.php");
}

?>