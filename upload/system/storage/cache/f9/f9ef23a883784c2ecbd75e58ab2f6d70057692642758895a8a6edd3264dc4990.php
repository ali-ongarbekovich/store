<?php

/* bt_laparis/template/product/product/product_4.twig */
class __TwigTemplate_d6e4941b0f62cbf49a4d54027f28ddb867ebd719a46047d323de142708b00633 extends Twig_Template
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
        if ((((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null)) || (isset($context["products"]) ? $context["products"] : null))) {
            echo " 
<script src=\"catalog/view/javascript/bossthemes/owl-carousel/owl.carousel.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/bossthemes/jquery.zoom.min.js\"></script>
<link href=\"catalog/view/javascript/bossthemes/owl-carousel/owl.carousel.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/theme/";
            // line 5
            echo (isset($context["template_directory"]) ? $context["template_directory"] : null);
            echo "/stylesheet/bossthemes/owl.carousel.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
";
        }
        // line 6
        echo " 
<div class=\"bt-breadcrumb\">
  <div class=\"container\">
    <ul class=\"breadcrumb\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            // line 11
            echo $this->getAttribute($context["breadcrumb"], "href", array(), "array");
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array(), "array");
            echo "</span></a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
    </ul>
  </div>
</div>
<div class=\"container\">
  <div class=\"row\">";
        // line 17
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
    ";
        // line 18
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            echo " 
    ";
            // line 19
            $context["class"] = "col-sm-6";
            echo " 
    ";
        } elseif ((        // line 20
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            echo " 
    ";
            // line 21
            $context["class"] = "col-sm-9";
            echo " 
    ";
        } else {
            // line 22
            echo " 
    ";
            // line 23
            $context["class"] = "col-sm-12";
            echo " 
    ";
        }
        // line 24
        echo " 
    <div id=\"content\" class=\"";
        // line 25
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo " 
      <div itemscope itemtype=\"http://schema.org/Product\">
        <div class=\"row product-info product-4\">
          ";
        // line 28
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            echo " 
          ";
            // line 29
            $context["class"] = "col-sm-6";
            echo " 
          ";
        } else {
            // line 30
            echo " 
          ";
            // line 31
            $context["class"] = "col-sm-7";
            echo " 
          ";
        }
        // line 32
        echo " 
          <div class=\"";
        // line 33
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 34
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            echo " 
            <div class=\"product-thumb\" id=\"product-thumb\">
              <div class=\"row\">
                ";
            // line 37
            if ((isset($context["popup"]) ? $context["popup"] : null)) {
                echo " 
                <div class=\"col-sm-6\">
                  <div class=\"image-item\"><img src=\"";
                // line 39
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" class=\"product-image\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"/></div>
                </div>
                ";
            }
            // line 41
            echo " 
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                echo " 
                <div class=\"col-sm-6\">
                  <div class=\"image-item\"><img src=\"";
                // line 44
                echo $this->getAttribute($context["image"], "popup", array(), "array");
                echo "\" class=\"product-image\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" /></div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo " 
              </div>
            </div>
            ";
        }
        // line 49
        echo " 
          </div>
          ";
        // line 51
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            echo " 
          ";
            // line 52
            $context["class"] = "col-sm-6";
            echo " 
          ";
        } else {
            // line 53
            echo " 
          ";
            // line 54
            $context["class"] = "col-sm-5";
            echo " 
          ";
        }
        // line 55
        echo " 
          <div class=\"";
        // line 56
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            <h1 itemprop=\"name\">";
        // line 57
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            ";
        // line 58
        if ((isset($context["price"]) ? $context["price"] : null)) {
            echo " 
            <ul id=\"product-price\" class=\"list-unstyled price-box\">
              ";
            // line 60
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                echo " 
              <li class=\"price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\"><span class=\"price-main\" itemprop=\"price\">";
                // line 61
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span><span itemprop=\"availability\" content=\"";
                echo (isset($context["stock"]) ? $context["stock"] : null);
                echo "\"></span></li>
              ";
            } else {
                // line 62
                echo " 
              <li class=\"price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\"><span class=\"price-old\">";
                // line 63
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span> <span class=\"price-new\" itemprop=\"price\">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "<span itemprop=\"availability\" content=\"";
                echo (isset($context["stock"]) ? $context["stock"] : null);
                echo "\"></span></span></li>
              ";
            }
            // line 64
            echo " 
              ";
            // line 65
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                echo " 
              <li>";
                // line 66
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " <span class=\"price-tax\">";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</span></li>
              ";
            }
            // line 67
            echo " 
              ";
            // line 68
            if ((isset($context["points"]) ? $context["points"] : null)) {
                echo " 
              <li>";
                // line 69
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " <span class=\"price-reward\">";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</span></li>
              ";
            }
            // line 70
            echo " 
              ";
            // line 71
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                echo " 
              ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    echo " 
              <li>";
                    // line 73
                    echo $this->getAttribute($context["discount"], "quantity", array(), "array");
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array(), "array");
                    echo "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo " 
              ";
            }
            // line 75
            echo " 
            </ul>
            ";
        }
        // line 77
        echo " 
            ";
        // line 78
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            echo " 
            <div class=\"rating\">
              <p>
                ";
            // line 81
            $context["i"] = 1;
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo " 
                ";
                // line 82
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo " 
                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                ";
                } else {
                    // line 84
                    echo " 
                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                ";
                }
                // line 86
                echo " 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo " 
                <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); \$('html, body').animate({ scrollTop: \$('#tab-review').offset().top }, 'slow'); return false;\">";
            // line 88
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); \$('html, body').animate({ scrollTop: \$('#tab-review').offset().top }, 'slow'); return false;\">";
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a></p>
            </div>
            ";
        }
        // line 90
        echo " 
            <ul class=\"list-unstyled description\">
              <li><b>";
        // line 92
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</b> ";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</li>
              ";
        // line 93
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            echo " 
              <li><b>";
            // line 94
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</b> <a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\"><span itemprop=\"brand\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</span></a></li>
              ";
        }
        // line 95
        echo " 
              <li><b>";
        // line 96
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo "</b> <span itemprop=\"mpn\">";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</span></li>
              ";
        // line 97
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            echo " 
              <li><b>";
            // line 98
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</b> ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
              ";
        }
        // line 99
        echo " 
            </ul>
            <div id=\"product\">
              ";
        // line 102
        if ((isset($context["options"]) ? $context["options"] : null)) {
            echo " 
              <h3>";
            // line 103
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
              ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " 
              ";
                // line 105
                if (($this->getAttribute($context["option"], "type", array(), "array") == "select")) {
                    echo " 
              <div class=\"form-group";
                    // line 106
                    echo (($this->getAttribute($context["option"], "required", array(), "array")) ? (" required") : (""));
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 107
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array(), "array");
                    echo "</label>
                <select name=\"option[";
                    // line 108
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\" class=\"form-control\">
                  <option value=\"\">";
                    // line 109
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                  ";
                    // line 110
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        echo " 
                  <option value=\"";
                        // line 111
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array(), "array");
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array(), "array");
                        echo " 
                  ";
                        // line 112
                        if ($this->getAttribute($context["option_value"], "price", array(), "array")) {
                            echo " 
                  (";
                            // line 113
                            echo $this->getAttribute($context["option_value"], "price_prefix", array(), "array");
                            echo $this->getAttribute($context["option_value"], "price", array(), "array");
                            echo ")
                  ";
                        }
                        // line 114
                        echo " 
                  </option>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 116
                    echo " 
                </select>
              </div>
              ";
                }
                // line 119
                echo " 
              ";
                // line 120
                if (($this->getAttribute($context["option"], "type", array(), "array") == "radio")) {
                    echo " 
              <div class=\"form-group";
                    // line 121
                    echo (($this->getAttribute($context["option"], "required", array(), "array")) ? (" required") : (""));
                    echo "\">
                <label class=\"control-label\">";
                    // line 122
                    echo $this->getAttribute($context["option"], "name", array(), "array");
                    echo "</label>
                <div id=\"input-option";
                    // line 123
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\">
                  ";
                    // line 124
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        echo " 
                  <div class=\"radio ";
                        // line 125
                        echo (($this->getAttribute($context["option_value"], "image", array(), "array")) ? ("radio-inline has-image") : (""));
                        echo "\">
                    <label>
                      <input type=\"radio\" name=\"option[";
                        // line 127
                        echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array(), "array");
                        echo "\" data-image=\"";
                        echo (($this->getAttribute($context["option_value"], "image", array(), "array")) ? ("true") : ("false"));
                        echo "\" />
                      ";
                        // line 128
                        if ($this->getAttribute($context["option_value"], "image", array(), "array")) {
                            echo " 
                      <img src=\"";
                            // line 129
                            echo $this->getAttribute($context["option_value"], "image", array(), "array");
                            echo "\" alt=\"";
                            echo ((($this->getAttribute($context["option_value"], "name", array(), "array") . $this->getAttribute($context["option_value"], "price", array(), "array"))) ? (((" " . $this->getAttribute($context["option_value"], "price_prefix", array(), "array")) . $this->getAttribute($context["option_value"], "price", array(), "array"))) : (""));
                            echo "\" class=\"img-option\" data-toggle=\"tooltip\" title=\"";
                            echo $this->getAttribute($context["option_value"], "name", array(), "array");
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array(), "array")) {
                                echo " (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array(), "array");
                                echo $this->getAttribute($context["option_value"], "price", array(), "array");
                                echo ") ";
                            }
                            echo "\" />
                      ";
                        }
                        // line 130
                        echo " 
                      <span ";
                        // line 131
                        echo (($this->getAttribute($context["option_value"], "image", array(), "array")) ? ("class=\"hidden\"") : (""));
                        echo ">
                      ";
                        // line 132
                        echo $this->getAttribute($context["option_value"], "name", array(), "array");
                        echo " 
                      ";
                        // line 133
                        if ($this->getAttribute($context["option_value"], "price", array(), "array")) {
                            echo " 
                      (";
                            // line 134
                            echo $this->getAttribute($context["option_value"], "price_prefix", array(), "array");
                            echo $this->getAttribute($context["option_value"], "price", array(), "array");
                            echo ")
                      ";
                        }
                        // line 135
                        echo " 
                      </span>
                    </label>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 139
                    echo " 
                </div>
              </div>
              ";
                }
                // line 142
                echo " 
              ";
                // line 143
                if (($this->getAttribute($context["option"], "type", array(), "array") == "checkbox")) {
                    echo " 
              <div class=\"form-group";
                    // line 144
                    echo (($this->getAttribute($context["option"], "required", array(), "array")) ? (" required") : (""));
                    echo "\">
                <label class=\"control-label\">";
                    // line 145
                    echo $this->getAttribute($context["option"], "name", array(), "array");
                    echo "</label>
                <div id=\"input-option";
                    // line 146
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\">
                  ";
                    // line 147
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        echo " 
                  <div class=\"checkbox ";
                        // line 148
                        echo (($this->getAttribute($context["option_value"], "image", array(), "array")) ? ("checkbox-inline has-image") : (""));
                        echo "\">
                    <label>
                      <input type=\"checkbox\" name=\"option[";
                        // line 150
                        echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array(), "array");
                        echo "\" data-image=\"";
                        echo (($this->getAttribute($context["option_value"], "image", array(), "array")) ? ("true") : ("false"));
                        echo "\" />
                      ";
                        // line 151
                        if ($this->getAttribute($context["option_value"], "image", array(), "array")) {
                            echo " 
                      <img src=\"";
                            // line 152
                            echo $this->getAttribute($context["option_value"], "image", array(), "array");
                            echo "\" alt=\"";
                            echo ((($this->getAttribute($context["option_value"], "name", array(), "array") . $this->getAttribute($context["option_value"], "price", array(), "array"))) ? (((" " . $this->getAttribute($context["option_value"], "price_prefix", array(), "array")) . $this->getAttribute($context["option_value"], "price", array(), "array"))) : (""));
                            echo "\" class=\"img-option\" data-toggle=\"tooltip\" title=\"";
                            echo $this->getAttribute($context["option_value"], "name", array(), "array");
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array(), "array")) {
                                echo " (";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array(), "array");
                                echo $this->getAttribute($context["option_value"], "price", array(), "array");
                                echo ") ";
                            }
                            echo "\" />
                      ";
                        }
                        // line 153
                        echo " 
                      <span ";
                        // line 154
                        echo (($this->getAttribute($context["option_value"], "image", array(), "array")) ? ("class=\"hidden\"") : (""));
                        echo ">
                      ";
                        // line 155
                        echo $this->getAttribute($context["option_value"], "name", array(), "array");
                        echo " 
                      ";
                        // line 156
                        if ($this->getAttribute($context["option_value"], "price", array(), "array")) {
                            echo " 
                      (";
                            // line 157
                            echo $this->getAttribute($context["option_value"], "price_prefix", array(), "array");
                            echo $this->getAttribute($context["option_value"], "price", array(), "array");
                            echo ")
                      ";
                        }
                        // line 158
                        echo " 
                      </span>
                    </label>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 162
                    echo " 
                </div>
              </div>
              ";
                }
                // line 165
                echo " 
              ";
                // line 166
                if (($this->getAttribute($context["option"], "type", array(), "array") == "text")) {
                    echo " 
              <div class=\"form-group";
                    // line 167
                    echo (($this->getAttribute($context["option"], "required", array(), "array")) ? (" required") : (""));
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 168
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array(), "array");
                    echo "</label>
                <input type=\"text\" name=\"option[";
                    // line 169
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array(), "array");
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array(), "array");
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\" class=\"form-control\" />
              </div>
              ";
                }
                // line 171
                echo " 
              ";
                // line 172
                if (($this->getAttribute($context["option"], "type", array(), "array") == "textarea")) {
                    echo " 
              <div class=\"form-group";
                    // line 173
                    echo (($this->getAttribute($context["option"], "required", array(), "array")) ? (" required") : (""));
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 174
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array(), "array");
                    echo "</label>
                <textarea name=\"option[";
                    // line 175
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array(), "array");
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array(), "array");
                    echo "</textarea>
              </div>
              ";
                }
                // line 177
                echo " 
              ";
                // line 178
                if (($this->getAttribute($context["option"], "type", array(), "array") == "file")) {
                    echo " 
              <div class=\"form-group";
                    // line 179
                    echo (($this->getAttribute($context["option"], "required", array(), "array")) ? (" required") : (""));
                    echo "\">
                <label class=\"control-label\">";
                    // line 180
                    echo $this->getAttribute($context["option"], "name", array(), "array");
                    echo "</label>
                <button type=\"button\" id=\"button-upload";
                    // line 181
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                <input type=\"hidden\" name=\"option[";
                    // line 182
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\" />
              </div>
              ";
                }
                // line 184
                echo " 
              ";
                // line 185
                if (($this->getAttribute($context["option"], "type", array(), "array") == "date")) {
                    echo " 
              <div class=\"form-group";
                    // line 186
                    echo (($this->getAttribute($context["option"], "required", array(), "array")) ? (" required") : (""));
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 187
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array(), "array");
                    echo "</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"option[";
                    // line 189
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array(), "array");
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              ";
                }
                // line 194
                echo " 
              ";
                // line 195
                if (($this->getAttribute($context["option"], "type", array(), "array") == "datetime")) {
                    echo " 
              <div class=\"form-group";
                    // line 196
                    echo (($this->getAttribute($context["option"], "required", array(), "array")) ? (" required") : (""));
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 197
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array(), "array");
                    echo "</label>
                <div class=\"input-group datetime\">
                  <input type=\"text\" name=\"option[";
                    // line 199
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array(), "array");
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              ";
                }
                // line 204
                echo " 
              ";
                // line 205
                if (($this->getAttribute($context["option"], "type", array(), "array") == "time")) {
                    echo " 
              <div class=\"form-group";
                    // line 206
                    echo (($this->getAttribute($context["option"], "required", array(), "array")) ? (" required") : (""));
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 207
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array(), "array");
                    echo "</label>
                <div class=\"input-group time\">
                  <input type=\"text\" name=\"option[";
                    // line 209
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array(), "array");
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array(), "array");
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              ";
                }
                // line 214
                echo " 
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo " 
              ";
        }
        // line 216
        echo " 
              ";
        // line 217
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            echo " 
              <hr>
              <h3>";
            // line 219
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
              <div class=\"form-group required\">
                <select name=\"recurring_id\" class=\"form-control\">
                  <option value=\"\">";
            // line 222
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                  ";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                echo " 
                  <option value=\"";
                // line 224
                echo $this->getAttribute($context["recurring"], "recurring_id", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array(), "array");
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo " 
                </select>
                <div class=\"help-block\" id=\"recurring-description\"></div>
              </div>
              ";
        }
        // line 229
        echo " 
              <div class=\"qty\">
                <label class=\"control-label\" for=\"input-quantity\">";
        // line 231
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
                <input type=\"number\" name=\"quantity\" value=\"";
        // line 232
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"5\" id=\"input-quantity\" class=\"form-control\" />
                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 233
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
              </div>
              ";
        // line 235
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            echo " 
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 236
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
              ";
        }
        // line 237
        echo " 
              <div class=\"cart\">
                <div class=\"button-cart\">
                  <button type=\"button\" class=\"btn btn-primary btn-block\" id=\"button-cart\" data-loading-text=\"";
        // line 240
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"> ";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo " </button>
                </div>
                <div class=\"btn-group\">
                  <button type=\"button\" class=\"btn btn-default\" onclick=\"btadd.wishlist('";
        // line 243
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"lnr lnr-heart\"></i> ";
        echo $this->env->getExtension('bt')->_strReplace("Add to", "", (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null));
        echo "</button>
                  <button type=\"button\" class=\"btn btn-default\" onclick=\"btadd.compare('";
        // line 244
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"lnr lnr-sync\"></i> ";
        echo $this->env->getExtension('bt')->_strReplace(" this Product", "", (isset($context["button_compare"]) ? $context["button_compare"] : null));
        echo "</button>
                </div>
              </div>
\t\t\t  ";
        // line 247
        if ($this->getAttribute((isset($context["boss_product"]) ? $context["boss_product"] : null), "sharing", array(), "array", true, true)) {
            // line 248
            echo "              <div class=\"sharing\"> 
                <!-- AddThis Button BEGIN -->
                <div class=\"addthis_toolbox addthis_default_style addthis_20x20_style\" data-addthis-title=\"";
            // line 250
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" data-addthis-description=\"";
            echo ($this->env->getExtension('bt')->_subStr($this->env->getExtension('bt')->_stripTags($this->env->getExtension('bt')->_htmlEntityDecode((isset($context["description"]) ? $context["description"] : null), twig_constant("ENT_QUOTES"), "UTF-8")), 0, 150) . "..");
            echo "\" data-addthis-media=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\"><a class=\"addthis_button_facebook\"></a> <a class=\"addthis_button_twitter\"></a> <a class=\"addthis_button_google_plusone_share\"></a><a class=\"addthis_button_pinterest_share\"></a><a class=\"addthis_button_email\"></a><a class=\"addthis_button_compact\"></a><a class=\"addthis_counter addthis_bubble_style\"></a></div>
                <script type=\"text/javascript\">
\t\t\t\t\$(\".sharing\").find('[data-addthis-title]').each(function(index){
\t\t\t\t\t\$(this).attr(\"addthis:title\",\$(this).attr(\"data-addthis-title\"));
\t\t\t\t\t\$(this).removeAttr('data-addthis-title');
\t\t\t\t\t
\t\t\t\t\t\$(this).attr(\"addthis:description\",\$(this).attr(\"data-addthis-description\"));
\t\t\t\t\t\$(this).removeAttr('data-addthis-description');
\t\t\t\t\t
\t\t\t\t\t\$(this).attr(\"addthis:media\",\$(this).attr(\"data-addthis-media\"));
\t\t\t\t\t\$(this).removeAttr('data-addthis-media');
\t\t\t\t});
\t\t\t\t</script> 
                <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js\"></script> 
                <!-- AddThis Button END --> 
              </div>
\t\t\t  ";
        }
        // line 267
        echo "              ";
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            echo " 
              <div class=\"tag\"><span class=\"tag-heading\">";
            // line 268
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</span>
                ";
            // line 269
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                echo " 
                <a href=\"";
                // line 270
                echo $this->getAttribute($context["tag"], "href", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["tag"], "tag", array(), "array");
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            echo " 
              </div>
              ";
        }
        // line 273
        echo " 
            </div>
          </div>
        </div>
        <div id=\"product-description\">
          ";
        // line 278
        if (($this->getAttribute((isset($context["boss_product"]) ? $context["boss_product"] : null), "description", array(), "array", true, true) && ($this->getAttribute((isset($context["boss_product"]) ? $context["boss_product"] : null), "description", array(), "array") == "tab"))) {
            echo " 
          <div class=\"nav-heading\">
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
            // line 281
            echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
            echo "</a></li>
              ";
            // line 282
            if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
                echo " 
              <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
                // line 283
                echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
                echo "</a></li>
              ";
            }
            // line 284
            echo " 
              ";
            // line 285
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                echo " 
              <li><a href=\"#tab-review\" data-toggle=\"tab\">";
                // line 286
                echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
                echo "</a></li>
              ";
            }
            // line 287
            echo " 
            </ul>
          </div>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\" itemprop=\"description\">";
            // line 291
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
            ";
            // line 292
            if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
                echo " 
            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
                // line 295
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                    echo " 
                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                    // line 298
                    echo $this->getAttribute($context["attribute_group"], "name", array(), "array");
                    echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                  ";
                    // line 302
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        echo " 
                  <tr>
                    <td>";
                        // line 304
                        echo $this->getAttribute($context["attribute"], "name", array(), "array");
                        echo "</td>
                    <td>";
                        // line 305
                        echo $this->getAttribute($context["attribute"], "text", array(), "array");
                        echo "</td>
                  </tr>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 307
                    echo " 
                </tbody>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 309
                echo " 
              </table>
            </div>
            ";
            }
            // line 312
            echo " 
            ";
            // line 313
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                echo " 
            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
                // line 317
                echo (isset($context["text_write"]) ? $context["text_write"] : null);
                echo "</h2>
                ";
                // line 318
                if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                    echo " 
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                    // line 321
                    echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                    echo "</label>
                    <input type=\"text\" name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                    // line 327
                    echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                    echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                    // line 329
                    echo (isset($context["text_note"]) ? $context["text_note"] : null);
                    echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                    // line 334
                    echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                    echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                    // line 335
                    echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                    echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                    // line 345
                    echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                    echo "</div>
                </div>
                ";
                    // line 347
                    echo (isset($context["captcha"]) ? $context["captcha"] : null);
                    echo " 
                <div class=\"buttons\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                    // line 350
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-primary\">";
                    echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                    echo "</button>
                  </div>
                </div>
                ";
                } else {
                    // line 353
                    echo " 
                ";
                    // line 354
                    echo (isset($context["text_login"]) ? $context["text_login"] : null);
                    echo " 
                ";
                }
                // line 355
                echo " 
              </form>
            </div>
            ";
            }
            // line 358
            echo " 
          </div>
          ";
        } else {
            // line 360
            echo " 
          <div class=\"panel-group\" id=\"accordion\">
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\"> <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-description\">";
            // line 364
            echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
            echo "</a> </h4>
              </div>
              <div id=\"collapse-description\" class=\"panel-collapse collapse in\">
                <div class=\"panel-body\" itemprop=\"description\">";
            // line 367
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
              </div>
            </div>
            ";
            // line 370
            if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
                echo " 
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\"> <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-specification\">";
                // line 373
                echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
                echo "</a> </h4>
              </div>
              <div id=\"collapse-specification\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <table class=\"table table-bordered\">
                    ";
                // line 378
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                    echo " 
                    <thead>
                      <tr>
                        <td colspan=\"2\"><strong>";
                    // line 381
                    echo $this->getAttribute($context["attribute_group"], "name", array(), "array");
                    echo "</strong></td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
                    // line 385
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        echo " 
                      <tr>
                        <td>";
                        // line 387
                        echo $this->getAttribute($context["attribute"], "name", array(), "array");
                        echo "</td>
                        <td>";
                        // line 388
                        echo $this->getAttribute($context["attribute"], "text", array(), "array");
                        echo "</td>
                      </tr>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 390
                    echo " 
                    </tbody>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 392
                echo " 
                  </table>
                </div>
              </div>
            </div>
            ";
            }
            // line 397
            echo " 
            ";
            // line 398
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                echo " 
            <div class=\"panel panel-default\">
              <div class=\"panel-heading\">
                <h4 class=\"panel-title\"> <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-review\">";
                // line 401
                echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
                echo "</a> </h4>
              </div>
              <div id=\"collapse-review\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                  <form class=\"form-horizontal\" id=\"form-review\">
                    <div id=\"review\"></div>
                    <h2>";
                // line 407
                echo (isset($context["text_write"]) ? $context["text_write"] : null);
                echo "</h2>
                    ";
                // line 408
                if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                    echo " 
                    <div class=\"form-group required\">
                      <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-name\">";
                    // line 411
                    echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                    echo "</label>
                        <input type=\"text\" name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-review\">";
                    // line 417
                    echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                    echo "</label>
                        <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                        <div class=\"help-block\">";
                    // line 419
                    echo (isset($context["text_note"]) ? $context["text_note"] : null);
                    echo "</div>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <div class=\"col-sm-12\">
                        <label class=\"control-label\">";
                    // line 424
                    echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                    echo "</label>
                        &nbsp;&nbsp;&nbsp; ";
                    // line 425
                    echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                    echo "&nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"1\" />
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"2\" />
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"3\" />
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"4\" />
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"5\" />
                        &nbsp;";
                    // line 435
                    echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                    echo "</div>
                    </div>
                    ";
                    // line 437
                    echo (isset($context["captcha"]) ? $context["captcha"] : null);
                    echo " 
                    <div class=\"buttons\">
                      <div class=\"pull-right\">
                        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                    // line 440
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-primary\">";
                    echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                    echo "</button>
                      </div>
                    </div>
                    ";
                } else {
                    // line 443
                    echo " 
                    ";
                    // line 444
                    echo (isset($context["text_login"]) ? $context["text_login"] : null);
                    echo " 
                    ";
                }
                // line 445
                echo " 
                  </form>
                </div>
              </div>
            </div>
            ";
            }
            // line 450
            echo " 
          </div>
          ";
        }
        // line 452
        echo " 
        </div>
      </div>
      ";
        // line 455
        if (((isset($context["products"]) ? $context["products"] : null) && $this->getAttribute((isset($context["boss_product"]) ? $context["boss_product"] : null), "related", array(), "array", true, true))) {
            // line 456
            echo "      ";
            if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                echo " 
      ";
                // line 457
                $context["per_row"] = 2;
                echo " 
      ";
            } elseif ((            // line 458
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                echo " 
      ";
                // line 459
                $context["per_row"] = 3;
                echo " 
      ";
            } else {
                // line 460
                echo " 
      ";
                // line 461
                $context["per_row"] = 4;
                echo " 
      ";
            }
            // line 462
            echo " 
      <div class=\"related-title\">
        <h2>";
            // line 464
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h2>
      </div>
      <div id=\"product-related\" class=\"owl-carousel-2 owl-theme-2 nav-middle nav-visible\">
        ";
            // line 467
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
        <div class=\"product-layout product-related\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 470
                echo $this->getAttribute($context["product"], "href", array(), "array");
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "\" class=\"img-responsive\" /></a>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"btadd.cart('";
                // line 472
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array(), "array");
                echo "');\"><i class=\"lnr lnr-cart\"></i> <span>";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 473
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"btadd.wishlist('";
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "');\"><i class=\"lnr lnr-heart\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 474
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"btadd.compare('";
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "');\"><i class=\"lnr lnr-sync\"></i></button>
              </div>
            </div>
            <div class=\"caption\">
              <h4 class=\"name\"><a href=\"";
                // line 478
                echo $this->getAttribute($context["product"], "href", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "</a></h4>
              <p class=\"price\">
                ";
                // line 480
                if ( !$this->getAttribute($context["product"], "special", array(), "array")) {
                    echo " 
                ";
                    // line 481
                    echo $this->getAttribute($context["product"], "price", array(), "array");
                    echo " 
                ";
                } else {
                    // line 482
                    echo " 
                <span class=\"price-new\">";
                    // line 483
                    echo $this->getAttribute($context["product"], "special", array(), "array");
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array(), "array");
                    echo "</span>
                ";
                }
                // line 484
                echo " 
                ";
                // line 485
                if ($this->getAttribute($context["product"], "tax", array(), "array")) {
                    echo " 
                <span class=\"price-tax\">";
                    // line 486
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array(), "array");
                    echo "</span>
                ";
                }
                // line 487
                echo " 
              </p>
              ";
                // line 489
                if ($this->getAttribute($context["product"], "rating", array(), "array")) {
                    echo " 
              <div class=\"rating\">
                ";
                    // line 491
                    $context["i"] = 1;
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo " 
                ";
                        // line 492
                        if (($this->getAttribute($context["product"], "rating", array(), "array") < $context["i"])) {
                            echo " 
                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                        } else {
                            // line 494
                            echo " 
                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                ";
                        }
                        // line 496
                        echo " 
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 497
                    echo " 
              </div>
              ";
                }
                // line 499
                echo " 
            </div>
            ";
                // line 501
                if ($this->getAttribute($context["product"], "special", array(), "array")) {
                    echo " 
            <div class=\"save-off\">";
                    // line 502
                    echo (isset($context["text_save_off"]) ? $context["text_save_off"] : null);
                    echo "</div>
            ";
                }
                // line 503
                echo " 
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 506
            echo " 
      </div>
      ";
        }
        // line 508
        echo " 
      ";
        // line 509
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 510
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 512
        if ((isset($context["products"]) ? $context["products"] : null)) {
            echo " 
<script type=\"text/javascript\">
\$(function() {
\tif (\$('html').attr('dir') == 'rtl') {
\t\tvar rtl = true;
\t} else {
\t\tvar rtl = false;
\t}
\t
\tvar elm = \$('#product-related');
\tvar loop = (elm.children().length > ";
            // line 522
            echo (isset($context["per_row"]) ? $context["per_row"] : null);
            echo ") ? true : false;
\t
\telm.owlCarousel2({
\t\titems: 3,
\t\tloop: loop,
\t\tnav: true,
\t\tnavText: ['<img src=\"data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iNDIiIHZpZXdCb3g9IjAgMCAyNCA0MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMjIuNDU3MjA3NCAxLjAwNzQ2MTQ3bC0yMSAyMC4wMjQ4MjE0MyAyMC45NDc5Mzk3IDE5Ljk3NTE3ODYiIHN0cm9rZT0iIzJEMkQyRCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==\" />', '<img src=\"data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iNDIiIHZpZXdCb3g9IjAgMCAyNCA0MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMS40NTY3OSAxLjAwNzQ2MTQ3bDIxIDIwLjAyNDgyMTQzTDEuNTA4ODUgNDEuMDA3NDYxNSIgc3Ryb2tlPSIjMkQyRDJEIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+\" />'],
\t\tdots: false,
\t\tmargin: 20,
\t\trtl: rtl,
\t\tresponsive:{
\t\t\t992: {
\t\t\t\titems: ";
            // line 534
            echo (isset($context["per_row"]) ? $context["per_row"] : null);
            echo " 
\t\t\t},
\t\t\t768: {
\t\t\t\titems: ";
            // line 537
            echo $this->env->getExtension('bt')->_Round(((isset($context["per_row"]) ? $context["per_row"] : null) / 2));
            echo " 
\t\t\t},
\t\t\t560: {
\t\t\t\titems: ";
            // line 540
            echo $this->env->getExtension('bt')->_Round(((isset($context["per_row"]) ? $context["per_row"] : null) / 2));
            echo " 
\t\t\t},
\t\t\t0: {
\t\t\t\titems: 1
\t\t\t}
\t\t}
\t});
});
</script>
";
        }
        // line 549
        echo " 
";
        // line 550
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            echo " 
<script type=\"text/javascript\">
\$(function() {
\t\$('#product-thumb .image-item').zoom({
\t\tresponsive: {
\t\t\t767: {
\t\t\t\ton: 'click',
\t\t\t\ttouch: false
\t\t\t}
\t\t}
\t});
});

\$('input[data-image=\"true\"]').each(function(index, element) {
\tvar name = \$(this).attr('name');
\tvar type = \$(this).attr('type');
\t
\t\$(this).addClass('hidden');
\t
\tif (type == 'radio') {
\t\t\$(this).on('change', function(e) {
\t\t\t\$('input[name=\"' + name + '\"]').next('img').removeClass('active');
\t\t\t
\t\t\tif (\$(this).is(':checked')) {
\t\t\t\t\$(this).next('img').addClass('active');
\t\t\t}
\t\t});
\t} else if (type == 'checkbox') {
\t\t\$(this).on('change', function(e) {
\t\t\tif (\$(this).is(':checked')) {
\t\t\t\t\$(this).next('img').addClass('active');
\t\t\t} else {
\t\t\t\t\$(this).next('img').removeClass('active');
\t\t\t}
\t\t});
\t}
});
</script>
";
        }
        // line 588
        echo " 
<script type=\"text/javascript\"><!--
var ajax;
\$(function() {if (\$('#product [name=\\'quantity\\']').val() > 1) getPrice()});
\$(document).on('change','[name^=\\'option[\\']', getPrice);
\$(document).on('keyup','[name=\\'quantity\\']', function() {
\tif (!isNaN(this.value) && this.value > 0) getPrice();
});

function getPrice() {
\tvar index = \$('#product-price');
\t
\tif (ajax) ajax.abort();
\tajax = \$.ajax({
\t\turl: 'index.php?route=bossthemes/utilities/optionPrice',
\t\ttype: 'get',
\t\tdata: \$('#product [type=\\'checkbox\\']:checked, #product [type=\\'radio\\']:checked, #product select, #product [name=\\'product_id\\'], #product [name=\\'quantity\\']'),
\t\tdataType: 'json',
\t\tsuccess: function(response) {
\t\t\t\$('.price-main', index).text(response.price);
\t\t\t\$('.price-old', index).text(response.price);
\t\t\t\$('.price-new', index).text(response.special);
\t\t\t\$('.price-tax', index).text(response.ex_tax);
\t\t\t\$('.price-reward', index).text(response.points);
\t\t}
\t});
}
//--></script> 
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=bossthemes/boss_add/cart/',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'number\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\taddNotice(json, 'index.php?route=checkout/checkout');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"lnr lnr-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 765
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 769
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-success, .alert-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/product/product/product_4.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1875 => 769,  1868 => 765,  1689 => 588,  1647 => 550,  1644 => 549,  1631 => 540,  1625 => 537,  1619 => 534,  1604 => 522,  1591 => 512,  1586 => 510,  1582 => 509,  1579 => 508,  1574 => 506,  1565 => 503,  1560 => 502,  1556 => 501,  1552 => 499,  1547 => 497,  1540 => 496,  1535 => 494,  1529 => 492,  1522 => 491,  1517 => 489,  1513 => 487,  1506 => 486,  1502 => 485,  1499 => 484,  1492 => 483,  1489 => 482,  1484 => 481,  1480 => 480,  1473 => 478,  1464 => 474,  1458 => 473,  1450 => 472,  1441 => 470,  1433 => 467,  1427 => 464,  1423 => 462,  1418 => 461,  1415 => 460,  1410 => 459,  1406 => 458,  1402 => 457,  1397 => 456,  1395 => 455,  1390 => 452,  1385 => 450,  1377 => 445,  1372 => 444,  1369 => 443,  1360 => 440,  1354 => 437,  1349 => 435,  1336 => 425,  1332 => 424,  1324 => 419,  1319 => 417,  1310 => 411,  1304 => 408,  1300 => 407,  1291 => 401,  1285 => 398,  1282 => 397,  1274 => 392,  1266 => 390,  1257 => 388,  1253 => 387,  1246 => 385,  1239 => 381,  1231 => 378,  1223 => 373,  1217 => 370,  1211 => 367,  1205 => 364,  1199 => 360,  1194 => 358,  1188 => 355,  1183 => 354,  1180 => 353,  1171 => 350,  1165 => 347,  1160 => 345,  1147 => 335,  1143 => 334,  1135 => 329,  1130 => 327,  1121 => 321,  1115 => 318,  1111 => 317,  1104 => 313,  1101 => 312,  1095 => 309,  1087 => 307,  1078 => 305,  1074 => 304,  1067 => 302,  1060 => 298,  1052 => 295,  1046 => 292,  1042 => 291,  1036 => 287,  1031 => 286,  1027 => 285,  1024 => 284,  1019 => 283,  1015 => 282,  1011 => 281,  1005 => 278,  998 => 273,  993 => 271,  983 => 270,  977 => 269,  973 => 268,  968 => 267,  944 => 250,  940 => 248,  938 => 247,  930 => 244,  924 => 243,  916 => 240,  911 => 237,  906 => 236,  902 => 235,  897 => 233,  893 => 232,  889 => 231,  885 => 229,  878 => 225,  868 => 224,  862 => 223,  858 => 222,  852 => 219,  847 => 217,  844 => 216,  840 => 215,  833 => 214,  820 => 209,  813 => 207,  809 => 206,  805 => 205,  802 => 204,  789 => 199,  782 => 197,  778 => 196,  774 => 195,  771 => 194,  758 => 189,  751 => 187,  747 => 186,  743 => 185,  740 => 184,  732 => 182,  724 => 181,  720 => 180,  716 => 179,  712 => 178,  709 => 177,  697 => 175,  691 => 174,  687 => 173,  683 => 172,  680 => 171,  668 => 169,  662 => 168,  658 => 167,  654 => 166,  651 => 165,  645 => 162,  635 => 158,  629 => 157,  625 => 156,  621 => 155,  617 => 154,  614 => 153,  598 => 152,  594 => 151,  586 => 150,  581 => 148,  575 => 147,  571 => 146,  567 => 145,  563 => 144,  559 => 143,  556 => 142,  550 => 139,  540 => 135,  534 => 134,  530 => 133,  526 => 132,  522 => 131,  519 => 130,  503 => 129,  499 => 128,  491 => 127,  486 => 125,  480 => 124,  476 => 123,  472 => 122,  468 => 121,  464 => 120,  461 => 119,  455 => 116,  447 => 114,  441 => 113,  437 => 112,  431 => 111,  425 => 110,  421 => 109,  415 => 108,  409 => 107,  405 => 106,  401 => 105,  395 => 104,  391 => 103,  387 => 102,  382 => 99,  375 => 98,  371 => 97,  365 => 96,  362 => 95,  353 => 94,  349 => 93,  343 => 92,  339 => 90,  331 => 88,  328 => 87,  321 => 86,  316 => 84,  310 => 82,  303 => 81,  297 => 78,  294 => 77,  289 => 75,  285 => 74,  275 => 73,  269 => 72,  265 => 71,  262 => 70,  255 => 69,  251 => 68,  248 => 67,  241 => 66,  237 => 65,  234 => 64,  225 => 63,  222 => 62,  215 => 61,  211 => 60,  206 => 58,  202 => 57,  198 => 56,  195 => 55,  190 => 54,  187 => 53,  182 => 52,  178 => 51,  174 => 49,  168 => 46,  155 => 44,  148 => 42,  145 => 41,  135 => 39,  130 => 37,  124 => 34,  120 => 33,  117 => 32,  112 => 31,  109 => 30,  104 => 29,  100 => 28,  92 => 25,  89 => 24,  84 => 23,  81 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  53 => 12,  43 => 11,  37 => 10,  31 => 6,  26 => 5,  19 => 1,);
    }
}
/* {% if (thumb or images or products) %} */
/* <script src="catalog/view/javascript/bossthemes/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/bossthemes/jquery.zoom.min.js"></script>*/
/* <link href="catalog/view/javascript/bossthemes/owl-carousel/owl.carousel.min.css" type="text/css" rel="stylesheet" media="screen" />*/
/* <link href="catalog/view/theme/{{ template_directory }}/stylesheet/bossthemes/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />*/
/* {% endif %} */
/* <div class="bt-breadcrumb">*/
/*   <div class="container">*/
/*     <ul class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %} */
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb['href'] }}" itemprop="url"><span itemprop="title">{{ breadcrumb['text'] }}</span></a></li>*/
/*       {% endfor %} */
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* <div class="container">*/
/*   <div class="row">{{ column_left }} */
/*     {% if (column_left and column_right) %} */
/*     {% set class = 'col-sm-6' %} */
/*     {% elseif (column_left or column_right) %} */
/*     {% set class = 'col-sm-9' %} */
/*     {% else %} */
/*     {% set class = 'col-sm-12' %} */
/*     {% endif %} */
/*     <div id="content" class="{{ class }}">{{ content_top }} */
/*       <div itemscope itemtype="http://schema.org/Product">*/
/*         <div class="row product-info product-4">*/
/*           {% if (column_left or column_right) %} */
/*           {% set class = 'col-sm-6' %} */
/*           {% else %} */
/*           {% set class = 'col-sm-7' %} */
/*           {% endif %} */
/*           <div class="{{ class }}">*/
/*             {% if (thumb or images) %} */
/*             <div class="product-thumb" id="product-thumb">*/
/*               <div class="row">*/
/*                 {% if (popup) %} */
/*                 <div class="col-sm-6">*/
/*                   <div class="image-item"><img src="{{ popup }}" class="product-image" title="{{ heading_title }}" alt="{{ heading_title }}"/></div>*/
/*                 </div>*/
/*                 {% endif %} */
/*                 {% for image in images %} */
/*                 <div class="col-sm-6">*/
/*                   <div class="image-item"><img src="{{ image['popup'] }}" class="product-image" title="{{ heading_title }}" alt="{{ heading_title }}" /></div>*/
/*                 </div>*/
/*                 {% endfor %} */
/*               </div>*/
/*             </div>*/
/*             {% endif %} */
/*           </div>*/
/*           {% if (column_left or column_right) %} */
/*           {% set class = 'col-sm-6' %} */
/*           {% else %} */
/*           {% set class = 'col-sm-5' %} */
/*           {% endif %} */
/*           <div class="{{ class }}">*/
/*             <h1 itemprop="name">{{ heading_title }}</h1>*/
/*             {% if (price) %} */
/*             <ul id="product-price" class="list-unstyled price-box">*/
/*               {% if (not special) %} */
/*               <li class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price-main" itemprop="price">{{ price }}</span><span itemprop="availability" content="{{ stock }}"></span></li>*/
/*               {% else %} */
/*               <li class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price-old">{{ price }}</span> <span class="price-new" itemprop="price">{{ special }}<span itemprop="availability" content="{{ stock }}"></span></span></li>*/
/*               {% endif %} */
/*               {% if (tax) %} */
/*               <li>{{ text_tax }} <span class="price-tax">{{ tax }}</span></li>*/
/*               {% endif %} */
/*               {% if (points) %} */
/*               <li>{{ text_points }} <span class="price-reward">{{ points }}</span></li>*/
/*               {% endif %} */
/*               {% if (discounts) %} */
/*               {% for discount in discounts %} */
/*               <li>{{ discount['quantity'] }}{{ text_discount }}{{ discount['price'] }}</li>*/
/*               {% endfor %} */
/*               {% endif %} */
/*             </ul>*/
/*             {% endif %} */
/*             {% if (review_status) %} */
/*             <div class="rating">*/
/*               <p>*/
/*                 {% set i = 1 %}{% for i in i..5 %} */
/*                 {% if (rating < i) %} */
/*                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                 {% else %} */
/*                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                 {% endif %} */
/*                 {% endfor %} */
/*                 <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); $('html, body').animate({ scrollTop: $('#tab-review').offset().top }, 'slow'); return false;">{{ reviews }}</a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); $('html, body').animate({ scrollTop: $('#tab-review').offset().top }, 'slow'); return false;">{{ text_write }}</a></p>*/
/*             </div>*/
/*             {% endif %} */
/*             <ul class="list-unstyled description">*/
/*               <li><b>{{ text_stock }}</b> {{ stock }}</li>*/
/*               {% if (manufacturer) %} */
/*               <li><b>{{ text_manufacturer }}</b> <a href="{{ manufacturers }}"><span itemprop="brand">{{ manufacturer }}</span></a></li>*/
/*               {% endif %} */
/*               <li><b>{{ text_model }}</b> <span itemprop="mpn">{{ model }}</span></li>*/
/*               {% if (reward) %} */
/*               <li><b>{{ text_reward }}</b> {{ reward }}</li>*/
/*               {% endif %} */
/*             </ul>*/
/*             <div id="product">*/
/*               {% if (options) %} */
/*               <h3>{{ text_option }}</h3>*/
/*               {% for option in options %} */
/*               {% if (option['type'] == 'select') %} */
/*               <div class="form-group{{ option['required'] ? ' required' : '' }}">*/
/*                 <label class="control-label" for="input-option{{ option['product_option_id'] }}">{{ option['name'] }}</label>*/
/*                 <select name="option[{{ option['product_option_id'] }}]" id="input-option{{ option['product_option_id'] }}" class="form-control">*/
/*                   <option value="">{{ text_select }}</option>*/
/*                   {% for option_value in option['product_option_value'] %} */
/*                   <option value="{{ option_value['product_option_value_id'] }}">{{ option_value['name'] }} */
/*                   {% if (option_value['price']) %} */
/*                   ({{ option_value['price_prefix'] }}{{ option_value['price'] }})*/
/*                   {% endif %} */
/*                   </option>*/
/*                   {% endfor %} */
/*                 </select>*/
/*               </div>*/
/*               {% endif %} */
/*               {% if (option['type'] == 'radio') %} */
/*               <div class="form-group{{ option['required'] ? ' required' : '' }}">*/
/*                 <label class="control-label">{{ option['name'] }}</label>*/
/*                 <div id="input-option{{ option['product_option_id'] }}">*/
/*                   {% for option_value in option['product_option_value'] %} */
/*                   <div class="radio {{ option_value['image'] ? 'radio-inline has-image' : '' }}">*/
/*                     <label>*/
/*                       <input type="radio" name="option[{{ option['product_option_id'] }}]" value="{{ option_value['product_option_value_id'] }}" data-image="{{ option_value['image'] ? 'true' : 'false' }}" />*/
/*                       {% if (option_value['image']) %} */
/*                       <img src="{{ option_value['image'] }}" alt="{{ option_value['name'] ~ option_value['price'] ? ' ' ~ option_value['price_prefix'] ~ option_value['price'] : '' }}" class="img-option" data-toggle="tooltip" title="{{ option_value['name'] }} {% if (option_value['price']) %} ({{ option_value['price_prefix'] }}{{ option_value['price'] }}) {% endif %}" />*/
/*                       {% endif %} */
/*                       <span {{ option_value['image'] ? 'class="hidden"' : '' }}>*/
/*                       {{ option_value['name'] }} */
/*                       {% if (option_value['price']) %} */
/*                       ({{ option_value['price_prefix'] }}{{ option_value['price'] }})*/
/*                       {% endif %} */
/*                       </span>*/
/*                     </label>*/
/*                   </div>*/
/*                   {% endfor %} */
/*                 </div>*/
/*               </div>*/
/*               {% endif %} */
/*               {% if (option['type'] == 'checkbox') %} */
/*               <div class="form-group{{ option['required'] ? ' required' : '' }}">*/
/*                 <label class="control-label">{{ option['name'] }}</label>*/
/*                 <div id="input-option{{ option['product_option_id'] }}">*/
/*                   {% for option_value in option['product_option_value'] %} */
/*                   <div class="checkbox {{ option_value['image'] ? 'checkbox-inline has-image' : '' }}">*/
/*                     <label>*/
/*                       <input type="checkbox" name="option[{{ option['product_option_id'] }}][]" value="{{ option_value['product_option_value_id'] }}" data-image="{{ option_value['image'] ? 'true' : 'false' }}" />*/
/*                       {% if (option_value['image']) %} */
/*                       <img src="{{ option_value['image'] }}" alt="{{ option_value['name'] ~ option_value['price'] ? ' ' ~ option_value['price_prefix'] ~ option_value['price'] : '' }}" class="img-option" data-toggle="tooltip" title="{{ option_value['name'] }} {% if (option_value['price']) %} ({{ option_value['price_prefix'] }}{{ option_value['price'] }}) {% endif %}" />*/
/*                       {% endif %} */
/*                       <span {{ option_value['image'] ? 'class="hidden"' : '' }}>*/
/*                       {{ option_value['name'] }} */
/*                       {% if (option_value['price']) %} */
/*                       ({{ option_value['price_prefix'] }}{{ option_value['price'] }})*/
/*                       {% endif %} */
/*                       </span>*/
/*                     </label>*/
/*                   </div>*/
/*                   {% endfor %} */
/*                 </div>*/
/*               </div>*/
/*               {% endif %} */
/*               {% if (option['type'] == 'text') %} */
/*               <div class="form-group{{ option['required'] ? ' required' : '' }}">*/
/*                 <label class="control-label" for="input-option{{ option['product_option_id'] }}">{{ option['name'] }}</label>*/
/*                 <input type="text" name="option[{{ option['product_option_id'] }}]" value="{{ option['value'] }}" placeholder="{{ option['name'] }}" id="input-option{{ option['product_option_id'] }}" class="form-control" />*/
/*               </div>*/
/*               {% endif %} */
/*               {% if (option['type'] == 'textarea') %} */
/*               <div class="form-group{{ option['required'] ? ' required' : '' }}">*/
/*                 <label class="control-label" for="input-option{{ option['product_option_id'] }}">{{ option['name'] }}</label>*/
/*                 <textarea name="option[{{ option['product_option_id'] }}]" rows="5" placeholder="{{ option['name'] }}" id="input-option{{ option['product_option_id'] }}" class="form-control">{{ option['value'] }}</textarea>*/
/*               </div>*/
/*               {% endif %} */
/*               {% if (option['type'] == 'file') %} */
/*               <div class="form-group{{ option['required'] ? ' required' : '' }}">*/
/*                 <label class="control-label">{{ option['name'] }}</label>*/
/*                 <button type="button" id="button-upload{{ option['product_option_id'] }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                 <input type="hidden" name="option[{{ option['product_option_id'] }}]" value="" id="input-option{{ option['product_option_id'] }}" />*/
/*               </div>*/
/*               {% endif %} */
/*               {% if (option['type'] == 'date') %} */
/*               <div class="form-group{{ option['required'] ? ' required' : '' }}">*/
/*                 <label class="control-label" for="input-option{{ option['product_option_id'] }}">{{ option['name'] }}</label>*/
/*                 <div class="input-group date">*/
/*                   <input type="text" name="option[{{ option['product_option_id'] }}]" value="{{ option['value'] }}" data-date-format="YYYY-MM-DD" id="input-option{{ option['product_option_id'] }}" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                   </span></div>*/
/*               </div>*/
/*               {% endif %} */
/*               {% if (option['type'] == 'datetime') %} */
/*               <div class="form-group{{ option['required'] ? ' required' : '' }}">*/
/*                 <label class="control-label" for="input-option{{ option['product_option_id'] }}">{{ option['name'] }}</label>*/
/*                 <div class="input-group datetime">*/
/*                   <input type="text" name="option[{{ option['product_option_id'] }}]" value="{{ option['value'] }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option['product_option_id'] }}" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                   </span></div>*/
/*               </div>*/
/*               {% endif %} */
/*               {% if (option['type'] == 'time') %} */
/*               <div class="form-group{{ option['required'] ? ' required' : '' }}">*/
/*                 <label class="control-label" for="input-option{{ option['product_option_id'] }}">{{ option['name'] }}</label>*/
/*                 <div class="input-group time">*/
/*                   <input type="text" name="option[{{ option['product_option_id'] }}]" value="{{ option['value'] }}" data-date-format="HH:mm" id="input-option{{ option['product_option_id'] }}" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                   </span></div>*/
/*               </div>*/
/*               {% endif %} */
/*               {% endfor %} */
/*               {% endif %} */
/*               {% if (recurrings) %} */
/*               <hr>*/
/*               <h3>{{ text_payment_recurring }}</h3>*/
/*               <div class="form-group required">*/
/*                 <select name="recurring_id" class="form-control">*/
/*                   <option value="">{{ text_select }}</option>*/
/*                   {% for recurring in recurrings %} */
/*                   <option value="{{ recurring['recurring_id'] }}">{{ recurring['name'] }}</option>*/
/*                   {% endfor %} */
/*                 </select>*/
/*                 <div class="help-block" id="recurring-description"></div>*/
/*               </div>*/
/*               {% endif %} */
/*               <div class="qty">*/
/*                 <label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/*                 <input type="number" name="quantity" value="{{ minimum }}" size="5" id="input-quantity" class="form-control" />*/
/*                 <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*               </div>*/
/*               {% if (minimum > 1) %} */
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*               {% endif %} */
/*               <div class="cart">*/
/*                 <div class="button-cart">*/
/*                   <button type="button" class="btn btn-primary btn-block" id="button-cart" data-loading-text="{{ text_loading }}"> {{ button_cart }} </button>*/
/*                 </div>*/
/*                 <div class="btn-group">*/
/*                   <button type="button" class="btn btn-default" onclick="btadd.wishlist('{{ product_id }}');"><i class="lnr lnr-heart"></i> {{ str_replace('Add to', '', button_wishlist) }}</button>*/
/*                   <button type="button" class="btn btn-default" onclick="btadd.compare('{{ product_id }}');"><i class="lnr lnr-sync"></i> {{ str_replace(' this Product', '', button_compare) }}</button>*/
/*                 </div>*/
/*               </div>*/
/* 			  {% if (boss_product['sharing'] is defined) %}*/
/*               <div class="sharing"> */
/*                 <!-- AddThis Button BEGIN -->*/
/*                 <div class="addthis_toolbox addthis_default_style addthis_20x20_style" data-addthis-title="{{ heading_title }}" data-addthis-description="{{ substr(strip_tags(html_entity_decode(description, constant('ENT_QUOTES'), 'UTF-8')), 0, 150) ~ '..' }}" data-addthis-media="{{ popup }}"><a class="addthis_button_facebook"></a> <a class="addthis_button_twitter"></a> <a class="addthis_button_google_plusone_share"></a><a class="addthis_button_pinterest_share"></a><a class="addthis_button_email"></a><a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a></div>*/
/*                 <script type="text/javascript">*/
/* 				$(".sharing").find('[data-addthis-title]').each(function(index){*/
/* 					$(this).attr("addthis:title",$(this).attr("data-addthis-title"));*/
/* 					$(this).removeAttr('data-addthis-title');*/
/* 					*/
/* 					$(this).attr("addthis:description",$(this).attr("data-addthis-description"));*/
/* 					$(this).removeAttr('data-addthis-description');*/
/* 					*/
/* 					$(this).attr("addthis:media",$(this).attr("data-addthis-media"));*/
/* 					$(this).removeAttr('data-addthis-media');*/
/* 				});*/
/* 				</script> */
/*                 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js"></script> */
/*                 <!-- AddThis Button END --> */
/*               </div>*/
/* 			  {% endif %}*/
/*               {% if (tags) %} */
/*               <div class="tag"><span class="tag-heading">{{ text_tags }}</span>*/
/*                 {% for tag in tags %} */
/*                 <a href="{{ tag['href'] }}">{{ tag['tag'] }}</a>*/
/*                 {% endfor %} */
/*               </div>*/
/*               {% endif %} */
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div id="product-description">*/
/*           {% if (boss_product['description'] is defined and boss_product['description'] == 'tab') %} */
/*           <div class="nav-heading">*/
/*             <ul class="nav nav-tabs">*/
/*               <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*               {% if (attribute_groups) %} */
/*               <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*               {% endif %} */
/*               {% if (review_status) %} */
/*               <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*               {% endif %} */
/*             </ul>*/
/*           </div>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-description" itemprop="description">{{ description }}</div>*/
/*             {% if (attribute_groups) %} */
/*             <div class="tab-pane" id="tab-specification">*/
/*               <table class="table table-bordered">*/
/*                 {% for attribute_group in attribute_groups %} */
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group['name'] }}</strong></td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                   {% for attribute in attribute_group['attribute'] %} */
/*                   <tr>*/
/*                     <td>{{ attribute['name'] }}</td>*/
/*                     <td>{{ attribute['text'] }}</td>*/
/*                   </tr>*/
/*                   {% endfor %} */
/*                 </tbody>*/
/*                 {% endfor %} */
/*               </table>*/
/*             </div>*/
/*             {% endif %} */
/*             {% if (review_status) %} */
/*             <div class="tab-pane" id="tab-review">*/
/*               <form class="form-horizontal" id="form-review">*/
/*                 <div id="review"></div>*/
/*                 <h2>{{ text_write }}</h2>*/
/*                 {% if (review_guest) %} */
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                     <input type="text" name="name" value="" id="input-name" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                     <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                     <div class="help-block">{{ text_note }}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label">{{ entry_rating }}</label>*/
/*                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                     <input type="radio" name="rating" value="1" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="2" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="3" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="4" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="5" />*/
/*                     &nbsp;{{ entry_good }}</div>*/
/*                 </div>*/
/*                 {{ captcha }} */
/*                 <div class="buttons">*/
/*                   <div class="pull-right">*/
/*                     <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% else %} */
/*                 {{ text_login }} */
/*                 {% endif %} */
/*               </form>*/
/*             </div>*/
/*             {% endif %} */
/*           </div>*/
/*           {% else %} */
/*           <div class="panel-group" id="accordion">*/
/*             <div class="panel panel-default">*/
/*               <div class="panel-heading">*/
/*                 <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse-description">{{ tab_description }}</a> </h4>*/
/*               </div>*/
/*               <div id="collapse-description" class="panel-collapse collapse in">*/
/*                 <div class="panel-body" itemprop="description">{{ description }}</div>*/
/*               </div>*/
/*             </div>*/
/*             {% if (attribute_groups) %} */
/*             <div class="panel panel-default">*/
/*               <div class="panel-heading">*/
/*                 <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse-specification">{{ tab_attribute }}</a> </h4>*/
/*               </div>*/
/*               <div id="collapse-specification" class="panel-collapse collapse">*/
/*                 <div class="panel-body">*/
/*                   <table class="table table-bordered">*/
/*                     {% for attribute_group in attribute_groups %} */
/*                     <thead>*/
/*                       <tr>*/
/*                         <td colspan="2"><strong>{{ attribute_group['name'] }}</strong></td>*/
/*                       </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                       {% for attribute in attribute_group['attribute'] %} */
/*                       <tr>*/
/*                         <td>{{ attribute['name'] }}</td>*/
/*                         <td>{{ attribute['text'] }}</td>*/
/*                       </tr>*/
/*                       {% endfor %} */
/*                     </tbody>*/
/*                     {% endfor %} */
/*                   </table>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             {% endif %} */
/*             {% if (review_status) %} */
/*             <div class="panel panel-default">*/
/*               <div class="panel-heading">*/
/*                 <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse-review">{{ tab_review }}</a> </h4>*/
/*               </div>*/
/*               <div id="collapse-review" class="panel-collapse collapse">*/
/*                 <div class="panel-body">*/
/*                   <form class="form-horizontal" id="form-review">*/
/*                     <div id="review"></div>*/
/*                     <h2>{{ text_write }}</h2>*/
/*                     {% if (review_guest) %} */
/*                     <div class="form-group required">*/
/*                       <div class="col-sm-12">*/
/*                         <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                         <input type="text" name="name" value="" id="input-name" class="form-control" />*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <div class="col-sm-12">*/
/*                         <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                         <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                         <div class="help-block">{{ text_note }}</div>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <div class="col-sm-12">*/
/*                         <label class="control-label">{{ entry_rating }}</label>*/
/*                         &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                         <input type="radio" name="rating" value="1" />*/
/*                         &nbsp;*/
/*                         <input type="radio" name="rating" value="2" />*/
/*                         &nbsp;*/
/*                         <input type="radio" name="rating" value="3" />*/
/*                         &nbsp;*/
/*                         <input type="radio" name="rating" value="4" />*/
/*                         &nbsp;*/
/*                         <input type="radio" name="rating" value="5" />*/
/*                         &nbsp;{{ entry_good }}</div>*/
/*                     </div>*/
/*                     {{ captcha }} */
/*                     <div class="buttons">*/
/*                       <div class="pull-right">*/
/*                         <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                       </div>*/
/*                     </div>*/
/*                     {% else %} */
/*                     {{ text_login }} */
/*                     {% endif %} */
/*                   </form>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             {% endif %} */
/*           </div>*/
/*           {% endif %} */
/*         </div>*/
/*       </div>*/
/*       {% if (products and boss_product['related'] is defined) %}*/
/*       {% if (column_left and column_right) %} */
/*       {% set per_row = 2 %} */
/*       {% elseif (column_left or column_right) %} */
/*       {% set per_row = 3 %} */
/*       {% else %} */
/*       {% set per_row = 4 %} */
/*       {% endif %} */
/*       <div class="related-title">*/
/*         <h2>{{ text_related }}</h2>*/
/*       </div>*/
/*       <div id="product-related" class="owl-carousel-2 owl-theme-2 nav-middle nav-visible">*/
/*         {% for product in products %} */
/*         <div class="product-layout product-related">*/
/*           <div class="product-thumb">*/
/*             <div class="image"><a href="{{ product['href'] }}"><img src="{{ product['thumb'] }}" alt="{{ product['name'] }}" class="img-responsive" /></a>*/
/*               <div class="button-group">*/
/*                 <button type="button" onclick="btadd.cart('{{ product['product_id'] }}', '{{ product['minimum'] }}');"><i class="lnr lnr-cart"></i> <span>{{ button_cart }}</span></button>*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="btadd.wishlist('{{ product['product_id'] }}');"><i class="lnr lnr-heart"></i></button>*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="btadd.compare('{{ product['product_id'] }}');"><i class="lnr lnr-sync"></i></button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="caption">*/
/*               <h4 class="name"><a href="{{ product['href'] }}">{{ product['name'] }}</a></h4>*/
/*               <p class="price">*/
/*                 {% if (not product['special']) %} */
/*                 {{ product['price'] }} */
/*                 {% else %} */
/*                 <span class="price-new">{{ product['special'] }}</span> <span class="price-old">{{ product['price'] }}</span>*/
/*                 {% endif %} */
/*                 {% if (product['tax']) %} */
/*                 <span class="price-tax">{{ text_tax }} {{ product['tax'] }}</span>*/
/*                 {% endif %} */
/*               </p>*/
/*               {% if (product['rating']) %} */
/*               <div class="rating">*/
/*                 {% set i = 1 %}{% for i in i..5 %} */
/*                 {% if (product['rating'] < i) %} */
/*                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                 {% else %} */
/*                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                 {% endif %} */
/*                 {% endfor %} */
/*               </div>*/
/*               {% endif %} */
/*             </div>*/
/*             {% if (product['special']) %} */
/*             <div class="save-off">{{ text_save_off }}</div>*/
/*             {% endif %} */
/*           </div>*/
/*         </div>*/
/*         {% endfor %} */
/*       </div>*/
/*       {% endif %} */
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {% if (products) %} */
/* <script type="text/javascript">*/
/* $(function() {*/
/* 	if ($('html').attr('dir') == 'rtl') {*/
/* 		var rtl = true;*/
/* 	} else {*/
/* 		var rtl = false;*/
/* 	}*/
/* 	*/
/* 	var elm = $('#product-related');*/
/* 	var loop = (elm.children().length > {{ per_row }}) ? true : false;*/
/* 	*/
/* 	elm.owlCarousel2({*/
/* 		items: 3,*/
/* 		loop: loop,*/
/* 		nav: true,*/
/* 		navText: ['<img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iNDIiIHZpZXdCb3g9IjAgMCAyNCA0MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMjIuNDU3MjA3NCAxLjAwNzQ2MTQ3bC0yMSAyMC4wMjQ4MjE0MyAyMC45NDc5Mzk3IDE5Ljk3NTE3ODYiIHN0cm9rZT0iIzJEMkQyRCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==" />', '<img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iNDIiIHZpZXdCb3g9IjAgMCAyNCA0MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMS40NTY3OSAxLjAwNzQ2MTQ3bDIxIDIwLjAyNDgyMTQzTDEuNTA4ODUgNDEuMDA3NDYxNSIgc3Ryb2tlPSIjMkQyRDJEIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+" />'],*/
/* 		dots: false,*/
/* 		margin: 20,*/
/* 		rtl: rtl,*/
/* 		responsive:{*/
/* 			992: {*/
/* 				items: {{ per_row }} */
/* 			},*/
/* 			768: {*/
/* 				items: {{ round(per_row/2) }} */
/* 			},*/
/* 			560: {*/
/* 				items: {{ round(per_row/2) }} */
/* 			},*/
/* 			0: {*/
/* 				items: 1*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* </script>*/
/* {% endif %} */
/* {% if (thumb or images) %} */
/* <script type="text/javascript">*/
/* $(function() {*/
/* 	$('#product-thumb .image-item').zoom({*/
/* 		responsive: {*/
/* 			767: {*/
/* 				on: 'click',*/
/* 				touch: false*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('input[data-image="true"]').each(function(index, element) {*/
/* 	var name = $(this).attr('name');*/
/* 	var type = $(this).attr('type');*/
/* 	*/
/* 	$(this).addClass('hidden');*/
/* 	*/
/* 	if (type == 'radio') {*/
/* 		$(this).on('change', function(e) {*/
/* 			$('input[name="' + name + '"]').next('img').removeClass('active');*/
/* 			*/
/* 			if ($(this).is(':checked')) {*/
/* 				$(this).next('img').addClass('active');*/
/* 			}*/
/* 		});*/
/* 	} else if (type == 'checkbox') {*/
/* 		$(this).on('change', function(e) {*/
/* 			if ($(this).is(':checked')) {*/
/* 				$(this).next('img').addClass('active');*/
/* 			} else {*/
/* 				$(this).next('img').removeClass('active');*/
/* 			}*/
/* 		});*/
/* 	}*/
/* });*/
/* </script>*/
/* {% endif %} */
/* <script type="text/javascript"><!--*/
/* var ajax;*/
/* $(function() {if ($('#product [name=\'quantity\']').val() > 1) getPrice()});*/
/* $(document).on('change','[name^=\'option[\']', getPrice);*/
/* $(document).on('keyup','[name=\'quantity\']', function() {*/
/* 	if (!isNaN(this.value) && this.value > 0) getPrice();*/
/* });*/
/* */
/* function getPrice() {*/
/* 	var index = $('#product-price');*/
/* 	*/
/* 	if (ajax) ajax.abort();*/
/* 	ajax = $.ajax({*/
/* 		url: 'index.php?route=bossthemes/utilities/optionPrice',*/
/* 		type: 'get',*/
/* 		data: $('#product [type=\'checkbox\']:checked, #product [type=\'radio\']:checked, #product select, #product [name=\'product_id\'], #product [name=\'quantity\']'),*/
/* 		dataType: 'json',*/
/* 		success: function(response) {*/
/* 			$('.price-main', index).text(response.price);*/
/* 			$('.price-old', index).text(response.price);*/
/* 			$('.price-new', index).text(response.special);*/
/* 			$('.price-tax', index).text(response.ex_tax);*/
/* 			$('.price-reward', index).text(response.points);*/
/* 		}*/
/* 	});*/
/* }*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=bossthemes/boss_add/cart/',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'number\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				addNotice(json, 'index.php?route=checkout/checkout');*/
/* */
/* 				$('#cart > button').html('<span id="cart-total"><i class="lnr lnr-cart"></i> ' + json['total'] + '</span>');*/
/* */
/* 				$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 			}*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-success, .alert-danger').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
