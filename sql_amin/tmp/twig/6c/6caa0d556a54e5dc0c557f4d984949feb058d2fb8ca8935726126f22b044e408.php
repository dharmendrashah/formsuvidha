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

/* privileges/initials_row.twig */
class __TwigTemplate_c13712a08e3019f50a837d0fee19bca3d74096103b91914da649b789aa1d65e0 extends \Twig\Template
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
        echo "<table id=\"initials_table\" cellspacing=\"5\">
    <tr>
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["array_initials"] ?? null));
        foreach ($context['_seq'] as $context["tmp_initial"] => $context["initial_was_found"]) {
            if ( !($context["tmp_initial"] === null)) {
                // line 4
                echo "            ";
                if ($context["initial_was_found"]) {
                    // line 5
                    echo "                <td>
                    <a class=\"ajax";
                    // line 7
                    echo ((((isset($context["initial"]) || array_key_exists("initial", $context)) && (($context["initial"] ?? null) === $context["tmp_initial"]))) ? (" active") : (""));
                    // line 8
                    echo "\" href=\"server_privileges.php";
                    // line 9
                    echo PhpMyAdmin\Url::getCommon(["initial" => $context["tmp_initial"]]);
                    echo "\">";
                    // line 10
                    echo $context["tmp_initial"];
                    // line 11
                    echo "</a>
                </td>
            ";
                } else {
                    // line 14
                    echo "                <td>";
                    echo $context["tmp_initial"];
                    echo "</td>
            ";
                }
                // line 16
                echo "        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tmp_initial'], $context['initial_was_found'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        <td>
            <a href=\"server_privileges.php";
        // line 19
        echo PhpMyAdmin\Url::getCommon(["showall" => 1]);
        echo "\" class=\"nowrap\">
                ";
        // line 20
        echo _gettext("Show all");
        // line 21
        echo "            </a>
        </td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "privileges/initials_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  79 => 20,  75 => 19,  72 => 17,  65 => 16,  59 => 14,  54 => 11,  52 => 10,  49 => 9,  47 => 8,  45 => 7,  42 => 5,  39 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/initials_row.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.8+snapshot/templates/privileges/initials_row.twig");
    }
}
