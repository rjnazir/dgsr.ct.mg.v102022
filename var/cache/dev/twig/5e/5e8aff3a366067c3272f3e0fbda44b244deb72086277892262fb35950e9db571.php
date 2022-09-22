<?php

/* @Admin/CtReception/search.html.twig */
class __TwigTemplate_7c21741d7fa88a320295e4f9fa3f7dcc9cc947b996f8ba3ef6f5ffbe1318d35c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtReception/search.html.twig", 1);
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
        $__internal_507df16bd84b9c0dc95415332288540d9a0358c73c5baa81275f80d7999963e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507df16bd84b9c0dc95415332288540d9a0358c73c5baa81275f80d7999963e2->enter($__internal_507df16bd84b9c0dc95415332288540d9a0358c73c5baa81275f80d7999963e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/search.html.twig"));

        $__internal_4613ac75e13b774c7015f33ef5d7b75471848b8e545326a7e3ecdadd91844bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4613ac75e13b774c7015f33ef5d7b75471848b8e545326a7e3ecdadd91844bba->enter($__internal_4613ac75e13b774c7015f33ef5d7b75471848b8e545326a7e3ecdadd91844bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/search.html.twig"));

        // line 12
        $context["menu_reception"] = true;
        // line 13
        $context["menu_reception_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_507df16bd84b9c0dc95415332288540d9a0358c73c5baa81275f80d7999963e2->leave($__internal_507df16bd84b9c0dc95415332288540d9a0358c73c5baa81275f80d7999963e2_prof);

        
        $__internal_4613ac75e13b774c7015f33ef5d7b75471848b8e545326a7e3ecdadd91844bba->leave($__internal_4613ac75e13b774c7015f33ef5d7b75471848b8e545326a7e3ecdadd91844bba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecce7a94491813ffd0dcdc0e47ec7b4eea45c3aaf8e583c7e8c330f4fbe9b0bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecce7a94491813ffd0dcdc0e47ec7b4eea45c3aaf8e583c7e8c330f4fbe9b0bc->enter($__internal_ecce7a94491813ffd0dcdc0e47ec7b4eea45c3aaf8e583c7e8c330f4fbe9b0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e1fc70361de8e57f6044b26d46e3114d0df39099cedb86a7fa9d59c60a2033d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1fc70361de8e57f6044b26d46e3114d0df39099cedb86a7fa9d59c60a2033d->enter($__internal_5e1fc70361de8e57f6044b26d46e3114d0df39099cedb86a7fa9d59c60a2033d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche Réception ";
        
        $__internal_5e1fc70361de8e57f6044b26d46e3114d0df39099cedb86a7fa9d59c60a2033d->leave($__internal_5e1fc70361de8e57f6044b26d46e3114d0df39099cedb86a7fa9d59c60a2033d_prof);

        
        $__internal_ecce7a94491813ffd0dcdc0e47ec7b4eea45c3aaf8e583c7e8c330f4fbe9b0bc->leave($__internal_ecce7a94491813ffd0dcdc0e47ec7b4eea45c3aaf8e583c7e8c330f4fbe9b0bc_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0c12fbcc896a1e9a466f8c8678ad88932a538c904d16cc1ea03516590d1001e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c12fbcc896a1e9a466f8c8678ad88932a538c904d16cc1ea03516590d1001e->enter($__internal_d0c12fbcc896a1e9a466f8c8678ad88932a538c904d16cc1ea03516590d1001e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_078cb58235ba4faf3b7f7179649f58754eb3d4c6c6241ece17599a171b01e9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078cb58235ba4faf3b7f7179649f58754eb3d4c6c6241ece17599a171b01e9ee->enter($__internal_078cb58235ba4faf3b7f7179649f58754eb3d4c6c6241ece17599a171b01e9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_078cb58235ba4faf3b7f7179649f58754eb3d4c6c6241ece17599a171b01e9ee->leave($__internal_078cb58235ba4faf3b7f7179649f58754eb3d4c6c6241ece17599a171b01e9ee_prof);

        
        $__internal_d0c12fbcc896a1e9a466f8c8678ad88932a538c904d16cc1ea03516590d1001e->leave($__internal_d0c12fbcc896a1e9a466f8c8678ad88932a538c904d16cc1ea03516590d1001e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_b991f996b8b51a4e544beed017e5414b4c8d0f2b78126120fb2dfb10ad6b2565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b991f996b8b51a4e544beed017e5414b4c8d0f2b78126120fb2dfb10ad6b2565->enter($__internal_b991f996b8b51a4e544beed017e5414b4c8d0f2b78126120fb2dfb10ad6b2565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3258def15e9011caa2e209e28fb2cbf3b2f46aff25a986d907ca4b9e1b029552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3258def15e9011caa2e209e28fb2cbf3b2f46aff25a986d907ca4b9e1b029552->enter($__internal_3258def15e9011caa2e209e28fb2cbf3b2f46aff25a986d907ca4b9e1b029552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3258def15e9011caa2e209e28fb2cbf3b2f46aff25a986d907ca4b9e1b029552->leave($__internal_3258def15e9011caa2e209e28fb2cbf3b2f46aff25a986d907ca4b9e1b029552_prof);

        
        $__internal_b991f996b8b51a4e544beed017e5414b4c8d0f2b78126120fb2dfb10ad6b2565->leave($__internal_b991f996b8b51a4e544beed017e5414b4c8d0f2b78126120fb2dfb10ad6b2565_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33ce128cd1e4a7b8b2a4319000baa220c3a68cc7351805c2286113283e24d5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ce128cd1e4a7b8b2a4319000baa220c3a68cc7351805c2286113283e24d5ca->enter($__internal_33ce128cd1e4a7b8b2a4319000baa220c3a68cc7351805c2286113283e24d5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1185ea708e6fe848c0e6396a583b51b58ad923eee5e22247c2c107a4975e20e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1185ea708e6fe848c0e6396a583b51b58ad923eee5e22247c2c107a4975e20e5->enter($__internal_1185ea708e6fe848c0e6396a583b51b58ad923eee5e22247c2c107a4975e20e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        var _get_reception_ajax_uri = \"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_get_info_ajax");
        echo "\";
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_show_numero_immatriculation_ajax");
        echo "\";
        var _reception_search_ajax_uri = \"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_search");
        echo "\";
    </script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/search.reception.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1185ea708e6fe848c0e6396a583b51b58ad923eee5e22247c2c107a4975e20e5->leave($__internal_1185ea708e6fe848c0e6396a583b51b58ad923eee5e22247c2c107a4975e20e5_prof);

        
        $__internal_33ce128cd1e4a7b8b2a4319000baa220c3a68cc7351805c2286113283e24d5ca->leave($__internal_33ce128cd1e4a7b8b2a4319000baa220c3a68cc7351805c2286113283e24d5ca_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtReception/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 57,  176 => 55,  172 => 54,  168 => 53,  164 => 52,  159 => 50,  152 => 47,  143 => 46,  106 => 17,  104 => 16,  95 => 15,  83 => 9,  76 => 6,  67 => 5,  48 => 3,  38 => 1,  36 => 13,  34 => 12,  11 => 1,);
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

{% block title %}{{ parent() }} Recherche Réception {% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <!-- JQuery UI -->
    <link href=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}\" rel=\"Stylesheet\"></link>
{% endblock %}

{% set menu_reception        = true %}
{% set menu_reception_search = true %}

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

    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
    <script>
        var _get_reception_ajax_uri = \"{{ path('reception_get_info_ajax') }}\";
        var _autocomplete_numero_serie_ajax_uri = \"{{ path('reception_show_numero_serie_ajax') }}\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"{{ path('reception_show_numero_immatriculation_ajax') }}\";
        var _reception_search_ajax_uri = \"{{ path('reception_search') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/search.reception.js') }}\"></script>
{% endblock %}", "@Admin/CtReception/search.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtReception\\search.html.twig");
    }
}
