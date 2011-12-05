<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
    <title>Nivo Slider Demo</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <a href="http://dev7studios.com" id="dev7link" title="Go to dev7studios">dev7studios</a>
        <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <img src="images/toystory.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="images/up.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="images/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="images/nemo.jpg" alt="" title="#htmlcaption" />
            </div>
        </div>

    </div>
  

    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>