<?php

/* admin/adminLayout.twig */
class __TwigTemplate_862a37a51b8be69a543378b021597a6effd835103d4e6d326ec14f358defabf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'addjs' => array($this, 'block_addjs'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\" >
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset=\"utf-8\"/>
<title>Skidkimira management</title>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
<meta content=\"\" name=\"description\"/>
<meta content=\"\" name=\"author\"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"/assets/global/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"/assets/global/plugins/simple-line-icons/simple-line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"/assets/global/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"/assets/global/plugins/uniform/css/uniform.default.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css\">
<link rel=\"stylesheet\" href=\"/assets/admin/css/bootstrap-select.min.css\">

<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href=\"/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"/assets/global/plugins/data-tables/DT_bootstrap.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"/assets/global/plugins/bootstrap-datepicker/css/datepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN THEME STYLES -->
<link href=\"/assets/admin/css/style-metronic.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"/assets/admin/css/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"/assets/admin/css/style-responsive.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"/assets/admin/css/plugins.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"/assets/admin/css/themes/default.css\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
<link href=\"/assets/admin/css/custom.css\" rel=\"stylesheet\" type=\"text/css\"/>

<!-- <link href=\"/assets/global/css/components.css\" rel=\"stylesheet\" type=\"text/css\"/> -->
<link href=\"/assets/global/css/plugins.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"/assets/admin/layout/css/layout.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link id=\"style_color\" href=\"/assets/admin/layout/css/themes/default.css\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"/assets/admin/layout/css/custom.css\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- END THEME STYLES -->
<link rel=\"shortcut icon\" href=\"favicon.ico\"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply \"page-header-fixed-mobile\" and \"page-footer-fixed-mobile\" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply \"page-sidebar-closed\" class to the body and \"page-sidebar-menu-closed\" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply \"page-sidebar-hide\" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply \"page-sidebar-closed-hide-logo\" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply \"page-sidebar-hide\" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply \"page-sidebar-fixed\" class to have fixed sidebar -->
<!-- DOC: Apply \"page-footer-fixed\" class to the body element to have fixed footer -->
<!-- DOC: Apply \"page-sidebar-reversed\" class to put the sidebar on the right side -->
<!-- DOC: Apply \"page-full-width\" class to the body element to have full width page without the sidebar menu -->
<body class=\"page-header-fixed page-quick-sidebar-over-content \">
<!-- BEGIN HEADER -->
<div class=\"page-header navbar navbar-fixed-top\">
\t<!-- BEGIN HEADER INNER -->
\t<div class=\"page-header-inner\">
\t\t<!-- BEGIN LOGO -->
\t\t<div class=\"page-logo\">
\t\t\t<a href=\"index.html\">
\t\t\t
\t\t\t</a>
\t\t\t<div class=\"menu-toggler sidebar-toggler hide\">
\t\t\t\t<!-- DOC: Remove the above \"hide\" to enable the sidebar toggler button on header -->
\t\t\t</div>
\t\t</div>
\t\t<!-- END LOGO -->
\t\t<!-- BEGIN RESPONSIVE MENU TOGGLER -->
\t\t<a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t</a>
\t\t<!-- END RESPONSIVE MENU TOGGLER -->
\t\t<!-- BEGIN TOP NAVIGATION MENU -->
\t\t<div class=\"top-menu\">
\t\t\t<ul class=\"nav navbar-nav pull-right\">
\t\t\t\t<!-- BEGIN NOTIFICATION DROPDOWN -->
\t\t\t\t<li class=\"dropdown dropdown-user\">
\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
\t\t\t\t\t\t<span class=\"username username-hide-on-mobile\" >  </span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown dropdown-quick-sidebar-toggler\">
\t\t\t\t\t<a href=\"/auth/logout\" class=\"dropdown-toggle\">
\t\t\t\t\t<i class=\"icon-logout\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<!-- END QUICK SIDEBAR TOGGLER -->
\t\t\t</ul>
\t\t</div>
\t\t<!-- END TOP NAVIGATION MENU -->
\t</div>
\t<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class=\"clearfix\">
</div>
<!-- BEGIN CONTAINER -->
<div class=\"page-container\">
\t<!-- BEGIN SIDEBAR -->
\t";
        // line 106
        if ($this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "userdata", array()), "is_admin", array())) {
            // line 107
            echo "\t\t";
            $this->loadTemplate("admin/parts/sidebar.twig", "admin/adminLayout.twig", 107)->display($context);
            // line 108
            echo "\t";
        } else {
            // line 109
            echo "\t\t";
            $this->loadTemplate("admin/parts/moderatorSidebar.twig", "admin/adminLayout.twig", 109)->display($context);
            // line 110
            echo "\t";
        }
        // line 111
        echo "\t<!-- END SIDEBAR -->
\t<!-- BEGIN CONTENT -->                
<div class=\"page-content-wrapper\">
\t\t<div id=\"body\" class=\"page-content\">
\t\t\t";
        // line 115
        $this->displayBlock('content', $context, $blocks);
        // line 118
        echo "\t\t</div>
\t</div>
\t<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class=\"page-footer\">
\t<div class=\"page-footer-inner\">
\t\t 
\t</div>
\t<div class=\"page-footer-tools\">
\t\t<span class=\"go-top\">
\t\t<i class=\"fa fa-angle-up\"></i>
\t\t</span>
\t</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src=\"/assets/global/plugins/respond.min.js\"></script>
<script src=\"/assets/global/plugins/excanvas.min.js\"></script> 
<![endif]-->
<script src=\"/assets/global/plugins/jquery-1.11.0.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/global/plugins/jquery-migrate-1.2.1.min.js\" type=\"text/javascript\"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src=\"/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/global/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js\" type=\"text/javascript\"></script>

<script src=\"/assets/global/plugins/jquery.blockui.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/global/plugins/jquery.cokie.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/global/plugins/uniform/jquery.uniform.min.js\" type=\"text/javascript\"></script>
<script src=\"/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN CUSTOM SCRIPTS -->
<script src=\"/assets/admin/scripts/custom.js\" type=\"text/javascript\"></script>
<!-- END CUSTOM SCRIPTS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type=\"text/javascript\" src=\"/assets/global/plugins/jquery-validation/dist/jquery.validate.min.js\"></script>
<script type=\"text/javascript\" src=\"/assets/global/plugins/jquery-validation/dist/additional-methods.min.js\"></script>
<script type=\"text/javascript\" src=\"/assets/global/plugins/select2/select2.min.js\"></script>
<script type=\"text/javascript\" src=\"/assets/global/plugins/data-tables/jquery.dataTables.js\"></script>
<script type=\"text/javascript\" src=\"/assets/global/plugins/data-tables/DT_bootstrap.js\"></script>
<script type=\"text/javascript\" src=\"/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js\"></script>
<script type=\"text/javascript\" src=\"/assets/global/plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.ru.js\"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"/assets/global/plugins/jquery-nestable/jquery.nestable.js\"></script>
<script src=\"/assets/admin/pages/scripts/ui-nestable.js\"></script>
<script src=\"/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js\" type=\"text/javascript\"></script>
<script src=\"/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js\" type=\"text/javascript\"></script>
<script src=\"/assets/global/scripts/metronic.js\" type=\"text/javascript\"></script>
<script src=\"/assets/admin/layout/scripts/layout.js\" type=\"text/javascript\"></script>
<script src=\"/assets/admin/scripts/core/app.js\"></script>
<script src=\"/assets/admin/scripts/table-managed.js\"></script>
<script src=\"/assets/admin/scripts/components-pickers.js\"></script>
<script src=\"/assets/admin/scripts/form-validation.js\"></script>
<script type=\"text/javascript\" src=\"/assets/global/plugins/ckeditor/ckeditor.js\"></script>
<script src=\"/assets/admin/scripts/bootstrap-select.min.js\"></script>
<script>
jQuery(document).ready(function() {    
\tApp.init();   
    // initiate layout and plugins
    Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
\tComponentsPickers.init();
\tFormValidation.init();
    //UINestable.init();
    if (\$('.datatable')){
\t   TableManaged.init();
    }
    if (\$('#htmlArea').length){
\t   \$('#htmlArea').wysihtml5();
    }
});
</script>
";
        // line 196
        $this->displayBlock('addjs', $context, $blocks);
        // line 198
        echo "<!-- END PAGE LEVEL SCRIPTS -->
</body>
<!-- END BODY -->
</html>";
    }

    // line 115
    public function block_content($context, array $blocks = array())
    {
        // line 116
        echo "\t\t\t
        \t";
    }

    // line 196
    public function block_addjs($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin/adminLayout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 196,  242 => 116,  239 => 115,  232 => 198,  230 => 196,  150 => 118,  148 => 115,  142 => 111,  139 => 110,  136 => 109,  133 => 108,  130 => 107,  128 => 106,  21 => 1,);
    }
}
