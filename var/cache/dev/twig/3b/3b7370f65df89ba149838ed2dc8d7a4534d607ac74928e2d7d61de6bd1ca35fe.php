<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fd6ce486008a45ae682fdbb097b35adc919213fda3c24cd13ffc17dc4b6032f7 extends Twig_Template
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
        $__internal_64079e20c5b880333889306374ea16528d7f5f6c93623fd9004f7c9b3ad35985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64079e20c5b880333889306374ea16528d7f5f6c93623fd9004f7c9b3ad35985->enter($__internal_64079e20c5b880333889306374ea16528d7f5f6c93623fd9004f7c9b3ad35985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f8becc7f01b53efef3c6418437778b301cac4a6482fceae14cc67e6b0f536773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8becc7f01b53efef3c6418437778b301cac4a6482fceae14cc67e6b0f536773->enter($__internal_f8becc7f01b53efef3c6418437778b301cac4a6482fceae14cc67e6b0f536773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_64079e20c5b880333889306374ea16528d7f5f6c93623fd9004f7c9b3ad35985->leave($__internal_64079e20c5b880333889306374ea16528d7f5f6c93623fd9004f7c9b3ad35985_prof);

        
        $__internal_f8becc7f01b53efef3c6418437778b301cac4a6482fceae14cc67e6b0f536773->leave($__internal_f8becc7f01b53efef3c6418437778b301cac4a6482fceae14cc67e6b0f536773_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_23f9196ccafb8c4c75dcd78bfdfd2b6271caacbabc11eaed1d4af8b62907a7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f9196ccafb8c4c75dcd78bfdfd2b6271caacbabc11eaed1d4af8b62907a7c1->enter($__internal_23f9196ccafb8c4c75dcd78bfdfd2b6271caacbabc11eaed1d4af8b62907a7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25de50f8e4738f16b4eb4f9b2b3e8bdbea311b3e6f9c7dfb6132ae7515c31c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25de50f8e4738f16b4eb4f9b2b3e8bdbea311b3e6f9c7dfb6132ae7515c31c0e->enter($__internal_25de50f8e4738f16b4eb4f9b2b3e8bdbea311b3e6f9c7dfb6132ae7515c31c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_25de50f8e4738f16b4eb4f9b2b3e8bdbea311b3e6f9c7dfb6132ae7515c31c0e->leave($__internal_25de50f8e4738f16b4eb4f9b2b3e8bdbea311b3e6f9c7dfb6132ae7515c31c0e_prof);

        
        $__internal_23f9196ccafb8c4c75dcd78bfdfd2b6271caacbabc11eaed1d4af8b62907a7c1->leave($__internal_23f9196ccafb8c4c75dcd78bfdfd2b6271caacbabc11eaed1d4af8b62907a7c1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
