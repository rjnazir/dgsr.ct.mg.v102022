<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f8399bcfba6c21faab5f0f429a83a69d15af92eb4b20b8fa581940386fc3ce2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_71b3e157644b6a686d3cb9f43ad2096c03b7ec09225319ffaa2394853b7a1b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b3e157644b6a686d3cb9f43ad2096c03b7ec09225319ffaa2394853b7a1b49->enter($__internal_71b3e157644b6a686d3cb9f43ad2096c03b7ec09225319ffaa2394853b7a1b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_a1272b8e2be07f54b2dc7b6e7caf9a25d9175010bbc76b67b434665cef1d4aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1272b8e2be07f54b2dc7b6e7caf9a25d9175010bbc76b67b434665cef1d4aa0->enter($__internal_a1272b8e2be07f54b2dc7b6e7caf9a25d9175010bbc76b67b434665cef1d4aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71b3e157644b6a686d3cb9f43ad2096c03b7ec09225319ffaa2394853b7a1b49->leave($__internal_71b3e157644b6a686d3cb9f43ad2096c03b7ec09225319ffaa2394853b7a1b49_prof);

        
        $__internal_a1272b8e2be07f54b2dc7b6e7caf9a25d9175010bbc76b67b434665cef1d4aa0->leave($__internal_a1272b8e2be07f54b2dc7b6e7caf9a25d9175010bbc76b67b434665cef1d4aa0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d90c6d7a3dcc9cbd1c948b335dae2d2c1ac02b56498abba7afcbbd1384744393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90c6d7a3dcc9cbd1c948b335dae2d2c1ac02b56498abba7afcbbd1384744393->enter($__internal_d90c6d7a3dcc9cbd1c948b335dae2d2c1ac02b56498abba7afcbbd1384744393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ef9490a92e6aac47b562d007722d9bc8df1e006a12d3be53e1062b356ac5dcfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9490a92e6aac47b562d007722d9bc8df1e006a12d3be53e1062b356ac5dcfb->enter($__internal_ef9490a92e6aac47b562d007722d9bc8df1e006a12d3be53e1062b356ac5dcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ef9490a92e6aac47b562d007722d9bc8df1e006a12d3be53e1062b356ac5dcfb->leave($__internal_ef9490a92e6aac47b562d007722d9bc8df1e006a12d3be53e1062b356ac5dcfb_prof);

        
        $__internal_d90c6d7a3dcc9cbd1c948b335dae2d2c1ac02b56498abba7afcbbd1384744393->leave($__internal_d90c6d7a3dcc9cbd1c948b335dae2d2c1ac02b56498abba7afcbbd1384744393_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
