<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8ed685b12919ee7f79624f546623d865b352dd41f094e5ddd359a3ea5e1e6915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_e1f618f111250a912a79484c8570b33ad4c7070d7c335695ddec77808283bc06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f618f111250a912a79484c8570b33ad4c7070d7c335695ddec77808283bc06->enter($__internal_e1f618f111250a912a79484c8570b33ad4c7070d7c335695ddec77808283bc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_b161cf69c03d882ea5bbce04b6a6c824113341e5db955b111df65b672a58ec9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b161cf69c03d882ea5bbce04b6a6c824113341e5db955b111df65b672a58ec9d->enter($__internal_b161cf69c03d882ea5bbce04b6a6c824113341e5db955b111df65b672a58ec9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1f618f111250a912a79484c8570b33ad4c7070d7c335695ddec77808283bc06->leave($__internal_e1f618f111250a912a79484c8570b33ad4c7070d7c335695ddec77808283bc06_prof);

        
        $__internal_b161cf69c03d882ea5bbce04b6a6c824113341e5db955b111df65b672a58ec9d->leave($__internal_b161cf69c03d882ea5bbce04b6a6c824113341e5db955b111df65b672a58ec9d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a14ced3e92139fda0e6e9188d7eb5a5135e3b93aaa5674bbb9c046872a3e276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a14ced3e92139fda0e6e9188d7eb5a5135e3b93aaa5674bbb9c046872a3e276->enter($__internal_6a14ced3e92139fda0e6e9188d7eb5a5135e3b93aaa5674bbb9c046872a3e276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9522f0f716272feef7a568d15c45f4f996a10be6f8496f8b38c0b8a1f3ff4459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9522f0f716272feef7a568d15c45f4f996a10be6f8496f8b38c0b8a1f3ff4459->enter($__internal_9522f0f716272feef7a568d15c45f4f996a10be6f8496f8b38c0b8a1f3ff4459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9522f0f716272feef7a568d15c45f4f996a10be6f8496f8b38c0b8a1f3ff4459->leave($__internal_9522f0f716272feef7a568d15c45f4f996a10be6f8496f8b38c0b8a1f3ff4459_prof);

        
        $__internal_6a14ced3e92139fda0e6e9188d7eb5a5135e3b93aaa5674bbb9c046872a3e276->leave($__internal_6a14ced3e92139fda0e6e9188d7eb5a5135e3b93aaa5674bbb9c046872a3e276_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
