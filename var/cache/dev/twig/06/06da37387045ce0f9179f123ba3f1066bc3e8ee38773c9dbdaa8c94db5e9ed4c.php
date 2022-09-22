<?php

/* AdminBundle:CtBordereau:add.html.twig */
class __TwigTemplate_28d199028a5d8a971b73fbe93514bc2cbb6604b8393abc0e902c89f775b21f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtBordereau:add.html.twig", 1);
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
        $__internal_d9c3367b06970e9b5c6e6b6392e1684e416cf86829f324dda4e15d0b015872f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c3367b06970e9b5c6e6b6392e1684e416cf86829f324dda4e15d0b015872f9->enter($__internal_d9c3367b06970e9b5c6e6b6392e1684e416cf86829f324dda4e15d0b015872f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtBordereau:add.html.twig"));

        $__internal_de4d4cd43ea59938288907fa86f1208af0a9f99c9f93653bc29c1bf6b7dcd1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4d4cd43ea59938288907fa86f1208af0a9f99c9f93653bc29c1bf6b7dcd1d5->enter($__internal_de4d4cd43ea59938288907fa86f1208af0a9f99c9f93653bc29c1bf6b7dcd1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtBordereau:add.html.twig"));

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
        
        $__internal_d9c3367b06970e9b5c6e6b6392e1684e416cf86829f324dda4e15d0b015872f9->leave($__internal_d9c3367b06970e9b5c6e6b6392e1684e416cf86829f324dda4e15d0b015872f9_prof);

        
        $__internal_de4d4cd43ea59938288907fa86f1208af0a9f99c9f93653bc29c1bf6b7dcd1d5->leave($__internal_de4d4cd43ea59938288907fa86f1208af0a9f99c9f93653bc29c1bf6b7dcd1d5_prof);

    }

    // line 8
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2c6473d2b6704afa47a33401e37f67a42b3771dc85da642cfe83488017bfb12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6473d2b6704afa47a33401e37f67a42b3771dc85da642cfe83488017bfb12b->enter($__internal_2c6473d2b6704afa47a33401e37f67a42b3771dc85da642cfe83488017bfb12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_2457af73d065c1290d2d7cf0eab66a7acd472d11e6fff25b5cd294283b263c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2457af73d065c1290d2d7cf0eab66a7acd472d11e6fff25b5cd294283b263c54->enter($__internal_2457af73d065c1290d2d7cf0eab66a7acd472d11e6fff25b5cd294283b263c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_2457af73d065c1290d2d7cf0eab66a7acd472d11e6fff25b5cd294283b263c54->leave($__internal_2457af73d065c1290d2d7cf0eab66a7acd472d11e6fff25b5cd294283b263c54_prof);

        
        $__internal_2c6473d2b6704afa47a33401e37f67a42b3771dc85da642cfe83488017bfb12b->leave($__internal_2c6473d2b6704afa47a33401e37f67a42b3771dc85da642cfe83488017bfb12b_prof);

    }

    // line 33
    public function block_title($context, array $blocks = array())
    {
        $__internal_35ff35eb748e87130b165bde5427127159ad7aaa5557d10c19f3dfd7654e7c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ff35eb748e87130b165bde5427127159ad7aaa5557d10c19f3dfd7654e7c59->enter($__internal_35ff35eb748e87130b165bde5427127159ad7aaa5557d10c19f3dfd7654e7c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c1d0aec79059239b69c0bf5ce0fd84f1908578845d7b07165ee22c47c5768fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1d0aec79059239b69c0bf5ce0fd84f1908578845d7b07165ee22c47c5768fe->enter($__internal_1c1d0aec79059239b69c0bf5ce0fd84f1908578845d7b07165ee22c47c5768fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout imprimé technique dans le BL ";
        
        $__internal_1c1d0aec79059239b69c0bf5ce0fd84f1908578845d7b07165ee22c47c5768fe->leave($__internal_1c1d0aec79059239b69c0bf5ce0fd84f1908578845d7b07165ee22c47c5768fe_prof);

        
        $__internal_35ff35eb748e87130b165bde5427127159ad7aaa5557d10c19f3dfd7654e7c59->leave($__internal_35ff35eb748e87130b165bde5427127159ad7aaa5557d10c19f3dfd7654e7c59_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_69eed69dedc532c939dcc059482658077fb536e8e6ac06df5095f05af46e2526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69eed69dedc532c939dcc059482658077fb536e8e6ac06df5095f05af46e2526->enter($__internal_69eed69dedc532c939dcc059482658077fb536e8e6ac06df5095f05af46e2526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec83edd914c4b0f9c91179bb0c71e5ec3b76e4601f86de835772dde735dc45ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec83edd914c4b0f9c91179bb0c71e5ec3b76e4601f86de835772dde735dc45ad->enter($__internal_ec83edd914c4b0f9c91179bb0c71e5ec3b76e4601f86de835772dde735dc45ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ec83edd914c4b0f9c91179bb0c71e5ec3b76e4601f86de835772dde735dc45ad->leave($__internal_ec83edd914c4b0f9c91179bb0c71e5ec3b76e4601f86de835772dde735dc45ad_prof);

        
        $__internal_69eed69dedc532c939dcc059482658077fb536e8e6ac06df5095f05af46e2526->leave($__internal_69eed69dedc532c939dcc059482658077fb536e8e6ac06df5095f05af46e2526_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtBordereau:add.html.twig";
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
{% endblock %}", "AdminBundle:CtBordereau:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtBordereau/add.html.twig");
    }
}
