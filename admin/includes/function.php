
<?php    include 'db.php'  ?>



<?php


function confirmQuery($result){

global $conn;


    if(!$result){


die('failde connecte' . mysqli_error($conn) ) ;



    } else{



echo "connected with post table";

    }






}






function insertdata(){

global $conn;


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







}


//find category data



function  finddata(){


    global $conn;

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




}



function deleteData(){



    if (isset($_GET['delete'])) {

        echo 'yees itis delete func';



            $the_cat_id = $_GET['delete'];

            $query = "DELETE FROM category WHERE cat_id = {$the_cat_id}";
            $delete_query = mysqli_query($conn, $query);
            header("Location:  category.php");
        }





}







?>