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

/* home/index.html.twig */
class __TwigTemplate_93ef2ddf434e84361d40cc90f50f7dcb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "

  <section id=\"slider\" class=\"slider\">
    <div class=\"slider_overlay\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"main_slider text-center\">
            <div class=\"col-md-12\">
              <div class=\"main_slider_content wow zoomIn\" data-wow-duration=\"1s\">
                <h1>Foody Love</h1>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                  totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. </p>
                <button href=\"\" class=\"btn-lg\">Click here</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id=\"abouts\" class=\"abouts\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"abouts_content\">
          <div class=\"col-md-6\">
            <div class=\"single_abouts_text text-center wow slideInLeft\" data-wow-duration=\"1s\">
              <img src=\"";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/ab.png"), "html", null, true);
        yield "\" alt=\"\" />
            </div>
          </div>

          <div class=\"col-md-6\">
            <div class=\"single_abouts_text wow slideInRight\" data-wow-duration=\"1s\">
              <h4>About us</h4>
              <h3>WE ARE TASTY</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's stan</p>

              <p>dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                typesettingdard dummy text ever since the 1500s,when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting</p>

              <a href=\"\" class=\"btn btn-primary\">click here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id=\"features\" class=\"features\">
    <div class=\"slider_overlay\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"main_features_content_area  wow fadeIn\" data-wow-duration=\"3s\">
            <div class=\"col-md-12\">
              <div class=\"main_features_content text-left\">
                <div class=\"col-md-6\">
                  <div class=\"single_features_text\">
                    <h4>Special Recipes</h4>
                    <h3>Taste of Precious</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                      the industry's stan</p>
                    <p>dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled
                      it to make a type specimen book. It has survived not only five centuries, but also the leap into
                      electronic typesettingdard dummy text ever since the 1500s,when an unknown printer took a galley
                      of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                      but also the leap into electronic typesetting</p>

                    <a href=\"\" class=\"btn btn-primary\">click here</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id=\"portfolio\" class=\"portfolio\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"portfolio_content text-center  wow fadeIn\" data-wow-duration=\"5s\">
          <div class=\"col-md-12\">
            <div class=\"head_title text-center\">
              <h4>Delightful</h4>
              <h3>Experience</h3>
            </div>

            <div class=\"main_portfolio_content\">
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"";
        // line 99
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/p1.png"), "html", null, true);
        yield "\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"";
        // line 107
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/p2.png"), "html", null, true);
        yield "\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"";
        // line 115
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/p3.png"), "html", null, true);
        yield "\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"";
        // line 123
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/p4.png"), "html", null, true);
        yield "\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"";
        // line 131
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/p5.png"), "html", null, true);
        yield "\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"";
        // line 139
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/p6.png"), "html", null, true);
        yield "\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"";
        // line 147
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/p7.png"), "html", null, true);
        yield "\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"";
        // line 155
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/p8.png"), "html", null, true);
        yield "\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id=\"ourPakeg\" class=\"ourPakeg\">
    <div class=\"container\">
      <div class=\"main_pakeg_content\">
        <div class=\"row\">
          <div class=\"head_title text-center\">
            <h4>Amazing</h4>
            <h3>Delicious</h3>
          </div>

          <div class=\"single_pakeg_one text-right wow rotateInDownRight\">
            <div class=\"col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4\">
              <div class=\"single_pakeg_text\">
                <div class=\"pakeg_title\">
                  <h4>Drinks</h4>
                </div>

                <ul>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                </ul>
              </div>
            </div>
          </div>

          <div class=\"single_pakeg_two text-left wow rotateInDownLeft\">
            <div class=\"col-md-6 col-sm-8\">
              <div class=\"single_pakeg_text\">
                <div class=\"pakeg_title\">
                  <h4>Main course </h4>
                </div>

                <ul>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                </ul>
              </div>
            </div>
          </div>

          <div class=\"single_pakeg_three text-left wow rotateInDownRight\">
            <div class=\"col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4\">
              <div class=\"single_pakeg_text\">
                <div class=\"pakeg_title\">
                  <h4>Desserts</h4>
                </div>

                <ul>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
        return "home/index.html.twig";
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
        return array (  246 => 155,  235 => 147,  224 => 139,  213 => 131,  202 => 123,  191 => 115,  180 => 107,  169 => 99,  99 => 32,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


  <section id=\"slider\" class=\"slider\">
    <div class=\"slider_overlay\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"main_slider text-center\">
            <div class=\"col-md-12\">
              <div class=\"main_slider_content wow zoomIn\" data-wow-duration=\"1s\">
                <h1>Foody Love</h1>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                  totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. </p>
                <button href=\"\" class=\"btn-lg\">Click here</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id=\"abouts\" class=\"abouts\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"abouts_content\">
          <div class=\"col-md-6\">
            <div class=\"single_abouts_text text-center wow slideInLeft\" data-wow-duration=\"1s\">
              <img src=\"{{ asset('assets/images/ab.png')}}\" alt=\"\" />
            </div>
          </div>

          <div class=\"col-md-6\">
            <div class=\"single_abouts_text wow slideInRight\" data-wow-duration=\"1s\">
              <h4>About us</h4>
              <h3>WE ARE TASTY</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's stan</p>

              <p>dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                typesettingdard dummy text ever since the 1500s,when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting</p>

              <a href=\"\" class=\"btn btn-primary\">click here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id=\"features\" class=\"features\">
    <div class=\"slider_overlay\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"main_features_content_area  wow fadeIn\" data-wow-duration=\"3s\">
            <div class=\"col-md-12\">
              <div class=\"main_features_content text-left\">
                <div class=\"col-md-6\">
                  <div class=\"single_features_text\">
                    <h4>Special Recipes</h4>
                    <h3>Taste of Precious</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                      the industry's stan</p>
                    <p>dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled
                      it to make a type specimen book. It has survived not only five centuries, but also the leap into
                      electronic typesettingdard dummy text ever since the 1500s,when an unknown printer took a galley
                      of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                      but also the leap into electronic typesetting</p>

                    <a href=\"\" class=\"btn btn-primary\">click here</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id=\"portfolio\" class=\"portfolio\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"portfolio_content text-center  wow fadeIn\" data-wow-duration=\"5s\">
          <div class=\"col-md-12\">
            <div class=\"head_title text-center\">
              <h4>Delightful</h4>
              <h3>Experience</h3>
            </div>

            <div class=\"main_portfolio_content\">
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"{{ asset('assets/images/p1.png')}}\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"{{ asset('assets/images/p2.png')}}\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"{{ asset('assets/images/p3.png')}}\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"{{ asset('assets/images/p4.png')}}\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"{{ asset('assets/images/p5.png')}}\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"{{ asset('assets/images/p6.png')}}\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"{{ asset('assets/images/p7.png')}}\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-4 col-xs-6 single_portfolio_text\">
                <img src=\"{{ asset('assets/images/p8.png')}}\" alt=\"\" />
                <div class=\"portfolio_images_overlay text-center\">
                  <h6>Italian Source Mushroom</h6>
                  <p class=\"product_price\">\$12</p>
                  <a href=\"\" class=\"btn btn-primary\">Click here</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id=\"ourPakeg\" class=\"ourPakeg\">
    <div class=\"container\">
      <div class=\"main_pakeg_content\">
        <div class=\"row\">
          <div class=\"head_title text-center\">
            <h4>Amazing</h4>
            <h3>Delicious</h3>
          </div>

          <div class=\"single_pakeg_one text-right wow rotateInDownRight\">
            <div class=\"col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4\">
              <div class=\"single_pakeg_text\">
                <div class=\"pakeg_title\">
                  <h4>Drinks</h4>
                </div>

                <ul>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                </ul>
              </div>
            </div>
          </div>

          <div class=\"single_pakeg_two text-left wow rotateInDownLeft\">
            <div class=\"col-md-6 col-sm-8\">
              <div class=\"single_pakeg_text\">
                <div class=\"pakeg_title\">
                  <h4>Main course </h4>
                </div>

                <ul>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                </ul>
              </div>
            </div>
          </div>

          <div class=\"single_pakeg_three text-left wow rotateInDownRight\">
            <div class=\"col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4\">
              <div class=\"single_pakeg_text\">
                <div class=\"pakeg_title\">
                  <h4>Desserts</h4>
                </div>

                <ul>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                  <li> Tuna Roast Source........................................................\$24.5 </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

{% endblock %}", "home/index.html.twig", "C:\\Users\\UwU\\Desktop\\Works\\Day 1\\GestionCommande\\templates\\home\\index.html.twig");
    }
}
