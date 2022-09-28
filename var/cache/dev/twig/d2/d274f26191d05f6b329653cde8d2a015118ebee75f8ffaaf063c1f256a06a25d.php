<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_945bef702f1146d404205406a56c8531bcd488fd5a01101c539886571efea37c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b0dae726f424f75a4e0c222a233893a9f3947d4f7f02254c785560154bf64f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0dae726f424f75a4e0c222a233893a9f3947d4f7f02254c785560154bf64f3->enter($__internal_9b0dae726f424f75a4e0c222a233893a9f3947d4f7f02254c785560154bf64f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_b4b58d6c4d020587c927034f2d9f4cfc3377b139389857e0285bb73e38e06f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b58d6c4d020587c927034f2d9f4cfc3377b139389857e0285bb73e38e06f71->enter($__internal_b4b58d6c4d020587c927034f2d9f4cfc3377b139389857e0285bb73e38e06f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9b0dae726f424f75a4e0c222a233893a9f3947d4f7f02254c785560154bf64f3->leave($__internal_9b0dae726f424f75a4e0c222a233893a9f3947d4f7f02254c785560154bf64f3_prof);

        
        $__internal_b4b58d6c4d020587c927034f2d9f4cfc3377b139389857e0285bb73e38e06f71->leave($__internal_b4b58d6c4d020587c927034f2d9f4cfc3377b139389857e0285bb73e38e06f71_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c59bd81b2a38dac064d03f45d44be0c94ec56a64fd1fa92b4c0942208b550049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c59bd81b2a38dac064d03f45d44be0c94ec56a64fd1fa92b4c0942208b550049->enter($__internal_c59bd81b2a38dac064d03f45d44be0c94ec56a64fd1fa92b4c0942208b550049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_699003b5ce03a538f5c7a85ab19ee337a6c62b3952ad197a582cb94f85966b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699003b5ce03a538f5c7a85ab19ee337a6c62b3952ad197a582cb94f85966b5f->enter($__internal_699003b5ce03a538f5c7a85ab19ee337a6c62b3952ad197a582cb94f85966b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_699003b5ce03a538f5c7a85ab19ee337a6c62b3952ad197a582cb94f85966b5f->leave($__internal_699003b5ce03a538f5c7a85ab19ee337a6c62b3952ad197a582cb94f85966b5f_prof);

        
        $__internal_c59bd81b2a38dac064d03f45d44be0c94ec56a64fd1fa92b4c0942208b550049->leave($__internal_c59bd81b2a38dac064d03f45d44be0c94ec56a64fd1fa92b4c0942208b550049_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
