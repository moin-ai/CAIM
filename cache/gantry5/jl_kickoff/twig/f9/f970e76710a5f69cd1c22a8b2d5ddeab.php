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

/* @nucleus/layout/container.html.twig */
class __TwigTemplate_e6f80161c6125279e1e44316233f782f extends \Twig\Template
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
        ob_start(function () { return ''; });
        // line 2
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 3
            echo "        ";
            $this->loadTemplate((("@nucleus/layout/" . twig_get_attribute($this->env, $this->source, $context["segment"], "type", [], "any", false, false, false, 3)) . ".html.twig"), "@nucleus/layout/container.html.twig", 3)->display(twig_array_merge($context, ["segments" => twig_get_attribute($this->env, $this->source, $context["segment"], "children", [], "any", false, false, false, 3)]));
            // line 4
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        echo "
";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 7), "sticky", [], "any", false, false, false, 7) || twig_trim_filter(($context["html"] ?? null)))) {
            // line 8
            echo "    ";
            $context["attr_id"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8)) : (("g-" . twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "id", [], "any", false, false, false, 8))));
            // line 9
            echo "    ";
            $context["boxed"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 9), "boxed", [], "any", false, false, false, 9);
            // line 10
            echo "    ";
            if ( !(null === ($context["boxed"] ?? null))) {
                // line 11
                echo "        ";
                $context["boxed"] = (((twig_trim_filter(($context["boxed"] ?? null)) == "")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "config", [], "any", false, false, false, 11), "page", [], "any", false, false, false, 11), "body", [], "any", false, false, false, 11), "layout", [], "any", false, false, false, 11), "sections", [], "any", false, false, false, 11)) : (($context["boxed"] ?? null)));
                // line 12
                echo "    ";
            }
            // line 13
            echo "
    ";
            // line 14
            $context["maxwidth"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 14), "maxwidth", [], "any", false, false, false, 14);
            // line 15
            echo "    ";
            if ( !(null === ($context["maxwidth"] ?? null))) {
                // line 16
                echo "        ";
                $context["maxwidth"] = (((twig_trim_filter(($context["maxwidth"] ?? null)) == "")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "config", [], "any", false, false, false, 16), "page", [], "any", false, false, false, 16), "body", [], "any", false, false, false, 16), "layout", [], "any", false, false, false, 16), "maxwidth", [], "any", false, false, false, 16)) : (($context["maxwidth"] ?? null)));
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            $context["class"] = ("g-wrapper" . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 19), "class", [], "any", false, false, false, 19)) ? ((" " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 19), "class", [], "any", false, false, false, 19))) : ("")));
            // line 20
            echo "    ";
            $context["attr_extra"] = $this->extensions['Gantry\Component\Twig\TwigExtension']->attributeArrayFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 20), "extra", [], "any", false, false, false, 20));
            // line 22
            if ((($context["maxwidth"] ?? null) == 0)) {
                // line 23
                echo "        ";
                $context["container_class"] = "";
                // line 24
                echo "    ";
            } elseif ((($context["maxwidth"] ?? null) == 1)) {
                // line 25
                echo "        ";
                $context["container_class"] = " jl-container-small";
                // line 26
                echo "    ";
            } elseif ((($context["maxwidth"] ?? null) == 2)) {
                // line 27
                echo "        ";
                $context["container_class"] = " jl-container-large";
                // line 28
                echo "    ";
            } elseif ((($context["maxwidth"] ?? null) == 3)) {
                // line 29
                echo "        ";
                $context["container_class"] = " jl-container-xlarge";
                echo " 
    ";
            } elseif ((            // line 30
($context["maxwidth"] ?? null) == 4)) {
                // line 31
                echo "        ";
                $context["container_class"] = " jl-container-expand";
                echo "                       
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if (( !(null === ($context["boxed"] ?? null)) && (($context["boxed"] ?? null) == 0))) {
                // line 35
                echo "        ";
                ob_start(function () { return ''; });
                // line 36
                echo "        <div class=\"jl-container";
                echo twig_escape_filter($this->env, ($context["container_class"] ?? null), "html", null, true);
                echo "\">";
                echo ($context["html"] ?? null);
                echo "</div>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 38
                echo "    ";
            }
            // line 39
            echo "
    ";
            // line 40
            ob_start(function () { return ''; });
            // line 41
            echo "    <section id=\"";
            echo twig_escape_filter($this->env, ($context["attr_id"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\"";
            echo ($context["attr_extra"] ?? null);
            echo ">
        ";
            // line 42
            echo ($context["html"] ?? null);
            echo "
    </section>
    ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 45
            echo "
    ";
            // line 46
            if ((($context["boxed"] ?? null) == 1)) {
                // line 47
                echo "        <div class=\"jl-container";
                echo twig_escape_filter($this->env, ($context["container_class"] ?? null), "html", null, true);
                echo "\">";
                echo ($context["html"] ?? null);
                echo "</div>
    ";
            } else {
                // line 49
                echo "        ";
                echo ($context["html"] ?? null);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/layout/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 49,  194 => 47,  192 => 46,  189 => 45,  183 => 42,  174 => 41,  172 => 40,  169 => 39,  166 => 38,  158 => 36,  155 => 35,  153 => 34,  150 => 33,  144 => 31,  142 => 30,  137 => 29,  134 => 28,  131 => 27,  128 => 26,  125 => 25,  122 => 24,  119 => 23,  117 => 22,  114 => 20,  112 => 19,  109 => 18,  106 => 17,  103 => 16,  100 => 15,  98 => 14,  95 => 13,  92 => 12,  89 => 11,  86 => 10,  83 => 9,  80 => 8,  78 => 7,  75 => 6,  60 => 4,  57 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@nucleus/layout/container.html.twig", "E:\\XAMPP\\htdocs\\CAIM2\\templates\\jl_kickoff\\common\\engine\\templates\\layout\\container.html.twig");
    }
}
