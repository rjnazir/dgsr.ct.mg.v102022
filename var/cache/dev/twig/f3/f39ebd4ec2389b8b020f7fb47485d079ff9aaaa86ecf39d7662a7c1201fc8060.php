<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_8dab7221036ae70db1bd2ea443c93412caaccc660e3adc0dd3692f83265ef64b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00e2d9b52e126cb3b70e895dc2d0d7c12c3b5c935717a410a0c9fd3fec97102c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e2d9b52e126cb3b70e895dc2d0d7c12c3b5c935717a410a0c9fd3fec97102c->enter($__internal_00e2d9b52e126cb3b70e895dc2d0d7c12c3b5c935717a410a0c9fd3fec97102c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_be77967032323c01458155d4a80d9eb70b77be86c795088ed04655854474ff9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be77967032323c01458155d4a80d9eb70b77be86c795088ed04655854474ff9b->enter($__internal_be77967032323c01458155d4a80d9eb70b77be86c795088ed04655854474ff9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_00e2d9b52e126cb3b70e895dc2d0d7c12c3b5c935717a410a0c9fd3fec97102c->leave($__internal_00e2d9b52e126cb3b70e895dc2d0d7c12c3b5c935717a410a0c9fd3fec97102c_prof);

        
        $__internal_be77967032323c01458155d4a80d9eb70b77be86c795088ed04655854474ff9b->leave($__internal_be77967032323c01458155d4a80d9eb70b77be86c795088ed04655854474ff9b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
