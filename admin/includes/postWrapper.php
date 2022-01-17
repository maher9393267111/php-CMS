<?php include 'db.php' ?>

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
         Admin page
                <small>Author maher gomah</small>
            </h1>


<!-- // TABLE POSTS -->


<div class="row" >


<div class='col-bg-12'>

<?php


if(isset($_GET['source'])){


                        $source = $_GET['source'];
                    }

                    else{
                        $source='';
                    }

                    switch($source){

                        case 'add_post';
                        include "includes/add_post.php";
                        break;

                        case 'edit_post';
                        include "includes/edit_post.php";
                        break;

                        case 'add post';
                        echo "nice";
                        break;

                        default:
                        include "includes/view_all_post.php";
                        //code here
                    }










?>









<?php

if(isset($_GET['delete'])){



$the_post_id = $_GET['delete'];

echo $the_post_id;


$query = " Delete  FROM post WHERE post_id ={$the_post_id}";


$delete_query = mysqli_query($conn,$query) ;


if(!$delete_query){

die('failed' . mysqli_error($conn));


}

}



?>





</div>





</div>









        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

