<?php

/* AdminBundle:CtUsage:edit.html.twig */
class __TwigTemplate_38804a607799517d12840d92805d40ed01804d1141d3452dc99b714c3219e066 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtUsage:edit.html.twig", 1);
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
        $__internal_63f8818494df95ab34f46c3bd0f46210b114c6d77537320aae13d57e1f16dbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f8818494df95ab34f46c3bd0f46210b114c6d77537320aae13d57e1f16dbbc->enter($__internal_63f8818494df95ab34f46c3bd0f46210b114c6d77537320aae13d57e1f16dbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsage:edit.html.twig"));

        $__internal_f8d5d03c4fcd7bc20b1a9a80bf5b41c205f80f332049c97b37c01a310bed1880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d5d03c4fcd7bc20b1a9a80bf5b41c205f80f332049c97b37c01a310bed1880->enter($__internal_f8d5d03c4fcd7bc20b1a9a80bf5b41c205f80f332049c97b37c01a310bed1880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsage:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctTypeUsage", array()), array(0 => $this));
        // line 8
        $context["menu_usage"] = true;
        // line 9
        $context["menu_usage_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63f8818494df95ab34f46c3bd0f46210b114c6d77537320aae13d57e1f16dbbc->leave($__internal_63f8818494df95ab34f46c3bd0f46210b114c6d77537320aae13d57e1f16dbbc_prof);

        
        $__internal_f8d5d03c4fcd7bc20b1a9a80bf5b41c205f80f332049c97b37c01a310bed1880->leave($__internal_f8d5d03c4fcd7bc20b1a9a80bf5b41c205f80f332049c97b37c01a310bed1880_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d2395dee55dacc2b508fdc5be8f3b20a95b88cfd71e67620b015576ef12d395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2395dee55dacc2b508fdc5be8f3b20a95b88cfd71e67620b015576ef12d395->enter($__internal_6d2395dee55dacc2b508fdc5be8f3b20a95b88cfd71e67620b015576ef12d395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_04260820ff7998d71eb671e6ea18f29502ca4d84cfa926f4ebde3b54b4083e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04260820ff7998d71eb671e6ea18f29502ca4d84cfa926f4ebde3b54b4083e32->enter($__internal_04260820ff7998d71eb671e6ea18f29502ca4d84cfa926f4ebde3b54b4083e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Usage ";
        
        $__internal_04260820ff7998d71eb671e6ea18f29502ca4d84cfa926f4ebde3b54b4083e32->leave($__internal_04260820ff7998d71eb671e6ea18f29502ca4d84cfa926f4ebde3b54b4083e32_prof);

        
        $__internal_6d2395dee55dacc2b508fdc5be8f3b20a95b88cfd71e67620b015576ef12d395->leave($__internal_6d2395dee55dacc2b508fdc5be8f3b20a95b88cfd71e67620b015576ef12d395_prof);

    }

    // line 11
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b972dcb23a22cd3153574240500e14dcea5add375d98b07cdff1d5f0ac2a530a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b972dcb23a22cd3153574240500e14dcea5add375d98b07cdff1d5f0ac2a530a->enter($__internal_b972dcb23a22cd3153574240500e14dcea5add375d98b07cdff1d5f0ac2a530a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_217f8f1570b5c839f140d6c30cbce617677c7d109fa951cfdc90a639c3962113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217f8f1570b5c839f140d6c30cbce617677c7d109fa951cfdc90a639c3962113->enter($__internal_217f8f1570b5c839f140d6c30cbce617677c7d109fa951cfdc90a639c3962113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 12
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 13
            $context["required"] = false;
        }
        // line 15
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 17
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 18
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 19
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 20
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 23
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 24
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 25
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 26
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 27
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 30
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 31
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 32
        echo "</select>
    </span>";
        
        $__internal_217f8f1570b5c839f140d6c30cbce617677c7d109fa951cfdc90a639c3962113->leave($__internal_217f8f1570b5c839f140d6c30cbce617677c7d109fa951cfdc90a639c3962113_prof);

        
        $__internal_b972dcb23a22cd3153574240500e14dcea5add375d98b07cdff1d5f0ac2a530a->leave($__internal_b972dcb23a22cd3153574240500e14dcea5add375d98b07cdff1d5f0ac2a530a_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_6259575d034cb4784cc48faf26f1ea503f6ad98e5659a8204a85f2981a6ce236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6259575d034cb4784cc48faf26f1ea503f6ad98e5659a8204a85f2981a6ce236->enter($__internal_6259575d034cb4784cc48faf26f1ea503f6ad98e5659a8204a85f2981a6ce236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dfe987ed1993e530c8baca4505cc5fb988985328c285f1a0b97e93de7de594ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe987ed1993e530c8baca4505cc5fb988985328c285f1a0b97e93de7de594ba->enter($__internal_dfe987ed1993e530c8baca4505cc5fb988985328c285f1a0b97e93de7de594ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un usage</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usgLibelle", array()), 'row');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usgValidite", array()), 'row');
        echo "
                    </div>

                    <div class=\"hide\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctTypeUsage", array()), 'row');
        echo "</div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_usage\"/>
                        <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_dfe987ed1993e530c8baca4505cc5fb988985328c285f1a0b97e93de7de594ba->leave($__internal_dfe987ed1993e530c8baca4505cc5fb988985328c285f1a0b97e93de7de594ba_prof);

        
        $__internal_6259575d034cb4784cc48faf26f1ea503f6ad98e5659a8204a85f2981a6ce236->leave($__internal_6259575d034cb4784cc48faf26f1ea503f6ad98e5659a8204a85f2981a6ce236_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtUsage:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 70,  212 => 65,  205 => 61,  199 => 58,  195 => 57,  186 => 51,  180 => 47,  171 => 44,  168 => 43,  163 => 42,  154 => 39,  151 => 38,  146 => 37,  137 => 36,  126 => 32,  124 => 31,  122 => 30,  116 => 27,  114 => 26,  112 => 25,  110 => 24,  108 => 23,  103 => 20,  96 => 19,  94 => 18,  88 => 17,  84 => 15,  81 => 13,  79 => 12,  70 => 11,  51 => 6,  41 => 1,  39 => 9,  37 => 8,  35 => 4,  33 => 3,  11 => 1,);
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
{% form_theme edit_form.ctTypeUsage _self %}

{% block title %}{{ parent() }} Modification Usage {% endblock %}

{% set menu_usage        = true %}
{% set menu_usage_create = true %}

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
                        <h3 class=\"box-title\">Editer un usage</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.usgLibelle) }}
                        {{ form_row(edit_form.usgValidite) }}
                    </div>

                    <div class=\"hide\">{{ form_row(edit_form.ctTypeUsage) }}</div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_usage\"/>
                        <a href=\"{{ path('usage_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtUsage:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtUsage/edit.html.twig");
    }
}
