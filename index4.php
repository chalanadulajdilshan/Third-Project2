
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style2.css">

        <link href="owl/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="owl/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>


        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    </head>
    <body style="padding:0px; margin:0px; background-color:#fff;font-family:Arial, sans-serif">

        <!-- #region Jssor Slider Begin -->

        jssor_1_slider_init = function() {

        //Reference https://www.jssor.com/help/layer-animation.html
        var jssor_1_SlideoTransitions = [
        [{b:0,d:600,y:-290,e:{y:27}}],
        [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:87.50,t:-87.50}},{b:11000,d:500,c:{x:-87.50,t:87.50}}],
        [{b:0,d:600,x:410,e:{x:27}}],
        [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
        [{b:-1,d:1,c:{x:175.0,t:-175.0}},{b:0,d:800,c:{x:-175.0,t:175.0},e:{c:{x:7,t:7}}}],
        [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
        [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
        [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
        [{b:2000,d:600,rY:30}],
        [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
        [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
        ];

        var jssor_1_options = {
        $AutoPlay: 1,
        $Idle: 2000,
        $CaptionSliderOptions: {
        $Class: $JssorCaptionSlideo$,
        $Transitions: jssor_1_SlideoTransitions,
        $Breaks: [
        [{d:2000,b:1000}]
        ]
        },
        $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$
        }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/
        /*you can remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
        refSize = Math.min(refSize, 600);
        jssor_1_slider.$ScaleWidth(refSize);
        }
        else {
        window.setTimeout(ScaleSlider, 30);
        }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/

        var progressElement = document.getElementById("progress-element");

        function ProgressChangeEventHandler(slideIndex, progress, progressBegin, idleBegin, idleEnd, progressEnd) {
        //this event continuously fires within the process of current slide

        //slideIndex: the index of slide
        //progress: current time in the whole process
        //progressBegin: the begining of the whole process (generally, layer animation starts to play in)
        //idleBegin: captions played in and become idle, will wait for a period which is specified by option '$Idle' (or a break point created using slider maker)
        //idleEnd: the idle time is over, play the rest until progressEnd
        //progressEnd: the whole process has been completed

        if (progressEnd > 0) {
        var progressPercent = progress / progressEnd * 100 + "%";
        progressElement.style.width = progressPercent;
        }
        }

        jssor_1_slider.$On($JssorSlider$.$EVT_PROGRESS_CHANGE, ProgressChangeEventHandler);
        };
    </script>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;">

        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
        </div>

        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">
            <div>
                <img data-u="image" src="images/image1.jpg" />
                <div data-u="caption" data-t="0" style="position:absolute;top:320px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">mobile ready, touch swipe</div>
            </div>
            <div>
                <img data-u="image" src="images/image1.jpg" />
                <div data-u="caption" data-t="1" data-3d="1" style="position:absolute;top:-50px;left:125px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">time lined layer animation</div>
            </div>
            <div>
                <img data-u="image" src="images/image1.jpg" />
                <div data-u="caption" data-t="2" style="position:absolute;top:30px;left:-380px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">finger catchable right to left</div>
            </div>
            <div>
                <img data-u="image" src="images/image1.jpg" />
                <div data-u="caption" data-t="3" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">responsive, scale smoothly</div>
            </div>
            <div>
                <img data-u="image" src="images/image1.jpg" />
                <div data-u="caption" data-t="4" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.6);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">image, text, and custom layers</div>
            </div>
            <div>
                <img data-u="image" src="images/image1.jpg" />
                <div data-u="caption" data-t="5" style="position:absolute;top:30px;left:600px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">tons of transition type</div>
            </div>
            <div>
                <img data-u="image" src="images/image1.jpg" />
                <div data-u="caption" data-t="6" style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">visual slider maker</div>
            </div>
            <div data-b="0">
                <img data-u="image" src="images/image1.jpg" />
                <div data-u="caption" data-t="7" style="position:absolute;top:-50px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">play in and play out</div>
            </div>
            <div data-p="112.50">
                <img data-u="image" src="images/image1.jpg" />
                <div data-u="caption" data-t="8" data-3d="1" style="position:absolute;top:25px;left:150px;width:250px;height:250px;z-index:0;background-color:rgba(40,177,255,0.6); overflow:hidden;">
                    <div data-u="caption" data-t="9" style="position:absolute;top:100px;left:25px;width:200px;height:50px;z-index:0;font-size:24px;line-height:50px;">A Child Layer</div>
                </div>
            </div>
            <div data-p="112.50">
                <img data-u="image" src="images/image1.jpg"/>
                <div data-u="caption" data-t="10" data-3d="1" style="position:absolute;top:25px;left:100px;width:250px;height:250px;z-index:0;background-color:rgba(40,177,255,0.6);">
                    <div style="margin: 15px; font-size: 20px;">
                        <p>This is full customized content layer.<br />
                        </p>
                        <p>
                            Everything is allowed

                        </p>
                        You can put

                        <a href="http://wwww.jssor.com">
                            a link
                        </a> or an image

                        <img src="../img/icons/icon_chrome.png" /> here.

                    </div>
                </div>
            </div>
            <div id="progress-element" data-u="progress" style="position: absolute; left: 0; bottom: 20px; width: 0%; height: 5px; background-color: rgba(255,255,255,0.7); z-index: 100;"></div>
        </div>

        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
        <style>
            .jssora051 {display:block;position:absolute;cursor:pointer;}
            .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
            .jssora051:hover {opacity:.8;}
            .jssora051.jssora051dn {opacity:.5;}
            .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
        </style>
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
        <!--#endregion Arrow Navigator Skin End -->

    </div>
    <script src="../js/jssor.slider.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    <script type="text/javascript">jssor_1_slider_init();</script>
    <script src="vendor/bootstrap/js/jssor.slider.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>



    <!-- #endregion Jssor Slider End -->
</body>
</html>
