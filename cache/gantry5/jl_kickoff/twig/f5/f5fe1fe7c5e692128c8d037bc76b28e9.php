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

/* @particles/jluikit.html.twig */
class __TwigTemplate_cbefaf9343a710eff2c3a30b5f506c08 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/jluikit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = ["priority" => 11];
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "head";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "enabled", [], "any", false, false, false, 5)) {
            // line 6
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["gantry"] ?? null), "page", [], "any", false, false, false, 6), "direction", [], "any", false, false, false, 6) == "rtl")) {
                // line 7
                echo "<link href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc("gantry-theme://css/jluikit-rtl.min.css"), "html", null, true);
                echo "\" rel=\"stylesheet\">
";
            } else {
                // line 9
                echo "<link href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc("gantry-theme://css/jluikit.min.css"), "html", null, true);
                echo "\" rel=\"stylesheet\">
";
            }
        }
        $content = ob_get_clean();
        $assetFunction($content, $location, $priority);
        // line 14
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = ["priority" => 10];
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "head";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "enabled", [], "any", false, false, false, 15)) {
            // line 16
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc("gantry-theme://js/jluikit.min.js"), "html", null, true);
            echo "\"></script>
";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, ($context["particle"] ?? null), "uikit_icon", [], "any", false, false, false, 17) == "enabled")) {
                // line 18
                echo "<script src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Gantry\Component\Twig\TwigExtension']->urlFunc("gantry-theme://js/jluikit-icons.min.js"), "html", null, true);
                echo "\"></script>
";
            }
        }
        $content = ob_get_clean();
        $assetFunction($content, $location, $priority);
    }

    public function getTemplateName()
    {
        return "@particles/jluikit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  100 => 17,  95 => 16,  93 => 15,  81 => 14,  72 => 9,  66 => 7,  64 => 6,  62 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/jluikit.html.twig", "E:\\XAMPP\\htdocs\\CAIM2\\templates\\jl_kickoff\\particles\\jluikit.html.twig");
    }
}
