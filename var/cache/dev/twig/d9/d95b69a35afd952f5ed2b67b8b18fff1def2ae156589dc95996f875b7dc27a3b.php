<?php

/* AdminBundle:CtGenre:add.html.twig */
class __TwigTemplate_c408886cdfdf1103b91e8f7b7a6ec416ed59625907826454b9fb203852d70878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtGenre:add.html.twig", 1);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
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
        $__internal_6408036ba35fdd0a3061f4b75bc5034e40b27e6784ab46b9249ee597feaa3095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6408036ba35fdd0a3061f4b75bc5034e40b27e6784ab46b9249ee597feaa3095->enter($__internal_6408036ba35fdd0a3061f4b75bc5034e40b27e6784ab46b9249ee597feaa3095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenre:add.html.twig"));

        $__internal_92ec3fdb88bb0e0e615b2916c1930099823aa2279792983ea7f9c55414b67b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ec3fdb88bb0e0e615b2916c1930099823aa2279792983ea7f9c55414b67b3e->enter($__internal_92ec3fdb88bb0e0e615b2916c1930099823aa2279792983ea7f9c55414b67b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenre:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctGenreCategorie", array()), array(0 => $this));
        // line 32
        $context["menu_genre"] = true;
        // line 33
        $context["menu_genre_type"] = true;
        // line 34
        $context["menu_genre_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6408036ba35fdd0a3061f4b75bc5034e40b27e6784ab46b9249ee597feaa3095->leave($__internal_6408036ba35fdd0a3061f4b75bc5034e40b27e6784ab46b9249ee597feaa3095_prof);

        
        $__internal_92ec3fdb88bb0e0e615b2916c1930099823aa2279792983ea7f9c55414b67b3e->leave($__internal_92ec3fdb88bb0e0e615b2916c1930099823aa2279792983ea7f9c55414b67b3e_prof);

    }

    // line 5
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_314aa9c6b6766775a5528939755eb13e4a1d28228d5f16825f97dbfe5b587c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314aa9c6b6766775a5528939755eb13e4a1d28228d5f16825f97dbfe5b587c85->enter($__internal_314aa9c6b6766775a5528939755eb13e4a1d28228d5f16825f97dbfe5b587c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_2d585602a8af942ea32ece63c52d00721bf04cebfb5fd7007f6f419990a32e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d585602a8af942ea32ece63c52d00721bf04cebfb5fd7007f6f419990a32e65->enter($__internal_2d585602a8af942ea32ece63c52d00721bf04cebfb5fd7007f6f419990a32e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 6
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 7
            $context["required"] = false;
        }
        // line 9
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 11
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 12
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 13
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 14
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 17
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 18
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 19
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 20
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 21
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 24
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 25
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 26
        echo "</select>
    </span>";
        
        $__internal_2d585602a8af942ea32ece63c52d00721bf04cebfb5fd7007f6f419990a32e65->leave($__internal_2d585602a8af942ea32ece63c52d00721bf04cebfb5fd7007f6f419990a32e65_prof);

        
        $__internal_314aa9c6b6766775a5528939755eb13e4a1d28228d5f16825f97dbfe5b587c85->leave($__internal_314aa9c6b6766775a5528939755eb13e4a1d28228d5f16825f97dbfe5b587c85_prof);

    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a31df235967d9c186f52fc4fa3eeb3c7515bfbd55502554af643dd962e0dbc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a31df235967d9c186f52fc4fa3eeb3c7515bfbd55502554af643dd962e0dbc6->enter($__internal_7a31df235967d9c186f52fc4fa3eeb3c7515bfbd55502554af643dd962e0dbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3950c29ab0f438b7b5094ba6779924399fb8aa8727af50d2bf2ada6a6ca97b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3950c29ab0f438b7b5094ba6779924399fb8aa8727af50d2bf2ada6a6ca97b9a->enter($__internal_3950c29ab0f438b7b5094ba6779924399fb8aa8727af50d2bf2ada6a6ca97b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout genre ";
        
        $__internal_3950c29ab0f438b7b5094ba6779924399fb8aa8727af50d2bf2ada6a6ca97b9a->leave($__internal_3950c29ab0f438b7b5094ba6779924399fb8aa8727af50d2bf2ada6a6ca97b9a_prof);

        
        $__internal_7a31df235967d9c186f52fc4fa3eeb3c7515bfbd55502554af643dd962e0dbc6->leave($__internal_7a31df235967d9c186f52fc4fa3eeb3c7515bfbd55502554af643dd962e0dbc6_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e2e909eab9e4c0296ef6774dba51c07651dab12ee30345ef6e3cc0023b76131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2e909eab9e4c0296ef6774dba51c07651dab12ee30345ef6e3cc0023b76131->enter($__internal_3e2e909eab9e4c0296ef6774dba51c07651dab12ee30345ef6e3cc0023b76131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e94cc2d79b1f21a73796e99354a8f55b4cc2ca993d69216c05c23cc88d36d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e94cc2d79b1f21a73796e99354a8f55b4cc2ca993d69216c05c23cc88d36d0c->enter($__internal_8e94cc2d79b1f21a73796e99354a8f55b4cc2ca993d69216c05c23cc88d36d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 38
            echo "        <div class=\"callout callout-success\">
            ";
            // line 39
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 44
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une genre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctGenreCategorie", array()), 'row');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grLibelle", array()), 'row');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_genre\"/>
                        <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_8e94cc2d79b1f21a73796e99354a8f55b4cc2ca993d69216c05c23cc88d36d0c->leave($__internal_8e94cc2d79b1f21a73796e99354a8f55b4cc2ca993d69216c05c23cc88d36d0c_prof);

        
        $__internal_3e2e909eab9e4c0296ef6774dba51c07651dab12ee30345ef6e3cc0023b76131->leave($__internal_3e2e909eab9e4c0296ef6774dba51c07651dab12ee30345ef6e3cc0023b76131_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtGenre:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 69,  213 => 64,  205 => 59,  201 => 58,  197 => 57,  188 => 51,  182 => 47,  173 => 44,  170 => 43,  165 => 42,  156 => 39,  153 => 38,  148 => 37,  139 => 36,  120 => 30,  109 => 26,  107 => 25,  105 => 24,  99 => 21,  97 => 20,  95 => 19,  93 => 18,  91 => 17,  86 => 14,  79 => 13,  77 => 12,  71 => 11,  67 => 9,  64 => 7,  62 => 6,  53 => 5,  43 => 1,  41 => 34,  39 => 33,  37 => 32,  35 => 4,  33 => 3,  11 => 1,);
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
{% form_theme form.ctGenreCategorie _self %}
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

{% block title %}{{ parent() }} Ajout genre {% endblock %}

{% set menu_genre               = true %}
{% set menu_genre_type          = true %}
{% set menu_genre_type_create   = true %}

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
                        <h3 class=\"box-title\">Créer une genre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctGenreCategorie) }}
                        {{ form_row(form.grLibelle) }}
                        {{ form_row(form.grCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_genre\"/>
                        <a href=\"{{ path('genre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtGenre:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtGenre/add.html.twig");
    }
}
