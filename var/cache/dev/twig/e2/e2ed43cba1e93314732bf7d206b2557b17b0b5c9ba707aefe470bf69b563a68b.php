<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f6af28d17ecdfa649a224e8db5d1c8fb1cfc348d35fbbe1007802af197b3056f extends Twig_Template
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
        $__internal_ffa83f57b409b8f4be5cf89faec33020601ba0efbafe91da17dd5f1063fd5dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa83f57b409b8f4be5cf89faec33020601ba0efbafe91da17dd5f1063fd5dba->enter($__internal_ffa83f57b409b8f4be5cf89faec33020601ba0efbafe91da17dd5f1063fd5dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_cf16b376bd1f257c11f77a1fefd9aba714f3aaaab156964337c8bfac093360aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf16b376bd1f257c11f77a1fefd9aba714f3aaaab156964337c8bfac093360aa->enter($__internal_cf16b376bd1f257c11f77a1fefd9aba714f3aaaab156964337c8bfac093360aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ffa83f57b409b8f4be5cf89faec33020601ba0efbafe91da17dd5f1063fd5dba->leave($__internal_ffa83f57b409b8f4be5cf89faec33020601ba0efbafe91da17dd5f1063fd5dba_prof);

        
        $__internal_cf16b376bd1f257c11f77a1fefd9aba714f3aaaab156964337c8bfac093360aa->leave($__internal_cf16b376bd1f257c11f77a1fefd9aba714f3aaaab156964337c8bfac093360aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
