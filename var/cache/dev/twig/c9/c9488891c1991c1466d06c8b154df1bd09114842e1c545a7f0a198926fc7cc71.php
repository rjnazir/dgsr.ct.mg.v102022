<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f8399bcfba6c21faab5f0f429a83a69d15af92eb4b20b8fa581940386fc3ce2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a6a4fc7af9aaa099d31db8af27afed60d8e686e7392da6d4b61d4a0a1a1f0f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a4fc7af9aaa099d31db8af27afed60d8e686e7392da6d4b61d4a0a1a1f0f62->enter($__internal_a6a4fc7af9aaa099d31db8af27afed60d8e686e7392da6d4b61d4a0a1a1f0f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_190ddbe7e49381b8d01f4969107336928ae3257acac84a88ca90b9e8e2aca0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190ddbe7e49381b8d01f4969107336928ae3257acac84a88ca90b9e8e2aca0fa->enter($__internal_190ddbe7e49381b8d01f4969107336928ae3257acac84a88ca90b9e8e2aca0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6a4fc7af9aaa099d31db8af27afed60d8e686e7392da6d4b61d4a0a1a1f0f62->leave($__internal_a6a4fc7af9aaa099d31db8af27afed60d8e686e7392da6d4b61d4a0a1a1f0f62_prof);

        
        $__internal_190ddbe7e49381b8d01f4969107336928ae3257acac84a88ca90b9e8e2aca0fa->leave($__internal_190ddbe7e49381b8d01f4969107336928ae3257acac84a88ca90b9e8e2aca0fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db5ab9038b048832452e29c29df7018b0ab5cfbe5a17b32ceb97df0c0161fef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5ab9038b048832452e29c29df7018b0ab5cfbe5a17b32ceb97df0c0161fef5->enter($__internal_db5ab9038b048832452e29c29df7018b0ab5cfbe5a17b32ceb97df0c0161fef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9275e9b7c6038a38f4c6746e93fb4ad4bc22ee56731c26fc7c0dff6f6fb9dc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9275e9b7c6038a38f4c6746e93fb4ad4bc22ee56731c26fc7c0dff6f6fb9dc0c->enter($__internal_9275e9b7c6038a38f4c6746e93fb4ad4bc22ee56731c26fc7c0dff6f6fb9dc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9275e9b7c6038a38f4c6746e93fb4ad4bc22ee56731c26fc7c0dff6f6fb9dc0c->leave($__internal_9275e9b7c6038a38f4c6746e93fb4ad4bc22ee56731c26fc7c0dff6f6fb9dc0c_prof);

        
        $__internal_db5ab9038b048832452e29c29df7018b0ab5cfbe5a17b32ceb97df0c0161fef5->leave($__internal_db5ab9038b048832452e29c29df7018b0ab5cfbe5a17b32ceb97df0c0161fef5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
