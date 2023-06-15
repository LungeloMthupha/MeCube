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
    $sql = "SELECT m.id, m.firstname, m.lastname, m.gender, m.email, r.role, s.status, m.regdate FROM member m INNER JOIN role r ON m.rid = r.id INNER JOIN status s ON m.sid = s.id";
    $result = mysqli_query($conn, $sql);

    // CREATE a new user / membership
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    $sql = "INSERT INTO `member`(`firstname`, `lastname`, `gender`, `email`, `username`, `password`, `rid`, `sid`) VALUES ('$firstname', '$lastname', '$gender', '$email', '$username', '$password', '$role', '$status')";
    mysqli_query($conn, $sql);
    }

    // DELETE  Membership Account
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM member WHERE id='$id'";
    mysqli_query($conn, $sql);
    }
    
    // UPDATE Membership Details
    
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $role = $_POST['role'];
    $sql = "UPDATE member SET firstname='$firstname', lastname='$lastname', gender='$gender', email='$email', username='$username', password='$password', rid='$role', sid='$status' WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("LOCATION: member.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="css/preloader.css">
    <script src="js/preloader.js"></script>
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/member.css">
    <title>Member</title>
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
                    <a href="dashboard.php">
                        <div class="icon"><img src="img/icons/icons8_dashboard_layout_24px.png" alt=""></div>
                        <p>Dashboard</p>
                    </a>
                    <a href="member.php" class="init">
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
                <h2>Members</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente iure necessitatibus quasi officiis soluta fugit esse laborum. 
                    Dolore ipsam eligendi veniam deserunt ducimus dignissimos ea nihil beatae dolorem aspernatur! Lorem ipsum dolor, sit amet consectetur 
                    adipisicing elit.</p>
                <div class="displayData">
                    <table class="member display" id="member" style="width:100%">
                        <thead>
                            <tr>
                                <th>MID</th>
                                <th>Surname</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($member = mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                <td><?php echo $member['id']; ?></td>
                                <td><?php echo $member['lastname']; ?></td>
                                <td><?php echo $member['firstname']; ?></td>
                                <td><?php echo $member['gender']; ?></td>
                                <td><?php echo $member['email']; ?></td>
                                <td><?php echo $member['role']; ?></td>
                                <td><?php echo $member['status']; ?></td>
                                <td><?php echo $member['regdate']; ?></td>
                                <td>
                                    <div class="action">
                                    <a href="?edit=<?php echo $member['id']; ?>" class="edit"><img src="img/icons/icons8_edit_24px_1.png" alt=""></a>
                                <a href="?delete=<?php echo $member['id']; ?>" class="delete"><img src="img/icons/icons8_trash_24px_1.png" alt=""></a>
                                    </div>
                                
                                </td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>

                </div>
        </div>
    </main>
    <div class="tray-key" id="tray-key"><img src="img/icons/icons8_collapse_arrow_24px.png" alt=""></div>
    <div class="crud" id="crud">
    <form action="" method="POST">
        <?php if (isset($_GET['edit'])){
            $clicked_id = intval($_GET['edit']);
            $sql1 = "SELECT `id`, `firstname`, `lastname`, `gender`, `email`, `username`, `password`, `rid`, `sid`, `regdate` FROM `member` WHERE `id` = $clicked_id";
            $result1 = mysqli_query($conn, $sql1);
            $member1 = mysqli_fetch_assoc($result1);
        }
            ?>
    <h3>Add / Edit</h3>
    <div class="group">
        <div class="part">
            <input type="hidden" name="id" value="<?php echo isset($_GET['edit']) ? $_GET['edit'] : ''; ?>">
        </div>
    </div>
    <div class="group">
        <div class="part">
            <p>Surname</p>
            <input type="text" name="lastname" value="<?php echo isset($_GET['edit']) && isset($member1['lastname']) ? $member1['lastname'] : ''; ?>">
        </div>
        <div class="part">
            <p>Name</p>
            <input type="text" name="firstname" value="<?php echo isset($_GET['edit']) && isset($member1['firstname']) ? $member1['firstname'] : ''; ?>">
        </div>
        <div class="part">
            <p>Email</p>
            <input type="text" class="long" name="email" value="<?php echo isset($_GET['edit']) && isset($member1['email']) ? $member1['email'] : ''; ?>">
        </div>
    </div>
    <div class="group">
        <div class="part">
            <p>Gender</p>
            <input type="text" name="gender" value="<?php echo isset($_GET['edit']) && isset($member1['gender']) ? $member1['gender'] : ''; ?>">
        </div>
        <div class="part">
            <p>Username</p>
            <input type="text" name="username" value="<?php echo isset($_GET['edit']) && isset($member1['username']) ? $member1['username'] : ''; ?>">
        </div>
        <div class="part">
            <p>Password</p>
            <input type="text" name="password" value="<?php echo isset($_GET['edit']) && isset($member1['password']) ? $member1['password'] : ''; ?>">
        </div>
    </div>
    <div class="group">
        <div class="part">
            <p>Role</p>
            <input type="text" name="role" value="<?php echo isset($_GET['edit']) && isset($member1['rid']) ? $member1['rid'] : ''; ?>">
        </div>
        <div class="part">
            <p>Status</p>
            <input type="text" name="status" value="<?php echo isset($_GET['edit']) && isset($member1['sid']) ? $member1['sid'] : ''; ?>">
        </div>
    </div>
    <div class="actionBtn">
        <?php if (isset($_GET['edit'])) { ?>
            <button type="submit" name="update">Update</button>
        <?php } else { ?>
            <button type="submit" name="submit">Create</button>
        <?php } ?>
    </div>
</form>
    </div>

    <div class="preloader" id="preloader">
        <div class="loader">
            <span class="bar"></span>
            <span class="bar mid"></span>
            <span class="bar"></span>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="../theme/library/avator.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.6.0/js/dataTables.select.min.js"></script>
    <script src="js/tray.js"></script>

    <script src="js/member_table.js"></script>
</body>
</html>