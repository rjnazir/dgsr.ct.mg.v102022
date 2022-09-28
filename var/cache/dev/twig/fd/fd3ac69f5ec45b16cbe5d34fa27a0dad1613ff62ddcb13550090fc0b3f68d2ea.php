<?php

/* AdminBundle:CtReception:search.html.twig */
class __TwigTemplate_e76987f4ee03fc44feb4b695ac0c86459f3002abd3477d6c17a32be846b1dff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtReception:search.html.twig", 1);
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
        $__internal_2df034356457d03e4fddc6eb8b58ebb42a2745f0ee953d5e7659cc70a6d5bc6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df034356457d03e4fddc6eb8b58ebb42a2745f0ee953d5e7659cc70a6d5bc6a->enter($__internal_2df034356457d03e4fddc6eb8b58ebb42a2745f0ee953d5e7659cc70a6d5bc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:search.html.twig"));

        $__internal_b357575ead4788a56f167ff0c7aa1a39e507f8f4f4e4d8943bf87031f1e984d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b357575ead4788a56f167ff0c7aa1a39e507f8f4f4e4d8943bf87031f1e984d9->enter($__internal_b357575ead4788a56f167ff0c7aa1a39e507f8f4f4e4d8943bf87031f1e984d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:search.html.twig"));

        // line 12
        $context["menu_reception"] = true;
        // line 13
        $context["menu_reception_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2df034356457d03e4fddc6eb8b58ebb42a2745f0ee953d5e7659cc70a6d5bc6a->leave($__internal_2df034356457d03e4fddc6eb8b58ebb42a2745f0ee953d5e7659cc70a6d5bc6a_prof);

        
        $__internal_b357575ead4788a56f167ff0c7aa1a39e507f8f4f4e4d8943bf87031f1e984d9->leave($__internal_b357575ead4788a56f167ff0c7aa1a39e507f8f4f4e4d8943bf87031f1e984d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ba14760eb726559801b45439d26805804e9f7033bc26a916e7c03f5fc3c7f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba14760eb726559801b45439d26805804e9f7033bc26a916e7c03f5fc3c7f39->enter($__internal_4ba14760eb726559801b45439d26805804e9f7033bc26a916e7c03f5fc3c7f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d7a38e863f3a2e8339427788c54c5fdccb68fb1b882435531e978a7fbd37d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7a38e863f3a2e8339427788c54c5fdccb68fb1b882435531e978a7fbd37d11->enter($__internal_4d7a38e863f3a2e8339427788c54c5fdccb68fb1b882435531e978a7fbd37d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche Réception ";
        
        $__internal_4d7a38e863f3a2e8339427788c54c5fdccb68fb1b882435531e978a7fbd37d11->leave($__internal_4d7a38e863f3a2e8339427788c54c5fdccb68fb1b882435531e978a7fbd37d11_prof);

        
        $__internal_4ba14760eb726559801b45439d26805804e9f7033bc26a916e7c03f5fc3c7f39->leave($__internal_4ba14760eb726559801b45439d26805804e9f7033bc26a916e7c03f5fc3c7f39_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cbaff320f61a8620a22084c3dfc3b3a98afaff663c0b78d810306f96f5165455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbaff320f61a8620a22084c3dfc3b3a98afaff663c0b78d810306f96f5165455->enter($__internal_cbaff320f61a8620a22084c3dfc3b3a98afaff663c0b78d810306f96f5165455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7b1f68740b75e82fd4b6171e0c2f2f85617baa099fa04aeab75614e76f3ff5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1f68740b75e82fd4b6171e0c2f2f85617baa099fa04aeab75614e76f3ff5fa->enter($__internal_7b1f68740b75e82fd4b6171e0c2f2f85617baa099fa04aeab75614e76f3ff5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7b1f68740b75e82fd4b6171e0c2f2f85617baa099fa04aeab75614e76f3ff5fa->leave($__internal_7b1f68740b75e82fd4b6171e0c2f2f85617baa099fa04aeab75614e76f3ff5fa_prof);

        
        $__internal_cbaff320f61a8620a22084c3dfc3b3a98afaff663c0b78d810306f96f5165455->leave($__internal_cbaff320f61a8620a22084c3dfc3b3a98afaff663c0b78d810306f96f5165455_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_90edecc2d8009046ba4b28b702eaf91fb8c92dc8a57bb8cf36fc88512259e85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90edecc2d8009046ba4b28b702eaf91fb8c92dc8a57bb8cf36fc88512259e85f->enter($__internal_90edecc2d8009046ba4b28b702eaf91fb8c92dc8a57bb8cf36fc88512259e85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed2a7f4d978ca950a86cfa73196dc53a96d645dceb31c512c18fd0a09bfc87f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2a7f4d978ca950a86cfa73196dc53a96d645dceb31c512c18fd0a09bfc87f8->enter($__internal_ed2a7f4d978ca950a86cfa73196dc53a96d645dceb31c512c18fd0a09bfc87f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ed2a7f4d978ca950a86cfa73196dc53a96d645dceb31c512c18fd0a09bfc87f8->leave($__internal_ed2a7f4d978ca950a86cfa73196dc53a96d645dceb31c512c18fd0a09bfc87f8_prof);

        
        $__internal_90edecc2d8009046ba4b28b702eaf91fb8c92dc8a57bb8cf36fc88512259e85f->leave($__internal_90edecc2d8009046ba4b28b702eaf91fb8c92dc8a57bb8cf36fc88512259e85f_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88f393e7fb07c83e4a32f8e85b35c9adfd14dcb82d564b941d2c5acb6659e224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f393e7fb07c83e4a32f8e85b35c9adfd14dcb82d564b941d2c5acb6659e224->enter($__internal_88f393e7fb07c83e4a32f8e85b35c9adfd14dcb82d564b941d2c5acb6659e224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7df8292fa8bc206377207d00077460f418795c57a28c5d01cf8908ebc4613140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df8292fa8bc206377207d00077460f418795c57a28c5d01cf8908ebc4613140->enter($__internal_7df8292fa8bc206377207d00077460f418795c57a28c5d01cf8908ebc4613140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7df8292fa8bc206377207d00077460f418795c57a28c5d01cf8908ebc4613140->leave($__internal_7df8292fa8bc206377207d00077460f418795c57a28c5d01cf8908ebc4613140_prof);

        
        $__internal_88f393e7fb07c83e4a32f8e85b35c9adfd14dcb82d564b941d2c5acb6659e224->leave($__internal_88f393e7fb07c83e4a32f8e85b35c9adfd14dcb82d564b941d2c5acb6659e224_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtReception:search.html.twig";
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
{% endblock %}", "AdminBundle:CtReception:search.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtReception/search.html.twig");
    }
}
