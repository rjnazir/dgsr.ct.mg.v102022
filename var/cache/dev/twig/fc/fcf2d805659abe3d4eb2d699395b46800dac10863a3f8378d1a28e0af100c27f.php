<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_8e877d6b0e8f3845b2f0d971c61978e9cf8b62f05a3cf350477b9fb7fb37669d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b630735475fa73c30ff9b4726122d4e6e56be4ee990fabf5a2133e9d014a398d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b630735475fa73c30ff9b4726122d4e6e56be4ee990fabf5a2133e9d014a398d->enter($__internal_b630735475fa73c30ff9b4726122d4e6e56be4ee990fabf5a2133e9d014a398d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_6392348b33e79e78d33b2c4c28ca560d83a3edf311ac16796b3e47760aacdb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6392348b33e79e78d33b2c4c28ca560d83a3edf311ac16796b3e47760aacdb00->enter($__internal_6392348b33e79e78d33b2c4c28ca560d83a3edf311ac16796b3e47760aacdb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b630735475fa73c30ff9b4726122d4e6e56be4ee990fabf5a2133e9d014a398d->leave($__internal_b630735475fa73c30ff9b4726122d4e6e56be4ee990fabf5a2133e9d014a398d_prof);

        
        $__internal_6392348b33e79e78d33b2c4c28ca560d83a3edf311ac16796b3e47760aacdb00->leave($__internal_6392348b33e79e78d33b2c4c28ca560d83a3edf311ac16796b3e47760aacdb00_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56c2929a6bb248af2a510a954692869ab3bd0746fa2cdab99553793da8224842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c2929a6bb248af2a510a954692869ab3bd0746fa2cdab99553793da8224842->enter($__internal_56c2929a6bb248af2a510a954692869ab3bd0746fa2cdab99553793da8224842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_67d4d53f88b6340ffb110870b1f1e396b7ece07ea12743dd0cb51640c553a6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d4d53f88b6340ffb110870b1f1e396b7ece07ea12743dd0cb51640c553a6d4->enter($__internal_67d4d53f88b6340ffb110870b1f1e396b7ece07ea12743dd0cb51640c553a6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_67d4d53f88b6340ffb110870b1f1e396b7ece07ea12743dd0cb51640c553a6d4->leave($__internal_67d4d53f88b6340ffb110870b1f1e396b7ece07ea12743dd0cb51640c553a6d4_prof);

        
        $__internal_56c2929a6bb248af2a510a954692869ab3bd0746fa2cdab99553793da8224842->leave($__internal_56c2929a6bb248af2a510a954692869ab3bd0746fa2cdab99553793da8224842_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
