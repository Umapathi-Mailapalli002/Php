<?php
require( 'config.php' );
echo '<br>';

//with stactic
// $deleteData = $conn->prepare( "DELETE FROM students WHERE id='11'" );
// $deleteData->execute();
// echo 'Deleted the data from the database';
// echo '<br>';

// $remainingData = $conn->prepare( 'SELECT * FROM students' );
// $remainingData->execute();
// $result = $remainingData->fetchAll();
// echo '<br> data after deleting';
// echo '<pre>';
// print_r( $result );
// echo '</pre>';

//with table and on button click dynamically
try {
    // Step 1: Fetch data from the database
    $data = $conn->prepare( 'SELECT * FROM students' );
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
?>