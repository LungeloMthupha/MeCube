<?php
 include('server/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log-error.css">
    <title>Login Failed</title>
</head>
<body>
    <main>
        
    <?php
    $username = $_GET["username"];
    $password = $_GET["password"];

    // Start the session
    session_start();

    $sql = "SELECT `username`, `password`, `rid` FROM member WHERE `username` = ? AND `password` = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if ($username==$user['username'] && $password==$user['password']){
        if($user['rid']==1){
            // After successful authentication, set the logged-in user's name in a session variable
            $_SESSION['username'] = $username; // Replace $username with the actual username
            header("Location: dashboard.php");
        }
        if($user['rid']==2){
            // After successful authentication, set the logged-in user's name in a session variable
            $_SESSION['username'] = $username; // Replace $username with the actual username
            header("Location: client-dashboard.php");
        }
    }else{
        print("
        <div class='card'>
            <div class='icon-side'></div>
            <div class='info'>
                    <h2>401</h2>
                    <h3>Unauthorized / Login Failed</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Iste ipsam nobis atque officia inventore quas quia 
                        aspernatur molestiae at laboriosam quibusdam ipsa 
                        adipisci sit culpa, eveniet facilis, eaque obcaecati ipsum!</p>
                    <div class='actionSpace'>
                        <a href='index.php'>Try Again </a>
                    </div>
            </div>
        </div>
        ");
    }
    ?>
    </main>
    <div class="liner3">
        <img src="img/logo/MeCube1.png" alt="">
    </div>
    <script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script> <div class="commonninja_component pid-aad9c77a-0b1f-4910-acd4-899b0ca7992e"></div>
</body>
</html>