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
        $__internal_62900c9281aa93778cd03a9fc555d5cbf1fad9957178efbacf615845baffd0d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62900c9281aa93778cd03a9fc555d5cbf1fad9957178efbacf615845baffd0d5->enter($__internal_62900c9281aa93778cd03a9fc555d5cbf1fad9957178efbacf615845baffd0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $__internal_e7b8a0728cc05b93e0571ca3a9c74479ee4d32bdbb7ff915839f83972cf26426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b8a0728cc05b93e0571ca3a9c74479ee4d32bdbb7ff915839f83972cf26426->enter($__internal_e7b8a0728cc05b93e0571ca3a9c74479ee4d32bdbb7ff915839f83972cf26426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62900c9281aa93778cd03a9fc555d5cbf1fad9957178efbacf615845baffd0d5->leave($__internal_62900c9281aa93778cd03a9fc555d5cbf1fad9957178efbacf615845baffd0d5_prof);

        
        $__internal_e7b8a0728cc05b93e0571ca3a9c74479ee4d32bdbb7ff915839f83972cf26426->leave($__internal_e7b8a0728cc05b93e0571ca3a9c74479ee4d32bdbb7ff915839f83972cf26426_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44ed4febcb30ea70e85097d026cded780c7263a6c0031f103253d058b3be28b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ed4febcb30ea70e85097d026cded780c7263a6c0031f103253d058b3be28b5->enter($__internal_44ed4febcb30ea70e85097d026cded780c7263a6c0031f103253d058b3be28b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f86f313bbd381f740231e533e70f4f284ccbf5fe9f7ff0b6d39df578dfef8b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86f313bbd381f740231e533e70f4f284ccbf5fe9f7ff0b6d39df578dfef8b54->enter($__internal_f86f313bbd381f740231e533e70f4f284ccbf5fe9f7ff0b6d39df578dfef8b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 500 ";
        
        $__internal_f86f313bbd381f740231e533e70f4f284ccbf5fe9f7ff0b6d39df578dfef8b54->leave($__internal_f86f313bbd381f740231e533e70f4f284ccbf5fe9f7ff0b6d39df578dfef8b54_prof);

        
        $__internal_44ed4febcb30ea70e85097d026cded780c7263a6c0031f103253d058b3be28b5->leave($__internal_44ed4febcb30ea70e85097d026cded780c7263a6c0031f103253d058b3be28b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f961de11bb9b1bce9cc586e47e070388423e94891a9d3e078a0be450aa26fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f961de11bb9b1bce9cc586e47e070388423e94891a9d3e078a0be450aa26fba->enter($__internal_8f961de11bb9b1bce9cc586e47e070388423e94891a9d3e078a0be450aa26fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1de93eb68de88847f9a0632d08c1dd7aa9db53175c914699164d92f0b6d2343b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de93eb68de88847f9a0632d08c1dd7aa9db53175c914699164d92f0b6d2343b->enter($__internal_1de93eb68de88847f9a0632d08c1dd7aa9db53175c914699164d92f0b6d2343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1de93eb68de88847f9a0632d08c1dd7aa9db53175c914699164d92f0b6d2343b->leave($__internal_1de93eb68de88847f9a0632d08c1dd7aa9db53175c914699164d92f0b6d2343b_prof);

        
        $__internal_8f961de11bb9b1bce9cc586e47e070388423e94891a9d3e078a0be450aa26fba->leave($__internal_8f961de11bb9b1bce9cc586e47e070388423e94891a9d3e078a0be450aa26fba_prof);

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
