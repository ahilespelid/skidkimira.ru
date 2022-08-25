<?php

/* admin/advertising/adverts_edit.twig */
class __TwigTemplate_483c9aad3e8025f930a6e95acd147d3be6b86ae818ac3b0ad5a9312a1d1a1529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/adminLayout.twig", "admin/advertising/adverts_edit.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        echo "<h1>Редактирование блоков рекламы</h1>
";
        // line 4
        if ((isset($context["message"]) ? $context["message"] : null)) {
            echo "<h2>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</h2>";
        }
        // line 5
        echo "<form method=\"post\">
<table cellpadding=\"0\" cellspacing=10 width=\"100%\" class=\"table table-bordered table-striped\">
    <thead>
        <tr>

        </tr>
    </thead>
    <tbody>
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["adverts"]) ? $context["adverts"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["advkey"]) {
            // line 14
            echo "        <tr><td>";
            echo twig_escape_filter($this->env, $context["advkey"], "html", null, true);
            echo "</td><td><textarea name=\"adverts[";
            echo twig_escape_filter($this->env, $context["advkey"], "html", null, true);
            echo "]\" rows=\"10\" cols=\"100\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), $context["advkey"], array(), "array"), "html", null, true);
            echo "</textarea></td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advertsdescriptions"]) ? $context["advertsdescriptions"] : null), $context["advkey"], array(), "array"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advkey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        <tr><td></td><td><button type=\"submit\" class=\"btn green\">Сохранить</button></td></tr>        
    </tbody>
</table>
</form>
";
    }

    public function getTemplateName()
    {
        return "admin/advertising/adverts_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  54 => 14,  50 => 13,  40 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
