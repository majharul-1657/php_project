 <h1><i class="fa fa-user-user"></i>All product</h1>
 <ol class="breadcrumb">
     <li><a href="index.php?page=dashborde"><i class="fa fa-dashboard "></i>Dashboard</a></li>
  </ol>




 <div class="table-responsive">
     <table class="table table-hover table-bordered" id="data">
         <thead>
             <tr>
                 <th>Id</th>
                 <th>Title</th>
                 <th>Description</th>
                 <th>Category</th>
                 <th>Price </th>
                 <th>URL</th>
                 <th>ImageURL</th>

             </tr>
         </thead>
         <tbody>
             <?php
                                
                                $db_info = mysqli_query($linkdata, "SELECT * FROM `product_info`");
                                
                                while($row = mysqli_fetch_assoc($db_info)){ ?>

             <tr>
                 <td><?php echo $row['id'];?> </td>
                 <td><?php echo $row['Title'];?></td>
                 <td><?php echo $row['Description'];?></td>
                 <td><?php echo $row['Category'];?></td>
                 <td><?php echo $row['URL'];?></td>
                 <td><?php echo $row['Price'];?></td>
                 <td><img src="./images/<?php echo $row['photo']; ?>" style="width:100px" alt=""></td>
               
             </tr>
             <?php
                                }
                                    ?>

         </tbody>

     </table>
 </div>
