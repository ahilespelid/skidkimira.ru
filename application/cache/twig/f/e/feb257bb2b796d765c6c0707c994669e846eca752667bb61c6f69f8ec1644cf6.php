<?php

/* parts/menus/cities.html */
class __TwigTemplate_feb257bb2b796d765c6c0707c994669e846eca752667bb61c6f69f8ec1644cf6 extends Twig_Template
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
        echo "\t\t\t<div class=\"city\">

\t\t\t\t<span class=\"reg\">Ваш регион:</span>

\t\t\t\t<select name=\"\" class=\"cityselector\" onchange=\"changeCity(this);\">
\t\t\t\t                    \t\t\t\t\t\t\t\t\t\t\t\t<option disabled=disabled >Россия</option>
\t\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"57\" ";
        // line 7
        if (((isset($context["city"]) ? $context["city"] : null) == 57)) {
            echo "selected=\"selected\"";
        }
        echo ">Астрахань</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"34\" ";
        // line 8
        if (((isset($context["city"]) ? $context["city"] : null) == 34)) {
            echo "selected=\"selected\"";
        }
        echo ">Барнаул</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"16\" ";
        // line 9
        if (((isset($context["city"]) ? $context["city"] : null) == 16)) {
            echo "selected=\"selected\"";
        }
        echo ">Владивосток</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"25\" ";
        // line 10
        if (((isset($context["city"]) ? $context["city"] : null) == 25)) {
            echo "selected=\"selected\"";
        }
        echo ">Владимир</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"22\" ";
        // line 11
        if (((isset($context["city"]) ? $context["city"] : null) == 22)) {
            echo "selected=\"selected\"";
        }
        echo ">Волгоград</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"28\" ";
        // line 12
        if (((isset($context["city"]) ? $context["city"] : null) == 28)) {
            echo "selected=\"selected\"";
        }
        echo ">Воронеж</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"3\" ";
        // line 13
        if (((isset($context["city"]) ? $context["city"] : null) == 3)) {
            echo "selected=\"selected\"";
        }
        echo ">Екатеринбург</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"43\" ";
        // line 14
        if (((isset($context["city"]) ? $context["city"] : null) == 43)) {
            echo "selected=\"selected\"";
        }
        echo ">Ижевск</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"32\" ";
        // line 15
        if (((isset($context["city"]) ? $context["city"] : null) == 32)) {
            echo "selected=\"selected\"";
        }
        echo ">Иркутск</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"8\" ";
        // line 16
        if (((isset($context["city"]) ? $context["city"] : null) == 8)) {
            echo "selected=\"selected\"";
        }
        echo ">Казань</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"9\" ";
        // line 17
        if (((isset($context["city"]) ? $context["city"] : null) == 9)) {
            echo "selected=\"selected\"";
        }
        echo ">Калининград</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"33\" ";
        // line 18
        if (((isset($context["city"]) ? $context["city"] : null) == 33)) {
            echo "selected=\"selected\"";
        }
        echo ">Кемерово</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"23\" ";
        // line 19
        if (((isset($context["city"]) ? $context["city"] : null) == 23)) {
            echo "selected=\"selected\"";
        }
        echo ">Киров</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"18\" ";
        // line 20
        if (((isset($context["city"]) ? $context["city"] : null) == 18)) {
            echo "selected=\"selected\"";
        }
        echo ">Краснодар</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"14\" ";
        // line 21
        if (((isset($context["city"]) ? $context["city"] : null) == 14)) {
            echo "selected=\"selected\"";
        }
        echo ">Красноярск</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"52\" ";
        // line 22
        if (((isset($context["city"]) ? $context["city"] : null) == 52)) {
            echo "selected=\"selected\"";
        }
        echo ">Липецк</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"1\" ";
        // line 23
        if (((isset($context["city"]) ? $context["city"] : null) == 1)) {
            echo "selected=\"selected\"";
        }
        echo ">Москва</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"4\" ";
        // line 24
        if (((isset($context["city"]) ? $context["city"] : null) == 4)) {
            echo "selected=\"selected\"";
        }
        echo ">Нижний Новгород</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"5\" ";
        // line 25
        if (((isset($context["city"]) ? $context["city"] : null) == 5)) {
            echo "selected=\"selected\"";
        }
        echo ">Новосибирск</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"26\" ";
        // line 26
        if (((isset($context["city"]) ? $context["city"] : null) == 26)) {
            echo "selected=\"selected\"";
        }
        echo ">Омск</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"11\" ";
        // line 27
        if (((isset($context["city"]) ? $context["city"] : null) == 11)) {
            echo "selected=\"selected\"";
        }
        echo ">Оренбург</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"37\" ";
        // line 28
        if (((isset($context["city"]) ? $context["city"] : null) == 37)) {
            echo "selected=\"selected\"";
        }
        echo ">Пенза</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"10\" ";
        // line 29
        if (((isset($context["city"]) ? $context["city"] : null) == 10)) {
            echo "selected=\"selected\"";
        }
        echo ">Пермь</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"20\" ";
        // line 30
        if (((isset($context["city"]) ? $context["city"] : null) == 20)) {
            echo "selected=\"selected\"";
        }
        echo ">Ростов-на-Дону</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"53\" ";
        // line 31
        if (((isset($context["city"]) ? $context["city"] : null) == 53)) {
            echo "selected=\"selected\"";
        }
        echo ">Рязань</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"7\" ";
        // line 32
        if (((isset($context["city"]) ? $context["city"] : null) == 7)) {
            echo "selected=\"selected\"";
        }
        echo ">Самара</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"2\" ";
        // line 33
        if (((isset($context["city"]) ? $context["city"] : null) == 2)) {
            echo "selected=\"selected\"";
        }
        echo ">Санкт-Петербург</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"24\" ";
        // line 34
        if (((isset($context["city"]) ? $context["city"] : null) == 24)) {
            echo "selected=\"selected\"";
        }
        echo ">Саратов</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"58\" ";
        // line 35
        if (((isset($context["city"]) ? $context["city"] : null) == 58)) {
            echo "selected=\"selected\"";
        }
        echo ">Смоленск</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"15\" ";
        // line 36
        if (((isset($context["city"]) ? $context["city"] : null) == 15)) {
            echo "selected=\"selected\"";
        }
        echo ">Ставрополь</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"44\" ";
        // line 37
        if (((isset($context["city"]) ? $context["city"] : null) == 44)) {
            echo "selected=\"selected\"";
        }
        echo ">Сыктывкар</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"17\" ";
        // line 38
        if (((isset($context["city"]) ? $context["city"] : null) == 17)) {
            echo "selected=\"selected\"";
        }
        echo ">Тверь</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"21\" ";
        // line 39
        if (((isset($context["city"]) ? $context["city"] : null) == 21)) {
            echo "selected=\"selected\"";
        }
        echo ">Тольятти</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"36\" ";
        // line 40
        if (((isset($context["city"]) ? $context["city"] : null) == 36)) {
            echo "selected=\"selected\"";
        }
        echo ">Томск</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"13\" ";
        // line 41
        if (((isset($context["city"]) ? $context["city"] : null) == 13)) {
            echo "selected=\"selected\"";
        }
        echo ">Тула</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"38\" ";
        // line 42
        if (((isset($context["city"]) ? $context["city"] : null) == 38)) {
            echo "selected=\"selected\"";
        }
        echo ">Тюмень</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"51\" ";
        // line 43
        if (((isset($context["city"]) ? $context["city"] : null) == 51)) {
            echo "selected=\"selected\"";
        }
        echo ">Ульяновск</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"12\" ";
        // line 44
        if (((isset($context["city"]) ? $context["city"] : null) == 12)) {
            echo "selected=\"selected\"";
        }
        echo ">Уфа</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"30\" ";
        // line 45
        if (((isset($context["city"]) ? $context["city"] : null) == 30)) {
            echo "selected=\"selected\"";
        }
        echo ">Хабаровск</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"19\" ";
        // line 46
        if (((isset($context["city"]) ? $context["city"] : null) == 19)) {
            echo "selected=\"selected\"";
        }
        echo ">Чебоксары</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"6\" ";
        // line 47
        if (((isset($context["city"]) ? $context["city"] : null) == 6)) {
            echo "selected=\"selected\"";
        }
        echo ">Челябинск</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"35\" ";
        // line 48
        if (((isset($context["city"]) ? $context["city"] : null) == 35)) {
            echo "selected=\"selected\"";
        }
        echo ">Ярославль</option>    
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option disabled=disabled >Украина</option>
\t\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"27\" ";
        // line 50
        if (((isset($context["city"]) ? $context["city"] : null) == 27)) {
            echo "selected=\"selected\"";
        }
        echo ">Киев</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"39\" ";
        // line 51
        if (((isset($context["city"]) ? $context["city"] : null) == 39)) {
            echo "selected=\"selected\"";
        }
        echo ">Одесса</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"31\" ";
        // line 52
        if (((isset($context["city"]) ? $context["city"] : null) == 31)) {
            echo "selected=\"selected\"";
        }
        echo ">Харьков</option>    
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option disabled=disabled >Беларусь</option>
\t\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"29\" ";
        // line 54
        if (((isset($context["city"]) ? $context["city"] : null) == 29)) {
            echo "selected=\"selected\"";
        }
        echo ">Минск</option>    
\t\t\t\t\t\t\t\t\t\t\t                        <option value=\"55\" ";
        // line 55
        if (((isset($context["city"]) ? $context["city"] : null) == 55)) {
            echo "selected=\"selected\"";
        }
        echo ">Могилев</option>    
\t\t\t\t\t\t\t\t\t</select>

\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "parts/menus/cities.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 55,  299 => 54,  292 => 52,  286 => 51,  280 => 50,  273 => 48,  267 => 47,  261 => 46,  255 => 45,  249 => 44,  243 => 43,  237 => 42,  231 => 41,  225 => 40,  219 => 39,  213 => 38,  207 => 37,  201 => 36,  195 => 35,  189 => 34,  183 => 33,  177 => 32,  171 => 31,  165 => 30,  159 => 29,  153 => 28,  147 => 27,  141 => 26,  135 => 25,  129 => 24,  123 => 23,  117 => 22,  111 => 21,  105 => 20,  99 => 19,  93 => 18,  87 => 17,  81 => 16,  75 => 15,  69 => 14,  63 => 13,  57 => 12,  51 => 11,  45 => 10,  39 => 9,  33 => 8,  27 => 7,  19 => 1,);
    }
}
