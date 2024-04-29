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

/* commande/index.html.twig */
class __TwigTemplate_46fbef45664bc59630ceb19aa7fc3036 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/index.html.twig", 1);
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

        yield "Commande Index";
        
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
        yield "    <div class=\"container mt-5\" style=\"text-align: center;\">
        <h1 style=\"margin-bottom: 20px;\">My Command History</h1>
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chat_bot");
        yield "\" class=\"btn btn-lg btn-info mb-3\">Chat with Support</a>

        <div class=\"table-responsive\" style=\"border: 1px solid #ccc; border-radius: 5px; padding: 10px;\">
            <table class=\"table table-bordered table-hover text-center\" style=\"width: 100%;\">
                <thead style=\"background-color: #343a40; color: #fff;\">
                    <tr>
                        <th scope=\"col\">Order Number</th>
                        <th scope=\"col\">Shipping Address</th>
                        <th scope=\"col\">Items</th>
                        <th scope=\"col\">Total Price</th>
                        <th scope=\"col\">Status</th>
                        <th scope=\"col\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 24
            yield "                    <tr style=\"background-color: #fff;\">
                        <td>";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "numc", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                        <td>";
            // line 26
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "adressec", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                        <td>";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "panier", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                        <td>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "price", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                        <td>";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                        <td>
                            <a href=\"";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_show", ["numc" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "numc", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">View Details</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            yield "                    <tr>
                        <td colspan=\"6\">No records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "                </tbody>
            </table>
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
        return "commande/index.html.twig";
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
        return array (  159 => 39,  150 => 35,  141 => 31,  136 => 29,  132 => 28,  128 => 27,  124 => 26,  120 => 25,  117 => 24,  112 => 23,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commande Index{% endblock %}

{% block body %}
    <div class=\"container mt-5\" style=\"text-align: center;\">
        <h1 style=\"margin-bottom: 20px;\">My Command History</h1>
        <a href=\"{{ path('app_chat_bot') }}\" class=\"btn btn-lg btn-info mb-3\">Chat with Support</a>

        <div class=\"table-responsive\" style=\"border: 1px solid #ccc; border-radius: 5px; padding: 10px;\">
            <table class=\"table table-bordered table-hover text-center\" style=\"width: 100%;\">
                <thead style=\"background-color: #343a40; color: #fff;\">
                    <tr>
                        <th scope=\"col\">Order Number</th>
                        <th scope=\"col\">Shipping Address</th>
                        <th scope=\"col\">Items</th>
                        <th scope=\"col\">Total Price</th>
                        <th scope=\"col\">Status</th>
                        <th scope=\"col\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for commande in commandes %}
                    <tr style=\"background-color: #fff;\">
                        <td>{{ commande.numc }}</td>
                        <td>{{ commande.adressec }}</td>
                        <td>{{ commande.panier }}</td>
                        <td>{{ commande.price }}</td>
                        <td>{{ commande.status }}</td>
                        <td>
                            <a href=\"{{ path('app_commande_show', {'numc': commande.numc}) }}\" class=\"btn btn-sm btn-primary\">View Details</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\">No records found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "commande/index.html.twig", "C:\\Users\\zizo\\Downloads\\GestionCommande\\GestionCommande\\templates\\commande\\index.html.twig");
    }
}
