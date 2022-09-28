<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_25a6653de881eadf4b62b073247cfa6413bcbb843589387422cbf9c2a66ab0ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_310ebd22cb97c1f633ee41df2d178944b555763364014713591d3f9a7d708588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310ebd22cb97c1f633ee41df2d178944b555763364014713591d3f9a7d708588->enter($__internal_310ebd22cb97c1f633ee41df2d178944b555763364014713591d3f9a7d708588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_87986a57429acb87767e88126ce4ab958e204df20f7eb498f182037bc8c7e24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87986a57429acb87767e88126ce4ab958e204df20f7eb498f182037bc8c7e24d->enter($__internal_87986a57429acb87767e88126ce4ab958e204df20f7eb498f182037bc8c7e24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_310ebd22cb97c1f633ee41df2d178944b555763364014713591d3f9a7d708588->leave($__internal_310ebd22cb97c1f633ee41df2d178944b555763364014713591d3f9a7d708588_prof);

        
        $__internal_87986a57429acb87767e88126ce4ab958e204df20f7eb498f182037bc8c7e24d->leave($__internal_87986a57429acb87767e88126ce4ab958e204df20f7eb498f182037bc8c7e24d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d6610a639abb637df84790d8cf5e30a0803c841c94dbdb2e1c36f3d39ab3832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6610a639abb637df84790d8cf5e30a0803c841c94dbdb2e1c36f3d39ab3832->enter($__internal_1d6610a639abb637df84790d8cf5e30a0803c841c94dbdb2e1c36f3d39ab3832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_25a32d21badb3c9c9afde39d8931e613aa31fd53e695aa62deffacb954155775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a32d21badb3c9c9afde39d8931e613aa31fd53e695aa62deffacb954155775->enter($__internal_25a32d21badb3c9c9afde39d8931e613aa31fd53e695aa62deffacb954155775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_25a32d21badb3c9c9afde39d8931e613aa31fd53e695aa62deffacb954155775->leave($__internal_25a32d21badb3c9c9afde39d8931e613aa31fd53e695aa62deffacb954155775_prof);

        
        $__internal_1d6610a639abb637df84790d8cf5e30a0803c841c94dbdb2e1c36f3d39ab3832->leave($__internal_1d6610a639abb637df84790d8cf5e30a0803c841c94dbdb2e1c36f3d39ab3832_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
