<?php require_once "core/dbConfig.php"; ?>
<?php require_once "core/models.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebDevDaw</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .container {
            max-width: auto;
            margin: auto;
            padding: 20px;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .delete-form {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .delete-form label {
            font-weight: bold;
            color: #666;
        }

        .delete-form p {
            margin-bottom: 10px;
        }

        .btn-delete {
            padding: 10px 20px;
            background-color: #C62E2E;
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 1.5em;
        }

        .btn-delete:hover {
            background-color: #c82332;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Are you sure you want to REMOVE this Web Developer?</h3>
        <?php $getWebDevByID = getWebDevByID($pdo, $_GET["dev_id"]);?>
        <form action="core/handleForms.php?dev_id=<?php echo $_GET["dev_id"]; ?>" method="POST">
            <div class="delete-form">
                <p>Developer ID: <?php echo $getWebDevByID["dev_id"]; ?></p>
                <p>First Name: <?php echo $getWebDevByID["first_name"]; ?></p>
                <p>Last Name: <?php echo $getWebDevByID["last_name"]; ?></p>
                <p>Email: <?php echo $getWebDevByID["email"]; ?></p>
                <p>Phone No: <?php echo $getWebDevByID["phone_number"]; ?></p>
                <p>Address: <?php echo $getWebDevByID["adress"]; ?></p>
                <p>Gender: <?php echo $getWebDevByID["gender"]; ?></p>
                <p>Skill: <?php echo $getWebDevByID["skill"]; ?></p>

                <button type="submit" name="deleteWebDevBtn" class="btn btn-danger">Delete</button>
            </div>
        </form>
    </div>
</body>
</html>