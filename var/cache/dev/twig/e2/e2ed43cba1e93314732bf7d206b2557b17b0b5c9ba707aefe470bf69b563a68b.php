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
        $__internal_d445eceda5ffc0e4d97f28345583162a1e92243b7b8f857fdf656e3d9469f70b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d445eceda5ffc0e4d97f28345583162a1e92243b7b8f857fdf656e3d9469f70b->enter($__internal_d445eceda5ffc0e4d97f28345583162a1e92243b7b8f857fdf656e3d9469f70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_054acefae7a48760fdabc03e657ff6ab37c9138f4ff75f253aeea3c288b2dd73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054acefae7a48760fdabc03e657ff6ab37c9138f4ff75f253aeea3c288b2dd73->enter($__internal_054acefae7a48760fdabc03e657ff6ab37c9138f4ff75f253aeea3c288b2dd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_d445eceda5ffc0e4d97f28345583162a1e92243b7b8f857fdf656e3d9469f70b->leave($__internal_d445eceda5ffc0e4d97f28345583162a1e92243b7b8f857fdf656e3d9469f70b_prof);

        
        $__internal_054acefae7a48760fdabc03e657ff6ab37c9138f4ff75f253aeea3c288b2dd73->leave($__internal_054acefae7a48760fdabc03e657ff6ab37c9138f4ff75f253aeea3c288b2dd73_prof);

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
