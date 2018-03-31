<?php

/* extension/module/boss_module_layout.twig */
class __TwigTemplate_c79dc9dcab24d0749dd7ac2d5e2070ff41e616b84120cdca3480b3e28429525b extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 

<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary submit\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 12
            echo $this->getAttribute($context["breadcrumb"], "href", array(), "array");
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array(), "array");
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo " 
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 19
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo " 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module-layout\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 30
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 33
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            echo " 
              <div class=\"text-danger\">";
            // line 34
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo " 
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 39
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 42
        if ((isset($context["status"]) ? $context["status"] : null)) {
            echo " 
                <option value=\"1\" selected=\"selected\">";
            // line 43
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 44
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 45
            echo " 
                <option value=\"1\">";
            // line 46
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 47
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 48
        echo " 
              </select>
            </div>
          </div>
\t\t  <textarea name=\"raw\" class=\"hidden\">";
        // line 52
        echo (isset($context["raw"]) ? $context["raw"] : null);
        echo "</textarea>
\t\t  <textarea name=\"publish\" class=\"hidden\">";
        // line 53
        echo (isset($context["publish"]) ? $context["publish"] : null);
        echo "</textarea>
        </form>
      </div>
    </div>
    <div class=\"tab-pane\">
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div id=\"console\" class=\"form-horizontal\">
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-num-cols\">";
        // line 62
        echo (isset($context["entry_num_cols"]) ? $context["entry_num_cols"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div id=\"num-cols\"></div>
                <select name=\"num_cols\" id=\"input-num-cols\" class=\"form-control\">
                  <option value=\"1\">1</option>
                  <option value=\"2\">2</option>
                  <option value=\"3\">3</option>
                  <option value=\"4\">4</option>
                  <option value=\"6\">6</option>
                  <option value=\"12\">12</option>
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-col-sm\">";
        // line 76
        echo (isset($context["entry_col_sm"]) ? $context["entry_col_sm"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div id=\"col-sm\"></div>
                <input type=\"text\" name=\"col_sm\" id=\"input-col-sm\" value=\"12\" style=\"width: 20px;\" disabled>
                <div id=\"sm-preview\" class=\"frame-preview\"></div>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-col-xs\">";
        // line 84
        echo (isset($context["entry_col_xs"]) ? $context["entry_col_xs"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div id=\"col-xs\"></div>
                <input type=\"text\" name=\"col_xs\" id=\"input-col-xs\" value=\"12\" style=\"width: 20px;\" disabled>
                <div id=\"xs-preview\" class=\"frame-preview\"></div>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-class\">";
        // line 92
        echo (isset($context["entry_class"]) ? $context["entry_class"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"class\" placeholder=\"";
        // line 94
        echo (isset($context["entry_class"]) ? $context["entry_class"] : null);
        echo "\" id=\"input-class\" class=\"form-control\">
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-full-width\">";
        // line 98
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"checkbox\" name=\"full_width\" checked>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" ></label>
              <div class=\"col-sm-10\"> <a class=\"btn btn-primary add-frame\" onclick=\"addFrames();\">";
        // line 105
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"tab-pane\">
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div id=\"monitor\" class=\"col-sm-12\">
            <div class=\"row base\">
\t\t\t  ";
        // line 116
        if ((isset($context["raw"]) ? $context["raw"] : null)) {
            echo " 
\t\t\t    ";
            // line 117
            echo $this->env->getExtension('bt')->_htmlEntityDecode((isset($context["raw"]) ? $context["raw"] : null));
            echo " 
\t\t\t  ";
        } else {
            // line 118
            echo " 
                <div class=\"pre-div\"></div>
\t\t\t  ";
        }
        // line 120
        echo " 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id=\"module-popup\" class=\"stick-popup\">
  <div class=\"popup-content\">
    <div class=\"popup-button\"><i class=\"fa fa-bars fa-lg\"></i></div>
    <div class=\"panel-default extension\">
      ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            echo " 
      ";
            // line 133
            if (twig_test_empty($this->getAttribute($context["extension"], "module", array(), "array"))) {
                echo " 
      <div class=\"module\">
        <div class=\"title\">";
                // line 135
                echo $this->getAttribute($context["extension"], "name", array(), "array");
                echo "</div>
        <div class=\"remove\"><i class=\"fa fa-minus-circle\"></i></div>
        <div class=\"shortcode\">[";
                // line 137
                echo $this->getAttribute($context["extension"], "code", array(), "array");
                echo " /]</div>
      </div>
      ";
            } else {
                // line 139
                echo " 
      ";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    echo " 
      <div class=\"module\">
        <div class=\"title\">";
                    // line 142
                    echo $this->getAttribute($context["extension"], "name", array(), "array");
                    echo " > ";
                    echo $this->getAttribute($context["module"], "name", array(), "array");
                    echo "</div>
        <div class=\"remove\"><i class=\"fa fa-minus-circle\"></i></div>
        <div class=\"shortcode\">[";
                    // line 144
                    echo $this->getAttribute($context["module"], "code", array(), "array");
                    echo " /]</div>
      </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo " 
      ";
            }
            // line 147
            echo " 
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo " 
    </div>
  </div>
</div>
<script type=\"text/javascript\">
var drag_row = 0;
var node;

\$('#col-sm').slider({
\tmin: 0,
\tmax: 12,
\trange: \"min\",
\tanimate: \"slow\",
\tvalue: 12,
\tslide: function( event, ui ) {
\t\t\$('#console input[name=\"col_sm\"]').val(ui.value);
\t},
\tchange: function( event, ui ) {
\t\t\$('#console input[name=\"col_sm\"]').val(ui.value).trigger('change');
\t}
});

\$('#col-xs').slider({
\tmin: 0,
\tmax: 12,
\trange: \"min\",
\tanimate: \"slow\",
\tvalue: 12,
\tstep: 6,
\tslide: function( event, ui ) {
\t\t\$('#console input[name=\"col_xs\"]').val(ui.value);
\t},
\tchange: function( event, ui ) {
\t\t\$('#console input[name=\"col_xs\"]').val(ui.value).trigger('change');
\t\tif(ui.value < 6) \$('#col-xs').slider('value', 6);
\t}
});

\$('#console input[name=\"full_width\"]').bootstrapSwitch({
\tonText: '";
        // line 187
        echo (isset($context["text_full_width"]) ? $context["text_full_width"] : null);
        echo "',
\toffText: '";
        // line 188
        echo (isset($context["text_1170_px"]) ? $context["text_1170_px"] : null);
        echo "',
\thandleWidth: '150',
\tlabelWidth: '10',
\tonColor: 'primary',
\toffColor: 'primary',
\tindeterminate: true,
\tonSwitchChange: function(event, state) {
\t\tif(state){
\t\t\t\$('#console input[name=\"full_width\"]').val('100%');
\t\t}else{
\t\t\t\$('#console input[name=\"full_width\"]').val('1170px');
\t\t}
\t}
});

\$(function(){
\tsetSortable();
\tsetResizable();
\tsetResizable();
});

\$(document).delegate('#console select[name=\"num_cols\"]', 'change click',function (event) {
\tvar num_cols = parseInt(\$(this).val());
\t\$('#col-sm').slider('value', (12/num_cols));
\t
\tslipCols();
});

\$(document).delegate('#console input[name=\"col_sm\"], input[name=\"col_xs\"]', 'change click',function (event) {
\tslipCols();
});

\$(document).delegate('.frame-down', 'click',function () {
\tparent = \$(this).parent().parent();
\tswap = parent.next();
\tparent.before(swap.detach());
});

\$(document).delegate('.frame-up', 'click',function () {
\tparent = \$(this).parent().parent();
\tswap = parent.prev();
\tparent.after(swap.detach());
});

\$(document).delegate('.frame-remove', 'click',function () {
\t\$(this).parent().parent().remove();
});

\$(document).delegate('.module > .remove', 'click',function () {
\t\$(this).parent().remove();
});

\$(document).delegate('button.submit', 'click', function () {
\t\$('#monitor .base, #monitor .frame').sortable('destroy').removeAttr('style');
\t\$('#monitor .frame-resize').resizable('destroy').removeAttr('style');
\t
\t\$('textarea[name=\"raw\"]').val(\$('#monitor > .base').html());
\t
\t\$('#monitor .frame-resize').removeClass('frame-resize').removeAttr('style');
\t
\t\$('#monitor .module-frame').removeClass('module-frame').removeAttr('style');
\t
\t\$('#monitor .container .frame').removeClass('frame');
\t
\t\$('#monitor .frame-header, #monitor .pre-div').remove();
\t
\t\$('#monitor .shortcode').each(function(index, element) {
        var parent = \$(this).parent();
\t\tvar shortcode = \$(this).html();
\t\t
\t\tparent.replaceWith(shortcode);
    });
\t
\t\$('textarea[name=\"publish\"]').val(\$('#monitor > .base').html());
\t
\t\$('#form-module-layout').submit();
});

setTimeout(function(){if(\$('#column-left').hasClass('active')) \$('#button-menu').trigger('click');}, 500);

function round(number) {
\tArray.prototype.min = function() {
\t\treturn Math.min.apply(null, this);
\t};
\t
\tvar step = [8.33, 16.66, 25, 33.33, 41.66, 50, 58.33, 66.66, 75, 83.33, 91.66, 100];
\tvar ref = [];
\t
\tfor(i in step) ref[i] = Math.abs(step[i]-number);
\tvar min = Math.min.apply(null, ref);
\tfor(i in ref) if(ref[i] == min) return step[i];
}

function slipCols(){
\tvar num_cols = parseInt(\$('#console select[name=\"num_cols\"]').val());
\tvar col_sm = parseInt(\$('#console input[name=\"col_sm\"]').val());
\tvar col_xs = parseInt(\$('#console input[name=\"col_xs\"]').val());
\t
\tif(col_sm < 1) col_sm = 1;
\tif(col_sm > 12) col_sm = 12;
\t
\tif(col_xs < 6) col_xs = 6;
\tif(col_xs > 12) col_xs = 12;
\t
\tvar html = '';
\t
\tfor( var i = 0; i < num_cols; i++) {
\t\thtml += '<div class=\"col-sm-'+col_sm+'\"></div>';
\t}
\t
\t\$('#sm-preview').html(html);
\t
\tvar html = '';
\t
\tfor( var i = 0; i < num_cols; i++) {
\t\thtml += '<div class=\"col-sm-'+col_xs+'\"></div>';
\t}
\t
\t\$('#xs-preview').html(html);
}

function addFrames(){
\tvar num_cols = parseInt(\$('#console select[name=\"num_cols\"]').val());
\tvar col_sm = parseInt(\$('#console input[name=\"col_sm\"]').val());
\tvar col_xs = parseInt(\$('#console input[name=\"col_xs\"]').val());
\tvar width = \$('#console input[name=\"full_width\"]').val();
\tvar _class = \$('#console input[name=\"class\"]').val();
\t
\tif(col_sm < 1) col_sm = 1;
\tif(col_sm > 12) col_sm = 12;
\t
\tif(col_xs < 6) col_xs = 6;
\tif(col_xs > 12) col_xs = 12;
\t
\tif(width == '1170px'){
\t\tvar page_container = 'container';
\t}else{
\t\tvar page_container = 'container-fluid';
\t}
\t
\tvar html = '';

\thtml += '<div class=\"module-frame ' + _class + ' ' + page_container + '\">';
\t\thtml += '<div class=\"frame-header\"><div class=\"frame-title\">' + _class + '</div><div class=\"frame-down\"><i class=\"fa fa-long-arrow-down\"></i></div><div class=\"frame-up\"><i class=\"fa fa-long-arrow-up\"></i></div><div class=\"frame-remove\"><i class=\"fa fa-trash\"></i></div></div>';
\t\thtml += '<div class=\"row\">';
\t\t\tfor(var i = 0; i < num_cols; i++){
\t\t\t\thtml += '<div class=\"col-sm-'+col_sm+' col-xs-'+col_xs+' frame-resize\"><div class=\"frame\"><div class=\"pre-div\"></div></div></div>';
\t\t\t}
\t\thtml += '</div>';
\thtml += '</div>';
\t
\t\$('#monitor > .base').append(html);
\t
\tdrag_row++;
\t
\tsetSortable();
\tsetResizable();
}

function setSortable(){
\t\$('.base').sortable({
\t\tcursor: 'move',
\t\tplaceholder: 'placeholder',
\t\tforcePlaceholderSize: true,
\t\topacity: 0.4
\t});
\t
\t\$('.frame').sortable({
\t\tconnectWith: '.frame',
\t\tcursor: 'move',
\t\tplaceholder: 'placeholder',
\t\tforcePlaceholderSize: true,
\t\topacity: 0.4,
\t\tstop: function(event, ui){
\t\t\t
\t\t}
\t});
\t
\t\$('.extension').sortable({
\t\thelper: 'clone',
\t\tconnectWith: '.frame',
\t\tcursor: 'move',
\t\tplaceholder: 'placeholder',
\t\tforcePlaceholderSize: true,
\t\topacity: 0.4,
\t\tstar: function(event, ui){
\t\t\t
\t\t},
\t\tstop: function(event, ui){
\t\t\tvar idx = \$('.frame').children().index(\$(ui.item[0]));
\t\t\tvar elm = \$(ui.item[0]).clone(true);
\t\t\t\$('.frame').children(':eq('+idx+')').after(elm);
\t\t\t
\t\t\t\$(this).sortable('cancel');
\t\t\tdrag_row++;
\t\t}
\t})
\t.disableSelection();
}

function setResizable(){
    var sib_total_width;
\tvar old_sm_col;
\tvar next_cell_old_sm_col;
\t
    \$('.frame-resize').resizable({
        handles: 'e',
\t\tautoHide: false,
        start: function(event, ui){
\t\t\tvar container = ui.originalElement.parent();
            sib_total_width = ui.originalSize.width + ui.originalElement.next().outerWidth();
\t\t\told_sm_col = 'col-sm-'+(12*ui.originalElement.outerWidth() / container.innerWidth()).toFixed(0);
\t\t\tnext_cell_old_sm_col = 'col-sm-'+(12*ui.originalElement.next().outerWidth() / container.innerWidth()).toFixed(0);
\t\t\tui.originalElement.resizable('option', 'maxWidth', (sib_total_width-80));
        },
        stop: function(event, ui){
\t\t\tvar container = ui.originalElement.parent(); 
            var cell_percent_width = (100 * ui.originalElement.outerWidth()/ container.innerWidth()).toFixed(2);
\t\t\tvar cell_percent_width_round = round(cell_percent_width);
\t\t\tvar balance = cell_percent_width_round-cell_percent_width;
\t\t\t
\t\t\tui.originalElement.css('width', cell_percent_width_round + '%');
\t\t\t
\t\t\tvar col_sm = 'col-sm-'+(12*ui.originalElement.outerWidth() / container.innerWidth()).toFixed(0);
\t\t\t
\t\t\tui.originalElement.removeClass(old_sm_col).addClass(col_sm).removeAttr('style'); 
\t\t\t
            var next_cell = ui.originalElement.next();
\t\t\tvar next_percent_width= round((100 * next_cell.outerWidth()/container.innerWidth()).toFixed(2)-balance);
\t\t\t
            next_cell.css('width', next_percent_width + '%');
\t\t\t
\t\t\tvar next_cell_sm_col = 'col-sm-'+(12*next_cell.outerWidth() / container.innerWidth()).toFixed(0);
\t\t\t
\t\t\tnext_cell.removeClass(next_cell_old_sm_col).addClass(next_cell_sm_col).removeAttr('style'); 
        },
        resize: function(event, ui){ 
\t\t\tui.originalElement.next().width(sib_total_width - ui.size.width); 
        }
    });
\t
\t\$(\".frame-resize:last-child\").resizable('disable');
}
</script> 
";
        // line 432
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/boss_module_layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  627 => 432,  380 => 188,  376 => 187,  335 => 148,  328 => 147,  324 => 146,  315 => 144,  308 => 142,  301 => 140,  298 => 139,  292 => 137,  287 => 135,  282 => 133,  276 => 132,  262 => 120,  257 => 118,  252 => 117,  248 => 116,  234 => 105,  224 => 98,  217 => 94,  212 => 92,  201 => 84,  190 => 76,  173 => 62,  161 => 53,  157 => 52,  151 => 48,  146 => 47,  142 => 46,  139 => 45,  134 => 44,  130 => 43,  126 => 42,  120 => 39,  114 => 35,  109 => 34,  105 => 33,  99 => 32,  94 => 30,  89 => 28,  83 => 25,  78 => 22,  71 => 19,  67 => 18,  60 => 13,  50 => 12,  44 => 11,  39 => 9,  33 => 8,  29 => 7,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }} */
/* */
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary submit"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %} */
/*         <li><a href="{{ breadcrumb['href'] }}">{{ breadcrumb['text'] }}</a></li>*/
/*         {% endfor %} */
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if (error_warning) %} */
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }} */
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %} */
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module-layout" class="form-horizontal">*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*               {% if (error_name) %} */
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %} */
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="status" id="input-status" class="form-control">*/
/*                 {% if (status) %} */
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %} */
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %} */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/* 		  <textarea name="raw" class="hidden">{{ raw }}</textarea>*/
/* 		  <textarea name="publish" class="hidden">{{ publish }}</textarea>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*     <div class="tab-pane">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*           <div id="console" class="form-horizontal">*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-num-cols">{{ entry_num_cols }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div id="num-cols"></div>*/
/*                 <select name="num_cols" id="input-num-cols" class="form-control">*/
/*                   <option value="1">1</option>*/
/*                   <option value="2">2</option>*/
/*                   <option value="3">3</option>*/
/*                   <option value="4">4</option>*/
/*                   <option value="6">6</option>*/
/*                   <option value="12">12</option>*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-col-sm">{{ entry_col_sm }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div id="col-sm"></div>*/
/*                 <input type="text" name="col_sm" id="input-col-sm" value="12" style="width: 20px;" disabled>*/
/*                 <div id="sm-preview" class="frame-preview"></div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-col-xs">{{ entry_col_xs }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <div id="col-xs"></div>*/
/*                 <input type="text" name="col_xs" id="input-col-xs" value="12" style="width: 20px;" disabled>*/
/*                 <div id="xs-preview" class="frame-preview"></div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-class">{{ entry_class }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="class" placeholder="{{ entry_class }}" id="input-class" class="form-control">*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-full-width">{{ entry_width }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="checkbox" name="full_width" checked>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" ></label>*/
/*               <div class="col-sm-10"> <a class="btn btn-primary add-frame" onclick="addFrames();">{{ button_add }}</a> </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="tab-pane">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*           <div id="monitor" class="col-sm-12">*/
/*             <div class="row base">*/
/* 			  {% if (raw) %} */
/* 			    {{ html_entity_decode(raw) }} */
/* 			  {% else %} */
/*                 <div class="pre-div"></div>*/
/* 			  {% endif %} */
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <div id="module-popup" class="stick-popup">*/
/*   <div class="popup-content">*/
/*     <div class="popup-button"><i class="fa fa-bars fa-lg"></i></div>*/
/*     <div class="panel-default extension">*/
/*       {% for extension in extensions %} */
/*       {% if (extension['module'] is empty ) %} */
/*       <div class="module">*/
/*         <div class="title">{{ extension['name'] }}</div>*/
/*         <div class="remove"><i class="fa fa-minus-circle"></i></div>*/
/*         <div class="shortcode">[{{ extension['code'] }} /]</div>*/
/*       </div>*/
/*       {% else %} */
/*       {% for module in extension['module'] %} */
/*       <div class="module">*/
/*         <div class="title">{{ extension['name'] }} > {{ module['name'] }}</div>*/
/*         <div class="remove"><i class="fa fa-minus-circle"></i></div>*/
/*         <div class="shortcode">[{{ module['code'] }} /]</div>*/
/*       </div>*/
/*       {% endfor %} */
/*       {% endif %} */
/*       {% endfor %} */
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* var drag_row = 0;*/
/* var node;*/
/* */
/* $('#col-sm').slider({*/
/* 	min: 0,*/
/* 	max: 12,*/
/* 	range: "min",*/
/* 	animate: "slow",*/
/* 	value: 12,*/
/* 	slide: function( event, ui ) {*/
/* 		$('#console input[name="col_sm"]').val(ui.value);*/
/* 	},*/
/* 	change: function( event, ui ) {*/
/* 		$('#console input[name="col_sm"]').val(ui.value).trigger('change');*/
/* 	}*/
/* });*/
/* */
/* $('#col-xs').slider({*/
/* 	min: 0,*/
/* 	max: 12,*/
/* 	range: "min",*/
/* 	animate: "slow",*/
/* 	value: 12,*/
/* 	step: 6,*/
/* 	slide: function( event, ui ) {*/
/* 		$('#console input[name="col_xs"]').val(ui.value);*/
/* 	},*/
/* 	change: function( event, ui ) {*/
/* 		$('#console input[name="col_xs"]').val(ui.value).trigger('change');*/
/* 		if(ui.value < 6) $('#col-xs').slider('value', 6);*/
/* 	}*/
/* });*/
/* */
/* $('#console input[name="full_width"]').bootstrapSwitch({*/
/* 	onText: '{{ text_full_width }}',*/
/* 	offText: '{{ text_1170_px }}',*/
/* 	handleWidth: '150',*/
/* 	labelWidth: '10',*/
/* 	onColor: 'primary',*/
/* 	offColor: 'primary',*/
/* 	indeterminate: true,*/
/* 	onSwitchChange: function(event, state) {*/
/* 		if(state){*/
/* 			$('#console input[name="full_width"]').val('100%');*/
/* 		}else{*/
/* 			$('#console input[name="full_width"]').val('1170px');*/
/* 		}*/
/* 	}*/
/* });*/
/* */
/* $(function(){*/
/* 	setSortable();*/
/* 	setResizable();*/
/* 	setResizable();*/
/* });*/
/* */
/* $(document).delegate('#console select[name="num_cols"]', 'change click',function (event) {*/
/* 	var num_cols = parseInt($(this).val());*/
/* 	$('#col-sm').slider('value', (12/num_cols));*/
/* 	*/
/* 	slipCols();*/
/* });*/
/* */
/* $(document).delegate('#console input[name="col_sm"], input[name="col_xs"]', 'change click',function (event) {*/
/* 	slipCols();*/
/* });*/
/* */
/* $(document).delegate('.frame-down', 'click',function () {*/
/* 	parent = $(this).parent().parent();*/
/* 	swap = parent.next();*/
/* 	parent.before(swap.detach());*/
/* });*/
/* */
/* $(document).delegate('.frame-up', 'click',function () {*/
/* 	parent = $(this).parent().parent();*/
/* 	swap = parent.prev();*/
/* 	parent.after(swap.detach());*/
/* });*/
/* */
/* $(document).delegate('.frame-remove', 'click',function () {*/
/* 	$(this).parent().parent().remove();*/
/* });*/
/* */
/* $(document).delegate('.module > .remove', 'click',function () {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* $(document).delegate('button.submit', 'click', function () {*/
/* 	$('#monitor .base, #monitor .frame').sortable('destroy').removeAttr('style');*/
/* 	$('#monitor .frame-resize').resizable('destroy').removeAttr('style');*/
/* 	*/
/* 	$('textarea[name="raw"]').val($('#monitor > .base').html());*/
/* 	*/
/* 	$('#monitor .frame-resize').removeClass('frame-resize').removeAttr('style');*/
/* 	*/
/* 	$('#monitor .module-frame').removeClass('module-frame').removeAttr('style');*/
/* 	*/
/* 	$('#monitor .container .frame').removeClass('frame');*/
/* 	*/
/* 	$('#monitor .frame-header, #monitor .pre-div').remove();*/
/* 	*/
/* 	$('#monitor .shortcode').each(function(index, element) {*/
/*         var parent = $(this).parent();*/
/* 		var shortcode = $(this).html();*/
/* 		*/
/* 		parent.replaceWith(shortcode);*/
/*     });*/
/* 	*/
/* 	$('textarea[name="publish"]').val($('#monitor > .base').html());*/
/* 	*/
/* 	$('#form-module-layout').submit();*/
/* });*/
/* */
/* setTimeout(function(){if($('#column-left').hasClass('active')) $('#button-menu').trigger('click');}, 500);*/
/* */
/* function round(number) {*/
/* 	Array.prototype.min = function() {*/
/* 		return Math.min.apply(null, this);*/
/* 	};*/
/* 	*/
/* 	var step = [8.33, 16.66, 25, 33.33, 41.66, 50, 58.33, 66.66, 75, 83.33, 91.66, 100];*/
/* 	var ref = [];*/
/* 	*/
/* 	for(i in step) ref[i] = Math.abs(step[i]-number);*/
/* 	var min = Math.min.apply(null, ref);*/
/* 	for(i in ref) if(ref[i] == min) return step[i];*/
/* }*/
/* */
/* function slipCols(){*/
/* 	var num_cols = parseInt($('#console select[name="num_cols"]').val());*/
/* 	var col_sm = parseInt($('#console input[name="col_sm"]').val());*/
/* 	var col_xs = parseInt($('#console input[name="col_xs"]').val());*/
/* 	*/
/* 	if(col_sm < 1) col_sm = 1;*/
/* 	if(col_sm > 12) col_sm = 12;*/
/* 	*/
/* 	if(col_xs < 6) col_xs = 6;*/
/* 	if(col_xs > 12) col_xs = 12;*/
/* 	*/
/* 	var html = '';*/
/* 	*/
/* 	for( var i = 0; i < num_cols; i++) {*/
/* 		html += '<div class="col-sm-'+col_sm+'"></div>';*/
/* 	}*/
/* 	*/
/* 	$('#sm-preview').html(html);*/
/* 	*/
/* 	var html = '';*/
/* 	*/
/* 	for( var i = 0; i < num_cols; i++) {*/
/* 		html += '<div class="col-sm-'+col_xs+'"></div>';*/
/* 	}*/
/* 	*/
/* 	$('#xs-preview').html(html);*/
/* }*/
/* */
/* function addFrames(){*/
/* 	var num_cols = parseInt($('#console select[name="num_cols"]').val());*/
/* 	var col_sm = parseInt($('#console input[name="col_sm"]').val());*/
/* 	var col_xs = parseInt($('#console input[name="col_xs"]').val());*/
/* 	var width = $('#console input[name="full_width"]').val();*/
/* 	var _class = $('#console input[name="class"]').val();*/
/* 	*/
/* 	if(col_sm < 1) col_sm = 1;*/
/* 	if(col_sm > 12) col_sm = 12;*/
/* 	*/
/* 	if(col_xs < 6) col_xs = 6;*/
/* 	if(col_xs > 12) col_xs = 12;*/
/* 	*/
/* 	if(width == '1170px'){*/
/* 		var page_container = 'container';*/
/* 	}else{*/
/* 		var page_container = 'container-fluid';*/
/* 	}*/
/* 	*/
/* 	var html = '';*/
/* */
/* 	html += '<div class="module-frame ' + _class + ' ' + page_container + '">';*/
/* 		html += '<div class="frame-header"><div class="frame-title">' + _class + '</div><div class="frame-down"><i class="fa fa-long-arrow-down"></i></div><div class="frame-up"><i class="fa fa-long-arrow-up"></i></div><div class="frame-remove"><i class="fa fa-trash"></i></div></div>';*/
/* 		html += '<div class="row">';*/
/* 			for(var i = 0; i < num_cols; i++){*/
/* 				html += '<div class="col-sm-'+col_sm+' col-xs-'+col_xs+' frame-resize"><div class="frame"><div class="pre-div"></div></div></div>';*/
/* 			}*/
/* 		html += '</div>';*/
/* 	html += '</div>';*/
/* 	*/
/* 	$('#monitor > .base').append(html);*/
/* 	*/
/* 	drag_row++;*/
/* 	*/
/* 	setSortable();*/
/* 	setResizable();*/
/* }*/
/* */
/* function setSortable(){*/
/* 	$('.base').sortable({*/
/* 		cursor: 'move',*/
/* 		placeholder: 'placeholder',*/
/* 		forcePlaceholderSize: true,*/
/* 		opacity: 0.4*/
/* 	});*/
/* 	*/
/* 	$('.frame').sortable({*/
/* 		connectWith: '.frame',*/
/* 		cursor: 'move',*/
/* 		placeholder: 'placeholder',*/
/* 		forcePlaceholderSize: true,*/
/* 		opacity: 0.4,*/
/* 		stop: function(event, ui){*/
/* 			*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	$('.extension').sortable({*/
/* 		helper: 'clone',*/
/* 		connectWith: '.frame',*/
/* 		cursor: 'move',*/
/* 		placeholder: 'placeholder',*/
/* 		forcePlaceholderSize: true,*/
/* 		opacity: 0.4,*/
/* 		star: function(event, ui){*/
/* 			*/
/* 		},*/
/* 		stop: function(event, ui){*/
/* 			var idx = $('.frame').children().index($(ui.item[0]));*/
/* 			var elm = $(ui.item[0]).clone(true);*/
/* 			$('.frame').children(':eq('+idx+')').after(elm);*/
/* 			*/
/* 			$(this).sortable('cancel');*/
/* 			drag_row++;*/
/* 		}*/
/* 	})*/
/* 	.disableSelection();*/
/* }*/
/* */
/* function setResizable(){*/
/*     var sib_total_width;*/
/* 	var old_sm_col;*/
/* 	var next_cell_old_sm_col;*/
/* 	*/
/*     $('.frame-resize').resizable({*/
/*         handles: 'e',*/
/* 		autoHide: false,*/
/*         start: function(event, ui){*/
/* 			var container = ui.originalElement.parent();*/
/*             sib_total_width = ui.originalSize.width + ui.originalElement.next().outerWidth();*/
/* 			old_sm_col = 'col-sm-'+(12*ui.originalElement.outerWidth() / container.innerWidth()).toFixed(0);*/
/* 			next_cell_old_sm_col = 'col-sm-'+(12*ui.originalElement.next().outerWidth() / container.innerWidth()).toFixed(0);*/
/* 			ui.originalElement.resizable('option', 'maxWidth', (sib_total_width-80));*/
/*         },*/
/*         stop: function(event, ui){*/
/* 			var container = ui.originalElement.parent(); */
/*             var cell_percent_width = (100 * ui.originalElement.outerWidth()/ container.innerWidth()).toFixed(2);*/
/* 			var cell_percent_width_round = round(cell_percent_width);*/
/* 			var balance = cell_percent_width_round-cell_percent_width;*/
/* 			*/
/* 			ui.originalElement.css('width', cell_percent_width_round + '%');*/
/* 			*/
/* 			var col_sm = 'col-sm-'+(12*ui.originalElement.outerWidth() / container.innerWidth()).toFixed(0);*/
/* 			*/
/* 			ui.originalElement.removeClass(old_sm_col).addClass(col_sm).removeAttr('style'); */
/* 			*/
/*             var next_cell = ui.originalElement.next();*/
/* 			var next_percent_width= round((100 * next_cell.outerWidth()/container.innerWidth()).toFixed(2)-balance);*/
/* 			*/
/*             next_cell.css('width', next_percent_width + '%');*/
/* 			*/
/* 			var next_cell_sm_col = 'col-sm-'+(12*next_cell.outerWidth() / container.innerWidth()).toFixed(0);*/
/* 			*/
/* 			next_cell.removeClass(next_cell_old_sm_col).addClass(next_cell_sm_col).removeAttr('style'); */
/*         },*/
/*         resize: function(event, ui){ */
/* 			ui.originalElement.next().width(sib_total_width - ui.size.width); */
/*         }*/
/*     });*/
/* 	*/
/* 	$(".frame-resize:last-child").resizable('disable');*/
/* }*/
/* </script> */
/* {{ footer }} */
