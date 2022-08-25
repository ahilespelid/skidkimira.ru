<?php

/* admin/category/forms/discountSubCategoryCheckboxList.twig */
class __TwigTemplate_092146f4df891758b8e242d0f91031abe8972370e21c88f96dc815de0043ffc0 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subCategories"]) ? $context["subCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
            // line 2
            echo "    <label class=\"mt-checkbox\">
        ";
            // line 3
            if ($this->getAttribute($context["subCategory"], "checked", array())) {
                // line 4
                echo "            <input type=\"checkbox\" checked waschecked=\"1\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subCategory"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subCategory"], "name", array()), "html", null, true);
                echo "<span></span>
        ";
            } else {
                // line 6
                echo "            <input type=\"checkbox\" waschecked=\"0\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subCategory"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subCategory"], "name", array()), "html", null, true);
                echo "<span></span>
        ";
            }
            // line 8
            echo "    </label>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "admin/category/forms/discountSubCategoryCheckboxList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  36 => 6,  28 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
