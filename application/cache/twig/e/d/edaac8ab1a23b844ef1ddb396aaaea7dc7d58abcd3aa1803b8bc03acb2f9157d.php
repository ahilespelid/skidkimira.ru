<?php

/* admin/user/tables/user.twig */
class __TwigTemplate_edaac8ab1a23b844ef1ddb396aaaea7dc7d58abcd3aa1803b8bc03acb2f9157d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/parts/table.twig", "admin/user/tables/user.twig", 1);
        $this->blocks = array(
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/parts/table.twig";
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
        <th>Тип</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 12
            echo "        <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" class=\"odd gradeX\">
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "type", array()), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "auth/edit_user_custom/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-outline purple btn-sm\"><i class=\"fa fa-pencil-square-o\"></i> Редактировать </a>         
                <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo "admin/removeUser/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-outline red btn-sm\"><i class=\"fa fa-trash-o\"></i> Удалить </a>         
            </td>            
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </tbody>  
    ";
        // line 22
        $this->loadTemplate("admin/parts/removeModal.twig", "admin/user/tables/user.twig", 22)->display($context);
        echo "               
";
    }

    public function getTemplateName()
    {
        return "admin/user/tables/user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  77 => 21,  65 => 17,  59 => 16,  54 => 14,  50 => 13,  45 => 12,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
    }
}
