
<?php include'include/db.php'  ?>

<?php include'include/header.php'  ?>

    <!-- Navigation -->

    <?php include'include/nav.php'  ?>




    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">






            <?php   // LOOP TILL END OF DATA

$query = 'SELECT * from post';


$select_all_posts =  mysqli_query($conn,$query);

if($select_all_posts){


echo 'connecte truelly with post table';

}



                while($row=$select_all_posts->fetch_assoc())
                {

$post_title = $row['post_title'];

$post_author = $row['post_author'];
$post_date = $row['post_date'];
$post_tag = $row['post_tag'];
$post_content = $row['post_content'];

$post_image = $row['post_image'];


             ?>





<!-- HTML TASG HERE lOOP -->





                <h1 class="page-header">

                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"> <?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"> <?php echo $post_author  ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span>  <?php echo $post_date  ?></p>
                <hr>


                <img class="img-responsive" src="./images/<?php echo $post_image; ?>" alt="">

            

                <hr>
                <p> <?php echo $post_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>









         <?php }?>

















                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->

            <?php include'include/sidebar.php'  ?>



        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->


<?php include'include/footer.php'  ?>


