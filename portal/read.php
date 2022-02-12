<?php
// Check existence of id parameter before processing further
if (isset($_GET["sub_id"]) && !empty(trim($_GET["sub_id"]))) {
    // Include config file
    require_once "config.php";

    // Prepare a select statement
    $sql = "SELECT * FROM subscribers WHERE sub_id = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $param_id);

        // Set parameters
        $param_id = trim($_GET["sub_id"]);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = $result->fetch_array(MYSQLI_ASSOC);

                // Retrieve individual field value
                $sub_id = $row["sub_id"];
                $sub_fname = $row["sub_fname"];
                $sub_lname = $row["sub_lname"];
                $sub_email = $row["sub_email"];
                $sub_company = $row["sub_company"];
                $sub_add1 = $row["sub_add1"];
                $sub_add2 = $row["sub_add2"];
                $sub_city = $row["sub_city"];
                $sub_state = $row["sub_state"];
                $sub_zip = $row["sub_zip"];
                $sub_note = $row["sub_note"];
                $sub_contact_preference = $row["sub_contact_preference"];
                $sub_enroll_date = $row["sub_enroll_date"];
            } else {
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    $stmt->close();

    // Close connection
    $mysqli->close();
} else {
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                        <label>ID#</label>
                        <p><b><?php echo $row["sub_id"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>First Name:</label>
                        <p><b><?php echo $row["sub_fname"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Last Name:</label>
                        <p><b><?php echo $row["sub_lname"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <p><b><?php echo $row["sub_email"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Company:</label>
                        <p><b><?php echo $row["sub_company"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Address Line 1:</label>
                        <p><b><?php echo $row["sub_add1"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Address Line 2:</label>
                        <p><b><?php echo $row["sub_add2"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>City:</label>
                        <p><b><?php echo $row["sub_city"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>State:</label>
                        <p><b><?php echo $row["sub_state"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>ZIP:</label>
                        <p><b><?php echo $row["sub_zip"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Note:</label>
                        <p><b><?php echo $row["sub_note"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Contact Preference:</label>
                        <p><b><?php echo $row["sub_contact_preference"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Enroll Date:</label>
                        <p><b><?php echo $row["sun_enroll_date"]; ?></b></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>