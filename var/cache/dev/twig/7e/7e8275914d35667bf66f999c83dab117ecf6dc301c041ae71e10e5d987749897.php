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
        $__internal_7471c932f08cce2e54f9ab42dc2266181ef209294607f69afc9962a5485b1e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7471c932f08cce2e54f9ab42dc2266181ef209294607f69afc9962a5485b1e26->enter($__internal_7471c932f08cce2e54f9ab42dc2266181ef209294607f69afc9962a5485b1e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_4868a016b4adf3745d18e64bd84e14423fc0495672d47d00dfd5f6970b1dfed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4868a016b4adf3745d18e64bd84e14423fc0495672d47d00dfd5f6970b1dfed8->enter($__internal_4868a016b4adf3745d18e64bd84e14423fc0495672d47d00dfd5f6970b1dfed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7471c932f08cce2e54f9ab42dc2266181ef209294607f69afc9962a5485b1e26->leave($__internal_7471c932f08cce2e54f9ab42dc2266181ef209294607f69afc9962a5485b1e26_prof);

        
        $__internal_4868a016b4adf3745d18e64bd84e14423fc0495672d47d00dfd5f6970b1dfed8->leave($__internal_4868a016b4adf3745d18e64bd84e14423fc0495672d47d00dfd5f6970b1dfed8_prof);

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
