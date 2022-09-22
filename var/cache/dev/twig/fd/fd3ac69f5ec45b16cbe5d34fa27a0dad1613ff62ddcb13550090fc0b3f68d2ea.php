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
        $__internal_aca1d8aeb8187120f86f6896528ef6762be3543fbb2edff7af10b06ccc2c35c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca1d8aeb8187120f86f6896528ef6762be3543fbb2edff7af10b06ccc2c35c9->enter($__internal_aca1d8aeb8187120f86f6896528ef6762be3543fbb2edff7af10b06ccc2c35c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:search.html.twig"));

        $__internal_d01c1b1ecdbf56c1d5f52733f4ead37d13ed43bd0c7eae96a4f246f84077e689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01c1b1ecdbf56c1d5f52733f4ead37d13ed43bd0c7eae96a4f246f84077e689->enter($__internal_d01c1b1ecdbf56c1d5f52733f4ead37d13ed43bd0c7eae96a4f246f84077e689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:search.html.twig"));

        // line 12
        $context["menu_reception"] = true;
        // line 13
        $context["menu_reception_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aca1d8aeb8187120f86f6896528ef6762be3543fbb2edff7af10b06ccc2c35c9->leave($__internal_aca1d8aeb8187120f86f6896528ef6762be3543fbb2edff7af10b06ccc2c35c9_prof);

        
        $__internal_d01c1b1ecdbf56c1d5f52733f4ead37d13ed43bd0c7eae96a4f246f84077e689->leave($__internal_d01c1b1ecdbf56c1d5f52733f4ead37d13ed43bd0c7eae96a4f246f84077e689_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8bc423e70b50948e88a9698a76214178031251915094b6007d099c5013e92c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8bc423e70b50948e88a9698a76214178031251915094b6007d099c5013e92c8->enter($__internal_c8bc423e70b50948e88a9698a76214178031251915094b6007d099c5013e92c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4507fde1b31fe92222e36de742a8ed6152c69f033c90268a8a71440bc5604a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4507fde1b31fe92222e36de742a8ed6152c69f033c90268a8a71440bc5604a0f->enter($__internal_4507fde1b31fe92222e36de742a8ed6152c69f033c90268a8a71440bc5604a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche Réception ";
        
        $__internal_4507fde1b31fe92222e36de742a8ed6152c69f033c90268a8a71440bc5604a0f->leave($__internal_4507fde1b31fe92222e36de742a8ed6152c69f033c90268a8a71440bc5604a0f_prof);

        
        $__internal_c8bc423e70b50948e88a9698a76214178031251915094b6007d099c5013e92c8->leave($__internal_c8bc423e70b50948e88a9698a76214178031251915094b6007d099c5013e92c8_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_856ac7b0db071810b3f112fdbd4790f8c6c8346d7dfdb943232229da7a712efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856ac7b0db071810b3f112fdbd4790f8c6c8346d7dfdb943232229da7a712efd->enter($__internal_856ac7b0db071810b3f112fdbd4790f8c6c8346d7dfdb943232229da7a712efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8ed1eab9a47ec6c9291efa3f2c04beb54cf3809103796b3796b73724280a5302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed1eab9a47ec6c9291efa3f2c04beb54cf3809103796b3796b73724280a5302->enter($__internal_8ed1eab9a47ec6c9291efa3f2c04beb54cf3809103796b3796b73724280a5302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8ed1eab9a47ec6c9291efa3f2c04beb54cf3809103796b3796b73724280a5302->leave($__internal_8ed1eab9a47ec6c9291efa3f2c04beb54cf3809103796b3796b73724280a5302_prof);

        
        $__internal_856ac7b0db071810b3f112fdbd4790f8c6c8346d7dfdb943232229da7a712efd->leave($__internal_856ac7b0db071810b3f112fdbd4790f8c6c8346d7dfdb943232229da7a712efd_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_3442967d5fe352cfb2512677992e6986d8b697d4f796bd7e69e942a5d9f87e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3442967d5fe352cfb2512677992e6986d8b697d4f796bd7e69e942a5d9f87e52->enter($__internal_3442967d5fe352cfb2512677992e6986d8b697d4f796bd7e69e942a5d9f87e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ca13ebec7573def128636b3b9eae7f88969e81bb230b0eed4f2e78e4b3133b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca13ebec7573def128636b3b9eae7f88969e81bb230b0eed4f2e78e4b3133b0->enter($__internal_0ca13ebec7573def128636b3b9eae7f88969e81bb230b0eed4f2e78e4b3133b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0ca13ebec7573def128636b3b9eae7f88969e81bb230b0eed4f2e78e4b3133b0->leave($__internal_0ca13ebec7573def128636b3b9eae7f88969e81bb230b0eed4f2e78e4b3133b0_prof);

        
        $__internal_3442967d5fe352cfb2512677992e6986d8b697d4f796bd7e69e942a5d9f87e52->leave($__internal_3442967d5fe352cfb2512677992e6986d8b697d4f796bd7e69e942a5d9f87e52_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15f78bf1fc457b1c2b48e6b4a0dd0e86311cf29568907cc8487bff4c613f94eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f78bf1fc457b1c2b48e6b4a0dd0e86311cf29568907cc8487bff4c613f94eb->enter($__internal_15f78bf1fc457b1c2b48e6b4a0dd0e86311cf29568907cc8487bff4c613f94eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f5fe76b2d9c39c3eac18849b51dbdc0864f1baa0ecfe84974492b7130fb340a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5fe76b2d9c39c3eac18849b51dbdc0864f1baa0ecfe84974492b7130fb340a->enter($__internal_5f5fe76b2d9c39c3eac18849b51dbdc0864f1baa0ecfe84974492b7130fb340a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5f5fe76b2d9c39c3eac18849b51dbdc0864f1baa0ecfe84974492b7130fb340a->leave($__internal_5f5fe76b2d9c39c3eac18849b51dbdc0864f1baa0ecfe84974492b7130fb340a_prof);

        
        $__internal_15f78bf1fc457b1c2b48e6b4a0dd0e86311cf29568907cc8487bff4c613f94eb->leave($__internal_15f78bf1fc457b1c2b48e6b4a0dd0e86311cf29568907cc8487bff4c613f94eb_prof);

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
