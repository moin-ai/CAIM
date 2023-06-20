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

/* @nucleus/content/missing.html.twig */
class __TwigTemplate_4c8de4c49e9f4dd6a2e899044af810ff extends \Twig\Template
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
        echo "<div class=\"alert alert-error\"><strong>Missing content:</strong> '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "subtype", [], "any", false, false, false, 1), "html", null, true);
        echo "' ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "type", [], "any", false, false, false, 1), "html", null, true);
        echo " cannot be found.</div>
";
    }

    public function getTemplateName()
    {
        return "@nucleus/content/missing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@nucleus/content/missing.html.twig", "E:\\XAMPP\\htdocs\\CAIM2\\media\\gantry5\\engines\\nucleus\\templates\\content\\missing.html.twig");
    }
}
