<?php

/* admin/parts/companyTable.twig */
class __TwigTemplate_6b700d2ba0b51028ace0d13680d52ffa912252370a4ee70a311776bc32d37852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/adminLayout.twig", "admin/parts/companyTable.twig", 1);
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
            $this->loadTemplate((isset($context["filterUri"]) ? $context["filterUri"] : null), "admin/parts/companyTable.twig", 6)->display($context);
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
                                <a href=\"\" class=\"btn green\" onClick=\"publishCompany();return false;\"><i class=\"fa fa-check-square-o\"></i> Опубликовать все компании на текущей странице</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn green\" onClick=\"window.open('";
        // line 15
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo twig_escape_filter($this->env, uri_string(), "html", null, true);
        echo "/-1');\"><i class=\"fa fa-plus\"></i> Добавить</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"portlet-body\">
                            <table class=\"table table-striped table-bordered table-hover datatable\" id=\"companyTable\">
                            ";
        // line 20
        $this->displayBlock('data', $context, $blocks);
        // line 23
        echo "                            </table>  
                        </div>
                    </div>
                </div>
            </div>
";
    }

    // line 20
    public function block_data($context, array $blocks = array())
    {
        // line 21
        echo "\t\t\t
        \t                ";
    }

    public function getTemplateName()
    {
        return "admin/parts/companyTable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  76 => 20,  67 => 23,  65 => 20,  56 => 15,  49 => 11,  44 => 8,  41 => 7,  38 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
