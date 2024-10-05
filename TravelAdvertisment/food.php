<?php include 'top.php'; ?>

<body>

    <?php include 'header.php'; ?>  <!-- Include header -->

    <div class="row">
        <div class="col-3 col-s-3 menu">
            <?php include 'menu.php'; ?>  <!-- Include menu -->
        </div>

        <div class="col-6 col-s-9">
            <h1>The Food</h1>
            <p>Seafood is the most popular! Oysters and grilled shrimp are delicious!</p>
        <div class="picture">
        <img src="seafood.jpg" alt="seafood">
        </div>
        </div>

        <div class="col-3 col-s-12">
            <?php include 'aside.php'; ?> <!-- Include the aside content -->
        </div>
    </div>

    <?php include 'footer.php'; ?>  <!-- Include footer -->

    <script src="script.js"></script> <!-- Link external JS -->
</body>

</html>
