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
        $__internal_bbd8d3e37dca2bc99f90a40af58b1ab08ffd3388820535d5875a300a9fc97539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbd8d3e37dca2bc99f90a40af58b1ab08ffd3388820535d5875a300a9fc97539->enter($__internal_bbd8d3e37dca2bc99f90a40af58b1ab08ffd3388820535d5875a300a9fc97539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $__internal_937137fb0f4bfba9f6dae89e41572eb25c726985e009c47c81c8eba04117e424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937137fb0f4bfba9f6dae89e41572eb25c726985e009c47c81c8eba04117e424->enter($__internal_937137fb0f4bfba9f6dae89e41572eb25c726985e009c47c81c8eba04117e424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbd8d3e37dca2bc99f90a40af58b1ab08ffd3388820535d5875a300a9fc97539->leave($__internal_bbd8d3e37dca2bc99f90a40af58b1ab08ffd3388820535d5875a300a9fc97539_prof);

        
        $__internal_937137fb0f4bfba9f6dae89e41572eb25c726985e009c47c81c8eba04117e424->leave($__internal_937137fb0f4bfba9f6dae89e41572eb25c726985e009c47c81c8eba04117e424_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07888475aca5ed12be90027af4c81cfaed9e6fb082336ff8b19d38a6e59cf068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07888475aca5ed12be90027af4c81cfaed9e6fb082336ff8b19d38a6e59cf068->enter($__internal_07888475aca5ed12be90027af4c81cfaed9e6fb082336ff8b19d38a6e59cf068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5dfd161434a7d8b71ed068dbb37d2603a389b599c1313098814c448adcc9eec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfd161434a7d8b71ed068dbb37d2603a389b599c1313098814c448adcc9eec2->enter($__internal_5dfd161434a7d8b71ed068dbb37d2603a389b599c1313098814c448adcc9eec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 403 ";
        
        $__internal_5dfd161434a7d8b71ed068dbb37d2603a389b599c1313098814c448adcc9eec2->leave($__internal_5dfd161434a7d8b71ed068dbb37d2603a389b599c1313098814c448adcc9eec2_prof);

        
        $__internal_07888475aca5ed12be90027af4c81cfaed9e6fb082336ff8b19d38a6e59cf068->leave($__internal_07888475aca5ed12be90027af4c81cfaed9e6fb082336ff8b19d38a6e59cf068_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef05d9b27a3d11d50122f52052d3c0840524a1e7fa6829cbce21dc04958da004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef05d9b27a3d11d50122f52052d3c0840524a1e7fa6829cbce21dc04958da004->enter($__internal_ef05d9b27a3d11d50122f52052d3c0840524a1e7fa6829cbce21dc04958da004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67faded434ced12fbf68acf0d0f89e5f63a0f100b22d21251b00fdacda5231b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67faded434ced12fbf68acf0d0f89e5f63a0f100b22d21251b00fdacda5231b9->enter($__internal_67faded434ced12fbf68acf0d0f89e5f63a0f100b22d21251b00fdacda5231b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_67faded434ced12fbf68acf0d0f89e5f63a0f100b22d21251b00fdacda5231b9->leave($__internal_67faded434ced12fbf68acf0d0f89e5f63a0f100b22d21251b00fdacda5231b9_prof);

        
        $__internal_ef05d9b27a3d11d50122f52052d3c0840524a1e7fa6829cbce21dc04958da004->leave($__internal_ef05d9b27a3d11d50122f52052d3c0840524a1e7fa6829cbce21dc04958da004_prof);

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
