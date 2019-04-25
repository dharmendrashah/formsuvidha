<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* login/twofactor/key-https-warning.twig */
class __TwigTemplate_f67eea5eb2b11dbfaf98fa216b118662a3d0943957846becf6da7eba1ec981e2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ( !($context["is_https"] ?? null)) {
            // line 2
            echo "<div class=\"error\">
";
            // line 3
            echo _gettext("You are not using https to access phpMyAdmin, therefore FIDO U2F device will most likely refuse to authenticate you.");
            // line 4
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "login/twofactor/key-https-warning.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "login/twofactor/key-https-warning.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.8+snapshot/templates/login/twofactor/key-https-warning.twig");
    }
}
