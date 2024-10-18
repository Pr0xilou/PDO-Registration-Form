<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Edit Employee Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .container {
            max-width: auto;
            margin: auto;
            padding: 20px;
        }

        h3 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            color: #666;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .btn-primary {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;   

        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Edit Employee Data</h3>
        <?php $getWebDevByID = getWebDevByID($pdo, $_GET["dev_id"]); ?>
        <form action="core/handleForms.php?dev_id=<?php echo $_GET["dev_id"]; ?>" method="POST">
            <div class="form-group">
                <label for="dev_id">Developer ID</label>
                <input type="text" class="form-control" name="dev_id" value="<?php echo $getWebDevByID["dev_id"]; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" name="fname" value="<?php echo $getWebDevByID["first_name"]; ?>">
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" name="lname" value="<?php echo $getWebDevByID["last_name"]; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $getWebDevByID["email"]; ?>">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone No.</label>
                <input type="text" class="form-control" name="phone_number" value="<?php echo $getWebDevByID["phone_number"]; ?>">
            </div>
            <div class="form-group">
                <label for="adress">Address</label>
                <input type="text" class="form-control" name="adress" value="<?php echo $getWebDevByID["adress"]; ?>">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" name="gender" value="<?php echo $getWebDevByID["gender"]; ?>">
            </div>
            <div class="form-group">
                <label for="skill">Skill</label>
                <input type="text" class="form-control" name="skill" value="<?php echo $getWebDevByID["skill"]; ?>">
            </div>
            <button type="submit" name="editWebDevBtn"  class="btn btn-primary">Confirm</button>
        </form>
    </div>
</body>
</html>