<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_218cd397d2709a86c347d534b9f96a5292d124b3fcc7f533a8797f1f520537eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "TwigBundle:Exception:error403.html.twig", 1);
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
        $__internal_0fab701e3b1f930a59430cc331cba3163a2ed5530ad43cf0dda48696b1c39b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fab701e3b1f930a59430cc331cba3163a2ed5530ad43cf0dda48696b1c39b80->enter($__internal_0fab701e3b1f930a59430cc331cba3163a2ed5530ad43cf0dda48696b1c39b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $__internal_94935733011b4b602902a68e80db4c232381efae2f9982c9e96904cb062c54ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94935733011b4b602902a68e80db4c232381efae2f9982c9e96904cb062c54ad->enter($__internal_94935733011b4b602902a68e80db4c232381efae2f9982c9e96904cb062c54ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fab701e3b1f930a59430cc331cba3163a2ed5530ad43cf0dda48696b1c39b80->leave($__internal_0fab701e3b1f930a59430cc331cba3163a2ed5530ad43cf0dda48696b1c39b80_prof);

        
        $__internal_94935733011b4b602902a68e80db4c232381efae2f9982c9e96904cb062c54ad->leave($__internal_94935733011b4b602902a68e80db4c232381efae2f9982c9e96904cb062c54ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_233d3530d0dc18f6b68b8a663b7eea20f7a45371a81f7b6f27a6df5aa4950282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233d3530d0dc18f6b68b8a663b7eea20f7a45371a81f7b6f27a6df5aa4950282->enter($__internal_233d3530d0dc18f6b68b8a663b7eea20f7a45371a81f7b6f27a6df5aa4950282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_292b792a1d92e9e13309d58aae870ef092089440c766f11d3e79213c1433c12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292b792a1d92e9e13309d58aae870ef092089440c766f11d3e79213c1433c12d->enter($__internal_292b792a1d92e9e13309d58aae870ef092089440c766f11d3e79213c1433c12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 403 ";
        
        $__internal_292b792a1d92e9e13309d58aae870ef092089440c766f11d3e79213c1433c12d->leave($__internal_292b792a1d92e9e13309d58aae870ef092089440c766f11d3e79213c1433c12d_prof);

        
        $__internal_233d3530d0dc18f6b68b8a663b7eea20f7a45371a81f7b6f27a6df5aa4950282->leave($__internal_233d3530d0dc18f6b68b8a663b7eea20f7a45371a81f7b6f27a6df5aa4950282_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c9213ff47a5868baf6c36f4a11ad62a2a711af9c763ad821558ae4717426031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9213ff47a5868baf6c36f4a11ad62a2a711af9c763ad821558ae4717426031->enter($__internal_9c9213ff47a5868baf6c36f4a11ad62a2a711af9c763ad821558ae4717426031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85992618ac02d7ea52f4a4e48cd547fc4abb7c357e5aa80f3313fca25d88baa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85992618ac02d7ea52f4a4e48cd547fc4abb7c357e5aa80f3313fca25d88baa8->enter($__internal_85992618ac02d7ea52f4a4e48cd547fc4abb7c357e5aa80f3313fca25d88baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 403</h1>
                <p>Accès non autorisé</p>
            </div>
        </div>
    </section>
";
        
        $__internal_85992618ac02d7ea52f4a4e48cd547fc4abb7c357e5aa80f3313fca25d88baa8->leave($__internal_85992618ac02d7ea52f4a4e48cd547fc4abb7c357e5aa80f3313fca25d88baa8_prof);

        
        $__internal_9c9213ff47a5868baf6c36f4a11ad62a2a711af9c763ad821558ae4717426031->leave($__internal_9c9213ff47a5868baf6c36f4a11ad62a2a711af9c763ad821558ae4717426031_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
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

{% block title %} {{ parent() }} Erreur 403 {% endblock %}

{% block body %}
    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 403</h1>
                <p>Accès non autorisé</p>
            </div>
        </div>
    </section>
{% endblock %}
", "TwigBundle:Exception:error403.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources/TwigBundle/views/Exception/error403.html.twig");
    }
}
