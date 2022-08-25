<?php

/* companies.twig */
class __TwigTemplate_db4c9c511b53a00148bf309c94c325eda186938c3db898f3c853b3eb1d0a116a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("html.twig", "companies.twig", 1);
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

        <div class=\"banner-width\">
\t\t\t\t<noindex>
\t\t\t\t";
        // line 47
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "top_fullwidth", array());
        echo "
\t\t\t\t</noindex>
        </div>
\t\t\t\t\t
\t\t\t<h1 style=\"float:left;\">";
        // line 51
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array());
        echo "
\t\t\t</h1>
<div class=\"rblock\">
\t\t\t\t\t\t<noindex>
\t\t\t\t\t\t";
        // line 55
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "top_rightheader", array());
        echo "
\t\t\t\t\t\t</noindex>
</div>
<br style=\"clear:both;\"/>

\t\t\t<div class=\"skidki-iz-kataloga\">

                ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "companies", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 63
            echo "\t\t\t\t<div class=\"skidka\">
                    <a title=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "name", array()), "html", null, true);
            echo "\" href=\"/company/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<div><img src=\"";
            // line 65
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "images/company/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "logo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "name", array()), "html", null, true);
            echo "\"/></div>

\t\t\t\t\t<p><span>";
            // line 67
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["company"], "name", array()), 0, 17), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($context["company"], "name", array())) > 17)) {
                echo "...";
            }
            echo "</span>
                    <br>
                    <span title=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "description", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["company"], "description", array()), 0, 17), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($context["company"], "name", array())) > 17)) {
                echo "...";
            }
            echo "</span></p>
\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 71
            if (($this->getAttribute($context["loop"], "index", array()) < 3)) {
                // line 72
                echo "\t\t\t\t\t<div class=\"r-google\">
\t\t\t\t\t\t<noindex>
\t\t\t\t\t\t";
                // line 74
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "catalog_item", array());
                echo "
\t\t\t\t\t\t</noindex>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 78
            echo "
\t\t\t\t</div>
";
            // line 80
            if (($this->getAttribute($context["loop"], "index", array()) == 12)) {
                // line 81
                echo "\t<div class=\"banner-width nomobile\">
\t\t\t<noindex>
\t\t\t";
                // line 83
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "center_fullwidth", array());
                echo "
\t\t\t</noindex>
\t</div>
";
            }
            // line 87
            if (($this->getAttribute($context["loop"], "index", array()) == 24)) {
                // line 88
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
            // line 101
            if (($this->getAttribute($context["loop"], "index", array()) == 36)) {
                // line 102
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
            // line 114
            echo "  

\t\t\t\t\t";
            // line 116
            if (($this->getAttribute($context["loop"], "index", array()) == 8)) {
                // line 117
                echo "\t\t\t\t\t\t<div class=\"onlymobile\">
\t\t\t\t\t\t\t<noindex>
\t\t\t\t\t\t\t";
                // line 119
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_catalogitem", array());
                echo "
\t\t\t\t\t\t\t</noindex>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 123
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["loop"], "index", array()) == 16)) {
                // line 124
                echo "\t\t\t\t\t\t<div class=\"onlymobile\">
\t\t\t\t\t\t\t<noindex>
\t\t\t\t\t\t\t";
                // line 126
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_catalogitem2", array());
                echo "
\t\t\t\t\t\t\t</noindex>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 129
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t";
            // line 130
            if (($this->getAttribute($context["loop"], "index", array()) == 24)) {
                // line 131
                echo "\t\t\t\t\t\t<div class=\"onlymobile\">
\t\t\t\t\t\t\t<noindex>
\t\t\t\t\t\t\t";
                // line 133
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_catalogitem3", array());
                echo "
\t\t\t\t\t\t\t</noindex>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 136
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "    <div class=\"onlymobile\">
        <noindex>
<!-- Yandex.RTB R-A-141647-14 -->
<div id=\"yandex_rtb_R-A-141647-14\"></div>
<script>window.yaContextCb.push(()=>{
  Ya.Context.AdvManager.render({
    renderTo: 'yandex_rtb_R-A-141647-14',
    blockId: 'R-A-141647-14'
  })
})</script>
        </noindex>
    </div>
                <div class=\"pagination\">
\t\t\t\t\t<ul class=\"clearfix\">
                        ";
        // line 154
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "pagination", array());
        echo "
\t\t\t\t\t</ul>

\t\t\t\t</div>                
            </div>


\t\t\t<div class=\"kakoito-text\">
\t\t\t<!--\t";
        // line 162
        echo $this->getAttribute((isset($context["additional"]) ? $context["additional"] : null), "promotextbtm", array());
        echo " вывод текста для подкатегории Магазинов-->
\t\t\t</div>

\t\t\t

\t\t</div>

\t\t";
        // line 169
        $this->loadTemplate("parts/menu.twig", "companies.twig", 169)->display($context);
        // line 170
        echo "
        ";
        // line 177
        echo "\t\t
\t</div>\t\t
";
    }

    public function getTemplateName()
    {
        return "companies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 177,  320 => 170,  318 => 169,  308 => 162,  297 => 154,  281 => 140,  264 => 136,  257 => 133,  253 => 131,  251 => 130,  248 => 129,  241 => 126,  237 => 124,  234 => 123,  227 => 119,  223 => 117,  221 => 116,  217 => 114,  202 => 102,  200 => 101,  185 => 88,  183 => 87,  176 => 83,  172 => 81,  170 => 80,  166 => 78,  159 => 74,  155 => 72,  153 => 71,  143 => 69,  135 => 67,  126 => 65,  120 => 64,  117 => 63,  100 => 62,  90 => 55,  83 => 51,  76 => 47,  31 => 4,  28 => 3,  11 => 1,);
    }
}
