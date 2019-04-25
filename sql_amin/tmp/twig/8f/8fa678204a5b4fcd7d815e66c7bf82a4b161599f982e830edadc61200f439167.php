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

/* prefs_autoload.twig */
class __TwigTemplate_0ff7ad42b6aabb223a5416baaf26aac6c4ef64a148897245bce99074ef708827 extends \Twig\Template
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
        echo "<div id=\"prefs_autoload\" class=\"notice print_ignore hide\">
    <form action=\"prefs_manage.php\" method=\"post\" class=\"disableAjax\">
        ";
        // line 3
        echo ($context["hidden_inputs"] ?? null);
        echo "
        <input type=\"hidden\" name=\"json\" value=\"\" />
        <input type=\"hidden\" name=\"submit_import\" value=\"1\" />
        <input type=\"hidden\" name=\"return_url\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["return_url"] ?? null), "html", null, true);
        echo "\" />
        ";
        // line 7
        echo _gettext("Your browser has phpMyAdmin configuration for this domain. Would you like to import it for current session?");
        // line 10
        echo "        <br />
        <a href=\"#yes\">";
        // line 11
        echo _gettext("Yes");
        echo "</a>
        / <a href=\"#no\">";
        // line 12
        echo _gettext("No");
        echo "</a>
        / <a href=\"#delete\">";
        // line 13
        echo _gettext("Delete settings");
        echo "</a>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "prefs_autoload.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  53 => 12,  49 => 11,  46 => 10,  44 => 7,  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "prefs_autoload.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.8+snapshot/templates/prefs_autoload.twig");
    }
}
