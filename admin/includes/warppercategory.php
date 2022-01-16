<?php   include'db.php' ?>

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
         Admin page
                <small>Author</small>
            </h1>



<div class='col-xs-6'>

<?php

if(isset($_POST['submit'])){


$cat_title = $_POST['cat_title'];

if($cat_title = '' || empty($cat_title)){


echo "<h1>the filld shoul be not empty man</h1>";

}


else{


    $query = "INSERT INTO category (cat_title)
    VALUES ('".$_POST["cat_title"]."')";




$create_category_query =   mysqli_query($conn,$query) ;


if(!$create_category_query ){


die('query failed' . mysqli_error($conn));
// echo 'connected with category table is failed . ';
}
else{

    echo 'connected with category table is successfully work';



}




}




}





?>









<form action="" method='post'>

<div class='form-group'>


<label for="cat-title">category add</label>
<input type="text" class='form-controll ' name=cat_title>



</div>

<div class='form-group'>


<input type="submit" name='submit'  class='form-controll btn btn-primary' value='send' name=cat-title>



</div>






</form>







</div>

<div class='col-xs-6'>


<?php
// $query = "SELECT * FROM category   ";

// $select_all_title =   mysqli_query($conn,$query) ;

// if(!$select_all_title){


// die('query failed' . mysqli_error($conn));


// }
?>





<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">category title</th>

  </thead>
  <tbody>

<?php


if($conn){

echo 'connected to database' . '</br>';

}

$query = "SELECT * FROM category   ";

$select_all_title =    mysqli_query($conn,$query) ;

if(!$select_all_title){


die('query failed' . mysqli_error($conn));


} else{


echo 'connected to categotry table';

}




  while($row =  mysqli_fetch_assoc($select_all_title))
{

$cat_title = $row['cat_title'];

$cat_id = $row['cat_id'];


echo "<tr scope='row'>";
echo "<td>{$cat_id}</td>";

echo "<td>{$cat_title}</td>";
echo "<td><a href='category.php?delete={$cat_id}'>Delete</a></td>";
echo "<td><a href='category.php?edit={$cat_id}'>Edit</a></td>";
echo "</tr>";


}


?>





  </tbody>

</table>





</div>






        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

