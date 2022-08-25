<?php

/* admin/companycatalog/tables/companyCatalog.twig */
class __TwigTemplate_dd7669754b0be02683d93d2295ef006a7109a57421d6a6971239436a85a5ac37 extends Twig_Template
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
        echo "<div class=\"col-md-12\">
    <div class=\"portlet box light-grey\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <i class=\"fa fa-globe\"></i>Каталоги
            </div>
            <div class=\"actions\">
                <a href=\"\" class=\"btn green\" onClick=\"window.open('";
        // line 8
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "admin/companyCatalog/";
        echo twig_escape_filter($this->env, (isset($context["companyId"]) ? $context["companyId"] : null), "html", null, true);
        echo "/add');\"><i class=\"fa fa-plus\"></i> Добавить</a>
            </div>
        </div>
        <div class=\"portlet-body\">
            <table class=\"table table-striped table-bordered table-hover datatable\" id=\"tableManaged\">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>id названия</th>
                    <th>Валидность</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companyCatalogs"]) ? $context["companyCatalogs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 23
            echo "                    <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" class=\"odd gradeX\">
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "companyName", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "validity", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "admin/companyCatalog/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-outline purple btn-sm\"><i class=\"fa fa-pencil-square-o\"></i> Редактировать </a>
                            <a href=\"#basic\" data-toggle=\"modal\" onClick=\"urlToModal('";
            // line 29
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "admin/companyCatalog/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "/remove');\" class=\"btn btn-outline red btn-sm\"><i class=\"fa fa-trash-o\"></i> Удалить</a>         
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </tbody>  
                ";
        // line 34
        $this->loadTemplate("admin/parts/removeModal.twig", "admin/companycatalog/tables/companyCatalog.twig", 34)->display($context);
        echo "               
            </table>  
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/companycatalog/tables/companyCatalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  87 => 33,  75 => 29,  69 => 28,  64 => 26,  60 => 25,  56 => 24,  51 => 23,  47 => 22,  28 => 8,  19 => 1,);
    }
}
