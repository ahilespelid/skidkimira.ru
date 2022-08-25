<?php

/* admin/company/tables/companySS.twig */
class __TwigTemplate_e9a69749f01155ffd86b4f066fe6e82d0a3e375487abaf5000804a6493e0bc7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/parts/companyTableSS.twig", "admin/company/tables/companySS.twig", 1);
        $this->blocks = array(
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/parts/companyTableSS.twig";
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
    ";
        // line 15
        $this->loadTemplate("admin/parts/removeModal.twig", "admin/company/tables/companySS.twig", 15)->display($context);
        echo "               
";
    }

    public function getTemplateName()
    {
        return "admin/company/tables/companySS.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  31 => 3,  28 => 2,  11 => 1,);
    }
}
