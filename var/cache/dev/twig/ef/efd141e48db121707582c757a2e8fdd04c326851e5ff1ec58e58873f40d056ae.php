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
        $__internal_0ee3ec2605a6619cd5244c2b488f3a61ac016f2c708e36bad3d6531f2a2226ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee3ec2605a6619cd5244c2b488f3a61ac016f2c708e36bad3d6531f2a2226ca->enter($__internal_0ee3ec2605a6619cd5244c2b488f3a61ac016f2c708e36bad3d6531f2a2226ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsage:edit.html.twig"));

        $__internal_52073bd91bf49c9343cad8182cd4cb93eb842d09bdb92142678f8258208651ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52073bd91bf49c9343cad8182cd4cb93eb842d09bdb92142678f8258208651ac->enter($__internal_52073bd91bf49c9343cad8182cd4cb93eb842d09bdb92142678f8258208651ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsage:edit.html.twig"));

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
        
        $__internal_0ee3ec2605a6619cd5244c2b488f3a61ac016f2c708e36bad3d6531f2a2226ca->leave($__internal_0ee3ec2605a6619cd5244c2b488f3a61ac016f2c708e36bad3d6531f2a2226ca_prof);

        
        $__internal_52073bd91bf49c9343cad8182cd4cb93eb842d09bdb92142678f8258208651ac->leave($__internal_52073bd91bf49c9343cad8182cd4cb93eb842d09bdb92142678f8258208651ac_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_838fca8ac891eed2e7ee0ab73d90ef4bc5c5b6663c45913426bcb280f5075a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838fca8ac891eed2e7ee0ab73d90ef4bc5c5b6663c45913426bcb280f5075a57->enter($__internal_838fca8ac891eed2e7ee0ab73d90ef4bc5c5b6663c45913426bcb280f5075a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af5e215f8ed17b77b2c842d5f5eee34c350d19b8e776028d6c13ad38d19d0b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5e215f8ed17b77b2c842d5f5eee34c350d19b8e776028d6c13ad38d19d0b51->enter($__internal_af5e215f8ed17b77b2c842d5f5eee34c350d19b8e776028d6c13ad38d19d0b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Usage ";
        
        $__internal_af5e215f8ed17b77b2c842d5f5eee34c350d19b8e776028d6c13ad38d19d0b51->leave($__internal_af5e215f8ed17b77b2c842d5f5eee34c350d19b8e776028d6c13ad38d19d0b51_prof);

        
        $__internal_838fca8ac891eed2e7ee0ab73d90ef4bc5c5b6663c45913426bcb280f5075a57->leave($__internal_838fca8ac891eed2e7ee0ab73d90ef4bc5c5b6663c45913426bcb280f5075a57_prof);

    }

    // line 11
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5d7eab452f027bf62aaab356797581d5f7b79eb6de8247317179912fddffb91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7eab452f027bf62aaab356797581d5f7b79eb6de8247317179912fddffb91e->enter($__internal_5d7eab452f027bf62aaab356797581d5f7b79eb6de8247317179912fddffb91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_39afdd753c736c989196a8da562e737255a384148da2764617476db0f88e04cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39afdd753c736c989196a8da562e737255a384148da2764617476db0f88e04cb->enter($__internal_39afdd753c736c989196a8da562e737255a384148da2764617476db0f88e04cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_39afdd753c736c989196a8da562e737255a384148da2764617476db0f88e04cb->leave($__internal_39afdd753c736c989196a8da562e737255a384148da2764617476db0f88e04cb_prof);

        
        $__internal_5d7eab452f027bf62aaab356797581d5f7b79eb6de8247317179912fddffb91e->leave($__internal_5d7eab452f027bf62aaab356797581d5f7b79eb6de8247317179912fddffb91e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecb525d54a7f5fa14fa90358ac7843bd4962a2f7e61574bc2316601489c7ead6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb525d54a7f5fa14fa90358ac7843bd4962a2f7e61574bc2316601489c7ead6->enter($__internal_ecb525d54a7f5fa14fa90358ac7843bd4962a2f7e61574bc2316601489c7ead6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7706cd29491d62fc09a0441df4850c0f72edde14fe98768b9c482b58e0dfe435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7706cd29491d62fc09a0441df4850c0f72edde14fe98768b9c482b58e0dfe435->enter($__internal_7706cd29491d62fc09a0441df4850c0f72edde14fe98768b9c482b58e0dfe435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7706cd29491d62fc09a0441df4850c0f72edde14fe98768b9c482b58e0dfe435->leave($__internal_7706cd29491d62fc09a0441df4850c0f72edde14fe98768b9c482b58e0dfe435_prof);

        
        $__internal_ecb525d54a7f5fa14fa90358ac7843bd4962a2f7e61574bc2316601489c7ead6->leave($__internal_ecb525d54a7f5fa14fa90358ac7843bd4962a2f7e61574bc2316601489c7ead6_prof);

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
