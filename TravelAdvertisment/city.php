<?php include 'top.php'; ?>

<body>

    <?php include 'header.php'; ?>  <!-- Include header -->

    <div class="row">
        <div class="col-3 col-s-3 menu">
            <?php include 'menu.php'; ?>  <!-- Include menu -->
        </div>

        <div class="col-6 col-s-9">
            <h1>The City</h1>
            <p>Saranda is the closest city near Ksamil, and one of the most beautiful cities in Albania!</p>
        <div class="picture">
        <img src="saranda.jpg" alt="saranda">
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
