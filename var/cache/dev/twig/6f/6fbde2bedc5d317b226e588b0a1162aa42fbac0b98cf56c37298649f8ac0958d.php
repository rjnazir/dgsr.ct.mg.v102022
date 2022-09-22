<?php

/* AdminBundle:CtTypeDroitPtac:add.html.twig */
class __TwigTemplate_786f6d814449ace990767e9b7caa02357e080868151febbbd2423bd1266579e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeDroitPtac:add.html.twig", 1);
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
        $__internal_77e04378c300161dc4a04ab63ab014bef76db6ec09dab6d2ec55dd2f8ff32832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e04378c300161dc4a04ab63ab014bef76db6ec09dab6d2ec55dd2f8ff32832->enter($__internal_77e04378c300161dc4a04ab63ab014bef76db6ec09dab6d2ec55dd2f8ff32832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeDroitPtac:add.html.twig"));

        $__internal_07ba0ad17c9e9cf4c8645dd2b02b26277c0949cd7f8c029d608b2ae3de130a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ba0ad17c9e9cf4c8645dd2b02b26277c0949cd7f8c029d608b2ae3de130a4c->enter($__internal_07ba0ad17c9e9cf4c8645dd2b02b26277c0949cd7f8c029d608b2ae3de130a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeDroitPtac:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_droit_ptac"] = true;
        // line 8
        $context["menu_type_droit_ptac_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77e04378c300161dc4a04ab63ab014bef76db6ec09dab6d2ec55dd2f8ff32832->leave($__internal_77e04378c300161dc4a04ab63ab014bef76db6ec09dab6d2ec55dd2f8ff32832_prof);

        
        $__internal_07ba0ad17c9e9cf4c8645dd2b02b26277c0949cd7f8c029d608b2ae3de130a4c->leave($__internal_07ba0ad17c9e9cf4c8645dd2b02b26277c0949cd7f8c029d608b2ae3de130a4c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_53f0502a08ee657c9c497c92680a7c05334a8828fbc2e201d7954f45004071af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f0502a08ee657c9c497c92680a7c05334a8828fbc2e201d7954f45004071af->enter($__internal_53f0502a08ee657c9c497c92680a7c05334a8828fbc2e201d7954f45004071af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25f286b871238c44e17f059a196752ba69d3ad7e920cbb28ba4b889bc39027d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f286b871238c44e17f059a196752ba69d3ad7e920cbb28ba4b889bc39027d8->enter($__internal_25f286b871238c44e17f059a196752ba69d3ad7e920cbb28ba4b889bc39027d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de droit_ptac ";
        
        $__internal_25f286b871238c44e17f059a196752ba69d3ad7e920cbb28ba4b889bc39027d8->leave($__internal_25f286b871238c44e17f059a196752ba69d3ad7e920cbb28ba4b889bc39027d8_prof);

        
        $__internal_53f0502a08ee657c9c497c92680a7c05334a8828fbc2e201d7954f45004071af->leave($__internal_53f0502a08ee657c9c497c92680a7c05334a8828fbc2e201d7954f45004071af_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5476a4206c08ba52f9402d6704fa9362c47d078965a30a06ccc700115875eddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5476a4206c08ba52f9402d6704fa9362c47d078965a30a06ccc700115875eddd->enter($__internal_5476a4206c08ba52f9402d6704fa9362c47d078965a30a06ccc700115875eddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b395765b09606dc56a9f24c45f0a22c509f27e73c027f285754faeda88b60a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b395765b09606dc56a9f24c45f0a22c509f27e73c027f285754faeda88b60a2->enter($__internal_5b395765b09606dc56a9f24c45f0a22c509f27e73c027f285754faeda88b60a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpDpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_droit_ptac\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_5b395765b09606dc56a9f24c45f0a22c509f27e73c027f285754faeda88b60a2->leave($__internal_5b395765b09606dc56a9f24c45f0a22c509f27e73c027f285754faeda88b60a2_prof);

        
        $__internal_5476a4206c08ba52f9402d6704fa9362c47d078965a30a06ccc700115875eddd->leave($__internal_5476a4206c08ba52f9402d6704fa9362c47d078965a30a06ccc700115875eddd_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeDroitPtac:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Type de droit_ptac {% endblock %}

{% set menu_type_droit_ptac        = true %}
{% set menu_type_droit_ptac_create = true %}

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
                        <h3 class=\"box-title\">Créer un type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.tpDpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_droit_ptac\"/>
                        <a href=\"{{ path('type_droit_ptac_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeDroitPtac:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeDroitPtac/add.html.twig");
    }
}
