<?php 
include 'config/config.php';

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        <title>My Reservations</title>
    </head>
    <body>
        <div class="container">
            <?php include 'handlers/reservationHandler.php';?>
            <div class="user-inputs">
                <form id="reservation-form" method="post">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" name="date" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <input type="text" name="party-name" id="party-name" placeholder="Party name">
                    <input type="number" id="party-size" placeholder="Size of party" name="party-size" min="1" max="10">
                    <input type="submit" name="submit" value="Check Availability" id="submit">
                </form>
            </div>
        </div>

        <!-- date time picker jquery plugin -->
        <script>
            //prevent form resubmission request
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
            var today = new Date();
            $(function () {
                $('#datetimepicker1').datetimepicker({stepping: 15, defaultDate: moment(today)});
            });
        </script>
    </body>
    </html>