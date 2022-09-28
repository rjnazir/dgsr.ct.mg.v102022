<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_92f8f13a517b61b35821e19091f03f93a7fbdfe0b468246620e55a5a5f869a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_45ac94961ac8dd42a9095834e9c92404086e26901c651226548e5a5eb99a2b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ac94961ac8dd42a9095834e9c92404086e26901c651226548e5a5eb99a2b09->enter($__internal_45ac94961ac8dd42a9095834e9c92404086e26901c651226548e5a5eb99a2b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_fe48258ce3a3595a42377ef594580d1af7fbbaf9e6bf55620f89e27ba1a06ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe48258ce3a3595a42377ef594580d1af7fbbaf9e6bf55620f89e27ba1a06ab8->enter($__internal_fe48258ce3a3595a42377ef594580d1af7fbbaf9e6bf55620f89e27ba1a06ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45ac94961ac8dd42a9095834e9c92404086e26901c651226548e5a5eb99a2b09->leave($__internal_45ac94961ac8dd42a9095834e9c92404086e26901c651226548e5a5eb99a2b09_prof);

        
        $__internal_fe48258ce3a3595a42377ef594580d1af7fbbaf9e6bf55620f89e27ba1a06ab8->leave($__internal_fe48258ce3a3595a42377ef594580d1af7fbbaf9e6bf55620f89e27ba1a06ab8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e45fabc77313334db85fcf4b3c975aa596e3795401eaca4e67dd757a65ff0189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45fabc77313334db85fcf4b3c975aa596e3795401eaca4e67dd757a65ff0189->enter($__internal_e45fabc77313334db85fcf4b3c975aa596e3795401eaca4e67dd757a65ff0189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_60e1a19602b642087ae84cc92120c0e330cd7f49363e0c9d3623cb1184843721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e1a19602b642087ae84cc92120c0e330cd7f49363e0c9d3623cb1184843721->enter($__internal_60e1a19602b642087ae84cc92120c0e330cd7f49363e0c9d3623cb1184843721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_60e1a19602b642087ae84cc92120c0e330cd7f49363e0c9d3623cb1184843721->leave($__internal_60e1a19602b642087ae84cc92120c0e330cd7f49363e0c9d3623cb1184843721_prof);

        
        $__internal_e45fabc77313334db85fcf4b3c975aa596e3795401eaca4e67dd757a65ff0189->leave($__internal_e45fabc77313334db85fcf4b3c975aa596e3795401eaca4e67dd757a65ff0189_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
