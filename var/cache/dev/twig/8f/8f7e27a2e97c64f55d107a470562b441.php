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

/* commande_back/index.html.twig */
class __TwigTemplate_cfe53917445ee4e01e61f1acb4ab6650 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande_back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande_back/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "commande_back/index.html.twig", 1);
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

        yield "Commande index";
        
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
        yield "    <div class=\"container-fluid mt-4\">
        <h1 class=\"mb-4\">Commande</h1>

        <!-- Search Input -->
        <div class=\"mb-3\">
            <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search by Numc, Adressec, Status, etc.\">
        </div>
<a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_back_export_pdf");
        yield "\" class=\"btn btn-secondary\">Export to PDF</a>
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\">Numc</th>
                                <th scope=\"col\">Adressec</th>
                                <th scope=\"col\">Panier</th>
                                <th scope=\"col\">Price</th>
                                <th scope=\"col\">Status</th>
                                <th scope=\"col\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 30
            yield "                                <tr>
                                    <td>";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "numc", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                                    <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "adressec", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                                    <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "panier", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                                    <td>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "price", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                                    <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                                    <td>
                                        <a href=\"";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_back_show", ["numc" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "numc", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Show</a>
                                        <a href=\"";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_back_edit", ["numc" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "numc", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Edit</a>
                                        
                                        ";
            // line 40
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 40) == "On Hold")) {
                // line 41
                yield "                                            <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_change_status", ["numc" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "numc", [], "any", false, false, false, 41), "status" => "Processing"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-success\">Process</a>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 42
$context["commande"], "status", [], "any", false, false, false, 42) == "Processing")) {
                // line 43
                yield "                                            <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_change_status", ["numc" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "numc", [], "any", false, false, false, 43), "status" => "Completed"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-info\">Complete</a>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 44
$context["commande"], "status", [], "any", false, false, false, 44) == "Completed")) {
                // line 45
                yield "                                            <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_change_status", ["numc" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "numc", [], "any", false, false, false, 45), "status" => "Cancelled"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-danger\">Cancel</a>
                                        ";
            }
            // line 47
            yield "                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            yield "                                <tr>
                                    <td colspan=\"6\">No records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_back_new");
        yield "\" class=\"btn btn-primary mt-4\">Create New</a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const tableRows = document.querySelectorAll('table tbody tr');

            searchInput.addEventListener('input', function () {
                const searchText = searchInput.value.trim().toLowerCase();

                tableRows.forEach(row => {
                    const rowData = Array.from(row.children).map(cell => cell.textContent.trim().toLowerCase());
                    row.style.display = rowData.some(text => text.includes(searchText)) ? '' : 'none';
                });
            });
        });
    </script>
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
        return "commande_back/index.html.twig";
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
        return array (  202 => 60,  194 => 54,  185 => 50,  178 => 47,  172 => 45,  170 => 44,  165 => 43,  163 => 42,  158 => 41,  156 => 40,  151 => 38,  147 => 37,  142 => 35,  138 => 34,  134 => 33,  130 => 32,  126 => 31,  123 => 30,  118 => 29,  99 => 13,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Commande index{% endblock %}

{% block body %}
    <div class=\"container-fluid mt-4\">
        <h1 class=\"mb-4\">Commande</h1>

        <!-- Search Input -->
        <div class=\"mb-3\">
            <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search by Numc, Adressec, Status, etc.\">
        </div>
<a href=\"{{ path('app_commande_back_export_pdf') }}\" class=\"btn btn-secondary\">Export to PDF</a>
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\">Numc</th>
                                <th scope=\"col\">Adressec</th>
                                <th scope=\"col\">Panier</th>
                                <th scope=\"col\">Price</th>
                                <th scope=\"col\">Status</th>
                                <th scope=\"col\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for commande in commandes %}
                                <tr>
                                    <td>{{ commande.numc }}</td>
                                    <td>{{ commande.adressec }}</td>
                                    <td>{{ commande.panier }}</td>
                                    <td>{{ commande.price }}</td>
                                    <td>{{ commande.status }}</td>
                                    <td>
                                        <a href=\"{{ path('app_commande_back_show', {'numc': commande.numc}) }}\" class=\"btn btn-sm btn-primary\">Show</a>
                                        <a href=\"{{ path('app_commande_back_edit', {'numc': commande.numc}) }}\" class=\"btn btn-sm btn-warning\">Edit</a>
                                        
                                        {% if commande.status == 'On Hold' %}
                                            <a href=\"{{ path('app_commande_change_status', {'numc': commande.numc, 'status': 'Processing'}) }}\" class=\"btn btn-sm btn-success\">Process</a>
                                        {% elseif commande.status == 'Processing' %}
                                            <a href=\"{{ path('app_commande_change_status', {'numc': commande.numc, 'status': 'Completed'}) }}\" class=\"btn btn-sm btn-info\">Complete</a>
                                        {% elseif commande.status == 'Completed' %}
                                            <a href=\"{{ path('app_commande_change_status', {'numc': commande.numc, 'status': 'Cancelled'}) }}\" class=\"btn btn-sm btn-danger\">Cancel</a>
                                        {% endif %}
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
        </div>

        <a href=\"{{ path('app_commande_back_new') }}\" class=\"btn btn-primary mt-4\">Create New</a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const tableRows = document.querySelectorAll('table tbody tr');

            searchInput.addEventListener('input', function () {
                const searchText = searchInput.value.trim().toLowerCase();

                tableRows.forEach(row => {
                    const rowData = Array.from(row.children).map(cell => cell.textContent.trim().toLowerCase());
                    row.style.display = rowData.some(text => text.includes(searchText)) ? '' : 'none';
                });
            });
        });
    </script>
{% endblock %}
", "commande_back/index.html.twig", "C:\\Users\\UwU\\Desktop\\Works\\Day 1\\GestionCommande\\templates\\commande_back\\index.html.twig");
    }
}
