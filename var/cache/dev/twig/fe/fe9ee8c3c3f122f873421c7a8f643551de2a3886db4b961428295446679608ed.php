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
        $__internal_9dd9dfcfe033f388c84c9e4c7f11c1e21d60f9df57c4a1ad5577e52f47c599a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd9dfcfe033f388c84c9e4c7f11c1e21d60f9df57c4a1ad5577e52f47c599a4->enter($__internal_9dd9dfcfe033f388c84c9e4c7f11c1e21d60f9df57c4a1ad5577e52f47c599a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $__internal_159d542e4e6fa695093fc74d87abe314675aeb72b4bceaeeb4c5681ed092af3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159d542e4e6fa695093fc74d87abe314675aeb72b4bceaeeb4c5681ed092af3b->enter($__internal_159d542e4e6fa695093fc74d87abe314675aeb72b4bceaeeb4c5681ed092af3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dd9dfcfe033f388c84c9e4c7f11c1e21d60f9df57c4a1ad5577e52f47c599a4->leave($__internal_9dd9dfcfe033f388c84c9e4c7f11c1e21d60f9df57c4a1ad5577e52f47c599a4_prof);

        
        $__internal_159d542e4e6fa695093fc74d87abe314675aeb72b4bceaeeb4c5681ed092af3b->leave($__internal_159d542e4e6fa695093fc74d87abe314675aeb72b4bceaeeb4c5681ed092af3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee8c2fe2ef2dee0309d7aeb1d88954199afcd85acf97d9e2d6a57c8ce019888f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8c2fe2ef2dee0309d7aeb1d88954199afcd85acf97d9e2d6a57c8ce019888f->enter($__internal_ee8c2fe2ef2dee0309d7aeb1d88954199afcd85acf97d9e2d6a57c8ce019888f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10a50bd7580b28de0417e04c2051e6745f00dd4417b243b756957b9a393bc163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a50bd7580b28de0417e04c2051e6745f00dd4417b243b756957b9a393bc163->enter($__internal_10a50bd7580b28de0417e04c2051e6745f00dd4417b243b756957b9a393bc163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 404 ";
        
        $__internal_10a50bd7580b28de0417e04c2051e6745f00dd4417b243b756957b9a393bc163->leave($__internal_10a50bd7580b28de0417e04c2051e6745f00dd4417b243b756957b9a393bc163_prof);

        
        $__internal_ee8c2fe2ef2dee0309d7aeb1d88954199afcd85acf97d9e2d6a57c8ce019888f->leave($__internal_ee8c2fe2ef2dee0309d7aeb1d88954199afcd85acf97d9e2d6a57c8ce019888f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_70e9533a6c0eeaf1c3c61daef52d6e967523a6266428979f7367cd46a905a192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e9533a6c0eeaf1c3c61daef52d6e967523a6266428979f7367cd46a905a192->enter($__internal_70e9533a6c0eeaf1c3c61daef52d6e967523a6266428979f7367cd46a905a192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1cc7dc11938148acce44c674d07d2191627aff370aa3709142b5b0d730fd1802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc7dc11938148acce44c674d07d2191627aff370aa3709142b5b0d730fd1802->enter($__internal_1cc7dc11938148acce44c674d07d2191627aff370aa3709142b5b0d730fd1802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1cc7dc11938148acce44c674d07d2191627aff370aa3709142b5b0d730fd1802->leave($__internal_1cc7dc11938148acce44c674d07d2191627aff370aa3709142b5b0d730fd1802_prof);

        
        $__internal_70e9533a6c0eeaf1c3c61daef52d6e967523a6266428979f7367cd46a905a192->leave($__internal_70e9533a6c0eeaf1c3c61daef52d6e967523a6266428979f7367cd46a905a192_prof);

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
