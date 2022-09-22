<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_92afae8f0a8b2a127401ed5edabf1caa0186b55ffbfe779b077167282bc0889d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efbd7cba4b43f05cbcc1811e04a9cbe37b9d0bc866b6922e4d5eb582bdbf26aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efbd7cba4b43f05cbcc1811e04a9cbe37b9d0bc866b6922e4d5eb582bdbf26aa->enter($__internal_efbd7cba4b43f05cbcc1811e04a9cbe37b9d0bc866b6922e4d5eb582bdbf26aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_63840931694126537f494302f7d4ebd087ddd2c048c080f832b1acbb0cf00282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63840931694126537f494302f7d4ebd087ddd2c048c080f832b1acbb0cf00282->enter($__internal_63840931694126537f494302f7d4ebd087ddd2c048c080f832b1acbb0cf00282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efbd7cba4b43f05cbcc1811e04a9cbe37b9d0bc866b6922e4d5eb582bdbf26aa->leave($__internal_efbd7cba4b43f05cbcc1811e04a9cbe37b9d0bc866b6922e4d5eb582bdbf26aa_prof);

        
        $__internal_63840931694126537f494302f7d4ebd087ddd2c048c080f832b1acbb0cf00282->leave($__internal_63840931694126537f494302f7d4ebd087ddd2c048c080f832b1acbb0cf00282_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_91ddc276c6078179273870d296ea17890e57ec9440506a83bd792e2e65edffad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ddc276c6078179273870d296ea17890e57ec9440506a83bd792e2e65edffad->enter($__internal_91ddc276c6078179273870d296ea17890e57ec9440506a83bd792e2e65edffad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_309cbb12369b60d16bc02fd8e556a988f61385ee4f166303d207235c7b4b59d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309cbb12369b60d16bc02fd8e556a988f61385ee4f166303d207235c7b4b59d2->enter($__internal_309cbb12369b60d16bc02fd8e556a988f61385ee4f166303d207235c7b4b59d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_309cbb12369b60d16bc02fd8e556a988f61385ee4f166303d207235c7b4b59d2->leave($__internal_309cbb12369b60d16bc02fd8e556a988f61385ee4f166303d207235c7b4b59d2_prof);

        
        $__internal_91ddc276c6078179273870d296ea17890e57ec9440506a83bd792e2e65edffad->leave($__internal_91ddc276c6078179273870d296ea17890e57ec9440506a83bd792e2e65edffad_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
