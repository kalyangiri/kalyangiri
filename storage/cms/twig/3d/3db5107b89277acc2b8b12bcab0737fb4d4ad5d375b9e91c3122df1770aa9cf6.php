<?php

/* /var/www/html/themes/vojtasvoboda-newage/partials/sections/intro.htm */
class __TwigTemplate_5235dd7d8111e9996507dd5199a030abf48885bfdbb448e244d2774b6b84afda extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header class=\"masthead\">
    <div class=\"container h-100\">
        <div class=\"row h-100\">
            <div class=\"col-lg-7 my-auto\">
                <div class=\"header-content mx-auto\">
                    <h1 class=\"mb-5\">";
        // line 6
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "intro_headline", []);
        echo "</h1>
                    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "intro_button_link", [])) {
            // line 8
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "intro_button_link", []), "html", null, true);
            echo "\" class=\"btn btn-outline btn-xl js-scroll-trigger\">
                        ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "intro_button", []), "html", null, true);
            echo "
                    </a>
                    ";
        }
        // line 12
        echo "                </div>
            </div>
            <div class=\"col-lg-5 my-auto\">
                <div class=\"device-container\">
                    <div class=\"device-mockup iphone6_plus portrait white\">
                        <div class=\"device\">
                            <div class=\"screen\">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "intro_img", [])) {
            // line 21
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "intro_img", []), "getThumb", [0 => 621, 1 => 1104, 2 => "crop"], "method"), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "site_title", []), "html", null, true);
            echo "\" />
                                ";
        } else {
            // line 23
            echo "                                <img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/demo-screen-1.jpg");
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "site_title", []), "html", null, true);
            echo "\" />
                                ";
        }
        // line 25
        echo "                            </div>
                            <!-- // You can hook the \"home button\" to some JavaScript events or just remove it
                            <div class=\"button\"></div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/vojtasvoboda-newage/partials/sections/intro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  67 => 23,  59 => 21,  57 => 20,  47 => 12,  41 => 9,  36 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"masthead\">
    <div class=\"container h-100\">
        <div class=\"row h-100\">
            <div class=\"col-lg-7 my-auto\">
                <div class=\"header-content mx-auto\">
                    <h1 class=\"mb-5\">{{ this.theme.intro_headline | raw }}</h1>
                    {% if this.theme.intro_button_link %}
                    <a href=\"{{ this.theme.intro_button_link }}\" class=\"btn btn-outline btn-xl js-scroll-trigger\">
                        {{ this.theme.intro_button }}
                    </a>
                    {% endif %}
                </div>
            </div>
            <div class=\"col-lg-5 my-auto\">
                <div class=\"device-container\">
                    <div class=\"device-mockup iphone6_plus portrait white\">
                        <div class=\"device\">
                            <div class=\"screen\">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                {% if this.theme.intro_img %}
                                <img src=\"{{ this.theme.intro_img.getThumb(621, 1104, 'crop') }}\" class=\"img-fluid\" alt=\"{{ this.theme.site_title }}\" />
                                {% else %}
                                <img src=\"{{ 'assets/img/demo-screen-1.jpg' | theme }}\" class=\"img-fluid\" alt=\"{{ this.theme.site_title }}\" />
                                {% endif %}
                            </div>
                            <!-- // You can hook the \"home button\" to some JavaScript events or just remove it
                            <div class=\"button\"></div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>", "/var/www/html/themes/vojtasvoboda-newage/partials/sections/intro.htm", "");
    }
}
