<?php

/* bt_laparis/template/extension/module/boss_banner_grid.twig */
class __TwigTemplate_b75f773afc5b4c9a7291a459377c06bc97a87b970965ab55159ece2fd203309f extends Twig_Template
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
        echo "<div class=\"bt-banner-grid\">
  ";
        // line 2
        if ((isset($context["auto"]) ? $context["auto"] : null)) {
            echo " 
  <div id=\"bt-banner-grid";
            // line 3
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" class=\"row autogrid\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                echo " 
    <div class=\"col-sm-";
                // line 5
                echo (12 / (isset($context["per_row"]) ? $context["per_row"] : null));
                echo "\">
      <div class=\"banner-layout\">
        <div class=\"effect ";
                // line 7
                echo $this->getAttribute($context["banner"], "effect", array(), "array");
                echo " \"> <img src=\"";
                echo $this->getAttribute($context["banner"], "image", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array(), "array");
                echo "\">
          <div class=\"img-caption\">
            <div> ";
                // line 9
                echo $this->getAttribute($context["banner"], "caption", array(), "array");
                echo " </div>
            <a href=\"";
                // line 10
                echo (($this->getAttribute($context["banner"], "link", array(), "array")) ? ($this->getAttribute($context["banner"], "link", array(), "array")) : ("javascript:void(0)"));
                echo "\" title=\"";
                echo $this->getAttribute($context["banner"], "title", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["banner"], "title", array(), "array");
                echo "</a> </div>
        </div>
        ";
                // line 12
                if ($this->getAttribute($context["banner"], "title", array(), "array")) {
                    echo " 
        <div class=\"banner-title\">
          <h2>";
                    // line 14
                    echo $this->getAttribute($context["banner"], "title", array(), "array");
                    echo "</h2>
        </div>
        ";
                }
                // line 16
                echo " 
      </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo " 
  </div>
  ";
        } else {
            // line 21
            echo " 
  <div id=\"bt-banner-grid";
            // line 22
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\">
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('bt')->_arrayChunk($context["banners"], (isset($context["per_row"]) ? $context["per_row"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["banners"]) {
                echo " 
    <div class=\"row\">
      ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["banners"]);
                foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                    echo " 
      <div class=\"col-sm-";
                    // line 26
                    echo (12 / (isset($context["per_row"]) ? $context["per_row"] : null));
                    echo "\">
        <div class=\"banner-layout\">
          <div class=\"effect ";
                    // line 28
                    echo $this->getAttribute($context["banner"], "effect", array(), "array");
                    echo " \"> <img src=\"";
                    echo $this->getAttribute($context["banner"], "image", array(), "array");
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["banner"], "title", array(), "array");
                    echo "\">
            <div class=\"img-caption\">
              <div> ";
                    // line 30
                    echo $this->getAttribute($context["banner"], "caption", array(), "array");
                    echo " </div>
              <a href=\"";
                    // line 31
                    echo (($this->getAttribute($context["banner"], "link", array(), "array")) ? ($this->getAttribute($context["banner"], "link", array(), "array")) : ("javascript:void(0)"));
                    echo "\" title=\"";
                    echo $this->getAttribute($context["banner"], "title", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["banner"], "title", array(), "array");
                    echo "</a> </div>
          </div>
          ";
                    // line 33
                    if ($this->getAttribute($context["banner"], "title", array(), "array")) {
                        echo " 
          <div class=\"banner-title\">
            <h2>";
                        // line 35
                        echo $this->getAttribute($context["banner"], "title", array(), "array");
                        echo "</h2>
          </div>
          ";
                    }
                    // line 37
                    echo " 
        </div>
      </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo " 
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banners'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo " 
  </div>
  ";
        }
        // line 44
        echo " 
</div>
";
        // line 46
        if ((isset($context["auto"]) ? $context["auto"] : null)) {
            echo " 
<script type=\"text/javascript\">
\$(window).load(function(){
\t\$('#bt-banner-grid";
            // line 49
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "').masonry({
\t\titemSelector: '#bt-banner-grid";
            // line 50
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .col-sm-";
            echo (12 / (isset($context["per_row"]) ? $context["per_row"] : null));
            echo "',
\t\tcolumnWidth: '#bt-banner-grid";
            // line 51
            echo (isset($context["module"]) ? $context["module"] : null);
            echo " .col-sm-";
            echo (12 / (isset($context["per_row"]) ? $context["per_row"] : null));
            echo "',
\t\tpercentPosition: true
\t}).masonry('reloadItems');
});
</script>
";
        }
        // line 56
        echo " 
";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/extension/module/boss_banner_grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 56,  188 => 51,  182 => 50,  178 => 49,  172 => 46,  168 => 44,  163 => 42,  155 => 40,  146 => 37,  140 => 35,  135 => 33,  126 => 31,  122 => 30,  113 => 28,  108 => 26,  102 => 25,  95 => 23,  91 => 22,  88 => 21,  83 => 19,  74 => 16,  68 => 14,  63 => 12,  54 => 10,  50 => 9,  41 => 7,  36 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="bt-banner-grid">*/
/*   {% if (auto) %} */
/*   <div id="bt-banner-grid{{ module }}" class="row autogrid">*/
/*     {% for banner in banners %} */
/*     <div class="col-sm-{{ 12/per_row }}">*/
/*       <div class="banner-layout">*/
/*         <div class="effect {{ banner['effect'] }} "> <img src="{{ banner['image'] }}" alt="{{ banner['title'] }}">*/
/*           <div class="img-caption">*/
/*             <div> {{ banner['caption'] }} </div>*/
/*             <a href="{{ banner['link'] ? banner['link'] : 'javascript:void(0)' }}" title="{{ banner['title'] }}">{{ banner['title'] }}</a> </div>*/
/*         </div>*/
/*         {% if (banner['title']) %} */
/*         <div class="banner-title">*/
/*           <h2>{{ banner['title'] }}</h2>*/
/*         </div>*/
/*         {% endif %} */
/*       </div>*/
/*     </div>*/
/*     {% endfor %} */
/*   </div>*/
/*   {% else %} */
/*   <div id="bt-banner-grid{{ module }}">*/
/*     {% for banners in array_chunk(banners, per_row) %} */
/*     <div class="row">*/
/*       {% for banner in banners %} */
/*       <div class="col-sm-{{ 12/per_row }}">*/
/*         <div class="banner-layout">*/
/*           <div class="effect {{ banner['effect'] }} "> <img src="{{ banner['image'] }}" alt="{{ banner['title'] }}">*/
/*             <div class="img-caption">*/
/*               <div> {{ banner['caption'] }} </div>*/
/*               <a href="{{ banner['link'] ? banner['link'] : 'javascript:void(0)' }}" title="{{ banner['title'] }}">{{ banner['title'] }}</a> </div>*/
/*           </div>*/
/*           {% if (banner['title']) %} */
/*           <div class="banner-title">*/
/*             <h2>{{ banner['title'] }}</h2>*/
/*           </div>*/
/*           {% endif %} */
/*         </div>*/
/*       </div>*/
/*       {% endfor %} */
/*     </div>*/
/*     {% endfor %} */
/*   </div>*/
/*   {% endif %} */
/* </div>*/
/* {% if (auto) %} */
/* <script type="text/javascript">*/
/* $(window).load(function(){*/
/* 	$('#bt-banner-grid{{ module }}').masonry({*/
/* 		itemSelector: '#bt-banner-grid{{ module }} .col-sm-{{ 12/per_row }}',*/
/* 		columnWidth: '#bt-banner-grid{{ module }} .col-sm-{{ 12/per_row }}',*/
/* 		percentPosition: true*/
/* 	}).masonry('reloadItems');*/
/* });*/
/* </script>*/
/* {% endif %} */
/* */
