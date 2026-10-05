<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employee Management - Textile Management System</title>

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


    <!-- Employee Management -->

    <section class="management-section">

        <div class="management-container">

            <div class="page-header">

                <div>
                    <h1>Employee Management</h1>
                    <p>Manage textile company employees</p>
                </div>

                <a href="#" class="add-btn">
                    + Add Employee
                </a>

            </div>


            <!-- Search -->

            <div class="search-box">

                <input
                    type="text"
                    placeholder="Search employee..."
                >

                <button type="button">
                    Search
                </button>

            </div>


            <!-- Employee Table -->

            <div class="table-container">

                <table>

                    <thead>

                        <tr>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Joining Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>EMP001</td>

                            <td>Arun Kumar</td>

                            <td>Production</td>

                            <td>9876543210</td>

                            <td>arun@gmail.com</td>

                            <td>10-01-2025</td>

                            <td>
                                <span class="status-active">
                                    Active
                                </span>
                            </td>

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

                            <td>EMP002</td>

                            <td>Priya</td>

                            <td>Sales</td>

                            <td>9876543211</td>

                            <td>priya@gmail.com</td>

                            <td>15-03-2025</td>

                            <td>
                                <span class="status-active">
                                    Active
                                </span>
                            </td>

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

                            <td>EMP003</td>

                            <td>Karthik</td>

                            <td>Store</td>

                            <td>9876543212</td>

                            <td>karthik@gmail.com</td>

                            <td>20-05-2025</td>

                            <td>
                                <span class="status-inactive">
                                    Inactive
                                </span>
                            </td>

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