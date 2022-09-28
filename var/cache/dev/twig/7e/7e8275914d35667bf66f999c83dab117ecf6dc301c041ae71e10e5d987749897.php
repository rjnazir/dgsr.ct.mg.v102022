<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9d0a7b504a06ed33cbb58c3f4d800886913892503b5d73ed9769ca07765e836d extends Twig_Template
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
        $__internal_2550300dabb51d0c52e090c6e982b4d6c5295244ba27dbe23f177a74513b606e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2550300dabb51d0c52e090c6e982b4d6c5295244ba27dbe23f177a74513b606e->enter($__internal_2550300dabb51d0c52e090c6e982b4d6c5295244ba27dbe23f177a74513b606e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_23d93e1646e53d4f54849d19bf6e6566ca6c8f32cdd87513dbf28e274c24939c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d93e1646e53d4f54849d19bf6e6566ca6c8f32cdd87513dbf28e274c24939c->enter($__internal_23d93e1646e53d4f54849d19bf6e6566ca6c8f32cdd87513dbf28e274c24939c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2550300dabb51d0c52e090c6e982b4d6c5295244ba27dbe23f177a74513b606e->leave($__internal_2550300dabb51d0c52e090c6e982b4d6c5295244ba27dbe23f177a74513b606e_prof);

        
        $__internal_23d93e1646e53d4f54849d19bf6e6566ca6c8f32cdd87513dbf28e274c24939c->leave($__internal_23d93e1646e53d4f54849d19bf6e6566ca6c8f32cdd87513dbf28e274c24939c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
