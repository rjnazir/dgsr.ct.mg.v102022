<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_8e877d6b0e8f3845b2f0d971c61978e9cf8b62f05a3cf350477b9fb7fb37669d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_e680f7be32de5ce0f9f026f3b826015d9c9f18a1b54bed15128c4d8b231934c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e680f7be32de5ce0f9f026f3b826015d9c9f18a1b54bed15128c4d8b231934c5->enter($__internal_e680f7be32de5ce0f9f026f3b826015d9c9f18a1b54bed15128c4d8b231934c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_f030e6583819b581cc8ba3f8b8ebc824353af1f266dcbab02b16aa6581c6a39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f030e6583819b581cc8ba3f8b8ebc824353af1f266dcbab02b16aa6581c6a39d->enter($__internal_f030e6583819b581cc8ba3f8b8ebc824353af1f266dcbab02b16aa6581c6a39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e680f7be32de5ce0f9f026f3b826015d9c9f18a1b54bed15128c4d8b231934c5->leave($__internal_e680f7be32de5ce0f9f026f3b826015d9c9f18a1b54bed15128c4d8b231934c5_prof);

        
        $__internal_f030e6583819b581cc8ba3f8b8ebc824353af1f266dcbab02b16aa6581c6a39d->leave($__internal_f030e6583819b581cc8ba3f8b8ebc824353af1f266dcbab02b16aa6581c6a39d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_978b97ad367eb8054f9cec9a50a78429ecc5e1073a0358b195505f7c48758c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978b97ad367eb8054f9cec9a50a78429ecc5e1073a0358b195505f7c48758c4a->enter($__internal_978b97ad367eb8054f9cec9a50a78429ecc5e1073a0358b195505f7c48758c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4d897b9943233ddc27c31c4a5638566bc18dc4c37948410e56fafd2727a0a1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d897b9943233ddc27c31c4a5638566bc18dc4c37948410e56fafd2727a0a1ad->enter($__internal_4d897b9943233ddc27c31c4a5638566bc18dc4c37948410e56fafd2727a0a1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_4d897b9943233ddc27c31c4a5638566bc18dc4c37948410e56fafd2727a0a1ad->leave($__internal_4d897b9943233ddc27c31c4a5638566bc18dc4c37948410e56fafd2727a0a1ad_prof);

        
        $__internal_978b97ad367eb8054f9cec9a50a78429ecc5e1073a0358b195505f7c48758c4a->leave($__internal_978b97ad367eb8054f9cec9a50a78429ecc5e1073a0358b195505f7c48758c4a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
