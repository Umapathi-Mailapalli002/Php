<?php
include( 'config.php' );

class Students {
    public $DBconn;

    public function __construct($conn) {
        $this->DBconn = $conn;
    }


    public function getData() {
        try {
            $details = $this->DBconn->prepare("SELECT * FROM students");
            $details->execute();
            $students = $details->fetchAll(PDO::FETCH_ASSOC); // Fetch data as an associative array
            echo '<pre>';
            print_r($students);
            echo '</pre>';
        } catch (PDOException $e) {
            echo "Error fetching data: " . $e->getMessage();
        }
    }

}

$data = new Students( $conn );
$data->getData();
?>