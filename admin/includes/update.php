






<form class = "mt-5"  action="" method='post'>



<div class='form-group'>



<label for="cat-title">category update</label>


<?php

                                if(isset($_GET['edit'])){
                                    $cat_id = $_GET['edit'];

                                $query = "SELECT * FROM category WHERE cat_id = $cat_id";

                                $select_categories_id = mysqli_query($conn , $query);

                                while($row = mysqli_fetch_assoc($select_categories_id)){
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];

               ?>



<input value="<?php if(isset($cat_title)) { echo $cat_title;} ?>" type="text" class="form-control" name="cat_title">
                                <?php  }}?>




<?php


         ///Update query

         if(isset($_POST['update_category'])){

            $the_cat_title = $_POST['cat_title'];

        $query = "UPDATE category SET cat_title = '{$the_cat_title }' WHERE cat_id = {$cat_id}";
        $update_query = mysqli_query($connection , $query);

        if(!$update_query){
            die("query failed" .mysqli_error($connection));
        }
                }


?>




</div>

<div class='form-group'>


<input type="submit" name='submit'  class='form-controll btn btn-primary' name="update_category" value="Update Category">



</div>








</form>