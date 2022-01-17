<?php include 'db.php'  ?>

<?php include 'function.php'  ?>

<?php


if(isset($_GET['p_id']))

{


$the_post_id = $_GET['p_id'];

}




$query = "SELECT * FROM post WHERE post_id = $the_post_id";

$select_all_posts =    mysqli_query($conn,$query) ;

// if(!$select_all_posts){


// die('query failed' . mysqli_error($conn));


// } else{


// echo 'connected to categotry table';



// }




while($row =  mysqli_fetch_assoc($select_all_posts)) {

    $post_id = $row['post_id'];
    $post_cat_id = $row['post_cat_id'];
    $post_title = $row['post_title'];

    $post_author = $row['post_author'];
    $post_date = $row['post_date'];
    $post_tag = $row['post_tag'];
    $post_content = $row['post_content'];
    $post_status = $row['post_status'];

    $post_image = $row['post_image'];

    echo   $post_title ;

}



// update form values when vutton clicked




if(isset($_POST['update_post'])){

    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_category_id = $_POST['post_cat_id'];
    $post_status = $_POST['post_status'];

    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];

    $post_tags = $_POST['post_tag'];
    $post_content = $_POST['post_content'];

    move_uploaded_file($post_image_temp, "../images/$post_image");

    if(empty($post_image)){



    $query = "SELECT * FROM post WHERE post_id = $the_post_id";

    $select_image = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($select_image)){

       $post_image = $row['post_image'];

    }
}

    $query = "UPDATE post SET " ;
    $query .="post_title = '{$post_title}', ";
    $query .="post_cat_id = '{$post_cat_id}', ";
    $query .="post_date = now(), ";
    $query .="post_author = '{$post_author}', ";
    $query .="post_status  = '{$post_status}', ";
    $query .="post_tag = '{$post_tag}', ";
    $query .="post_content = '{$post_content}', ";
    $query .="post_image = '{$post_image}' ";
    $query .="WHERE post_id = '{$the_post_id}' ";

    $update_post = mysqli_query($conn , $query);

    confirmQuery($update_post);

    echo "<p class='alert alert-success'>Update Sucessfully  " . "<a href='posts.php' >View Post</a></p>";






}








?>













<form action="" method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label  for="title">Post Title</label>
    <input value='<?php echo $post_title ?>' type="text" class="form-control" name="post_title">
</div>


<div class="form-group ">
<select name="post_cat_id" id="post_category" class="form-control ">
<?php
    $query = "SELECT * FROM category";
    $select_categories = mysqli_query($conn , $query);



    confirmQuery($select_categories);

    while($row = mysqli_fetch_assoc($select_categories)){
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];


        echo "<option value='$cat_id'>{$cat_title}</option>";
    }
?>
</select>








<div class="form-group">
    <label for="title">Post Author</label>
    <input value='<?php echo $post_author ?>' type="text" class="form-control" name="post_author">
</div>

<!-- <div class="form-group">
    <label for="title">Post Status</label>
    <select name="post_status" id="">
        <option value="draft">Select the option</option>
        <option value="published">Publish</option>
        <option value="draft">Draft</option>
    </select>
</div> -->

<!-- status -->

<div class="form-group">
    <label for="status">status</label>
    <input value='<?php echo $post_status ?>' type="text"  class="form-control" name="post_status">
</div>


<div  class="file-group">
    <label for="title">Post Image</label></br>
    <img width="100"  alt="" src="../images/<?php echo $post_image ?>">
    <input type="file"  name="image">
</div></br>


<div class="form-group">
    <label for="title">Post Tag</label>
    <input value='<?php echo $post_tag ?>' type="text"  class="form-control" name="post_tag">
</div>

<div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea value='<?php echo $post_content ?>' type="text" class="form-control" name="post_content" id="body" cols="30" rows="10">
    </textarea>
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_post" value="update_post">
</div>

</form>