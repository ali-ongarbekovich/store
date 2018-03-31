<?php

/* bt_laparis/template/common/cart.twig */
class __TwigTemplate_e987d6bb2c99e20d453a9b3c1bf7a355e52485f5147bd88a83ce4465a99f0504 extends Twig_Template
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
        echo "
";
        // line 3
        $context["language_id"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_language_id"), "method");
        // line 4
        echo "
";
        // line 5
        $context["text_view_cart"] = (isset($context["text_cart"]) ? $context["text_cart"] : null);
        // line 6
        echo "
";
        // line 7
        $context["text_cart"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => (("theme_" . $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_theme"), "method")) . "_text_cart")), "method");
        // line 8
        $context["text_cart"] = (($this->getAttribute((isset($context["text_cart"]) ? $context["text_cart"] : null), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array", true, true)) ? ($this->getAttribute((isset($context["text_cart"]) ? $context["text_cart"] : null), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array")) : (""));
        // line 9
        echo "

<div id=\"cart\" class=\"dropup\"> <a data-toggle=\"dropdown\" data-loading-text=\"";
        // line 11
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"dropdown-toggle\"><i class=\"lnr lnr-cart\"></i> <span class=\"hidden-xs\">";
        echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
        echo "</span></a>
  <ul class=\"dropdown-menu\">
    ";
        // line 13
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            echo " 
    <li class=\"show-product-cart\">
      <table class=\"table\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
        <tr>
          <td class=\"text-left image\"><div class=\"image\">
              ";
                // line 19
                if ($this->getAttribute($context["product"], "thumb", array(), "array")) {
                    echo " 
              <a href=\"";
                    // line 20
                    echo $this->getAttribute($context["product"], "href", array(), "array");
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array(), "array");
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array(), "array");
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array(), "array");
                    echo "\" class=\"img-thumbnail\" /></a>
              ";
                }
                // line 21
                echo " 
              <div class=\"remove\">
                <button type=\"button\" onclick=\"cart.remove('";
                // line 23
                echo $this->getAttribute($context["product"], "cart_id", array(), "array");
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn-danger\"><i class=\"fa fa-times\"></i></button>
              </div>
            </div></td>
          <td class=\"text-left name\"><a href=\"";
                // line 26
                echo $this->getAttribute($context["product"], "href", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "</a>
            ";
                // line 27
                if ($this->getAttribute($context["product"], "option", array(), "array")) {
                    echo " 
            ";
                    // line 28
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " 
            <br />
            - <small>";
                        // line 30
                        echo $this->getAttribute($context["option"], "name", array(), "array");
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array(), "array");
                        echo "</small>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo " 
            ";
                }
                // line 32
                echo " 
            ";
                // line 33
                if ($this->getAttribute($context["product"], "recurring", array(), "array")) {
                    echo " 
            <br />
            - <small>";
                    // line 35
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array(), "array");
                    echo "</small>
            ";
                }
                // line 36
                echo " 
            <div class=\"quantity-price\">";
                // line 37
                echo $this->getAttribute($context["product"], "quantity", array(), "array");
                echo " x <span class=\"price\">";
                echo $this->getAttribute($context["product"], "total", array(), "array");
                echo "</span></div></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo " 
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                echo " 
        <tr>
          <td class=\"text-left image\"><div class=\"image\">
              <div class=\"remove\">
                <button type=\"button\" onclick=\"voucher.remove('";
                // line 44
                echo $this->getAttribute($context["voucher"], "cart_id", array(), "array");
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn-danger\"><i class=\"fa fa-times\"></i></button>
              </div>
            </div></td>
          <td class=\"text-left\"><div class=\"description\">";
                // line 47
                echo $this->getAttribute($context["voucher"], "description", array(), "array");
                echo "</div>
            <div class=\"quantity\">1 x <span class=\"price\">";
                // line 48
                echo $this->getAttribute($context["voucher"], "amount", array(), "array");
                echo "</div></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo " 
      </table>
    </li>
    <li>
      <div class=\"cart-bottom\">
        <table class=\"minicart-total\">
          ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                echo " 
          <tr>
            <td class=\"text-left\"><span>";
                // line 58
                echo $this->getAttribute($context["total"], "title", array(), "array");
                echo "</span></td>
            <td class=\"text-right\">";
                // line 59
                echo $this->getAttribute($context["total"], "text", array(), "array");
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo " 
        </table>
        <div class=\"buttons\"> <a href=\"";
            // line 63
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\" class=\"btn btn-primary btn-block\"><i class=\"lnr lnr-cart\"></i> ";
            echo (isset($context["text_view_cart"]) ? $context["text_view_cart"] : null);
            echo "</a><a class=\"btn btn-default btn-block\" href=\"";
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a> </div>
      </div>
    </li>
    ";
        } else {
            // line 66
            echo " 
    <li>
      <p class=\"text-center\">";
            // line 68
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 70
        echo " 
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 70,  232 => 68,  228 => 66,  215 => 63,  211 => 61,  202 => 59,  198 => 58,  191 => 56,  183 => 50,  174 => 48,  170 => 47,  162 => 44,  153 => 40,  150 => 39,  139 => 37,  136 => 36,  129 => 35,  124 => 33,  121 => 32,  117 => 31,  107 => 30,  100 => 28,  96 => 27,  90 => 26,  82 => 23,  78 => 21,  67 => 20,  63 => 19,  55 => 16,  49 => 13,  42 => 11,  38 => 9,  36 => 8,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set config = registry.get('config') %}*/
/* */
/* {% set language_id = config.get('config_language_id') %}*/
/* */
/* {% set text_view_cart = text_cart %}*/
/* */
/* {% set text_cart = config.get('theme_' ~ config.get('config_theme') ~ '_text_cart') %}*/
/* {% set text_cart = text_cart[language_id] is defined ? text_cart[language_id] : '' %}*/
/* */
/* */
/* <div id="cart" class="dropup"> <a data-toggle="dropdown" data-loading-text="{{ text_loading }}" class="dropdown-toggle"><i class="lnr lnr-cart"></i> <span class="hidden-xs">{{ text_cart }}</span></a>*/
/*   <ul class="dropdown-menu">*/
/*     {% if (products or vouchers) %} */
/*     <li class="show-product-cart">*/
/*       <table class="table">*/
/*         {% for product in products %} */
/*         <tr>*/
/*           <td class="text-left image"><div class="image">*/
/*               {% if (product['thumb']) %} */
/*               <a href="{{ product['href'] }}"><img src="{{ product['thumb'] }}" alt="{{ product['name'] }}" title="{{ product['name'] }}" class="img-thumbnail" /></a>*/
/*               {% endif %} */
/*               <div class="remove">*/
/*                 <button type="button" onclick="cart.remove('{{ product['cart_id'] }}');" title="{{ button_remove }}" class="btn-danger"><i class="fa fa-times"></i></button>*/
/*               </div>*/
/*             </div></td>*/
/*           <td class="text-left name"><a href="{{ product['href'] }}">{{ product['name'] }}</a>*/
/*             {% if (product['option']) %} */
/*             {% for option in product['option'] %} */
/*             <br />*/
/*             - <small>{{ option['name'] }} {{ option['value'] }}</small>*/
/*             {% endfor %} */
/*             {% endif %} */
/*             {% if (product['recurring']) %} */
/*             <br />*/
/*             - <small>{{ text_recurring }} {{ product['recurring'] }}</small>*/
/*             {% endif %} */
/*             <div class="quantity-price">{{ product['quantity'] }} x <span class="price">{{ product['total'] }}</span></div></td>*/
/*         </tr>*/
/*         {% endfor %} */
/*         {% for voucher in vouchers %} */
/*         <tr>*/
/*           <td class="text-left image"><div class="image">*/
/*               <div class="remove">*/
/*                 <button type="button" onclick="voucher.remove('{{ voucher['cart_id'] }}');" title="{{ button_remove }}" class="btn-danger"><i class="fa fa-times"></i></button>*/
/*               </div>*/
/*             </div></td>*/
/*           <td class="text-left"><div class="description">{{ voucher['description'] }}</div>*/
/*             <div class="quantity">1 x <span class="price">{{ voucher['amount'] }}</div></td>*/
/*         </tr>*/
/*         {% endfor %} */
/*       </table>*/
/*     </li>*/
/*     <li>*/
/*       <div class="cart-bottom">*/
/*         <table class="minicart-total">*/
/*           {% for total in totals %} */
/*           <tr>*/
/*             <td class="text-left"><span>{{ total['title'] }}</span></td>*/
/*             <td class="text-right">{{ total['text'] }}</td>*/
/*           </tr>*/
/*           {% endfor %} */
/*         </table>*/
/*         <div class="buttons"> <a href="{{ cart }}" class="btn btn-primary btn-block"><i class="lnr lnr-cart"></i> {{ text_view_cart }}</a><a class="btn btn-default btn-block" href="{{ checkout }}">{{ text_checkout }}</a> </div>*/
/*       </div>*/
/*     </li>*/
/*     {% else %} */
/*     <li>*/
/*       <p class="text-center">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %} */
/*   </ul>*/
/* </div>*/
/* */
