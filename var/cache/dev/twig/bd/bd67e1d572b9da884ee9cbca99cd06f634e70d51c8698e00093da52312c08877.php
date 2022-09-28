<?php

/* @Admin/CtBordereau/add.html.twig */
class __TwigTemplate_1392ccf249d68a922a1fb84da900209472355be49f9892823c4761006a7fca32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtBordereau/add.html.twig", 1);
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
        $__internal_cf970eb36c9a943c37147a6cbf3c828976e64dab63dc34d8a985b26b5c8e4e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf970eb36c9a943c37147a6cbf3c828976e64dab63dc34d8a985b26b5c8e4e64->enter($__internal_cf970eb36c9a943c37147a6cbf3c828976e64dab63dc34d8a985b26b5c8e4e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtBordereau/add.html.twig"));

        $__internal_371e33ec6dc4a08ab7461a25d2b7c6804e783d799ae46cd1e3a633ac246a8a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371e33ec6dc4a08ab7461a25d2b7c6804e783d799ae46cd1e3a633ac246a8a92->enter($__internal_371e33ec6dc4a08ab7461a25d2b7c6804e783d799ae46cd1e3a633ac246a8a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtBordereau/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCentre", array()), array(0 => $this));
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctImprimeTech", array()), array(0 => $this));
        // line 35
        $context["menu_bordereau"] = true;
        // line 36
        $context["menu_bordereau_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf970eb36c9a943c37147a6cbf3c828976e64dab63dc34d8a985b26b5c8e4e64->leave($__internal_cf970eb36c9a943c37147a6cbf3c828976e64dab63dc34d8a985b26b5c8e4e64_prof);

        
        $__internal_371e33ec6dc4a08ab7461a25d2b7c6804e783d799ae46cd1e3a633ac246a8a92->leave($__internal_371e33ec6dc4a08ab7461a25d2b7c6804e783d799ae46cd1e3a633ac246a8a92_prof);

    }

    // line 8
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_349a19f19d8f07327ef771f3e244e8ed1e52c6b6fadefa08c3015066d8ab4fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349a19f19d8f07327ef771f3e244e8ed1e52c6b6fadefa08c3015066d8ab4fdd->enter($__internal_349a19f19d8f07327ef771f3e244e8ed1e52c6b6fadefa08c3015066d8ab4fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_591c11c359d879dceb7220b27ab7ead368265e196eae6b205d4f20d9e9350bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591c11c359d879dceb7220b27ab7ead368265e196eae6b205d4f20d9e9350bc6->enter($__internal_591c11c359d879dceb7220b27ab7ead368265e196eae6b205d4f20d9e9350bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 9
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 10
            $context["required"] = false;
        }
        // line 12
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 14
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 15
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 16
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 17
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 20
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 21
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 22
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 23
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 24
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 27
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 28
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 29
        echo "</select>
    </span>";
        
        $__internal_591c11c359d879dceb7220b27ab7ead368265e196eae6b205d4f20d9e9350bc6->leave($__internal_591c11c359d879dceb7220b27ab7ead368265e196eae6b205d4f20d9e9350bc6_prof);

        
        $__internal_349a19f19d8f07327ef771f3e244e8ed1e52c6b6fadefa08c3015066d8ab4fdd->leave($__internal_349a19f19d8f07327ef771f3e244e8ed1e52c6b6fadefa08c3015066d8ab4fdd_prof);

    }

    // line 33
    public function block_title($context, array $blocks = array())
    {
        $__internal_3abd78af3d08f0322ae8dc40f879bf6a02b03f730b3d5ce3864aa2d3b04ff30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abd78af3d08f0322ae8dc40f879bf6a02b03f730b3d5ce3864aa2d3b04ff30d->enter($__internal_3abd78af3d08f0322ae8dc40f879bf6a02b03f730b3d5ce3864aa2d3b04ff30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33e542f74927978d7eb8a6a8c65082f2b60249b6da6ab50f08e08540bedd26a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e542f74927978d7eb8a6a8c65082f2b60249b6da6ab50f08e08540bedd26a7->enter($__internal_33e542f74927978d7eb8a6a8c65082f2b60249b6da6ab50f08e08540bedd26a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout imprimé technique dans le BL ";
        
        $__internal_33e542f74927978d7eb8a6a8c65082f2b60249b6da6ab50f08e08540bedd26a7->leave($__internal_33e542f74927978d7eb8a6a8c65082f2b60249b6da6ab50f08e08540bedd26a7_prof);

        
        $__internal_3abd78af3d08f0322ae8dc40f879bf6a02b03f730b3d5ce3864aa2d3b04ff30d->leave($__internal_3abd78af3d08f0322ae8dc40f879bf6a02b03f730b3d5ce3864aa2d3b04ff30d_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_855865c189b204ebcced97ad1fff137a3a2f3961b03cf482e6cd87ac3bca0343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855865c189b204ebcced97ad1fff137a3a2f3961b03cf482e6cd87ac3bca0343->enter($__internal_855865c189b204ebcced97ad1fff137a3a2f3961b03cf482e6cd87ac3bca0343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31d6fac57eca7f7e9144cfd8263805cea38ccce451aa9cd70d1c284b457696ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d6fac57eca7f7e9144cfd8263805cea38ccce451aa9cd70d1c284b457696ba->enter($__internal_31d6fac57eca7f7e9144cfd8263805cea38ccce451aa9cd70d1c284b457696ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 40
            echo "        <div class=\"callout callout-success\">
            ";
            // line 41
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 45
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 46
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Ajouter d'imprimé technique dans le bordereau</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "blNumero", array()), 'row');
        echo "
                </div>

                <div class=\"box-body\">
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "refExpr", array()), 'row');
        echo "
                </div>

                <div class=\"box-body\">
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateRefExpr", array()), 'row');
        echo "
                </div>
                
                <div class=\"box-body\">
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCentre", array()), 'row');
        echo "
                </div>

                <div class=\"box-body\">
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctImprimeTech", array()), 'row');
        echo "
                </div>

                <div class=\"box-body\">
                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "blDebutNumero", array()), 'row');
        echo "
                </div>

                <div class=\"box-body\">
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "blFinNumero", array()), 'row');
        echo "
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_it_in_bl\"/>
                    <a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_index");
        echo "\"
                        class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_31d6fac57eca7f7e9144cfd8263805cea38ccce451aa9cd70d1c284b457696ba->leave($__internal_31d6fac57eca7f7e9144cfd8263805cea38ccce451aa9cd70d1c284b457696ba_prof);

        
        $__internal_855865c189b204ebcced97ad1fff137a3a2f3961b03cf482e6cd87ac3bca0343->leave($__internal_855865c189b204ebcced97ad1fff137a3a2f3961b03cf482e6cd87ac3bca0343_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtBordereau/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 93,  247 => 88,  239 => 83,  232 => 79,  225 => 75,  218 => 71,  211 => 67,  204 => 63,  197 => 59,  188 => 53,  182 => 49,  173 => 46,  170 => 45,  165 => 44,  156 => 41,  153 => 40,  148 => 39,  139 => 38,  120 => 33,  109 => 29,  107 => 28,  105 => 27,  99 => 24,  97 => 23,  95 => 22,  93 => 21,  91 => 20,  86 => 17,  79 => 16,  77 => 15,  71 => 14,  67 => 12,  64 => 10,  62 => 9,  53 => 8,  43 => 1,  41 => 36,  39 => 35,  37 => 6,  35 => 5,  33 => 3,  11 => 1,);
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

{% form_theme form.ctCentre _self %}
{% form_theme form.ctImprimeTech _self %}

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

{% block title %}{{ parent() }} Ajout imprimé technique dans le BL {% endblock %}

{% set menu_bordereau        = true %}
{% set menu_bordereau_create = true %}

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
                    <h3 class=\"box-title\">Ajouter d'imprimé technique dans le bordereau</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.blNumero) }}
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.refExpr) }}
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.dateRefExpr) }}
                </div>
                
                <div class=\"box-body\">
                    {{ form_row(form.ctCentre) }}
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.ctImprimeTech) }}
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.blDebutNumero) }}
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.blFinNumero) }}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_it_in_bl\"/>
                    <a href=\"{{ path('bordereau_index') }}\"
                        class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtBordereau/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtBordereau\\add.html.twig");
    }
}
