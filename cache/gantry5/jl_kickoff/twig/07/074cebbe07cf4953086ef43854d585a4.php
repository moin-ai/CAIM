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

/* @particles/jlmodulepos.html.twig */
class __TwigTemplate_f8b890e8cc62209f1c0b666eadc9526d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript' => [$this, 'block_javascript'],
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        $context["title_text_transform"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_text_transform", [], "any", false, false, false, 31)) ? ((" jl-text-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_text_transform", [], "any", false, false, false, 31)))) : (""));
        // line 32
        $context["title_font_weight"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_font_weight", [], "any", false, false, false, 32)) ? ((" jl-text-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_font_weight", [], "any", false, false, false, 32)))) : (""));
        // line 34
        $context["content_text_transform"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "content_text_transform", [], "any", false, false, false, 34)) ? ((" jl-text-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "content_text_transform", [], "any", false, false, false, 34)))) : (""));
        // line 37
        ob_start(function () { return ''; });
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title", [], "any", false, false, false, 38)) {
            // line 39
            echo "<";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "titletag", [], "any", false, false, false, 39));
            echo " class=\"tm-title jl-margin-remove-bottom";
            echo twig_escape_filter($this->env, (($context["title_text_transform"] ?? null) . ($context["title_font_weight"] ?? null)), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "heading_color", [], "any", false, false, false, 39)) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "heading_color", [], "any", false, false, false, 39));
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration", [], "any", false, false, false, 39)) {
                echo " jl-heading-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration", [], "any", false, false, false, 39));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "style", [], "any", false, false, false, 39) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "style", [], "any", false, false, false, 39));
            }
            echo "\">
";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration", [], "any", false, false, false, 40) == "line")) {
                echo "<span>";
                echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title", [], "any", false, false, false, 40);
                echo "</span>";
            } else {
                echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title", [], "any", false, false, false, 40);
            }
            // line 41
            echo "</";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "titletag", [], "any", false, false, false, 41));
            echo ">
";
        }
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        ob_start(function () { return ''; });
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle", [], "any", false, false, false, 47)) {
            // line 48
            echo "<div class=\"tm-description";
            echo twig_escape_filter($this->env, ($context["content_text_transform"] ?? null), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description_style", [], "any", false, false, false, 48) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description_style", [], "any", false, false, false, 48));
            }
            echo " jl-margin-";
            (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description_margin_top", [], "any", false, false, false, 48) == "default")) ? (print ("top")) : (print (twig_escape_filter($this->env, (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description_margin_top", [], "any", false, false, false, 48)) . "-top"), "html", null, true))));
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description_color", [], "any", false, false, false, 48) != "default")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description_color", [], "any", false, false, false, 48));
            }
            echo "\">
\t";
            // line 49
            echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle", [], "any", false, false, false, 49);
            echo "
</div>
";
        }
        $context["subtitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        ob_start(function () { return ''; });
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description", [], "any", false, false, false, 56)) {
            // line 57
            echo "<div class=\"tm-description-below\">
\t";
            // line 58
            echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description", [], "any", false, false, false, 58);
            echo "
</div>
";
        }
        $context["description"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 64) == "full")) {
            // line 65
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true;\"";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 66
($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 66) == "percent")) {
            // line 67
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 20;\"";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 68
($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 68) == "section")) {
            // line 69
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 50;\"";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 70
($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 70) == "expand")) {
            // line 71
            $context["viewport_height"] = " jl-height-viewport=\"expand: true;\"";
        }
        // line 75
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "padding", [], "any", false, false, false, 75) == "default")) {
            // line 76
            $context["padding"] = " jl-section";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 77
($context["particle"] ?? null), "padding", [], "any", false, false, false, 77) == "none")) {
            // line 78
            $context["padding"] = " jl-section jl-padding-remove-vertical";
        } else {
            // line 80
            $context["padding"] = (" jl-section jl-section-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "padding", [], "any", false, false, false, 80)));
        }
        // line 84
        $context["parallax_bg_color"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_color", [], "any", false, false, false, 84)) ? ((("style=\"background-color: " . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_color", [], "any", false, false, false, 84)) . ";\"")) : (""));
        // line 85
        $context["parallax_overlay"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_overlay", [], "any", false, false, false, 85)) ? ((("<div class=\"jl-position-cover\" style=\"background-color: " . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_overlay", [], "any", false, false, false, 85)) . ";\"></div>")) : (""));
        // line 88
        ob_start(function () { return ''; });
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth", [], "any", false, false, false, 89)) {
            echo " jl-width-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth", [], "any", false, false, false, 89), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_breakpoint", [], "any", false, false, false, 89)) {
                echo "@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_breakpoint", [], "any", false, false, false, 89), "html", null, true);
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_alignment", [], "any", false, false, false, 89) == "left")) {
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_alignment", [], "any", false, false, false, 89) == "center")) {
                echo " jl-margin-auto";
            } else {
                echo " jl-margin-auto-left";
            }
        }
        $context["content_maxwidth"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        ob_start(function () { return ''; });
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 94)) {
            // line 95
            $context["bg_container_maxwidth"] = ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 95) == "custom") || (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 95) == "default"))) ? ("g-container") : (("jl-container" . ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 95), [0 => "small", 1 => "large", 2 => "xlarge", 3 => "expand"])) ? ((" jl-container-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 95)))) : ("")))));
            // line 96
            if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_image_effect", [], "any", false, false, false, 96) == "parallax") && ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_start", [], "any", false, false, false, 96) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_end", [], "any", false, false, false, 96)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_start", [], "any", false, false, false, 96)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_end", [], "any", false, false, false, 96)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_easing", [], "any", false, false, false, 96)))) {
                // line 97
                ob_start(function () { return ''; });
                // line 98
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_start", [], "any", false, false, false, 98) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_end", [], "any", false, false, false, 98))) {
                    echo "bgx: ";
                    ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_start", [], "any", false, false, false, 98)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_start", [], "any", false, false, false, 98), "html", null, true))) : (print ("0")));
                    echo ",";
                    ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_end", [], "any", false, false, false, 98)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_end", [], "any", false, false, false, 98), "html", null, true))) : (print ("0")));
                    echo ";";
                }
                $context["parallax_bg_horizontal"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 100
                ob_start(function () { return ''; });
                // line 101
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_start", [], "any", false, false, false, 101) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_end", [], "any", false, false, false, 101))) {
                    echo "bgy: ";
                    ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_start", [], "any", false, false, false, 101)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_start", [], "any", false, false, false, 101), "html", null, true))) : (print ("0")));
                    echo ",";
                    ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_end", [], "any", false, false, false, 101)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_end", [], "any", false, false, false, 101), "html", null, true))) : (print ("0")));
                    echo ";";
                }
                $context["parallax_bg_vertical"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 103
                $context["parallax_easing"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_easing", [], "any", false, false, false, 103)) ? (("easing:" . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_easing", [], "any", false, false, false, 103))) : (""));
                // line 104
                $context["bgp_animation_cls"] = (((((" jl-parallax=\"" . ($context["parallax_bg_horizontal"] ?? null)) . ($context["parallax_bg_vertical"] ?? null)) . (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_breakpoint", [], "any", false, false, false, 104) != "always")) ? (((" media: @" . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_breakpoint", [], "any", false, false, false, 104)) . "")) : (""))) . ($context["parallax_easing"] ?? null)) . "\"");
            }
            // line 106
            echo "<div data-src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 106)));
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_image_loading", [], "any", false, false, false, 106)) {
                echo " loading=\"eager\"";
            }
            echo " jl-img class=\"jl-wrapper jl-background-norepeat";
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_overlay", [], "any", false, false, false, 106)) ? (" jl-position-relative") : (""));
            echo (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_image_effect", [], "any", false, false, false, 106) == "fixed")) ? (" jl-background-fixed") : (""));
            echo twig_escape_filter($this->env, ($context["padding"] ?? null), "html", null, true);
            echo " jl-background-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "background_image_position", [], "any", false, false, false, 106));
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "background_image_size", [], "any", false, false, false, 106) != "auto")) {
                echo " jl-background-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "background_image_size", [], "any", false, false, false, 106));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_visibility", [], "any", false, false, false, 106) != "always")) {
                echo " jl-background-image@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_visibility", [], "any", false, false, false, 106));
            }
            if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_alignment", [], "any", false, false, false, 106) != "none") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 106) != "none"))) {
                echo " jl-flex jl-flex-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_alignment", [], "any", false, false, false, 106));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_text_color", [], "any", false, false, false, 106) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_text_color", [], "any", false, false, false, 106));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "blendmode", [], "any", false, false, false, 106) != "inherit")) {
                echo " jl-background-blend-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "blendmode", [], "any", false, false, false, 106));
            }
            echo "\" ";
            echo ((array_key_exists("parallax_bg_color", $context)) ? (_twig_default_filter(($context["parallax_bg_color"] ?? null), "")) : (""));
            echo ($context["bgp_animation_cls"] ?? null);
            echo ($context["viewport_height"] ?? null);
            echo ">
";
            // line 107
            echo ($context["parallax_overlay"] ?? null);
            echo "
    <div class=\"";
            // line 108
            echo twig_escape_filter($this->env, ($context["bg_container_maxwidth"] ?? null), "html", null, true);
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_overlay", [], "any", false, false, false, 108)) ? (" jl-position-relative") : (""));
            echo "\">
        <div class=\"el-content\"> 
";
        }
        $context["parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        ob_start(function () { return ''; });
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 114)) {
            // line 115
            echo "        </div>
    </div>
</div>
";
        }
        $context["end_parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 122
        ob_start(function () { return ''; });
        // line 123
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_start", [], "any", false, false, false, 123) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_end", [], "any", false, false, false, 123))) {
            echo "x: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_start", [], "any", false, false, false, 123)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_start", [], "any", false, false, false, 123), "html", null, true))) : (print ("0")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_end", [], "any", false, false, false, 123)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_end", [], "any", false, false, false, 123), "html", null, true))) : (print ("0")));
            echo ";";
        }
        $context["pahorizontal"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        ob_start(function () { return ''; });
        // line 128
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_start", [], "any", false, false, false, 128) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_end", [], "any", false, false, false, 128))) {
            echo "y: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_start", [], "any", false, false, false, 128)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_start", [], "any", false, false, false, 128), "html", null, true))) : (print ("0")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_end", [], "any", false, false, false, 128)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_end", [], "any", false, false, false, 128), "html", null, true))) : (print ("0")));
            echo ";";
        }
        $context["pavertical"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 132
        ob_start(function () { return ''; });
        // line 133
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_start", [], "any", false, false, false, 133) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_end", [], "any", false, false, false, 133))) {
            echo "scale: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_start", [], "any", false, false, false, 133)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_start", [], "any", false, false, false, 133), "html", null, true))) : (print ("1")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_end", [], "any", false, false, false, 133)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_end", [], "any", false, false, false, 133), "html", null, true))) : (print ("1")));
            echo ";";
        }
        $context["scale"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        ob_start(function () { return ''; });
        // line 138
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_start", [], "any", false, false, false, 138) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_end", [], "any", false, false, false, 138))) {
            echo "rotate: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_start", [], "any", false, false, false, 138)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_start", [], "any", false, false, false, 138), "html", null, true))) : (print ("0")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_end", [], "any", false, false, false, 138)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_end", [], "any", false, false, false, 138), "html", null, true))) : (print ("0")));
            echo ";";
        }
        $context["rotate"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 142
        ob_start(function () { return ''; });
        // line 143
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_start", [], "any", false, false, false, 143) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_end", [], "any", false, false, false, 143))) {
            echo "opacity: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_start", [], "any", false, false, false, 143)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_start", [], "any", false, false, false, 143), "html", null, true))) : (print ("1")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_end", [], "any", false, false, false, 143)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_end", [], "any", false, false, false, 143), "html", null, true))) : (print ("1")));
            echo ";";
        }
        $context["opacity"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 147
        ob_start(function () { return ''; });
        // line 148
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation", [], "any", false, false, false, 148) == "parallax")) {
            // line 149
            $context["pa_z_index"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_z_index", [], "any", false, false, false, 149)) ? (" jl-position-z-index jl-position-relative") : (""));
            // line 150
            $context["parallax_transform_origin"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_transform_origin", [], "any", false, false, false, 150) != "center-center")) ? ((" jl-transform-origin-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_transform_origin", [], "any", false, false, false, 150)))) : (""));
            // line 151
            if ((((((((((((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_start", [], "any", false, false, false, 151) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_end", [], "any", false, false, false, 151)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_start", [], "any", false, false, false, 151)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_end", [], "any", false, false, false, 151)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_start", [], "any", false, false, false, 151)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_end", [], "any", false, false, false, 151)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_start", [], "any", false, false, false, 151)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_end", [], "any", false, false, false, 151)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_start", [], "any", false, false, false, 151)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_end", [], "any", false, false, false, 151)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "easing", [], "any", false, false, false, 151)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_start", [], "any", false, false, false, 151)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_end", [], "any", false, false, false, 151)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_breakpoint", [], "any", false, false, false, 151))) {
                echo " jl-parallax=\"";
                echo twig_escape_filter($this->env, ((((($context["pahorizontal"] ?? null) . ($context["pavertical"] ?? null)) . ($context["scale"] ?? null)) . ($context["rotate"] ?? null)) . ($context["opacity"] ?? null)), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "easing", [], "any", false, false, false, 151)) {
                    echo "easing: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "easing", [], "any", false, false, false, 151));
                    echo ";";
                }
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_start", [], "any", false, false, false, 151)) {
                    echo "start: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_start", [], "any", false, false, false, 151));
                    echo ";";
                }
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_end", [], "any", false, false, false, 151)) {
                    echo "end: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_end", [], "any", false, false, false, 151));
                    echo ";";
                }
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_breakpoint", [], "any", false, false, false, 151) != "always")) {
                    echo "media: @";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_breakpoint", [], "any", false, false, false, 151));
                }
                echo "\"";
            }
        } elseif (twig_get_attribute($this->env, $this->source,         // line 152
($context["particle"] ?? null), "animation", [], "any", false, false, false, 152)) {
            // line 153
            echo " jl-scrollspy=\"cls: jl-animation-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation", [], "any", false, false, false, 153));
            echo ";";
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation_repeat", [], "any", false, false, false, 153) == "enabled")) {
                echo " repeat: true;";
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation_delay", [], "any", false, false, false, 153)) {
                echo " delay: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation_delay", [], "any", false, false, false, 153));
                echo ";";
            }
            echo "\"
";
        }
        $context["animation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        ob_start(function () { return ''; });
        // line 159
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 159) != "inherit")) {
            echo " jl-text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 159));
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 159) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 159));
            }
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 159) != "inherit") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 159) != "always"))) {
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "fallback", [], "any", false, false, false, 159) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "fallback", [], "any", false, false, false, 159));
            }
        }
        $context["particle_alignment"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 163
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 163) != "inherit")) {
            // line 164
            $context["visibility"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 164), [0 => "s", 1 => "m", 2 => "l", 3 => "xl"])) ? ((" jl-visible@" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 164)))) : ((" jl-" . twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 164), ["-" => "@"]))));
        }
        // line 168
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "margin", [], "any", false, false, false, 168) != "inherit")) {
            // line 169
            $context["margin"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "margin", [], "any", false, false, false, 169) != "default")) ? ((" jl-margin-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "margin", [], "any", false, false, false, 169)))) : (" jl-margin"));
        }
        // line 173
        ob_start(function () { return ''; });
        // line 174
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title", [], "any", false, false, false, 174)) {
            // line 175
            echo "<";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_element", [], "any", false, false, false, 175));
            echo " id=\"el-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g5-title";
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_align", [], "any", false, false, false, 175) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_align", [], "any", false, false, false, 175));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_predefined_color", [], "any", false, false, false, 175) != "default")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_predefined_color", [], "any", false, false, false, 175));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_style", [], "any", false, false, false, 175) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_style", [], "any", false, false, false, 175));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_decoration", [], "any", false, false, false, 175) != "none")) {
                echo " jl-heading-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_decoration", [], "any", false, false, false, 175));
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_text_transform", [], "any", false, false, false, 175)) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_text_transform", [], "any", false, false, false, 175));
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_font_weight", [], "any", false, false, false, 175)) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_font_weight", [], "any", false, false, false, 175));
            }
            echo "\">
";
            // line 176
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_decoration", [], "any", false, false, false, 176) == "line")) {
                echo " <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title", [], "any", false, false, false, 176);
                echo "</span>
";
            } else {
                // line 177
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title", [], "any", false, false, false, 177);
                echo "
";
            }
            // line 179
            echo "</";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_element", [], "any", false, false, false, 179));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jlmodulepos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (((((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_color", [], "any", false, false, false, 4) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_fontsize", [], "any", false, false, false, 4)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_color", [], "any", false, false, false, 4)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_fontsize", [], "any", false, false, false, 4)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle_color", [], "any", false, false, false, 4)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle_fontsize", [], "any", false, false, false, 4)) || ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 4) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 4) == "custom")) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_container_width", [], "any", false, false, false, 4))))) {
            // line 5
            echo "<style>
";
            // line 6
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_color", [], "any", false, false, false, 6) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_fontsize", [], "any", false, false, false, 6))) {
                // line 7
                echo "#el-";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo ".g5-title { ";
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_color", [], "any", false, false, false, 7)) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_color", [], "any", false, false, false, 7), "html", null, true);
                    echo ";";
                }
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_fontsize", [], "any", false, false, false, 7)) {
                    echo "font-size: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_fontsize", [], "any", false, false, false, 7), "html", null, true);
                    echo "px;";
                }
                echo " }
";
            }
            // line 9
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_color", [], "any", false, false, false, 9) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_fontsize", [], "any", false, false, false, 9))) {
                // line 10
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .tm-title { ";
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_color", [], "any", false, false, false, 10)) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_color", [], "any", false, false, false, 10), "html", null, true);
                    echo "; ";
                }
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_fontsize", [], "any", false, false, false, 10)) {
                    echo "font-size: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_fontsize", [], "any", false, false, false, 10), "html", null, true);
                    echo "px;";
                }
                echo " }
";
            }
            // line 12
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle_color", [], "any", false, false, false, 12) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle_fontsize", [], "any", false, false, false, 12))) {
                // line 13
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .tm-description { ";
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle_color", [], "any", false, false, false, 13)) {
                    echo "color: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle_color", [], "any", false, false, false, 13), "html", null, true);
                    echo "; ";
                }
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle_fontsize", [], "any", false, false, false, 13)) {
                    echo "font-size: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle_fontsize", [], "any", false, false, false, 13), "html", null, true);
                    echo "px;";
                }
                echo " }
";
            }
            // line 15
            if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 15) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 15) == "custom")) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_container_width", [], "any", false, false, false, 15)))) {
                // line 16
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-particle .g-container {
    max-width: ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_container_width", [], "any", false, false, false, 17));
                echo ";
}
";
            }
            // line 20
            echo "</style>
";
        }
    }

    // line 24
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation", [], "any", false, false, false, 25) == "parallax") || (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_image_effect", [], "any", false, false, false, 25) == "parallax"))) {
            // line 26
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc("gantry-theme://js/jlcomponents/parallax.min.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    // line 183
    public function block_particle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 184
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "enabled", [], "any", false, false, false, 184)) {
            // line 185
            echo twig_escape_filter($this->env, ($context["parallax_background"] ?? null), "html", null, true);
            echo "
";
            // line 186
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "
<div id=\"";
            // line 187
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ((((((($context["id"] ?? null) . ($context["content_maxwidth"] ?? null)) . ($context["particle_alignment"] ?? null)) . ($context["pa_z_index"] ?? null)) . ($context["parallax_transform_origin"] ?? null)) . ($context["margin"] ?? null)) . ($context["visibility"] ?? null)), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "class", [], "any", false, false, false, 187)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "class", [], "any", false, false, false, 187), "html", null, true);
            }
            echo "\"";
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo ">
\t";
            // line 188
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "
\t";
            // line 189
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
            echo "
\t<div id=\"g-mpos-";
            // line 190
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g-module-position jl-margin-";
            (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "module_margin_top", [], "any", false, false, false, 190) == "default")) ? (print ("top")) : (print (twig_escape_filter($this->env, (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "module_margin_top", [], "any", false, false, false, 190)) . "-top"), "html", null, true))));
            echo "\">
\t\t";
            // line 191
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "platform", [], "any", false, false, false, 191), "displayModule", [0 => twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "module_id", [], "any", false, false, false, 191), 1 => ["style" => ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "chrome", [], "any", true, true, false, 191)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "chrome", [], "any", false, false, false, 191), "gantry")) : ("gantry")), "position" => "particle"]], "method", false, false, false, 191);
            echo "
\t</div>
\t";
            // line 193
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "
</div>
";
            // line 195
            echo twig_escape_filter($this->env, ($context["end_parallax_background"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/jlmodulepos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 195,  615 => 193,  610 => 191,  604 => 190,  600 => 189,  596 => 188,  584 => 187,  580 => 186,  576 => 185,  574 => 184,  570 => 183,  562 => 26,  560 => 25,  556 => 24,  550 => 20,  544 => 17,  539 => 16,  537 => 15,  520 => 13,  518 => 12,  501 => 10,  499 => 9,  482 => 7,  480 => 6,  477 => 5,  475 => 4,  471 => 3,  466 => 1,  459 => 179,  453 => 177,  446 => 176,  414 => 175,  412 => 174,  410 => 173,  407 => 169,  405 => 168,  402 => 164,  400 => 163,  384 => 159,  382 => 158,  366 => 153,  364 => 152,  339 => 151,  337 => 150,  335 => 149,  333 => 148,  331 => 147,  322 => 143,  320 => 142,  311 => 138,  309 => 137,  300 => 133,  298 => 132,  289 => 128,  287 => 127,  278 => 123,  276 => 122,  269 => 115,  267 => 114,  265 => 113,  257 => 108,  253 => 107,  214 => 106,  211 => 104,  209 => 103,  200 => 101,  198 => 100,  189 => 98,  187 => 97,  185 => 96,  183 => 95,  181 => 94,  179 => 93,  163 => 89,  161 => 88,  159 => 85,  157 => 84,  154 => 80,  151 => 78,  149 => 77,  147 => 76,  145 => 75,  142 => 71,  140 => 70,  138 => 69,  136 => 68,  134 => 67,  132 => 66,  130 => 65,  128 => 64,  121 => 58,  118 => 57,  116 => 56,  114 => 55,  107 => 49,  92 => 48,  90 => 47,  88 => 46,  81 => 41,  73 => 40,  54 => 39,  52 => 38,  50 => 37,  48 => 34,  46 => 32,  44 => 31,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlmodulepos.html.twig", "E:\\XAMPP\\htdocs\\CAIM2\\templates\\jl_kickoff\\particles\\jlmodulepos.html.twig");
    }
}
