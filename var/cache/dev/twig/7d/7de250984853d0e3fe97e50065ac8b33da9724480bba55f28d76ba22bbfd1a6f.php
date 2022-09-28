<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_da1a9481cbdbc969e7df5225f7bb98689f71cbd4b61ffcd19816e1d38f4c111f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "TwigBundle:Exception:error500.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d0811935b76dc5f5f4cfdb44e6009367cd6c6c61fe23747297867bd27695d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0811935b76dc5f5f4cfdb44e6009367cd6c6c61fe23747297867bd27695d0e->enter($__internal_1d0811935b76dc5f5f4cfdb44e6009367cd6c6c61fe23747297867bd27695d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $__internal_f636e96b9f4d1135c7809635a4cf0c228dcbfcc4f2535eb2ca30914bf676c3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f636e96b9f4d1135c7809635a4cf0c228dcbfcc4f2535eb2ca30914bf676c3e6->enter($__internal_f636e96b9f4d1135c7809635a4cf0c228dcbfcc4f2535eb2ca30914bf676c3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d0811935b76dc5f5f4cfdb44e6009367cd6c6c61fe23747297867bd27695d0e->leave($__internal_1d0811935b76dc5f5f4cfdb44e6009367cd6c6c61fe23747297867bd27695d0e_prof);

        
        $__internal_f636e96b9f4d1135c7809635a4cf0c228dcbfcc4f2535eb2ca30914bf676c3e6->leave($__internal_f636e96b9f4d1135c7809635a4cf0c228dcbfcc4f2535eb2ca30914bf676c3e6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_35f37050ba6ce80fd69e462bb547a4cf3b2d0e0e9ddbb759eb3aba08e2909476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f37050ba6ce80fd69e462bb547a4cf3b2d0e0e9ddbb759eb3aba08e2909476->enter($__internal_35f37050ba6ce80fd69e462bb547a4cf3b2d0e0e9ddbb759eb3aba08e2909476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17e92dfac7fb0da49d7edcb3a8f086ace7445be4679a4b067f8371ee74c1bb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e92dfac7fb0da49d7edcb3a8f086ace7445be4679a4b067f8371ee74c1bb91->enter($__internal_17e92dfac7fb0da49d7edcb3a8f086ace7445be4679a4b067f8371ee74c1bb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 500 ";
        
        $__internal_17e92dfac7fb0da49d7edcb3a8f086ace7445be4679a4b067f8371ee74c1bb91->leave($__internal_17e92dfac7fb0da49d7edcb3a8f086ace7445be4679a4b067f8371ee74c1bb91_prof);

        
        $__internal_35f37050ba6ce80fd69e462bb547a4cf3b2d0e0e9ddbb759eb3aba08e2909476->leave($__internal_35f37050ba6ce80fd69e462bb547a4cf3b2d0e0e9ddbb759eb3aba08e2909476_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_af1a04ca7e5c021078df9727aaec3a82516d24da04d28df89591d4b579040990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1a04ca7e5c021078df9727aaec3a82516d24da04d28df89591d4b579040990->enter($__internal_af1a04ca7e5c021078df9727aaec3a82516d24da04d28df89591d4b579040990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b739650d8ef49229a3febe6a61dc84104db793abaf3bec17d854c4f846414255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b739650d8ef49229a3febe6a61dc84104db793abaf3bec17d854c4f846414255->enter($__internal_b739650d8ef49229a3febe6a61dc84104db793abaf3bec17d854c4f846414255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 500</h1>
                <p>Désolé, une erreur est survenue !</p>
            </div>
        </div>
    </section>
";
        
        $__internal_b739650d8ef49229a3febe6a61dc84104db793abaf3bec17d854c4f846414255->leave($__internal_b739650d8ef49229a3febe6a61dc84104db793abaf3bec17d854c4f846414255_prof);

        
        $__internal_af1a04ca7e5c021078df9727aaec3a82516d24da04d28df89591d4b579040990->leave($__internal_af1a04ca7e5c021078df9727aaec3a82516d24da04d28df89591d4b579040990_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 6,  61 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %} {{ parent() }} Erreur 500 {% endblock %}

{% block body %}
    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 500</h1>
                <p>Désolé, une erreur est survenue !</p>
            </div>
        </div>
    </section>
{% endblock %}", "TwigBundle:Exception:error500.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources/TwigBundle/views/Exception/error500.html.twig");
    }
}
