<?php

/* bt_laparis/template/extension/module/boss_quickshop.twig */
class __TwigTemplate_877952f7a8967416250dd9d91b6a6cbc6a6754f82acd2e450e092189b5a1cdb5 extends Twig_Template
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
        echo "<script type=\"text/javascript\"><!--
\$(function() {
\tboss_quick_shop();
});

function boss_quick_shop() {
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selecters"]) ? $context["selecters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["selecter"]) {
            echo " 
\t\$('";
            // line 8
            echo $context["selecter"];
            echo "').each(function(index, value) {
\t\tvar id_product = '';
\t\tvar reloadurl = false;

\t\tif (\$(\".image>a\", this).attr('href')) {

\t\t\tvar href_pro = \$(\".image>a\", this).attr('href');
\t\t} else {
\t\t\tvar href_pro = '';
\t\t}
\t\tif (href_pro) {
\t\t\tvar check = href_pro.match(\"index.php\");
\t\t}
\t\tvar last_index = '';
\t\tvar product_id = 0;
\t\tif (check == \"index.php\") { //direct link
\t\t\tvar str = href_pro.split(\"&\");
\t\t\tfor (var i = 0; i < str.length; i++) {
\t\t\t\tif (str[i].match(\"product_id=\") == \"product_id=\") {

\t\t\t\t\tlast_index = str[i];
\t\t\t\t\tvar id = last_index.split(\"=\");
\t\t\t\t\tproduct_id = id[1];
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\treloadurl = true;
\t\t} else { //mode SEO
\t\t\tvar check_seo = href_pro.match(\"product_id=\");
\t\t\tif (check_seo == \"product_id=\") {

\t\t\t\tvar str = href_pro.split(\"&\");
\t\t\t\tfor (var i = 0; i < str.length; i++) {
\t\t\t\t\tif (str[i].match(\"product_id=\") == \"product_id=\") {
\t\t\t\t\t\tvar temp = str[i].split(\"?\");
\t\t\t\t\t\tlast_index = temp[temp.length - 1]; // lay phan tu cuoi cung
\t\t\t\t\t\tvar id = last_index.split(\"=\");
\t\t\t\t\t\tproduct_id = id[1];
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treloadurl = true;
\t\t\t} else {
\t\t\t\tvar str_1 = href_pro.split(\"/\");
\t\t\t\tvar str_2 = str_1[str_1.length - 1];
\t\t\t\tvar temp = str_2.split(\"?\");
\t\t\t\tlast_index = temp[0];
\t\t\t\tvar id_index = '';
\t\t\t\t";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["seo_data"]) ? $context["seo_data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["keyseo"]) {
                // line 57
                echo "\t\t\t\tif (last_index == \"";
                echo $this->getAttribute($context["keyseo"], "keyword", array(), "array");
                echo "\") {
\t\t\t\t\tid_index = \"";
                // line 58
                echo $this->getAttribute($context["keyseo"], "query", array(), "array");
                echo "\";
\t\t\t\t}
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyseo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo " 
\t\t\t\tif (id_index != '') {
\t\t\t\t\tvar id = id_index.split('=');
\t\t\t\t\tproduct_id = id[1];
\t\t\t\t\treloadurl = true;
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif (reloadurl) {

\t\t\tvar _qsHref = '<button title =\\\"";
            // line 71
            echo (isset($context["text"]) ? $context["text"] : null);
            echo "\\\" onclick=\\\"getModalContent(' + product_id + ');\\\" class=\\\"sft_quickshop_icon \\\" data-toggle=\\\"modal\\\" data-target=\\\"#bt-quick-shop-modal\\\"><i class=\"lnr lnr-eye\"></i></button>';
\t\t\t\$('.image .button-group', this).append(_qsHref);

\t\t\tvar quick_button = \$('.btn-quickshop');
\t\t\tvar width_button = (quick_button.width()) / 2;
\t\t\tvar height_button = (quick_button.height()) / 2;
\t\t\tvar w_image = \$('.image').width();
\t\t\tvar w_qs = quick_button.width();
\t\t}
\t});
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selecter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo " 
\tvar content_modal = '<div id=\"bt-quick-shop-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\"></div><div class=\"loading-qs\" style=\"position:fixed;top:50%;left:50%\"></div>';
\t\$('body').append(content_modal);
}

function getModalContent(product_id) {
\t\$.ajax({
\t\turl: 'index.php?route=extension/module/boss_quick_shop_product',
\t\tdataType: 'json',
\t\tdata: 'product_id=' + product_id,
\t\tbeforeSend: function() {
\t\t\t\$('body').append('<span class=\"loading\"></span>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('.loading').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('#bt-quick-shop-modal').html(json['html']);
\t\t\t\$('#bt-quick-shop-modal > .modal-dialog').css({
\t\t\t\t'width': '95%',
\t\t\t\t'max-width': '";
        // line 101
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "px',
\t\t\t});
\t\t}
\t});
}
//--></script>";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/extension/module/boss_quickshop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 101,  132 => 81,  115 => 71,  102 => 60,  93 => 58,  88 => 57,  84 => 56,  33 => 8,  27 => 7,  19 => 1,);
    }
}
/* <script type="text/javascript"><!--*/
/* $(function() {*/
/* 	boss_quick_shop();*/
/* });*/
/* */
/* function boss_quick_shop() {*/
/* 	{% for selecter in selecters %} */
/* 	$('{{ selecter }}').each(function(index, value) {*/
/* 		var id_product = '';*/
/* 		var reloadurl = false;*/
/* */
/* 		if ($(".image>a", this).attr('href')) {*/
/* */
/* 			var href_pro = $(".image>a", this).attr('href');*/
/* 		} else {*/
/* 			var href_pro = '';*/
/* 		}*/
/* 		if (href_pro) {*/
/* 			var check = href_pro.match("index.php");*/
/* 		}*/
/* 		var last_index = '';*/
/* 		var product_id = 0;*/
/* 		if (check == "index.php") { //direct link*/
/* 			var str = href_pro.split("&");*/
/* 			for (var i = 0; i < str.length; i++) {*/
/* 				if (str[i].match("product_id=") == "product_id=") {*/
/* */
/* 					last_index = str[i];*/
/* 					var id = last_index.split("=");*/
/* 					product_id = id[1];*/
/* 					break;*/
/* 				}*/
/* 			}*/
/* 			reloadurl = true;*/
/* 		} else { //mode SEO*/
/* 			var check_seo = href_pro.match("product_id=");*/
/* 			if (check_seo == "product_id=") {*/
/* */
/* 				var str = href_pro.split("&");*/
/* 				for (var i = 0; i < str.length; i++) {*/
/* 					if (str[i].match("product_id=") == "product_id=") {*/
/* 						var temp = str[i].split("?");*/
/* 						last_index = temp[temp.length - 1]; // lay phan tu cuoi cung*/
/* 						var id = last_index.split("=");*/
/* 						product_id = id[1];*/
/* 						break;*/
/* 					}*/
/* 				}*/
/* 				reloadurl = true;*/
/* 			} else {*/
/* 				var str_1 = href_pro.split("/");*/
/* 				var str_2 = str_1[str_1.length - 1];*/
/* 				var temp = str_2.split("?");*/
/* 				last_index = temp[0];*/
/* 				var id_index = '';*/
/* 				{% for keyseo in seo_data %}*/
/* 				if (last_index == "{{ keyseo['keyword'] }}") {*/
/* 					id_index = "{{ keyseo['query'] }}";*/
/* 				}*/
/* 				{% endfor %} */
/* 				if (id_index != '') {*/
/* 					var id = id_index.split('=');*/
/* 					product_id = id[1];*/
/* 					reloadurl = true;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		if (reloadurl) {*/
/* */
/* 			var _qsHref = '<button title =\"{{ text }}\" onclick=\"getModalContent(' + product_id + ');\" class=\"sft_quickshop_icon \" data-toggle=\"modal\" data-target=\"#bt-quick-shop-modal\"><i class="lnr lnr-eye"></i></button>';*/
/* 			$('.image .button-group', this).append(_qsHref);*/
/* */
/* 			var quick_button = $('.btn-quickshop');*/
/* 			var width_button = (quick_button.width()) / 2;*/
/* 			var height_button = (quick_button.height()) / 2;*/
/* 			var w_image = $('.image').width();*/
/* 			var w_qs = quick_button.width();*/
/* 		}*/
/* 	});*/
/* 	{% endfor %} */
/* 	var content_modal = '<div id="bt-quick-shop-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;"></div><div class="loading-qs" style="position:fixed;top:50%;left:50%"></div>';*/
/* 	$('body').append(content_modal);*/
/* }*/
/* */
/* function getModalContent(product_id) {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/module/boss_quick_shop_product',*/
/* 		dataType: 'json',*/
/* 		data: 'product_id=' + product_id,*/
/* 		beforeSend: function() {*/
/* 			$('body').append('<span class="loading"></span>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('.loading').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('#bt-quick-shop-modal').html(json['html']);*/
/* 			$('#bt-quick-shop-modal > .modal-dialog').css({*/
/* 				'width': '95%',*/
/* 				'max-width': '{{ width }}px',*/
/* 			});*/
/* 		}*/
/* 	});*/
/* }*/
/* //--></script>*/
