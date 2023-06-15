<?php    
    if(isset($_POST['logout'])){
        session_destroy();
        header("Location:"."index.php");
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log-out.css">
    <title>Logging Out</title>
</head>
<body>
    <main>
        <div class="card">
            <div class="icon-side"></div>
            <div class="info">
                <h2>Logging Out</h2>
                <h3>Are You Sure?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Iste ipsam nobis atque officia inventore quas quia 
                    aspernatur molestiae at laboriosam quibusdam ipsa 
                    adipisci sit culpa, eveniet facilis, eaque obcaecati ipsum!</p>
                <div class="actionSpace">
                    <form action ="" method = "POST">
                        <button type="submit" name="logout" class="logout"> Log Out</button>
                        <button type="button" name="cancel" onclick="goBack()"> Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <div class="liner3">
        <img src="img/logo/MeCube1.png" alt="">
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>