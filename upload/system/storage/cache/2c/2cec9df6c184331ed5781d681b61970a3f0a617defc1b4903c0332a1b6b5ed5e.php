<?php

/* bt_laparis/template/extension/module/boss_product_showing.twig */
class __TwigTemplate_1247382cdaa58279177f98082d7aa6dbfd9758654df4d26e97825060374597a6 extends Twig_Template
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
        echo "<div class=\"bt-product-showing box style-1\">
  <div class=\"box-content\">
    <div class=\"row product-content\">
      <div class=\"col-lg-3 md-lg-3 hidden-sm hidden-xs\">
        <div class=\"attribute\">
          ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            echo " 
          <div class=\"attribute-item\">
            ";
            // line 8
            if ($this->getAttribute($context["attribute"], "image", array(), "array")) {
                echo " 
            <span class=\"icon\"><img src=\"";
                // line 9
                echo $this->getAttribute($context["attribute"], "image", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["attribute"], "name", array(), "array");
                echo "\" /></span>
            ";
            }
            // line 10
            echo " 
            <span>";
            // line 11
            echo $this->getAttribute($context["attribute"], "name", array(), "array");
            echo "</span> </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
        </div>
      </div>
      <div class=\"col-lg-6 md-lg-6 col-sm-5\">
        <div class=\"image\"><a href=\"";
        // line 16
        echo (isset($context["href"]) ? $context["href"] : null);
        echo "\" title=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\"><img src=\"";
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" class=\"img-responsive\" alt=\"";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\" /> </a></div>
      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-7\">
        <div class=\"product-thumb\">
          <h2>";
        // line 20
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
          <p class=\"price\">
            ";
        // line 22
        if ( !(isset($context["special"]) ? $context["special"] : null)) {
            echo " 
            ";
            // line 23
            echo (isset($context["price"]) ? $context["price"] : null);
            echo " 
            ";
        } else {
            // line 24
            echo " 
            <span class=\"price-new\">";
            // line 25
            echo (isset($context["special"]) ? $context["special"] : null);
            echo "</span> <span class=\"price-old\">";
            echo (isset($context["price"]) ? $context["price"] : null);
            echo "</span>
            ";
        }
        // line 26
        echo " 
            ";
        // line 27
        if ((isset($context["tax"]) ? $context["tax"] : null)) {
            echo " 
            <span class=\"price-tax\">";
            // line 28
            echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
            echo " ";
            echo (isset($context["tax"]) ? $context["tax"] : null);
            echo "</span>
            ";
        }
        // line 29
        echo " 
          </p>
          <div class=\"description\">";
        // line 31
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
          <div class=\"buttons\"> <a href=\"";
        // line 32
        echo (isset($context["href"]) ? $context["href"] : null);
        echo "\" title=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" class=\"btn btn-primary btn-block\">";
        echo (isset($context["button_product_detail"]) ? $context["button_product_detail"] : null);
        echo "</a>
            <button type=\"button\" onclick=\"btadd.cart('";
        // line 33
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "', '";
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "');\" class=\"btn btn-primary btn-block\">";
        echo (isset($context["button_shop_now"]) ? $context["button_shop_now"] : null);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/extension/module/boss_product_showing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 33,  120 => 32,  116 => 31,  112 => 29,  105 => 28,  101 => 27,  98 => 26,  91 => 25,  88 => 24,  83 => 23,  79 => 22,  74 => 20,  61 => 16,  55 => 12,  47 => 11,  44 => 10,  37 => 9,  33 => 8,  26 => 6,  19 => 1,);
    }
}
/* <div class="bt-product-showing box style-1">*/
/*   <div class="box-content">*/
/*     <div class="row product-content">*/
/*       <div class="col-lg-3 md-lg-3 hidden-sm hidden-xs">*/
/*         <div class="attribute">*/
/*           {% for attribute in attributes %} */
/*           <div class="attribute-item">*/
/*             {% if (attribute['image']) %} */
/*             <span class="icon"><img src="{{ attribute['image'] }}" alt="{{ attribute['name'] }}" /></span>*/
/*             {% endif %} */
/*             <span>{{ attribute['name'] }}</span> </div>*/
/*           {% endfor %} */
/*         </div>*/
/*       </div>*/
/*       <div class="col-lg-6 md-lg-6 col-sm-5">*/
/*         <div class="image"><a href="{{ href }}" title="{{ name }}"><img src="{{ image }}" class="img-responsive" alt="{{ heading_title }}" /> </a></div>*/
/*       </div>*/
/*       <div class="col-lg-3 col-md-3 col-sm-7">*/
/*         <div class="product-thumb">*/
/*           <h2>{{ heading_title }}</h2>*/
/*           <p class="price">*/
/*             {% if (not special) %} */
/*             {{ price }} */
/*             {% else %} */
/*             <span class="price-new">{{ special }}</span> <span class="price-old">{{ price }}</span>*/
/*             {% endif %} */
/*             {% if (tax) %} */
/*             <span class="price-tax">{{ text_tax }} {{ tax }}</span>*/
/*             {% endif %} */
/*           </p>*/
/*           <div class="description">{{ description }}</div>*/
/*           <div class="buttons"> <a href="{{ href }}" title="{{ name }}" class="btn btn-primary btn-block">{{ button_product_detail }}</a>*/
/*             <button type="button" onclick="btadd.cart('{{ product_id }}', '{{ minimum }}');" class="btn btn-primary btn-block">{{ button_shop_now }}</button>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
