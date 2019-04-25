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

/* theme_preview.twig */
class __TwigTemplate_710b033db68ca81393108a740e2471317b2b59b4c0f7fe97b5b8af34ccbdec3f extends \Twig\Template
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
        echo "<div class=\"theme_preview\">
    <h2>
        ";
        // line 3
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo ")
    </h2>
    <p>
        <a class=\"take_theme\" name=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" href=\"index.php";
        echo PhpMyAdmin\Url::getCommon(($context["url_params"] ?? null));
        echo "\">
            ";
        // line 7
        if ( !twig_test_empty(($context["screen"] ?? null))) {
            // line 8
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, ($context["screen"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                <br>
            ";
        } else {
            // line 11
            echo "                ";
            echo _gettext("No preview available.");
            // line 12
            echo "            ";
        }
        // line 13
        echo "            [ <strong>";
        echo _gettext("Take it");
        echo "</strong> ]
        </a>
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "theme_preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  64 => 12,  61 => 11,  50 => 8,  48 => 7,  42 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "theme_preview.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.8+snapshot/templates/theme_preview.twig");
    }
}
