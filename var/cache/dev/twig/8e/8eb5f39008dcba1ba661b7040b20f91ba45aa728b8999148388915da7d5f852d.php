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
        $__internal_3867e4a0f4daacf4548c7ba9fe3f35345aee14f85f4860abee47c13303bcc80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3867e4a0f4daacf4548c7ba9fe3f35345aee14f85f4860abee47c13303bcc80f->enter($__internal_3867e4a0f4daacf4548c7ba9fe3f35345aee14f85f4860abee47c13303bcc80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsageTarif/edit.html.twig"));

        $__internal_29601228d29f423f278ae82141c491230c3789bef0b002419972f1648d2dc423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29601228d29f423f278ae82141c491230c3789bef0b002419972f1648d2dc423->enter($__internal_29601228d29f423f278ae82141c491230c3789bef0b002419972f1648d2dc423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsageTarif/edit.html.twig"));

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
        
        $__internal_3867e4a0f4daacf4548c7ba9fe3f35345aee14f85f4860abee47c13303bcc80f->leave($__internal_3867e4a0f4daacf4548c7ba9fe3f35345aee14f85f4860abee47c13303bcc80f_prof);

        
        $__internal_29601228d29f423f278ae82141c491230c3789bef0b002419972f1648d2dc423->leave($__internal_29601228d29f423f278ae82141c491230c3789bef0b002419972f1648d2dc423_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1e5e1e62c6ead17efda119f3322a2d843c1b125ef36747377be809cb413034c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e5e1e62c6ead17efda119f3322a2d843c1b125ef36747377be809cb413034c->enter($__internal_c1e5e1e62c6ead17efda119f3322a2d843c1b125ef36747377be809cb413034c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbc4fab69e0450c084f36f58391ed6bd10c9f0e6a5ac764e7db3b8bd86e6c9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc4fab69e0450c084f36f58391ed6bd10c9f0e6a5ac764e7db3b8bd86e6c9c1->enter($__internal_dbc4fab69e0450c084f36f58391ed6bd10c9f0e6a5ac764e7db3b8bd86e6c9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif d'usage ";
        
        $__internal_dbc4fab69e0450c084f36f58391ed6bd10c9f0e6a5ac764e7db3b8bd86e6c9c1->leave($__internal_dbc4fab69e0450c084f36f58391ed6bd10c9f0e6a5ac764e7db3b8bd86e6c9c1_prof);

        
        $__internal_c1e5e1e62c6ead17efda119f3322a2d843c1b125ef36747377be809cb413034c->leave($__internal_c1e5e1e62c6ead17efda119f3322a2d843c1b125ef36747377be809cb413034c_prof);

    }

    // line 12
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_578041b33261caa0761ec85cc4e00f7b7ac90c2bbdec58da6eca825ce69c44c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578041b33261caa0761ec85cc4e00f7b7ac90c2bbdec58da6eca825ce69c44c6->enter($__internal_578041b33261caa0761ec85cc4e00f7b7ac90c2bbdec58da6eca825ce69c44c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d704ba3114750ed3ea28b3ed468b52d523ea3d98fdd0b437a4f8bd4247782e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d704ba3114750ed3ea28b3ed468b52d523ea3d98fdd0b437a4f8bd4247782e07->enter($__internal_d704ba3114750ed3ea28b3ed468b52d523ea3d98fdd0b437a4f8bd4247782e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_d704ba3114750ed3ea28b3ed468b52d523ea3d98fdd0b437a4f8bd4247782e07->leave($__internal_d704ba3114750ed3ea28b3ed468b52d523ea3d98fdd0b437a4f8bd4247782e07_prof);

        
        $__internal_578041b33261caa0761ec85cc4e00f7b7ac90c2bbdec58da6eca825ce69c44c6->leave($__internal_578041b33261caa0761ec85cc4e00f7b7ac90c2bbdec58da6eca825ce69c44c6_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4de19d2619ccfd7e76a8192906033fac60639db3c3c4f54e7b5b9abccaa0941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4de19d2619ccfd7e76a8192906033fac60639db3c3c4f54e7b5b9abccaa0941->enter($__internal_b4de19d2619ccfd7e76a8192906033fac60639db3c3c4f54e7b5b9abccaa0941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00d84e11ddc640ecff63217c5c66b565be41efd9607cc2c3bf08287e367c21c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d84e11ddc640ecff63217c5c66b565be41efd9607cc2c3bf08287e367c21c6->enter($__internal_00d84e11ddc640ecff63217c5c66b565be41efd9607cc2c3bf08287e367c21c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_00d84e11ddc640ecff63217c5c66b565be41efd9607cc2c3bf08287e367c21c6->leave($__internal_00d84e11ddc640ecff63217c5c66b565be41efd9607cc2c3bf08287e367c21c6_prof);

        
        $__internal_b4de19d2619ccfd7e76a8192906033fac60639db3c3c4f54e7b5b9abccaa0941->leave($__internal_b4de19d2619ccfd7e76a8192906033fac60639db3c3c4f54e7b5b9abccaa0941_prof);

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
