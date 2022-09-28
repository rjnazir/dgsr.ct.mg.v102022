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
        $__internal_279de34287713648d05dbf2e9a706f638e79d4082a8d962de0237ba56814f59f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279de34287713648d05dbf2e9a706f638e79d4082a8d962de0237ba56814f59f->enter($__internal_279de34287713648d05dbf2e9a706f638e79d4082a8d962de0237ba56814f59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_40997693c25820f39a685a2111ca6aa661f9c2853a48326ab74ab815b1a3b2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40997693c25820f39a685a2111ca6aa661f9c2853a48326ab74ab815b1a3b2f9->enter($__internal_40997693c25820f39a685a2111ca6aa661f9c2853a48326ab74ab815b1a3b2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_279de34287713648d05dbf2e9a706f638e79d4082a8d962de0237ba56814f59f->leave($__internal_279de34287713648d05dbf2e9a706f638e79d4082a8d962de0237ba56814f59f_prof);

        
        $__internal_40997693c25820f39a685a2111ca6aa661f9c2853a48326ab74ab815b1a3b2f9->leave($__internal_40997693c25820f39a685a2111ca6aa661f9c2853a48326ab74ab815b1a3b2f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8130fe4efde2ea1f3621a9997a6e11bc5a92748f1e2a6807d7ad433866db841f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8130fe4efde2ea1f3621a9997a6e11bc5a92748f1e2a6807d7ad433866db841f->enter($__internal_8130fe4efde2ea1f3621a9997a6e11bc5a92748f1e2a6807d7ad433866db841f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6d5c3620a7f2b549e5f6fbaa3be09af3724fa49a202e25247482d110ac3bd05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5c3620a7f2b549e5f6fbaa3be09af3724fa49a202e25247482d110ac3bd05b->enter($__internal_6d5c3620a7f2b549e5f6fbaa3be09af3724fa49a202e25247482d110ac3bd05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6d5c3620a7f2b549e5f6fbaa3be09af3724fa49a202e25247482d110ac3bd05b->leave($__internal_6d5c3620a7f2b549e5f6fbaa3be09af3724fa49a202e25247482d110ac3bd05b_prof);

        
        $__internal_8130fe4efde2ea1f3621a9997a6e11bc5a92748f1e2a6807d7ad433866db841f->leave($__internal_8130fe4efde2ea1f3621a9997a6e11bc5a92748f1e2a6807d7ad433866db841f_prof);

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
