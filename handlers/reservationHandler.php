<?php

include 'config/config.php';

if(isset($_POST['submit'])){
    //query the database and check if a reservation has been made already in that date the user requested
    $checkAllSql = 'SELECT * FROM reservations';
    $stmt = $conn->prepare($checkAllSql);
    $stmt->execute();
    $reservations = $stmt->fetchAll();

    //grab the data from the user, the convert it into the correct datetime format, then prepare and execute the mysql query using positional params
    function makeReservation($conn){
        $input_date = $_POST['date'];
        $party_size = $_POST['party-size'];
        $party_name = $_POST['party-name'];
        $date = date("Y-m-d H:i:s",strtotime($input_date));
        //insert the reservation if there isn't already one scheduled at that time
        $sql = 'INSERT INTO reservations (date, party_name, party_size) VALUES (?,?,?)';
        $stmt = $conn->prepare($sql);
        $stmt->execute([$date, $party_name, $party_size]);

        echo '<div id="error">Reservation has been made!</div>';
    };

    if(count($reservations) == 0){
        makeReservation($conn);
    }else{
        forEach($reservations as $r){
            $input_date = $_POST['date'];
            $date = date("Y-m-d H:i:s",strtotime($input_date));
            if($date == $r['date']){
                echo '<div id="error">Pick another time!</div>';
                return;
            }
        };
        makeReservation($conn);
    };

    
};

?>