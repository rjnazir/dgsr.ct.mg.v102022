<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_6bd083a3e7153f23bb055cc9e217a58e44ac11d87acdcd0eb202409444568d1b extends Twig_Template
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
        $__internal_41cdb06cc8b7991e771772663a6c0c08eb109a1ec7ef8034c94dbb30ff05745a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41cdb06cc8b7991e771772663a6c0c08eb109a1ec7ef8034c94dbb30ff05745a->enter($__internal_41cdb06cc8b7991e771772663a6c0c08eb109a1ec7ef8034c94dbb30ff05745a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_517bbbf1d29fd3a1b30d2966b65124f10ecd858e1e6e3c858c3ea282ab11aa7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517bbbf1d29fd3a1b30d2966b65124f10ecd858e1e6e3c858c3ea282ab11aa7d->enter($__internal_517bbbf1d29fd3a1b30d2966b65124f10ecd858e1e6e3c858c3ea282ab11aa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_41cdb06cc8b7991e771772663a6c0c08eb109a1ec7ef8034c94dbb30ff05745a->leave($__internal_41cdb06cc8b7991e771772663a6c0c08eb109a1ec7ef8034c94dbb30ff05745a_prof);

        
        $__internal_517bbbf1d29fd3a1b30d2966b65124f10ecd858e1e6e3c858c3ea282ab11aa7d->leave($__internal_517bbbf1d29fd3a1b30d2966b65124f10ecd858e1e6e3c858c3ea282ab11aa7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
