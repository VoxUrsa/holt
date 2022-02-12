<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Subscriber Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Subscriber</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM subscribers";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID #: </th>";
                                        echo "<th>First Name: </th>";
                                        echo "<th>Last Name: </th>";
                                        echo "<th>Email: </th>";
                                        echo "<th>Company: </th>";
                                        echo "<th>Address Line 1: </th>";
                                        echo "<th>Address Line 2: </th>";
                                        echo "<th>City: </th>";
                                        echo "<th>State: </th>";
                                        echo "<th>ZIP: </th>";
                                        echo "<th>Notes: </th>";
                                        echo "<th>Delivery Preference: </th>";
                                        echo "<th>Subscribe Date: </th>";
                                        echo "<th>Actions: </th>";

                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                    echo "<td>" . $row['sub_id'] . "</td>";
                                    echo "<td>" . $row['sub_fname'] . "</td>";
                                    echo "<td>" . $row['sub_lname'] . "</td>";
                                    echo "<td>" . $row['sub_email'] . "</td>";
                                    echo "<td>" . $row['sub_company'] . "</td>";
                                    echo "<td>" . $row['sub_add1'] . "</td>";
                                    echo "<td>" . $row['sub_add2'] . "</td>";
                                    echo "<td>" . $row['sub_city'] . "</td>";
                                    echo "<td>" . $row['sub_state'] . "</td>";
                                    echo "<td>" . $row['sub_zip'] . "</td>";
                                    echo "<td>" . $row['sub_note'] . "</td>";
                                    echo "<td>" . $row['sub_contact_preference'] . "</td>";
                                    echo "<td>" . $row['sub_enroll_date'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?sub_id='. $row['sub_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?sub_id='. $row['sub_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?sub_id='. $row['sub_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            $result->free();
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    
                    // Close connection
                    $mysqli->close();
                    ?>
                </div>
            </div>        
        </div>
    </div>

</body>
</html>