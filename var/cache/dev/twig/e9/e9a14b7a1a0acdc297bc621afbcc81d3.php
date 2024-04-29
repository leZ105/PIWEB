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

/* resto_back/show.html.twig */
class __TwigTemplate_10eb99a4ac3d9c5711a019aad9fa6b13 extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resto_back/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resto_back/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "resto_back/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Resto";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "    <div class=\"container-fluid\">
        <h1 class=\"mb-4\">Resto Details</h1>

        <div class=\"card\">
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">IdResto</th>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resto"]) || array_key_exists("resto", $context) ? $context["resto"] : (function () { throw new RuntimeError('Variable "resto" does not exist.', 15, $this->source); })()), "idResto", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Nomr</th>
                            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resto"]) || array_key_exists("resto", $context) ? $context["resto"] : (function () { throw new RuntimeError('Variable "resto" does not exist.', 19, $this->source); })()), "nomr", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Adresser</th>
                            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resto"]) || array_key_exists("resto", $context) ? $context["resto"] : (function () { throw new RuntimeError('Variable "resto" does not exist.', 23, $this->source); })()), "adresser", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Numr</th>
                            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resto"]) || array_key_exists("resto", $context) ? $context["resto"] : (function () { throw new RuntimeError('Variable "resto" does not exist.', 27, $this->source); })()), "numr", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>

                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resto_back_index");
        echo "\" class=\"btn btn-secondary\">Back to List</a>
                <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resto_back_edit", ["idResto" => twig_get_attribute($this->env, $this->source, (isset($context["resto"]) || array_key_exists("resto", $context) ? $context["resto"] : (function () { throw new RuntimeError('Variable "resto" does not exist.', 33, $this->source); })()), "idResto", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Edit</a>
            </div>
        </div>

        ";
        // line 37
        echo twig_include($this->env, $context, "resto_back/_delete_form.html.twig");
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "resto_back/show.html.twig";
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
        return array (  139 => 37,  132 => 33,  128 => 32,  120 => 27,  113 => 23,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Resto{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"mb-4\">Resto Details</h1>

        <div class=\"card\">
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">IdResto</th>
                            <td>{{ resto.idResto }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Nomr</th>
                            <td>{{ resto.nomr }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Adresser</th>
                            <td>{{ resto.adresser }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Numr</th>
                            <td>{{ resto.numr }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href=\"{{ path('app_resto_back_index') }}\" class=\"btn btn-secondary\">Back to List</a>
                <a href=\"{{ path('app_resto_back_edit', {'idResto': resto.idResto}) }}\" class=\"btn btn-primary\">Edit</a>
            </div>
        </div>

        {{ include('resto_back/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "resto_back/show.html.twig", "C:\\Users\\UwU\\Desktop\\GestionCommande\\templates\\resto_back\\show.html.twig");
    }
}
