<?php

/* bt_laparis/template/common/currency.twig */
class __TwigTemplate_ea6d404a49c0497d14385a4d111fcb6ebe18fb8cb7f0902c35b459fb93c2395c extends Twig_Template
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
        if (($this->env->getExtension('bt')->_Count((isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            echo " 
<form action=\"";
            // line 2
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
  <div class=\"btn-group dropdown\">
    <button class=\"btn-link dropdown-toggle\" data-toggle=\"dropdown\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                echo " 
    ";
                // line 6
                if (($this->getAttribute($context["currency"], "symbol_left", array(), "array") && ($this->getAttribute($context["currency"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null)))) {
                    echo " 
    <strong>";
                    // line 7
                    echo $this->getAttribute($context["currency"], "symbol_left", array(), "array");
                    echo "</strong>
    ";
                } elseif (($this->getAttribute(                // line 8
$context["currency"], "symbol_right", array(), "array") && ($this->getAttribute($context["currency"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null)))) {
                    echo " 
    <strong>";
                    // line 9
                    echo $this->getAttribute($context["currency"], "symbol_right", array(), "array");
                    echo "</strong>
    ";
                }
                // line 10
                echo " 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo " 
    <!--<span class=\"hidden-xs hidden-sm hidden-md\">";
            // line 12
            echo (isset($context["text_currency"]) ? $context["text_currency"] : null);
            echo "</span> <i class=\"fa fa-caret-down\"></i>--></button>
    <ul class=\"dropdown-menu\">
      ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                echo " 
      ";
                // line 15
                if ($this->getAttribute($context["currency"], "symbol_left", array(), "array")) {
                    echo " 
      <li><button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 16
                    echo $this->getAttribute($context["currency"], "code", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_left", array(), "array");
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array(), "array");
                    echo "</button></li>
      ";
                } else {
                    // line 17
                    echo " 
      <li><button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 18
                    echo $this->getAttribute($context["currency"], "code", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_right", array(), "array");
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array(), "array");
                    echo "</button></li>
      ";
                }
                // line 19
                echo " 
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo " 
    </ul>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 24
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
</form>
";
        }
        // line 26
        echo " 
";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 26,  111 => 24,  105 => 20,  98 => 19,  89 => 18,  86 => 17,  77 => 16,  73 => 15,  67 => 14,  62 => 12,  59 => 11,  52 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  29 => 5,  23 => 2,  19 => 1,);
    }
}
/* {% if (count(currencies) > 1) %} */
/* <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*   <div class="btn-group dropdown">*/
/*     <button class="btn-link dropdown-toggle" data-toggle="dropdown">*/
/*     {% for currency in currencies %} */
/*     {% if (currency['symbol_left'] and currency['code'] == code) %} */
/*     <strong>{{ currency['symbol_left'] }}</strong>*/
/*     {% elseif (currency['symbol_right'] and currency['code'] == code) %} */
/*     <strong>{{ currency['symbol_right'] }}</strong>*/
/*     {% endif %} */
/*     {% endfor %} */
/*     <!--<span class="hidden-xs hidden-sm hidden-md">{{ text_currency }}</span> <i class="fa fa-caret-down"></i>--></button>*/
/*     <ul class="dropdown-menu">*/
/*       {% for currency in currencies %} */
/*       {% if (currency['symbol_left']) %} */
/*       <li><button class="currency-select btn btn-link btn-block" type="button" name="{{ currency['code'] }}">{{ currency['symbol_left'] }} {{ currency['title'] }}</button></li>*/
/*       {% else %} */
/*       <li><button class="currency-select btn btn-link btn-block" type="button" name="{{ currency['code'] }}">{{ currency['symbol_right'] }} {{ currency['title'] }}</button></li>*/
/*       {% endif %} */
/*       {% endfor %} */
/*     </ul>*/
/*   </div>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* </form>*/
/* {% endif %} */
/* */
