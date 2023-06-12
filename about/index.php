<?php include '../segment/ipfilter.php'; ?>
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
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@200;400;600;700;900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/28b5b7d92f.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/about.css">
        <link rel="stylesheet" href="/css/responsive.css">
        <link rel="shortcut icon" href="/images/logo-icon.png" type="image/x-icon">
        <title>Beyond Staffing | Avocado Hive</title>
    </head>
    <body>
        <div class="d-main-content">
            <div class="d-main-above-fold">
                <?php include '../segment/header.php'; ?>

                <div class="d-feat-above-fold">
                    <?php include '../segment/slider-about.php'; ?>
                </div>
            </div>
            
            <div class="d-home-page about-page-setting">
                <div class="cneter-content">
                    <div class="d-center-content-inner">
                        <div class="d-next-door">
                            <h2>We are <span>AvocadoHive</span></h2>
                            <div class="sep-desc">Avocado Hive is a start-up company founded in February 2023 by a team of Filipino legal professionals with a mission to provide the best legal industry solutions to every growing legal professional, that encompasses both our clients, client’s clients, and employees. We specialize in working with solo practitioners and small law firms in the US.</div>
                            <div class="sep-desc">Our leadership team has a combined 10 years of experience in the legal process outsourcing industry, collaborating with US lawyers and firms. Our collective experience allows us to offer valuable support to our clients, client’s customers, and our employees.</div>
                            <img src="/images/next-group.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="cneter-content reverse-polarities">
                        <div class="d-center-content-inner">
                            <div class="d-next-door">
                                <h2>At <span>AvocadoHive</span></h2>
                                <div class="sep-desc">we are dedicated in helping small and growing law practices succeed. We understand the challenges they face and share their vision of pushing their firms forward. Our goal is to make the process of acquiring offshore outsourcing services easy and stress-free. If you are a Lawyer looking to grow your practice, improve coverage of your services, or you just want to enhance your work-life balance, don't hesitate to reach out to us. We would be happy to discuss how we can support you in achieving your goals.</div>
                                <img src="/images/next-group.png" alt="">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="d-footer">
                <?php include '../segment/footer.php'; ?>
                <?php include '../segment/footer-info.php'; ?>
            </div>
        </div>
        <?php include '../segment/scripts.php'; ?> 
    </body>
</html>