<?php

/* bt_laparis/template/extension/module/boss_filter_showing.twig */
class __TwigTemplate_46b78088752e6a128d257e653b5bea45a0306a9e0176731c4bd5fcf5f52c345e extends Twig_Template
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
        echo "<div class=\"bt-filter-showing box style-1\">
  ";
        // line 2
        if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
            echo " 
  <div class=\"box-heading\">
    <h2>";
            // line 4
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h2>
  </div>
  ";
        }
        // line 6
        echo " 
  ";
        // line 7
        if ($this->env->getExtension('bt')->_stripTags((isset($context["description"]) ? $context["description"] : null))) {
            echo " 
  <div class=\"box-description\">";
            // line 8
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
  ";
        }
        // line 9
        echo " 
  <div class=\"box-content\">
    <div class=\"row\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            echo " 
      <div class=\"col-lg-";
            // line 13
            echo (12 / (isset($context["column"]) ? $context["column"] : null));
            echo " col-md-";
            echo (12 / (isset($context["column"]) ? $context["column"] : null));
            echo " col-sm-";
            echo (12 / $this->env->getExtension('bt')->_Round(((isset($context["column"]) ? $context["column"] : null) / 2)));
            echo " col-xs-12\">
        <div class=\"filter-item\">
          <div class=\"image\"><a href=\"";
            // line 15
            echo $this->getAttribute($context["filter"], "href", array(), "array");
            echo "\" title=\"";
            echo $this->getAttribute($context["filter"], "name", array(), "array");
            echo "\">
            ";
            // line 16
            if ($this->getAttribute($context["filter"], "image", array(), "array")) {
                echo " 
            <img src=\"";
                // line 17
                echo $this->getAttribute($context["filter"], "image", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["filter"], "title", array(), "array");
                echo "\" />
            ";
            }
            // line 18
            echo " 
            </a></div>
          <div class=\"caption\">
            <div class=\"title\"><a href=\"";
            // line 21
            echo $this->getAttribute($context["filter"], "href", array(), "array");
            echo "\" title=\"";
            echo $this->getAttribute($context["filter"], "name", array(), "array");
            echo "\">";
            echo $this->getAttribute($context["filter"], "title", array(), "array");
            echo "</a></div>
            <div class=\"name\"><a href=\"";
            // line 22
            echo $this->getAttribute($context["filter"], "href", array(), "array");
            echo "\" title=\"";
            echo $this->getAttribute($context["filter"], "name", array(), "array");
            echo "\">";
            echo $this->getAttribute($context["filter"], "name", array(), "array");
            echo "</a></div>
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo " 
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/extension/module/boss_filter_showing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 26,  95 => 22,  87 => 21,  82 => 18,  75 => 17,  71 => 16,  65 => 15,  56 => 13,  50 => 12,  45 => 9,  40 => 8,  36 => 7,  33 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="bt-filter-showing box style-1">*/
/*   {% if (heading_title) %} */
/*   <div class="box-heading">*/
/*     <h2>{{ heading_title }}</h2>*/
/*   </div>*/
/*   {% endif %} */
/*   {% if (strip_tags(description)) %} */
/*   <div class="box-description">{{ description }}</div>*/
/*   {% endif %} */
/*   <div class="box-content">*/
/*     <div class="row">*/
/*       {% for filter in filters %} */
/*       <div class="col-lg-{{ 12/column }} col-md-{{ 12/column }} col-sm-{{ 12/round(column/2) }} col-xs-12">*/
/*         <div class="filter-item">*/
/*           <div class="image"><a href="{{ filter['href'] }}" title="{{ filter['name'] }}">*/
/*             {% if (filter['image']) %} */
/*             <img src="{{ filter['image'] }}" alt="{{ filter['title'] }}" />*/
/*             {% endif %} */
/*             </a></div>*/
/*           <div class="caption">*/
/*             <div class="title"><a href="{{ filter['href'] }}" title="{{ filter['name'] }}">{{ filter['title'] }}</a></div>*/
/*             <div class="name"><a href="{{ filter['href'] }}" title="{{ filter['name'] }}">{{ filter['name'] }}</a></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% endfor %} */
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
