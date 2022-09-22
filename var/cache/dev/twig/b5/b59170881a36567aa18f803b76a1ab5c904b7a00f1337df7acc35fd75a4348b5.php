<?php

/* @Admin/CtUsage/add.html.twig */
class __TwigTemplate_302db0097ad604bb810ff627ed7396c7adbe3867480ec49f7bb191730333b620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUsage/add.html.twig", 1);
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
        $__internal_c22b52ef92f93592c9f3f960f2c8372848d1a865b4f4e3d2753ec823f64a4b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c22b52ef92f93592c9f3f960f2c8372848d1a865b4f4e3d2753ec823f64a4b66->enter($__internal_c22b52ef92f93592c9f3f960f2c8372848d1a865b4f4e3d2753ec823f64a4b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsage/add.html.twig"));

        $__internal_9df08ab1ab4511323368974885d31834459b340de0e11f13595ac9978837ee16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df08ab1ab4511323368974885d31834459b340de0e11f13595ac9978837ee16->enter($__internal_9df08ab1ab4511323368974885d31834459b340de0e11f13595ac9978837ee16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsage/add.html.twig"));

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
        
        $__internal_c22b52ef92f93592c9f3f960f2c8372848d1a865b4f4e3d2753ec823f64a4b66->leave($__internal_c22b52ef92f93592c9f3f960f2c8372848d1a865b4f4e3d2753ec823f64a4b66_prof);

        
        $__internal_9df08ab1ab4511323368974885d31834459b340de0e11f13595ac9978837ee16->leave($__internal_9df08ab1ab4511323368974885d31834459b340de0e11f13595ac9978837ee16_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2530cc7592335c4f1fca846dc15be86bc3ba683e908b34c57aca53b6d3b89be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2530cc7592335c4f1fca846dc15be86bc3ba683e908b34c57aca53b6d3b89be->enter($__internal_e2530cc7592335c4f1fca846dc15be86bc3ba683e908b34c57aca53b6d3b89be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a2d3af98f3b8d6555732b03792ee063fb83b5b265234d09dba55db124cdd99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2d3af98f3b8d6555732b03792ee063fb83b5b265234d09dba55db124cdd99c->enter($__internal_4a2d3af98f3b8d6555732b03792ee063fb83b5b265234d09dba55db124cdd99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout usage ";
        
        $__internal_4a2d3af98f3b8d6555732b03792ee063fb83b5b265234d09dba55db124cdd99c->leave($__internal_4a2d3af98f3b8d6555732b03792ee063fb83b5b265234d09dba55db124cdd99c_prof);

        
        $__internal_e2530cc7592335c4f1fca846dc15be86bc3ba683e908b34c57aca53b6d3b89be->leave($__internal_e2530cc7592335c4f1fca846dc15be86bc3ba683e908b34c57aca53b6d3b89be_prof);

    }

    // line 11
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2f7beaa65959f86b1c01dd8f5ba872a7fe02d249e0c23a11d400c68372bfedd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f7beaa65959f86b1c01dd8f5ba872a7fe02d249e0c23a11d400c68372bfedd2->enter($__internal_2f7beaa65959f86b1c01dd8f5ba872a7fe02d249e0c23a11d400c68372bfedd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_3f7e695440cab69cea9472224edb31c22d960c27c79d98d3bc2883c1fd0a0fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7e695440cab69cea9472224edb31c22d960c27c79d98d3bc2883c1fd0a0fed->enter($__internal_3f7e695440cab69cea9472224edb31c22d960c27c79d98d3bc2883c1fd0a0fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_3f7e695440cab69cea9472224edb31c22d960c27c79d98d3bc2883c1fd0a0fed->leave($__internal_3f7e695440cab69cea9472224edb31c22d960c27c79d98d3bc2883c1fd0a0fed_prof);

        
        $__internal_2f7beaa65959f86b1c01dd8f5ba872a7fe02d249e0c23a11d400c68372bfedd2->leave($__internal_2f7beaa65959f86b1c01dd8f5ba872a7fe02d249e0c23a11d400c68372bfedd2_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb88343153ee38ddef75d79d2f64cbbe72acbe76250497bfae3841e3d7bcd2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb88343153ee38ddef75d79d2f64cbbe72acbe76250497bfae3841e3d7bcd2ec->enter($__internal_cb88343153ee38ddef75d79d2f64cbbe72acbe76250497bfae3841e3d7bcd2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df64a888aecb874e8650d5e0dd1bb1199bee9c8b25307283c38ac78b6126d37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df64a888aecb874e8650d5e0dd1bb1199bee9c8b25307283c38ac78b6126d37f->enter($__internal_df64a888aecb874e8650d5e0dd1bb1199bee9c8b25307283c38ac78b6126d37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_df64a888aecb874e8650d5e0dd1bb1199bee9c8b25307283c38ac78b6126d37f->leave($__internal_df64a888aecb874e8650d5e0dd1bb1199bee9c8b25307283c38ac78b6126d37f_prof);

        
        $__internal_cb88343153ee38ddef75d79d2f64cbbe72acbe76250497bfae3841e3d7bcd2ec->leave($__internal_cb88343153ee38ddef75d79d2f64cbbe72acbe76250497bfae3841e3d7bcd2ec_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUsage/add.html.twig";
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
{% endblock %}", "@Admin/CtUsage/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUsage\\add.html.twig");
    }
}
