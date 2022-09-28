<?php

/* @Admin/CtUsageTarif/add.html.twig */
class __TwigTemplate_b6b1f21879d36661694e6691eb5aa725ae7e54c47796f4bf44021e785abd8b44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUsageTarif/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d58a74aacae8a777abbb4727c381f55f2fdff20e7198e0aa1eb4e4274fb74f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58a74aacae8a777abbb4727c381f55f2fdff20e7198e0aa1eb4e4274fb74f5a->enter($__internal_d58a74aacae8a777abbb4727c381f55f2fdff20e7198e0aa1eb4e4274fb74f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsageTarif/add.html.twig"));

        $__internal_b258cc20167803bf568954df9b0fd4a8d94f0317f4be5f8cb4ccac1d2b867b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b258cc20167803bf568954df9b0fd4a8d94f0317f4be5f8cb4ccac1d2b867b6d->enter($__internal_b258cc20167803bf568954df9b0fd4a8d94f0317f4be5f8cb4ccac1d2b867b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsageTarif/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeVisite", array()), array(0 => $this));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctUsage", array()), array(0 => $this));
        // line 9
        $context["menu_usage_tarif"] = true;
        // line 10
        $context["menu_usage_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d58a74aacae8a777abbb4727c381f55f2fdff20e7198e0aa1eb4e4274fb74f5a->leave($__internal_d58a74aacae8a777abbb4727c381f55f2fdff20e7198e0aa1eb4e4274fb74f5a_prof);

        
        $__internal_b258cc20167803bf568954df9b0fd4a8d94f0317f4be5f8cb4ccac1d2b867b6d->leave($__internal_b258cc20167803bf568954df9b0fd4a8d94f0317f4be5f8cb4ccac1d2b867b6d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6892e3908202bcf51065dc4d5479c14429b3b16cfc3d207a2a825f46a95053f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6892e3908202bcf51065dc4d5479c14429b3b16cfc3d207a2a825f46a95053f->enter($__internal_b6892e3908202bcf51065dc4d5479c14429b3b16cfc3d207a2a825f46a95053f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55583e75c0e5bc5528bf78b1bc81154bb9695963f7d8b6bf75934ca2d3ea23a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55583e75c0e5bc5528bf78b1bc81154bb9695963f7d8b6bf75934ca2d3ea23a8->enter($__internal_55583e75c0e5bc5528bf78b1bc81154bb9695963f7d8b6bf75934ca2d3ea23a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif usage ";
        
        $__internal_55583e75c0e5bc5528bf78b1bc81154bb9695963f7d8b6bf75934ca2d3ea23a8->leave($__internal_55583e75c0e5bc5528bf78b1bc81154bb9695963f7d8b6bf75934ca2d3ea23a8_prof);

        
        $__internal_b6892e3908202bcf51065dc4d5479c14429b3b16cfc3d207a2a825f46a95053f->leave($__internal_b6892e3908202bcf51065dc4d5479c14429b3b16cfc3d207a2a825f46a95053f_prof);

    }

    // line 12
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_11d9f32158c9313fa228b39dd77b8ea201a052892ae8bd81a4ec0e1e6f9671f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d9f32158c9313fa228b39dd77b8ea201a052892ae8bd81a4ec0e1e6f9671f8->enter($__internal_11d9f32158c9313fa228b39dd77b8ea201a052892ae8bd81a4ec0e1e6f9671f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1f9d2ec103544eb87aaac7b75545e3433ec328d68e7fa781e3fdc33f3c6d7f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9d2ec103544eb87aaac7b75545e3433ec328d68e7fa781e3fdc33f3c6d7f8f->enter($__internal_1f9d2ec103544eb87aaac7b75545e3433ec328d68e7fa781e3fdc33f3c6d7f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 13
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 14
            $context["required"] = false;
        }
        // line 16
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 18
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 19
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 20
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 21
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 24
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 25
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 26
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 27
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 28
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 31
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 32
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 33
        echo "</select>
    </span>";
        
        $__internal_1f9d2ec103544eb87aaac7b75545e3433ec328d68e7fa781e3fdc33f3c6d7f8f->leave($__internal_1f9d2ec103544eb87aaac7b75545e3433ec328d68e7fa781e3fdc33f3c6d7f8f_prof);

        
        $__internal_11d9f32158c9313fa228b39dd77b8ea201a052892ae8bd81a4ec0e1e6f9671f8->leave($__internal_11d9f32158c9313fa228b39dd77b8ea201a052892ae8bd81a4ec0e1e6f9671f8_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f37974880cc820c48155fe53246ab5382765878fc73b690fff593b69038a2b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f37974880cc820c48155fe53246ab5382765878fc73b690fff593b69038a2b5->enter($__internal_9f37974880cc820c48155fe53246ab5382765878fc73b690fff593b69038a2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbfc2f48f0c39236502fa3bf31f8e917089acea34243ef751b2c79a59d999cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfc2f48f0c39236502fa3bf31f8e917089acea34243ef751b2c79a59d999cee->enter($__internal_cbfc2f48f0c39236502fa3bf31f8e917089acea34243ef751b2c79a59d999cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 39
            echo "        <div class=\"callout callout-success\">
            ";
            // line 40
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 44
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 45
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ajouter tarif usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeVisite", array()), 'row');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctUsage", array()), 'row');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usgTrfPrix", array()), 'row');
        echo "
                        ";
        // line 62
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_usage\"/>
                        <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_cbfc2f48f0c39236502fa3bf31f8e917089acea34243ef751b2c79a59d999cee->leave($__internal_cbfc2f48f0c39236502fa3bf31f8e917089acea34243ef751b2c79a59d999cee_prof);

        
        $__internal_9f37974880cc820c48155fe53246ab5382765878fc73b690fff593b69038a2b5->leave($__internal_9f37974880cc820c48155fe53246ab5382765878fc73b690fff593b69038a2b5_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUsageTarif/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 71,  215 => 66,  209 => 62,  205 => 60,  201 => 59,  197 => 58,  188 => 52,  182 => 48,  173 => 45,  170 => 44,  165 => 43,  156 => 40,  153 => 39,  148 => 38,  139 => 37,  128 => 33,  126 => 32,  124 => 31,  118 => 28,  116 => 27,  114 => 26,  112 => 25,  110 => 24,  105 => 21,  98 => 20,  96 => 19,  90 => 18,  86 => 16,  83 => 14,  81 => 13,  72 => 12,  53 => 7,  43 => 1,  41 => 10,  39 => 9,  37 => 5,  35 => 4,  33 => 3,  11 => 1,);
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
{% form_theme form.ctTypeVisite _self %}
{% form_theme form.ctUsage _self %}

{% block title %}{{ parent() }} Ajout Tarif usage {% endblock %}

{% set menu_usage_tarif        = true %}
{% set menu_usage_tarif_create = true %}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
            {%- if placeholder is not none -%}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {{ placeholder != '' ? placeholder|trans({}, translation_domain) }}
                </option>
            {%- endif -%}
            {%- if preferred_choices|length > 0 -%}
                {% set options = preferred_choices %}
                {{- block('choice_widget_options') -}}
                {%- if choices|length > 0 and separator is not none -%}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {%- endif -%}
            {%- endif -%}
            {%- set options = choices -%}
            {{- block('choice_widget_options') -}}
        </select>
    </span>
{%- endblock choice_widget_collapsed -%}

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
                        <h3 class=\"box-title\">Ajouter tarif usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctTypeVisite) }}
                        {{ form_row(form.ctUsage) }}
                        {{ form_row(form.usgTrfPrix) }}
                        {#{{ form_row(form.usgTrfAnnee) }}#}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_usage\"/>
                        <a href=\"{{ path('usage_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtUsageTarif/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUsageTarif\\add.html.twig");
    }
}
