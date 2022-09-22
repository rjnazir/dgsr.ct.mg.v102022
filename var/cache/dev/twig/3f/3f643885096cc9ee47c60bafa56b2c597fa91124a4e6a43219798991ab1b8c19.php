<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_90079af311f02986fff44bbbe0fc13b3d29e77789cd6ea72f5d685693773b7c3 extends Twig_Template
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
        $__internal_107966cd2544fffcf828ef5fe15d435c81e290caee75a2208e6cfd3e3ee95453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107966cd2544fffcf828ef5fe15d435c81e290caee75a2208e6cfd3e3ee95453->enter($__internal_107966cd2544fffcf828ef5fe15d435c81e290caee75a2208e6cfd3e3ee95453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_dd282cb99158127b127a5c7b68e1c4ec81348025f25d40e0b810e10fb2ba0d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd282cb99158127b127a5c7b68e1c4ec81348025f25d40e0b810e10fb2ba0d53->enter($__internal_dd282cb99158127b127a5c7b68e1c4ec81348025f25d40e0b810e10fb2ba0d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_107966cd2544fffcf828ef5fe15d435c81e290caee75a2208e6cfd3e3ee95453->leave($__internal_107966cd2544fffcf828ef5fe15d435c81e290caee75a2208e6cfd3e3ee95453_prof);

        
        $__internal_dd282cb99158127b127a5c7b68e1c4ec81348025f25d40e0b810e10fb2ba0d53->leave($__internal_dd282cb99158127b127a5c7b68e1c4ec81348025f25d40e0b810e10fb2ba0d53_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
", "@WebProfiler/Collector/exception.css.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
