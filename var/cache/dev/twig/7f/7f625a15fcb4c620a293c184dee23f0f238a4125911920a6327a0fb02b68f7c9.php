<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_92694e41333d55e330911df51652e1004f26059188fc1e50f3a85ec24263359d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "TwigBundle:Exception:error.html.twig", 1);
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
        $__internal_fd27759555e123ddf2b11f333ab268fb4cd84f3a79d73cf5ea7fd47d27a1767e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd27759555e123ddf2b11f333ab268fb4cd84f3a79d73cf5ea7fd47d27a1767e->enter($__internal_fd27759555e123ddf2b11f333ab268fb4cd84f3a79d73cf5ea7fd47d27a1767e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_43f01c170ca3c980da150988a3cfd287629cab7763ff2933f09cab9997d69a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f01c170ca3c980da150988a3cfd287629cab7763ff2933f09cab9997d69a05->enter($__internal_43f01c170ca3c980da150988a3cfd287629cab7763ff2933f09cab9997d69a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd27759555e123ddf2b11f333ab268fb4cd84f3a79d73cf5ea7fd47d27a1767e->leave($__internal_fd27759555e123ddf2b11f333ab268fb4cd84f3a79d73cf5ea7fd47d27a1767e_prof);

        
        $__internal_43f01c170ca3c980da150988a3cfd287629cab7763ff2933f09cab9997d69a05->leave($__internal_43f01c170ca3c980da150988a3cfd287629cab7763ff2933f09cab9997d69a05_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f6265b8b087388286a88c5eff763493b690f8c4399567b2de16ff099a94e750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6265b8b087388286a88c5eff763493b690f8c4399567b2de16ff099a94e750->enter($__internal_1f6265b8b087388286a88c5eff763493b690f8c4399567b2de16ff099a94e750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_57be33e789b3a8cca5f03d7e71cd42eb8f65b22a7ebfac613af76576afa36ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57be33e789b3a8cca5f03d7e71cd42eb8f65b22a7ebfac613af76576afa36ab7->enter($__internal_57be33e789b3a8cca5f03d7e71cd42eb8f65b22a7ebfac613af76576afa36ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 500 ";
        
        $__internal_57be33e789b3a8cca5f03d7e71cd42eb8f65b22a7ebfac613af76576afa36ab7->leave($__internal_57be33e789b3a8cca5f03d7e71cd42eb8f65b22a7ebfac613af76576afa36ab7_prof);

        
        $__internal_1f6265b8b087388286a88c5eff763493b690f8c4399567b2de16ff099a94e750->leave($__internal_1f6265b8b087388286a88c5eff763493b690f8c4399567b2de16ff099a94e750_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_84813630f4ca136aa099210d9ce0d28367f043a7071c170697646cd743262222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84813630f4ca136aa099210d9ce0d28367f043a7071c170697646cd743262222->enter($__internal_84813630f4ca136aa099210d9ce0d28367f043a7071c170697646cd743262222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d7dceeff723527cab286bfbf1b1f043e358f08ba0ab0a8ea628de8741641b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7dceeff723527cab286bfbf1b1f043e358f08ba0ab0a8ea628de8741641b52->enter($__internal_0d7dceeff723527cab286bfbf1b1f043e358f08ba0ab0a8ea628de8741641b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0d7dceeff723527cab286bfbf1b1f043e358f08ba0ab0a8ea628de8741641b52->leave($__internal_0d7dceeff723527cab286bfbf1b1f043e358f08ba0ab0a8ea628de8741641b52_prof);

        
        $__internal_84813630f4ca136aa099210d9ce0d28367f043a7071c170697646cd743262222->leave($__internal_84813630f4ca136aa099210d9ce0d28367f043a7071c170697646cd743262222_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
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
{% endblock %}", "TwigBundle:Exception:error.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
