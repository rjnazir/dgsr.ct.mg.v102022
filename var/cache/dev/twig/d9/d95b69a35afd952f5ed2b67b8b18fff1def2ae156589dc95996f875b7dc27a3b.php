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
        $__internal_6fd76a54136a7b8424e77d0350298382facb45bf12b348ae9fae22b348c4ec73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd76a54136a7b8424e77d0350298382facb45bf12b348ae9fae22b348c4ec73->enter($__internal_6fd76a54136a7b8424e77d0350298382facb45bf12b348ae9fae22b348c4ec73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenre:add.html.twig"));

        $__internal_e6b5da63af219b834b7b3b29851b5979413c89eac50da9ebc7f10c8cdcbce48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b5da63af219b834b7b3b29851b5979413c89eac50da9ebc7f10c8cdcbce48f->enter($__internal_e6b5da63af219b834b7b3b29851b5979413c89eac50da9ebc7f10c8cdcbce48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenre:add.html.twig"));

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
        
        $__internal_6fd76a54136a7b8424e77d0350298382facb45bf12b348ae9fae22b348c4ec73->leave($__internal_6fd76a54136a7b8424e77d0350298382facb45bf12b348ae9fae22b348c4ec73_prof);

        
        $__internal_e6b5da63af219b834b7b3b29851b5979413c89eac50da9ebc7f10c8cdcbce48f->leave($__internal_e6b5da63af219b834b7b3b29851b5979413c89eac50da9ebc7f10c8cdcbce48f_prof);

    }

    // line 5
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2f54911ce7b4e258a9c926ba90d95b218f5ead9d43455b851407e5a2dcd15ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f54911ce7b4e258a9c926ba90d95b218f5ead9d43455b851407e5a2dcd15ab3->enter($__internal_2f54911ce7b4e258a9c926ba90d95b218f5ead9d43455b851407e5a2dcd15ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_8c67be3f8ab77fe381b32e0001040bd202568a4f67ab1445ceda822e82b98de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c67be3f8ab77fe381b32e0001040bd202568a4f67ab1445ceda822e82b98de6->enter($__internal_8c67be3f8ab77fe381b32e0001040bd202568a4f67ab1445ceda822e82b98de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_8c67be3f8ab77fe381b32e0001040bd202568a4f67ab1445ceda822e82b98de6->leave($__internal_8c67be3f8ab77fe381b32e0001040bd202568a4f67ab1445ceda822e82b98de6_prof);

        
        $__internal_2f54911ce7b4e258a9c926ba90d95b218f5ead9d43455b851407e5a2dcd15ab3->leave($__internal_2f54911ce7b4e258a9c926ba90d95b218f5ead9d43455b851407e5a2dcd15ab3_prof);

    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        $__internal_e61ae202f7cf99d76d173ddccd67cbcad21b2ef6a1401c715c611bbd0739fefc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61ae202f7cf99d76d173ddccd67cbcad21b2ef6a1401c715c611bbd0739fefc->enter($__internal_e61ae202f7cf99d76d173ddccd67cbcad21b2ef6a1401c715c611bbd0739fefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be4bf686cfa9490014e570db57a5163c42016f390be51165a2c20bc2d6e57f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4bf686cfa9490014e570db57a5163c42016f390be51165a2c20bc2d6e57f63->enter($__internal_be4bf686cfa9490014e570db57a5163c42016f390be51165a2c20bc2d6e57f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout genre ";
        
        $__internal_be4bf686cfa9490014e570db57a5163c42016f390be51165a2c20bc2d6e57f63->leave($__internal_be4bf686cfa9490014e570db57a5163c42016f390be51165a2c20bc2d6e57f63_prof);

        
        $__internal_e61ae202f7cf99d76d173ddccd67cbcad21b2ef6a1401c715c611bbd0739fefc->leave($__internal_e61ae202f7cf99d76d173ddccd67cbcad21b2ef6a1401c715c611bbd0739fefc_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_25d7379e2068369038952996536c78fe62b4b8854c55c35c3a9ad4b1e368aa84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d7379e2068369038952996536c78fe62b4b8854c55c35c3a9ad4b1e368aa84->enter($__internal_25d7379e2068369038952996536c78fe62b4b8854c55c35c3a9ad4b1e368aa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4da94b44d0027fa09a37709c3a84676685a46982c9ff7d812454a1377d64d1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da94b44d0027fa09a37709c3a84676685a46982c9ff7d812454a1377d64d1f2->enter($__internal_4da94b44d0027fa09a37709c3a84676685a46982c9ff7d812454a1377d64d1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4da94b44d0027fa09a37709c3a84676685a46982c9ff7d812454a1377d64d1f2->leave($__internal_4da94b44d0027fa09a37709c3a84676685a46982c9ff7d812454a1377d64d1f2_prof);

        
        $__internal_25d7379e2068369038952996536c78fe62b4b8854c55c35c3a9ad4b1e368aa84->leave($__internal_25d7379e2068369038952996536c78fe62b4b8854c55c35c3a9ad4b1e368aa84_prof);

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
