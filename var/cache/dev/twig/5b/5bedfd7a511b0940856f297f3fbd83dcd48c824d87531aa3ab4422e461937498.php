<?php

/* @Admin/CtGenre/edit.html.twig */
class __TwigTemplate_1a32b53ce6914b08b5baeb68e20a767964a6a6a90727c86bd0244adc20ed11ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenre/edit.html.twig", 1);
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
        $__internal_f77b5b7deec5398524c7cd2fa04fd4755a769f8d72cea7ecaa7e5b7ede8ec5d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77b5b7deec5398524c7cd2fa04fd4755a769f8d72cea7ecaa7e5b7ede8ec5d6->enter($__internal_f77b5b7deec5398524c7cd2fa04fd4755a769f8d72cea7ecaa7e5b7ede8ec5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenre/edit.html.twig"));

        $__internal_38e821b96a5c45606cf7ff1a11a283d5b26a1940c4a7ad715427076143079534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e821b96a5c45606cf7ff1a11a283d5b26a1940c4a7ad715427076143079534->enter($__internal_38e821b96a5c45606cf7ff1a11a283d5b26a1940c4a7ad715427076143079534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenre/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctGenreCategorie", array()), array(0 => $this));
        // line 32
        $context["menu_genre"] = true;
        // line 33
        $context["menu_genre_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f77b5b7deec5398524c7cd2fa04fd4755a769f8d72cea7ecaa7e5b7ede8ec5d6->leave($__internal_f77b5b7deec5398524c7cd2fa04fd4755a769f8d72cea7ecaa7e5b7ede8ec5d6_prof);

        
        $__internal_38e821b96a5c45606cf7ff1a11a283d5b26a1940c4a7ad715427076143079534->leave($__internal_38e821b96a5c45606cf7ff1a11a283d5b26a1940c4a7ad715427076143079534_prof);

    }

    // line 5
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d6b78491abb08576da7f7f7ea980bd8f026d7873b5f987e70ca9467988f0b31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b78491abb08576da7f7f7ea980bd8f026d7873b5f987e70ca9467988f0b31b->enter($__internal_d6b78491abb08576da7f7f7ea980bd8f026d7873b5f987e70ca9467988f0b31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e19cc0a78ecdfb7ba31bf2a8f15b9ff69ab172fed155baeaf7b26522f22a3dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19cc0a78ecdfb7ba31bf2a8f15b9ff69ab172fed155baeaf7b26522f22a3dd6->enter($__internal_e19cc0a78ecdfb7ba31bf2a8f15b9ff69ab172fed155baeaf7b26522f22a3dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_e19cc0a78ecdfb7ba31bf2a8f15b9ff69ab172fed155baeaf7b26522f22a3dd6->leave($__internal_e19cc0a78ecdfb7ba31bf2a8f15b9ff69ab172fed155baeaf7b26522f22a3dd6_prof);

        
        $__internal_d6b78491abb08576da7f7f7ea980bd8f026d7873b5f987e70ca9467988f0b31b->leave($__internal_d6b78491abb08576da7f7f7ea980bd8f026d7873b5f987e70ca9467988f0b31b_prof);

    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        $__internal_289c65dcafc25cefbd9cb18f71656a26db53a366d0e7a93ae68b5d5de55e979d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289c65dcafc25cefbd9cb18f71656a26db53a366d0e7a93ae68b5d5de55e979d->enter($__internal_289c65dcafc25cefbd9cb18f71656a26db53a366d0e7a93ae68b5d5de55e979d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b21cec644098db80352724b7fd3f47bd732fe9c2c3d98a351de9e06334ee0616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21cec644098db80352724b7fd3f47bd732fe9c2c3d98a351de9e06334ee0616->enter($__internal_b21cec644098db80352724b7fd3f47bd732fe9c2c3d98a351de9e06334ee0616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Genre ";
        
        $__internal_b21cec644098db80352724b7fd3f47bd732fe9c2c3d98a351de9e06334ee0616->leave($__internal_b21cec644098db80352724b7fd3f47bd732fe9c2c3d98a351de9e06334ee0616_prof);

        
        $__internal_289c65dcafc25cefbd9cb18f71656a26db53a366d0e7a93ae68b5d5de55e979d->leave($__internal_289c65dcafc25cefbd9cb18f71656a26db53a366d0e7a93ae68b5d5de55e979d_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_a06a1068f7730fd07a220d5ba441e42f1a573716fbf7f03e9d352ae9a4b08c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06a1068f7730fd07a220d5ba441e42f1a573716fbf7f03e9d352ae9a4b08c83->enter($__internal_a06a1068f7730fd07a220d5ba441e42f1a573716fbf7f03e9d352ae9a4b08c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0bf24eadd1eed3b84ff276eec21c7fa103936e080a43d38c3633ed1ed8ca39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bf24eadd1eed3b84ff276eec21c7fa103936e080a43d38c3633ed1ed8ca39b->enter($__internal_d0bf24eadd1eed3b84ff276eec21c7fa103936e080a43d38c3633ed1ed8ca39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 37
            echo "        <div class=\"callout callout-success\">
            ";
            // line 38
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 43
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une genre</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctGenreCategorie", array()), 'row');
        echo "
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "grLibelle", array()), 'row');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "grCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_d0bf24eadd1eed3b84ff276eec21c7fa103936e080a43d38c3633ed1ed8ca39b->leave($__internal_d0bf24eadd1eed3b84ff276eec21c7fa103936e080a43d38c3633ed1ed8ca39b_prof);

        
        $__internal_a06a1068f7730fd07a220d5ba441e42f1a573716fbf7f03e9d352ae9a4b08c83->leave($__internal_a06a1068f7730fd07a220d5ba441e42f1a573716fbf7f03e9d352ae9a4b08c83_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenre/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 68,  211 => 63,  203 => 58,  199 => 57,  195 => 56,  186 => 50,  180 => 46,  171 => 43,  168 => 42,  163 => 41,  154 => 38,  151 => 37,  146 => 36,  137 => 35,  118 => 30,  107 => 26,  105 => 25,  103 => 24,  97 => 21,  95 => 20,  93 => 19,  91 => 18,  89 => 17,  84 => 14,  77 => 13,  75 => 12,  69 => 11,  65 => 9,  62 => 7,  60 => 6,  51 => 5,  41 => 1,  39 => 33,  37 => 32,  35 => 4,  33 => 3,  11 => 1,);
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
{% form_theme edit_form.ctGenreCategorie _self %}
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

{% block title %}{{ parent() }} Modification Genre {% endblock %}

{% set menu_genre        = true %}
{% set menu_genre_create = true %}

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
                        <h3 class=\"box-title\">Editer une genre</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctGenreCategorie) }}
                        {{ form_row(edit_form.grLibelle) }}
                        {{ form_row(edit_form.grCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"{{ path('genre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtGenre/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenre\\edit.html.twig");
    }
}
