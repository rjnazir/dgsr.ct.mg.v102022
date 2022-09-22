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
        $__internal_72def47556f73a9d4f4cef65fda608d5390c5c1831454b270393026f6485728b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72def47556f73a9d4f4cef65fda608d5390c5c1831454b270393026f6485728b->enter($__internal_72def47556f73a9d4f4cef65fda608d5390c5c1831454b270393026f6485728b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenre/add.html.twig"));

        $__internal_b80b16f9e527675a2cd8911e73b3550d5fd9d6c033c33f385bc3a31eeb523d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80b16f9e527675a2cd8911e73b3550d5fd9d6c033c33f385bc3a31eeb523d36->enter($__internal_b80b16f9e527675a2cd8911e73b3550d5fd9d6c033c33f385bc3a31eeb523d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenre/add.html.twig"));

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
        
        $__internal_72def47556f73a9d4f4cef65fda608d5390c5c1831454b270393026f6485728b->leave($__internal_72def47556f73a9d4f4cef65fda608d5390c5c1831454b270393026f6485728b_prof);

        
        $__internal_b80b16f9e527675a2cd8911e73b3550d5fd9d6c033c33f385bc3a31eeb523d36->leave($__internal_b80b16f9e527675a2cd8911e73b3550d5fd9d6c033c33f385bc3a31eeb523d36_prof);

    }

    // line 5
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b8b3a396bbea8a8a580ab71e3e84df94db57d1e45f4bc8fad80d7dd06398ccfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b3a396bbea8a8a580ab71e3e84df94db57d1e45f4bc8fad80d7dd06398ccfc->enter($__internal_b8b3a396bbea8a8a580ab71e3e84df94db57d1e45f4bc8fad80d7dd06398ccfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_15aac7e57af01fe3fadd4f54b6962fa58c2b54a7ace41aed11035ac8c6c1ecd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15aac7e57af01fe3fadd4f54b6962fa58c2b54a7ace41aed11035ac8c6c1ecd1->enter($__internal_15aac7e57af01fe3fadd4f54b6962fa58c2b54a7ace41aed11035ac8c6c1ecd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_15aac7e57af01fe3fadd4f54b6962fa58c2b54a7ace41aed11035ac8c6c1ecd1->leave($__internal_15aac7e57af01fe3fadd4f54b6962fa58c2b54a7ace41aed11035ac8c6c1ecd1_prof);

        
        $__internal_b8b3a396bbea8a8a580ab71e3e84df94db57d1e45f4bc8fad80d7dd06398ccfc->leave($__internal_b8b3a396bbea8a8a580ab71e3e84df94db57d1e45f4bc8fad80d7dd06398ccfc_prof);

    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a68cb1bdda563f5790c41f93de0d64d22225391ebd4d6f73939e3521fa53d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a68cb1bdda563f5790c41f93de0d64d22225391ebd4d6f73939e3521fa53d6b->enter($__internal_9a68cb1bdda563f5790c41f93de0d64d22225391ebd4d6f73939e3521fa53d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_341ba85c03f751d5196025a7c860777ca39f3823aca5c6bde4a0fc7d0c0c9612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341ba85c03f751d5196025a7c860777ca39f3823aca5c6bde4a0fc7d0c0c9612->enter($__internal_341ba85c03f751d5196025a7c860777ca39f3823aca5c6bde4a0fc7d0c0c9612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout genre ";
        
        $__internal_341ba85c03f751d5196025a7c860777ca39f3823aca5c6bde4a0fc7d0c0c9612->leave($__internal_341ba85c03f751d5196025a7c860777ca39f3823aca5c6bde4a0fc7d0c0c9612_prof);

        
        $__internal_9a68cb1bdda563f5790c41f93de0d64d22225391ebd4d6f73939e3521fa53d6b->leave($__internal_9a68cb1bdda563f5790c41f93de0d64d22225391ebd4d6f73939e3521fa53d6b_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bd9b5aa50c29bd8afa800dfa687852d05373d341fcbed34d3804ad881eca0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bd9b5aa50c29bd8afa800dfa687852d05373d341fcbed34d3804ad881eca0fe->enter($__internal_1bd9b5aa50c29bd8afa800dfa687852d05373d341fcbed34d3804ad881eca0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c152bb0615e91814e5778ff8ce69517385dc3e18c2663a6bbfc7ed6efd7b9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c152bb0615e91814e5778ff8ce69517385dc3e18c2663a6bbfc7ed6efd7b9d4->enter($__internal_3c152bb0615e91814e5778ff8ce69517385dc3e18c2663a6bbfc7ed6efd7b9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c152bb0615e91814e5778ff8ce69517385dc3e18c2663a6bbfc7ed6efd7b9d4->leave($__internal_3c152bb0615e91814e5778ff8ce69517385dc3e18c2663a6bbfc7ed6efd7b9d4_prof);

        
        $__internal_1bd9b5aa50c29bd8afa800dfa687852d05373d341fcbed34d3804ad881eca0fe->leave($__internal_1bd9b5aa50c29bd8afa800dfa687852d05373d341fcbed34d3804ad881eca0fe_prof);

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
