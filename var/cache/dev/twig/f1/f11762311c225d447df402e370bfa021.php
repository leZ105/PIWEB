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

/* commande/success.html.twig */
class __TwigTemplate_3d780306bc9b1ae8327f6fd72722fcc0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/success.html.twig"));

        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Payment Successful - Tazuri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #00C6FF, #0072FF);
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
        .checkmark {
            font-size: 72px;
            color: #4CAF50;
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
        .order-details {
            text-align: left;
            margin-top: 20px;
        }
        .order-details span {
            font-weight: bold;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background: #0072FF;
            color: white;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .button:hover {
            background: #005bb5;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"checkmark\">&#10004;</div>
        <div class=\"title\">Payment Successful!</div>
        <div class=\"message\">Thank you for your purchase. Your payment has been successfully processed.</div>
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
        return "commande/success.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Payment Successful - Tazuri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #00C6FF, #0072FF);
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
        .checkmark {
            font-size: 72px;
            color: #4CAF50;
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
        .order-details {
            text-align: left;
            margin-top: 20px;
        }
        .order-details span {
            font-weight: bold;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background: #0072FF;
            color: white;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .button:hover {
            background: #005bb5;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"checkmark\">&#10004;</div>
        <div class=\"title\">Payment Successful!</div>
        <div class=\"message\">Thank you for your purchase. Your payment has been successfully processed.</div>
    </div>
</body>
</html>
", "commande/success.html.twig", "C:\\Users\\zizo\\Downloads\\GestionCommande\\GestionCommande\\templates\\commande\\success.html.twig");
    }
}
