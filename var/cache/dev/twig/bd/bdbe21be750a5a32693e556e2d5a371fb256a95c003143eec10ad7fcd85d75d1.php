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
        $__internal_709c0dcffa3f236f965634e6e80614b83cd8d0e255d713deda9b46c6b0ba36c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_709c0dcffa3f236f965634e6e80614b83cd8d0e255d713deda9b46c6b0ba36c8->enter($__internal_709c0dcffa3f236f965634e6e80614b83cd8d0e255d713deda9b46c6b0ba36c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_08f030c847c32b5f7f3876bf6e2000bd7546a19d9254b71ec30c2dece1c276f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f030c847c32b5f7f3876bf6e2000bd7546a19d9254b71ec30c2dece1c276f6->enter($__internal_08f030c847c32b5f7f3876bf6e2000bd7546a19d9254b71ec30c2dece1c276f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_709c0dcffa3f236f965634e6e80614b83cd8d0e255d713deda9b46c6b0ba36c8->leave($__internal_709c0dcffa3f236f965634e6e80614b83cd8d0e255d713deda9b46c6b0ba36c8_prof);

        
        $__internal_08f030c847c32b5f7f3876bf6e2000bd7546a19d9254b71ec30c2dece1c276f6->leave($__internal_08f030c847c32b5f7f3876bf6e2000bd7546a19d9254b71ec30c2dece1c276f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85da69769607727b30c662d52d9f96d0a4f0d1d1ff48924820dd0761f032a149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85da69769607727b30c662d52d9f96d0a4f0d1d1ff48924820dd0761f032a149->enter($__internal_85da69769607727b30c662d52d9f96d0a4f0d1d1ff48924820dd0761f032a149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b8fe42bfc3e4164642b5bf7762e6ced730775e8690570af50a56bfd8603188f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fe42bfc3e4164642b5bf7762e6ced730775e8690570af50a56bfd8603188f7->enter($__internal_b8fe42bfc3e4164642b5bf7762e6ced730775e8690570af50a56bfd8603188f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b8fe42bfc3e4164642b5bf7762e6ced730775e8690570af50a56bfd8603188f7->leave($__internal_b8fe42bfc3e4164642b5bf7762e6ced730775e8690570af50a56bfd8603188f7_prof);

        
        $__internal_85da69769607727b30c662d52d9f96d0a4f0d1d1ff48924820dd0761f032a149->leave($__internal_85da69769607727b30c662d52d9f96d0a4f0d1d1ff48924820dd0761f032a149_prof);

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
