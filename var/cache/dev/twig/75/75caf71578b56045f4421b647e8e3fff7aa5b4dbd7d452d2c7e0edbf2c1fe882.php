<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b3f406bf8d26184fec706c30f910a55b0cbae561cbd4f4098fadf5417d91d001 extends Twig_Template
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
        $__internal_f61094887b55cdbd687304826b22a89309dbdcff2f9e4972e5667a1c91d52e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61094887b55cdbd687304826b22a89309dbdcff2f9e4972e5667a1c91d52e4d->enter($__internal_f61094887b55cdbd687304826b22a89309dbdcff2f9e4972e5667a1c91d52e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_37003dfb24bcf17e4d3c075e032f57f03ea037e16f941aa0bc3c3419bba5dcdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37003dfb24bcf17e4d3c075e032f57f03ea037e16f941aa0bc3c3419bba5dcdf->enter($__internal_37003dfb24bcf17e4d3c075e032f57f03ea037e16f941aa0bc3c3419bba5dcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f61094887b55cdbd687304826b22a89309dbdcff2f9e4972e5667a1c91d52e4d->leave($__internal_f61094887b55cdbd687304826b22a89309dbdcff2f9e4972e5667a1c91d52e4d_prof);

        
        $__internal_37003dfb24bcf17e4d3c075e032f57f03ea037e16f941aa0bc3c3419bba5dcdf->leave($__internal_37003dfb24bcf17e4d3c075e032f57f03ea037e16f941aa0bc3c3419bba5dcdf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
