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
        $__internal_c2ea9ef91054821e7c2a5fbf40180a552fd2c3db3bb01ad5a690fdca56374986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ea9ef91054821e7c2a5fbf40180a552fd2c3db3bb01ad5a690fdca56374986->enter($__internal_c2ea9ef91054821e7c2a5fbf40180a552fd2c3db3bb01ad5a690fdca56374986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_8aba1094d62d15ae32afa037b292711b433da55d194c60cb4778565ed05942aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aba1094d62d15ae32afa037b292711b433da55d194c60cb4778565ed05942aa->enter($__internal_8aba1094d62d15ae32afa037b292711b433da55d194c60cb4778565ed05942aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c2ea9ef91054821e7c2a5fbf40180a552fd2c3db3bb01ad5a690fdca56374986->leave($__internal_c2ea9ef91054821e7c2a5fbf40180a552fd2c3db3bb01ad5a690fdca56374986_prof);

        
        $__internal_8aba1094d62d15ae32afa037b292711b433da55d194c60cb4778565ed05942aa->leave($__internal_8aba1094d62d15ae32afa037b292711b433da55d194c60cb4778565ed05942aa_prof);

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
