<?php include 'top.php'; ?>

<body>

    <?php include 'header.php'; ?>  <!-- Include header -->

    <div class="row">
        <div class="col-3 col-s-3 menu">
            <?php include 'menu.php'; ?>  <!-- Include menu -->
        </div>

        <div class="col-6 col-s-9">
            <h1>The Flight</h1>
            <p>It takes 12 hours by plane to go to Ksamil, Albania</p>
        <div class="picture">
        <img src="flight.jpg" alt="Ksamil from above">
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
