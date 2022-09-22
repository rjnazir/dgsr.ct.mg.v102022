<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_99080c9fe8b09cf461f217b1e46961aaaf4ad26af2e8efd1f8ba16a1bff9244f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d76dc4237935d049acbe6aacfe1812c4fe244434a75ecba9bc05cda4efb786d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76dc4237935d049acbe6aacfe1812c4fe244434a75ecba9bc05cda4efb786d5->enter($__internal_d76dc4237935d049acbe6aacfe1812c4fe244434a75ecba9bc05cda4efb786d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_9909de2e0ba49a5a2d3d48e827bbc75be0d1638b20d75ad281528568e78c6a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9909de2e0ba49a5a2d3d48e827bbc75be0d1638b20d75ad281528568e78c6a4d->enter($__internal_9909de2e0ba49a5a2d3d48e827bbc75be0d1638b20d75ad281528568e78c6a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d76dc4237935d049acbe6aacfe1812c4fe244434a75ecba9bc05cda4efb786d5->leave($__internal_d76dc4237935d049acbe6aacfe1812c4fe244434a75ecba9bc05cda4efb786d5_prof);

        
        $__internal_9909de2e0ba49a5a2d3d48e827bbc75be0d1638b20d75ad281528568e78c6a4d->leave($__internal_9909de2e0ba49a5a2d3d48e827bbc75be0d1638b20d75ad281528568e78c6a4d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_594499a3ffaf724598698c607f628bbab942d84696c0b0bf5b01ee31f874ec3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594499a3ffaf724598698c607f628bbab942d84696c0b0bf5b01ee31f874ec3c->enter($__internal_594499a3ffaf724598698c607f628bbab942d84696c0b0bf5b01ee31f874ec3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_abe3090e5f0af89af5357191e93c671af4ec3920a9730a5d93bf4d44e032c559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe3090e5f0af89af5357191e93c671af4ec3920a9730a5d93bf4d44e032c559->enter($__internal_abe3090e5f0af89af5357191e93c671af4ec3920a9730a5d93bf4d44e032c559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_abe3090e5f0af89af5357191e93c671af4ec3920a9730a5d93bf4d44e032c559->leave($__internal_abe3090e5f0af89af5357191e93c671af4ec3920a9730a5d93bf4d44e032c559_prof);

        
        $__internal_594499a3ffaf724598698c607f628bbab942d84696c0b0bf5b01ee31f874ec3c->leave($__internal_594499a3ffaf724598698c607f628bbab942d84696c0b0bf5b01ee31f874ec3c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
