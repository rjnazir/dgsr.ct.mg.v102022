<?php

/* @Admin/CtVisiteExtra/add.html.twig */
class __TwigTemplate_9c357547fbb0e231965f3e7308dd5ff1a7af5437bf7e54852ffbc98ed149db9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisiteExtra/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33b97a7af5c09338e92a97ae6ad23e1d5d590bd6aeb388d4ab665bab086a2534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b97a7af5c09338e92a97ae6ad23e1d5d590bd6aeb388d4ab665bab086a2534->enter($__internal_33b97a7af5c09338e92a97ae6ad23e1d5d590bd6aeb388d4ab665bab086a2534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtra/add.html.twig"));

        $__internal_0f7e5434c8869a5e6e8f12f43334bf09c7d74375abc2bd6a650c50134551bd87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7e5434c8869a5e6e8f12f43334bf09c7d74375abc2bd6a650c50134551bd87->enter($__internal_0f7e5434c8869a5e6e8f12f43334bf09c7d74375abc2bd6a650c50134551bd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtra/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 8
        $context["menu_visite_extra_type"] = true;
        // line 9
        $context["menu_visite_extra_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33b97a7af5c09338e92a97ae6ad23e1d5d590bd6aeb388d4ab665bab086a2534->leave($__internal_33b97a7af5c09338e92a97ae6ad23e1d5d590bd6aeb388d4ab665bab086a2534_prof);

        
        $__internal_0f7e5434c8869a5e6e8f12f43334bf09c7d74375abc2bd6a650c50134551bd87->leave($__internal_0f7e5434c8869a5e6e8f12f43334bf09c7d74375abc2bd6a650c50134551bd87_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1788ef7f274eb7b249cd42945e4d09ffabdfa94f7d71111b1cb98e53f61c0487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1788ef7f274eb7b249cd42945e4d09ffabdfa94f7d71111b1cb98e53f61c0487->enter($__internal_1788ef7f274eb7b249cd42945e4d09ffabdfa94f7d71111b1cb98e53f61c0487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5f1e9c66e83e0daf4dfc8cf3d69d0d1177ef59273e7b15f0948fe7e473009d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f1e9c66e83e0daf4dfc8cf3d69d0d1177ef59273e7b15f0948fe7e473009d4->enter($__internal_d5f1e9c66e83e0daf4dfc8cf3d69d0d1177ef59273e7b15f0948fe7e473009d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout visite_extra ";
        
        $__internal_d5f1e9c66e83e0daf4dfc8cf3d69d0d1177ef59273e7b15f0948fe7e473009d4->leave($__internal_d5f1e9c66e83e0daf4dfc8cf3d69d0d1177ef59273e7b15f0948fe7e473009d4_prof);

        
        $__internal_1788ef7f274eb7b249cd42945e4d09ffabdfa94f7d71111b1cb98e53f61c0487->leave($__internal_1788ef7f274eb7b249cd42945e4d09ffabdfa94f7d71111b1cb98e53f61c0487_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0dccba40064e1f815ef26712887811f26e49ec3e220b7ce43fb11881fb5a6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0dccba40064e1f815ef26712887811f26e49ec3e220b7ce43fb11881fb5a6dd->enter($__internal_b0dccba40064e1f815ef26712887811f26e49ec3e220b7ce43fb11881fb5a6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58bddd931abff2ef0be8ba7057978e036c1c22cb12009b109be4d2e814228ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bddd931abff2ef0be8ba7057978e036c1c22cb12009b109be4d2e814228ade->enter($__internal_58bddd931abff2ef0be8ba7057978e036c1c22cb12009b109be4d2e814228ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vsteLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_58bddd931abff2ef0be8ba7057978e036c1c22cb12009b109be4d2e814228ade->leave($__internal_58bddd931abff2ef0be8ba7057978e036c1c22cb12009b109be4d2e814228ade_prof);

        
        $__internal_b0dccba40064e1f815ef26712887811f26e49ec3e220b7ce43fb11881fb5a6dd->leave($__internal_b0dccba40064e1f815ef26712887811f26e49ec3e220b7ce43fb11881fb5a6dd_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisiteExtra/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout visite_extra {% endblock %}

{% set menu_visite_extra           = true %}
{% set menu_visite_extra_type      = true %}
{% set menu_visite_extra_type_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.vsteLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtVisiteExtra/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisiteExtra\\add.html.twig");
    }
}
