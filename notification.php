<?php
session_start();
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}    
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <style>
        body {
            font-family: 'Roboto Slab', 'Noto Serif Display', sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-image: url("https://lh3.googleusercontent.com/-r1lMZCA_al8/Zfj3_q5-6KI/AAAAAAAAAQk/vL4ivlyn_i8w5PbOArsUsSRA9aQjMkPaACNcBGAsYHQ/s0/%25E1%25BA%25A2nh%2Bn%25E1%25BB%2581n%2Bsau.jpg");
            background-size: cover;
            background-position: center;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar img {
            height: 50px;
            margin-right: 10px;
        }
        .navbar a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
            font-size: larger;
        }
        .navbar a.home {
            color: green;
            margin-right: 20px;
            font-size: 200;
            font-weight: bold;
            margin-top: 0px;
        }
        .navbar a.notification {
            font-size: larger;
            font-weight: bold;
            margin-top: -5px;
        }
        .navbar .user {
            display: flex;
            align-items: center;
        }
        .navbar .user img {
            height: 30px;
            margin-right: 5px;
        }
        .navbar .user span {
            font-weight: bold;
            margin-top: 10px;
        }
        /* New CSS for the bottom section */
        .bottom-section {
            background-color: #ffffff;
            text-align: center;
            padding: 20px 0;
        }
        h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .class-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        .class-box {
            width: 80%; /* Chiều rộng của ô */
            max-width: 1000px; /* Chiều rộng tối đa của ô */
            height: 80px;
            background-color: #4CAF50;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            color: black;
            font-size: 20px;
            margin-bottom: 20px; /* Khoảng cách giữa các ô */
        }
        .class-name {
            width: 300%; /* Kéo dài khung chứa tên lớp gấp 3 lần */
        }
        .notification-section {
        display: none;
        background-color: #4CAF50; /* Màu nền xanh */
        color: #000; /* Màu chữ đen */
        padding: 20px;
        margin-top: 20px;
        border-radius: 5px;
    }
    </style>
</head>
<body>
<div class="navbar">
    <img src="https://lh3.googleusercontent.com/-zGv4rCSXJg0/Zfj4Tdg4jHI/AAAAAAAAAQs/GrhpBwvxbLYtKmGv2SRxGL-GAr1D_tzHgCNcBGAsYHQ/h120/Logo%2BKoalahouse.png" alt="Logo">
    <a href="dashboard.php" class="home"><img src="https://lh3.googleusercontent.com/-6UXVCx7TJBI/ZghT_8mo-MI/AAAAAAAAAT0/DYeoGtnrvDMvDMCupe7Nprkms4ItFrOfgCNcBGAsYHQ/h120/11.png" alt="Home">Home</a>
    <a href="notification.php" class="notification"><img src="https://lh3.googleusercontent.com/-D3qN4JA2Rqw/ZghT-Bc-h-I/AAAAAAAAATw/86NsK6f7JWku2CHA5In4-MX9ifZiYvEZgCNcBGAsYHQ/h120/12.png" alt="Thông báo">Thông báo</a>
    <div class="user-container">
        <img src="https://lh3.googleusercontent.com/-65-YJWrWI1E/ZgGwNpkwtgI/AAAAAAAAASs/USJQkFj9HrgP-Lm04aAwMi0TWObEaPyPACNcBGAsYHQ/h120/user%2B%25281%2529.png" alt="User">
        <span><?php echo $username; ?></span>
</div>
</div>
    <div class="bottom-section">
        <div class="notification-section">
    <h2>Thông báo</h2>
    <p>thông báo:</p>
    <ul id="notificationList">
    <!-- Nội dung thông báo sẽ được thêm bằng JavaScript -->
  </ul>
</div>
<!-- Script JavaScript -->
<script>
  // Lắng nghe sự kiện khi người dùng nhấn vào nút "Thông báo"
  document.querySelector(".notification").addEventListener("click", function() {
    // Hiển thị phần tử HTML chứa thông báo
    document.querySelector(".notification-section").style.display = "block";

    // Đưa dữ liệu thông báo vào phần tử HTML
    var notificationList = document.getElementById("notificationList");
    // Thêm thông báo về hạn bảo trì
    var maintenanceMessage = document.createElement("li");
    maintenanceMessage.textContent = "Thông báo về hạn bảo trì";
    notificationList.appendChild(maintenanceMessage);
    // Thêm thông báo về thiếu, thừa thiết bị
    var shortageMessage = document.createElement("li");
    shortageMessage.textContent = "Thông báo về thiếu, thừa thiết bị";
    notificationList.appendChild(shortageMessage);
  });
</script>
</div>
    </div>
</div>
</body>
</html>
