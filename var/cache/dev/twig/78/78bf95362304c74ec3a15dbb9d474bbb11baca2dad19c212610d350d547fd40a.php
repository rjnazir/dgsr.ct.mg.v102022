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
        $__internal_f9062a0e117ce8093f8df29f0061535738b4c6b56c04e86c6e72ae3869d3f1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9062a0e117ce8093f8df29f0061535738b4c6b56c04e86c6e72ae3869d3f1c7->enter($__internal_f9062a0e117ce8093f8df29f0061535738b4c6b56c04e86c6e72ae3869d3f1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_6ef9ce705e1652a90e712c90b99ef050347f3d94d07e3755820be91a14b7b332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef9ce705e1652a90e712c90b99ef050347f3d94d07e3755820be91a14b7b332->enter($__internal_6ef9ce705e1652a90e712c90b99ef050347f3d94d07e3755820be91a14b7b332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9062a0e117ce8093f8df29f0061535738b4c6b56c04e86c6e72ae3869d3f1c7->leave($__internal_f9062a0e117ce8093f8df29f0061535738b4c6b56c04e86c6e72ae3869d3f1c7_prof);

        
        $__internal_6ef9ce705e1652a90e712c90b99ef050347f3d94d07e3755820be91a14b7b332->leave($__internal_6ef9ce705e1652a90e712c90b99ef050347f3d94d07e3755820be91a14b7b332_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1da9b1cce2a91cb0cca2781d9d7930846bde512485a28a31694b1cc6f5ebb97e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da9b1cce2a91cb0cca2781d9d7930846bde512485a28a31694b1cc6f5ebb97e->enter($__internal_1da9b1cce2a91cb0cca2781d9d7930846bde512485a28a31694b1cc6f5ebb97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d722343afc42c4b2cd79731600e8f44cc1a75f341e427fe00a07a134355c38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d722343afc42c4b2cd79731600e8f44cc1a75f341e427fe00a07a134355c38f->enter($__internal_8d722343afc42c4b2cd79731600e8f44cc1a75f341e427fe00a07a134355c38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_8d722343afc42c4b2cd79731600e8f44cc1a75f341e427fe00a07a134355c38f->leave($__internal_8d722343afc42c4b2cd79731600e8f44cc1a75f341e427fe00a07a134355c38f_prof);

        
        $__internal_1da9b1cce2a91cb0cca2781d9d7930846bde512485a28a31694b1cc6f5ebb97e->leave($__internal_1da9b1cce2a91cb0cca2781d9d7930846bde512485a28a31694b1cc6f5ebb97e_prof);

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
