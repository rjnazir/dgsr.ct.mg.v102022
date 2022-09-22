<?php

/* AdminBundle:CtUsageTarif:edit.html.twig */
class __TwigTemplate_e684393973bf293dfd81fb54400af385728487805525414c40a35ff1dfa6e741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtUsageTarif:edit.html.twig", 1);
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
        $__internal_de70ba91c105c619cbd0b140b04e87661c1c61ed3ffa7b2f0a047d1bca2250c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de70ba91c105c619cbd0b140b04e87661c1c61ed3ffa7b2f0a047d1bca2250c1->enter($__internal_de70ba91c105c619cbd0b140b04e87661c1c61ed3ffa7b2f0a047d1bca2250c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsageTarif:edit.html.twig"));

        $__internal_c7f436a6730827d0fc7a8e4dcd6143f41a8b557277eac072f29e7834c334e527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f436a6730827d0fc7a8e4dcd6143f41a8b557277eac072f29e7834c334e527->enter($__internal_c7f436a6730827d0fc7a8e4dcd6143f41a8b557277eac072f29e7834c334e527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsageTarif:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctTypeVisite", array()), array(0 => $this));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUsage", array()), array(0 => $this));
        // line 9
        $context["menu_usage_tarif"] = true;
        // line 10
        $context["menu_usage_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de70ba91c105c619cbd0b140b04e87661c1c61ed3ffa7b2f0a047d1bca2250c1->leave($__internal_de70ba91c105c619cbd0b140b04e87661c1c61ed3ffa7b2f0a047d1bca2250c1_prof);

        
        $__internal_c7f436a6730827d0fc7a8e4dcd6143f41a8b557277eac072f29e7834c334e527->leave($__internal_c7f436a6730827d0fc7a8e4dcd6143f41a8b557277eac072f29e7834c334e527_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_703d0a5a1053beaf272f9a4502c22949dfc3ff38f1cd3e28a43a2ccbb1f30c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703d0a5a1053beaf272f9a4502c22949dfc3ff38f1cd3e28a43a2ccbb1f30c23->enter($__internal_703d0a5a1053beaf272f9a4502c22949dfc3ff38f1cd3e28a43a2ccbb1f30c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_117f213b17fa59f514a81d6ae59e17f658d0b1781da76117bfb1e57f887ea7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117f213b17fa59f514a81d6ae59e17f658d0b1781da76117bfb1e57f887ea7b3->enter($__internal_117f213b17fa59f514a81d6ae59e17f658d0b1781da76117bfb1e57f887ea7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif d'usage ";
        
        $__internal_117f213b17fa59f514a81d6ae59e17f658d0b1781da76117bfb1e57f887ea7b3->leave($__internal_117f213b17fa59f514a81d6ae59e17f658d0b1781da76117bfb1e57f887ea7b3_prof);

        
        $__internal_703d0a5a1053beaf272f9a4502c22949dfc3ff38f1cd3e28a43a2ccbb1f30c23->leave($__internal_703d0a5a1053beaf272f9a4502c22949dfc3ff38f1cd3e28a43a2ccbb1f30c23_prof);

    }

    // line 12
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_53fe948999654c71577fa6ff22ed44596cd83ac18c3e9e250e4238fec8fe6d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fe948999654c71577fa6ff22ed44596cd83ac18c3e9e250e4238fec8fe6d66->enter($__internal_53fe948999654c71577fa6ff22ed44596cd83ac18c3e9e250e4238fec8fe6d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_333a9318a6258c5ea28f5a358429fe8da340062711847310221b06bede5113c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333a9318a6258c5ea28f5a358429fe8da340062711847310221b06bede5113c1->enter($__internal_333a9318a6258c5ea28f5a358429fe8da340062711847310221b06bede5113c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_333a9318a6258c5ea28f5a358429fe8da340062711847310221b06bede5113c1->leave($__internal_333a9318a6258c5ea28f5a358429fe8da340062711847310221b06bede5113c1_prof);

        
        $__internal_53fe948999654c71577fa6ff22ed44596cd83ac18c3e9e250e4238fec8fe6d66->leave($__internal_53fe948999654c71577fa6ff22ed44596cd83ac18c3e9e250e4238fec8fe6d66_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b3923998bf872a7c2f41a33a04af44aea35dd29ee0343bb10a262ff52d93c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3923998bf872a7c2f41a33a04af44aea35dd29ee0343bb10a262ff52d93c77->enter($__internal_8b3923998bf872a7c2f41a33a04af44aea35dd29ee0343bb10a262ff52d93c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59181c13805573012fbcd189e546267ca807847769ae880532a8dc905bd343b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59181c13805573012fbcd189e546267ca807847769ae880532a8dc905bd343b3->enter($__internal_59181c13805573012fbcd189e546267ca807847769ae880532a8dc905bd343b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif usage</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctTypeVisite", array()), 'row');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUsage", array()), 'row');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usgTrfPrix", array()), 'row');
        echo "
                        ";
        // line 62
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_usage\"/>
                        <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_tarif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_59181c13805573012fbcd189e546267ca807847769ae880532a8dc905bd343b3->leave($__internal_59181c13805573012fbcd189e546267ca807847769ae880532a8dc905bd343b3_prof);

        
        $__internal_8b3923998bf872a7c2f41a33a04af44aea35dd29ee0343bb10a262ff52d93c77->leave($__internal_8b3923998bf872a7c2f41a33a04af44aea35dd29ee0343bb10a262ff52d93c77_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtUsageTarif:edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}
{% form_theme edit_form.ctTypeVisite _self %}
{% form_theme edit_form.ctUsage _self %}

{% block title %}{{ parent() }} Modification tarif d'usage {% endblock %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif usage</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctTypeVisite) }}
                        {{ form_row(edit_form.ctUsage) }}
                        {{ form_row(edit_form.usgTrfPrix) }}
                        {#{{ form_row(edit_form.usgTrfAnnee) }}#}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_usage\"/>
                        <a href=\"{{ path('usage_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtUsageTarif:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtUsageTarif/edit.html.twig");
    }
}
