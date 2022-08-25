<?php

/* parts/menus/discounts6.html */
class __TwigTemplate_04c6d28ea70d3371bb3c92e03ab83c4ab5430ef25311ff0389d784aa87dfa3a4 extends Twig_Template
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
        echo "<ul>
<li><a  href=\"/catalogue/discount/cat/2\">Мода и стиль</a>
</li>
<li><a  href=\"/catalogue/discount/cat/3\">Товары для детей</a>
</li>
<li><a  href=\"/catalogue/discount/cat/4\">Спорт товары</a>
</li>
<li><a  href=\"/catalogue/discount/cat/5\">Красота и здоровье</a>
</li>
<li><a class=active href=\"/catalogue/discount/cat/6\">Автомобили, сервис</a>
    <ul>
            
        <li ";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 20)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/20\">Автосалоны</a></li>
            
        <li ";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 21)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/21\">Автосервисы</a></li>
            
        <li ";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 22)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/22\">Автомойки</a></li>
            
        <li ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 23)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/23\">Автозапчасти, шины/диски</a></li>
            
        <li ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 24)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/24\">Такси, прокат</a></li>
        </ul>
</li>
<li><a  href=\"/catalogue/discount/cat/7\">Техника, электроника</a>
</li>
<li><a  href=\"/catalogue/discount/cat/8\">Товары для дома</a>
</li>
<li><a  href=\"/catalogue/discount/cat/9\">Бытовые услуги</a>
</li>
<li><a  href=\"/catalogue/discount/cat/10\">Книги, канц-товары</a>
</li>
<li><a  href=\"/catalogue/discount/cat/11\">Подарки и цветы</a>
</li>
<li><a  href=\"/catalogue/discount/cat/12\">Путешествия</a>
</li>
<li><a  href=\"/catalogue/discount/cat/14\">Супермаркеты, ТЦ</a>
</li>
<li><a  href=\"/catalogue/discount/cat/15\">Прочее</a>
</li>
<li><a  href=\"/catalogue/discount/cat/16\">Домашние животные</a>
</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "parts/menus/discounts6.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 21,  54 => 19,  47 => 17,  40 => 15,  33 => 13,  19 => 1,);
    }
}
