<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Delete Product - Textile Management System</title>

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


    <!-- Delete Product Section -->
    <section class="delete-section">

        <div class="delete-box">

            <h1>Delete Product</h1>

            <p>
                Are you sure you want to delete this product?
            </p>

            <div class="product-info">

                <p>
                    <strong>Product Name:</strong>
                    Cotton Saree
                </p>

                <p>
                    <strong>Product Code:</strong>
                    TXT001
                </p>

                <p>
                    <strong>Category:</strong>
                    Cotton
                </p>

            </div>


            <!-- Buttons -->

            <div class="delete-buttons">

                <form action="#" method="POST">

                    <input
                        type="hidden"
                        name="product_id"
                        value="1"
                    >

                    <button type="submit" class="delete-confirm">
                        Yes, Delete
                    </button>

                </form>

                <a href="product.php" class="cancel-delete">
                    Cancel
                </a>

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