<?php

/* company.twig */
class __TwigTemplate_df9bda92eab41d59b1db73c3ab7ba2be0b463ca51717fd55d359f09424d8b2f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("html.twig", "company.twig", 1);
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
<div class=\"content clearfix\">

\t\t<div class=\"center kat\">

\t\t\t<div class=\"banner-width\">
\t\t\t\t<noindex>
\t\t\t\t";
        // line 46
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "top_fullwidth", array());
        echo "
\t\t\t\t</noindex>
\t\t\t</div>

\t\t\t\t

\t\t\t<h1>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "company", array()), "name", array()), "html", null, true);
        echo "</h1>

\t\t\t<div class=\"yadirect-slon\">
\t\t\t\t<noindex>
\t\t\t\t";
        // line 56
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "details_top", array());
        echo "
\t\t\t\t</noindex>
\t\t\t</div>

\t\t\t<div class=\"open-catalog\">
\t\t\t\t<div class=\"cat\">
\t\t\t\t<div class=\"logotip\" onclick=\"zoomlogo('";
        // line 62
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "images/company/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "company", array()), "logo", array()), "html", null, true);
        echo "');\">

\t\t\t\t\t<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "images/company/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "company", array()), "logo", array()), "html", null, true);
        echo "\" alt=\"\">

\t\t\t\t</div>
\t\t\t\t";
        // line 67
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "company", array()), "urlk", array()) && ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "company", array()), "urlk", array()) != ""))) {
            // line 68
            echo "\t\t\t\t<div class=\"catal\">
\t\t\t\t\t<a onclick=\"return showInFrame(this);\" href=\"#\" data-url=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "company", array()), "urlk", array()), "html", null, true);
            echo "\">Каталог товаров</a>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"underlogodetail\">
\t\t\t\t\t";
        // line 74
        if ($this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "underlogo_detail", array())) {
            // line 75
            echo "\t\t\t\t\t\t<noindex>
\t\t\t\t\t\t";
            // line 76
            echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "underlogo_detail", array());
            echo "
\t\t\t\t\t\t</noindex>
\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"opisanie-marki\" style=\"width:58%;\">
\t\t\t\t<div class=\"resizing-container\">
            \t\t";
        // line 85
        echo $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "company", array()), "description", array());
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"pink view-all\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span class=\"drop-down\">Показать еще</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t</div>


\t<div class=\"onlymobile\">
\t\t<noindex>
\t\t";
        // line 98
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_brands", array());
        echo "
\t\t</noindex>
\t</div>



\t\t\t<h2>Текущие акции</h2>

\t\t\t<div class=\"skidki-iz-kataloga\">

\t\t\t\t
\t\t\t\t
                ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "companydiscounts", array()));
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
            // line 111
            echo "\t\t\t\t<div class=\"skidka width-skidka\">
                    <a href=\"/discount/";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<div><img src=\"";
            // line 113
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "/images/discount/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", array()), "html", null, true);
            echo "\"/></div>

\t\t\t\t\t<p><span>";
            // line 115
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "startDate", array()), "j"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rusmonth"]) ? $context["rusmonth"] : null), twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "startDate", array()), "n"), array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "finishDate", array()), "j"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rusmonth"]) ? $context["rusmonth"] : null), twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "finishDate", array()), "n"), array(), "array"), "html", null, true);
            echo " </span>
                    <br>
                    ";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t</a>
\t\t\t\t ";
            // line 119
            if (($this->getAttribute($context["loop"], "index", array()) < 3)) {
                // line 120
                echo "\t\t\t\t\t<div class=\"r-google\">
\t\t\t\t\t\t<noindex>
\t\t\t\t\t\t";
                // line 122
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "catalog_item", array());
                echo "
\t\t\t\t\t\t</noindex>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 126
            echo "\t\t\t\t\t<div class=\"razmer-skidki\">
                        ";
            // line 127
            if (($this->getAttribute($context["discount"], "discount", array()) > 0)) {
                // line 128
                echo "\t\t\t\t\t\t<span>-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "discount", array()), "html", null, true);
                echo "%</span>
                        ";
            } else {
                // line 130
                echo "                        <span class=\"gift\"><img src=\"";
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "/assets/img/akcii/gift.png\" alt=\"\"></span>
                        ";
            }
            // line 132
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
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
        // line 136
        echo "
\t\t\t</div>

            <div class=\"banner-width nomobile\">
                <noindex>
                ";
        // line 141
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "center_fullwidth", array());
        echo "
                </noindex>
            </div>

            <div class=\"onlymobile\">
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

\t\t\t";
        // line 158
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "similardiscounts", array())) {
            // line 159
            echo "\t\t\t<h2 class=\"skidka-320\">Похожие предложения</h2>

\t\t\t<div class=\"onlymobile\">
\t\t\t\t<noindex>
\t\t\t\t";
            // line 163
            echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_catalogitem2", array());
            echo "
\t\t\t\t</noindex>
\t\t\t</div>\t\t\t

\t\t\t<div class=\"skidki-iz-kataloga\">


                ";
            // line 170
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "similardiscounts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 171
                echo "\t\t\t\t<div class=\"skidka width-skidka\">
                    <a href=\"/discount/";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<div><img src=\"";
                // line 173
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "images/discount/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "image", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", array()), "html", null, true);
                echo "\"/></div>

\t\t\t\t\t<p><span>";
                // line 175
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
                // line 177
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["discount"], "name", array()), 0, 45), "html", null, true);
                if ((twig_length_filter($this->env, $this->getAttribute($context["discount"], "name", array())) > 45)) {
                    echo "...";
                }
                echo "</p></a>

\t\t\t\t\t<div class=\"razmer-skidki\">
                        ";
                // line 180
                if (($this->getAttribute($context["discount"], "discount", array()) > 0)) {
                    // line 181
                    echo "\t\t\t\t\t\t<span>-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "discount", array()), "html", null, true);
                    echo "%</span>
                        ";
                } else {
                    // line 183
                    echo "                        <span class=\"gift\"><img src=\"";
                    echo twig_escape_filter($this->env, base_url(), "html", null, true);
                    echo "/assets/img/akcii/gift.png\" alt=\"\"></span>
                        ";
                }
                // line 185
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "\t\t\t\t

\t\t\t</div>
\t\t\t";
        }
        // line 192
        echo "
\t\t\t<h2>Архив акций</h2>

\t\t\t<div class=\"skidki-iz-kataloga\">

                ";
        // line 197
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "companydiscountsarchieve", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
            // line 198
            echo "\t\t\t\t<div class=\"skidka width-skidka\">
                    <a href=\"/discount/";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<div><img src=\"";
            // line 200
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "/images/discount/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", array()), "html", null, true);
            echo "\"/></div>

\t\t\t\t\t<p><span>";
            // line 202
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "startDate", array()), "j"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rusmonth"]) ? $context["rusmonth"] : null), twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "startDate", array()), "n"), array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "finishDate", array()), "j"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rusmonth"]) ? $context["rusmonth"] : null), twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "finishDate", array()), "n"), array(), "array"), "html", null, true);
            echo " </span>
                    <br>
                    ";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"razmer-skidki\">
                        ";
            // line 208
            if (($this->getAttribute($context["discount"], "discount", array()) > 0)) {
                // line 209
                echo "\t\t\t\t\t\t<span>-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "discount", array()), "html", null, true);
                echo "%</span>
                        ";
            } else {
                // line 211
                echo "                        <span class=\"gift\"><img src=\"";
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "/assets/img/akcii/gift.png\" alt=\"\"></span>
                        ";
            }
            // line 213
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "\t\t\t</div>


\t\t\t<div class=\"table-adress\">



\t\t\t\t<table class=\"skidka-320\">

\t\t\t\t\t<thead>

\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t<td width=\"50%\">Адрес</td>

\t\t\t\t\t\t\t<td width=\"13%\">Метро</td>

\t\t\t\t\t\t\t<td>Телефон</td>

\t\t\t\t\t\t\t<td>Режим работы</td>

\t\t\t\t\t\t</tr>

\t\t\t\t\t</thead>

\t\t\t\t\t<tbody>

                        ";
        // line 244
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "companybranches", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
            // line 245
            echo "\t\t\t\t\t\t<tr position=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "latitude", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "longitude", array()), "html", null, true);
            echo "\"  ";
            if (($this->getAttribute($context["loop"], "index", array()) > 10)) {
                echo "class=\"hidemoreaddr\"";
            }
            echo ">

\t\t\t\t\t\t\t<td class=\"tdaddress\" title=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "address", array()), "html", null, true);
            echo "\"><a href=\"javascript:showOnMap('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "latitude", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "longitude", array()), "html", null, true);
            echo "',true);\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "address", array()), "html", null, true);
            echo "</a></td>

\t\t\t\t\t\t\t<td>                            
                            ";
            // line 250
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["branch"], "metro", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["metro"]) {
                // line 251
                echo "                                <a href=\"javascript:showOnMap('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metro"], "latitude", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metro"], "longitude", array()), "html", null, true);
                echo "');\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metro"], "name", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "assets/img/metro.png\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metro"], "name", array()), "html", null, true);
                echo "\"/></a>                            
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "                            </td>
                            ";
            // line 254
            if ((($this->getAttribute($context["branch"], "phone", array()) == "-----") || ($this->getAttribute($context["branch"], "phone", array()) == ""))) {
                // line 255
                echo "\t\t\t\t\t\t\t<td><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "phone", array()), "html", null, true);
                echo "</span></td>
                            ";
            } else {
                // line 257
                echo "                            <td class=\"branchphone\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "phone", array()), "html", null, true);
                echo "</span> <a href=\"#\">показать номер</a></td>
                            ";
            }
            // line 259
            echo "\t\t\t\t\t\t\t<td>10 - 22</td>

\t\t\t\t\t\t</tr>
                        
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "companybranches", array())) > 10)) {
            // line 265
            echo "\t\t\t\t\t\t<tr class=\"showmoreaddr\"><td colspan=5><a href=\"#\">Показать все</a><td></tr>
\t\t\t\t\t\t";
        }
        // line 266
        echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>

\t\t\t\t</table>

\t\t\t<!--div class=\"map-on-skidka\">
\t\t\t\t<div style=\"width: 100%; height: 400px; margin: 0 auto;\" id=\"YMapsID\"></div>
\t\t\t</div-->
\t\t\t";
        // line 274
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "company", array()), "siteAddress", array())) {
            // line 275
            echo "\t\t\t\t<div class=\"some-info-table skidka-320\">
\t\t\t\t\t<p>Официальный сайт:<a href=\"#\">";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "company", array()), "siteAddress", array()), "html", null, true);
            echo "</a></p>

\t\t\t\t</div>
\t\t\t";
        }
        // line 280
        echo "\t\t\t</div>

\t\t\t

\t\t\t

\t\t\t<h2 class=\"n\">Похожие компании</h2>

\t\t\t<div class=\"match-brands n\">
\t\t\t\t";
        // line 289
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "similarcompanies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 290
            echo "\t\t\t\t\t<a href=\"/company/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "id", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "images/company/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "logo", array()), "html", null, true);
            echo "\" alt=\"\"></a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "\t\t\t</div>

\t\t\t<div class=\"match-brands-mobile n\">

\t\t\t\t<ul>
\t\t\t\t";
        // line 297
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "similarcompanies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 298
            echo "\t\t\t\t\t<li><a href=\"/company/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "name", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "\t\t\t\t</ul>

\t\t\t\t

\t\t\t</div>

\t\t\t<div class=\"onlymobile\">
\t\t\t\t<noindex>
\t\t\t\t";
        // line 308
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_catalogitem3", array());
        echo "
\t\t\t\t</noindex>
\t\t\t</div>\t\t\t\t\t



\t\t\t<h2 class=\"n m\">Отзывы</h2>
        
        
            ";
        // line 317
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "companycomments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 318
            echo "                <div class=\"otzuv\">

                    <h5>";
            // line 320
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "userName", array()), "html", null, true);
            echo "</h5>

                    <p>";
            // line 322
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "</p>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        echo "
\t\t\t<a href=\"\" class=\"click-otzuv\">Написать отзыв</a><br/><br/>

\t\t\t<div class=\"form-otzuv\">

\t\t\t\t<form id=\"form-otzuv\">
                    <input type=hidden name=company value=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "company", array()), "id", array()), "html", null, true);
        echo "\"/>
                
\t\t\t\t\t<input id=\"form-otzuv-name\" type=\"text\" name=\"username\" placeholder=\"Ваше имя\">

\t\t\t\t\t<textarea name=\"text\" id=\"form-otzuv-text\" cols=\"30\" rows=\"10\" placeholder=\"Текст отзыва\"></textarea>

\t\t\t\t\t<div class=\"captcha\">

\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"6LdTyCYTAAAAANA_-c_G1aSHCo8jKPKZo9n0mryD\"></div>

\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"submit\" value=\"Отправить\">

\t\t\t\t</form>

\t\t\t</div>

\t\t</div>

\t\t


\t\t";
        // line 355
        $this->loadTemplate("parts/menu.twig", "company.twig", 355)->display($context);
        // line 356
        echo "
\t\t";
        // line 364
        echo "\t\t

\t</div>
<!--script type=\"text/javascript\" src=\"//api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU\"></script>
<script type=\"text/javascript\" src=\"";
        // line 368
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/maps.js\"></script-->
<script src='https://www.google.com/recaptcha/api.js'></script>
";
    }

    public function getTemplateName()
    {
        return "company.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  764 => 368,  758 => 364,  755 => 356,  753 => 355,  727 => 332,  719 => 326,  709 => 322,  704 => 320,  700 => 318,  696 => 317,  684 => 308,  674 => 300,  663 => 298,  659 => 297,  652 => 292,  639 => 290,  635 => 289,  624 => 280,  617 => 276,  614 => 275,  612 => 274,  602 => 266,  598 => 265,  595 => 264,  577 => 259,  571 => 257,  565 => 255,  563 => 254,  560 => 253,  543 => 251,  539 => 250,  527 => 247,  515 => 245,  498 => 244,  469 => 217,  460 => 213,  454 => 211,  448 => 209,  446 => 208,  439 => 204,  428 => 202,  419 => 200,  415 => 199,  412 => 198,  408 => 197,  401 => 192,  395 => 188,  386 => 185,  380 => 183,  374 => 181,  372 => 180,  363 => 177,  344 => 175,  335 => 173,  331 => 172,  328 => 171,  324 => 170,  314 => 163,  308 => 159,  306 => 158,  286 => 141,  279 => 136,  262 => 132,  256 => 130,  250 => 128,  248 => 127,  245 => 126,  238 => 122,  234 => 120,  232 => 119,  227 => 117,  216 => 115,  207 => 113,  203 => 112,  200 => 111,  183 => 110,  168 => 98,  152 => 85,  144 => 79,  138 => 76,  135 => 75,  133 => 74,  129 => 72,  123 => 69,  120 => 68,  118 => 67,  110 => 64,  103 => 62,  94 => 56,  87 => 52,  78 => 46,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
