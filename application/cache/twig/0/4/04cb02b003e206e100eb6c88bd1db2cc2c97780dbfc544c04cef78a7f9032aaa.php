<?php

/* parts/header.twig */
class __TwigTemplate_04cb02b003e206e100eb6c88bd1db2cc2c97780dbfc544c04cef78a7f9032aaa extends Twig_Template
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
        echo "\t<header class=\"clearfix\">

\t\t<a  href=\"/\"><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/img/logo.png\" alt=\"\"></a>
\t\t";
        // line 4
        if ((isset($context["searchtype"]) ? $context["searchtype"] : null)) {
            // line 5
            echo "\t\t<form action=\"/search\">
\t\t\t<input type=\"hidden\" name=\"searchtype\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["searchtype"]) ? $context["searchtype"] : null), "html", null, true);
            echo "\"/>
\t\t\t<input type=\"text\" name=\"search\" placeholder=\"По имени\" required>
\t\t\t<input type=\"submit\">
\t\t</form>
\t\t";
        }
        // line 11
        echo "\t</header>";
    }

    public function getTemplateName()
    {
        return "parts/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  32 => 6,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
