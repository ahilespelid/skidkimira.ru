<?php

/* brand.twig */
class __TwigTemplate_5a9f344a27889b4b99ee0471954c573c409db7b5955b262dbd10f91c6cf9851e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("html.twig", "brand.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"content clearfix\">

\t\t<div class=\"center kat\">

\t\t\t<div class=\"banner-width\">
\t\t\t\t<noindex>
\t\t\t\t";
        // line 9
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "top_fullwidth", array());
        echo "
\t\t\t\t</noindex>
\t\t\t</div>

\t\t\t\t

\t\t\t<h1>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brand", array()), "name", array()), "html", null, true);
        echo "</h1>

\t\t\t<div class=\"yadirect-slon\">
\t\t\t\t<noindex>
\t\t\t\t";
        // line 19
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "details_top", array());
        echo "
\t\t\t\t</noindex>
\t\t\t</div>

\t\t\t<div class=\"open-catalog\">

\t\t\t\t<div class=\"logotip\" onclick=\"zoomlogo('";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "/images/company/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brand", array()), "logo", array()), "html", null, true);
        echo "');\">

\t\t\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "images/company/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brand", array()), "logo", array()), "html", null, true);
        echo "\" alt=\"\">

\t\t\t\t</div>

\t\t\t\t<div class=\"r-google\">
\t\t\t\t\t";
        // line 32
        if ($this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "underlogo_detail", array())) {
            // line 33
            echo "\t\t\t\t\t\t<noindex>
\t\t\t\t\t\t";
            // line 34
            echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "underlogo_detail", array());
            echo "
\t\t\t\t\t\t</noindex>
\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 38
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brand", array()), "siteAddress", array())) {
            // line 39
            echo "\t\t\t\t<div class=\"catal\">

\t\t\t\t\t<a target=\"_blank\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brand", array()), "siteAddress", array()), "html", null, true);
            echo "\">Перейти в магазин</a>

\t\t\t\t</div>
\t\t\t\t";
        }
        // line 45
        echo "\t\t\t</div>


\t\t\t<div class=\"opisanie-marki\" style=\"width:58%;\">
\t\t\t\t<div class=\"resizing-container\">
            \t\t";
        // line 50
        echo $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brand", array()), "description", array());
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"pink view-all\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span class=\"drop-down\">Показать еще</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t<div class=\"onlymobile\">
\t\t\t<noindex>
\t\t\t";
        // line 61
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_brands", array());
        echo "
\t\t\t</noindex>
\t\t</div>\t\t
\t\t\t<h2>Магазины ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brand", array()), "name", array()), "html", null, true);
        echo "</h2>
            <div class=\"magazu-marki\">
                ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brandcompanies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
            // line 67
            echo "                <a href=\"/company/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "id", array()), "html", null, true);
            echo "\">
                    <div class=\"magaz\">
                        <img src=\"";
            // line 69
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "images/company/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "logo", array()), "html", null, true);
            echo "\" alt=\"\">
                        <p>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "name", array()), "html", null, true);
            echo "</p>
                    </div>                
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
\t\t\t</div>
            <h2>Похожие бренды</h2>
            <div class=\"match-brands\">
\t\t\t\t";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "similarbrands", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 79
            echo "\t\t\t\t\t<a href=\"/brand/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "images/company/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "logo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
            echo "\"></a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t</div>
            <div class=\"match-brands-mobile\">

\t\t\t\t<ul>
\t\t\t\t";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "similarbrands", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 86
            echo "\t\t\t\t\t<li><a href=\"/brand/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "\t\t\t\t</ul>

\t\t\t\t

\t\t\t</div>
\t\t\t<div class=\"kakoito-text\">\t\t\t
\t\t\t<!--\t";
        // line 94
        echo $this->getAttribute((isset($context["additional"]) ? $context["additional"] : null), "promotextbtm", array());
        echo "-->
\t\t\t</div>

\t\t</div>

\t\t


\t\t";
        // line 102
        $this->loadTemplate("parts/menu.twig", "brand.twig", 102)->display($context);
        // line 103
        echo "
        ";
        // line 111
        echo "\t\t

\t</div>
    <script type=\"text/javascript\" src=\"http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU\"></script>
<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/maps.js\"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
";
    }

    public function getTemplateName()
    {
        return "brand.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 115,  236 => 111,  233 => 103,  231 => 102,  220 => 94,  212 => 88,  201 => 86,  197 => 85,  191 => 81,  176 => 79,  172 => 78,  166 => 74,  156 => 70,  150 => 69,  144 => 67,  140 => 66,  135 => 64,  129 => 61,  115 => 50,  108 => 45,  101 => 41,  97 => 39,  95 => 38,  92 => 37,  86 => 34,  83 => 33,  81 => 32,  71 => 27,  64 => 25,  55 => 19,  48 => 15,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
