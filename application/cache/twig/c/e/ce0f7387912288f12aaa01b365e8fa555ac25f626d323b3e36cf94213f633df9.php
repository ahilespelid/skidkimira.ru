<?php

/* parts/menus/discounts7.html */
class __TwigTemplate_ce0f7387912288f12aaa01b365e8fa555ac25f626d323b3e36cf94213f633df9 extends Twig_Template
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
<li><a class=active href=\"/catalogue/discount/cat/7\">Техника, электроника</a>
    <ul>
            
        <li ";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 25)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/25\">Бытовая техника</a></li>
            
        <li ";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 26)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/26\">Аудио, видео, фото</a></li>
            
        <li ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 27)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/27\">Компьютеры, оргтехника</a></li>
            
        <li ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 28)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/28\">Телефоны, связь, интернет</a></li>
            
        <li ";
        // line 23
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 29)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/29\">Ремонт оргтехники</a></li>
        </ul>
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
        return "parts/menus/discounts7.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  56 => 21,  49 => 19,  42 => 17,  35 => 15,  19 => 1,);
    }
}
