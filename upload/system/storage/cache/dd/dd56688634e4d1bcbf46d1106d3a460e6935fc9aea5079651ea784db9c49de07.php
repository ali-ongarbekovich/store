<?php

/* bt_laparis/template/product/review.twig */
class __TwigTemplate_00c27dae37332c7840d047b701d2f726aa781aa34960b185b3275c6860d4fd17 extends Twig_Template
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
        if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
            echo " 
";
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                echo " 
<table class=\"table table-striped table-bordered\">
  <tr>
    <td style=\"width: 50%;\"><strong>";
                // line 5
                echo $this->getAttribute($context["review"], "author", array(), "array");
                echo "</strong></td>
    <td class=\"text-right\">";
                // line 6
                echo $this->getAttribute($context["review"], "date_added", array(), "array");
                echo "</td>
  </tr>
  <tr>
    <td colspan=\"2\"><p>";
                // line 9
                echo $this->getAttribute($context["review"], "text", array(), "array");
                echo "</p>
      ";
                // line 10
                $context["i"] = 1;
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo " 
      ";
                    // line 11
                    if (($this->getAttribute($context["review"], "rating", array(), "array") < $context["i"])) {
                        echo " 
      <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
      ";
                    } else {
                        // line 13
                        echo " 
      <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
      ";
                    }
                    // line 15
                    echo " 
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "</td>
  </tr>
</table>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo " 
<div class=\"text-right\">";
            // line 20
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
";
        } else {
            // line 21
            echo " 
<p>";
            // line 22
            echo (isset($context["text_no_reviews"]) ? $context["text_no_reviews"] : null);
            echo "</p>
";
        }
        // line 23
        echo " 
";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  90 => 22,  87 => 21,  82 => 20,  79 => 19,  70 => 16,  63 => 15,  58 => 13,  52 => 11,  45 => 10,  41 => 9,  35 => 6,  31 => 5,  23 => 2,  19 => 1,);
    }
}
/* {% if (reviews) %} */
/* {% for review in reviews %} */
/* <table class="table table-striped table-bordered">*/
/*   <tr>*/
/*     <td style="width: 50%;"><strong>{{ review['author'] }}</strong></td>*/
/*     <td class="text-right">{{ review['date_added'] }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td colspan="2"><p>{{ review['text'] }}</p>*/
/*       {% set i = 1 %}{% for i in i..5 %} */
/*       {% if (review['rating'] < i) %} */
/*       <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*       {% else %} */
/*       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*       {% endif %} */
/*       {% endfor %}</td>*/
/*   </tr>*/
/* </table>*/
/* {% endfor %} */
/* <div class="text-right">{{ pagination }}</div>*/
/* {% else %} */
/* <p>{{ text_no_reviews }}</p>*/
/* {% endif %} */
/* */
