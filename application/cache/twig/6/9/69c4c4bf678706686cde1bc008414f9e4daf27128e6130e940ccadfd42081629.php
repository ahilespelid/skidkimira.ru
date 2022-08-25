<?php

/* admin/discount/tables/discountSS.twig */
class __TwigTemplate_69c4c4bf678706686cde1bc008414f9e4daf27128e6130e940ccadfd42081629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/parts/discountTableSS.twig", "admin/discount/tables/discountSS.twig", 1);
        $this->blocks = array(
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/parts/discountTableSS.twig";
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
        <th>Имя</th>
        <th>Компания</th>
        <th>Дата начала</th>
        <th>Дата окончания</th>        
        <th>Категория</th>
        <th>Модератор</th>

        <th>Статус</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 18
            echo "        <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\">
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["data"], "name", array()), 0, 40), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["data"], "companyName", array()), 0, 40), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "categoryName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "siteuserEmail", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "startDate", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "finishDate", array()), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 26
            if ((($this->getAttribute($context["data"], "moderated", array()) == 0) && ($this->getAttribute($context["data"], "accepted", array()) == 0))) {
                // line 27
                echo "                    Не отмодерирована
                ";
            } elseif ((($this->getAttribute(            // line 28
$context["data"], "moderated", array()) == 1) && ($this->getAttribute($context["data"], "accepted", array()) == 0))) {
                // line 29
                echo "                    Не опубликована
                ";
            } elseif ((($this->getAttribute(            // line 30
$context["data"], "moderated", array()) == 1) && ($this->getAttribute($context["data"], "accepted", array()) == 1))) {
                // line 31
                echo "                    Опубликована
                ";
            }
            // line 33
            echo "            </td>
            <td></td>
            <td>
                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "admin/company/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "companyId", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-outline yellow btn-sm\"><i class=\"fa fa-pencil-square-o\"></i>Ред. Компанию</a>
                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "admin/companyDiscount/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "companyId", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-outline purple btn-sm\"><i class=\"fa fa-pencil-square-o\"></i>Ред. Акцию</a>
                <a href=\"#basic\" data-toggle=\"modal\" onClick=\"urlToModal('";
            // line 38
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
        // line 43
        echo "    </tbody>  
    ";
        // line 44
        $this->loadTemplate("admin/parts/removeModal.twig", "admin/discount/tables/discountSS.twig", 44)->display($context);
        echo "               
";
    }

    public function getTemplateName()
    {
        return "admin/discount/tables/discountSS.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 44,  130 => 43,  116 => 38,  108 => 37,  102 => 36,  97 => 33,  93 => 31,  91 => 30,  88 => 29,  86 => 28,  83 => 27,  81 => 26,  76 => 24,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  56 => 19,  51 => 18,  47 => 17,  31 => 3,  28 => 2,  11 => 1,);
    }
}
