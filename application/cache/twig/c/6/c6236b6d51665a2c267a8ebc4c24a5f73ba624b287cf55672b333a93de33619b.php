<?php

/* admin/discount/tables/companyDiscount.twig */
class __TwigTemplate_c6236b6d51665a2c267a8ebc4c24a5f73ba624b287cf55672b333a93de33619b extends Twig_Template
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
        echo "    <div class=\"col-md-7\">
        <div class=\"portlet box light-grey\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"fa fa-globe\"></i>Акции
                </div>
                <div class=\"actions\">
                    <a href=\"\" class=\"btn green\" onClick=\"window.open('";
        // line 8
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "admin/companyDiscount/";
        echo twig_escape_filter($this->env, (isset($context["companyId"]) ? $context["companyId"] : null), "html", null, true);
        echo "/0/add');\"><i class=\"fa fa-plus\"></i> Добавить</a>
                </div>
            </div>
            <div class=\"portlet-body\">
                <table class=\"table table-striped table-bordered table-hover datatable\" id=\"companyDiscountTable\">
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Дата начала</th>
                        <th>Дата окончания</th>
                        <th>Город</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 24
            echo "                        <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\">
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "startDate", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "finishDate", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "cityName", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "admin/companyDiscount/";
            echo twig_escape_filter($this->env, (isset($context["companyId"]) ? $context["companyId"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-outline purple btn-sm\"><i class=\"fa fa-pencil-square-o\"></i> Ред. </a>
                                <a href=\"#\" id=\"cloneDiscountBtn\" class=\"btn btn-outline yellow btn-sm\" onClick=\"cloneDiscount(\$(this),'";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["companyId"]) ? $context["companyId"] : null), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "');return false;\"><i class=\"fa fa-database\"></i> Клонировать </a>
                                <a href=\"#basic\" data-toggle=\"modal\" onClick=\"urlToModal('";
            // line 32
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "admin/discount/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "/remove');\" class=\"btn btn-outline red btn-sm\"><i class=\"fa fa-trash-o\"></i> Удалить</a>         
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </tbody>  
                </table>  
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/discount/tables/companyDiscount.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  88 => 32,  82 => 31,  74 => 30,  69 => 28,  65 => 27,  61 => 26,  57 => 25,  52 => 24,  48 => 23,  28 => 8,  19 => 1,);
    }
}
