<?php

/* AdminBundle:CtUsageTarif:edit.html.twig */
class __TwigTemplate_e684393973bf293dfd81fb54400af385728487805525414c40a35ff1dfa6e741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtUsageTarif:edit.html.twig", 1);
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
        $__internal_1012912a66d44acd9f472149fab1303b816dd8b6cf2ac8a7ea8276dc569d333e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1012912a66d44acd9f472149fab1303b816dd8b6cf2ac8a7ea8276dc569d333e->enter($__internal_1012912a66d44acd9f472149fab1303b816dd8b6cf2ac8a7ea8276dc569d333e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsageTarif:edit.html.twig"));

        $__internal_1383e6cdcc18aafecd9908af33e02a174ebcadbd00c58c6aa248c07df55767db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1383e6cdcc18aafecd9908af33e02a174ebcadbd00c58c6aa248c07df55767db->enter($__internal_1383e6cdcc18aafecd9908af33e02a174ebcadbd00c58c6aa248c07df55767db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsageTarif:edit.html.twig"));

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
        
        $__internal_1012912a66d44acd9f472149fab1303b816dd8b6cf2ac8a7ea8276dc569d333e->leave($__internal_1012912a66d44acd9f472149fab1303b816dd8b6cf2ac8a7ea8276dc569d333e_prof);

        
        $__internal_1383e6cdcc18aafecd9908af33e02a174ebcadbd00c58c6aa248c07df55767db->leave($__internal_1383e6cdcc18aafecd9908af33e02a174ebcadbd00c58c6aa248c07df55767db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdbf8f435493551837305249e40515a528e07cc8a0b7eac23a081257cb2572c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdbf8f435493551837305249e40515a528e07cc8a0b7eac23a081257cb2572c1->enter($__internal_bdbf8f435493551837305249e40515a528e07cc8a0b7eac23a081257cb2572c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_276e54a0ac92f1ec71cf8f526eb1fdd154050cd7363b62e690cffce4f189bd46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276e54a0ac92f1ec71cf8f526eb1fdd154050cd7363b62e690cffce4f189bd46->enter($__internal_276e54a0ac92f1ec71cf8f526eb1fdd154050cd7363b62e690cffce4f189bd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif d'usage ";
        
        $__internal_276e54a0ac92f1ec71cf8f526eb1fdd154050cd7363b62e690cffce4f189bd46->leave($__internal_276e54a0ac92f1ec71cf8f526eb1fdd154050cd7363b62e690cffce4f189bd46_prof);

        
        $__internal_bdbf8f435493551837305249e40515a528e07cc8a0b7eac23a081257cb2572c1->leave($__internal_bdbf8f435493551837305249e40515a528e07cc8a0b7eac23a081257cb2572c1_prof);

    }

    // line 12
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_50a4fc3cfb1c3979152ff47a2ff0e8de794dc406b05cb90e8275b0659b5f659b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a4fc3cfb1c3979152ff47a2ff0e8de794dc406b05cb90e8275b0659b5f659b->enter($__internal_50a4fc3cfb1c3979152ff47a2ff0e8de794dc406b05cb90e8275b0659b5f659b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0022045854a6df62e5ecbdca29f664e8e8de1a0e4e7d40ecb6dbfb72a1b30356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0022045854a6df62e5ecbdca29f664e8e8de1a0e4e7d40ecb6dbfb72a1b30356->enter($__internal_0022045854a6df62e5ecbdca29f664e8e8de1a0e4e7d40ecb6dbfb72a1b30356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_0022045854a6df62e5ecbdca29f664e8e8de1a0e4e7d40ecb6dbfb72a1b30356->leave($__internal_0022045854a6df62e5ecbdca29f664e8e8de1a0e4e7d40ecb6dbfb72a1b30356_prof);

        
        $__internal_50a4fc3cfb1c3979152ff47a2ff0e8de794dc406b05cb90e8275b0659b5f659b->leave($__internal_50a4fc3cfb1c3979152ff47a2ff0e8de794dc406b05cb90e8275b0659b5f659b_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3def0d68f22942bf56a5e14ba1891fa50ec2a57c0c20e6e0c957777884e68e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3def0d68f22942bf56a5e14ba1891fa50ec2a57c0c20e6e0c957777884e68e5->enter($__internal_c3def0d68f22942bf56a5e14ba1891fa50ec2a57c0c20e6e0c957777884e68e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1ccc983b812862597a071bc3bf7678e238e55a47c4dd7fe7c5673d7eca7260d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ccc983b812862597a071bc3bf7678e238e55a47c4dd7fe7c5673d7eca7260d->enter($__internal_b1ccc983b812862597a071bc3bf7678e238e55a47c4dd7fe7c5673d7eca7260d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b1ccc983b812862597a071bc3bf7678e238e55a47c4dd7fe7c5673d7eca7260d->leave($__internal_b1ccc983b812862597a071bc3bf7678e238e55a47c4dd7fe7c5673d7eca7260d_prof);

        
        $__internal_c3def0d68f22942bf56a5e14ba1891fa50ec2a57c0c20e6e0c957777884e68e5->leave($__internal_c3def0d68f22942bf56a5e14ba1891fa50ec2a57c0c20e6e0c957777884e68e5_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtUsageTarif:edit.html.twig";
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
{% endblock %}", "AdminBundle:CtUsageTarif:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtUsageTarif/edit.html.twig");
    }
}
