<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_6bb3bfd00a79c43df9b3dbe2aa9fcdb5ba48dac21fcbb6ac35f194c1952c8505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_7ce0eb4fa35a0decd3753e737e4c5bfab69cee833387a77a51f793cb05bd1e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce0eb4fa35a0decd3753e737e4c5bfab69cee833387a77a51f793cb05bd1e28->enter($__internal_7ce0eb4fa35a0decd3753e737e4c5bfab69cee833387a77a51f793cb05bd1e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_228382e9a05d37dad07593a27541a73aa7b6fe1a8d0721003f5eb36af30976a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228382e9a05d37dad07593a27541a73aa7b6fe1a8d0721003f5eb36af30976a8->enter($__internal_228382e9a05d37dad07593a27541a73aa7b6fe1a8d0721003f5eb36af30976a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ce0eb4fa35a0decd3753e737e4c5bfab69cee833387a77a51f793cb05bd1e28->leave($__internal_7ce0eb4fa35a0decd3753e737e4c5bfab69cee833387a77a51f793cb05bd1e28_prof);

        
        $__internal_228382e9a05d37dad07593a27541a73aa7b6fe1a8d0721003f5eb36af30976a8->leave($__internal_228382e9a05d37dad07593a27541a73aa7b6fe1a8d0721003f5eb36af30976a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1989f16f68e46feae972207e1dff3e360daff4b56e001f3ea867507ee76ab457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1989f16f68e46feae972207e1dff3e360daff4b56e001f3ea867507ee76ab457->enter($__internal_1989f16f68e46feae972207e1dff3e360daff4b56e001f3ea867507ee76ab457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4f309f6397c8f8bea89038281646390fd75e68dd208baf01d82b89e932bc7c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f309f6397c8f8bea89038281646390fd75e68dd208baf01d82b89e932bc7c98->enter($__internal_4f309f6397c8f8bea89038281646390fd75e68dd208baf01d82b89e932bc7c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4f309f6397c8f8bea89038281646390fd75e68dd208baf01d82b89e932bc7c98->leave($__internal_4f309f6397c8f8bea89038281646390fd75e68dd208baf01d82b89e932bc7c98_prof);

        
        $__internal_1989f16f68e46feae972207e1dff3e360daff4b56e001f3ea867507ee76ab457->leave($__internal_1989f16f68e46feae972207e1dff3e360daff4b56e001f3ea867507ee76ab457_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
