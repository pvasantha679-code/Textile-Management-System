<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product Management - Textile Management System</title>

    <link rel="stylesheet" href="../static/css/style.css">
</head>

<body>

    <!-- Navigation Bar -->
    <header>

        <div class="logo">
            Textile Management
        </div>

        <nav>
            <a href="dashboard.php">Dashboard</a>
            <a href="product.php">Products</a>
            <a href="customers.php">Customers</a>
            <a href="stock.php">Stock</a>
            <a href="employee.php">Employees</a>
            <a href="reports.php">Reports</a>
        </nav>

    </header>


    <!-- Product Management -->

    <section class="management-section">

        <div class="management-container">

            <div class="page-header">

                <div>
                    <h1>Product Management</h1>
                    <p>Manage textile products</p>
                </div>

                <a href="add_product.php" class="add-btn">
                    + Add Product
                </a>

            </div>


            <!-- Search -->

            <div class="search-box">

                <input
                    type="text"
                    placeholder="Search product..."
                >

                <button type="button">
                    Search
                </button>

            </div>


            <!-- Product Table -->

            <div class="table-container">

                <table>

                    <thead>

                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Product Code</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Supplier</th>
                            <th>Action</th>
                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>1</td>

                            <td>Cotton Saree</td>

                            <td>TXT001</td>

                            <td>Cotton</td>

                            <td>₹850</td>

                            <td>50</td>

                            <td>ABC Textiles</td>

                            <td>
                                <a href="edit_product.php" class="edit-btn">
                                    Edit
                                </a>

                                <a href="delete_product.php" class="delete-btn">
                                    Delete
                                </a>
                            </td>

                        </tr>


                        <tr>

                            <td>2</td>

                            <td>Silk Saree</td>

                            <td>TXT002</td>

                            <td>Silk</td>

                            <td>₹2,500</td>

                            <td>30</td>

                            <td>XYZ Textiles</td>

                            <td>
                                <a href="edit_product.php" class="edit-btn">
                                    Edit
                                </a>

                                <a href="delete_product.php" class="delete-btn">
                                    Delete
                                </a>
                            </td>

                        </tr>


                        <tr>

                            <td>3</td>

                            <td>Linen Shirt</td>

                            <td>TXT003</td>

                            <td>Linen</td>

                            <td>₹1,200</td>

                            <td>40</td>

                            <td>Fashion Fabrics</td>

                            <td>
                                <a href="edit_product.php" class="edit-btn">
                                    Edit
                                </a>

                                <a href="delete_product.php" class="delete-btn">
                                    Delete
                                </a>
                            </td>

                        </tr>


                        <tr>

                            <td>4</td>

                            <td>Wool Shawl</td>

                            <td>TXT004</td>

                            <td>Wool</td>

                            <td>₹1,800</td>

                            <td>20</td>

                            <td>Royal Fabrics</td>

                            <td>
                                <a href="edit_product.php" class="edit-btn">
                                    Edit
                                </a>

                                <a href="delete_product.php" class="delete-btn">
                                    Delete
                                </a>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>


    <!-- Footer -->

    <footer>

        <p>
            © 2026 Textile Management System. All Rights Reserved.
        </p>

    </footer>

</body>

</html>