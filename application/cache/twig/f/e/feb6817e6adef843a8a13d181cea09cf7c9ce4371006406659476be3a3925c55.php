<?php

/* webshops.twig */
class __TwigTemplate_feb6817e6adef843a8a13d181cea09cf7c9ce4371006406659476be3a3925c55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("html.twig", "webshops.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<style type=\"text/css\">
.center .banner-width {
    position: relative;
    margin-bottom: 20px;
    margin-top: 20px;
    vertical-align: top;
    margin-right: 3px;    
}
@media screen and (max-width: 566px){
.nomobile{display:none !important;}
.onlymobile{
    display:inherit !important;
    position: relative;
    width: 100%;
    margin: 0 0 25px;
}
.center .banner-width {
    width: 100%;
    margin: 0;
}
.skidki-iz-kataloga{
    margin: 0;
}
.skidki-iz-kataloga .skidka {
    width: 100%!important;
}
.center h2:not(:first-child) {
    margin-left: 14%;
}}

@media screen and (min-width: 567px) and (max-width: 701px) {.center .banner-width {width: 528px;} .nomobile{display:none !important;}}
@media screen and (min-width: 701px) and (max-width: 742px) {.center .banner-width {width: 260px;} .nomobile{display:none !important;}}
@media screen and (min-width: 742px) and (max-width: 801px) {.center .banner-width {width: 528px;}}
@media screen and (min-width: 801px) and (max-width: 1091px){.center .banner-width {width: 260px;}}
@media screen and (min-width: 1092px) {.center .banner-width {width: 100%;}}
</style>
\t<div class=\"content clearfix\">

\t\t<div class=\"center kat\">
\t\t
        <div class=\"banner-width\">
\t\t\t\t<noindex>
\t\t\t\t";
        // line 47
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "top_fullwidth", array());
        echo "
\t\t\t\t</noindex>
        </div>
\t\t\t<h1 style=\"float:left;\">";
        // line 50
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array());
        echo "
\t\t\t</h1>
<div class=\"rblock\">
\t\t\t\t\t\t<noindex>
\t\t\t\t\t\t";
        // line 54
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "top_rightheader", array());
        echo "
\t\t\t\t\t\t</noindex>
</div>
<br style=\"clear:both;\"/>
\t\t\t<div class=\"skidki-iz-kataloga\">

                ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tc"]) {
            // line 61
            echo "\t\t\t\t<div class=\"skidka magazin\">
                    <a title=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["tc"], "name", array()), "html", null, true);
            echo "\" href=\"/company/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tc"], "id", array()), "html", null, true);
            echo "\">
                        <div><img src=\"";
            // line 63
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "images/company/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tc"], "logo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tc"], "name", array()), "html", null, true);
            echo "\"/></div>
                        <p><span>";
            // line 64
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["tc"], "name", array()), 0, 19), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($context["tc"], "name", array())) > 19)) {
                echo "...";
            }
            echo "</span>
                    
                        <br>
\t\t\t\t\t\t";
            // line 67
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["tc"], "address", array()), 0, 45), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($context["tc"], "address", array())) > 45)) {
                echo "...";
            }
            echo "</p>
                    </a>
\t\t\t\t\t";
            // line 69
            if (($this->getAttribute($context["loop"], "index", array()) < 3)) {
                // line 70
                echo "\t\t\t\t\t<div class=\"r-google\">
\t\t\t\t\t\t<noindex>
\t\t\t\t\t\t";
                // line 72
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "catalog_item", array());
                echo "
\t\t\t\t\t\t</noindex>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t</div>
";
            // line 77
            if (($this->getAttribute($context["loop"], "index", array()) == 12)) {
                // line 78
                echo "    <div class=\"banner-width nomobile\">
            <noindex>
            ";
                // line 80
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "center_fullwidth", array());
                echo "
            </noindex>
    </div>
";
            }
            // line 83
            echo "                
";
            // line 84
            if (($this->getAttribute($context["loop"], "index", array()) == 24)) {
                // line 85
                echo "    <div class=\"banner-width nomobile\">
            <noindex>
<!-- Yandex.RTB R-A-141647-17 -->
<div id=\"yandex_rtb_R-A-141647-17\"></div>
<script>window.yaContextCb.push(()=>{
  Ya.Context.AdvManager.render({
    renderTo: 'yandex_rtb_R-A-141647-17',
    blockId: 'R-A-141647-17'
  })
})</script>
            </noindex>
    </div>
";
            }
            // line 97
            echo "                
";
            // line 98
            if (($this->getAttribute($context["loop"], "index", array()) == 36)) {
                // line 99
                echo "    <div class=\"banner-width nomobile\">
            <noindex>
<!-- Yandex.RTB R-A-141647-18 -->
<div id=\"yandex_rtb_R-A-141647-18\"></div>
<script>window.yaContextCb.push(()=>{
  Ya.Context.AdvManager.render({
    renderTo: 'yandex_rtb_R-A-141647-18',
    blockId: 'R-A-141647-18'
  })
})</script>
            </noindex>
    </div>
";
            }
            // line 111
            echo "                     
";
            // line 112
            if (($this->getAttribute($context["loop"], "index", array()) == 8)) {
                // line 113
                echo "\t<div class=\"onlymobile\">
\t\t<noindex>
\t\t";
                // line 115
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_catalogitem", array());
                echo "
\t\t</noindex>
\t</div>
";
            }
            // line 119
            if (($this->getAttribute($context["loop"], "index", array()) == 16)) {
                // line 120
                echo "\t<div class=\"onlymobile\">
\t\t<noindex>
\t\t";
                // line 122
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_catalogitem2", array());
                echo "
\t\t</noindex>
\t</div>
";
            }
            // line 125
            echo "\t\t\t
";
            // line 126
            if (($this->getAttribute($context["loop"], "index", array()) == 24)) {
                // line 127
                echo "\t<div class=\"onlymobile\">
\t\t<noindex>
\t\t";
                // line 129
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_catalogitem3", array());
                echo "
\t\t</noindex>
\t</div>
";
            }
            // line 132
            echo "\t\t\t
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "\t
                <div class=\"pagination\">

\t\t\t\t\t<ul class=\"clearfix\">
                        ";
        // line 137
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "pagination", array());
        echo "
\t\t\t\t\t</ul>

\t\t\t\t</div>                
            </div>


\t\t\t<div class=\"kakoito-text\">
\t\t\t<!--\t";
        // line 145
        echo $this->getAttribute((isset($context["additional"]) ? $context["additional"] : null), "promotextbtm", array());
        echo " вывод текста для подкатегории Интернет-магазины-->
\t\t\t</div>

\t\t\t

\t\t</div>

\t\t";
        // line 152
        $this->loadTemplate("parts/menu.twig", "webshops.twig", 152)->display($context);
        // line 153
        echo "
        ";
        // line 160
        echo "\t\t
\t</div>\t\t
";
    }

    public function getTemplateName()
    {
        return "webshops.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 160,  307 => 153,  305 => 152,  295 => 145,  284 => 137,  278 => 133,  263 => 132,  256 => 129,  252 => 127,  250 => 126,  247 => 125,  240 => 122,  236 => 120,  234 => 119,  227 => 115,  223 => 113,  221 => 112,  218 => 111,  203 => 99,  201 => 98,  198 => 97,  183 => 85,  181 => 84,  178 => 83,  171 => 80,  167 => 78,  165 => 77,  162 => 76,  155 => 72,  151 => 70,  149 => 69,  141 => 67,  132 => 64,  124 => 63,  118 => 62,  115 => 61,  98 => 60,  89 => 54,  82 => 50,  76 => 47,  31 => 4,  28 => 3,  11 => 1,);
    }
}
