<?php

/* /var/www/html/themes/vojtasvoboda-newage/partials/sections/features.htm */
class __TwigTemplate_73e8c97e9948b3fad4a678bab376184dddeab6b6ba1b6fef984e74b1a577c168 extends Twig_Template
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
        echo "<section id=\"features\" class=\"features\">
    <div class=\"container\">
        <div class=\"section-heading text-center\">
            <h2>";
        // line 4
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "features_headline", []);
        echo "</h2>
            <p class=\"text-muted\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "features_subheadline", []), "html", null, true);
        echo "</p>
            <hr>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 my-auto\">
                <div class=\"device-container\">
                    <div class=\"device-mockup iphone6_plus portrait white\">
                        <div class=\"device\">
                            <div class=\"screen\">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "features_img", [])) {
            // line 16
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "features_img", []), "getThumb", [0 => 621, 1 => 1104, 2 => "crop"], "method"), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "site_title", []), "html", null, true);
            echo " features\" />
                                ";
        } else {
            // line 18
            echo "                                <img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/demo-screen-1.jpg");
            echo "\" class=\"img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "site_title", []), "html", null, true);
            echo " features\" />
                                ";
        }
        // line 20
        echo "                            </div>
                            <!-- // You can hook the \"home button\" to some JavaScript events or just remove it
                            <div class=\"button\"></div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-8 my-auto\">
                <div class=\"container-fluid\">
                    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "features_list", [])) {
            // line 31
            echo "                        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("features/items"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 32
            echo "                    ";
        } else {
            // line 33
            echo "                        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("features/dummy"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 34
            echo "                    ";
        }
        // line 35
        echo "                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/vojtasvoboda-newage/partials/sections/features.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  90 => 34,  85 => 33,  82 => 32,  77 => 31,  75 => 30,  63 => 20,  55 => 18,  47 => 16,  45 => 15,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"features\" class=\"features\">
    <div class=\"container\">
        <div class=\"section-heading text-center\">
            <h2>{{ this.theme.features_headline | raw }}</h2>
            <p class=\"text-muted\">{{ this.theme.features_subheadline }}</p>
            <hr>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 my-auto\">
                <div class=\"device-container\">
                    <div class=\"device-mockup iphone6_plus portrait white\">
                        <div class=\"device\">
                            <div class=\"screen\">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                {% if this.theme.features_img %}
                                <img src=\"{{ this.theme.features_img.getThumb(621, 1104, 'crop') }}\" class=\"img-fluid\" alt=\"{{ this.theme.site_title }} features\" />
                                {% else %}
                                <img src=\"{{ 'assets/img/demo-screen-1.jpg' | theme }}\" class=\"img-fluid\" alt=\"{{ this.theme.site_title }} features\" />
                                {% endif %}
                            </div>
                            <!-- // You can hook the \"home button\" to some JavaScript events or just remove it
                            <div class=\"button\"></div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-8 my-auto\">
                <div class=\"container-fluid\">
                    {% if this.theme.features_list %}
                        {% partial 'features/items' %}
                    {% else %}
                        {% partial 'features/dummy' %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</section>", "/var/www/html/themes/vojtasvoboda-newage/partials/sections/features.htm", "");
    }
}
