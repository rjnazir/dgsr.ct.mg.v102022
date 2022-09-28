<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e6cb731cff9f1600ca592e3317121247580ebf5b69c46538a2745eb35977e0ec extends Twig_Template
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
        $__internal_b7908f4c7d719d81e60c5f36dea0b9bff6cf7bc6b9be15c5a8c38b5434ed06ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7908f4c7d719d81e60c5f36dea0b9bff6cf7bc6b9be15c5a8c38b5434ed06ea->enter($__internal_b7908f4c7d719d81e60c5f36dea0b9bff6cf7bc6b9be15c5a8c38b5434ed06ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_830bdc4f3ec9c88c2e237b260933a263bd0ad619612286754c97b79ef003c898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830bdc4f3ec9c88c2e237b260933a263bd0ad619612286754c97b79ef003c898->enter($__internal_830bdc4f3ec9c88c2e237b260933a263bd0ad619612286754c97b79ef003c898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b7908f4c7d719d81e60c5f36dea0b9bff6cf7bc6b9be15c5a8c38b5434ed06ea->leave($__internal_b7908f4c7d719d81e60c5f36dea0b9bff6cf7bc6b9be15c5a8c38b5434ed06ea_prof);

        
        $__internal_830bdc4f3ec9c88c2e237b260933a263bd0ad619612286754c97b79ef003c898->leave($__internal_830bdc4f3ec9c88c2e237b260933a263bd0ad619612286754c97b79ef003c898_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
