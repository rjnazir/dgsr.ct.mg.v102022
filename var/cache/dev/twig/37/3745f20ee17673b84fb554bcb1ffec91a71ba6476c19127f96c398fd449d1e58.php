<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_afa6e8801631267c98e5adfef1d3ba986c5cf052474a96347cb4ca3b9d315dfe extends Twig_Template
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
        $__internal_3a78700f73a81c4f7d3cbf95edb05e03596657608de89178dff9a9f0a838fbda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a78700f73a81c4f7d3cbf95edb05e03596657608de89178dff9a9f0a838fbda->enter($__internal_3a78700f73a81c4f7d3cbf95edb05e03596657608de89178dff9a9f0a838fbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_3b58af4bc35a6ff4dab3b99c382dd832ab13e27133413e4bbddba502d63ff656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b58af4bc35a6ff4dab3b99c382dd832ab13e27133413e4bbddba502d63ff656->enter($__internal_3b58af4bc35a6ff4dab3b99c382dd832ab13e27133413e4bbddba502d63ff656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_3a78700f73a81c4f7d3cbf95edb05e03596657608de89178dff9a9f0a838fbda->leave($__internal_3a78700f73a81c4f7d3cbf95edb05e03596657608de89178dff9a9f0a838fbda_prof);

        
        $__internal_3b58af4bc35a6ff4dab3b99c382dd832ab13e27133413e4bbddba502d63ff656->leave($__internal_3b58af4bc35a6ff4dab3b99c382dd832ab13e27133413e4bbddba502d63ff656_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
