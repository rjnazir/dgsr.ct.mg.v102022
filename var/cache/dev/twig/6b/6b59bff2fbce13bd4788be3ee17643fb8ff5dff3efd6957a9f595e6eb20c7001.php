<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f8b51c529e42eb7cd6887d30e8d7a2ccc1935fc831e3daa546fd15d71bc75e38 extends Twig_Template
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
        $__internal_529ae2f4acc0ea40cca3db273161dad9e4a2a24b2dff5d6f6fa7aaf9343ab0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_529ae2f4acc0ea40cca3db273161dad9e4a2a24b2dff5d6f6fa7aaf9343ab0fb->enter($__internal_529ae2f4acc0ea40cca3db273161dad9e4a2a24b2dff5d6f6fa7aaf9343ab0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_08f1c2ce4e238e1c1bdef9d0b286581934a1f6c1980eb5c3de37ef9521e7abd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f1c2ce4e238e1c1bdef9d0b286581934a1f6c1980eb5c3de37ef9521e7abd1->enter($__internal_08f1c2ce4e238e1c1bdef9d0b286581934a1f6c1980eb5c3de37ef9521e7abd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_529ae2f4acc0ea40cca3db273161dad9e4a2a24b2dff5d6f6fa7aaf9343ab0fb->leave($__internal_529ae2f4acc0ea40cca3db273161dad9e4a2a24b2dff5d6f6fa7aaf9343ab0fb_prof);

        
        $__internal_08f1c2ce4e238e1c1bdef9d0b286581934a1f6c1980eb5c3de37ef9521e7abd1->leave($__internal_08f1c2ce4e238e1c1bdef9d0b286581934a1f6c1980eb5c3de37ef9521e7abd1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
