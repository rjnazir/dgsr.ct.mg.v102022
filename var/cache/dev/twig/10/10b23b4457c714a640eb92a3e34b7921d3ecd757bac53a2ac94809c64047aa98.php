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
        $__internal_82096078b1236d39f0c60962cbc2f39e24e6837a6b7ad82bfe816a35fa998274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82096078b1236d39f0c60962cbc2f39e24e6837a6b7ad82bfe816a35fa998274->enter($__internal_82096078b1236d39f0c60962cbc2f39e24e6837a6b7ad82bfe816a35fa998274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2e5110227312df1a7775ffacbe96154a86188492966fe2ecd1fcf6e4203fb642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5110227312df1a7775ffacbe96154a86188492966fe2ecd1fcf6e4203fb642->enter($__internal_2e5110227312df1a7775ffacbe96154a86188492966fe2ecd1fcf6e4203fb642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_82096078b1236d39f0c60962cbc2f39e24e6837a6b7ad82bfe816a35fa998274->leave($__internal_82096078b1236d39f0c60962cbc2f39e24e6837a6b7ad82bfe816a35fa998274_prof);

        
        $__internal_2e5110227312df1a7775ffacbe96154a86188492966fe2ecd1fcf6e4203fb642->leave($__internal_2e5110227312df1a7775ffacbe96154a86188492966fe2ecd1fcf6e4203fb642_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0557242c4a151391a4791a951a7280f9718afc020c4a2169bb83eda1ec91b99b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0557242c4a151391a4791a951a7280f9718afc020c4a2169bb83eda1ec91b99b->enter($__internal_0557242c4a151391a4791a951a7280f9718afc020c4a2169bb83eda1ec91b99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64cfcdc4336bf052b27085f023b5eec3e3c01da9ef8186eb41ecb348a4b4afe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cfcdc4336bf052b27085f023b5eec3e3c01da9ef8186eb41ecb348a4b4afe0->enter($__internal_64cfcdc4336bf052b27085f023b5eec3e3c01da9ef8186eb41ecb348a4b4afe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_64cfcdc4336bf052b27085f023b5eec3e3c01da9ef8186eb41ecb348a4b4afe0->leave($__internal_64cfcdc4336bf052b27085f023b5eec3e3c01da9ef8186eb41ecb348a4b4afe0_prof);

        
        $__internal_0557242c4a151391a4791a951a7280f9718afc020c4a2169bb83eda1ec91b99b->leave($__internal_0557242c4a151391a4791a951a7280f9718afc020c4a2169bb83eda1ec91b99b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_536ade97a8279f1d185bc8fe7b0aa48f2c31142b62e400fbdb48c4237afe7d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536ade97a8279f1d185bc8fe7b0aa48f2c31142b62e400fbdb48c4237afe7d89->enter($__internal_536ade97a8279f1d185bc8fe7b0aa48f2c31142b62e400fbdb48c4237afe7d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ecc7682f3182d7252e091fa98c1e2157e4e604494e660aaa0a18d638b03cbeba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc7682f3182d7252e091fa98c1e2157e4e604494e660aaa0a18d638b03cbeba->enter($__internal_ecc7682f3182d7252e091fa98c1e2157e4e604494e660aaa0a18d638b03cbeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ecc7682f3182d7252e091fa98c1e2157e4e604494e660aaa0a18d638b03cbeba->leave($__internal_ecc7682f3182d7252e091fa98c1e2157e4e604494e660aaa0a18d638b03cbeba_prof);

        
        $__internal_536ade97a8279f1d185bc8fe7b0aa48f2c31142b62e400fbdb48c4237afe7d89->leave($__internal_536ade97a8279f1d185bc8fe7b0aa48f2c31142b62e400fbdb48c4237afe7d89_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c0a9b46b0f1c23bf661eb5c8123ec67a2cca5d41924586b260f444a8a93e7d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0a9b46b0f1c23bf661eb5c8123ec67a2cca5d41924586b260f444a8a93e7d4->enter($__internal_2c0a9b46b0f1c23bf661eb5c8123ec67a2cca5d41924586b260f444a8a93e7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d98a2cb6e31d67c2682d041d35399bfa0bb3c4c5fdeff15243eae411f9b4b78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98a2cb6e31d67c2682d041d35399bfa0bb3c4c5fdeff15243eae411f9b4b78a->enter($__internal_d98a2cb6e31d67c2682d041d35399bfa0bb3c4c5fdeff15243eae411f9b4b78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d98a2cb6e31d67c2682d041d35399bfa0bb3c4c5fdeff15243eae411f9b4b78a->leave($__internal_d98a2cb6e31d67c2682d041d35399bfa0bb3c4c5fdeff15243eae411f9b4b78a_prof);

        
        $__internal_2c0a9b46b0f1c23bf661eb5c8123ec67a2cca5d41924586b260f444a8a93e7d4->leave($__internal_2c0a9b46b0f1c23bf661eb5c8123ec67a2cca5d41924586b260f444a8a93e7d4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30fd5691fc7111b2952ef4524dd7b04ed10e18adcdf9a42bbfa9ed1c7541ec0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30fd5691fc7111b2952ef4524dd7b04ed10e18adcdf9a42bbfa9ed1c7541ec0f->enter($__internal_30fd5691fc7111b2952ef4524dd7b04ed10e18adcdf9a42bbfa9ed1c7541ec0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9058c35080a876f52ddbbd3fdfc488912dbd80b1240c69f9e936c2c4d0e352f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9058c35080a876f52ddbbd3fdfc488912dbd80b1240c69f9e936c2c4d0e352f0->enter($__internal_9058c35080a876f52ddbbd3fdfc488912dbd80b1240c69f9e936c2c4d0e352f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9058c35080a876f52ddbbd3fdfc488912dbd80b1240c69f9e936c2c4d0e352f0->leave($__internal_9058c35080a876f52ddbbd3fdfc488912dbd80b1240c69f9e936c2c4d0e352f0_prof);

        
        $__internal_30fd5691fc7111b2952ef4524dd7b04ed10e18adcdf9a42bbfa9ed1c7541ec0f->leave($__internal_30fd5691fc7111b2952ef4524dd7b04ed10e18adcdf9a42bbfa9ed1c7541ec0f_prof);

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
