<?php

/* AdminBundle:CtVisiteExtraTarif:edit.html.twig */
class __TwigTemplate_b15ec785c26c167fe04bcbfd6ac97153a4d7cddab399f4a1254a181c9abd9cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtVisiteExtraTarif:edit.html.twig", 1);
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
        $__internal_79ad515b60aa88e23e09c2a6e5a89e99c82be0bba6e09851d534a6836c4c7675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ad515b60aa88e23e09c2a6e5a89e99c82be0bba6e09851d534a6836c4c7675->enter($__internal_79ad515b60aa88e23e09c2a6e5a89e99c82be0bba6e09851d534a6836c4c7675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtraTarif:edit.html.twig"));

        $__internal_8fee5903c1c97ded9c34f1c64a5a2645d5c3e80e8ebf19e113e6e706c3bbd233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fee5903c1c97ded9c34f1c64a5a2645d5c3e80e8ebf19e113e6e706c3bbd233->enter($__internal_8fee5903c1c97ded9c34f1c64a5a2645d5c3e80e8ebf19e113e6e706c3bbd233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtraTarif:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 8
        $context["menu_visite_extra_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79ad515b60aa88e23e09c2a6e5a89e99c82be0bba6e09851d534a6836c4c7675->leave($__internal_79ad515b60aa88e23e09c2a6e5a89e99c82be0bba6e09851d534a6836c4c7675_prof);

        
        $__internal_8fee5903c1c97ded9c34f1c64a5a2645d5c3e80e8ebf19e113e6e706c3bbd233->leave($__internal_8fee5903c1c97ded9c34f1c64a5a2645d5c3e80e8ebf19e113e6e706c3bbd233_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_db46917f67721157067d2f3d1b1c44592915e5f5a9224a71490342f33dd77379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db46917f67721157067d2f3d1b1c44592915e5f5a9224a71490342f33dd77379->enter($__internal_db46917f67721157067d2f3d1b1c44592915e5f5a9224a71490342f33dd77379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8cef0188f50bb9502838ed99363cf08fc093d05537f2290183a9c837da5f9e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cef0188f50bb9502838ed99363cf08fc093d05537f2290183a9c837da5f9e86->enter($__internal_8cef0188f50bb9502838ed99363cf08fc093d05537f2290183a9c837da5f9e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de visite extra ";
        
        $__internal_8cef0188f50bb9502838ed99363cf08fc093d05537f2290183a9c837da5f9e86->leave($__internal_8cef0188f50bb9502838ed99363cf08fc093d05537f2290183a9c837da5f9e86_prof);

        
        $__internal_db46917f67721157067d2f3d1b1c44592915e5f5a9224a71490342f33dd77379->leave($__internal_db46917f67721157067d2f3d1b1c44592915e5f5a9224a71490342f33dd77379_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d6d0ca31339a0d5c8a71a0ca4d9d6d09adb2bb41a54c81d000651fa3a93ffae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6d0ca31339a0d5c8a71a0ca4d9d6d09adb2bb41a54c81d000651fa3a93ffae->enter($__internal_8d6d0ca31339a0d5c8a71a0ca4d9d6d09adb2bb41a54c81d000651fa3a93ffae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cccec953bdbf44f3d682fe2178f7d8713e56b4b6db6e5d2cb082965850017dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cccec953bdbf44f3d682fe2178f7d8713e56b4b6db6e5d2cb082965850017dbb->enter($__internal_cccec953bdbf44f3d682fe2178f7d8713e56b4b6db6e5d2cb082965850017dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVisiteExtra", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vetPrix", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_cccec953bdbf44f3d682fe2178f7d8713e56b4b6db6e5d2cb082965850017dbb->leave($__internal_cccec953bdbf44f3d682fe2178f7d8713e56b4b6db6e5d2cb082965850017dbb_prof);

        
        $__internal_8d6d0ca31339a0d5c8a71a0ca4d9d6d09adb2bb41a54c81d000651fa3a93ffae->leave($__internal_8d6d0ca31339a0d5c8a71a0ca4d9d6d09adb2bb41a54c81d000651fa3a93ffae_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtVisiteExtraTarif:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification tarif de visite extra {% endblock %}

{% set menu_visite_extra = true %}
{% set menu_visite_extra_tarif = true %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctVisiteExtra) }}
                        {{ form_row(edit_form.vetPrix) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtVisiteExtraTarif:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtVisiteExtraTarif/edit.html.twig");
    }
}
