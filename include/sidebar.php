<?php   include 'db.php'  ?>

<?php

if(isset($_POST['submit'])){




 $search =$_POST['search'];


$query = "SELECT * FROM post WHERE post_tag LIKE  '%$search %' ";

$search_query =   mysqli_query($conn,$query) ;

if(!$search_query){


die('query failed' . mysqli_error($conn));


}





$rowscount = mysqli_num_rows($search_query);


if($rowscount == 0){


echo  'NO Result sorry';

}


if($rowscount  > 0){


    echo $rowscount ;

    }


}



?>


 <div class="col-md-4">

<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>

   <!-- search form -->

<form action="search.php" method='post'>

    <div class="input-group">
        <input type="text" name= 'search' class="form-control">
        <span class="input-group-btn">
            <button class="btn btn-default" name='submit' type="submit" >
                <span class="glyphicon glyphicon-search">search</span>
        </button>
        </span>
    </div>
    <!-- /.input-group -->


    </form>

       <!-- /.search form -->


</div>

<!-- Blog Categories Well -->
<div class="well">
    <h4>Blog Categories</h4>
    <div class="row" style='display:flex; '>
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <ul class="list-unstyled">

<?php
$query = "SELECT * FROM category   ";

$select_all_title =   mysqli_query($conn,$query) ;

if(!$select_all_title){


die('query failed' . mysqli_error($conn));


}




while($row=$select_all_title->fetch_assoc())
{

$cat_title = $row['cat_title'];



?>

<!-- loop html here -->

<li><a href="#"> <?php  echo $cat_title  ?></a>





 <?php }


?>





            </ul>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->


<?php    include 'include/widget.php'  ?>



</div>