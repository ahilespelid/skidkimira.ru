<?php

/* /admin/company/filters/companyFilter.twig */
class __TwigTemplate_5826ca61ed850f4b37440dc55d4c9e8f6482322623e8a546d089ebdfd845dd9d extends Twig_Template
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
        echo "<div class=\"portlet box green\">
    <div class=\"portlet-title\">
        <div class=\"caption\">
            <i class=\"fa fa-filter\"></i>Фильтр
        </div>
    </div>
    <div class=\"portlet-body form\">
        <form name=\"filter\" role=\"form\" id=\"filter\" method=\"GET\">
            <div class=\"form-body\">
            <div class=\"table-scrollable\">
                <table class=\"table\">
                    <tbody
                        <tr>
                            <td style=\"border: none;\">
                                <label>Имя</label>
                                <input type=\"hidden\" name=\"filter\" value=\"true\">
                                ";
        // line 17
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "name", array())) {
            // line 18
            echo "                                    <input type=\"text\" class=\"form-control input-medium input-sm\" name=\"name\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "name", array()), "html", null, true);
            echo "\">
                                ";
        } else {
            // line 20
            echo "                                    <input type=\"text\" class=\"form-control input-medium input-sm\" name=\"name\" value=\"\">
                                ";
        }
        // line 22
        echo "                            </td>
                            <td style=\"border: none;\">
                                <label>Город</label>
                                <select class=\"form-control input-medium input-sm\" name=\"CityId\">
                                    ";
        // line 26
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "CityId", array())) {
            // line 27
            echo "                                        <option value=\"\"></option>
                                        ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 29
                echo "                                            ";
                if (($this->getAttribute($context["city"], "id", array()) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "CityId", array()))) {
                    // line 30
                    echo "                                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                } else {
                    // line 32
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                // line 34
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                                    ";
        } else {
            // line 36
            echo "                                        <option value=\"\"></option>
                                        ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 38
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                    ";
        }
        // line 41
        echo "                                </select>
                            </td>
                            <td style=\"border: none;\">
                                <label>Отрасль</label>
                                <select class=\"form-control input-medium input-sm\" name=\"speciality\">
                                    ";
        // line 46
        if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "speciality", array()) != "")) {
            // line 47
            echo "                                        <option value=\"\"></option>
                                        ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["specialities"]) ? $context["specialities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["speciality"]) {
                // line 49
                echo "                                            ";
                if ((twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "value", array())) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "speciality", array()))) {
                    // line 50
                    echo "                                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "value", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                } else {
                    // line 52
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "value", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                // line 54
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['speciality'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                                    ";
        } else {
            // line 56
            echo "                                        <option selected value=\"\"></option>
                                        ";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["specialities"]) ? $context["specialities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["speciality"]) {
                // line 58
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "value", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "name", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['speciality'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                                    ";
        }
        // line 61
        echo "                                </select>
                            </td>
                            <td style=\"border: none;\">
                                <label>Категория</label>
                                <select class=\"form-control input-medium input-sm\" name=\"categoryId\">
                                    ";
        // line 66
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "categoryId", array())) {
            // line 67
            echo "                                        <option value=\"\"></option>
                                        ";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 69
                echo "                                            ";
                if (($this->getAttribute($context["category"], "id", array()) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "categoryId", array()))) {
                    // line 70
                    echo "                                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                } else {
                    // line 72
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                // line 74
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                                    ";
        } else {
            // line 76
            echo "                                        <option selected value=\"\"></option>
                                        ";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 78
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                                    ";
        }
        // line 81
        echo "                                </select>
                            </td style=\"border: none;\">
                        </tr>
                        <tr>
                            <td style=\"border: none;\">
                                <label>Модератор</label>
                                <select class=\"form-control input-medium\" name=\"siteUserId\">
                                    ";
        // line 88
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "siteUserId", array())) {
            // line 89
            echo "                                        <option value=\"\"></option>
                                        ";
            // line 90
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["moderators"]) ? $context["moderators"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["moderator"]) {
                // line 91
                echo "                                            ";
                if (($this->getAttribute($context["moderator"], "id", array()) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "siteUserId", array()))) {
                    // line 92
                    echo "                                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["moderator"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["moderator"], "email", array()), "html", null, true);
                    echo "</option>
                                            ";
                } else {
                    // line 94
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["moderator"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["moderator"], "email", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                // line 96
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moderator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                                    ";
        } else {
            // line 98
            echo "                                        <option selected value=\"\"></option>
                                        ";
            // line 99
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["moderators"]) ? $context["moderators"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["moderator"]) {
                // line 100
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["moderator"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["moderator"], "email", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moderator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                                    ";
        }
        // line 103
        echo "                                </select>
                            </td>
                            <td style=\"border: none;\">
                                <label>Тип компании</label>
                                <select class=\"form-control input-medium\" name=\"companyType\">
                                    ";
        // line 108
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "companyType", array())) {
            // line 109
            echo "                                        <option value=\"\"></option>
                                        ";
            // line 110
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["companyTypes"]) ? $context["companyTypes"] : null));
            foreach ($context['_seq'] as $context["companyType"] => $context["value"]) {
                // line 111
                echo "                                            ";
                if (($context["companyType"] == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "companyType", array()))) {
                    // line 112
                    echo "                                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $context["companyType"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</option>
                                            ";
                } else {
                    // line 114
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $context["companyType"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</option>
                                            ";
                }
                // line 116
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['companyType'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                                    ";
        } else {
            // line 118
            echo "                                        <option selected value=\"\"></option>
                                        ";
            // line 119
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["companyTypes"]) ? $context["companyTypes"] : null));
            foreach ($context['_seq'] as $context["companyType"] => $context["value"]) {
                // line 120
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $context["companyType"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['companyType'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                                    ";
        }
        // line 123
        echo "                                </select>
                            </td>
                            <td style=\"border: none;\">
                                <label>Интернет магазин</label>
                                <select class=\"form-control input-medium\" name=\"hasWebShop\">
                                    ";
        // line 128
        if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "hasWebShop", array()) != "")) {
            // line 129
            echo "                                        <option value=\"\">не важно</option>
                                        ";
            // line 130
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hasWebShopValues"]) ? $context["hasWebShopValues"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["hasWebShop"]) {
                // line 131
                echo "                                            ";
                if ((twig_escape_filter($this->env, $this->getAttribute($context["hasWebShop"], "value", array())) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "hasWebShop", array()))) {
                    // line 132
                    echo "                                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hasWebShop"], "value", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hasWebShop"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                } else {
                    // line 134
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hasWebShop"], "value", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hasWebShop"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                // line 136
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hasWebShop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                                    ";
        } else {
            // line 138
            echo "                                        <option selected value=\"\">не важно</option>
                                        ";
            // line 139
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hasWebShopValues"]) ? $context["hasWebShopValues"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["hasWebShop"]) {
                // line 140
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hasWebShop"], "value", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hasWebShop"], "name", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hasWebShop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                                    ";
        }
        // line 143
        echo "                                </select>
                            </td>
                            <td style=\"border: none;\">
                                <label>Сток центр</label>
                                <select class=\"form-control input-medium\" name=\"hasStockCenter\">
                                    ";
        // line 148
        if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "hasStockCenter", array()) != "")) {
            // line 149
            echo "                                        <option value=\"\">не важно</option>
                                        ";
            // line 150
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hasStockCenterValues"]) ? $context["hasStockCenterValues"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["hasStockCenter"]) {
                // line 151
                echo "                                            ";
                if ((twig_escape_filter($this->env, $this->getAttribute($context["hasStockCenter"], "value", array())) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "hasStockCenter", array()))) {
                    // line 152
                    echo "                                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hasStockCenter"], "value", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hasStockCenter"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                } else {
                    // line 154
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hasStockCenter"], "value", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hasStockCenter"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                // line 156
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hasStockCenter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                                    ";
        } else {
            // line 158
            echo "                                        <option selected value=\"\">не важно</option>
                                        ";
            // line 159
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hasStockCenterValues"]) ? $context["hasStockCenterValues"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["hasStockCenter"]) {
                // line 160
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hasStockCenter"], "value", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hasStockCenter"], "name", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hasStockCenter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "                                    ";
        }
        // line 163
        echo "                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style=\"border: none;\">
                                <label>Модерация</label>
                                <select class=\"form-control input-medium\" name=\"moderated\">
                                        <option value=\"\"></option>
                                    ";
        // line 171
        if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "moderated", array()) == 1)) {
            // line 172
            echo "                                        <option selected value=\"1\">отмодерированные</option>
                                        <option value=\"0\">неотмодерированные</option>
                                    ";
        } elseif (($this->getAttribute(        // line 174
(isset($context["filter"]) ? $context["filter"] : null), "moderated", array()) == "")) {
            // line 175
            echo "                                        <option value=\"1\">отмодерированные</option>
                                        <option value=\"0\">неотмодерированные</option>         
                                    ";
        } else {
            // line 178
            echo "                                        <option value=\"1\">отмодерированные</option>
                                        <option selected value=\"0\">неотмодерированные</option>                                                               
                                    ";
        }
        // line 181
        echo "                                </select>
                            </td>
                            <td style=\"border: none;\">
                                <label>Публикация</label>
                                <select class=\"form-control input-medium\" name=\"accepted\">
                                    <option value=\"\"></option>
                                    ";
        // line 187
        if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "accepted", array()) == 1)) {
            // line 188
            echo "                                        <option selected value=\"1\">опубликованные</option>
                                        <option value=\"0\">неопубликованные</option>
                                    ";
        } elseif (($this->getAttribute(        // line 190
(isset($context["filter"]) ? $context["filter"] : null), "accepted", array()) == "")) {
            // line 191
            echo "                                        <option value=\"1\">опубликованные</option>
                                        <option value=\"0\">неопубликованные</option>         
                                    ";
        } else {
            // line 194
            echo "                                        <option value=\"1\">опубликованные</option>
                                        <option selected value=\"0\">неопубликованные</option>                                    
                           
                                    ";
        }
        // line 198
        echo "                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <div class=\"form-actions right\">
                
                <a href=\"/admin/company\" class=\"btn btn-outline red\">Сбросить </a>
                <button id=\"filterBtn\" type=\"submit\" class=\"btn green\">Применить</button>
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/admin/company/filters/companyFilter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 198,  554 => 194,  549 => 191,  547 => 190,  543 => 188,  541 => 187,  533 => 181,  528 => 178,  523 => 175,  521 => 174,  517 => 172,  515 => 171,  505 => 163,  502 => 162,  491 => 160,  487 => 159,  484 => 158,  481 => 157,  475 => 156,  467 => 154,  459 => 152,  456 => 151,  452 => 150,  449 => 149,  447 => 148,  440 => 143,  437 => 142,  426 => 140,  422 => 139,  419 => 138,  416 => 137,  410 => 136,  402 => 134,  394 => 132,  391 => 131,  387 => 130,  384 => 129,  382 => 128,  375 => 123,  372 => 122,  361 => 120,  357 => 119,  354 => 118,  351 => 117,  345 => 116,  337 => 114,  329 => 112,  326 => 111,  322 => 110,  319 => 109,  317 => 108,  310 => 103,  307 => 102,  296 => 100,  292 => 99,  289 => 98,  286 => 97,  280 => 96,  272 => 94,  264 => 92,  261 => 91,  257 => 90,  254 => 89,  252 => 88,  243 => 81,  240 => 80,  229 => 78,  225 => 77,  222 => 76,  219 => 75,  213 => 74,  205 => 72,  197 => 70,  194 => 69,  190 => 68,  187 => 67,  185 => 66,  178 => 61,  175 => 60,  164 => 58,  160 => 57,  157 => 56,  154 => 55,  148 => 54,  140 => 52,  132 => 50,  129 => 49,  125 => 48,  122 => 47,  120 => 46,  113 => 41,  110 => 40,  99 => 38,  95 => 37,  92 => 36,  89 => 35,  83 => 34,  75 => 32,  67 => 30,  64 => 29,  60 => 28,  57 => 27,  55 => 26,  49 => 22,  45 => 20,  39 => 18,  37 => 17,  19 => 1,);
    }
}
