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

/* resto_back/pdf.html.twig */
class __TwigTemplate_a25c8355574db42b85113b23eab9593d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resto_back/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resto_back/pdf.html.twig"));

        // line 1
        yield "
    <h1>Resto List</h1>
    <table>
        <thead>
            <tr>
                <th>IdResto</th>
                <th>Nomr</th>
                <th>Adresser</th>
                <th>Numr</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["restos"]) || array_key_exists("restos", $context) ? $context["restos"] : (function () { throw new RuntimeError('Variable "restos" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["resto"]) {
            // line 14
            yield "                <tr>
                    <td>";
            // line 15
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["resto"], "idResto", [], "any", false, false, false, 15), "html", null, true);
            yield "</td>
                    <td>";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["resto"], "nomr", [], "any", false, false, false, 16), "html", null, true);
            yield "</td>
                    <td>";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["resto"], "adresser", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
                    <td>";
            // line 18
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["resto"], "numr", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "        </tbody>
    </table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "resto_back/pdf.html.twig";
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
        return array (  86 => 21,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  62 => 14,  58 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <h1>Resto List</h1>
    <table>
        <thead>
            <tr>
                <th>IdResto</th>
                <th>Nomr</th>
                <th>Adresser</th>
                <th>Numr</th>
            </tr>
        </thead>
        <tbody>
            {% for resto in restos %}
                <tr>
                    <td>{{ resto.idResto }}</td>
                    <td>{{ resto.nomr }}</td>
                    <td>{{ resto.adresser }}</td>
                    <td>{{ resto.numr }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>", "resto_back/pdf.html.twig", "C:\\Users\\UwU\\Desktop\\Works\\Day 1\\GestionCommande\\templates\\resto_back\\pdf.html.twig");
    }
}
