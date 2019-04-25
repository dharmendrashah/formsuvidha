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

/* table/tracking/activate_deactivate.twig */
class __TwigTemplate_be5f040ce002863ea9af4cf11d2ef0a2b3a8d3e714dc77273ff5c42c9ec97e81 extends \Twig\Template
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
        echo "<div>
    <form method=\"post\" action=\"tbl_tracking.php";
        // line 2
        echo ($context["url_query"] ?? null);
        echo "\">
        ";
        // line 3
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
        <fieldset>
            <legend>
                ";
        // line 6
        if ((($context["action"] ?? null) == "activate")) {
            // line 7
            echo "                    ";
            $context["legend"] = _gettext("Activate tracking for %s");
            // line 8
            echo "                    ";
            $context["value"] = "activate_now";
            // line 9
            echo "                    ";
            $context["button"] = _gettext("Activate now");
            // line 10
            echo "                ";
        } elseif ((($context["action"] ?? null) == "deactivate")) {
            // line 11
            echo "                    ";
            $context["legend"] = _gettext("Deactivate tracking for %s");
            // line 12
            echo "                    ";
            $context["value"] = "deactivate_now";
            // line 13
            echo "                    ";
            $context["button"] = _gettext("Deactivate now");
            // line 14
            echo "                ";
        } else {
            // line 15
            echo "                    ";
            $context["legend"] = "";
            // line 16
            echo "                    ";
            $context["value"] = "";
            // line 17
            echo "                    ";
            $context["button"] = "";
            // line 18
            echo "                ";
        }
        // line 19
        echo "
                ";
        // line 20
        echo twig_escape_filter($this->env, sprintf(($context["legend"] ?? null), ((($context["db"] ?? null) . ".") . ($context["table"] ?? null))), "html", null, true);
        echo "
            </legend>
            <input type=\"hidden\" name=\"version\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["last_version"] ?? null), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"toggle_activation\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" />
            <input type=\"submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["button"] ?? null), "html", null, true);
        echo "\" />
        </fieldset>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "table/tracking/activate_deactivate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  93 => 23,  89 => 22,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  63 => 13,  60 => 12,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  45 => 7,  43 => 6,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/tracking/activate_deactivate.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.8+snapshot/templates/table/tracking/activate_deactivate.twig");
    }
}
