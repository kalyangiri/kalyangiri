<?php

/* /var/www/html/themes/vojtasvoboda-newage/pages/home.htm */
class __TwigTemplate_0264fc4639bb1d25bc50b33f5d9a88ce7ec5d54e6768d6a95a87bdb9dd1ba01d extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "intro_enabled", [])) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/intro"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 4
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "download_enabled", [])) {
            // line 6
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/download"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 8
        echo "
";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "features_enabled", [])) {
            // line 10
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/features"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 12
        echo "
";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "cta_enabled", [])) {
            // line 14
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/cta"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 16
        echo "
";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "contact_enabled", [])) {
            // line 18
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sections/contact"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/vojtasvoboda-newage/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  67 => 17,  64 => 16,  58 => 14,  56 => 13,  53 => 12,  47 => 10,  45 => 9,  42 => 8,  36 => 6,  34 => 5,  31 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if this.theme.intro_enabled %}
    {% partial 'sections/intro' %}
{% endif %}

{% if this.theme.download_enabled %}
    {% partial 'sections/download' %}
{% endif %}

{% if this.theme.features_enabled %}
    {% partial 'sections/features' %}
{% endif %}

{% if this.theme.cta_enabled %}
    {% partial 'sections/cta' %}
{% endif %}

{% if this.theme.contact_enabled %}
    {% partial 'sections/contact' %}
{% endif %}", "/var/www/html/themes/vojtasvoboda-newage/pages/home.htm", "");
    }
}
