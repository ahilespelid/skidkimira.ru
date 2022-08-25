<?php

/* admin/branchoffice/forms/branchofficeEdit.twig */
class __TwigTemplate_7934d00fe615933bd873bd21bd06035c86c101700db3ca610ee7d6bde535ba02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/adminLayout.twig", "admin/branchoffice/forms/branchofficeEdit.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'addjs' => array($this, 'block_addjs'),
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
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"portlet box light-grey\">
\t\t\t\t\t\t<div class=\"portlet-title\">
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-globe\"></i>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"portlet-body form\">
                            <form id=\"table\" class=\"form-horizontal\" role=\"form\" method=\"POST\">
                                <div class=\"form-body\">
                                
                                
                                ";
        // line 16
        if ( !(isset($context["new"]) ? $context["new"] : null)) {
            // line 17
            echo "                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Id</label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" name=\"id\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "id", array()), "html", null, true);
            echo "\" readonly> 
                                            
                                        </div>
                                    </div>
                                    <input type=\"hidden\" class=\"form-control\" name=\"companyId\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["companyId"]) ? $context["companyId"] : null), "html", null, true);
            echo "\">
                                ";
        } else {
            // line 26
            echo "                                    <input type=\"hidden\" class=\"form-control\" name=\"companyId\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["companyId"]) ? $context["companyId"] : null), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" class=\"form-control\" name=\"siteUserId\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["moderatorId"]) ? $context["moderatorId"] : null), "html", null, true);
            echo "\" >
                                ";
        }
        // line 29
        echo "                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Адрес <span class=\"required\">*</span></label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" data-required=\"1\" id=\"address\" onblur=\"refreshPoint();\" name=\"address\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "address", array())) ? ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "address", array())) : ("")), "html", null, true);
        echo "\"> 
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Ближайшее метро</label>
                                                                        
                                        <div class=\"col-md-9\" id=\"metroStations\">
                                            ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "metros", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 40
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "name", array()), "html", null, true);
            echo "</br>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                    
                                        </div>          
                                        <input type=hidden id=\"metroStationsData\" name=\"metroStationsData\"/>                                                                      
                                    </div>                                    

                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Телефон <span class=\"required\">*</span></label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" data-required=\"1\" name=\"phone\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "phone", array())) ? ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "phone", array())) : ("")), "html", null, true);
        echo "\"> 
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">График работы </label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" name=\"schedule\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "schedule", array())) ? ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "schedule", array())) : ("")), "html", null, true);
        echo "\"> 
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Широта</label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" id=\"latitude\" name=\"latitude\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "latitude", array())) ? ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "latitude", array())) : ("")), "html", null, true);
        echo "\"> 
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Долгота</label>
                                        <div class=\"col-md-9\">
                                            <input type=\"text\" class=\"form-control\" id=\"longitude\" name=\"longitude\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "longitude", array())) ? ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "longitude", array())) : ("")), "html", null, true);
        echo "\"> 
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Город</label>
                                        <div class=\"col-md-9\">
                                            <select class=\"form-control\" id=\"city\" name=\"cityId\">
                                                ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 75
            echo "                                                    ";
            if ((($this->getAttribute($context["city"], "id", array()) == $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "cityId", array())) || ( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "cityId", array()) && ($this->getAttribute($context["city"], "id", array()) == 1)))) {
                // line 76
                echo "                                                        <option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", array()), "html", null, true);
                echo "</option>
                                                    ";
            } else {
                // line 78
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", array()), "html", null, true);
                echo "</option>
                                                    ";
            }
            // line 80
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-md-3 control-label\">Категория</label>
                                        <div class=\"col-md-9\">
                                            <select class=\"form-control\" name=\"categoryId\">
                                                ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 89
            echo "                                                    ";
            if (($this->getAttribute($context["category"], "id", array()) == $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "categoryId", array()))) {
                // line 90
                echo "                                                        <option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</option>
                                                    ";
            } else {
                // line 92
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</option>
                                                    ";
            }
            // line 94
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-actions\">
                                    <div class=\"row\">
                                        <div class=\"col-md-offset-3 col-md-9\">
                                            <button id=\"saveBtn\" type=\"submit\" class=\"btn green\">Сохранить</button>
                                            <button type=\"button\" class=\"btn default\" onClick=\"window.opener.location.reload();window.close();\">Закрыть</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div id=\"YMapsID\" style=\"width:600px;height:400px; margin: 0 auto;\"></div>

                    </div>
                </div>
            </div>
";
    }

    // line 114
    public function block_addjs($context, array $blocks = array())
    {
        // line 115
        echo "<script type=\"text/javascript\" src=\"https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU\"></script>
<script>
var map;
var placemark;
var metros = [];

// Обработчики успшеного и неудачного завершения выполнения запроса
var listenerMetroLoad, listenerMetroFault;


function createMap(mapId, center) {
\tif (center == undefined) {
\t\tcenter = [55.76, 37.64];
\t}
\t
\tvar map = new ymaps.Map(mapId, {center: center, zoom: 7, behaviors: [\"default\", \"scrollZoom\"]});
    
\tmap.controls.add('mapTools');
\tmap.controls.add('typeSelector');
\tmap.controls.add('zoomControl');
\tmap.controls.add('scaleLine');
\t
\treturn map;
}

function pointFromString (val) {
\tvar parts = val.split(',');
\treturn [parseFloat(parts[0]), parseFloat(parts[1])];
}


\$(function() {
    console.log('awwww');
\tymaps.ready(initMap);
\t\$('#city').bind('change', refreshPoint);
});

function initMap() {
\t//map functionality
    document.getElementById('latitude').disabled = true;
\tdocument.getElementById('longitude').disabled = true;
\t//document.getElementById('address').disabled = true;
\t
\tvar lat = document.getElementById('latitude').value;
\tvar lng = document.getElementById('longitude').value;
\t
\tmap = createMap(\"YMapsID\");

\t// Создаем метку.
\tplacemark = new ymaps.Placemark([parseFloat(lat), parseFloat(lng)], 
\t\t{}, 
\t\t{draggable: true}
\t);

\t// Добавляет метку на карту
\tmap.geoObjects.add(placemark);
    
\tplacemark.events.add('drag', function(e) {
    \tvar thisPlacemark = e.get('target');
    \tvar coords = thisPlacemark.geometry.getCoordinates();
    \t
    \tdocument.getElementById('latitude').value = coords[0];
    \tdocument.getElementById('longitude').value = coords[1];
    });
\t
\tplacemark.events.add('dragend', function(e) {
\t\tfillAddress();
    \trefreshMetros();
    });
    
\tif (lat != null && lng != null && lat.length > 1 && lng.length > 1) {
\t\tmap.setCenter([parseFloat(lat), parseFloat(lng)], 12);
\t\tplacemark.geometry.setCoordinates([parseFloat(lat), parseFloat(lng)]);
\t} else {
\t\tdisplayCityCenter();
\t}
\t
\trefreshMetros();
}

function displayCityCenter() {
\tvar adr = \$(\"#city option:selected\").html();
\tvar myGeocoder = ymaps.geocode(adr, {kind: 'locality', results: 1});
\tmyGeocoder.then(
\t    function (res) {
\t        if (res.geoObjects.getLength() > 0) {
\t\t\t\tvar coords = res.geoObjects.get(0).geometry.getCoordinates();

\t\t\t\tdocument.getElementById('latitude').value = coords[0];
\t        \tdocument.getElementById('longitude').value = coords[1];
\t\t\t\t
\t\t\t\tmap.setCenter(coords);
\t\t\t\tplacemark.geometry.setCoordinates(coords);
\t\t\t\t
\t\t\t\trefreshMetros();
\t\t\t}
\t    },
\t    function (err) {
\t        // обработка ошибки
\t    }
\t);
}

function refreshPoint() {
\tvar adr = \$(\"#city option:selected\").html() + \", \" + \$(\"#address\").val();
\tvar myGeocoder = ymaps.geocode(adr, {kind: 'house', results: 1});
\tmyGeocoder.then(
\t    function (res) {
\t        if (res.geoObjects.getLength() > 0) {
\t\t\t\tvar coords = res.geoObjects.get(0).geometry.getCoordinates();

\t\t\t\tdocument.getElementById('latitude').value = coords[0];
\t        \tdocument.getElementById('longitude').value = coords[1];
\t\t\t\t
\t\t\t\tmap.setCenter(coords);
\t\t\t\tplacemark.geometry.setCoordinates(coords);
\t\t\t\t
\t\t\t\trefreshMetros();
\t\t\t}
\t    },
\t    function (err) {
\t        // обработка ошибки
\t    }
\t);
}

function refreshMetros() {
\t// Очистка предыдущих результатов
\twhile (metros.length > 0) {
    \tmap.geoObjects.remove(metros.pop());
    }

    var myGeocoder = ymaps.geocode(placemark.geometry.getCoordinates(), {kind: 'metro', results: 3});
    myGeocoder.then(
        function (res) {
            \$('#metroStations').html('');
        \t\$('#metroStationsData').val('');
        \t
            var names = \"\";
            var data = \"\";
            while (res.geoObjects.getLength() > 0) {
            \tvar station = res.geoObjects.get(0);
            \tvar stationName = station.properties.get('name').replace(\"метро \", \"\");
            \t
            \tstation.properties.set('iconContent', \"M\");
            \tstation.options.set('preset', 'twirl#redStretchyIcon');
            \t
            \tmap.geoObjects.add(station);
                metros.push(station);
            \t
            \tif (names.indexOf(stationName + \"<br/>\") < 1) {
                \tnames += stationName + \"<br/>\";
                \tdata  += stationName + \"||\" + station.geometry.getCoordinates()[0] + \"||\" + station.geometry.getCoordinates()[1] + \"<>\";
            \t}
            }
            
            \$('#metroStations').html(names);
        \t\$('#metroStationsData').val(data);
        },
        function (err) {
        \t\$('#metroStations').html('');
        \t\$('#metroStationsData').val('');
        }
    );
}

function fillAddress() {
\tif (placemark != null) {
\t\tvar myGeocoder = ymaps.geocode(placemark.geometry.getCoordinates(), {kind: 'house', results: 1});
\t\tmyGeocoder.then(
\t\t    function (res) {
\t\t        if (res.geoObjects.getLength() > 0) {
\t\t        \tdocument.getElementById('address').value = res.geoObjects.get(0).properties.get('text'); 
\t\t        }
\t\t    },
\t\t    function (err) {
\t\t        // обработка ошибки
\t\t    }
\t\t);
\t}
}

function enableFields() {
\tdocument.getElementById('latitude').disabled = false;
\tdocument.getElementById('longitude').disabled = false;
\t//document.getElementById('address').disabled = false;
\treturn true;
}
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/branchoffice/forms/branchofficeEdit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 115,  243 => 114,  221 => 95,  215 => 94,  207 => 92,  199 => 90,  196 => 89,  192 => 88,  183 => 81,  177 => 80,  169 => 78,  161 => 76,  158 => 75,  154 => 74,  144 => 67,  135 => 61,  126 => 55,  117 => 49,  107 => 41,  98 => 40,  94 => 39,  84 => 32,  79 => 29,  74 => 27,  69 => 26,  64 => 24,  57 => 20,  52 => 17,  50 => 16,  39 => 8,  32 => 3,  29 => 2,  11 => 1,);
    }
}
