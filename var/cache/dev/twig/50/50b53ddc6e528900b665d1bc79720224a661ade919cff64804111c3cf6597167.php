<?php

/* AdminBundle:CtVisite:search.html.twig */
class __TwigTemplate_4e71fd038bbc6f377e7731e1de177717b7329d0bbb777638e8a70c4dcf29e7d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtVisite:search.html.twig", 1);
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
        $__internal_a15462fc91a6c5861a8eefaf9a0f1db1064d19b1f2232c58e89cc44a2a710e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15462fc91a6c5861a8eefaf9a0f1db1064d19b1f2232c58e89cc44a2a710e68->enter($__internal_a15462fc91a6c5861a8eefaf9a0f1db1064d19b1f2232c58e89cc44a2a710e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisite:search.html.twig"));

        $__internal_441c3036842265cb99e9feb327c063e14a66bc1b4a7a72e8ff69dff8e466a7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441c3036842265cb99e9feb327c063e14a66bc1b4a7a72e8ff69dff8e466a7fb->enter($__internal_441c3036842265cb99e9feb327c063e14a66bc1b4a7a72e8ff69dff8e466a7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisite:search.html.twig"));

        // line 12
        $context["menu_visite"] = true;
        // line 13
        $context["menu_visite_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a15462fc91a6c5861a8eefaf9a0f1db1064d19b1f2232c58e89cc44a2a710e68->leave($__internal_a15462fc91a6c5861a8eefaf9a0f1db1064d19b1f2232c58e89cc44a2a710e68_prof);

        
        $__internal_441c3036842265cb99e9feb327c063e14a66bc1b4a7a72e8ff69dff8e466a7fb->leave($__internal_441c3036842265cb99e9feb327c063e14a66bc1b4a7a72e8ff69dff8e466a7fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e68bb96ae3d1cd618537270f76a8333b459c1c418faaca54acdb166576aa777e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68bb96ae3d1cd618537270f76a8333b459c1c418faaca54acdb166576aa777e->enter($__internal_e68bb96ae3d1cd618537270f76a8333b459c1c418faaca54acdb166576aa777e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6354bb6da73dda01d34993eac36737ec9764001ad9b5c0c7f916b1b0a520babc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6354bb6da73dda01d34993eac36737ec9764001ad9b5c0c7f916b1b0a520babc->enter($__internal_6354bb6da73dda01d34993eac36737ec9764001ad9b5c0c7f916b1b0a520babc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche Visite technique ";
        
        $__internal_6354bb6da73dda01d34993eac36737ec9764001ad9b5c0c7f916b1b0a520babc->leave($__internal_6354bb6da73dda01d34993eac36737ec9764001ad9b5c0c7f916b1b0a520babc_prof);

        
        $__internal_e68bb96ae3d1cd618537270f76a8333b459c1c418faaca54acdb166576aa777e->leave($__internal_e68bb96ae3d1cd618537270f76a8333b459c1c418faaca54acdb166576aa777e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc9bb83eacc690ff1fac6e55cf88b2c3e7efff52b25428693d5c679b67777dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9bb83eacc690ff1fac6e55cf88b2c3e7efff52b25428693d5c679b67777dc4->enter($__internal_fc9bb83eacc690ff1fac6e55cf88b2c3e7efff52b25428693d5c679b67777dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_168723e2997e64ecb76aa58a1d05ada4713d6b47df01c4e36f24d173f00b2ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168723e2997e64ecb76aa58a1d05ada4713d6b47df01c4e36f24d173f00b2ad5->enter($__internal_168723e2997e64ecb76aa58a1d05ada4713d6b47df01c4e36f24d173f00b2ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_168723e2997e64ecb76aa58a1d05ada4713d6b47df01c4e36f24d173f00b2ad5->leave($__internal_168723e2997e64ecb76aa58a1d05ada4713d6b47df01c4e36f24d173f00b2ad5_prof);

        
        $__internal_fc9bb83eacc690ff1fac6e55cf88b2c3e7efff52b25428693d5c679b67777dc4->leave($__internal_fc9bb83eacc690ff1fac6e55cf88b2c3e7efff52b25428693d5c679b67777dc4_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_2002ffffe45146a872ae1d2e5d6439c5ba553660576953d33d9e90901b7dc576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2002ffffe45146a872ae1d2e5d6439c5ba553660576953d33d9e90901b7dc576->enter($__internal_2002ffffe45146a872ae1d2e5d6439c5ba553660576953d33d9e90901b7dc576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25a6fa1b350227655ea4e12ce2e73815a74cd0e35aef486c424006214f1a81b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a6fa1b350227655ea4e12ce2e73815a74cd0e35aef486c424006214f1a81b3->enter($__internal_25a6fa1b350227655ea4e12ce2e73815a74cd0e35aef486c424006214f1a81b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25a6fa1b350227655ea4e12ce2e73815a74cd0e35aef486c424006214f1a81b3->leave($__internal_25a6fa1b350227655ea4e12ce2e73815a74cd0e35aef486c424006214f1a81b3_prof);

        
        $__internal_2002ffffe45146a872ae1d2e5d6439c5ba553660576953d33d9e90901b7dc576->leave($__internal_2002ffffe45146a872ae1d2e5d6439c5ba553660576953d33d9e90901b7dc576_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5b700f66adaa0690f32b76df14ceca8e17d767c86cba92b622b9a30e7ec8b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b700f66adaa0690f32b76df14ceca8e17d767c86cba92b622b9a30e7ec8b1f->enter($__internal_e5b700f66adaa0690f32b76df14ceca8e17d767c86cba92b622b9a30e7ec8b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_42001a7b5ab3aa97b610e27e7c3d2a410bbf27a8e3ec5fe0fcd4a18526ef0054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42001a7b5ab3aa97b610e27e7c3d2a410bbf27a8e3ec5fe0fcd4a18526ef0054->enter($__internal_42001a7b5ab3aa97b610e27e7c3d2a410bbf27a8e3ec5fe0fcd4a18526ef0054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_42001a7b5ab3aa97b610e27e7c3d2a410bbf27a8e3ec5fe0fcd4a18526ef0054->leave($__internal_42001a7b5ab3aa97b610e27e7c3d2a410bbf27a8e3ec5fe0fcd4a18526ef0054_prof);

        
        $__internal_e5b700f66adaa0690f32b76df14ceca8e17d767c86cba92b622b9a30e7ec8b1f->leave($__internal_e5b700f66adaa0690f32b76df14ceca8e17d767c86cba92b622b9a30e7ec8b1f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtVisite:search.html.twig";
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
{% endblock %}", "AdminBundle:CtVisite:search.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtVisite/search.html.twig");
    }
}
