<?php

/* parts/mainpage.twig */
class __TwigTemplate_18f4e672f9d86d7a34842a158e4366048283f24bc4a0e967e3c1faf4bb9d9311 extends Twig_Template
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
        echo "\t<div class=\"content clearfix\">

\t\t<div class=\"center\">

\t\t\t<div class=\"banner-width\">
\t\t\t\t<noindex>
\t\t\t\t";
        // line 7
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "top_fullwidth", array());
        echo "
\t\t\t\t</noindex>
\t\t\t</div>

\t\t\t<h1>";
        // line 11
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array());
        echo "
\t\t\t</h1>
\t\t";
        // line 42
        echo "
<div class=\"categories\">
    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/2\">Мода и стиль</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul>
                ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), 2, array(), "array"), "subcats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
            // line 51
            echo "                    <li><a href=\"/catalogue/discount/subcat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </ul>
        </div>
    </div>
    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/3\">Товары для детей</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul>
                ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), 3, array(), "array"), "subcats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
            // line 63
            echo "                    <li><a href=\"/catalogue/discount/subcat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </ul>
        </div>
    </div>
    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/7\">Техника, электроника</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul>
                ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), 7, array(), "array"), "subcats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
            // line 75
            echo "                    <li><a href=\"/catalogue/discount/subcat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            </ul>
        </div>
    </div>    

    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/5\">Красота и здоровье</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul>
                ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), 5, array(), "array"), "subcats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
            // line 88
            echo "                    <li><a href=\"/catalogue/discount/subcat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "            </ul>
        </div>
    </div>
\t\t<div class=\"onlymobile\">
\t\t\t<noindex>
\t\t\t";
        // line 95
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_brands", array());
        echo "
\t\t\t</noindex>
\t\t</div>\t\t    
    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/14\">Супермаркеты, ТЦ</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul>
                ";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), 14, array(), "array"), "subcats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
            // line 105
            echo "                    <li><a href=\"/catalogue/discount/subcat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "            </ul>
        </div>
    </div>\t
    <div class=\"nomobile banner-width\">
        <noindex>
        ";
        // line 112
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "center_fullwidth", array());
        echo "
        </noindex>
    </div>

    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/4\">Спорт товары</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul>
                ";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), 4, array(), "array"), "subcats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
            // line 123
            echo "                    <li><a href=\"/catalogue/discount/subcat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "            </ul>
        </div>
    </div>
    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/8\">Товары для дома</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul>
                ";
        // line 134
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), 8, array(), "array"), "subcats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
            // line 135
            echo "                    <li><a href=\"/catalogue/discount/subcat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "            </ul>
        </div>
    </div>
    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/9\">Бытовые услуги</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul>
                ";
        // line 146
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), 9, array(), "array"), "subcats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
            // line 147
            echo "                    <li><a href=\"/catalogue/discount/subcat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "            </ul>
        </div>
    </div>
    <div class=\"onlymobile\">
        <noindex>
        ";
        // line 154
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "center_fullwidth", array());
        echo "
        </noindex>
    </div>
    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/10\">Книги, канц-товары</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul></ul>
        </div>
    </div>
    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/11\">Подарки и цветы</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul>
                ";
        // line 171
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), 11, array(), "array"), "subcats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
            // line 172
            echo "                    <li><a href=\"/catalogue/discount/subcat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "            </ul>
        </div>
    </div>
    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/12\">Путешествия</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul>
                ";
        // line 183
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), 12, array(), "array"), "subcats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
            // line 184
            echo "                    <li><a href=\"/catalogue/discount/subcat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "            </ul>
        </div>
    </div>
    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/6\">Автомобили, сервис</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul>
                ";
        // line 195
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), 6, array(), "array"), "subcats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
            // line 196
            echo "                    <li><a href=\"/catalogue/discount/subcat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "            </ul>
        </div>
    </div>
    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/15\">Прочее</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul>
                ";
        // line 207
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), 15, array(), "array"), "subcats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
            // line 208
            echo "                    <li><a href=\"/catalogue/discount/subcat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "            </ul>
        </div>
    </div>
    <div class=\"cat-bl\">
        <div class=\"top-part\">
            <p><a href=\"/catalogue/discount/cat/16\">Домашние животные</a></p>
        </div>
        <div class=\"bottom-part\">
            <ul>
                ";
        // line 219
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "categories", array()), 16, array(), "array"), "subcats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
            // line 220
            echo "                    <li><a href=\"/catalogue/discount/subcat/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcat"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "            </ul>
        </div>
    </div>
\t\t<div class=\"onlymobile\">
\t\t\t<noindex>
\t\t\t";
        // line 227
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_brands", array());
        echo "
\t\t\t</noindex>
\t\t</div>\t\t
    
</div>
\t\t\t

\t\t\t<div class=\"kakoito-text\">
\t\t\t
\t\t\t\t<!--";
        // line 236
        echo $this->getAttribute((isset($context["smth"]) ? $context["smth"] : null), "smthText", array());
        echo " //текст каталог Владимира контроллер Welcome.php public_function index() {'smth' => array}...-->
\t\t\t\t";
        // line 237
        echo $this->getAttribute((isset($context["additional"]) ? $context["additional"] : null), "promotextbtm", array());
        echo "
\t\t\t</div>

\t\t</div>

\t\t";
        // line 242
        $this->loadTemplate("parts/menu.twig", "parts/mainpage.twig", 242)->display($context);
        // line 243
        echo "
        ";
        // line 250
        echo "\t\t
\t</div>\t\t";
    }

    public function getTemplateName()
    {
        return "parts/mainpage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 250,  443 => 243,  441 => 242,  433 => 237,  429 => 236,  417 => 227,  410 => 222,  399 => 220,  395 => 219,  384 => 210,  373 => 208,  369 => 207,  358 => 198,  347 => 196,  343 => 195,  332 => 186,  321 => 184,  317 => 183,  306 => 174,  295 => 172,  291 => 171,  271 => 154,  264 => 149,  253 => 147,  249 => 146,  238 => 137,  227 => 135,  223 => 134,  212 => 125,  201 => 123,  197 => 122,  184 => 112,  177 => 107,  166 => 105,  162 => 104,  150 => 95,  143 => 90,  132 => 88,  128 => 87,  116 => 77,  105 => 75,  101 => 74,  90 => 65,  79 => 63,  75 => 62,  64 => 53,  53 => 51,  49 => 50,  39 => 42,  34 => 11,  27 => 7,  19 => 1,);
    }
}
