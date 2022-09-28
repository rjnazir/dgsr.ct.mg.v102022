<?php

/* @Admin/CtGenre/add.html.twig */
class __TwigTemplate_a1920cd43ae0f49b40012222304af54574736e670a2718723870d0b3c7896305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenre/add.html.twig", 1);
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
        $__internal_454cdcbcbc85dff3b582698a8e481051043e9d11d659652234e8120a7f478c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454cdcbcbc85dff3b582698a8e481051043e9d11d659652234e8120a7f478c19->enter($__internal_454cdcbcbc85dff3b582698a8e481051043e9d11d659652234e8120a7f478c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenre/add.html.twig"));

        $__internal_652046acdf2adc6d0a9bbf7f90774d41eb214a9d342039699034cc89dd4fa99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652046acdf2adc6d0a9bbf7f90774d41eb214a9d342039699034cc89dd4fa99e->enter($__internal_652046acdf2adc6d0a9bbf7f90774d41eb214a9d342039699034cc89dd4fa99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenre/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctGenreCategorie", array()), array(0 => $this));
        // line 32
        $context["menu_genre"] = true;
        // line 33
        $context["menu_genre_type"] = true;
        // line 34
        $context["menu_genre_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_454cdcbcbc85dff3b582698a8e481051043e9d11d659652234e8120a7f478c19->leave($__internal_454cdcbcbc85dff3b582698a8e481051043e9d11d659652234e8120a7f478c19_prof);

        
        $__internal_652046acdf2adc6d0a9bbf7f90774d41eb214a9d342039699034cc89dd4fa99e->leave($__internal_652046acdf2adc6d0a9bbf7f90774d41eb214a9d342039699034cc89dd4fa99e_prof);

    }

    // line 5
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e8ac7dbd24ab9502d692fc16c388cab757ef978eb9190a005196512851314ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ac7dbd24ab9502d692fc16c388cab757ef978eb9190a005196512851314ea3->enter($__internal_e8ac7dbd24ab9502d692fc16c388cab757ef978eb9190a005196512851314ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_2e469f72a63878b3fb470ef6c3bd003dc9e3073f68822f5bbe1786680b9017f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e469f72a63878b3fb470ef6c3bd003dc9e3073f68822f5bbe1786680b9017f4->enter($__internal_2e469f72a63878b3fb470ef6c3bd003dc9e3073f68822f5bbe1786680b9017f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_2e469f72a63878b3fb470ef6c3bd003dc9e3073f68822f5bbe1786680b9017f4->leave($__internal_2e469f72a63878b3fb470ef6c3bd003dc9e3073f68822f5bbe1786680b9017f4_prof);

        
        $__internal_e8ac7dbd24ab9502d692fc16c388cab757ef978eb9190a005196512851314ea3->leave($__internal_e8ac7dbd24ab9502d692fc16c388cab757ef978eb9190a005196512851314ea3_prof);

    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        $__internal_a06db19905ee68ff9d2b4a2681807b355d3a1f8c2f0548b51f5a6ca0fe614aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06db19905ee68ff9d2b4a2681807b355d3a1f8c2f0548b51f5a6ca0fe614aa1->enter($__internal_a06db19905ee68ff9d2b4a2681807b355d3a1f8c2f0548b51f5a6ca0fe614aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4269cec068fcb66d0cf8f6cf3a4753626c086d79b42651e6f2c690196255b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4269cec068fcb66d0cf8f6cf3a4753626c086d79b42651e6f2c690196255b4c->enter($__internal_b4269cec068fcb66d0cf8f6cf3a4753626c086d79b42651e6f2c690196255b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout genre ";
        
        $__internal_b4269cec068fcb66d0cf8f6cf3a4753626c086d79b42651e6f2c690196255b4c->leave($__internal_b4269cec068fcb66d0cf8f6cf3a4753626c086d79b42651e6f2c690196255b4c_prof);

        
        $__internal_a06db19905ee68ff9d2b4a2681807b355d3a1f8c2f0548b51f5a6ca0fe614aa1->leave($__internal_a06db19905ee68ff9d2b4a2681807b355d3a1f8c2f0548b51f5a6ca0fe614aa1_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e8e54f5eaa1039188aa5a89bd96c95fe3851850497f7c4cf3d3794ef989f33f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8e54f5eaa1039188aa5a89bd96c95fe3851850497f7c4cf3d3794ef989f33f->enter($__internal_5e8e54f5eaa1039188aa5a89bd96c95fe3851850497f7c4cf3d3794ef989f33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e579f328d78495b444bfcaa3fd89146436f43e3d843d33bf48d6eb33f788942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e579f328d78495b444bfcaa3fd89146436f43e3d843d33bf48d6eb33f788942->enter($__internal_4e579f328d78495b444bfcaa3fd89146436f43e3d843d33bf48d6eb33f788942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une genre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctGenreCategorie", array()), 'row');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grLibelle", array()), 'row');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_genre\"/>
                        <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_4e579f328d78495b444bfcaa3fd89146436f43e3d843d33bf48d6eb33f788942->leave($__internal_4e579f328d78495b444bfcaa3fd89146436f43e3d843d33bf48d6eb33f788942_prof);

        
        $__internal_5e8e54f5eaa1039188aa5a89bd96c95fe3851850497f7c4cf3d3794ef989f33f->leave($__internal_5e8e54f5eaa1039188aa5a89bd96c95fe3851850497f7c4cf3d3794ef989f33f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenre/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 69,  213 => 64,  205 => 59,  201 => 58,  197 => 57,  188 => 51,  182 => 47,  173 => 44,  170 => 43,  165 => 42,  156 => 39,  153 => 38,  148 => 37,  139 => 36,  120 => 30,  109 => 26,  107 => 25,  105 => 24,  99 => 21,  97 => 20,  95 => 19,  93 => 18,  91 => 17,  86 => 14,  79 => 13,  77 => 12,  71 => 11,  67 => 9,  64 => 7,  62 => 6,  53 => 5,  43 => 1,  41 => 34,  39 => 33,  37 => 32,  35 => 4,  33 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout genre {% endblock %}

{% set menu_genre               = true %}
{% set menu_genre_type          = true %}
{% set menu_genre_type_create   = true %}

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
                        <h3 class=\"box-title\">Créer une genre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctGenreCategorie) }}
                        {{ form_row(form.grLibelle) }}
                        {{ form_row(form.grCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_genre\"/>
                        <a href=\"{{ path('genre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtGenre/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenre\\add.html.twig");
    }
}
