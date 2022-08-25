<?php

/* admin/company/tables/shoppingCenterBranchoffice.twig */
class __TwigTemplate_576f51b5948523028025cf30c251bd28d25b811f1e14ad84a27f24c125e8eb3e extends Twig_Template
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
        echo "<label class=\"col-md-3 control-label\">Адреса ТЦ</label>
<div class=\"col-md-9\">
    <div class=\"portlet box light-grey\">
        <div class=\"portlet-title\">
            <div class=\"caption\">
                <i class=\"fa fa-globe\"></i>Адреса ТЦ
            </div>
        </div>
        <div class=\"portlet-body\">
            <table class=\"table table-striped table-bordered table-hover datatable\" id=\"shoppingCenterBranchofficeTable\">
            <thead>
                <tr>
                    <th></th>
                    <th>Название</th>
                    <th>Адрес</th>
                    <th>Категория</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shoppingCenterBranchoffices"]) ? $context["shoppingCenterBranchoffices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 21
            echo "                <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\">
                    <td>
                        <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                            ";
            // line 24
            if ($this->getAttribute($context["data"], "checked", array())) {
                // line 25
                echo "                                <input type=\"checkbox\" class=\"checkboxes\" checked waschecked=\"1\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "branchofficeId", array()), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 27
                echo "                                <input type=\"checkbox\" class=\"checkboxes\" waschecked=\"0\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "branchofficeId", array()), "html", null, true);
                echo "\">
                            ";
            }
            // line 29
            echo "                            <span></span>
                        </label></td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "address", array()), "html", null, true);
            echo "</td>
                    <td>
                        <select class=\"form-control\" id=\"ShoppingCategoryId";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "branchofficeId", array()), "html", null, true);
            echo "\">
                            ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["shoppingCategories"]) ? $context["shoppingCategories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["shoppingCategory"]) {
                // line 36
                echo "                                ";
                if (($this->getAttribute($context["shoppingCategory"], "id", array()) == $this->getAttribute($context["data"], "ShoppingCategoryId", array()))) {
                    // line 37
                    echo "                                    <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["shoppingCategory"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["shoppingCategory"], "name", array()), "html", null, true);
                    echo "</option>
                                ";
                } else {
                    // line 39
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["shoppingCategory"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["shoppingCategory"], "name", array()), "html", null, true);
                    echo "</option>
                                ";
                }
                // line 41
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shoppingCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                        </select>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </tbody>             
            </table>
            <br>
            <button id=\"saveCompanyShoppingCenter\" type=\"button\" class=\"btn green\" onClick=\"saveCompanyShoppingCenterList();return false;\">Сохранить список ТЦ</button>  
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/company/tables/shoppingCenterBranchoffice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 46,  111 => 42,  105 => 41,  97 => 39,  89 => 37,  86 => 36,  82 => 35,  78 => 34,  73 => 32,  69 => 31,  65 => 29,  59 => 27,  53 => 25,  51 => 24,  44 => 21,  40 => 20,  19 => 1,);
    }
}
