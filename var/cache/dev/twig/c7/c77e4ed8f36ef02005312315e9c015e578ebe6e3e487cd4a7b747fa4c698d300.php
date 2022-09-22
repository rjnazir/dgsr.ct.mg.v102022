<?php

/* @Admin/CtImprimeTechUse/edit.html.twig */
class __TwigTemplate_649f6b931c0f0befa4c0baf9435e7e164514199018f5e56ee9d6ce358bc1eb47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtImprimeTechUse/edit.html.twig", 1);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_604ad2c003e56d4328dd0556d76d5674d99d4457b0903714b82a80bbf12af55e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604ad2c003e56d4328dd0556d76d5674d99d4457b0903714b82a80bbf12af55e->enter($__internal_604ad2c003e56d4328dd0556d76d5674d99d4457b0903714b82a80bbf12af55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/edit.html.twig"));

        $__internal_cd7cda4461d082c022cb38c00fd59a71da9a8750b77db1b8a7c9eba9cfc1a5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7cda4461d082c022cb38c00fd59a71da9a8750b77db1b8a7c9eba9cfc1a5dd->enter($__internal_cd7cda4461d082c022cb38c00fd59a71da9a8750b77db1b8a7c9eba9cfc1a5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctBordereau", array()), array(0 => $this));
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), array(0 => $this));
        // line 7
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctImprimeTech", array()), array(0 => $this));
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ituMotifUsed", array()), array(0 => $this));
        // line 37
        $context["menu_imprime_tech_use"] = true;
        // line 38
        $context["menu_imprime_tech_use_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_604ad2c003e56d4328dd0556d76d5674d99d4457b0903714b82a80bbf12af55e->leave($__internal_604ad2c003e56d4328dd0556d76d5674d99d4457b0903714b82a80bbf12af55e_prof);

        
        $__internal_cd7cda4461d082c022cb38c00fd59a71da9a8750b77db1b8a7c9eba9cfc1a5dd->leave($__internal_cd7cda4461d082c022cb38c00fd59a71da9a8750b77db1b8a7c9eba9cfc1a5dd_prof);

    }

    // line 10
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_0619d4f48866caa63b6238a67a02aee4553733f76166306660290ff9a5fac148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0619d4f48866caa63b6238a67a02aee4553733f76166306660290ff9a5fac148->enter($__internal_0619d4f48866caa63b6238a67a02aee4553733f76166306660290ff9a5fac148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0882e562c2548cd6f8c228341bc89be162ab5dc0ffd930fd47004f7fe378c901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0882e562c2548cd6f8c228341bc89be162ab5dc0ffd930fd47004f7fe378c901->enter($__internal_0882e562c2548cd6f8c228341bc89be162ab5dc0ffd930fd47004f7fe378c901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 11
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 12
            $context["required"] = false;
        }
        // line 14
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 16
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 17
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 18
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 19
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 22
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 23
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 24
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 25
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 26
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 29
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 30
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 31
        echo "</select>
    </span>";
        
        $__internal_0882e562c2548cd6f8c228341bc89be162ab5dc0ffd930fd47004f7fe378c901->leave($__internal_0882e562c2548cd6f8c228341bc89be162ab5dc0ffd930fd47004f7fe378c901_prof);

        
        $__internal_0619d4f48866caa63b6238a67a02aee4553733f76166306660290ff9a5fac148->leave($__internal_0619d4f48866caa63b6238a67a02aee4553733f76166306660290ff9a5fac148_prof);

    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        $__internal_651c8fb590d9c40f088adb6d3799290b3f65fc4792213257636788f2dc516c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651c8fb590d9c40f088adb6d3799290b3f65fc4792213257636788f2dc516c83->enter($__internal_651c8fb590d9c40f088adb6d3799290b3f65fc4792213257636788f2dc516c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f659c9421a5dd76b20892e6c2a2819e4a1c2e5f6993259586356d985a967118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f659c9421a5dd76b20892e6c2a2819e4a1c2e5f6993259586356d985a967118->enter($__internal_6f659c9421a5dd76b20892e6c2a2819e4a1c2e5f6993259586356d985a967118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification utilisation imprimé technique ";
        
        $__internal_6f659c9421a5dd76b20892e6c2a2819e4a1c2e5f6993259586356d985a967118->leave($__internal_6f659c9421a5dd76b20892e6c2a2819e4a1c2e5f6993259586356d985a967118_prof);

        
        $__internal_651c8fb590d9c40f088adb6d3799290b3f65fc4792213257636788f2dc516c83->leave($__internal_651c8fb590d9c40f088adb6d3799290b3f65fc4792213257636788f2dc516c83_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa3d361897320d408b1ebcf28b505cf4f002487f467ff041c9f0685a192d3813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3d361897320d408b1ebcf28b505cf4f002487f467ff041c9f0685a192d3813->enter($__internal_fa3d361897320d408b1ebcf28b505cf4f002487f467ff041c9f0685a192d3813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a10a7313debd09cb5e3657af58e39e3aed8a080439e7f65038cf6acb4f6ca69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a10a7313debd09cb5e3657af58e39e3aed8a080439e7f65038cf6acb4f6ca69->enter($__internal_1a10a7313debd09cb5e3657af58e39e3aed8a080439e7f65038cf6acb4f6ca69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "        <div class=\"callout callout-success\">
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 47
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 48
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Modifier une utilisation d'imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctBordereau", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ituNumero", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ituMotifUsed", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctControle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_it_in_bl\"/>
                        ";
        // line 90
        echo "                    </div>
                ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_1a10a7313debd09cb5e3657af58e39e3aed8a080439e7f65038cf6acb4f6ca69->leave($__internal_1a10a7313debd09cb5e3657af58e39e3aed8a080439e7f65038cf6acb4f6ca69_prof);

        
        $__internal_fa3d361897320d408b1ebcf28b505cf4f002487f467ff041c9f0685a192d3813->leave($__internal_fa3d361897320d408b1ebcf28b505cf4f002487f467ff041c9f0685a192d3813_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11d698d3cdfce9cf4358fc72309de220425d0539820ebd8ff012d84b7a50c6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d698d3cdfce9cf4358fc72309de220425d0539820ebd8ff012d84b7a50c6c6->enter($__internal_11d698d3cdfce9cf4358fc72309de220425d0539820ebd8ff012d84b7a50c6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1807087c2392bc024ea017a5d92a9be79c74f2d818357b6da340058b64e263f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1807087c2392bc024ea017a5d92a9be79c74f2d818357b6da340058b64e263f2->enter($__internal_1807087c2392bc024ea017a5d92a9be79c74f2d818357b6da340058b64e263f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\">
        ";
        // line 101
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

        var _check_ct_controle_ids_ajax_uri = \"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimes_tech_test_ct_controle_ajax");
        echo "\";

    </script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/imprime.tech.use.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_1807087c2392bc024ea017a5d92a9be79c74f2d818357b6da340058b64e263f2->leave($__internal_1807087c2392bc024ea017a5d92a9be79c74f2d818357b6da340058b64e263f2_prof);

        
        $__internal_11d698d3cdfce9cf4358fc72309de220425d0539820ebd8ff012d84b7a50c6c6->leave($__internal_11d698d3cdfce9cf4358fc72309de220425d0539820ebd8ff012d84b7a50c6c6_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTechUse/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 106,  285 => 103,  280 => 101,  275 => 99,  272 => 98,  263 => 97,  248 => 91,  245 => 90,  237 => 81,  230 => 77,  223 => 73,  216 => 69,  209 => 65,  202 => 61,  193 => 55,  187 => 51,  178 => 48,  175 => 47,  170 => 46,  161 => 43,  158 => 42,  153 => 41,  144 => 40,  125 => 35,  114 => 31,  112 => 30,  110 => 29,  104 => 26,  102 => 25,  100 => 24,  98 => 23,  96 => 22,  91 => 19,  84 => 18,  82 => 17,  76 => 16,  72 => 14,  69 => 12,  67 => 11,  58 => 10,  48 => 1,  46 => 38,  44 => 37,  42 => 8,  40 => 7,  38 => 6,  36 => 5,  34 => 3,  11 => 1,);
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

{% form_theme edit_form.ctBordereau _self %}
{% form_theme edit_form.ctCentre _self %}
{% form_theme edit_form.ctImprimeTech _self %}
{% form_theme edit_form.ituMotifUsed _self %}

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

{% block title %}{{ parent() }} Modification utilisation imprimé technique {% endblock %}

{% set menu_imprime_tech_use        = true %}
{% set menu_imprime_tech_use_create = true %}

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
                        <h3 class=\"box-title\">Modifier une utilisation d'imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctBordereau) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctCentre) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ituNumero) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ituMotifUsed) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctControle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_it_in_bl\"/>
                        {# <a href=\"{{ path('bordereau_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a> #}
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}

    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
    <script type=\"text/javascript\">
        {{ parent () }}

        var _check_ct_controle_ids_ajax_uri = \"{{ path('imprimes_tech_test_ct_controle_ajax') }}\";

    </script>
    <script src=\"{{ asset('backoffice/js/imprime.tech.use.js') }}\"></script>

{% endblock %}", "@Admin/CtImprimeTechUse/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTechUse\\edit.html.twig");
    }
}
