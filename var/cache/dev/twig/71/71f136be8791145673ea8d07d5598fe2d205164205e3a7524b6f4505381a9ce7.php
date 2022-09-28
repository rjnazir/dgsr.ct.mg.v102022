<?php

/* ::base.html.twig */
class __TwigTemplate_fb98a6914955f33e9ca002fd9a662b7c8d84d7be9c05ddb1eb8cddccfa8f7730 extends Twig_Template
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
        $__internal_dbb69a85f32739d79dd914cb87d946dea93757a9379a64d547afb6a27317df1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb69a85f32739d79dd914cb87d946dea93757a9379a64d547afb6a27317df1f->enter($__internal_dbb69a85f32739d79dd914cb87d946dea93757a9379a64d547afb6a27317df1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_5d3e58dc857deb90c9ed5cd1a8298a28c4ce88527d918ba19e8c6604ba213d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3e58dc857deb90c9ed5cd1a8298a28c4ce88527d918ba19e8c6604ba213d10->enter($__internal_5d3e58dc857deb90c9ed5cd1a8298a28c4ce88527d918ba19e8c6604ba213d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_dbb69a85f32739d79dd914cb87d946dea93757a9379a64d547afb6a27317df1f->leave($__internal_dbb69a85f32739d79dd914cb87d946dea93757a9379a64d547afb6a27317df1f_prof);

        
        $__internal_5d3e58dc857deb90c9ed5cd1a8298a28c4ce88527d918ba19e8c6604ba213d10->leave($__internal_5d3e58dc857deb90c9ed5cd1a8298a28c4ce88527d918ba19e8c6604ba213d10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf840a0ec9c4703b7094e93237e50056a03fb1fc9974cc05719ae2bc7f0c0047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf840a0ec9c4703b7094e93237e50056a03fb1fc9974cc05719ae2bc7f0c0047->enter($__internal_cf840a0ec9c4703b7094e93237e50056a03fb1fc9974cc05719ae2bc7f0c0047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6278e4971898d35241bb7aa6828be737f85619e5cd23125b683dd0770792aed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6278e4971898d35241bb7aa6828be737f85619e5cd23125b683dd0770792aed3->enter($__internal_6278e4971898d35241bb7aa6828be737f85619e5cd23125b683dd0770792aed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6278e4971898d35241bb7aa6828be737f85619e5cd23125b683dd0770792aed3->leave($__internal_6278e4971898d35241bb7aa6828be737f85619e5cd23125b683dd0770792aed3_prof);

        
        $__internal_cf840a0ec9c4703b7094e93237e50056a03fb1fc9974cc05719ae2bc7f0c0047->leave($__internal_cf840a0ec9c4703b7094e93237e50056a03fb1fc9974cc05719ae2bc7f0c0047_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0092eac75a9360beb559117304fe0549aa1344e53f2920c5226a413535622dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0092eac75a9360beb559117304fe0549aa1344e53f2920c5226a413535622dee->enter($__internal_0092eac75a9360beb559117304fe0549aa1344e53f2920c5226a413535622dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_40e4efba6f0da7a5a3206468aa8249cd064ff8f54ea4f77bfc91010684ebe87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e4efba6f0da7a5a3206468aa8249cd064ff8f54ea4f77bfc91010684ebe87c->enter($__internal_40e4efba6f0da7a5a3206468aa8249cd064ff8f54ea4f77bfc91010684ebe87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_40e4efba6f0da7a5a3206468aa8249cd064ff8f54ea4f77bfc91010684ebe87c->leave($__internal_40e4efba6f0da7a5a3206468aa8249cd064ff8f54ea4f77bfc91010684ebe87c_prof);

        
        $__internal_0092eac75a9360beb559117304fe0549aa1344e53f2920c5226a413535622dee->leave($__internal_0092eac75a9360beb559117304fe0549aa1344e53f2920c5226a413535622dee_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_caf38356e1882f81e8e70fb6395e587b3f4468f041eca4d40c166cc999018684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf38356e1882f81e8e70fb6395e587b3f4468f041eca4d40c166cc999018684->enter($__internal_caf38356e1882f81e8e70fb6395e587b3f4468f041eca4d40c166cc999018684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05f691fe26c4110eef2c54583bfb9454fba61351757c06f93afb25946d91f22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f691fe26c4110eef2c54583bfb9454fba61351757c06f93afb25946d91f22f->enter($__internal_05f691fe26c4110eef2c54583bfb9454fba61351757c06f93afb25946d91f22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_05f691fe26c4110eef2c54583bfb9454fba61351757c06f93afb25946d91f22f->leave($__internal_05f691fe26c4110eef2c54583bfb9454fba61351757c06f93afb25946d91f22f_prof);

        
        $__internal_caf38356e1882f81e8e70fb6395e587b3f4468f041eca4d40c166cc999018684->leave($__internal_caf38356e1882f81e8e70fb6395e587b3f4468f041eca4d40c166cc999018684_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54a7ab15ef44469d8cbfdab9d3685756a05d020a747b9238ad93cc7660745ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a7ab15ef44469d8cbfdab9d3685756a05d020a747b9238ad93cc7660745ecc->enter($__internal_54a7ab15ef44469d8cbfdab9d3685756a05d020a747b9238ad93cc7660745ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c7f5bcb0958d4e08ec8fd217a859824b873c1275b220c0704641bdc29d3a9bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f5bcb0958d4e08ec8fd217a859824b873c1275b220c0704641bdc29d3a9bdd->enter($__internal_c7f5bcb0958d4e08ec8fd217a859824b873c1275b220c0704641bdc29d3a9bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c7f5bcb0958d4e08ec8fd217a859824b873c1275b220c0704641bdc29d3a9bdd->leave($__internal_c7f5bcb0958d4e08ec8fd217a859824b873c1275b220c0704641bdc29d3a9bdd_prof);

        
        $__internal_54a7ab15ef44469d8cbfdab9d3685756a05d020a747b9238ad93cc7660745ecc->leave($__internal_54a7ab15ef44469d8cbfdab9d3685756a05d020a747b9238ad93cc7660745ecc_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources\\views/base.html.twig");
    }
}
