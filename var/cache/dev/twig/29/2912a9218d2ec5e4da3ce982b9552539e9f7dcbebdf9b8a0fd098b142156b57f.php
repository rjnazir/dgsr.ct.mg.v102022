<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_dc9a42abb66780db973ea4d7e31af744f30f1a8886c7e1636ee2fd9816569aef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_209e0893b43be868fe7307d955360963703c6ee452b04dde0b14cd0b630f27bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209e0893b43be868fe7307d955360963703c6ee452b04dde0b14cd0b630f27bf->enter($__internal_209e0893b43be868fe7307d955360963703c6ee452b04dde0b14cd0b630f27bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_e04d8731a6d9e6334941ccae10961313498d02e076b450161c74eb39af03bf93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04d8731a6d9e6334941ccae10961313498d02e076b450161c74eb39af03bf93->enter($__internal_e04d8731a6d9e6334941ccae10961313498d02e076b450161c74eb39af03bf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_209e0893b43be868fe7307d955360963703c6ee452b04dde0b14cd0b630f27bf->leave($__internal_209e0893b43be868fe7307d955360963703c6ee452b04dde0b14cd0b630f27bf_prof);

        
        $__internal_e04d8731a6d9e6334941ccae10961313498d02e076b450161c74eb39af03bf93->leave($__internal_e04d8731a6d9e6334941ccae10961313498d02e076b450161c74eb39af03bf93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d848ea5b37e0654227f5114ef9f3fc1fa022d74d2188f761adb40278572de3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d848ea5b37e0654227f5114ef9f3fc1fa022d74d2188f761adb40278572de3c->enter($__internal_4d848ea5b37e0654227f5114ef9f3fc1fa022d74d2188f761adb40278572de3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_072205d4f04eacd74ff2d57c5bc316da1174ed14d992d36eda43c6a740023554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072205d4f04eacd74ff2d57c5bc316da1174ed14d992d36eda43c6a740023554->enter($__internal_072205d4f04eacd74ff2d57c5bc316da1174ed14d992d36eda43c6a740023554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_072205d4f04eacd74ff2d57c5bc316da1174ed14d992d36eda43c6a740023554->leave($__internal_072205d4f04eacd74ff2d57c5bc316da1174ed14d992d36eda43c6a740023554_prof);

        
        $__internal_4d848ea5b37e0654227f5114ef9f3fc1fa022d74d2188f761adb40278572de3c->leave($__internal_4d848ea5b37e0654227f5114ef9f3fc1fa022d74d2188f761adb40278572de3c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
