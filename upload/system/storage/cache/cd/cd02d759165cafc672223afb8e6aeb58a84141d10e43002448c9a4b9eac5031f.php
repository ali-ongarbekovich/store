<?php

/* bt_laparis/template/common/language.twig */
class __TwigTemplate_83fa6bb9e8818b3e0011d1e6cf54d8fb51852eb41bc56c98822092bd7637702f extends Twig_Template
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
        if (($this->env->getExtension('bt')->_Count((isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            echo " 
<form action=\"";
            // line 2
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
  <div class=\"btn-group dropdown\">
    <button class=\"btn-link dropdown-toggle\" data-toggle=\"dropdown\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
    ";
                // line 6
                if (($this->getAttribute($context["language"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                    echo " 
    <img src=\"catalog/language/";
                    // line 7
                    echo $this->getAttribute($context["language"], "code", array(), "array");
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array(), "array");
                    echo ".png\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array(), "array");
                    echo "\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array(), "array");
                    echo "\">
    ";
                }
                // line 8
                echo " 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo " 
    <!--<span class=\"hidden-xs hidden-sm hidden-md\">";
            // line 10
            echo (isset($context["text_language"]) ? $context["text_language"] : null);
            echo "</span> <i class=\"fa fa-caret-down\"></i>--></button>
    <ul class=\"dropdown-menu\">
      ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
      <li><button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"";
                // line 13
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo "\"><img src=\"catalog/language/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo "/";
                echo $this->getAttribute($context["language"], "code", array(), "array");
                echo ".png\" alt=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array(), "array");
                echo "</button></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo " 
    </ul>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 18
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
</form>
";
        }
        // line 20
        echo " 
";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  95 => 18,  89 => 14,  71 => 13,  65 => 12,  60 => 10,  57 => 9,  50 => 8,  39 => 7,  35 => 6,  29 => 5,  23 => 2,  19 => 1,);
    }
}
/* {% if (count(languages) > 1) %} */
/* <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-language">*/
/*   <div class="btn-group dropdown">*/
/*     <button class="btn-link dropdown-toggle" data-toggle="dropdown">*/
/*     {% for language in languages %} */
/*     {% if (language['code'] == code) %} */
/*     <img src="catalog/language/{{ language['code'] }}/{{ language['code'] }}.png" alt="{{ language['name'] }}" title="{{ language['name'] }}">*/
/*     {% endif %} */
/*     {% endfor %} */
/*     <!--<span class="hidden-xs hidden-sm hidden-md">{{ text_language }}</span> <i class="fa fa-caret-down"></i>--></button>*/
/*     <ul class="dropdown-menu">*/
/*       {% for language in languages %} */
/*       <li><button class="btn btn-link btn-block language-select" type="button" name="{{ language['code'] }}"><img src="catalog/language/{{ language['code'] }}/{{ language['code'] }}.png" alt="{{ language['name'] }}" title="{{ language['name'] }}" /> {{ language['name'] }}</button></li>*/
/*       {% endfor %} */
/*     </ul>*/
/*   </div>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* </form>*/
/* {% endif %} */
/* */
