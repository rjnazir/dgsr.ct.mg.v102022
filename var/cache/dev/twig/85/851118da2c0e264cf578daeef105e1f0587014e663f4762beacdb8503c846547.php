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
        $__internal_45b733f6f6de2ce443cf39e24a6c4a646159ee03c88cb1f8d035f37741d6b580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b733f6f6de2ce443cf39e24a6c4a646159ee03c88cb1f8d035f37741d6b580->enter($__internal_45b733f6f6de2ce443cf39e24a6c4a646159ee03c88cb1f8d035f37741d6b580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsage:add.html.twig"));

        $__internal_b545d5151c32c16eeea51cc558dcca08f5eec42063e9cf13bc14a4c1fcd42281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b545d5151c32c16eeea51cc558dcca08f5eec42063e9cf13bc14a4c1fcd42281->enter($__internal_b545d5151c32c16eeea51cc558dcca08f5eec42063e9cf13bc14a4c1fcd42281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsage:add.html.twig"));

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
        
        $__internal_45b733f6f6de2ce443cf39e24a6c4a646159ee03c88cb1f8d035f37741d6b580->leave($__internal_45b733f6f6de2ce443cf39e24a6c4a646159ee03c88cb1f8d035f37741d6b580_prof);

        
        $__internal_b545d5151c32c16eeea51cc558dcca08f5eec42063e9cf13bc14a4c1fcd42281->leave($__internal_b545d5151c32c16eeea51cc558dcca08f5eec42063e9cf13bc14a4c1fcd42281_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4da9f5645ea7b3a5c9003061f3fe09b1aa09a9b03274f36c20d35b1bbc9312e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da9f5645ea7b3a5c9003061f3fe09b1aa09a9b03274f36c20d35b1bbc9312e8->enter($__internal_4da9f5645ea7b3a5c9003061f3fe09b1aa09a9b03274f36c20d35b1bbc9312e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29817b8ed3b63b68d8d9cb82a2d6d52e68079311bc6be51e6a01cc6adc01c6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29817b8ed3b63b68d8d9cb82a2d6d52e68079311bc6be51e6a01cc6adc01c6ed->enter($__internal_29817b8ed3b63b68d8d9cb82a2d6d52e68079311bc6be51e6a01cc6adc01c6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout usage ";
        
        $__internal_29817b8ed3b63b68d8d9cb82a2d6d52e68079311bc6be51e6a01cc6adc01c6ed->leave($__internal_29817b8ed3b63b68d8d9cb82a2d6d52e68079311bc6be51e6a01cc6adc01c6ed_prof);

        
        $__internal_4da9f5645ea7b3a5c9003061f3fe09b1aa09a9b03274f36c20d35b1bbc9312e8->leave($__internal_4da9f5645ea7b3a5c9003061f3fe09b1aa09a9b03274f36c20d35b1bbc9312e8_prof);

    }

    // line 11
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a8258236fb83b33e61e2ce15a2cc7b61a0e7f013e651958fdd8e1246a2007630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8258236fb83b33e61e2ce15a2cc7b61a0e7f013e651958fdd8e1246a2007630->enter($__internal_a8258236fb83b33e61e2ce15a2cc7b61a0e7f013e651958fdd8e1246a2007630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f7710e99482786cf3aa08bf4e11227ae9554f5161b7eb884eebd0b5aec370397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7710e99482786cf3aa08bf4e11227ae9554f5161b7eb884eebd0b5aec370397->enter($__internal_f7710e99482786cf3aa08bf4e11227ae9554f5161b7eb884eebd0b5aec370397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_f7710e99482786cf3aa08bf4e11227ae9554f5161b7eb884eebd0b5aec370397->leave($__internal_f7710e99482786cf3aa08bf4e11227ae9554f5161b7eb884eebd0b5aec370397_prof);

        
        $__internal_a8258236fb83b33e61e2ce15a2cc7b61a0e7f013e651958fdd8e1246a2007630->leave($__internal_a8258236fb83b33e61e2ce15a2cc7b61a0e7f013e651958fdd8e1246a2007630_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_2740d17175719422f0ca64b496a2c060166adeeaec2e55a533cddde2d5654110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2740d17175719422f0ca64b496a2c060166adeeaec2e55a533cddde2d5654110->enter($__internal_2740d17175719422f0ca64b496a2c060166adeeaec2e55a533cddde2d5654110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_398ed56db7a3f637da428f4e05cb11f8bc0de74a82a86b20c156072965310a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398ed56db7a3f637da428f4e05cb11f8bc0de74a82a86b20c156072965310a7c->enter($__internal_398ed56db7a3f637da428f4e05cb11f8bc0de74a82a86b20c156072965310a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_398ed56db7a3f637da428f4e05cb11f8bc0de74a82a86b20c156072965310a7c->leave($__internal_398ed56db7a3f637da428f4e05cb11f8bc0de74a82a86b20c156072965310a7c_prof);

        
        $__internal_2740d17175719422f0ca64b496a2c060166adeeaec2e55a533cddde2d5654110->leave($__internal_2740d17175719422f0ca64b496a2c060166adeeaec2e55a533cddde2d5654110_prof);

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
