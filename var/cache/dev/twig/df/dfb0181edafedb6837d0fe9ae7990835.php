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

/* base.html.twig */
class __TwigTemplate_57fe292d6097d4fe106c45b10f671cc8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"\"> <!--<![endif]-->

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <title>Food and Restorent One page Template</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"apple-touch-icon\" href=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        yield "\">
  ";
        // line 15
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 27
        yield "  ";
        // line 29
        yield "</head>

<body>
  <!--[if lt IE 8]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <div class='preloader'>
    <div class='loaded'>&nbsp;</div>
  </div>
  <header id=\"home\" class=\"navbar-fixed-top\">
    <div class=\"header_top_menu clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-5 col-md-offset-3 col-sm-12 text-right\">
            <div class=\"call_us_text\">
              <a href=\"\"><i class=\"fa fa-clock-o\"></i> Order Foods 24/7</a>
              <a href=\"\"><i class=\"fa fa-phone\"></i>061 9876 5432</a>
            </div>
          </div>

          <div class=\"col-md-4 col-sm-12\">
            <div class=\"head_top_social text-right\">
              <a href=\"\"><i class=\"fa fa-facebook\"></i></a>
              <a href=\"\"><i class=\"fa fa-google-plus\"></i></a>
              <a href=\"\"><i class=\"fa fa-twitter\"></i></a>
              <a href=\"\"><i class=\"fa fa-linkedin\"></i></a>
              <a href=\"\"><i class=\"fa fa-pinterest-p\"></i></a>
              <a href=\"\"><i class=\"fa fa-youtube\"></i></a>
              <a href=\"\"><i class=\"fa fa-phone\"></i></a>
              <a href=\"\"><i class=\"fa fa-camera\"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- End navbar-collapse-->

    <div class=\"main_menu_bg\">
      <div class=\"container\">
        <div class=\"row\">
          <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                  data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                  <span class=\"sr-only\">Toggle navigation</span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand our_logo\" href=\"#\"><img src=\"";
        // line 82
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" alt=\"\" /></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                <ul class=\"nav navbar-nav navbar-right\">
                  <li><a href=\"#slider\">Home</a></li>
                  <li><a href=\"#abouts\">Menu</a></li>
                  <li><a href=\"#features\">Features</a></li>
                  <li><a href=\"#portfolio\">Delivery</a></li>
                  <li><a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
        yield "\">Commandes</a></li>
                  <li><a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resto_index");
        yield "\" >Restaurants</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </div>
    </div>
  </header> <!-- End Header Section -->

  <section id=\"slider\" class=\"slider\">
  <div class=\"slider_overlay\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"main_slider text-center\">
          <div class=\"col-md-12\">
            <div class=\"main_slider_content wow zoomIn\" data-wow-duration=\"1s\">
              <h1>Foody Love</h1>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
              </p>
              <a href=\"#\" class=\"btn-lg\">Click here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  ";
        // line 125
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 129
        yield "

  <section id=\"mobaileapps\" class=\"mobailapps\">
    <div class=\"slider_overlay\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"main_mobail_apps_content wow zoomIn\">
            <div class=\"col-md-5 col-sm-12 text-center\">
              <img src=\"";
        // line 137
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/iphone.png"), "html", null, true);
        yield "\" alt=\"\" />
            </div>
            <div class=\"col-md-7 col-sm-12\">
              <div class=\"single_monail_apps_text\">
                <h4> Happy to Announce </h4>
                <h1>Mobile App <span>is Available in every OS platform.</span></h1>

                <a href=\"\"><img src=\"";
        // line 144
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/google.png"), "html", null, true);
        yield "\" alt=\"\" /></a>
                <a href=\"\"><img src=\"";
        // line 145
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/apps.png"), "html", null, true);
        yield "\" alt=\"\" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id=\"footer_widget\" class=\"footer_widget\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"footer_widget_content text-center\">
          <div class=\"col-md-4\">
            <div class=\"single_widget wow fadeIn\" data-wow-duration=\"2s\">
              <h3>Take it easy with location</h3>

              <div class=\"single_widget_info\">
                <p>112-Legere ancillae vix ne.

                  <span>Te elit putent propriae eum,</span>
                  <span>aliquip nominati</span>
                  <span class=\"phone_email\">phone: 00 000 000</span>
                  <span>Email: support@templatemela.com</span>
                </p>
              </div>

              <div class=\"footer_socail_icon\">
                <a href=\"\"><i class=\"fa fa-facebook\"></i></a>
                <a href=\"\"><i class=\"fa fa-google-plus\"></i></a>
                <a href=\"\"><i class=\"fa fa-twitter\"></i></a>
                <a href=\"\"><i class=\"fa fa-linkedin\"></i></a>
                <a href=\"\"><i class=\"fa fa-pinterest-p\"></i></a>
                <a href=\"\"><i class=\"fa fa-youtube\"></i></a>
                <a href=\"\"><i class=\"fa fa-phone\"></i></a>
                <a href=\"\"><i class=\"fa fa-camera\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"single_widget wow fadeIn\" data-wow-duration=\"4s\">
              <h3>Take it easy with location</h3>

              <div class=\"single_widget_info\">
                <p><span class=\"date_day\">Monday To Friday</span>
                  <span>8:00am to 10:00pm(Breakfast)</span>
                  <span>11:00am to 10:00pm(Lunch/Diner)</span>

                  <span class=\"date_day\">Saturday & Sunday</span>
                  <span>10:00am to 11:00pm(Brunch)</span>
                  <span>11:00am to 12:00pm(Lunch/Dinner)</span>
                </p>
              </div>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"single_widget wow fadeIn\" data-wow-duration=\"5s\">
              <h3>Take it easy with location</h3>

              <div class=\"single_widget_form text-left\">
                <form id=\"formid\">
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"first name\" required=\"\">
                  </div>

                  <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\" required=\"\">
                  </div>

                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Subject\">
                  </div> <!-- end of form-group -->

                  <div class=\"form-group\">
                    <textarea class=\"form-control\" name=\"message\" rows=\"3\" placeholder=\"Message\"></textarea>
                  </div>

                  <input type=\"submit\" value=\"click here\" class=\"btn btn-primary\">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer id=\"footer\" class=\"footer\">
    <div class=\"container text-center\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <div class=\"copyright wow zoomIn\" data-wow-duration=\"3s\">
            <p>Made with <i class=\"fa fa-heart\"></i> by <a href=\"http://bootstrapthemes.co\">Bootstrap Themes</a>2016.
              All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class=\"scrollup\">
    <a><i class=\"fa fa-chevron-up\"></i></a>
  </div>

  ";
        // line 250
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 260
        yield "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        yield "  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <!--        <link rel=\"stylesheet\" href=\"assets/css/bootstrap-theme.min.css\">-->
  <link rel=\"stylesheet\" href=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate/animate.css"), "html", null, true);
        yield "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/plugins.css"), "html", null, true);
        yield "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        yield "\" />


  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 125
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 126
        yield "

  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 250
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 251
        yield "  <script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 252
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery-1.11.2.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 253
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 254
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-easing/jquery.easing.1.3.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 255
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 256
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 257
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

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
        return "base.html.twig";
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
        return array (  433 => 257,  429 => 256,  425 => 255,  421 => 254,  417 => 253,  413 => 252,  408 => 251,  398 => 250,  385 => 126,  375 => 125,  360 => 23,  356 => 22,  352 => 21,  348 => 20,  344 => 19,  340 => 18,  336 => 16,  326 => 15,  313 => 260,  311 => 250,  203 => 145,  199 => 144,  189 => 137,  179 => 129,  177 => 125,  143 => 94,  139 => 93,  125 => 82,  70 => 29,  68 => 27,  66 => 15,  62 => 14,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"\"> <!--<![endif]-->

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <title>Food and Restorent One page Template</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"apple-touch-icon\" href=\"{{ asset('apple-touch-icon.png' )}}\">
  {% block stylesheets %}
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <!--        <link rel=\"stylesheet\" href=\"assets/css/bootstrap-theme.min.css\">-->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/css/font-awesome.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate/animate.css') }}\" />
  <link rel=\"stylesheet\" href=\"{{ asset('assets/css/plugins.css') }}\" />
  <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/css/responsive.css') }}\" />


  {% endblock %}
  {#
  <script src=\"{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js' )}}\"></script> #}
</head>

<body>
  <!--[if lt IE 8]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <div class='preloader'>
    <div class='loaded'>&nbsp;</div>
  </div>
  <header id=\"home\" class=\"navbar-fixed-top\">
    <div class=\"header_top_menu clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-5 col-md-offset-3 col-sm-12 text-right\">
            <div class=\"call_us_text\">
              <a href=\"\"><i class=\"fa fa-clock-o\"></i> Order Foods 24/7</a>
              <a href=\"\"><i class=\"fa fa-phone\"></i>061 9876 5432</a>
            </div>
          </div>

          <div class=\"col-md-4 col-sm-12\">
            <div class=\"head_top_social text-right\">
              <a href=\"\"><i class=\"fa fa-facebook\"></i></a>
              <a href=\"\"><i class=\"fa fa-google-plus\"></i></a>
              <a href=\"\"><i class=\"fa fa-twitter\"></i></a>
              <a href=\"\"><i class=\"fa fa-linkedin\"></i></a>
              <a href=\"\"><i class=\"fa fa-pinterest-p\"></i></a>
              <a href=\"\"><i class=\"fa fa-youtube\"></i></a>
              <a href=\"\"><i class=\"fa fa-phone\"></i></a>
              <a href=\"\"><i class=\"fa fa-camera\"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- End navbar-collapse-->

    <div class=\"main_menu_bg\">
      <div class=\"container\">
        <div class=\"row\">
          <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                  data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                  <span class=\"sr-only\">Toggle navigation</span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand our_logo\" href=\"#\"><img src=\"{{ asset('assets/images/logo.png')}}\" alt=\"\" /></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                <ul class=\"nav navbar-nav navbar-right\">
                  <li><a href=\"#slider\">Home</a></li>
                  <li><a href=\"#abouts\">Menu</a></li>
                  <li><a href=\"#features\">Features</a></li>
                  <li><a href=\"#portfolio\">Delivery</a></li>
                  <li><a href=\"{{ path('app_commande_index') }}\">Commandes</a></li>
                  <li><a href=\"{{ path('app_resto_index') }}\" >Restaurants</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </div>
    </div>
  </header> <!-- End Header Section -->

  <section id=\"slider\" class=\"slider\">
  <div class=\"slider_overlay\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"main_slider text-center\">
          <div class=\"col-md-12\">
            <div class=\"main_slider_content wow zoomIn\" data-wow-duration=\"1s\">
              <h1>Foody Love</h1>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
              </p>
              <a href=\"#\" class=\"btn-lg\">Click here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  {% block body %}


  {% endblock %}


  <section id=\"mobaileapps\" class=\"mobailapps\">
    <div class=\"slider_overlay\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"main_mobail_apps_content wow zoomIn\">
            <div class=\"col-md-5 col-sm-12 text-center\">
              <img src=\"{{ asset('assets/images/iphone.png')}}\" alt=\"\" />
            </div>
            <div class=\"col-md-7 col-sm-12\">
              <div class=\"single_monail_apps_text\">
                <h4> Happy to Announce </h4>
                <h1>Mobile App <span>is Available in every OS platform.</span></h1>

                <a href=\"\"><img src=\"{{ asset('assets/images/google.png')}}\" alt=\"\" /></a>
                <a href=\"\"><img src=\"{{ asset('assets/images/apps.png' )}}\" alt=\"\" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id=\"footer_widget\" class=\"footer_widget\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"footer_widget_content text-center\">
          <div class=\"col-md-4\">
            <div class=\"single_widget wow fadeIn\" data-wow-duration=\"2s\">
              <h3>Take it easy with location</h3>

              <div class=\"single_widget_info\">
                <p>112-Legere ancillae vix ne.

                  <span>Te elit putent propriae eum,</span>
                  <span>aliquip nominati</span>
                  <span class=\"phone_email\">phone: 00 000 000</span>
                  <span>Email: support@templatemela.com</span>
                </p>
              </div>

              <div class=\"footer_socail_icon\">
                <a href=\"\"><i class=\"fa fa-facebook\"></i></a>
                <a href=\"\"><i class=\"fa fa-google-plus\"></i></a>
                <a href=\"\"><i class=\"fa fa-twitter\"></i></a>
                <a href=\"\"><i class=\"fa fa-linkedin\"></i></a>
                <a href=\"\"><i class=\"fa fa-pinterest-p\"></i></a>
                <a href=\"\"><i class=\"fa fa-youtube\"></i></a>
                <a href=\"\"><i class=\"fa fa-phone\"></i></a>
                <a href=\"\"><i class=\"fa fa-camera\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"single_widget wow fadeIn\" data-wow-duration=\"4s\">
              <h3>Take it easy with location</h3>

              <div class=\"single_widget_info\">
                <p><span class=\"date_day\">Monday To Friday</span>
                  <span>8:00am to 10:00pm(Breakfast)</span>
                  <span>11:00am to 10:00pm(Lunch/Diner)</span>

                  <span class=\"date_day\">Saturday & Sunday</span>
                  <span>10:00am to 11:00pm(Brunch)</span>
                  <span>11:00am to 12:00pm(Lunch/Dinner)</span>
                </p>
              </div>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"single_widget wow fadeIn\" data-wow-duration=\"5s\">
              <h3>Take it easy with location</h3>

              <div class=\"single_widget_form text-left\">
                <form id=\"formid\">
                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"first name\" required=\"\">
                  </div>

                  <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\" required=\"\">
                  </div>

                  <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Subject\">
                  </div> <!-- end of form-group -->

                  <div class=\"form-group\">
                    <textarea class=\"form-control\" name=\"message\" rows=\"3\" placeholder=\"Message\"></textarea>
                  </div>

                  <input type=\"submit\" value=\"click here\" class=\"btn btn-primary\">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer id=\"footer\" class=\"footer\">
    <div class=\"container text-center\">
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <div class=\"copyright wow zoomIn\" data-wow-duration=\"3s\">
            <p>Made with <i class=\"fa fa-heart\"></i> by <a href=\"http://bootstrapthemes.co\">Bootstrap Themes</a>2016.
              All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class=\"scrollup\">
    <a><i class=\"fa fa-chevron-up\"></i></a>
  </div>

  {% block javascripts %}
  <script src=\"{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/vendor/jquery-1.11.2.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/vendor/bootstrap.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/jquery-easing/jquery.easing.1.3.js') }}\"></script>
  <script src=\"{{ asset('assets/js/wow/wow.min.js') }}\"></script>
  <script src=\"{{ asset('assets/js/plugins.js') }}\"></script>
  <script src=\"{{ asset('assets/js/main.js') }}\"></script>

  {% endblock %}
</body>

</html>", "base.html.twig", "C:\\Users\\zizo\\Downloads\\GestionCommande\\GestionCommande\\templates\\base.html.twig");
    }
}
