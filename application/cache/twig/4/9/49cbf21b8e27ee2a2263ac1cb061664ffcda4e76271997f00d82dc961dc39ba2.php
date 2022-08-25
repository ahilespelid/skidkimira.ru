<?php

/* discount.twig */
class __TwigTemplate_49cbf21b8e27ee2a2263ac1cb061664ffcda4e76271997f00d82dc961dc39ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("html.twig", "discount.twig", 1);
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

        <div class=\"center kat\">

            <div class=\"banner-width\">
                <noindex>
                ";
        // line 46
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "top_fullwidth", array());
        echo "
                </noindex>
            </div>

            <h1>";
        // line 50
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array());
        echo "
            </h1>


            <div class=\"kakoito-text\">
                ";
        // line 55
        echo $this->getAttribute((isset($context["additional"]) ? $context["additional"] : null), "promotextbtm", array());
        echo "
            </div>

            <div class=\"yadirect-slon\">
                <noindex>
                ";
        // line 60
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "details_top", array());
        echo "
                </noindex>
            </div>

            <div class=\"open-catalog\">
                <div class=\"cat\">
                <div class=\"logotip\" onclick=\"zoomlogo('";
        // line 66
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "/images/discount/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "discount", array()), "image", array()), "html", null, true);
        echo "');\">

                    <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "/images/discount/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "discount", array()), "image", array()), "html", null, true);
        echo "\" alt=\"\">

                </div>

                ";
        // line 72
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "discount", array()), "urlMore", array())) {
            // line 73
            echo "                <div class=\"catal\">
                    <a onclick=\"return showInFrame(this);\" href=\"#\" data-url=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "discount", array()), "urlMore", array()), "html", null, true);
            echo "\">Каталог товаров</a>
                </div>
                ";
        }
        // line 77
        echo "
                </div>
                <div class=\"underlogodetail\">
                    ";
        // line 80
        if ($this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "underlogo_detail", array())) {
            // line 81
            echo "                        <noindex>
                        ";
            // line 82
            echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "underlogo_detail", array());
            echo "
                        </noindex>
                    ";
        }
        // line 85
        echo "                </div>
            </div>

            <div class=\"opisanie-marki\" style=\"width:58%;\">
                <div class=\"resizing-container\">
                    ";
        // line 90
        echo $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "discount", array()), "fullDescription", array());
        echo "
                </div>
                <div class=\"pink view-all\">
                    <a href=\"#\">
                        <span class=\"drop-down\">Показать еще</span>
                    </a>
                    <div class=\"clear\"></div>
                </div>
            </div>

    <div class=\"onlymobile\">
        <noindex>
        ";
        // line 102
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_brands", array());
        echo "
        </noindex>
    </div>

            <h2>Текущие акции</h2>

            <div class=\"skidki-iz-kataloga\">

                
                ";
        // line 111
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
            // line 112
            echo "
                <div class=\"skidka width-skidka\">
                    <a href=\"/discount/";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "id", array()), "html", null, true);
            echo "\">
                    <div><img src=\"";
            // line 115
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "/images/discount/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", array()), "html", null, true);
            echo "\"/></div>

                    <p><span>";
            // line 117
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
            // line 119
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["discount"], "name", array()), 0, 45), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($context["discount"], "name", array())) > 45)) {
                echo "...";
            }
            echo "</p>
                    </a>
                    ";
            // line 121
            if (($this->getAttribute($context["loop"], "index", array()) < 3)) {
                // line 122
                echo "                    <div class=\"r-google\">
                        <noindex>
                        ";
                // line 124
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "catalog_item", array());
                echo "
                        </noindex>
                    </div>
                    ";
            }
            // line 128
            echo "
                    <div class=\"razmer-skidki\">
                        ";
            // line 130
            if (($this->getAttribute($context["discount"], "discount", array()) > 0)) {
                // line 131
                echo "                        <span>-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "discount", array()), "html", null, true);
                echo "%</span>
                        ";
            } else {
                // line 133
                echo "                        <span class=\"gift\"><img src=\"";
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "/assets/img/akcii/gift.png\" alt=\"\"></span>
                        ";
            }
            // line 135
            echo "
                    </div>
                </div>
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
        // line 139
        echo "
            </div>

            <div class=\"banner-width nomobile\">
                <noindex>
                ";
        // line 144
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

            

            <h2 class=\"skidka-320\">Похожие предложения</h2>

            <div class=\"onlymobile\">
                <noindex>
                ";
        // line 167
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_catalogitem2", array());
        echo "
                </noindex>
            </div>                    

            <div class=\"skidki-iz-kataloga\">
                ";
        // line 172
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "similar_discounts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
            // line 173
            echo "                <div class=\"skidka width-skidka\">
                    <a href=\"/discount/";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "id", array()), "html", null, true);
            echo "\">
                    <div><img src=\"";
            // line 175
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "images/discount/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", array()), "html", null, true);
            echo "\"/></div>

                    <p><span>";
            // line 177
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
            // line 179
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["discount"], "name", array()), 0, 45), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($context["discount"], "name", array())) > 45)) {
                echo "...";
            }
            echo "</p></a>

                    <div class=\"razmer-skidki\">
                        ";
            // line 182
            if (($this->getAttribute($context["discount"], "discount", array()) > 0)) {
                // line 183
                echo "                        <span>-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "discount", array()), "html", null, true);
                echo "%</span>
                        ";
            } else {
                // line 185
                echo "                        <span class=\"gift\"><img src=\"";
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "/assets/img/akcii/gift.png\" alt=\"\"></span>
                        ";
            }
            // line 187
            echo "
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                

            </div>
            

            <div class=\"table-adress\">



                <table class=\"skidka-320\">

                    <thead>

                        <tr>

                            <td width=\"50%\">Адрес</td>

                            <td width=\"13%\">Метро</td>

                            <td>Телефон</td>

                            <td>Режим работы</td>

                        </tr>

                    </thead>

                    <tbody>

                        ";
        // line 219
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
            // line 220
            echo "                        <tr position=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "latitude", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "longitude", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["loop"], "index", array()) > 10)) {
                echo "class=\"hidemoreaddr\"";
            }
            echo ">

                            <td class=\"tdaddress\" title=\"";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "address", array()), "html", null, true);
            echo "\"><a href=\"javascript:showOnMap('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "latitude", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "longitude", array()), "html", null, true);
            echo "',true);\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "address", array()), "html", null, true);
            echo "</a></td>

                            <td>                            
                            ";
            // line 225
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["branch"], "metro", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["metro"]) {
                // line 226
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
            // line 228
            echo "                            </td>
                            ";
            // line 229
            if ((($this->getAttribute($context["branch"], "phone", array()) == "-----") || ($this->getAttribute($context["branch"], "phone", array()) == ""))) {
                // line 230
                echo "                            <td><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "phone", array()), "html", null, true);
                echo "</span></td>
                            ";
            } else {
                // line 232
                echo "                            <td class=\"branchphone\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "phone", array()), "html", null, true);
                echo "</span> <a href=\"#\">показать номер</a></td>
                            ";
            }
            // line 234
            echo "                            <td>10 - 22</td>

                        </tr>
                        
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
        // line 239
        echo "                        ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "companybranches", array())) > 10)) {
            // line 240
            echo "                        <tr class=\"showmoreaddr\"><td colspan=5><a href=\"#\">Показать все</a><td></tr>
                        ";
        }
        // line 242
        echo "                        
                    </tbody>

                </table>

            <!--div class=\"map-on-skidka\">
                <div style=\"width: 100%; height: 400px; margin: 0 auto;\" id=\"YMapsID\"></div>
            </div-->    

                <div class=\"some-info-table skidka-320\">

                    <p>Официальный сайт:<a href=\"#\">";
        // line 253
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "company", array()), "siteAddress", array()), "html", null, true);
        echo "</a></p>

                    <a href=\"/company/";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "company", array()), "id", array()), "html", null, true);
        echo "\">Все скидки компании</a>

                </div>

            </div>
            


        </div>


        ";
        // line 266
        $this->loadTemplate("parts/menu.twig", "discount.twig", 266)->display($context);
        // line 267
        echo "
        ";
        // line 274
        echo "        
    </div>

<!--script type=\"text/javascript\" src=\"//api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU\"></script>
<script type=\"text/javascript\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/maps.js\"></script-->        
";
    }

    public function getTemplateName()
    {
        return "discount.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 278,  572 => 274,  569 => 267,  567 => 266,  553 => 255,  548 => 253,  535 => 242,  531 => 240,  528 => 239,  510 => 234,  504 => 232,  498 => 230,  496 => 229,  493 => 228,  476 => 226,  472 => 225,  460 => 222,  448 => 220,  431 => 219,  400 => 190,  391 => 187,  385 => 185,  379 => 183,  377 => 182,  368 => 179,  349 => 177,  340 => 175,  336 => 174,  333 => 173,  329 => 172,  321 => 167,  295 => 144,  288 => 139,  271 => 135,  265 => 133,  259 => 131,  257 => 130,  253 => 128,  246 => 124,  242 => 122,  240 => 121,  232 => 119,  221 => 117,  212 => 115,  208 => 114,  204 => 112,  187 => 111,  175 => 102,  160 => 90,  153 => 85,  147 => 82,  144 => 81,  142 => 80,  137 => 77,  131 => 74,  128 => 73,  126 => 72,  117 => 68,  110 => 66,  101 => 60,  93 => 55,  85 => 50,  78 => 46,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
