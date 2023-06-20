<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/jlnavbar.html.twig */
class __TwigTemplate_b34833177766d2cf613d542295257260 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        try {            // line 2
            $context["menu"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "menu", [], "any", false, false, false, 2), "instance", [0 => ($context["particle"] ?? null)], "method", false, false, false, 2);
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 4
            echo "<div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "getMessage", [], "any", false, false, false, 4), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 7
        $context["sec_id"] = twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "section", [], "any", false, false, false, 7));
        // line 8
        echo "
";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "sticky", [], "any", false, false, false, 9) && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "section", [], "any", false, false, false, 9))) {
            // line 10
            ob_start(function () { return ''; });
            // line 11
            echo "    jlUIkit.sticky('";
            echo twig_escape_filter($this->env, ($context["sec_id"] ?? null), "html", null, true);
            echo "', {
    ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "sticky", [], "any", false, false, false, 12) == "stickyonscroll")) {
                // line 13
                echo "    showOnUp: true,
    animation: 'jl-animation-slide-top',
    ";
            }
            // line 16
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "media", [], "any", false, false, false, 16)) {
                // line 17
                echo "    media: '@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "media", [], "any", false, false, false, 17), "html", null, true);
                echo "',
    ";
            }
            // line 19
            echo "    top: '";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "top", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "top", [], "any", false, false, false, 19), 0)) : (0)), "html", null, true);
            echo "',
    offset: ";
            // line 20
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "offset", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "offset", [], "any", false, false, false, 20), 0)) : (0)), "html", null, true);
            echo "
} )
";
            $context["inline_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "document", [], "any", false, false, false, 23), "addInlineScript", [0 => ($context["inline_js"] ?? null), 1 => 10, 2 => "footer"], "method", false, false, false, 23);
        }
        // line 25
        echo "
";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "sticky", [], "any", false, false, false, 26) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "m_sticky", [], "any", false, false, false, 26))) {
            // line 27
            $context["sticky_navbar"] = ('' === $tmp = "html {height: auto;}") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 28
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "document", [], "any", false, false, false, 28), "addInlineStyle", [0 => ($context["sticky_navbar"] ?? null), 1 => 0], "method", false, false, false, 28);
        }
        // line 30
        ob_start(function () { return ''; });
        // line 31
        ob_start(function () { return ''; });
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "main_nav_margin", [], "any", false, false, false, 32) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_style", [], "any", false, false, false, 32)))) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .g-container .g-main-nav { margin: 0; }";
        }
        // line 33
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_divider", [], "any", false, false, false, 33) && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_divider_color", [], "any", false, false, false, 33))) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav.jl-nav-divider>:not(.jl-nav-header,.jl-nav-divider)+:not(.jl-nav-header,.jl-nav-divider) {border-top: 1px solid ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_divider_color", [], "any", false, false, false, 33));
            echo ";}";
        }
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_height", [], "any", false, false, false, 34)) {
            // line 35
            echo "    #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-item, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-nav>li>a,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-nav>li>div.g-menu-item-container,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-toggle {min-height: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_height", [], "any", false, false, false, 35));
            echo "}
";
        }
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_style", [], "any", false, false, false, 37)) {
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_color", [], "any", false, false, false, 38)) {
                // line 39
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a {color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_color", [], "any", false, false, false, 39), "html", null, true);
                echo ";}
";
            }
            // line 41
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_fontsize", [], "any", false, false, false, 41)) {
                // line 42
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-item:not(.jl-logo), #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-toggle { font-size: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_fontsize", [], "any", false, false, false, 42), "html", null, true);
                echo "; }
";
            }
            // line 44
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_text_transform", [], "any", false, false, false, 44)) {
                // line 45
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav > li > a{text-transform: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_text_transform", [], "any", false, false, false, 45), "html", null, true);
                echo ";}
";
            }
            // line 47
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_hover_color", [], "any", false, false, false, 47)) {
                // line 48
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li:hover>a, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a.jl-open, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a:focus{color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_hover_color", [], "any", false, false, false, 48), "html", null, true);
                echo ";}
";
            }
            // line 50
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_active_color", [], "any", false, false, false, 50)) {
                // line 51
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li>a:active, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-nav>li.jl-active>a{ color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_active_color", [], "any", false, false, false, 51), "html", null, true);
                echo "; }
";
            }
            // line 53
            if ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_bg", [], "any", false, false, false, 53) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_color", [], "any", false, false, false, 53)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_border_radius", [], "any", false, false, false, 53)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_padding", [], "any", false, false, false, 53))) {
                // line 54
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown { 
        ";
                // line 55
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_bg", [], "any", false, false, false, 55)) {
                    echo "background: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_bg", [], "any", false, false, false, 55), "html", null, true);
                    echo ";";
                }
                // line 56
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_color", [], "any", false, false, false, 56)) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_color", [], "any", false, false, false, 56), "html", null, true);
                    echo ";";
                }
                // line 57
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_border_radius", [], "any", false, false, false, 57)) {
                    echo "border-radius: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_border_radius", [], "any", false, false, false, 57), "html", null, true);
                    echo ";";
                }
                // line 58
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_padding", [], "any", false, false, false, 58)) {
                    echo "padding: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_padding", [], "any", false, false, false, 58), "html", null, true);
                    echo ";";
                }
                // line 59
                echo "    }
";
            }
            // line 61
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_padding", [], "any", false, false, false, 61)) {
                // line 62
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav>li>a { padding: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_padding", [], "any", false, false, false, 62));
                echo "; }
";
            }
            // line 64
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_color", [], "any", false, false, false, 64)) {
                // line 65
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a { ";
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_color", [], "any", false, false, false, 65)) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_color", [], "any", false, false, false, 65));
                    echo ";";
                }
                echo " }
";
            }
            // line 67
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_fontsize", [], "any", false, false, false, 67)) {
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a { font-size: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_fontsize", [], "any", false, false, false, 67), "html", null, true);
                echo ";} ";
            }
            echo " 
";
            // line 68
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_hover_color", [], "any", false, false, false, 68)) {
                // line 69
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a:focus, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li>a:hover{ color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_hover_color", [], "any", false, false, false, 69));
                echo "; }
";
            }
            // line 71
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_active_color", [], "any", false, false, false, 71)) {
                // line 72
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-dropdown-nav>li.jl-active>a{ color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_active_color", [], "any", false, false, false, 72));
                echo ";}
";
            }
            // line 74
            if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_style", [], "any", false, false, false, 74) == "secondary") && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_item_hover_background", [], "any", false, false, false, 74))) {
                // line 75
                echo "  #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav-secondary > li > a:hover, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-nav-secondary > li.jl-active > a {
    background-color: ";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_item_hover_background", [], "any", false, false, false, 76));
                echo ";
  }
";
            }
        } else {
            // line 80
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_color", [], "any", false, false, false, 80)) {
                // line 81
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li>.g-menu-item-container,
#";
                // line 82
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-logo { color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_color", [], "any", false, false, false, 82), "html", null, true);
                echo "; }
";
            }
            // line 84
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_fontsize", [], "any", false, false, false, 84)) {
                // line 85
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel > li > .g-menu-item-container, #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar-toggle { font-size: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_fontsize", [], "any", false, false, false, 85), "html", null, true);
                echo "; }
";
            }
            // line 87
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_text_transform", [], "any", false, false, false, 87)) {
                // line 88
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel > li > .g-menu-item-container {text-transform: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_text_transform", [], "any", false, false, false, 88), "html", null, true);
                echo ";}
";
            }
            // line 90
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_hover_color", [], "any", false, false, false, 90)) {
                // line 91
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li:hover>.g-menu-item-container,
#";
                // line 92
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li:hover>.g-menu-item-container {color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_hover_color", [], "any", false, false, false, 92), "html", null, true);
                echo ";}
";
            }
            // line 94
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_active_color", [], "any", false, false, false, 94)) {
                // line 95
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li.active>.g-menu-item-container { color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_active_color", [], "any", false, false, false, 95), "html", null, true);
                echo "; }
#";
                // line 96
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-toplevel>li.active>.g-separator { color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_active_color", [], "any", false, false, false, 96), "html", null, true);
                echo "; }
";
                // line 97
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_style", [], "any", false, false, false, 97))) {
                    // line 98
                    echo "    #";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo " .g-main-nav .g-toplevel > li:not(.g-menu-item-type-particle):not(.g-menu-item-type-module).active > .g-menu-item-container {color: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_active_color", [], "any", false, false, false, 98), "html", null, true);
                    echo ";}
";
                }
            }
            // line 101
            if ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_bg", [], "any", false, false, false, 101) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_color", [], "any", false, false, false, 101)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_border_radius", [], "any", false, false, false, 101)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_padding", [], "any", false, false, false, 101))) {
                // line 102
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-dropdown { 
";
                // line 103
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_bg", [], "any", false, false, false, 103)) {
                    // line 104
                    echo "    background: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_bg", [], "any", false, false, false, 104), "html", null, true);
                    echo ";
";
                }
                // line 106
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_color", [], "any", false, false, false, 106)) {
                    // line 107
                    echo "    color: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_color", [], "any", false, false, false, 107), "html", null, true);
                    echo ";
";
                }
                // line 109
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_border_radius", [], "any", false, false, false, 109)) {
                    // line 110
                    echo "    border-radius: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_border_radius", [], "any", false, false, false, 110), "html", null, true);
                    echo ";
";
                }
                // line 112
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_padding", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "    padding: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_padding", [], "any", false, false, false, 113), "html", null, true);
                    echo ";
";
                }
                // line 115
                echo " }
";
            }
            // line 117
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_color", [], "any", false, false, false, 117)) {
                // line 118
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { ";
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_color", [], "any", false, false, false, 118)) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_color", [], "any", false, false, false, 118));
                    echo ";";
                }
                echo " }
";
            }
            // line 120
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_fontsize", [], "any", false, false, false, 120)) {
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { font-size: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_fontsize", [], "any", false, false, false, 120), "html", null, true);
                echo ";} ";
            }
            echo " 
";
            // line 121
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_hover_color", [], "any", false, false, false, 121)) {
                // line 122
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container:focus,#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container:hover { color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_hover_color", [], "any", false, false, false, 122));
                echo "; }
";
            }
            // line 124
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_active_color", [], "any", false, false, false, 124)) {
                // line 125
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li:not(.g-menu-item-type-particle):not(.g-menu-item-type-module).active .g-menu-item-container { color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_active_color", [], "any", false, false, false, 125));
                echo ";}
";
            }
            // line 127
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_fontsize", [], "any", false, false, false, 127)) {
                // line 128
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container {font-size: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_navbar_fontsize", [], "any", false, false, false, 128));
                echo ";}
";
            }
            // line 130
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_padding", [], "any", false, false, false, 130)) {
                // line 131
                echo "    #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .g-main-nav .g-sublevel > li > .g-menu-item-container { padding: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_nav_padding", [], "any", false, false, false, 131));
                echo "; }
";
            }
        }
        // line 134
        if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 134) == "custom") &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "ct_container_width", [], "any", false, false, false, 134)))) {
            // line 135
            echo "    #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .tm-header .g-container { max-width: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "ct_container_width", [], "any", false, false, false, 135));
            echo "; }
";
        }
        // line 137
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav_bg_color", [], "any", false, false, false, 137)) {
            // line 138
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-container:not(.jl-navbar-transparent) {
    background-color: ";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav_bg_color", [], "any", false, false, false, 139), "html", null, true);
            echo ";
}
";
        }
        // line 142
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "logo_color", [], "any", false, false, false, 142)) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-logo { color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "logo_color", [], "any", false, false, false, 142), "html", null, true);
            echo ";}";
        }
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_text_color", [], "any", false, false, false, 143)) {
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .tm-header-mobile .jl-logo { color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_text_color", [], "any", false, false, false, 143), "html", null, true);
            echo ";}";
        }
        // line 144
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "transparent_header", [], "any", false, false, false, 144) == "light")) {
            // line 145
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li > a, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-search-toggle, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-toggle {color: rgba(255, 255, 255, 0.8);}#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-search-toggle:hover, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-search-toggle:focus, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-toggle:hover, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-toggle:focus {color: #ffffff;}#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li:hover > a, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li > a:focus, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li > a[aria-expanded=\"true\"]{color: #ffffff;}#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li > a:active, #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ".tm-header .jl-light .jl-navbar-nav > li.jl-active > a{color: #ffffff;}
";
        }
        // line 147
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "search_style", [], "any", false, false, false, 147) == "modal")) {
            // line 148
            echo "#js-search-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-search-large .jl-search-input {background: #f8f8f8;border: none;box-shadow:none}
#js-search-";
            // line 149
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-search-large .jl-search-icon";
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "icon_flip", [], "any", false, false, false, 149)) ? ("-flip~") : (":not(.jl-search-icon-flip)~"));
            echo ".jl-search-input {padding-";
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "icon_flip", [], "any", false, false, false, 149)) ? ("right") : ("left"));
            echo ": 40px;}
";
        }
        // line 151
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_style", [], "any", false, false, false, 151) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subnav_extended", [], "any", false, false, false, 151) == "drop"))) {
            // line 152
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-navbar-dropdown-nav [aria-expanded=true]>.jl-drop-parent-icon {transform: rotate(-90deg)}
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["inline_css"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "document", [], "any", false, false, false, 156), "addInlineStyle", [0 => ($context["inline_css"] ?? null), 1 => 0], "method", false, false, false, 156);
        // line 157
        echo "
";
        // line 158
        ob_start(function () { return ''; });
        // line 159
        echo "<a class=\"jl-navbar-toggle jl-navbar-toggle-animate mobile-toggle\" href=\"#mobile-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" jl-toggle=\"animation: jl-animation-fade\">
";
        // line 160
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "menu_text", [], "any", false, false, false, 160) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_menu_toggle", [], "any", false, false, false, 160) == "right"))) {
            echo "<span class=\"jl-margin-small-right\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "menu_text", [], "any", false, false, false, 160), "html", null, true);
            echo "</span>";
        }
        // line 161
        echo "<span jl-navbar-toggle-icon></span>
";
        // line 162
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "menu_text", [], "any", false, false, false, 162) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_menu_toggle", [], "any", false, false, false, 162) == "left"))) {
            echo "<span class=\"jl-margin-small-left\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "menu_text", [], "any", false, false, false, 162), "html", null, true);
            echo "</span>";
        }
        // line 163
        echo "</a>
";
        $context["menu_toggle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 165
        echo "
";
        // line 166
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "sc_link_target", [], "any", false, false, false, 166)) {
            // line 167
            echo "    ";
            $context["targetAttrib"] = ((" target=\"" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "sc_link_target", [], "any", false, false, false, 167))) . "\"");
            // line 168
            echo "    ";
            $context["targetAttrib"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "sc_link_target", [], "any", false, false, false, 168) == "_blank")) ? ((($context["targetAttrib"] ?? null) . " rel=\"noopener noreferrer\"")) : (($context["targetAttrib"] ?? null)));
        }
        // line 170
        echo "
";
        // line 172
        ob_start(function () { return ''; });
        // line 173
        echo "<ul class=\"jl-flex-inline jl-flex-middle jl-flex-nowrap";
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_icon_gap", [], "any", false, false, false, 173)) {
            echo " jl-grid-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_icon_gap", [], "any", false, false, false, 173));
        }
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_inverse", [], "any", false, false, false, 173)) {
            echo " jl-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_inverse", [], "any", false, false, false, 173), "html", null, true);
        }
        echo "\" jl-grid>
";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_items", [], "any", false, false, false, 174));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 175
            echo "    ";
            $context["title"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "social_title", [], "any", false, false, false, 175))) ? (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "social_title", [], "any", false, false, false, 175))) : (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "social_text", [], "any", false, false, false, 175))));
            // line 176
            echo "    ";
            $context["titleAttrib"] = (( !twig_test_empty(($context["title"] ?? null))) ? (((((" title=\"" . ($context["title"] ?? null)) . "\" aria-label=\"") . ($context["title"] ?? null)) . "\"")) : (""));
            // line 177
            echo "    <li>
        <a class=\"tm-icon";
            // line 178
            echo (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "sc_icon_button", [], "any", false, false, false, 178) && twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "display", [], "any", false, false, false, 178), [0 => "both", 1 => "icons_only"]))) ? (" jl-icon-button") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "social_link", [], "any", false, false, false, 178));
            echo "\"";
            echo ($context["targetAttrib"] ?? null);
            echo ($context["titleAttrib"] ?? null);
            echo ">
            ";
            // line 179
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "display", [], "any", false, false, false, 179), [0 => "both", 1 => "icons_only"])) {
                echo "<span class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "social_icon", [], "any", false, false, false, 179));
                echo "\"></span>";
            }
            // line 180
            echo "            ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "display", [], "any", false, false, false, 180), [0 => "both", 1 => "text_only"])) {
                echo "<span class=\"g-social-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "social_text", [], "any", false, false, false, 180));
                echo "</span>";
            }
            // line 181
            echo "        </a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "</ul>
";
        $context["social_icons"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 186
        echo "
";
        // line 187
        $context["theme_container"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 187) == "custom")) ? ("g-container") : (("jl-container" . ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 187), [0 => "small", 1 => "large", 2 => "xlarge", 3 => "expand"])) ? ((" jl-container-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 187)))) : ("")))));
        // line 188
        echo "
";
        // line 190
        ob_start(function () { return ''; });
        // line 191
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "search_style", [], "any", false, false, false, 191) == "default")) {
            // line 192
            echo "  ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["joomla"] ?? null), "checkVersion", [0 => "4.0"], "method", false, false, false, 192)) {
                // line 193
                echo "    <form class=\"jl-search jl-search-default\" action=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["joomla"] ?? null), "route", [0 => "index.php"], "method", false, false, false, 193), "html", null, true);
                echo "\" method=\"post\">
      <span jl-search-icon class=\"";
                // line 194
                echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "icon_flip", [], "any", false, false, false, 194)) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
      <input class=\"jl-search-input\" type=\"search\" name=\"searchword\" placeholder=\"";
                // line 195
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "placeholder", [], "any", true, true, false, 195)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "placeholder", [], "any", false, false, false, 195), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\">
      <input type=\"hidden\" name=\"task\" value=\"search\" />
      <input type=\"hidden\" name=\"option\" value=\"com_search\" />
      <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 198
                echo $this->extensions['Gantry\Component\Twig\TwigExtension']->intFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "page", [], "any", false, false, false, 198), "itemid", [], "any", false, false, false, 198));
                echo "\" />
    </form>
  ";
            } else {
                // line 201
                echo "    <form class=\"jl-search jl-search-default\" action=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["joomla"] ?? null), "route", [0 => "index.php?option=com_finder&view=search"], "method", false, false, false, 201), "html", null, true);
                echo "\" method=\"get\" role=\"search\">
      <span jl-search-icon class=\"";
                // line 202
                echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "icon_flip", [], "any", false, false, false, 202)) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
      <input id=\"js-search-";
                // line 203
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"jl-search-input\" type=\"search\" name=\"q\" placeholder=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "placeholder", [], "any", true, true, false, 203)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "placeholder", [], "any", false, false, false, 203), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\">
      <input type=\"hidden\" name=\"option\" value=\"com_finder\" />
      <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 205
                echo $this->extensions['Gantry\Component\Twig\TwigExtension']->intFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "page", [], "any", false, false, false, 205), "itemid", [], "any", false, false, false, 205));
                echo "\" />
    </form>  
  ";
            }
        } else {
            // line 209
            echo "<a href=\"#js-search-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"jl-search-toggle\" jl-search-icon jl-toggle title=\"Search Icon\"></a>
<div id=\"js-search-";
            // line 210
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"jl-modal-full jl-modal\" jl-modal>
  <div class=\"jl-modal-dialog jl-flex jl-flex-center jl-flex-middle\" jl-height-viewport>
    <button class=\"jl-modal-close-full jl-close-large\" type=\"button\" jl-close></button>
    ";
            // line 213
            if ( !twig_get_attribute($this->env, $this->source, ($context["joomla"] ?? null), "checkVersion", [0 => "4.0"], "method", false, false, false, 213)) {
                // line 214
                echo "        <form class=\"jl-search jl-search-large\" action=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["joomla"] ?? null), "route", [0 => "index.php"], "method", false, false, false, 214), "html", null, true);
                echo "\" method=\"post\">
        <span jl-search-icon class=\"";
                // line 215
                echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "icon_flip", [], "any", false, false, false, 215)) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
        <input class=\"jl-search-input jl-text-center\" type=\"search\" name=\"searchword\" placeholder=\"";
                // line 216
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "placeholder", [], "any", true, true, false, 216)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "placeholder", [], "any", false, false, false, 216), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\" autofocus>
        <input type=\"hidden\" name=\"task\" value=\"search\" />
        <input type=\"hidden\" name=\"option\" value=\"com_search\" />
        <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 219
                echo $this->extensions['Gantry\Component\Twig\TwigExtension']->intFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "page", [], "any", false, false, false, 219), "itemid", [], "any", false, false, false, 219));
                echo "\" />
        </form>
    ";
            } else {
                // line 222
                echo "        <form class=\"jl-search jl-search-large\" action=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["joomla"] ?? null), "route", [0 => "index.php?option=com_finder&view=search"], "method", false, false, false, 222), "html", null, true);
                echo "\" method=\"get\" role=\"search\">
        <span jl-search-icon class=\"";
                // line 223
                echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "icon_flip", [], "any", false, false, false, 223)) ? ("jl-search-icon-flip") : ("jl-search-icon"));
                echo "\"></span>
        <input id=\"";
                // line 224
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"jl-search-input jl-text-center\" type=\"search\" name=\"q\" placeholder=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "placeholder", [], "any", true, true, false, 224)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "placeholder", [], "any", false, false, false, 224), "Search...")) : ("Search...")), "html", null, true);
                echo "\" value=\"\" autofocus>
        <input type=\"hidden\" name=\"option\" value=\"com_finder\" />
        <input type=\"hidden\" name=\"Itemid\" value=\"";
                // line 226
                echo $this->extensions['Gantry\Component\Twig\TwigExtension']->intFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "page", [], "any", false, false, false, 226), "itemid", [], "any", false, false, false, 226));
                echo "\" />
        </form>  
    ";
            }
            // line 229
            echo "  </div>
</div>
";
        }
        $context["navbar_search"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 233
        echo "
";
        // line 241
        echo "
";
        // line 259
        echo "
";
        // line 270
        echo "
";
        // line 416
        echo "
";
        // line 451
        echo "
";
        // line 460
        echo "
";
        // line 492
        echo "
";
        // line 493
        $macros["macro"] = $this->macros["macro"] = $this;
        // line 494
        echo "
";
        // line 495
        $context["url"] = _twig_default_filter($this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "url", [], "any", false, false, false, 495)), twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "siteUrl", [], "method", false, false, false, 495));
        // line 496
        if ((($context["url"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "siteUrl", [], "method", false, false, false, 496))) {
            $context["rel"] = "rel=\"home\"";
        }
        // line 497
        $context["logo_init"] = (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image", [], "any", false, false, false, 497) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "text", [], "any", false, false, false, 497));
        // line 498
        echo "
";
        // line 499
        ob_start(function () { return ''; });
        // line 500
        echo "    ";
        $context["class"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "class", [], "any", false, false, false, 500)) ? ((("class=\"" . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "class", [], "any", false, false, false, 500)) . "\"")) : (""));
        // line 501
        echo "    ";
        $context["height"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "height", [], "any", false, false, false, 501)) ? ((("style=\"max-height: " . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "height", [], "any", false, false, false, 501)) . "\"")) : ($this->extensions['Gantry\Component\Twig\TwigExtension']->imageSize(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image", [], "any", false, false, false, 501))));
        // line 502
        echo "
    ";
        // line 503
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image", [], "any", false, false, false, 503)) {
            // line 504
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image", [], "any", false, false, false, 504)));
            echo "\" ";
            echo ((array_key_exists("height", $context)) ? (_twig_default_filter(($context["height"] ?? null), "")) : (""));
            echo " alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "text", [], "any", false, false, false, 504), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "svg_support", [], "any", false, false, false, 504)) ? (" jl-svg") : (""));
            echo ">
    ";
        } else {
            // line 506
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "text", [], "any", false, false, false, 506);
            echo " 
    ";
        }
        // line 508
        echo "
";
        $context["logo_render"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 510
        echo "
";
        // line 511
        ob_start(function () { return ''; });
        // line 512
        echo "    ";
        $context["class"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "class", [], "any", false, false, false, 512)) ? ((("class=\"" . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "class", [], "any", false, false, false, 512)) . "\"")) : (""));
        echo "    
    ";
        // line 513
        $context["image_height"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_height", [], "any", false, false, false, 513)) ? ((("style=\"max-height: " . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_height", [], "any", false, false, false, 513)) . "\"")) : ($this->extensions['Gantry\Component\Twig\TwigExtension']->imageSize(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_logo_image", [], "any", false, false, false, 513))));
        // line 514
        echo "
    ";
        // line 515
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_logo_image", [], "any", false, false, false, 515)) {
            // line 516
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_logo_image", [], "any", false, false, false, 516)));
            echo "\" ";
            echo ((array_key_exists("image_height", $context)) ? (_twig_default_filter(($context["image_height"] ?? null), "")) : (""));
            echo " alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "text", [], "any", false, false, false, 516), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "svg_support", [], "any", false, false, false, 516)) ? (" jl-svg") : (""));
            echo ">
    ";
        } else {
            // line 518
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "text", [], "any", false, false, false, 518);
            echo " 
    ";
        }
        // line 520
        echo "
";
        $context["mobile_logo_render"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 522
        echo "
";
        // line 524
        $context["isNavbarpos"] = ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "search_pos", [], "any", false, false, false, 524) == "navbar") || ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_pos", [], "any", false, false, false, 524) == "navbar") && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_items", [], "any", false, false, false, 524))) || ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "html_pos", [], "any", false, false, false, 524) == "navbar") && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "html", [], "any", false, false, false, 524))) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "root", [], "any", false, false, false, 524), "count", [], "method", false, false, false, 524));
        // line 525
        $context["isHeaderpos"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "search_pos", [], "any", false, false, false, 525) == "header") || ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_pos", [], "any", false, false, false, 525) == "header") && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_items", [], "any", false, false, false, 525))) || ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "html_pos", [], "any", false, false, false, 525) == "header") && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "html", [], "any", false, false, false, 525)));
        // line 526
        echo "
";
        // line 527
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "root", [], "any", false, false, false, 527), "count", [], "method", false, false, false, 527)) {
            // line 528
            echo "
<div id=\"";
            // line 529
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"tm-header menu-";
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_style", [], "any", false, false, false, 529)) ? ("extended") : ("simple"));
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 529), [0 => "left", 1 => "center", 2 => "right"])) {
                echo " horizontal-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 529));
            }
            echo " jl-visible@";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "menu_visibility", [], "any", false, false, false, 529));
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "transparent_header", [], "any", false, false, false, 529)) {
                echo " jl-header-overlay";
            }
            echo "\" jl-header>

";
            // line 531
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "sticky", [], "any", false, false, false, 531) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "section", [], "any", false, false, false, 531)))) {
                // line 532
                echo "<div jl-sticky media=\"@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "menu_visibility", [], "any", false, false, false, 532));
                echo "\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "sticky", [], "any", false, false, false, 532) == "stickyonscroll")) ? (" show-on-up animation=\"jl-animation-slide-top\"") : (""));
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "top", [], "any", false, false, false, 532)) {
                    echo " top=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "top", [], "any", false, false, false, 532));
                    echo "\"";
                }
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "offset", [], "any", false, false, false, 532)) {
                    echo " offset=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "offset", [], "any", false, false, false, 532));
                    echo "\"";
                }
                echo " cls-active=\"jl-navbar-sticky\"";
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "transparent_header", [], "any", false, false, false, 532)) {
                    echo " cls-inactive=\"jl-navbar-transparent jl-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "transparent_header", [], "any", false, false, false, 532));
                    echo "\"";
                }
                echo " sel-target=\".jl-navbar-container\">
";
            }
            // line 534
            echo "
<div class=\"jl-navbar-container";
            // line 535
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "transparent_header", [], "any", false, false, false, 535) &&  !twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "sticky", [], "any", false, false, false, 535))) {
                echo " jl-navbar-transparent jl-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "transparent_header", [], "any", false, false, false, 535));
            }
            echo "\">

";
            // line 537
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 537)) {
                // line 538
                echo "    <div class=\"";
                echo twig_escape_filter($this->env, ($context["theme_container"] ?? null), "html", null, true);
                echo "\">
        ";
                // line 539
                echo (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 539) == "custom")) ? ("<div class=\"navbar-wrapper\">") : (""));
                echo "
";
            }
            // line 541
            echo "
    <nav class=\"jl-navbar";
            // line 542
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_style", [], "any", false, false, false, 542)) ? (" jl-main-nav") : (" g-main-nav"));
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_style", [], "any", false, false, false, 542)) {
                echo " jl-navbar=\"boundary: #";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-navbar;";
                ((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_alignment", [], "any", false, false, false, 542))) ? (print (twig_escape_filter($this->env, ((" align: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "dropdown_alignment", [], "any", false, false, false, 542))) . ";"), "html", null, true))) : (print ("")));
                echo ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "hoverExpand", [], "any", true, true, false, 542)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "hoverExpand", [], "any", false, false, false, 542), "true")) : ("true"))) ? ("") : (" mode: click"));
                echo "\"";
            } else {
                echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobileTarget", [], "any", false, false, false, 542)) ? (" data-g-mobile-target") : (""));
                echo " data-g-hover-expand=\"";
                echo ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "hoverExpand", [], "any", true, true, false, 542)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "hoverExpand", [], "any", false, false, false, 542), "true")) : ("true"))) ? ("true") : ("false"));
                echo "\"";
            }
            echo ">

        ";
            // line 544
            if ((($context["logo_init"] ?? null) || (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 544) == "left"))) {
                // line 545
                echo "        <div class=\"jl-navbar-left\">

        ";
                // line 547
                if (($context["logo_init"] ?? null)) {
                    // line 548
                    echo "            <a class=\"jl-navbar-item jl-logo\" href=\"";
                    echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "text", [], "any", false, false, false, 548)) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "text", [], "any", false, false, false, 548)), "html", null, true);
                        echo "\"";
                    }
                    echo " aria-label=\"Back to the homepage\" rel=\"home\" ";
                    echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                    echo ">
                ";
                    // line 549
                    echo twig_escape_filter($this->env, ($context["logo_render"] ?? null), "html", null, true);
                    echo "
            </a>
        ";
                }
                // line 552
                echo "
        ";
                // line 553
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 553) == "left")) {
                    // line 554
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_style", [], "any", false, false, false, 554))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    echo "\">
            ";
                    // line 555
                    echo twig_call_macro($macros["macro"], "macro_displayItems", [twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "root", [], "any", false, false, false, 555), ($context["menu"] ?? null), $context], 555, $context, $this->getSourceContext());
                    echo "
        </ul>
        ";
                }
                // line 558
                echo "
        ";
                // line 559
                if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 559) == "left") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "search_pos", [], "any", false, false, false, 559) == "navbar"))) {
                    // line 560
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 561
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 564
                echo "
        ";
                // line 565
                if ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 565) == "left") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_pos", [], "any", false, false, false, 565) == "navbar")) && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_items", [], "any", false, false, false, 565))) {
                    // line 566
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child custom\">
                ";
                    // line 568
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 572
                echo "
        </div>
        ";
            }
            // line 575
            echo "
        ";
            // line 576
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 576) == "center")) {
                // line 577
                echo "
        <div class=\"jl-navbar-center\">

        ";
                // line 580
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 580) == "center")) {
                    // line 581
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_style", [], "any", false, false, false, 581))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    echo "\">
            ";
                    // line 582
                    echo twig_call_macro($macros["macro"], "macro_displayItems", [twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "root", [], "any", false, false, false, 582), ($context["menu"] ?? null), $context], 582, $context, $this->getSourceContext());
                    echo "
        </ul>
        ";
                }
                // line 585
                echo "
        ";
                // line 586
                if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 586) == "center") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "search_pos", [], "any", false, false, false, 586) == "navbar"))) {
                    // line 587
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 588
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 591
                echo "
        ";
                // line 592
                if ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 592) == "center") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_pos", [], "any", false, false, false, 592) == "navbar")) && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_items", [], "any", false, false, false, 592))) {
                    // line 593
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 595
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 599
                echo "
        </div>
        ";
            }
            // line 602
            echo "
        ";
            // line 603
            if ((($context["isHeaderpos"] ?? null) || (($context["isNavbarpos"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 603) == "right")))) {
                // line 604
                echo "        <div class=\"jl-navbar-right\">

        ";
                // line 606
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 606) == "right")) {
                    // line 607
                    echo "        <ul class=\"";
                    echo ((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "navbar_style", [], "any", false, false, false, 607))) ? ("jl-navbar-nav") : ("g-toplevel"));
                    echo "\">
            ";
                    // line 608
                    echo twig_call_macro($macros["macro"], "macro_displayItems", [twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "root", [], "any", false, false, false, 608), ($context["menu"] ?? null), $context], 608, $context, $this->getSourceContext());
                    echo "
        </ul>
        ";
                }
                // line 611
                echo "
        ";
                // line 612
                if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 612) == "right") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "search_pos", [], "any", false, false, false, 612) == "navbar"))) {
                    // line 613
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 614
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 617
                echo "
        ";
                // line 618
                if ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "layout", [], "any", false, false, false, 618) == "right") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_pos", [], "any", false, false, false, 618) == "navbar")) && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_items", [], "any", false, false, false, 618))) {
                    // line 619
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 621
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 625
                echo "
        ";
                // line 626
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "search_pos", [], "any", false, false, false, 626) == "header")) {
                    // line 627
                    echo "        <div class=\"jl-navbar-item\">
            ";
                    // line 628
                    echo twig_escape_filter($this->env, ($context["navbar_search"] ?? null), "html", null, true);
                    echo "
        </div>
        ";
                }
                // line 631
                echo "
        ";
                // line 632
                if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_pos", [], "any", false, false, false, 632) == "header") && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_items", [], "any", false, false, false, 632))) {
                    // line 633
                    echo "        <div class=\"jl-navbar-item\">
            <div class=\"jl-margin-remove-last-child\">
                ";
                    // line 635
                    echo twig_escape_filter($this->env, ($context["social_icons"] ?? null), "html", null, true);
                    echo "
            </div>
        </div>
        ";
                }
                // line 639
                echo "
        </div>
        ";
            }
            // line 642
            echo "
    </nav>

";
            // line 645
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 645)) {
                // line 646
                echo "        ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 646) == "custom")) ? ("</div>") : (""));
                echo "
    </div>
";
            }
            // line 649
            echo "</div>

";
            // line 651
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "sticky", [], "any", false, false, false, 651) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "section", [], "any", false, false, false, 651)))) {
                // line 652
                echo "</div>
";
            }
            // line 654
            echo "
</div>
";
        }
        // line 657
        echo "
";
        // line 659
        echo "
<div class=\"";
        // line 660
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 660)) {
            echo "tm-header-mobile ";
        }
        echo "jl-hidden@";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "menu_visibility", [], "any", false, false, false, 660));
        echo "\">

";
        // line 662
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "m_sticky", [], "any", false, false, false, 662)) {
            // line 663
            echo "<div jl-sticky";
            echo (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "m_sticky", [], "any", false, false, false, 663) == "stickyonscroll")) ? (" show-on-up animation=\"jl-animation-slide-top\"") : (""));
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "ms_top", [], "any", false, false, false, 663)) {
                echo " top=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "ms_top", [], "any", false, false, false, 663));
                echo "\"";
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "ms_offset", [], "any", false, false, false, 663)) {
                echo " offset=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "ms_offset", [], "any", false, false, false, 663));
                echo "\"";
            }
            echo " cls-active=\"jl-navbar-sticky\" sel-target=\".jl-navbar-container\">
";
        }
        // line 665
        echo "
<div class=\"jl-navbar-container\">

    ";
        // line 668
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 668)) {
            // line 669
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, ($context["theme_container"] ?? null), "html", null, true);
            echo "\">
    ";
        }
        // line 671
        echo "
        <nav class=\"jl-navbar\" jl-navbar=\"container: .tm-header-mobile\">

            ";
        // line 674
        if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_logo", [], "any", false, false, false, 674) == "left") || (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_menu_toggle", [], "any", false, false, false, 674) == "left"))) {
            // line 675
            echo "
                <div class=\"jl-navbar-left\">

                    ";
            // line 678
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_logo", [], "any", false, false, false, 678) == "left")) {
                // line 679
                echo "                    <a class=\"jl-navbar-item jl-logo\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "text", [], "any", false, false, false, 679)) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "text", [], "any", false, false, false, 679)), "html", null, true);
                    echo "\"";
                }
                echo " aria-label=\"Back to the homepage\" rel=\"home\" ";
                echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                echo ">
                        ";
                // line 680
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_logo_image", [], "any", false, false, false, 680)) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
                echo "
                    </a>
                    ";
            }
            // line 683
            echo "
                    ";
            // line 684
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_menu_toggle", [], "any", false, false, false, 684) == "left")) {
                // line 685
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["menu_toggle"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 687
            echo "
                </div>
            ";
        }
        // line 690
        echo "
            ";
        // line 691
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_logo", [], "any", false, false, false, 691) == "center")) {
            // line 692
            echo "                <div class=\"jl-navbar-center\">
                    <a class=\"jl-navbar-item jl-logo\" href=\"";
            // line 693
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "text", [], "any", false, false, false, 693)) {
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "text", [], "any", false, false, false, 693)), "html", null, true);
                echo "\"";
            }
            echo " aria-label=\"Back to the homepage\" rel=\"home\" ";
            echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
            echo ">
                        ";
            // line 694
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_logo_image", [], "any", false, false, false, 694)) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
        }
        // line 698
        echo "
            ";
        // line 699
        if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_logo", [], "any", false, false, false, 699) == "right") || (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_menu_toggle", [], "any", false, false, false, 699) == "right"))) {
            // line 700
            echo "                <div class=\"jl-navbar-right\">
                    ";
            // line 701
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_logo", [], "any", false, false, false, 701) == "right")) {
                // line 702
                echo "                    <a class=\"jl-navbar-item jl-logo\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "text", [], "any", false, false, false, 702)) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "text", [], "any", false, false, false, 702)), "html", null, true);
                    echo "\"";
                }
                echo " aria-label=\"Back to the homepage\" rel=\"home\" ";
                echo ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : (""));
                echo ">
                        ";
                // line 703
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_logo_image", [], "any", false, false, false, 703)) ? (($context["mobile_logo_render"] ?? null)) : (($context["logo_render"] ?? null))), "html", null, true);
                echo "
                    </a>
                    ";
            }
            // line 706
            echo "
                    ";
            // line 707
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "mobile_menu_toggle", [], "any", false, false, false, 707) == "right")) {
                // line 708
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["menu_toggle"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 710
            echo "                </div>
            ";
        }
        // line 712
        echo "
        </nav>

    ";
        // line 715
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 715)) {
            // line 716
            echo "        </div>
    ";
        }
        // line 718
        echo "
</div>

";
        // line 721
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "menu_animation", [], "any", false, false, false, 721) == "dropdown")) {
            // line 722
            $__internal_compile_0 = null;
            try {
                $__internal_compile_0 =                 $this->loadTemplate("@particles/jlnavcanvas.html.twig", "@particles/jlnavbar.html.twig", 722);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_0) {
                $__internal_compile_0->display($context);
            }
        }
        // line 724
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "m_sticky", [], "any", false, false, false, 724)) {
            // line 725
            echo "</div>
";
        }
        // line 727
        echo "
";
        // line 728
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "menu_animation", [], "any", false, false, false, 728) != "dropdown")) {
            // line 729
            $__internal_compile_1 = null;
            try {
                $__internal_compile_1 =                 $this->loadTemplate("@particles/jlnavcanvas.html.twig", "@particles/jlnavbar.html.twig", 729);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_1) {
                $__internal_compile_1->display($context);
            }
        }
        // line 731
        echo "
</div>
";
    }

    // line 234
    public function macro_getCustomWidth($__item__ = null, $__menu__ = null, $__mode__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "mode" => $__mode__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 235
            if (((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "width", [], "any", true, true, false, 235)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "width", [], "any", false, false, false, 235), "auto")) : ("auto")) != "auto") &&  !((($context["dropdown_type"] ?? null) == "fullwidth") && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 235) > ($context["start_level"] ?? null))))) {
                // line 236
                if ((($context["mode"] ?? null) == "item")) {
                    echo " style=\"position: relative;\"";
                } elseif ((                // line 237
($context["mode"] ?? null) == "submenu")) {
                    echo " style=\"width:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "width", [], "any", false, false, false, 237), "html", null, true);
                    echo ";\" data-g-item-width=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "width", [], "any", false, false, false, 237), "html", null, true);
                    echo "\"";
                }
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 242
    public function macro_displayParticle($__item__ = null, $__context__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 243
            echo "    ";
            try {                // line 244
                echo "    ";
                $context["in_particle"] = ((((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "in_particle", [], "any", true, true, false, 244) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "in_particle", [], "any", false, false, false, 244)))) ? (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "in_particle", [], "any", false, false, false, 244)) : (0)) + 1);
                // line 245
                echo "    ";
                if ((($context["in_particle"] ?? null) > 5)) {
                    // line 246
                    echo "        ";
                    throw new \RuntimeException("Particle loop detected"                    ,                     500                    );
                    // line 247
                    echo "    ";
                }
                // line 248
                echo "
    ";
                // line 249
                $context["context"] = twig_array_merge(($context["context"] ?? null), ["particle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "options", [], "any", false, false, false, 249), "particle", [], "any", false, false, false, 249), "in_particle" => ($context["in_particle"] ?? null)]);
                // line 250
                echo "    ";
                $context["classes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "options", [], "any", false, false, false, 250), "block", [], "any", false, false, false, 250), "class", [], "any", false, false, false, 250);
                // line 251
                echo "    <div class=\"menu-item-particle";
                ((($context["classes"] ?? null)) ? (print (twig_escape_filter($this->env, (" " . ($context["classes"] ?? null)), "html", null, true))) : (print ("")));
                echo "\">
        ";
                // line 252
                $__internal_compile_2 = null;
                try {
                    $__internal_compile_2 =                     $this->loadTemplate([0 => (("particles/" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "particle", [], "any", false, false, false, 252)) . ".html.twig"), 1 => (("@particles/" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "particle", [], "any", false, false, false, 252)) . ".html.twig")], "@particles/jlnavbar.html.twig", 252);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_compile_2) {
                    $__internal_compile_2->display(twig_to_array(                    // line 253
($context["context"] ?? null)));
                }
                // line 254
                echo "    </div>
    ";
            } catch (\Exception $e) {
                if ($context['gantry']->debug()) throw $e;
                if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
                $context['e'] = $e;
                // line 256
                echo "        <div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "getMessage", [], "any", false, false, false, 256), "html", null, true);
                echo "</div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 260
    public function macro_displayTitle($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 261
            echo "    ";
            if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon_only", [], "any", false, false, false, 261) ||  !(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 261) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 261)))) {
                // line 262
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "subtitle", [], "any", false, false, false, 262)) {
                    // line 263
                    echo "        <div>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 263), "html", null, true);
                    echo "
        <div class=\"jl-navbar-subtitle\">";
                    // line 264
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "subtitle", [], "any", false, false, false, 264), "html", null, true);
                    echo "</div></div>
        ";
                } else {
                    // line 266
                    echo "        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 266), "html", null, true);
                    echo "
        ";
                }
                // line 268
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 271
    public function macro_displayItem($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 272
            echo "    ";
            $macros["self"] = $this;
            // line 273
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 273) == "particle") &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "options", [], "any", false, false, false, 273), "particle", [], "any", false, false, false, 273), "enabled", [], "any", false, false, false, 273))) {
                // line 274
                echo "        ";
                $context["enabled"] = 0;
                // line 275
                echo "    ";
            }
            // line 276
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "visible", [], "any", false, false, false, 276) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "enabled", [], "any", false, false, false, 276)) && ((array_key_exists("enabled", $context)) ? (_twig_default_filter(($context["enabled"] ?? null), 1)) : (1)))) {
                // line 277
                echo "        ";
                $context["title"] = (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon_only", [], "any", false, false, false, 277) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link_title", [], "any", false, false, false, 277))) ? (((" title=\"" . twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link_title", [], "any", true, true, false, 277)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link_title", [], "any", false, false, false, 277), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 277))) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 277))))) . "\"")) : (""));
                // line 278
                echo "        ";
                $context["label"] = (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon_only", [], "any", false, false, false, 278) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 278) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 278)))) ? (((" aria-label=\"" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 278))) . "\"")) : (""));
                // line 279
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 279), "navbar_style", [], "any", false, false, false, 279)) {
                    // line 280
                    echo "        ";
                    $context["active"] = ((twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method", false, false, false, 280)) ? (" jl-active") : (""));
                    // line 281
                    echo "        ";
                } else {
                    // line 282
                    echo "        ";
                    $context["active"] = ((twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method", false, false, false, 282)) ? (" active") : (""));
                    // line 283
                    echo "        ";
                }
                // line 284
                echo "        ";
                $context["dropdown"] = (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 284) == ($context["start_level"] ?? null))) ? ((" g-" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getDropdown", [], "method", false, false, false, 284))) : (""));
                // line 285
                echo "        ";
                $context["parrentIcon"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 285), "parrentIcon", [], "any", false, false, false, 285);
                // line 286
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 286), "navbar_style", [], "any", false, false, false, 286)) {
                    // line 287
                    echo "        ";
                    $context["parent"] = (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "method", false, false, false, 287) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 287))) ? (" jl-parent") : (""));
                    // line 288
                    echo "        ";
                } else {
                    // line 289
                    echo "        ";
                    $context["parent"] = (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "method", false, false, false, 289) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 289))) ? (" g-parent") : (""));
                    // line 290
                    echo "        ";
                }
                echo "        
        
        ";
                // line 292
                $context["target"] = ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", [], "any", false, false, false, 292) != "_self") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 292), "forceTarget", [], "any", false, false, false, 292))) ? (((" target=\"" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", [], "any", false, false, false, 292))) . "\"")) : (""));
                // line 293
                echo "        ";
                $context["rel"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "rel", [], "any", false, false, false, 293);
                // line 294
                echo "
        ";
                // line 295
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", [], "any", false, false, false, 295) == "_blank")) {
                    // line 296
                    echo "            ";
                    if (!twig_in_filter("noopener", ($context["rel"] ?? null))) {
                        // line 297
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 298
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noopener");
                        // line 299
                        echo "            ";
                    }
                    // line 300
                    echo "            ";
                    if (!twig_in_filter("noreferrer", ($context["rel"] ?? null))) {
                        // line 301
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 302
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noreferrer");
                        // line 303
                        echo "            ";
                    }
                    // line 304
                    echo "        ";
                }
                // line 305
                echo "
        ";
                // line 306
                $context["listAttributes"] = $this->extensions['Gantry\Component\Twig\TwigExtension']->attributeArrayFilter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, false, 306));
                // line 307
                echo "        ";
                $context["linkAttributes"] = "";
                // line 308
                echo "
        ";
                // line 309
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link_attributes", [], "any", false, false, false, 309)) {
                    // line 310
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link_attributes", [], "any", false, false, false, 310));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 311
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attribute"]);
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 312
                            echo "                    ";
                            if (($context["key"] == "rel")) {
                                // line 313
                                echo "                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $context["value"], " "));
                                foreach ($context['_seq'] as $context["_key"] => $context["hVal"]) {
                                    // line 314
                                    echo "                            ";
                                    if (!twig_in_filter($context["hVal"], ($context["rel"] ?? null))) {
                                        // line 315
                                        echo "                                ";
                                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                                        // line 316
                                        echo "                                ";
                                        $context["rel"] = (($context["rel"] ?? null) . $context["hVal"]);
                                        // line 317
                                        echo "                            ";
                                    }
                                    // line 318
                                    echo "                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hVal'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 319
                                echo "                    ";
                            } else {
                                // line 320
                                echo "                        ";
                                $context["linkAttributes"] = (((((($context["linkAttributes"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                                // line 321
                                echo "                    ";
                            }
                            // line 322
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 323
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 324
                    echo "        ";
                }
                // line 325
                echo "
        ";
                // line 327
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", [], "any", false, false, false, 327) == "_nonav")) {
                    // line 328
                    echo "            ";
                    $context["target"] = "target=\"_blank\"";
                    // line 329
                    echo "            ";
                    $context["linkAttributes"] = (($context["linkAttributes"] ?? null) . " onclick=\"window.open(this.href, 'targetWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes'); return false;\"");
                    // line 330
                    echo "        ";
                }
                // line 331
                echo "        ";
                $context["item_accordion"] = ((((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 331) == "separator") || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 331) == "heading")) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 331) > 1)) && ($context["parent"] ?? null))) ? (" js-accordion") : (""));
                // line 332
                echo "        ";
                $context["rel"] = ((($context["rel"] ?? null)) ? (((" rel=\"" . twig_escape_filter($this->env, ($context["rel"] ?? null), "html_attr")) . "\"")) : (""));
                // line 333
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 333), "navbar_style", [], "any", false, false, false, 333)) {
                    // line 334
                    echo "        <li class=\"item-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 334), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 334)) {
                        echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
                    }
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "class", [], "any", false, false, false, 334)) {
                        echo " ";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "class", [], "any", true, true, false, 334)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "class", [], "any", false, false, false, 334), "")) : ("")), "html", null, true);
                    }
                    if ( !($context["parent"] ?? null)) {
                        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 334) == "separator") && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 334) != 1))) {
                            echo " jl-nav-divider";
                        } elseif (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 334) == "heading") && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 334) != 1))) {
                            echo " jl-nav-header";
                        }
                    }
                    if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 334) > 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 334), "subnav_extended", [], "any", false, false, false, 334) == "accordion"))) {
                        echo " ";
                        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 334)) {
                            echo twig_escape_filter($this->env, ($context["item_accordion"] ?? null), "html", null, true);
                        }
                        echo ((((($context["parent"] ?? null) && ($context["item_accordion"] ?? null)) && ($context["active"] ?? null))) ? (" jl-open") : (""));
                    }
                    echo "\"";
                    // line 335
                    echo twig_call_macro($macros["self"], "macro_getCustomWidth", [($context["item"] ?? null), ($context["menu"] ?? null), "item", ($context["dropdown"] ?? null)], 335, $context, $this->getSourceContext());
                    // line 336
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, true, false, 336), "renderTitles", [], "any", true, true, false, 336)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, true, false, 336), "renderTitles", [], "any", false, false, false, 336), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 336), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">
                ";
                    // line 337
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, false, 337)) {
                        // line 338
                        echo "                    <a";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "anchor_class", [], "any", false, false, false, 338)) {
                            echo " class=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "anchor_class", [], "any", false, false, false, 338), "html", null, true);
                            echo "\"";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, false, 338), "html", null, true);
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hash", [], "any", false, false, false, 338), "html", null, true);
                        echo "\"";
                        echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hash", [], "any", false, false, false, 338)) {
                            echo " jl-scroll";
                        }
                        echo ">
                        ";
                        // line 339
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 339)) {
                            // line 340
                            echo "                            <img src=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 340)), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 340), "html", null, true);
                            echo "\" />
                        ";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 341
($context["item"] ?? null), "icon", [], "any", false, false, false, 341)) {
                            // line 342
                            echo "                            <i class=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 342), "html", null, true);
                            echo "\" aria-hidden=\"true\"></i>
                        ";
                        }
                        // line 344
                        echo "                        ";
                        echo twig_call_macro($macros["self"], "macro_displayTitle", [($context["item"] ?? null)], 344, $context, $this->getSourceContext());
                        echo "
                        ";
                        // line 345
                        if (((($context["parent"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 345)) && ($context["parrentIcon"] ?? null))) {
                            // line 346
                            echo "<span jl-drop-parent-icon></span>";
                        }
                        // line 348
                        echo "                    </a>
                ";
                    } else {
                        // line 350
                        echo "                    ";
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 350)) || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 350) == 1))) {
                            // line 351
                            echo "                        <a href=\"#\" class=\"menu__";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 351), "html", null, true);
                            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "anchor_class", [], "any", false, false, false, 351)) {
                                echo " ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "anchor_class", [], "any", false, false, false, 351), "html", null, true);
                            }
                            echo "\"";
                            echo (((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                            if ((( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 351)) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 351) == 1)) && ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 351) == "heading") || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 351) == "separator")))) {
                                echo " aria-haspopup=\"true\" aria-expanded=\"false\" tabindex=\"0\"";
                            }
                            echo ">
                    ";
                        }
                        // line 353
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 353) == "particle")) {
                            // line 354
                            echo "                        ";
                            echo twig_call_macro($macros["self"], "macro_displayParticle", [($context["item"] ?? null), ($context["context"] ?? null)], 354, $context, $this->getSourceContext());
                            echo "
                    ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 355
($context["item"] ?? null), "type", [], "any", false, false, false, 355) == "heading")) {
                            // line 356
                            echo "                        ";
                            echo twig_call_macro($macros["self"], "macro_displayTitle", [($context["item"] ?? null)], 356, $context, $this->getSourceContext());
                            echo "
                    ";
                        } else {
                            // line 358
                            echo "                    
                    ";
                            // line 359
                            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 359) == 1) || ($context["parent"] ?? null))) {
                                // line 360
                                echo twig_call_macro($macros["self"], "macro_displayTitle", [($context["item"] ?? null)], 360, $context, $this->getSourceContext());
                            }
                            // line 362
                            echo "
                    ";
                        }
                        // line 364
                        echo "
                    ";
                        // line 365
                        if (((($context["parent"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 365)) && ($context["parrentIcon"] ?? null))) {
                            // line 366
                            echo "<span jl-drop-parent-icon></span>";
                        }
                        // line 368
                        echo "
                    ";
                        // line 369
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 369)) || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 369) == 1))) {
                            // line 370
                            echo "                        </a>
                    ";
                        }
                        // line 372
                        echo " 
                ";
                    }
                    // line 374
                    echo "
        ";
                } else {
                    // line 376
                    echo "        <li class=\"g-menu-item g-menu-item-type-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 376), "html", null, true);
                    echo " g-menu-item-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 376), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 376)) {
                        echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
                    }
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["dropdown"] ?? null), "html", null, true);
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, false, 376) && ($context["parent"] ?? null))) {
                        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 376)) {
                            echo "g-menu-item-link-parent";
                        }
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "class", [], "any", true, true, false, 376)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "class", [], "any", false, false, false, 376), "")) : ("")), "html", null, true);
                    echo "\"";
                    // line 377
                    echo twig_call_macro($macros["self"], "macro_getCustomWidth", [($context["item"] ?? null), ($context["menu"] ?? null), "item", ($context["dropdown"] ?? null)], 377, $context, $this->getSourceContext());
                    // line 378
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, true, false, 378), "renderTitles", [], "any", true, true, false, 378)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, true, false, 378), "renderTitles", [], "any", false, false, false, 378), 0)) : (0))) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 378), "html", null, true);
                        echo "\"";
                    }
                    echo ($context["listAttributes"] ?? null);
                    echo ">
            ";
                    // line 379
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, false, 379)) {
                        // line 380
                        echo "                <a class=\"g-menu-item-container";
                        ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "anchor_class", [], "any", false, false, false, 380)) ? (print (twig_escape_filter($this->env, (" " . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "anchor_class", [], "any", false, false, false, 380)), "html", null, true))) : (print ("")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, false, 380), "html", null, true);
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hash", [], "any", false, false, false, 380), "html", null, true);
                        echo "\"";
                        echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                        echo ">
            ";
                    } else {
                        // line 382
                        echo "                <div class=\"g-menu-item-container";
                        ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "anchor_class", [], "any", false, false, false, 382)) ? (print (twig_escape_filter($this->env, (" " . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "anchor_class", [], "any", false, false, false, 382)), "html", null, true))) : (print ("")));
                        echo "\" data-g-menuparent=\"\"";
                        echo ($context["label"] ?? null);
                        echo ">";
                    }
                    // line 383
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 383)) {
                        // line 384
                        echo "                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 384)), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 384), "html", null, true);
                        echo "\" />
                ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 385
($context["item"] ?? null), "icon", [], "any", false, false, false, 385)) {
                        // line 386
                        echo "                    <i class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 386), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>
                ";
                    }
                    // line 388
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, false, 388)) {
                        // line 389
                        echo "                    <span class=\"g-menu-item-content\">
                        ";
                        // line 390
                        echo twig_call_macro($macros["self"], "macro_displayTitle", [($context["item"] ?? null)], 390, $context, $this->getSourceContext());
                        echo "
                    </span>
                    ";
                        // line 392
                        if ((($context["parent"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 392))) {
                            // line 393
                            echo "<span class=\"g-menu-parent-indicator\" data-g-menuparent=\"\"></span>";
                        }
                        // line 395
                        echo "                ";
                    } else {
                        // line 396
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 396) == "particle")) {
                            // line 397
                            echo "                        ";
                            echo twig_call_macro($macros["self"], "macro_displayParticle", [($context["item"] ?? null), ($context["context"] ?? null)], 397, $context, $this->getSourceContext());
                            echo "
                    ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 398
($context["item"] ?? null), "type", [], "any", false, false, false, 398) == "heading")) {
                            // line 399
                            echo "                        <span class=\"g-nav-header g-menu-item-content\"";
                            echo ($context["title"] ?? null);
                            echo ">";
                            echo twig_call_macro($macros["self"], "macro_displayTitle", [($context["item"] ?? null)], 399, $context, $this->getSourceContext());
                            echo "</span>
                    ";
                        } else {
                            // line 401
                            echo "                        <span class=\"g-separator g-menu-item-content\"";
                            echo ($context["title"] ?? null);
                            echo ">";
                            echo twig_call_macro($macros["self"], "macro_displayTitle", [($context["item"] ?? null)], 401, $context, $this->getSourceContext());
                            echo "</span>
                    ";
                        }
                        // line 403
                        echo "                    ";
                        if ((($context["parent"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 403))) {
                            // line 404
                            echo "<span class=\"g-menu-parent-indicator\"></span>";
                        }
                        // line 406
                        echo "                ";
                    }
                    // line 407
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, false, 407)) {
                        echo "</a>
            ";
                    } else {
                        // line 408
                        echo "</div>";
                    }
                    // line 409
                    echo "            ";
                }
                // line 410
                echo "            ";
                if (($context["parent"] ?? null)) {
                    // line 411
                    echo twig_call_macro($macros["self"], "macro_displaySubmenu", [($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null)], 411, $context, $this->getSourceContext());
                }
                // line 413
                echo "        </li>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 417
    public function macro_displayContainers($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 418
            echo "    ";
            $macros["self"] = $this;
            // line 419
            echo "    ";
            $context["groups"] = (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getDropdown", [], "method", false, false, false, 419) == "standard")) ? ([0 => ($context["item"] ?? null)]) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 419)));
            // line 420
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 420), "navbar_style", [], "any", false, false, false, 420)) {
                // line 421
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                    // line 422
                    echo "        ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 422)) > 1)) {
                        echo "<div>";
                    }
                    // line 423
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 423) >= 2)) {
                        // line 424
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 424), "subnav_extended", [], "any", false, false, false, 424) == "drop")) {
                            // line 425
                            echo "            ";
                            $context["navDropbar_animation"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 425), "navbar_dropdown_animation", [], "any", false, false, false, 425)) ? (((" animation: " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 425), "navbar_dropdown_animation", [], "any", false, false, false, 425)) . "; animate-out: true;")) : (""));
                            // line 426
                            echo "                <div class=\"jl-dropdown jl-drop\" jl-drop=\"pos: right-top;";
                            echo twig_escape_filter($this->env, ($context["navDropbar_animation"] ?? null), "html", null, true);
                            echo " offset: 25\">
            ";
                        }
                        // line 428
                        echo "                <ul class=\"jl-nav-sub\">
            ";
                    } else {
                        // line 430
                        echo "                <ul class=\"jl-nav";
                        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 430), "subnav_extended", [], "any", false, false, false, 430) == "drop")) ? (" jl-dropdown-nav") : (""));
                        echo " jl-nav-";
                        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 430), "dropdown_nav_style", [], "any", false, false, false, 430)) ? ("secondary") : ("default"));
                        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 430), "dropdown_nav_divider", [], "any", false, false, false, 430)) ? (" jl-nav-divider") : (""));
                        echo " jl-navbar-dropdown-nav\"";
                        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 430) > 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 430), "subnav_extended", [], "any", false, false, false, 430) == "accordion"))) {
                            echo " jl-nav=\"targets: > .js-accordion\"";
                        }
                        echo ">
            ";
                    }
                    // line 432
                    echo "                ";
                    echo twig_call_macro($macros["self"], "macro_displayItems", [$context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null)], 432, $context, $this->getSourceContext());
                    echo "
            </ul>
            ";
                    // line 434
                    if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 434) >= 2) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 434), "subnav_extended", [], "any", false, false, false, 434) == "drop"))) {
                        // line 435
                        echo "                </div>
            ";
                    }
                    // line 437
                    echo "        ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 437)) > 1)) {
                        echo "</div>";
                    }
                    // line 438
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "    
    ";
            } else {
                // line 440
                echo "        <div class=\"g-grid\">
        ";
                // line 441
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
                foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                    // line 442
                    echo "            <div class=\"g-block ";
                    echo twig_escape_filter($this->env, $this->env->getFilter('toGrid')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "columnWidth", [0 => $context["column"]], "method", false, false, false, 442)), "html", null, true);
                    echo "\">
                <ul class=\"g-sublevel\">
                    ";
                    // line 444
                    echo twig_call_macro($macros["self"], "macro_displayItems", [$context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null)], 444, $context, $this->getSourceContext());
                    echo "
                </ul>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 448
                echo "        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 452
    public function macro_displayItems($__items__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 453
            echo "    ";
            $macros["self"] = $this;
            // line 454
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 455
                echo "        ";
                $context["start_level"] = (($context["start_level"]) ?? ((($context["root_level"]) ?? (twig_get_attribute($this->env, $this->source, $context["item"], "level", [], "any", false, false, false, 455)))));
                // line 456
                echo "        ";
                $context["dropdown"] = (($context["dropdown_type"]) ?? (twig_get_attribute($this->env, $this->source, $context["item"], "dropdown", [], "any", false, false, false, 456)));
                // line 457
                echo "        ";
                echo twig_call_macro($macros["self"], "macro_displayItem", [$context["item"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown"] ?? null), ($context["start_level"] ?? null)], 457, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 461
    public function macro_displaySubmenu($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, $__start_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "start_level" => $__start_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 462
            echo "    ";
            $macros["self"] = $this;
            // line 463
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 463)) {
                // line 464
                echo "        ";
                $context["animation"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "gantry", [], "any", false, true, false, 464), "config", [], "any", false, true, false, 464), "get", [0 => "styles.menu.animation"], "method", true, true, false, 464)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "gantry", [], "any", false, true, false, 464), "config", [], "any", false, true, false, 464), "get", [0 => "styles.menu.animation"], "method", false, false, false, 464), "g-fade")) : ("g-fade"));
                // line 465
                echo "        ";
                $context["dropdown_offset"] = ((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 465), "dropdown_offset", [], "any", false, false, false, 465))) ? ((("offset: " . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 465), "dropdown_offset", [], "any", false, false, false, 465))) . ";")) : (""));
                // line 466
                echo "        ";
                $context["dropdown_alignment"] = (((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 466), "dropdown_alignment", [], "any", false, false, false, 466)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 466), "dropdown_stretch", [], "any", false, false, false, 466))) ? ((("pos: bottom-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 466), "dropdown_alignment", [], "any", false, false, false, 466))) . ";")) : (""));
                // line 467
                echo "        ";
                $context["navbar_animation"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 467), "navbar_dropdown_animation", [], "any", false, false, false, 467)) ? ((("animation: " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 467), "navbar_dropdown_animation", [], "any", false, false, false, 467)) . "; animate-out: true;")) : (""));
                // line 468
                echo "        ";
                $context["dropdown_stretch"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 468), "dropdown_stretch", [], "any", false, false, false, 468)) ? ("stretch: x; flip: false;") : (""));
                // line 469
                echo "        ";
                if (((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 469)) == 1) && ( !($context["dropdown_type"] ?? null) == "fullwidth")) || (($context["dropdown_type"] ?? null) == "standard")) || ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "width", [], "any", true, true, false, 469)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "width", [], "any", false, false, false, 469), "auto")) : ("auto")) != "auto") && (($context["dropdown_type"] ?? null) == "fullwidth")))) {
                    // line 470
                    echo "            ";
                    $context["dropdown_dir"] = ("g-dropdown-" . ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_dir", [], "any", true, true, false, 470)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_dir", [], "any", false, false, false, 470), "right")) : ("right")));
                    // line 471
                    echo "        ";
                }
                // line 472
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 472), "navbar_style", [], "any", false, false, false, 472)) {
                    // line 473
                    echo "        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 473) >= 2)) {
                        // line 474
                        echo "            ";
                        echo twig_call_macro($macros["self"], "macro_displayContainers", [($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null)], 474, $context, $this->getSourceContext());
                        echo "
        ";
                    } else {
                        // line 476
                        echo "        <div class=\"jl-navbar-dropdown";
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 476)) > 1)) {
                            echo " jl-navbar-dropdown-width-";
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 476)), "html", null, true);
                        }
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 476), "dropdown_navbar_text_transform", [], "any", false, false, false, 476)) {
                            echo " jl-text-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 476), "dropdown_navbar_text_transform", [], "any", false, false, false, 476));
                        }
                        echo "\"";
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 476)) > 3)) {
                            echo " jl-drop=\"target: #";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "id", [], "any", false, false, false, 476), "html", null, true);
                            echo " .jl-navbar;flip: false;";
                            echo ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, true, false, 476), "hoverExpand", [], "any", true, true, false, 476)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, true, false, 476), "hoverExpand", [], "any", false, false, false, 476), "true")) : ("true"))) ? ("") : (" mode: click;"));
                            echo twig_escape_filter($this->env, ($context["dropdown_alignment"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["navbar_animation"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_stretch"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_offset"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 476)) <= 3) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 476), "navbar_dropdown_animation", [], "any", false, false, false, 476) || twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "dropdown_offset", [], "any", false, false, false, 476)))) {
                            echo " jl-dropdown=\"";
                            echo twig_escape_filter($this->env, ($context["navbar_animation"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_stretch"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_alignment"] ?? null), "html", null, true);
                            echo twig_escape_filter($this->env, ($context["dropdown_offset"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo twig_call_macro($macros["self"], "macro_getCustomWidth", [($context["item"] ?? null), ($context["menu"] ?? null), "submenu", ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null)], 476, $context, $this->getSourceContext());
                        echo ">
            ";
                        // line 477
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 477)) > 1)) {
                            echo "<div class=\"jl-navbar-dropdown-grid jl-child-width-1-";
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 477)), "html", null, true);
                            echo "\" jl-grid>";
                        }
                        // line 478
                        echo "                ";
                        echo twig_call_macro($macros["self"], "macro_displayContainers", [($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null)], 478, $context, $this->getSourceContext());
                        echo "
            ";
                        // line 479
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 479)) > 1)) {
                            echo "</div>";
                        }
                        // line 480
                        echo "        </div>
        ";
                    }
                    // line 482
                    echo "        ";
                } else {
                    // line 483
                    echo "        <ul class=\"g-dropdown g-inactive ";
                    echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["dropdown_dir"] ?? null), "html", null, true);
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 483), "dropdown_navbar_text_transform", [], "any", false, false, false, 483)) {
                        echo " jl-text-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 483), "dropdown_navbar_text_transform", [], "any", false, false, false, 483));
                    }
                    echo "\"";
                    echo twig_call_macro($macros["self"], "macro_getCustomWidth", [($context["item"] ?? null), ($context["menu"] ?? null), "submenu", ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null)], 483, $context, $this->getSourceContext());
                    echo ">
            <li class=\"g-dropdown-column\">
               ";
                    // line 485
                    echo twig_call_macro($macros["self"], "macro_displayContainers", [($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null)], 485, $context, $this->getSourceContext());
                    echo "
            </li>
        </ul>        
        ";
                }
                // line 489
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@particles/jlnavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2497 => 489,  2490 => 485,  2476 => 483,  2473 => 482,  2469 => 480,  2465 => 479,  2460 => 478,  2454 => 477,  2421 => 476,  2415 => 474,  2412 => 473,  2409 => 472,  2406 => 471,  2403 => 470,  2400 => 469,  2397 => 468,  2394 => 467,  2391 => 466,  2388 => 465,  2385 => 464,  2382 => 463,  2379 => 462,  2362 => 461,  2346 => 457,  2343 => 456,  2340 => 455,  2335 => 454,  2332 => 453,  2315 => 452,  2304 => 448,  2294 => 444,  2288 => 442,  2284 => 441,  2281 => 440,  2272 => 438,  2267 => 437,  2263 => 435,  2261 => 434,  2255 => 432,  2242 => 430,  2238 => 428,  2232 => 426,  2229 => 425,  2226 => 424,  2223 => 423,  2218 => 422,  2213 => 421,  2210 => 420,  2207 => 419,  2204 => 418,  2187 => 417,  2176 => 413,  2173 => 411,  2170 => 410,  2167 => 409,  2164 => 408,  2158 => 407,  2155 => 406,  2152 => 404,  2149 => 403,  2141 => 401,  2133 => 399,  2131 => 398,  2126 => 397,  2123 => 396,  2120 => 395,  2117 => 393,  2115 => 392,  2110 => 390,  2107 => 389,  2104 => 388,  2098 => 386,  2096 => 385,  2089 => 384,  2086 => 383,  2079 => 382,  2068 => 380,  2066 => 379,  2057 => 378,  2055 => 377,  2036 => 376,  2032 => 374,  2028 => 372,  2024 => 370,  2022 => 369,  2019 => 368,  2016 => 366,  2014 => 365,  2011 => 364,  2007 => 362,  2004 => 360,  2002 => 359,  1999 => 358,  1993 => 356,  1991 => 355,  1986 => 354,  1983 => 353,  1968 => 351,  1965 => 350,  1961 => 348,  1958 => 346,  1956 => 345,  1951 => 344,  1945 => 342,  1943 => 341,  1936 => 340,  1934 => 339,  1917 => 338,  1915 => 337,  1906 => 336,  1904 => 335,  1878 => 334,  1875 => 333,  1872 => 332,  1869 => 331,  1866 => 330,  1863 => 329,  1860 => 328,  1857 => 327,  1854 => 325,  1851 => 324,  1845 => 323,  1839 => 322,  1836 => 321,  1833 => 320,  1830 => 319,  1824 => 318,  1821 => 317,  1818 => 316,  1815 => 315,  1812 => 314,  1807 => 313,  1804 => 312,  1799 => 311,  1794 => 310,  1792 => 309,  1789 => 308,  1786 => 307,  1784 => 306,  1781 => 305,  1778 => 304,  1775 => 303,  1772 => 302,  1769 => 301,  1766 => 300,  1763 => 299,  1760 => 298,  1757 => 297,  1754 => 296,  1752 => 295,  1749 => 294,  1746 => 293,  1744 => 292,  1738 => 290,  1735 => 289,  1732 => 288,  1729 => 287,  1726 => 286,  1723 => 285,  1720 => 284,  1717 => 283,  1714 => 282,  1711 => 281,  1708 => 280,  1705 => 279,  1702 => 278,  1699 => 277,  1696 => 276,  1693 => 275,  1690 => 274,  1687 => 273,  1684 => 272,  1667 => 271,  1657 => 268,  1651 => 266,  1646 => 264,  1641 => 263,  1638 => 262,  1635 => 261,  1622 => 260,  1609 => 256,  1602 => 254,  1599 => 253,  1591 => 252,  1586 => 251,  1583 => 250,  1581 => 249,  1578 => 248,  1575 => 247,  1572 => 246,  1569 => 245,  1566 => 244,  1564 => 243,  1550 => 242,  1534 => 237,  1531 => 236,  1529 => 235,  1512 => 234,  1506 => 731,  1495 => 729,  1493 => 728,  1490 => 727,  1486 => 725,  1484 => 724,  1473 => 722,  1471 => 721,  1466 => 718,  1462 => 716,  1460 => 715,  1455 => 712,  1451 => 710,  1445 => 708,  1443 => 707,  1440 => 706,  1434 => 703,  1421 => 702,  1419 => 701,  1416 => 700,  1414 => 699,  1411 => 698,  1404 => 694,  1392 => 693,  1389 => 692,  1387 => 691,  1384 => 690,  1379 => 687,  1373 => 685,  1371 => 684,  1368 => 683,  1362 => 680,  1349 => 679,  1347 => 678,  1342 => 675,  1340 => 674,  1335 => 671,  1329 => 669,  1327 => 668,  1322 => 665,  1306 => 663,  1304 => 662,  1295 => 660,  1292 => 659,  1289 => 657,  1284 => 654,  1280 => 652,  1278 => 651,  1274 => 649,  1267 => 646,  1265 => 645,  1260 => 642,  1255 => 639,  1248 => 635,  1244 => 633,  1242 => 632,  1239 => 631,  1233 => 628,  1230 => 627,  1228 => 626,  1225 => 625,  1218 => 621,  1214 => 619,  1212 => 618,  1209 => 617,  1203 => 614,  1200 => 613,  1198 => 612,  1195 => 611,  1189 => 608,  1184 => 607,  1182 => 606,  1178 => 604,  1176 => 603,  1173 => 602,  1168 => 599,  1161 => 595,  1157 => 593,  1155 => 592,  1152 => 591,  1146 => 588,  1143 => 587,  1141 => 586,  1138 => 585,  1132 => 582,  1127 => 581,  1125 => 580,  1120 => 577,  1118 => 576,  1115 => 575,  1110 => 572,  1103 => 568,  1099 => 566,  1097 => 565,  1094 => 564,  1088 => 561,  1085 => 560,  1083 => 559,  1080 => 558,  1074 => 555,  1069 => 554,  1067 => 553,  1064 => 552,  1058 => 549,  1045 => 548,  1043 => 547,  1039 => 545,  1037 => 544,  1018 => 542,  1015 => 541,  1010 => 539,  1005 => 538,  1003 => 537,  995 => 535,  992 => 534,  968 => 532,  966 => 531,  950 => 529,  947 => 528,  945 => 527,  942 => 526,  940 => 525,  938 => 524,  935 => 522,  931 => 520,  925 => 518,  913 => 516,  911 => 515,  908 => 514,  906 => 513,  901 => 512,  899 => 511,  896 => 510,  892 => 508,  886 => 506,  874 => 504,  872 => 503,  869 => 502,  866 => 501,  863 => 500,  861 => 499,  858 => 498,  856 => 497,  852 => 496,  850 => 495,  847 => 494,  845 => 493,  842 => 492,  839 => 460,  836 => 451,  833 => 416,  830 => 270,  827 => 259,  824 => 241,  821 => 233,  815 => 229,  809 => 226,  802 => 224,  798 => 223,  793 => 222,  787 => 219,  781 => 216,  777 => 215,  772 => 214,  770 => 213,  764 => 210,  759 => 209,  752 => 205,  745 => 203,  741 => 202,  736 => 201,  730 => 198,  724 => 195,  720 => 194,  715 => 193,  712 => 192,  710 => 191,  708 => 190,  705 => 188,  703 => 187,  700 => 186,  696 => 184,  688 => 181,  681 => 180,  675 => 179,  666 => 178,  663 => 177,  660 => 176,  657 => 175,  653 => 174,  641 => 173,  639 => 172,  636 => 170,  632 => 168,  629 => 167,  627 => 166,  624 => 165,  620 => 163,  614 => 162,  611 => 161,  605 => 160,  600 => 159,  598 => 158,  595 => 157,  593 => 156,  585 => 152,  583 => 151,  574 => 149,  569 => 148,  567 => 147,  539 => 145,  537 => 144,  529 => 143,  521 => 142,  515 => 139,  510 => 138,  508 => 137,  500 => 135,  498 => 134,  489 => 131,  487 => 130,  479 => 128,  477 => 127,  469 => 125,  467 => 124,  457 => 122,  455 => 121,  446 => 120,  434 => 118,  432 => 117,  428 => 115,  422 => 113,  420 => 112,  414 => 110,  412 => 109,  406 => 107,  404 => 106,  398 => 104,  396 => 103,  391 => 102,  389 => 101,  380 => 98,  378 => 97,  372 => 96,  365 => 95,  363 => 94,  356 => 92,  351 => 91,  349 => 90,  341 => 88,  339 => 87,  329 => 85,  327 => 84,  320 => 82,  315 => 81,  313 => 80,  306 => 76,  299 => 75,  297 => 74,  289 => 72,  287 => 71,  277 => 69,  275 => 68,  265 => 67,  253 => 65,  251 => 64,  243 => 62,  241 => 61,  237 => 59,  230 => 58,  223 => 57,  216 => 56,  210 => 55,  205 => 54,  203 => 53,  193 => 51,  191 => 50,  179 => 48,  177 => 47,  169 => 45,  167 => 44,  155 => 42,  153 => 41,  145 => 39,  143 => 38,  141 => 37,  127 => 35,  125 => 34,  117 => 33,  111 => 32,  109 => 31,  107 => 30,  104 => 28,  102 => 27,  100 => 26,  97 => 25,  94 => 23,  88 => 20,  83 => 19,  77 => 17,  74 => 16,  69 => 13,  67 => 12,  62 => 11,  60 => 10,  58 => 9,  55 => 8,  53 => 7,  50 => 6,  44 => 4,  38 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlnavbar.html.twig", "E:\\XAMPP\\htdocs\\CAIM2\\templates\\jl_kickoff\\particles\\jlnavbar.html.twig");
    }
}
