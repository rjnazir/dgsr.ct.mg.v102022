<?php

/* @Admin/CtVisite/search.html.twig */
class __TwigTemplate_09a8edc5e62404c089caad9a5f679c79225d1dee8c9d0843e5c4f96c578e1122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisite/search.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_596a1bf7c54819ab6237eae08c3530fca97d18a414e69913f18e6fe08b8be9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596a1bf7c54819ab6237eae08c3530fca97d18a414e69913f18e6fe08b8be9fe->enter($__internal_596a1bf7c54819ab6237eae08c3530fca97d18a414e69913f18e6fe08b8be9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisite/search.html.twig"));

        $__internal_007d1b0b289f6f0859fd05d9394b9d35043da7ee65239a7216092c53ac1783c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007d1b0b289f6f0859fd05d9394b9d35043da7ee65239a7216092c53ac1783c7->enter($__internal_007d1b0b289f6f0859fd05d9394b9d35043da7ee65239a7216092c53ac1783c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisite/search.html.twig"));

        // line 12
        $context["menu_visite"] = true;
        // line 13
        $context["menu_visite_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_596a1bf7c54819ab6237eae08c3530fca97d18a414e69913f18e6fe08b8be9fe->leave($__internal_596a1bf7c54819ab6237eae08c3530fca97d18a414e69913f18e6fe08b8be9fe_prof);

        
        $__internal_007d1b0b289f6f0859fd05d9394b9d35043da7ee65239a7216092c53ac1783c7->leave($__internal_007d1b0b289f6f0859fd05d9394b9d35043da7ee65239a7216092c53ac1783c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af749a53da75f84bb5426aa10d0d4665e2826781e7eae4b7808831e065b0fdad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af749a53da75f84bb5426aa10d0d4665e2826781e7eae4b7808831e065b0fdad->enter($__internal_af749a53da75f84bb5426aa10d0d4665e2826781e7eae4b7808831e065b0fdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb3c2ae368015d2f590f1af08bd0a1e719fb591288c536d2e0c7088b76cbaa7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3c2ae368015d2f590f1af08bd0a1e719fb591288c536d2e0c7088b76cbaa7c->enter($__internal_eb3c2ae368015d2f590f1af08bd0a1e719fb591288c536d2e0c7088b76cbaa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche Visite technique ";
        
        $__internal_eb3c2ae368015d2f590f1af08bd0a1e719fb591288c536d2e0c7088b76cbaa7c->leave($__internal_eb3c2ae368015d2f590f1af08bd0a1e719fb591288c536d2e0c7088b76cbaa7c_prof);

        
        $__internal_af749a53da75f84bb5426aa10d0d4665e2826781e7eae4b7808831e065b0fdad->leave($__internal_af749a53da75f84bb5426aa10d0d4665e2826781e7eae4b7808831e065b0fdad_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5716b7c9d5eaa06b17f54625d10036e521c6dfaac5b7c11c1afbea0a9fbc4e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5716b7c9d5eaa06b17f54625d10036e521c6dfaac5b7c11c1afbea0a9fbc4e8->enter($__internal_b5716b7c9d5eaa06b17f54625d10036e521c6dfaac5b7c11c1afbea0a9fbc4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_89279d78afd0b07029952a6e532b97431284017eafe5b5a7f4216b8f94795a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89279d78afd0b07029952a6e532b97431284017eafe5b5a7f4216b8f94795a7c->enter($__internal_89279d78afd0b07029952a6e532b97431284017eafe5b5a7f4216b8f94795a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
        
        $__internal_89279d78afd0b07029952a6e532b97431284017eafe5b5a7f4216b8f94795a7c->leave($__internal_89279d78afd0b07029952a6e532b97431284017eafe5b5a7f4216b8f94795a7c_prof);

        
        $__internal_b5716b7c9d5eaa06b17f54625d10036e521c6dfaac5b7c11c1afbea0a9fbc4e8->leave($__internal_b5716b7c9d5eaa06b17f54625d10036e521c6dfaac5b7c11c1afbea0a9fbc4e8_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_650878a4d2d3ec81cb6e9c5f0d4b048ba721fb4c4fc4681742aaadd7f91ea81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650878a4d2d3ec81cb6e9c5f0d4b048ba721fb4c4fc4681742aaadd7f91ea81e->enter($__internal_650878a4d2d3ec81cb6e9c5f0d4b048ba721fb4c4fc4681742aaadd7f91ea81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4757392dba944473bdb652f548d95da0cc37b4b86ae973ad58d189f57dc0c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4757392dba944473bdb652f548d95da0cc37b4b86ae973ad58d189f57dc0c08->enter($__internal_c4757392dba944473bdb652f548d95da0cc37b4b86ae973ad58d189f57dc0c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    ";
        // line 17
        echo "    <div class=\"row\" id=\"search-form\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Recherche</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_immatriculation\">Par numéro d'immatriculation</label>
                                <input id=\"ct_numero_immatriculation\" name=\"ct_numero_immatriculation\"
                                       class=\"form-control\" />
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                                <input id=\"ct_numero_serie\" name=\"ct_numero_serie\" class=\"form-control\" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c4757392dba944473bdb652f548d95da0cc37b4b86ae973ad58d189f57dc0c08->leave($__internal_c4757392dba944473bdb652f548d95da0cc37b4b86ae973ad58d189f57dc0c08_prof);

        
        $__internal_650878a4d2d3ec81cb6e9c5f0d4b048ba721fb4c4fc4681742aaadd7f91ea81e->leave($__internal_650878a4d2d3ec81cb6e9c5f0d4b048ba721fb4c4fc4681742aaadd7f91ea81e_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_370ead3b6b26740f640e346fce1b608449accc138dafae90c30e2eef20a1f502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_370ead3b6b26740f640e346fce1b608449accc138dafae90c30e2eef20a1f502->enter($__internal_370ead3b6b26740f640e346fce1b608449accc138dafae90c30e2eef20a1f502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c9aab684ed0c682f436e5ee40b1e43e9c3ebabf715f26a3321a338ce4199ea86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9aab684ed0c682f436e5ee40b1e43e9c3ebabf715f26a3321a338ce4199ea86->enter($__internal_c9aab684ed0c682f436e5ee40b1e43e9c3ebabf715f26a3321a338ce4199ea86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        var _fill_form_carte_grise_ajax_uri = \"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_fill_info_by_immatriculation_ajax");
        echo "\";
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_immatriculation_ajax");
        echo "\";
        var _visite_search_ajax_uri = \"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_search");
        echo "\";
    </script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/search.visite.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c9aab684ed0c682f436e5ee40b1e43e9c3ebabf715f26a3321a338ce4199ea86->leave($__internal_c9aab684ed0c682f436e5ee40b1e43e9c3ebabf715f26a3321a338ce4199ea86_prof);

        
        $__internal_370ead3b6b26740f640e346fce1b608449accc138dafae90c30e2eef20a1f502->leave($__internal_370ead3b6b26740f640e346fce1b608449accc138dafae90c30e2eef20a1f502_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisite/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 58,  177 => 56,  173 => 55,  169 => 54,  165 => 53,  160 => 51,  152 => 47,  143 => 46,  106 => 17,  104 => 16,  95 => 15,  83 => 9,  76 => 6,  67 => 5,  48 => 3,  38 => 1,  36 => 13,  34 => 12,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %}{{ parent() }} Recherche Visite technique {% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <!-- JQuery UI -->
    <link href=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}\" rel=\"Stylesheet\"></link>
{% endblock %}

{% set menu_visite        = true %}
{% set menu_visite_search = true %}

{% block body %}
    {# Formulaire recherche #}
    <div class=\"row\" id=\"search-form\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Recherche</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_immatriculation\">Par numéro d'immatriculation</label>
                                <input id=\"ct_numero_immatriculation\" name=\"ct_numero_immatriculation\"
                                       class=\"form-control\" />
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                                <input id=\"ct_numero_serie\" name=\"ct_numero_serie\" class=\"form-control\" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
    <script>
        var _fill_form_carte_grise_ajax_uri = \"{{ path('carte_grise_fill_info_by_immatriculation_ajax') }}\";
        var _autocomplete_numero_serie_ajax_uri = \"{{ path('carte_grise_show_numero_serie_ajax') }}\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"{{ path('carte_grise_show_numero_immatriculation_ajax') }}\";
        var _visite_search_ajax_uri = \"{{ path('visite_search') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/search.visite.js') }}\"></script>
{% endblock %}", "@Admin/CtVisite/search.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisite\\search.html.twig");
    }
}
