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
        $__internal_f77c03dce145bfcb7bd24a2165bad3bb7b07751148bb373f667f7489b87a8275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77c03dce145bfcb7bd24a2165bad3bb7b07751148bb373f667f7489b87a8275->enter($__internal_f77c03dce145bfcb7bd24a2165bad3bb7b07751148bb373f667f7489b87a8275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_45dc390bd006ab91bb6127bcad2f26d564afc01faa53896c8c2bf819d7d8199b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dc390bd006ab91bb6127bcad2f26d564afc01faa53896c8c2bf819d7d8199b->enter($__internal_45dc390bd006ab91bb6127bcad2f26d564afc01faa53896c8c2bf819d7d8199b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f77c03dce145bfcb7bd24a2165bad3bb7b07751148bb373f667f7489b87a8275->leave($__internal_f77c03dce145bfcb7bd24a2165bad3bb7b07751148bb373f667f7489b87a8275_prof);

        
        $__internal_45dc390bd006ab91bb6127bcad2f26d564afc01faa53896c8c2bf819d7d8199b->leave($__internal_45dc390bd006ab91bb6127bcad2f26d564afc01faa53896c8c2bf819d7d8199b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe4b8f6b43256362168a4f331793cc4df2d32780fc87228c27bb02e5ee90edf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4b8f6b43256362168a4f331793cc4df2d32780fc87228c27bb02e5ee90edf9->enter($__internal_fe4b8f6b43256362168a4f331793cc4df2d32780fc87228c27bb02e5ee90edf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2aba21e6ee58d409ca7be418c66a0574610c13819b453ba70ea55d0f9f538627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aba21e6ee58d409ca7be418c66a0574610c13819b453ba70ea55d0f9f538627->enter($__internal_2aba21e6ee58d409ca7be418c66a0574610c13819b453ba70ea55d0f9f538627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2aba21e6ee58d409ca7be418c66a0574610c13819b453ba70ea55d0f9f538627->leave($__internal_2aba21e6ee58d409ca7be418c66a0574610c13819b453ba70ea55d0f9f538627_prof);

        
        $__internal_fe4b8f6b43256362168a4f331793cc4df2d32780fc87228c27bb02e5ee90edf9->leave($__internal_fe4b8f6b43256362168a4f331793cc4df2d32780fc87228c27bb02e5ee90edf9_prof);

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
