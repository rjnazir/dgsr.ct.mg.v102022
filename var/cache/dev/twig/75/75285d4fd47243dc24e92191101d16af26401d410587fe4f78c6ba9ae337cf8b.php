<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_58bc93132b21456a1f2eb71a6e9386829000db89bbbd9e23cc1d7b2b7a224498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_799e6f02d11fbfe75b9ab23724fda4f9fc48aa45f7c53299d16a73a011fb168f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799e6f02d11fbfe75b9ab23724fda4f9fc48aa45f7c53299d16a73a011fb168f->enter($__internal_799e6f02d11fbfe75b9ab23724fda4f9fc48aa45f7c53299d16a73a011fb168f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_e56bfbc8a80ee7e127d0f253a91adf2afa8aab8df6ce304e73583431a0bd4623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56bfbc8a80ee7e127d0f253a91adf2afa8aab8df6ce304e73583431a0bd4623->enter($__internal_e56bfbc8a80ee7e127d0f253a91adf2afa8aab8df6ce304e73583431a0bd4623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_799e6f02d11fbfe75b9ab23724fda4f9fc48aa45f7c53299d16a73a011fb168f->leave($__internal_799e6f02d11fbfe75b9ab23724fda4f9fc48aa45f7c53299d16a73a011fb168f_prof);

        
        $__internal_e56bfbc8a80ee7e127d0f253a91adf2afa8aab8df6ce304e73583431a0bd4623->leave($__internal_e56bfbc8a80ee7e127d0f253a91adf2afa8aab8df6ce304e73583431a0bd4623_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_993905f28b06fc22283ad274a457ecc281a1fbeb2e3131dd9fe9786af08b30b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993905f28b06fc22283ad274a457ecc281a1fbeb2e3131dd9fe9786af08b30b0->enter($__internal_993905f28b06fc22283ad274a457ecc281a1fbeb2e3131dd9fe9786af08b30b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e12e90498a565f37cd3d948bab9f70ec1cf9a1b11c0f67b017ee52b3e21acbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e12e90498a565f37cd3d948bab9f70ec1cf9a1b11c0f67b017ee52b3e21acbc->enter($__internal_6e12e90498a565f37cd3d948bab9f70ec1cf9a1b11c0f67b017ee52b3e21acbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6e12e90498a565f37cd3d948bab9f70ec1cf9a1b11c0f67b017ee52b3e21acbc->leave($__internal_6e12e90498a565f37cd3d948bab9f70ec1cf9a1b11c0f67b017ee52b3e21acbc_prof);

        
        $__internal_993905f28b06fc22283ad274a457ecc281a1fbeb2e3131dd9fe9786af08b30b0->leave($__internal_993905f28b06fc22283ad274a457ecc281a1fbeb2e3131dd9fe9786af08b30b0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
