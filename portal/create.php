<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$sub_fname = $sub_lname = $sub_email = $sub_company = $sub_add1 = $sub_add2 = $sub_city = $sub_state = $sub_zip = $sub_note = $sub_contact_preference = $sub_enroll_date = "";
// Only add err values to object we want to verify. 
$sub_fname_err = $sub_lname_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate First Name - Must Exist
    $input_sub_fname = trim($_POST["sub_fname"]);
    if (empty($input_sub_fname)) {
        $sub_fname_err = "Please enter a first name.";
    } elseif (!filter_var($input_sub_fname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $sub_fname_err = "Please enter a valid first name.";
    } else {
        $sub_fname = $input_sub_fname;
    }

    // Validate Last Name  - Must Exist
    $input_sub_lname = trim($_POST["sub_lname"]);
    if (empty($input_sub_lname)) {
        $sub_lname_err = "Please enter a last name.";
    } elseif (!filter_var($input_sub_lname, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $sub_lname_err = "Please enter a valid fisrt name.";
    } else {
        $sub_lname = $input_sub_lname;
    }



    // Partial Validation for existence of variable - While there are more efficient ways to run this, this test should prove theory
    $input_sub_email = trim($_POST["sub_email"]);
    if ($input_sub_email) $sub_email = $input_sub_email;
    $input_sub_company = trim($_POST["sub_company"]);
    if ($input_sub_company) $sub_company = $input_sub_company;
    $input_sub_add1 = trim($_POST["sub_add1"]);
    if ($input_sub_add1) $sub_add1 = $input_sub_add1;
    $input_sub_add2 = trim($_POST["sub_add2"]);
    if ($input_sub_add2) $sub_add2 = $input_sub_add2;
    $input_sub_city = trim($_POST["sub_city"]);
    if ($input_sub_city) $sub_city = $input_sub_city;
    $input_sub_state = trim($_POST["sub_state"]);
    if ($input_sub_state) $sub_state = $input_sub_state;
    $input_sub_zip = trim($_POST["sub_zip"]);
    if ($input_sub_zip) $sub_zip = $input_sub_zip;
    $input_sub_note = trim($_POST["sub_note"]);
    if ($input_sub_note) $sub_note = $input_sub_note;
    $input_sub_contact_preference = trim($_POST["sub_contact_preference"]);
    if ($input_sub_contact_preference) $sub_contact_preference = $input_sub_contact_preference;
    $input_sub_enroll_date = trim($_POST["sub_enroll_date"]);
    if ($input_sub_enroll_date) $sub_enroll_date = $input_sub_enroll_date;




    // Check input errors before inserting in database
    // If these values return True to being empty the command will pass
    if (empty($sub_fname_err) && empty($sub_fname_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO subscribers (sub_fname, sub_lname, sub_email, sub_company, sub_add1, sub_add2, sub_city, sub_state, sub_zip, sub_note, sub_contact_preference, sub_enroll_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        echo '<script>console.log("Insert Completed")</script>';
        if ($stmt = $mysqli->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssssssssss", $param_sub_fname, $param_sub_lname, $param_sub_email, $param_sub_company, $param_sub_add1, $param_sub_add2, $param_sub_city, $param_sub_state, $param_sub_zip, $param_sub_note, $param_sub_contact_preference, $param_sub_enroll_date);

            // Set parameters
            $param_sub_fname = $sub_fname;
            $param_sub_lname = $sub_lname;
            $param_sub_email = $sub_email;
            $param_sub_company = $sub_company;
            $param_sub_add1 = $sub_add1;
            $param_sub_add2 = $sub_add2;
            $param_sub_city = $sub_city;
            $param_sub_state = $sub_state;
            $param_sub_zip = $sub_zip;
            $param_sub_note = $sub_note;
            $param_sub_contact_preference = $sub_contact_preference;
            $param_sub_enroll_date = $sub_enroll_date;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                echo '<script>console.log("STMT Executed Correctly")</script>';
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else {
                echo '<script>console.log("Oops! Something went wrong. Please try again later.")</script>';
                if ($sub_add1) echo "Sub Add 1 exists" . $param_sub_add1 . "Param";
                if ($sub_add2) echo "Sub Add 2 exists" . $param_sub_add2 . "Param";

            }
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add subscriber record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="sub_fname" class="form-control <?php echo (!empty($sub_fname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sub_fname; ?>">
                            <span class="invalid-feedback"><?php echo $sub_fname_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="sub_lname" class="form-control <?php echo (!empty($sub_lname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sub_lname; ?>">
                            <span class="invalid-feedback"><?php echo $sub_lname_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Email: </label>
                            <input type="text" name="sub_email" class="form-control" value="<?php echo $sub_email; ?>">
                        </div>
                        <div class="form-group">
                            <label>Company: </label>
                            <input type="text" name="sub_company" class="form-control" value="<?php echo $sub_company; ?>">
                        </div>
                        <div class="form-group">
                            <label>Address Line 1: </label>
                            <input type="text" name="sub_add1" class="form-control" value="<?php echo $sub_add1; ?>">
                        </div>
                        <div class="form-group">
                            <label>Address Line 2: </label>
                            <input type="text" name="sub_add2" class="form-control" value="<?php echo $sub_add2; ?>">
                        </div>
                        <div class="form-group">
                            <label>City: </label>
                            <textarea name="sub_city" class="form-control"><?php echo $sub_city; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>State: </label>
                            <textarea name="sub_state" class="form-control"><?php echo $sub_state; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>ZIP: </label>
                            <textarea name="sub_zip" class="form-control"><?php echo $sub_zip; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Notes: </label>
                            <textarea name="sub_notes" class="form-control"><?php echo $sub_notes; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Delivery Preference: </label>
                            <textarea name="sub_contact_preference" class="form-control"><?php echo $sub_contact_preference; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Subscribe Date: </label>
                            <textarea name="sub_enroll_date" class="form-control"><?php echo $sub_enroll_date; ?></textarea>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>