<?php

/* /admin/discount/filters/discountFilter.twig */
class __TwigTemplate_782d478991d4f29da48a3cf3dc19b6d615775227ed080107ecb2626c469d913a extends Twig_Template
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
                                <label>Имя акции</label>
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
                                <label>Имя компании</label>
                                <input type=\"hidden\" name=\"filter\" value=\"true\">
                                ";
        // line 26
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "companyName", array())) {
            // line 27
            echo "                                    <input type=\"text\" class=\"form-control input-medium input-sm\" name=\"companyName\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "companyName", array()), "html", null, true);
            echo "\">
                                ";
        } else {
            // line 29
            echo "                                    <input type=\"text\" class=\"form-control input-medium input-sm\" name=\"companyName\" value=\"\">
                                ";
        }
        // line 31
        echo "                            </td>
                            <td style=\"border: none;\">
                                <label>Город</label>
                                <select class=\"form-control input-medium input-sm\" name=\"cityId\">
                                    ";
        // line 35
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "cityId", array())) {
            // line 36
            echo "                                        <option value=\"\"></option>
                                        ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 38
                echo "                                            ";
                if (($this->getAttribute($context["city"], "id", array()) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "cityId", array()))) {
                    // line 39
                    echo "                                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                } else {
                    // line 41
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                // line 43
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                                    ";
        } else {
            // line 45
            echo "                                        <option value=\"\"></option>
                                        ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 47
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
            // line 49
            echo "                                    ";
        }
        // line 50
        echo "                                </select>
                            </td>
                            <td style=\"border: none;\">
                                <label>Отрасль</label>
                                <select class=\"form-control input-medium input-sm\" name=\"speciality\">
                                    ";
        // line 55
        if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "speciality", array()) != "")) {
            // line 56
            echo "                                        <option value=\"\"></option>
                                        ";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["specialities"]) ? $context["specialities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["speciality"]) {
                // line 58
                echo "                                            ";
                if ((twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "value", array())) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "speciality", array()))) {
                    // line 59
                    echo "                                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "value", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                } else {
                    // line 61
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "value", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                // line 63
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['speciality'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                                    ";
        } else {
            // line 65
            echo "                                        <option selected value=\"\"></option>
                                        ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["specialities"]) ? $context["specialities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["speciality"]) {
                // line 67
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
            // line 69
            echo "                                    ";
        }
        // line 70
        echo "                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style=\"border: none;\">
                                <label>Категория</label>
                                <select class=\"form-control input-medium input-sm\" name=\"categoryId\">
                                    ";
        // line 77
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "categoryId", array())) {
            // line 78
            echo "                                        <option value=\"\"></option>
                                        ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 80
                echo "                                            ";
                if (($this->getAttribute($context["category"], "id", array()) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "categoryId", array()))) {
                    // line 81
                    echo "                                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                } else {
                    // line 83
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                // line 85
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                                    ";
        } else {
            // line 87
            echo "                                        <option selected value=\"\"></option>
                                        ";
            // line 88
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 89
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
            // line 91
            echo "                                    ";
        }
        // line 92
        echo "                                </select>
                            </td style=\"border: none;\">
                            <td style=\"border: none;\">
                                <label>Модератор</label>
                                <select class=\"form-control input-medium\" name=\"siteUserId\">
                                    ";
        // line 97
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "siteUserId", array())) {
            // line 98
            echo "                                        <option value=\"\"></option>
                                        ";
            // line 99
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["moderators"]) ? $context["moderators"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["moderator"]) {
                // line 100
                echo "                                            ";
                if (($this->getAttribute($context["moderator"], "id", array()) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "siteUserId", array()))) {
                    // line 101
                    echo "                                                <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["moderator"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["moderator"], "email", array()), "html", null, true);
                    echo "</option>
                                            ";
                } else {
                    // line 103
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["moderator"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["moderator"], "email", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                // line 105
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moderator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                                    ";
        } else {
            // line 107
            echo "                                        <option selected value=\"\"></option>
                                        ";
            // line 108
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["moderators"]) ? $context["moderators"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["moderator"]) {
                // line 109
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
            // line 111
            echo "                                    ";
        }
        // line 112
        echo "                                </select>
                            </td>
                            <td style=\"border: none;\">
                                <label>Модерация</label>
                                <select class=\"form-control input-medium\" name=\"moderated\">
                                        <option value=\"\"></option>
                                    ";
        // line 118
        if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "moderated", array()) == 1)) {
            // line 119
            echo "                                        <option selected value=\"1\">отмодерированные</option>
                                        <option value=\"0\">неотмодерированные</option>
                                    ";
        } elseif (($this->getAttribute(        // line 121
(isset($context["filter"]) ? $context["filter"] : null), "moderated", array()) == "")) {
            // line 122
            echo "                                        <option value=\"1\">отмодерированные</option>
                                        <option value=\"0\">неотмодерированные</option>         
                                    ";
        } else {
            // line 125
            echo "                                        <option value=\"1\">отмодерированные</option>
                                        <option selected value=\"0\">неотмодерированные</option>                                    
                           
                                    ";
        }
        // line 129
        echo "                                </select>
                            </td>
                            <td style=\"border: none;\">
                                <label>Публикация</label>
                                <select class=\"form-control input-medium\" name=\"accepted\">
                                    <option value=\"\"></option>
                                    ";
        // line 135
        if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "accepted", array()) == 1)) {
            // line 136
            echo "                                        <option selected value=\"1\">опубликованные</option>
                                        <option value=\"0\">неопубликованные</option>
                                    ";
        } elseif (($this->getAttribute(        // line 138
(isset($context["filter"]) ? $context["filter"] : null), "accepted", array()) == "")) {
            // line 139
            echo "                                        <option value=\"1\">опубликованные</option>
                                        <option value=\"0\">неопубликованные</option>         
                                    ";
        } else {
            // line 142
            echo "                                        <option value=\"1\">опубликованные</option>
                                        <option selected value=\"0\">неопубликованные</option>                                    
                           
                                    ";
        }
        // line 146
        echo "                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <div class=\"form-actions right\">
                
                <a href=\"/admin/discount\" class=\"btn btn-outline red\">Сбросить </a>
                <button id=\"filterBtn\" type=\"submit\" class=\"btn green\">Применить</button>
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/admin/discount/filters/discountFilter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 146,  376 => 142,  371 => 139,  369 => 138,  365 => 136,  363 => 135,  355 => 129,  349 => 125,  344 => 122,  342 => 121,  338 => 119,  336 => 118,  328 => 112,  325 => 111,  314 => 109,  310 => 108,  307 => 107,  304 => 106,  298 => 105,  290 => 103,  282 => 101,  279 => 100,  275 => 99,  272 => 98,  270 => 97,  263 => 92,  260 => 91,  249 => 89,  245 => 88,  242 => 87,  239 => 86,  233 => 85,  225 => 83,  217 => 81,  214 => 80,  210 => 79,  207 => 78,  205 => 77,  196 => 70,  193 => 69,  182 => 67,  178 => 66,  175 => 65,  172 => 64,  166 => 63,  158 => 61,  150 => 59,  147 => 58,  143 => 57,  140 => 56,  138 => 55,  131 => 50,  128 => 49,  117 => 47,  113 => 46,  110 => 45,  107 => 44,  101 => 43,  93 => 41,  85 => 39,  82 => 38,  78 => 37,  75 => 36,  73 => 35,  67 => 31,  63 => 29,  57 => 27,  55 => 26,  49 => 22,  45 => 20,  39 => 18,  37 => 17,  19 => 1,);
    }
}
