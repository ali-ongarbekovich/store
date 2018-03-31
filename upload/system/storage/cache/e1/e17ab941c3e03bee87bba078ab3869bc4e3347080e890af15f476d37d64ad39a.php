<?php

/* bt_laparis/template/extension/module/boss_newmegamenu.twig */
class __TwigTemplate_80c5b9ce28727b389e999de4621064718f41dfb989bb7980a48a13be36129233 extends Twig_Template
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
        echo "<div id=\"bt-menu-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"bt-mega-menu\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <nav class=\"mega-menu\">
        <ul class=\"nav nav-pills\">
          ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            echo " 
          ";
            // line 7
            if ($this->getAttribute($context["menu"], "status", array(), "array")) {
                echo " 
          <li ";
                // line 8
                if (( !twig_test_empty($this->getAttribute($context["menu"], "menurow", array(), "array")) && ($this->env->getExtension('bt')->_Count($this->getAttribute($context["menu"], "menurow", array(), "array")) > 0))) {
                    echo " ";
                    echo "class=\"parent\"";
                    echo " ";
                }
                echo ">
            ";
                // line 9
                if (( !twig_test_empty($this->getAttribute($context["menu"], "menurow", array(), "array")) && ($this->env->getExtension('bt')->_Count($this->getAttribute($context["menu"], "menurow", array(), "array")) > 0))) {
                    echo " ";
                    echo "<span class=\"plus visible-xs\"></span>";
                    echo " ";
                }
                echo " 
            <a href=\"";
                // line 10
                echo $this->getAttribute($context["menu"], "url", array(), "array");
                echo "\">
            ";
                // line 11
                if ($this->getAttribute($context["menu"], "icon_class_status", array(), "array")) {
                    echo " ";
                    echo (("<span class=\"" . $this->getAttribute($context["menu"], "icon_class", array(), "array")) . "\"></span>");
                    echo " ";
                } else {
                    echo " ";
                    if ($this->getAttribute($context["menu"], "thumb", array(), "array")) {
                        echo " 
            <span><img alt=\"";
                        // line 12
                        echo $this->getAttribute($context["menu"], "title", array(), "array");
                        echo "\" src=\"";
                        echo $this->getAttribute($context["menu"], "thumb", array(), "array");
                        echo "\"/></span>
            ";
                    }
                    // line 13
                    echo " ";
                }
                // line 14
                echo "            <span class=\"menu-title\">";
                echo $this->getAttribute($context["menu"], "title", array(), "array");
                echo "</span>
            ";
                // line 15
                if ( !twig_test_empty($this->getAttribute($context["menu"], "label_color", array(), "array"))) {
                    echo " 
            <span class=\"label label-success\"style=\"background-color:#";
                    // line 16
                    echo $this->getAttribute($context["menu"], "label_color", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["menu"], "label", array(), "array");
                    echo "</span>
            ";
                }
                // line 17
                echo " 
            ";
                // line 18
                if (( !twig_test_empty($this->getAttribute($context["menu"], "menurow", array(), "array")) && ($this->env->getExtension('bt')->_Count($this->getAttribute($context["menu"], "menurow", array(), "array")) > 0))) {
                    echo " ";
                    echo "<i class=\"fa fa-angle-down\"></i>";
                    echo " ";
                }
                echo " 
            </a>
            ";
                // line 20
                if ( !twig_test_empty($this->getAttribute($context["menu"], "menurow", array(), "array"))) {
                    echo " 
            <div class=\"dropdown drop-grid-";
                    // line 21
                    echo (isset($context["menu_column"]) ? $context["menu_column"] : null);
                    echo "-";
                    echo ((($this->getAttribute($context["menu"], "num_column", array(), "array") > (isset($context["menu_column"]) ? $context["menu_column"] : null))) ? ((isset($context["menu_column"]) ? $context["menu_column"] : null)) : ($this->getAttribute($context["menu"], "num_column", array(), "array")));
                    echo "\" style=\"";
                    echo (("max-width:" . (isset($context["menu_width"]) ? $context["menu_width"] : null)) . "px;");
                    echo "\">
              ";
                    // line 22
                    $context["menurow"] = $this->getAttribute($context["menu"], "menurow", array(), "array");
                    echo " 
              ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["menurow"]) ? $context["menurow"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                        echo " 
              ";
                        // line 24
                        if ($this->getAttribute($context["row"], "status", array(), "array")) {
                            echo " 
              <div class=\"menu-row row-col-";
                            // line 25
                            echo ((($this->getAttribute($context["menu"], "num_column", array(), "array") > (isset($context["menu_column"]) ? $context["menu_column"] : null))) ? ((isset($context["menu_column"]) ? $context["menu_column"] : null)) : ($this->getAttribute($context["menu"], "num_column", array(), "array")));
                            echo "\" ";
                            if ( !twig_test_empty($this->getAttribute($context["row"], "bg_color", array(), "array"))) {
                                echo "style=\"background-color:#";
                                echo $this->getAttribute($context["row"], "bg_color", array(), "array");
                                echo "\" ";
                            }
                            echo ">
                ";
                            // line 26
                            if (($this->getAttribute($context["menu"], "num_column", array(), "array") > (isset($context["menu_column"]) ? $context["menu_column"] : null))) {
                                echo " 
                ";
                                // line 27
                                $context["numrow"] = (isset($context["menu_column"]) ? $context["menu_column"] : null);
                                echo " 
                ";
                            } else {
                                // line 28
                                echo " 
                ";
                                // line 29
                                $context["numrow"] = $this->getAttribute($context["menu"], "num_column", array(), "array");
                                echo " 
                ";
                            }
                            // line 30
                            echo " 
                ";
                            // line 31
                            if ( !twig_test_empty($this->getAttribute($context["row"], "columns", array(), "array"))) {
                                echo " 
                ";
                                // line 32
                                if ($this->getAttribute($context["row"], "bg_image", array(), "array")) {
                                    echo " 
                <img alt=\"bg image\" src=\"";
                                    // line 33
                                    echo $this->getAttribute($context["row"], "bg_image", array(), "array");
                                    echo "\" class=\"row-bg-image bt-menu-bg\">
                ";
                                }
                                // line 34
                                echo " 
                ";
                                // line 35
                                $context["menucolumn"] = $this->getAttribute($context["row"], "columns", array(), "array");
                                echo " 
                ";
                                // line 36
                                $context["i"] = 1;
                                // line 37
                                echo "                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((isset($context["menucolumn"]) ? $context["menucolumn"] : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                                    echo " 
                ";
                                    // line 38
                                    if ($this->getAttribute($context["column"], "status", array(), "array")) {
                                        // line 39
                                        echo "                <div class=\"menu-column row-grid-";
                                        echo ((($this->getAttribute($context["column"], "num_column", array(), "array") > (isset($context["numrow"]) ? $context["numrow"] : null))) ? ((isset($context["numrow"]) ? $context["numrow"] : null)) : ($this->getAttribute($context["column"], "num_column", array(), "array")));
                                        echo "\">
                  ";
                                        // line 40
                                        if (($this->getAttribute($context["column"], "type", array(), "array") == "information")) {
                                            echo " 
                  <!-- information -->
                  <ul class=\"column information\">
                    ";
                                            // line 43
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "coldata", array(), "array"));
                                            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                                                echo " 
                    <li class=\"col-grid-";
                                                // line 44
                                                echo ((($this->getAttribute($context["column"], "num_column", array(), "array") > (isset($context["numrow"]) ? $context["numrow"] : null))) ? ((isset($context["numrow"]) ? $context["numrow"] : null)) : ($this->getAttribute($context["column"], "num_column", array(), "array")));
                                                echo "\"><a href=\"";
                                                echo $this->getAttribute($context["information"], "href", array(), "array");
                                                echo "\">";
                                                echo $this->getAttribute($context["information"], "title", array(), "array");
                                                echo "</a></li>
                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 45
                                            echo " 
                  </ul>
                  ";
                                        }
                                        // line 47
                                        echo " 
                  ";
                                        // line 48
                                        if (($this->getAttribute($context["column"], "type", array(), "array") == "html")) {
                                            echo " 
                  <!-- html-->
                  <div class=\"staticblock\">";
                                            // line 50
                                            echo $this->getAttribute($context["column"], "coldata", array(), "array");
                                            echo "</div>
                  ";
                                        }
                                        // line 51
                                        echo " 
                  ";
                                        // line 52
                                        if (($this->getAttribute($context["column"], "type", array(), "array") == "category")) {
                                            echo " 
                  <!-- category -->
                  
                  ";
                                            // line 55
                                            if ($this->getAttribute($context["column"], "parent", array(), "array")) {
                                                echo " 
                  <a href=\"";
                                                // line 56
                                                echo $this->getAttribute($this->getAttribute($context["column"], "parent", array(), "array"), "href", array(), "array");
                                                echo "\" class=\"parent\"> ";
                                                echo $this->getAttribute($this->getAttribute($context["column"], "parent", array(), "array"), "name", array(), "array");
                                                echo " </a>
                  ";
                                            }
                                            // line 57
                                            echo " 
                  <ul class=\"column category\">
                    ";
                                            // line 59
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "coldata", array(), "array"));
                                            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                                                echo " 
                    <li class=\"col-grid-";
                                                // line 60
                                                echo $this->getAttribute($context["column"], "num_column", array(), "array");
                                                echo " ";
                                                if (($this->env->getExtension('bt')->_Count($this->getAttribute($context["category"], "children", array(), "array")) > 0)) {
                                                    echo " ";
                                                    echo "sub_category";
                                                    echo " ";
                                                }
                                                echo "\"> <a href=\"";
                                                echo $this->getAttribute($context["category"], "href", array(), "array");
                                                echo "\"> ";
                                                echo $this->getAttribute($context["category"], "name", array(), "array");
                                                echo " 
                      ";
                                                // line 61
                                                if (($this->env->getExtension('bt')->_Count($this->getAttribute($context["category"], "children", array(), "array")) > 0)) {
                                                    echo " 
                      <i class=\"fa fa-caret-right pull-right\"></i>
                      ";
                                                }
                                                // line 63
                                                echo " 
                      </a>
                      ";
                                                // line 65
                                                if (($this->env->getExtension('bt')->_Count($this->getAttribute($context["category"], "children", array(), "array")) > 0)) {
                                                    echo " 
                      <div class=\"sub_menu\">
                        <ul>
                          ";
                                                    // line 68
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array(), "array"));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                                                        echo " 
                          ";
                                                        // line 69
                                                        if (($this->env->getExtension('bt')->_Count($this->getAttribute($context["cat"], "children", array(), "array")) > 0)) {
                                                            echo " 
                          <li class=\"sub_category\"><a href=\"";
                                                            // line 70
                                                            echo $this->getAttribute($context["cat"], "href", array(), "array");
                                                            echo "\">'.\$cat['name'].'<i class=\"fa fa-angle-right\"></i></a>
                            showSubmenu(cat) 
                          </li>
                          ";
                                                        } else {
                                                            // line 73
                                                            echo " 
                          <li ><a href=\"";
                                                            // line 74
                                                            echo $this->getAttribute($context["cat"], "href", array(), "array");
                                                            echo "\">";
                                                            echo $this->getAttribute($context["cat"], "name", array(), "array");
                                                            echo "</a></li>
                          ";
                                                        }
                                                        // line 75
                                                        echo " 
                          ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 76
                                                    echo " 
                        </ul>
                      </div>
                      ";
                                                }
                                                // line 79
                                                echo " 
                    </li>
                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 81
                                            echo " 
                  </ul>
                  ";
                                        }
                                        // line 83
                                        echo " 
                  ";
                                        // line 84
                                        if (($this->getAttribute($context["column"], "type", array(), "array") == "product")) {
                                            echo " 
                  <ul class=\"column product\">
                    <!-- product -->
                    ";
                                            // line 87
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "coldata", array(), "array"));
                                            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                                echo " 
                    <li class=\"col-grid-";
                                                // line 88
                                                echo $this->getAttribute($context["column"], "num_column", array(), "array");
                                                echo "\"> <!--style=\"width: ";
                                                echo $this->getAttribute($context["product"], "li_width", array(), "array");
                                                echo "px;\"-->
                      <div class=\"image\">
                        ";
                                                // line 90
                                                if ($this->getAttribute($context["product"], "thumb", array(), "array")) {
                                                    echo " 
                        <a href=\"";
                                                    // line 91
                                                    echo $this->getAttribute($context["product"], "href", array(), "array");
                                                    echo "\"><img src=\"";
                                                    echo $this->getAttribute($context["product"], "thumb", array(), "array");
                                                    echo "\" alt=\"";
                                                    echo $this->getAttribute($context["product"], "name", array(), "array");
                                                    echo "\"/></a><br/>
                        ";
                                                }
                                                // line 92
                                                echo " 
                      </div>
                      <div class=\"name\"><a href=\"";
                                                // line 94
                                                echo $this->getAttribute($context["product"], "href", array(), "array");
                                                echo "\">";
                                                echo $this->getAttribute($context["product"], "name", array(), "array");
                                                echo "</a><br />
                      </div>
                      <div class=\"price\">
                        ";
                                                // line 97
                                                if ( !$this->getAttribute($context["product"], "special", array(), "array")) {
                                                    echo " 
                        ";
                                                    // line 98
                                                    echo $this->getAttribute($context["product"], "price", array(), "array");
                                                    echo " 
                        ";
                                                } else {
                                                    // line 99
                                                    echo " 
                        <span class=\"price-old\">";
                                                    // line 100
                                                    echo $this->getAttribute($context["product"], "price", array(), "array");
                                                    echo "</span> <span class=\"price-new\">";
                                                    echo $this->getAttribute($context["product"], "special", array(), "array");
                                                    echo "</span>
                        ";
                                                }
                                                // line 101
                                                echo " 
                      </div>
                    </li>
                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 104
                                            echo " 
                  </ul>
                  ";
                                        }
                                        // line 106
                                        echo " 
                  ";
                                        // line 107
                                        if (($this->getAttribute($context["column"], "type", array(), "array") == "manufacturer")) {
                                            echo " 
                  <!-- manufacturer -->
                  <ul class=\"column manufacturer\">
                    ";
                                            // line 110
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "coldata", array(), "array"));
                                            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                                echo " 
                    <li class=\"col-grid-";
                                                // line 111
                                                echo ((($this->getAttribute($context["column"], "num_column", array(), "array") > (isset($context["numrow"]) ? $context["numrow"] : null))) ? ((isset($context["numrow"]) ? $context["numrow"] : null)) : ($this->getAttribute($context["column"], "num_column", array(), "array")));
                                                echo "\"><!--style=\"width: ";
                                                echo $this->getAttribute($context["manufacturer"], "li_width", array(), "array");
                                                echo "px;\"--> 
                      <a href=\"";
                                                // line 112
                                                echo $this->getAttribute($context["manufacturer"], "href", array(), "array");
                                                echo "\"><img src=\"";
                                                echo $this->getAttribute($context["manufacturer"], "image", array(), "array");
                                                echo "\" alt=\"";
                                                echo $this->getAttribute($context["manufacturer"], "name", array(), "array");
                                                echo "\"/></a><br/>
                      <a href=\"";
                                                // line 113
                                                echo $this->getAttribute($context["manufacturer"], "href", array(), "array");
                                                echo "\">
                      ";
                                                // line 114
                                                if ($this->getAttribute($context["manufacturer"], "show_name", array(), "array")) {
                                                    echo " 
                      <span class=\"name\">";
                                                    // line 115
                                                    echo $this->getAttribute($context["manufacturer"], "name", array(), "array");
                                                    echo "</span>
                      ";
                                                }
                                                // line 116
                                                echo " 
                      </a></li>
                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 118
                                            echo " 
                  </ul>
                  ";
                                        }
                                        // line 120
                                        echo " 
                </div>
                ";
                                    }
                                    // line 122
                                    echo " ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 123
                                echo "                ";
                                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                            }
                            echo " 
              </div>
              ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo " 
            </div>
            ";
                }
                // line 127
                echo " 
          </li>
          ";
            }
            // line 129
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "        </ul>
      </nav>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/extension/module/boss_newmegamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 130,  521 => 129,  516 => 127,  511 => 125,  499 => 123,  493 => 122,  488 => 120,  483 => 118,  475 => 116,  470 => 115,  466 => 114,  462 => 113,  454 => 112,  448 => 111,  442 => 110,  436 => 107,  433 => 106,  428 => 104,  419 => 101,  412 => 100,  409 => 99,  404 => 98,  400 => 97,  392 => 94,  388 => 92,  379 => 91,  375 => 90,  368 => 88,  362 => 87,  356 => 84,  353 => 83,  348 => 81,  340 => 79,  334 => 76,  327 => 75,  320 => 74,  317 => 73,  310 => 70,  306 => 69,  300 => 68,  294 => 65,  290 => 63,  284 => 61,  270 => 60,  264 => 59,  260 => 57,  253 => 56,  249 => 55,  243 => 52,  240 => 51,  235 => 50,  230 => 48,  227 => 47,  222 => 45,  210 => 44,  204 => 43,  198 => 40,  193 => 39,  191 => 38,  184 => 37,  182 => 36,  178 => 35,  175 => 34,  170 => 33,  166 => 32,  162 => 31,  159 => 30,  154 => 29,  151 => 28,  146 => 27,  142 => 26,  132 => 25,  128 => 24,  122 => 23,  118 => 22,  110 => 21,  106 => 20,  97 => 18,  94 => 17,  87 => 16,  83 => 15,  78 => 14,  75 => 13,  68 => 12,  58 => 11,  54 => 10,  46 => 9,  38 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* <div id="bt-menu-{{ module }}" class="bt-mega-menu">*/
/*   <div class="container-fluid">*/
/*     <div class="row">*/
/*       <nav class="mega-menu">*/
/*         <ul class="nav nav-pills">*/
/*           {% for menu in menus %} */
/*           {% if (menu['status']) %} */
/*           <li {% if ((menu['menurow'] is not empty) and count(menu['menurow']) > 0) %} {{ 'class="parent"' }} {% endif %}>*/
/*             {% if ((menu['menurow'] is not empty) and count(menu['menurow']) > 0) %} {{ '<span class="plus visible-xs"></span>' }} {% endif %} */
/*             <a href="{{ menu['url'] }}">*/
/*             {% if (menu['icon_class_status']) %} {{ '<span class="'~menu['icon_class']~'"></span>' }} {% else %} {% if (menu['thumb']) %} */
/*             <span><img alt="{{ menu['title'] }}" src="{{ menu['thumb'] }}"/></span>*/
/*             {% endif %} {% endif %}*/
/*             <span class="menu-title">{{ menu['title'] }}</span>*/
/*             {% if (menu['label_color'] is not empty) %} */
/*             <span class="label label-success"style="background-color:#{{ menu['label_color'] }}">{{ menu['label'] }}</span>*/
/*             {% endif %} */
/*             {% if ((menu['menurow'] is not empty) and count(menu['menurow']) > 0) %} {{ '<i class="fa fa-angle-down"></i>' }} {% endif %} */
/*             </a>*/
/*             {% if (menu['menurow'] is not empty) %} */
/*             <div class="dropdown drop-grid-{{ menu_column }}-{{ menu['num_column']>menu_column?menu_column:menu['num_column'] }}" style="{{ 'max-width:'~menu_width~'px;' }}">*/
/*               {% set menurow = menu['menurow'] %} */
/*               {% for row in menurow %} */
/*               {% if (row['status']) %} */
/*               <div class="menu-row row-col-{{ menu['num_column']>menu_column?menu_column:menu['num_column'] }}" {% if (row['bg_color'] is not empty) %}style="background-color:#{{ row['bg_color'] }}" {% endif %}>*/
/*                 {% if (menu['num_column']>menu_column) %} */
/*                 {% set numrow = menu_column %} */
/*                 {% else %} */
/*                 {% set numrow = menu['num_column'] %} */
/*                 {% endif %} */
/*                 {% if (row['columns'] is not empty) %} */
/*                 {% if (row['bg_image']) %} */
/*                 <img alt="bg image" src="{{ row['bg_image'] }}" class="row-bg-image bt-menu-bg">*/
/*                 {% endif %} */
/*                 {% set menucolumn = row['columns'] %} */
/*                 {% set i = 1 %}*/
/*                 {% for column in menucolumn %} */
/*                 {% if (column['status']) %}*/
/*                 <div class="menu-column row-grid-{{ column['num_column']>numrow?numrow:column['num_column'] }}">*/
/*                   {% if (column['type'] == 'information') %} */
/*                   <!-- information -->*/
/*                   <ul class="column information">*/
/*                     {% for information in column['coldata'] %} */
/*                     <li class="col-grid-{{ column['num_column']>numrow?numrow:column['num_column'] }}"><a href="{{ information['href'] }}">{{ information['title'] }}</a></li>*/
/*                     {% endfor %} */
/*                   </ul>*/
/*                   {% endif %} */
/*                   {% if (column['type'] == 'html') %} */
/*                   <!-- html-->*/
/*                   <div class="staticblock">{{ column['coldata'] }}</div>*/
/*                   {% endif %} */
/*                   {% if (column['type'] == 'category') %} */
/*                   <!-- category -->*/
/*                   */
/*                   {% if (column['parent']) %} */
/*                   <a href="{{ column['parent']['href'] }}" class="parent"> {{ column['parent']['name'] }} </a>*/
/*                   {% endif %} */
/*                   <ul class="column category">*/
/*                     {% for category in column['coldata'] %} */
/*                     <li class="col-grid-{{ column['num_column'] }} {% if (count(category['children']) > 0) %} {{'sub_category' }} {% endif %}"> <a href="{{ category['href'] }}"> {{ category['name'] }} */
/*                       {% if (count(category['children']) > 0) %} */
/*                       <i class="fa fa-caret-right pull-right"></i>*/
/*                       {% endif %} */
/*                       </a>*/
/*                       {% if (count(category['children']) > 0) %} */
/*                       <div class="sub_menu">*/
/*                         <ul>*/
/*                           {% for cat in category['children'] %} */
/*                           {% if (count(cat['children']) > 0) %} */
/*                           <li class="sub_category"><a href="{{ cat['href'] }}">'.$cat['name'].'<i class="fa fa-angle-right"></i></a>*/
/*                             showSubmenu(cat) */
/*                           </li>*/
/*                           {% else %} */
/*                           <li ><a href="{{ cat['href'] }}">{{ cat['name'] }}</a></li>*/
/*                           {% endif %} */
/*                           {% endfor %} */
/*                         </ul>*/
/*                       </div>*/
/*                       {% endif %} */
/*                     </li>*/
/*                     {% endfor %} */
/*                   </ul>*/
/*                   {% endif %} */
/*                   {% if (column['type'] == 'product') %} */
/*                   <ul class="column product">*/
/*                     <!-- product -->*/
/*                     {% for product in column['coldata'] %} */
/*                     <li class="col-grid-{{ column['num_column'] }}"> <!--style="width: {{ product['li_width'] }}px;"-->*/
/*                       <div class="image">*/
/*                         {% if (product['thumb']) %} */
/*                         <a href="{{ product['href'] }}"><img src="{{ product['thumb'] }}" alt="{{ product['name'] }}"/></a><br/>*/
/*                         {% endif %} */
/*                       </div>*/
/*                       <div class="name"><a href="{{ product['href'] }}">{{ product['name'] }}</a><br />*/
/*                       </div>*/
/*                       <div class="price">*/
/*                         {% if (not product['special']) %} */
/*                         {{ product['price'] }} */
/*                         {% else %} */
/*                         <span class="price-old">{{ product['price'] }}</span> <span class="price-new">{{ product['special'] }}</span>*/
/*                         {% endif %} */
/*                       </div>*/
/*                     </li>*/
/*                     {% endfor %} */
/*                   </ul>*/
/*                   {% endif %} */
/*                   {% if (column['type'] == 'manufacturer') %} */
/*                   <!-- manufacturer -->*/
/*                   <ul class="column manufacturer">*/
/*                     {% for manufacturer in column['coldata'] %} */
/*                     <li class="col-grid-{{ column['num_column']>numrow?numrow:column['num_column'] }}"><!--style="width: {{ manufacturer['li_width'] }}px;"--> */
/*                       <a href="{{ manufacturer['href'] }}"><img src="{{ manufacturer['image'] }}" alt="{{ manufacturer['name'] }}"/></a><br/>*/
/*                       <a href="{{ manufacturer['href'] }}">*/
/*                       {% if (manufacturer['show_name']) %} */
/*                       <span class="name">{{ manufacturer['name'] }}</span>*/
/*                       {% endif %} */
/*                       </a></li>*/
/*                     {% endfor %} */
/*                   </ul>*/
/*                   {% endif %} */
/*                 </div>*/
/*                 {% endif %} {% endfor %}*/
/*                 {% set i = i + 1 %}{% endif %} */
/*               </div>*/
/*               {% endif %}{% endfor %} */
/*             </div>*/
/*             {% endif %} */
/*           </li>*/
/*           {% endif %} {% endfor %}*/
/*         </ul>*/
/*       </nav>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
