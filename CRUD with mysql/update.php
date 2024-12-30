<?php
require( 'config.php' );
echo '<br>';

try {
    $id = $_GET[ 'id' ];
    $find = $conn->prepare( "SELECT * FROM students WHERE id='$id'" );
    $find->execute();
    $student = $find->fetch();
    echo "<form method='post'>";
    echo "<input type='text' name='name' value='".$student[ 'name' ] . "'/>";
    echo '<br><br>';
    echo "<input type='text' name='stream' value='".$student[ 'stream' ] . "'/>";
    echo '<br><br>';
    echo "<input type='text' name='cgpa' value='".$student[ 'cgpa' ] . "'/>";
    echo '<br><br>';
    echo "<button name='update' id='$id'>update</button>";
    echo '</form>';
    if ( isset( $_POST[ 'update' ] ) ) {
        $name = $_POST[ 'name' ];
        $stream = $_POST[ 'stream' ];
        $cgpa = $_POST[ 'cgpa' ];
        $update = $conn->prepare( "UPDATE students SET 
    name='$name',
    stream ='$stream',
    cgpa = '$cgpa'
     WHERE id='$id'" );

         if($update->execute()){
         header('location:populate.php');
         }else{
            echo "Update failed";
         }
    }
} catch ( PDOException $e ) {
    echo "Error while fetching the student $e->getMessage()";
}

?>