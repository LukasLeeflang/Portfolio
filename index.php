<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lukie.tech</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<?php include('Components/navigation.php')?>

<!-- Start homepage section -->
<div class="container">
    <div style="height: 75vh;" class="homePage">
        <div class="card" style="margin-top: 75px; background-color: rgba(192, 192, 192, 0.3);">
            <div class="card-body" style="text-align: center;">
                <h3 class="card-title" style="color: white; margin-bottom: 30px;">Welcome to lukie.tech!</h3>
                <p class="card-text" style="color: white;">Hello and welcome to my personal portfolio webpage! In here I will set all my personal projects up for display.</p>
                <p class="card-text" style="color: white;">My name is Lukas Leeflang, and I'm an 18-year-old junior web developer currently studying at the ROC van Flevoland. At this point in time I am just starting out my career as a web developer, but over the past year I have advanced greatly in PHP frameworks such as Laravel and Slim3.</p>
                <p class="card-text" style="color: white;">I also hold a fair amount of experience in the basics. I familiarize myself with the following:</p>

                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <ul>
                                <h5>Front-end</h5>
                                <li>- HTML</li>
                                <li>- CSS</li>
                                <li>- JavaScript</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <h5>Back-end</h5>
                                <li>- PHP</li>
                                <li>- SQL</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <h5>Frameworks</h5>
                                <li>- Laravel (PHP)</li>
                                <li>- Slim3 (PHP)</li>
                                <li>- Bootstrap (CSS)</li>
                            </ul>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End homepage section -->

    <!-- Start projects section -->
    <div id="projects" style="height: 75vh;" class="projectPage">
        <div class="card" style="margin-top: 20px; background-color: rgba(192, 192, 192, 0.3);">
            <div class="card-body" style="text-align: center;">
                <h3 class="card-title" style="color: white; margin-bottom: 30px;">Some of my projects:</h3>
                <h5 style="color: white; margin-bottom: 20px;">Spotitube:</h5>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showProject1">
                    View project
                </button>
            </div>
        </div>
    </div>
    <!-- End projects section -->

    <!-- Start contact section -->
    <div id="contact" style="height: 75vh;" class="contactPage">
        <div class="card" style="margin-top: 20px; background-color: rgba(192, 192, 192, 0.3);">
            <div class="card-body" style="text-align: center;">
                <h3 class="card-title" style="color: white; margin-bottom: 30px;">Contact me:</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <h5>Social media:</h5>
                                <li><i class="fa fa-linkedin-square"></i><span style="margin-left: 5px;"><a href="https://www.linkedin.com/in/lukas-l-4aa287153/" style="color: white;">Lukas Leeflang</a></span></li>
                                <li><i class="fa fa-github"></i><span style="margin-left: 5px;"><a href="https://github.com/LukasLeeflang" style="color: white;">Lukas Leeflang</a></span></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <h5>Contact me personally:</h5>
                                <li><i class="fas fa-envelope"></i><span style="margin-left: 5px;">lleeflang@roc-dev.com</span></li>
                                <li><i class="fas fa-phone"></i><span style="margin-left: 5px;"><a href="tel:+310651774969">+31 06-5177-4969</a></span></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- End contact section -->

    <?php include('Components/footer.php') ?>

    <!-- Modal for project display -->
    <div class="modal fade" id="showProject1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">SpotiTube</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <p>My most recent project is one I have made for school. It was part of a challenge where we had to show everything we have learned so far.</p>
                    <p>SpotiTube combines the services of Spotify and YouTube to create the best streaming experience possible. You can create your own personal playlists and add music to them.</p>
                    <p>View the source code <a href="https://github.com/LukasLeeflang/PHPChallenge">here.</a></p>
                    <img src="Images/spotitube.png" class="img-fluid" alt="SpotiTube" style="margin-bottom: 10px;">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- End of modal -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>