<?php

/* AdminBundle:CtDroitPtac:add.html.twig */
class __TwigTemplate_5187acc22ff54b911c5d85a3e50d12636710910a6a3bc85604267d2de31daec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtDroitPtac:add.html.twig", 1);
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
        $__internal_fc2ffa04119c0dd74036976328265a31e5fb3893c0d11e50e53ae3080fb9d8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2ffa04119c0dd74036976328265a31e5fb3893c0d11e50e53ae3080fb9d8e9->enter($__internal_fc2ffa04119c0dd74036976328265a31e5fb3893c0d11e50e53ae3080fb9d8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtDroitPtac:add.html.twig"));

        $__internal_37365feeed50e6d1e82ea81896284a008ddc747a03665239b241597fbd6cb0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37365feeed50e6d1e82ea81896284a008ddc747a03665239b241597fbd6cb0f5->enter($__internal_37365feeed50e6d1e82ea81896284a008ddc747a03665239b241597fbd6cb0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtDroitPtac:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctGenreCategorie", array()), array(0 => $this));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeDroitPtac", array()), array(0 => $this));
        // line 33
        $context["menu_droit_ptac"] = true;
        // line 34
        $context["menu_droit_ptac_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc2ffa04119c0dd74036976328265a31e5fb3893c0d11e50e53ae3080fb9d8e9->leave($__internal_fc2ffa04119c0dd74036976328265a31e5fb3893c0d11e50e53ae3080fb9d8e9_prof);

        
        $__internal_37365feeed50e6d1e82ea81896284a008ddc747a03665239b241597fbd6cb0f5->leave($__internal_37365feeed50e6d1e82ea81896284a008ddc747a03665239b241597fbd6cb0f5_prof);

    }

    // line 6
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_70907fe738a8e551597732f145f3c1dee77d173ab77853063a85bfcf02dee2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70907fe738a8e551597732f145f3c1dee77d173ab77853063a85bfcf02dee2f1->enter($__internal_70907fe738a8e551597732f145f3c1dee77d173ab77853063a85bfcf02dee2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d5ce445f9e07f6ff5acc840beb17478d01bb62c774ebd49112195a068a3daaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ce445f9e07f6ff5acc840beb17478d01bb62c774ebd49112195a068a3daaae->enter($__internal_d5ce445f9e07f6ff5acc840beb17478d01bb62c774ebd49112195a068a3daaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_d5ce445f9e07f6ff5acc840beb17478d01bb62c774ebd49112195a068a3daaae->leave($__internal_d5ce445f9e07f6ff5acc840beb17478d01bb62c774ebd49112195a068a3daaae_prof);

        
        $__internal_70907fe738a8e551597732f145f3c1dee77d173ab77853063a85bfcf02dee2f1->leave($__internal_70907fe738a8e551597732f145f3c1dee77d173ab77853063a85bfcf02dee2f1_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fb9a7da191d0bd485c9af48da304fb40641c6ede67a098d7843c8acbcfc1b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb9a7da191d0bd485c9af48da304fb40641c6ede67a098d7843c8acbcfc1b43->enter($__internal_9fb9a7da191d0bd485c9af48da304fb40641c6ede67a098d7843c8acbcfc1b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4dc15626cf210ed59c031b0f12ae1b46c4511d21e3f5203d2434c38e441cea59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc15626cf210ed59c031b0f12ae1b46c4511d21e3f5203d2434c38e441cea59->enter($__internal_4dc15626cf210ed59c031b0f12ae1b46c4511d21e3f5203d2434c38e441cea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Droit Ptac ";
        
        $__internal_4dc15626cf210ed59c031b0f12ae1b46c4511d21e3f5203d2434c38e441cea59->leave($__internal_4dc15626cf210ed59c031b0f12ae1b46c4511d21e3f5203d2434c38e441cea59_prof);

        
        $__internal_9fb9a7da191d0bd485c9af48da304fb40641c6ede67a098d7843c8acbcfc1b43->leave($__internal_9fb9a7da191d0bd485c9af48da304fb40641c6ede67a098d7843c8acbcfc1b43_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_344b854b415d9fd53a88a8087b133a297e47d7e8e75bc54eae525ac2b97d2477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344b854b415d9fd53a88a8087b133a297e47d7e8e75bc54eae525ac2b97d2477->enter($__internal_344b854b415d9fd53a88a8087b133a297e47d7e8e75bc54eae525ac2b97d2477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6376c46860edf71a6292abc5f27692a7ebe57bf359d37e848dda2ec6a9eea1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6376c46860edf71a6292abc5f27692a7ebe57bf359d37e848dda2ec6a9eea1b0->enter($__internal_6376c46860edf71a6292abc5f27692a7ebe57bf359d37e848dda2ec6a9eea1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un Droit Ptac</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeDroitPtac", array()), 'row');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctGenreCategorie", array()), 'row');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dpPrixMin", array()), 'row');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dpPrixMax", array()), 'row');
        echo "
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dpDroit", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_droit_ptac\"/>
                        <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_index");
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
        
        $__internal_6376c46860edf71a6292abc5f27692a7ebe57bf359d37e848dda2ec6a9eea1b0->leave($__internal_6376c46860edf71a6292abc5f27692a7ebe57bf359d37e848dda2ec6a9eea1b0_prof);

        
        $__internal_344b854b415d9fd53a88a8087b133a297e47d7e8e75bc54eae525ac2b97d2477->leave($__internal_344b854b415d9fd53a88a8087b133a297e47d7e8e75bc54eae525ac2b97d2477_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtDroitPtac:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 71,  221 => 66,  213 => 61,  209 => 60,  205 => 59,  201 => 58,  197 => 57,  188 => 51,  182 => 47,  173 => 44,  170 => 43,  165 => 42,  156 => 39,  153 => 38,  148 => 37,  139 => 36,  120 => 31,  109 => 27,  107 => 26,  105 => 25,  99 => 22,  97 => 21,  95 => 20,  93 => 19,  91 => 18,  86 => 15,  79 => 14,  77 => 13,  71 => 12,  67 => 10,  64 => 8,  62 => 7,  53 => 6,  43 => 1,  41 => 34,  39 => 33,  37 => 5,  35 => 4,  33 => 3,  11 => 1,);
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
{% form_theme form.ctGenreCategorie _self %}
{% form_theme form.ctTypeDroitPtac _self %}
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

{% block title %}{{ parent() }} Ajout Droit Ptac {% endblock %}

{% set menu_droit_ptac           = true %}
{% set menu_droit_ptac_create    = true %}

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
                        <h3 class=\"box-title\">Créer un Droit Ptac</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctTypeDroitPtac) }}
                        {{ form_row(form.ctGenreCategorie) }}
                        {{ form_row(form.dpPrixMin) }}
                        {{ form_row(form.dpPrixMax) }}
                        {{ form_row(form.dpDroit) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_droit_ptac\"/>
                        <a href=\"{{ path('droit_ptac_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtDroitPtac:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtDroitPtac/add.html.twig");
    }
}
