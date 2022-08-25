<?php

/* parts/menus/discounts4.html */
class __TwigTemplate_beb167065458f79a0963ea23a2fecaf112b0732395a311c515f49f8f0576741c extends Twig_Template
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
<li><a class=active href=\"/catalogue/discount/cat/4\">Спорт товары</a>
    <ul>
            
        <li ";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 41)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/41\">Активный отдых</a></li>
            
        <li ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "subcat", array()), "id", array()) == 42)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/catalogue/discount/subcat/42\">Фитнес, тренажеры</a></li>
        </ul>
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
        return "parts/menus/discounts4.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 11,  29 => 9,  19 => 1,);
    }
}
