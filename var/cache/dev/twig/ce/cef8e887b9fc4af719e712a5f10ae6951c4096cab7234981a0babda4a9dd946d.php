<?php

/* AdminBundle:CtGenre:edit.html.twig */
class __TwigTemplate_837da4f173deb8620282d8191abbfdc991035426f21767899e9203d0013d5dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtGenre:edit.html.twig", 1);
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
        $__internal_7f5c2ad86a1ff18d4d5c61e3d08ad16b400e3367ba0a496a67a5a05da08b93de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5c2ad86a1ff18d4d5c61e3d08ad16b400e3367ba0a496a67a5a05da08b93de->enter($__internal_7f5c2ad86a1ff18d4d5c61e3d08ad16b400e3367ba0a496a67a5a05da08b93de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenre:edit.html.twig"));

        $__internal_7b2d19b591270e10133e9acad73426254263094ef650f3a7fe713c0d69c406c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2d19b591270e10133e9acad73426254263094ef650f3a7fe713c0d69c406c3->enter($__internal_7b2d19b591270e10133e9acad73426254263094ef650f3a7fe713c0d69c406c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenre:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctGenreCategorie", array()), array(0 => $this));
        // line 32
        $context["menu_genre"] = true;
        // line 33
        $context["menu_genre_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f5c2ad86a1ff18d4d5c61e3d08ad16b400e3367ba0a496a67a5a05da08b93de->leave($__internal_7f5c2ad86a1ff18d4d5c61e3d08ad16b400e3367ba0a496a67a5a05da08b93de_prof);

        
        $__internal_7b2d19b591270e10133e9acad73426254263094ef650f3a7fe713c0d69c406c3->leave($__internal_7b2d19b591270e10133e9acad73426254263094ef650f3a7fe713c0d69c406c3_prof);

    }

    // line 5
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2c882e73a19f44d3fbe12eeb9bf4d173d56d14b3decb14ebeb445c543c6c7c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c882e73a19f44d3fbe12eeb9bf4d173d56d14b3decb14ebeb445c543c6c7c5c->enter($__internal_2c882e73a19f44d3fbe12eeb9bf4d173d56d14b3decb14ebeb445c543c6c7c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f4de3632720db13535e158d18ff66c8d07c2bab03cf796a2a8c0b8fba67cec6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4de3632720db13535e158d18ff66c8d07c2bab03cf796a2a8c0b8fba67cec6d->enter($__internal_f4de3632720db13535e158d18ff66c8d07c2bab03cf796a2a8c0b8fba67cec6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 6
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 7
            $context["required"] = false;
        }
        // line 9
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 11
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 12
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 13
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 14
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 17
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 18
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 19
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 20
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 21
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 24
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 25
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 26
        echo "</select>
    </span>";
        
        $__internal_f4de3632720db13535e158d18ff66c8d07c2bab03cf796a2a8c0b8fba67cec6d->leave($__internal_f4de3632720db13535e158d18ff66c8d07c2bab03cf796a2a8c0b8fba67cec6d_prof);

        
        $__internal_2c882e73a19f44d3fbe12eeb9bf4d173d56d14b3decb14ebeb445c543c6c7c5c->leave($__internal_2c882e73a19f44d3fbe12eeb9bf4d173d56d14b3decb14ebeb445c543c6c7c5c_prof);

    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        $__internal_d60e701ebbaa0cd831dcb00eec9797b423a947ba1247c52151b880b9b58be045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60e701ebbaa0cd831dcb00eec9797b423a947ba1247c52151b880b9b58be045->enter($__internal_d60e701ebbaa0cd831dcb00eec9797b423a947ba1247c52151b880b9b58be045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78264600360a5a006288e34f804ab130bc3c77f9557141125b3e21d74b39afb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78264600360a5a006288e34f804ab130bc3c77f9557141125b3e21d74b39afb6->enter($__internal_78264600360a5a006288e34f804ab130bc3c77f9557141125b3e21d74b39afb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Genre ";
        
        $__internal_78264600360a5a006288e34f804ab130bc3c77f9557141125b3e21d74b39afb6->leave($__internal_78264600360a5a006288e34f804ab130bc3c77f9557141125b3e21d74b39afb6_prof);

        
        $__internal_d60e701ebbaa0cd831dcb00eec9797b423a947ba1247c52151b880b9b58be045->leave($__internal_d60e701ebbaa0cd831dcb00eec9797b423a947ba1247c52151b880b9b58be045_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2237fcd06a952f373dd6d526123af28ee44ed4361b6e471f5afce4feb11e428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2237fcd06a952f373dd6d526123af28ee44ed4361b6e471f5afce4feb11e428->enter($__internal_b2237fcd06a952f373dd6d526123af28ee44ed4361b6e471f5afce4feb11e428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fbc1c665f5ff76aa25293e1d5cdd2f5a3fdf6711c53edee632aab76ba39b14f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc1c665f5ff76aa25293e1d5cdd2f5a3fdf6711c53edee632aab76ba39b14f3->enter($__internal_fbc1c665f5ff76aa25293e1d5cdd2f5a3fdf6711c53edee632aab76ba39b14f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une genre</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctGenreCategorie", array()), 'row');
        echo "
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "grLibelle", array()), 'row');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "grCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_fbc1c665f5ff76aa25293e1d5cdd2f5a3fdf6711c53edee632aab76ba39b14f3->leave($__internal_fbc1c665f5ff76aa25293e1d5cdd2f5a3fdf6711c53edee632aab76ba39b14f3_prof);

        
        $__internal_b2237fcd06a952f373dd6d526123af28ee44ed4361b6e471f5afce4feb11e428->leave($__internal_b2237fcd06a952f373dd6d526123af28ee44ed4361b6e471f5afce4feb11e428_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtGenre:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 68,  211 => 63,  203 => 58,  199 => 57,  195 => 56,  186 => 50,  180 => 46,  171 => 43,  168 => 42,  163 => 41,  154 => 38,  151 => 37,  146 => 36,  137 => 35,  118 => 30,  107 => 26,  105 => 25,  103 => 24,  97 => 21,  95 => 20,  93 => 19,  91 => 18,  89 => 17,  84 => 14,  77 => 13,  75 => 12,  69 => 11,  65 => 9,  62 => 7,  60 => 6,  51 => 5,  41 => 1,  39 => 33,  37 => 32,  35 => 4,  33 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Genre {% endblock %}

{% set menu_genre        = true %}
{% set menu_genre_create = true %}

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
                        <h3 class=\"box-title\">Editer une genre</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctGenreCategorie) }}
                        {{ form_row(edit_form.grLibelle) }}
                        {{ form_row(edit_form.grCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"{{ path('genre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtGenre:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtGenre/edit.html.twig");
    }
}
