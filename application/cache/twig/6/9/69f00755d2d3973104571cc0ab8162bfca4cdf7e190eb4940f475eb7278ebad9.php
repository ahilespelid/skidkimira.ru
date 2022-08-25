<?php

/* admin/company/forms/shoppingCenterSelector.twig */
class __TwigTemplate_69f00755d2d3973104571cc0ab8162bfca4cdf7e190eb4940f475eb7278ebad9 extends Twig_Template
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
        echo "    <option value=\"null\"></option>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shoppingCenters"]) ? $context["shoppingCenters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["shoppingCenter"]) {
            // line 3
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shoppingCenter"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shoppingCenter"], "name", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shoppingCenter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "admin/company/forms/shoppingCenterSelector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
