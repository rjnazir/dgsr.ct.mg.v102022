<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_275ca02f4731d7d49dff390a592126197c09f31d82a9ac6f271f2731659757a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_5d8ceff0d2e4135b8e4bf2f6c23f6861f7bd3da816eb89aa8343ed53d6c22bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8ceff0d2e4135b8e4bf2f6c23f6861f7bd3da816eb89aa8343ed53d6c22bb7->enter($__internal_5d8ceff0d2e4135b8e4bf2f6c23f6861f7bd3da816eb89aa8343ed53d6c22bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_7b9245c2c62fa087a5edade6427dde2d9fc1dc685086168316d75dd783b42a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9245c2c62fa087a5edade6427dde2d9fc1dc685086168316d75dd783b42a7f->enter($__internal_7b9245c2c62fa087a5edade6427dde2d9fc1dc685086168316d75dd783b42a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d8ceff0d2e4135b8e4bf2f6c23f6861f7bd3da816eb89aa8343ed53d6c22bb7->leave($__internal_5d8ceff0d2e4135b8e4bf2f6c23f6861f7bd3da816eb89aa8343ed53d6c22bb7_prof);

        
        $__internal_7b9245c2c62fa087a5edade6427dde2d9fc1dc685086168316d75dd783b42a7f->leave($__internal_7b9245c2c62fa087a5edade6427dde2d9fc1dc685086168316d75dd783b42a7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d630627a1c3552f72ce587f1b86906a63875ff66aa1fa55ca3acf99ac6111adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d630627a1c3552f72ce587f1b86906a63875ff66aa1fa55ca3acf99ac6111adb->enter($__internal_d630627a1c3552f72ce587f1b86906a63875ff66aa1fa55ca3acf99ac6111adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f458b51967605340bb135333ab3f6ba254686434aecb7503e5dcc6601c15baf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f458b51967605340bb135333ab3f6ba254686434aecb7503e5dcc6601c15baf6->enter($__internal_f458b51967605340bb135333ab3f6ba254686434aecb7503e5dcc6601c15baf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_f458b51967605340bb135333ab3f6ba254686434aecb7503e5dcc6601c15baf6->leave($__internal_f458b51967605340bb135333ab3f6ba254686434aecb7503e5dcc6601c15baf6_prof);

        
        $__internal_d630627a1c3552f72ce587f1b86906a63875ff66aa1fa55ca3acf99ac6111adb->leave($__internal_d630627a1c3552f72ce587f1b86906a63875ff66aa1fa55ca3acf99ac6111adb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
