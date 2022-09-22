<?php

/* @Admin/CtUsage/edit.html.twig */
class __TwigTemplate_bfda9fb30cfe97e50fcd067e2696ea3277b62cdafbcdffbbaba3a0759efe7241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUsage/edit.html.twig", 1);
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
        $__internal_6bf9c2a941fb9972153d644662cd8d37a4aebaf1686e4cdfbf119292db7bf7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf9c2a941fb9972153d644662cd8d37a4aebaf1686e4cdfbf119292db7bf7a2->enter($__internal_6bf9c2a941fb9972153d644662cd8d37a4aebaf1686e4cdfbf119292db7bf7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsage/edit.html.twig"));

        $__internal_a8ffe1de5ab9b9af23c1e3376fefeced999854fd88c85863f1b99764fee57252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ffe1de5ab9b9af23c1e3376fefeced999854fd88c85863f1b99764fee57252->enter($__internal_a8ffe1de5ab9b9af23c1e3376fefeced999854fd88c85863f1b99764fee57252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsage/edit.html.twig"));

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
        
        $__internal_6bf9c2a941fb9972153d644662cd8d37a4aebaf1686e4cdfbf119292db7bf7a2->leave($__internal_6bf9c2a941fb9972153d644662cd8d37a4aebaf1686e4cdfbf119292db7bf7a2_prof);

        
        $__internal_a8ffe1de5ab9b9af23c1e3376fefeced999854fd88c85863f1b99764fee57252->leave($__internal_a8ffe1de5ab9b9af23c1e3376fefeced999854fd88c85863f1b99764fee57252_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_46e8ffebc63eaeca4aa1cdf8cd87d02208ddecfedfb21dbf3cdddd66e3ee0387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e8ffebc63eaeca4aa1cdf8cd87d02208ddecfedfb21dbf3cdddd66e3ee0387->enter($__internal_46e8ffebc63eaeca4aa1cdf8cd87d02208ddecfedfb21dbf3cdddd66e3ee0387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a9cae198aa6f81055dc260f8a773707dacb8d776f0ecb20a2548fa23e1eacc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9cae198aa6f81055dc260f8a773707dacb8d776f0ecb20a2548fa23e1eacc0->enter($__internal_1a9cae198aa6f81055dc260f8a773707dacb8d776f0ecb20a2548fa23e1eacc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Usage ";
        
        $__internal_1a9cae198aa6f81055dc260f8a773707dacb8d776f0ecb20a2548fa23e1eacc0->leave($__internal_1a9cae198aa6f81055dc260f8a773707dacb8d776f0ecb20a2548fa23e1eacc0_prof);

        
        $__internal_46e8ffebc63eaeca4aa1cdf8cd87d02208ddecfedfb21dbf3cdddd66e3ee0387->leave($__internal_46e8ffebc63eaeca4aa1cdf8cd87d02208ddecfedfb21dbf3cdddd66e3ee0387_prof);

    }

    // line 11
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_0c9919195237efc0fb5736c6b372c3e80ad3d3ac5e6bcb2d2f6e1514d1f2ba6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c9919195237efc0fb5736c6b372c3e80ad3d3ac5e6bcb2d2f6e1514d1f2ba6b->enter($__internal_0c9919195237efc0fb5736c6b372c3e80ad3d3ac5e6bcb2d2f6e1514d1f2ba6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e1f7571597813a4e785161f10849e76c6fd6379623ee5a4fadbdcfa544338af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f7571597813a4e785161f10849e76c6fd6379623ee5a4fadbdcfa544338af6->enter($__internal_e1f7571597813a4e785161f10849e76c6fd6379623ee5a4fadbdcfa544338af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_e1f7571597813a4e785161f10849e76c6fd6379623ee5a4fadbdcfa544338af6->leave($__internal_e1f7571597813a4e785161f10849e76c6fd6379623ee5a4fadbdcfa544338af6_prof);

        
        $__internal_0c9919195237efc0fb5736c6b372c3e80ad3d3ac5e6bcb2d2f6e1514d1f2ba6b->leave($__internal_0c9919195237efc0fb5736c6b372c3e80ad3d3ac5e6bcb2d2f6e1514d1f2ba6b_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b8ed7319357220e19dbc050a05eae05d8f495bae4296ef3dd953489cfbdd094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8ed7319357220e19dbc050a05eae05d8f495bae4296ef3dd953489cfbdd094->enter($__internal_1b8ed7319357220e19dbc050a05eae05d8f495bae4296ef3dd953489cfbdd094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_172dff2ec36c82ababdb136142e5b76da9d69b674d790a307c1f4aad2be4523b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172dff2ec36c82ababdb136142e5b76da9d69b674d790a307c1f4aad2be4523b->enter($__internal_172dff2ec36c82ababdb136142e5b76da9d69b674d790a307c1f4aad2be4523b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_172dff2ec36c82ababdb136142e5b76da9d69b674d790a307c1f4aad2be4523b->leave($__internal_172dff2ec36c82ababdb136142e5b76da9d69b674d790a307c1f4aad2be4523b_prof);

        
        $__internal_1b8ed7319357220e19dbc050a05eae05d8f495bae4296ef3dd953489cfbdd094->leave($__internal_1b8ed7319357220e19dbc050a05eae05d8f495bae4296ef3dd953489cfbdd094_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUsage/edit.html.twig";
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
{% endblock %}", "@Admin/CtUsage/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUsage\\edit.html.twig");
    }
}
