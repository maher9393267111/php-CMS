

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


<form action="" method='post'>

<div class='form-group'>


<label for="cat-title">category add</label>
<input type="text" class='form-controll ' name=cat-title>



</div>

<div class='form-group'>


<input type="submit" name='submit'  class='form-controll btn btn-primary' value='send' name=cat-title>



</div>






</form>







</div>

<div class='col-xs-6'>


<?php
$query = "SELECT * FROM category   ";

$select_all_title =   mysqli_query($conn,$query) ;

if(!$select_all_title){


die('query failed' . mysqli_error($conn));


}
?>





<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">category title</th>

  </thead>
  <tbody>

<?php
  while($row=$select_all_title->fetch_assoc())
{

$cat_title = $row['cat_title'];

$cat_id = $row['cat_id'];

?>

<!-- loop html here -->

  <tr>
      <th scope="row"><?php  echo $cat_id ?></th>
      <td> <?php  echo $cat_title ?></td>

    </tr>





 <?php }


?>






    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>

    </tr> -->

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

