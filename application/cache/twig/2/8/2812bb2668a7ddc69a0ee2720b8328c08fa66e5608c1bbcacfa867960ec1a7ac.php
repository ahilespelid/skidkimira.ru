<?php

/* parts/menus/brands.html */
class __TwigTemplate_2812bb2668a7ddc69a0ee2720b8328c08fa66e5608c1bbcacfa867960ec1a7ac extends Twig_Template
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
<li ";
        // line 2
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "id", array()) == (isset($context["clothes"]) ? $context["clothes"] : null))) {
            echo "class=\"active\"";
        }
        echo " ><a href=\"/catalogue/brands/cat/clothes\">Одежда</a></li>
<li ";
        // line 3
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "id", array()) == (isset($context["shoes"]) ? $context["shoes"] : null))) {
            echo "class=\"active\"";
        }
        echo " ><a href=\"/catalogue/brands/cat/shoes\">Обувь</a></li>
<li ";
        // line 4
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "id", array()) == (isset($context["accessories"]) ? $context["accessories"] : null))) {
            echo "class=\"active\"";
        }
        echo " ><a href=\"/catalogue/brands/cat/accessories\">Аксессуары</a></li>
<li ";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "id", array()) == (isset($context["sport"]) ? $context["sport"] : null))) {
            echo "class=\"active\"";
        }
        echo " ><a href=\"/catalogue/brands/cat/sport\">Спортинвентарь</a></li>
<li ";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "id", array()) == (isset($context["toiletry"]) ? $context["toiletry"] : null))) {
            echo "class=\"active\"";
        }
        echo " ><a href=\"/catalogue/brands/cat/toiletry\">Косметика, парфюмерия</a></li>
<li ";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "id", array()) == (isset($context["furniture"]) ? $context["furniture"] : null))) {
            echo "class=\"active\"";
        }
        echo " ><a href=\"/catalogue/brands/cat/furniture\">Мебель, интерьер</a></li>
<li ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "id", array()) == (isset($context["children"]) ? $context["children"] : null))) {
            echo "class=\"active\"";
        }
        echo " ><a href=\"/catalogue/brands/cat/children\">Для детей</a></li>
<li ";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "id", array()) == (isset($context["electro"]) ? $context["electro"] : null))) {
            echo "class=\"active\"";
        }
        echo " ><a href=\"/catalogue/brands/cat/electro\">Электроника</a></li>
<li ";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "id", array()) == (isset($context["auto"]) ? $context["auto"] : null))) {
            echo "class=\"active\"";
        }
        echo " ><a href=\"/catalogue/brands/cat/auto\">Авто</a></li>
<li ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "id", array()) == (isset($context["jewelry"]) ? $context["jewelry"] : null))) {
            echo "class=\"active\"";
        }
        echo " ><a href=\"/catalogue/brands/cat/jewelry\">Ювелирные изделия</a></li>
<li ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "id", array()) == (isset($context["other"]) ? $context["other"] : null))) {
            echo "class=\"active\"";
        }
        echo " ><a href=\"/catalogue/brands/cat/other\">Прочее</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "parts/menus/brands.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 12,  76 => 11,  70 => 10,  64 => 9,  58 => 8,  52 => 7,  46 => 6,  40 => 5,  34 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
