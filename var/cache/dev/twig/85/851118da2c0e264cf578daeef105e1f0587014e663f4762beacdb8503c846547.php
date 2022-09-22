<?php

/* AdminBundle:CtUsage:add.html.twig */
class __TwigTemplate_71f78abfbcad7d43b1cbf2fb70375fa38c845b68805e8952574a50b3bc2cd9a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtUsage:add.html.twig", 1);
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
        $__internal_5c56138b38db28feac6f5f1ff3b350ac47bfbf62e6ee811e681496d06cb72c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c56138b38db28feac6f5f1ff3b350ac47bfbf62e6ee811e681496d06cb72c21->enter($__internal_5c56138b38db28feac6f5f1ff3b350ac47bfbf62e6ee811e681496d06cb72c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsage:add.html.twig"));

        $__internal_f02e9382afba03b79891abba2915de60ed2276f075c3ba5cda2a21592ba2eede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02e9382afba03b79891abba2915de60ed2276f075c3ba5cda2a21592ba2eede->enter($__internal_f02e9382afba03b79891abba2915de60ed2276f075c3ba5cda2a21592ba2eede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsage:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeUsage", array()), array(0 => $this));
        // line 8
        $context["menu_usage"] = true;
        // line 9
        $context["menu_usage_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c56138b38db28feac6f5f1ff3b350ac47bfbf62e6ee811e681496d06cb72c21->leave($__internal_5c56138b38db28feac6f5f1ff3b350ac47bfbf62e6ee811e681496d06cb72c21_prof);

        
        $__internal_f02e9382afba03b79891abba2915de60ed2276f075c3ba5cda2a21592ba2eede->leave($__internal_f02e9382afba03b79891abba2915de60ed2276f075c3ba5cda2a21592ba2eede_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9d5c526cec0e0866202a916cdd8c760dd8ed025254d30b33e2d44ee65cfdb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d5c526cec0e0866202a916cdd8c760dd8ed025254d30b33e2d44ee65cfdb2d->enter($__internal_e9d5c526cec0e0866202a916cdd8c760dd8ed025254d30b33e2d44ee65cfdb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1fe80e1333e9b9bc340f2ed49c2a75555dd79671fbd8b0df269c63569243d0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe80e1333e9b9bc340f2ed49c2a75555dd79671fbd8b0df269c63569243d0ad->enter($__internal_1fe80e1333e9b9bc340f2ed49c2a75555dd79671fbd8b0df269c63569243d0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout usage ";
        
        $__internal_1fe80e1333e9b9bc340f2ed49c2a75555dd79671fbd8b0df269c63569243d0ad->leave($__internal_1fe80e1333e9b9bc340f2ed49c2a75555dd79671fbd8b0df269c63569243d0ad_prof);

        
        $__internal_e9d5c526cec0e0866202a916cdd8c760dd8ed025254d30b33e2d44ee65cfdb2d->leave($__internal_e9d5c526cec0e0866202a916cdd8c760dd8ed025254d30b33e2d44ee65cfdb2d_prof);

    }

    // line 11
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_6e7cd8b8aca74f3645b0ae2c002cd9bac0dd5651bf144c9456f7593aaa17c118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7cd8b8aca74f3645b0ae2c002cd9bac0dd5651bf144c9456f7593aaa17c118->enter($__internal_6e7cd8b8aca74f3645b0ae2c002cd9bac0dd5651bf144c9456f7593aaa17c118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_243d03264cf976a8b6780e0857765280b9c87f9f768bee7d532a55b44a1c9452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243d03264cf976a8b6780e0857765280b9c87f9f768bee7d532a55b44a1c9452->enter($__internal_243d03264cf976a8b6780e0857765280b9c87f9f768bee7d532a55b44a1c9452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_243d03264cf976a8b6780e0857765280b9c87f9f768bee7d532a55b44a1c9452->leave($__internal_243d03264cf976a8b6780e0857765280b9c87f9f768bee7d532a55b44a1c9452_prof);

        
        $__internal_6e7cd8b8aca74f3645b0ae2c002cd9bac0dd5651bf144c9456f7593aaa17c118->leave($__internal_6e7cd8b8aca74f3645b0ae2c002cd9bac0dd5651bf144c9456f7593aaa17c118_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_f85fc65ff4655aba107ec778aee5f81657602285e0e1710400861d52933b56b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85fc65ff4655aba107ec778aee5f81657602285e0e1710400861d52933b56b0->enter($__internal_f85fc65ff4655aba107ec778aee5f81657602285e0e1710400861d52933b56b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9982624ed9bd6dae1610f73a5dc0eb81b813bf4c1593beefe9c27535a56815a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9982624ed9bd6dae1610f73a5dc0eb81b813bf4c1593beefe9c27535a56815a3->enter($__internal_9982624ed9bd6dae1610f73a5dc0eb81b813bf4c1593beefe9c27535a56815a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usgLibelle", array()), 'row');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usgValidite", array()), 'row');
        echo "
                    </div>

                    <div class=\"hide\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeUsage", array()), 'row');
        echo "</div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_usage\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_9982624ed9bd6dae1610f73a5dc0eb81b813bf4c1593beefe9c27535a56815a3->leave($__internal_9982624ed9bd6dae1610f73a5dc0eb81b813bf4c1593beefe9c27535a56815a3_prof);

        
        $__internal_f85fc65ff4655aba107ec778aee5f81657602285e0e1710400861d52933b56b0->leave($__internal_f85fc65ff4655aba107ec778aee5f81657602285e0e1710400861d52933b56b0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtUsage:add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}
{% form_theme form.ctTypeUsage _self %}

{% block title %}{{ parent() }} Ajout usage {% endblock %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.usgLibelle) }}
                        {{ form_row(form.usgValidite) }}
                    </div>

                    <div class=\"hide\">{{ form_row(form.ctTypeUsage) }}</div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_usage\"/>
                        <a href=\"{{ path('usage_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtUsage:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtUsage/add.html.twig");
    }
}
