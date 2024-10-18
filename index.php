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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-edit, .btn-delete {
            padding: 5px 10px;
            background-color: #387478;
            color: #387478;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-edit:hover, .btn-delete:hover {
            background-color: #E2F1E7;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Welcome to Web Developer Employee Management System. <br> Input your details here to register</h3>
        <form action="core/handleForms.php" method="POST">
            <div class="form-group">
                <label for="dev_id">Developer ID</label> 
                <input type="text" class="form-control" name="dev_id" placeholder="Type Here...">
            </div>
            <div class="form-group">
                <label for="fname">First Name</label> 
                <input type="text" class="form-control" name="fname" placeholder="Type Here...">
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label> 
                <input type="text" class="form-control" name="lname" placeholder="Type Here...">
            </div>
            <div class="form-group">
                <label for="email">Email</label> 
                <input type="text" class="form-control" name="email" placeholder="Type Here...">
            </div>
            <div class="form-group">
                <label for="phoneNum">Phone No.</label> 
                <input type="text" class="form-control" name="phoneNum" placeholder="Type Here...">
            </div>
            <div class="form-group">
                <label for="address">Address</label> 
                <input type="text" class="form-control" name="address" placeholder="Type Here...">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label> 
                <input type="text" class="form-control" name="gender" placeholder="Type Here...">
            </div>
            <div class="form-group">
                <label for="skill">Skill</label> 
                <input type="text" class="form-control" name="skill" placeholder="Type Here...">
            </div>
            <button type="submit" class="btn btn-primary" name="insertNewWebDevBtn">Submit</button>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Developer ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Skill</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>  
                    <?php $seeAllWebDevDeptData = seeAllWebDevDeptData($pdo); ?>
                    <?php foreach ($seeAllWebDevDeptData as $row) { ?>
                    <tr>
                        <td><?php echo $row["dev_id"]; ?></td>
                        <td><?php echo $row["first_name"]; ?></td>
                        <td><?php echo $row["last_name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["phone_number"]; ?></td>
                        <td><?php echo $row["adress"]; ?></td>
                        <td><?php echo $row["gender"]; ?></td>
                        <td><?php echo $row["skill"]; ?></td>
                        <td>
                            <a href="editform.php?dev_id=<?php echo $row["dev_id"]; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="deleteform.php?dev_id=<?php echo $row["dev_id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>