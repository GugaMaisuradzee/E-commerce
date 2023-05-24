<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products list</title>
    <title>Add Product</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <?php if ($_SERVER['REQUEST_URI'] === '/add_product'): ?>
        <link rel="stylesheet" href="assets/css/form.css">
    <?php endif; ?>
</head>
<body>
<ul class="list">
    <?php if ($_SERVER['REQUEST_URI'] === '/'): ?>
        <!--  For products list  -->
        <li class="title"><h1>Product List</h1></li>
        <ul class="buttons">
            <li><a href="/add_product">ADD</a></li>
            <li>
                <button type="submit" name="submit" form="products-form" id="delete-product-btn"
                        style="margin-left: 20px; background-color: #971f28;">MASS DELETE
                </button>
            </li>
        </ul>

        <!--  For add page  -->
    <?php elseif ($_SERVER['REQUEST_URI'] === '/add_product'): ?>
        <li class="title"><h1>Product Add</h1></li>
        <ul class="buttons" style="margin-left: 72% !important;">
            <!-- Save button -->
            <li>
                <button class="addProductButton" type="submit" form="product_form" style="background-color: #3b76d4">
                    Save
                </button>
            </li>
            <li><a style="margin-left: 20px;" href="/">Cancel</a></li>
        </ul>
    <?php endif; ?>
</ul>
<hr class="lines">
