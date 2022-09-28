<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_c79866291fbcd820ed64978a499448e75602a8928c2221060e34544ad30b18dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_01409365b03bb8c19ea8f51c7c4e2d01c7f6994b5af1bf26e8ef07142d65a7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01409365b03bb8c19ea8f51c7c4e2d01c7f6994b5af1bf26e8ef07142d65a7ef->enter($__internal_01409365b03bb8c19ea8f51c7c4e2d01c7f6994b5af1bf26e8ef07142d65a7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_d22715a975301f8adbcd277413d33dad78447841f6d8f53f3ea35dde8e91fb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22715a975301f8adbcd277413d33dad78447841f6d8f53f3ea35dde8e91fb3f->enter($__internal_d22715a975301f8adbcd277413d33dad78447841f6d8f53f3ea35dde8e91fb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01409365b03bb8c19ea8f51c7c4e2d01c7f6994b5af1bf26e8ef07142d65a7ef->leave($__internal_01409365b03bb8c19ea8f51c7c4e2d01c7f6994b5af1bf26e8ef07142d65a7ef_prof);

        
        $__internal_d22715a975301f8adbcd277413d33dad78447841f6d8f53f3ea35dde8e91fb3f->leave($__internal_d22715a975301f8adbcd277413d33dad78447841f6d8f53f3ea35dde8e91fb3f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_726c650793645cebd18a33c5326a622ee899175001eaa3272a1294d05bffa288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726c650793645cebd18a33c5326a622ee899175001eaa3272a1294d05bffa288->enter($__internal_726c650793645cebd18a33c5326a622ee899175001eaa3272a1294d05bffa288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8884bad76640f4bd11eed7d615ed6f283d89834711342ac433a6c308a8030e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8884bad76640f4bd11eed7d615ed6f283d89834711342ac433a6c308a8030e9a->enter($__internal_8884bad76640f4bd11eed7d615ed6f283d89834711342ac433a6c308a8030e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_8884bad76640f4bd11eed7d615ed6f283d89834711342ac433a6c308a8030e9a->leave($__internal_8884bad76640f4bd11eed7d615ed6f283d89834711342ac433a6c308a8030e9a_prof);

        
        $__internal_726c650793645cebd18a33c5326a622ee899175001eaa3272a1294d05bffa288->leave($__internal_726c650793645cebd18a33c5326a622ee899175001eaa3272a1294d05bffa288_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
