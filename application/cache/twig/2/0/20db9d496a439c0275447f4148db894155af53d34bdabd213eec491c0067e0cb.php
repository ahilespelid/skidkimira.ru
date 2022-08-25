<?php

/* admin/parts/discountTableSS.twig */
class __TwigTemplate_20db9d496a439c0275447f4148db894155af53d34bdabd213eec491c0067e0cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/adminLayout.twig", "admin/parts/discountTableSS.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/adminLayout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "            <div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t";
        // line 5
        if ((isset($context["filterable"]) ? $context["filterable"] : null)) {
            // line 6
            echo "\t\t\t\t\t\t";
            $this->loadTemplate((isset($context["filterUri"]) ? $context["filterUri"] : null), "admin/parts/discountTableSS.twig", 6)->display($context);
            // line 7
            echo "\t\t\t\t\t";
        }
        // line 8
        echo "\t\t\t\t\t<div class=\"portlet box light-grey\">
\t\t\t\t\t\t<div class=\"portlet-title\">
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-globe\"></i>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a id=\"cloneAllDiscountsBtn\" href=\"\" class=\"btn green\" onClick=\"cloneAllDiscounts();return false;\"><i class=\"fa fa-database\"></i> Клонировать все акции</a>
                                <a href=\"\" class=\"btn green\" onClick=\"publishDiscount();return false;\"><i class=\"fa fa-check-square-o\"></i> Опубликовать все акции на текущей странице</a>
\t\t\t\t\t\t\t\t<a href=\"#basic\" data-toggle=\"modal\" class=\"btn red\" onClick=\"deletemodal('discounts');\"><i class=\"fa fa-minus\"></i> Удалить все акции на странице</a>

                                 <!--<a href=\"#basic\" data-toggle=\"modal\" onClick=\"urlToModal('";
        // line 18
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo twig_escape_filter($this->env, uri_string(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
        echo "/remove');\" class=\"btn btn-outline red btn-sm\"><i class=\"fa fa-trash-o\"></i> Удалить</a>-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"portlet-body\">
                            <table class=\"table table-striped table-bordered table-hover discountTable\" id=\"discountTable\">
                            ";
        // line 23
        $this->displayBlock('data', $context, $blocks);
        // line 26
        echo "                            </table>  
                        </div>
                    </div>
                </div>
            </div>
<script>
var iTimeout;
var dTable;
 document.addEventListener('DOMContentLoaded', function(){ 
          //Company Table Server-side proccessing
          
dTable = \$('.discountTable').dataTable({
                  \"serverSide\": true,
  \"columnDefs\": [
    { \"searchable\": false, \"targets\": [0,2,3,4,5,6,7] }
  ],
                    \"initComplete\": function() {
                        \$('#discountTable_filter input').unbind();
                        \$('#discountTable_filter input').bind('keyup', function(e) {
                           // console.log('timeout:',iTimeout);
                            clearTimeout(iTimeout);
                            iTimeout = setTimeout(function () {
                                dTable.fnFilter(\$('#discountTable_filter input').val());
                            },500); // could make this a setting, default is 400ms

                                
                        });
                    },  
                  \"ajax\": {
                    \"url\": \"/admin/discountTable?";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["filter"]) ? $context["filter"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), $context["key"], array(), "array"), "html", null, true);
            echo "&";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\",
                    \"type\"   : \"GET\",
                    //\"searchDelay\": 2000,                    
                    \"dataSrc\": function (json) {
                        
                        json = JSON.parse(json);
                       console.log(json);
                    var return_data = new Array();
                    for(var i=0;i< json.data.length; i++){
                        return_data.push({
                        'DT_RowId': json.data[i][8],                            
                        '0': json.data[i][0],
                        '1': json.data[i][4],
                        '2': json.data[i][1],
                        '3': json.data[i][2],
                        '4': json.data[i][5],
                        '5': json.data[i][6],
                        '6': json.data[i][3]==0?'Не опубликована':'Опубликована',
                        '7': json.data[i][3]==0?'<a href=\"#\" onclick=\"publishDiscount('+json.data[i][8]+');return false;\" class=\"btn btn-outline green btn-sm\">Опубликовать</a> '+json.data[i][7]:json.data[i][7]
                        })
            //           console.log('pushed');
                    }
              //       console.log(return_data);
                    return return_data;
                    },
                                        
                  }                      
            });
});            
</script>            
";
    }

    // line 23
    public function block_data($context, array $blocks = array())
    {
        // line 24
        echo "\t\t\t
        \t                ";
    }

    public function getTemplateName()
    {
        return "admin/parts/discountTableSS.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 24,  148 => 23,  103 => 55,  72 => 26,  70 => 23,  59 => 18,  49 => 11,  44 => 8,  41 => 7,  38 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
