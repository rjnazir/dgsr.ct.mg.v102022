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
        $__internal_1ddd7c4d23014a14cccf5ad29c2ff2f5915edb4d5ad17e92deb7ce51beaab2a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ddd7c4d23014a14cccf5ad29c2ff2f5915edb4d5ad17e92deb7ce51beaab2a1->enter($__internal_1ddd7c4d23014a14cccf5ad29c2ff2f5915edb4d5ad17e92deb7ce51beaab2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7d70ffb66e99f44d8eaf8099df527d2a5de0542e50a80c0c1c2c3328be765219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d70ffb66e99f44d8eaf8099df527d2a5de0542e50a80c0c1c2c3328be765219->enter($__internal_7d70ffb66e99f44d8eaf8099df527d2a5de0542e50a80c0c1c2c3328be765219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1ddd7c4d23014a14cccf5ad29c2ff2f5915edb4d5ad17e92deb7ce51beaab2a1->leave($__internal_1ddd7c4d23014a14cccf5ad29c2ff2f5915edb4d5ad17e92deb7ce51beaab2a1_prof);

        
        $__internal_7d70ffb66e99f44d8eaf8099df527d2a5de0542e50a80c0c1c2c3328be765219->leave($__internal_7d70ffb66e99f44d8eaf8099df527d2a5de0542e50a80c0c1c2c3328be765219_prof);

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
