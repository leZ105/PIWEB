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

/* resto_back/index.html.twig */
class __TwigTemplate_7ca97b60fdaf4091ee629975bbd9b94c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resto_back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resto_back/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "resto_back/index.html.twig", 1);
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

        echo "Resto index";
        
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
        <h1 class=\"mb-4\">Resto</h1>
        <div class=\"card\">
            <div class=\"card-body\">
                <!-- Search Input -->
                <div class=\"mb-3\">
                    <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search by ID, Name, Address, etc.\">
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\">IdResto</th>
                                <th scope=\"col\">Nomr</th>
                                <th scope=\"col\">Adresser</th>
                                <th scope=\"col\">Numr</th>
                                <th scope=\"col\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restos"]) || array_key_exists("restos", $context) ? $context["restos"] : (function () { throw new RuntimeError('Variable "restos" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["resto"]) {
            // line 27
            echo "                                <tr>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resto"], "idResto", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resto"], "nomr", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resto"], "adresser", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resto"], "numr", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resto_back_show", ["idResto" => twig_get_attribute($this->env, $this->source, $context["resto"], "idResto", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Show</a>
                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resto_back_edit", ["idResto" => twig_get_attribute($this->env, $this->source, $context["resto"], "idResto", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-secondary\">Edit</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                                <tr>
                                    <td colspan=\"5\">No records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resto_back_new");
        echo "\" class=\"btn btn-primary mt-3\">Create New</a>
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

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "resto_back/index.html.twig";
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
        return array (  164 => 47,  157 => 42,  148 => 38,  139 => 34,  135 => 33,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  115 => 27,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Resto index{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"mb-4\">Resto</h1>
        <div class=\"card\">
            <div class=\"card-body\">
                <!-- Search Input -->
                <div class=\"mb-3\">
                    <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search by ID, Name, Address, etc.\">
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\">IdResto</th>
                                <th scope=\"col\">Nomr</th>
                                <th scope=\"col\">Adresser</th>
                                <th scope=\"col\">Numr</th>
                                <th scope=\"col\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for resto in restos %}
                                <tr>
                                    <td>{{ resto.idResto }}</td>
                                    <td>{{ resto.nomr }}</td>
                                    <td>{{ resto.adresser }}</td>
                                    <td>{{ resto.numr }}</td>
                                    <td>
                                        <a href=\"{{ path('app_resto_back_show', {'idResto': resto.idResto}) }}\" class=\"btn btn-sm btn-primary\">Show</a>
                                        <a href=\"{{ path('app_resto_back_edit', {'idResto': resto.idResto}) }}\" class=\"btn btn-sm btn-secondary\">Edit</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"5\">No records found</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href=\"{{ path('app_resto_back_new') }}\" class=\"btn btn-primary mt-3\">Create New</a>
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
", "resto_back/index.html.twig", "C:\\Users\\UwU\\Desktop\\GestionCommande\\templates\\resto_back\\index.html.twig");
    }
}
