<?php

/* parts/menu_mobile.twig */
class __TwigTemplate_44933c6e5d61948124bd133e0972a3f33ee736b0fd9f1a10b909e462418abb9b extends Twig_Template
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
        echo "
\t<div class=\"menu-mobile\">

\t\t<ul class=\"cd-accordion-menu\">

\t\t\t<li class=\"has-children\">

\t\t\t\t<input type=\"checkbox\" name =\"group-1\" id=\"group-1\" >

\t\t\t\t<label for=\"group-1\">Меню</label>

\t\t  \t\t<ul>

\t\t\t\t\t<li class=\"has-children level2\">\t\t\t\t\t
\t\t\t\t\t\t<input type=\"checkbox\" name =\"sub-group-1\" id=\"sub-group-1\">\t\t\t\t\t\t
\t\t\t\t\t\t<label for=\"sub-group-1\">Акции и Скидки</label>
\t\t\t\t\t\t";
        // line 17
        $this->loadTemplate("parts/menus/discounts.html", "parts/menu_mobile.twig", 17)->display($context);
        // line 18
        echo "\t\t\t\t\t</li>


\t\t  \t\t\t<li class=\"has-children level2\">

\t\t  \t\t\t\t<input type=\"checkbox\" name =\"sub-group-2\" id=\"sub-group-2\">

\t\t\t\t\t\t<label for=\"sub-group-2\">Магазины</label>
\t\t\t\t\t\t";
        // line 26
        $this->loadTemplate("parts/menus/companies.html", "parts/menu_mobile.twig", 26)->display($context);
        // line 27
        echo "
\t\t  \t\t\t</li>

\t\t  \t\t\t<li class=\"has-children level2\">

\t\t  \t\t\t\t<input type=\"checkbox\" name =\"sub-group-3\" id=\"sub-group-3\">

\t\t\t\t\t\t<label for=\"sub-group-3\">Бренды</label>
\t\t\t\t\t\t";
        // line 35
        $this->loadTemplate("parts/menus/brands.html", "parts/menu_mobile.twig", 35)->display($context);
        // line 36
        echo "
\t\t  \t\t\t</li>
\t\t  \t\t\t<li class=\"level1\">
\t\t\t\t\t  \t<a href=\"/catalogue/tradecenters\">Торговые центры</a>
\t\t  \t\t\t</li>
\t\t  \t\t\t<li class=\"level1\">
\t\t\t\t\t  \t<a href=\"/catalogue/tradecenters\">Дисконт и Сток-Центры</a>
\t\t  \t\t\t</li>
\t\t  \t\t\t<li class=\"has-children level2\">

\t\t  \t\t\t\t<input type=\"checkbox\" name =\"sub-group-4\" id=\"sub-group-4\">

\t\t\t\t\t\t<label for=\"sub-group-4\">Интернет-магазины</label>
\t\t\t\t\t\t";
        // line 49
        $this->loadTemplate("parts/menus/webshops.html", "parts/menu_mobile.twig", 49)->display($context);
        // line 50
        echo "
\t\t  \t\t\t</li>\t\t  \t\t\t

\t\t  \t\t</ul>

\t\t\t</li>


\t\t</ul> <!-- cd-accordion-menu --><br/>
\t\t";
        // line 59
        $this->loadTemplate("parts/menus/cities.html", "parts/menu_mobile.twig", 59)->display($context);
        // line 60
        echo "\t</div>
    ";
    }

    public function getTemplateName()
    {
        return "parts/menu_mobile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 60,  91 => 59,  80 => 50,  78 => 49,  63 => 36,  61 => 35,  51 => 27,  49 => 26,  39 => 18,  37 => 17,  19 => 1,);
    }
}
