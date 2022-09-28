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
        $__internal_abe6e4b8de7c22ab6b3f442b575978330b41e84456448be394161bc5b3630dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abe6e4b8de7c22ab6b3f442b575978330b41e84456448be394161bc5b3630dac->enter($__internal_abe6e4b8de7c22ab6b3f442b575978330b41e84456448be394161bc5b3630dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/search.html.twig"));

        $__internal_9320bef75d9064136378ff56b82654793acab6cf2591fbe08081c17cbe335e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9320bef75d9064136378ff56b82654793acab6cf2591fbe08081c17cbe335e8f->enter($__internal_9320bef75d9064136378ff56b82654793acab6cf2591fbe08081c17cbe335e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/search.html.twig"));

        // line 12
        $context["menu_reception"] = true;
        // line 13
        $context["menu_reception_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abe6e4b8de7c22ab6b3f442b575978330b41e84456448be394161bc5b3630dac->leave($__internal_abe6e4b8de7c22ab6b3f442b575978330b41e84456448be394161bc5b3630dac_prof);

        
        $__internal_9320bef75d9064136378ff56b82654793acab6cf2591fbe08081c17cbe335e8f->leave($__internal_9320bef75d9064136378ff56b82654793acab6cf2591fbe08081c17cbe335e8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6077feb9bcd1466823f0a446316862cf4b8facc51d55c17cc4d9dec6b964cf67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6077feb9bcd1466823f0a446316862cf4b8facc51d55c17cc4d9dec6b964cf67->enter($__internal_6077feb9bcd1466823f0a446316862cf4b8facc51d55c17cc4d9dec6b964cf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc48287fee9728b4f4fe622fe60ab149b8ede184058a850a6a1604183e3e53f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc48287fee9728b4f4fe622fe60ab149b8ede184058a850a6a1604183e3e53f6->enter($__internal_dc48287fee9728b4f4fe622fe60ab149b8ede184058a850a6a1604183e3e53f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche Réception ";
        
        $__internal_dc48287fee9728b4f4fe622fe60ab149b8ede184058a850a6a1604183e3e53f6->leave($__internal_dc48287fee9728b4f4fe622fe60ab149b8ede184058a850a6a1604183e3e53f6_prof);

        
        $__internal_6077feb9bcd1466823f0a446316862cf4b8facc51d55c17cc4d9dec6b964cf67->leave($__internal_6077feb9bcd1466823f0a446316862cf4b8facc51d55c17cc4d9dec6b964cf67_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f2bfbaa4aa6b1620cc2c17c704340f543697fdf45cdfc61a20b78362401c10b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2bfbaa4aa6b1620cc2c17c704340f543697fdf45cdfc61a20b78362401c10b->enter($__internal_2f2bfbaa4aa6b1620cc2c17c704340f543697fdf45cdfc61a20b78362401c10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_69821451a59a6745bbcb8fcf1b17fbd2e9b1be8dbd0151aeaf133c742894bead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69821451a59a6745bbcb8fcf1b17fbd2e9b1be8dbd0151aeaf133c742894bead->enter($__internal_69821451a59a6745bbcb8fcf1b17fbd2e9b1be8dbd0151aeaf133c742894bead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_69821451a59a6745bbcb8fcf1b17fbd2e9b1be8dbd0151aeaf133c742894bead->leave($__internal_69821451a59a6745bbcb8fcf1b17fbd2e9b1be8dbd0151aeaf133c742894bead_prof);

        
        $__internal_2f2bfbaa4aa6b1620cc2c17c704340f543697fdf45cdfc61a20b78362401c10b->leave($__internal_2f2bfbaa4aa6b1620cc2c17c704340f543697fdf45cdfc61a20b78362401c10b_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f4b787d1119d295ade2fe4d598b7eb27c2a1ce28bfce900beb2df5f242a280c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4b787d1119d295ade2fe4d598b7eb27c2a1ce28bfce900beb2df5f242a280c->enter($__internal_7f4b787d1119d295ade2fe4d598b7eb27c2a1ce28bfce900beb2df5f242a280c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61fd4f40570f4f78584061a84154e90d0fcf4d231ec116c02ea476b20a39a80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61fd4f40570f4f78584061a84154e90d0fcf4d231ec116c02ea476b20a39a80b->enter($__internal_61fd4f40570f4f78584061a84154e90d0fcf4d231ec116c02ea476b20a39a80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_61fd4f40570f4f78584061a84154e90d0fcf4d231ec116c02ea476b20a39a80b->leave($__internal_61fd4f40570f4f78584061a84154e90d0fcf4d231ec116c02ea476b20a39a80b_prof);

        
        $__internal_7f4b787d1119d295ade2fe4d598b7eb27c2a1ce28bfce900beb2df5f242a280c->leave($__internal_7f4b787d1119d295ade2fe4d598b7eb27c2a1ce28bfce900beb2df5f242a280c_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b00f26d8ebc937ba83b0d7b5a95317dd4868a58ef00cc29d90ca163605179428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00f26d8ebc937ba83b0d7b5a95317dd4868a58ef00cc29d90ca163605179428->enter($__internal_b00f26d8ebc937ba83b0d7b5a95317dd4868a58ef00cc29d90ca163605179428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2f9d230f22124eb7b8d911cae4b5b026467b98976028e7d635ad78a4cc41e6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9d230f22124eb7b8d911cae4b5b026467b98976028e7d635ad78a4cc41e6a6->enter($__internal_2f9d230f22124eb7b8d911cae4b5b026467b98976028e7d635ad78a4cc41e6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2f9d230f22124eb7b8d911cae4b5b026467b98976028e7d635ad78a4cc41e6a6->leave($__internal_2f9d230f22124eb7b8d911cae4b5b026467b98976028e7d635ad78a4cc41e6a6_prof);

        
        $__internal_b00f26d8ebc937ba83b0d7b5a95317dd4868a58ef00cc29d90ca163605179428->leave($__internal_b00f26d8ebc937ba83b0d7b5a95317dd4868a58ef00cc29d90ca163605179428_prof);

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
