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
        $__internal_057cfb1e4f96aab36ca18a8cd9b0b4feab4ea3a5ee262b9565035311cb9891a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057cfb1e4f96aab36ca18a8cd9b0b4feab4ea3a5ee262b9565035311cb9891a2->enter($__internal_057cfb1e4f96aab36ca18a8cd9b0b4feab4ea3a5ee262b9565035311cb9891a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtDroitPtac:edit.html.twig"));

        $__internal_2f89478ade22545b3795a74838e039abb17cfc7bfbf1c3016eda542e4647154e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f89478ade22545b3795a74838e039abb17cfc7bfbf1c3016eda542e4647154e->enter($__internal_2f89478ade22545b3795a74838e039abb17cfc7bfbf1c3016eda542e4647154e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtDroitPtac:edit.html.twig"));

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
        
        $__internal_057cfb1e4f96aab36ca18a8cd9b0b4feab4ea3a5ee262b9565035311cb9891a2->leave($__internal_057cfb1e4f96aab36ca18a8cd9b0b4feab4ea3a5ee262b9565035311cb9891a2_prof);

        
        $__internal_2f89478ade22545b3795a74838e039abb17cfc7bfbf1c3016eda542e4647154e->leave($__internal_2f89478ade22545b3795a74838e039abb17cfc7bfbf1c3016eda542e4647154e_prof);

    }

    // line 6
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8e2a1ef291bc237a2f3a0b1cdb6c380926918d6ced4d5a95a8c226e4ffd70159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2a1ef291bc237a2f3a0b1cdb6c380926918d6ced4d5a95a8c226e4ffd70159->enter($__internal_8e2a1ef291bc237a2f3a0b1cdb6c380926918d6ced4d5a95a8c226e4ffd70159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_a0448bdc1e997ed8a944b5ebf3aa7da7148839d8b7f78618ace944cc50ee7f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0448bdc1e997ed8a944b5ebf3aa7da7148839d8b7f78618ace944cc50ee7f8a->enter($__internal_a0448bdc1e997ed8a944b5ebf3aa7da7148839d8b7f78618ace944cc50ee7f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_a0448bdc1e997ed8a944b5ebf3aa7da7148839d8b7f78618ace944cc50ee7f8a->leave($__internal_a0448bdc1e997ed8a944b5ebf3aa7da7148839d8b7f78618ace944cc50ee7f8a_prof);

        
        $__internal_8e2a1ef291bc237a2f3a0b1cdb6c380926918d6ced4d5a95a8c226e4ffd70159->leave($__internal_8e2a1ef291bc237a2f3a0b1cdb6c380926918d6ced4d5a95a8c226e4ffd70159_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_13cbf48f9aa004d049bfaead4d359f596a6e25485a396bbb711af2120e9f3b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13cbf48f9aa004d049bfaead4d359f596a6e25485a396bbb711af2120e9f3b4c->enter($__internal_13cbf48f9aa004d049bfaead4d359f596a6e25485a396bbb711af2120e9f3b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73accb62ac28728e87274f8e1de71e6687477f5b4a6272c4c3f6faeb7e107c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73accb62ac28728e87274f8e1de71e6687477f5b4a6272c4c3f6faeb7e107c8a->enter($__internal_73accb62ac28728e87274f8e1de71e6687477f5b4a6272c4c3f6faeb7e107c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Droit Ptac ";
        
        $__internal_73accb62ac28728e87274f8e1de71e6687477f5b4a6272c4c3f6faeb7e107c8a->leave($__internal_73accb62ac28728e87274f8e1de71e6687477f5b4a6272c4c3f6faeb7e107c8a_prof);

        
        $__internal_13cbf48f9aa004d049bfaead4d359f596a6e25485a396bbb711af2120e9f3b4c->leave($__internal_13cbf48f9aa004d049bfaead4d359f596a6e25485a396bbb711af2120e9f3b4c_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_37889b13345c560fb92d67da49fbb09f7267c9604d9a2e2f2fb59f4ba4ea86b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37889b13345c560fb92d67da49fbb09f7267c9604d9a2e2f2fb59f4ba4ea86b0->enter($__internal_37889b13345c560fb92d67da49fbb09f7267c9604d9a2e2f2fb59f4ba4ea86b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2aa025348fd5bcc9465dd3db95295cc40b383b17c9ddfea671c8c0cdf879c4d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa025348fd5bcc9465dd3db95295cc40b383b17c9ddfea671c8c0cdf879c4d4->enter($__internal_2aa025348fd5bcc9465dd3db95295cc40b383b17c9ddfea671c8c0cdf879c4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2aa025348fd5bcc9465dd3db95295cc40b383b17c9ddfea671c8c0cdf879c4d4->leave($__internal_2aa025348fd5bcc9465dd3db95295cc40b383b17c9ddfea671c8c0cdf879c4d4_prof);

        
        $__internal_37889b13345c560fb92d67da49fbb09f7267c9604d9a2e2f2fb59f4ba4ea86b0->leave($__internal_37889b13345c560fb92d67da49fbb09f7267c9604d9a2e2f2fb59f4ba4ea86b0_prof);

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
