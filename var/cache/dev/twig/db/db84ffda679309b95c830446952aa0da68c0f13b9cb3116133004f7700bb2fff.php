<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_5604e532dc24110b22dd5378198191ce7eae4c1c3db38a8e6916f5810c54c96a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_261f7460789ebd56688f20f8b309788cd471606c7b2501e90111649b8d68c91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261f7460789ebd56688f20f8b309788cd471606c7b2501e90111649b8d68c91d->enter($__internal_261f7460789ebd56688f20f8b309788cd471606c7b2501e90111649b8d68c91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_8fd27a121b70311adf7c10a456129c29d829a4cd5060a0ea4c96591912d041d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd27a121b70311adf7c10a456129c29d829a4cd5060a0ea4c96591912d041d0->enter($__internal_8fd27a121b70311adf7c10a456129c29d829a4cd5060a0ea4c96591912d041d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_261f7460789ebd56688f20f8b309788cd471606c7b2501e90111649b8d68c91d->leave($__internal_261f7460789ebd56688f20f8b309788cd471606c7b2501e90111649b8d68c91d_prof);

        
        $__internal_8fd27a121b70311adf7c10a456129c29d829a4cd5060a0ea4c96591912d041d0->leave($__internal_8fd27a121b70311adf7c10a456129c29d829a4cd5060a0ea4c96591912d041d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6db45b02eab24639721ddaba61959433f4780bb58dcdd3ab8141da95702caf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6db45b02eab24639721ddaba61959433f4780bb58dcdd3ab8141da95702caf3->enter($__internal_b6db45b02eab24639721ddaba61959433f4780bb58dcdd3ab8141da95702caf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d05a01c8bd8bb0118881b38a8b1fdc15600dd107051899e48b9176f8be7a9f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05a01c8bd8bb0118881b38a8b1fdc15600dd107051899e48b9176f8be7a9f51->enter($__internal_d05a01c8bd8bb0118881b38a8b1fdc15600dd107051899e48b9176f8be7a9f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d05a01c8bd8bb0118881b38a8b1fdc15600dd107051899e48b9176f8be7a9f51->leave($__internal_d05a01c8bd8bb0118881b38a8b1fdc15600dd107051899e48b9176f8be7a9f51_prof);

        
        $__internal_b6db45b02eab24639721ddaba61959433f4780bb58dcdd3ab8141da95702caf3->leave($__internal_b6db45b02eab24639721ddaba61959433f4780bb58dcdd3ab8141da95702caf3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
