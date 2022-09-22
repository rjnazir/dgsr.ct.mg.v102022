<?php

/* @Admin/CtUsageTarif/add.html.twig */
class __TwigTemplate_b6b1f21879d36661694e6691eb5aa725ae7e54c47796f4bf44021e785abd8b44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUsageTarif/add.html.twig", 1);
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
        $__internal_ffd1e914513f2a5af2e47d5b5f4549a58e0e80c5a3e70e4295539db010b3bc53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd1e914513f2a5af2e47d5b5f4549a58e0e80c5a3e70e4295539db010b3bc53->enter($__internal_ffd1e914513f2a5af2e47d5b5f4549a58e0e80c5a3e70e4295539db010b3bc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsageTarif/add.html.twig"));

        $__internal_64fe55112482c2e9122a4a20e3b47c4cbfe7f16527318704b5254012e2d608f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fe55112482c2e9122a4a20e3b47c4cbfe7f16527318704b5254012e2d608f7->enter($__internal_64fe55112482c2e9122a4a20e3b47c4cbfe7f16527318704b5254012e2d608f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsageTarif/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeVisite", array()), array(0 => $this));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctUsage", array()), array(0 => $this));
        // line 9
        $context["menu_usage_tarif"] = true;
        // line 10
        $context["menu_usage_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd1e914513f2a5af2e47d5b5f4549a58e0e80c5a3e70e4295539db010b3bc53->leave($__internal_ffd1e914513f2a5af2e47d5b5f4549a58e0e80c5a3e70e4295539db010b3bc53_prof);

        
        $__internal_64fe55112482c2e9122a4a20e3b47c4cbfe7f16527318704b5254012e2d608f7->leave($__internal_64fe55112482c2e9122a4a20e3b47c4cbfe7f16527318704b5254012e2d608f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a7a4290ed0a90123fc6116e4a3647174b05a0b69c0f80b0346eb5e03296f5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7a4290ed0a90123fc6116e4a3647174b05a0b69c0f80b0346eb5e03296f5d8->enter($__internal_2a7a4290ed0a90123fc6116e4a3647174b05a0b69c0f80b0346eb5e03296f5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a687e612aac39655cbbbceddbf60d8d7cbea8ede5cc44499a0762680a0532fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a687e612aac39655cbbbceddbf60d8d7cbea8ede5cc44499a0762680a0532fd8->enter($__internal_a687e612aac39655cbbbceddbf60d8d7cbea8ede5cc44499a0762680a0532fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif usage ";
        
        $__internal_a687e612aac39655cbbbceddbf60d8d7cbea8ede5cc44499a0762680a0532fd8->leave($__internal_a687e612aac39655cbbbceddbf60d8d7cbea8ede5cc44499a0762680a0532fd8_prof);

        
        $__internal_2a7a4290ed0a90123fc6116e4a3647174b05a0b69c0f80b0346eb5e03296f5d8->leave($__internal_2a7a4290ed0a90123fc6116e4a3647174b05a0b69c0f80b0346eb5e03296f5d8_prof);

    }

    // line 12
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d37f0fbd4bc0cbfce360ce53c382c957d8cbe59f6a10b596599d8486f1ea5070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37f0fbd4bc0cbfce360ce53c382c957d8cbe59f6a10b596599d8486f1ea5070->enter($__internal_d37f0fbd4bc0cbfce360ce53c382c957d8cbe59f6a10b596599d8486f1ea5070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f410c99331e99b5cad3104c70abe3e6801775eddff0888f2f2edeb8641778ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f410c99331e99b5cad3104c70abe3e6801775eddff0888f2f2edeb8641778ae6->enter($__internal_f410c99331e99b5cad3104c70abe3e6801775eddff0888f2f2edeb8641778ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_f410c99331e99b5cad3104c70abe3e6801775eddff0888f2f2edeb8641778ae6->leave($__internal_f410c99331e99b5cad3104c70abe3e6801775eddff0888f2f2edeb8641778ae6_prof);

        
        $__internal_d37f0fbd4bc0cbfce360ce53c382c957d8cbe59f6a10b596599d8486f1ea5070->leave($__internal_d37f0fbd4bc0cbfce360ce53c382c957d8cbe59f6a10b596599d8486f1ea5070_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0efc81706ad7eae7b3cdff4b556f14be90ef7c6fc6b312a622e55312c5dad9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0efc81706ad7eae7b3cdff4b556f14be90ef7c6fc6b312a622e55312c5dad9c->enter($__internal_e0efc81706ad7eae7b3cdff4b556f14be90ef7c6fc6b312a622e55312c5dad9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9de01ad300e9b5ce4e722e5ccbb771d3f8f5e9e04268557ec35bb705104a078a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de01ad300e9b5ce4e722e5ccbb771d3f8f5e9e04268557ec35bb705104a078a->enter($__internal_9de01ad300e9b5ce4e722e5ccbb771d3f8f5e9e04268557ec35bb705104a078a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ajouter tarif usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeVisite", array()), 'row');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctUsage", array()), 'row');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usgTrfPrix", array()), 'row');
        echo "
                        ";
        // line 62
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_usage\"/>
                        <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_9de01ad300e9b5ce4e722e5ccbb771d3f8f5e9e04268557ec35bb705104a078a->leave($__internal_9de01ad300e9b5ce4e722e5ccbb771d3f8f5e9e04268557ec35bb705104a078a_prof);

        
        $__internal_e0efc81706ad7eae7b3cdff4b556f14be90ef7c6fc6b312a622e55312c5dad9c->leave($__internal_e0efc81706ad7eae7b3cdff4b556f14be90ef7c6fc6b312a622e55312c5dad9c_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUsageTarif/add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}
{% form_theme form.ctTypeVisite _self %}
{% form_theme form.ctUsage _self %}

{% block title %}{{ parent() }} Ajout Tarif usage {% endblock %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ajouter tarif usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctTypeVisite) }}
                        {{ form_row(form.ctUsage) }}
                        {{ form_row(form.usgTrfPrix) }}
                        {#{{ form_row(form.usgTrfAnnee) }}#}
                    </div>

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
{% endblock %}", "@Admin/CtUsageTarif/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUsageTarif\\add.html.twig");
    }
}
