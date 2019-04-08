<?php

/* /var/www/html/themes/vojtasvoboda-newage/partials/modules/nav-items.htm */
class __TwigTemplate_4f3636a896e12c75a17f269eca8ad62fc6f2301d1ac9f344120097331fb8bdd4 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "download_enabled", [])) {
            // line 2
            echo "<li class=\"nav-item\">
    <a class=\"nav-link js-scroll-trigger\" href=\"#download\">
        Download
    </a>
</li>
";
        }
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "features_enabled", [])) {
            // line 9
            echo "<li class=\"nav-item\">
    <a class=\"nav-link js-scroll-trigger\" href=\"#features\">
        Experiences
    </a>
</li>
";
        }
        // line 15
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "contact_enabled", [])) {
            // line 16
            echo "<li class=\"nav-item\">
    <a class=\"nav-link js-scroll-trigger\" href=\"#contact\">
        Contact
    </a>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/vojtasvoboda-newage/partials/modules/nav-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 16,  43 => 15,  35 => 9,  33 => 8,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if this.theme.download_enabled %}
<li class=\"nav-item\">
    <a class=\"nav-link js-scroll-trigger\" href=\"#download\">
        Download
    </a>
</li>
{% endif %}
{% if this.theme.features_enabled %}
<li class=\"nav-item\">
    <a class=\"nav-link js-scroll-trigger\" href=\"#features\">
        Experiences
    </a>
</li>
{% endif %}
{% if this.theme.contact_enabled %}
<li class=\"nav-item\">
    <a class=\"nav-link js-scroll-trigger\" href=\"#contact\">
        Contact
    </a>
</li>
{% endif %}", "/var/www/html/themes/vojtasvoboda-newage/partials/modules/nav-items.htm", "");
    }
}
