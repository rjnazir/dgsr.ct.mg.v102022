<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_3e2e3061da5cf62694dade8fef535f75a40c6fea6ce6f15af2c0be005eabcf6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_82b8a35e48be48bb2367b592b7e0d5372e09d04961e9449c3b9b9179b9ae0afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b8a35e48be48bb2367b592b7e0d5372e09d04961e9449c3b9b9179b9ae0afc->enter($__internal_82b8a35e48be48bb2367b592b7e0d5372e09d04961e9449c3b9b9179b9ae0afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_d1006d8703cbe7077f0695313c5187f0354e7bfe1bda91953117d4544dfafb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1006d8703cbe7077f0695313c5187f0354e7bfe1bda91953117d4544dfafb54->enter($__internal_d1006d8703cbe7077f0695313c5187f0354e7bfe1bda91953117d4544dfafb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82b8a35e48be48bb2367b592b7e0d5372e09d04961e9449c3b9b9179b9ae0afc->leave($__internal_82b8a35e48be48bb2367b592b7e0d5372e09d04961e9449c3b9b9179b9ae0afc_prof);

        
        $__internal_d1006d8703cbe7077f0695313c5187f0354e7bfe1bda91953117d4544dfafb54->leave($__internal_d1006d8703cbe7077f0695313c5187f0354e7bfe1bda91953117d4544dfafb54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef1f41638876391967bef1043c0929e1cf3cdc1876bdb67f2a9bdfda37505e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1f41638876391967bef1043c0929e1cf3cdc1876bdb67f2a9bdfda37505e8a->enter($__internal_ef1f41638876391967bef1043c0929e1cf3cdc1876bdb67f2a9bdfda37505e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8da1e24384663a6b62d3e2dadd83bbf3ff700950f067249c64ced3aef792aa7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da1e24384663a6b62d3e2dadd83bbf3ff700950f067249c64ced3aef792aa7d->enter($__internal_8da1e24384663a6b62d3e2dadd83bbf3ff700950f067249c64ced3aef792aa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8da1e24384663a6b62d3e2dadd83bbf3ff700950f067249c64ced3aef792aa7d->leave($__internal_8da1e24384663a6b62d3e2dadd83bbf3ff700950f067249c64ced3aef792aa7d_prof);

        
        $__internal_ef1f41638876391967bef1043c0929e1cf3cdc1876bdb67f2a9bdfda37505e8a->leave($__internal_ef1f41638876391967bef1043c0929e1cf3cdc1876bdb67f2a9bdfda37505e8a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
