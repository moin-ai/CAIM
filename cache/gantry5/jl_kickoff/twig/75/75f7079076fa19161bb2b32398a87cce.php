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

/* @particles/jlheading.html.twig */
class __TwigTemplate_abd41521ab42db8573158b769713d807 extends \Twig\Template
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
        // line 48
        $context["linkscroll"] = (((preg_match("/#/", twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_link", [], "any", false, false, false, 48))) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_link_target", [], "any", false, false, false, 48) != "_blank"))) ? (" jl-scroll") : (""));
        // line 51
        $context["title_text_transform"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_text_transform", [], "any", false, false, false, 51)) ? ((" jl-text-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_text_transform", [], "any", false, false, false, 51)))) : (""));
        // line 52
        $context["content_text_transform"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "content_text_transform", [], "any", false, false, false, 52)) ? ((" jl-text-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "content_text_transform", [], "any", false, false, false, 52)))) : (""));
        // line 53
        $context["title_font_weight"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_font_weight", [], "any", false, false, false, 53)) ? ((" jl-text-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_font_weight", [], "any", false, false, false, 53)))) : (""));
        // line 54
        $context["meta_font_weight"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "meta_font_weight", [], "any", false, false, false, 54)) ? ((" jl-text-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "meta_font_weight", [], "any", false, false, false, 54)))) : (""));
        // line 55
        $context["des_dropcap"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description_dropcap", [], "any", false, false, false, 55)) ? (" jl-dropcap") : (""));
        // line 58
        ob_start(function () { return ''; });
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title", [], "any", false, false, false, 59)) {
            // line 60
            echo "<";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "titletag", [], "any", false, false, false, 60));
            echo " class=\"tm-title jl-margin-remove-bottom";
            echo twig_escape_filter($this->env, (($context["title_text_transform"] ?? null) . ($context["title_font_weight"] ?? null)), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "heading_color", [], "any", false, false, false, 60)) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "heading_color", [], "any", false, false, false, 60));
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration", [], "any", false, false, false, 60)) {
                echo " jl-heading-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration", [], "any", false, false, false, 60));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "style", [], "any", false, false, false, 60) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "style", [], "any", false, false, false, 60));
            }
            echo "\">
";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_link", [], "any", false, false, false, 61) != "")) {
                echo "<a target=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_link_target", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_link_target", [], "any", false, false, false, 61), "_self")) : ("_self")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_link", [], "any", false, false, false, 61))), "html", null, true);
                echo "\" class=\"";
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "link_hover", [], "any", false, false, false, 61)) {
                    echo "jl-link-heading";
                } else {
                    echo "jl-link-reset";
                }
                echo "\"";
                echo twig_escape_filter($this->env, ($context["linkscroll"] ?? null), "html", null, true);
                echo ">";
            }
            // line 62
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration", [], "any", false, false, false, 62) == "line")) {
                echo "<span>";
                echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title", [], "any", false, false, false, 62);
                echo "</span>";
            } else {
                echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title", [], "any", false, false, false, 62);
            }
            // line 63
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_link", [], "any", false, false, false, 63) != "")) {
                echo "</a>";
            }
            // line 64
            echo "</";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "titletag", [], "any", false, false, false, 64));
            echo ">
";
        }
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        ob_start(function () { return ''; });
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle", [], "any", false, false, false, 70)) {
            // line 71
            echo "  <div class=\"tm-description";
            echo twig_escape_filter($this->env, ((($context["content_text_transform"] ?? null) . ($context["meta_font_weight"] ?? null)) . ($context["des_dropcap"] ?? null)), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description_style", [], "any", false, false, false, 71) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description_style", [], "any", false, false, false, 71));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description_margin_top", [], "any", false, false, false, 71) == "default")) {
                echo " jl-margin-top";
            } else {
                echo " jl-margin-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description_margin_top", [], "any", false, false, false, 71));
                echo "-top";
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description_color", [], "any", false, false, false, 71) != "default")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "description_color", [], "any", false, false, false, 71));
            }
            echo "\">
    ";
            // line 72
            echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle", [], "any", false, false, false, 72);
            echo "
  </div>
";
        }
        $context["subtitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 78) == "full")) {
            // line 79
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true;\"";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 80
($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 80) == "percent")) {
            // line 81
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 20;\"";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 82
($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 82) == "section")) {
            // line 83
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 50;\"";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 84
($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 84) == "expand")) {
            // line 85
            $context["viewport_height"] = " jl-height-viewport=\"expand: true;\"";
        }
        // line 89
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "padding", [], "any", false, false, false, 89) == "default")) {
            // line 90
            $context["padding"] = " jl-section";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 91
($context["particle"] ?? null), "padding", [], "any", false, false, false, 91) == "none")) {
            // line 92
            $context["padding"] = " jl-section jl-padding-remove-vertical";
        } else {
            // line 94
            $context["padding"] = (" jl-section jl-section-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "padding", [], "any", false, false, false, 94)));
        }
        // line 98
        $context["parallax_bg_color"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_color", [], "any", false, false, false, 98)) ? ((("style=\"background-color: " . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_color", [], "any", false, false, false, 98)) . ";\"")) : (""));
        // line 99
        $context["parallax_overlay"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_overlay", [], "any", false, false, false, 99)) ? ((("<div class=\"jl-position-cover\" style=\"background-color: " . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_overlay", [], "any", false, false, false, 99)) . ";\"></div>")) : (""));
        // line 102
        ob_start(function () { return ''; });
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth", [], "any", false, false, false, 103)) {
            echo " jl-width-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth", [], "any", false, false, false, 103), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_breakpoint", [], "any", false, false, false, 103)) {
                echo "@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_breakpoint", [], "any", false, false, false, 103), "html", null, true);
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_alignment", [], "any", false, false, false, 103) == "left")) {
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_alignment", [], "any", false, false, false, 103) == "center")) {
                echo " jl-margin-auto";
            } else {
                echo " jl-margin-auto-left";
            }
        }
        $context["content_maxwidth"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        ob_start(function () { return ''; });
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 108)) {
            // line 109
            $context["bg_container_maxwidth"] = ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 109) == "custom") || (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 109) == "default"))) ? ("g-container") : (("jl-container" . ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 109), [0 => "small", 1 => "large", 2 => "xlarge", 3 => "expand"])) ? ((" jl-container-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 109)))) : ("")))));
            // line 110
            if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_image_effect", [], "any", false, false, false, 110) == "parallax") && ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_start", [], "any", false, false, false, 110) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_end", [], "any", false, false, false, 110)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_start", [], "any", false, false, false, 110)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_end", [], "any", false, false, false, 110)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_easing", [], "any", false, false, false, 110)))) {
                // line 111
                ob_start(function () { return ''; });
                // line 112
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_start", [], "any", false, false, false, 112) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_end", [], "any", false, false, false, 112))) {
                    echo "bgx: ";
                    ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_start", [], "any", false, false, false, 112)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_start", [], "any", false, false, false, 112), "html", null, true))) : (print ("0")));
                    echo ",";
                    ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_end", [], "any", false, false, false, 112)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_end", [], "any", false, false, false, 112), "html", null, true))) : (print ("0")));
                    echo ";";
                }
                $context["parallax_bg_horizontal"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 114
                ob_start(function () { return ''; });
                // line 115
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_start", [], "any", false, false, false, 115) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_end", [], "any", false, false, false, 115))) {
                    echo "bgy: ";
                    ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_start", [], "any", false, false, false, 115)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_start", [], "any", false, false, false, 115), "html", null, true))) : (print ("0")));
                    echo ",";
                    ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_end", [], "any", false, false, false, 115)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_end", [], "any", false, false, false, 115), "html", null, true))) : (print ("0")));
                    echo ";";
                }
                $context["parallax_bg_vertical"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 117
                $context["parallax_easing"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_easing", [], "any", false, false, false, 117)) ? (("easing:" . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_easing", [], "any", false, false, false, 117))) : (""));
                // line 118
                $context["bgp_animation_cls"] = (((((" jl-parallax=\"" . ($context["parallax_bg_horizontal"] ?? null)) . ($context["parallax_bg_vertical"] ?? null)) . (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_breakpoint", [], "any", false, false, false, 118) != "always")) ? (((" media: @" . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_breakpoint", [], "any", false, false, false, 118)) . "")) : (""))) . ($context["parallax_easing"] ?? null)) . "\"");
            }
            // line 120
            echo "<div data-src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 120)));
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_image_loading", [], "any", false, false, false, 120)) {
                echo " loading=\"eager\"";
            }
            echo " jl-img class=\"jl-wrapper jl-background-norepeat";
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_overlay", [], "any", false, false, false, 120)) ? (" jl-position-relative") : (""));
            echo (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_image_effect", [], "any", false, false, false, 120) == "fixed")) ? (" jl-background-fixed") : (""));
            echo twig_escape_filter($this->env, ($context["padding"] ?? null), "html", null, true);
            echo " jl-background-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "background_image_position", [], "any", false, false, false, 120));
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "background_image_size", [], "any", false, false, false, 120) != "auto")) {
                echo " jl-background-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "background_image_size", [], "any", false, false, false, 120));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_visibility", [], "any", false, false, false, 120) != "always")) {
                echo " jl-background-image@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_visibility", [], "any", false, false, false, 120));
            }
            if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_alignment", [], "any", false, false, false, 120) != "none") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 120) != "none"))) {
                echo " jl-flex jl-flex-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_alignment", [], "any", false, false, false, 120));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_text_color", [], "any", false, false, false, 120) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_text_color", [], "any", false, false, false, 120));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "blendmode", [], "any", false, false, false, 120) != "inherit")) {
                echo " jl-background-blend-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "blendmode", [], "any", false, false, false, 120));
            }
            echo "\" ";
            echo ((array_key_exists("parallax_bg_color", $context)) ? (_twig_default_filter(($context["parallax_bg_color"] ?? null), "")) : (""));
            echo ($context["bgp_animation_cls"] ?? null);
            echo ($context["viewport_height"] ?? null);
            echo ">
";
            // line 121
            echo ($context["parallax_overlay"] ?? null);
            echo "
    <div class=\"";
            // line 122
            echo twig_escape_filter($this->env, ($context["bg_container_maxwidth"] ?? null), "html", null, true);
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_overlay", [], "any", false, false, false, 122)) ? (" jl-position-relative") : (""));
            echo "\">
        <div class=\"el-content\"> 
";
        }
        $context["parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        ob_start(function () { return ''; });
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 128)) {
            // line 129
            echo "        </div>
    </div>
</div>
";
        }
        $context["end_parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 136
        ob_start(function () { return ''; });
        // line 137
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_start", [], "any", false, false, false, 137) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_end", [], "any", false, false, false, 137))) {
            echo "x: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_start", [], "any", false, false, false, 137)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_start", [], "any", false, false, false, 137), "html", null, true))) : (print ("0")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_end", [], "any", false, false, false, 137)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_end", [], "any", false, false, false, 137), "html", null, true))) : (print ("0")));
            echo ";";
        }
        $context["pahorizontal"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 141
        ob_start(function () { return ''; });
        // line 142
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_start", [], "any", false, false, false, 142) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_end", [], "any", false, false, false, 142))) {
            echo "y: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_start", [], "any", false, false, false, 142)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_start", [], "any", false, false, false, 142), "html", null, true))) : (print ("0")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_end", [], "any", false, false, false, 142)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_end", [], "any", false, false, false, 142), "html", null, true))) : (print ("0")));
            echo ";";
        }
        $context["pavertical"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        ob_start(function () { return ''; });
        // line 147
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_start", [], "any", false, false, false, 147) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_end", [], "any", false, false, false, 147))) {
            echo "scale: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_start", [], "any", false, false, false, 147)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_start", [], "any", false, false, false, 147), "html", null, true))) : (print ("1")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_end", [], "any", false, false, false, 147)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_end", [], "any", false, false, false, 147), "html", null, true))) : (print ("1")));
            echo ";";
        }
        $context["scale"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        ob_start(function () { return ''; });
        // line 152
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_start", [], "any", false, false, false, 152) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_end", [], "any", false, false, false, 152))) {
            echo "rotate: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_start", [], "any", false, false, false, 152)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_start", [], "any", false, false, false, 152), "html", null, true))) : (print ("0")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_end", [], "any", false, false, false, 152)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_end", [], "any", false, false, false, 152), "html", null, true))) : (print ("0")));
            echo ";";
        }
        $context["rotate"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        ob_start(function () { return ''; });
        // line 157
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_start", [], "any", false, false, false, 157) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_end", [], "any", false, false, false, 157))) {
            echo "opacity: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_start", [], "any", false, false, false, 157)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_start", [], "any", false, false, false, 157), "html", null, true))) : (print ("1")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_end", [], "any", false, false, false, 157)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_end", [], "any", false, false, false, 157), "html", null, true))) : (print ("1")));
            echo ";";
        }
        $context["opacity"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        ob_start(function () { return ''; });
        // line 162
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation", [], "any", false, false, false, 162) == "parallax")) {
            // line 163
            $context["pa_z_index"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_z_index", [], "any", false, false, false, 163)) ? (" jl-position-z-index jl-position-relative") : (""));
            // line 164
            $context["parallax_transform_origin"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_transform_origin", [], "any", false, false, false, 164) != "center-center")) ? ((" jl-transform-origin-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_transform_origin", [], "any", false, false, false, 164)))) : (""));
            // line 165
            if ((((((((((((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_start", [], "any", false, false, false, 165) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_end", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_start", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_end", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_start", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_end", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_start", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_end", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_start", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_end", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "easing", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_start", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_end", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_breakpoint", [], "any", false, false, false, 165))) {
                echo " jl-parallax=\"";
                echo twig_escape_filter($this->env, ((((($context["pahorizontal"] ?? null) . ($context["pavertical"] ?? null)) . ($context["scale"] ?? null)) . ($context["rotate"] ?? null)) . ($context["opacity"] ?? null)), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "easing", [], "any", false, false, false, 165)) {
                    echo "easing: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "easing", [], "any", false, false, false, 165));
                    echo ";";
                }
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_start", [], "any", false, false, false, 165)) {
                    echo "start: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_start", [], "any", false, false, false, 165));
                    echo ";";
                }
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_end", [], "any", false, false, false, 165)) {
                    echo "end: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_end", [], "any", false, false, false, 165));
                    echo ";";
                }
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_breakpoint", [], "any", false, false, false, 165) != "always")) {
                    echo "media: @";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_breakpoint", [], "any", false, false, false, 165));
                }
                echo "\"";
            }
        } elseif (twig_get_attribute($this->env, $this->source,         // line 166
($context["particle"] ?? null), "animation", [], "any", false, false, false, 166)) {
            // line 167
            echo " jl-scrollspy=\"cls: jl-animation-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation", [], "any", false, false, false, 167));
            echo ";";
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation_repeat", [], "any", false, false, false, 167) == "enabled")) {
                echo " repeat: true;";
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation_delay", [], "any", false, false, false, 167)) {
                echo " delay: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation_delay", [], "any", false, false, false, 167));
                echo ";";
            }
            echo "\"
";
        }
        $context["animation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 172
        ob_start(function () { return ''; });
        // line 173
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 173) != "inherit")) {
            echo " jl-text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 173));
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 173) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 173));
            }
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 173) != "inherit") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 173) != "always"))) {
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "fallback", [], "any", false, false, false, 173) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "fallback", [], "any", false, false, false, 173));
            }
        }
        $context["particle_alignment"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 177
        ob_start(function () { return ''; });
        // line 178
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title", [], "any", false, false, false, 178)) {
            // line 179
            echo "<";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_element", [], "any", false, false, false, 179));
            echo " id=\"el-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g5-title";
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_align", [], "any", false, false, false, 179) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_align", [], "any", false, false, false, 179));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_predefined_color", [], "any", false, false, false, 179) != "default")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_predefined_color", [], "any", false, false, false, 179));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_style", [], "any", false, false, false, 179) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_style", [], "any", false, false, false, 179));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_decoration", [], "any", false, false, false, 179) != "none")) {
                echo " jl-heading-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_decoration", [], "any", false, false, false, 179));
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_text_transform", [], "any", false, false, false, 179)) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_text_transform", [], "any", false, false, false, 179));
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_font_weight", [], "any", false, false, false, 179)) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_font_weight", [], "any", false, false, false, 179));
            }
            echo "\">
";
            // line 180
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_decoration", [], "any", false, false, false, 180) == "line")) {
                echo " <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title", [], "any", false, false, false, 180);
                echo "</span>
";
            } else {
                // line 181
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title", [], "any", false, false, false, 181);
                echo "
";
            }
            // line 183
            echo "</";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_element", [], "any", false, false, false, 183));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 188) != "inherit")) {
            // line 189
            $context["visibility"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 189), [0 => "s", 1 => "m", 2 => "l", 3 => "xl"])) ? ((" jl-visible@" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 189)))) : ((" jl-" . twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 189), ["-" => "@"]))));
        }
        // line 193
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "margin", [], "any", false, false, false, 193) != "inherit")) {
            // line 194
            $context["margin"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "margin", [], "any", false, false, false, 194) != "default")) ? ((" jl-margin-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "margin", [], "any", false, false, false, 194)))) : (" jl-margin"));
        }
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jlheading.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (((((((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_color", [], "any", false, false, false, 4) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_fontsize", [], "any", false, false, false, 4)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_color", [], "any", false, false, false, 4)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_fontsize", [], "any", false, false, false, 4)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle_color", [], "any", false, false, false, 4)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle_fontsize", [], "any", false, false, false, 4)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_color", [], "any", false, false, false, 4)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_width", [], "any", false, false, false, 4)) || ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 4) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 4) == "custom")) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_container_width", [], "any", false, false, false, 4))))) {
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
                echo ".";
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
                echo ".";
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
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_color", [], "any", false, false, false, 15)) {
                // line 16
                $context["decoration_divider_color"] = ((" border-color: " . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_color", [], "any", false, false, false, 16)) . ";");
                // line 17
                $context["decoration_bullet_color"] = ((" border-left-color: " . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_color", [], "any", false, false, false, 17)) . ";");
                // line 18
                $context["decoration_line_color"] = ((" border-bottom-color: " . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_color", [], "any", false, false, false, 18)) . ";");
            }
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_width", [], "any", false, false, false, 20)) {
                // line 21
                $context["decoration_width"] = (("border-width: " . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_width", [], "any", false, false, false, 21)) . "px;");
            }
            // line 23
            if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration", [], "any", false, false, false, 23) == "divider") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_color", [], "any", false, false, false, 23) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_width", [], "any", false, false, false, 23)))) {
                // line 24
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-heading-divider { ";
                echo twig_escape_filter($this->env, (($context["decoration_divider_color"] ?? null) . ($context["decoration_width"] ?? null)), "html", null, true);
                echo " }
";
            }
            // line 26
            if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration", [], "any", false, false, false, 26) == "bullet") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_color", [], "any", false, false, false, 26) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_width", [], "any", false, false, false, 26)))) {
                // line 27
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-heading-bullet::before { ";
                echo twig_escape_filter($this->env, (($context["decoration_bullet_color"] ?? null) . ($context["decoration_width"] ?? null)), "html", null, true);
                echo " }
";
            }
            // line 29
            if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration", [], "any", false, false, false, 29) == "line") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_color", [], "any", false, false, false, 29) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "decoration_width", [], "any", false, false, false, 29)))) {
                // line 30
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-heading-line>::after, .";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo " .jl-heading-line>::before { ";
                echo twig_escape_filter($this->env, (($context["decoration_line_color"] ?? null) . ($context["decoration_width"] ?? null)), "html", null, true);
                echo " }
";
            }
            // line 32
            if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 32) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 32) == "custom")) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_container_width", [], "any", false, false, false, 32)))) {
                // line 33
                echo ".";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-particle .g-container {
    max-width: ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_container_width", [], "any", false, false, false, 34));
                echo ";
}
";
            }
            // line 37
            echo "</style>
";
        }
    }

    // line 41
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation", [], "any", false, false, false, 42) == "parallax") || (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_image_effect", [], "any", false, false, false, 42) == "parallax"))) {
            // line 43
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc("gantry-theme://js/jlcomponents/parallax.min.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    // line 197
    public function block_particle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "enabled", [], "any", false, false, false, 198) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title", [], "any", false, false, false, 198) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "subtitle", [], "any", false, false, false, 198)))) {
            // line 199
            echo twig_escape_filter($this->env, ($context["parallax_background"] ?? null), "html", null, true);
            echo "
";
            // line 200
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "
<div class=\"";
            // line 201
            echo twig_escape_filter($this->env, ((((((($context["id"] ?? null) . ($context["content_maxwidth"] ?? null)) . ($context["particle_alignment"] ?? null)) . ($context["pa_z_index"] ?? null)) . ($context["parallax_transform_origin"] ?? null)) . ($context["margin"] ?? null)) . ($context["visibility"] ?? null)), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "class", [], "any", false, false, false, 201)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "class", [], "any", false, false, false, 201), "html", null, true);
            }
            echo "\"";
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo ">
    ";
            // line 202
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "
    ";
            // line 203
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
            echo "
</div>
";
            // line 205
            echo twig_escape_filter($this->env, ($context["end_parallax_background"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/jlheading.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  668 => 205,  663 => 203,  659 => 202,  649 => 201,  645 => 200,  641 => 199,  639 => 198,  635 => 197,  627 => 43,  625 => 42,  621 => 41,  615 => 37,  609 => 34,  604 => 33,  602 => 32,  592 => 30,  590 => 29,  582 => 27,  580 => 26,  572 => 24,  570 => 23,  567 => 21,  565 => 20,  562 => 18,  560 => 17,  558 => 16,  556 => 15,  539 => 13,  537 => 12,  520 => 10,  518 => 9,  501 => 7,  499 => 6,  496 => 5,  494 => 4,  490 => 3,  485 => 1,  482 => 194,  480 => 193,  477 => 189,  475 => 188,  468 => 183,  462 => 181,  455 => 180,  423 => 179,  421 => 178,  419 => 177,  403 => 173,  401 => 172,  385 => 167,  383 => 166,  358 => 165,  356 => 164,  354 => 163,  352 => 162,  350 => 161,  341 => 157,  339 => 156,  330 => 152,  328 => 151,  319 => 147,  317 => 146,  308 => 142,  306 => 141,  297 => 137,  295 => 136,  288 => 129,  286 => 128,  284 => 127,  276 => 122,  272 => 121,  233 => 120,  230 => 118,  228 => 117,  219 => 115,  217 => 114,  208 => 112,  206 => 111,  204 => 110,  202 => 109,  200 => 108,  198 => 107,  182 => 103,  180 => 102,  178 => 99,  176 => 98,  173 => 94,  170 => 92,  168 => 91,  166 => 90,  164 => 89,  161 => 85,  159 => 84,  157 => 83,  155 => 82,  153 => 81,  151 => 80,  149 => 79,  147 => 78,  140 => 72,  120 => 71,  118 => 70,  116 => 69,  109 => 64,  104 => 63,  95 => 62,  79 => 61,  60 => 60,  58 => 59,  56 => 58,  54 => 55,  52 => 54,  50 => 53,  48 => 52,  46 => 51,  44 => 48,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlheading.html.twig", "E:\\XAMPP\\htdocs\\CAIM2\\templates\\jl_kickoff\\particles\\jlheading.html.twig");
    }
}
