<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Stock Management - Textile Management System</title>

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
            <a href="report.php">Reports</a>
        </nav>

    </header>


    <!-- Stock Management -->

    <section class="management-section">

        <div class="management-container">

            <div class="page-header">

                <div>
                    <h1>Stock Management</h1>
                    <p>Manage textile product inventory</p>
                </div>

            </div>


            <!-- Stock Summary -->

            <div class="stock-summary">

                <div class="stock-card">
                    <h3>Total Products</h3>
                    <h2>120</h2>
                </div>

                <div class="stock-card">
                    <h3>Total Stock</h3>
                    <h2>450</h2>
                </div>

                <div class="stock-card">
                    <h3>Low Stock</h3>
                    <h2>15</h2>
                </div>

            </div>


            <!-- Stock Table -->

            <div class="table-container">

                <table>

                    <thead>

                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Product Code</th>
                            <th>Category</th>
                            <th>Available Quantity</th>
                            <th>Stock Status</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>1</td>
                            <td>Cotton Saree</td>
                            <td>TXT001</td>
                            <td>Cotton</td>
                            <td>50</td>

                            <td>
                                <span class="stock-available">
                                    Available
                                </span>
                            </td>

                            <td>
                                <a href="edit_product.php" class="edit-btn">
                                    Update
                                </a>
                            </td>

                        </tr>


                        <tr>

                            <td>2</td>
                            <td>Silk Saree</td>
                            <td>TXT002</td>
                            <td>Silk</td>
                            <td>30</td>

                            <td>
                                <span class="stock-available">
                                    Available
                                </span>
                            </td>

                            <td>
                                <a href="edit_product.php" class="edit-btn">
                                    Update
                                </a>
                            </td>

                        </tr>


                        <tr>

                            <td>3</td>
                            <td>Linen Shirt</td>
                            <td>TXT003</td>
                            <td>Linen</td>
                            <td>5</td>

                            <td>
                                <span class="stock-low">
                                    Low Stock
                                </span>
                            </td>

                            <td>
                                <a href="edit_product.php" class="edit-btn">
                                    Update
                                </a>
                            </td>

                        </tr>


                        <tr>

                            <td>4</td>
                            <td>Wool Shawl</td>
                            <td>TXT004</td>
                            <td>Wool</td>
                            <td>0</td>

                            <td>
                                <span class="stock-out">
                                    Out of Stock
                                </span>
                            </td>

                            <td>
                                <a href="edit_product.php" class="edit-btn">
                                    Update
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