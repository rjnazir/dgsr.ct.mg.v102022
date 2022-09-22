<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_ecaff70a4b052b183300795304d42fad8621ae1a24fda26d2815bb78316aa2f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_8f0151392d6a723513d68c4a6d344343df29faedf4a64d79de35507ef250d8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0151392d6a723513d68c4a6d344343df29faedf4a64d79de35507ef250d8fc->enter($__internal_8f0151392d6a723513d68c4a6d344343df29faedf4a64d79de35507ef250d8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_61c2d17da95abdaa27a15a3afda26bd07e9e477c8cdb46be15c70c0a92d62eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c2d17da95abdaa27a15a3afda26bd07e9e477c8cdb46be15c70c0a92d62eb7->enter($__internal_61c2d17da95abdaa27a15a3afda26bd07e9e477c8cdb46be15c70c0a92d62eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f0151392d6a723513d68c4a6d344343df29faedf4a64d79de35507ef250d8fc->leave($__internal_8f0151392d6a723513d68c4a6d344343df29faedf4a64d79de35507ef250d8fc_prof);

        
        $__internal_61c2d17da95abdaa27a15a3afda26bd07e9e477c8cdb46be15c70c0a92d62eb7->leave($__internal_61c2d17da95abdaa27a15a3afda26bd07e9e477c8cdb46be15c70c0a92d62eb7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f248b5895e08bcad56ea95ef2a113f88c17db2cfbbf8599d39dc71ce3e748fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f248b5895e08bcad56ea95ef2a113f88c17db2cfbbf8599d39dc71ce3e748fe7->enter($__internal_f248b5895e08bcad56ea95ef2a113f88c17db2cfbbf8599d39dc71ce3e748fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5abd777ec41e83019e56554f855c295ce4d9a9580fa9088e23e65d00d00b60b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abd777ec41e83019e56554f855c295ce4d9a9580fa9088e23e65d00d00b60b2->enter($__internal_5abd777ec41e83019e56554f855c295ce4d9a9580fa9088e23e65d00d00b60b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5abd777ec41e83019e56554f855c295ce4d9a9580fa9088e23e65d00d00b60b2->leave($__internal_5abd777ec41e83019e56554f855c295ce4d9a9580fa9088e23e65d00d00b60b2_prof);

        
        $__internal_f248b5895e08bcad56ea95ef2a113f88c17db2cfbbf8599d39dc71ce3e748fe7->leave($__internal_f248b5895e08bcad56ea95ef2a113f88c17db2cfbbf8599d39dc71ce3e748fe7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
