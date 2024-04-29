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

/* chat_bot/index.html.twig */
class __TwigTemplate_fc5f8d4cd199348e62f9f6412300a640 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat_bot/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat_bot/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chat_bot/index.html.twig", 1);
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

        yield "Chat Bot";
        
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
        yield "<div class=\"container mt-5\">
    <h1 class=\"text-center\">Chat Bot</h1>

    <div id=\"chat-box\" style=\"border: 1px solid #ccc; height: 400px; overflow-y: auto; padding: 10px;\">
        <!-- Chat content will be dynamically inserted here -->
    </div>

    <div class=\"mt-3\">
        <form id=\"chat-form\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"chat-input\" class=\"form-control\" placeholder=\"Type a message... Press Enter to send\" />
                <button type=\"button\" class=\"btn btn-primary\" id=\"send-message\">Send</button>
            </div>
        </form>
    </div>
</div>

<script>
// Function to generate bot response
function generateBotResponse(userMessage) {
    const lowerCaseMessage = userMessage.toLowerCase();
    
    switch (lowerCaseMessage) {
        case 'hello':
        case 'hi':
            return 'Hello! How can I assist you today?';

        case 'how are you':
            return 'I\\'m just a bot, but I\\'m here to help!';

        default:
            return 'I\\'m not sure I understand. Can you rephrase?';
    }
}

// Function to handle form submission
document.getElementById('chat-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form from reloading the page

    const chatInput = document.getElementById('chat-input');
    const chatBox = document.getElementById('chat-box');
    const userMessage = chatInput.value;

    if (userMessage.trim() === '') {
        console.warn(\"Cannot send empty messages.\");
        return; // Do not send empty messages
    }

    // Display the user's message in the chat box
    const userMessageElement = document.createElement('div');
    userMessageElement.textContent = 'You: ' + userMessage;
    chatBox.appendChild(userMessageElement);

    // Generate the bot response
    const botResponse = generateBotResponse(userMessage);

    // Display the bot's response in the chat box
    const botResponseElement = document.createElement('div');
    botResponseElement.textContent = 'Bot: ' + botResponse;
    chatBox.appendChild(botResponseElement);

    // Scroll to the bottom of the chat box to keep the latest messages visible
    chatBox.scrollTop = chatBox.scrollHeight;

    // Clear the chat input
    chatInput.value = '';
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
        return "chat_bot/index.html.twig";
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
        return array (  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chat Bot{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center\">Chat Bot</h1>

    <div id=\"chat-box\" style=\"border: 1px solid #ccc; height: 400px; overflow-y: auto; padding: 10px;\">
        <!-- Chat content will be dynamically inserted here -->
    </div>

    <div class=\"mt-3\">
        <form id=\"chat-form\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"chat-input\" class=\"form-control\" placeholder=\"Type a message... Press Enter to send\" />
                <button type=\"button\" class=\"btn btn-primary\" id=\"send-message\">Send</button>
            </div>
        </form>
    </div>
</div>

<script>
// Function to generate bot response
function generateBotResponse(userMessage) {
    const lowerCaseMessage = userMessage.toLowerCase();
    
    switch (lowerCaseMessage) {
        case 'hello':
        case 'hi':
            return 'Hello! How can I assist you today?';

        case 'how are you':
            return 'I\\'m just a bot, but I\\'m here to help!';

        default:
            return 'I\\'m not sure I understand. Can you rephrase?';
    }
}

// Function to handle form submission
document.getElementById('chat-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form from reloading the page

    const chatInput = document.getElementById('chat-input');
    const chatBox = document.getElementById('chat-box');
    const userMessage = chatInput.value;

    if (userMessage.trim() === '') {
        console.warn(\"Cannot send empty messages.\");
        return; // Do not send empty messages
    }

    // Display the user's message in the chat box
    const userMessageElement = document.createElement('div');
    userMessageElement.textContent = 'You: ' + userMessage;
    chatBox.appendChild(userMessageElement);

    // Generate the bot response
    const botResponse = generateBotResponse(userMessage);

    // Display the bot's response in the chat box
    const botResponseElement = document.createElement('div');
    botResponseElement.textContent = 'Bot: ' + botResponse;
    chatBox.appendChild(botResponseElement);

    // Scroll to the bottom of the chat box to keep the latest messages visible
    chatBox.scrollTop = chatBox.scrollHeight;

    // Clear the chat input
    chatInput.value = '';
});

</script>
{% endblock %}
", "chat_bot/index.html.twig", "C:\\Users\\UwU\\Desktop\\Works\\Day 1\\GestionCommande\\templates\\chat_bot\\index.html.twig");
    }
}
