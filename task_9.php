<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
        <style> 
        .banned{
            opacity: 0.4;
        }
    </style>
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
    <?php
    /*     $people = [
        [
            'name' => 'Sunny A. (UI/UX Expert)',
            'personImg' => 'img/demo/authors/sunny.png',
            'posision' => 'Lead Author',
            'altName' => 'Sunny A.',
            'twitterLink' => 'https://twitter.com/@myplaneticket',
            'twitterAcc' => '@myplaneticket',
            'wrapLink' => 'https://wrapbootstrap.com/user/myorange',
            'linkToContact' => 'Contact Sunny',
            'status' => 'active'

        ],
        [
            'name' => 'Jos K. (ASP.NET Developer)',
            'personImg' => 'img/demo/authors/josh.png',
            'posision' => 'Partner &amp; Contributor',
            'altName' => 'Jos K.',
            'twitterLink' => 'https://twitter.com/@atlantez',
            'twitterAcc' => '@atlantez',
            'wrapLink' => 'https://wrapbootstrap.com/user/Walapa',
            'linkToContact' => 'Contact Jos',
            'status' => 'active'


        ],
        [
            'name' => 'Jovanni L. (PHP Developer)',
            'personImg' => 'img/demo/authors/jovanni.png',
            'posision' => 'Partner &amp; Contributor',
            'altName' => 'Jovanni Lo',
            'twitterLink' => 'https://twitter.com/@lodev09',
            'twitterAcc' => '@lodev09',
            'wrapLink' => 'https://wrapbootstrap.com/user/lodev09',
            'linkToContact' => 'Contact Jovanni',
            'status' => 'banned'

        ],
        [
            'name' => 'Roberto R. (Rails Developer)',
            'personImg' => 'img/demo/authors/roberto.png',
            'posision' => 'Partner &amp; Contributor',
            'altName' => 'Jovanni Lo',
            'twitterLink' => 'https://twitter.com/@sildur',
            'twitterAcc' => '@sildur',
            'wrapLink' => 'https://wrapbootstrap.com/user/sildur',
            'linkToContact' => 'Contact Roberto',
            'status' => 'banned'

        ],
    ] */
    $pdo = new PDO('mysql:host=localhost;dbname=my_project;charset=utf8', 'root', '');
    $sql = 'SELECT * FROM people';
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $people = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
                            <?php foreach ($people as $person): ?>
                                <div class="  <?php echo $person['status'] == 'banned' ? 'banned' : ''; ?>
                                rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?php echo $person['personImg']; ?>" alt="<?php echo $person[
  'altName'
]; ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                    <?php echo $person['name']; ?>
                                        <small class="m-0 fw-300">
                                        <?php echo $person['posision']; ?>
                                        </small>
                                    </h5>


                                    <a href="<?php echo $person[
                                      'twitterLink'
                                    ]; ?>" class="text-info fs-sm" target="_blank"><?php echo $person['twitterAcc']; ?></a> 

                                    -
                                    <a href="<?php echo $person[
                                      'wrapLink'
                                    ]; ?>" class="text-info fs-sm" target="_blank" title="<?php echo $person[
  'linkToContact'
]; ?>"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>

                            <?php endforeach; ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
