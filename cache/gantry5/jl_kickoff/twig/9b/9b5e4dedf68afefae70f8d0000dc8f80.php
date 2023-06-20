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

/* @nucleus/layout/section.html.twig */
class __TwigTemplate_79408ea5a02593d385f854df37fb6478 extends \Twig\Template
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
        $context["tag_type"] = ((twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "subtype", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "subtype", [], "any", false, false, false, 1), "section")) : ("section"));
        // line 2
        $context["attr_id"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2)) : (("g-" . twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "id", [], "any", false, false, false, 2))));
        // line 3
        $context["attr_class"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 3), "class", [], "any", false, false, false, 3) . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["segment"] ?? null), "attributes", [], "any", false, false, false, 4), "variations", [], "any", false, false, false, 4)) ? ((" " . twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 4), "variations", [], "any", false, false, false, 4), " "))) : ("")));
        // line 5
        $context["attr_extra"] = $this->extensions['Gantry\Component\Twig\TwigExtension']->attributeArrayFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 5), "extra", [], "any", false, false, false, 5));
        // line 6
        $context["boxed"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 6), "boxed", [], "any", false, false, false, 6);
        // line 7
        if ( !(null === ($context["boxed"] ?? null))) {
            // line 8
            echo "    ";
            $context["boxed"] = (((twig_trim_filter(($context["boxed"] ?? null)) == "")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "config", [], "any", false, false, false, 8), "page", [], "any", false, false, false, 8), "body", [], "any", false, false, false, 8), "layout", [], "any", false, false, false, 8), "sections", [], "any", false, false, false, 8)) : (($context["boxed"] ?? null)));
        }
        // line 10
        echo "
";
        // line 11
        $context["maxwidth"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 11), "maxwidth", [], "any", false, false, false, 11);
        // line 12
        if ( !(null === ($context["maxwidth"] ?? null))) {
            // line 13
            echo "    ";
            $context["maxwidth"] = (((twig_trim_filter(($context["maxwidth"] ?? null)) == "")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "config", [], "any", false, false, false, 13), "page", [], "any", false, false, false, 13), "body", [], "any", false, false, false, 13), "layout", [], "any", false, false, false, 13), "maxwidth", [], "any", false, false, false, 13)) : (($context["maxwidth"] ?? null)));
        }
        // line 16
        ob_start(function () { return ''; });
        // line 17
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "children", [], "any", false, false, false, 17)) {
            // line 18
            echo "        ";
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
                // line 19
                echo "            ";
                $this->loadTemplate((("@nucleus/layout/" . twig_get_attribute($this->env, $this->source, $context["segment"], "type", [], "any", false, false, false, 19)) . ".html.twig"), "@nucleus/layout/section.html.twig", 19)->display(twig_array_merge($context, ["segments" => twig_get_attribute($this->env, $this->source, $context["segment"], "children", [], "any", false, false, false, 19)]));
                // line 20
                echo "        ";
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
            // line 21
            echo "    ";
        }
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "attributes", [], "any", false, false, false, 24), "sticky", [], "any", false, false, false, 24) || twig_trim_filter(($context["html"] ?? null)))) {
            // line 26
            if ((($context["maxwidth"] ?? null) == 0)) {
                // line 27
                echo "        ";
                $context["container_class"] = "";
                // line 28
                echo "    ";
            } elseif ((($context["maxwidth"] ?? null) == 1)) {
                // line 29
                echo "        ";
                $context["container_class"] = " jl-container-small";
                // line 30
                echo "    ";
            } elseif ((($context["maxwidth"] ?? null) == 2)) {
                // line 31
                echo "        ";
                $context["container_class"] = " jl-container-large";
                // line 32
                echo "    ";
            } elseif ((($context["maxwidth"] ?? null) == 3)) {
                // line 33
                echo "        ";
                $context["container_class"] = " jl-container-xlarge";
                echo " 
    ";
            } elseif ((            // line 34
($context["maxwidth"] ?? null) == 4)) {
                // line 35
                echo "        ";
                $context["container_class"] = " jl-container-expand";
                echo "                       
    ";
            }
            // line 38
            if (( !(null === ($context["boxed"] ?? null)) && (($context["boxed"] ?? null) == 0))) {
                // line 39
                echo "        ";
                ob_start(function () { return ''; });
                // line 40
                echo "        <div class=\"jl-container";
                echo twig_escape_filter($this->env, ($context["container_class"] ?? null), "html", null, true);
                echo "\">";
                echo ($context["html"] ?? null);
                echo "</div>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 42
                echo "    ";
            }
            // line 43
            echo "
    ";
            // line 44
            ob_start(function () { return ''; });
            // line 45
            echo "    ";
            $context["attr_class"] = ((($context["attr_class"] ?? null)) ? (((" class=\"" . twig_trim_filter(($context["attr_class"] ?? null))) . "\"")) : (""));
            // line 46
            echo "<";
            echo twig_escape_filter($this->env, ($context["tag_type"] ?? null), "html", null, true);
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["attr_id"] ?? null), "html", null, true);
            echo "\"";
            echo ($context["attr_class"] ?? null);
            echo ($context["attr_extra"] ?? null);
            echo ">
        ";
            // line 47
            echo ($context["html"] ?? null);
            echo "
    </";
            // line 48
            echo twig_escape_filter($this->env, ($context["tag_type"] ?? null), "html", null, true);
            echo ">";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 51
            if ((($context["boxed"] ?? null) == 1)) {
                // line 52
                echo "    <div class=\"jl-container";
                echo twig_escape_filter($this->env, ($context["container_class"] ?? null), "html", null, true);
                echo "\">";
                echo ($context["html"] ?? null);
                echo "</div>
    ";
            } else {
                // line 54
                echo "    ";
                echo ($context["html"] ?? null);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/layout/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 54,  188 => 52,  186 => 51,  182 => 48,  178 => 47,  168 => 46,  165 => 45,  163 => 44,  160 => 43,  157 => 42,  149 => 40,  146 => 39,  144 => 38,  138 => 35,  136 => 34,  131 => 33,  128 => 32,  125 => 31,  122 => 30,  119 => 29,  116 => 28,  113 => 27,  111 => 26,  109 => 24,  105 => 21,  91 => 20,  88 => 19,  70 => 18,  67 => 17,  65 => 16,  61 => 13,  59 => 12,  57 => 11,  54 => 10,  50 => 8,  48 => 7,  46 => 6,  44 => 5,  42 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@nucleus/layout/section.html.twig", "E:\\XAMPP\\htdocs\\CAIM2\\templates\\jl_kickoff\\common\\engine\\templates\\layout\\section.html.twig");
    }
}
