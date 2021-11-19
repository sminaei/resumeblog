<?php
include_once 'controllers/connection.php';

$GENERAL_INFO = getGeneralInfo($con);
$EXP = getExperiences($con);
$EDU = getEducations($con);
$SKL = getSkills($con);
$AWZ = getAwards($con);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none"><?= $GENERAL_INFO['fullname']?></span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?=$GENERAL_INFO['profilePic']?>" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section  id = "about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <?= $GENERAL_INFO['fullname']?>
                    </h1>
                    <div class="subheading mb-5"><?= $GENERAL_INFO['address']?> . <?= $GENERAL_INFO['mobile']?>.


                        <a href="mailto:<?= $GENERAL_INFO['email']?>"><?= $GENERAL_INFO['email']?></a>
                    </div>
                    <p class="lead mb-5"><?= $GENERAL_INFO['about']?></p>
                    <div class="social-icons">
                        <?php if ($GENERAL_INFO['linkedin'] != ''):?>
                        <a class="social-icon" href="<?= $GENERAL_INFO['linkedin'];?>">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <?php endif; ?>
                        <?php if ($GENERAL_INFO['twitter'] != ''):?>
                            <a class="social-icon" href="<?= $GENERAL_INFO['twitter'];?>">
                                <i class="fab fa-twitter"></i>
                            </a>
                        <?php endif; ?>
                        <?php if ($GENERAL_INFO['facebookid'] != ''):?>
                            <a class="social-icon" href="<?= $GENERAL_INFO['facebookid'];?>">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        <?php endif; ?>
                        <?php if ($GENERAL_INFO['instagram'] != ''):?>
                            <a class="social-icon" href="<?= $GENERAL_INFO['instagram'];?>">
                                <i class="fab fa-instagram"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <?php foreach ($EXP as $expItem):?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">

                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?=$expItem['title'] ?></h3>
                            <div class="subheading mb-3"><?=$expItem['subTitle'] ?></div>
                            <p> <?=$expItem['content'] ?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?=$expItem['fromDate'] ?>-<?=$expItem['toDate'] ?></span></div>
                    </div>
                </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <?php foreach ($EDU as $eduItem): ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="resume-content">
                            <h3 class="mb-0"><?=$eduItem['title'] ?></h3>
                            <div class="subheading mb-3"><?=$eduItem['subTitle'] ?></div>
                            <div><?=$eduItem['content'] ?></div>
                        </div>
                        <div class="flex-shrink-0">
                            <span class="text-primary"><?=$eduItem['fromDate'] ?> - <?=$eduItem['toDate'] ?></span>
                    </div>
                </div>
                    <?php endforeach;?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <?php foreach ($SKL['tools'] as $sklItem): ?>
                            <li class="list-inline-item">
                                <i class="fab <?=$sklItem['logo']?>"></i></li>
                        <?php endforeach; ?>

                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <?php foreach ($SKL['skills'] as $sklItem): ?>
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                <?= $sklItem['title']?>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>

                    <p><?=$GENERAL_INFO['intrests']?></p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <?php foreach ($AWZ as $awzItem): ?>
                            <?php
                        $className = 'fa fa-trophy';
                        $classColor = 'gold';
                        if ($awzItem['type'] != 'award'){
                            $className = 'fa fa-certificate';
                            $classColor= 'grey';
                        }
                            ?>
                        <li>
                            <i style="color: <?=$classColor?> !important;" class="fa-li <?=$className ?> text-warning"></i>
                            <?= $awzItem['title'] ?>
                        </li>
             <?php endforeach; ?>
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
