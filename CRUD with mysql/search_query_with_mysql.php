<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Query with database</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="search" placeholder="enter name to find">
        <br><br>
        <button>Search</button>
    </form>
</body>
</html>

<?php
include("config.php");
echo "<br>";

if (isset($_POST['search'])) {
     $search = $_POST['search'];
     try {
        // Step 1: Fetch data from the database
        //  $data = $conn->prepare( "SELECT * FROM students WHERE name='$search'  ");
        //the above one is used to search exact name
         $data = $conn->prepare( "SELECT * FROM students WHERE name LIKE '%$search%'  ");
         //this find any character 
        $data->execute();
        $students = $data->fetchAll( PDO::FETCH_ASSOC );
        // Fetch as associative array
    
        // Step 2: Check if there are records
        if ( count( $students ) > 0 ) {
            echo "<table border='1'>";
    
            // Step 3: Generate table headers dynamically
            echo '<thead><tr>';
            foreach ( array_keys( $students[ 0 ] ) as $column ) {
                echo '<th>' . htmlspecialchars( ucwords( $column ) ) . '</th>';
    
            }
            echo '<th>'. 'Actions'.'</th>';
            echo '</tr></thead>';
    
            // Step 4: Generate table rows
            echo '<tbody>';
            foreach ( $students as $student ) {
                echo '<tr>';
                foreach ( $student as $key => $value ) {
                    echo '<td>' . htmlspecialchars( $value ) . '</td>';
                }
                echo '<td>' ."<form method='post'><button name='btn' value=".$student[ 'id' ].'>'.'Delete'.'</button></form>'. '</td>';
                echo "<td><a href='update.php?id=".$student['id']."'>edit</a></td>";
                echo '</tr>';
            }
            echo '</tbody>';
    
            echo '</table>';
        } else {
            echo 'No records found.';
        }
    } catch ( PDOException $e ) {
        echo 'Error: ' . $e->getMessage();
        // Better to log this in production
    }
    if ( isset( $_POST[ 'btn' ] ) ) {
        $toDelete = $_POST[ 'btn' ];
        $deleteData = $conn->prepare( "DELETE FROM students WHERE id='$toDelete'" );
        if ( $deleteData->execute() ) {
            header("refresh: 0");
            echo 'Deleted the data from the database';
        } else {
            echo 'record not deleted';
        }
    
    }

}

?>