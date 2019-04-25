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

/* header_location.twig */
class __TwigTemplate_27eae4fcb22cea90a3cec7e78b2841f6e81b4de3095a647c9f75d8fe7e3444a6 extends \Twig\Template
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
        // line 2
        echo "<html>
<head>
    <title>- - -</title>
    <meta http-equiv=\"expires\" content=\"0\" />
    <meta http-equiv=\"Pragma\" content=\"no-cache\" />
    <meta http-equiv=\"Cache-Control\" content=\"no-cache\" />
    <meta http-equiv=\"Refresh\" content=\"0;url=";
        // line 8
        echo twig_escape_filter($this->env, ($context["uri"] ?? null), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\">
        //<![CDATA[
        setTimeout(function() { window.location = decodeURI('";
        // line 11
        echo PhpMyAdmin\Sanitize::escapeJsString(($context["uri"] ?? null));
        echo "'); }, 2000);
        //]]>
    </script>
</head>
<body>
<script type=\"text/javascript\">
    //<![CDATA[
    document.write('<p><a href=\"";
        // line 18
        echo PhpMyAdmin\Sanitize::escapeJsString(twig_escape_filter($this->env, ($context["uri"] ?? null)));
        echo "\">";
        echo _gettext("Go");
        echo "</a></p>');
    //]]>
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "header_location.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  44 => 11,  38 => 8,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "header_location.twig", "/home/files/phpmyadmin/release/phpMyAdmin-4.8+snapshot/templates/header_location.twig");
    }
}
