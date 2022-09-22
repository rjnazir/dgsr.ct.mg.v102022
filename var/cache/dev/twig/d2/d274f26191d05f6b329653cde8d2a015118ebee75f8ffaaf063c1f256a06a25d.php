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
        $__internal_c9ad304f38c8074498357a0f9cd23e845e07a28d6e8d15236d65307c251dc3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ad304f38c8074498357a0f9cd23e845e07a28d6e8d15236d65307c251dc3ba->enter($__internal_c9ad304f38c8074498357a0f9cd23e845e07a28d6e8d15236d65307c251dc3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9e7109c0617bf943e2acc779974e928f47e44470994bb96761cb488130cc6166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7109c0617bf943e2acc779974e928f47e44470994bb96761cb488130cc6166->enter($__internal_9e7109c0617bf943e2acc779974e928f47e44470994bb96761cb488130cc6166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c9ad304f38c8074498357a0f9cd23e845e07a28d6e8d15236d65307c251dc3ba->leave($__internal_c9ad304f38c8074498357a0f9cd23e845e07a28d6e8d15236d65307c251dc3ba_prof);

        
        $__internal_9e7109c0617bf943e2acc779974e928f47e44470994bb96761cb488130cc6166->leave($__internal_9e7109c0617bf943e2acc779974e928f47e44470994bb96761cb488130cc6166_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a521dc304f6c70cd7bd66b2000fd85441c6c6742dc66255df04ba5578339b292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a521dc304f6c70cd7bd66b2000fd85441c6c6742dc66255df04ba5578339b292->enter($__internal_a521dc304f6c70cd7bd66b2000fd85441c6c6742dc66255df04ba5578339b292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_917c918f5835b162dd5d4245566e43dbe653834e2dbe28de8fe2b9214d89095f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917c918f5835b162dd5d4245566e43dbe653834e2dbe28de8fe2b9214d89095f->enter($__internal_917c918f5835b162dd5d4245566e43dbe653834e2dbe28de8fe2b9214d89095f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_917c918f5835b162dd5d4245566e43dbe653834e2dbe28de8fe2b9214d89095f->leave($__internal_917c918f5835b162dd5d4245566e43dbe653834e2dbe28de8fe2b9214d89095f_prof);

        
        $__internal_a521dc304f6c70cd7bd66b2000fd85441c6c6742dc66255df04ba5578339b292->leave($__internal_a521dc304f6c70cd7bd66b2000fd85441c6c6742dc66255df04ba5578339b292_prof);

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
