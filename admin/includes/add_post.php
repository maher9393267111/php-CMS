<?php include 'function.php'  ?>

<?php
    if(isset($_POST['create_post'])){
        $post_title = $_POST['post_title'];
        $post_author = $_POST['post_author'];
         $post_category_id = $_POST['post_cat_id'];
        $post_status = $_POST['post_status'];

        $post_image = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['tmp_name'];

        $post_tag = $_POST['post_tag'];
        $post_content = $_POST['post_content'];
        $post_date = date('d-m-y');


        move_uploaded_file($post_image_temp, "../images/$post_image");

        $query = "INSERT INTO post(post_cat_id, post_title, post_author,post_date, post_image, post_content, post_tag, post_status) VALUE({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tag}','{$post_status}')";
      



        // $query = "INSERT INTO post(post_cat_id, post_title, post_author, post_date,post_image,post_content,post_tag,post_status )  ";

        // $query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}', now(),'{$post_image}','{$post_content}','{$post_tag}', '{$post_status}') ";

        $create_post_query = mysqli_query($conn, $query);

        confirmQuery($create_post_query);

    }

?>



<form action="" method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" class="form-control" name="post_title">
</div>

<!-- <div class="form-group">
<select name="post_category" id="post_category" class="form-control ">

</select>
</div> -->

<div class="form-group">
    <label for="category">category_id</label>
    <input type="text"  class="form-control" name="post_cat_id">
</div>





<div class="form-group">
    <label for="title">Post Author</label>
    <input type="text" class="form-control" name="post_author">
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
    <input type="text"  class="form-control" name="post_status">
</div>




<div  class="file-path-wrapper">
    <label for="title">Post Image</label>
    <input type="file"  name="image">
</div> </br>

<div class="form-group">
    <label for="title">Post Tag</label>
    <input type="text"  class="form-control" name="post_tag">
</div>

<div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea type="text" class="form-control" name="post_content" id="body" cols="30" rows="10">
    </textarea>
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
</div>

</form>


<!-- <script>
ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script> -->


<!--




