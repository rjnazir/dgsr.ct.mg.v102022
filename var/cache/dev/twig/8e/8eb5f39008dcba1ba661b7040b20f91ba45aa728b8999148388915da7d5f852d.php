<?php

/* @Admin/CtUsageTarif/edit.html.twig */
class __TwigTemplate_b786d4d9922d4205a8dd2a3ef6db651375a34183117e93ffb0c057906c4fbdf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUsageTarif/edit.html.twig", 1);
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
        $__internal_254bd9ded465ff9f2579926e73b99a0f0ec0e6c4a69ecc5b27b4a1fa7e955bea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254bd9ded465ff9f2579926e73b99a0f0ec0e6c4a69ecc5b27b4a1fa7e955bea->enter($__internal_254bd9ded465ff9f2579926e73b99a0f0ec0e6c4a69ecc5b27b4a1fa7e955bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsageTarif/edit.html.twig"));

        $__internal_ca3b83a9dac7ef6a1bc7c2eda0b10ac6c1088e8eba168ba56612f5a64d11da2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3b83a9dac7ef6a1bc7c2eda0b10ac6c1088e8eba168ba56612f5a64d11da2e->enter($__internal_ca3b83a9dac7ef6a1bc7c2eda0b10ac6c1088e8eba168ba56612f5a64d11da2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsageTarif/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctTypeVisite", array()), array(0 => $this));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUsage", array()), array(0 => $this));
        // line 9
        $context["menu_usage_tarif"] = true;
        // line 10
        $context["menu_usage_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254bd9ded465ff9f2579926e73b99a0f0ec0e6c4a69ecc5b27b4a1fa7e955bea->leave($__internal_254bd9ded465ff9f2579926e73b99a0f0ec0e6c4a69ecc5b27b4a1fa7e955bea_prof);

        
        $__internal_ca3b83a9dac7ef6a1bc7c2eda0b10ac6c1088e8eba168ba56612f5a64d11da2e->leave($__internal_ca3b83a9dac7ef6a1bc7c2eda0b10ac6c1088e8eba168ba56612f5a64d11da2e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c729ed5c16303062e61640e57a91bacb663249a5d2895f6e426fab5dd142080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c729ed5c16303062e61640e57a91bacb663249a5d2895f6e426fab5dd142080->enter($__internal_6c729ed5c16303062e61640e57a91bacb663249a5d2895f6e426fab5dd142080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4e716480828f24d91fbdd1440bb6af0aff8e3983e90543c4ba832f8c9db3d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e716480828f24d91fbdd1440bb6af0aff8e3983e90543c4ba832f8c9db3d6e->enter($__internal_f4e716480828f24d91fbdd1440bb6af0aff8e3983e90543c4ba832f8c9db3d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif d'usage ";
        
        $__internal_f4e716480828f24d91fbdd1440bb6af0aff8e3983e90543c4ba832f8c9db3d6e->leave($__internal_f4e716480828f24d91fbdd1440bb6af0aff8e3983e90543c4ba832f8c9db3d6e_prof);

        
        $__internal_6c729ed5c16303062e61640e57a91bacb663249a5d2895f6e426fab5dd142080->leave($__internal_6c729ed5c16303062e61640e57a91bacb663249a5d2895f6e426fab5dd142080_prof);

    }

    // line 12
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_cf977cc39b77dddb7a0657eddd3317c4fd064046c934c52db803fba61d47d1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf977cc39b77dddb7a0657eddd3317c4fd064046c934c52db803fba61d47d1bc->enter($__internal_cf977cc39b77dddb7a0657eddd3317c4fd064046c934c52db803fba61d47d1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_50fb7d51ace9ec425c47e36b687bb27b5a69e719e4bd4cb8ccc1febfba59c30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fb7d51ace9ec425c47e36b687bb27b5a69e719e4bd4cb8ccc1febfba59c30b->enter($__internal_50fb7d51ace9ec425c47e36b687bb27b5a69e719e4bd4cb8ccc1febfba59c30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_50fb7d51ace9ec425c47e36b687bb27b5a69e719e4bd4cb8ccc1febfba59c30b->leave($__internal_50fb7d51ace9ec425c47e36b687bb27b5a69e719e4bd4cb8ccc1febfba59c30b_prof);

        
        $__internal_cf977cc39b77dddb7a0657eddd3317c4fd064046c934c52db803fba61d47d1bc->leave($__internal_cf977cc39b77dddb7a0657eddd3317c4fd064046c934c52db803fba61d47d1bc_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_1809a73b53ee3a302ef821faf2cfa2385eec0fdf7088549055112b54360f2a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1809a73b53ee3a302ef821faf2cfa2385eec0fdf7088549055112b54360f2a73->enter($__internal_1809a73b53ee3a302ef821faf2cfa2385eec0fdf7088549055112b54360f2a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9355529ff8ec783af34bc2c7cbc85940f5ffa0b7cd4266206d87734853a6ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9355529ff8ec783af34bc2c7cbc85940f5ffa0b7cd4266206d87734853a6ea8->enter($__internal_e9355529ff8ec783af34bc2c7cbc85940f5ffa0b7cd4266206d87734853a6ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif usage</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctTypeVisite", array()), 'row');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUsage", array()), 'row');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usgTrfPrix", array()), 'row');
        echo "
                        ";
        // line 62
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_usage\"/>
                        <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_tarif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_e9355529ff8ec783af34bc2c7cbc85940f5ffa0b7cd4266206d87734853a6ea8->leave($__internal_e9355529ff8ec783af34bc2c7cbc85940f5ffa0b7cd4266206d87734853a6ea8_prof);

        
        $__internal_1809a73b53ee3a302ef821faf2cfa2385eec0fdf7088549055112b54360f2a73->leave($__internal_1809a73b53ee3a302ef821faf2cfa2385eec0fdf7088549055112b54360f2a73_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUsageTarif/edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}
{% form_theme edit_form.ctTypeVisite _self %}
{% form_theme edit_form.ctUsage _self %}

{% block title %}{{ parent() }} Modification tarif d'usage {% endblock %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif usage</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctTypeVisite) }}
                        {{ form_row(edit_form.ctUsage) }}
                        {{ form_row(edit_form.usgTrfPrix) }}
                        {#{{ form_row(edit_form.usgTrfAnnee) }}#}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_usage\"/>
                        <a href=\"{{ path('usage_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtUsageTarif/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUsageTarif\\edit.html.twig");
    }
}
