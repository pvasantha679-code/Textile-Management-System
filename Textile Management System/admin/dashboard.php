<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Textile Management System</title>

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


    <!-- Dashboard -->
    <section class="dashboard-section">

        <div class="dashboard-container">

            <h1>Admin Dashboard</h1>

            <p class="dashboard-subtitle">
                Welcome to Textile Management System
            </p>


            <!-- Dashboard Cards -->
            <div class="dashboard-cards">

                <div class="dashboard-card">
                    <h3>Total Products</h3>
                    <p class="number">120</p>
                    <a href="product.php">View Products</a>
                </div>


                <div class="dashboard-card">
                    <h3>Total Customers</h3>
                    <p class="number">85</p>
                    <a href="customers.php">View Customers</a>
                </div>


                <div class="dashboard-card">
                    <h3>Total Stock</h3>
                    <p class="number">450</p>
                    <a href="stock.php">View Stock</a>
                </div>


                <div class="dashboard-card">
                    <h3>Total Employees</h3>
                    <p class="number">25</p>
                    <a href="employees.php">View Employees</a>
                </div>

            </div>


            <!-- Quick Access -->
            <div class="quick-section">

                <h2>Quick Access</h2>

                <div class="quick-buttons">

                    <a href="add_product.php">
                        + Add Product
                    </a>

                    <a href="customers.php">
                        Manage Customers
                    </a>

                    <a href="stock.php">
                        Manage Stock
                    </a>

                    <a href="reports.php">
                        View Reports
                    </a>

                </div>

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