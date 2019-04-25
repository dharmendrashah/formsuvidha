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

/* table/tracking/structure_snapshot_indexes.twig */
class __TwigTemplate_ba76793943430240efbb3a8a6a32afcf8c65adcf33b6f69a6e7e80cd90b4967c extends \Twig\Template
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
        echo _gettext("Indexes");
        echo "</h3>
<table id=\"tablestructure_indexes\" class=\"data\">
    <thead>
        <tr>
            <th>";
        // line 5
        echo _gettext("Keyname");
        echo "</th>
            <th>";
        // line 6
        echo _gettext("Type");
        echo "</th>
            <th>";
        // line 7
        echo _gettext("Unique");
        echo "</th>
            <th>";
        // line 8
        echo _gettext("Packed");
        echo "</th>
            <th>";
        // line 9
        echo _gettext("Column");
        echo "</th>
            <th>";
        // line 10
        echo _gettext("Cardinality");
        echo "</th>
            <th>";
        // line 11
        echo _gettext("Collation");
        echo "</th>
            <th>";
        // line 12
        echo _gettext("Null");
        echo "</th>
            <th>";
        // line 13
        echo _gettext("Comment");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["indexes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 18
            echo "            <tr class=\"noclick\">
                <td>
                    <strong>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["index"], "Key_name", [], "array"), "html", null, true);
            echo "</strong>
                </td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["index"], "Index_type", [], "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["index"], "Non_unique", [], "array") == 0)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["index"], "Packed", [], "array") != "")) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["index"], "Column_name", [], "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["index"], "Cardinality", [], "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["index"], "Collation", [], "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["index"], "Null", [], "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["index"], "Comment", [], "array"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "table/tracking/structure_snapshot_indexes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 32,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  85 => 20,  81 => 18,  77 => 17,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/tracking/structure_snapshot_indexes.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.8+snapshot/templates/table/tracking/structure_snapshot_indexes.twig");
    }
}
