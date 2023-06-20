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

/* @particles/jlfooterinfo.html.twig */
class __TwigTemplate_a51ed3dfbee157170c52f616b1ffcd2c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        // line 14
        ob_start(function () { return ''; });
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation", [], "any", false, false, false, 15) != "inherit")) {
            echo " jl-scrollspy=\"cls: jl-animation-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation", [], "any", false, false, false, 15));
            echo ";";
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation_repeat", [], "any", false, false, false, 15) == "enabled")) {
                echo " repeat: true;";
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation_delay", [], "any", false, false, false, 15)) {
                echo " delay: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "animation_delay", [], "any", false, false, false, 15));
                echo ";";
            }
            echo "\"";
        }
        $context["animation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        ob_start(function () { return ''; });
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth", [], "any", false, false, false, 20) != "inherit")) {
            echo " jl-width-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth", [], "any", false, false, false, 20), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_breakpoint", [], "any", false, false, false, 20) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_breakpoint", [], "any", false, false, false, 20), "html", null, true);
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_alignment", [], "any", false, false, false, 20) == "left")) {
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "g_maxwidth_alignment", [], "any", false, false, false, 20) == "center")) {
                echo " jl-margin-auto";
            } else {
                echo " jl-margin-auto-left";
            }
        }
        $context["content_maxwidth"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        ob_start(function () { return ''; });
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 25) != "inherit")) {
            echo " jl-text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 25));
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 25) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 25));
            }
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 25) != "inherit") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 25) != "always"))) {
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "fallback", [], "any", false, false, false, 25) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "fallback", [], "any", false, false, false, 25));
            }
        }
        $context["particle_alignment"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 29
        ob_start(function () { return ''; });
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 30) != "inherit")) {
            echo " jl-flex jl-flex-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 30));
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 30) != "always")) {
                echo "@";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 30));
            }
        }
        if (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "align", [], "any", false, false, false, 30) != "inherit") && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "breakpoint", [], "any", false, false, false, 30) != "always"))) {
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "fallback", [], "any", false, false, false, 30) != "inherit")) {
                echo " jl-flex-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "fallback", [], "any", false, false, false, 30));
            }
        }
        $context["grid_alignment"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        ob_start(function () { return ''; });
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title", [], "any", false, false, false, 35)) {
            // line 36
            echo "<";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_element", [], "any", false, false, false, 36));
            echo " id=\"el-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g5-title";
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_align", [], "any", false, false, false, 36) != "inherit")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_align", [], "any", false, false, false, 36));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_predefined_color", [], "any", false, false, false, 36) != "default")) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_predefined_color", [], "any", false, false, false, 36));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_style", [], "any", false, false, false, 36) != "default")) {
                echo " jl-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_style", [], "any", false, false, false, 36));
            }
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_decoration", [], "any", false, false, false, 36) != "none")) {
                echo " jl-heading-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_decoration", [], "any", false, false, false, 36));
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_text_transform", [], "any", false, false, false, 36)) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_text_transform", [], "any", false, false, false, 36));
            }
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_font_weight", [], "any", false, false, false, 36)) {
                echo " jl-text-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_font_weight", [], "any", false, false, false, 36));
            }
            echo "\">
";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_decoration", [], "any", false, false, false, 37) == "line")) {
                echo " <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title", [], "any", false, false, false, 37);
                echo "</span>
";
            } else {
                // line 38
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title", [], "any", false, false, false, 38);
                echo "
";
            }
            // line 40
            echo "</";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_element", [], "any", false, false, false, 40));
            echo ">
";
        }
        $context["particle_title_style"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        $context["image_width"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_width", [], "any", false, false, false, 45)) ? (((" width=\"" . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_width", [], "any", false, false, false, 45)) . "\"")) : (""));
        // line 46
        $context["image_height"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_height", [], "any", false, false, false, 46)) ? (((" height=\"" . twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_height", [], "any", false, false, false, 46)) . "\"")) : (""));
        // line 47
        $context["image_size"] = (((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_width", [], "any", false, false, false, 47)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_height", [], "any", false, false, false, 47)))) ? ((" " . $this->extensions['Gantry\Component\Twig\TwigExtension']->imageSize(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image", [], "any", false, false, false, 47)))) : (""));
        // line 49
        $context["image_loading"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_loading", [], "any", false, false, false, 49) == false)) ? (" loading=\"lazy\"") : (""));
        // line 52
        ob_start(function () { return ''; });
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_style", [], "any", false, false, false, 53) && (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_style", [], "any", false, false, false, 53) != "button"))) {
            echo " jl-link-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_style", [], "any", false, false, false, 53));
        }
        $context["socials_cls"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_target", [], "any", false, false, false, 56)) {
            // line 57
            $context["targetAttrib"] = ((" target=\"" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_target", [], "any", false, false, false, 57))) . "\"");
            // line 58
            $context["targetAttrib"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_target", [], "any", false, false, false, 58) == "_blank")) ? ((($context["targetAttrib"] ?? null) . " rel=\"noopener noreferrer\"")) : (($context["targetAttrib"] ?? null)));
        }
        // line 62
        ob_start(function () { return ''; });
        // line 63
        echo "<div class=\"jl-child-width-auto jl-grid-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_gutter", [], "any", false, false, false, 63), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_margin_top", [], "any", false, false, false, 63) == "default")) {
            echo " jl-margin-top";
        } else {
            echo " jl-margin-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_margin_top", [], "any", false, false, false, 63));
            echo "-top";
        }
        echo twig_escape_filter($this->env, ($context["grid_alignment"] ?? null), "html", null, true);
        echo "\" jl-grid>
";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "items", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 65
            echo "    ";
            $context["title"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 65))) ? (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 65))) : (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 65))));
            // line 66
            echo "    ";
            $context["titleAttrib"] = (( !twig_test_empty(($context["title"] ?? null))) ? (((((" title=\"" . ($context["title"] ?? null)) . "\" aria-label=\"") . ($context["title"] ?? null)) . "\"")) : (""));
            // line 67
            echo "    <div class=\"tm-item\">
        <a class=\"tm-link";
            // line 68
            echo twig_escape_filter($this->env, ($context["socials_cls"] ?? null), "html", null, true);
            echo ((((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "social_style", [], "any", false, false, false, 68) == "button") && twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "display", [], "any", false, false, false, 68), [0 => "both", 1 => "icons_only"]))) ? (" jl-icon-button") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 68));
            echo "\"";
            echo ($context["targetAttrib"] ?? null);
            echo ($context["titleAttrib"] ?? null);
            echo ">
            ";
            // line 69
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "display", [], "any", false, false, false, 69), [0 => "both", 1 => "icons_only"])) {
                echo "<span class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 69));
                echo "\"></span>";
            }
            // line 70
            echo "            ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "display", [], "any", false, false, false, 70), [0 => "both", 1 => "text_only"])) {
                echo "<span class=\"g-social-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 70));
                echo "</span>";
            }
            // line 71
            echo "        </a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "</div>
";
        $context["socials"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 78) != "inherit")) {
            // line 79
            $context["visibility"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 79), [0 => "s", 1 => "m", 2 => "l", 3 => "xl"])) ? ((" jl-visible@" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 79)))) : ((" jl-" . twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "visibility", [], "any", false, false, false, 79), ["-" => "@"]))));
        }
        // line 83
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "margin", [], "any", false, false, false, 83) != "inherit")) {
            // line 84
            $context["margin"] = (((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "margin", [], "any", false, false, false, 84) != "default")) ? ((" jl-margin-" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "margin", [], "any", false, false, false, 84)))) : (" jl-margin"));
        }
        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jlfooterinfo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_color", [], "any", false, false, false, 4) || twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "particle_title_fontsize", [], "any", false, false, false, 4))) {
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
            echo "</style>
";
        }
    }

    // line 87
    public function block_particle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "enabled", [], "any", false, false, false, 88)) {
            // line 89
            echo twig_escape_filter($this->env, ($context["particle_title_style"] ?? null), "html", null, true);
            echo "
<div id=\"";
            // line 90
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (((((($context["id"] ?? null) . ($context["content_maxwidth"] ?? null)) . ($context["particle_alignment"] ?? null)) . ($context["visibility"] ?? null)) . ($context["pa_z_index"] ?? null)) . ($context["margin"] ?? null)), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "class", [], "any", false, false, false, 90)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "class", [], "any", false, false, false, 90), "html", null, true);
            }
            echo "\"";
            echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
            echo ">
";
            // line 91
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image", [], "any", false, false, false, 91)) {
                // line 92
                echo "<a class=\"jl-logo jl-link-reset";
                echo twig_escape_filter($this->env, ($context["grid_alignment"] ?? null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "target", [], "any", true, true, false, 92)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "target", [], "any", false, false, false, 92), "_self")) : ("_self")), "html", null, true);
                echo "\" aria-label=\"Back to the homepage\">
  <img src=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image", [], "any", false, false, false, 93)), "html", null, true);
                echo "\"";
                echo ($context["image_width"] ?? null);
                echo ($context["image_height"] ?? null);
                echo ($context["image_size"] ?? null);
                echo " alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "image_alt", [], "any", false, false, false, 93), "html", null, true);
                echo "\"";
                echo ($context["image_loading"] ?? null);
                echo ">
</a>
";
            }
            // line 96
            echo "
";
            // line 97
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "content", [], "any", false, false, false, 97)) {
                // line 98
                echo "<div class=\"tm-content jl-panel";
                if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "content_margin_top", [], "any", false, false, false, 98) == "default")) {
                    echo " jl-margin-top";
                } else {
                    echo " jl-margin-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "content_margin_top", [], "any", false, false, false, 98));
                    echo "-top";
                }
                echo "\">
  ";
                // line 99
                echo twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "content", [], "any", false, false, false, 99);
                echo "
</div>
";
            }
            // line 102
            echo "
";
            // line 103
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "html", [], "any", false, false, false, 103)) {
                // line 104
                echo "<div class=\"jl-margin-top\">
    ";
                // line 105
                $context["html"] = ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "twig", [], "any", false, false, false, 105)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "theme", [], "any", false, false, false, 105), "compile", [0 => twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "html", [], "any", false, false, false, 105)], "method", false, false, false, 105)) : (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "html", [], "any", false, false, false, 105)));
                // line 106
                echo "    ";
                echo $this->extensions['Gantry\Component\Twig\TwigExtension']->htmlFilter(((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "filter", [], "any", false, false, false, 106)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "platform", [], "any", false, false, false, 106), "filter", [0 => ($context["html"] ?? null)], "method", false, false, false, 106)) : (($context["html"] ?? null))));
                echo "
</div>
";
            }
            // line 109
            echo "
";
            // line 110
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "module_id", [], "any", false, false, false, 110)) {
                // line 111
                echo "<div class=\"jl-margin-top\">
    ";
                // line 112
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "platform", [], "any", false, false, false, 112), "displayModule", [0 => twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "module_id", [], "any", false, false, false, 112), 1 => ["style" => ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "chrome", [], "any", true, true, false, 112)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "chrome", [], "any", false, false, false, 112), "gantry")) : ("gantry")), "position" => "particle"]], "method", false, false, false, 112);
                echo "
</div>
";
            }
            // line 115
            echo "
";
            // line 116
            if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "items", [], "any", false, false, false, 116)) {
                // line 117
                echo "  ";
                echo twig_escape_filter($this->env, ($context["socials"] ?? null), "html", null, true);
                echo "
";
            }
            // line 119
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/jlfooterinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 119,  411 => 117,  409 => 116,  406 => 115,  400 => 112,  397 => 111,  395 => 110,  392 => 109,  385 => 106,  383 => 105,  380 => 104,  378 => 103,  375 => 102,  369 => 99,  358 => 98,  356 => 97,  353 => 96,  339 => 93,  330 => 92,  328 => 91,  316 => 90,  312 => 89,  310 => 88,  306 => 87,  300 => 9,  283 => 7,  281 => 6,  278 => 5,  276 => 4,  272 => 3,  267 => 1,  264 => 84,  262 => 83,  259 => 79,  257 => 78,  253 => 74,  245 => 71,  238 => 70,  232 => 69,  222 => 68,  219 => 67,  216 => 66,  213 => 65,  209 => 64,  196 => 63,  194 => 62,  191 => 58,  189 => 57,  187 => 56,  181 => 53,  179 => 52,  177 => 49,  175 => 47,  173 => 46,  171 => 45,  164 => 40,  158 => 38,  151 => 37,  119 => 36,  117 => 35,  115 => 34,  99 => 30,  97 => 29,  81 => 25,  79 => 24,  63 => 20,  61 => 19,  45 => 15,  43 => 14,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jlfooterinfo.html.twig", "E:\\XAMPP\\htdocs\\CAIM2\\templates\\jl_kickoff\\particles\\jlfooterinfo.html.twig");
    }
}
