<!doctype html>
<!--
Name: Skip, Aaron, Connor, Ryan

Owner: VillageTech Solutions (villagetechsolutions.org)
Date: 2016 07
Revision: Looma Video Editor 1.0
File: video.php
Description: Can play an unedited video reroutes the user to looma-edited-video.php if
they want to edit a video
-->
<?php $page_title = 'Looma Video Player';
      require_once ('includes/header.php');
      require_once('includes/looma-utilities.php');
?>

    <link rel="stylesheet" type="text/css" href="css/looma-video.css">
    <link rel="stylesheet" type="text/css" href="css/looma-media-controls.css">
    <link rel="stylesheet" href= "css/looma-video-buttons.css">

    </head>

    <body>

            <div id="main-container-horizontal">
                    <div id="video-player">
                        <div id="fullscreen">
                            <video id="video1" width="100%" height="100%" autoplay muted></video>
                            <div id="fullscreen-buttons">
                                <?php include ('includes/looma-control-buttons.php');?>
                            </div>
                        </div>
                    </div>

                <div id="title-area" hidden>
                    <h3 id="title"></h3>
                </div>
            /*
            <!--Text Buttons>
            <a href="#!" class="btn btn-danger" onClick="stop()">Stop Cam</a>
            <a href="#!" class="btn btn-success" onClick="previewing()">Start Cam</a>
            <a href="#!" class="btn btn-success" onClick="start()">Start Recording</a>
            <a id= "downloadButton" href="#!" class= "btn btn-secondary" onClick="createNewElement()">Download Recording</a>
             */
            
            <!--Stop Camera-->
            <button href="#!" onclick="stop()" class="btn btn-danger">
                <img draggable="false" src="images/video-stop.png"  height= "5%" width = "5%" >
                <?php tooltip("Stop Cam") ?>
            </button>
            <!--Start Camera-->
            <button href="#!" onclick="previewing()" class="btn btn-success">
                <img draggable="false" src="images/video-preview.png"  height= "5%" width = "5%" >
                <?php tooltip("Start Cam") ?>
            </button>
            <!--Start Recording-->
            <button href="#!" onclick="start()" class="btn btn-success">
                <img draggable="false" src="images/video-record.png"  height= "5%" width = "5%" >
                <?php tooltip("Start Recording") ?>
            </button>
            <!--Download Recording-->
            <button id= "downloadButton" href="#!" onClick="createNewElement()" class="btn btn-secondary">
                <img draggable="false" src="images/video-download.png"  height= "5%" width = "5%" >
                <?php tooltip("Download Recording") ?>
            </button>

            <div id="newElementId"></div>
            <!--<pre id="log"></pre>-->
            </div>

        <!--Adds the toolbar to the video player screen-->
        <?php include ('includes/toolbar.php'); ?>
        <?php include ('includes/js-includes.php'); ?>
        <script src="js/looma-create-input-box.js"></script>
        <script src="js/looma-media-controls.js"></script>          <!-- Looma Javascript -->
        <script src="js/looma-video.js"></script>          <!-- Looma Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" ></script>
        <script src="js/script.js"></script>


    </body>


