<!-- Sajid Chowdhury Feb 14, 2024 IT202-006 Phase 1 shc4@njit.edu -->
<!-- Sajid Chowdhury Updated: Feb 26, 2024 IT202-006 Phase 2 shc4@njit.edu-->
<!-- Sajid Chowdhury Updated: Mar 18, 2024 IT202-006 Phase 3 shc4@njit.edu -->

<header>
    <a href="home_page.php"><img src="images/homeicon.png" alt="page icon" width="50" /></a>
    <h1>Smarter Homes Technology</h1>
    <?php session_start(); ?>
    <?php include('menu.php');?>
    <nav>
        <a class="navlink" href="home_page.php">Home</a>
        <?php if($_SESSION['is_valid_admin']) {?>
            <a class="navlink" href="shipping_form.php">Shipping</a>
        <?php } ?>
        <a class="navlink" href="product.php">Product</a>
        <?php if($_SESSION['is_valid_admin']) {?>
        <a class="navlink" href="create_form.php">Create</a>
        <?php } ?>
    </nav>
    <hr />
</header>