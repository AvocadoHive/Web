<?php include 'segment/ipfilter.php'; ?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/responsive.css">
        <link rel="shortcut icon" href="/images/logo-icon.png" type="image/x-icon">
        <title>Beyond Staffing | Avocado Hive</title>
    </head>
    <body>
        <div class="d-main-content">
            <div class="d-main-above-fold">
                <?php include 'segment/header.php'; ?>

                <div class="d-feat-above-fold">
                    <?php include 'segment/slider.php'; ?>
                </div>
            </div>
            
            <div class="d-home-page">
                <?php include 'segment/home.php'; ?>
            </div>
            <div class="d-footer">
                <?php include 'segment/footer.php'; ?>
                <?php include 'segment/footer-info.php'; ?>
            </div>
        </div>
        <?php include 'segment/scripts.php'; ?>
    </body>
</html>