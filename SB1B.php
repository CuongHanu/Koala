<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="navbar">
    <img src="https://lh3.googleusercontent.com/-zGv4rCSXJg0/Zfj4Tdg4jHI/AAAAAAAAAQs/GrhpBwvxbLYtKmGv2SRxGL-GAr1D_tzHgCNcBGAsYHQ/h120/Logo%2BKoalahouse.png" alt="Logo">

    <a href="#" class="home">
        <img src="https://lh3.googleusercontent.com/-6UXVCx7TJBI/ZghT_8mo-MI/AAAAAAAAAT0/DYeoGtnrvDMvDMCupe7Nprkms4ItFrOfgCNcBGAsYHQ/h120/11.png" alt="Home">Home</a>

    <a href="#">
        <img src="https://lh3.googleusercontent.com/-D3qN4JA2Rqw/ZghT-Bc-h-I/AAAAAAAAATw/86NsK6f7JWku2CHA5In4-MX9ifZiYvEZgCNcBGAsYHQ/h120/12.png" alt="Thông báo">Thông báo</a>

    <div class="user-container">
        <img src="https://lh3.googleusercontent.com/-65-YJWrWI1E/ZgGwNpkwtgI/AAAAAAAAASs/USJQkFj9HrgP-Lm04aAwMi0TWObEaPyPACNcBGAsYHQ/h120/user%2B%25281%2529.png" alt="User">
    </div>
</div>

<div class="bottom-section">
<div class="main">
  <div class="title">
    <h1>Lớp SB1B</h1>
  </div>

  <div class="popup" id="popup">
    <h2>Thêm thiết bị</h2>
    <input type="text" id="device" placeholder="Thiết bị">
    <input type="text" id="quantity" placeholder="Số lượng">
    <input type="text" id="status" placeholder="Tình trạng">
    <input type="text" id="usageDate" placeholder="Ngày sử dụng">
    <input type="text" id="repairDate" placeholder="Ngày sửa chữa">
    <input type="text" id="note" placeholder="Ghi chú">
    <button onclick="addItem()">Xác nhận</button>
  </div>
  
  <div class="search-bar">
    <button  class="back-button">Back</button>
    <button class="add-button" onclick="openPopup()">Thêm</button>
    <input type="text" id="SearchInput" placeholder="Tìm kiếm...">
  </div>
  
  <div id="popupTable" class="popup">
    <table>
      <thead>
        <tr>
          <th>Thiết bị</th>
          <th>Số lượng</th>
          <th>Tình trạng</th>
          <th>Ngày sử dụng</th>
          <th>Ngày sửa chữa</th>
          <th>Ghi chú</th>
          <th>Option 1</th>
          <th>Option 2</th>
          <!-- Add more column headers for additional options -->
        </tr>
      </thead>
      <tbody id="popupBody">
        <!-- Rows for multiple information -->
      </tbody>
    </table>
    <button onclick="saveInformation()">Confirmed</button>
  </div>
  
  <script>
    function openPopup() {
      document.getElementById("popup").style.display = "block";
    }
  
    function addItem() {
      var device = document.getElementById("device").value;
      var quantity = document.getElementById("quantity").value;
      var status = document.getElementById("status").value;
      var usageDate = document.getElementById("usageDate").value;
      var repairDate = document.getElementById("repairDate").value;
      var note = document.getElementById("note").value;
  
      var table = document.getElementById("popupBody"); // Corrected table reference
      var row = table.insertRow(-1);
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      var cell4 = row.insertCell(3);
      var cell5 = row.insertCell(4);
      var cell6 = row.insertCell(5);
  
      cell1.innerHTML = device;
      cell2.innerHTML = quantity;
      cell3.innerHTML = status;
      cell4.innerHTML = usageDate;
      cell5.innerHTML = repairDate;
      cell6.innerHTML = note;
  
      document.getElementById("popup").style.display = "none";
    }
  </script>
</div> 


<div class="class-container">
  <table>
    <table-body>
    <tr>
      <th>Thiết bị</th>
      <th>Số lượng</th>
      <th>Tình trạng</th>
      <th>Ngày sử dụng</th>
      <th>Ngày sửa chữa</th>
      <th>Ghi chú</th>
    </tr>

    <tr>
      <td>Tủ thuốc</td>
      <td>1</td>
      <td>Tốt</td>
      <td>12/3/2023</td>
      <td>12/3/2023</td>
      <td>...</th>
    </tr>

    <tr>
      <td>Giá 2 tầng đồ chơi</td>
      <td>5</td>
      <td>Tốt</td>
      <td>12/3/2023</td>
      <td>12/3/2023</td>
      <td>...</th>
    </tr>

    <tr>
      <td>Giá 3 tầng đồ chơi</td>
      <td>1</td>
      <td>Tốt</td>
      <td>12/3/2023</td>
      <td>12/3/2023</td>
      <td>...</th>
    </tr>

    <tr>
      <td>Bàn gỗ tròn</td>
      <td>1</td>
      <td>Tốt</td>
      <td>12/3/2023</td>
      <td>12/3/2023</td>
      <td>...</th>
    </tr>

    <tr>
      <td>Ghế nhựa học sinh</td>
      <td>15</td>
      <td>Cần bảo dưỡng</td>
      <td>12/3/2023</td>
      <td>12/3/2023</td>
      <td>...</th>
    </tr>
  </table-body>
</table>
</div>

</div>

<div class="pagination">
    <button>1</button>
    <button>2</button>
    <button>3</button>
    <button>4</button>
 </div>


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
            
    .bottom-section {
        background-color: #ffffff;
        text-align: center;
        padding: 20px 0;
    }

    .title {
        text-align: center;
    }

    h1 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    
    .header {
        background-color: #f5f5f5;
        padding: 20px;
        display: flex;
         align-items: center;
    }
    
    .logo {
        width: 50px; 
        height: 50px;
        margin-right: 20px;
    
    }
    
    .main { 
        padding: 20px; 
    }
    
    
    .search-bar {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 20px;
    }
    
    .search-bar input {
        padding: 10px;
        margin-right: 10px;
        width: 150px;
    }
    
    .back-button {
      position: absolute;
      top: 80px;
      left: 10px;
      padding: 10px 20px;
      background-color: rgb(37, 37, 220);
      color: white;
      font-weight: bold;
      border-radius: 50px;
      cursor: pointer;
    }
    
    .add-button {
      margin-right: 20px;
      display: inline-block;
      padding: 10px 20px;
      background-color: rgb(37, 37, 220);
      color: white;
      font-weight: bold;
      border-radius: 50px;
      cursor: pointer;
    }

    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px;
      padding: 20px;
      background-color: #f1f1f1;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
      z-index: 9999;
    }

    .popup h2 {
      margin-top: 0;
    }

    .popup input[type="text"],
    .popup select {
      display: block;
      width: 100%;
      margin-bottom: 10px;
      padding: 5px;
    }

    .popup button {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #225680;
      color: white;
      border: none;
      cursor: pointer;
    }

    .table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
    }
    
    .table-body {
    display: table-row-group;
    vertical-align: middle;
    unicode-bidi: isolate;
    border-color: inherit;
}

    tr {
    display: table-row;
    vertical-align: inherit;
    unicode-bidi: isolate;
    border-color: inherit;
}

    th {
      background-color: rgb(200, 191, 191);
      color: black;
      font-weight: bold;
    }

    th, td {
        text-align: center;
        padding: 10px;
        border-bottom: 1px solid #555;
      }
    
    
    .pagination {
        margin-top: 20px;
        text-align: center;
      }

    .pagination button {
        background-color: white;
        color: black;
        border: 5px, black;
        border-radius: 50%;
        padding: 5px 10px;
        margin-left: 5px;
        cursor: pointer;
        transition: background-color 0.5s ease;
      }

      .pagination button:hover {
        background-color: #50f755;
        color: white;
        border: #50f755;
      }
    
    .class-container {
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        margin-top: 20px;
    } 
    </style>



</body>



</html>
