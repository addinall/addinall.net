<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php
// vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
// CAPTAIN SLOG
// File:            index.php
// System:          addinall.net
// Date:            June192015
// Author:          Mark Addinall
// Synopsis:        A mixture of HTML5,CSS3,AngularJS,jQuery
//                  and WebGL in a single page FLUID landing
//                  micro-app.
//
//
//-------------------------------
?>
<title>addinall.net - demonstration of new architectures</title>

<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="author" content="MarkAddinall-BrisbaneAustralia">
<meta name="keywords" content="HTML5 CSS3 WebGL AJAX REST AngularJS MOBILE Bootstrap">


<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scene/scenejs.js"></script>

<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

<link href='css/style.css' rel='stylesheet' type='text/css'> 

</head>
<body>

<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<div id='star_title'>
    <span>
        addinall.net
    </span>
    <br>
    <span>
        A DEMONSTRATION
    </span>
    <br>
    <span>
        HTML5/SCSS/jQuery-MOBILE
    </span>
    <br>
    <span>
        WebGL/AngularJS/REST-AJaX
    </span>
    <br>
    <span>
       This site is under construction - Mess with the mouse on Images 
    </span>
</div>

<canvas id="glcanvas" width="1000px" height="1000px">
    Your browser doesn't appear to support the HTML5 <code>&lt;canvas&gt;</code> element.
</canvas>

<script>
    // Demonstrates how to have a transparent canvas


    // Point SceneJS to the bundled plugins
    SceneJS.setConfigs({
        pluginPath: "js/scene/plugins"
    });

    // Create scene
    var scene = SceneJS.createScene({

        // link to our HTML5 canvas element
        canvasId: "glcanvas",
        transparent: true,

        nodes: [

            // Mouse-orbited camera, defined by
            // plugin in http://scenejs.org/api/latest/plugins/node/cameras/orbit.js
            {
                type: "cameras/orbit",
                yaw: 30,
                pitch: -30,
                zoom: 10,
                zoomSensitivity: 10.0,
                spin: 0.1, // Slowly spin

                nodes: [
                    {
                        type: "material",
                        color: { r: 0.5, g: 0.5, b: 0.6 },
                        nodes: [

                            // Teapot primitive, implemented by plugin at
                            // http://scenejs.org/api/latest/plugins/node/geometry/teapot.js
                            {
                                //type: "geometry/teapot"
                                type: "models/vehicles/tank"
                            }
                        ]
                    }
                ]
            }
        ]
    });

</script>
</body>
</html>

