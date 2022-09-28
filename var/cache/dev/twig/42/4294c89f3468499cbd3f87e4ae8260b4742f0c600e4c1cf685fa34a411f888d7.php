<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_da422ac8bd43b8351e66174e77bb7e65850e349ae08a71f7607ad298351cabd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_9738c48db85fcbdcbd50b5ef5bd32f15dd754cc0fb1f5904629ac9198af36c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9738c48db85fcbdcbd50b5ef5bd32f15dd754cc0fb1f5904629ac9198af36c76->enter($__internal_9738c48db85fcbdcbd50b5ef5bd32f15dd754cc0fb1f5904629ac9198af36c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_c014ac19af2c8752e89d194b5036dcb97a38bd03d2c0a18c6192c9c8c66b98a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c014ac19af2c8752e89d194b5036dcb97a38bd03d2c0a18c6192c9c8c66b98a8->enter($__internal_c014ac19af2c8752e89d194b5036dcb97a38bd03d2c0a18c6192c9c8c66b98a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9738c48db85fcbdcbd50b5ef5bd32f15dd754cc0fb1f5904629ac9198af36c76->leave($__internal_9738c48db85fcbdcbd50b5ef5bd32f15dd754cc0fb1f5904629ac9198af36c76_prof);

        
        $__internal_c014ac19af2c8752e89d194b5036dcb97a38bd03d2c0a18c6192c9c8c66b98a8->leave($__internal_c014ac19af2c8752e89d194b5036dcb97a38bd03d2c0a18c6192c9c8c66b98a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4bf731120b257898d0703a756130c9fc6b4fe098b31e3c4bf59ec203772007ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf731120b257898d0703a756130c9fc6b4fe098b31e3c4bf59ec203772007ba->enter($__internal_4bf731120b257898d0703a756130c9fc6b4fe098b31e3c4bf59ec203772007ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d540e0fb00ee35ae0ad8f6dc480fbb0d35afca0e534f3a03d298c78f8413ef76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d540e0fb00ee35ae0ad8f6dc480fbb0d35afca0e534f3a03d298c78f8413ef76->enter($__internal_d540e0fb00ee35ae0ad8f6dc480fbb0d35afca0e534f3a03d298c78f8413ef76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_d540e0fb00ee35ae0ad8f6dc480fbb0d35afca0e534f3a03d298c78f8413ef76->leave($__internal_d540e0fb00ee35ae0ad8f6dc480fbb0d35afca0e534f3a03d298c78f8413ef76_prof);

        
        $__internal_4bf731120b257898d0703a756130c9fc6b4fe098b31e3c4bf59ec203772007ba->leave($__internal_4bf731120b257898d0703a756130c9fc6b4fe098b31e3c4bf59ec203772007ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
