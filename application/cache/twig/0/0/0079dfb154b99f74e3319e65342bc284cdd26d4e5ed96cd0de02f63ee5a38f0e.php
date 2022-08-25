<?php

/* parts/menus/discounts9.html */
class __TwigTemplate_0079dfb154b99f74e3319e65342bc284cdd26d4e5ed96cd0de02f63ee5a38f0e extends Twig_Template
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
<li><a  href=\"/catalogue/discount/cat/6\">Автомобили, сервис</a>
</li>
<li><a  href=\"/catalogue/discount/cat/7\">Техника, электроника</a>
</li>
<li><a  href=\"/catalogue/discount/cat/8\">Товары для дома</a>
</li>
<li><a class=active href=\"/catalogue/discount/cat/9\">Бытовые услуги</a>
    <ul>
            
        <li ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 32)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/32\">Химчистки и прачечные</a></li>
            
        <li ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 33)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/33\">Ателье, мастерские</a></li>
            
        <li ";
        // line 23
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 34)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/34\">Ремонт бытовой техники</a></li>
            
        <li ";
        // line 25
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 35)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/35\">Озеленение, клининг</a></li>
            
        <li ";
        // line 27
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 222)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/222\">Клининговые услуги</a></li>
        </ul>
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
        return "parts/menus/discounts9.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  60 => 25,  53 => 23,  46 => 21,  39 => 19,  19 => 1,);
    }
}
