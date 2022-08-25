<?php

/* parts/menus/discounts8.html */
class __TwigTemplate_3224a992ea4ca2ee963bf431d5f7166a591e52e1bdea4ce0de82921b5d781170 extends Twig_Template
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
<li><a class=active href=\"/catalogue/discount/cat/8\">Товары для дома</a>
    <ul>
            
        <li ";
        // line 17
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 30)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/30\">Мебель, интерьер</a></li>
            
        <li ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 31)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/31\">Ремонт, инструменты</a></li>
        </ul>
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
        return "parts/menus/discounts8.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 19,  37 => 17,  19 => 1,);
    }
}
