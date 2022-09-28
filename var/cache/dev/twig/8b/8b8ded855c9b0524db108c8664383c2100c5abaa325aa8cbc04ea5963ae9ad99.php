<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f729d2d68e7df8f235a86511b8dc6d5979c27d0bc7806f5a5764e6878f07abfe extends Twig_Template
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
        $__internal_0df81e3c788e51a29558f96c7ef5800e292c260ea1a9afaf3778d1f42b16dc94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df81e3c788e51a29558f96c7ef5800e292c260ea1a9afaf3778d1f42b16dc94->enter($__internal_0df81e3c788e51a29558f96c7ef5800e292c260ea1a9afaf3778d1f42b16dc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_88234ebe6f8e9fb6eae8b7ade9e644b7b3c4de8b3af62002b29da1c1e92668e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88234ebe6f8e9fb6eae8b7ade9e644b7b3c4de8b3af62002b29da1c1e92668e2->enter($__internal_88234ebe6f8e9fb6eae8b7ade9e644b7b3c4de8b3af62002b29da1c1e92668e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0df81e3c788e51a29558f96c7ef5800e292c260ea1a9afaf3778d1f42b16dc94->leave($__internal_0df81e3c788e51a29558f96c7ef5800e292c260ea1a9afaf3778d1f42b16dc94_prof);

        
        $__internal_88234ebe6f8e9fb6eae8b7ade9e644b7b3c4de8b3af62002b29da1c1e92668e2->leave($__internal_88234ebe6f8e9fb6eae8b7ade9e644b7b3c4de8b3af62002b29da1c1e92668e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
