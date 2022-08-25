<?php

/* html.twig */
class __TwigTemplate_948e0dbf4394c1008d5b5bf20e999503169ecc3b80e4d8ed1ff6713798659a1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>

\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t<title>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "description", array()), "html", null, true);
        echo "\"/>
    <meta name=\"keywords\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "keywords", array()), "html", null, true);
        echo "\"/>
\t";
        // line 12
        if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "canonical", array()) && ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "canonical", array()) != ""))) {
            // line 13
            echo "\t\t<link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "canonical", array()), "html", null, true);
            echo "\" />
\t";
        }
        // line 15
        echo "\t<meta charset='utf-8'/>
\t<meta name=\"yandex-verification\" content=\"796aac31decc072f\" />
\t<meta name=\"yandex-verification\" content=\"eee01b84b542c555\" />

\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/reset.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-ui.min.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/style.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/media.css\">

\t<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
\t<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/font-awesome.min.css\">
<!-- Yandex.RTB -->
    <script>window.yaContextCb=window.yaContextCb||[]</script>
    <script src=\"https://yandex.ru/ads/system/context.js\" async></script>

</head>

<body>
\t\t<noindex>
\t\t";
        // line 35
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "allpages_header", array());
        echo "
\t\t</noindex>
    ";
        // line 37
        $this->loadTemplate("parts/header.twig", "html.twig", 37)->display($context);
        // line 38
        echo "    ";
        $this->loadTemplate("parts/menu_mobile.twig", "html.twig", 38)->display($context);
        // line 39
        echo "
\t";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "\t<div class=\"fwrap\">

\t\t<footer>

\t\t\t<span>2022 © Скидкимира.ру</span>

\t\t\t<a href=\"mailto:saleskidkimira@yandex.ru\">saleskidkimira@yandex.ru</a>
\t\t\t";
        // line 50
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "footer_counters", array());
        echo "

\t\t</footer>

\t</div>

\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-1.12.2.min.js\"></script>
\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-ui.min.js\"></script>

\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery.modal.js\"></script>
\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-matchHeight.js\"></script>
\t<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/common.js\"></script>

<!-- Yandex.Metrika counter -->
<script type=\"text/javascript\">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41560414 = new Ya.Metrika({
                    id:41560414,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName(\"script\")[0],
            s = d.createElement(\"script\"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = \"text/javascript\";
        s.async = true;
        s.src = \"https://mc.yandex.ru/metrika/watch.js\";

        if (w.opera == \"[object Opera]\") {
            d.addEventListener(\"DOMContentLoaded\", f, false);
        } else { f(); }
    })(document, window, \"yandex_metrika_callbacks\");
</script>
<noscript><div><img src=\"https://mc.yandex.ru/watch/41560414\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

<!-- Yandex.Metrika counter -->
<script type=\"text/javascript\">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46600359 = new Ya.Metrika({
                    id:46600359,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName(\"script\")[0],
            s = d.createElement(\"script\"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = \"text/javascript\";
        s.async = true;
        s.src = \"https://mc.yandex.ru/metrika/watch.js\";

        if (w.opera == \"[object Opera]\") {
            d.addEventListener(\"DOMContentLoaded\", f, false);
        } else { f(); }
    })(document, window, \"yandex_metrika_callbacks\");
</script>
<noscript><div><img src=\"https://mc.yandex.ru/watch/46600359\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "\t\t";
        $this->loadTemplate("parts/mainpage.twig", "html.twig", 41)->display($context);
        // line 42
        echo "\t";
    }

    public function getTemplateName()
    {
        return "html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 42,  210 => 41,  207 => 40,  138 => 61,  134 => 60,  130 => 59,  125 => 57,  121 => 56,  112 => 50,  103 => 43,  101 => 40,  98 => 39,  95 => 38,  93 => 37,  88 => 35,  76 => 26,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  51 => 15,  45 => 13,  43 => 12,  39 => 11,  35 => 10,  31 => 9,  22 => 2,  20 => 1,);
    }
}
