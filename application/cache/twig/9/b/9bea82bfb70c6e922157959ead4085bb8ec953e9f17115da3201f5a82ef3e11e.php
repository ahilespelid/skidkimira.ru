<?php

/* parts/menus/discounts2.html */
class __TwigTemplate_9bea82bfb70c6e922157959ead4085bb8ec953e9f17115da3201f5a82ef3e11e extends Twig_Template
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
<li><a class=active href=\"/catalogue/discount/cat/2\">Мода и стиль</a>
    <ul>
            
        <li ";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 5)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/5\">Одежда</a></li>
            
        <li ";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 6)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/6\">Обувь</a></li>
            
        <li ";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 7)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/7\">Аксессуары</a></li>
            
        <li ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 8)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/8\">Нижнее бельё</a></li>
            
        <li ";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 9)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/9\">Ювелирные изделия, украшения, часы</a></li>
        </ul>
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
        return "parts/menus/discounts2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  46 => 11,  39 => 9,  32 => 7,  25 => 5,  19 => 1,);
    }
}
