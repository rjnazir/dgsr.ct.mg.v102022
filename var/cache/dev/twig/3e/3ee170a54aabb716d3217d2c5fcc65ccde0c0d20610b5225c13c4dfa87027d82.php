<?php

/* @Admin/CtImprimeTechUse/add.html.twig */
class __TwigTemplate_9e2eba899dca89b5696a4df6e740e86c3ff0488f3fe4df18da5cd72e77133d8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/CtImprimeTechUse/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e79e329c92ddc48a134aaba0ce5a6503a16582d87311af36b73866f98f41771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e79e329c92ddc48a134aaba0ce5a6503a16582d87311af36b73866f98f41771->enter($__internal_5e79e329c92ddc48a134aaba0ce5a6503a16582d87311af36b73866f98f41771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/add.html.twig"));

        $__internal_52d5af49ed842d423ae4396428df679ac18c635465b3757b5324e26edc04cecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d5af49ed842d423ae4396428df679ac18c635465b3757b5324e26edc04cecc->enter($__internal_52d5af49ed842d423ae4396428df679ac18c635465b3757b5324e26edc04cecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e79e329c92ddc48a134aaba0ce5a6503a16582d87311af36b73866f98f41771->leave($__internal_5e79e329c92ddc48a134aaba0ce5a6503a16582d87311af36b73866f98f41771_prof);

        
        $__internal_52d5af49ed842d423ae4396428df679ac18c635465b3757b5324e26edc04cecc->leave($__internal_52d5af49ed842d423ae4396428df679ac18c635465b3757b5324e26edc04cecc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3108dfdb11c3b536df4de3006474bd00fbc9b7c7163c4294191fdab7d55c357d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3108dfdb11c3b536df4de3006474bd00fbc9b7c7163c4294191fdab7d55c357d->enter($__internal_3108dfdb11c3b536df4de3006474bd00fbc9b7c7163c4294191fdab7d55c357d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d19f908f161a7bd5a94ecc53b2c9cc2805caa044802cee797681646994a96385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19f908f161a7bd5a94ecc53b2c9cc2805caa044802cee797681646994a96385->enter($__internal_d19f908f161a7bd5a94ecc53b2c9cc2805caa044802cee797681646994a96385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AdminBundle:CtImprimeTechUse:new";
        
        $__internal_d19f908f161a7bd5a94ecc53b2c9cc2805caa044802cee797681646994a96385->leave($__internal_d19f908f161a7bd5a94ecc53b2c9cc2805caa044802cee797681646994a96385_prof);

        
        $__internal_3108dfdb11c3b536df4de3006474bd00fbc9b7c7163c4294191fdab7d55c357d->leave($__internal_3108dfdb11c3b536df4de3006474bd00fbc9b7c7163c4294191fdab7d55c357d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf997e149ed6a5cc28736fe4011033bcefc1fac2d1d8bab53e899dbe9464f408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf997e149ed6a5cc28736fe4011033bcefc1fac2d1d8bab53e899dbe9464f408->enter($__internal_cf997e149ed6a5cc28736fe4011033bcefc1fac2d1d8bab53e899dbe9464f408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5f9e92a0bf13272b8731f3300884ba0929683ff0d7579684717217b7bcbdcc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f9e92a0bf13272b8731f3300884ba0929683ff0d7579684717217b7bcbdcc9->enter($__internal_b5f9e92a0bf13272b8731f3300884ba0929683ff0d7579684717217b7bcbdcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the CtImprimeTechUse:new page</h1>
";
        
        $__internal_b5f9e92a0bf13272b8731f3300884ba0929683ff0d7579684717217b7bcbdcc9->leave($__internal_b5f9e92a0bf13272b8731f3300884ba0929683ff0d7579684717217b7bcbdcc9_prof);

        
        $__internal_cf997e149ed6a5cc28736fe4011033bcefc1fac2d1d8bab53e899dbe9464f408->leave($__internal_cf997e149ed6a5cc28736fe4011033bcefc1fac2d1d8bab53e899dbe9464f408_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTechUse/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AdminBundle:CtImprimeTechUse:new{% endblock %}

{% block body %}
<h1>Welcome to the CtImprimeTechUse:new page</h1>
{% endblock %}
", "@Admin/CtImprimeTechUse/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTechUse\\add.html.twig");
    }
}
