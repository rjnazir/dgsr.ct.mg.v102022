<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_25a6653de881eadf4b62b073247cfa6413bcbb843589387422cbf9c2a66ab0ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_f4ee49033349360348dd27d19900e7a2ec6f41a9ff166d760ba5074f202d2378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ee49033349360348dd27d19900e7a2ec6f41a9ff166d760ba5074f202d2378->enter($__internal_f4ee49033349360348dd27d19900e7a2ec6f41a9ff166d760ba5074f202d2378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_7322a6e7715f09cb8d24705d21635d8bcb6d78106d6284633725d2f76323a30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7322a6e7715f09cb8d24705d21635d8bcb6d78106d6284633725d2f76323a30e->enter($__internal_7322a6e7715f09cb8d24705d21635d8bcb6d78106d6284633725d2f76323a30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4ee49033349360348dd27d19900e7a2ec6f41a9ff166d760ba5074f202d2378->leave($__internal_f4ee49033349360348dd27d19900e7a2ec6f41a9ff166d760ba5074f202d2378_prof);

        
        $__internal_7322a6e7715f09cb8d24705d21635d8bcb6d78106d6284633725d2f76323a30e->leave($__internal_7322a6e7715f09cb8d24705d21635d8bcb6d78106d6284633725d2f76323a30e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6aa8ce679e3c080fc75b002544f7b800c87abeaa87fc2b41c29eb0069f06884e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa8ce679e3c080fc75b002544f7b800c87abeaa87fc2b41c29eb0069f06884e->enter($__internal_6aa8ce679e3c080fc75b002544f7b800c87abeaa87fc2b41c29eb0069f06884e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7fad4ad9a315d157bccf46a7f20a51ae10ed0e712fbe80b56d6d068428f66325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fad4ad9a315d157bccf46a7f20a51ae10ed0e712fbe80b56d6d068428f66325->enter($__internal_7fad4ad9a315d157bccf46a7f20a51ae10ed0e712fbe80b56d6d068428f66325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_7fad4ad9a315d157bccf46a7f20a51ae10ed0e712fbe80b56d6d068428f66325->leave($__internal_7fad4ad9a315d157bccf46a7f20a51ae10ed0e712fbe80b56d6d068428f66325_prof);

        
        $__internal_6aa8ce679e3c080fc75b002544f7b800c87abeaa87fc2b41c29eb0069f06884e->leave($__internal_6aa8ce679e3c080fc75b002544f7b800c87abeaa87fc2b41c29eb0069f06884e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
