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

/* table/tracking/structure_snapshot_columns.twig */
class __TwigTemplate_e879b17343a350f9cc8900b01d87e3eed4a0ed703c710babe1d065f258cbcad7 extends \Twig\Template
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
        echo "<h3>";
        echo _gettext("Structure");
        echo "</h3>
<table id=\"tablestructure\" class=\"data\">
    <thead>
        <tr>
            <th>";
        // line 5
        echo _pgettext(        "Number", "#");
        echo "</th>
            <th>";
        // line 6
        echo _gettext("Column");
        echo "</th>
            <th>";
        // line 7
        echo _gettext("Type");
        echo "</th>
            <th>";
        // line 8
        echo _gettext("Collation");
        echo "</th>
            <th>";
        // line 9
        echo _gettext("Null");
        echo "</th>
            <th>";
        // line 10
        echo _gettext("Default");
        echo "</th>
            <th>";
        // line 11
        echo _gettext("Extra");
        echo "</th>
            <th>";
        // line 12
        echo _gettext("Comment");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 16
        $context["index"] = 1;
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 18
            echo "            <tr class=\"noclick\">
                <td>";
            // line 19
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "</td>
                ";
            // line 20
            $context["index"] = (($context["index"] ?? null) + 1);
            // line 21
            echo "                <td>
                    <strong>
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "Field", [], "array"), "html", null, true);
            echo "
                        ";
            // line 24
            if (($this->getAttribute($context["field"], "Key", [], "array") == "PRI")) {
                // line 25
                echo "                            ";
                echo PhpMyAdmin\Util::getImage("b_primary", _gettext("Primary"));
                echo "
                        ";
            } elseif ( !twig_test_empty($this->getAttribute(            // line 26
$context["field"], "Key", [], "array"))) {
                // line 27
                echo "                            ";
                echo PhpMyAdmin\Util::getImage("bd_primary", _gettext("Index"));
                echo "
                        ";
            }
            // line 29
            echo "                    </strong>
                </td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "Type", [], "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "Collation", [], "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["field"], "Null", [], "array") == "YES")) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 35
            if ($this->getAttribute($context["field"], "Default", [], "array", true, true)) {
                // line 36
                echo "                        ";
                $context["extracted_columnspec"] = PhpMyAdmin\Util::extractColumnSpec($this->getAttribute($context["field"], "Type", [], "array"));
                // line 37
                echo "                        ";
                if (($this->getAttribute(($context["extracted_columnspec"] ?? null), "type", [], "array") == "bit")) {
                    // line 38
                    echo "                            ";
                    // line 39
                    echo "                            ";
                    echo twig_escape_filter($this->env, PhpMyAdmin\Util::convertBitDefaultValue($this->getAttribute($context["field"], "Default", [], "array")), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 41
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "Default", [], "array"), "html", null, true);
                    echo "
                        ";
                }
                // line 43
                echo "                    ";
            } else {
                // line 44
                echo "                        ";
                if (($this->getAttribute($context["field"], "Null", [], "array") == "YES")) {
                    // line 45
                    echo "                            <em>NULL</em>
                        ";
                } else {
                    // line 47
                    echo "                            <em>";
                    echo _pgettext(                    "None for default", "None");
                    echo "</em>
                        ";
                }
                // line 49
                echo "                    ";
            }
            // line 50
            echo "                </td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "Extra", [], "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "Comment", [], "array"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "table/tracking/structure_snapshot_columns.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 55,  177 => 52,  173 => 51,  170 => 50,  167 => 49,  161 => 47,  157 => 45,  154 => 44,  151 => 43,  145 => 41,  139 => 39,  137 => 38,  134 => 37,  131 => 36,  129 => 35,  124 => 33,  120 => 32,  116 => 31,  112 => 29,  106 => 27,  104 => 26,  99 => 25,  97 => 24,  93 => 23,  89 => 21,  87 => 20,  83 => 19,  80 => 18,  75 => 17,  73 => 16,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/tracking/structure_snapshot_columns.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.8+snapshot/templates/table/tracking/structure_snapshot_columns.twig");
    }
}
