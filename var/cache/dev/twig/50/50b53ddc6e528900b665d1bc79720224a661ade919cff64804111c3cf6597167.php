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
        $__internal_8ee77fb515b6f245ef82b57e5d4d8e05560b7a38424a82ca985006ae2a454e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee77fb515b6f245ef82b57e5d4d8e05560b7a38424a82ca985006ae2a454e0b->enter($__internal_8ee77fb515b6f245ef82b57e5d4d8e05560b7a38424a82ca985006ae2a454e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisite:search.html.twig"));

        $__internal_74c8ee8a97b6268c93af922133a7ead87292d08a78006663f297d2c96973143b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c8ee8a97b6268c93af922133a7ead87292d08a78006663f297d2c96973143b->enter($__internal_74c8ee8a97b6268c93af922133a7ead87292d08a78006663f297d2c96973143b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisite:search.html.twig"));

        // line 12
        $context["menu_visite"] = true;
        // line 13
        $context["menu_visite_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ee77fb515b6f245ef82b57e5d4d8e05560b7a38424a82ca985006ae2a454e0b->leave($__internal_8ee77fb515b6f245ef82b57e5d4d8e05560b7a38424a82ca985006ae2a454e0b_prof);

        
        $__internal_74c8ee8a97b6268c93af922133a7ead87292d08a78006663f297d2c96973143b->leave($__internal_74c8ee8a97b6268c93af922133a7ead87292d08a78006663f297d2c96973143b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a230390fc59d8000a382ed08c0f6dc86865018da86e7788e77125249da165cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a230390fc59d8000a382ed08c0f6dc86865018da86e7788e77125249da165cb1->enter($__internal_a230390fc59d8000a382ed08c0f6dc86865018da86e7788e77125249da165cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc207bfc11cfc81903e9a5e6194f1371925bed7afd7c04ea96410d578136017a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc207bfc11cfc81903e9a5e6194f1371925bed7afd7c04ea96410d578136017a->enter($__internal_fc207bfc11cfc81903e9a5e6194f1371925bed7afd7c04ea96410d578136017a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche Visite technique ";
        
        $__internal_fc207bfc11cfc81903e9a5e6194f1371925bed7afd7c04ea96410d578136017a->leave($__internal_fc207bfc11cfc81903e9a5e6194f1371925bed7afd7c04ea96410d578136017a_prof);

        
        $__internal_a230390fc59d8000a382ed08c0f6dc86865018da86e7788e77125249da165cb1->leave($__internal_a230390fc59d8000a382ed08c0f6dc86865018da86e7788e77125249da165cb1_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d3c4673dde6bf6d422df8feaffe59353d8fd212d76dfa33285427dd4873e719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3c4673dde6bf6d422df8feaffe59353d8fd212d76dfa33285427dd4873e719->enter($__internal_1d3c4673dde6bf6d422df8feaffe59353d8fd212d76dfa33285427dd4873e719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ea5e085d3b90776dfa26a0e263e476a9921ddf8a4762b970fe63dff4fffd44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea5e085d3b90776dfa26a0e263e476a9921ddf8a4762b970fe63dff4fffd44c->enter($__internal_7ea5e085d3b90776dfa26a0e263e476a9921ddf8a4762b970fe63dff4fffd44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7ea5e085d3b90776dfa26a0e263e476a9921ddf8a4762b970fe63dff4fffd44c->leave($__internal_7ea5e085d3b90776dfa26a0e263e476a9921ddf8a4762b970fe63dff4fffd44c_prof);

        
        $__internal_1d3c4673dde6bf6d422df8feaffe59353d8fd212d76dfa33285427dd4873e719->leave($__internal_1d3c4673dde6bf6d422df8feaffe59353d8fd212d76dfa33285427dd4873e719_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_8434e6d1e06dec3ee83cde3557371769aced6b8e08b187522ba5027b70761c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8434e6d1e06dec3ee83cde3557371769aced6b8e08b187522ba5027b70761c97->enter($__internal_8434e6d1e06dec3ee83cde3557371769aced6b8e08b187522ba5027b70761c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48396c4e12160e5e105b5644016f2033dde485598e833c05c4c06b4e65301b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48396c4e12160e5e105b5644016f2033dde485598e833c05c4c06b4e65301b46->enter($__internal_48396c4e12160e5e105b5644016f2033dde485598e833c05c4c06b4e65301b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_48396c4e12160e5e105b5644016f2033dde485598e833c05c4c06b4e65301b46->leave($__internal_48396c4e12160e5e105b5644016f2033dde485598e833c05c4c06b4e65301b46_prof);

        
        $__internal_8434e6d1e06dec3ee83cde3557371769aced6b8e08b187522ba5027b70761c97->leave($__internal_8434e6d1e06dec3ee83cde3557371769aced6b8e08b187522ba5027b70761c97_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5996431ff007ba9671994f093e0dcd2b84c44f8c26d7b6408f2d3681120fe84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5996431ff007ba9671994f093e0dcd2b84c44f8c26d7b6408f2d3681120fe84->enter($__internal_c5996431ff007ba9671994f093e0dcd2b84c44f8c26d7b6408f2d3681120fe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_38b891e5c9dd48b2fac272179db62c32289808a7bc0d3d814948eba6e57757fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b891e5c9dd48b2fac272179db62c32289808a7bc0d3d814948eba6e57757fb->enter($__internal_38b891e5c9dd48b2fac272179db62c32289808a7bc0d3d814948eba6e57757fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_38b891e5c9dd48b2fac272179db62c32289808a7bc0d3d814948eba6e57757fb->leave($__internal_38b891e5c9dd48b2fac272179db62c32289808a7bc0d3d814948eba6e57757fb_prof);

        
        $__internal_c5996431ff007ba9671994f093e0dcd2b84c44f8c26d7b6408f2d3681120fe84->leave($__internal_c5996431ff007ba9671994f093e0dcd2b84c44f8c26d7b6408f2d3681120fe84_prof);

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
