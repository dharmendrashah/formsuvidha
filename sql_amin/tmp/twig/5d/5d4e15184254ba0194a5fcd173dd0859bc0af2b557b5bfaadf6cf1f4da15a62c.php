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

/* table/tracking/report_table.twig */
class __TwigTemplate_d2801b160f943ba9db5fc64b4e246e9ee293e35e577ba83f360faa6fb5a1a107 extends \Twig\Template
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
        echo "<table id=\"";
        echo twig_escape_filter($this->env, ($context["table_id"] ?? null), "html", null, true);
        echo "\" class=\"data\">
    <thead>
        <tr>
            <th>";
        // line 4
        echo _pgettext(        "Number", "#");
        echo "</th>
            <th>";
        // line 5
        echo _gettext("Date");
        echo "</th>
            <th>";
        // line 6
        echo _gettext("Username");
        echo "</th>
            <th>";
        // line 7
        echo twig_escape_filter($this->env, ($context["header_message"] ?? null), "html", null, true);
        echo "</th>
            <th>";
        // line 8
        echo _gettext("Action");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 13
            echo "            <tr class=\"noclick\">
                <td class=\"right\"><small>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "line_number", []), "html", null, true);
            echo "</small></td>
                <td><small>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "date", []), "html", null, true);
            echo "</small></td>
                <td><small>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "username", []), "html", null, true);
            echo "</small></td>
                <td>";
            // line 17
            echo $this->getAttribute($context["entry"], "formated_statement", []);
            echo "</td>
                <td class=\"nowrap\">
                    <a class=\"delete_entry_anchor ajax\" href=\"tbl_tracking.php\" data-post=\"";
            // line 20
            echo $this->getAttribute($context["entry"], "url_params", []);
            echo "\">
                        ";
            // line 21
            echo ($context["drop_image_or_text"] ?? null);
            echo "
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "table/tracking/report_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  88 => 21,  84 => 20,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  64 => 13,  60 => 12,  53 => 8,  49 => 7,  45 => 6,  41 => 5,  37 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/tracking/report_table.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.8+snapshot/templates/table/tracking/report_table.twig");
    }
}
