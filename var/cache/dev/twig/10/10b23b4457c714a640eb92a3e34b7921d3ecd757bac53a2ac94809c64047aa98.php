<?php

/* base.html.twig */
class __TwigTemplate_820014a7d11e5630f7b8f96636ab25f9df9e043eb564847d32007105b80be4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5500767be10a1e33bf80ea8c81879621df97731528f9a74369c02c15867421be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5500767be10a1e33bf80ea8c81879621df97731528f9a74369c02c15867421be->enter($__internal_5500767be10a1e33bf80ea8c81879621df97731528f9a74369c02c15867421be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d7d61f5a7935222664974f43f9a8c9da33bc7d9c24bb4d9d66c697c73e8f4ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d61f5a7935222664974f43f9a8c9da33bc7d9c24bb4d9d66c697c73e8f4ba4->enter($__internal_d7d61f5a7935222664974f43f9a8c9da33bc7d9c24bb4d9d66c697c73e8f4ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5500767be10a1e33bf80ea8c81879621df97731528f9a74369c02c15867421be->leave($__internal_5500767be10a1e33bf80ea8c81879621df97731528f9a74369c02c15867421be_prof);

        
        $__internal_d7d61f5a7935222664974f43f9a8c9da33bc7d9c24bb4d9d66c697c73e8f4ba4->leave($__internal_d7d61f5a7935222664974f43f9a8c9da33bc7d9c24bb4d9d66c697c73e8f4ba4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d23f5bb24082a82d481ad4bd1aac0a59103e6d537a46d1305521ff3d6fe40a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d23f5bb24082a82d481ad4bd1aac0a59103e6d537a46d1305521ff3d6fe40a8->enter($__internal_9d23f5bb24082a82d481ad4bd1aac0a59103e6d537a46d1305521ff3d6fe40a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4af137d8b5528868cb4030ecf81d99f9128d678ee3f536bb1e5a6c6ec96eab3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af137d8b5528868cb4030ecf81d99f9128d678ee3f536bb1e5a6c6ec96eab3d->enter($__internal_4af137d8b5528868cb4030ecf81d99f9128d678ee3f536bb1e5a6c6ec96eab3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4af137d8b5528868cb4030ecf81d99f9128d678ee3f536bb1e5a6c6ec96eab3d->leave($__internal_4af137d8b5528868cb4030ecf81d99f9128d678ee3f536bb1e5a6c6ec96eab3d_prof);

        
        $__internal_9d23f5bb24082a82d481ad4bd1aac0a59103e6d537a46d1305521ff3d6fe40a8->leave($__internal_9d23f5bb24082a82d481ad4bd1aac0a59103e6d537a46d1305521ff3d6fe40a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc0054cedcfb791870f319457332e04222694d290b08ef43b91902992a2a1ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0054cedcfb791870f319457332e04222694d290b08ef43b91902992a2a1ecd->enter($__internal_fc0054cedcfb791870f319457332e04222694d290b08ef43b91902992a2a1ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1b51ef543fd1e4da85d231de90699286d509c249f0c6086a4af3f15ba48e8e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b51ef543fd1e4da85d231de90699286d509c249f0c6086a4af3f15ba48e8e59->enter($__internal_1b51ef543fd1e4da85d231de90699286d509c249f0c6086a4af3f15ba48e8e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1b51ef543fd1e4da85d231de90699286d509c249f0c6086a4af3f15ba48e8e59->leave($__internal_1b51ef543fd1e4da85d231de90699286d509c249f0c6086a4af3f15ba48e8e59_prof);

        
        $__internal_fc0054cedcfb791870f319457332e04222694d290b08ef43b91902992a2a1ecd->leave($__internal_fc0054cedcfb791870f319457332e04222694d290b08ef43b91902992a2a1ecd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fdd8bb9bb5afd040f71a07f59bd0ae8bc973e9853911dd1a56ab959f1d272ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fdd8bb9bb5afd040f71a07f59bd0ae8bc973e9853911dd1a56ab959f1d272ed->enter($__internal_9fdd8bb9bb5afd040f71a07f59bd0ae8bc973e9853911dd1a56ab959f1d272ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_feaf0b6bf9d8670eef81b86fdd1a329b73cfb69acea234456166736b506c5597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feaf0b6bf9d8670eef81b86fdd1a329b73cfb69acea234456166736b506c5597->enter($__internal_feaf0b6bf9d8670eef81b86fdd1a329b73cfb69acea234456166736b506c5597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_feaf0b6bf9d8670eef81b86fdd1a329b73cfb69acea234456166736b506c5597->leave($__internal_feaf0b6bf9d8670eef81b86fdd1a329b73cfb69acea234456166736b506c5597_prof);

        
        $__internal_9fdd8bb9bb5afd040f71a07f59bd0ae8bc973e9853911dd1a56ab959f1d272ed->leave($__internal_9fdd8bb9bb5afd040f71a07f59bd0ae8bc973e9853911dd1a56ab959f1d272ed_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_834f804e56ef4ff4525c438732416bbb141925bc0d598047e4795a84f27e1bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834f804e56ef4ff4525c438732416bbb141925bc0d598047e4795a84f27e1bcf->enter($__internal_834f804e56ef4ff4525c438732416bbb141925bc0d598047e4795a84f27e1bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7e542e6c40453917ae2ee963a8f2e7a415ed83f2bf499e68fffd9e9ec9db9723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e542e6c40453917ae2ee963a8f2e7a415ed83f2bf499e68fffd9e9ec9db9723->enter($__internal_7e542e6c40453917ae2ee963a8f2e7a415ed83f2bf499e68fffd9e9ec9db9723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7e542e6c40453917ae2ee963a8f2e7a415ed83f2bf499e68fffd9e9ec9db9723->leave($__internal_7e542e6c40453917ae2ee963a8f2e7a415ed83f2bf499e68fffd9e9ec9db9723_prof);

        
        $__internal_834f804e56ef4ff4525c438732416bbb141925bc0d598047e4795a84f27e1bcf->leave($__internal_834f804e56ef4ff4525c438732416bbb141925bc0d598047e4795a84f27e1bcf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app\\Resources\\views\\base.html.twig");
    }
}
