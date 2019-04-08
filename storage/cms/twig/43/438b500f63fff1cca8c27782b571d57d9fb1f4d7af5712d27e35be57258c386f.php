<?php

/* /var/www/html/themes/vojtasvoboda-newage/layouts/default.htm */
class __TwigTemplate_f552d758dd725386f9d9b706b985482ffcf5d12f5180b52ef435f27764dc3323 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "site_locale", []), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "description", []), "html", null, true);
        echo "\">

    <title>";
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", [])) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
            echo " &#124; ";
        }
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "site_title", []), "html", null, true);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Muli\" rel=\"stylesheet\">

    <!-- Plugin CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/font-awesome/css/font-awesome.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/simple-line-icons/css/simple-line-icons.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/device-mockups/device-mockups.min.css");
        echo "\">

    <!-- Theme CSS -->
    <link href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/new-age.min.css");
        echo "\" rel=\"stylesheet\">
    ";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 26
        echo "
</head>

<body id=\"page-top\">

";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modules/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "
<script src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery/jquery.min.js");
        echo "\"></script>
<script src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
        echo "\"></script>
<script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-easing/jquery.easing.min.js");
        echo "\"></script>
<script src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/new-age.min.js");
        echo "\"></script>
";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 40
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/vojtasvoboda-newage/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  116 => 39,  112 => 38,  108 => 37,  104 => 36,  100 => 35,  97 => 34,  93 => 33,  91 => 32,  87 => 31,  80 => 26,  77 => 25,  73 => 24,  67 => 21,  63 => 20,  59 => 19,  48 => 11,  38 => 8,  33 => 6,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ this.theme.site_locale }}\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"{{ this.page.description }}\">

    <title>{% if this.page.title %}{{ this.page.title}} &#124; {% endif %}{{ this.theme.site_title }}</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"{{ 'assets/vendor/bootstrap/css/bootstrap.min.css' | theme }}\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Muli\" rel=\"stylesheet\">

    <!-- Plugin CSS -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendor/font-awesome/css/font-awesome.min.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendor/simple-line-icons/css/simple-line-icons.css' | theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/device-mockups/device-mockups.min.css' | theme }}\">

    <!-- Theme CSS -->
    <link href=\"{{ 'assets/css/new-age.min.css' | theme }}\" rel=\"stylesheet\">
    {% styles %}

</head>

<body id=\"page-top\">

{% partial 'modules/nav' %}
{% page %}
{% partial 'modules/footer' %}

<script src=\"{{ 'assets/vendor/jquery/jquery.min.js' | theme }}\"></script>
<script src=\"{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' | theme }}\"></script>
<script src=\"{{ 'assets/vendor/jquery-easing/jquery.easing.min.js' | theme }}\"></script>
<script src=\"{{ 'assets/js/new-age.min.js' | theme }}\"></script>
{% scripts %}

</body>
</html>", "/var/www/html/themes/vojtasvoboda-newage/layouts/default.htm", "");
    }
}
