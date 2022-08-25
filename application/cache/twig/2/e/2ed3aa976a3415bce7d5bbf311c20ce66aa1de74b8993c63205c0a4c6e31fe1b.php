<?php

/* discounts.twig */
class __TwigTemplate_2ed3aa976a3415bce7d5bbf311c20ce66aa1de74b8993c63205c0a4c6e31fe1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("html.twig", "discounts.twig", 1);
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
        // line 2
        $context["rusmonth"] = array("1" => "января", "2" => "февраля", "3" => "марта", "4" => "апреля", "5" => "мая", "6" => "июня", "7" => "июля", "8" => "августа", "9" => "сентября", "10" => "октября", "11" => "ноября", "12" => "декабря");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<style type=\"text/css\">
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
        // line 46
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "top_fullwidth", array());
        echo "
\t\t\t\t</noindex>
        </div>


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
";
        // line 58
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "top_text", array()) && ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "top_text", array()) != ""))) {
            // line 59
            echo "<br style=\"clear:both;\"/>
";
            // line 60
            echo $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "top_text", array());
            echo "
<br/>
";
        }
        // line 63
        echo "<br style=\"clear:both;\"/>
\t\t\t<div class=\"skidki-iz-kataloga\">

                ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "discounts", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
            // line 67
            echo "\t\t\t\t<div class=\"skidka width-skidka\">
                    <a href=\"/discount/";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<div><img src=\"";
            // line 69
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "/images/discount/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", array()), "html", null, true);
            echo "\"/></div>

\t\t\t\t\t<p><span>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "startDate", array()), "j"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rusmonth"]) ? $context["rusmonth"] : null), twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "startDate", array()), "n"), array(), "array"), "html", null, true);
            echo " ";
            if ((twig_date_format_filter($this->env, "now", "Y") != twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "startDate", array()), "Y"))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "startDate", array()), "Y"), "html", null, true);
            }
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "finishDate", array()), "j"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rusmonth"]) ? $context["rusmonth"] : null), twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "finishDate", array()), "n"), array(), "array"), "html", null, true);
            echo " ";
            if ((twig_date_format_filter($this->env, "now", "Y") != twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "finishDate", array()), "Y"))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "finishDate", array()), "Y"), "html", null, true);
            }
            echo "</span>
                    <br>
                    ";
            // line 73
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["discount"], "name", array()), 0, 45), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($context["discount"], "name", array())) > 45)) {
                echo "...";
            }
            echo "</p></a>

\t\t\t\t\t";
            // line 75
            if (($this->getAttribute($context["loop"], "index", array()) < 3)) {
                // line 76
                echo "\t\t\t\t\t<div class=\"r-google\">
\t\t\t\t\t\t<noindex>
\t\t\t\t\t\t";
                // line 78
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "catalog_item", array());
                echo "
\t\t\t\t\t\t</noindex>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 82
            echo "
\t\t\t\t\t<div class=\"razmer-skidki\">
                        ";
            // line 84
            if (($this->getAttribute($context["discount"], "discount", array()) > 0)) {
                // line 85
                echo "\t\t\t\t\t\t<span>-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "discount", array()), "html", null, true);
                echo "%</span>
                        ";
            } else {
                // line 87
                echo "                        <span class=\"gift\"><img src=\"";
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "/assets/img/akcii/gift.png\" alt=\"\"></span>
                        ";
            }
            // line 89
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
";
            // line 92
            if (($this->getAttribute($context["loop"], "index", array()) == 12)) {
                // line 93
                echo "    <div class=\"banner-width nomobile\">
            <noindex>
            ";
                // line 95
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "center_fullwidth", array());
                echo "
            </noindex>
    </div>
";
            }
            // line 98
            echo "                
";
            // line 99
            if (($this->getAttribute($context["loop"], "index", array()) == 24)) {
                // line 100
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
            // line 112
            echo "                
";
            // line 113
            if (($this->getAttribute($context["loop"], "index", array()) == 36)) {
                // line 114
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
            // line 126
            echo "                
";
            // line 127
            if (($this->getAttribute($context["loop"], "index", array()) == 8)) {
                // line 128
                echo "\t<div class=\"onlymobile\">
\t\t<noindex>
\t\t";
                // line 130
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_catalogitem", array());
                echo "
\t\t</noindex>
\t</div>
";
            }
            // line 134
            if (($this->getAttribute($context["loop"], "index", array()) == 16)) {
                // line 135
                echo "\t<div class=\"onlymobile\">
\t\t<noindex>
\t\t";
                // line 137
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_catalogitem2", array());
                echo "
\t\t</noindex>
\t</div>
";
            }
            // line 140
            echo "\t\t
";
            // line 141
            if (($this->getAttribute($context["loop"], "index", array()) == 24)) {
                // line 142
                echo "    <div class=\"onlymobile\">
        <noindex>
        ";
                // line 144
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_catalogitem3", array());
                echo "
        </noindex>
    </div>
";
            }
            // line 147
            echo "                            
";
            // line 148
            if (($this->getAttribute($context["loop"], "index", array()) == 32)) {
                // line 149
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
";
            }
            // line 161
            echo "                            
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "\t<div class=\"banner-width\">
\t\t\t<noindex>
\t\t\t";
        // line 165
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "center_fullwidth", array());
        echo "
\t\t\t</noindex>
\t</div>\t\t\t\t
";
        // line 168
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "bottom_text", array()) && ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "bottom_text", array()) != ""))) {
            // line 169
            echo "<br style=\"clear:both;\"/>
";
            // line 170
            echo $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "bottom_text", array());
            echo "
";
        }
        // line 171
        echo "\t
                <div class=\"pagination\">

\t\t\t\t\t<ul class=\"clearfix\">
                        ";
        // line 175
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "pagination", array());
        echo "
\t\t\t\t\t</ul>

\t\t\t\t</div>                
            </div>


\t\t\t<div class=\"kakoito-text\">
\t\t\t<!--вывод текта для категории Акции и Скидки
\t\t\t";
        // line 184
        echo $this->getAttribute((isset($context["additional"]) ? $context["additional"] : null), "promotextbtm", array());
        echo "  -->
\t\t\t</div>
\t\t\t<div class=\"kakoito-text\">
\t\t\t<!--вывод текта для подкатегорий категории Акции и Скидки
\t\t\t\t";
        // line 188
        echo $this->getAttribute((isset($context["add"]) ? $context["add"] : null), "promotextbtm", array());
        echo " -->
\t\t\t</div>
\t\t\t<div class=\"kakoito-text\">
\t\t\t<!--вывод текта для для подкаткегории подкатегорий категории Акции и Скидки
\t\t\t\t";
        // line 192
        echo $this->getAttribute((isset($context["addsubtext"]) ? $context["addsubtext"] : null), "promotextbtm", array());
        echo "-->
\t\t\t</div>

\t\t</div>

\t\t";
        // line 197
        $this->loadTemplate("parts/menu.twig", "discounts.twig", 197)->display($context);
        // line 198
        echo "

\t\t";
        // line 206
        echo "\t\t
\t</div>\t\t
";
    }

    public function getTemplateName()
    {
        return "discounts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 206,  406 => 198,  404 => 197,  396 => 192,  389 => 188,  382 => 184,  370 => 175,  364 => 171,  359 => 170,  356 => 169,  354 => 168,  348 => 165,  344 => 163,  329 => 161,  314 => 149,  312 => 148,  309 => 147,  302 => 144,  298 => 142,  296 => 141,  293 => 140,  286 => 137,  282 => 135,  280 => 134,  273 => 130,  269 => 128,  267 => 127,  264 => 126,  249 => 114,  247 => 113,  244 => 112,  229 => 100,  227 => 99,  224 => 98,  217 => 95,  213 => 93,  211 => 92,  206 => 89,  200 => 87,  194 => 85,  192 => 84,  188 => 82,  181 => 78,  177 => 76,  175 => 75,  167 => 73,  148 => 71,  139 => 69,  135 => 68,  132 => 67,  115 => 66,  110 => 63,  104 => 60,  101 => 59,  99 => 58,  93 => 55,  86 => 51,  78 => 46,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
