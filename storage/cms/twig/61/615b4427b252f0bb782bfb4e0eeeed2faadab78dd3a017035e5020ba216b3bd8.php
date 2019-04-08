<?php

/* /var/www/html/themes/vojtasvoboda-newage/partials/features/items.htm */
class __TwigTemplate_602da7c0e1e793ff1cd35360579d70d1aff1955eb0f56ce28c28b3a06a9c0dd1 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "features_list", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 2
            echo "
    ";
            // line 3
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []) % 2) == 0)) {
                // line 4
                echo "    <div class=\"row\">
    ";
            }
            // line 6
            echo "
    <div class=\"col-lg-6\">
        <div class=\"feature-item\">
            <i class=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "icon", []), "html", null, true);
            echo " text-primary\"></i>
            <h3>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "name", []), "html", null, true);
            echo "</h3>
            <p class=\"text-muted\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "text", []), "html", null, true);
            echo "</p>
        </div>
    </div>

    ";
            // line 15
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []) % 2) == 1) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", []))) {
                // line 16
                echo "    </div><!-- !end row -->
    ";
            }
            // line 18
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/vojtasvoboda-newage/partials/features/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  71 => 16,  69 => 15,  62 => 11,  58 => 10,  54 => 9,  49 => 6,  45 => 4,  43 => 3,  40 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for feature in this.theme.features_list %}

    {% if loop.index0 % 2 == 0 %}
    <div class=\"row\">
    {% endif %}

    <div class=\"col-lg-6\">
        <div class=\"feature-item\">
            <i class=\"{{ feature.icon }} text-primary\"></i>
            <h3>{{ feature.name }}</h3>
            <p class=\"text-muted\">{{ feature.text }}</p>
        </div>
    </div>

    {% if (loop.index0 % 2 == 1) or loop.last %}
    </div><!-- !end row -->
    {% endif %}

{% endfor %}", "/var/www/html/themes/vojtasvoboda-newage/partials/features/items.htm", "");
    }
}
