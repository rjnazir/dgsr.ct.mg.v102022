<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_40080ea853734df0fbe16c523d55ae2ac77c2bb36bd0bce975dec415c47bc5d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
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
        $__internal_e049e810ee42fb4d95c671c360a68a90c29bf1e556eef7665bbf583f39ad1aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e049e810ee42fb4d95c671c360a68a90c29bf1e556eef7665bbf583f39ad1aab->enter($__internal_e049e810ee42fb4d95c671c360a68a90c29bf1e556eef7665bbf583f39ad1aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $__internal_c8ec219093fc7ea7b54abaf1f3b373216774e9774ffd883fadda2bf41e05aced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ec219093fc7ea7b54abaf1f3b373216774e9774ffd883fadda2bf41e05aced->enter($__internal_c8ec219093fc7ea7b54abaf1f3b373216774e9774ffd883fadda2bf41e05aced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e049e810ee42fb4d95c671c360a68a90c29bf1e556eef7665bbf583f39ad1aab->leave($__internal_e049e810ee42fb4d95c671c360a68a90c29bf1e556eef7665bbf583f39ad1aab_prof);

        
        $__internal_c8ec219093fc7ea7b54abaf1f3b373216774e9774ffd883fadda2bf41e05aced->leave($__internal_c8ec219093fc7ea7b54abaf1f3b373216774e9774ffd883fadda2bf41e05aced_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b475e1e096807e5f426616eb6b429a2227bbc1405e55f2ae78a72f67d1a8dcfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b475e1e096807e5f426616eb6b429a2227bbc1405e55f2ae78a72f67d1a8dcfa->enter($__internal_b475e1e096807e5f426616eb6b429a2227bbc1405e55f2ae78a72f67d1a8dcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69704674837faea168ef437e55525532a099cfccad1e67a8ecf3729b4f2165b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69704674837faea168ef437e55525532a099cfccad1e67a8ecf3729b4f2165b4->enter($__internal_69704674837faea168ef437e55525532a099cfccad1e67a8ecf3729b4f2165b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 404 ";
        
        $__internal_69704674837faea168ef437e55525532a099cfccad1e67a8ecf3729b4f2165b4->leave($__internal_69704674837faea168ef437e55525532a099cfccad1e67a8ecf3729b4f2165b4_prof);

        
        $__internal_b475e1e096807e5f426616eb6b429a2227bbc1405e55f2ae78a72f67d1a8dcfa->leave($__internal_b475e1e096807e5f426616eb6b429a2227bbc1405e55f2ae78a72f67d1a8dcfa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_016e83db483419f3f04b08f21e6b71ab26f3e331484620d9682abca1b1010112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016e83db483419f3f04b08f21e6b71ab26f3e331484620d9682abca1b1010112->enter($__internal_016e83db483419f3f04b08f21e6b71ab26f3e331484620d9682abca1b1010112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_804f0f7ace7a6033251edea260c4210db6d69bfd810b2d88f41db218ae4b2c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804f0f7ace7a6033251edea260c4210db6d69bfd810b2d88f41db218ae4b2c52->enter($__internal_804f0f7ace7a6033251edea260c4210db6d69bfd810b2d88f41db218ae4b2c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 404</h1>
                <p>Désolé, l'URL demandée n'a pas été trouvée</p>
            </div>
        </div>
    </section>
";
        
        $__internal_804f0f7ace7a6033251edea260c4210db6d69bfd810b2d88f41db218ae4b2c52->leave($__internal_804f0f7ace7a6033251edea260c4210db6d69bfd810b2d88f41db218ae4b2c52_prof);

        
        $__internal_016e83db483419f3f04b08f21e6b71ab26f3e331484620d9682abca1b1010112->leave($__internal_016e83db483419f3f04b08f21e6b71ab26f3e331484620d9682abca1b1010112_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
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

{% block title %} {{ parent() }} Erreur 404 {% endblock %}

{% block body %}
    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 404</h1>
                <p>Désolé, l'URL demandée n'a pas été trouvée</p>
            </div>
        </div>
    </section>
{% endblock %}
", "TwigBundle:Exception:error404.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
