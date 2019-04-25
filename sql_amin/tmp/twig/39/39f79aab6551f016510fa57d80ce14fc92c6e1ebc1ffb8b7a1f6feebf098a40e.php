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

/* database/central_columns/table_navigation.twig */
class __TwigTemplate_008b4ce422446c8f9b0c8a0878776a46b714d36c72940068ae78f7aa3d6f8203 extends \Twig\Template
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
        echo "<table style=\"display:inline-block;max-width:49%\" class=\"navigation nospacing nopadding\">
    <tr>
        <td class=\"navigation_separator\"></td>
        ";
        // line 4
        if (((($context["pos"] ?? null) - ($context["max_rows"] ?? null)) >= 0)) {
            // line 5
            echo "            <td>
                <form action=\"db_central_columns.php\" method=\"post\">
                    ";
            // line 7
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            echo "
                    <input type=\"hidden\" name=\"pos\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, (($context["pos"] ?? null) - ($context["max_rows"] ?? null)), "html", null, true);
            echo "\" />
                    <input type=\"hidden\" name=\"total_rows\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, ($context["total_rows"] ?? null), "html", null, true);
            echo "\"/>
                    <input type=\"submit\" name=\"navig\" class=\"ajax\" value=\"&lt\" />
                </form>
            </td>
        ";
        }
        // line 14
        echo "        ";
        if ((($context["nb_total_page"] ?? null) > 1)) {
            // line 15
            echo "            <td>
                <form action=\"db_central_columns.php\" method=\"post\">
                    ";
            // line 17
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            echo "
                    <input type=\"hidden\" name=\"total_rows\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["total_rows"] ?? null), "html", null, true);
            echo "\"/>
                    ";
            // line 19
            echo ($context["page_selector"] ?? null);
            echo "
                </form>
            </td>
        ";
        }
        // line 23
        echo "        ";
        if (((($context["pos"] ?? null) + ($context["max_rows"] ?? null)) < ($context["total_rows"] ?? null))) {
            // line 24
            echo "            <td>
                <form action=\"db_central_columns.php\" method=\"post\">
                    ";
            // line 26
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            echo "
                    <input type=\"hidden\" name=\"pos\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, (($context["pos"] ?? null) + ($context["max_rows"] ?? null)), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"total_rows\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["total_rows"] ?? null), "html", null, true);
            echo "\"/>
                    <input type=\"submit\" name=\"navig\" class=\"ajax\" value=\"&gt\" />
                </form>
            </td>
        ";
        }
        // line 33
        echo "        </form>
        </td>
        <td class=\"navigation_separator\"></td>
        <td>
            <span>";
        // line 37
        echo _gettext("Filter rows");
        echo ":</span>
            <input type=\"text\" class=\"filter_rows\" placeholder=\"";
        // line 38
        echo _gettext("Search this table");
        echo "\">
        </td>
        <td class=\"navigation_separator\"></td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "database/central_columns/table_navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  108 => 37,  102 => 33,  94 => 28,  90 => 27,  86 => 26,  82 => 24,  79 => 23,  72 => 19,  68 => 18,  64 => 17,  60 => 15,  57 => 14,  49 => 9,  45 => 8,  41 => 7,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/central_columns/table_navigation.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.8+snapshot/templates/database/central_columns/table_navigation.twig");
    }
}
