<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Webboard NootNoot</title>
    <script>
        function myFunction1() {
            let r = confirm("ต้องการจะลบจริงหรือไม่");
            return r;
        }
    </script>
</head>

<?php
if (!isset($_SESSION['id'])) {
?>

    <body>
        <div class="container">
            <h1>
                <center>Webboard NootNoot</center>
            </h1>
            <?php include "nav.php"; ?>
            <br>
            <div class="d-flex">
                <div class="p-1">
                <label>หมวดหมู่</label>
                </div>
                <div class="p-1">
                <select name="category" class="form-select">
                    <?php
                    $conn = new PDO("mysql:host=localhost;dbname=webboard; charset=utf8", "root", "");
                    $sql = "SELECT * FROM category";
                    foreach ($conn->query($sql) as $row) {
                        echo "<option value=" . $row['id'] . " >" . $row['name'] . "</option>";
                    }
                    $conn = null;
                    ?>
                </select>
                </div>
            </div>
            
            <br>
            <table class="table table-striped">
                <ul>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<tr><td><a href=post.php?id=$i style=text-decoration:none>กระทู้ที่ $i</a></td></tr>";
                    }
                    ?>
                </ul>
            </table>
        </div>
    </body>
<?php
} else {
?>

    <body>
        <div class="container">
            <h1>
                <center>Webboard NootNoot</center>
            </h1>
            <?php include "nav.php"; ?>
            <br>
            <div class="d-flex ">               
                    <div class="p-1">
                    <label>หมวดหมู่</label>
                    </div>
                    <div class="p-1">
                        <select name="category" class="form-select">
                            <?php
                            $conn = new PDO("mysql:host=localhost;dbname=webboard; charset=utf8", "root", "");
                            $sql = "SELECT * FROM category";
                            foreach ($conn->query($sql) as $row) {
                                echo "<option value=" . $row['id'] . " >" . $row['name'] . "</option>";
                            }
                            $conn = null;
                            ?>
                        </select>
                    </div>
                   
                    <div class="ms-auto p-1">
                        <a href="newpost.php" class="btn btn-success btn-sm">
                            <i class="bi bi-plus"></i>สร้างกระทู้ใหม่</a>
                    </div>                
            </div>
            <br>
            <table class="table table-striped">
                <ul>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<tr><td><a href=post.php?id=$i style=text-decoration:none>กระทู้ที่ $i</a></td>";
                        if ($_SESSION['role'] == 'a') {
                            echo "<td><a href=delete.php?id=$i class='btn btn-danger btn-sm' onclick='return myFunction1();'>
                        <i class='bi bi-trash'></i></a></td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </ul>
            </table>
            </form>
        </div>
    </body>
<?php
}
?>

</html>