<?php 
include "db.php";
include "functions.php";
createRows();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
body{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
label{
    display: block;
}

.userdata{
    margin-bottom: 1rem;
}
#span-div{
    padding: 2%;
    box-shadow: 1px 1px 3px 1px black;
    border-radius: 5px;
    border: 1px blue solid;
}
</style>
<body><br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">

    <h2>The best note taking application ever</h2>
    <form action="index.php" method="post">
    <label>Name: </label><input id="name" name="name"class="form-control" type="text" required><br>    
    <label>Notes: </label><textarea id="notes" name="notes" class="form-control" required></textarea>       
    <br><button type="submit" name="submit" class="btn btn-primary" value="CREATE">Submit</button>
    </form>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-12" id="span-div">
            <span id="note-entries"><?php getNotes(); ?></span>
        </div>
    </div>
</div>
<br><br>

</body>
</html>