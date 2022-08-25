<?php

/* admin/parts/table.twig */
class __TwigTemplate_b4fc5120c4d02d83f5e780446a86c61d8a50dde52de6773e324ff50080882130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/adminLayout.twig", "admin/parts/table.twig", 1);
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
            $this->loadTemplate((isset($context["filterUri"]) ? $context["filterUri"] : null), "admin/parts/table.twig", 6)->display($context);
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
\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn green\" onClick=\"window.open('";
        // line 14
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo twig_escape_filter($this->env, uri_string(), "html", null, true);
        echo "/-1');\"><i class=\"fa fa-plus\"></i> Добавить</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"portlet-body\">
                            <table class=\"table table-striped table-bordered table-hover datatable\" id=\"tableManaged\">
                            ";
        // line 19
        $this->displayBlock('data', $context, $blocks);
        // line 22
        echo "                            </table>  
                        </div>
                    </div>
                </div>
            </div>
";
    }

    // line 19
    public function block_data($context, array $blocks = array())
    {
        // line 20
        echo "\t\t\t
        \t                ";
    }

    public function getTemplateName()
    {
        return "admin/parts/table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  75 => 19,  66 => 22,  64 => 19,  55 => 14,  49 => 11,  44 => 8,  41 => 7,  38 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
