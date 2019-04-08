<?php

/* /var/www/html/themes/vojtasvoboda-newage/partials/modules/nav.htm */
class __TwigTemplate_a86606e9321d46d9b807f9d410f9cc95a16a1d34b6bb5167530ac5fcecd1191e extends Twig_Template
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
        echo "<nav
    id=\"mainNav\"
    class=\"navbar navbar-expand-lg navbar-light fixed-top\"
>
    <div class=\"container\">
        <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "site_title", []), "html", null, true);
        echo "</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fa fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/nav-items.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/vojtasvoboda-newage/partials/modules/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  40 => 13,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav
    id=\"mainNav\"
    class=\"navbar navbar-expand-lg navbar-light fixed-top\"
>
    <div class=\"container\">
        <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">{{ this.theme.site_title }}</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fa fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                {% partial 'modules/nav-items.htm' %}
            </ul>
        </div>
    </div>
</nav>", "/var/www/html/themes/vojtasvoboda-newage/partials/modules/nav.htm", "");
    }
}
