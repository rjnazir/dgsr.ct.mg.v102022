<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ecf59fc592b2ec0fac205d9bac7b44a1943421696a90325e8500aff75ed81aef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_a7b8da0eee1d54a65a74c62d705cce53e1b899a46d1a3b579b8a0ffbfb92aeab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b8da0eee1d54a65a74c62d705cce53e1b899a46d1a3b579b8a0ffbfb92aeab->enter($__internal_a7b8da0eee1d54a65a74c62d705cce53e1b899a46d1a3b579b8a0ffbfb92aeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_700aba8c9f4114f146c21ca28dfd82a3e255570c64945071723bc507e7abebef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700aba8c9f4114f146c21ca28dfd82a3e255570c64945071723bc507e7abebef->enter($__internal_700aba8c9f4114f146c21ca28dfd82a3e255570c64945071723bc507e7abebef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7b8da0eee1d54a65a74c62d705cce53e1b899a46d1a3b579b8a0ffbfb92aeab->leave($__internal_a7b8da0eee1d54a65a74c62d705cce53e1b899a46d1a3b579b8a0ffbfb92aeab_prof);

        
        $__internal_700aba8c9f4114f146c21ca28dfd82a3e255570c64945071723bc507e7abebef->leave($__internal_700aba8c9f4114f146c21ca28dfd82a3e255570c64945071723bc507e7abebef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47a2c84d9e569f8d83e72a42e0aadb8322da4b2fa959b9c86b0115ed8feb6f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a2c84d9e569f8d83e72a42e0aadb8322da4b2fa959b9c86b0115ed8feb6f57->enter($__internal_47a2c84d9e569f8d83e72a42e0aadb8322da4b2fa959b9c86b0115ed8feb6f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_24ae9543ff1b4e4790e65137d49da4a684583fe715886b1cf3ae5c4a02375679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ae9543ff1b4e4790e65137d49da4a684583fe715886b1cf3ae5c4a02375679->enter($__internal_24ae9543ff1b4e4790e65137d49da4a684583fe715886b1cf3ae5c4a02375679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_24ae9543ff1b4e4790e65137d49da4a684583fe715886b1cf3ae5c4a02375679->leave($__internal_24ae9543ff1b4e4790e65137d49da4a684583fe715886b1cf3ae5c4a02375679_prof);

        
        $__internal_47a2c84d9e569f8d83e72a42e0aadb8322da4b2fa959b9c86b0115ed8feb6f57->leave($__internal_47a2c84d9e569f8d83e72a42e0aadb8322da4b2fa959b9c86b0115ed8feb6f57_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
