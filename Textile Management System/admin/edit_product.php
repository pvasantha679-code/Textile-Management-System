<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Product - Textile Management System</title>

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


    <!-- Edit Product Section -->

    <section class="form-section">

        <div class="form-box">

            <h1>Edit Product</h1>

            <p>Update textile product details</p>


            <form action="#" method="POST">

                <!-- Product Name -->

                <label for="product_name">
                    Product Name
                </label>

                <input
                    type="text"
                    id="product_name"
                    name="product_name"
                    value="Cotton Saree"
                    required
                >


                <!-- Product Code -->

                <label for="product_code">
                    Product Code
                </label>

                <input
                    type="text"
                    id="product_code"
                    name="product_code"
                    value="TXT001"
                    required
                >


                <!-- Category -->

                <label for="category">
                    Category
                </label>

                <select
                    id="category"
                    name="category"
                    required
                >

                    <option value="">Select Category</option>

                    <option value="Cotton" selected>
                        Cotton
                    </option>

                    <option value="Silk">
                        Silk
                    </option>

                    <option value="Wool">
                        Wool
                    </option>

                    <option value="Linen">
                        Linen
                    </option>

                    <option value="Synthetic">
                        Synthetic
                    </option>

                </select>


                <!-- Price -->

                <label for="price">
                    Price
                </label>

                <input
                    type="number"
                    id="price"
                    name="price"
                    value="850"
                    min="0"
                    step="0.01"
                    required
                >


                <!-- Quantity -->

                <label for="quantity">
                    Quantity
                </label>

                <input
                    type="number"
                    id="quantity"
                    name="quantity"
                    value="50"
                    min="0"
                    required
                >


                <!-- Supplier -->

                <label for="supplier">
                    Supplier Name
                </label>

                <input
                    type="text"
                    id="supplier"
                    name="supplier"
                    value="ABC Textiles"
                    required
                >


                <!-- Description -->

                <label for="description">
                    Description
                </label>

                <textarea
                    id="description"
                    name="description"
                    rows="4"
                >High quality cotton saree.</textarea>


                <!-- Buttons -->

                <div class="form-buttons">

                    <button type="submit">
                        Update Product
                    </button>

                    <a href="product.php" class="cancel-btn">
                        Cancel
                    </a>

                </div>

            </form>

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