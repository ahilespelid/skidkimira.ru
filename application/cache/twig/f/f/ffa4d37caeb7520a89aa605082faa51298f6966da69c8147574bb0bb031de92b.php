<?php

/* admin/parts/sidebar.twig */
class __TwigTemplate_ffa4d37caeb7520a89aa605082faa51298f6966da69c8147574bb0bb031de92b extends Twig_Template
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
        echo "<div class=\"page-sidebar-wrapper\">
\t\t<!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
\t\t<!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
\t\t<div class=\"page-sidebar navbar-collapse collapse\">
\t\t\t<!-- BEGIN SIDEBAR MENU -->
\t\t\t<ul class=\"page-sidebar-menu\" data-auto-scroll=\"true\" data-slide-speed=\"200\">
\t\t\t\t<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below \"sidebar-toggler-wrapper\" LI element -->
\t\t\t\t<li class=\"sidebar-toggler-wrapper\">
\t\t\t\t\t<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
\t\t\t\t\t<div class=\"sidebar-toggler\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- END SIDEBAR TOGGLER BUTTON -->
\t\t\t\t</li>

\t\t\t\t<li class=\"start open\">
\t\t\t\t\t<a href=\"javascript:;\"><i class=\"icon-settings\"></i><span class=\"title\">Администрирование</span><span class=\"arrow open\"></span></a>
\t\t\t\t\t<ul class=\"sub-menu\" style=\"display: block;\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:;\"><span class=\"title\">Города и Категории</span><span class=\"arrow \"></span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/country\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Страны</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/city\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Города</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/category\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Категории</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/subCategory\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Подкатегории</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/shoppingCategory\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Категории ТЦ</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/goodsCategory\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Категории товаров</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/goodsSubCategory\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Подкатегории товаров</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/goodsType\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Типы товаров</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/goodsSubType\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Подтипы товаров</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/couponCategory\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Категории купонов</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/couponType\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Виды купонов</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/couponAdvCampaign\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Компании купонов</a>
\t\t\t\t\t\t\t\t\t</li>
                                    <li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/categoryCityDescription\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Описание категорий по городам</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/subCategoryCityDescription\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Описание подкатегорий по городам</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/companyCatalog\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Каталоги товаров</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/admin/user\">
\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Пользователи</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/admin/company\">
\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Компании</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/admin/discount\">
\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Акции</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/admin/goods\">
\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Товары</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/admin/advertising\">
\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Баннеры</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/admin/custompages\">
\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Доп. разделы</a>
\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/admin/moderstat\">
\t\t\t\t\t\t\t\t<i class=\"icon-action-redo\"></i>Статистика</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/admin/comments\"><i class=\"icon-bubble\"></i><span class=\"title\" id=\"comments\">Комментарии</span></a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<!-- END SIDEBAR MENU -->
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "admin/parts/sidebar.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
