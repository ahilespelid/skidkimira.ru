<?php

/* admin/company/forms/companyEdit.twig */
class __TwigTemplate_9900474d5d62fe1447ff8a4f2ad21a82fc1487ee02c2aa7b42b6846aafd90b54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/adminLayout.twig", "admin/company/forms/companyEdit.twig", 1);
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
        echo "<div class=\"row\">
";
        // line 4
        $this->loadTemplate("admin/parts/removeModal.twig", "admin/company/forms/companyEdit.twig", 4)->display($context);
        // line 5
        $this->loadTemplate("admin/parts/uploadImageModal.twig", "admin/company/forms/companyEdit.twig", 5)->display($context);
        // line 6
        echo "    ";
        if ( !(isset($context["new"]) ? $context["new"] : null)) {
            // line 7
            echo "    <div id=\"companyBranchofficeDiv\"></div>
    <div id=\"companyDiscountDiv\"></div>
    <div class=\"col-md-12\">
        <div class=\"portlet box light-grey\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"fa fa-globe\"></i>Описание 
                </div>
            </div>
            <div class=\"portlet-body form\">
                <form id=\"companyDescription\" class=\"form-horizontal\" role=\"form\" method=\"POST\" onsubmit=\"saveCompanyDescription();return false;\">
                    <div class=\"form-body\">
                            <input type=\"hidden\" class=\"form-control\" name=\"CompanyId\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["companyId"]) ? $context["companyId"] : null), "html", null, true);
            echo "\" id=\"companyId\"> 
                            <input type=\"hidden\" class=\"form-control\" name=\"moderated\" value=\"1\">                            
                            <input type=\"hidden\" class=\"form-control\" name=\"accepted\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "accepted", array()), "html", null, true);
            echo "\">
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Город</label>
                            <div class=\"col-md-9\">
                                <select class=\"form-control\" name=\"CityId\" id=\"companyCitySelector\">
                                    ";
            // line 26
            $context["cityselected"] = false;
            // line 27
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 28
                echo "                                    
                                        ";
                // line 29
                if (((($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "cityId", array()) && ($this->getAttribute($context["city"], "id", array()) == $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "cityId", array()))) || (twig_in_filter("есть описание", $this->getAttribute($context["city"], "name", array())) && ((isset($context["cityselected"]) ? $context["cityselected"] : null) == false))) || ($this->getAttribute($context["city"], "id", array()) == 1))) {
                    // line 30
                    echo "                                            ";
                    $context["cityselected"] = true;
                    // line 31
                    echo "                                            <option selected value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", array()), "html", null, true);
                    echo "</option>
                                        ";
                } else {
                    // line 33
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", array()), "html", null, true);
                    echo "</option>
                                        ";
                }
                // line 35
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                                </select>
                            </div>
                        </div>
                        <script>
                        var companyId = '";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["companyId"]) ? $context["companyId"] : null), "html", null, true);
            echo "';
                        </script>
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\"><a href=\"#\" id=\"plaindesclink\" data-cityid=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "cityId", array()), "html", null, true);
            echo "\" onclick=\"javascript:window.open('/admin/companyCityDescriptionplain/";
            echo twig_escape_filter($this->env, (isset($context["companyId"]) ? $context["companyId"] : null), "html", null, true);
            echo "/'+this.dataset.cityid, '', 'height=300, width=700, top=300, left=300, scrollbars=1');return false;\">Описание</a></label>
                            <div class=\"col-md-9\">
                                <textarea id=\"cityDescriptionHTML\" class=\"ckeditor form-control\" rows=\"10\" name=\"description\"></textarea>
                            </div>
                        </div> 
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Торговые центры</label>
                            <div class=\"col-md-9\">
                                <select class=\"form-control\" id=\"shoppingCenterSelector\" >
                                </select>
                             </div>
                        </div>
                        <div id=\"shoppingCenterBranchofficeDiv\" class=\"form-group\">
                            ";
            // line 56
            $this->loadTemplate("admin/company/tables/shoppingCenterBranchoffice.twig", "admin/company/forms/companyEdit.twig", 56)->display($context);
            echo " 
                        </div>
                    </div>
                    <div class=\"form-actions\">
                        <div class=\"row\">
                            <div class=\"col-md-offset-3 col-md-9\">
                                <button id=\"saveCityDescriptionBtn\" type=\"submit\" class=\"btn green\">Сохранить</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
        }
        // line 71
        echo "    <div class=\"col-md-12\">
        <div class=\"portlet box light-grey\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"fa fa-globe\"></i>";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"portlet-body form\">
                <form id=\"table\" class=\"form-horizontal\" role=\"form\" method=\"POST\" >
                    <div class=\"form-body\">
                        ";
        // line 81
        if ( !(isset($context["new"]) ? $context["new"] : null)) {
            // line 82
            echo "                            <input type=\"hidden\" class=\"form-control\" name=\"CompanyId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "id", array()), "html", null, true);
            echo "\" id=\"companyId\"> 
                        ";
        } else {
            // line 84
            echo "                            <input type=\"hidden\" class=\"form-control\" name=\"siteUserId\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["moderatorId"]) ? $context["moderatorId"] : null), "html", null, true);
            echo "\"> 
                            <input type=\"hidden\" class=\"form-control\" name=\"moderatorId\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["moderatorId"]) ? $context["moderatorId"] : null), "html", null, true);
            echo "\"> 
                            <input type=\"hidden\" class=\"form-control\" name=\"moderated\" value=\"0\">
                            <input type=\"hidden\" class=\"form-control\" name=\"accepted\" value=\"0\">
                        ";
        }
        // line 89
        echo "                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Название компании <span class=\"required\">*</span></label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" class=\"form-control\" data-required=\"1\" name=\"name\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "name", array()), "html", null, true);
        echo "\"> 
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Адрес в строке заголовка</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" class=\"form-control\" name=\"url\"  value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "url", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Адрес сайта</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" class=\"form-control\" name=\"siteAddress\"  value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "siteAddress", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-offset-3 col-md-9\">
                                <div class=\"checkbox\">
                                    <label>
                                    ";
        // line 111
        if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "hasWebShop", array()) == 1)) {
            // line 112
            echo "                                        <input id=\"hasWebShop\" type=\"checkbox\" name=\"hasWebShop\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "hasWebShop", array()), "html", null, true);
            echo "\" checked><span></span> Наличие интернет магазина </label>
                                    ";
        } else {
            // line 114
            echo "                                        <input id=\"hasWebShop\" type=\"checkbox\" name=\"hasWebShop\" value=\"0\"><span></span> Наличие интернет магазина </label>
                                    ";
        }
        // line 116
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-offset-3 col-md-9\">
                                <div class=\"checkbox\">
                                    <label>
                                    ";
        // line 123
        if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "hasStockCenter", array()) == 1)) {
            // line 124
            echo "                                        <input id=\"hasStockCenter\" type=\"checkbox\" name=\"hasStockCenter\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "hasStockCenter", array()), "html", null, true);
            echo "\" checked><span></span> Наличие сток центра </label>
                                    ";
        } else {
            // line 126
            echo "                                        <input id=\"hasStockCenter\" type=\"checkbox\" name=\"hasStockCenter\" value=\"0\"><span></span> Наличие сток центра </label>
                                    ";
        }
        // line 128
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Короткое описание компании </label>
                            <div class=\"col-md-9\">
                                <textarea class=\"form-control\" rows=\"3\" name=\"description\">";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "description", array()), "html", null, true);
        echo "</textarea>
                            </div>
                        </div> 
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Рекламный код от AdmitAd </label>
                            <div class=\"col-md-9\">
                                <textarea class=\"form-control\" rows=\"3\" name=\"admitadCode\">";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "admitadCode", array()), "html", null, true);
        echo "</textarea>
                            </div>
                        </div> 
                        ";
        // line 143
        if ( !(isset($context["new"]) ? $context["new"] : null)) {
            // line 144
            echo "                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Логотип</label>
                            <div class=\"col-md-9\">
                                ";
            // line 147
            if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "logo", array())) {
                // line 148
                echo "                                    <img id=\"companyLogo\" src=\"";
                echo twig_escape_filter($this->env, site_url(), "html", null, true);
                echo "images/company/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "logo", array()), "html", null, true);
                echo "\">
                                ";
            } else {
                // line 150
                echo "                                    <img id=\"companyLogo\" src=\"\">
                                ";
            }
            // line 152
            echo "                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label  class=\"col-md-3 control-label\">Загрузить логотип</label>
                            <div class=\"col-md-9\">
                                <a href=\"#uploadImage\" data-toggle=\"modal\" class=\"btn btn-outline green\" onClick=\"\$('#imageUploadType').val('companyLogo');\$('#imageDestinationId').val(";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "id", array()), "html", null, true);
            echo ");\"><i class=\"fa fa-upload\"></i> Загрузить</a>
                            </div>
                        </div>
                        ";
        }
        // line 161
        echo "                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Отрасль</label>
                            <div class=\"col-md-9\">
                                <select class=\"form-control\" name=\"speciality\">
                                    ";
        // line 165
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specialities"]) ? $context["specialities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["speciality"]) {
            // line 166
            echo "                                        ";
            if (($this->getAttribute($context["speciality"], "value", array()) == twig_lower_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "speciality", array())))) {
                // line 167
                echo "                                            <option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "value", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "name", array()), "html", null, true);
                echo "</option>
                                        ";
            } elseif (( !$this->getAttribute(            // line 168
(isset($context["record"]) ? $context["record"] : null), "speciality", array()) && ($this->getAttribute($context["speciality"], "value", array()) == "sale"))) {
                // line 169
                echo "                                            <option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "value", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "name", array()), "html", null, true);
                echo "</option>
                                        ";
            } else {
                // line 171
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "value", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["speciality"], "name", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            // line 173
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['speciality'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                                </select>
                            </div> 
                        </div> 
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Категория</label>
                            <div class=\"col-md-9\">
                                <select class=\"form-control\" name=\"categoryId\">
                                    ";
        // line 181
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 182
            echo "                                        ";
            if (($this->getAttribute($context["category"], "id", array()) == $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "categoryId", array()))) {
                // line 183
                echo "                                            <option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</option>
                                        ";
            } else {
                // line 185
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            // line 187
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Тип компании</label>
                            <div class=\"col-md-9\">
                                <select class=\"form-control\" name=\"companyType\">
                                    ";
        // line 195
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companyTypes"]) ? $context["companyTypes"] : null));
        foreach ($context['_seq'] as $context["companyType"] => $context["value"]) {
            // line 196
            echo "                                        ";
            if ((twig_lower_filter($this->env, $context["companyType"]) == twig_lower_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "companyType", array())))) {
                // line 197
                echo "                                            <option selected value=\"";
                echo twig_escape_filter($this->env, $context["companyType"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</option>
                                        ";
            } else {
                // line 199
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $context["companyType"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</option>
                                        ";
            }
            // line 201
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['companyType'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Тип бренда</label>
                            <div class=\"col-md-9\">
                                <label><input type=\"checkbox\" value=\"1\" name=\"clothesBrand\" ";
        // line 208
        if (( !(null === $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "clothesBrand", array())) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "clothesBrand", array()) != 0))) {
            echo "checked";
        }
        echo "/><span>Одежда</span></label>
                                <label><input type=\"checkbox\" value=\"1\" name=\"shoesBrand\" ";
        // line 209
        if (( !(null === $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "shoesBrand", array())) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "shoesBrand", array()) != 0))) {
            echo "checked";
        }
        echo "/><span>Обувь</span></label>
                                <label><input type=\"checkbox\" value=\"1\" name=\"accessoriesBrand\" ";
        // line 210
        if (( !(null === $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "accessoriesBrand", array())) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "accessoriesBrand", array()) != 0))) {
            echo "checked";
        }
        echo "/><span>Аксессуары</span></label>
                                <label><input type=\"checkbox\" value=\"1\" name=\"sportBrand\" ";
        // line 211
        if (( !(null === $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "sportBrand", array())) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "sportBrand", array()) != 0))) {
            echo "checked";
        }
        echo "/><span>Спорт</span></label>
                                <label><input type=\"checkbox\" value=\"1\" name=\"toiletryBrand\" ";
        // line 212
        if (( !(null === $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "toiletryBrand", array())) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "toiletryBrand", array()) != 0))) {
            echo "checked";
        }
        echo "/><span>Косметика</span></label>
                                <label><input type=\"checkbox\" value=\"1\" name=\"furnitureBrand\" ";
        // line 213
        if (( !(null === $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "furnitureBrand", array())) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "furnitureBrand", array()) != 0))) {
            echo "checked";
        }
        echo "/><span>Мебель</span></label>
                                <label><input type=\"checkbox\" value=\"1\" name=\"childrenBrand\" ";
        // line 214
        if (( !(null === $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "childrenBrand", array())) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "childrenBrand", array()) != 0))) {
            echo "checked";
        }
        echo "/><span>Для детей</span></label>
                                <label><input type=\"checkbox\" value=\"1\" name=\"electroBrand\" ";
        // line 215
        if (( !(null === $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "electroBrand", array())) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "electroBrand", array()) != 0))) {
            echo "checked";
        }
        echo "/><span>Электроника</span></label>    
                                <label><input type=\"checkbox\" value=\"1\" name=\"autoBrand\" ";
        // line 216
        if (( !(null === $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "autoBrand", array())) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "autoBrand", array()) != 0))) {
            echo "checked";
        }
        echo "/><span>Авто</span></label>
                                <label><input type=\"checkbox\" value=\"1\" name=\"jewelryBrand\" ";
        // line 217
        if (( !(null === $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "jewelryBrand", array())) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "jewelryBrand", array()) != 0))) {
            echo "checked";
        }
        echo "/><span>Ювелирные</span></label>
                                <label><input type=\"checkbox\" value=\"1\" name=\"otherBrand\" ";
        // line 218
        if (( !(null === $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "otherBrand", array())) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "otherBrand", array()) != 0))) {
            echo "checked";
        }
        echo "/><span>Прочее</span></label>                                                                                            
                            </div>
                        </div>                        
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Приоритет (от 0 до 100) <span class=\"required\">*</span></label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" class=\"form-control\" data-required=\"1\" name=\"priority\"  value=\"";
        // line 224
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "priority", array())) ? ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "priority", array())) : (0)), "html", null, true);
        echo "\">
                            </div>
                        </div> 
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">HTML Title </label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" class=\"form-control\" name=\"htmlTitle\"  value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "htmlTitle", array()), "html", null, true);
        echo "\">
                            </div>
                        </div> 
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">HTML Description </label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" class=\"form-control\" name=\"htmlDescription\"  value=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "htmlDescription", array()), "html", null, true);
        echo "\">
                            </div>
                        </div> 
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">HTML Keywords </label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" class=\"form-control\" name=\"htmlKeywords\"  value=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "htmlKeywords", array()), "html", null, true);
        echo "\">
                            </div>
                        </div> 
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">HTML Canonical link </label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" class=\"form-control\" name=\"htmlCanonicalLink\"  value=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "htmlCanonicalLink", array()), "html", null, true);
        echo "\">
                            </div>
                        </div> 
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">URL-K</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" class=\"form-control\" name=\"urlk\"  value=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "urlk", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>                         
                        ";
        // line 257
        if ( !(isset($context["new"]) ? $context["new"] : null)) {
            // line 258
            echo "                        ";
            // line 269
            echo "                        ";
        }
        // line 270
        echo "                    </div>
                    <div class=\"form-actions\">
                    <div class=\"row\">
                        <div class=\"col-md-offset-3 col-md-9\">
                            ";
        // line 274
        if ((($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "accepted", array()) == 0) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "accepted", array()) != ""))) {
            // line 275
            echo "                                <button id=\"publishBtn\" type=\"button\" class=\"btn purple\" onclick=\"publishCompany(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "id", array()), "html", null, true);
            echo ");\">Опубликовать</button>
                            ";
        } elseif (($this->getAttribute(        // line 276
(isset($context["record"]) ? $context["record"] : null), "accepted", array()) == 1)) {
            // line 277
            echo "                                <button id=\"unpublishBtn\" type=\"button\" class=\"btn red\" onclick=\"unpublishCompany(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "id", array()), "html", null, true);
            echo ");\">Снять публикацию</button>                            
                            ";
        }
        // line 278
        echo "                        
                            <button id=\"saveBtn\" type=\"submit\" class=\"btn green\">Сохранить</button>
                            <button type=\"button\" class=\"btn default\" onClick=\"window.opener.location.reload();window.close();\">Закрыть</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    ";
        // line 287
        if ( !(isset($context["new"]) ? $context["new"] : null)) {
            // line 288
            echo "    <div class=\"col-md-12\">
        <div class=\"portlet box light-grey\">
            <div class=\"portlet-title\">
                <div class=\"caption\">
                    <i class=\"fa fa-globe\"></i>Каталоги компании 
                </div>
            </div>
            <div class=\"portlet-body form\">
                <form id=\"companyDescription\" class=\"form-horizontal\" role=\"form\" method=\"POST\" onsubmit=\"return false;\">
                    <div class=\"form-body\">
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\"></label>
                            <div class=\"col-md-9\">
                                ";
            // line 301
            $this->loadTemplate("admin/companycatalog/tables/companyCatalog.twig", "admin/company/forms/companyEdit.twig", 301)->display($context);
            echo " 
                             </div>
                        </div>
                    </div>
                    <div class=\"form-actions\">
                        <div class=\"row\">
                            <div class=\"col-md-offset-3 col-md-9\">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
        }
        // line 316
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "admin/company/forms/companyEdit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  636 => 316,  618 => 301,  603 => 288,  601 => 287,  590 => 278,  584 => 277,  582 => 276,  577 => 275,  575 => 274,  569 => 270,  566 => 269,  564 => 258,  562 => 257,  556 => 254,  547 => 248,  538 => 242,  529 => 236,  520 => 230,  511 => 224,  500 => 218,  494 => 217,  488 => 216,  482 => 215,  476 => 214,  470 => 213,  464 => 212,  458 => 211,  452 => 210,  446 => 209,  440 => 208,  432 => 202,  426 => 201,  418 => 199,  410 => 197,  407 => 196,  403 => 195,  394 => 188,  388 => 187,  380 => 185,  372 => 183,  369 => 182,  365 => 181,  356 => 174,  350 => 173,  342 => 171,  334 => 169,  332 => 168,  325 => 167,  322 => 166,  318 => 165,  312 => 161,  305 => 157,  298 => 152,  294 => 150,  286 => 148,  284 => 147,  279 => 144,  277 => 143,  271 => 140,  262 => 134,  254 => 128,  250 => 126,  244 => 124,  242 => 123,  233 => 116,  229 => 114,  223 => 112,  221 => 111,  211 => 104,  202 => 98,  193 => 92,  188 => 89,  181 => 85,  176 => 84,  170 => 82,  168 => 81,  159 => 75,  153 => 71,  135 => 56,  117 => 43,  111 => 40,  105 => 36,  99 => 35,  91 => 33,  83 => 31,  80 => 30,  78 => 29,  75 => 28,  70 => 27,  68 => 26,  60 => 21,  55 => 19,  41 => 7,  38 => 6,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
