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
        $__internal_cc08ca8380ccb201689d84a064859da837498db66c1fe85b6eef0e6d0a067bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc08ca8380ccb201689d84a064859da837498db66c1fe85b6eef0e6d0a067bf7->enter($__internal_cc08ca8380ccb201689d84a064859da837498db66c1fe85b6eef0e6d0a067bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_19362acbd5bd1f33bcfc61b78a031a87f1d51b137d6a952ab89dcf7ca332c246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19362acbd5bd1f33bcfc61b78a031a87f1d51b137d6a952ab89dcf7ca332c246->enter($__internal_19362acbd5bd1f33bcfc61b78a031a87f1d51b137d6a952ab89dcf7ca332c246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc08ca8380ccb201689d84a064859da837498db66c1fe85b6eef0e6d0a067bf7->leave($__internal_cc08ca8380ccb201689d84a064859da837498db66c1fe85b6eef0e6d0a067bf7_prof);

        
        $__internal_19362acbd5bd1f33bcfc61b78a031a87f1d51b137d6a952ab89dcf7ca332c246->leave($__internal_19362acbd5bd1f33bcfc61b78a031a87f1d51b137d6a952ab89dcf7ca332c246_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a50aff1bb288c6c513728cd11df3bfbfbe4eb77fff8a348f026adf7d61178be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50aff1bb288c6c513728cd11df3bfbfbe4eb77fff8a348f026adf7d61178be0->enter($__internal_a50aff1bb288c6c513728cd11df3bfbfbe4eb77fff8a348f026adf7d61178be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32fe9f7010580a28201435bab7673b6bd3de4dec638b81258839664ebcb821dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fe9f7010580a28201435bab7673b6bd3de4dec638b81258839664ebcb821dd->enter($__internal_32fe9f7010580a28201435bab7673b6bd3de4dec638b81258839664ebcb821dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 500 ";
        
        $__internal_32fe9f7010580a28201435bab7673b6bd3de4dec638b81258839664ebcb821dd->leave($__internal_32fe9f7010580a28201435bab7673b6bd3de4dec638b81258839664ebcb821dd_prof);

        
        $__internal_a50aff1bb288c6c513728cd11df3bfbfbe4eb77fff8a348f026adf7d61178be0->leave($__internal_a50aff1bb288c6c513728cd11df3bfbfbe4eb77fff8a348f026adf7d61178be0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8db10aee5e8220b7acee26c3c0a0deb19dd1efb031ba628eca9a24ee7caccfad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db10aee5e8220b7acee26c3c0a0deb19dd1efb031ba628eca9a24ee7caccfad->enter($__internal_8db10aee5e8220b7acee26c3c0a0deb19dd1efb031ba628eca9a24ee7caccfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4af54112a338366e56e8ba779eb588a9bd23b219050e8ce3a4d1fa9aa13ed05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4af54112a338366e56e8ba779eb588a9bd23b219050e8ce3a4d1fa9aa13ed05->enter($__internal_b4af54112a338366e56e8ba779eb588a9bd23b219050e8ce3a4d1fa9aa13ed05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b4af54112a338366e56e8ba779eb588a9bd23b219050e8ce3a4d1fa9aa13ed05->leave($__internal_b4af54112a338366e56e8ba779eb588a9bd23b219050e8ce3a4d1fa9aa13ed05_prof);

        
        $__internal_8db10aee5e8220b7acee26c3c0a0deb19dd1efb031ba628eca9a24ee7caccfad->leave($__internal_8db10aee5e8220b7acee26c3c0a0deb19dd1efb031ba628eca9a24ee7caccfad_prof);

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
