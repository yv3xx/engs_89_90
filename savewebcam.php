

<!doctype html>
    <!--
Author: Skip
Owner:  VillageTech Solutions (villagetechsolutions.org)
Date:   2015 03
Revision: Looma 2.0.0

File: header.php
-->

<html lang="en" class="no-js">
  <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="author" content="Kirumba">
    <meta name="project" content="Looma">
    <meta name="url" content="https://looma.website">
    <meta name="owner" content="Looma Education Corporation">
    <meta name="copyright" content="Looma Education Corporation">

    <meta name="description" content="Looma Education: Nepal.
    Looma is an affordable and low power-consuming audio-visual education computer
    that provides reliable access to educational content for an entire classroom--offline.
    It combines a computer, A/V projection system, webcam, and massive library of media files,
    teacher tools, dictionary, learning games, educational videos, etc., replacing the Internet.
    It uses only 55 W, easily provided by solar, replacing electrical grid power.
    The current version of Looma is configured for grade K-12 education in Nepal. Configurations for other
    languages and countries are planned.">

    <link rel="icon" type="image/png" href="images/logos/looma favicon yellow on blue.png">
    
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!-- uses latest IE rendering engine-->

	<!--
Name: Kirumba

Owner: VillageTech Solutions (villagetechsolutions.org)
Date: 2015 03
Revision: Looma 2.0.0
File: includes/looma-translate.php
Description:  Modified video editor for use with webcam recordings
-->



  	<title> Looma - Webcam Recording Editor </title>

    <!--
    -->
      <link rel="stylesheet" href="css/tether.min.css">        <!-- needed by bootstrap.css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">     <!-- Bootstrap CSS still needed ?? yes, for glyphicons-->

      <link rel="stylesheet" href="css/looma.css">             <!-- Looma CSS -->
      <link rel="stylesheet" href="css/looma-keyboard.css">    <!-- Looma keyboard CSS -->

    <link rel='stylesheet' href='css/looma-theme-looma.css' id='theme-stylesheet'>

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/looma-filecommands.css">
        <link rel="stylesheet" type="text/css" href="css/looma-media-controls.css">
        <link rel="stylesheet" type="text/css" href="css/looma-edit-video.css">
        <link rel="stylesheet" href="css/looma-text-display.css">
    </head>

    <body>
        <div id="main-container">

            <div id="header" class="inner-div">
                <span id="title">Editing: </span>  <span class="filename">&lt;none&gt;</span>
                <script pagespeed_no_defer="">//<![CDATA[
(function(){var g=this,h=function(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};var l=function(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};var m=function(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n,p=function(b,d,a,c,e){this.f=b;this.h=d;this.i=a;this.c=e;this.e={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.g=c;this.b={};this.a=[];this.d={}},q=function(b,d){var a,c,e=d.getAttribute("pagespeed_url_hash");if(a=e&&!(e in b.d))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.e.height&&c<=b.e.width)}a&&(b.a.push(e),b.d[e]=!0)};p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});var r=function(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.i;b.c&&(a+="&n="+b.c);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.g&&(e="&rd="+encodeURIComponent(JSON.stringify(s())),131072>=a.length+e.length&&(a+=e),d=!0);t=a;if(d){c=b.f;b=b.h;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(u){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}},s=function(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("pagespeed_url_hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].k&&a.height>=b[e].j)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b},t="";h("pagespeed.CriticalImages.getBeaconData",function(){return t});h("pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','https://looma.website/Looma/looma-edit-video.php','Ez0F1MDYS1',true,false,'cioTahZtCU0');
//]]></script><img src="images/logos/LoomaLogoTransparent.png" height="100%" pagespeed_url_hash="1516737408" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/>
                <span>Looma Video Editor</span>
            </div>

            <div id="search-bar" class="inner-div">

                <!doctype html>
<!--
Name: Bo, Skip

Owner: VillageTech Solutions (villagetechsolutions.org)
Date: 2018 03
Revision: Looma 2.0.0
File: includes/looma-search.php

Description:  displays and navigates content folders for Looma 2
-->
<!--
    <link rel="stylesheet" href="css/looma-search.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
-->

<link rel="Stylesheet" type="text/css" href="css/looma-search.css">

<div id='search-panel'>
    <form id='search' name='search'>
        <input type='hidden' id='collection' value='activities' name='collection'/>
        <input type='hidden' id='cmd' value='search' name='cmd'/>
        <input type='hidden' id='includeLesson' value=true name='includeLesson'/>
        <input type='hidden' id='pageno' value='1' name='pageno'/>
        <input type='hidden' id='pagesz' value='500' name='pagesz'/>
        <input type='hidden' id='language' value='english' name='language'/>


  <!--  /**************************************/
        /********** Media v. Chapter **********/
        /**************************************/ -->
            <div id='search-kind'>
                <input type='radio' name='radio' value='activities' class='filter-radio black-outline' id='ft-media' checked>
                <label class='filter-label' for='ft-media'>Media</label>
                <input type='radio' name='radio' value='chapters' class='filter-radio black-outline' id='ft-chapter'>
                <label class='filter-label' for='ft-chapter'>Chapter</label>
            </div>

<!--   /**************************************/
       /*********** Media Search Section  ****/
       /**************************************/  -->


                <div id="outerResultsDiv">
                    <div id="innerResultsMenu"></div>
                    <div id="results-div"></div>
                    <div id="innerResultsDiv">
                        <span class="hint">Search Results</span>
                    </div>
                </div>

                <div id="previewpanel">
                    <div id="video-area">
                        <div id="video-screen"></div>
                        <div id='media-controls' class='media-controls'>    <div class='time title'></div>    <button type='button' id='video-playpause' class='media play-pause'> keyword('Play/Pause') </button>    <input type='range' id='video-seek-bar' class='video seek-bar' value='0'><br>    <button type='button' class='media mute'> keyword('Volume'')</button>    <input type='range' id='volume' class='video volume-bar' min='0' max='1' step='0.1' value='0.5'></div> 

                        <div id="adjust" draggable="true">
                            <button class="adjust" id="frameMinus5">-5</button> <button class="adjust" id="frameMinus1">-1</button>
                            <span>frame&nbsp;&nbsp;</span>
                            <button class="adjust" id="frameAdd1">+1</button> <button class="adjust" id="frameAdd5">+5</button>
                            <br>
                            <button class="adjust" id="secMinus5">-5</button>   <button class="adjust" id="secMinus1">-1</button>
                            <span>second</span>
                            <button class="adjust" id="secAdd1">+1</button>   <button class="adjust" id="secAdd5">+5</button>
                        </div>
                    </div>
                    <div id="preview-area">
                        <div id="preview-screen"></div>
                    </div>
                    <button id="clearPreview" type="button">Clear Preview</button>
                </div>


                <div id="timeline">
                    <div id="timelineDisplay"></div>
                </div>
            </div>

        <div id="text-editor">
            <iframe id="textframe" src="./looma-text-frame.php" allowTransparency="true"> </iframe>
        </div>

        <img id="padlock" draggable="false" src="  images/padlock-open.png" pagespeed_url_hash="244841027" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
        <p id="login-id">You are logged in as 'tony'</p>

        <button class='control-button' id='dismiss'></button>

    <!-- in production, the below should all be MINIMIZED versions -->
    <script src="js/jquery.min.js"></script>      <!-- jQuery -->
    <script src="js/looma-utilities.js"></script>      <!-- Looma utility functions -->
    <script src="js/looma.js"></script>      <!-- Looma common page functions -->
    <script src="js/looma-screenfull.js"></script>      <!-- implements FULLSCREEN mode  -->
    <script src="js/looma-keyboard.js"></script>      <!-- adds a KEYBOARD button if the page has any inputs -->

<!--
Name: Skip

Owner: VillageTech Solutions (villagetechsolutions.org)
Date: 2016 11
Revision: Looma 2.4
File: includes/looma-filecommands.php
Description:  popup SEARCH panel for Looma pages
-->

  <link rel="stylesheet" href="css/looma-filecommands.css">

    <div id="filecommands">
        <div class="btn-group">
          <button type="button" id="cmd-btn" class="btn" data-toggle="dropdown" aria-expanded="false">
            &nbsp;File Commands&nbsp;
            <i class="fa fa-caret-down" aria-hidden="true"></i>
          </button>
          <div class="dropdown-menu">
            <button class="dropdown-item file-cmd" id="new">New</button><br>
            <button class="dropdown-item file-cmd" id="open">Open</button><br>
            <button class="dropdown-item file-cmd" id="save">Save</button><br>
            <button class="dropdown-item file-cmd" id="saveas">Save As</button><br>
            <button class="dropdown-item file-cmd" id="rename">Rename</button><br>
            <button class="dropdown-item file-cmd" id="delete">Delete</button><br>
            <!-- added New Text File button to launch text card editor in iFrame.
                 this button initially hidden by css -->
				 <!-- K: irrelevant to video
            <button class="dropdown-item file-cmd" id="show_text">Edit a Text File</button><br>

            <div class="dropdown-divider"></div><br>

            <button class="dropdown-item file-cmd template-cmd" id="opentemplate">Open Template</button><br>
            <button class="dropdown-item file-cmd template-cmd admin" id="savetemplate">Save Template</button><br>
            <button class="dropdown-item file-cmd template-cmd admin" id="saveastemplate">Save As Template</button><br>
            <button class="dropdown-item file-cmd template-cmd admin" id="deletetemplate">Delete Template</button><br>
-->
            <div class="dropdown-divider"></div><br>
            <button class="dropdown-item file-cmd" id="quit">Quit</button>
          </div>
        </div>
      </div>




<div id='filesearch-panel'>
    <p class='filesearch-collectionname'></p>

    <form id='filesearch' name='filesearch'>
        <input type='hidden' id='filesearch-collection' value='activities' name='collection'/>  <!-- JS must set "currentcollection"  -->
        <input type='hidden' id='filesearch-cmd' value='search' name='cmd'/>
        <input type='hidden' id='filesearch-ft' value='' name='type[]'/>

        <div id='filesearch-bar' class='media-filter'>
            <input id='filesearch-term' type='text' class=' black-border' type='search' name='search-term' placeholder='Enter Search Term...'>&nbsp;
            <button id='filesearch-submit' class='filesearch' name='search' value='value' type='submit'>
            <button class='clear-filesearch' type='button'>Clear</button>
        </div>        <button class='cancel-filesearch' type='button'>Cancel</button>
    </form>
</div>

<div id="filesearch-results"></div>

<div id="filesave-panel" class="save-popup">
    <button class='popup-button dismiss dismiss-popup'><b>X</b></button>
    <p id='filesave-message'>Save work before quiting?</p><br/>
    <button id='cancel-filesave' class="dismiss cancel-popup" type='button'>Cancel</button>
    <button id='filesave-nosave' type='button'>Don't Save</button>
    <button id='filesave-save' type='button'>Save</button>

</div>


<div id="filesaveAs-panel" class="save-popup">
    <button class='popup-button dismiss dismiss-popup'><b>X</b></button>
    <p id='filesave-message'>Enter a name for this file:</p><br/>
    <span>Filename:</span><input id="filename"></input><br/>
	<p id='filesave-message_tags'>Enter any tags or keywords to identify this file:</p><br/>
    <span>Tags:</span><input id="tags"></input><br/>
    <button id='cancel-filesaveAs' class="dismiss cancel-popup" type='button'>Cancel</button>
    <button id='save-filesaveAs' type='button'>Save</button>

</div>

<script src="js/looma-filecommands.js"></script>

        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.hotkeys.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/looma-search.js"></script>
        <script src="js/looma-media-controls.js"></script>
        <script src="js/looma-edit-video.js"></script>

    </body>
</html>


