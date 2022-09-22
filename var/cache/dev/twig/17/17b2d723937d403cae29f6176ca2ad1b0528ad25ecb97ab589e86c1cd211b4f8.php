<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fdc0ad33c757d100881b6560895d75a69b22aae1866987818cb7db44d9ef5ac8 extends Twig_Template
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
        $__internal_eae02155a1219a8e08917decb364464d7fd5d0089b174c558e69b0d336a68aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae02155a1219a8e08917decb364464d7fd5d0089b174c558e69b0d336a68aa5->enter($__internal_eae02155a1219a8e08917decb364464d7fd5d0089b174c558e69b0d336a68aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f08061e33f9b330b06deabc4644e83e7096c13938bed10da471c4029e13c59d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08061e33f9b330b06deabc4644e83e7096c13938bed10da471c4029e13c59d9->enter($__internal_f08061e33f9b330b06deabc4644e83e7096c13938bed10da471c4029e13c59d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_eae02155a1219a8e08917decb364464d7fd5d0089b174c558e69b0d336a68aa5->leave($__internal_eae02155a1219a8e08917decb364464d7fd5d0089b174c558e69b0d336a68aa5_prof);

        
        $__internal_f08061e33f9b330b06deabc4644e83e7096c13938bed10da471c4029e13c59d9->leave($__internal_f08061e33f9b330b06deabc4644e83e7096c13938bed10da471c4029e13c59d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
