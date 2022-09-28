<?php

/* AdminBundle:CtDroitPtac:edit.html.twig */
class __TwigTemplate_52e6d003498f94ea26bc6a9e16414f99aa56a25e604c8f98c61ded6943893dd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtDroitPtac:edit.html.twig", 1);
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
        $__internal_02e23c3bb77f6e6e957f023b12be9cda184dfca798844740fb0fb2eb30a45d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e23c3bb77f6e6e957f023b12be9cda184dfca798844740fb0fb2eb30a45d39->enter($__internal_02e23c3bb77f6e6e957f023b12be9cda184dfca798844740fb0fb2eb30a45d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtDroitPtac:edit.html.twig"));

        $__internal_14a56b24fa4c7ca894ddd7402efd01b1090d3a243a822be2a7db56ad2220466c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a56b24fa4c7ca894ddd7402efd01b1090d3a243a822be2a7db56ad2220466c->enter($__internal_14a56b24fa4c7ca894ddd7402efd01b1090d3a243a822be2a7db56ad2220466c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtDroitPtac:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctGenreCategorie", array()), array(0 => $this));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctTypeDroitPtac", array()), array(0 => $this));
        // line 33
        $context["menu_droit_ptac"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02e23c3bb77f6e6e957f023b12be9cda184dfca798844740fb0fb2eb30a45d39->leave($__internal_02e23c3bb77f6e6e957f023b12be9cda184dfca798844740fb0fb2eb30a45d39_prof);

        
        $__internal_14a56b24fa4c7ca894ddd7402efd01b1090d3a243a822be2a7db56ad2220466c->leave($__internal_14a56b24fa4c7ca894ddd7402efd01b1090d3a243a822be2a7db56ad2220466c_prof);

    }

    // line 6
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b5a79a380404e58835cb32486507f5d5533901114477bdb592cc36ab2bc1fb34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a79a380404e58835cb32486507f5d5533901114477bdb592cc36ab2bc1fb34->enter($__internal_b5a79a380404e58835cb32486507f5d5533901114477bdb592cc36ab2bc1fb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_8841eb09240a6b8816fb95916e3d0b84dd4096d9b5329180532d44b11102c3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8841eb09240a6b8816fb95916e3d0b84dd4096d9b5329180532d44b11102c3aa->enter($__internal_8841eb09240a6b8816fb95916e3d0b84dd4096d9b5329180532d44b11102c3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 7
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 8
            $context["required"] = false;
        }
        // line 10
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 12
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 13
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 14
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 15
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 18
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 19
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 20
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 21
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 22
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 25
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 26
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 27
        echo "</select>
    </span>";
        
        $__internal_8841eb09240a6b8816fb95916e3d0b84dd4096d9b5329180532d44b11102c3aa->leave($__internal_8841eb09240a6b8816fb95916e3d0b84dd4096d9b5329180532d44b11102c3aa_prof);

        
        $__internal_b5a79a380404e58835cb32486507f5d5533901114477bdb592cc36ab2bc1fb34->leave($__internal_b5a79a380404e58835cb32486507f5d5533901114477bdb592cc36ab2bc1fb34_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d634a3d5e6fe957c563c1cd22d1c45b71d3ea9c46566a94af47356a94654ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d634a3d5e6fe957c563c1cd22d1c45b71d3ea9c46566a94af47356a94654ef3->enter($__internal_5d634a3d5e6fe957c563c1cd22d1c45b71d3ea9c46566a94af47356a94654ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22f60f0afbee84d304715d391ef1003e73004dc50bfa419a78695f9afadde62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f60f0afbee84d304715d391ef1003e73004dc50bfa419a78695f9afadde62b->enter($__internal_22f60f0afbee84d304715d391ef1003e73004dc50bfa419a78695f9afadde62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Droit Ptac ";
        
        $__internal_22f60f0afbee84d304715d391ef1003e73004dc50bfa419a78695f9afadde62b->leave($__internal_22f60f0afbee84d304715d391ef1003e73004dc50bfa419a78695f9afadde62b_prof);

        
        $__internal_5d634a3d5e6fe957c563c1cd22d1c45b71d3ea9c46566a94af47356a94654ef3->leave($__internal_5d634a3d5e6fe957c563c1cd22d1c45b71d3ea9c46566a94af47356a94654ef3_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c489a74550248269e830442fe7f12f553399b4c2b4f2f67450e99dae05c8237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c489a74550248269e830442fe7f12f553399b4c2b4f2f67450e99dae05c8237->enter($__internal_3c489a74550248269e830442fe7f12f553399b4c2b4f2f67450e99dae05c8237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c0409ffc4ee2c66be15eaec80a0a0d70c527a86d0ed8c4b831e8cec4b505990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0409ffc4ee2c66be15eaec80a0a0d70c527a86d0ed8c4b831e8cec4b505990->enter($__internal_0c0409ffc4ee2c66be15eaec80a0a0d70c527a86d0ed8c4b831e8cec4b505990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un droit ptac</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctTypeDroitPtac", array()), 'row');
        echo "
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctGenreCategorie", array()), 'row');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "dpPrixMin", array()), 'row');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "dpPrixMax", array()), 'row');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "dpDroit", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_droit_ptac\"/>
                        <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_index");
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
        
        $__internal_0c0409ffc4ee2c66be15eaec80a0a0d70c527a86d0ed8c4b831e8cec4b505990->leave($__internal_0c0409ffc4ee2c66be15eaec80a0a0d70c527a86d0ed8c4b831e8cec4b505990_prof);

        
        $__internal_3c489a74550248269e830442fe7f12f553399b4c2b4f2f67450e99dae05c8237->leave($__internal_3c489a74550248269e830442fe7f12f553399b4c2b4f2f67450e99dae05c8237_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtDroitPtac:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 70,  219 => 65,  211 => 60,  207 => 59,  203 => 58,  199 => 57,  195 => 56,  186 => 50,  180 => 46,  171 => 43,  168 => 42,  163 => 41,  154 => 38,  151 => 37,  146 => 36,  137 => 35,  118 => 31,  107 => 27,  105 => 26,  103 => 25,  97 => 22,  95 => 21,  93 => 20,  91 => 19,  89 => 18,  84 => 15,  77 => 14,  75 => 13,  69 => 12,  65 => 10,  62 => 8,  60 => 7,  51 => 6,  41 => 1,  39 => 33,  37 => 5,  35 => 4,  33 => 3,  11 => 1,);
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
{% form_theme edit_form.ctTypeDroitPtac _self %}
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

{% block title %}{{ parent() }} Modification Droit Ptac {% endblock %}

{% set menu_droit_ptac = true %}

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
                        <h3 class=\"box-title\">Editer un droit ptac</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctTypeDroitPtac) }}
                        {{ form_row(edit_form.ctGenreCategorie) }}
                        {{ form_row(edit_form.dpPrixMin) }}
                        {{ form_row(edit_form.dpPrixMax) }}
                        {{ form_row(edit_form.dpDroit) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_droit_ptac\"/>
                        <a href=\"{{ path('droit_ptac_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtDroitPtac:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtDroitPtac/edit.html.twig");
    }
}
