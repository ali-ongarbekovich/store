<?php

/* bt_laparis/template/common/footer.twig */
class __TwigTemplate_ac32635235d6d408fc668cd569bde94f07496debe2d5b2d9a74f741cfb65489d extends Twig_Template
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
        $context["config"] = $this->getAttribute((isset($context["registry"]) ? $context["registry"] : null), "get", array(0 => "config"), "method");
        // line 2
        $context["url"] = $this->getAttribute((isset($context["registry"]) ? $context["registry"] : null), "get", array(0 => "url"), "method");
        // line 3
        $context["language_id"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_language_id"), "method");
        // line 4
        echo "
";
        // line 5
        $context["boss_manager"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "boss_manager"), "method");
        // line 6
        $context["boss_footer"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "boss_footer"), "method");
        // line 7
        $context["boss_social"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "boss_social"), "method");
        // line 8
        $context["boss_payment"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "boss_payment"), "method");
        // line 9
        $context["boss_custom"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "boss_custom"), "method");
        // line 10
        echo "
";
        // line 11
        $context["home"] = $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "link", array(0 => "common/home"), "method");
        // line 12
        if ($this->env->getExtension('bt')->_isFile((twig_constant("DIR_IMAGE") . $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_logo"), "method")))) {
            // line 13
            echo "  ";
            $context["logo"] = ("image/" . $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_logo"), "method"));
        } else {
            // line 15
            echo "  ";
            $context["logo"] = "";
        }
        // line 17
        $context["name"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_name"), "method");
        // line 18
        echo (isset($context["footer_top"]) ? $context["footer_top"] : null);
        echo "
<footer>
  <div class=\"content cover-bg\">
    <div class=\"container\">
      ";
        // line 22
        if ((isset($context["footer_first"]) ? $context["footer_first"] : null)) {
            // line 23
            echo "      ";
            echo (isset($context["footer_first"]) ? $context["footer_first"] : null);
            echo "
      ";
        }
        // line 25
        echo "      <div class=\"logo\"> <a href=\"";
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\"><img src=\"";
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" title=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" alt=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" class=\"img-responsive\" /></a> </div>
      ";
        // line 26
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "about_us", array(), "array", false, true), "status", array(), "array", true, true)) {
            // line 27
            echo "        <div class=\"footer-about\">
          <h3>";
            // line 28
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "about_us", array(), "array"), "title", array(), "array"), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "about_us", array(), "array"), "title", array(), "array"), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array")) : (""));
            echo "</h3>
          ";
            // line 29
            if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "about_us", array(), "array"), "image", array(), "array")) {
                // line 30
                echo "            <a href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "about_us", array(), "array"), "link", array(), "array");
                echo "\"><img src=\"image/";
                echo $this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "about_us", array(), "array"), "image", array(), "array");
                echo "\" alt=\"Everything\" title=\"Everything\"/></a>
          ";
            }
            // line 32
            echo "          ";
            echo $this->env->getExtension('bt')->_htmlEntityDecode($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "about_us", array(), "array"), "content", array(), "array"), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array"), twig_constant("ENT_QUOTES"), "UTF-8");
            echo "
        </div>
      ";
        }
        // line 35
        echo "      <div class=\"footer-link\">
        <ul class=\"list-inline\">
          ";
        // line 37
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "link", array(), "array", false, true), "contact_us", array(), "array", true, true)) {
            // line 38
            echo "          <li><a href=\"";
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "\">";
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</a></li>
          ";
        }
        // line 40
        echo "          ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "link", array(), "array", false, true), "return", array(), "array", true, true)) {
            // line 41
            echo "          <li><a href=\"";
            echo (isset($context["return"]) ? $context["return"] : null);
            echo "\">";
            echo (isset($context["text_return"]) ? $context["text_return"] : null);
            echo "</a></li>
          ";
        }
        // line 43
        echo "          ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "link", array(), "array", false, true), "account", array(), "array", true, true)) {
            // line 44
            echo "          <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
          ";
        }
        // line 46
        echo "          ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "link", array(), "array", false, true), "newsletter", array(), "array", true, true)) {
            // line 47
            echo "          <li><a href=\"";
            echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
            echo "\">";
            echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
            echo "</a></li>
          ";
        }
        // line 49
        echo "          ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "link", array(), "array", false, true), "site_map", array(), "array", true, true)) {
            // line 50
            echo "          <li><a href=\"";
            echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
            echo "\">";
            echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
            echo "</a></li>
          ";
        }
        // line 52
        echo "          ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "link", array(), "array", false, true), "brands", array(), "array", true, true)) {
            // line 53
            echo "          <li><a href=\"";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "\">";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</a></li>
          ";
        }
        // line 55
        echo "          ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "link", array(), "array", false, true), "gift_vouchers", array(), "array", true, true)) {
            // line 56
            echo "          <li><a href=\"";
            echo (isset($context["voucher"]) ? $context["voucher"] : null);
            echo "\">";
            echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
            echo "</a></li>
          ";
        }
        // line 58
        echo "          ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "link", array(), "array", false, true), "affiliates", array(), "array", true, true)) {
            // line 59
            echo "          <li><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
            echo "</a></li>
          ";
        }
        // line 61
        echo "          ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "link", array(), "array", false, true), "specials", array(), "array", true, true)) {
            // line 62
            echo "          <li><a href=\"";
            echo (isset($context["special"]) ? $context["special"] : null);
            echo "\">";
            echo (isset($context["text_special"]) ? $context["text_special"] : null);
            echo "</a></li>
          ";
        }
        // line 64
        echo "          ";
        if (((isset($context["informations"]) ? $context["informations"] : null) && $this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "link", array(), "array", false, true), "information", array(), "array", true, true))) {
            // line 65
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 66
                echo "            <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array(), "array");
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "          ";
        }
        // line 69
        echo "        </ul>
      </div>
      ";
        // line 71
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "social", array(), "array", false, true), "status", array(), "array", true, true)) {
            // line 72
            echo "        <div class=\"social\">
          <ul class=\"list-inline\">
            ";
            // line 74
            if ((isset($context["boss_social"]) ? $context["boss_social"] : null)) {
                // line 75
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["boss_social"]) ? $context["boss_social"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                    // line 76
                    echo "                <li>
                  <a class=\"social-link\" href=\"";
                    // line 77
                    echo $this->getAttribute($context["social"], "link", array(), "array");
                    echo "\" title=\"";
                    echo (($this->getAttribute($this->getAttribute($context["social"], "name", array(), "array", false, true), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($context["social"], "name", array(), "array"), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array")) : (""));
                    echo "\">
                    ";
                    // line 78
                    if ($this->getAttribute($context["social"], "image", array(), "array")) {
                        // line 79
                        echo "                      <img src=\"image/";
                        echo $this->getAttribute($context["social"], "image", array(), "array");
                        echo "\" alt=\"";
                        echo (($this->getAttribute($this->getAttribute($context["social"], "name", array(), "array", false, true), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($context["social"], "name", array(), "array"), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array")) : (""));
                        echo "\"/>
                    ";
                    }
                    // line 81
                    echo "                    ";
                    if ($this->getAttribute($context["social"], "icon", array(), "array")) {
                        // line 82
                        echo "                      <i class=\"fa ";
                        echo $this->getAttribute($context["social"], "icon", array(), "array");
                        echo "\"></i>
                    ";
                    }
                    // line 84
                    echo "                  </a>
                </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "            ";
            }
            // line 88
            echo "          </ul>
        </div>
      ";
        }
        // line 91
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "payment", array(), "array", false, true), "status", array(), "array", true, true)) {
            // line 92
            echo "        <div class=\"payment\">
          <ul class=\"list-inline\">
            ";
            // line 94
            if ((isset($context["boss_payment"]) ? $context["boss_payment"] : null)) {
                // line 95
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["boss_payment"]) ? $context["boss_payment"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                    // line 96
                    echo "                <li>
                  <a class=\"payment-link\" href=\"";
                    // line 97
                    echo $this->getAttribute($context["payment"], "link", array(), "array");
                    echo "\" title=\"";
                    echo (($this->getAttribute($this->getAttribute($context["payment"], "name", array(), "array", false, true), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($context["payment"], "name", array(), "array"), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array")) : (""));
                    echo "\">
                    ";
                    // line 98
                    if ($this->getAttribute($context["payment"], "image", array(), "array")) {
                        // line 99
                        echo "                      <img src=\"image/";
                        echo $this->getAttribute($context["payment"], "image", array(), "array");
                        echo "\" alt=\"";
                        echo (($this->getAttribute($this->getAttribute($context["payment"], "name", array(), "array", false, true), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($context["payment"], "name", array(), "array"), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array")) : (""));
                        echo "\"/>
                    ";
                    }
                    // line 101
                    echo "                    ";
                    if ($this->getAttribute($context["payment"], "icon", array(), "array")) {
                        // line 102
                        echo "                      <i class=\"fa ";
                        echo $this->getAttribute($context["payment"], "icon", array(), "array");
                        echo "\"></i>
                    ";
                    }
                    // line 104
                    echo "                  </a>
                </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "            ";
            }
            // line 108
            echo "          </ul>
        </div>
      ";
        }
        // line 111
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "embed", array(), "array", false, true), "status", array(), "array", true, true)) {
            // line 112
            echo "        <div class=\"footer-embed\">
          <h3>";
            // line 113
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "embed", array(), "array", false, true), "title", array(), "array", false, true), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "embed", array(), "array"), "title", array(), "array"), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array")) : (""));
            echo "</h3>
          <div>";
            // line 114
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "embed", array(), "array", false, true), "content", array(), "array", false, true), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array", true, true)) ? ($this->env->getExtension('bt')->_htmlEntityDecode($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "embed", array(), "array"), "content", array(), "array"), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array"))) : (""));
            echo "</div>
        </div>
      ";
        }
        // line 117
        echo "    </div>
  </div>
  ";
        // line 119
        echo (isset($context["footer_second"]) ? $context["footer_second"] : null);
        echo "
  ";
        // line 120
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "powered", array(), "array", false, true), "status", array(), "array", true, true)) {
            // line 121
            echo "    <div class=\"powered text-center\"> ";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "powered", array(), "array", false, true), "content", array(), "array", false, true), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array", true, true)) ? ($this->env->getExtension('bt')->_htmlEntityDecode($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "powered", array(), "array"), "content", array(), "array"), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array"))) : ((isset($context["powered"]) ? $context["powered"] : null)));
            echo " </div>
  ";
        }
        // line 123
        echo "</footer>
";
        // line 124
        if ($this->getAttribute((isset($context["boss_manager"]) ? $context["boss_manager"] : null), "animation", array(), "array", true, true)) {
            // line 125
            echo "  <script type=\"text/javascript\">
    \$(function() {
      var wow = new WOW({animateClass: 'animated'});
      wow.init();
    });
  </script>
";
        }
        // line 132
        if ($this->getAttribute((isset($context["boss_manager"]) ? $context["boss_manager"] : null), "button_to_top", array(), "array", true, true)) {
            // line 133
            echo "  <div id=\"back-top\" class=\"back-top\" title=\"Back To Top\">
    <span></span>
  </div>
  <script type=\"text/javascript\">
    \$(function() {
      \$(window).scroll(function() {
        if (\$(this).scrollTop() > 600) {
          \$('#back-top').fadeIn();
        } else {
          \$('#back-top').fadeOut();
        }
      });
      \$(\"#back-top\").click(function(e) {
        e.preventDefault();
        \$('body,html').animate({
          scrollTop: 0
        }, 800, 'swing');
      });
    });
  </script>
";
        }
        // line 154
        echo "<script type=\"text/javascript\">
\$(function(){
\t\$('.product-thumb .button-group button:first-child').onresize(function(elm) {
\t\tif (elm.width() < 140) {
\t\t\t\$('span', elm).addClass('hidden');
\t\t} else {
\t\t\t\$('span', elm).removeClass('hidden');
\t\t}
\t}).trigger('onresize');
});
</script>
";
        // line 165
        if ( !twig_test_empty($this->getAttribute((isset($context["boss_custom"]) ? $context["boss_custom"] : null), "javascript", array(), "array"))) {
            // line 166
            echo "<script type=\"text/javascript\">
  ";
            // line 167
            echo $this->getAttribute((isset($context["boss_custom"]) ? $context["boss_custom"] : null), "javascript", array(), "array");
            echo "
</script>
";
        }
        // line 170
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->

</body></html>
";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 170,  439 => 167,  436 => 166,  434 => 165,  421 => 154,  398 => 133,  396 => 132,  387 => 125,  385 => 124,  382 => 123,  376 => 121,  374 => 120,  370 => 119,  366 => 117,  360 => 114,  356 => 113,  353 => 112,  350 => 111,  345 => 108,  342 => 107,  334 => 104,  328 => 102,  325 => 101,  317 => 99,  315 => 98,  309 => 97,  306 => 96,  301 => 95,  299 => 94,  295 => 92,  292 => 91,  287 => 88,  284 => 87,  276 => 84,  270 => 82,  267 => 81,  259 => 79,  257 => 78,  251 => 77,  248 => 76,  243 => 75,  241 => 74,  237 => 72,  235 => 71,  231 => 69,  228 => 68,  217 => 66,  212 => 65,  209 => 64,  201 => 62,  198 => 61,  190 => 59,  187 => 58,  179 => 56,  176 => 55,  168 => 53,  165 => 52,  157 => 50,  154 => 49,  146 => 47,  143 => 46,  135 => 44,  132 => 43,  124 => 41,  121 => 40,  113 => 38,  111 => 37,  107 => 35,  100 => 32,  92 => 30,  90 => 29,  86 => 28,  83 => 27,  81 => 26,  70 => 25,  64 => 23,  62 => 22,  55 => 18,  53 => 17,  49 => 15,  45 => 13,  43 => 12,  41 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set config = registry.get('config') %}*/
/* {% set url = registry.get('url') %}*/
/* {% set language_id = config.get('config_language_id') %}*/
/* */
/* {% set boss_manager = config.get('boss_manager') %}*/
/* {% set boss_footer = config.get('boss_footer') %}*/
/* {% set boss_social = config.get('boss_social') %}*/
/* {% set boss_payment = config.get('boss_payment') %}*/
/* {% set boss_custom = config.get('boss_custom') %}*/
/* */
/* {% set home = url.link('common/home') %}*/
/* {% if (is_file(constant('DIR_IMAGE') ~ config.get('config_logo'))) %}*/
/*   {% set logo = 'image/' ~ config.get('config_logo') %}*/
/* {% else %}*/
/*   {% set logo = '' %}*/
/* {% endif %}*/
/* {% set name = config.get('config_name') %}*/
/* {{ footer_top }}*/
/* <footer>*/
/*   <div class="content cover-bg">*/
/*     <div class="container">*/
/*       {% if (footer_first) %}*/
/*       {{ footer_first }}*/
/*       {% endif %}*/
/*       <div class="logo"> <a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a> </div>*/
/*       {% if (boss_footer['about_us']['status']is defined) %}*/
/*         <div class="footer-about">*/
/*           <h3>{{boss_footer['about_us']['title'][language_id] ? boss_footer['about_us']['title'][language_id] : '' }}</h3>*/
/*           {% if (boss_footer['about_us']['image']) %}*/
/*             <a href="{{ boss_footer['about_us']['link'] }}"><img src="image/{{ boss_footer['about_us']['image'] }}" alt="Everything" title="Everything"/></a>*/
/*           {% endif %}*/
/*           {{ html_entity_decode(boss_footer['about_us']['content'][language_id],constant('ENT_QUOTES'), 'UTF-8') }}*/
/*         </div>*/
/*       {% endif %}*/
/*       <div class="footer-link">*/
/*         <ul class="list-inline">*/
/*           {% if (boss_footer['link']['contact_us'] is defined ) %}*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           {% endif %}*/
/*           {% if (boss_footer['link']['return'] is defined ) %}*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           {% endif %}*/
/*           {% if (boss_footer['link']['account'] is defined ) %}*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           {% endif %}*/
/*           {% if (boss_footer['link']['newsletter'] is defined ) %}*/
/*           <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*           {% endif %}*/
/*           {% if (boss_footer['link']['site_map'] is defined ) %}*/
/*           <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*           {% endif %}*/
/*           {% if (boss_footer['link']['brands'] is defined ) %}*/
/*           <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           {% endif %}*/
/*           {% if (boss_footer['link']['gift_vouchers'] is defined ) %}*/
/*           <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           {% endif %}*/
/*           {% if (boss_footer['link']['affiliates'] is defined ) %}*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           {% endif %}*/
/*           {% if (boss_footer['link']['specials'] is defined ) %}*/
/*           <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*           {% endif %}*/
/*           {% if (informations and boss_footer['link']['information'] is defined ) %}*/
/*             {% for information in informations %}*/
/*             <li><a href="{{ information['href'] }}">{{ information['title'] }}</a></li>*/
/*             {% endfor %}*/
/*           {% endif %}*/
/*         </ul>*/
/*       </div>*/
/*       {% if (boss_footer['social']['status']is defined) %}*/
/*         <div class="social">*/
/*           <ul class="list-inline">*/
/*             {% if (boss_social) %}*/
/*               {% for social in boss_social %}*/
/*                 <li>*/
/*                   <a class="social-link" href="{{ social['link'] }}" title="{{ social['name'][language_id] is defined ? social['name'][language_id] : '' }}">*/
/*                     {% if (social['image']) %}*/
/*                       <img src="image/{{ social['image'] }}" alt="{{ social['name'][language_id] is defined ? social['name'][language_id] : '' }}"/>*/
/*                     {% endif %}*/
/*                     {% if (social['icon']) %}*/
/*                       <i class="fa {{ social['icon'] }}"></i>*/
/*                     {% endif %}*/
/*                   </a>*/
/*                 </li>*/
/*               {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if (boss_footer['payment']['status']is defined) %}*/
/*         <div class="payment">*/
/*           <ul class="list-inline">*/
/*             {% if (boss_payment) %}*/
/*               {% for payment in boss_payment %}*/
/*                 <li>*/
/*                   <a class="payment-link" href="{{ payment['link'] }}" title="{{ payment['name'][language_id] is defined ? payment['name'][language_id] : '' }}">*/
/*                     {% if (payment['image']) %}*/
/*                       <img src="image/{{ payment['image'] }}" alt="{{ payment['name'][language_id] is defined ? payment['name'][language_id] : '' }}"/>*/
/*                     {% endif %}*/
/*                     {% if (payment['icon']) %}*/
/*                       <i class="fa {{ payment['icon'] }}"></i>*/
/*                     {% endif %}*/
/*                   </a>*/
/*                 </li>*/
/*               {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if (boss_footer['embed']['status']is defined) %}*/
/*         <div class="footer-embed">*/
/*           <h3>{{ boss_footer['embed']['title'][language_id] is defined ? boss_footer['embed']['title'][language_id] : '' }}</h3>*/
/*           <div>{{ boss_footer['embed']['content'][language_id] is defined ? html_entity_decode(boss_footer['embed']['content'][language_id]) : '' }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/*   {{ footer_second }}*/
/*   {% if (boss_footer['powered']['status']is defined) %}*/
/*     <div class="powered text-center"> {{ (boss_footer['powered']['content'][language_id] is defined) ? html_entity_decode(boss_footer['powered']['content'][language_id]) : powered }} </div>*/
/*   {% endif %}*/
/* </footer>*/
/* {% if (boss_manager['animation']is defined) %}*/
/*   <script type="text/javascript">*/
/*     $(function() {*/
/*       var wow = new WOW({animateClass: 'animated'});*/
/*       wow.init();*/
/*     });*/
/*   </script>*/
/* {% endif %}*/
/* {% if (boss_manager['button_to_top']is defined) %}*/
/*   <div id="back-top" class="back-top" title="Back To Top">*/
/*     <span></span>*/
/*   </div>*/
/*   <script type="text/javascript">*/
/*     $(function() {*/
/*       $(window).scroll(function() {*/
/*         if ($(this).scrollTop() > 600) {*/
/*           $('#back-top').fadeIn();*/
/*         } else {*/
/*           $('#back-top').fadeOut();*/
/*         }*/
/*       });*/
/*       $("#back-top").click(function(e) {*/
/*         e.preventDefault();*/
/*         $('body,html').animate({*/
/*           scrollTop: 0*/
/*         }, 800, 'swing');*/
/*       });*/
/*     });*/
/*   </script>*/
/* {% endif %}*/
/* <script type="text/javascript">*/
/* $(function(){*/
/* 	$('.product-thumb .button-group button:first-child').onresize(function(elm) {*/
/* 		if (elm.width() < 140) {*/
/* 			$('span', elm).addClass('hidden');*/
/* 		} else {*/
/* 			$('span', elm).removeClass('hidden');*/
/* 		}*/
/* 	}).trigger('onresize');*/
/* });*/
/* </script>*/
/* {% if (boss_custom['javascript'] is not empty) %}*/
/* <script type="text/javascript">*/
/*   {{ boss_custom['javascript'] }}*/
/* </script>*/
/* {% endif %}*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* */
/* <!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->*/
/* */
/* </body></html>*/
/* */
