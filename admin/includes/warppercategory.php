<?php   include'db.php' ?>


<?php    include 'function.php'  ?>

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




<!-- INSERT CATEGORY DATA -->




<?php    insertdata()  ?>







<form  class = "mt-5" action="" method='post'>

<div class='form-group'>


<label for="cat-title">category add</label>
<input type="text" class='form-controll ' name=cat_title>



</div>

<div class='form-group'>


<input type="submit" name='submit'  class='form-controll btn btn-primary' value='send' name=cat-title>



</div>






</form>




<hr>

<!--**********************   update category form  *******************************-->



<?php  include 'update.php' ?>





</div>

<div class='col-xs-6'>








<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">category title</th>

  </thead>
  <tbody>

<?php    finddata();  ?>





<?php deleteData();  ?>




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

