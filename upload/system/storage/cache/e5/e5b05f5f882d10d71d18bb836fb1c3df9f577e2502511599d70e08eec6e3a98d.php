<?php

/* bt_laparis/template/extension/module/boss_filterproduct.twig */
class __TwigTemplate_667685a9ca797e1a02e9c520327d9144d45187b0593e2d74890ee41b0515e80d extends Twig_Template
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
        echo "<!--module boss - fillter product-->
";
        // line 2
        if ( !twig_test_empty((isset($context["tabs"]) ? $context["tabs"] : null))) {
            // line 3
            echo "
<div id=\"filter-product-";
            // line 4
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" class=\"bt-filter-product box ";
            echo (((isset($context["sidebar"]) ? $context["sidebar"] : null)) ? ("sidebar style-2") : ("style-1"));
            echo " ";
            echo (((isset($context["scrolling_panel"]) ? $context["scrolling_panel"] : null)) ? ("slide") : ("non-slide"));
            echo "\">
  <div class=\"";
            // line 5
            echo (((isset($context["sidebar"]) ? $context["sidebar"] : null)) ? ("container-fluid") : ("container"));
            echo "\">
    <div class=\"";
            // line 6
            echo (((isset($context["sidebar"]) ? $context["sidebar"] : null)) ? ("row") : ("bt-row"));
            echo "\">
      <div id=\"boss_homefilter_tabs";
            // line 7
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" class=\"boss_homefilter_tabs\">
        ";
            // line 8
            if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
                // line 9
                echo "        <div class=\"box-heading title\">
          <h2>
            ";
                // line 11
                if ((isset($context["icon"]) ? $context["icon"] : null)) {
                    // line 12
                    echo "            <i class=\"fa ";
                    echo (isset($context["icon"]) ? $context["icon"] : null);
                    echo "\"></i>
            ";
                }
                // line 14
                echo "            ";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "</h2>
        </div>
        ";
            }
            // line 17
            echo "        <div class=\"clearfix\"></div>
        <div id=\"tabs_content_container";
            // line 18
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" class=\"box-content\">
          ";
            // line 19
            if ((isset($context["use_tab"]) ? $context["use_tab"] : null)) {
                // line 20
                echo "          <ul class=\"tabs-headings ";
                echo (((isset($context["scrolling_tab"]) ? $context["scrolling_tab"] : null)) ? ("owl-carousel-2 owl-theme-2 nav-middle nav-visible padding-nav") : (""));
                echo "\">
            ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
                foreach ($context['_seq'] as $context["index"] => $context["tab"]) {
                    // line 22
                    echo "            <li class=\"";
                    echo ((($context["index"] == 0)) ? ("active") : (""));
                    echo "\"> <a href=\"#filter-product-tab";
                    echo ($context["index"] . (isset($context["module"]) ? $context["module"] : null));
                    echo "\" title=\"tab\" data-toggle=\"tab\">
              ";
                    // line 23
                    if ( !twig_test_empty($this->getAttribute($context["tab"], "icon", array(), "array"))) {
                        // line 24
                        echo "              <img src=\"";
                        echo $this->getAttribute($context["tab"], "icon", array(), "array");
                        echo "\" title=\"";
                        echo $this->getAttribute($context["tab"], "title", array(), "array");
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["tab"], "title", array(), "array");
                        echo "\"/>
              ";
                    }
                    // line 26
                    echo "              ";
                    echo $this->getAttribute($context["tab"], "title", array(), "array");
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "          </ul>
          ";
            }
            // line 30
            echo "          <div class=\"tab-content\">
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
            foreach ($context['_seq'] as $context["index"] => $context["tab"]) {
                // line 32
                echo "            <div id=\"filter-product-tab";
                echo ($context["index"] . (isset($context["module"]) ? $context["module"] : null));
                echo "\" class=\"tab-pane fade ";
                echo ((($context["index"] == 0)) ? ("in active") : (""));
                echo "\">
              ";
                // line 33
                if ( !twig_test_empty($this->getAttribute($context["tab"], "products", array(), "array"))) {
                    // line 34
                    echo "              ";
                    if (((isset($context["product_large"]) ? $context["product_large"] : null) &&  !(isset($context["sidebar"]) ? $context["sidebar"] : null))) {
                        // line 35
                        echo "              <div class=\"row bt-row\">
                ";
                        // line 36
                        $context["product"] = $this->getAttribute($this->getAttribute($context["tab"], "products", array(), "array"), 0, array(), "array");
                        // line 37
                        echo "                <div class=\"col-sm-6\">
                  <div class=\"product-layout large-product ";
                        // line 38
                        echo (isset($context["class_css"]) ? $context["class_css"] : null);
                        echo "\" data-product=\"";
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id", array(), "array");
                        echo "\" data-sort=\"";
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "sort_order", array(), "array");
                        echo "\">
                    <div class=\"product-thumb\">
                      <div class=\"image\"><a href=\"";
                        // line 40
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "href", array(), "array");
                        echo "\" title=\"";
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array(), "array");
                        echo "\"><img src=\"";
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "thumb", array(), "array");
                        echo "\" alt=\"";
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array(), "array");
                        echo "\" class=\"img-responsive\" /></a>
                        <div class=\"button-group\">
                          <button type=\"button\" onclick=\"btadd.cart('";
                        // line 42
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id", array(), "array");
                        echo "', '";
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "minimum", array(), "array");
                        echo "');\"><i class=\"lnr lnr-cart\"></i> <span>";
                        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                        echo "</span></button>
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                        // line 43
                        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                        echo "\" onclick=\"btadd.wishlist('";
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id", array(), "array");
                        echo "');\"><i class=\"lnr lnr-heart\"></i></button>
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                        // line 44
                        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                        echo "\" onclick=\"btadd.compare('";
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id", array(), "array");
                        echo "');\"><i class=\"lnr lnr-sync\"></i></button>
                        </div>
                      </div>
                      <div class=\"caption\">
                        <h4 class=\"name\"><a href=\"";
                        // line 48
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "href", array(), "array");
                        echo "\" title=\"";
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array(), "array");
                        echo "\">";
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array(), "array");
                        echo "</a></h4>
                        ";
                        // line 49
                        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array(), "array")) {
                            // line 50
                            echo "                        <p class=\"price\">
                          ";
                            // line 51
                            if ( !$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array(), "array")) {
                                // line 52
                                echo "                          ";
                                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array(), "array");
                                echo "
                          ";
                            } else {
                                // line 54
                                echo "                          <span class=\"price-new\">";
                                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array(), "array");
                                echo "</span> <span class=\"price-old\">";
                                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array(), "array");
                                echo "</span>
                          ";
                            }
                            // line 56
                            echo "                        </p>
                        ";
                        }
                        // line 58
                        echo "                        ";
                        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "rating", array(), "array")) {
                            // line 59
                            echo "                        <div class=\"rating\">
                          ";
                            // line 60
                            $context["i"] = 1;
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 61
                                echo "                          ";
                                if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "rating", array(), "array") < $context["i"])) {
                                    // line 62
                                    echo "                          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                                } else {
                                    // line 64
                                    echo "                          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                                }
                                // line 66
                                echo "                          ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 67
                            echo "                        </div>
                        ";
                        }
                        // line 69
                        echo "                      </div>
                      ";
                        // line 70
                        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "special", array(), "array")) {
                            // line 71
                            echo "                      <div class=\"save-off\">";
                            echo (isset($context["text_save_off"]) ? $context["text_save_off"] : null);
                            echo "</div>
                      ";
                        }
                        // line 73
                        echo "                      <div class=\"sort-order\">";
                        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "sort_order", array(), "array");
                        echo "</div>
                    </div>
                  </div>
                  <ul class=\"addition-image\">
                    ";
                        // line 77
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "images", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 78
                            echo "                    <li class=\"image-additional text-center\"><a href=\"";
                            echo $this->getAttribute($context["image"], "popup", array(), "array");
                            echo "\" title=\"";
                            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array(), "array");
                            echo "\"> <img src=\"";
                            echo $this->getAttribute($context["image"], "thumb", array(), "array");
                            echo "\" title=\"";
                            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array(), "array");
                            echo "\" alt=\"";
                            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array(), "array");
                            echo "\" /></a></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 80
                        echo "                  </ul>
                </div>
                <div class=\"col-sm-6 list-product\">
                  <div class=\"row\">
                    ";
                        // line 84
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tab"], "products", array(), "array"));
                        foreach ($context['_seq'] as $context["index"] => $context["product"]) {
                            // line 85
                            echo "                    ";
                            if (($context["index"] != 0)) {
                                // line 86
                                echo "                    <div class=\"col-sm-4\">
                      <div class=\"product-thumb\">
                        <div class=\"image\"><a href=\"";
                                // line 88
                                echo $this->getAttribute($context["product"], "href", array(), "array");
                                echo "\"  title=\"";
                                echo $this->getAttribute($context["product"], "name", array(), "array");
                                echo "\" data-product=\"";
                                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                                echo "\" data-sort=\"";
                                echo $this->getAttribute($context["product"], "sort_order", array(), "array");
                                echo "\"><img src=\"";
                                echo $this->getAttribute($context["product"], "thumb", array(), "array");
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["product"], "name", array(), "array");
                                echo "\" class=\"img-responsive\" /></a></div>
                        <div class=\"caption\">
                          <h4 class=\"name\"><a href=\"";
                                // line 90
                                echo $this->getAttribute($context["product"], "href", array(), "array");
                                echo "\"  title=\"";
                                echo $this->getAttribute($context["product"], "name", array(), "array");
                                echo "\">";
                                echo $this->getAttribute($context["product"], "name", array(), "array");
                                echo "</a></h4>
                          ";
                                // line 91
                                if ($this->getAttribute($context["product"], "price", array(), "array")) {
                                    // line 92
                                    echo "                          <p class=\"price\">
                            ";
                                    // line 93
                                    if ( !$this->getAttribute($context["product"], "special", array(), "array")) {
                                        // line 94
                                        echo "                            ";
                                        echo $this->getAttribute($context["product"], "price", array(), "array");
                                        echo "
                            ";
                                    } else {
                                        // line 96
                                        echo "                            <span class=\"price-new\">";
                                        echo $this->getAttribute($context["product"], "special", array(), "array");
                                        echo "</span> <span class=\"price-old\">";
                                        echo $this->getAttribute($context["product"], "price", array(), "array");
                                        echo "</span>
                            ";
                                    }
                                    // line 98
                                    echo "                          </p>
                          ";
                                }
                                // line 100
                                echo "                        </div>
                        <div class=\"sort-order\">";
                                // line 101
                                echo $this->getAttribute($context["product"], "sort_order", array(), "array");
                                echo "</div>
                      </div>
                    </div>
                    ";
                            }
                            // line 105
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['index'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 106
                        echo "                  </div>
                </div>
              </div>
              ";
                    } elseif (                    // line 109
(isset($context["scrolling_panel"]) ? $context["scrolling_panel"] : null)) {
                        // line 110
                        echo "              <div class=\"box-product owl-carousel-2 owl-theme-2 nav-top-right nav-visible\">
                ";
                        // line 111
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('bt')->_arrayChunk($this->getAttribute($context["tab"], "products", array(), "array"), (isset($context["num_row"]) ? $context["num_row"] : null)));
                        foreach ($context['_seq'] as $context["_key"] => $context["products"]) {
                            // line 112
                            echo "                <div class=\"bt-item\">
                  ";
                            // line 113
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["products"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                // line 114
                                echo "                  <div class=\"product-layout ";
                                echo (isset($context["class_css"]) ? $context["class_css"] : null);
                                echo "\">
                    <div class=\"product-thumb\">
                      <div class=\"image\"><a href=\"";
                                // line 116
                                echo $this->getAttribute($context["product"], "href", array(), "array");
                                echo "\"  title=\"";
                                echo $this->getAttribute($context["product"], "name", array(), "array");
                                echo "\"><img src=\"";
                                echo $this->getAttribute($context["product"], "thumb", array(), "array");
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["product"], "name", array(), "array");
                                echo "\" class=\"img-responsive\" /></a>
                        <div class=\"button-group\">
                          <button type=\"button\" onclick=\"btadd.cart('";
                                // line 118
                                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                                echo "', '";
                                echo $this->getAttribute($context["product"], "minimum", array(), "array");
                                echo "');\"><i class=\"lnr lnr-cart\"></i> <span>";
                                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                                echo "</span></button>
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                                // line 119
                                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                                echo "\" onclick=\"btadd.wishlist('";
                                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                                echo "');\"><i class=\"lnr lnr-heart\"></i></button>
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                                // line 120
                                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                                echo "\" onclick=\"btadd.compare('";
                                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                                echo "');\"><i class=\"lnr lnr-sync\"></i></button>
                        </div>
                      </div>
                      <div class=\"caption\">
                        <h4 class=\"name\"><a href=\"";
                                // line 124
                                echo $this->getAttribute($context["product"], "href", array(), "array");
                                echo "\"  title=\"";
                                echo $this->getAttribute($context["product"], "name", array(), "array");
                                echo "\">";
                                echo $this->getAttribute($context["product"], "name", array(), "array");
                                echo "</a></h4>
                        ";
                                // line 125
                                if ($this->getAttribute($context["product"], "price", array(), "array")) {
                                    // line 126
                                    echo "                        <p class=\"price\">
                          ";
                                    // line 127
                                    if ( !$this->getAttribute($context["product"], "special", array(), "array")) {
                                        // line 128
                                        echo "                          ";
                                        echo $this->getAttribute($context["product"], "price", array(), "array");
                                        echo "
                          ";
                                    } else {
                                        // line 130
                                        echo "                          <span class=\"price-new\">";
                                        echo $this->getAttribute($context["product"], "special", array(), "array");
                                        echo "</span> <span class=\"price-old\">";
                                        echo $this->getAttribute($context["product"], "price", array(), "array");
                                        echo "</span>
                          ";
                                    }
                                    // line 132
                                    echo "                          ";
                                    if ($this->getAttribute($context["product"], "tax", array(), "array")) {
                                        // line 133
                                        echo "                          <span class=\"price-tax\">";
                                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                                        echo " ";
                                        echo $this->getAttribute($context["product"], "tax", array(), "array");
                                        echo "</span>
                          ";
                                    }
                                    // line 135
                                    echo "                        </p>
                        ";
                                }
                                // line 137
                                echo "                        ";
                                if ($this->getAttribute($context["product"], "rating", array(), "array")) {
                                    // line 138
                                    echo "                        <div class=\"rating\">
                          ";
                                    // line 139
                                    $context["i"] = 1;
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                        // line 140
                                        echo "                          ";
                                        if (($this->getAttribute($context["product"], "rating", array(), "array") < $context["i"])) {
                                            // line 141
                                            echo "                          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                                        } else {
                                            // line 143
                                            echo "                          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                                        }
                                        // line 145
                                        echo "                          ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 146
                                    echo "                        </div>
                        ";
                                }
                                // line 148
                                echo "                      </div>
                      ";
                                // line 149
                                if ( !(isset($context["sidebar"]) ? $context["sidebar"] : null)) {
                                    // line 150
                                    echo "                      ";
                                    if ($this->getAttribute($context["product"], "special", array(), "array")) {
                                        // line 151
                                        echo "                      <div class=\"save-off\">";
                                        echo (isset($context["text_save_off"]) ? $context["text_save_off"] : null);
                                        echo "</div>
                      ";
                                    }
                                    // line 153
                                    echo "                      ";
                                }
                                // line 154
                                echo "                    </div>
                  </div>
                  ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 157
                            echo "                </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['products'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 159
                        echo "              </div>
              ";
                    } else {
                        // line 161
                        echo "              <div class=\"row\">
                ";
                        // line 162
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tab"], "products", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 163
                            echo "                <div class=\"product-layout ";
                            echo (isset($context["class_css"]) ? $context["class_css"] : null);
                            echo " col-lg-";
                            echo (12 / (isset($context["column"]) ? $context["column"] : null));
                            echo " col-md-";
                            echo (12 / (isset($context["column"]) ? $context["column"] : null));
                            echo " col-sm-";
                            echo (12 / $this->env->getExtension('bt')->_Round(((isset($context["column"]) ? $context["column"] : null) / 2)));
                            echo " col-xs-12\">
                  <div class=\"product-thumb\">
                    <div class=\"image\"><a href=\"";
                            // line 165
                            echo $this->getAttribute($context["product"], "href", array(), "array");
                            echo "\"><img src=\"";
                            echo $this->getAttribute($context["product"], "thumb", array(), "array");
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["product"], "name", array(), "array");
                            echo "\" class=\"img-responsive\" /></a>
                      <div class=\"button-group\">
                        <button type=\"button\" onclick=\"btadd.cart('";
                            // line 167
                            echo $this->getAttribute($context["product"], "product_id", array(), "array");
                            echo "', '";
                            echo $this->getAttribute($context["product"], "minimum", array(), "array");
                            echo "');\"><i class=\"lnr lnr-cart\"></i> <span>";
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "</span></button>
                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                            // line 168
                            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                            echo "\" onclick=\"btadd.wishlist('";
                            echo $this->getAttribute($context["product"], "product_id", array(), "array");
                            echo "');\"><i class=\"lnr lnr-heart\"></i></button>
                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                            // line 169
                            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                            echo "\" onclick=\"btadd.compare('";
                            echo $this->getAttribute($context["product"], "product_id", array(), "array");
                            echo "');\"><i class=\"lnr lnr-sync\"></i></button>
                      </div>
                    </div>
                    <div class=\"caption\">
                      <h4 class=\"name\"><a href=\"";
                            // line 173
                            echo $this->getAttribute($context["product"], "href", array(), "array");
                            echo "\">";
                            echo $this->getAttribute($context["product"], "name", array(), "array");
                            echo "</a></h4>
                      <p class=\"price\">
                        ";
                            // line 175
                            if ( !$this->getAttribute($context["product"], "special", array(), "array")) {
                                // line 176
                                echo "                        ";
                                echo $this->getAttribute($context["product"], "price", array(), "array");
                                echo "
                        ";
                            } else {
                                // line 178
                                echo "                        <span class=\"price-new\">";
                                echo $this->getAttribute($context["product"], "special", array(), "array");
                                echo "</span> <span class=\"price-old\">";
                                echo $this->getAttribute($context["product"], "price", array(), "array");
                                echo "</span>
                        ";
                            }
                            // line 180
                            echo "                        ";
                            if ($this->getAttribute($context["product"], "tax", array(), "array")) {
                                // line 181
                                echo "                        <span class=\"price-tax\">";
                                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                                echo " ";
                                echo $this->getAttribute($context["product"], "tax", array(), "array");
                                echo "</span>
                        ";
                            }
                            // line 183
                            echo "                      </p>
                      ";
                            // line 184
                            if ($this->getAttribute($context["product"], "rating", array(), "array")) {
                                // line 185
                                echo "                      <div class=\"rating\">
                        ";
                                // line 186
                                $context["i"] = 1;
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                    // line 187
                                    echo "                        ";
                                    if (($this->getAttribute($context["product"], "rating", array(), "array") < $context["i"])) {
                                        // line 188
                                        echo "                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        ";
                                    } else {
                                        // line 190
                                        echo "                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        ";
                                    }
                                    // line 192
                                    echo "                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 193
                                echo "                      </div>
                      ";
                            }
                            // line 195
                            echo "                    </div>
                    ";
                            // line 196
                            if ($this->getAttribute($context["product"], "special", array(), "array")) {
                                // line 197
                                echo "                    <div class=\"save-off\">";
                                echo (isset($context["text_save_off"]) ? $context["text_save_off"] : null);
                                echo "</div>
                    ";
                            }
                            // line 199
                            echo "                  </div>
                </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 202
                        echo "              </div>
              ";
                    }
                    // line 204
                    echo "              ";
                }
                // line 205
                echo "            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
            // line 213
            if (((isset($context["scrolling_panel"]) ? $context["scrolling_panel"] : null) &&  !(isset($context["product_large"]) ? $context["product_large"] : null))) {
                // line 214
                echo "<script type=\"text/javascript\"><!--
\$(function() {
\tif (\$('html').attr('dir') == 'rtl') {
\t\tvar rtl = true;
\t} else {
\t\tvar rtl = false;
\t}

\tif (";
                // line 222
                echo (isset($context["sidebar"]) ? $context["sidebar"] : null);
                echo ") {
\t\tvar responsive = {};
\t} else {
\t\tvar responsive = {
\t\t\t992: {
\t\t\t\titems: ";
                // line 227
                echo (isset($context["per_row"]) ? $context["per_row"] : null);
                echo "
\t\t\t},
\t\t\t768: {
\t\t\t\titems: ";
                // line 230
                echo $this->env->getExtension('bt')->_Round(((isset($context["per_row"]) ? $context["per_row"] : null) / 2));
                echo "
\t\t\t},
\t\t\t560: {
\t\t\t\titems: ";
                // line 233
                echo $this->env->getExtension('bt')->_Round(((isset($context["per_row"]) ? $context["per_row"] : null) / 2));
                echo "
\t\t\t},
\t\t\t0: {
\t\t\t\titems: 1
\t\t\t}
\t\t}
\t}

\t\$('#filter-product-";
                // line 241
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .box-product').each(function(index, element) {
\t\tvar elm = \$(this);
\t\tvar loop = (elm.children().length > ";
                // line 243
                echo (isset($context["per_row"]) ? $context["per_row"] : null);
                echo ") ? true : false;

\t\telm.owlCarousel2({
\t\t\titems: ";
                // line 246
                echo (isset($context["per_row"]) ? $context["per_row"] : null);
                echo ",
\t\t\tloop: loop,
\t\t\tnav: true,
\t\t\tnavText: ['<img src=\"data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iNDIiIHZpZXdCb3g9IjAgMCAyNCA0MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMjIuNDU3MjA3NCAxLjAwNzQ2MTQ3bC0yMSAyMC4wMjQ4MjE0MyAyMC45NDc5Mzk3IDE5Ljk3NTE3ODYiIHN0cm9rZT0iIzJEMkQyRCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==\" />', '<img src=\"data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iNDIiIHZpZXdCb3g9IjAgMCAyNCA0MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMS40NTY3OSAxLjAwNzQ2MTQ3bDIxIDIwLjAyNDgyMTQzTDEuNTA4ODUgNDEuMDA3NDYxNSIgc3Ryb2tlPSIjMkQyRDJEIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+\" />'],
\t\t\tdots: false,
\t\t\tmargin: 30,
\t\t\trtl:rtl,
\t\t\tresponsive: responsive,
\t\t\tonInitialize: function(e) {
\t\t\t\tvar elm = e.target;
\t\t\t\t\$(elm).parent().css('display', 'block');
\t\t\t},
\t\t\tonInitialized : function(e) {
\t\t\t\tvar elm = e.target;
\t\t\t\t\$(elm).parent().css('display', '');
\t\t\t}
\t\t});
\t});
});
//--></script>
";
            }
            // line 267
            if ((isset($context["scrolling_tab"]) ? $context["scrolling_tab"] : null)) {
                // line 268
                echo "<script type=\"text/javascript\"><!--
\$(function() {
\tif (\$('html').attr('dir') == 'rtl') {
\t\tvar rtl = true;
\t} else {
\t\tvar rtl = false;
\t}

\tvar elm = \$('#filter-product-";
                // line 276
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .tabs-headings');
\tvar loop = (elm.children().length > ";
                // line 277
                echo (isset($context["num_tab"]) ? $context["num_tab"] : null);
                echo ") ? true : false;

\telm.owlCarousel2({
\t\titems: ";
                // line 280
                echo (isset($context["num_tab"]) ? $context["num_tab"] : null);
                echo ",
\t\tloop: loop,
\t\tnav: true,
\t\tnavText: ['<img src=\"data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iNDIiIHZpZXdCb3g9IjAgMCAyNCA0MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMjIuNDU3MjA3NCAxLjAwNzQ2MTQ3bC0yMSAyMC4wMjQ4MjE0MyAyMC45NDc5Mzk3IDE5Ljk3NTE3ODYiIHN0cm9rZT0iIzJEMkQyRCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==\" />', '<img src=\"data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iNDIiIHZpZXdCb3g9IjAgMCAyNCA0MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMS40NTY3OSAxLjAwNzQ2MTQ3bDIxIDIwLjAyNDgyMTQzTDEuNTA4ODUgNDEuMDA3NDYxNSIgc3Ryb2tlPSIjMkQyRDJEIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+\" />'],
\t\tdots: false,
\t\trtl:rtl,
\t\tresponsive:{
\t\t\t992: {
\t\t\t\titems: ";
                // line 288
                echo (isset($context["num_tab"]) ? $context["num_tab"] : null);
                echo "
\t\t\t},
\t\t\t768: {
\t\t\t\titems: ";
                // line 291
                echo $this->env->getExtension('bt')->_Round(((isset($context["num_tab"]) ? $context["num_tab"] : null) / 2));
                echo "
\t\t\t},
\t\t\t560: {
\t\t\t\titems: ";
                // line 294
                echo $this->env->getExtension('bt')->_Round(((isset($context["num_tab"]) ? $context["num_tab"] : null) / 2));
                echo "
\t\t\t},
\t\t\t0: {
\t\t\t\titems: 1
\t\t\t}
\t\t}
\t});

\t\$('#filter-product-";
                // line 302
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .tabs-headings li').on('click', function() {
\t\t\$('#filter-product-";
                // line 303
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .tabs-headings li').not(this).removeClass('active');
\t});
});
//--></script>
";
            }
            // line 308
            if ((isset($context["product_large"]) ? $context["product_large"] : null)) {
                // line 309
                echo "<script type=\"text/javascript\"><!--
var products = jQuery.parseJSON('";
                // line 310
                echo (isset($context["products"]) ? $context["products"] : null);
                echo "');

\$('#filter-product-";
                // line 312
                echo (isset($context["module"]) ? $context["module"] : null);
                echo "').delegate('.list-product .image a', 'click', function(e) {
\te.preventDefault();

\tvar index = \$(this).parent().parent();
\tvar target = \$(this).parents('.list-product').prev().children('.large-product');

\tvar current_product_id = parseInt(target.attr('data-product'));
\tvar current_sort = parseInt(target.attr('data-sort'));

\tvar product_id = parseInt(\$(this).attr('data-product'));
\tvar sort = parseInt(\$(this).attr('data-sort'));

\tif (typeof products[current_product_id] != 'undefined') {
\t\tvar product = products[current_product_id];

\t\tvar html = '';
\t\thtml += '<div class=\"image\">';
\t\t\thtml += '<a href=\"' + product['href'] + '\" data-product=\"' + product['product_id'] + '\" data-sort=\"' + current_sort + '\"><img src=\"' + product['thumb'] + '\" alt=\"' + product['name'] + '\" title=\"' + product['name'] + '\" class=\"img-responsive\" /></a>';
\t\thtml += '</div>';
\t\thtml += '<div class=\"caption\">';
\t\t\thtml += '<h4 class=\"name\"><a href=\"' + product['href'] + '\">' + product['name'] + '</a></h4>';
\t\t\tif (product['price']) {
\t\t\t\thtml += '<p class=\"price\">';
\t\t\t\tif (!product['special']) {
\t\t\t\t\thtml += product['price'];
\t\t\t\t} else {
\t\t\t\t\thtml += '<span class=\"price-new\">' + product['special'] + '</span> <span class=\"price-old\">' + product['price'] + '</span>';
\t\t\t\t}
\t\t\t\thtml += '</p>';
\t\t\t}
\t\thtml += '</div>';
\t\thtml += '<div class=\"sort-order\">' + current_sort + '</div>';

\t\tindex.html(html);
\t}

\tif (typeof products[product_id] != 'undefined') {
\t\tvar product = products[product_id];

\t\tvar html = '';

\t\thtml += '<div class=\"product-thumb\">';
\t\t\thtml += '<div class=\"image\">';
\t\t\t\thtml += '<a href=\"' + product['href'] + '\"><img src=\"' + product['thumb'] + '\" alt=\"' + product['name'] + '\" title=\"' + product['name'] + '\" class=\"img-responsive\" /></a>';
\t\t\t\thtml += '<div class=\"button-group\">';
\t\t\t\t\thtml += '<button type=\"button\" onclick=\"btadd.cart(' + product['product_id'] + ', ' + product['minimum'] + ');\"><i class=\"lnr lnr-cart\"></i> <span>";
                // line 357
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>';
\t\t\t\t\thtml += '<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 358
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"btadd.wishlist(' + product['product_id'] + ');\"><i class=\"lnr lnr-heart\"></i></button>';
\t\t\t\t\thtml += '<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 359
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"btadd.compare(' + product['product_id'] + ');\"><i class=\"lnr lnr-sync\"></i></button>';
\t\t\t\thtml += '</div>';
\t\t\t\tif (product['special']) {
\t\t\t\t\thtml += '<div class=\"save-off\">";
                // line 362
                echo (isset($context["text_save_off"]) ? $context["text_save_off"] : null);
                echo "</div>';
\t\t\t\t}
\t\t\thtml += '</div>';

\t\t\thtml += '<div class=\"caption\">';
\t\t\t\thtml += '<h4 class=\"name\"><a href=\"' + product['href'] + '\">' + product['name'] + '</a></h4>';
\t\t\t\tif (!";
                // line 368
                echo (isset($context["sidebar"]) ? $context["sidebar"] : null);
                echo ") {
\t\t\t\t\t//html += '<p>' + product['description'] + '</p>';
\t\t\t\t}
\t\t\t\tif (product['price']) {
\t\t\t\t\thtml += '<p class=\"price\">'
\t\t\t\t\tif (!product['special']) {
\t\t\t\t\t\thtml += product['price'];
\t\t\t\t\t} else {
\t\t\t\t\t\thtml += '<span class=\"price-new\">' + product['special'] + '</span> <span class=\"price-old\">' + product['price'] + '</span>';
\t\t\t\t\t}
\t\t\t\t\thtml += '</p>';
\t\t\t\t}
\t\t\t\tif (product['rating']) {
\t\t\t\t\thtml += '<div class=\"rating\">';
\t\t\t\t\t\tfor (var i = 1; i <= 5; i++) {
\t\t\t\t\t\t\tif (product['rating'] < i) {
\t\t\t\t\t\t\t\thtml += '<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>';
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\thtml += '<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\thtml += '</div>';
\t\t\t\t}
\t\t\thtml += '</div>';
\t\t\thtml += '<div class=\"sort-order\">' + sort + '</div>';
\t\thtml += '</div>';

\t\ttarget.html(html).attr('data-product', product_id).attr('data-sort', sort);

\t\tvar html = '';

\t\tif (product['images'].length) {
\t\t\tfor (i in product['images']) {
\t\t\t\thtml += '<li class=\"image-additional\"><a href=\"' + product['images'][i]['popup'] + '\" title=\"' + product['name'] + '\"> <img src=\"' + product['images'][i]['thumb'] + '\" title=\"' + product['name'] + '\" alt=\"' + product['name'] + '\" /></a></li>';
\t\t\t}
\t\t}

\t\ttarget.next().html(html);
\t}
});

\$('#filter-product-";
                // line 409
                echo (isset($context["module"]) ? $context["module"] : null);
                echo "').delegate('.image-additional a', 'click', function(e) {
\te.preventDefault();

\t\$('#filter-product-";
                // line 412
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " .large-product .image img').attr('src', \$(this).attr('href'));
});
//--></script>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/extension/module/boss_filterproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  984 => 412,  978 => 409,  934 => 368,  925 => 362,  919 => 359,  915 => 358,  911 => 357,  863 => 312,  858 => 310,  855 => 309,  853 => 308,  845 => 303,  841 => 302,  830 => 294,  824 => 291,  818 => 288,  807 => 280,  801 => 277,  797 => 276,  787 => 268,  785 => 267,  761 => 246,  755 => 243,  750 => 241,  739 => 233,  733 => 230,  727 => 227,  719 => 222,  709 => 214,  707 => 213,  699 => 207,  692 => 205,  689 => 204,  685 => 202,  677 => 199,  671 => 197,  669 => 196,  666 => 195,  662 => 193,  656 => 192,  652 => 190,  648 => 188,  645 => 187,  640 => 186,  637 => 185,  635 => 184,  632 => 183,  624 => 181,  621 => 180,  613 => 178,  607 => 176,  605 => 175,  598 => 173,  589 => 169,  583 => 168,  575 => 167,  566 => 165,  554 => 163,  550 => 162,  547 => 161,  543 => 159,  536 => 157,  528 => 154,  525 => 153,  519 => 151,  516 => 150,  514 => 149,  511 => 148,  507 => 146,  501 => 145,  497 => 143,  493 => 141,  490 => 140,  485 => 139,  482 => 138,  479 => 137,  475 => 135,  467 => 133,  464 => 132,  456 => 130,  450 => 128,  448 => 127,  445 => 126,  443 => 125,  435 => 124,  426 => 120,  420 => 119,  412 => 118,  401 => 116,  395 => 114,  391 => 113,  388 => 112,  384 => 111,  381 => 110,  379 => 109,  374 => 106,  368 => 105,  361 => 101,  358 => 100,  354 => 98,  346 => 96,  340 => 94,  338 => 93,  335 => 92,  333 => 91,  325 => 90,  310 => 88,  306 => 86,  303 => 85,  299 => 84,  293 => 80,  276 => 78,  272 => 77,  264 => 73,  258 => 71,  256 => 70,  253 => 69,  249 => 67,  243 => 66,  239 => 64,  235 => 62,  232 => 61,  227 => 60,  224 => 59,  221 => 58,  217 => 56,  209 => 54,  203 => 52,  201 => 51,  198 => 50,  196 => 49,  188 => 48,  179 => 44,  173 => 43,  165 => 42,  154 => 40,  145 => 38,  142 => 37,  140 => 36,  137 => 35,  134 => 34,  132 => 33,  125 => 32,  121 => 31,  118 => 30,  114 => 28,  105 => 26,  95 => 24,  93 => 23,  86 => 22,  82 => 21,  77 => 20,  75 => 19,  71 => 18,  68 => 17,  61 => 14,  55 => 12,  53 => 11,  49 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!--module boss - fillter product-->*/
/* {% if (tabs is not empty) %}*/
/* */
/* <div id="filter-product-{{ module }}" class="bt-filter-product box {{ sidebar ? 'sidebar style-2' : 'style-1' }} {{ scrolling_panel ? 'slide' : 'non-slide' }}">*/
/*   <div class="{{ sidebar ? 'container-fluid' : 'container' }}">*/
/*     <div class="{{ sidebar ? 'row' : 'bt-row' }}">*/
/*       <div id="boss_homefilter_tabs{{ module }}" class="boss_homefilter_tabs">*/
/*         {% if (heading_title) %}*/
/*         <div class="box-heading title">*/
/*           <h2>*/
/*             {% if (icon) %}*/
/*             <i class="fa {{ icon }}"></i>*/
/*             {% endif %}*/
/*             {{ heading_title }}</h2>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="clearfix"></div>*/
/*         <div id="tabs_content_container{{ module }}" class="box-content">*/
/*           {% if (use_tab) %}*/
/*           <ul class="tabs-headings {{ scrolling_tab ? 'owl-carousel-2 owl-theme-2 nav-middle nav-visible padding-nav' : '' }}">*/
/*             {% for index,tab in tabs %}*/
/*             <li class="{{ index == 0 ? 'active' : '' }}"> <a href="#filter-product-tab{{ index~module }}" title="tab" data-toggle="tab">*/
/*               {% if (tab['icon'] is not empty) %}*/
/*               <img src="{{ tab['icon'] }}" title="{{ tab['title'] }}" alt="{{ tab['title'] }}"/>*/
/*               {% endif %}*/
/*               {{ tab['title'] }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*           {% endif %}*/
/*           <div class="tab-content">*/
/*             {% for index,tab in tabs %}*/
/*             <div id="filter-product-tab{{ index~module }}" class="tab-pane fade {{ index == 0 ? 'in active' : '' }}">*/
/*               {% if (tab['products'] is not empty) %}*/
/*               {% if (product_large and not sidebar) %}*/
/*               <div class="row bt-row">*/
/*                 {% set product = tab['products'][0] %}*/
/*                 <div class="col-sm-6">*/
/*                   <div class="product-layout large-product {{ class_css }}" data-product="{{ product['product_id'] }}" data-sort="{{ product['sort_order'] }}">*/
/*                     <div class="product-thumb">*/
/*                       <div class="image"><a href="{{ product['href'] }}" title="{{ product['name'] }}"><img src="{{ product['thumb'] }}" alt="{{ product['name'] }}" class="img-responsive" /></a>*/
/*                         <div class="button-group">*/
/*                           <button type="button" onclick="btadd.cart('{{ product['product_id'] }}', '{{ product['minimum'] }}');"><i class="lnr lnr-cart"></i> <span>{{ button_cart }}</span></button>*/
/*                           <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="btadd.wishlist('{{ product['product_id'] }}');"><i class="lnr lnr-heart"></i></button>*/
/*                           <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="btadd.compare('{{ product['product_id'] }}');"><i class="lnr lnr-sync"></i></button>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="caption">*/
/*                         <h4 class="name"><a href="{{ product['href'] }}" title="{{ product['name'] }}">{{ product['name'] }}</a></h4>*/
/*                         {% if (product['price']) %}*/
/*                         <p class="price">*/
/*                           {% if (not product['special']) %}*/
/*                           {{ product['price'] }}*/
/*                           {% else %}*/
/*                           <span class="price-new">{{ product['special'] }}</span> <span class="price-old">{{ product['price'] }}</span>*/
/*                           {% endif %}*/
/*                         </p>*/
/*                         {% endif %}*/
/*                         {% if (product['rating']) %}*/
/*                         <div class="rating">*/
/*                           {% set i = 1 %}{% for i in i..5 %}*/
/*                           {% if (product['rating'] < i) %}*/
/*                           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% else %}*/
/*                           <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% endif %}*/
/*                           {% endfor %}*/
/*                         </div>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                       {% if (product['special']) %}*/
/*                       <div class="save-off">{{ text_save_off }}</div>*/
/*                       {% endif %}*/
/*                       <div class="sort-order">{{ product['sort_order'] }}</div>*/
/*                     </div>*/
/*                   </div>*/
/*                   <ul class="addition-image">*/
/*                     {% for image in product['images'] %}*/
/*                     <li class="image-additional text-center"><a href="{{ image['popup'] }}" title="{{ product['name'] }}"> <img src="{{ image['thumb'] }}" title="{{ product['name'] }}" alt="{{ product['name'] }}" /></a></li>*/
/*                     {% endfor %}*/
/*                   </ul>*/
/*                 </div>*/
/*                 <div class="col-sm-6 list-product">*/
/*                   <div class="row">*/
/*                     {% for index,product in tab['products'] %}*/
/*                     {% if index != 0 %}*/
/*                     <div class="col-sm-4">*/
/*                       <div class="product-thumb">*/
/*                         <div class="image"><a href="{{ product['href'] }}"  title="{{ product['name'] }}" data-product="{{ product['product_id'] }}" data-sort="{{ product['sort_order'] }}"><img src="{{ product['thumb'] }}" alt="{{ product['name'] }}" class="img-responsive" /></a></div>*/
/*                         <div class="caption">*/
/*                           <h4 class="name"><a href="{{ product['href'] }}"  title="{{ product['name'] }}">{{ product['name'] }}</a></h4>*/
/*                           {% if (product['price']) %}*/
/*                           <p class="price">*/
/*                             {% if (not product['special']) %}*/
/*                             {{ product['price'] }}*/
/*                             {% else %}*/
/*                             <span class="price-new">{{ product['special'] }}</span> <span class="price-old">{{ product['price'] }}</span>*/
/*                             {% endif %}*/
/*                           </p>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                         <div class="sort-order">{{ product['sort_order'] }}</div>*/
/*                       </div>*/
/*                     </div>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               {% elseif (scrolling_panel) %}*/
/*               <div class="box-product owl-carousel-2 owl-theme-2 nav-top-right nav-visible">*/
/*                 {% for products in array_chunk(tab['products'], num_row) %}*/
/*                 <div class="bt-item">*/
/*                   {% for product in products %}*/
/*                   <div class="product-layout {{ class_css }}">*/
/*                     <div class="product-thumb">*/
/*                       <div class="image"><a href="{{ product['href'] }}"  title="{{ product['name'] }}"><img src="{{ product['thumb'] }}" alt="{{ product['name'] }}" class="img-responsive" /></a>*/
/*                         <div class="button-group">*/
/*                           <button type="button" onclick="btadd.cart('{{ product['product_id'] }}', '{{ product['minimum'] }}');"><i class="lnr lnr-cart"></i> <span>{{ button_cart }}</span></button>*/
/*                           <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="btadd.wishlist('{{ product['product_id'] }}');"><i class="lnr lnr-heart"></i></button>*/
/*                           <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="btadd.compare('{{ product['product_id'] }}');"><i class="lnr lnr-sync"></i></button>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="caption">*/
/*                         <h4 class="name"><a href="{{ product['href'] }}"  title="{{ product['name'] }}">{{ product['name'] }}</a></h4>*/
/*                         {% if (product['price']) %}*/
/*                         <p class="price">*/
/*                           {% if (not product['special']) %}*/
/*                           {{ product['price'] }}*/
/*                           {% else %}*/
/*                           <span class="price-new">{{ product['special'] }}</span> <span class="price-old">{{ product['price'] }}</span>*/
/*                           {% endif %}*/
/*                           {% if (product['tax']) %}*/
/*                           <span class="price-tax">{{ text_tax }} {{ product['tax'] }}</span>*/
/*                           {% endif %}*/
/*                         </p>*/
/*                         {% endif %}*/
/*                         {% if (product['rating']) %}*/
/*                         <div class="rating">*/
/*                           {% set i = 1 %}{% for i in i..5 %}*/
/*                           {% if (product['rating'] < i) %}*/
/*                           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% else %}*/
/*                           <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% endif %}*/
/*                           {% endfor %}*/
/*                         </div>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                       {% if (not sidebar) %}*/
/*                       {% if (product['special']) %}*/
/*                       <div class="save-off">{{ text_save_off }}</div>*/
/*                       {% endif %}*/
/*                       {% endif %}*/
/*                     </div>*/
/*                   </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*               {% else %}*/
/*               <div class="row">*/
/*                 {% for product in tab['products'] %}*/
/*                 <div class="product-layout {{ class_css }} col-lg-{{ 12/column }} col-md-{{ 12/column }} col-sm-{{ 12/round(column/2) }} col-xs-12">*/
/*                   <div class="product-thumb">*/
/*                     <div class="image"><a href="{{ product['href'] }}"><img src="{{ product['thumb'] }}" alt="{{ product['name'] }}" class="img-responsive" /></a>*/
/*                       <div class="button-group">*/
/*                         <button type="button" onclick="btadd.cart('{{ product['product_id'] }}', '{{ product['minimum'] }}');"><i class="lnr lnr-cart"></i> <span>{{ button_cart }}</span></button>*/
/*                         <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="btadd.wishlist('{{ product['product_id'] }}');"><i class="lnr lnr-heart"></i></button>*/
/*                         <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="btadd.compare('{{ product['product_id'] }}');"><i class="lnr lnr-sync"></i></button>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="caption">*/
/*                       <h4 class="name"><a href="{{ product['href'] }}">{{ product['name'] }}</a></h4>*/
/*                       <p class="price">*/
/*                         {% if (not product['special']) %}*/
/*                         {{ product['price'] }}*/
/*                         {% else %}*/
/*                         <span class="price-new">{{ product['special'] }}</span> <span class="price-old">{{ product['price'] }}</span>*/
/*                         {% endif %}*/
/*                         {% if (product['tax']) %}*/
/*                         <span class="price-tax">{{ text_tax }} {{ product['tax'] }}</span>*/
/*                         {% endif %}*/
/*                       </p>*/
/*                       {% if (product['rating']) %}*/
/*                       <div class="rating">*/
/*                         {% set i = 1 %}{% for i in i..5 %}*/
/*                         {% if (product['rating'] < i) %}*/
/*                         <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         {% else %}*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </div>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     {% if (product['special']) %}*/
/*                     <div class="save-off">{{ text_save_off }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*               {% endif %}*/
/*               {% endif %}*/
/*             </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% if (scrolling_panel and not product_large) %}*/
/* <script type="text/javascript"><!--*/
/* $(function() {*/
/* 	if ($('html').attr('dir') == 'rtl') {*/
/* 		var rtl = true;*/
/* 	} else {*/
/* 		var rtl = false;*/
/* 	}*/
/* */
/* 	if ({{ sidebar }}) {*/
/* 		var responsive = {};*/
/* 	} else {*/
/* 		var responsive = {*/
/* 			992: {*/
/* 				items: {{ per_row }}*/
/* 			},*/
/* 			768: {*/
/* 				items: {{ round(per_row/2) }}*/
/* 			},*/
/* 			560: {*/
/* 				items: {{ round(per_row/2) }}*/
/* 			},*/
/* 			0: {*/
/* 				items: 1*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	$('#filter-product-{{ module }} .box-product').each(function(index, element) {*/
/* 		var elm = $(this);*/
/* 		var loop = (elm.children().length > {{ per_row }}) ? true : false;*/
/* */
/* 		elm.owlCarousel2({*/
/* 			items: {{ per_row }},*/
/* 			loop: loop,*/
/* 			nav: true,*/
/* 			navText: ['<img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iNDIiIHZpZXdCb3g9IjAgMCAyNCA0MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMjIuNDU3MjA3NCAxLjAwNzQ2MTQ3bC0yMSAyMC4wMjQ4MjE0MyAyMC45NDc5Mzk3IDE5Ljk3NTE3ODYiIHN0cm9rZT0iIzJEMkQyRCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==" />', '<img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iNDIiIHZpZXdCb3g9IjAgMCAyNCA0MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMS40NTY3OSAxLjAwNzQ2MTQ3bDIxIDIwLjAyNDgyMTQzTDEuNTA4ODUgNDEuMDA3NDYxNSIgc3Ryb2tlPSIjMkQyRDJEIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+" />'],*/
/* 			dots: false,*/
/* 			margin: 30,*/
/* 			rtl:rtl,*/
/* 			responsive: responsive,*/
/* 			onInitialize: function(e) {*/
/* 				var elm = e.target;*/
/* 				$(elm).parent().css('display', 'block');*/
/* 			},*/
/* 			onInitialized : function(e) {*/
/* 				var elm = e.target;*/
/* 				$(elm).parent().css('display', '');*/
/* 			}*/
/* 		});*/
/* 	});*/
/* });*/
/* //--></script>*/
/* {% endif %}*/
/* {% if (scrolling_tab) %}*/
/* <script type="text/javascript"><!--*/
/* $(function() {*/
/* 	if ($('html').attr('dir') == 'rtl') {*/
/* 		var rtl = true;*/
/* 	} else {*/
/* 		var rtl = false;*/
/* 	}*/
/* */
/* 	var elm = $('#filter-product-{{ module }} .tabs-headings');*/
/* 	var loop = (elm.children().length > {{ num_tab }}) ? true : false;*/
/* */
/* 	elm.owlCarousel2({*/
/* 		items: {{ num_tab }},*/
/* 		loop: loop,*/
/* 		nav: true,*/
/* 		navText: ['<img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iNDIiIHZpZXdCb3g9IjAgMCAyNCA0MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMjIuNDU3MjA3NCAxLjAwNzQ2MTQ3bC0yMSAyMC4wMjQ4MjE0MyAyMC45NDc5Mzk3IDE5Ljk3NTE3ODYiIHN0cm9rZT0iIzJEMkQyRCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==" />', '<img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iNDIiIHZpZXdCb3g9IjAgMCAyNCA0MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMS40NTY3OSAxLjAwNzQ2MTQ3bDIxIDIwLjAyNDgyMTQzTDEuNTA4ODUgNDEuMDA3NDYxNSIgc3Ryb2tlPSIjMkQyRDJEIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+" />'],*/
/* 		dots: false,*/
/* 		rtl:rtl,*/
/* 		responsive:{*/
/* 			992: {*/
/* 				items: {{ num_tab }}*/
/* 			},*/
/* 			768: {*/
/* 				items: {{ round(num_tab/2) }}*/
/* 			},*/
/* 			560: {*/
/* 				items: {{ round(num_tab/2) }}*/
/* 			},*/
/* 			0: {*/
/* 				items: 1*/
/* 			}*/
/* 		}*/
/* 	});*/
/* */
/* 	$('#filter-product-{{ module }} .tabs-headings li').on('click', function() {*/
/* 		$('#filter-product-{{ module }} .tabs-headings li').not(this).removeClass('active');*/
/* 	});*/
/* });*/
/* //--></script>*/
/* {% endif %}*/
/* {% if (product_large) %}*/
/* <script type="text/javascript"><!--*/
/* var products = jQuery.parseJSON('{{ products }}');*/
/* */
/* $('#filter-product-{{ module }}').delegate('.list-product .image a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	var index = $(this).parent().parent();*/
/* 	var target = $(this).parents('.list-product').prev().children('.large-product');*/
/* */
/* 	var current_product_id = parseInt(target.attr('data-product'));*/
/* 	var current_sort = parseInt(target.attr('data-sort'));*/
/* */
/* 	var product_id = parseInt($(this).attr('data-product'));*/
/* 	var sort = parseInt($(this).attr('data-sort'));*/
/* */
/* 	if (typeof products[current_product_id] != 'undefined') {*/
/* 		var product = products[current_product_id];*/
/* */
/* 		var html = '';*/
/* 		html += '<div class="image">';*/
/* 			html += '<a href="' + product['href'] + '" data-product="' + product['product_id'] + '" data-sort="' + current_sort + '"><img src="' + product['thumb'] + '" alt="' + product['name'] + '" title="' + product['name'] + '" class="img-responsive" /></a>';*/
/* 		html += '</div>';*/
/* 		html += '<div class="caption">';*/
/* 			html += '<h4 class="name"><a href="' + product['href'] + '">' + product['name'] + '</a></h4>';*/
/* 			if (product['price']) {*/
/* 				html += '<p class="price">';*/
/* 				if (!product['special']) {*/
/* 					html += product['price'];*/
/* 				} else {*/
/* 					html += '<span class="price-new">' + product['special'] + '</span> <span class="price-old">' + product['price'] + '</span>';*/
/* 				}*/
/* 				html += '</p>';*/
/* 			}*/
/* 		html += '</div>';*/
/* 		html += '<div class="sort-order">' + current_sort + '</div>';*/
/* */
/* 		index.html(html);*/
/* 	}*/
/* */
/* 	if (typeof products[product_id] != 'undefined') {*/
/* 		var product = products[product_id];*/
/* */
/* 		var html = '';*/
/* */
/* 		html += '<div class="product-thumb">';*/
/* 			html += '<div class="image">';*/
/* 				html += '<a href="' + product['href'] + '"><img src="' + product['thumb'] + '" alt="' + product['name'] + '" title="' + product['name'] + '" class="img-responsive" /></a>';*/
/* 				html += '<div class="button-group">';*/
/* 					html += '<button type="button" onclick="btadd.cart(' + product['product_id'] + ', ' + product['minimum'] + ');"><i class="lnr lnr-cart"></i> <span>{{ button_cart }}</span></button>';*/
/* 					html += '<button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="btadd.wishlist(' + product['product_id'] + ');"><i class="lnr lnr-heart"></i></button>';*/
/* 					html += '<button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="btadd.compare(' + product['product_id'] + ');"><i class="lnr lnr-sync"></i></button>';*/
/* 				html += '</div>';*/
/* 				if (product['special']) {*/
/* 					html += '<div class="save-off">{{ text_save_off }}</div>';*/
/* 				}*/
/* 			html += '</div>';*/
/* */
/* 			html += '<div class="caption">';*/
/* 				html += '<h4 class="name"><a href="' + product['href'] + '">' + product['name'] + '</a></h4>';*/
/* 				if (!{{ sidebar }}) {*/
/* 					//html += '<p>' + product['description'] + '</p>';*/
/* 				}*/
/* 				if (product['price']) {*/
/* 					html += '<p class="price">'*/
/* 					if (!product['special']) {*/
/* 						html += product['price'];*/
/* 					} else {*/
/* 						html += '<span class="price-new">' + product['special'] + '</span> <span class="price-old">' + product['price'] + '</span>';*/
/* 					}*/
/* 					html += '</p>';*/
/* 				}*/
/* 				if (product['rating']) {*/
/* 					html += '<div class="rating">';*/
/* 						for (var i = 1; i <= 5; i++) {*/
/* 							if (product['rating'] < i) {*/
/* 								html += '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>';*/
/* 							} else {*/
/* 								html += '<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>';*/
/* 							}*/
/* 						}*/
/* 					html += '</div>';*/
/* 				}*/
/* 			html += '</div>';*/
/* 			html += '<div class="sort-order">' + sort + '</div>';*/
/* 		html += '</div>';*/
/* */
/* 		target.html(html).attr('data-product', product_id).attr('data-sort', sort);*/
/* */
/* 		var html = '';*/
/* */
/* 		if (product['images'].length) {*/
/* 			for (i in product['images']) {*/
/* 				html += '<li class="image-additional"><a href="' + product['images'][i]['popup'] + '" title="' + product['name'] + '"> <img src="' + product['images'][i]['thumb'] + '" title="' + product['name'] + '" alt="' + product['name'] + '" /></a></li>';*/
/* 			}*/
/* 		}*/
/* */
/* 		target.next().html(html);*/
/* 	}*/
/* });*/
/* */
/* $('#filter-product-{{ module }}').delegate('.image-additional a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#filter-product-{{ module }} .large-product .image img').attr('src', $(this).attr('href'));*/
/* });*/
/* //--></script>*/
/* {% endif %}*/
/* {% endif %}*/
/* */
