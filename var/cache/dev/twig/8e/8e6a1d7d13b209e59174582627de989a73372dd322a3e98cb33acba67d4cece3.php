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
        $__internal_37fb7125ea86a5dd346345e8cac99fabe8b8798b062b6539b42e491addbb26e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37fb7125ea86a5dd346345e8cac99fabe8b8798b062b6539b42e491addbb26e4->enter($__internal_37fb7125ea86a5dd346345e8cac99fabe8b8798b062b6539b42e491addbb26e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisite/search.html.twig"));

        $__internal_e284dae6944d4db5f29fe39c624722e81df5360d14095c0d5d6072951b4fbb9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e284dae6944d4db5f29fe39c624722e81df5360d14095c0d5d6072951b4fbb9e->enter($__internal_e284dae6944d4db5f29fe39c624722e81df5360d14095c0d5d6072951b4fbb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisite/search.html.twig"));

        // line 12
        $context["menu_visite"] = true;
        // line 13
        $context["menu_visite_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37fb7125ea86a5dd346345e8cac99fabe8b8798b062b6539b42e491addbb26e4->leave($__internal_37fb7125ea86a5dd346345e8cac99fabe8b8798b062b6539b42e491addbb26e4_prof);

        
        $__internal_e284dae6944d4db5f29fe39c624722e81df5360d14095c0d5d6072951b4fbb9e->leave($__internal_e284dae6944d4db5f29fe39c624722e81df5360d14095c0d5d6072951b4fbb9e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2d3527afb3ac4fd5acff803729962b081dabf0a980905562d491ccd9b45c946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d3527afb3ac4fd5acff803729962b081dabf0a980905562d491ccd9b45c946->enter($__internal_c2d3527afb3ac4fd5acff803729962b081dabf0a980905562d491ccd9b45c946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd225ea43e54b285f29be21f081e0d405ab43af5316f930d471cbe34aff403bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd225ea43e54b285f29be21f081e0d405ab43af5316f930d471cbe34aff403bf->enter($__internal_bd225ea43e54b285f29be21f081e0d405ab43af5316f930d471cbe34aff403bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche Visite technique ";
        
        $__internal_bd225ea43e54b285f29be21f081e0d405ab43af5316f930d471cbe34aff403bf->leave($__internal_bd225ea43e54b285f29be21f081e0d405ab43af5316f930d471cbe34aff403bf_prof);

        
        $__internal_c2d3527afb3ac4fd5acff803729962b081dabf0a980905562d491ccd9b45c946->leave($__internal_c2d3527afb3ac4fd5acff803729962b081dabf0a980905562d491ccd9b45c946_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d134581867441aae4b4e1bd36325d94fa3a2094d0e5b8fb13b6425e32fc88b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d134581867441aae4b4e1bd36325d94fa3a2094d0e5b8fb13b6425e32fc88b8->enter($__internal_1d134581867441aae4b4e1bd36325d94fa3a2094d0e5b8fb13b6425e32fc88b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_49d558a4aaee57b2f6620339ed0c489417f6604d13a20b6efb82071565b27b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d558a4aaee57b2f6620339ed0c489417f6604d13a20b6efb82071565b27b99->enter($__internal_49d558a4aaee57b2f6620339ed0c489417f6604d13a20b6efb82071565b27b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_49d558a4aaee57b2f6620339ed0c489417f6604d13a20b6efb82071565b27b99->leave($__internal_49d558a4aaee57b2f6620339ed0c489417f6604d13a20b6efb82071565b27b99_prof);

        
        $__internal_1d134581867441aae4b4e1bd36325d94fa3a2094d0e5b8fb13b6425e32fc88b8->leave($__internal_1d134581867441aae4b4e1bd36325d94fa3a2094d0e5b8fb13b6425e32fc88b8_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_288576c2f0c624b56bb59d0b65bb4d2cc3ea5f0837b1f863af76159e16069cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288576c2f0c624b56bb59d0b65bb4d2cc3ea5f0837b1f863af76159e16069cc8->enter($__internal_288576c2f0c624b56bb59d0b65bb4d2cc3ea5f0837b1f863af76159e16069cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4269bc944ce3bea4a17e88d9d289b126b987b121e225b089852f5b6d2f892966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4269bc944ce3bea4a17e88d9d289b126b987b121e225b089852f5b6d2f892966->enter($__internal_4269bc944ce3bea4a17e88d9d289b126b987b121e225b089852f5b6d2f892966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4269bc944ce3bea4a17e88d9d289b126b987b121e225b089852f5b6d2f892966->leave($__internal_4269bc944ce3bea4a17e88d9d289b126b987b121e225b089852f5b6d2f892966_prof);

        
        $__internal_288576c2f0c624b56bb59d0b65bb4d2cc3ea5f0837b1f863af76159e16069cc8->leave($__internal_288576c2f0c624b56bb59d0b65bb4d2cc3ea5f0837b1f863af76159e16069cc8_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b0aa338722aa19bfb160916a4ba03b9ae25600089935cb68f78c10aff941867b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0aa338722aa19bfb160916a4ba03b9ae25600089935cb68f78c10aff941867b->enter($__internal_b0aa338722aa19bfb160916a4ba03b9ae25600089935cb68f78c10aff941867b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1b7a512c64e3bdc591e0cd13c714b0226677d690aebe64ab7db8d007e77dca58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7a512c64e3bdc591e0cd13c714b0226677d690aebe64ab7db8d007e77dca58->enter($__internal_1b7a512c64e3bdc591e0cd13c714b0226677d690aebe64ab7db8d007e77dca58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1b7a512c64e3bdc591e0cd13c714b0226677d690aebe64ab7db8d007e77dca58->leave($__internal_1b7a512c64e3bdc591e0cd13c714b0226677d690aebe64ab7db8d007e77dca58_prof);

        
        $__internal_b0aa338722aa19bfb160916a4ba03b9ae25600089935cb68f78c10aff941867b->leave($__internal_b0aa338722aa19bfb160916a4ba03b9ae25600089935cb68f78c10aff941867b_prof);

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
