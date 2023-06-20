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

/* @particles/jlimage.html.twig */
class __TwigTemplate_cfd12f338c9de8b33d8c1b78805811a1 extends \Twig\Template
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
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 25) == "full")) {
            // line 26
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true;\"";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 27
($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 27) == "percent")) {
            // line 28
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 20;\"";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 29
($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 29) == "section")) {
            // line 30
            $context["viewport_height"] = " jl-height-viewport=\"offset-top: true; offset-bottom: 50;\"";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 31
($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 31) == "expand")) {
            // line 32
            $context["viewport_height"] = " jl-height-viewport=\"expand: true;\"";
        }
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "padding", [], "any", false, false, false, 36) == "default")) {
            // line 37
            $context["padding"] = " jl-section";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 38
($context["particle"] ?? null), "padding", [], "any", false, false, false, 38) == "none")) {
            // line 39
            $context["padding"] = " jl-section jl-padding-remove-vertical";
        } else {
            // line 41
            $context["padding"] = (" jl-section jl-section-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "padding", [], "any", false, false, false, 41)));
        }
        // line 45
        $context["parallax_bg_color"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_color", [], "any", false, false, false, 45)) ? ((("style=\"background-color: " . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_color", [], "any", false, false, false, 45)) . ";\"")) : (""));
        // line 46
        $context["parallax_overlay"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_overlay", [], "any", false, false, false, 46)) ? ((("<div class=\"jl-position-cover\" style=\"background-color: " . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_overlay", [], "any", false, false, false, 46)) . ";\"></div>")) : (""));
        // line 49
        ob_start(function () { return ''; });
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth", [], "any", false, false, false, 50) != "inherit")) {
            echo " jl-width-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth", [], "any", false, false, false, 50), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_breakpoint", [], "any", false, false, false, 50) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_breakpoint", [], "any", false, false, false, 50), "html", null, true);
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_alignment", [], "any", false, false, false, 50) == "left")) {
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_alignment", [], "any", false, false, false, 50) == "center")) {
                echo " jl-margin-auto";
            } else {
                echo " jl-margin-auto-left";
            }
        }
        $context["content_maxwidth"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        ob_start(function () { return ''; });
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 55)) {
            // line 56
            $context["bg_container_maxwidth"] = ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 56) == "custom") || (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 56) == "default"))) ? ("g-container") : (("jl-container" . ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 56), [0 => "small", 1 => "large", 2 => "xlarge", 3 => "expand"])) ? ((" jl-container-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 56)))) : ("")))));
            // line 57
            if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_image_effect", [], "any", false, false, false, 57) == "parallax") && ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_start", [], "any", false, false, false, 57) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_end", [], "any", false, false, false, 57)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_start", [], "any", false, false, false, 57)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_end", [], "any", false, false, false, 57)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_easing", [], "any", false, false, false, 57)))) {
                // line 58
                ob_start(function () { return ''; });
                // line 59
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_start", [], "any", false, false, false, 59) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_end", [], "any", false, false, false, 59))) {
                    echo "bgx: ";
                    ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_start", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_start", [], "any", false, false, false, 59), "html", null, true))) : (print ("0")));
                    echo ",";
                    ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_end", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "horizontal_end", [], "any", false, false, false, 59), "html", null, true))) : (print ("0")));
                    echo ";";
                }
                $context["parallax_bg_horizontal"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 61
                ob_start(function () { return ''; });
                // line 62
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_start", [], "any", false, false, false, 62) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_end", [], "any", false, false, false, 62))) {
                    echo "bgy: ";
                    ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_start", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_start", [], "any", false, false, false, 62), "html", null, true))) : (print ("0")));
                    echo ",";
                    ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_end", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_end", [], "any", false, false, false, 62), "html", null, true))) : (print ("0")));
                    echo ";";
                }
                $context["parallax_bg_vertical"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 64
                $context["parallax_easing"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_easing", [], "any", false, false, false, 64)) ? (("easing:" . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_easing", [], "any", false, false, false, 64))) : (""));
                // line 65
                $context["bgp_animation_cls"] = (((((" jl-parallax=\"" . ($context["parallax_bg_horizontal"] ?? null)) . ($context["parallax_bg_vertical"] ?? null)) . (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_breakpoint", [], "any", false, false, false, 65) != "always")) ? (((" media: @" . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_breakpoint", [], "any", false, false, false, 65)) . "")) : (""))) . ($context["parallax_easing"] ?? null)) . "\"");
            }
            // line 67
            echo "<div data-src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 67)));
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_image_loading", [], "any", false, false, false, 67)) {
                echo " loading=\"eager\"";
            }
            echo " jl-img class=\"jl-wrapper jl-background-norepeat";
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_overlay", [], "any", false, false, false, 67)) ? (" jl-position-relative") : (""));
            echo (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_image_effect", [], "any", false, false, false, 67) == "fixed")) ? (" jl-background-fixed") : (""));
            echo twig_escape_filter($this->env, ($context["padding"] ?? null), "html", null, true);
            echo " jl-background-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "background_image_position", [], "any", false, false, false, 67));
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "background_image_size", [], "any", false, false, false, 67) != "auto")) {
                echo " jl-background-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "background_image_size", [], "any", false, false, false, 67));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_visibility", [], "any", false, false, false, 67) != "always")) {
                echo " jl-background-image@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_visibility", [], "any", false, false, false, 67));
            }
            if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_alignment", [], "any", false, false, false, 67) != "none") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "viewport_height", [], "any", false, false, false, 67) != "none"))) {
                echo " jl-flex jl-flex-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "vertical_alignment", [], "any", false, false, false, 67));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_text_color", [], "any", false, false, false, 67) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_text_color", [], "any", false, false, false, 67));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "blendmode", [], "any", false, false, false, 67) != "inherit")) {
                echo " jl-background-blend-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "blendmode", [], "any", false, false, false, 67));
            }
            echo "\" ";
            echo ((array_key_exists("parallax_bg_color", $context)) ? (_twig_default_filter(($context["parallax_bg_color"] ?? null), "")) : (""));
            echo ($context["bgp_animation_cls"] ?? null);
            echo ($context["viewport_height"] ?? null);
            echo ">
";
            // line 68
            echo ($context["parallax_overlay"] ?? null);
            echo "
    <div class=\"";
            // line 69
            echo twig_escape_filter($this->env, ($context["bg_container_maxwidth"] ?? null), "html", null, true);
            echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_bg_overlay", [], "any", false, false, false, 69)) ? (" jl-position-relative") : (""));
            echo "\">
        <div class=\"el-content\"> 
";
        }
        $context["parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        ob_start(function () { return ''; });
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 75)) {
            // line 76
            echo "        </div>
    </div>
</div>
";
        }
        $context["end_parallax_background"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        ob_start(function () { return ''; });
        // line 84
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_start", [], "any", false, false, false, 84) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_end", [], "any", false, false, false, 84))) {
            echo "x: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_start", [], "any", false, false, false, 84)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_start", [], "any", false, false, false, 84), "html", null, true))) : (print ("0")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_end", [], "any", false, false, false, 84)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_end", [], "any", false, false, false, 84), "html", null, true))) : (print ("0")));
            echo ";";
        }
        $context["pahorizontal"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        ob_start(function () { return ''; });
        // line 89
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_start", [], "any", false, false, false, 89) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_end", [], "any", false, false, false, 89))) {
            echo "y: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_start", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_start", [], "any", false, false, false, 89), "html", null, true))) : (print ("0")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_end", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_end", [], "any", false, false, false, 89), "html", null, true))) : (print ("0")));
            echo ";";
        }
        $context["pavertical"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        ob_start(function () { return ''; });
        // line 94
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_start", [], "any", false, false, false, 94) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_end", [], "any", false, false, false, 94))) {
            echo "scale: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_start", [], "any", false, false, false, 94)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_start", [], "any", false, false, false, 94), "html", null, true))) : (print ("1")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_end", [], "any", false, false, false, 94)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_end", [], "any", false, false, false, 94), "html", null, true))) : (print ("1")));
            echo ";";
        }
        $context["scale"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        ob_start(function () { return ''; });
        // line 99
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_start", [], "any", false, false, false, 99) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_end", [], "any", false, false, false, 99))) {
            echo "rotate: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_start", [], "any", false, false, false, 99)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_start", [], "any", false, false, false, 99), "html", null, true))) : (print ("0")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_end", [], "any", false, false, false, 99)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_end", [], "any", false, false, false, 99), "html", null, true))) : (print ("0")));
            echo ";";
        }
        $context["rotate"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        ob_start(function () { return ''; });
        // line 104
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_start", [], "any", false, false, false, 104) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_end", [], "any", false, false, false, 104))) {
            echo "opacity: ";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_start", [], "any", false, false, false, 104)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_start", [], "any", false, false, false, 104), "html", null, true))) : (print ("1")));
            echo ",";
            ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_end", [], "any", false, false, false, 104)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_end", [], "any", false, false, false, 104), "html", null, true))) : (print ("1")));
            echo ";";
        }
        $context["opacity"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        ob_start(function () { return ''; });
        // line 109
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation", [], "any", false, false, false, 109) == "parallax")) {
            // line 110
            $context["pa_z_index"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_z_index", [], "any", false, false, false, 110)) ? (" jl-position-z-index jl-position-relative") : (""));
            // line 111
            $context["parallax_transform_origin"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_transform_origin", [], "any", false, false, false, 111) != "center-center")) ? ((" jl-transform-origin-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_transform_origin", [], "any", false, false, false, 111)))) : (""));
            // line 112
            if ((((((((((((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_start", [], "any", false, false, false, 112) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_horizontal_end", [], "any", false, false, false, 112)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_start", [], "any", false, false, false, 112)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_vertical_end", [], "any", false, false, false, 112)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_start", [], "any", false, false, false, 112)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "scale_end", [], "any", false, false, false, 112)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_start", [], "any", false, false, false, 112)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "rotate_end", [], "any", false, false, false, 112)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_start", [], "any", false, false, false, 112)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "opacity_end", [], "any", false, false, false, 112)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "easing", [], "any", false, false, false, 112)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_start", [], "any", false, false, false, 112)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_end", [], "any", false, false, false, 112)) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_breakpoint", [], "any", false, false, false, 112))) {
                echo " jl-parallax=\"";
                echo twig_escape_filter($this->env, ((((($context["pahorizontal"] ?? null) . ($context["pavertical"] ?? null)) . ($context["scale"] ?? null)) . ($context["rotate"] ?? null)) . ($context["opacity"] ?? null)), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "easing", [], "any", false, false, false, 112)) {
                    echo "easing: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "easing", [], "any", false, false, false, 112));
                    echo ";";
                }
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_start", [], "any", false, false, false, 112)) {
                    echo "start: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_start", [], "any", false, false, false, 112));
                    echo ";";
                }
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_end", [], "any", false, false, false, 112)) {
                    echo "end: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_end", [], "any", false, false, false, 112));
                    echo ";";
                }
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_breakpoint", [], "any", false, false, false, 112) != "always")) {
                    echo "media: @";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "pa_breakpoint", [], "any", false, false, false, 112));
                }
                echo "\"";
            }
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 113
($context["particle"] ?? null), "animation", [], "any", false, false, false, 113) != "inherit")) {
            // line 114
            echo " jl-scrollspy=\"cls: jl-animation-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation", [], "any", false, false, false, 114));
            echo ";";
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation_repeat", [], "any", false, false, false, 114) == "enabled")) {
                echo " repeat: true;";
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation_delay", [], "any", false, false, false, 114)) {
                echo " delay: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation_delay", [], "any", false, false, false, 114));
                echo ";";
            }
            echo "\"
";
        }
        $context["animation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 119
        ob_start(function () { return ''; });
        // line 120
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 120) != "inherit")) {
            echo " jl-text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 120));
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 120) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 120));
            }
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 120) != "inherit") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 120) != "always"))) {
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "fallback", [], "any", false, false, false, 120) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "fallback", [], "any", false, false, false, 120));
            }
        }
        $context["particle_alignment"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 124
        ob_start(function () { return ''; });
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title", [], "any", false, false, false, 125)) {
            // line 126
            echo "<";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_element", [], "any", false, false, false, 126));
            echo " id=\"el-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g5-title";
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_align", [], "any", false, false, false, 126) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_align", [], "any", false, false, false, 126));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_predefined_color", [], "any", false, false, false, 126) != "default")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_predefined_color", [], "any", false, false, false, 126));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_style", [], "any", false, false, false, 126) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_style", [], "any", false, false, false, 126));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_decoration", [], "any", false, false, false, 126) != "none")) {
                echo " jl-heading-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_decoration", [], "any", false, false, false, 126));
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_text_transform", [], "any", false, false, false, 126)) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_text_transform", [], "any", false, false, false, 126));
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_font_weight", [], "any", false, false, false, 126)) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_font_weight", [], "any", false, false, false, 126));
            }
            echo "\">
";
            // line 127
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_decoration", [], "any", false, false, false, 127) == "line")) {
                echo " <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title", [], "any", false, false, false, 127);
                echo "</span>
";
            } else {
                // line 128
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title", [], "any", false, false, false, 128);
                echo "
";
            }
            // line 130
            echo "</";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_element", [], "any", false, false, false, 130));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        $context["linkscroll"] = (((preg_match("/#/", twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "link", [], "any", false, false, false, 135))) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "target", [], "any", false, false, false, 135) == "_self"))) ? (" jl-scroll") : (""));
        // line 137
        $context["extra_shadow"] = ((((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "link", [], "any", false, false, false, 137)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_popup", [], "any", false, false, false, 137))) && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "extra_shadow", [], "any", false, false, false, 137))) ? (" jl-box-shadow-bottom") : (""));
        // line 140
        $context["image_width"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_width", [], "any", false, false, false, 140)) ? (((" width=\"" . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_width", [], "any", false, false, false, 140)) . "\"")) : (""));
        // line 141
        $context["image_height"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_height", [], "any", false, false, false, 141)) ? (((" height=\"" . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_height", [], "any", false, false, false, 141)) . "\"")) : (""));
        // line 144
        $context["image_transition"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_transition", [], "any", false, false, false, 144) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "link", [], "any", false, false, false, 144) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_popup", [], "any", false, false, false, 144)))) ? (((" jl-transition-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_transition", [], "any", false, false, false, 144))) . " jl-transition-opaque")) : (""));
        // line 145
        $context["image_border_cls"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "border", [], "any", false, false, false, 145) != "none")) ? ((" jl-border-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "border", [], "any", false, false, false, 145)))) : (""));
        // line 146
        $context["img_boxshadow"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "box_shadow", [], "any", false, false, false, 146) != "none")) ? ((" jl-box-shadow-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "box_shadow", [], "any", false, false, false, 146)))) : (""));
        // line 147
        $context["img_boxshadow_hover"] = ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "box_shadow_hover", [], "any", false, false, false, 147) != "none") && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "link", [], "any", false, false, false, 147))) ? ((" jl-box-shadow-hover-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "box_shadow_hover", [], "any", false, false, false, 147)))) : (""));
        // line 148
        $context["image_size"] = (((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_width", [], "any", false, false, false, 148)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_height", [], "any", false, false, false, 148)))) ? ((" " . $this->extensions['Gantry\Component\Twig\TwigExtension']->imageSize(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image", [], "any", false, false, false, 148)))) : (""));
        // line 151
        $context["link_transition"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "link", [], "any", false, false, false, 151) && twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_transition", [], "any", false, false, false, 151))) ? (" jl-inline-clip jl-transition-toggle") : (""));
        // line 154
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 154) != "inherit")) {
            // line 155
            $context["visibility"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 155), [0 => "s", 1 => "m", 2 => "l", 3 => "xl"])) ? ((" jl-visible@" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 155)))) : ((" jl-" . twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 155), ["-" => "@"]))));
        }
        // line 159
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "margin", [], "any", false, false, false, 159) != "inherit")) {
            // line 160
            $context["margin"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "margin", [], "any", false, false, false, 160) != "default")) ? ((" jl-margin-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "margin", [], "any", false, false, false, 160)))) : (" jl-margin"));
        }
        // line 163
        $context["image_loading"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_loading", [], "any", false, false, false, 163) == false)) ? (" loading=\"lazy\"") : (""));
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jlimage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_color", [], "any", false, false, false, 4) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_fontsize", [], "any", false, false, false, 4)) || ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 4) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 4) == "custom")) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_container_width", [], "any", false, false, false, 4))))) {
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
                    echo " font-size: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_fontsize", [], "any", false, false, false, 7), "html", null, true);
                    echo "px;";
                }
                echo " }
";
            }
            // line 9
            if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "parallax_image", [], "any", false, false, false, 9) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "container_maxwidth", [], "any", false, false, false, 9) == "custom")) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_container_width", [], "any", false, false, false, 9)))) {
                // line 10
                echo "#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "-particle .g-container {
    max-width: ";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_container_width", [], "any", false, false, false, 11));
                echo ";
}
";
            }
            // line 14
            echo "</style>
";
        }
    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation", [], "any", false, false, false, 19) == "parallax") || (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "bg_image_effect", [], "any", false, false, false, 19) == "parallax"))) {
            // line 20
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc("gantry-theme://js/jlcomponents/parallax.min.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    // line 165
    public function block_particle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "enabled", [], "any", false, false, false, 166)) {
            // line 167
            echo twig_escape_filter($this->env, ($context["parallax_background"] ?? null), "html", null, true);
            echo "
";
            // line 168
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "
<div id=\"";
            // line 169
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (((((((($context["id"] ?? null) . ($context["content_maxwidth"] ?? null)) . ($context["extra_shadow"] ?? null)) . ($context["particle_alignment"] ?? null)) . ($context["pa_z_index"] ?? null)) . ($context["parallax_transform_origin"] ?? null)) . ($context["margin"] ?? null)) . ($context["visibility"] ?? null)), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "class", [], "any", false, false, false, 169)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "class", [], "any", false, false, false, 169), "html", null, true);
            }
            echo "\"";
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo ">
  
  ";
            // line 171
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "link", [], "any", false, false, false, 171) || (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "target", [], "any", false, false, false, 171) == "modal"))) {
                // line 172
                echo "    <a class=\"tm-link";
                echo ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "extra_shadow", [], "any", false, false, false, 172)) ? (" jl-box-shadow-bottom") : (""));
                echo twig_escape_filter($this->env, (((($context["image_border_cls"] ?? null) . ($context["img_boxshadow"] ?? null)) . ($context["img_boxshadow_hover"] ?? null)) . ($context["link_transition"] ?? null)), "html", null, true);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "target", [], "any", false, false, false, 172) == "modal")) {
                    echo " href=\"#";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" jl-toggle";
                } else {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "link", [], "any", false, false, false, 172));
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "target", [], "any", true, true, false, 172)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "target", [], "any", false, false, false, 172), "_self")) : ("_self")));
                    echo "\"";
                    echo twig_escape_filter($this->env, ($context["linkscroll"] ?? null), "html", null, true);
                }
                echo ">
  ";
            }
            // line 174
            echo "
  <img src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image", [], "any", false, false, false, 175)));
            echo "\"";
            echo ($context["image_width"] ?? null);
            echo ($context["image_height"] ?? null);
            echo ($context["image_size"] ?? null);
            echo " alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_alt", [], "any", false, false, false, 175));
            echo "\" class=\"tm-image";
            echo twig_escape_filter($this->env, ($context["image_transition"] ?? null), "html", null, true);
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "link", [], "any", false, false, false, 175))) {
                echo twig_escape_filter($this->env, ($context["image_border_cls"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["img_boxshadow"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["img_boxshadow_hover"] ?? null), "html", null, true);
            }
            echo "\"";
            echo ($context["image_loading"] ?? null);
            echo ">

  ";
            // line 177
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "link", [], "any", false, false, false, 177) || (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "target", [], "any", false, false, false, 177) == "modal"))) {
                // line 178
                echo "    </a>
  ";
            }
            // line 180
            echo "
  ";
            // line 181
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "target", [], "any", false, false, false, 181) == "modal")) {
                // line 182
                echo "  <div id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"jl-flex-top jl-modal\" jl-modal>
    <div class=\"jl-modal-dialog";
                // line 183
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "md_title", [], "any", false, false, false, 183) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "md_content", [], "any", false, false, false, 183))) {
                    echo " jl-modal-body";
                }
                if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "center_modal", [], "any", false, false, false, 183)) {
                    echo " jl-margin-auto-vertical";
                }
                echo "\">
    <button class=\"jl-modal-close-";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "close_button", [], "any", false, false, false, 184), "html", null, true);
                echo "\" type=\"button\" jl-close></button>
      ";
                // line 185
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "md_title", [], "any", false, false, false, 185) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "md_content", [], "any", false, false, false, 185))) {
                    // line 186
                    echo "\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "md_title", [], "any", false, false, false, 186)) {
                        // line 187
                        echo "\t\t\t<";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_element", [], "any", false, false, false, 187));
                        echo " class=\"jl-modal-title";
                        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_color", [], "any", false, false, false, 187) != "default")) {
                            echo " jl-text-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_color", [], "any", false, false, false, 187));
                        }
                        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_style", [], "any", false, false, false, 187) != "default")) {
                            echo " jl-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_style", [], "any", false, false, false, 187));
                        }
                        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_decoration", [], "any", false, false, false, 187) != "none")) {
                            echo " jl-heading-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_decoration", [], "any", false, false, false, 187));
                        }
                        echo "\">
\t\t\t";
                        // line 188
                        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_decoration", [], "any", false, false, false, 188) == "line")) {
                            echo " <span>";
                            echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "md_title", [], "any", false, false, false, 188);
                            echo "</span>
\t\t\t";
                        } else {
                            // line 190
                            echo "\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "md_title", [], "any", false, false, false, 190);
                            echo "
\t\t\t";
                        }
                        // line 192
                        echo "\t\t\t</";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "title_element", [], "any", false, false, false, 192));
                        echo ">
\t\t\t";
                    }
                    // line 194
                    echo "\t\t\t<div class=\"jl-margin-";
                    (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "content_margin_top", [], "any", false, false, false, 194) == "default")) ? (print ("top")) : (print (twig_escape_filter($this->env, (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "content_margin_top", [], "any", false, false, false, 194)) . "-top"), "html", null, true))));
                    if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "content_style", [], "any", false, false, false, 194) != "default")) {
                        echo " jl-text-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "content_style", [], "any", false, false, false, 194));
                    }
                    echo "\">
        ";
                    // line 195
                    $context["md_content"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "twig", [], "any", false, false, false, 195)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "theme", [], "any", false, false, false, 195), "compile", [0 => twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "md_content", [], "any", false, false, false, 195)], "method", false, false, false, 195)) : (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "md_content", [], "any", false, false, false, 195)));
                    // line 196
                    echo "        ";
                    echo $this->extensions['Gantry\Component\Twig\TwigExtension']->htmlFilter(((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "filter", [], "any", false, false, false, 196)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "platform", [], "any", false, false, false, 196), "filter", [0 => ($context["md_content"] ?? null)], "method", false, false, false, 196)) : (($context["md_content"] ?? null))));
                    echo "
\t\t\t</div>
      ";
                } else {
                    // line 199
                    echo "      <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image", [], "any", false, false, false, 199)));
                    echo "\"";
                    echo ($context["image_size"] ?? null);
                    echo " class=\"tm-image\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_alt", [], "any", false, false, false, 199));
                    echo "\">
  ";
                }
                // line 201
                echo "    </div>
    </div>
  ";
            }
            // line 204
            echo "
</div>
";
            // line 206
            echo twig_escape_filter($this->env, ($context["end_parallax_background"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/jlimage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 206,  646 => 204,  641 => 201,  631 => 199,  624 => 196,  622 => 195,  613 => 194,  607 => 192,  601 => 190,  594 => 188,  576 => 187,  573 => 186,  571 => 185,  567 => 184,  558 => 183,  553 => 182,  551 => 181,  548 => 180,  544 => 178,  542 => 177,  522 => 175,  519 => 174,  499 => 172,  497 => 171,  484 => 169,  480 => 168,  476 => 167,  474 => 166,  470 => 165,  462 => 20,  460 => 19,  456 => 18,  450 => 14,  444 => 11,  439 => 10,  437 => 9,  420 => 7,  418 => 6,  415 => 5,  413 => 4,  409 => 3,  404 => 1,  402 => 163,  399 => 160,  397 => 159,  394 => 155,  392 => 154,  390 => 151,  388 => 148,  386 => 147,  384 => 146,  382 => 145,  380 => 144,  378 => 141,  376 => 140,  374 => 137,  372 => 135,  365 => 130,  359 => 128,  352 => 127,  320 => 126,  318 => 125,  316 => 124,  300 => 120,  298 => 119,  282 => 114,  280 => 113,  255 => 112,  253 => 111,  251 => 110,  249 => 109,  247 => 108,  238 => 104,  236 => 103,  227 => 99,  225 => 98,  216 => 94,  214 => 93,  205 => 89,  203 => 88,  194 => 84,  192 => 83,  185 => 76,  183 => 75,  181 => 74,  173 => 69,  169 => 68,  130 => 67,  127 => 65,  125 => 64,  116 => 62,  114 => 61,  105 => 59,  103 => 58,  101 => 57,  99 => 56,  97 => 55,  95 => 54,  79 => 50,  77 => 49,  75 => 46,  73 => 45,  70 => 41,  67 => 39,  65 => 38,  63 => 37,  61 => 36,  58 => 32,  56 => 31,  54 => 30,  52 => 29,  50 => 28,  48 => 27,  46 => 26,  44 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlimage.html.twig", "E:\\XAMPP\\htdocs\\CAIM2\\templates\\jl_kickoff\\particles\\jlimage.html.twig");
    }
}
