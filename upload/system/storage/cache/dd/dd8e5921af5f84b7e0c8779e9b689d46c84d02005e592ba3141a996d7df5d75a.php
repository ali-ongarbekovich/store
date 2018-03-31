<?php

/* bt_laparis/template/extension/module/newslettersubscribe.twig */
class __TwigTemplate_0a34ef0cc93fe2cf6d783f34ad518938a42f8b32a35baa58fffb0c83332e0a06 extends Twig_Template
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
        echo "<div id=\"boss-newslette-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\">
  ";
        // line 2
        if ((isset($context["sidebar"]) ? $context["sidebar"] : null)) {
            echo " 
  <div class=\"bt-newsletter box style-2 sidebar cover-bg\" ";
            // line 3
            if ((isset($context["bg_image"]) ? $context["bg_image"] : null)) {
                echo " style=\"background-image: url('";
                echo (isset($context["bg_image"]) ? $context["bg_image"] : null);
                echo "');\" ";
            }
            echo ">
    <div class=\"box-heading\">
      <h2> ";
            // line 5
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h2>
    </div>
    <div class=\"box-content\">
      <div class=\"sub-title\">";
            // line 8
            echo (isset($context["sub_title"]) ? $context["sub_title"] : null);
            echo "</div>
      <form id=\"subscribe-";
            // line 9
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\">
        <div class=\"boss-newsletter\">
          <input class=\"form-control input-new\" size=\"50\" type=\"text\" placeholder=\"";
            // line 11
            echo (isset($context["text_email"]) ? $context["text_email"] : null);
            echo "\" name=\"subscribe_email\" id=\"subscribe_email\" />
        </div>
        <div class=\"boss-newslette-result\"></div>
        <div class=\"buttons\">
          <a class=\"btn btn-default\" onclick=\"email_subscribe(this);\">";
            // line 15
            echo (isset($context["text_subscribe"]) ? $context["text_subscribe"] : null);
            echo "</a>
          ";
            // line 16
            if ((isset($context["unsubscribe"]) ? $context["unsubscribe"] : null)) {
                echo " 
          <a class=\"btn btn-default\" onclick=\"email_unsubscribe(this);\"><span>";
                // line 17
                echo (isset($context["entry_unbutton"]) ? $context["entry_unbutton"] : null);
                echo "</span></a>
          ";
            }
            // line 18
            echo " 
        </div>
        <input type=\"hidden\" name=\"module_id\" value=\"";
            // line 20
            echo (isset($context["module_id"]) ? $context["module_id"] : null);
            echo "\" />
        <input type=\"hidden\" name=\"subscribe_name\" />
      </form>
    </div>
  </div>
  ";
        } else {
            // line 25
            echo " 
  <div class=\"bt-newsletter content parallax-bg\" ";
            // line 26
            if ((isset($context["bg_image"]) ? $context["bg_image"] : null)) {
                echo " style=\"background-image: url('";
                echo (isset($context["bg_image"]) ? $context["bg_image"] : null);
                echo "');\" ";
            }
            echo ">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"title text-center\">
            <h2>";
            // line 31
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h2>
            <p>";
            // line 32
            echo (isset($context["sub_title"]) ? $context["sub_title"] : null);
            echo "</p>
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"newsletter-content\">
            <div id=\"frm_subscribe\">
              <form id=\"subscribe-";
            // line 38
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\">
                <div class=\"input-group boss-newsletter\">
                  <input class=\"form-control input-new\" size=\"50\" type=\"text\" placeholder=\"";
            // line 40
            echo (isset($context["text_email"]) ? $context["text_email"] : null);
            echo "\" name=\"subscribe_email\" id=\"subscribe_email\" />
                  <span class=\"input-group-addon\"> <a class=\"\" onclick=\"email_subscribe(this);\">";
            // line 41
            echo (isset($context["text_subscribe"]) ? $context["text_subscribe"] : null);
            echo "</a></span> </div>
                <div class=\"boss-newslette-result\"></div>
                ";
            // line 43
            if ((isset($context["unsubscribe"]) ? $context["unsubscribe"] : null)) {
                echo " 
                <div class=\"buttons text-center\"> <a class=\"btn btn-default\" onclick=\"email_unsubscribe(this);\"><span>";
                // line 44
                echo (isset($context["entry_unbutton"]) ? $context["entry_unbutton"] : null);
                echo "</span></a> </div>
                ";
            }
            // line 45
            echo " 
                <input type=\"hidden\" name=\"module_id\" value=\"";
            // line 46
            echo (isset($context["module_id"]) ? $context["module_id"] : null);
            echo "\" />
                <input type=\"hidden\" name=\"subscribe_name\" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 55
        echo " 
  <script type=\"text/javascript\"><!--
function email_subscribe(index){
\t\$.ajax({
\t\ttype: 'post',
\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribe',
\t\tdataType: 'json',
\t\tdata: \$(index).parents('form').serialize(),
\t\tsuccess: function (json) {
\t\t\tif (json['success']) {
\t\t\t\t\$(index).parents('form').find('.boss-newslette-result').html(json['success']);
\t\t\t} else {
\t\t\t\t\$(index).parents('form').find('.boss-newslette-result').html(json['error']);
\t\t\t}
\t\t}
\t}); 
}
function email_unsubscribe(index){
\t\$.ajax({
\t\ttype: 'post',
\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\tdataType: 'json',
\t\tdata: \$(index).parents('form').serialize(),
\t\tsuccess: function (json) {
\t\t\tif (json['success']) {
\t\t\t\t\$(index).parents('form').find('.boss-newslette-result').html(json['success']);
\t\t\t} else {
\t\t\t\t\$(index).parents('form').find('.boss-newslette-result').html(json['error']);
\t\t\t}
\t\t}
\t}); 
}

\$('.boss-newsletter input[name=\"subscribe_email\"]').on('keyup', function(e) {
\tif (e.keyCode == 13) {
\t\t\$(this).parent().find('a').trigger('click');
\t}
});

\$('#subscribe-";
        // line 94
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').on('submit', function(e) {
\te.preventDefault();
\temail_subscribe();
});
//--></script> 
</div>
";
        // line 100
        if ((isset($context["show_popup"]) ? $context["show_popup"] : null)) {
            echo " 
<div id=\"boss-newslette-popup";
            // line 101
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"bt-newsletter-popup parallax-bg v-padding-70\" ";
            // line 104
            if ($this->getAttribute((isset($context["popup"]) ? $context["popup"] : null), "background", array(), "array")) {
                echo " style=\"background-image: url('";
                echo $this->getAttribute((isset($context["popup"]) ? $context["popup"] : null), "background", array(), "array");
                echo "');\" ";
            }
            echo ">
        <div class=\"bt-container\">
          <div class=\"title text-center\">
            <h2>";
            // line 107
            echo $this->getAttribute((isset($context["popup"]) ? $context["popup"] : null), "title", array(), "array");
            echo "</h2>
            <p>";
            // line 108
            echo $this->getAttribute((isset($context["popup"]) ? $context["popup"] : null), "sub_title", array(), "array");
            echo "</p>
          </div>
          <div class=\"newsletter-content\">
            <div id=\"frm_subscribe\">
              <form>
                <div class=\"col-sm-8 col-sm-offset-2\">
                  <div class=\"input-group boss-newsletter\">
                    <input class=\"form-control input-new\" size=\"50\" type=\"text\" placeholder=\"";
            // line 115
            echo (isset($context["text_email"]) ? $context["text_email"] : null);
            echo "\" name=\"subscribe_email\" id=\"subscribe_email\" />
                    <span class=\"input-group-addon\"> <a class=\"btn btn-primary\" onclick=\"email_subscribe(this);\"><i class=\"fa fa-paper-plane\"></i></a></span> </div>
                  <label class=\"checkbox\">
                    <input type=\"checkbox\" value=\"1\" name=\"subscribe_checkbox\" id=\"subscribe_checkbox\" onclick=\"validate()\" />
                    ";
            // line 119
            echo (isset($context["text_not_show"]) ? $context["text_not_show"] : null);
            echo " </label>
                  <div class=\"boss-newslette-result\"></div>
                  ";
            // line 121
            if ((isset($context["unsubscribe"]) ? $context["unsubscribe"] : null)) {
                echo " 
                  <div class=\"buttons text-center\"> <a class=\"btn btn-default\" onclick=\"email_unsubscribe(this);\"><span>";
                // line 122
                echo (isset($context["entry_unbutton"]) ? $context["entry_unbutton"] : null);
                echo "</span></a> </div>
                  ";
            }
            // line 123
            echo " 
                </div>
                <input type=\"hidden\" name=\"module_id\" value=\"";
            // line 125
            echo (isset($context["module_id"]) ? $context["module_id"] : null);
            echo "\" />
                <input type=\"hidden\" name=\"subscribe_name\" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\">
\$(window).load(function() {
\t\$('#boss-newslette-popup";
            // line 136
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "').modal('show');
});

function validate () {
\tif (\$('input[name=\"subscribe_checkbox\"]').is(':checked')) { 
\t\tdocument.cookie=\"b_newsletter_popup=disable\"; 
\t} else { 
\t\tdocument.cookie=\"b_newsletter_popup=enable;\";
\t}
}
</script> 
</div>
";
        }
        // line 148
        echo " 
";
    }

    public function getTemplateName()
    {
        return "bt_laparis/template/extension/module/newslettersubscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 148,  275 => 136,  261 => 125,  257 => 123,  252 => 122,  248 => 121,  243 => 119,  236 => 115,  226 => 108,  222 => 107,  212 => 104,  206 => 101,  202 => 100,  193 => 94,  152 => 55,  139 => 46,  136 => 45,  131 => 44,  127 => 43,  122 => 41,  118 => 40,  113 => 38,  104 => 32,  100 => 31,  88 => 26,  85 => 25,  76 => 20,  72 => 18,  67 => 17,  63 => 16,  59 => 15,  52 => 11,  47 => 9,  43 => 8,  37 => 5,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div id="boss-newslette-{{ module }}">*/
/*   {% if (sidebar) %} */
/*   <div class="bt-newsletter box style-2 sidebar cover-bg" {% if (bg_image) %} style="background-image: url('{{ bg_image }}');" {% endif %}>*/
/*     <div class="box-heading">*/
/*       <h2> {{ title }}</h2>*/
/*     </div>*/
/*     <div class="box-content">*/
/*       <div class="sub-title">{{ sub_title }}</div>*/
/*       <form id="subscribe-{{ module }}">*/
/*         <div class="boss-newsletter">*/
/*           <input class="form-control input-new" size="50" type="text" placeholder="{{ text_email }}" name="subscribe_email" id="subscribe_email" />*/
/*         </div>*/
/*         <div class="boss-newslette-result"></div>*/
/*         <div class="buttons">*/
/*           <a class="btn btn-default" onclick="email_subscribe(this);">{{ text_subscribe }}</a>*/
/*           {% if (unsubscribe) %} */
/*           <a class="btn btn-default" onclick="email_unsubscribe(this);"><span>{{ entry_unbutton }}</span></a>*/
/*           {% endif %} */
/*         </div>*/
/*         <input type="hidden" name="module_id" value="{{ module_id }}" />*/
/*         <input type="hidden" name="subscribe_name" />*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/*   {% else %} */
/*   <div class="bt-newsletter content parallax-bg" {% if (bg_image) %} style="background-image: url('{{ bg_image }}');" {% endif %}>*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           <div class="title text-center">*/
/*             <h2>{{ title }}</h2>*/
/*             <p>{{ sub_title }}</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*           <div class="newsletter-content">*/
/*             <div id="frm_subscribe">*/
/*               <form id="subscribe-{{ module }}">*/
/*                 <div class="input-group boss-newsletter">*/
/*                   <input class="form-control input-new" size="50" type="text" placeholder="{{ text_email }}" name="subscribe_email" id="subscribe_email" />*/
/*                   <span class="input-group-addon"> <a class="" onclick="email_subscribe(this);">{{ text_subscribe }}</a></span> </div>*/
/*                 <div class="boss-newslette-result"></div>*/
/*                 {% if (unsubscribe) %} */
/*                 <div class="buttons text-center"> <a class="btn btn-default" onclick="email_unsubscribe(this);"><span>{{ entry_unbutton }}</span></a> </div>*/
/*                 {% endif %} */
/*                 <input type="hidden" name="module_id" value="{{ module_id }}" />*/
/*                 <input type="hidden" name="subscribe_name" />*/
/*               </form>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endif %} */
/*   <script type="text/javascript"><!--*/
/* function email_subscribe(index){*/
/* 	$.ajax({*/
/* 		type: 'post',*/
/* 		url: 'index.php?route=extension/module/newslettersubscribe/subscribe',*/
/* 		dataType: 'json',*/
/* 		data: $(index).parents('form').serialize(),*/
/* 		success: function (json) {*/
/* 			if (json['success']) {*/
/* 				$(index).parents('form').find('.boss-newslette-result').html(json['success']);*/
/* 			} else {*/
/* 				$(index).parents('form').find('.boss-newslette-result').html(json['error']);*/
/* 			}*/
/* 		}*/
/* 	}); */
/* }*/
/* function email_unsubscribe(index){*/
/* 	$.ajax({*/
/* 		type: 'post',*/
/* 		url: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',*/
/* 		dataType: 'json',*/
/* 		data: $(index).parents('form').serialize(),*/
/* 		success: function (json) {*/
/* 			if (json['success']) {*/
/* 				$(index).parents('form').find('.boss-newslette-result').html(json['success']);*/
/* 			} else {*/
/* 				$(index).parents('form').find('.boss-newslette-result').html(json['error']);*/
/* 			}*/
/* 		}*/
/* 	}); */
/* }*/
/* */
/* $('.boss-newsletter input[name="subscribe_email"]').on('keyup', function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		$(this).parent().find('a').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('#subscribe-{{ module }}').on('submit', function(e) {*/
/* 	e.preventDefault();*/
/* 	email_subscribe();*/
/* });*/
/* //--></script> */
/* </div>*/
/* {% if (show_popup) %} */
/* <div id="boss-newslette-popup{{ module }}" class="modal fade" role="dialog">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="bt-newsletter-popup parallax-bg v-padding-70" {% if (popup['background']) %} style="background-image: url('{{ popup['background'] }}');" {% endif %}>*/
/*         <div class="bt-container">*/
/*           <div class="title text-center">*/
/*             <h2>{{ popup['title'] }}</h2>*/
/*             <p>{{ popup['sub_title'] }}</p>*/
/*           </div>*/
/*           <div class="newsletter-content">*/
/*             <div id="frm_subscribe">*/
/*               <form>*/
/*                 <div class="col-sm-8 col-sm-offset-2">*/
/*                   <div class="input-group boss-newsletter">*/
/*                     <input class="form-control input-new" size="50" type="text" placeholder="{{ text_email }}" name="subscribe_email" id="subscribe_email" />*/
/*                     <span class="input-group-addon"> <a class="btn btn-primary" onclick="email_subscribe(this);"><i class="fa fa-paper-plane"></i></a></span> </div>*/
/*                   <label class="checkbox">*/
/*                     <input type="checkbox" value="1" name="subscribe_checkbox" id="subscribe_checkbox" onclick="validate()" />*/
/*                     {{ text_not_show }} </label>*/
/*                   <div class="boss-newslette-result"></div>*/
/*                   {% if (unsubscribe) %} */
/*                   <div class="buttons text-center"> <a class="btn btn-default" onclick="email_unsubscribe(this);"><span>{{ entry_unbutton }}</span></a> </div>*/
/*                   {% endif %} */
/*                 </div>*/
/*                 <input type="hidden" name="module_id" value="{{ module_id }}" />*/
/*                 <input type="hidden" name="subscribe_name" />*/
/*               </form>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript">*/
/* $(window).load(function() {*/
/* 	$('#boss-newslette-popup{{ module }}').modal('show');*/
/* });*/
/* */
/* function validate () {*/
/* 	if ($('input[name="subscribe_checkbox"]').is(':checked')) { */
/* 		document.cookie="b_newsletter_popup=disable"; */
/* 	} else { */
/* 		document.cookie="b_newsletter_popup=enable;";*/
/* 	}*/
/* }*/
/* </script> */
/* </div>*/
/* {% endif %} */
/* */
