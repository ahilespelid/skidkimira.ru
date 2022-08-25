<?php

/* parts/menus/discounts5.html */
class __TwigTemplate_5147b0c99bd9840c8a3571fe49e4cf533842ab8e7586c467ff4d332598383bad extends Twig_Template
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
<li><a class=active href=\"/catalogue/discount/cat/5\">Красота и здоровье</a>
    <ul>
            
        <li ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 13)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/13\">Косметика, парфюмерия</a></li>
            
        <li ";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 14)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/14\">Аптеки</a></li>
            
        <li ";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 15)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/15\">Салоны красоты</a></li>
            
        <li ";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 16)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/16\">Фитнес-клубы</a></li>
            
        <li ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 17)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/17\">Медицинские клиники</a></li>
            
        <li ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 18)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/18\">СПА салоны и массаж</a></li>
            
        <li ";
        // line 23
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 19)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/19\">Оптика</a></li>
            
        <li ";
        // line 25
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 47)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/47\">Сауны</a></li>
        </ul>
</li>
<li><a  href=\"/catalogue/discount/cat/6\">Автомобили, сервис</a>
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
        return "parts/menus/discounts5.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  73 => 23,  66 => 21,  59 => 19,  52 => 17,  45 => 15,  38 => 13,  31 => 11,  19 => 1,);
    }
}
