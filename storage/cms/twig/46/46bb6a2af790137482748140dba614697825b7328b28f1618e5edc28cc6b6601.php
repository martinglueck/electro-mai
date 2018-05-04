<?php

/* D:\MAMP\htdocs\electro-mai/themes/demo/partials/site/footer.htm */
class __TwigTemplate_22a731a0447109c2d9e4a3701ae3b5d40a8c468ff177b7ba79e6dac16e2f73ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy;    ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Umsetzung: Tilmann Zurmühlen, Martin Glück</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\MAMP\\htdocs\\electro-mai/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy;    {{ \"now\"|date(\"Y\") }} Umsetzung: Tilmann Zurmühlen, Martin Glück</p>
    </div>
</div>", "D:\\MAMP\\htdocs\\electro-mai/themes/demo/partials/site/footer.htm", "");
    }
}
