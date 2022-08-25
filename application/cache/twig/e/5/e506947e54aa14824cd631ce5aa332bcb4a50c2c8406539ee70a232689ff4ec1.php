<?php

/* admin/branchoffice/tables/branchoffice.twig */
class __TwigTemplate_e506947e54aa14824cd631ce5aa332bcb4a50c2c8406539ee70a232689ff4ec1 extends Twig_Template
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
        echo "    <div class=\"col-md-5\">
        <div class=\"portlet box light-grey\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"fa fa-globe\"></i>Адреса компании
                </div>
                <div class=\"actions\">
                    <a href=\"\" class=\"btn green\" onClick=\"window.open('";
        // line 8
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "admin/branchoffice/";
        echo twig_escape_filter($this->env, (isset($context["companyId"]) ? $context["companyId"] : null), "html", null, true);
        echo "/0/add');\"><i class=\"fa fa-plus\"></i> Добавить</a>
                </div>
            </div>
            <div class=\"portlet-body\">
                <table class=\"table table-striped table-bordered table-hover datatable\" id=\"companyBranchofficeTable\">
                <thead>
                    <tr>
                        <th>Адрес</th>
                        <th>Город</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchoffices"]) ? $context["branchoffices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 22
            echo "                        <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\">
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["data"], "address", array()), 0, 65), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "cityName", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "admin/branchoffice/";
            echo twig_escape_filter($this->env, (isset($context["companyId"]) ? $context["companyId"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-outline purple btn-sm\"><i class=\"fa fa-pencil-square-o\"></i> Редакировать </a>
                                <a href=\"#basic\" data-toggle=\"modal\" onClick=\"urlToModal('";
            // line 27
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "admin/branchoffice/";
            echo twig_escape_filter($this->env, (isset($context["companyId"]) ? $context["companyId"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "/remove');\" class=\"btn btn-outline red btn-sm\"><i class=\"fa fa-trash-o\"></i> Удалить</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </tbody>  
                </table>  
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "admin/branchoffice/tables/branchoffice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  72 => 27,  64 => 26,  59 => 24,  55 => 23,  50 => 22,  46 => 21,  28 => 8,  19 => 1,);
    }
}
