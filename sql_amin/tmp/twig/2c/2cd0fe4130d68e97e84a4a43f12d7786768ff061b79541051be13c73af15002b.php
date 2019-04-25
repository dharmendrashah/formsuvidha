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

/* login/twofactor/key.twig */
class __TwigTemplate_1de265343d36f7658300d5da3aa5b3a33ee52176079a6f37b64eb88104cbf2db extends \Twig\Template
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
        $this->loadTemplate("login/twofactor/key-https-warning.twig", "login/twofactor/key.twig", 1)->display($context);
        // line 2
        echo "<p>
";
        // line 3
        echo _gettext("Please connect your FIDO U2F device into your computer's USB port. Then confirm login on the device.");
        // line 4
        echo "</p>
<input id=\"u2f_authentication_response\" name=\"u2f_authentication_response\" value=\"\" type=\"hidden\" data-request=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["request"] ?? null), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "login/twofactor/key.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "login/twofactor/key.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.8+snapshot/templates/login/twofactor/key.twig");
    }
}
