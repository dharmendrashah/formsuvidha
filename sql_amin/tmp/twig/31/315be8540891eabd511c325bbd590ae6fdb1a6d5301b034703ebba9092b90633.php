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

/* table/tracking/selectable_tables.twig */
class __TwigTemplate_8a31aff49cedb9e2ebf8b734372ec36893599e2b4eaf6d15e7199fa898b912c2 extends \Twig\Template
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
        echo "<form method=\"post\" action=\"tbl_tracking.php";
        echo ($context["url_query"] ?? null);
        echo "\">
    ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
    <select name=\"table\" class=\"autosubmit\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "table_name", []), "html", null, true);
            echo "\"";
            // line 6
            echo ((($this->getAttribute($context["entry"], "table_name", []) == ($context["selected_table"] ?? null))) ? (" selected") : (""));
            echo ">
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "db_name", []), "html", null, true);
            echo " . ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "table_name", []), "html", null, true);
            echo "
                ";
            // line 8
            if ($this->getAttribute($context["entry"], "is_tracked", [])) {
                // line 9
                echo "                    (";
                echo _gettext("active");
                echo ")
                ";
            } else {
                // line 11
                echo "                    (";
                echo _gettext("not active");
                echo ")
                ";
            }
            // line 13
            echo "            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </select>
    <input type=\"hidden\" name=\"show_versions_submit\" value=\"1\">
</form>
";
    }

    public function getTemplateName()
    {
        return "table/tracking/selectable_tables.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  72 => 13,  66 => 11,  60 => 9,  58 => 8,  52 => 7,  48 => 6,  44 => 5,  40 => 4,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/tracking/selectable_tables.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.8+snapshot/templates/table/tracking/selectable_tables.twig");
    }
}
