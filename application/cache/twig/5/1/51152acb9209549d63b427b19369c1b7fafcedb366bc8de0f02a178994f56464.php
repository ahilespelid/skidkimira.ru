<?php

/* admin/parts/removeModal.twig */
class __TwigTemplate_51152acb9209549d63b427b19369c1b7fafcedb366bc8de0f02a178994f56464 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"basic\" tabindex=\"-1\" role=\"basic\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                <h4 class=\"modal-title\">Внимание!</h4>
            </div>
            <div class=\"modal-body\">
                Вы уверены, что хотите удалить данную запись?
            </div>
            <div class=\"modal-footer\">
                <button id=\"removeBtn\" type=\"button\" class=\"btn btn-outline red btn-sm\" data-dismiss=\"modal\" onClick=\"\"><i class=\"fa fa-trash-o\"></i> Удалить</button>
                <button type=\"button\" class=\"btn default btn-sm\" data-dismiss=\"modal\">Отмена</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/parts/removeModal.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
