<?php

/* bt_laparis/template/common/header.twig */
class __TwigTemplate_67248562311c5b3d75d55d3a64cada83b35861f9a7e69749bc6a9eb55d7e7490 extends Twig_Template
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
        echo "<!DOCTYPE html><!--[if IE]><![endif]--><!--[if IE 8 ]>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]--><!--[if IE 9 ]>
<html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]--><!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
";
        // line 6
        $context["config"] = $this->getAttribute((isset($context["registry"]) ? $context["registry"] : null), "get", array(0 => "config"), "method");
        // line 7
        $context["request"] = $this->getAttribute((isset($context["registry"]) ? $context["registry"] : null), "get", array(0 => "request"), "method");
        // line 8
        echo "
";
        // line 9
        $context["template_directory"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => (("theme_" . $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_theme"), "method")) . "_directory")), "method");
        // line 10
        $context["language_id"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_language_id"), "method");
        // line 11
        echo "
";
        // line 12
        $context["boss_manager"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "boss_manager"), "method");
        // line 13
        $context["boss_header"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "boss_header"), "method");
        // line 14
        $context["boss_footer"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "boss_footer"), "method");
        // line 15
        $context["boss_custom"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "boss_custom"), "method");
        // line 16
        echo "
";
        // line 17
        $context["class"] = (($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(), "any", false, true), "route", array(), "array", true, true)) ? ($this->env->getExtension('bt')->_strReplace("/", "-", $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array()), "route", array(), "array"))) : ("common-home"));
        // line 18
        $context["release"] = twig_number_format_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "customizer_release"), "method"));
        // line 19
        echo "<head>
<meta charset=\"UTF-8\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 23
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 24
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\"/>
";
        // line 25
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 26
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\"/>
";
        }
        // line 28
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 29
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\"/>
";
        }
        // line 31
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\"/>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&subset=devanagari,latin-ext\" rel=\"stylesheet\">
<link href=\"//fonts.googleapis.com/css?family=Kaushan+Script&subset=latin-ext\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/";
        // line 36
        echo (isset($context["template_directory"]) ? $context["template_directory"] : null);
        echo "/stylesheet/linear-free-fonts.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/";
        // line 37
        echo (isset($context["template_directory"]) ? $context["template_directory"] : null);
        echo "/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 38
        if ($this->getAttribute((isset($context["boss_manager"]) ? $context["boss_manager"] : null), "animation", array(), "array", true, true)) {
            // line 39
            echo "<script src=\"catalog/view/javascript/bossthemes/wow/wow.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bossthemes/wow/animate.css\" rel=\"stylesheet\" type=\"text/css\"/>
";
        }
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 43
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array(), "array");
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array(), "array");
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array(), "array");
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        if ($this->getAttribute((isset($context["boss_manager"]) ? $context["boss_manager"] : null), "responsive", array(), "array", true, true)) {
            // line 46
            echo "<link href=\"catalog/view/theme/";
            echo (isset($context["template_directory"]) ? $context["template_directory"] : null);
            echo "/stylesheet/responsive.css\" rel=\"stylesheet\" type=\"text/css\"/>
";
        } else {
            // line 48
            echo "<link href=\"catalog/view/theme/";
            echo (isset($context["template_directory"]) ? $context["template_directory"] : null);
            echo "/stylesheet/non-responsive.css\" rel=\"stylesheet\" type=\"text/css\"/>
";
        }
        // line 50
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            // line 51
            echo "<link href=\"catalog/view/theme/";
            echo (isset($context["template_directory"]) ? $context["template_directory"] : null);
            echo "/stylesheet/stylesheet-rtl.css\" rel=\"stylesheet\" type=\"text/css\"/>
";
        }
        // line 53
        if ((isset($context["release"]) ? $context["release"] : null)) {
            // line 54
            echo "<link href=\"catalog/view/theme/";
            echo (isset($context["template_directory"]) ? $context["template_directory"] : null);
            echo "/stylesheet/customizer.css?r=";
            echo (isset($context["release"]) ? $context["release"] : null);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        }
        // line 56
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/bossthemes/jquery.jgrowl.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/bossthemes/bossthemes.js\" type=\"text/javascript\"></script>
";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 60
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array(), "array");
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array(), "array");
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 63
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "<script src=\"catalog/view/javascript/bossthemes/jquery.hc-sticky.min.js\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 68
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        if ( !twig_test_empty($this->getAttribute((isset($context["boss_custom"]) ? $context["boss_custom"] : null), "css", array(), "array"))) {
            // line 71
            echo "<style type=\"text/css\">
";
            // line 72
            echo $this->getAttribute((isset($context["boss_custom"]) ? $context["boss_custom"] : null), "css", array(), "array");
            echo "
</style>
";
        }
        // line 75
        echo "</head>
<body class=\"";
        // line 76
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
<div id=\"top\"> ";
        // line 77
        echo (isset($context["header_top"]) ? $context["header_top"] : null);
        echo "</div>
<div class=\"bt-left-sidebar\">
  <div class=\"bt-sticky\">
    <header>
      <div class=\"container-fluid\">
        <div class=\"row\">
          ";
        // line 83
        if ($this->getAttribute($this->getAttribute((isset($context["boss_header"]) ? $context["boss_header"] : null), "link", array(), "array", false, true), "search", array(), "array", true, true)) {
            // line 84
            echo "            ";
            echo (isset($context["search"]) ? $context["search"] : null);
            echo "
          ";
        }
        // line 86
        echo "          <div class=\"header-content\">
            <div id=\"logo\">
              ";
        // line 88
        if (((isset($context["logo"]) ? $context["logo"] : null) && $this->getAttribute($this->getAttribute((isset($context["boss_header"]) ? $context["boss_header"] : null), "link", array(), "array", false, true), "logo", array(), "array", true, true))) {
            // line 89
            echo "                <a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\"/></a>
              ";
        } else {
            // line 91
            echo "                <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
              ";
        }
        // line 93
        echo "            </div>
            <div class=\"menu-wrap hidden-xs\">
              ";
        // line 95
        if ($this->getAttribute((isset($context["boss_header"]) ? $context["boss_header"] : null), "mega_menu", array(), "array", true, true)) {
            // line 96
            echo "                <div class=\"container-fluid\">";
            echo (isset($context["header_menu"]) ? $context["header_menu"] : null);
            echo "</div>
              ";
        } else {
            // line 98
            echo "                ";
            if ((isset($context["categories"]) ? $context["categories"] : null)) {
                // line 99
                echo "                  <div class=\"container-fluid\">
                    <nav id=\"menu\" class=\"navbar\">
                      <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
                // line 101
                echo (isset($context["text_category"]) ? $context["text_category"] : null);
                echo "</span>
                        <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
                      </div>
                      <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                        <ul class=\"nav navbar-nav\">
                          ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 107
                    echo "                            ";
                    if ($this->getAttribute($context["category"], "children", array(), "array")) {
                        // line 108
                        echo "                              <li class=\"dropdown\"><a href=\"";
                        echo $this->getAttribute($context["category"], "href", array(), "array");
                        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo $this->getAttribute($context["category"], "name", array(), "array");
                        echo "</a>
                                <div class=\"dropdown-menu\">
                                  <div class=\"dropdown-inner\">
                                    ";
                        // line 111
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('bt')->_arrayChunk($this->getAttribute($context["category"], "children", array(), "array"), $this->env->getExtension('bt')->_Ceil(($this->env->getExtension('bt')->_Count($this->getAttribute($context["category"], "children", array(), "array")) / $this->getAttribute($context["category"], "column", array(), "array")))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 112
                            echo "                                      <ul class=\"list-unstyled\">
                                        ";
                            // line 113
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 114
                                echo "                                          <li><a href=\"";
                                echo $this->getAttribute($context["child"], "href", array(), "array");
                                echo "\">";
                                echo $this->getAttribute($context["child"], "name", array(), "array");
                                echo "</a></li>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 116
                            echo "                                      </ul>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 118
                        echo "                                  </div>
                                  <a href=\"";
                        // line 119
                        echo $this->getAttribute($context["category"], "href", array(), "array");
                        echo "\" class=\"see-all\">";
                        echo (isset($context["text_all"]) ? $context["text_all"] : null);
                        echo " ";
                        echo $this->getAttribute($context["category"], "name", array(), "array");
                        echo "</a>
                                </div>
                              </li>
                            ";
                    } else {
                        // line 123
                        echo "                              <li><a href=\"";
                        echo $this->getAttribute($context["category"], "href", array(), "array");
                        echo "\">";
                        echo $this->getAttribute($context["category"], "name", array(), "array");
                        echo "</a></li>
                            ";
                    }
                    // line 125
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "                        </ul>
                      </div>
                    </nav>
                  </div>
                ";
            }
            // line 131
            echo "              ";
        }
        // line 132
        echo "            </div>
            <div class=\"container-fluid\">
              <div class=\"row-link\">
                ";
        // line 135
        if ($this->getAttribute($this->getAttribute((isset($context["boss_header"]) ? $context["boss_header"] : null), "link", array(), "array", false, true), "currency", array(), "array", true, true)) {
            echo " ";
            echo (isset($context["language"]) ? $context["language"] : null);
        }
        // line 136
        echo "                ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_header"]) ? $context["boss_header"] : null), "link", array(), "array", false, true), "language", array(), "array", true, true)) {
            echo " ";
            echo (isset($context["currency"]) ? $context["currency"] : null);
        }
        // line 137
        echo "                ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_header"]) ? $context["boss_header"] : null), "link", array(), "array", false, true), "account", array(), "array", true, true)) {
            // line 138
            echo "                  <div class=\"account\">
                    <div class=\"dropdown\">
                      <a href=\"";
            // line 140
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\" title=\"";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"lnr lnr-user\"></i>
                        <!--<span class=\"hidden-xs hidden-sm hidden-md\">";
            // line 141
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</span><i class=\"fa fa-caret-down\"></i>-->
                      </a>
                      <ul class=\"dropdown-menu\">
                        ";
            // line 144
            if ((isset($context["logged"]) ? $context["logged"] : null)) {
                // line 145
                echo "                          <li><a href=\"";
                echo (isset($context["account"]) ? $context["account"] : null);
                echo "\">";
                echo (isset($context["text_account"]) ? $context["text_account"] : null);
                echo "</a></li>
                          <li><a href=\"";
                // line 146
                echo (isset($context["order"]) ? $context["order"] : null);
                echo "\">";
                echo (isset($context["text_order"]) ? $context["text_order"] : null);
                echo "</a></li>
                          <li><a href=\"";
                // line 147
                echo (isset($context["transaction"]) ? $context["transaction"] : null);
                echo "\">";
                echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
                echo "</a></li>
                          <li><a href=\"";
                // line 148
                echo (isset($context["download"]) ? $context["download"] : null);
                echo "\">";
                echo (isset($context["text_download"]) ? $context["text_download"] : null);
                echo "</a></li>
                          <li><a href=\"";
                // line 149
                echo (isset($context["logout"]) ? $context["logout"] : null);
                echo "\">";
                echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
                echo "</a></li>
                        ";
            } else {
                // line 151
                echo "                          <li><a href=\"";
                echo (isset($context["register"]) ? $context["register"] : null);
                echo "\">";
                echo (isset($context["text_register"]) ? $context["text_register"] : null);
                echo "</a></li>
                          <li><a href=\"";
                // line 152
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "\">";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "</a></li>
                        ";
            }
            // line 154
            echo "                      </ul>
                    </div>
                  </div>
                ";
        }
        // line 158
        echo "              </div>
              <div class=\"row-cart\">
                ";
        // line 160
        if ($this->getAttribute($this->getAttribute((isset($context["boss_header"]) ? $context["boss_header"] : null), "link", array(), "array", false, true), "mini_cart", array(), "array", true, true)) {
            // line 161
            echo "                  ";
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "
                ";
        }
        // line 163
        echo "              </div>
              <div id=\"top-links\" class=\"nav hidden-xs pull-right\">
                <ul class=\"list-inline\">
                  ";
        // line 166
        if ($this->getAttribute($this->getAttribute((isset($context["boss_header"]) ? $context["boss_header"] : null), "link", array(), "array", false, true), "phone", array(), "array", true, true)) {
            // line 167
            echo "                    <li><a href=\"";
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "\"><i class=\"fa fa-phone-square\" aria-hidden=\"true\"></i>
                        <span>";
            // line 168
            echo (isset($context["telephone"]) ? $context["telephone"] : null);
            echo "</span></a></li>
                  ";
        }
        // line 170
        echo "                  ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_header"]) ? $context["boss_header"] : null), "link", array(), "array", false, true), "wishlist", array(), "array", true, true)) {
            // line 171
            echo "                    <li><a href=\"";
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\" id=\"wishlist-total\" title=\"";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "\"><i class=\"lnr lnr-heart\"></i>
                        <span class=\"hidden-xs hidden-sm hidden-md\">";
            // line 172
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</span></a></li>
                  ";
        }
        // line 174
        echo "                  ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_header"]) ? $context["boss_header"] : null), "link", array(), "array", false, true), "shopping_cart", array(), "array", true, true)) {
            // line 175
            echo "                    <li><a href=\"";
            echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
            echo "\" title=\"";
            echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
            echo "\"><i class=\"lnr lnr-cart\"></i>
                        <span class=\"hidden-xs hidden-sm hidden-md\">";
            // line 176
            echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
            echo "</span></a> </li>
                  ";
        }
        // line 178
        echo "                  ";
        if ($this->getAttribute($this->getAttribute((isset($context["boss_header"]) ? $context["boss_header"] : null), "link", array(), "array", false, true), "checkout", array(), "array", true, true)) {
            // line 179
            echo "                    <li><a href=\"";
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\" title=\"";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "\"><i class=\"fa fa-share\"></i>
                        <span class=\"hidden-xs hidden-sm hidden-md\">";
            // line 180
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</span></a></li>
                  ";
        }
        // line 182
        echo "                </ul>
              </div>
            </div>
            ";
        // line 185
        if ($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "powered", array(), "array", false, true), "status", array(), "array", true, true)) {
            // line 186
            echo "              <div class=\"powered\"> ";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "powered", array(), "array", false, true), "content", array(), "array", false, true), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array", true, true)) ? ($this->env->getExtension('bt')->_htmlEntityDecode($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boss_footer"]) ? $context["boss_footer"] : null), "powered", array(), "array"), "content", array(), "array"), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array"))) : ((isset($context["powered"]) ? $context["powered"] : null)));
            echo " </div>
            ";
        }
        // line 188
        echo "          </div>
        </div>
      </div>
      ";
        // line 191
        if ($this->getAttribute((isset($context["boss_header"]) ? $context["boss_header"] : null), "mega_menu", array(), "array", true, true)) {
            // line 192
            echo "        <div class=\"navbar-header\" data-target=\".bt-mobile-menu\">
          <button type=\"button\" class=\"btn btn-navbar\"></button>
        </div>
      ";
        }
        // line 196
        echo "    </header>
  </div>
</div>
";
        // line 199
        if ($this->getAttribute((isset($context["boss_header"]) ? $context["boss_header"] : null), "mega_menu", array(), "array", true, true)) {
            // line 200
            echo "  <div class=\"bt-mobile-menu\">
    <div class=\"menu-mobile\"></div>
  </div>
  <script type=\"text/javascript\">
      var mega_menu = \$('.menu-wrap .bt-mega-menu');

      if (mega_menu.length) {
          var id = parseFloat(mega_menu.attr('id').replace(/\\D/g, ''));
          \$('.bt-mobile-menu').attr('id', 'bt-mobile-menu' + id).children('.menu-mobile').html(mega_menu.html());

          \$('.navbar-header').data('target', '#bt-mobile-menu' + id).btMobileMenu();
      }
  </script>
";
        }
        // line 214
        if ($this->getAttribute((isset($context["boss_manager"]) ? $context["boss_manager"] : null), "sticky_menu", array(), "array", true, true)) {
            // line 215
            echo "  <script type=\"text/javascript\">
      var menu_height = \$('header .mega-menu > ul > li').height();

      \$(window).scroll(function () {
          var height_header = (\$('#top').height() + \$('header').height());

          if (\$(window).scrollTop() > height_header && !\$('.menu-wrap').hasClass('menu-stick')) {
              \$('.menu-wrap').addClass('menu-stick');
          } else if (\$(window).scrollTop() <= height_header && \$('.menu-wrap').hasClass('menu-stick')) {
              \$('.menu-wrap').removeClass('menu-stick');
          }
      });
  </script>
";
        }
        // line 229
        if ($this->getAttribute((isset($context["boss_manager"]) ? $context["boss_manager"] : null), "loading", array(), "array", true, true)) {
            // line 230
            echo "  <div id=\"bt-loading\">
    <div class=\"bt-loading\">
      <div class=\"sk-fading-circle\">
        <div class=\"sk-circle1 sk-circle\"></div>
        <div class=\"sk-circle2 sk-circle\"></div>
        <div class=\"sk-circle3 sk-circle\"></div>
        <div class=\"sk-circle4 sk-circle\"></div>
        <div class=\"sk-circle5 sk-circle\"></div>
        <div class=\"sk-circle6 sk-circle\"></div>
        <div class=\"sk-circle7 sk-circle\"></div>
        <div class=\"sk-circle8 sk-circle\"></div>
        <div class=\"sk-circle9 sk-circle\"></div>
        <div class=\"sk-circle10 sk-circle\"></div>
        <div class=\"sk-circle11 sk-circle\"></div>
        <div class=\"sk-circle12 sk-circle\"></div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
      window.onload = function () {
          \$(\".bt-loading\").fadeOut(\"1500\", function () {
              \$('#bt-loading').css(\"display\", \"none\");
          });
      };
      //--></script>
";
        }
        // line 256
        echo "<script type=\"text/javascript\"><!--
    \$(function () {
        \$('.bt-sticky').hcSticky({
            top           : 0,
            stickTo       : '.bt-left-sidebar',
            followScroll  : true,
            offResolutions: -768
        });
    });
    //--></script>
";
        // line 266
        echo (isset($context["header_bottom"]) ? $context["header_bottom"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  663 => 266,  651 => 256,  623 => 230,  621 => 229,  605 => 215,  603 => 214,  587 => 200,  585 => 199,  580 => 196,  574 => 192,  572 => 191,  567 => 188,  561 => 186,  559 => 185,  554 => 182,  549 => 180,  542 => 179,  539 => 178,  534 => 176,  527 => 175,  524 => 174,  519 => 172,  512 => 171,  509 => 170,  504 => 168,  499 => 167,  497 => 166,  492 => 163,  486 => 161,  484 => 160,  480 => 158,  474 => 154,  467 => 152,  460 => 151,  453 => 149,  447 => 148,  441 => 147,  435 => 146,  428 => 145,  426 => 144,  420 => 141,  414 => 140,  410 => 138,  407 => 137,  401 => 136,  396 => 135,  391 => 132,  388 => 131,  381 => 126,  375 => 125,  367 => 123,  356 => 119,  353 => 118,  346 => 116,  335 => 114,  331 => 113,  328 => 112,  324 => 111,  315 => 108,  312 => 107,  308 => 106,  300 => 101,  296 => 99,  293 => 98,  287 => 96,  285 => 95,  281 => 93,  273 => 91,  261 => 89,  259 => 88,  255 => 86,  249 => 84,  247 => 83,  238 => 77,  234 => 76,  231 => 75,  225 => 72,  222 => 71,  220 => 70,  212 => 68,  208 => 67,  204 => 65,  195 => 63,  191 => 62,  180 => 60,  176 => 59,  171 => 56,  163 => 54,  161 => 53,  155 => 51,  153 => 50,  147 => 48,  141 => 46,  139 => 45,  126 => 43,  122 => 42,  117 => 39,  115 => 38,  111 => 37,  107 => 36,  100 => 31,  94 => 29,  92 => 28,  86 => 26,  84 => 25,  80 => 24,  76 => 23,  70 => 19,  68 => 18,  66 => 17,  63 => 16,  61 => 15,  59 => 14,  57 => 13,  55 => 12,  52 => 11,  50 => 10,  48 => 9,  45 => 8,  43 => 7,  41 => 6,  34 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html><!--[if IE]><![endif]--><!--[if IE 8 ]>*/
/* <html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]--><!--[if IE 9 ]>*/
/* <html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]--><!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* {% set config = registry.get('config') %}*/
/* {% set request = registry.get('request') %}*/
/* */
/* {% set template_directory = config.get('theme_' ~ config.get('config_theme') ~ '_directory') %}*/
/* {% set language_id = config.get('config_language_id') %}*/
/* */
/* {% set boss_manager = config.get('boss_manager') %}*/
/* {% set boss_header = config.get('boss_header') %}*/
/* {% set boss_footer = config.get('boss_footer') %}*/
/* {% set boss_custom = config.get('boss_custom') %}*/
/* */
/* {% set class = request.get['route'] is defined ? str_replace('/', '-', request.get['route']) : 'common-home' %}*/
/* {% set release = config.get('customizer_release')|number_format %}*/
/* <head>*/
/* <meta charset="UTF-8"/>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}"/>*/
/* {% if (description) %}*/
/* <meta name="description" content="{{ description }}"/>*/
/* {% endif %}*/
/* {% if (keywords) %}*/
/* <meta name="keywords" content="{{ keywords }}"/>*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>*/
/* <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&subset=devanagari,latin-ext" rel="stylesheet">*/
/* <link href="//fonts.googleapis.com/css?family=Kaushan+Script&subset=latin-ext" rel="stylesheet">*/
/* <link href="catalog/view/theme/{{ template_directory }}/stylesheet/linear-free-fonts.css" rel="stylesheet">*/
/* <link href="catalog/view/theme/{{ template_directory }}/stylesheet/stylesheet.css" rel="stylesheet">*/
/* {% if (boss_manager['animation'] is defined) %}*/
/* <script src="catalog/view/javascript/bossthemes/wow/wow.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bossthemes/wow/animate.css" rel="stylesheet" type="text/css"/>*/
/* {% endif %}*/
/* {% for style in styles %}*/
/* <link href="{{ style['href'] }}" type="text/css" rel="{{ style['rel'] }}" media="{{ style['media'] }}"/>*/
/* {% endfor %}*/
/* {% if (boss_manager['responsive'] is defined) %}*/
/* <link href="catalog/view/theme/{{ template_directory }}/stylesheet/responsive.css" rel="stylesheet" type="text/css"/>*/
/* {% else %}*/
/* <link href="catalog/view/theme/{{ template_directory }}/stylesheet/non-responsive.css" rel="stylesheet" type="text/css"/>*/
/* {% endif %}*/
/* {% if (direction == 'rtl') %}*/
/* <link href="catalog/view/theme/{{ template_directory }}/stylesheet/stylesheet-rtl.css" rel="stylesheet" type="text/css"/>*/
/* {% endif %}*/
/* {% if (release) %}*/
/* <link href="catalog/view/theme/{{ template_directory }}/stylesheet/customizer.css?r={{ release }}" rel="stylesheet" type="text/css" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/bossthemes/jquery.jgrowl.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/bossthemes/bossthemes.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link['href'] }}" rel="{{ link['rel'] }}"/>*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/bossthemes/jquery.hc-sticky.min.js"></script>*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* {% if (boss_custom['css'] is not empty) %}*/
/* <style type="text/css">*/
/* {{ boss_custom['css'] }}*/
/* </style>*/
/* {% endif %}*/
/* </head>*/
/* <body class="{{ class }}">*/
/* <div id="top"> {{ header_top }}</div>*/
/* <div class="bt-left-sidebar">*/
/*   <div class="bt-sticky">*/
/*     <header>*/
/*       <div class="container-fluid">*/
/*         <div class="row">*/
/*           {% if (boss_header['link']['search'] is defined ) %}*/
/*             {{ search }}*/
/*           {% endif %}*/
/*           <div class="header-content">*/
/*             <div id="logo">*/
/*               {% if (logo and boss_header['link']['logo'] is defined ) %}*/
/*                 <a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive"/></a>*/
/*               {% else %}*/
/*                 <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="menu-wrap hidden-xs">*/
/*               {% if (boss_header['mega_menu'] is defined ) %}*/
/*                 <div class="container-fluid">{{ header_menu }}</div>*/
/*               {% else %}*/
/*                 {% if (categories) %}*/
/*                   <div class="container-fluid">*/
/*                     <nav id="menu" class="navbar">*/
/*                       <div class="navbar-header"><span id="category" class="visible-xs">{{ text_category }}</span>*/
/*                         <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/*                       </div>*/
/*                       <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*                         <ul class="nav navbar-nav">*/
/*                           {% for category in categories %}*/
/*                             {% if (category['children']) %}*/
/*                               <li class="dropdown"><a href="{{ category['href'] }}" class="dropdown-toggle" data-toggle="dropdown">{{ category['name'] }}</a>*/
/*                                 <div class="dropdown-menu">*/
/*                                   <div class="dropdown-inner">*/
/*                                     {% for children in array_chunk(category['children'], ceil(count(category['children']) / category['column'])) %}*/
/*                                       <ul class="list-unstyled">*/
/*                                         {% for child in children %}*/
/*                                           <li><a href="{{ child['href'] }}">{{ child['name'] }}</a></li>*/
/*                                         {% endfor %}*/
/*                                       </ul>*/
/*                                     {% endfor %}*/
/*                                   </div>*/
/*                                   <a href="{{ category['href'] }}" class="see-all">{{ text_all }} {{ category['name'] }}</a>*/
/*                                 </div>*/
/*                               </li>*/
/*                             {% else %}*/
/*                               <li><a href="{{ category['href'] }}">{{ category['name'] }}</a></li>*/
/*                             {% endif %}*/
/*                           {% endfor %}*/
/*                         </ul>*/
/*                       </div>*/
/*                     </nav>*/
/*                   </div>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="container-fluid">*/
/*               <div class="row-link">*/
/*                 {% if (boss_header['link']['currency'] is defined ) %} {{ language }}{% endif %}*/
/*                 {% if (boss_header['link']['language'] is defined ) %} {{ currency }}{% endif %}*/
/*                 {% if (boss_header['link']['account'] is defined ) %}*/
/*                   <div class="account">*/
/*                     <div class="dropdown">*/
/*                       <a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i>*/
/*                         <!--<span class="hidden-xs hidden-sm hidden-md">{{ text_account }}</span><i class="fa fa-caret-down"></i>-->*/
/*                       </a>*/
/*                       <ul class="dropdown-menu">*/
/*                         {% if (logged) %}*/
/*                           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*                           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*                           <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*                           <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*                           <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*                         {% else %}*/
/*                           <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*                           <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*                         {% endif %}*/
/*                       </ul>*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="row-cart">*/
/*                 {% if (boss_header['link']['mini_cart'] is defined ) %}*/
/*                   {{ cart }}*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div id="top-links" class="nav hidden-xs pull-right">*/
/*                 <ul class="list-inline">*/
/*                   {% if (boss_header['link']['phone'] is defined ) %}*/
/*                     <li><a href="{{ contact }}"><i class="fa fa-phone-square" aria-hidden="true"></i>*/
/*                         <span>{{ telephone }}</span></a></li>*/
/*                   {% endif %}*/
/*                   {% if (boss_header['link']['wishlist'] is defined ) %}*/
/*                     <li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i class="lnr lnr-heart"></i>*/
/*                         <span class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span></a></li>*/
/*                   {% endif %}*/
/*                   {% if (boss_header['link']['shopping_cart'] is defined ) %}*/
/*                     <li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><i class="lnr lnr-cart"></i>*/
/*                         <span class="hidden-xs hidden-sm hidden-md">{{ text_shopping_cart }}</span></a> </li>*/
/*                   {% endif %}*/
/*                   {% if (boss_header['link']['checkout'] is defined ) %}*/
/*                     <li><a href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i>*/
/*                         <span class="hidden-xs hidden-sm hidden-md">{{ text_checkout }}</span></a></li>*/
/*                   {% endif %}*/
/*                 </ul>*/
/*               </div>*/
/*             </div>*/
/*             {% if (boss_footer['powered']['status']is defined) %}*/
/*               <div class="powered"> {{ (boss_footer['powered']['content'][language_id] is defined) ? html_entity_decode(boss_footer['powered']['content'][language_id]) : powered }} </div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% if (boss_header['mega_menu'] is defined ) %}*/
/*         <div class="navbar-header" data-target=".bt-mobile-menu">*/
/*           <button type="button" class="btn btn-navbar"></button>*/
/*         </div>*/
/*       {% endif %}*/
/*     </header>*/
/*   </div>*/
/* </div>*/
/* {% if (boss_header['mega_menu'] is defined ) %}*/
/*   <div class="bt-mobile-menu">*/
/*     <div class="menu-mobile"></div>*/
/*   </div>*/
/*   <script type="text/javascript">*/
/*       var mega_menu = $('.menu-wrap .bt-mega-menu');*/
/* */
/*       if (mega_menu.length) {*/
/*           var id = parseFloat(mega_menu.attr('id').replace(/\D/g, ''));*/
/*           $('.bt-mobile-menu').attr('id', 'bt-mobile-menu' + id).children('.menu-mobile').html(mega_menu.html());*/
/* */
/*           $('.navbar-header').data('target', '#bt-mobile-menu' + id).btMobileMenu();*/
/*       }*/
/*   </script>*/
/* {% endif %}*/
/* {% if (boss_manager['sticky_menu'] is defined ) %}*/
/*   <script type="text/javascript">*/
/*       var menu_height = $('header .mega-menu > ul > li').height();*/
/* */
/*       $(window).scroll(function () {*/
/*           var height_header = ($('#top').height() + $('header').height());*/
/* */
/*           if ($(window).scrollTop() > height_header && !$('.menu-wrap').hasClass('menu-stick')) {*/
/*               $('.menu-wrap').addClass('menu-stick');*/
/*           } else if ($(window).scrollTop() <= height_header && $('.menu-wrap').hasClass('menu-stick')) {*/
/*               $('.menu-wrap').removeClass('menu-stick');*/
/*           }*/
/*       });*/
/*   </script>*/
/* {% endif %}*/
/* {% if (boss_manager['loading'] is defined ) %}*/
/*   <div id="bt-loading">*/
/*     <div class="bt-loading">*/
/*       <div class="sk-fading-circle">*/
/*         <div class="sk-circle1 sk-circle"></div>*/
/*         <div class="sk-circle2 sk-circle"></div>*/
/*         <div class="sk-circle3 sk-circle"></div>*/
/*         <div class="sk-circle4 sk-circle"></div>*/
/*         <div class="sk-circle5 sk-circle"></div>*/
/*         <div class="sk-circle6 sk-circle"></div>*/
/*         <div class="sk-circle7 sk-circle"></div>*/
/*         <div class="sk-circle8 sk-circle"></div>*/
/*         <div class="sk-circle9 sk-circle"></div>*/
/*         <div class="sk-circle10 sk-circle"></div>*/
/*         <div class="sk-circle11 sk-circle"></div>*/
/*         <div class="sk-circle12 sk-circle"></div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/*       window.onload = function () {*/
/*           $(".bt-loading").fadeOut("1500", function () {*/
/*               $('#bt-loading').css("display", "none");*/
/*           });*/
/*       };*/
/*       //--></script>*/
/* {% endif %}*/
/* <script type="text/javascript"><!--*/
/*     $(function () {*/
/*         $('.bt-sticky').hcSticky({*/
/*             top           : 0,*/
/*             stickTo       : '.bt-left-sidebar',*/
/*             followScroll  : true,*/
/*             offResolutions: -768*/
/*         });*/
/*     });*/
/*     //--></script>*/
/* {{ header_bottom }}*/
/* */
