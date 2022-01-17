
<?php  include 'db.php'?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Author</th>
      <th scope="col">Title</th>
      <th scope="col"> post_Category_id</th>
      <th scope="col">Status</th>
      <th scope="col">Image</th>
      <th scope="col">Tags</th>
      <th scope="col">Comments</th>
      <th scope="col">Date</th>

    </tr>
  </thead>
  <tbody>

<?php


$query = "SELECT * FROM post  ";

$select_all_posts =    mysqli_query($conn,$query) ;

if(!$select_all_posts){


die('query failed' . mysqli_error($conn));


} else{


echo 'connected to categotry table';

}




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



echo " <tr>";
echo "  <td >  $post_id</td>";
echo "  <td >  $post_author</td>";
echo "  <td >  $post_title</td>";
echo "  <td >  $post_cat_id</td>";
echo "  <td >   $post_status</td>";
echo "  <td >   <img class='img-responsive' src='../images/$post_image' ></td>";
echo "  <td >   $post_tag</td>";
echo "  <td >   $post_content</td>";
echo "  <td >   $post_date</td>";
echo "  <td >   <a  href='posts.php?delete=$post_id'>Delete </a></td>";

echo " <tr>";








}









// ?>




// <?php

// if(isset($_GET['delete'])){

// echo 'hello world ok';



// }



// ?>








  </tbody>
</table>
