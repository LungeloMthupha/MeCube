<?php
// Start the session
session_start();
// Access the logged-in user's name from the session variable
if (isset($_SESSION['username'])) {
    $logged_username = $_SESSION['username'];
    // Use the $username variable as needed
} else {
    // User not logged in, handle accordingly
    header("Location: login-check.php");
}
?>

<?php
 include('server/conn.php');
 //READ member data
 $sql = "SELECT * FROM product";
 $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/product-card.css">
    <link rel="stylesheet" href="css/client-store.css">
    <title>Store</title>
</head>
<body>
    <main>
        <div class="top">
            <div class="logo">
                <img src="img/logo/doubleColored.png" alt="">
                <h1>MeCube</h1>
            </div>
            <div class="search">
                <div class="searchbar">
                    <div class="searchbar-wrapper">
                        <div class="searchbar-left">
                            <div class="search-icon-wrapper">
                                <span class="search-icon searchbar-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                
                        <div class="searchbar-center">
                            <div class="searchbar-input-spacer"></div>
                
                            <input type="text" class="searchbar-input" maxlength="2048" name="q" autocapitalize="off" autocomplete="off" title="Search" role="combobox" placeholder="Search Google">
                        </div>
                
                        <div class="searchbar-right">
                            <svg class="voice-search" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="#4285f4" d="m12 15c1.66 0 3-1.31 3-2.97v-7.02c0-1.66-1.34-3.01-3-3.01s-3 1.34-3 3.01v7.02c0 1.66 1.34 2.97 3 2.97z">
                                </path>
                                <path fill="#34a853" d="m11 18.08h2v3.92h-2z"></path>
                                <path fill="#fbbc05" d="m7.05 16.87c-1.27-1.33-2.05-2.83-2.05-4.87h2c0 1.45 0.56 2.42 1.47 3.38v0.32l-1.15 1.18z">
                                </path>
                                <path fill="#ea4335" d="m12 16.93a4.97 5.25 0 0 1 -3.54 -1.55l-1.41 1.49c1.26 1.34 3.02 2.13 4.95 2.13 3.87 0 6.99-2.92 6.99-7h-1.99c0 2.92-2.24 4.93-5 4.93z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loggeduser">
                    <div class="userdetails">
                        <p><?php echo $logged_username ?></p>
                        <span>Member</span>
                    </div>
                    <div class="useravator">
                        <img src="https://api.dicebear.com/6.x/notionists-neutral/svg?seed=<?php echo $logged_username ?>&radius=50&backgroundColor=ffdfbf" alt="avator">
                    </div>
            </div>
        </div>
        <div class="bottom">
            <div class="sidenav">
                <h3>Menu</h3>
                <div class="links">
                    <a href="client-dashboard.php">
                        <div class="icon"><img src="img/icons/icons8_dashboard_layout_24px.png" alt=""></div>
                        <p>Dashboard</p>
                    </a>
                    <a href="client-equipment.php">
                        <div class="icon"><img src="img/icons/icons8_ez_curl_bar_24px.png" alt=""></div>
                        <p>Equipment</p>
                    </a>
                    <a href="client-store.php" class="init">
                        <div class="icon"><img src="img/icons/icons8_shopping_bag_24px.png" alt=""></div>
                        <p>Shopping</p>
                    </a>
                    <a href="client-receipt.php">
                        <div class="icon"><img src="img/icons/icons8_receipt_dollar_24px.png" alt=""></div>
                        <p>Receipts</p>
                    </a>
                    <a href="client-noticeboard.php">
                        <div class="icon"><img src="img/icons/icons8_noticeboard_24px_1.png" alt=""></div>
                        <p>Noticeboard</p>
                    </a>
                </div>
                <h3 class="op">Oparation</h3>
                <div class="logout">
                    <div class="links">
                        <a href="">
                            <div class="icon"><img src="img/icons/icons8_login_rounded_24px.png" alt=""></div>
                            <p>Logout</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content">
                <h2>Shopping</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente iure necessitatibus quasi officiis soluta fugit esse laborum. 
                    Dolore ipsam eligendi veniam deserunt ducimus dignissimos ea nihil beatae dolorem aspernatur! Lorem ipsum dolor, sit amet consectetur 
                    adipisicing elit. Blanditiis tempora molestiae incidunt facere dignissimos deserunt commodi, quibusdam autem molestias eum suscipit nesciunt. 
                    Dolore labore ratione accusantium inventore quos alias vero!</p>
                <div class="displayData">
                <?php while($product = mysqli_fetch_assoc($result)){ ?>
                    <div class="card">
                        <div class="card-image"><img src="img/t-shirt.png" alt=""></div>
                        <div class="category">T-shirt</div>
                        <div class="heading"> <?php echo $product['fullname']; ?> 
                            <div class="price"> 
                                <div class="product-price"> E<?php echo $product['price']; ?> </div>
                                <button><img src="img/icons/icons8_plus_math_24px.png" alt=""> Interested</button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    

                </div>
        </div>
    </main>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="../theme/library/avator.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.php5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.6.0/js/dataTables.select.min.js"></script>

    <script src="js/member_table.js"></script>
</body>
</html>