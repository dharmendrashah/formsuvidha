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

/* privileges/choose_user_group.twig */
class __TwigTemplate_c83b830fafdeee9ad052453e621658fe9d80946dcf54184cb49e3d07f334717a extends \Twig\Template
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
        echo "<form class=\"ajax\" id=\"changeUserGroupForm\" action=\"server_privileges.php\" method=\"post\">
    ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["params"] ?? null));
        echo "
    <fieldset id=\"fieldset_user_group_selection\">
        <legend>";
        // line 4
        echo _gettext("User group");
        echo "</legend>
        ";
        // line 5
        echo _gettext("User group");
        echo ":
        ";
        // line 6
        echo PhpMyAdmin\Util::getDropdown("userGroup", ($context["all_user_groups"] ?? null), ($context["user_group"] ?? null), "userGroup_select");
        echo "
        <input type=\"hidden\" name=\"changeUserGroup\" value=\"1\">
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "privileges/choose_user_group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  42 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/choose_user_group.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.8+snapshot/templates/privileges/choose_user_group.twig");
    }
}
