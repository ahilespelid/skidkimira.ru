<?php

/* tradecenter.twig */
class __TwigTemplate_5f270f7aa4dd652abbdf7326b24cfb12a2168a62bf91f379339f90d21d89a255 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("html.twig", "tradecenter.twig", 1);
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

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"content clearfix\">

    <div class=\"center kat\">

        <div class=\"banner-width\">
\t\t\t\t<noindex>
\t\t\t\t";
        // line 8
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "top_fullwidth", array());
        echo "
\t\t\t\t</noindex>
        </div>



        <h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "name", array()), "html", null, true);
        echo "</h1>
     

            <div class=\"yadirect-slon\">
\t\t\t\t<noindex>
\t\t\t\t";
        // line 19
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "details_top", array());
        echo "
\t\t\t\t</noindex>
            </div>

            <div class=\"open-catalog\">
\t\t<div class=\"cat\">
                <div class=\"logotip\" onclick=\"zoomlogo('";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "images/company/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "logo", array()), "html", null, true);
        echo "');\">

                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "images/company/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "logo", array()), "html", null, true);
        echo "\" alt=\"\">

                </div>

\t\t</div>
\t\t\t\t<div class=\"underlogodetail\">
\t\t\t\t\t";
        // line 33
        if ($this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "underlogo_detail", array())) {
            // line 34
            echo "\t\t\t\t\t\t<noindex>
\t\t\t\t\t\t";
            // line 35
            echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "underlogo_detail", array());
            echo "
\t\t\t\t\t\t</noindex>
\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t</div>


            </div>


\t\t\t<div class=\"opisanie-marki\" style=\"width:58%;\">
            <div class=\"resizing-container\">
                ";
        // line 46
        echo $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "description", array());
        echo "
            </div>
            <div class=\"pink view-all\">
                <a href=\"#\">
                    <span class=\"drop-down\">Показать еще</span>
                </a>
                <div class=\"clear\"></div>
            </div>
        </div>
\t\t<div class=\"onlymobile\">
\t\t\t<noindex>
\t\t\t";
        // line 57
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_brands", array());
        echo "
\t\t\t</noindex>
\t\t</div>\t\t

        <div class=\"map2-and-info clearfix\">

            <div class=\"info2\">

                <div class=\"akc\">

                    <a href=\"/catalogue/discount/tc/";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "id", array()), "html", null, true);
        echo "\">Акции</a>

                </div>

                <div class=\"inf\">

                    <ul>
                        ";
        // line 74
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "schedule", array()) && ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "schedule", array()) != ""))) {
            // line 75
            echo "                        <li class=\"tim\">Режим работы: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "schedule", array()), "html", null, true);
            echo "</li>
                        ";
        }
        // line 77
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "phone", array())) {
            // line 78
            echo "                        <li class=\"tel\">Телефон:<br> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "phone", array()), "html", null, true);
            echo "</li>
                        ";
        }
        // line 80
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "siteAddress", array())) {
            // line 81
            echo "                        <li class=\"sit\">Официальный сайт:

                            <a href=\"#\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "siteAddress", array()), "html", null, true);
            echo "</a></li>
                        ";
        }
        // line 85
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "address", array())) {
            // line 86
            echo "                        <li class=\"adr\">Адрес: <br>
                             <a style=\"display:none;\" id=\"tcaddress\" title=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "address", array()), "html", null, true);
            echo "\" position=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "latitude", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "longitude", array()), "html", null, true);
            echo "\" href=\"javascript:showOnMap('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "latitude", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "longitude", array()), "html", null, true);
            echo "')\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "address", array()), "html", null, true);
            echo "</a>
                            ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc", array()), "address", array()), "html", null, true);
            echo "</li>
                        ";
        }
        // line 90
        echo "
                    </ul>

                </div>

            </div>

            <div class=\"map2\">
                <div style=\"width: 100%; height: 400px; margin: 0 auto;\" id=\"YMapsID\"></div>
                <!--<script type=\"text/javascript\" charset=\"utf-8\" async src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=_K3gzO0KTL7jJzAEosvmk-NxmB3H0e1x&width=380&height=300&lang=ru_UA&sourceType=constructor&scroll=true\"></script>-->

            </div>
        </div>

        <div class=\"banner-width\">
\t\t\t<noindex>
\t\t\t";
        // line 106
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "center_fullwidth", array());
        echo "
\t\t\t</noindex>
        </div>
        ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc_comp", array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 110
            echo "        <div class=\"part2\">
            <h4>";
            // line 111
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</h4>
            <div class=\"inner-ul\">
                <ul class=\"ul1\">
                        ";
            // line 114
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc_comp", array()), $context["key"], array(), "array"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 115
                echo "                        <li";
                if (($this->getAttribute($context["brand"], "discounts", array()) > 0)) {
                    echo " class=\"dot\"";
                }
                echo "><a href=\"/company/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
                echo "</a></li>
                            ";
                // line 116
                if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc_comp", array()), $context["key"], array(), "array")) / 3) > 1)) {
                    echo "                        
                                ";
                    // line 117
                    if (((($this->getAttribute($context["loop"], "index", array()) % twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc_comp", array()), $context["key"], array(), "array")) / 3))) == 0) && (($this->getAttribute($context["loop"], "index", array()) / twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc_comp", array()), $context["key"], array(), "array")) / 3))) < 3))) {
                        // line 118
                        echo "                                </ul><ul  class=\"ul";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", array()) / twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc_comp", array()), $context["key"], array(), "array")) / 3))) + 1), "html", null, true);
                        echo "\">
                                ";
                    }
                    // line 119
                    echo "                       
                            ";
                }
                // line 121
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "                    
                </ul>
            ";
            // line 123
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "tc_comp", array()), $context["key"], array(), "array")) > 12)) {
                // line 124
                echo "            <div class=\"showmorebrand\">

                <a class=\"\" href=\"#\">показать еще</a>

            </div>                
            ";
            }
            // line 130
            echo "            </div>            
        </div>


";
            // line 134
            if (($this->getAttribute($context["loop"], "index", array()) == 2)) {
                // line 135
                echo "\t\t<div class=\"onlymobile\">
\t\t\t<noindex>
\t\t\t";
                // line 137
                echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_catalogitem2", array());
                echo "
\t\t\t</noindex>
\t\t</div>\t\t
";
            }
            // line 140
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "        <div class=\"banner-width\">
\t\t\t<noindex>
\t\t\t";
        // line 146
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "center_fullwidth", array());
        echo "
\t\t\t</noindex>
        </div>        
    </div>



        ";
        // line 153
        $this->loadTemplate("parts/menu.twig", "tradecenter.twig", 153)->display($context);
        // line 154
        echo "
        ";
        // line 162
        echo "
    </div>
    <script type=\"text/javascript\" src=\"//api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/maps.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "tradecenter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 165,  370 => 162,  367 => 154,  365 => 153,  355 => 146,  351 => 144,  334 => 140,  327 => 137,  323 => 135,  321 => 134,  315 => 130,  307 => 124,  305 => 123,  288 => 121,  284 => 119,  278 => 118,  276 => 117,  272 => 116,  261 => 115,  244 => 114,  238 => 111,  235 => 110,  218 => 109,  212 => 106,  194 => 90,  189 => 88,  175 => 87,  172 => 86,  169 => 85,  164 => 83,  160 => 81,  157 => 80,  151 => 78,  148 => 77,  142 => 75,  140 => 74,  130 => 67,  117 => 57,  103 => 46,  93 => 38,  87 => 35,  84 => 34,  82 => 33,  71 => 27,  64 => 25,  55 => 19,  47 => 14,  38 => 8,  30 => 2,  11 => 1,);
    }
}
