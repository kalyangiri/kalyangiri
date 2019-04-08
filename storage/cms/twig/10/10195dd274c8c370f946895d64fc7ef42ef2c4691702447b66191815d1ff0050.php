<?php

/* /var/www/html/themes/vojtasvoboda-newage/partials/sections/contact.htm */
class __TwigTemplate_8f1fbd971b30e82c0361a6800f1c2227432886144e6093ae069ed38ec0de67d5 extends Twig_Template
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
        echo "<section id=\"contact\" class=\"contact bg-primary\">
    <div class=\"container\">
        <h2>";
        // line 3
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "contact_headline", []);
        echo "</h2>
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "contact_content", [])) {
            // line 5
            echo "        <p>
            ";
            // line 6
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "contact_content", []);
            echo "
        </p>
        ";
        }
        // line 9
        echo "        <ul class=\"list-inline list-social\">
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "contact_twitter", [])) {
            // line 11
            echo "            <li class=\"list-inline-item social-twitter\">
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "contact_twitter", []), "html", null, true);
            echo "\">
                    <i class=\"fa fa-twitter\"></i>
                </a>
            </li>
            ";
        }
        // line 17
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "contact_facebook", [])) {
            // line 18
            echo "            <li class=\"list-inline-item social-facebook\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "contact_facebook", []), "html", null, true);
            echo "\">
                    <i class=\"fa fa-facebook\"></i>
                </a>
            </li>
            ";
        }
        // line 24
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "contact_google", [])) {
            // line 25
            echo "            <li class=\"list-inline-item social-google-plus\">
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "contact_google", []), "html", null, true);
            echo "\">
                    <i class=\"fa fa-google-plus\"></i>
                </a>
            </li>
            ";
        }
        // line 31
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "contact_linkedin", [])) {
            // line 32
            echo "            <li class=\"list-inline-item social-linkedin\">
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "contact_linkedin", []), "html", null, true);
            echo "\">
                    <i class=\"fa fa-linkedin\"></i>
                </a>
            </li>
            ";
        }
        // line 38
        echo "        </ul>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/vojtasvoboda-newage/partials/sections/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  92 => 33,  89 => 32,  86 => 31,  78 => 26,  75 => 25,  72 => 24,  64 => 19,  61 => 18,  58 => 17,  50 => 12,  47 => 11,  45 => 10,  42 => 9,  36 => 6,  33 => 5,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"contact\" class=\"contact bg-primary\">
    <div class=\"container\">
        <h2>{{ this.theme.contact_headline | raw }}</h2>
        {% if this.theme.contact_content %}
        <p>
            {{ this.theme.contact_content | raw }}
        </p>
        {% endif %}
        <ul class=\"list-inline list-social\">
            {% if this.theme.contact_twitter %}
            <li class=\"list-inline-item social-twitter\">
                <a href=\"{{ this.theme.contact_twitter }}\">
                    <i class=\"fa fa-twitter\"></i>
                </a>
            </li>
            {% endif %}
            {% if this.theme.contact_facebook %}
            <li class=\"list-inline-item social-facebook\">
                <a href=\"{{ this.theme.contact_facebook }}\">
                    <i class=\"fa fa-facebook\"></i>
                </a>
            </li>
            {% endif %}
            {% if this.theme.contact_google %}
            <li class=\"list-inline-item social-google-plus\">
                <a href=\"{{ this.theme.contact_google }}\">
                    <i class=\"fa fa-google-plus\"></i>
                </a>
            </li>
            {% endif %}
            {% if this.theme.contact_linkedin %}
            <li class=\"list-inline-item social-linkedin\">
                <a href=\"{{ this.theme.contact_linkedin }}\">
                    <i class=\"fa fa-linkedin\"></i>
                </a>
            </li>
            {% endif %}
        </ul>
    </div>
</section>", "/var/www/html/themes/vojtasvoboda-newage/partials/sections/contact.htm", "");
    }
}
