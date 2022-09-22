<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_08f4fc248d595150dcbfed0f86db9cb03c11a6b612364aa61fdd3f625e36eca7 extends Twig_Template
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
        $__internal_2a100944dd016ccc07254d9af8e09ad5b55f1f8cefd87c10b6109f821a99878c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a100944dd016ccc07254d9af8e09ad5b55f1f8cefd87c10b6109f821a99878c->enter($__internal_2a100944dd016ccc07254d9af8e09ad5b55f1f8cefd87c10b6109f821a99878c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_ff7389ba3daceaa0398030d325477fa0fd2b73ee2bb6ee604d80b80b0be98413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7389ba3daceaa0398030d325477fa0fd2b73ee2bb6ee604d80b80b0be98413->enter($__internal_ff7389ba3daceaa0398030d325477fa0fd2b73ee2bb6ee604d80b80b0be98413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2a100944dd016ccc07254d9af8e09ad5b55f1f8cefd87c10b6109f821a99878c->leave($__internal_2a100944dd016ccc07254d9af8e09ad5b55f1f8cefd87c10b6109f821a99878c_prof);

        
        $__internal_ff7389ba3daceaa0398030d325477fa0fd2b73ee2bb6ee604d80b80b0be98413->leave($__internal_ff7389ba3daceaa0398030d325477fa0fd2b73ee2bb6ee604d80b80b0be98413_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
