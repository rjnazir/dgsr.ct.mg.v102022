<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_f1c83555249c4dbdddb7af832c836fb81af8871927f251753a1318a79197cdb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_60c9feefc26081f86c02a7b7c3d19a6f7fa1d5ced5ae7093743b801bbba75d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c9feefc26081f86c02a7b7c3d19a6f7fa1d5ced5ae7093743b801bbba75d09->enter($__internal_60c9feefc26081f86c02a7b7c3d19a6f7fa1d5ced5ae7093743b801bbba75d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_4a427a6f300bae6746e53a5be322dffd697889fa66228c26cc0076778b705d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a427a6f300bae6746e53a5be322dffd697889fa66228c26cc0076778b705d1d->enter($__internal_4a427a6f300bae6746e53a5be322dffd697889fa66228c26cc0076778b705d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60c9feefc26081f86c02a7b7c3d19a6f7fa1d5ced5ae7093743b801bbba75d09->leave($__internal_60c9feefc26081f86c02a7b7c3d19a6f7fa1d5ced5ae7093743b801bbba75d09_prof);

        
        $__internal_4a427a6f300bae6746e53a5be322dffd697889fa66228c26cc0076778b705d1d->leave($__internal_4a427a6f300bae6746e53a5be322dffd697889fa66228c26cc0076778b705d1d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7efa1fc4bedce5c65a5af955a23464a95fd2427ec1739680946156a4306f138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7efa1fc4bedce5c65a5af955a23464a95fd2427ec1739680946156a4306f138->enter($__internal_f7efa1fc4bedce5c65a5af955a23464a95fd2427ec1739680946156a4306f138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_168a641e14287dbd123b3f0bc3a7748a9fe15ac5af76de585ce238a1a5dc2971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168a641e14287dbd123b3f0bc3a7748a9fe15ac5af76de585ce238a1a5dc2971->enter($__internal_168a641e14287dbd123b3f0bc3a7748a9fe15ac5af76de585ce238a1a5dc2971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_168a641e14287dbd123b3f0bc3a7748a9fe15ac5af76de585ce238a1a5dc2971->leave($__internal_168a641e14287dbd123b3f0bc3a7748a9fe15ac5af76de585ce238a1a5dc2971_prof);

        
        $__internal_f7efa1fc4bedce5c65a5af955a23464a95fd2427ec1739680946156a4306f138->leave($__internal_f7efa1fc4bedce5c65a5af955a23464a95fd2427ec1739680946156a4306f138_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
", "@FOSUser/Group/show.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
