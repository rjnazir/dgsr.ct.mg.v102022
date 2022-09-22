<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_f1c83555249c4dbdddb7af832c836fb81af8871927f251753a1318a79197cdb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_9e39350653727d99103369b4b0632dc0d58af2e1b9e9d9e610da3b17f2c8ffdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e39350653727d99103369b4b0632dc0d58af2e1b9e9d9e610da3b17f2c8ffdc->enter($__internal_9e39350653727d99103369b4b0632dc0d58af2e1b9e9d9e610da3b17f2c8ffdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_c06e5462c5a26e6254c245d762da7ff49b20a413414f9687e450eae232306f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06e5462c5a26e6254c245d762da7ff49b20a413414f9687e450eae232306f4f->enter($__internal_c06e5462c5a26e6254c245d762da7ff49b20a413414f9687e450eae232306f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e39350653727d99103369b4b0632dc0d58af2e1b9e9d9e610da3b17f2c8ffdc->leave($__internal_9e39350653727d99103369b4b0632dc0d58af2e1b9e9d9e610da3b17f2c8ffdc_prof);

        
        $__internal_c06e5462c5a26e6254c245d762da7ff49b20a413414f9687e450eae232306f4f->leave($__internal_c06e5462c5a26e6254c245d762da7ff49b20a413414f9687e450eae232306f4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_193aa132c2324a9db418b93fdf0f408865f9a1aab64f6c346859b2f98dea3526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193aa132c2324a9db418b93fdf0f408865f9a1aab64f6c346859b2f98dea3526->enter($__internal_193aa132c2324a9db418b93fdf0f408865f9a1aab64f6c346859b2f98dea3526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bbd7a4293ace5d04ca219b984b703502b77b3930af0ff66a30206732d3a557e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd7a4293ace5d04ca219b984b703502b77b3930af0ff66a30206732d3a557e6->enter($__internal_bbd7a4293ace5d04ca219b984b703502b77b3930af0ff66a30206732d3a557e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_bbd7a4293ace5d04ca219b984b703502b77b3930af0ff66a30206732d3a557e6->leave($__internal_bbd7a4293ace5d04ca219b984b703502b77b3930af0ff66a30206732d3a557e6_prof);

        
        $__internal_193aa132c2324a9db418b93fdf0f408865f9a1aab64f6c346859b2f98dea3526->leave($__internal_193aa132c2324a9db418b93fdf0f408865f9a1aab64f6c346859b2f98dea3526_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
