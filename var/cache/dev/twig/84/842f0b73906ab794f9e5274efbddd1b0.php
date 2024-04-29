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

/* resto/index.html.twig */
class __TwigTemplate_0653bf7f623be45e043a8b7384f25bee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resto/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resto/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "resto/index.html.twig", 1);
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

        yield "Resto Index";
        
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
        <h1 class=\"text-center\">Resto Index</h1>

        <div class=\"row justify-content-center\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["restos"]) || array_key_exists("restos", $context) ? $context["restos"] : (function () { throw new RuntimeError('Variable "restos" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["resto"]) {
            // line 11
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <img src=\"";
            // line 13
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resto.jpg"), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Restaurant Image\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 15
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["resto"], "nomr", [], "any", false, false, false, 15), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">Address: ";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["resto"], "adresser", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
                            <p class=\"card-text\">Number: ";
            // line 17
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["resto"], "numr", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>

                            <!-- Show and Commande buttons -->
                            <a href=\"";
            // line 20
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resto_show", ["idResto" => CoreExtension::getAttribute($this->env, $this->source, $context["resto"], "idResto", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Show</a>
                            <a href=\"";
            // line 21
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new", ["idResto" => CoreExtension::getAttribute($this->env, $this->source, $context["resto"], "idResto", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\" class=\"btn btn-success\">Commande</a>

                            <!-- Facebook and Twitter Share Buttons -->
                            <div class=\"mt-2\">

                                <a 
                                    href=\"https://twitter.com/intent/tweet?text=";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["resto"], "nomr", [], "any", false, false, false, 27), "html", null, true);
            yield " - Check out this restaurant!&url=";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_resto_show", ["idResto" => CoreExtension::getAttribute($this->env, $this->source, $context["resto"], "idResto", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\"
                                    target=\"_blank\" 
                                    class=\"btn btn-info\"
                                    style=\"background-color: #1DA1F2; border-color: #1DA1F2;\"
                                >
                                    Share on Twitter
                                </a>
                                                                <a 
                                    href=\"https://www.facebook.com/sharer/sharer.php?u=";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_resto_show", ["idResto" => CoreExtension::getAttribute($this->env, $this->source, $context["resto"], "idResto", [], "any", false, false, false, 35)]), "html", null, true);
            yield "&quote=";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["resto"], "nomr", [], "any", false, false, false, 35), "html", null, true);
            yield " - Check out this restaurant!\"
                                    target=\"_blank\"
                                    class=\"btn btn-info\"
                                    style=\"background-color: #3b5998; border-color: #3b5998;\"
                                >
                                    Share on Facebook
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            yield "                <div class=\"col\">
                    <p class=\"text-center\">No records found</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "        </div>
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
        return "resto/index.html.twig";
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
        return array (  178 => 51,  169 => 47,  150 => 35,  137 => 27,  128 => 21,  124 => 20,  118 => 17,  114 => 16,  110 => 15,  105 => 13,  101 => 11,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Resto Index{% endblock %}

{% block body %}
    <div class=\"container mt-5\" style=\"background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\">
        <h1 class=\"text-center\">Resto Index</h1>

        <div class=\"row justify-content-center\">
            {% for resto in restos %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <img src=\"{{ asset('resto.jpg') }}\" class=\"card-img-top\" alt=\"Restaurant Image\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ resto.nomr }}</h5>
                            <p class=\"card-text\">Address: {{ resto.adresser }}</p>
                            <p class=\"card-text\">Number: {{ resto.numr }}</p>

                            <!-- Show and Commande buttons -->
                            <a href=\"{{ path('app_resto_show', {'idResto': resto.idResto}) }}\" class=\"btn btn-primary\">Show</a>
                            <a href=\"{{ path('app_commande_new', {'idResto': resto.idResto}) }}\" class=\"btn btn-success\">Commande</a>

                            <!-- Facebook and Twitter Share Buttons -->
                            <div class=\"mt-2\">

                                <a 
                                    href=\"https://twitter.com/intent/tweet?text={{ resto.nomr }} - Check out this restaurant!&url={{ url('app_resto_show', {'idResto': resto.idResto}) }}\"
                                    target=\"_blank\" 
                                    class=\"btn btn-info\"
                                    style=\"background-color: #1DA1F2; border-color: #1DA1F2;\"
                                >
                                    Share on Twitter
                                </a>
                                                                <a 
                                    href=\"https://www.facebook.com/sharer/sharer.php?u={{ url('app_resto_show', {'idResto': resto.idResto}) }}&quote={{ resto.nomr }} - Check out this restaurant!\"
                                    target=\"_blank\"
                                    class=\"btn btn-info\"
                                    style=\"background-color: #3b5998; border-color: #3b5998;\"
                                >
                                    Share on Facebook
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col\">
                    <p class=\"text-center\">No records found</p>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "resto/index.html.twig", "C:\\Users\\UwU\\Desktop\\Works\\Day 1\\GestionCommande\\templates\\resto\\index.html.twig");
    }
}
