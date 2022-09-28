<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e39a586884e7d7bcac4ca3818c5a3bdd2c7eda0895224775f212c98e2c240936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8352e3516cc267a8ebd5561268d1ee6d05e26a889528dacaa90fa4d150ca5a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8352e3516cc267a8ebd5561268d1ee6d05e26a889528dacaa90fa4d150ca5a92->enter($__internal_8352e3516cc267a8ebd5561268d1ee6d05e26a889528dacaa90fa4d150ca5a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d72b11724c7834c2e5a3a44ea4e411715f04a34da1454c29e2a30ccae9d516bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72b11724c7834c2e5a3a44ea4e411715f04a34da1454c29e2a30ccae9d516bb->enter($__internal_d72b11724c7834c2e5a3a44ea4e411715f04a34da1454c29e2a30ccae9d516bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8352e3516cc267a8ebd5561268d1ee6d05e26a889528dacaa90fa4d150ca5a92->leave($__internal_8352e3516cc267a8ebd5561268d1ee6d05e26a889528dacaa90fa4d150ca5a92_prof);

        
        $__internal_d72b11724c7834c2e5a3a44ea4e411715f04a34da1454c29e2a30ccae9d516bb->leave($__internal_d72b11724c7834c2e5a3a44ea4e411715f04a34da1454c29e2a30ccae9d516bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a1773005355f4379c4cb397c989d6cfc737ded670c36129c4bcf66cffa64c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1773005355f4379c4cb397c989d6cfc737ded670c36129c4bcf66cffa64c7c->enter($__internal_3a1773005355f4379c4cb397c989d6cfc737ded670c36129c4bcf66cffa64c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0707ff1cc088c1307eb93bb65b2195e6de4e4a2525fcec0951a799d57787d4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0707ff1cc088c1307eb93bb65b2195e6de4e4a2525fcec0951a799d57787d4c1->enter($__internal_0707ff1cc088c1307eb93bb65b2195e6de4e4a2525fcec0951a799d57787d4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0707ff1cc088c1307eb93bb65b2195e6de4e4a2525fcec0951a799d57787d4c1->leave($__internal_0707ff1cc088c1307eb93bb65b2195e6de4e4a2525fcec0951a799d57787d4c1_prof);

        
        $__internal_3a1773005355f4379c4cb397c989d6cfc737ded670c36129c4bcf66cffa64c7c->leave($__internal_3a1773005355f4379c4cb397c989d6cfc737ded670c36129c4bcf66cffa64c7c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_12939ab4294cea89b3e88128adad3c9d374db90fb393686e2e619fe9d6550ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12939ab4294cea89b3e88128adad3c9d374db90fb393686e2e619fe9d6550ca3->enter($__internal_12939ab4294cea89b3e88128adad3c9d374db90fb393686e2e619fe9d6550ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41bc898a20613244bc3923bc665978c8039533432319cdb1600284f6befa0003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bc898a20613244bc3923bc665978c8039533432319cdb1600284f6befa0003->enter($__internal_41bc898a20613244bc3923bc665978c8039533432319cdb1600284f6befa0003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_41bc898a20613244bc3923bc665978c8039533432319cdb1600284f6befa0003->leave($__internal_41bc898a20613244bc3923bc665978c8039533432319cdb1600284f6befa0003_prof);

        
        $__internal_12939ab4294cea89b3e88128adad3c9d374db90fb393686e2e619fe9d6550ca3->leave($__internal_12939ab4294cea89b3e88128adad3c9d374db90fb393686e2e619fe9d6550ca3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
