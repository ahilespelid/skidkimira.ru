<?php

/* admin/company/tables/company.twig */
class __TwigTemplate_3b94a0bb3130724472cba84905acd259b73ae68c6ccd9456c259eeea9a398234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/parts/companyTable.twig", "admin/company/tables/company.twig", 1);
        $this->blocks = array(
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/parts/companyTable.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_data($context, array $blocks = array())
    {
        // line 3
        echo "    <thead>
    <tr>
        <th>id</th>
        <th>Название</th>
        <th>Категория</th>
        <th>Email</th>
        <th>символов всего</th>
        <th>символов без HTML</th>
        <th>Статус</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 17
            echo "        <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\">
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "categoryName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "siteUserEmail", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "symbols", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "symbolsHTML", array()), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 25
            if ((($this->getAttribute($context["data"], "moderated", array()) == 0) && ($this->getAttribute($context["data"], "accepted", array()) == 0))) {
                // line 26
                echo "                    Не отмодерирована
                ";
            } elseif ((($this->getAttribute(            // line 27
$context["data"], "moderated", array()) == 1) && ($this->getAttribute($context["data"], "accepted", array()) == 0))) {
                // line 28
                echo "                    Не опубликована
                ";
            } elseif ((($this->getAttribute(            // line 29
$context["data"], "moderated", array()) == 1) && ($this->getAttribute($context["data"], "accepted", array()) == 1))) {
                // line 30
                echo "                    Опубликована
                ";
            }
            // line 32
            echo "            </td>
            <td>
                ";
            // line 34
            if ((($this->getAttribute($context["data"], "moderated", array()) == 0) && ($this->getAttribute($context["data"], "accepted", array()) == 0))) {
                echo "<a href=\"#\" onClick=\"publishCompany(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo ");return false;\" class=\"btn btn-outline green btn-sm\">Опубликовать</a>";
            }
            // line 35
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo twig_escape_filter($this->env, uri_string(), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-outline purple btn-sm\"><i class=\"fa fa-pencil-square-o\"></i> Редактировать </a>
                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "admin/companyDiscount/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "/0/add\" target=\"_blank\" class=\"btn btn-outline yellow btn-sm\"><i class=\"fa fa-pencil-square-o\"></i> Добавить акцию</a>
                <a href=\"#basic\" data-toggle=\"modal\" onClick=\"urlToModal('";
            // line 37
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo twig_escape_filter($this->env, uri_string(), "html", null, true);
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
        // line 41
        echo "    </tbody>  
    ";
        // line 42
        $this->loadTemplate("admin/parts/removeModal.twig", "admin/company/tables/company.twig", 42)->display($context);
        echo "               
";
    }

    public function getTemplateName()
    {
        return "admin/company/tables/company.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  133 => 41,  120 => 37,  114 => 36,  106 => 35,  100 => 34,  96 => 32,  92 => 30,  90 => 29,  87 => 28,  85 => 27,  82 => 26,  80 => 25,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  50 => 17,  46 => 16,  31 => 3,  28 => 2,  11 => 1,);
    }
}
