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
        $__internal_4dd65d05bacdafcec77af04f8701a470fb55fcc6676a16a43b80da27dd978742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd65d05bacdafcec77af04f8701a470fb55fcc6676a16a43b80da27dd978742->enter($__internal_4dd65d05bacdafcec77af04f8701a470fb55fcc6676a16a43b80da27dd978742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_11e6d7a2d0212a17f17b21ee97be32b251eeeb2bae134e320de40b9b2855cfe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e6d7a2d0212a17f17b21ee97be32b251eeeb2bae134e320de40b9b2855cfe0->enter($__internal_11e6d7a2d0212a17f17b21ee97be32b251eeeb2bae134e320de40b9b2855cfe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dd65d05bacdafcec77af04f8701a470fb55fcc6676a16a43b80da27dd978742->leave($__internal_4dd65d05bacdafcec77af04f8701a470fb55fcc6676a16a43b80da27dd978742_prof);

        
        $__internal_11e6d7a2d0212a17f17b21ee97be32b251eeeb2bae134e320de40b9b2855cfe0->leave($__internal_11e6d7a2d0212a17f17b21ee97be32b251eeeb2bae134e320de40b9b2855cfe0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_108b8d447a8dbd5281310dba4d1ab204d7326c8d7c2f5a90db50ca2ad7fccd50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108b8d447a8dbd5281310dba4d1ab204d7326c8d7c2f5a90db50ca2ad7fccd50->enter($__internal_108b8d447a8dbd5281310dba4d1ab204d7326c8d7c2f5a90db50ca2ad7fccd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1ad89b33d78b022386c7df2650d1737760630af788af876cb0006c72280896ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad89b33d78b022386c7df2650d1737760630af788af876cb0006c72280896ce->enter($__internal_1ad89b33d78b022386c7df2650d1737760630af788af876cb0006c72280896ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1ad89b33d78b022386c7df2650d1737760630af788af876cb0006c72280896ce->leave($__internal_1ad89b33d78b022386c7df2650d1737760630af788af876cb0006c72280896ce_prof);

        
        $__internal_108b8d447a8dbd5281310dba4d1ab204d7326c8d7c2f5a90db50ca2ad7fccd50->leave($__internal_108b8d447a8dbd5281310dba4d1ab204d7326c8d7c2f5a90db50ca2ad7fccd50_prof);

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
