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
        $__internal_baf69943b503e5231f6728ef4ce6bd262b45b2565ead6b51d98291da018a332e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baf69943b503e5231f6728ef4ce6bd262b45b2565ead6b51d98291da018a332e->enter($__internal_baf69943b503e5231f6728ef4ce6bd262b45b2565ead6b51d98291da018a332e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_6f41a9005df8739501ac181db5c324422a681d3c1ec418a68c0a58b54cb44c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f41a9005df8739501ac181db5c324422a681d3c1ec418a68c0a58b54cb44c32->enter($__internal_6f41a9005df8739501ac181db5c324422a681d3c1ec418a68c0a58b54cb44c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_baf69943b503e5231f6728ef4ce6bd262b45b2565ead6b51d98291da018a332e->leave($__internal_baf69943b503e5231f6728ef4ce6bd262b45b2565ead6b51d98291da018a332e_prof);

        
        $__internal_6f41a9005df8739501ac181db5c324422a681d3c1ec418a68c0a58b54cb44c32->leave($__internal_6f41a9005df8739501ac181db5c324422a681d3c1ec418a68c0a58b54cb44c32_prof);

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
