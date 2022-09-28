<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f6ef0502d79c1a25b39ca87e677ea4c396c574714760518031dfa95c4be6da7e extends Twig_Template
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
        $__internal_2c2dbd8359205499fc6e1cce69ab2313667e7dd47b592ec63f7197f75fff0ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2dbd8359205499fc6e1cce69ab2313667e7dd47b592ec63f7197f75fff0ff3->enter($__internal_2c2dbd8359205499fc6e1cce69ab2313667e7dd47b592ec63f7197f75fff0ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e4b4e9a030f6d2b7edae4e77168a598db8fd6e949c8ce0f1f91e1019ec33a636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b4e9a030f6d2b7edae4e77168a598db8fd6e949c8ce0f1f91e1019ec33a636->enter($__internal_e4b4e9a030f6d2b7edae4e77168a598db8fd6e949c8ce0f1f91e1019ec33a636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2c2dbd8359205499fc6e1cce69ab2313667e7dd47b592ec63f7197f75fff0ff3->leave($__internal_2c2dbd8359205499fc6e1cce69ab2313667e7dd47b592ec63f7197f75fff0ff3_prof);

        
        $__internal_e4b4e9a030f6d2b7edae4e77168a598db8fd6e949c8ce0f1f91e1019ec33a636->leave($__internal_e4b4e9a030f6d2b7edae4e77168a598db8fd6e949c8ce0f1f91e1019ec33a636_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
