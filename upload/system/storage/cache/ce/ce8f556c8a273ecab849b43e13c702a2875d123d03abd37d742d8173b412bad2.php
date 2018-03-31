<?php

/* bt_laparis/template/product/product.twig */
class __TwigTemplate_ba6e63d642a5a870555a0ec0b8693132cce3317e5602e1fc91ae5b7dea2e5327 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
";
        // line 2
        $context["config"] = $this->getAttribute((isset($context["registry"]) ? $context["registry"] : null), "get", array(0 => "config"), "method");
        // line 3
        $context["language_id"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_language_id"), "method");
        // line 4
        $context["request"] = $this->getAttribute((isset($context["registry"]) ? $context["registry"] : null), "get", array(0 => "request"), "method");
        // line 5
        $context["boss_product"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "boss_product"), "method");
        // line 6
        $context["text_save_off"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => (("theme_" . $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_theme"), "method")) . "_text_save_off")), "method");
        // line 7
        $context["text_save_off"] = (($this->getAttribute((isset($context["text_save_off"]) ? $context["text_save_off"] : null), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array", true, true)) ? ($this->getAttribute((isset($context["text_save_off"]) ? $context["text_save_off"] : null), (isset($context["language_id"]) ? $context["language_id"] : null), array(), "array")) : (""));
        // line 8
        $context["template_directory"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => (("theme_" . $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "config_theme"), "method")) . "_directory")), "method");
        // line 9
        $context["path"] = ((isset($context["template_directory"]) ? $context["template_directory"] : null) . "/template/product/product/");
        // line 10
        $context["layout"] = (($this->getAttribute((isset($context["boss_product"]) ? $context["boss_product"] : null), "layout", array(), "array", true, true)) ? (($this->getAttribute((isset($context["boss_product"]) ? $context["boss_product"] : null), "layout", array(), "array") . ".twig")) : ("product_1.twig"));
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(), "any", false, true), "style", array(), "array", true, true)) {
            // line 12
            echo "\t";
            if ($this->env->getExtension('bt')->_fileExists((((twig_constant("DIR_TEMPLATE") . (isset($context["path"]) ? $context["path"] : null)) . $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array()), "style", array(), "array")) . ".twig"))) {
                // line 13
                echo " \t";
                $context["layout"] = ($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array()), "style", array(), "array") . ".twig");
                // line 14
                echo " ";
            }
        }
        // line 16
        echo twig_include($this->env, $context, ((isset($context["path"]) ? $context["path"] : null) . (isset($context["layout"]) ? $context["layout"] : null)));
        echo "
";
        // line 17
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  53 => 16,  49 => 14,  46 => 13,  43 => 12,  41 => 11,  39 => 10,  37 => 9,  35 => 8,  33 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {% set config = registry.get('config') %}*/
/* {% set language_id = config.get('config_language_id') %}*/
/* {% set request = registry.get('request') %}*/
/* {% set boss_product = config.get('boss_product') %}*/
/* {% set text_save_off = config.get('theme_' ~ config.get('config_theme') ~ '_text_save_off') %}*/
/* {% set text_save_off = text_save_off[language_id] is defined ? text_save_off[language_id] : '' %}*/
/* {% set template_directory = config.get('theme_' ~ config.get('config_theme') ~ '_directory') %}*/
/* {% set path = template_directory ~ '/template/product/product/' %}*/
/* {% set layout = boss_product['layout'] is defined ? boss_product['layout'] ~ '.twig' : 'product_1.twig' %}*/
/* {% if (request.get['style'] is defined) %}*/
/* 	{% if (file_exists(constant('DIR_TEMPLATE') ~ path ~ request.get['style'] ~ '.twig')) %}*/
/*  	{% set layout = request.get['style'] ~ '.twig' %}*/
/*  {% endif %}*/
/* {% endif %}*/
/* {{ include(path ~ layout) }}*/
/* {{ footer }}*/
/* */
