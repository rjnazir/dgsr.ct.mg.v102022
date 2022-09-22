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
        $__internal_6963e32c976346a6a20e0011501b0a2fafb9b652bddbd848a976912b754f7ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6963e32c976346a6a20e0011501b0a2fafb9b652bddbd848a976912b754f7ed4->enter($__internal_6963e32c976346a6a20e0011501b0a2fafb9b652bddbd848a976912b754f7ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_e0b01ca2039faef565271b28a83b2905f904692828d4aba43b8128f6050678b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b01ca2039faef565271b28a83b2905f904692828d4aba43b8128f6050678b8->enter($__internal_e0b01ca2039faef565271b28a83b2905f904692828d4aba43b8128f6050678b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6963e32c976346a6a20e0011501b0a2fafb9b652bddbd848a976912b754f7ed4->leave($__internal_6963e32c976346a6a20e0011501b0a2fafb9b652bddbd848a976912b754f7ed4_prof);

        
        $__internal_e0b01ca2039faef565271b28a83b2905f904692828d4aba43b8128f6050678b8->leave($__internal_e0b01ca2039faef565271b28a83b2905f904692828d4aba43b8128f6050678b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db8ec2502cc9f7cbf6339cb0aa271836657f40a85a73c90bee1368de58978f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8ec2502cc9f7cbf6339cb0aa271836657f40a85a73c90bee1368de58978f4f->enter($__internal_db8ec2502cc9f7cbf6339cb0aa271836657f40a85a73c90bee1368de58978f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c3442cd6edabd31cd839f50fe849802caa85723cd1dc01e8ca6d1b7c13c69f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3442cd6edabd31cd839f50fe849802caa85723cd1dc01e8ca6d1b7c13c69f7e->enter($__internal_c3442cd6edabd31cd839f50fe849802caa85723cd1dc01e8ca6d1b7c13c69f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c3442cd6edabd31cd839f50fe849802caa85723cd1dc01e8ca6d1b7c13c69f7e->leave($__internal_c3442cd6edabd31cd839f50fe849802caa85723cd1dc01e8ca6d1b7c13c69f7e_prof);

        
        $__internal_db8ec2502cc9f7cbf6339cb0aa271836657f40a85a73c90bee1368de58978f4f->leave($__internal_db8ec2502cc9f7cbf6339cb0aa271836657f40a85a73c90bee1368de58978f4f_prof);

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
