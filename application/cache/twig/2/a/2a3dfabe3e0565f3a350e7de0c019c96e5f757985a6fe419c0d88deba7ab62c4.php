<?php

/* admin/parts/uploadImageModal.twig */
class __TwigTemplate_2a3dfabe3e0565f3a350e7de0c019c96e5f757985a6fe419c0d88deba7ab62c4 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"uploadImage\" tabindex=\"-1\" role=\"basic\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                <h4 class=\"modal-title\">Загрузить файл</h4>
            </div>
            ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
            <script>
            // Variable to store your files
            var files;

            // Add events
            document.addEventListener('DOMContentLoaded', function(){       \$('input[type=file]').on('change', prepareUpload); });            
            

            // Grab the files and set them to our variable
            function prepareUpload(event)
            {
            files = event.target.files;
            }            

            function uploadImage(event){
                event.stopPropagation(); // Stop stuff happening
                event.preventDefault(); // Totally stop stuff happening

                var data = new FormData();
                \$.each(files, function(key, value)
                {
                    data.append('userfile', value);
                });
                \$.each(\$('#imageuploadform').serializeArray(), function(i, field) {
                    if(field.name != 'userfile')
                        data.append(field.name, field.value);
                });


                \$.ajax({
                    url: '";
        // line 39
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "admin/doUploadImage',
                    type: 'POST',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false, // Don't process the files
                    contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                    success: function(data, textStatus, jqXHR)
                    {
                        console.log(data);
                        if(typeof data.error === 'undefined')
                        {
                            console.log('noerror');
                            // Success so call function to process the form
                            if(\$('#imageUploadType').val() == 'companyLogo'){
                                \$('#companyLogo').attr('src','";
        // line 54
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "images/company/'+data['upload_data']['file_name']);
                            }
                            if(\$('#imageUploadType').val() == 'companyPhoto'){
                                getCompanyPhoto();
                            }
                            if(\$('#imageUploadType').val() == 'discountLogo'){
                                \$('#discountLogo').attr('src','";
        // line 60
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "images/discount/'+data['upload_data']['file_name']);
                                \$('#discountLogoInput').val(data['upload_data']['file_name']);
                            }
                            if(\$('#imageUploadType').val() == 'discountPhoto'){
                                getDiscountPhoto();
                            }
                            if(\$('#imageUploadType').val() == 'companyCatalogLogo'){
                                \$('#companyCatalogLogo').attr('src','";
        // line 67
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "images/company_catalogs/'+\$('#imageDestinationId').val()+'/'+\$('#companyCatalogName').val()+'/'+data['upload_data']['file_name']);
                                \$('#companyCatalogLogoInput').val(\"/images/company_catalogs/\"+\$('#imageDestinationId').val()+\"/\"+\$('#companyCatalogName').val()+\"/\"+data['upload_data']['file_name']);
                            }
                            if(\$('#imageUploadType').val() == 'companyCatalogImage'){
                                getCompanyCatalogImage();
                            }
                            \$('#uploadImage').modal('toggle');
                        }
                        else
                        {
                            //console.log('error');
                            // Handle errors here
                            \$('#uploadmodalbody').append(data.error);
                           console.log('ERRORS: ' + data.error);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                        // Handle errors here
                        console.log('ERRORS: ' + textStatus);
                        \$('#uploadmodalbody').append(textStatus);
                        \$('#uploadmodalbody').append(errorThrown);
                        // STOP LOADING SPINNER
                    }
                });

            }
            </script>
            <form id=\"imageuploadform\" action=\"";
        // line 95
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "admin/doUploadImage\" enctype=\"multipart/form-data\" accept-charset=\"utf-8\" onSubmit=\"uploadImage(event);return false;\">
            <div class=\"modal-body\" id=\"uploadmodalbody\">
                <input id=\"companyCatalogName\" type=\"hidden\" name=\"companyCatalogName\" value=\"\">
                <input id=\"companyCatalogCompanyId\" type=\"hidden\" name=\"companyCatalogCompanyId\" value=\"\">

                <input id=\"imageDestinationId\" type=\"hidden\" name=\"id\" value=\"\">
                <input id=\"imageUploadType\" type=\"hidden\" name=\"imageUploadType\" value=\"\">
                <input type=\"file\" class=\"btn default\" name=\"userfile\" size=\"20\" />
            </div>
            <div class=\"modal-footer\">
                <input type=\"submit\" class=\"btn green\" value=\"Загрузить\" />
                <button type=\"button\" class=\"btn default\" data-dismiss=\"modal\">Отмена</button>
            </div>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/parts/uploadImageModal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 95,  99 => 67,  89 => 60,  80 => 54,  62 => 39,  28 => 8,  19 => 1,);
    }
}
