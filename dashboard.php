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
 $sql = "SELECT `id`,CONCAT(`lastname`,' ',`firstname`) AS fullname, `gender`, `regdate` FROM `member` ORDER BY `id` DESC LIMIT 5";
 $result = mysqli_query($conn, $sql);

?>

<?php
// Perform the query
$sqla = "SELECT regdate, COUNT(*) as total, COUNT(CASE WHEN gender='M' THEN 1 END) as male, COUNT(CASE WHEN gender='F' THEN 1 END) as female FROM member GROUP BY regdate";
$resulta = mysqli_query($conn, $sqla);

// Fetch the results into an associative array
$male = array();
$female = array();
$regdate = array();
while ($row = mysqli_fetch_assoc($resulta)) {
    $male[] = $row['male'];
    $female[] = $row['female'];
    $regdate[] = $row['regdate'];
}
?>

<?php
// Perform the query
$sqlb = "SELECT regdate, COUNT(*) as total FROM member GROUP BY regdate";
$resultb = mysqli_query($conn, $sqlb);

$regPerDay = array();
while ($row = mysqli_fetch_assoc($resultb)) {
    $regPerDay[] = $row['total'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <link rel="stylesheet" href="css/preloader.css">
    <script src="js/preloader.js"></script>
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <script>
        var male = <?php echo json_encode($male); ?>;
        var female = <?php echo json_encode($female); ?>;
        var regdate = <?php echo json_encode($regdate); ?>;
        var regPerDay = <?php echo json_encode($regPerDay); ?>;
    </script>
    <title>Dashboard</title>
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
                        <span>Admin</span>
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
                    <a href="dashboard.php" class="init">
                        <div class="icon"><img src="img/icons/icons8_dashboard_layout_24px.png" alt=""></div>
                        <p>Dashboard</p>
                    </a>
                    <a href="member.php" >
                        <div class="icon"><img src="img/icons/icons8_conference_24px_1.png" alt=""></div>
                        <p>Members</p>
                    </a>
                    <a href="equipment.php">
                        <div class="icon"><img src="img/icons/icons8_ez_curl_bar_24px.png" alt=""></div>
                        <p>Equipment</p>
                    </a>
                    <a href="store.php">
                        <div class="icon"><img src="img/icons/icons8_shopping_bag_24px.png" alt=""></div>
                        <p>Shopping</p>
                    </a>
                    <a href="receipt.php">
                        <div class="icon"><img src="img/icons/icons8_receipt_dollar_24px.png" alt=""></div>
                        <p>Receipts</p>
                    </a>
                    <a href="noticeboard.php">
                        <div class="icon"><img src="img/icons/icons8_noticeboard_24px_1.png" alt=""></div>
                        <p>Noticeboard</p>
                    </a>
                </div>
                <h3 class="op">Oparation</h3>
                <div class="logout">
                    <div class="links">
                        <a href="logout.php">
                            <div class="icon"><img src="img/icons/icons8_login_rounded_24px.png" alt=""></div>
                            <p>Logout</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="top-half">
                    <div class="graph gr1">
                        <canvas id="myChart" width="100%"></canvas>
                    </div>
                    <div class="graph gr2">
                        <canvas id="myChartLine" width="100%"></canvas>
                    </div>
                </div>
                <div class="down-half">
                    <div class="graph gr3">
                        <canvas id="myChartSide" width="100%"></canvas>
                    </div>
                    <div class="graph gr4">
                        <h3>New Users</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Harum illum alias possimus quisquam placeat doloribus,</p>
                        <div class="new-list">
                            <table>
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Fullname</th>
                                        <th>Gender</th>
                                        <th>Join Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($member = mysqli_fetch_assoc($result)){ ?>
                                    <tr>
                                        <td><?php echo $member['id']; ?></td>
                                        <td><?php echo $member['fullname']; ?></td>
                                        <td><?php echo $member['gender']; ?></td>
                                        <td><?php echo $member['regdate']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                            <div class="seeall">
                                <a href="member.php">view all</a>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </main>

    <div class="preloader" id="preloader">
        <div class="loader">
            <span class="bar"></span>
            <span class="bar mid"></span>
            <span class="bar"></span>
        </div>
    </div>
    <script>
    var males = male;
    var females = female;
    var regdates = regdate;
    var regPerDay = regPerDay;
    </script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="js/member_table.js"></script>
    <script src="js/bar.js"></script>
    <script src="js/line-graph.js"></script>
    <script src="js/bar-graph.js"></script>
</body>
</html>