<?php
if (!strpos(url(), "localhost")) {
    /**
     * CSS
     */
    $minCSS = new MatthiasMullie\Minify\CSS();
    $minCSS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/vendors/base/vendors.bundle.css");
    $minCSS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/demo/demo11/base/style.bundle.css");
    $minCSS->add(__DIR__ . "/../../../shared/assets/fontawesome/css/all.min.css");
    $minCSS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/css/custom.css");


    //theme CSS
    /*$cssDir = scandir(__DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/css");
    foreach ($cssDir as $css) {
        $cssFile = __DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/css/{$css}";
        if (is_file($cssFile) && pathinfo($cssFile)['extension'] == "css") {
            $minCSS->add($cssFile);
        }
    }*/


    //Minify CSS
    $minCSS->minify(__DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/style.css");


    /**
     * JS
     */
    $minJS = new MatthiasMullie\Minify\JS();
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/js/webfonts.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/js/webfont_load.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/vendors/base/vendors.bundle.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/demo/demo11/base/scripts.bundle.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/app/js/dashboard.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/demo/demo11/custom/components/base/toastr.js");
    $minJS->add(__DIR__ . "/../../../shared/assets/js/jquery.mask.min.js");

    //theme CSS
    /*$jsDir = scandir(__DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/js");
    foreach ($jsDir as $js) {
        $jsFile = __DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/js/{$js}";
        if (is_file($jsFile) && pathinfo($jsFile)['extension'] == "js") {
            $minJS->add($jsFile);
        }
    }*/

    //Minify JS
    $minJS->minify(__DIR__ . "/../../../themes/" . CONF_VIEW_PANEL . "/assets/scripts.js");
}