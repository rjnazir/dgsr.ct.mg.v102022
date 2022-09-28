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
        $__internal_eee6c079b2d04754774a05aa8a30ce91639dc188fe3a0ddd7a0fc9ecac3b37b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee6c079b2d04754774a05aa8a30ce91639dc188fe3a0ddd7a0fc9ecac3b37b3->enter($__internal_eee6c079b2d04754774a05aa8a30ce91639dc188fe3a0ddd7a0fc9ecac3b37b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenre/edit.html.twig"));

        $__internal_c6c2f17854721d27128c8b6063726af76633a41485e7d502d6788af3d4b4bfcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c2f17854721d27128c8b6063726af76633a41485e7d502d6788af3d4b4bfcf->enter($__internal_c6c2f17854721d27128c8b6063726af76633a41485e7d502d6788af3d4b4bfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenre/edit.html.twig"));

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
        
        $__internal_eee6c079b2d04754774a05aa8a30ce91639dc188fe3a0ddd7a0fc9ecac3b37b3->leave($__internal_eee6c079b2d04754774a05aa8a30ce91639dc188fe3a0ddd7a0fc9ecac3b37b3_prof);

        
        $__internal_c6c2f17854721d27128c8b6063726af76633a41485e7d502d6788af3d4b4bfcf->leave($__internal_c6c2f17854721d27128c8b6063726af76633a41485e7d502d6788af3d4b4bfcf_prof);

    }

    // line 5
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_aec70c40215d3ad5e6efca2be8cc1359d98af70e49d8c0adbd4f6de6e79215f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec70c40215d3ad5e6efca2be8cc1359d98af70e49d8c0adbd4f6de6e79215f7->enter($__internal_aec70c40215d3ad5e6efca2be8cc1359d98af70e49d8c0adbd4f6de6e79215f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e0c2cca93c5bdbcd00e8998738161bca49cf9b2aba1a47a4c85bf87af97f4f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c2cca93c5bdbcd00e8998738161bca49cf9b2aba1a47a4c85bf87af97f4f5b->enter($__internal_e0c2cca93c5bdbcd00e8998738161bca49cf9b2aba1a47a4c85bf87af97f4f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_e0c2cca93c5bdbcd00e8998738161bca49cf9b2aba1a47a4c85bf87af97f4f5b->leave($__internal_e0c2cca93c5bdbcd00e8998738161bca49cf9b2aba1a47a4c85bf87af97f4f5b_prof);

        
        $__internal_aec70c40215d3ad5e6efca2be8cc1359d98af70e49d8c0adbd4f6de6e79215f7->leave($__internal_aec70c40215d3ad5e6efca2be8cc1359d98af70e49d8c0adbd4f6de6e79215f7_prof);

    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        $__internal_a754b02676b0dd93334a60f904cd8a25668e9c6258fe091b56612d4b7d8fcd99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a754b02676b0dd93334a60f904cd8a25668e9c6258fe091b56612d4b7d8fcd99->enter($__internal_a754b02676b0dd93334a60f904cd8a25668e9c6258fe091b56612d4b7d8fcd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6fdd0fae53712a0ead9544ab40309ac692ee2cad9986fc8d54ea4a7e1867b903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdd0fae53712a0ead9544ab40309ac692ee2cad9986fc8d54ea4a7e1867b903->enter($__internal_6fdd0fae53712a0ead9544ab40309ac692ee2cad9986fc8d54ea4a7e1867b903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Genre ";
        
        $__internal_6fdd0fae53712a0ead9544ab40309ac692ee2cad9986fc8d54ea4a7e1867b903->leave($__internal_6fdd0fae53712a0ead9544ab40309ac692ee2cad9986fc8d54ea4a7e1867b903_prof);

        
        $__internal_a754b02676b0dd93334a60f904cd8a25668e9c6258fe091b56612d4b7d8fcd99->leave($__internal_a754b02676b0dd93334a60f904cd8a25668e9c6258fe091b56612d4b7d8fcd99_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_67afddea8ab8394330766e8002c3ff131f5e19439906e0f85524a48568f37e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67afddea8ab8394330766e8002c3ff131f5e19439906e0f85524a48568f37e77->enter($__internal_67afddea8ab8394330766e8002c3ff131f5e19439906e0f85524a48568f37e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6e17f52f50078b5b9b31316688af8ce3eca41261a5eae570453ec42d9609c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e17f52f50078b5b9b31316688af8ce3eca41261a5eae570453ec42d9609c8b->enter($__internal_e6e17f52f50078b5b9b31316688af8ce3eca41261a5eae570453ec42d9609c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e6e17f52f50078b5b9b31316688af8ce3eca41261a5eae570453ec42d9609c8b->leave($__internal_e6e17f52f50078b5b9b31316688af8ce3eca41261a5eae570453ec42d9609c8b_prof);

        
        $__internal_67afddea8ab8394330766e8002c3ff131f5e19439906e0f85524a48568f37e77->leave($__internal_67afddea8ab8394330766e8002c3ff131f5e19439906e0f85524a48568f37e77_prof);

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
