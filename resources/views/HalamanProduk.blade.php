<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beauty Clinic - Product Management</title>
  <link rel="stylesheet" href="HalamanProduk.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
  font-family: 'Roboto', sans-serif;
  background-color: #f0f0f0;
  margin: 0;
  padding: 0;
}

.header {
  background-color: #007bff;
  color: #fff;
  padding: 20px;
  text-align: center;
}

.navigation {
  background-color: #333;
}

.navigation ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
}

.navigation ul li {
  margin: 0 15px;
  position: relative;
}

.navigation ul li a {
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  padding: 10px 15px;
  display: block;
}

.navigation ul li a:hover {
  background-color: #575757;
  border-radius: 5px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.main-content {
  padding: 20px;
}

.search-bar {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.search-bar input {
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px 0 0 5px;
  flex: 1;
}

.search-bar button {
  padding: 10px;
  border: 1px solid #007bff;
  border-radius: 0 5px 5px 0;
  background-color: #007bff;
  color: white;
  cursor: pointer;
}

.search-bar button:hover {
  background-color: #0056b3;
}

.product-list {
  margin-top: 20px;
}

.product-list h2 {
  text-align: center;
  margin-bottom: 20px;
  font-weight: 700;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
  background-color: #fff;
}

table, th, td {
  border: 1px solid #ddd;
}

th, td {
  padding: 15px;
  text-align: left;
}

th {
  background-color: #f8f8f8;
}

td img {
  width: 50px;
  height: auto;
}

.edit, .delete {
  padding: 10px 15px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  margin-right: 5px;
  text-decoration: none;
  color: white;
}

.edit {
  background-color: #007bff;
}

.delete {
  background-color: #dc3545;
}

.edit:hover {
  background-color: #0056b3;
}

.delete:hover {
  background-color: #c82333;
}

.add-product-btn {
  background-color: #28a745;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  display: block;
  margin: 20px auto;
  text-align: center;
  text-decoration: none;
}

.add-product-btn:hover {
  background-color: #218838;
}

  </style>
</head>

<body>
  <header class="header">
    <h1>Beauty Clinic - Product Management</h1>
  </header>

  <nav class="navigation">
    <ul>
      <li><a href="#"><i class="fas fa-box"></i> Products</a></li>
      <li><a href="#"><i class="fas fa-th-large"></i> Categories</a></li>
      <li class="dropdown">
        <a href="#" class="dropbtn"><i class="fas fa-tags"></i> Promotions</a>
        <div class="dropdown-content">
          <a href="#">Current Promotions</a>
          <a href="#">Upcoming Promotions</a>
        </div>
      </li>
      <li><a href="#"><i class="fas fa-shopping-cart"></i> Orders</a></li>
         
    </ul>
  </nav>

  <main class="main-content">
    <div class="search-bar">
      <input type="text" placeholder="Search Products">
      <button>Search</button>
    </div>

    <section class="product-list">
      <h2>Product List</h2>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Code</th>
            <th>Name</th>
            <th>Description</th>
            <th>Selling Price</th>
            <th>Stock</th>
            <th>Image</th>
            <th>Show</th>
            <th>bpom</th>
            <th>halal</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img src="" alt=""></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              
            </td>
          </tr>
        </tbody>
      </table>
    </section>

    <button class="add-product-btn">Add New Product</button>
  </main>

</body>

</html>


