<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_40483b1defef48f49453fa20462d17cb9f10c49a15d9dc28ead77f603cc78419 extends Twig_Template
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
        $__internal_d1dfc93c28543855cb599b7970c8aad0984ea7f2f2141cc58c958cf593976bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1dfc93c28543855cb599b7970c8aad0984ea7f2f2141cc58c958cf593976bb1->enter($__internal_d1dfc93c28543855cb599b7970c8aad0984ea7f2f2141cc58c958cf593976bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_cba9bfe7efbcfb6d4e77425428240c7288e1f32e65ba1cc2ed4786d5a29244c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba9bfe7efbcfb6d4e77425428240c7288e1f32e65ba1cc2ed4786d5a29244c1->enter($__internal_cba9bfe7efbcfb6d4e77425428240c7288e1f32e65ba1cc2ed4786d5a29244c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d1dfc93c28543855cb599b7970c8aad0984ea7f2f2141cc58c958cf593976bb1->leave($__internal_d1dfc93c28543855cb599b7970c8aad0984ea7f2f2141cc58c958cf593976bb1_prof);

        
        $__internal_cba9bfe7efbcfb6d4e77425428240c7288e1f32e65ba1cc2ed4786d5a29244c1->leave($__internal_cba9bfe7efbcfb6d4e77425428240c7288e1f32e65ba1cc2ed4786d5a29244c1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
