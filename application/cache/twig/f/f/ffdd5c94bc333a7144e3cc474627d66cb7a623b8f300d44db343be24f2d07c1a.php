<?php

/* brands.twig */
class __TwigTemplate_ffdd5c94bc333a7144e3cc474627d66cb7a623b8f300d44db343be24f2d07c1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("html.twig", "brands.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

\t<div class=\"content clearfix\">

\t\t<div class=\"center kat\">

\t\t\t<div class=\"banner-width\">
\t\t\t\t<noindex>
\t\t\t\t";
        // line 12
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "top_fullwidth", array());
        echo "
\t\t\t\t</noindex>
\t\t\t</div>
            ";
        // line 15
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cattitle", array())) {
            echo "<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "cattitle", array()), "html", null, true);
            echo "</h1>";
        }
        // line 16
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "o", array())) > 0)) {
            // line 17
            echo "\t\t\t<div class=\"part\">

\t\t\t\t<h4>0-9</h4>

\t\t\t\t<div class=\"inner-ul\">

\t\t\t\t\t<ul class=\"ul1\">
                        ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "o", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 25
                echo "                        <li><a href=\"/brand/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
                echo "</a></li>
                        ";
                // line 26
                if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "o", array())) / 4) > 1)) {
                    echo "                        
                            ";
                    // line 27
                    if ((($this->getAttribute($context["loop"], "index", array()) % twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "o", array())) / 4))) == 0)) {
                        // line 28
                        echo "\t                        </ul><ul  class=\"ul";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", array()) / twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "o", array())) / 4))) + 1), "html", null, true);
                        echo "\">
                            ";
                    }
                    // line 29
                    echo "                       
                        ";
                }
                // line 31
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t\t</ul>


                    ";
            // line 35
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "o", array())) > 24)) {
                // line 36
                echo "\t\t\t\t\t<div class=\"showmorebrand\">
\t\t\t\t\t\t<a href=\"#\">показать еще</a>
\t\t\t\t\t</div>
                    ";
            }
            // line 40
            echo "
\t\t\t\t</div>

\t\t\t</div>
            ";
        }
        // line 45
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "a", array())) > 0)) {
            // line 46
            echo "\t\t\t<div class=\"part\">

\t\t\t\t<h4>A-D</h4>

\t\t\t\t<div class=\"inner-ul\">

\t\t\t\t\t<ul class=\"ul1\">
                        ";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "a", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 54
                echo "                        <li><a href=\"/brand/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
                echo "</a></li>
                        ";
                // line 55
                if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "a", array())) / 4) > 1)) {
                    // line 56
                    echo "                            ";
                    if ((($this->getAttribute($context["loop"], "index", array()) % twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "a", array())) / 4))) == 0)) {
                        // line 57
                        echo "                                </ul><ul  class=\"ul";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", array()) / twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "a", array())) / 4))) + 1), "html", null, true);
                        echo "\">                       
                            ";
                    }
                    // line 59
                    echo "                        ";
                }
                // line 60
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t\t\t\t</ul>
                    ";
            // line 62
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "a", array())) > 24)) {
                // line 63
                echo "\t\t\t\t\t<div class=\"showmorebrand\">

\t\t\t\t\t\t<a href=\"#\">показать еще</a>

\t\t\t\t\t</div>
                    ";
            }
            // line 69
            echo "
\t\t\t\t</div>

\t\t\t</div>
            ";
        }
        // line 74
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "e", array())) > 0)) {
            // line 75
            echo "\t\t\t<div class=\"part\">

\t\t\t\t<h4>E-H</h4>

\t\t\t\t<div class=\"inner-ul\">

\t\t\t\t\t<ul class=\"ul1\">
                        ";
            // line 82
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "e", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 83
                echo "                        <li><a href=\"/brand/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
                echo "</a></li>
                        ";
                // line 84
                if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "e", array())) / 4) > 1)) {
                    // line 85
                    echo "                            ";
                    if ((($this->getAttribute($context["loop"], "index", array()) % twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "e", array())) / 4))) == 0)) {
                        // line 86
                        echo "\t                            </ul><ul  class=\"ul";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", array()) / twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "e", array())) / 4))) + 1), "html", null, true);
                        echo "\">
                            ";
                    }
                    // line 87
                    echo "                       
                        ";
                }
                // line 89
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "\t\t\t\t\t</ul>

                    ";
            // line 92
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "e", array())) > 24)) {
                // line 93
                echo "\t\t\t\t\t<div class=\"showmorebrand\">

\t\t\t\t\t\t<a href=\"#\">показать еще</a>

\t\t\t\t\t</div>
                    ";
            }
            // line 99
            echo "
\t\t\t\t</div>

\t\t\t</div>
            ";
        }
        // line 104
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "i", array())) > 0)) {
            // line 105
            echo "\t\t\t<div class=\"part\">

\t\t\t\t<h4>I-L</h4>

\t\t\t\t<div class=\"inner-ul\">

\t\t\t\t\t<ul class=\"ul1\">
                        ";
            // line 112
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "i", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 113
                echo "                        <li><a href=\"/brand/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
                echo "</a></li>
                        ";
                // line 114
                if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "i", array())) / 4) > 1)) {
                    // line 115
                    echo "                            ";
                    if ((($this->getAttribute($context["loop"], "index", array()) % twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "i", array())) / 4))) == 0)) {
                        // line 116
                        echo "                                </ul><ul  class=\"ul";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", array()) / twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "i", array())) / 4))) + 1), "html", null, true);
                        echo "\">                       
                            ";
                    }
                    // line 118
                    echo "                        ";
                }
                // line 119
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "\t\t\t\t\t</ul>

                    ";
            // line 122
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "i", array())) > 24)) {
                // line 123
                echo "\t\t\t\t\t<div class=\"showmorebrand\">

\t\t\t\t\t\t<a href=\"#\">показать еще</a>

\t\t\t\t\t</div>
                    ";
            }
            // line 129
            echo "
\t\t\t\t</div>

\t\t\t</div>
            ";
        }
        // line 134
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "m", array())) > 0)) {
            // line 135
            echo "\t\t\t<div class=\"part\">

\t\t\t\t<h4>M-P</h4>

\t\t\t\t<div class=\"inner-ul\">

\t\t\t\t\t<ul class=\"ul1\">
                        ";
            // line 142
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "m", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 143
                echo "                        <li><a href=\"/brand/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
                echo "</a></li>
                        ";
                // line 144
                if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "m", array())) / 4) > 1)) {
                    // line 145
                    echo "                            ";
                    if ((($this->getAttribute($context["loop"], "index", array()) % twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "m", array())) / 4))) == 0)) {
                        // line 146
                        echo "                                </ul><ul  class=\"ul";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", array()) / twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "m", array())) / 4))) + 1), "html", null, true);
                        echo "\">                       
                            ";
                    }
                    // line 148
                    echo "                        ";
                }
                // line 149
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "\t\t\t\t\t</ul>

                    ";
            // line 152
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "m", array())) > 24)) {
                // line 153
                echo "\t\t\t\t\t<div class=\"showmorebrand\">

\t\t\t\t\t\t<a href=\"#\">показать еще</a>

\t\t\t\t\t</div>
                    ";
            }
            // line 159
            echo "
\t\t\t\t</div>

\t\t\t</div>
            ";
        }
        // line 164
        echo "\t\t\t<div class=\"onlymobile\">
\t\t\t\t<noindex>
\t\t\t\t";
        // line 166
        echo $this->getAttribute((isset($context["adverts"]) ? $context["adverts"] : null), "mobile_brands", array());
        echo "
\t\t\t\t</noindex>
\t\t\t</div>
            ";
        // line 169
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "q", array())) > 0)) {
            // line 170
            echo "\t\t\t<div class=\"part\">

\t\t\t\t<h4>Q-T</h4>

\t\t\t\t<div class=\"inner-ul\">

\t\t\t\t\t<ul class=\"ul1\">
                        ";
            // line 177
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "q", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 178
                echo "                        <li><a href=\"/brand/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
                echo "</a></li>
                        ";
                // line 179
                if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "q", array())) / 4) > 1)) {
                    // line 180
                    echo "                            ";
                    if ((($this->getAttribute($context["loop"], "index", array()) % twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "q", array())) / 4))) == 0)) {
                        // line 181
                        echo "                                </ul><ul  class=\"ul";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", array()) / twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "q", array())) / 4))) + 1), "html", null, true);
                        echo "\">                       
                            ";
                    }
                    // line 183
                    echo "                        ";
                }
                // line 184
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "\t\t\t\t\t</ul>

                    ";
            // line 187
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "q", array())) > 24)) {
                // line 188
                echo "\t\t\t\t\t<div class=\"showmorebrand\">

\t\t\t\t\t\t<a href=\"#\">показать еще</a>

\t\t\t\t\t</div>
                    ";
            }
            // line 194
            echo "
\t\t\t\t</div>

\t\t\t</div>
            ";
        }
        // line 199
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "u", array())) > 0)) {
            // line 200
            echo "\t\t\t<div class=\"part\">

\t\t\t\t<h4>U-Z</h4>

\t\t\t\t<div class=\"inner-ul\">

\t\t\t\t\t<ul class=\"ul1\">
                        ";
            // line 207
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "u", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 208
                echo "                        <li><a href=\"/brand/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
                echo "</a></li>
                        ";
                // line 209
                if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "u", array())) / 4) > 1)) {
                    // line 210
                    echo "                            ";
                    if ((($this->getAttribute($context["loop"], "index", array()) % twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "u", array())) / 4))) == 0)) {
                        // line 211
                        echo "                                </ul><ul  class=\"ul";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", array()) / twig_round((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "u", array())) / 4))) + 1), "html", null, true);
                        echo "\">                       
                            ";
                    }
                    // line 213
                    echo "                        ";
                }
                // line 214
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "\t\t\t\t\t</ul>

                    ";
            // line 217
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "brands", array()), "u", array())) > 24)) {
                // line 218
                echo "\t\t\t\t\t<div class=\"showmorebrand\">

\t\t\t\t\t\t<a href=\"#\">показать еще</a>

\t\t\t\t\t</div>
                    ";
            }
            // line 224
            echo "
\t\t\t\t</div>

\t\t\t</div>
            ";
        }
        // line 229
        echo "\t\t\t<div class=\"kakoito-text\">\t\t\t
\t\t<!--\t";
        // line 230
        echo $this->getAttribute((isset($context["additional"]) ? $context["additional"] : null), "promotextbtm", array());
        echo " вывод разного текста для подкатегорий брендов--->
\t\t\t</div>

\t\t</div>

\t\t";
        // line 235
        $this->loadTemplate("parts/menu.twig", "brands.twig", 235)->display($context);
        // line 236
        echo "
        ";
        // line 243
        echo "\t\t
\t</div>\t\t
";
    }

    public function getTemplateName()
    {
        return "brands.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  674 => 243,  671 => 236,  669 => 235,  661 => 230,  658 => 229,  651 => 224,  643 => 218,  641 => 217,  637 => 215,  623 => 214,  620 => 213,  614 => 211,  611 => 210,  609 => 209,  602 => 208,  585 => 207,  576 => 200,  573 => 199,  566 => 194,  558 => 188,  556 => 187,  552 => 185,  538 => 184,  535 => 183,  529 => 181,  526 => 180,  524 => 179,  517 => 178,  500 => 177,  491 => 170,  489 => 169,  483 => 166,  479 => 164,  472 => 159,  464 => 153,  462 => 152,  458 => 150,  444 => 149,  441 => 148,  435 => 146,  432 => 145,  430 => 144,  423 => 143,  406 => 142,  397 => 135,  394 => 134,  387 => 129,  379 => 123,  377 => 122,  373 => 120,  359 => 119,  356 => 118,  350 => 116,  347 => 115,  345 => 114,  338 => 113,  321 => 112,  312 => 105,  309 => 104,  302 => 99,  294 => 93,  292 => 92,  288 => 90,  274 => 89,  270 => 87,  264 => 86,  261 => 85,  259 => 84,  252 => 83,  235 => 82,  226 => 75,  223 => 74,  216 => 69,  208 => 63,  206 => 62,  203 => 61,  189 => 60,  186 => 59,  180 => 57,  177 => 56,  175 => 55,  168 => 54,  151 => 53,  142 => 46,  139 => 45,  132 => 40,  126 => 36,  124 => 35,  119 => 32,  105 => 31,  101 => 29,  95 => 28,  93 => 27,  89 => 26,  82 => 25,  65 => 24,  56 => 17,  53 => 16,  47 => 15,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
