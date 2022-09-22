<?php

/* @Admin/CtBordereau/edit.html.twig */
class __TwigTemplate_438617f2f592777f9d89529c284a80690a9bac818dd29db76728bfeba86d3735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtBordereau/edit.html.twig", 1);
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
        $__internal_590fc9e18e232dfd6f26d356f02d60592d5e5e2495dc664dc8aef95209721837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590fc9e18e232dfd6f26d356f02d60592d5e5e2495dc664dc8aef95209721837->enter($__internal_590fc9e18e232dfd6f26d356f02d60592d5e5e2495dc664dc8aef95209721837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtBordereau/edit.html.twig"));

        $__internal_e60927e98f2b13b1e499c2b527b63ad7479565ab8e65ac4ff1a1a61fda0fb9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60927e98f2b13b1e499c2b527b63ad7479565ab8e65ac4ff1a1a61fda0fb9a3->enter($__internal_e60927e98f2b13b1e499c2b527b63ad7479565ab8e65ac4ff1a1a61fda0fb9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtBordereau/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), array(0 => $this));
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctImprimeTech", array()), array(0 => $this));
        // line 35
        $context["menu_bordereau"] = true;
        // line 36
        $context["menu_bordereau_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_590fc9e18e232dfd6f26d356f02d60592d5e5e2495dc664dc8aef95209721837->leave($__internal_590fc9e18e232dfd6f26d356f02d60592d5e5e2495dc664dc8aef95209721837_prof);

        
        $__internal_e60927e98f2b13b1e499c2b527b63ad7479565ab8e65ac4ff1a1a61fda0fb9a3->leave($__internal_e60927e98f2b13b1e499c2b527b63ad7479565ab8e65ac4ff1a1a61fda0fb9a3_prof);

    }

    // line 8
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4480622394b0ec5a100db421aa6476866831ba4c7f1af04ff54a0c12913d8b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4480622394b0ec5a100db421aa6476866831ba4c7f1af04ff54a0c12913d8b80->enter($__internal_4480622394b0ec5a100db421aa6476866831ba4c7f1af04ff54a0c12913d8b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_40c09a308d57154f363ff7c8abfbfa24ad3388e57ace0ddb9e9e0dfb38737612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c09a308d57154f363ff7c8abfbfa24ad3388e57ace0ddb9e9e0dfb38737612->enter($__internal_40c09a308d57154f363ff7c8abfbfa24ad3388e57ace0ddb9e9e0dfb38737612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 9
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 10
            $context["required"] = false;
        }
        // line 12
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 14
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 15
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 16
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 17
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 20
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 21
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 22
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 23
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 24
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 27
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 28
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 29
        echo "</select>
    </span>";
        
        $__internal_40c09a308d57154f363ff7c8abfbfa24ad3388e57ace0ddb9e9e0dfb38737612->leave($__internal_40c09a308d57154f363ff7c8abfbfa24ad3388e57ace0ddb9e9e0dfb38737612_prof);

        
        $__internal_4480622394b0ec5a100db421aa6476866831ba4c7f1af04ff54a0c12913d8b80->leave($__internal_4480622394b0ec5a100db421aa6476866831ba4c7f1af04ff54a0c12913d8b80_prof);

    }

    // line 33
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9f187806bd7b50651885632f277d835b361442f78ddfe71e972ba5d14f62b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f187806bd7b50651885632f277d835b361442f78ddfe71e972ba5d14f62b49->enter($__internal_a9f187806bd7b50651885632f277d835b361442f78ddfe71e972ba5d14f62b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb33c8d89c0518930cd57c6d1689e992ada5ba3185de239e57dbe9513cd198ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb33c8d89c0518930cd57c6d1689e992ada5ba3185de239e57dbe9513cd198ce->enter($__internal_cb33c8d89c0518930cd57c6d1689e992ada5ba3185de239e57dbe9513cd198ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification imprimé technique dans BL ";
        
        $__internal_cb33c8d89c0518930cd57c6d1689e992ada5ba3185de239e57dbe9513cd198ce->leave($__internal_cb33c8d89c0518930cd57c6d1689e992ada5ba3185de239e57dbe9513cd198ce_prof);

        
        $__internal_a9f187806bd7b50651885632f277d835b361442f78ddfe71e972ba5d14f62b49->leave($__internal_a9f187806bd7b50651885632f277d835b361442f78ddfe71e972ba5d14f62b49_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef1a994c1834859163e12b6a3bd679ff08ceeef787614db5fa971aaa63b99e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1a994c1834859163e12b6a3bd679ff08ceeef787614db5fa971aaa63b99e3a->enter($__internal_ef1a994c1834859163e12b6a3bd679ff08ceeef787614db5fa971aaa63b99e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f910f6c5d710ffaf8f24f005517942071b70421bc8bfe2181cc3720354c6a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f910f6c5d710ffaf8f24f005517942071b70421bc8bfe2181cc3720354c6a3f->enter($__internal_0f910f6c5d710ffaf8f24f005517942071b70421bc8bfe2181cc3720354c6a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 40
            echo "        <div class=\"callout callout-success\">
            ";
            // line 41
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 45
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 46
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un imprimé technique dans le BL</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "blNumero", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "refExpr", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "dateRefExpr", array()), 'row');
        echo "
                    </div>
                
                    <div class=\"box-body\">
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "blDebutNumero", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "blFinNumero", array()), 'row');
        echo "
                    </div>


                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_it_in_bl\"/>
                        <a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_0f910f6c5d710ffaf8f24f005517942071b70421bc8bfe2181cc3720354c6a3f->leave($__internal_0f910f6c5d710ffaf8f24f005517942071b70421bc8bfe2181cc3720354c6a3f_prof);

        
        $__internal_ef1a994c1834859163e12b6a3bd679ff08ceeef787614db5fa971aaa63b99e3a->leave($__internal_ef1a994c1834859163e12b6a3bd679ff08ceeef787614db5fa971aaa63b99e3a_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtBordereau/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 94,  248 => 89,  239 => 83,  232 => 79,  225 => 75,  218 => 71,  211 => 67,  204 => 63,  197 => 59,  188 => 53,  182 => 49,  173 => 46,  170 => 45,  165 => 44,  156 => 41,  153 => 40,  148 => 39,  139 => 38,  120 => 33,  109 => 29,  107 => 28,  105 => 27,  99 => 24,  97 => 23,  95 => 22,  93 => 21,  91 => 20,  86 => 17,  79 => 16,  77 => 15,  71 => 14,  67 => 12,  64 => 10,  62 => 9,  53 => 8,  43 => 1,  41 => 36,  39 => 35,  37 => 6,  35 => 5,  33 => 3,  11 => 1,);
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

{% form_theme edit_form.ctCentre _self %}
{% form_theme edit_form.ctImprimeTech _self %}

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

{% block title %}{{ parent() }} Modification imprimé technique dans BL {% endblock %}

{% set menu_bordereau        = true %}
{% set menu_bordereau_create = true %}

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
                        <h3 class=\"box-title\">Editer un imprimé technique dans le BL</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.blNumero) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.refExpr) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.dateRefExpr) }}
                    </div>
                
                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctCentre) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.blDebutNumero) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.blFinNumero) }}
                    </div>


                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_it_in_bl\"/>
                        <a href=\"{{ path('bordereau_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtBordereau/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtBordereau\\edit.html.twig");
    }
}
