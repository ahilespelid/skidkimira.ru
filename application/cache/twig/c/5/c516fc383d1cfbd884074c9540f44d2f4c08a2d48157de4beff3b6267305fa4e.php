<?php

/* admin/discount/forms/companyDiscountEdit.twig */
class __TwigTemplate_c516fc383d1cfbd884074c9540f44d2f4c08a2d48157de4beff3b6267305fa4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/adminLayout.twig", "admin/discount/forms/companyDiscountEdit.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/adminLayout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "            <div class=\"row\">
            ";
        // line 4
        $this->loadTemplate("admin/parts/uploadImageModal.twig", "admin/discount/forms/companyDiscountEdit.twig", 4)->display($context);
        // line 5
        echo "\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"portlet box light-grey\">
\t\t\t\t\t\t<div class=\"portlet-title\">
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-globe\"></i>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"portlet-body form\">
                            <form id=\"table\" class=\"form-horizontal\" role=\"form\" method=\"POST\">
                                <div class=\"form-body\">
                                <input type=\"hidden\" class=\"form-control\" name=\"companyId\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["companyId"]) ? $context["companyId"] : null), "html", null, true);
        echo "\">
                                    ";
        // line 16
        if ( !(isset($context["new"]) ? $context["new"] : null)) {
            // line 17
            echo "                                        <script>var editingdiscount = true</script>
                                        <input id=\"discountId\" type=\"hidden\" class=\"form-control\" name=\"id\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "id", array()), "html", null, true);
            echo "\" readonly> 
                                    ";
        } else {
            // line 20
            echo "                                        <input type=\"hidden\" class=\"form-control\" name=\"addDate\" value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
            echo "\"> 
                                        <input type=\"hidden\" class=\"form-control\" name=\"addUserid\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["moderatorId"]) ? $context["moderatorId"] : null), "html", null, true);
            echo "\"> 
                                        <input type=\"hidden\" class=\"form-control\" name=\"moderatorId\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["moderatorId"]) ? $context["moderatorId"] : null), "html", null, true);
            echo "\"> 
                                        <input type=\"hidden\" class=\"form-control\" name=\"moderated\" value=\"1\">
                                        <input type=\"hidden\" class=\"form-control\" name=\"accepted\" value=\"0\">
                                    ";
        }
        // line 26
        echo "                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Название скидки <span class=\"required\">*</span></label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" data-required=\"1\" name=\"name\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "name", array()), "html", null, true);
        echo "\" required/> 
                                        </div>
                                    </div>
                                    ";
        // line 35
        echo "                                            <input type=\"hidden\" class=\"form-control\" name=\"description\"  value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "description", array()), "html", null, true);
        echo "\">
                                    ";
        // line 38
        echo "                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Полное описание скидки</label>
                                        <div class=\"col-md-9\">
                                            <textarea id=\"fullDescription\" class=\"ckeditor form-control\" rows=\"10\" name=\"fullDescription\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "fullDescription", array()), "html", null, true);
        echo "</textarea>
                                        </div>
                                    </div> 
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Размер скидки</label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" name=\"discount\"  value=\"";
        // line 47
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "discount", array())) ? ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "discount", array())) : (0)), "html", null, true);
        echo "\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Логотип</label>
                                        <div class=\"col-md-9\">
                                            ";
        // line 53
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array())) {
            // line 54
            echo "                                                <img id=\"discountLogo\" src=\"";
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "images/discount/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()), "html", null, true);
            echo "\">
                                            ";
        } else {
            // line 56
            echo "                                                <img id=\"discountLogo\" src=\"\">
                                            ";
        }
        // line 58
        echo "                                        </div>
                                        ";
        // line 59
        if ((isset($context["new"]) ? $context["new"] : null)) {
            // line 60
            echo "                                            <input id=\"discountLogoInput\" type=\"hidden\" class=\"form-control\" name=\"image\" value=\"\">
                                        ";
        }
        // line 62
        echo "                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Загрузить фото</label>
                                        <div class=\"col-md-9\">
                                            <a href=\"#uploadImage\" data-toggle=\"modal\" class=\"btn btn-outline green\" onClick=\"\$('#imageUploadType').val('discountLogo');\$('#imageDestinationId').val(";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "id", array()), "html", null, true);
        echo ");\"><i class=\"fa fa-upload\"></i> Загрузить </a>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Дата начала <span class=\"required\">*</span></label>
                                        <div class=\"col-md-9\">
                                            <div class=\"input-group input-medium date date-picker\" data-date-format=\"yyyy-mm-dd\">
                                                <input type=\"text\" class=\"form-control\" data-required=\"1\" name=\"startDate\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "startDate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "startDate", array()), twig_date_format_filter($this->env, "now", "Y-m-d"))) : (twig_date_format_filter($this->env, "now", "Y-m-d"))), "html", null, true);
        echo "\" required/>
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn default\" type=\"button\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Дата окончания <span class=\"required\">*</span></label>
                                        <div class=\"col-md-9\">
                                            <div class=\"input-group input-medium date date-picker\" data-date-format=\"yyyy-mm-dd\">
                                                <input type=\"text\" class=\"form-control\" data-required=\"1\" name=\"finishDate\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "finishDate", array()), "html", null, true);
        echo "\" required/>
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn default\" type=\"button\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "cityId", array()), "html", null, true);
        echo "Город <span class=\"required\">*</span></label>
                                        <div class=\"col-md-9\">
                                            <select class=\"form-control\" name=\"cityId\" data-required=\"1\" required>
                                                ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companyCities"]) ? $context["companyCities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["companyCity"]) {
            // line 100
            echo "                                                    ";
            if ((($this->getAttribute($context["companyCity"], "cityId", array()) == $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "cityId", array())) || (($this->getAttribute($context["companyCity"], "cityId", array()) == 1) && (( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "cityId", array()) || (null === $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "cityId", array()))) || ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "cityId", array()) == ""))))) {
                // line 101
                echo "                                                        <option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["companyCity"], "cityId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["companyCity"], "cityName", array()), "html", null, true);
                echo "</option>
                                                    ";
            } else {
                // line 103
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["companyCity"], "cityId", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["companyCity"], "cityName", array()), "html", null, true);
                echo "</option>
                                                    ";
            }
            // line 105
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['companyCity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Категория</label>
                                        <div class=\"col-md-9\">
                                            <select id=\"categorySelector\" class=\"form-control\" name=\"categoryId\" ";
        // line 112
        echo (((isset($context["new"]) ? $context["new"] : null)) ? ("") : ("disabled"));
        echo ">
                                                ";
        // line 113
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 114
            echo "                                                    ";
            if ((($this->getAttribute($context["category"], "id", array()) == $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "categoryId", array())) || ( !$this->getAttribute((isset($context["ecord"]) ? $context["ecord"] : null), "categoryId", array()) && ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "categoryId", array()) == $this->getAttribute($context["category"], "id", array()))))) {
                // line 115
                echo "                                                        <option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</option>
                                                    ";
            } else {
                // line 117
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</option>
                                                    ";
            }
            // line 119
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                                            </select>
                                        </div>
                                    </div> 
                                    <div class=\"form-group\" id=\"discountSubCategory\">
                                        <label class=\"col-md-3 control-label\">Подкатегории</label>
                                        <div class=\"col-md-9\">
                                            <div class=\"mt-checkbox-inline\" id=\"discountSubCategoryCheckboxList\">
                                                ";
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subCategories"]) ? $context["subCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
            // line 128
            echo "                                                    <label class=\"mt-checkbox\">
                                                        ";
            // line 129
            if ($this->getAttribute($context["subCategory"], "checked", array())) {
                // line 130
                echo "                                                            <input type=\"checkbox\" checked waschecked=\"1\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subCategory"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subCategory"], "name", array()), "html", null, true);
                echo "<span></span>
                                                        ";
            } else {
                // line 132
                echo "                                                            <input type=\"checkbox\" waschecked=\"0\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subCategory"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["subCategory"], "name", array()), "html", null, true);
                echo "<span></span>
                                                        ";
            }
            // line 134
            echo "                                                    </label>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Приоритет (от 0 до 100) <span class=\"required\">*</span></label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" data-required=\"1\" name=\"priority\"  value=\"";
        // line 142
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "priority", array())) ? ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "priority", array())) : (0)), "html", null, true);
        echo "\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">HTML Title </label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" name=\"htmlTitle\"  value=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "htmlTitle", array()), "html", null, true);
        echo "\">
                                        </div>
                                    </div> 
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">HTML Description </label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" name=\"htmlDescription\"  value=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "htmlDescription", array()), "html", null, true);
        echo "\">
                                        </div>
                                    </div> 
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">HTML Keywords </label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" name=\"htmlKeywords\"  value=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "htmlKeywords", array()), "html", null, true);
        echo "\">
                                        </div>
                                    </div> 
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">HTML Canonical link </label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" name=\"htmlCanonicalLink\"  value=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "htmlCanonicalLink", array()), "html", null, true);
        echo "\">
                                        </div>
                                    </div> 
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Ссылка с подробностями акции </label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" name=\"urlMore\"  value=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "urlMore", array()), "html", null, true);
        echo "\">
                                        </div>
                                    </div> 
                                    ";
        // line 175
        if ( !(isset($context["new"]) ? $context["new"] : null)) {
            // line 176
            echo "                                   ";
            // line 187
            echo "                                    ";
        }
        // line 188
        echo "                                </div>
                                <div class=\"form-actions\">
                                    <div class=\"row\">
                                        <div class=\"col-md-offset-3 col-md-9\">
                                        ";
        // line 192
        if ((($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "accepted", array()) == 0) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "accepted", array()) != ""))) {
            // line 193
            echo "                                            <button id=\"publishBtn\" type=\"button\" class=\"btn purple\" onclick=\"publishDiscount(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "id", array()), "html", null, true);
            echo ");\">Опубликовать</button>
                                        ";
        } elseif (($this->getAttribute(        // line 194
(isset($context["record"]) ? $context["record"] : null), "accepted", array()) == 1)) {
            // line 195
            echo "                                            <button id=\"unpublishBtn\" type=\"button\" class=\"btn red\" onclick=\"unpublishDiscount(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "id", array()), "html", null, true);
            echo ");\">Снять публикацию</button>                                            
                                        ";
        }
        // line 197
        echo "                                            <button id=\"saveBtn\" type=\"submit\" class=\"btn green\">Сохранить</button>
                                            <button type=\"button\" class=\"btn default\" onClick=\"window.opener.location.reload();window.close();\">Закрыть</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
";
    }

    public function getTemplateName()
    {
        return "admin/discount/forms/companyDiscountEdit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 197,  386 => 195,  384 => 194,  379 => 193,  377 => 192,  371 => 188,  368 => 187,  366 => 176,  364 => 175,  358 => 172,  349 => 166,  340 => 160,  331 => 154,  322 => 148,  313 => 142,  305 => 136,  298 => 134,  290 => 132,  282 => 130,  280 => 129,  277 => 128,  273 => 127,  264 => 120,  258 => 119,  250 => 117,  242 => 115,  239 => 114,  235 => 113,  231 => 112,  223 => 106,  217 => 105,  209 => 103,  201 => 101,  198 => 100,  194 => 99,  188 => 96,  175 => 86,  159 => 73,  149 => 66,  143 => 62,  139 => 60,  137 => 59,  134 => 58,  130 => 56,  122 => 54,  120 => 53,  111 => 47,  102 => 41,  97 => 38,  92 => 35,  86 => 29,  81 => 26,  74 => 22,  70 => 21,  65 => 20,  60 => 18,  57 => 17,  55 => 16,  51 => 15,  42 => 9,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
