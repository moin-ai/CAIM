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

/* @particles/jlnavcanvas.html.twig */
class __TwigTemplate_4bf2fe287e681cf7ada455adcd592993 extends \Twig\Template
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
            echo "    ";
            $context["menu"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "menu", [], "any", false, false, false, 2), "instance", [0 => ($context["particle"] ?? null)], "method", false, false, false, 2);
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 4
            echo "    <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "getMessage", [], "any", false, false, false, 4), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 7
        $context["nav_init"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav_style", [], "any", false, false, false, 7)) ? (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav_style", [], "any", false, false, false, 7)) : ("default"));
        // line 8
        $context["cv_nav_init"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "cv_nav_style", [], "any", false, false, false, 8)) ? (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "cv_nav_style", [], "any", false, false, false, 8)) : ("default"));
        // line 9
        echo "
";
        // line 10
        ob_start(function () { return ''; });
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "offcanvas_minheight", [], "any", false, false, false, 11)) {
            // line 12
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle {min-height:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "offcanvas_minheight", [], "any", false, false, false, 12), "html", null, true);
            echo "px; }
";
        }
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "toggle_color", [], "any", false, false, false, 14)) {
            // line 15
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle {color:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "toggle_color", [], "any", false, false, false, 15), "html", null, true);
            echo "; }
";
        }
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "toggle_color_hover", [], "any", false, false, false, 17)) {
            // line 18
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle:focus,#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle:hover {color:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "toggle_color_hover", [], "any", false, false, false, 18), "html", null, true);
            echo ";}
";
        }
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "customize_bar_background", [], "any", false, false, false, 20)) {
            // line 21
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .tm-nav-mobile { background: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "customize_bar_background", [], "any", false, false, false, 21), "html", null, true);
            echo "; }
";
        }
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav_cv_color", [], "any", false, false, false, 23)) {
            // line 24
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo ">li>a,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-sub a{color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav_cv_color", [], "any", false, false, false, 24), "html", null, true);
            echo ";}
";
        }
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav_color_active", [], "any", false, false, false, 26)) {
            // line 27
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo ">li>a:focus,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo ">li>a:hover,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo ">li.jl-active>a,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-sub a:focus,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-sub a:hover,#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-sub li.jl-active > a {color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav_color_active", [], "any", false, false, false, 27));
            echo ";}
";
        }
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav_color_header", [], "any", false, false, false, 29)) {
            // line 30
            echo "#mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " .jl-nav-";
            echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
            echo " .jl-nav-header {color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav_color_header", [], "any", false, false, false, 30), "html", null, true);
            echo ";}
";
        }
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "toggle_text_fontsize", [], "any", false, false, false, 32)) {
            // line 33
            echo "#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-particle .jl-navbar-toggle { font-size: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "toggle_text_fontsize", [], "any", false, false, false, 33), "html", null, true);
            echo "px; }
";
        }
        $context["inline_mc_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "document", [], "any", false, false, false, 36), "addInlineStyle", [0 => ($context["inline_mc_style"] ?? null), 1 => 0], "method", false, false, false, 36);
        // line 37
        echo "
";
        // line 55
        echo "
";
        // line 66
        echo "
";
        // line 165
        echo "
";
        // line 175
        echo "
";
        // line 184
        echo "
";
        // line 195
        echo "
";
        // line 197
        $context["attrs_menu"] = ((("tm-nav-mobile jl-offcanvas-bar" . ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav_center", [], "any", false, false, false, 197)) ? (" jl-text-center") : (""))) . ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "modal_vertically", [], "any", false, false, false, 197)) ? (" jl-flex") : (""))) . ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "offcanvas_inverse", [], "any", false, false, false, 197)) ? ((" jl-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "offcanvas_inverse", [], "any", false, false, false, 197)))) : ("")));
        // line 198
        echo "
";
        // line 199
        $context["attrs_menu"] = ((($context["attrs_menu"] ?? null)) ? (((" class=\"" . twig_trim_filter(($context["attrs_menu"] ?? null))) . "\"")) : (""));
        // line 200
        echo "
";
        // line 201
        $macros["macro"] = $this->macros["macro"] = $this;
        // line 202
        echo "
";
        // line 203
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "menu_animation", [], "any", false, false, false, 203) == "offcanvas")) {
            // line 204
            $pageblockVariables = [];
            if ($pageblockVariables && !is_array($pageblockVariables)) {
                throw new UnexpectedValueException('{% pageblock with x %}: x is not an array');
            }
            $location = "body_bottom";
            if ($location && !is_string($location)) {
                throw new UnexpectedValueException('{% pageblock in x %}: x is not a string');
            }
            $priority = isset($pageblockVariables['priority']) ? $pageblockVariables['priority'] : 0;
            ob_start();
            // line 205
            echo "<div id=\"mobile-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" jl-offcanvas=\"mode: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation_mode", [], "any", false, false, false, 205), "html", null, true);
            echo ";";
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "flip_offcanvas", [], "any", false, false, false, 205)) ? (" flip: true;") : (""));
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "overlay", [], "any", false, false, false, 205)) ? (" overlay: true;") : (""));
            echo "\">
    <div";
            // line 206
            echo ($context["attrs_menu"] ?? null);
            echo ">

    ";
            // line 208
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "close_button", [], "any", false, false, false, 208)) {
                // line 209
                echo "        <button class=\"jl-offcanvas-close\" type=\"button\" jl-close></button>
    ";
            }
            // line 211
            echo "
        ";
            // line 212
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "modal_vertically", [], "any", false, false, false, 212)) {
                // line 213
                echo "            <div class=\"jl-margin-auto-vertical jl-width-1-1\">
        ";
            }
            // line 215
            echo "
            <div class=\"jl-child-width-1-1\" jl-grid>
                
                ";
            // line 218
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "root", [], "any", false, false, false, 218), "count", [], "method", false, false, false, 218)) {
                // line 219
                echo "                <div>
                    <ul class=\"jl-nav jl-nav-";
                // line 220
                echo twig_escape_filter($this->env, ($context["nav_init"] ?? null), "html", null, true);
                echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav_center", [], "any", false, false, false, 220)) ? (" jl-nav-center") : (" jl-text-left"));
                echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "nav_divider", [], "any", false, false, false, 220)) ? (" jl-nav-divider") : (""));
                echo "\" jl-nav=\"targets: > .js-accordion\">
                        ";
                // line 221
                echo twig_call_macro($macros["macro"], "macro_displayItems", [twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "root", [], "any", false, false, false, 221), ($context["menu"] ?? null), $context], 221, $context, $this->getSourceContext());
                echo "
                    </ul>
                </div>
                ";
            }
            // line 225
            echo "                
                ";
            // line 226
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "module_id", [], "any", false, false, false, 226)) {
                // line 227
                echo "                    <div>
                     ";
                // line 228
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "platform", [], "any", false, false, false, 228), "displayModule", [0 => twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "module_id", [], "any", false, false, false, 228), 1 => ["style" => ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "chrome", [], "any", true, true, false, 228)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "chrome", [], "any", false, false, false, 228), "gantry")) : ("gantry")), "position" => "particle"]], "method", false, false, false, 228);
                echo "
                    </div>
                ";
            }
            // line 231
            echo "
            </div>

        ";
            // line 234
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "modal_vertically", [], "any", false, false, false, 234)) {
                // line 235
                echo "            </div>
        ";
            }
            // line 237
            echo "
    </div>
</div>
";
            $content = ob_get_clean();
            Gantry\Framework\Gantry::instance()['document']->addHtml($content, $priority, $location);
        }
    }

    // line 38
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
            // line 39
            echo "    ";
            try {                // line 40
                echo "    ";
                $context["in_particle"] = ((((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "in_particle", [], "any", true, true, false, 40) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "in_particle", [], "any", false, false, false, 40)))) ? (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "in_particle", [], "any", false, false, false, 40)) : (0)) + 1);
                // line 41
                echo "    ";
                if ((($context["in_particle"] ?? null) > 5)) {
                    // line 42
                    echo "        ";
                    throw new \RuntimeException("Particle loop detected"                    ,                     500                    );
                    // line 43
                    echo "    ";
                }
                // line 44
                echo "
    ";
                // line 45
                $context["context"] = twig_array_merge(($context["context"] ?? null), ["particle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "options", [], "any", false, false, false, 45), "particle", [], "any", false, false, false, 45), "in_particle" => ($context["in_particle"] ?? null)]);
                // line 46
                echo "    ";
                $context["classes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "options", [], "any", false, false, false, 46), "block", [], "any", false, false, false, 46), "class", [], "any", false, false, false, 46);
                // line 47
                echo "    <div class=\"menu-item-particle";
                ((($context["classes"] ?? null)) ? (print (twig_escape_filter($this->env, (" " . ($context["classes"] ?? null)), "html", null, true))) : (print ("")));
                echo "\">
        ";
                // line 48
                $__internal_compile_0 = null;
                try {
                    $__internal_compile_0 =                     $this->loadTemplate([0 => (("particles/" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "particle", [], "any", false, false, false, 48)) . ".html.twig"), 1 => (("@particles/" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "particle", [], "any", false, false, false, 48)) . ".html.twig")], "@particles/jlnavcanvas.html.twig", 48);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_compile_0) {
                    $__internal_compile_0->display(twig_to_array(                    // line 49
($context["context"] ?? null)));
                }
                // line 50
                echo "    </div>
    ";
            } catch (\Exception $e) {
                if ($context['gantry']->debug()) throw $e;
                if (\GANTRY_DEBUGGER) \Gantry\Debugger::addException($e);
                $context['e'] = $e;
                // line 52
                echo "        <div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "getMessage", [], "any", false, false, false, 52), "html", null, true);
                echo "</div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 56
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
            // line 57
            echo "    ";
            if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon_only", [], "any", false, false, false, 57) ||  !(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 57) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 57)))) {
                // line 58
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "subtitle", [], "any", false, false, false, 58)) {
                    // line 59
                    echo "        <div>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 59), "html", null, true);
                    echo "
        <div class=\"jl-nav-subtitle\">";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "subtitle", [], "any", false, false, false, 60), "html", null, true);
                    echo "</div></div>
        ";
                } else {
                    // line 62
                    echo "        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 62), "html", null, true);
                    echo "
        ";
                }
                // line 64
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 67
    public function macro_displayItem($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 68
            echo "    ";
            $macros["self"] = $this;
            // line 69
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 69) == "particle") &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "options", [], "any", false, false, false, 69), "particle", [], "any", false, false, false, 69), "enabled", [], "any", false, false, false, 69))) {
                // line 70
                echo "        ";
                $context["enabled"] = 0;
                // line 71
                echo "    ";
            }
            // line 72
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "visible", [], "any", false, false, false, 72) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "enabled", [], "any", false, false, false, 72)) && ((array_key_exists("enabled", $context)) ? (_twig_default_filter(($context["enabled"] ?? null), 1)) : (1)))) {
                // line 73
                echo "        ";
                $context["title"] = (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon_only", [], "any", false, false, false, 73) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link_title", [], "any", false, false, false, 73))) ? (((" title=\"" . twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link_title", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link_title", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 73))) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 73))))) . "\"")) : (""));
                // line 74
                echo "        ";
                $context["label"] = (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon_only", [], "any", false, false, false, 74) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 74) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 74)))) ? (((" aria-label=\"" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 74))) . "\"")) : (""));
                // line 75
                echo "        ";
                $context["active"] = ((twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method", false, false, false, 75)) ? (" jl-active") : (""));
                // line 76
                echo "        ";
                $context["dropdown"] = (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 76) == 1)) ? ((" g-" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getDropdown", [], "method", false, false, false, 76))) : (""));
                // line 77
                echo "        ";
                $context["parent"] = ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 77))) ? (" jl-parent") : (""));
                // line 78
                echo "        ";
                $context["target"] = ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", [], "any", false, false, false, 78) != "_self") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, false, false, 78), "forceTarget", [], "any", false, false, false, 78))) ? (((" target=\"" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", [], "any", false, false, false, 78))) . "\"")) : (""));
                // line 79
                echo "        ";
                $context["rel"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "rel", [], "any", false, false, false, 79);
                // line 80
                echo "
        ";
                // line 81
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", [], "any", false, false, false, 81) == "_blank")) {
                    // line 82
                    echo "            ";
                    if (!twig_in_filter("noopener", ($context["rel"] ?? null))) {
                        // line 83
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 84
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noopener");
                        // line 85
                        echo "            ";
                    }
                    // line 86
                    echo "            ";
                    if (!twig_in_filter("noreferrer", ($context["rel"] ?? null))) {
                        // line 87
                        echo "                ";
                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                        // line 88
                        echo "                ";
                        $context["rel"] = (($context["rel"] ?? null) . "noreferrer");
                        // line 89
                        echo "            ";
                    }
                    // line 90
                    echo "        ";
                }
                // line 91
                echo "
        ";
                // line 92
                $context["listAttributes"] = $this->extensions['Gantry\Component\Twig\TwigExtension']->attributeArrayFilter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, false, 92));
                // line 93
                echo "        ";
                $context["linkAttributes"] = "";
                // line 94
                echo "        
        ";
                // line 95
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link_attributes", [], "any", false, false, false, 95)) {
                    // line 96
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link_attributes", [], "any", false, false, false, 96));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 97
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["attribute"]);
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 98
                            echo "                    ";
                            if (($context["key"] == "rel")) {
                                // line 99
                                echo "                        ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $context["value"], " "));
                                foreach ($context['_seq'] as $context["_key"] => $context["hVal"]) {
                                    // line 100
                                    echo "                            ";
                                    if (!twig_in_filter($context["hVal"], ($context["rel"] ?? null))) {
                                        // line 101
                                        echo "                                ";
                                        $context["rel"] = ((($context["rel"] ?? null)) ? ((($context["rel"] ?? null) . " ")) : (($context["rel"] ?? null)));
                                        // line 102
                                        echo "                                ";
                                        $context["rel"] = (($context["rel"] ?? null) . $context["hVal"]);
                                        // line 103
                                        echo "                            ";
                                    }
                                    // line 104
                                    echo "                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hVal'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 105
                                echo "                    ";
                            } else {
                                // line 106
                                echo "                        ";
                                $context["linkAttributes"] = (((((($context["linkAttributes"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                                // line 107
                                echo "                    ";
                            }
                            // line 108
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 109
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "        ";
                }
                // line 111
                echo "
        ";
                // line 113
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "target", [], "any", false, false, false, 113) == "_nonav")) {
                    // line 114
                    echo "            ";
                    $context["target"] = "target=\"_blank\"";
                    // line 115
                    echo "            ";
                    $context["linkAttributes"] = (($context["linkAttributes"] ?? null) . " onclick=\"window.open(this.href, 'targetWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes'); return false;\"");
                    // line 116
                    echo "        ";
                }
                // line 117
                echo "        ";
                $context["item_accordion"] = ((((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 117) == "separator") || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 117) == "heading")) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 117) == 1)) && ($context["parent"] ?? null))) ? (" js-accordion") : (""));
                // line 118
                echo "        ";
                $context["rel"] = ((($context["rel"] ?? null)) ? (((" rel=\"" . twig_escape_filter($this->env, ($context["rel"] ?? null), "html_attr")) . "\"")) : (""));
                // line 119
                echo "        <li class=\"item-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 119), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 119)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["item_accordion"] ?? null), "html", null, true);
                }
                echo ((((($context["parent"] ?? null) && ($context["item_accordion"] ?? null)) && ($context["active"] ?? null))) ? (" jl-open") : (""));
                echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "class", [], "any", false, false, false, 119)) {
                    echo " ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "class", [], "any", true, true, false, 119)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "class", [], "any", false, false, false, 119), "")) : ("")), "html", null, true);
                }
                if ( !($context["parent"] ?? null)) {
                    if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 119) == "separator") && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 119) != 1))) {
                        echo " jl-nav-divider";
                    } elseif (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 119) == "heading") && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 119) != 1))) {
                        echo " jl-nav-header";
                    }
                }
                echo "\"";
                // line 120
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, true, false, 120), "renderTitles", [], "any", true, true, false, 120)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "particle", [], "any", false, true, false, 120), "renderTitles", [], "any", false, false, false, 120), 0)) : (0))) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 120), "html", null, true);
                    echo "\"";
                }
                echo ($context["listAttributes"] ?? null);
                echo ">
            ";
                // line 121
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, false, 121)) {
                    // line 122
                    echo "                <a";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "anchor_class", [], "any", false, false, false, 122)) {
                        echo " class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "anchor_class", [], "any", false, false, false, 122), "html", null, true);
                        echo "\"";
                    }
                    echo " href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, false, 122), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hash", [], "any", false, false, false, 122), "html", null, true);
                    echo "\"";
                    echo ((((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hash", [], "any", false, false, false, 122)) {
                        echo " jl-scroll";
                    }
                    echo ">
                    ";
                    // line 123
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 123)) {
                        // line 124
                        echo "                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 124)), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 124), "html", null, true);
                        echo "\" />
                    ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 125
($context["item"] ?? null), "icon", [], "any", false, false, false, 125)) {
                        // line 126
                        echo "                        <i class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 126), "html", null, true);
                        echo "\" aria-hidden=\"true\"></i>
                    ";
                    }
                    // line 128
                    echo "                    ";
                    echo twig_call_macro($macros["self"], "macro_displayTitle", [($context["item"] ?? null)], 128, $context, $this->getSourceContext());
                    echo "
                    ";
                    // line 129
                    if ((($context["parent"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 129))) {
                        // line 130
                        echo "<span jl-nav-parent-icon></span>";
                    }
                    // line 132
                    echo "                </a>
            ";
                } else {
                    // line 134
                    echo "                ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 134)) || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 134) == 1))) {
                        // line 135
                        echo "                    <a href=\"#\" class=\"menu__";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 135), "html", null, true);
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "anchor_class", [], "any", false, false, false, 135)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "anchor_class", [], "any", false, false, false, 135), "html", null, true);
                        }
                        echo "\"";
                        echo (((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["rel"] ?? null)) . ($context["linkAttributes"] ?? null));
                        if ((( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 135)) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 135) == 1)) && ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 135) == "heading") || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 135) == "separator")))) {
                            echo " aria-haspopup=\"true\" aria-expanded=\"false\" tabindex=\"0\"";
                        }
                        echo ">
                ";
                    }
                    // line 137
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 137) == "particle")) {
                        // line 138
                        echo "                    ";
                        echo twig_call_macro($macros["self"], "macro_displayParticle", [($context["item"] ?? null), ($context["context"] ?? null)], 138, $context, $this->getSourceContext());
                        echo "
                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 139
($context["item"] ?? null), "type", [], "any", false, false, false, 139) == "heading")) {
                        // line 140
                        echo "                    ";
                        echo twig_call_macro($macros["self"], "macro_displayTitle", [($context["item"] ?? null)], 140, $context, $this->getSourceContext());
                        echo "
                ";
                    } else {
                        // line 142
                        echo "                
                ";
                        // line 143
                        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 143) == 1)) {
                            // line 144
                            echo twig_call_macro($macros["self"], "macro_displayTitle", [($context["item"] ?? null)], 144, $context, $this->getSourceContext());
                        }
                        // line 146
                        echo "
                ";
                    }
                    // line 148
                    echo "
                ";
                    // line 149
                    if ((($context["parent"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 149))) {
                        // line 150
                        echo "<span jl-nav-parent-icon></span>";
                    }
                    // line 152
                    echo "
                ";
                    // line 153
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "children", [], "any", false, false, false, 153)) || (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 153) == 1))) {
                        // line 154
                        echo "                    </a>
                ";
                    }
                    // line 156
                    echo "
            ";
                }
                // line 158
                echo "            ";
                if (($context["parent"] ?? null)) {
                    // line 159
                    echo twig_call_macro($macros["self"], "macro_displaySubmenu", [($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null), ($context["start_level"] ?? null)], 159, $context, $this->getSourceContext());
                }
                // line 161
                echo "          </li>

    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 166
    public function macro_displayContainers($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 167
            echo "\t";
            $macros["self"] = $this;
            // line 168
            echo "\t";
            $context["groups"] = (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getDropdown", [], "method", false, false, false, 168) == "standard")) ? ([0 => ($context["item"] ?? null)]) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 168)));
            // line 169
            echo "\t<ul class=\"jl-nav-sub\">
\t\t";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
            foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                // line 171
                echo "\t\t\t";
                echo twig_call_macro($macros["self"], "macro_displayItems", [$context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null)], 171, $context, $this->getSourceContext());
                echo "
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "\t</ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 176
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
            // line 177
            echo "    ";
            $macros["self"] = $this;
            // line 178
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 179
                echo "        ";
                $context["start_level"] = (($context["start_level"]) ?? ((($context["root_level"]) ?? (twig_get_attribute($this->env, $this->source, $context["item"], "level", [], "any", false, false, false, 179)))));
                // line 180
                echo "        ";
                $context["dropdown"] = (($context["dropdown_type"]) ?? (twig_get_attribute($this->env, $this->source, $context["item"], "dropdown", [], "any", false, false, false, 180)));
                // line 181
                echo "        ";
                echo twig_call_macro($macros["self"], "macro_displayItem", [$context["item"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown"] ?? null), ($context["start_level"] ?? null)], 181, $context, $this->getSourceContext());
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

    // line 185
    public function macro_displaySubmenu($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 186
            echo "\t";
            $macros["self"] = $this;
            // line 187
            echo "\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_hide", [], "any", false, false, false, 187)) {
                // line 188
                echo "\t\t";
                $context["animation"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "gantry", [], "any", false, true, false, 188), "config", [], "any", false, true, false, 188), "get", [0 => "styles.menu.animation"], "method", true, true, false, 188)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "gantry", [], "any", false, true, false, 188), "config", [], "any", false, true, false, 188), "get", [0 => "styles.menu.animation"], "method", false, false, false, 188), "g-fade")) : ("g-fade"));
                // line 189
                echo "\t\t";
                if (((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "groups", [], "any", false, false, false, 189)) == 1) && ( !($context["dropdown_type"] ?? null) == "fullwidth")) || (($context["dropdown_type"] ?? null) == "standard")) || ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "width", [], "any", true, true, false, 189)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "width", [], "any", false, false, false, 189), "auto")) : ("auto")) != "auto") && (($context["dropdown_type"] ?? null) == "fullwidth")))) {
                    // line 190
                    echo "\t\t\t";
                    $context["dropdown_dir"] = ("g-dropdown-" . ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_dir", [], "any", true, true, false, 190)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_dir", [], "any", false, false, false, 190), "right")) : ("right")));
                    // line 191
                    echo "\t\t";
                }
                // line 192
                echo "\t\t";
                echo twig_call_macro($macros["self"], "macro_displayContainers", [($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null)], 192, $context, $this->getSourceContext());
                echo "
\t";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@particles/jlnavcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  903 => 192,  900 => 191,  897 => 190,  894 => 189,  891 => 188,  888 => 187,  885 => 186,  869 => 185,  853 => 181,  850 => 180,  847 => 179,  842 => 178,  839 => 177,  822 => 176,  812 => 173,  803 => 171,  799 => 170,  796 => 169,  793 => 168,  790 => 167,  774 => 166,  762 => 161,  759 => 159,  756 => 158,  752 => 156,  748 => 154,  746 => 153,  743 => 152,  740 => 150,  738 => 149,  735 => 148,  731 => 146,  728 => 144,  726 => 143,  723 => 142,  717 => 140,  715 => 139,  710 => 138,  707 => 137,  693 => 135,  690 => 134,  686 => 132,  683 => 130,  681 => 129,  676 => 128,  670 => 126,  668 => 125,  661 => 124,  659 => 123,  642 => 122,  640 => 121,  631 => 120,  610 => 119,  607 => 118,  604 => 117,  601 => 116,  598 => 115,  595 => 114,  592 => 113,  589 => 111,  586 => 110,  580 => 109,  574 => 108,  571 => 107,  568 => 106,  565 => 105,  559 => 104,  556 => 103,  553 => 102,  550 => 101,  547 => 100,  542 => 99,  539 => 98,  534 => 97,  529 => 96,  527 => 95,  524 => 94,  521 => 93,  519 => 92,  516 => 91,  513 => 90,  510 => 89,  507 => 88,  504 => 87,  501 => 86,  498 => 85,  495 => 84,  492 => 83,  489 => 82,  487 => 81,  484 => 80,  481 => 79,  478 => 78,  475 => 77,  472 => 76,  469 => 75,  466 => 74,  463 => 73,  460 => 72,  457 => 71,  454 => 70,  451 => 69,  448 => 68,  432 => 67,  422 => 64,  416 => 62,  411 => 60,  406 => 59,  403 => 58,  400 => 57,  387 => 56,  374 => 52,  367 => 50,  364 => 49,  356 => 48,  351 => 47,  348 => 46,  346 => 45,  343 => 44,  340 => 43,  337 => 42,  334 => 41,  331 => 40,  329 => 39,  315 => 38,  305 => 237,  301 => 235,  299 => 234,  294 => 231,  288 => 228,  285 => 227,  283 => 226,  280 => 225,  273 => 221,  267 => 220,  264 => 219,  262 => 218,  257 => 215,  253 => 213,  251 => 212,  248 => 211,  244 => 209,  242 => 208,  237 => 206,  227 => 205,  216 => 204,  214 => 203,  211 => 202,  209 => 201,  206 => 200,  204 => 199,  201 => 198,  199 => 197,  196 => 195,  193 => 184,  190 => 175,  187 => 165,  184 => 66,  181 => 55,  178 => 37,  176 => 36,  167 => 33,  165 => 32,  155 => 30,  153 => 29,  123 => 27,  121 => 26,  107 => 24,  105 => 23,  97 => 21,  95 => 20,  85 => 18,  83 => 17,  75 => 15,  73 => 14,  65 => 12,  63 => 11,  61 => 10,  58 => 9,  56 => 8,  54 => 7,  51 => 6,  45 => 4,  38 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlnavcanvas.html.twig", "E:\\XAMPP\\htdocs\\CAIM2\\templates\\jl_kickoff\\particles\\jlnavcanvas.html.twig");
    }
}
