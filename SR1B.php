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
        /* CSS styles */
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
        .bottom-section {
            background-color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            margin-top: 50px; /* Điều chỉnh khoảng cách giữa tiêu đề và bảng */
        }
        .class-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        .class-box {
            width: 80%;
            max-width: 1000px;
            height: 80px;
            background-color: #4CAF50;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            color: black;
            font-size: 20px;
            margin-bottom: 20px;
        }
        .class-name {
            width: 100%;
            text-align: center;
        }
        .class-actions {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-top: 10px;
        }
        .back-btn {
          position: absolute;
          top: 80px;
          left: 10px;
          padding: 10px 20px;
          background-color: #007bff;
          color: white;
          border: none;
          border-radius: 5px;
          cursor: pointer;
        }
        .add-btn {
            margin-right: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .search-box {
            margin-right: 20px;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ced4da;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .odd {
            background-color: #f8f9fa;
        }
        .pagination {
            margin-top: 20px;
        }
        .pagination ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        .pagination li {
            margin-right: 5px;
        }
        .pagination li a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }
        .pagination li a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="navbar">
  <img src="https://lh3.googleusercontent.com/-zGv4rCSXJg0/Zfj4Tdg4jHI/AAAAAAAAAQs/GrhpBwvxbLYtKmGv2SRxGL-GAr1D_tzHgCNcBGAsYHQ/h120/Logo%2BKoalahouse.png" alt="Logo">
  <a href="dashboard.php" class="home"><img src="https://lh3.googleusercontent.com/-6UXVCx7TJBI/ZghT_8mo-MI/AAAAAAAAAT0/DYeoGtnrvDMvDMCupe7Nprkms4ItFrOfgCNcBGAsYHQ/h120/11.png" alt="Home">Home</a>
  <a href="notification.php"><img src="https://lh3.googleusercontent.com/-D3qN4JA2Rqw/ZghT-Bc-h-I/AAAAAAAAATw/86NsK6f7JWku2CHA5In4-MX9ifZiYvEZgCNcBGAsYHQ/h120/12.png" alt="Thông báo">Thông báo</a>
  <div class="user-container">
    <img src="https://lh3.googleusercontent.com/-65-YJWrWI1E/ZgGwNpkwtgI/AAAAAAAAASs/USJQkFj9HrgP-Lm04aAwMi0TWObEaPyPACNcBGAsYHQ/h120/user%2B%25281%2529.png" alt="User">
    <span><?php echo $username; ?></span>
  </div>
</div>
<div class="bottom-section">
  <div class="class-actions">
    <button class="back-btn">← Back</button>
    <button class="add-btn">Thêm</button>
    <input type="text" class="search-box" placeholder="Tìm kiếm...">
  </div>
  <div class="class-container">
    <div class="class-name">
      <h1>Lớp SR1B</h1>
    </div>
    <?php
      $servername = "localhost";
      $username = "id21996215_cuongtq203";
      $password = "Cuong2k3@";
      $dbname = "id21996215_equipease";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $rowsPerPage = 5;
      $currentPage = 1;
      if (isset($_GET['page']) && $_GET['page'] > 0) {
        $currentPage = $_GET['page'];
      }
      $startIndex = ($currentPage - 1) * $rowsPerPage;
      $sql = "SELECT eq_id, eq_name, quantity, status, started_date, repair_date, note FROM ClassSR1B LIMIT $startIndex, $rowsPerPage";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Thiết bị</th><th>Số lượng</th><th>Tình trạng</th><th>Ngày sử dụng</th><th>Ngày sửa chữa</th><th>Ghi chú</th></tr>";
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
        echo "<td>" . $row["eq_name"] . "</td>";
        echo "<td>" . $row["quantity"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "<td>" . $row["started_date"] . "</td>";
        echo "<td>" . $row["repair_date"] . "</td>";
        echo "<td>" . $row["note"] . "</td>";
        // Thêm cột mới chứa nút sửa
        echo "<td><button onclick='editFunction(" . $row['eq_id'] . ")'>Sửa</button></td>";
        echo "</tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
      $conn->close();
    ?>
  </div>
</div>
<div class="pagination">
  <ul id="pagination-buttons">
    <?php
      $servername = "localhost";
      $username = "id21996215_cuongtq203";
      $password = "Cuong2k3@";
      $dbname = "id21996215_equipease";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql_total = "SELECT COUNT(*) AS total_rows FROM ClassSR1B";
      $result_total = $conn->query($sql_total);
      $row_total = $result_total->fetch_assoc();
      $totalRows = $row_total['total_rows'];
      $totalPages = ceil($totalRows / $rowsPerPage);

      for ($i = 1; $i <= $totalPages; $i++) {
        echo "<li><a href='?page=$i'>$i</a></li>";
      }

      $conn->close();
    ?>
  </ul>
</div>
</body>
</html>
