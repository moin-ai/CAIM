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

/* @nucleus/page.html.twig */
class __TwigTemplate_f6580b3dfeed398924d6154c64808449 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'page_offcanvas' => [$this, 'block_page_offcanvas'],
            'page_layout' => [$this, 'block_page_layout'],
            'page_top' => [$this, 'block_page_top'],
            'page_bottom' => [$this, 'block_page_bottom'],
            'body_top' => [$this, 'block_body_top'],
            'body_bottom' => [$this, 'block_body_bottom'],
            'page_head' => [$this, 'block_page_head'],
            'page_footer' => [$this, 'block_page_footer'],
            'page' => [$this, 'block_page'],
            'page_body' => [$this, 'block_page_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "debugger", [], "any", false, false, false, 1), "startTimer", [0 => "render", 1 => "Rendering page"], "method", false, false, false, 1);
        // line 2
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "theme", [], "any", false, false, false, 2), "setLayout", [], "method", false, false, false, 2);
        // line 3
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "theme", [], "any", false, false, false, 3), "loadAtoms", [], "method", false, false, false, 3);
        // line 4
        $context["segments"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "theme", [], "any", false, false, false, 4), "segments", [], "method", false, false, false, 4);
        // line 5
        $context["theme_js"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "config", [], "any", false, true, false, 5), "page", [], "any", false, true, false, 5), "assets", [], "any", false, true, false, 5), "theme_js", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "config", [], "any", false, true, false, 5), "page", [], "any", false, true, false, 5), "assets", [], "any", false, true, false, 5), "theme_js", [], "any", false, false, false, 5), 1)) : (1));
        // line 6
        ob_start(function () { return ''; });
        // line 7
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "theme", [], "any", false, false, false, 7), "hasContent", [], "method", false, false, false, 7)) {
            // line 8
            echo "        ";
            $this->displayBlock('content', $context, $blocks);
            // line 10
            echo "    ";
        }
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        $context["offcanvas"] = null;
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 15
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["segment"], "type", [], "any", false, false, false, 15) == "offcanvas")) {
                // line 16
                $context["offcanvas"] = $context["segment"];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        ob_start(function () { return ''; });
        // line 21
        echo "    ";
        $this->displayBlock('page_offcanvas', $context, $blocks);
        $context["page_offcanvas"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        $context["page_offcanvas"] = ((twig_trim_filter(($context["page_offcanvas"] ?? null))) ? (twig_trim_filter(($context["page_offcanvas"] ?? null))) : (""));
        // line 29
        $context["offcanvas_position"] = ((($context["page_offcanvas"] ?? null)) ? (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["offcanvas"] ?? null), "attributes", [], "any", false, true, false, 29), "position", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["offcanvas"] ?? null), "attributes", [], "any", false, true, false, 29), "position", [], "any", false, false, false, 29), "g-offcanvas-left")) : ("g-offcanvas-left"))) : (""));
        // line 31
        ob_start(function () { return ''; });
        // line 32
        echo "    ";
        $this->displayBlock('page_layout', $context, $blocks);
        $context["page_layout"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        ob_start(function () { return ''; });
        // line 42
        echo "    ";
        $this->displayBlock('page_top', $context, $blocks);
        // line 44
        echo "    ";
        echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "document", [], "any", false, false, false, 44), "getHtml", [0 => "top"], "method", false, false, false, 44), "
    ");
        echo "
";
        $context["page_top"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        ob_start(function () { return ''; });
        // line 48
        echo "    ";
        $this->displayBlock('page_bottom', $context, $blocks);
        // line 50
        echo "    ";
        echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "document", [], "any", false, false, false, 50), "getHtml", [0 => "bottom"], "method", false, false, false, 50), "
    ");
        echo "
";
        $context["page_bottom"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        ob_start(function () { return ''; });
        // line 54
        echo "    ";
        $this->displayBlock('body_top', $context, $blocks);
        // line 56
        echo "    ";
        echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "document", [], "any", false, false, false, 56), "getHtml", [0 => "body_top"], "method", false, false, false, 56), "
    ");
        echo "
";
        $context["body_top"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        ob_start(function () { return ''; });
        // line 60
        echo "    ";
        $this->displayBlock('body_bottom', $context, $blocks);
        // line 62
        echo "    ";
        echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "document", [], "any", false, false, false, 62), "getHtml", [0 => "body_bottom"], "method", false, false, false, 62), "
    ");
        echo "
";
        $context["body_bottom"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        if (($context["theme_js"] ?? null)) {
            // line 66
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "document", [], "any", false, false, false, 66), "addScript", [0 => $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc("gantry-assets://js/main.js"), 1 => 11, 2 => "footer"], "method", false, false, false, 66);
        }
        // line 70
        ob_start(function () { return ''; });
        // line 71
        echo "    ";
        $this->displayBlock('page_head', $context, $blocks);
        $context["page_head"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        ob_start(function () { return ''; });
        // line 77
        echo "    ";
        $this->displayBlock('page_footer', $context, $blocks);
        // line 81
        echo "
    ";
        // line 82
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "debugger", [], "any", false, false, false, 82), "render", [], "method", false, false, false, 82);
        echo "
";
        $context["page_footer"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        $this->displayBlock('page', $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        ";
    }

    // line 21
    public function block_page_offcanvas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        if (($context["offcanvas"] ?? null)) {
            // line 23
            echo "            ";
            $this->loadTemplate((("@nucleus/layout/" . twig_get_attribute($this->env, $this->source, ($context["offcanvas"] ?? null), "type", [], "any", false, false, false, 23)) . ".html.twig"), "@nucleus/page.html.twig", 23)->display(twig_array_merge($context, ["segment" => ($context["offcanvas"] ?? null)]));
        }
        // line 25
        echo "    ";
    }

    // line 32
    public function block_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
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
            // line 34
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["segment"], "type", [], "any", false, false, false, 34) != "offcanvas")) {
                // line 35
                echo "            ";
                $this->loadTemplate((("@nucleus/layout/" . twig_get_attribute($this->env, $this->source, $context["segment"], "type", [], "any", false, false, false, 35)) . ".html.twig"), "@nucleus/page.html.twig", 35)->display(twig_array_merge($context, ["segments" => twig_get_attribute($this->env, $this->source, $context["segment"], "children", [], "any", false, false, false, 35)]));
                // line 36
                echo "        ";
            }
            // line 37
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
        // line 38
        echo "    ";
    }

    // line 42
    public function block_page_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    ";
    }

    // line 48
    public function block_page_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    ";
    }

    // line 54
    public function block_body_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "    ";
    }

    // line 60
    public function block_body_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    ";
    }

    // line 71
    public function block_page_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        $this->loadTemplate("partials/page_head.html.twig", "@nucleus/page.html.twig", 72)->display($context);
    }

    // line 77
    public function block_page_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "        ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "platform", [], "any", false, false, false, 78), "finalize", [], "method", false, false, false, 78);
        // line 79
        echo twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "scripts", [0 => "footer"], "method", false, false, false, 79), "
    ");
    }

    // line 85
    public function block_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "<!DOCTYPE ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "config", [], "any", false, true, false, 86), "page", [], "any", false, true, false, 86), "doctype", [], "any", true, true, false, 86)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "config", [], "any", false, true, false, 86), "page", [], "any", false, true, false, 86), "doctype", [], "any", false, false, false, 86), "html")) : ("html"));
        echo ">
<html";
        // line 87
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "page", [], "any", false, false, false, 87), "htmlAttributes", [], "any", false, false, false, 87);
        echo ">
    ";
        // line 88
        echo ($context["page_head"] ?? null);
        echo "
    ";
        // line 89
        $this->displayBlock('page_body', $context, $blocks);
        // line 107
        echo "
</html>
";
    }

    // line 89
    public function block_page_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "<body";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "page", [], "any", false, false, false, 90), "bodyAttributes", [0 => ["class" => [0 => ($context["offcanvas_position"] ?? null), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "page", [], "any", false, false, false, 90), "preset", [], "any", false, false, false, 90), 2 => ("g-style-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "theme", [], "any", false, false, false, 90), "preset", [], "any", false, false, false, 90))]]], "method", false, false, false, 90);
        echo ">
        ";
        // line 91
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "config", [], "any", false, false, false, 91), "page", [], "any", false, false, false, 91), "body", [], "any", false, false, false, 91), "body_top", [], "any", false, false, false, 91);
        echo "
        ";
        // line 92
        echo ($context["body_top"] ?? null);
        echo "
        ";
        // line 93
        echo ($context["page_offcanvas"] ?? null);
        echo "
        <div id=\"g-page-surround\">
            ";
        // line 95
        if (twig_trim_filter(($context["page_offcanvas"] ?? null))) {
            // line 96
            echo "<div class=\"g-offcanvas-hide g-offcanvas-toggle\" role=\"navigation\" data-offcanvas-toggle aria-controls=\"g-offcanvas\" aria-expanded=\"false\"><i class=\"fa fa-fw fa-bars\"></i></div>";
        }
        // line 98
        echo "            ";
        echo ($context["page_top"] ?? null);
        echo "
            ";
        // line 99
        echo ($context["page_layout"] ?? null);
        echo "
            ";
        // line 100
        echo ($context["page_bottom"] ?? null);
        echo "
        </div>
        ";
        // line 102
        echo ($context["body_bottom"] ?? null);
        echo "
        ";
        // line 103
        echo ($context["page_footer"] ?? null);
        echo "
        ";
        // line 104
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "config", [], "any", false, false, false, 104), "page", [], "any", false, false, false, 104), "body", [], "any", false, false, false, 104), "body_bottom", [], "any", false, false, false, 104);
        echo "
    </body>";
    }

    public function getTemplateName()
    {
        return "@nucleus/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 104,  372 => 103,  368 => 102,  363 => 100,  359 => 99,  354 => 98,  351 => 96,  349 => 95,  344 => 93,  340 => 92,  336 => 91,  331 => 90,  327 => 89,  321 => 107,  319 => 89,  315 => 88,  311 => 87,  306 => 86,  302 => 85,  297 => 79,  294 => 78,  290 => 77,  286 => 72,  282 => 71,  278 => 61,  274 => 60,  270 => 55,  266 => 54,  262 => 49,  258 => 48,  254 => 43,  250 => 42,  246 => 38,  232 => 37,  229 => 36,  226 => 35,  223 => 34,  205 => 33,  201 => 32,  197 => 25,  193 => 23,  190 => 22,  186 => 21,  182 => 9,  178 => 8,  174 => 85,  169 => 82,  166 => 81,  163 => 77,  161 => 76,  157 => 71,  155 => 70,  152 => 66,  150 => 65,  143 => 62,  140 => 60,  138 => 59,  131 => 56,  128 => 54,  126 => 53,  119 => 50,  116 => 48,  114 => 47,  107 => 44,  104 => 42,  102 => 41,  98 => 32,  96 => 31,  94 => 29,  92 => 28,  88 => 21,  86 => 20,  79 => 16,  76 => 15,  72 => 14,  70 => 13,  66 => 10,  63 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@nucleus/page.html.twig", "E:\\XAMPP\\htdocs\\CAIM2\\templates\\jl_kickoff\\common\\engine\\templates\\page.html.twig");
    }
}
