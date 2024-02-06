  
                   
                   <h1><i class="fa fa-user-plus"></i>Add  product </h1>
                    <ol class="breadcrumb">
                       <li><a href="index.php?page=dashborde"><i class="fa fa-dashboard "></i>Dashboard</a></li>
                     </ol>
                    
<?php

    if(isset($_POST['add_product'])){
        $image = $_FILES['photo'] ['name'];
        $tempname=$_FILES['photo'] ['tmp_name'];    
        $name = $_POST['Title'];
        $roll = $_POST['Description'];
        $city = $_POST['Category'];
        $pcontuct = $_POST['Price'];
        $pcontuct = $_POST['URL'];
         $folder ="images/".$image;
    
        $query = "INSERT INTO `student_info`(`Title`, `Description`, `Category`,`Price`,`URL`,`ImageURL` ) VALUES ('$Title','$Description','$Category','$Price','$URL','$ImageURL')";

    if(mysqli_query($linkdata,$query)){
        $success = "Dat insert success";
    echo "move_uploaded_file($tempname, $folder)";
    if (move_uploaded_file($tempname, $folder)){
      header('Location:index.php');
        }
    }
        else{ 
              echo "Data can not be saved";
              mysql_error();
            }
    }
?>
   
 

   <div class="row">
     <div class="col-sm-6">
 
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">title</label>
                <input type="text" name="title" placeholder="title" id="title" class="form-control" required="">
            </div>
            <div class="form-group">
                <label for="roll">Description</label>
                <input type="text" name="Description" placeholder="Description" id="Description" class="form-control" pattern="[0-9]{6}"  required="">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <input type="text" name="Category" placeholder="Category" id="Category" class="form-control"  required="">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" name="Price" placeholder=" Price" id="Price" class="form-control" pattern="01[1|5|6|7|8|9][0-9]{8}"  required="">
            </div>
            
            <div class="form-group">
                <label for="">URL</label>
                <input type="text" name="URL" placeholder=" URL" id="URL" class="form-control" pattern="01[1|5|6|7|8|9][0-9]{8}"  required="">
            </div>
            
            
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" name="photo" id="picture"  required="">
            </div>
            
            
            <div class="form-group">
               <input type="submit" name="add_student" class="btn btn-primary ml-5"> 
            </div>
        </form>
 
        
    </div>
</div>