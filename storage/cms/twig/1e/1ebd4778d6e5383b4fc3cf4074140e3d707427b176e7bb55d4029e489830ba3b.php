<?php

/* /var/www/html/themes/vojtasvoboda-newage/partials/modules/footer.htm */
class __TwigTemplate_2e112fea101f1bd3cf4ea6f9c054f9cda7af8f88b428a938cbd0ac4081664b00 extends Twig_Template
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
        echo "<footer>
    <div class=\"container\">
        <p>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "footer", []), "html", null, true);
        echo "</p>
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", []), "footer_menu", [])) {
            // line 5
            echo "        <ul class=\"list-inline\">
            <li class=\"list-inline-item\">
                <a href=\"#\">Privacy</a>
            </li>
            <li class=\"list-inline-item\">
                <a href=\"#\">Terms</a>
            </li>
            <li class=\"list-inline-item\">
                <a href=\"#\">FAQ</a>
            </li>
        </ul>
        ";
        }
        // line 17
        echo "    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/vojtasvoboda-newage/partials/modules/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 17,  33 => 5,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
    <div class=\"container\">
        <p>{{ this.theme.footer }}</p>
        {% if this.theme.footer_menu %}
        <ul class=\"list-inline\">
            <li class=\"list-inline-item\">
                <a href=\"#\">Privacy</a>
            </li>
            <li class=\"list-inline-item\">
                <a href=\"#\">Terms</a>
            </li>
            <li class=\"list-inline-item\">
                <a href=\"#\">FAQ</a>
            </li>
        </ul>
        {% endif %}
    </div>
</footer>", "/var/www/html/themes/vojtasvoboda-newage/partials/modules/footer.htm", "");
    }
}
