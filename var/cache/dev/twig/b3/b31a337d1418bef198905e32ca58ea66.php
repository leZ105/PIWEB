<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* resto/show.html.twig */
class __TwigTemplate_fe2e9814ad60a85abfbdd62b50898d24 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resto/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resto/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "resto/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Resto";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container mt-5\" style=\"background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\">
        <h1 style=\"margin-bottom: 20px;\">Resto</h1>

        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>IdResto</th>
                            <td>";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resto"]) || array_key_exists("resto", $context) ? $context["resto"] : (function () { throw new RuntimeError('Variable "resto" does not exist.', 15, $this->source); })()), "idResto", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Nomr</th>
                            <td>";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resto"]) || array_key_exists("resto", $context) ? $context["resto"] : (function () { throw new RuntimeError('Variable "resto" does not exist.', 19, $this->source); })()), "nomr", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Adresser</th>
                            <td>";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resto"]) || array_key_exists("resto", $context) ? $context["resto"] : (function () { throw new RuntimeError('Variable "resto" does not exist.', 23, $this->source); })()), "adresser", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Numr</th>
                            <td>";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resto"]) || array_key_exists("resto", $context) ? $context["resto"] : (function () { throw new RuntimeError('Variable "resto" does not exist.', 27, $this->source); })()), "numr", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src=\"";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resto.jpg"), "html", null, true);
        yield "\" alt=\"Restaurant Image\" style=\"max-width: 100%;\"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"text-center\">
            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resto_index");
        yield "\" class=\"btn btn-primary\">Back to List</a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "resto/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  140 => 39,  129 => 31,  122 => 27,  115 => 23,  108 => 19,  101 => 15,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Resto{% endblock %}

{% block body %}
    <div class=\"container mt-5\" style=\"background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\">
        <h1 style=\"margin-bottom: 20px;\">Resto</h1>

        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>IdResto</th>
                            <td>{{ resto.idResto }}</td>
                        </tr>
                        <tr>
                            <th>Nomr</th>
                            <td>{{ resto.nomr }}</td>
                        </tr>
                        <tr>
                            <th>Adresser</th>
                            <td>{{ resto.adresser }}</td>
                        </tr>
                        <tr>
                            <th>Numr</th>
                            <td>{{ resto.numr }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src=\"{{ asset('resto.jpg') }}\" alt=\"Restaurant Image\" style=\"max-width: 100%;\"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"text-center\">
            <a href=\"{{ path('app_resto_index') }}\" class=\"btn btn-primary\">Back to List</a>
        </div>
    </div>
{% endblock %}
", "resto/show.html.twig", "C:\\Users\\UwU\\Desktop\\Works\\Day 1\\GestionCommande\\templates\\resto\\show.html.twig");
    }
}
