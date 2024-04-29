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

/* baseBack.html.twig */
class __TwigTemplate_dfbd6ed09dbc06e3b0a54e2fe7e15f03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>PolluxUI Admin</title>
";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 15
        yield "
</head>

<body>
  <div class=\"row\" id=\"proBanner\">
    <div class=\"col-12\">
      <span class=\"d-flex align-items-center purchase-popup\">
        <p>Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!</p>
        <a href=\"https://bootstrapdash.com/demo/polluxui/template/index.html?utm_source=organic&utm_medium=banner&utm_campaign=free-preview\"
          target=\"_blank\" class=\"btn download-button purchase-button ml-auto\">Upgrade To Pro</a>
        <i class=\"typcn typcn-delete-outline\" id=\"bannerClose\"></i>
      </span>
    </div>
  </div>
  <div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
      <div class=\"navbar-brand-wrapper d-flex justify-content-center\">
        <div class=\"navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100\">
          <a class=\"navbar-brand brand-logo\" href=\"index.html\"><img src=\"images/logo.svg\" alt=\"logo\" /></a>
          <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"images/logo-mini.svg\" alt=\"logo\" /></a>
          <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
            <span class=\"typcn typcn-th-menu\"></span>
          </button>
        </div>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item nav-profile dropdown\">
            <a class=\"nav-link\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
              <img src=\"images/faces/face5.jpg\" alt=\"profile\" />
              <span class=\"nav-profile-name\">Eugenia Mullins</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
              <a class=\"dropdown-item\">
                <i class=\"typcn typcn-cog-outline text-primary\"></i>
                Settings
              </a>
              <a class=\"dropdown-item\">
                <i class=\"typcn typcn-eject text-primary\"></i>
                Logout
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-user-status dropdown\">
            <p class=\"mb-0\">Last login was 23 hours ago.</p>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item nav-date dropdown\">
            <a class=\"nav-link d-flex justify-content-center align-items-center\" href=\"javascript:;\">
              <h6 class=\"date mb-0\">Today : Mar 23</h6>
              <i class=\"typcn typcn-calendar\"></i>
            </a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\"
              id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"typcn typcn-cog-outline mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\"
              aria-labelledby=\"messageDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <img src=\"images/faces/face4.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-normal\">David Grey
                  </h6>
                  <p class=\"font-weight-light small-text text-muted mb-0\">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <img src=\"images/faces/face2.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-normal\">Tim Cook
                  </h6>
                  <p class=\"font-weight-light small-text text-muted mb-0\">
                    New product launch
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <img src=\"images/faces/face3.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-normal\"> Johnson
                  </h6>
                  <p class=\"font-weight-light small-text text-muted mb-0\">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class=\"nav-item dropdown mr-0\">
            <a class=\"nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center\"
              id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"typcn typcn-bell mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\"
              aria-labelledby=\"notificationDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-success\">
                    <i class=\"typcn typcn-info mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Just now
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-warning\">
                    <i class=\"typcn typcn-cog-outline mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Private message
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-info\">
                    <i class=\"typcn typcn-user mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\"
          data-toggle=\"offcanvas\">
          <span class=\"typcn typcn-th-menu\"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <nav class=\"navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0\">
      <div class=\"navbar-links-wrapper d-flex align-items-stretch\">
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-calendar-outline\"></i></a>
        </div>
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-mail\"></i></a>
        </div>
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-folder\"></i></a>
        </div>
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-document-text\"></i></a>
        </div>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item ml-0\">
            <h4 class=\"mb-0\">Dashboard</h4>
          </li>
          <li class=\"nav-item\">
            <div class=\"d-flex align-items-baseline\">
              <p class=\"mb-0\">Home</p>
              <i class=\"typcn typcn-chevron-right\"></i>
              <p class=\"mb-0\">Main Dahboard</p>
            </div>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item nav-search d-none d-md-block mr-0\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" aria-label=\"search\"
                aria-describedby=\"search\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"typcn typcn-zoom\"></i>
                </span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class=\"container-fluid page-body-wrapper\">
      <!-- partial:partials/_settings-panel.html -->
      <div class=\"theme-setting-wrapper\">
        <div id=\"settings-trigger\"><i class=\"typcn typcn-cog-outline\"></i></div>
        <div id=\"theme-settings\" class=\"settings-panel\">
          <i class=\"settings-close typcn typcn-times\"></i>
          <p class=\"settings-heading\">SIDEBAR SKINS</p>
          <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\">
            <div class=\"img-ss rounded-circle bg-light border mr-3\"></div>Light
          </div>
          <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\">
            <div class=\"img-ss rounded-circle bg-dark border mr-3\"></div>Dark
          </div>
          <p class=\"settings-heading mt-2\">HEADER SKINS</p>
          <div class=\"color-tiles mx-0 px-4\">
            <div class=\"tiles success\"></div>
            <div class=\"tiles warning\"></div>
            <div class=\"tiles danger\"></div>
            <div class=\"tiles info\"></div>
            <div class=\"tiles dark\"></div>
            <div class=\"tiles default\"></div>
          </div>
        </div>
      </div>
      <div id=\"right-sidebar\" class=\"settings-panel\">
        <i class=\"settings-close typcn typcn-times\"></i>
        <ul class=\"nav nav-tabs\" id=\"setting-panel\" role=\"tablist\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"todo-tab\" data-toggle=\"tab\" href=\"#todo-section\" role=\"tab\"
              aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"chats-tab\" data-toggle=\"tab\" href=\"#chats-section\" role=\"tab\"
              aria-controls=\"chats-section\">CHATS</a>
          </li>
        </ul>
        <div class=\"tab-content\" id=\"setting-content\">
          <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\"
            aria-labelledby=\"todo-section\">
            <div class=\"add-items d-flex px-3 mb-0\">
              <form class=\"form w-100\">
                <div class=\"form-group d-flex\">
                  <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                  <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
                </div>
              </form>
            </div>
            <div class=\"list-wrapper px-3\">
              <ul class=\"d-flex flex-column-reverse todo-list\">
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Project review
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
              </ul>
            </div>
            <div class=\"events py-4 border-bottom px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"typcn typcn-media-record-outline text-primary mr-2\"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Creating component page</p>
              <p class=\"text-gray mb-0\">build a js based app</p>
            </div>
            <div class=\"events pt-4 px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"typcn typcn-media-record-outline text-primary mr-2\"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
              <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
            <div class=\"d-flex align-items-center justify-content-between border-bottom\">
              <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
              <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal\">See
                All</small>
            </div>
            <ul class=\"chat-list\">
              <li class=\"list active\">
                <div class=\"profile\"><img src=\"images/faces/face1.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">19 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"images/faces/face2.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <div class=\"wrapper d-flex\">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
                <small class=\"text-muted my-auto\">23 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"images/faces/face3.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">14 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"images/faces/face4.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class=\"text-muted my-auto\">2 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"images/faces/face5.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">5 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"images/faces/face6.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 400
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resto_back_index");
        yield "\">
            <i class=\"typcn typcn-document-text menu-icon\"></i>
            <span class=\"menu-title\">Restaurants</span>
            <i class=\"menu-arrow\"></i>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 407
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_back_index");
        yield "\">
            <i class=\"typcn typcn-document-text menu-icon\"></i>
            <span class=\"menu-title\">Commandes</span>
            <i class=\"menu-arrow\"></i>
        </a>
    </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class=\"main-panel\">
        <div class=\"content-wrapper\">
          ";
        // line 418
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 422
        yield "        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class=\"footer\">
          <div class=\"card\">
            <div class=\"card-body\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2020 <a
                    href=\"https://www.bootstrapdash.com/\" class=\"text-muted\" target=\"_blank\">Bootstrapdash</a>. All
                  rights reserved.</span>
                <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted\">Free <a
                    href=\"https://www.bootstrapdash.com/\" class=\"text-muted\" target=\"_blank\">Bootstrap dashboard</a>
                  templates from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  ";
        // line 446
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 464
        yield "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        yield "  <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/typicons/typicons.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/css/vendor.bundle.base.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vertical-layout-light/style.css"), "html", null, true);
        yield "\">
  <link rel=\"shortcut icon\" href=\"";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        yield "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 418
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 419
        yield "
          
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 446
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 447
        yield "  <!-- base:js -->
  <script src=\"vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src=\"vendors/chart.js/Chart.min.js\"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src=\"js/off-canvas.js\"></script>
  <script src=\"js/hoverable-collapse.js\"></script>
  <script src=\"js/template.js\"></script>
  <script src=\"js/settings.js\"></script>
  <script src=\"js/todolist.js\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"js/dashboard.js\"></script>
  <!-- End custom js for this page-->
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
        return "baseBack.html.twig";
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
        return array (  582 => 447,  572 => 446,  559 => 419,  549 => 418,  536 => 13,  532 => 12,  528 => 11,  523 => 10,  513 => 9,  500 => 464,  498 => 446,  472 => 422,  470 => 418,  456 => 407,  446 => 400,  59 => 15,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>PolluxUI Admin</title>
{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/typicons/typicons.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('vendors/css/vendor.bundle.base.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/vertical-layout-light/style.css') }}\">
  <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon.png') }}\" />
{% endblock %}

</head>

<body>
  <div class=\"row\" id=\"proBanner\">
    <div class=\"col-12\">
      <span class=\"d-flex align-items-center purchase-popup\">
        <p>Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!</p>
        <a href=\"https://bootstrapdash.com/demo/polluxui/template/index.html?utm_source=organic&utm_medium=banner&utm_campaign=free-preview\"
          target=\"_blank\" class=\"btn download-button purchase-button ml-auto\">Upgrade To Pro</a>
        <i class=\"typcn typcn-delete-outline\" id=\"bannerClose\"></i>
      </span>
    </div>
  </div>
  <div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
      <div class=\"navbar-brand-wrapper d-flex justify-content-center\">
        <div class=\"navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100\">
          <a class=\"navbar-brand brand-logo\" href=\"index.html\"><img src=\"images/logo.svg\" alt=\"logo\" /></a>
          <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"images/logo-mini.svg\" alt=\"logo\" /></a>
          <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
            <span class=\"typcn typcn-th-menu\"></span>
          </button>
        </div>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item nav-profile dropdown\">
            <a class=\"nav-link\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
              <img src=\"images/faces/face5.jpg\" alt=\"profile\" />
              <span class=\"nav-profile-name\">Eugenia Mullins</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
              <a class=\"dropdown-item\">
                <i class=\"typcn typcn-cog-outline text-primary\"></i>
                Settings
              </a>
              <a class=\"dropdown-item\">
                <i class=\"typcn typcn-eject text-primary\"></i>
                Logout
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-user-status dropdown\">
            <p class=\"mb-0\">Last login was 23 hours ago.</p>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item nav-date dropdown\">
            <a class=\"nav-link d-flex justify-content-center align-items-center\" href=\"javascript:;\">
              <h6 class=\"date mb-0\">Today : Mar 23</h6>
              <i class=\"typcn typcn-calendar\"></i>
            </a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\"
              id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"typcn typcn-cog-outline mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\"
              aria-labelledby=\"messageDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <img src=\"images/faces/face4.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-normal\">David Grey
                  </h6>
                  <p class=\"font-weight-light small-text text-muted mb-0\">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <img src=\"images/faces/face2.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-normal\">Tim Cook
                  </h6>
                  <p class=\"font-weight-light small-text text-muted mb-0\">
                    New product launch
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <img src=\"images/faces/face3.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-normal\"> Johnson
                  </h6>
                  <p class=\"font-weight-light small-text text-muted mb-0\">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class=\"nav-item dropdown mr-0\">
            <a class=\"nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center\"
              id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"typcn typcn-bell mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\"
              aria-labelledby=\"notificationDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-success\">
                    <i class=\"typcn typcn-info mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Just now
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-warning\">
                    <i class=\"typcn typcn-cog-outline mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Private message
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-info\">
                    <i class=\"typcn typcn-user mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\"
          data-toggle=\"offcanvas\">
          <span class=\"typcn typcn-th-menu\"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <nav class=\"navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0\">
      <div class=\"navbar-links-wrapper d-flex align-items-stretch\">
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-calendar-outline\"></i></a>
        </div>
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-mail\"></i></a>
        </div>
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-folder\"></i></a>
        </div>
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-document-text\"></i></a>
        </div>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item ml-0\">
            <h4 class=\"mb-0\">Dashboard</h4>
          </li>
          <li class=\"nav-item\">
            <div class=\"d-flex align-items-baseline\">
              <p class=\"mb-0\">Home</p>
              <i class=\"typcn typcn-chevron-right\"></i>
              <p class=\"mb-0\">Main Dahboard</p>
            </div>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item nav-search d-none d-md-block mr-0\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" aria-label=\"search\"
                aria-describedby=\"search\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"typcn typcn-zoom\"></i>
                </span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class=\"container-fluid page-body-wrapper\">
      <!-- partial:partials/_settings-panel.html -->
      <div class=\"theme-setting-wrapper\">
        <div id=\"settings-trigger\"><i class=\"typcn typcn-cog-outline\"></i></div>
        <div id=\"theme-settings\" class=\"settings-panel\">
          <i class=\"settings-close typcn typcn-times\"></i>
          <p class=\"settings-heading\">SIDEBAR SKINS</p>
          <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\">
            <div class=\"img-ss rounded-circle bg-light border mr-3\"></div>Light
          </div>
          <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\">
            <div class=\"img-ss rounded-circle bg-dark border mr-3\"></div>Dark
          </div>
          <p class=\"settings-heading mt-2\">HEADER SKINS</p>
          <div class=\"color-tiles mx-0 px-4\">
            <div class=\"tiles success\"></div>
            <div class=\"tiles warning\"></div>
            <div class=\"tiles danger\"></div>
            <div class=\"tiles info\"></div>
            <div class=\"tiles dark\"></div>
            <div class=\"tiles default\"></div>
          </div>
        </div>
      </div>
      <div id=\"right-sidebar\" class=\"settings-panel\">
        <i class=\"settings-close typcn typcn-times\"></i>
        <ul class=\"nav nav-tabs\" id=\"setting-panel\" role=\"tablist\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"todo-tab\" data-toggle=\"tab\" href=\"#todo-section\" role=\"tab\"
              aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"chats-tab\" data-toggle=\"tab\" href=\"#chats-section\" role=\"tab\"
              aria-controls=\"chats-section\">CHATS</a>
          </li>
        </ul>
        <div class=\"tab-content\" id=\"setting-content\">
          <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\"
            aria-labelledby=\"todo-section\">
            <div class=\"add-items d-flex px-3 mb-0\">
              <form class=\"form w-100\">
                <div class=\"form-group d-flex\">
                  <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                  <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
                </div>
              </form>
            </div>
            <div class=\"list-wrapper px-3\">
              <ul class=\"d-flex flex-column-reverse todo-list\">
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Project review
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
              </ul>
            </div>
            <div class=\"events py-4 border-bottom px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"typcn typcn-media-record-outline text-primary mr-2\"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Creating component page</p>
              <p class=\"text-gray mb-0\">build a js based app</p>
            </div>
            <div class=\"events pt-4 px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"typcn typcn-media-record-outline text-primary mr-2\"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
              <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
            <div class=\"d-flex align-items-center justify-content-between border-bottom\">
              <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
              <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal\">See
                All</small>
            </div>
            <ul class=\"chat-list\">
              <li class=\"list active\">
                <div class=\"profile\"><img src=\"images/faces/face1.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">19 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"images/faces/face2.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <div class=\"wrapper d-flex\">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
                <small class=\"text-muted my-auto\">23 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"images/faces/face3.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">14 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"images/faces/face4.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class=\"text-muted my-auto\">2 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"images/faces/face5.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">5 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"images/faces/face6.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_resto_back_index') }}\">
            <i class=\"typcn typcn-document-text menu-icon\"></i>
            <span class=\"menu-title\">Restaurants</span>
            <i class=\"menu-arrow\"></i>
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_commande_back_index') }}\">
            <i class=\"typcn typcn-document-text menu-icon\"></i>
            <span class=\"menu-title\">Commandes</span>
            <i class=\"menu-arrow\"></i>
        </a>
    </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class=\"main-panel\">
        <div class=\"content-wrapper\">
          {% block body %}

          
          {% endblock %}
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class=\"footer\">
          <div class=\"card\">
            <div class=\"card-body\">
              <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2020 <a
                    href=\"https://www.bootstrapdash.com/\" class=\"text-muted\" target=\"_blank\">Bootstrapdash</a>. All
                  rights reserved.</span>
                <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted\">Free <a
                    href=\"https://www.bootstrapdash.com/\" class=\"text-muted\" target=\"_blank\">Bootstrap dashboard</a>
                  templates from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  {% block javascripts %}
  <!-- base:js -->
  <script src=\"vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src=\"vendors/chart.js/Chart.min.js\"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src=\"js/off-canvas.js\"></script>
  <script src=\"js/hoverable-collapse.js\"></script>
  <script src=\"js/template.js\"></script>
  <script src=\"js/settings.js\"></script>
  <script src=\"js/todolist.js\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"js/dashboard.js\"></script>
  <!-- End custom js for this page-->
  {% endblock %}
</body>

</html>", "baseBack.html.twig", "C:\\Users\\UwU\\Desktop\\Works\\Day 1\\GestionCommande\\templates\\baseBack.html.twig");
    }
}
