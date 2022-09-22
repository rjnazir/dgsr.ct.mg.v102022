<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_cfee46f8a83c5464cfa4d01ea4087c49c14a61975b8c200e4970ef181c40d5ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_6940f11f755f99e48235a8d1e280254d698d7a4cad92dc5b652fa6b664dcb8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6940f11f755f99e48235a8d1e280254d698d7a4cad92dc5b652fa6b664dcb8ad->enter($__internal_6940f11f755f99e48235a8d1e280254d698d7a4cad92dc5b652fa6b664dcb8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_30e41164b5ecab78774feea03687419f527b61e17cded387bbc37c1fd8b22f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e41164b5ecab78774feea03687419f527b61e17cded387bbc37c1fd8b22f2e->enter($__internal_30e41164b5ecab78774feea03687419f527b61e17cded387bbc37c1fd8b22f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6940f11f755f99e48235a8d1e280254d698d7a4cad92dc5b652fa6b664dcb8ad->leave($__internal_6940f11f755f99e48235a8d1e280254d698d7a4cad92dc5b652fa6b664dcb8ad_prof);

        
        $__internal_30e41164b5ecab78774feea03687419f527b61e17cded387bbc37c1fd8b22f2e->leave($__internal_30e41164b5ecab78774feea03687419f527b61e17cded387bbc37c1fd8b22f2e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2839233aac3b9e1574c40d13f156c15ba6d18e0afb27e9f2b13f3ba92af93581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2839233aac3b9e1574c40d13f156c15ba6d18e0afb27e9f2b13f3ba92af93581->enter($__internal_2839233aac3b9e1574c40d13f156c15ba6d18e0afb27e9f2b13f3ba92af93581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_020487e1049aa2ec9fa9f0d9c4b80cc2f42a79dcaa732b1170c3f9de74a78288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020487e1049aa2ec9fa9f0d9c4b80cc2f42a79dcaa732b1170c3f9de74a78288->enter($__internal_020487e1049aa2ec9fa9f0d9c4b80cc2f42a79dcaa732b1170c3f9de74a78288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_020487e1049aa2ec9fa9f0d9c4b80cc2f42a79dcaa732b1170c3f9de74a78288->leave($__internal_020487e1049aa2ec9fa9f0d9c4b80cc2f42a79dcaa732b1170c3f9de74a78288_prof);

        
        $__internal_2839233aac3b9e1574c40d13f156c15ba6d18e0afb27e9f2b13f3ba92af93581->leave($__internal_2839233aac3b9e1574c40d13f156c15ba6d18e0afb27e9f2b13f3ba92af93581_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
