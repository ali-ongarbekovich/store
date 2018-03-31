<?php

/* bt_laparis/template/extension/module/boss_revolutionslider.twig */
class __TwigTemplate_980638d572002d8a90fc913dc136dfd1349950ecdd96380a7ff77e5843d82b5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"header_slider\">
\t ";
        // line 2
        $context["config"] = "undefined";
        echo " 
\t<div ";
        // line 3
        echo ((($this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "slider_type", array(), "array") == "custom")) ? ("class=\"boss_slider\"") : (""));
        echo ">
\t<div class=\"tp-banner-container\">
\t\t<div class=\"tp-banner tp-banner";
        // line 5
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" >
\t\t\t<ul>\t<!-- SLIDE  -->
\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            echo " 
\t\t\t\t";
            // line 8
            if ($this->getAttribute($context["slide"], "status", array(), "array")) {
                echo " 
\t\t\t\t";
                // line 9
                $context["slideset"] = $this->getAttribute($context["slide"], "slideset", array(), "array");
                // line 10
                echo "\t\t\t\t<li ";
                if (($this->getAttribute((isset($context["slideset"]) ? $context["slideset"] : null), "enablelink", array(), "array") == 1)) {
                    echo " data-link=\"";
                    echo $this->getAttribute((isset($context["slideset"]) ? $context["slideset"] : null), "url", array(), "array");
                    echo "\" data-target=\"";
                    echo $this->getAttribute((isset($context["slideset"]) ? $context["slideset"] : null), "target", array(), "array");
                    echo "\" ";
                }
                echo " data-transition=\"";
                echo (($this->getAttribute((isset($context["slideset"]) ? $context["slideset"] : null), "transitions", array(), "array", true, true)) ? ($this->getAttribute((isset($context["slideset"]) ? $context["slideset"] : null), "transitions", array(), "array")) : ("fade"));
                echo "\" data-slotamount=\"";
                echo (($this->getAttribute((isset($context["slideset"]) ? $context["slideset"] : null), "slotamount", array(), "array", true, true)) ? ($this->getAttribute((isset($context["slideset"]) ? $context["slideset"] : null), "slotamount", array(), "array")) : ("7"));
                echo "\" data-masterspeed=\"";
                echo (($this->getAttribute((isset($context["slideset"]) ? $context["slideset"] : null), "masterspeed", array(), "array", true, true)) ? ($this->getAttribute((isset($context["slideset"]) ? $context["slideset"] : null), "masterspeed", array(), "array")) : ("500"));
                echo "\"  data-saveperformance=\"on\" data-thumb=\"image/";
                echo $this->getAttribute($this->getAttribute($context["slide"], "slideset", array(), "array"), "background", array(), "array");
                echo "\">
\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t<img src=\"catalog/view/theme/";
                // line 12
                echo (isset($context["config_teamplate"]) ? $context["config_teamplate"] : null);
                echo "/image/dummy.png\"  alt=\"slidebg1\" data-lazyload=\"image/";
                echo $this->getAttribute($this->getAttribute($context["slide"], "slideset", array(), "array"), "background", array(), "array");
                echo "\" data-bgposition=\"left center\" data-kenburns=\"";
                echo (($this->getAttribute((isset($context["slideset"]) ? $context["slideset"] : null), "kenburns", array(), "array", true, true)) ? ($this->getAttribute((isset($context["slideset"]) ? $context["slideset"] : null), "kenburns", array(), "array")) : ("off"));
                echo "\" data-duration=\"14000\" data-ease=\"Linear.easeNone\" data-bgpositionend=\"right center\" />
\t\t\t\t";
                // line 13
                $context["i"] = 1;
                echo " 
\t\t\t\t";
                // line 14
                if (($this->getAttribute($context["slide"], "captions", array(), "array", true, true) &&  !twig_test_empty($this->getAttribute($context["slide"], "captions", array(), "array")))) {
                    echo " ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["slide"], "captions", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["caption"]) {
                        echo " 
\t\t\t\t<!-- LAYER NR. ";
                        // line 15
                        echo (isset($context["i"]) ? $context["i"] : null);
                        echo " -->
\t\t\t\t<div class=\"tp-caption ";
                        // line 16
                        echo (($this->getAttribute($context["caption"], "class_css", array(), "array", true, true)) ? ($this->getAttribute($context["caption"], "class_css", array(), "array")) : (""));
                        echo " ";
                        echo (($this->getAttribute($context["caption"], "incom_animation", array(), "array", true, true)) ? ($this->getAttribute($context["caption"], "incom_animation", array(), "array")) : (""));
                        echo " ";
                        echo (($this->getAttribute($context["caption"], "outgo_animation", array(), "array", true, true)) ? ($this->getAttribute($context["caption"], "outgo_animation", array(), "array")) : (""));
                        echo " rs-parallaxlevel-0\"
\t\t\t\t\t data-x=\"";
                        // line 17
                        echo (($this->getAttribute($context["caption"], "datax", array(), "array", true, true)) ? ($this->getAttribute($context["caption"], "datax", array(), "array")) : ("100"));
                        echo "\"
\t\t\t\t\t data-y=\"";
                        // line 18
                        echo (($this->getAttribute($context["caption"], "datay", array(), "array", true, true)) ? ($this->getAttribute($context["caption"], "datay", array(), "array")) : ("100"));
                        echo "\"
\t\t\t\t\t data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\"
\t\t\t\t\t data-speed=\"";
                        // line 20
                        echo (($this->getAttribute($context["caption"], "dataspeed", array(), "array", true, true)) ? ($this->getAttribute($context["caption"], "dataspeed", array(), "array")) : ("700"));
                        echo "\"
\t\t\t\t\t data-start=\"";
                        // line 21
                        echo (($this->getAttribute($context["caption"], "datastart", array(), "array", true, true)) ? ($this->getAttribute($context["caption"], "datastart", array(), "array")) : ("1500"));
                        echo "\"
\t\t\t\t\t data-end=\"";
                        // line 22
                        echo (($this->getAttribute($context["caption"], "dataend", array(), "array", true, true)) ? ($this->getAttribute($context["caption"], "dataend", array(), "array")) : (""));
                        echo "\"
\t\t\t\t\t data-endspeed=\"";
                        // line 23
                        echo (($this->getAttribute($context["caption"], "dataafterspeed", array(), "array", true, true)) ? ($this->getAttribute($context["caption"], "dataafterspeed", array(), "array")) : (""));
                        echo "\"
\t\t\t\t\t data-easing=\"";
                        // line 24
                        echo (($this->getAttribute($context["caption"], "easing", array(), "array", true, true)) ? ($this->getAttribute($context["caption"], "easing", array(), "array")) : (""));
                        echo "\"
\t\t\t\t\t data-endeasing=\"";
                        // line 25
                        echo (($this->getAttribute($context["caption"], "endeasing", array(), "array", true, true)) ? ($this->getAttribute($context["caption"], "endeasing", array(), "array")) : (""));
                        echo "\"
\t\t\t\t\t data-elementdelay=\"0.1\"
\t\t\t\t\t data-endelementdelay=\"0.1\"
\t\t\t\t\t style=\"z-index: 2;\">";
                        // line 28
                        if (($this->getAttribute($context["caption"], "type_caption", array(), "array", true, true) && ($this->getAttribute($context["caption"], "type_caption", array(), "array") == "image"))) {
                            echo "<img src=\"catalog/view/theme/";
                            echo (isset($context["config_teamplate"]) ? $context["config_teamplate"] : null);
                            echo "/image/dummy.png\" alt=\"\" data-lazyload=\"image/";
                            echo $this->getAttribute($context["caption"], "image_caption", array(), "array");
                            echo "\" />";
                        } elseif (($this->getAttribute($context["caption"], "type_caption", array(), "array", true, true) && ($this->getAttribute($context["caption"], "type_caption", array(), "array") == "video"))) {
                            // line 29
                            echo "\t\t\t\t\t";
                            if (($this->getAttribute($context["caption"], "type_capvideo", array(), "array") == "youtube")) {
                                echo " 
\t\t\t\t\t<iframe width=\"";
                                // line 30
                                echo $this->getAttribute($context["caption"], "video_width", array(), "array");
                                echo "\" height=\"";
                                echo $this->getAttribute($context["caption"], "video_height", array(), "array");
                                echo "\" src=\"//www.youtube.com/embed/";
                                echo $this->getAttribute($context["caption"], "video_id", array(), "array");
                                echo "?rel=0&showinfo=0\" frameborder=\"0\"></iframe>
\t\t\t\t\t";
                            } elseif (($this->getAttribute(                            // line 31
$context["caption"], "type_capvideo", array(), "array") == "vimeo")) {
                                echo " 
\t\t\t\t\t<iframe width=\"";
                                // line 32
                                echo $this->getAttribute($context["caption"], "video_width", array(), "array");
                                echo "\" height=\"";
                                echo $this->getAttribute($context["caption"], "video_height", array(), "array");
                                echo "\" src=\"http://player.vimeo.com/video/";
                                echo $this->getAttribute($context["caption"], "video_id", array(), "array");
                                echo "?title=0&byline=0&portrait=0;api=1\" frameborder=\"0\"></iframe>
\t\t\t\t\t";
                            } else {
                                // line 33
                                echo " 
\t\t\t\t\t<iframe width=\"";
                                // line 34
                                echo $this->getAttribute($context["caption"], "video_width", array(), "array");
                                echo "\" height=\"";
                                echo $this->getAttribute($context["caption"], "video_height", array(), "array");
                                echo "\" src=\"";
                                echo $this->getAttribute($context["caption"], "video_id", array(), "array");
                                echo "\" frameborder=\"0\"></iframe>
\t\t\t\t\t";
                            }
                            // line 35
                            echo " 
\t\t\t\t\t";
                        } else {
                            // line 36
                            echo " 
\t\t\t\t\t";
                            // line 37
                            echo $this->env->getExtension('bt')->_htmlEntityDecode((($this->getAttribute($this->getAttribute($context["caption"], "text_caption", array(), "array", false, true), (isset($context["config_language"]) ? $context["config_language"] : null), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($context["caption"], "text_caption", array(), "array"), (isset($context["config_language"]) ? $context["config_language"] : null), array(), "array")) : ("")), twig_constant("ENT_QUOTES"), "UTF-8");
                            echo "
\t\t\t\t\t";
                        }
                        // line 38
                        echo " 
\t\t\t\t</div>
\t\t\t\t";
                        // line 40
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caption'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " ";
                }
                echo " 
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 42
            echo " 
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo " 
\t\t\t</ul>
\t\t</div>
\t</div>
</div>
</div>
<script type=\"text/javascript\"><!--
jQuery(document).ready(function() {
\tjQuery('.tp-banner";
        // line 51
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').show().revolution({
\t\tdottedOverlay:\"none\",
\t\tdelay:";
        // line 53
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "delay", array(), "array");
        echo ",
\t\tstartWithSlide:";
        // line 54
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "startWithSlide", array(), "array");
        echo ",
\t\tstartwidth:";
        // line 55
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "slider_width", array(), "array");
        echo ",
\t\tstartheight:";
        // line 56
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "slider_height", array(), "array");
        echo ",
\t\thideThumbs:";
        // line 57
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "timehidethumbnail", array(), "array");
        echo ",
\t\thideTimerBar:\"";
        // line 58
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "timeline", array(), "array");
        echo "\",

\t\tthumbWidth:";
        // line 60
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "thumbnailwidth", array(), "array");
        echo ",
\t\tthumbHeight:";
        // line 61
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "thumbnailheight", array(), "array");
        echo ",
\t\tthumbAmount:";
        // line 62
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "thumbamount", array(), "array");
        echo ",

\t\tnavigationType:\"";
        // line 64
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "navigationtype", array(), "array");
        echo "\",
\t\tnavigationArrows:\"";
        // line 65
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "navigationarrow", array(), "array");
        echo "\",
\t\tnavigationStyle:\"";
        // line 66
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "navigationstyle", array(), "array");
        echo "\",

\t\ttouchenabled:\"";
        // line 68
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "touchenabled", array(), "array");
        echo "\",
\t\tonHoverStop:\"";
        // line 69
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "onhoverstop", array(), "array");
        echo "\",

\t\tswipe_velocity: 0.7,
\t\tswipe_min_touches: 1,
\t\tswipe_max_touches: 1,
\t\tdrag_block_vertical: false,

\t\tparallax:\"mouse\",
\t\tparallaxBgFreeze:\"on\",
\t\tparallaxLevels:[7,4,3,2,5,4,3,2,1,0],

\t\tkeyboardNavigation:\"off\",

\t\tnavigationHAlign:\"";
        // line 82
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "navigationhalign", array(), "array");
        echo "\",
\t\tnavigationVAlign:\"";
        // line 83
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "navigationvalign", array(), "array");
        echo "\",
\t\tnavigationHOffset:";
        // line 84
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "navigationhoffset", array(), "array");
        echo ",
\t\tnavigationVOffset:";
        // line 85
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "navigationvoffset", array(), "array");
        echo ",

\t\tsoloArrowLeftHalign:\"";
        // line 87
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "soloarrowlefthalign", array(), "array");
        echo "\",
\t\tsoloArrowLeftValign:\"";
        // line 88
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "soloarrowleftvalign", array(), "array");
        echo "\",
\t\tsoloArrowLeftHOffset:";
        // line 89
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "soloarrowlefthoffset", array(), "array");
        echo ",
\t\tsoloArrowLeftVOffset:";
        // line 90
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "soloarrowleftvoffset", array(), "array");
        echo ",

\t\tsoloArrowRightHalign:\"";
        // line 92
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "soloarrowrighthalign", array(), "array");
        echo "\",
\t\tsoloArrowRightValign:\"";
        // line 93
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "soloarrowrightvalign", array(), "array");
        echo "\",
\t\tsoloArrowRightHOffset:";
        // line 94
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "soloarrowrighthoffset", array(), "array");
        echo ",
\t\tsoloArrowRightVOffset:";
        // line 95
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "soloarrowrightvoffset", array(), "array");
        echo ",

\t\tshadow:";
        // line 97
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "shadow", array(), "array");
        echo ",
\t\tfullWidth:\"on\",
\t\tfullScreen:\"off\",

\t\tspinner:\"spinner4\",

\t\tstopLoop:\"";
        // line 103
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "stopslider", array(), "array");
        echo "\",
\t\tstopAfterLoops:";
        // line 104
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "stopafterloops", array(), "array");
        echo ",
\t\tstopAtSlide:";
        // line 105
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "stopatslide", array(), "array");
        echo ",

\t\tshuffle:\"off\",

\t\tautoHeight:\"off\",
\t\tforceFullWidth:\"off\",



\t\thideThumbsOnMobile:\"off\",
\t\thideNavDelayOnMobile:1500,
\t\thideBulletsOnMobile:\"off\",
\t\thideArrowsOnMobile:\"off\",
\t\thideThumbsUnderResolution:0,

\t\thideSliderAtLimit:";
        // line 120
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "hideslideratlimit", array(), "array");
        echo ",
\t\thideCaptionAtLimit:";
        // line 121
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "hidecapptionatlimit", array(), "array");
        echo ",
\t\thideAllCaptionAtLilmit:";
        // line 122
        echo $this->getAttribute((isset($context["slidersetting"]) ? $context["slidersetting"] : null), "hideallcapptionatlimit", array(), "array");
        echo ",
\t\tvideoJsPath:\"rs-plugin/videojs/\",
\t\tfullScreenOffsetContainer: \"\"
\t});
});\t//ready

//--></script>";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/extension/module/boss_revolutionslider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 122,  393 => 121,  389 => 120,  371 => 105,  367 => 104,  363 => 103,  354 => 97,  349 => 95,  345 => 94,  341 => 93,  337 => 92,  332 => 90,  328 => 89,  324 => 88,  320 => 87,  315 => 85,  311 => 84,  307 => 83,  303 => 82,  287 => 69,  283 => 68,  278 => 66,  274 => 65,  270 => 64,  265 => 62,  261 => 61,  257 => 60,  252 => 58,  248 => 57,  244 => 56,  240 => 55,  236 => 54,  232 => 53,  227 => 51,  217 => 43,  210 => 42,  197 => 40,  193 => 38,  188 => 37,  185 => 36,  181 => 35,  172 => 34,  169 => 33,  160 => 32,  156 => 31,  148 => 30,  143 => 29,  135 => 28,  129 => 25,  125 => 24,  121 => 23,  117 => 22,  113 => 21,  109 => 20,  104 => 18,  100 => 17,  92 => 16,  88 => 15,  80 => 14,  76 => 13,  68 => 12,  48 => 10,  46 => 9,  42 => 8,  36 => 7,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="header_slider">*/
/* 	 {% set config = 'undefined' %} */
/* 	<div {{ slidersetting['slider_type'] == 'custom'?'class="boss_slider"':'' }}>*/
/* 	<div class="tp-banner-container">*/
/* 		<div class="tp-banner tp-banner{{ module }}" >*/
/* 			<ul>	<!-- SLIDE  -->*/
/* 				{% for slide in slides %} */
/* 				{% if (slide['status']) %} */
/* 				{% set slideset = slide['slideset']%}*/
/* 				<li {% if (slideset['enablelink'] == 1) %} data-link="{{ slideset['url'] }}" data-target="{{ slideset['target'] }}" {% endif %} data-transition="{{ slideset['transitions'] is defined ? slideset['transitions'] : 'fade' }}" data-slotamount="{{ slideset['slotamount'] is defined ? slideset['slotamount'] : '7' }}" data-masterspeed="{{ slideset['masterspeed'] is defined ? slideset['masterspeed'] : '500' }}"  data-saveperformance="on" data-thumb="image/{{ slide['slideset']['background'] }}">*/
/* 				<!-- MAIN IMAGE -->*/
/* 				<img src="catalog/view/theme/{{ config_teamplate }}/image/dummy.png"  alt="slidebg1" data-lazyload="image/{{ slide['slideset']['background'] }}" data-bgposition="left center" data-kenburns="{{ slideset['kenburns'] is defined ? slideset['kenburns'] : 'off' }}" data-duration="14000" data-ease="Linear.easeNone" data-bgpositionend="right center" />*/
/* 				{% set i=1 %} */
/* 				{% if (slide['captions'] is defined and slide['captions'] is not empty) %} {% for caption in slide['captions'] %} */
/* 				<!-- LAYER NR. {{ i }} -->*/
/* 				<div class="tp-caption {{ caption['class_css'] is defined ? caption['class_css'] : '' }} {{ caption['incom_animation'] is defined?caption['incom_animation']:'' }} {{ caption['outgo_animation'] is defined?caption['outgo_animation']:'' }} rs-parallaxlevel-0"*/
/* 					 data-x="{{ caption['datax'] is defined ? caption['datax'] : '100' }}"*/
/* 					 data-y="{{ caption['datay'] is defined ? caption['datay'] : '100' }}"*/
/* 					 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"*/
/* 					 data-speed="{{ caption['dataspeed'] is defined ? caption['dataspeed'] : '700' }}"*/
/* 					 data-start="{{ caption['datastart'] is defined ? caption['datastart'] : '1500' }}"*/
/* 					 data-end="{{ caption['dataend'] is defined?caption['dataend']:'' }}"*/
/* 					 data-endspeed="{{ caption['dataafterspeed'] is defined?caption['dataafterspeed']:'' }}"*/
/* 					 data-easing="{{ caption['easing'] is defined?caption['easing']:'' }}"*/
/* 					 data-endeasing="{{ caption['endeasing'] is defined?caption['endeasing']:'' }}"*/
/* 					 data-elementdelay="0.1"*/
/* 					 data-endelementdelay="0.1"*/
/* 					 style="z-index: 2;">{% if (caption['type_caption'] is defined and (caption['type_caption'] == 'image')) %}<img src="catalog/view/theme/{{ config_teamplate }}/image/dummy.png" alt="" data-lazyload="image/{{ caption['image_caption'] }}" />{% elseif (caption['type_caption'] is defined and (caption['type_caption'] == 'video')) %}*/
/* 					{% if (caption['type_capvideo'] == 'youtube') %} */
/* 					<iframe width="{{ caption['video_width'] }}" height="{{ caption['video_height'] }}" src="//www.youtube.com/embed/{{ caption['video_id'] }}?rel=0&showinfo=0" frameborder="0"></iframe>*/
/* 					{% elseif (caption['type_capvideo'] == 'vimeo') %} */
/* 					<iframe width="{{ caption['video_width'] }}" height="{{ caption['video_height'] }}" src="http://player.vimeo.com/video/{{ caption['video_id'] }}?title=0&byline=0&portrait=0;api=1" frameborder="0"></iframe>*/
/* 					{% else %} */
/* 					<iframe width="{{ caption['video_width'] }}" height="{{ caption['video_height'] }}" src="{{ caption['video_id'] }}" frameborder="0"></iframe>*/
/* 					{% endif %} */
/* 					{% else %} */
/* 					{{ html_entity_decode(caption['text_caption'][config_language] is defined ? caption['text_caption'][config_language] : '',constant('ENT_QUOTES'), 'UTF-8') }}*/
/* 					{% endif %} */
/* 				</div>*/
/* 				{% set i = i + 1 %} {% endfor %} {% endif %} */
/* 				</li>*/
/* 				{% endif %} */
/* 				{% endfor %} */
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* jQuery(document).ready(function() {*/
/* 	jQuery('.tp-banner{{ module }}').show().revolution({*/
/* 		dottedOverlay:"none",*/
/* 		delay:{{ slidersetting['delay'] }},*/
/* 		startWithSlide:{{ slidersetting['startWithSlide'] }},*/
/* 		startwidth:{{ slidersetting['slider_width'] }},*/
/* 		startheight:{{ slidersetting['slider_height'] }},*/
/* 		hideThumbs:{{ slidersetting['timehidethumbnail'] }},*/
/* 		hideTimerBar:"{{ slidersetting['timeline'] }}",*/
/* */
/* 		thumbWidth:{{ slidersetting['thumbnailwidth'] }},*/
/* 		thumbHeight:{{ slidersetting['thumbnailheight'] }},*/
/* 		thumbAmount:{{ slidersetting['thumbamount'] }},*/
/* */
/* 		navigationType:"{{ slidersetting['navigationtype'] }}",*/
/* 		navigationArrows:"{{ slidersetting['navigationarrow'] }}",*/
/* 		navigationStyle:"{{ slidersetting['navigationstyle'] }}",*/
/* */
/* 		touchenabled:"{{ slidersetting['touchenabled'] }}",*/
/* 		onHoverStop:"{{ slidersetting['onhoverstop'] }}",*/
/* */
/* 		swipe_velocity: 0.7,*/
/* 		swipe_min_touches: 1,*/
/* 		swipe_max_touches: 1,*/
/* 		drag_block_vertical: false,*/
/* */
/* 		parallax:"mouse",*/
/* 		parallaxBgFreeze:"on",*/
/* 		parallaxLevels:[7,4,3,2,5,4,3,2,1,0],*/
/* */
/* 		keyboardNavigation:"off",*/
/* */
/* 		navigationHAlign:"{{ slidersetting['navigationhalign'] }}",*/
/* 		navigationVAlign:"{{ slidersetting['navigationvalign'] }}",*/
/* 		navigationHOffset:{{ slidersetting['navigationhoffset'] }},*/
/* 		navigationVOffset:{{ slidersetting['navigationvoffset'] }},*/
/* */
/* 		soloArrowLeftHalign:"{{ slidersetting['soloarrowlefthalign'] }}",*/
/* 		soloArrowLeftValign:"{{ slidersetting['soloarrowleftvalign'] }}",*/
/* 		soloArrowLeftHOffset:{{ slidersetting['soloarrowlefthoffset'] }},*/
/* 		soloArrowLeftVOffset:{{ slidersetting['soloarrowleftvoffset'] }},*/
/* */
/* 		soloArrowRightHalign:"{{ slidersetting['soloarrowrighthalign'] }}",*/
/* 		soloArrowRightValign:"{{ slidersetting['soloarrowrightvalign'] }}",*/
/* 		soloArrowRightHOffset:{{ slidersetting['soloarrowrighthoffset'] }},*/
/* 		soloArrowRightVOffset:{{ slidersetting['soloarrowrightvoffset'] }},*/
/* */
/* 		shadow:{{ slidersetting['shadow'] }},*/
/* 		fullWidth:"on",*/
/* 		fullScreen:"off",*/
/* */
/* 		spinner:"spinner4",*/
/* */
/* 		stopLoop:"{{ slidersetting['stopslider'] }}",*/
/* 		stopAfterLoops:{{ slidersetting['stopafterloops'] }},*/
/* 		stopAtSlide:{{ slidersetting['stopatslide'] }},*/
/* */
/* 		shuffle:"off",*/
/* */
/* 		autoHeight:"off",*/
/* 		forceFullWidth:"off",*/
/* */
/* */
/* */
/* 		hideThumbsOnMobile:"off",*/
/* 		hideNavDelayOnMobile:1500,*/
/* 		hideBulletsOnMobile:"off",*/
/* 		hideArrowsOnMobile:"off",*/
/* 		hideThumbsUnderResolution:0,*/
/* */
/* 		hideSliderAtLimit:{{ slidersetting['hideslideratlimit'] }},*/
/* 		hideCaptionAtLimit:{{ slidersetting['hidecapptionatlimit'] }},*/
/* 		hideAllCaptionAtLilmit:{{ slidersetting['hideallcapptionatlimit'] }},*/
/* 		videoJsPath:"rs-plugin/videojs/",*/
/* 		fullScreenOffsetContainer: ""*/
/* 	});*/
/* });	//ready*/
/* */
/* //--></script>*/
