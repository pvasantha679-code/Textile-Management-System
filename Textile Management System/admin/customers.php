<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Customer Management - Textile Management System</title>

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
            <a href="employees.php">Employees</a>
            <a href="reports.php">Reports</a>
        </nav>
    </header>


    <!-- Customer Section -->
    <section class="customer-section">

        <div class="customer-container">

            <div class="customer-header">

                <div>
                    <h1>Customer Management</h1>
                    <p>Manage customer information and details</p>
                </div>

                <a href="#" class="add-btn">
                    + Add Customer
                </a>

            </div>


            <!-- Search -->
            <div class="search-box">

                <input
                    type="text"
                    placeholder="Search customer..."
                >

                <button type="button">
                    Search
                </button>

            </div>


            <!-- Customer Table -->
            <div class="table-container">

                <table>

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Arun Kumar</td>
                            <td>9876543210</td>
                            <td>arun@gmail.com</td>
                            <td>Madurai</td>

                            <td>
                                <a href="#" class="edit-btn">
                                    Edit
                                </a>

                                <a href="#" class="delete-btn">
                                    Delete
                                </a>
                            </td>
                        </tr>


                        <tr>
                            <td>2</td>
                            <td>Priya</td>
                            <td>9876501234</td>
                            <td>priya@gmail.com</td>
                            <td>Thoothukudi</td>

                            <td>
                                <a href="#" class="edit-btn">
                                    Edit
                                </a>

                                <a href="#" class="delete-btn">
                                    Delete
                                </a>
                            </td>
                        </tr>


                        <tr>
                            <td>3</td>
                            <td>Karthik</td>
                            <td>9123456780</td>
                            <td>karthik@gmail.com</td>
                            <td>Chennai</td>

                            <td>
                                <a href="#" class="edit-btn">
                                    Edit
                                </a>

                                <a href="#" class="delete-btn">
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