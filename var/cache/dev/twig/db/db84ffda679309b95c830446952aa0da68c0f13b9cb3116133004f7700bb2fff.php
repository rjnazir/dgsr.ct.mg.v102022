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
        $__internal_186b21ccccc6b834439029f202e63ab4ff7688a0fa373a8896177b9f98f84ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186b21ccccc6b834439029f202e63ab4ff7688a0fa373a8896177b9f98f84ef9->enter($__internal_186b21ccccc6b834439029f202e63ab4ff7688a0fa373a8896177b9f98f84ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_7399ecd68efd7c627cc12856eaeec748207f5cddb18c1fc8624b81d8bd8e8adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7399ecd68efd7c627cc12856eaeec748207f5cddb18c1fc8624b81d8bd8e8adb->enter($__internal_7399ecd68efd7c627cc12856eaeec748207f5cddb18c1fc8624b81d8bd8e8adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_186b21ccccc6b834439029f202e63ab4ff7688a0fa373a8896177b9f98f84ef9->leave($__internal_186b21ccccc6b834439029f202e63ab4ff7688a0fa373a8896177b9f98f84ef9_prof);

        
        $__internal_7399ecd68efd7c627cc12856eaeec748207f5cddb18c1fc8624b81d8bd8e8adb->leave($__internal_7399ecd68efd7c627cc12856eaeec748207f5cddb18c1fc8624b81d8bd8e8adb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ff83f761f64ee24a4a73b4dbbf5584917502789a302a2c10cc9f4462331b818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff83f761f64ee24a4a73b4dbbf5584917502789a302a2c10cc9f4462331b818->enter($__internal_8ff83f761f64ee24a4a73b4dbbf5584917502789a302a2c10cc9f4462331b818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e2cd1cbd471947597111642c7b31e23a245a8e23d96b1eab2340ec55ff766de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cd1cbd471947597111642c7b31e23a245a8e23d96b1eab2340ec55ff766de8->enter($__internal_e2cd1cbd471947597111642c7b31e23a245a8e23d96b1eab2340ec55ff766de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e2cd1cbd471947597111642c7b31e23a245a8e23d96b1eab2340ec55ff766de8->leave($__internal_e2cd1cbd471947597111642c7b31e23a245a8e23d96b1eab2340ec55ff766de8_prof);

        
        $__internal_8ff83f761f64ee24a4a73b4dbbf5584917502789a302a2c10cc9f4462331b818->leave($__internal_8ff83f761f64ee24a4a73b4dbbf5584917502789a302a2c10cc9f4462331b818_prof);

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
