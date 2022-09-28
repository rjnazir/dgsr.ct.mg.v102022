<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_cbe9ba73c6344bbeede0232553acff12bab02f5166fcddaf917774492978128d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_a0c6353cf732771032e85186653bef18f4ea8afae222d826890524745dd3cc51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c6353cf732771032e85186653bef18f4ea8afae222d826890524745dd3cc51->enter($__internal_a0c6353cf732771032e85186653bef18f4ea8afae222d826890524745dd3cc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_7d6bea9c33e950465eb88da955a32c6bee7291faaaae126a70d5289598d773e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6bea9c33e950465eb88da955a32c6bee7291faaaae126a70d5289598d773e5->enter($__internal_7d6bea9c33e950465eb88da955a32c6bee7291faaaae126a70d5289598d773e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c6353cf732771032e85186653bef18f4ea8afae222d826890524745dd3cc51->leave($__internal_a0c6353cf732771032e85186653bef18f4ea8afae222d826890524745dd3cc51_prof);

        
        $__internal_7d6bea9c33e950465eb88da955a32c6bee7291faaaae126a70d5289598d773e5->leave($__internal_7d6bea9c33e950465eb88da955a32c6bee7291faaaae126a70d5289598d773e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_861aea007965b64791131521a353ac1e85bca2134f977cfbe5529042c0d02c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861aea007965b64791131521a353ac1e85bca2134f977cfbe5529042c0d02c32->enter($__internal_861aea007965b64791131521a353ac1e85bca2134f977cfbe5529042c0d02c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b3881824ce1e9b41fb0fdfb1fb98b1f0aa30cdf7afff7eb98722bfd1dd8f452f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3881824ce1e9b41fb0fdfb1fb98b1f0aa30cdf7afff7eb98722bfd1dd8f452f->enter($__internal_b3881824ce1e9b41fb0fdfb1fb98b1f0aa30cdf7afff7eb98722bfd1dd8f452f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_b3881824ce1e9b41fb0fdfb1fb98b1f0aa30cdf7afff7eb98722bfd1dd8f452f->leave($__internal_b3881824ce1e9b41fb0fdfb1fb98b1f0aa30cdf7afff7eb98722bfd1dd8f452f_prof);

        
        $__internal_861aea007965b64791131521a353ac1e85bca2134f977cfbe5529042c0d02c32->leave($__internal_861aea007965b64791131521a353ac1e85bca2134f977cfbe5529042c0d02c32_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
