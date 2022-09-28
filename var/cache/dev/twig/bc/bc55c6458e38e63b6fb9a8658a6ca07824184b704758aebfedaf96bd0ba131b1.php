<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_1e0b307831883339e1ac4c55be78c381488341ff01392880139bf33837bfdf19 extends Twig_Template
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
        $__internal_4b64bc30e2a5522d9a586e735ee83ef0d19e49ad974c4ede1af88984b95b2535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b64bc30e2a5522d9a586e735ee83ef0d19e49ad974c4ede1af88984b95b2535->enter($__internal_4b64bc30e2a5522d9a586e735ee83ef0d19e49ad974c4ede1af88984b95b2535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_8b25f4d1b2cc258a0143e6f69db1fecb93d3b55a5eab68c723de372405a28248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b25f4d1b2cc258a0143e6f69db1fecb93d3b55a5eab68c723de372405a28248->enter($__internal_8b25f4d1b2cc258a0143e6f69db1fecb93d3b55a5eab68c723de372405a28248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_4b64bc30e2a5522d9a586e735ee83ef0d19e49ad974c4ede1af88984b95b2535->leave($__internal_4b64bc30e2a5522d9a586e735ee83ef0d19e49ad974c4ede1af88984b95b2535_prof);

        
        $__internal_8b25f4d1b2cc258a0143e6f69db1fecb93d3b55a5eab68c723de372405a28248->leave($__internal_8b25f4d1b2cc258a0143e6f69db1fecb93d3b55a5eab68c723de372405a28248_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
