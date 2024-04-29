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

/* commande/fail.html.twig */
class __TwigTemplate_7df86357e5ff7d56aa4a522615793599 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/fail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/fail.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Payment Failed - Tazuri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #FF6A00, #EE0979);
            color: #333;
            padding: 40px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .crossmark {
            font-size: 72px;
            color: #FF0000;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
        .message {
            font-size: 18px;
            margin: 20px 0;
        }
        .suggestions {
            font-size: 16px;
            text-align: left;
            margin-top: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background: #FF6A00;
            color: white;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .button:hover {
            background: #E04E00;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"crossmark\">&#10060;</div>
        <div class=\"title\">Payment Failed</div>
        <div class=\"message\">We're sorry, but your payment could not be processed.</div>
        <div class=\"suggestions\">
            <p>Here are some possible reasons for the failure:</p>
            <ul>
                <li>Insufficient funds</li>
                <li>Incorrect payment information</li>
                <li>Payment method declined by the bank</li>
            </ul>
            <p>Try the following:</p>
            <ul>
                <li>Check your payment details and try again.</li>
                <li>Use a different payment method.</li>
                <li>Contact your bank for more information.</li>
            </ul>
        </div>
        <a class=\"button\" href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Retry Payment</a>
        <p>If you need further assistance, please contact our support team.</p>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "commande/fail.html.twig";
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
        return array (  119 => 74,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Payment Failed - Tazuri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #FF6A00, #EE0979);
            color: #333;
            padding: 40px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .crossmark {
            font-size: 72px;
            color: #FF0000;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
        .message {
            font-size: 18px;
            margin: 20px 0;
        }
        .suggestions {
            font-size: 16px;
            text-align: left;
            margin-top: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background: #FF6A00;
            color: white;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .button:hover {
            background: #E04E00;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"crossmark\">&#10060;</div>
        <div class=\"title\">Payment Failed</div>
        <div class=\"message\">We're sorry, but your payment could not be processed.</div>
        <div class=\"suggestions\">
            <p>Here are some possible reasons for the failure:</p>
            <ul>
                <li>Insufficient funds</li>
                <li>Incorrect payment information</li>
                <li>Payment method declined by the bank</li>
            </ul>
            <p>Try the following:</p>
            <ul>
                <li>Check your payment details and try again.</li>
                <li>Use a different payment method.</li>
                <li>Contact your bank for more information.</li>
            </ul>
        </div>
        <a class=\"button\" href=\"{{ path('app_home') }}\">Retry Payment</a>
        <p>If you need further assistance, please contact our support team.</p>
    </div>
</body>
</html>
", "commande/fail.html.twig", "C:\\Users\\zizo\\Downloads\\GestionCommande\\GestionCommande\\templates\\commande\\fail.html.twig");
    }
}
