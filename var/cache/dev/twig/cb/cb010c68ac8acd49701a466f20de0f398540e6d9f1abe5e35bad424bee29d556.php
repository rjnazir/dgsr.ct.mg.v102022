<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_1db00dae794f481a5293c79c4377836d39858a5ded80f3186e0f4eaca689b2f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_c852656815091039c062412d1bbf2b2b550ade5006b10a186cef1b2f629dd06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c852656815091039c062412d1bbf2b2b550ade5006b10a186cef1b2f629dd06c->enter($__internal_c852656815091039c062412d1bbf2b2b550ade5006b10a186cef1b2f629dd06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_bf511df115f9f4293247ec4de15e9a44f36c2e8440590778d888043df0042134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf511df115f9f4293247ec4de15e9a44f36c2e8440590778d888043df0042134->enter($__internal_bf511df115f9f4293247ec4de15e9a44f36c2e8440590778d888043df0042134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c852656815091039c062412d1bbf2b2b550ade5006b10a186cef1b2f629dd06c->leave($__internal_c852656815091039c062412d1bbf2b2b550ade5006b10a186cef1b2f629dd06c_prof);

        
        $__internal_bf511df115f9f4293247ec4de15e9a44f36c2e8440590778d888043df0042134->leave($__internal_bf511df115f9f4293247ec4de15e9a44f36c2e8440590778d888043df0042134_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91c625ea487c70a125e46139550b8867bc5cbe59a357bf7ef717362dd61b57db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c625ea487c70a125e46139550b8867bc5cbe59a357bf7ef717362dd61b57db->enter($__internal_91c625ea487c70a125e46139550b8867bc5cbe59a357bf7ef717362dd61b57db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a5c534630cd699dc550503eb714d08d0a002b22c3e9cead79ecda419110ebd87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c534630cd699dc550503eb714d08d0a002b22c3e9cead79ecda419110ebd87->enter($__internal_a5c534630cd699dc550503eb714d08d0a002b22c3e9cead79ecda419110ebd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_a5c534630cd699dc550503eb714d08d0a002b22c3e9cead79ecda419110ebd87->leave($__internal_a5c534630cd699dc550503eb714d08d0a002b22c3e9cead79ecda419110ebd87_prof);

        
        $__internal_91c625ea487c70a125e46139550b8867bc5cbe59a357bf7ef717362dd61b57db->leave($__internal_91c625ea487c70a125e46139550b8867bc5cbe59a357bf7ef717362dd61b57db_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
