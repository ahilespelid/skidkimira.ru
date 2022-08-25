<?php

/* parts/menu.twig */
class __TwigTemplate_271e55a9c6f3289e353d7834d679aab15a9c2a3412d37a7537f7d68f01286c03 extends Twig_Template
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
        $context["rusmonth"] = array("1" => "января", "2" => "февраля", "3" => "марта", "4" => "апреля", "5" => "мая", "6" => "июня", "7" => "июля", "8" => "августа", "9" => "сентября", "10" => "октября", "11" => "ноября", "12" => "декабря");
        // line 2
        echo "\t\t<aside class=\"side-left\">

\t\t\t";
        // line 4
        $this->loadTemplate("parts/menus/cities.html", "parts/menu.twig", 4)->display($context);
        // line 5
        echo "
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"/catalogue/discount\" ";
        // line 8
        if (((is_string($__internal_328e50048f24ccfffa20a638c55ab1f69f8c6322a9a175d603c5097a10c2c776 = uri_string()) && is_string($__internal_d43bacdf5b0e423621ac8b78c8c68d79d9c1ce914c4b2272fd2b64df3f7e6d6e = "catalogue/discount") && ('' === $__internal_d43bacdf5b0e423621ac8b78c8c68d79d9c1ce914c4b2272fd2b64df3f7e6d6e || 0 === strpos($__internal_328e50048f24ccfffa20a638c55ab1f69f8c6322a9a175d603c5097a10c2c776, $__internal_d43bacdf5b0e423621ac8b78c8c68d79d9c1ce914c4b2272fd2b64df3f7e6d6e))) || (is_string($__internal_b23d1dd75674d532601da783d4577a932908e6cb429861168caa6c21faae5a04 = uri_string()) && is_string($__internal_e1358815f91ffc37d6c749f6cb5de163e00cebb5063ba0a2dd1aeef0652b36f4 = "discount/") && ('' === $__internal_e1358815f91ffc37d6c749f6cb5de163e00cebb5063ba0a2dd1aeef0652b36f4 || 0 === strpos($__internal_b23d1dd75674d532601da783d4577a932908e6cb429861168caa6c21faae5a04, $__internal_e1358815f91ffc37d6c749f6cb5de163e00cebb5063ba0a2dd1aeef0652b36f4))))) {
            echo "class=\"active\"";
        }
        echo ">Акции и Скидки</a>
\t\t\t\t\t";
        // line 9
        if (((is_string($__internal_d694d23a1eca3ff69037703d780f6b2c460d3c6fe7ad1923105575bdde5307f9 = uri_string()) && is_string($__internal_c4377cd4307707826cf85b95045a3d8fd3284822700ae1751de3550f6d0ec527 = "catalogue/discount") && ('' === $__internal_c4377cd4307707826cf85b95045a3d8fd3284822700ae1751de3550f6d0ec527 || 0 === strpos($__internal_d694d23a1eca3ff69037703d780f6b2c460d3c6fe7ad1923105575bdde5307f9, $__internal_c4377cd4307707826cf85b95045a3d8fd3284822700ae1751de3550f6d0ec527))) || (is_string($__internal_7e2641cf150adb54a144988e27fd140dd84d99ba4a96748262c94569c7a1859e = uri_string()) && is_string($__internal_0c02a950681b61585f43fe5addf0531c37f49f2df9cb7ac4c536bfded22bc097 = "discount") && ('' === $__internal_0c02a950681b61585f43fe5addf0531c37f49f2df9cb7ac4c536bfded22bc097 || 0 === strpos($__internal_7e2641cf150adb54a144988e27fd140dd84d99ba4a96748262c94569c7a1859e, $__internal_0c02a950681b61585f43fe5addf0531c37f49f2df9cb7ac4c536bfded22bc097))))) {
            // line 10
            echo "\t\t\t\t\t\t";
            if ((((uri_string() == "catalogue/discount") || (is_string($__internal_6d7c7ed11c0c3bcacabf57ed1d31ac5e0acce670080ed387e3e55477aa3cdc7a = uri_string()) && is_string($__internal_4d72a65bc88098fd8a2f69416921233dfeda9a4d996596992db6e59f59dfc397 = "catalogue/discount/actual/") && ('' === $__internal_4d72a65bc88098fd8a2f69416921233dfeda9a4d996596992db6e59f59dfc397 || 0 === strpos($__internal_6d7c7ed11c0c3bcacabf57ed1d31ac5e0acce670080ed387e3e55477aa3cdc7a, $__internal_4d72a65bc88098fd8a2f69416921233dfeda9a4d996596992db6e59f59dfc397)))) || (is_string($__internal_09c2a79891194a99bd96883f7dee3af0ec54c008dc10b61ee1468174884bea05 = uri_string()) && is_string($__internal_9b5418c570dc57ff071c5699e2411aca73e2d05815b3c1311cb39aa446e4d95b = "discount") && ('' === $__internal_9b5418c570dc57ff071c5699e2411aca73e2d05815b3c1311cb39aa446e4d95b || 0 === strpos($__internal_09c2a79891194a99bd96883f7dee3af0ec54c008dc10b61ee1468174884bea05, $__internal_9b5418c570dc57ff071c5699e2411aca73e2d05815b3c1311cb39aa446e4d95b))))) {
                // line 11
                echo "\t\t\t\t\t\t";
                $this->loadTemplate("parts/menus/discounts.html", "parts/menu.twig", 11)->display($context);
                // line 12
                echo "\t\t\t\t\t\t";
            } elseif (((is_string($__internal_465e0cd7f96e54af5a175632dd14cf36f9ad7484cdfc0bf03dc31af6aedc38db = uri_string()) && is_string($__internal_7bda65ee0fa461d36eef9122d49669868b9f01ab5271167470693c1ae16e473e = "catalogue/discount/cat/") && ('' === $__internal_7bda65ee0fa461d36eef9122d49669868b9f01ab5271167470693c1ae16e473e || 0 === strpos($__internal_465e0cd7f96e54af5a175632dd14cf36f9ad7484cdfc0bf03dc31af6aedc38db, $__internal_7bda65ee0fa461d36eef9122d49669868b9f01ab5271167470693c1ae16e473e))) || (is_string($__internal_869d0785cf5c7f768b5e49e31b3521c3ce88c95dfdfc265fcd416575a9ccf77c = uri_string()) && is_string($__internal_6a526fa3625769df6300666e7025662ec39be33b709acad5d6a6cd4400ddc5d9 = "catalogue/discount/subcat/") && ('' === $__internal_6a526fa3625769df6300666e7025662ec39be33b709acad5d6a6cd4400ddc5d9 || 0 === strpos($__internal_869d0785cf5c7f768b5e49e31b3521c3ce88c95dfdfc265fcd416575a9ccf77c, $__internal_6a526fa3625769df6300666e7025662ec39be33b709acad5d6a6cd4400ddc5d9))))) {
                // line 13
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate((("parts/menus/discounts" . $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cat", array()), "id", array())) . ".html"), "parts/menu.twig", 13)->display($context);
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"/catalogue/company\" ";
        // line 17
        if ((((uri_string() == "catalogue/company") || (is_string($__internal_3dfb47553032a71daac82960e968de4640a63a878173bda8b7c45142fa7990b6 = uri_string()) && is_string($__internal_32479ed3aace944ad67f10ec73c83ea4e68b4edbb6b8e7b7008a03274b08f167 = "catalogue/company/") && ('' === $__internal_32479ed3aace944ad67f10ec73c83ea4e68b4edbb6b8e7b7008a03274b08f167 || 0 === strpos($__internal_3dfb47553032a71daac82960e968de4640a63a878173bda8b7c45142fa7990b6, $__internal_32479ed3aace944ad67f10ec73c83ea4e68b4edbb6b8e7b7008a03274b08f167)))) || (is_string($__internal_3dbc764b00d2624b21ddf8891e8dbef8f313382efa72b870fdc446b0ccacc9ba = uri_string()) && is_string($__internal_0b28f56aab1b842763e466f520764188742e0f5ec44f86fcdbb41c1afb323042 = "company") && ('' === $__internal_0b28f56aab1b842763e466f520764188742e0f5ec44f86fcdbb41c1afb323042 || 0 === strpos($__internal_3dbc764b00d2624b21ddf8891e8dbef8f313382efa72b870fdc446b0ccacc9ba, $__internal_0b28f56aab1b842763e466f520764188742e0f5ec44f86fcdbb41c1afb323042))))) {
            echo "class=\"active\"";
        }
        echo ">Магазины</a>
\t\t\t\t\t";
        // line 18
        if ((((uri_string() == "catalogue/company") || (is_string($__internal_808592345f80e3ba10b8067361c54be3b441641148dd7614bb8797aa15985f9b = uri_string()) && is_string($__internal_ebf72da48087fe89421304fa42fe10a3dc904216983d2f125253dcf8f14e4d64 = "catalogue/company/") && ('' === $__internal_ebf72da48087fe89421304fa42fe10a3dc904216983d2f125253dcf8f14e4d64 || 0 === strpos($__internal_808592345f80e3ba10b8067361c54be3b441641148dd7614bb8797aa15985f9b, $__internal_ebf72da48087fe89421304fa42fe10a3dc904216983d2f125253dcf8f14e4d64)))) || (is_string($__internal_77a5ce301997c6e0e3638cd361708778d73ae277d9450e2017d35d5936eeb432 = uri_string()) && is_string($__internal_05c8cbe00af3a5a91a92769f5180961f21b9b04105c527b7b789bcd359f6f2a5 = "company") && ('' === $__internal_05c8cbe00af3a5a91a92769f5180961f21b9b04105c527b7b789bcd359f6f2a5 || 0 === strpos($__internal_77a5ce301997c6e0e3638cd361708778d73ae277d9450e2017d35d5936eeb432, $__internal_05c8cbe00af3a5a91a92769f5180961f21b9b04105c527b7b789bcd359f6f2a5))))) {
            // line 19
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("parts/menus/companies.html", "parts/menu.twig", 19)->display($context);
            // line 20
            echo "\t\t\t\t\t";
        }
        echo "\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"/catalogue/brands\" ";
        // line 22
        if (((is_string($__internal_a81f785ffb7f9d5f68dcf29a8aa08966e8a90f3646bd18867e9f8fb1d04f9344 = uri_string()) && is_string($__internal_534a2646f49693d1e94b4b19297f94e6a0c43654fd9142696ef7d6bdb187fb44 = "catalogue/brands") && ('' === $__internal_534a2646f49693d1e94b4b19297f94e6a0c43654fd9142696ef7d6bdb187fb44 || 0 === strpos($__internal_a81f785ffb7f9d5f68dcf29a8aa08966e8a90f3646bd18867e9f8fb1d04f9344, $__internal_534a2646f49693d1e94b4b19297f94e6a0c43654fd9142696ef7d6bdb187fb44))) || (is_string($__internal_624c302b32e2ffe40e1893325023120c7e3e76670507a6eba34f518ca5cbb51d = uri_string()) && is_string($__internal_633166057376e945c02380ec5859f45581fb5337431d6cf6edd27f6bfa8e0417 = "brand/") && ('' === $__internal_633166057376e945c02380ec5859f45581fb5337431d6cf6edd27f6bfa8e0417 || 0 === strpos($__internal_624c302b32e2ffe40e1893325023120c7e3e76670507a6eba34f518ca5cbb51d, $__internal_633166057376e945c02380ec5859f45581fb5337431d6cf6edd27f6bfa8e0417))))) {
            echo "class=\"active\"";
        }
        echo ">Бренды</a>
\t\t\t\t\t";
        // line 23
        if (((is_string($__internal_35bfb59a25af722f0efd108316486bbc848d744682ea49d3589f93c2d7b062a5 = uri_string()) && is_string($__internal_c0f7a0bee2c5dae2d100f7676dd9332c8111d1cedfe2498bc0c15a9f8e3e82a1 = "catalogue/brands") && ('' === $__internal_c0f7a0bee2c5dae2d100f7676dd9332c8111d1cedfe2498bc0c15a9f8e3e82a1 || 0 === strpos($__internal_35bfb59a25af722f0efd108316486bbc848d744682ea49d3589f93c2d7b062a5, $__internal_c0f7a0bee2c5dae2d100f7676dd9332c8111d1cedfe2498bc0c15a9f8e3e82a1))) || (is_string($__internal_73f5f78d1532de69376ea999d44094e22442d16946febe1362b26fbeaa5dabf9 = uri_string()) && is_string($__internal_594f374808a52c79a000875d177069a9c73c0690db00aebd473a1f1631b6c83e = "brand/") && ('' === $__internal_594f374808a52c79a000875d177069a9c73c0690db00aebd473a1f1631b6c83e || 0 === strpos($__internal_73f5f78d1532de69376ea999d44094e22442d16946febe1362b26fbeaa5dabf9, $__internal_594f374808a52c79a000875d177069a9c73c0690db00aebd473a1f1631b6c83e))))) {
            // line 24
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("parts/menus/brands.html", "parts/menu.twig", 24)->display($context);
            echo "\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"/catalogue/tradecenters\" ";
        // line 27
        if (((is_string($__internal_fb2ad3f0e343cee13c7bf1063b3210a05a579f8f768862208c6ac6eb35bd71c2 = uri_string()) && is_string($__internal_4447e4c515b0a1903dc269799502fd2a74f5a6b4eab3c918ef370c56b51f18c5 = "catalogue/tradecenters") && ('' === $__internal_4447e4c515b0a1903dc269799502fd2a74f5a6b4eab3c918ef370c56b51f18c5 || 0 === strpos($__internal_fb2ad3f0e343cee13c7bf1063b3210a05a579f8f768862208c6ac6eb35bd71c2, $__internal_4447e4c515b0a1903dc269799502fd2a74f5a6b4eab3c918ef370c56b51f18c5))) || (is_string($__internal_89fe67ae68c5d2f3af7eafda5e019b194ec98f2d49bb8a8f59b9fd726dd56dce = uri_string()) && is_string($__internal_3af055b5169c855d2b6f52700adbb68d52401c84b262a32910675880cccbde9a = "tcbrand/") && ('' === $__internal_3af055b5169c855d2b6f52700adbb68d52401c84b262a32910675880cccbde9a || 0 === strpos($__internal_89fe67ae68c5d2f3af7eafda5e019b194ec98f2d49bb8a8f59b9fd726dd56dce, $__internal_3af055b5169c855d2b6f52700adbb68d52401c84b262a32910675880cccbde9a))))) {
            echo "class=\"active\"";
        }
        echo ">Торговые центры</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"/catalogue/stockcenters\" ";
        // line 29
        if ((is_string($__internal_2ae83733b9c11aef74368a823ae054a9bb5826366982b987dfbad64709a96e7a = uri_string()) && is_string($__internal_479271b96058584486e6ed727b30df0b207bf339ffa7c23eb6210668e5d2ac1a = "catalogue/stockcenters") && ('' === $__internal_479271b96058584486e6ed727b30df0b207bf339ffa7c23eb6210668e5d2ac1a || 0 === strpos($__internal_2ae83733b9c11aef74368a823ae054a9bb5826366982b987dfbad64709a96e7a, $__internal_479271b96058584486e6ed727b30df0b207bf339ffa7c23eb6210668e5d2ac1a)))) {
            echo "class=\"active\"";
        }
        echo ">Дисконт и Сток-Центры </a></li>
\t\t\t\t\t<li><a href=\"/catalogue/webshops\" ";
        // line 30
        if ((is_string($__internal_81fd8654a945dee9614906ab8b052909c5ec938101d717f423a3a86539558300 = uri_string()) && is_string($__internal_c0270ee9be38beed704a0298fe051ecb4b3d76bca0c801370c3c028470804819 = "catalogue/webshops") && ('' === $__internal_c0270ee9be38beed704a0298fe051ecb4b3d76bca0c801370c3c028470804819 || 0 === strpos($__internal_81fd8654a945dee9614906ab8b052909c5ec938101d717f423a3a86539558300, $__internal_c0270ee9be38beed704a0298fe051ecb4b3d76bca0c801370c3c028470804819)))) {
            echo "class=\"active\"";
        }
        echo ">Интернет-магазины</a>
\t\t\t\t\t\t";
        // line 31
        if ((is_string($__internal_fec44fde4c5a583eddb76a8e003d53fab3588528ff6f096495ea4e35a7bdcdba = uri_string()) && is_string($__internal_c45886e2550a3410ae9b91df0176e86fc722e3344c1c95f06af2b3d210d1176a = "catalogue/webshops") && ('' === $__internal_c45886e2550a3410ae9b91df0176e86fc722e3344c1c95f06af2b3d210d1176a || 0 === strpos($__internal_fec44fde4c5a583eddb76a8e003d53fab3588528ff6f096495ea4e35a7bdcdba, $__internal_c45886e2550a3410ae9b91df0176e86fc722e3344c1c95f06af2b3d210d1176a)))) {
            // line 32
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("parts/menus/webshops.html", "parts/menu.twig", 32)->display($context);
            // line 33
            echo "\t\t\t\t\t\t";
        }
        echo "\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<noindex>
\t\t\t\t";
        // line 37
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "left_innermenu", array());
        echo "
\t\t\t\t</noindex>\t\t\t\t
\t\t\t</div>

\t\t\t<div class=\"reclama-side-left\">
\t\t\t\t<noindex>
\t\t\t\t";
        // line 43
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "left_undermenu", array());
        echo "
\t\t\t\t</noindex>
\t\t\t</div>

\t\t\t\t<div class=\"last-action\">

\t\t\t\t\t<h3>Последние акции</h3>
\t\t\t\t\t";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastdiscounts"]) ? $context["lastdiscounts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
            // line 51
            echo "\t\t\t\t\t
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<a href=\"/discount/";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "id", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "images/discount/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "image", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", array()), "html", null, true);
            echo "\"/></a><br/>
\t\t\t\t\t\t\t<span>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "startDate", array()), "j"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rusmonth"]) ? $context["rusmonth"] : null), twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "startDate", array()), "n"), array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "finishDate", array()), "j"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rusmonth"]) ? $context["rusmonth"] : null), twig_date_format_filter($this->env, $this->getAttribute($context["discount"], "finishDate", array()), "n"), array(), "array"), "html", null, true);
            echo " </span>

\t\t\t\t\t\t\t<p><a href=\"/discount/";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", array()), "html", null, true);
            echo "</a></p>

\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t</div>
\t\t</aside>";
    }

    public function getTemplateName()
    {
        return "parts/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 60,  175 => 56,  164 => 54,  154 => 53,  150 => 51,  146 => 50,  136 => 43,  127 => 37,  119 => 33,  116 => 32,  114 => 31,  108 => 30,  102 => 29,  95 => 27,  92 => 26,  86 => 24,  84 => 23,  78 => 22,  72 => 20,  69 => 19,  67 => 18,  61 => 17,  58 => 16,  55 => 15,  49 => 13,  46 => 12,  43 => 11,  40 => 10,  38 => 9,  32 => 8,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
