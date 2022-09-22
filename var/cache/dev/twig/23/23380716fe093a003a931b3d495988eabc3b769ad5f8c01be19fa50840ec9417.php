<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_6bb3bfd00a79c43df9b3dbe2aa9fcdb5ba48dac21fcbb6ac35f194c1952c8505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_a95d740b803633ec0ed0318c6750fcd07f6d038ab19dfbc7de1e18e7a5ede1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95d740b803633ec0ed0318c6750fcd07f6d038ab19dfbc7de1e18e7a5ede1f7->enter($__internal_a95d740b803633ec0ed0318c6750fcd07f6d038ab19dfbc7de1e18e7a5ede1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_ec5860e6266ff17620f228efa71ce9b3dcfee6363e8ce8c9acfe5e90e4508e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5860e6266ff17620f228efa71ce9b3dcfee6363e8ce8c9acfe5e90e4508e79->enter($__internal_ec5860e6266ff17620f228efa71ce9b3dcfee6363e8ce8c9acfe5e90e4508e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a95d740b803633ec0ed0318c6750fcd07f6d038ab19dfbc7de1e18e7a5ede1f7->leave($__internal_a95d740b803633ec0ed0318c6750fcd07f6d038ab19dfbc7de1e18e7a5ede1f7_prof);

        
        $__internal_ec5860e6266ff17620f228efa71ce9b3dcfee6363e8ce8c9acfe5e90e4508e79->leave($__internal_ec5860e6266ff17620f228efa71ce9b3dcfee6363e8ce8c9acfe5e90e4508e79_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_540e3ae39edf40f04ffae05ca0c2cc0c7cbe007d68e59e5ab4fc77c10ca970b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540e3ae39edf40f04ffae05ca0c2cc0c7cbe007d68e59e5ab4fc77c10ca970b8->enter($__internal_540e3ae39edf40f04ffae05ca0c2cc0c7cbe007d68e59e5ab4fc77c10ca970b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c7567f71d6e5d3e50d5667f4b31caa405cb134c6aa710d177c19688d401fe939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7567f71d6e5d3e50d5667f4b31caa405cb134c6aa710d177c19688d401fe939->enter($__internal_c7567f71d6e5d3e50d5667f4b31caa405cb134c6aa710d177c19688d401fe939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_c7567f71d6e5d3e50d5667f4b31caa405cb134c6aa710d177c19688d401fe939->leave($__internal_c7567f71d6e5d3e50d5667f4b31caa405cb134c6aa710d177c19688d401fe939_prof);

        
        $__internal_540e3ae39edf40f04ffae05ca0c2cc0c7cbe007d68e59e5ab4fc77c10ca970b8->leave($__internal_540e3ae39edf40f04ffae05ca0c2cc0c7cbe007d68e59e5ab4fc77c10ca970b8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
", "@FOSUser/Profile/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
