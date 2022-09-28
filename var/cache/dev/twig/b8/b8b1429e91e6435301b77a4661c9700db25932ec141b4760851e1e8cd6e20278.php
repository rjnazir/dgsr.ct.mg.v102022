<?php

/* AdminBundle:CtImprimeTechUse:edit.html.twig */
class __TwigTemplate_4a26909cf20ff5d5d1f236ace817339658dc5a89ed60924a68d098ff59303310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtImprimeTechUse:edit.html.twig", 1);
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
        $__internal_508647a131c9be251226ed42d480ec4e5115d9c5b44c7499366beab1405e4589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_508647a131c9be251226ed42d480ec4e5115d9c5b44c7499366beab1405e4589->enter($__internal_508647a131c9be251226ed42d480ec4e5115d9c5b44c7499366beab1405e4589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTechUse:edit.html.twig"));

        $__internal_97370cd4fbeb6fbec0a4849ba3a5f01f09598759ccc1ef3250ac7e4fb927c11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97370cd4fbeb6fbec0a4849ba3a5f01f09598759ccc1ef3250ac7e4fb927c11d->enter($__internal_97370cd4fbeb6fbec0a4849ba3a5f01f09598759ccc1ef3250ac7e4fb927c11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTechUse:edit.html.twig"));

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
        
        $__internal_508647a131c9be251226ed42d480ec4e5115d9c5b44c7499366beab1405e4589->leave($__internal_508647a131c9be251226ed42d480ec4e5115d9c5b44c7499366beab1405e4589_prof);

        
        $__internal_97370cd4fbeb6fbec0a4849ba3a5f01f09598759ccc1ef3250ac7e4fb927c11d->leave($__internal_97370cd4fbeb6fbec0a4849ba3a5f01f09598759ccc1ef3250ac7e4fb927c11d_prof);

    }

    // line 10
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c190c9cf9d94e0b6f4bed14c09e4a64b6cb27ce0e940857b1e29e90c787a1d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c190c9cf9d94e0b6f4bed14c09e4a64b6cb27ce0e940857b1e29e90c787a1d77->enter($__internal_c190c9cf9d94e0b6f4bed14c09e4a64b6cb27ce0e940857b1e29e90c787a1d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6f90012f9d463a1482ca9624bca03b611613c2123133614abae1f835ba007568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f90012f9d463a1482ca9624bca03b611613c2123133614abae1f835ba007568->enter($__internal_6f90012f9d463a1482ca9624bca03b611613c2123133614abae1f835ba007568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_6f90012f9d463a1482ca9624bca03b611613c2123133614abae1f835ba007568->leave($__internal_6f90012f9d463a1482ca9624bca03b611613c2123133614abae1f835ba007568_prof);

        
        $__internal_c190c9cf9d94e0b6f4bed14c09e4a64b6cb27ce0e940857b1e29e90c787a1d77->leave($__internal_c190c9cf9d94e0b6f4bed14c09e4a64b6cb27ce0e940857b1e29e90c787a1d77_prof);

    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        $__internal_b16e13904b43a493f306a5356187b9c584d72841216fd60c75daaf734306a9d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16e13904b43a493f306a5356187b9c584d72841216fd60c75daaf734306a9d6->enter($__internal_b16e13904b43a493f306a5356187b9c584d72841216fd60c75daaf734306a9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf755ee81f9b6874185f8302ce36f9714e21d186183a7ea56230484683b8bb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf755ee81f9b6874185f8302ce36f9714e21d186183a7ea56230484683b8bb67->enter($__internal_cf755ee81f9b6874185f8302ce36f9714e21d186183a7ea56230484683b8bb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification utilisation imprimé technique ";
        
        $__internal_cf755ee81f9b6874185f8302ce36f9714e21d186183a7ea56230484683b8bb67->leave($__internal_cf755ee81f9b6874185f8302ce36f9714e21d186183a7ea56230484683b8bb67_prof);

        
        $__internal_b16e13904b43a493f306a5356187b9c584d72841216fd60c75daaf734306a9d6->leave($__internal_b16e13904b43a493f306a5356187b9c584d72841216fd60c75daaf734306a9d6_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_03c027e36294ac4c54da3d447883e9bdf512f7346a836d330a7c09e4e951f4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c027e36294ac4c54da3d447883e9bdf512f7346a836d330a7c09e4e951f4ec->enter($__internal_03c027e36294ac4c54da3d447883e9bdf512f7346a836d330a7c09e4e951f4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53ec4f85d59024313a5756f067809fc2aafee4d7301a0a9cbb87d5097498d8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ec4f85d59024313a5756f067809fc2aafee4d7301a0a9cbb87d5097498d8e5->enter($__internal_53ec4f85d59024313a5756f067809fc2aafee4d7301a0a9cbb87d5097498d8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_53ec4f85d59024313a5756f067809fc2aafee4d7301a0a9cbb87d5097498d8e5->leave($__internal_53ec4f85d59024313a5756f067809fc2aafee4d7301a0a9cbb87d5097498d8e5_prof);

        
        $__internal_03c027e36294ac4c54da3d447883e9bdf512f7346a836d330a7c09e4e951f4ec->leave($__internal_03c027e36294ac4c54da3d447883e9bdf512f7346a836d330a7c09e4e951f4ec_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e7360e7efefe92c16840203c35a77a08bf2d753c3890426302ce7d4c57e9b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7360e7efefe92c16840203c35a77a08bf2d753c3890426302ce7d4c57e9b54->enter($__internal_2e7360e7efefe92c16840203c35a77a08bf2d753c3890426302ce7d4c57e9b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3891c06d0ff2fac1ac28184a170a15eb58b552e68afca07e13336b5222ef8373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3891c06d0ff2fac1ac28184a170a15eb58b552e68afca07e13336b5222ef8373->enter($__internal_3891c06d0ff2fac1ac28184a170a15eb58b552e68afca07e13336b5222ef8373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3891c06d0ff2fac1ac28184a170a15eb58b552e68afca07e13336b5222ef8373->leave($__internal_3891c06d0ff2fac1ac28184a170a15eb58b552e68afca07e13336b5222ef8373_prof);

        
        $__internal_2e7360e7efefe92c16840203c35a77a08bf2d753c3890426302ce7d4c57e9b54->leave($__internal_2e7360e7efefe92c16840203c35a77a08bf2d753c3890426302ce7d4c57e9b54_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtImprimeTechUse:edit.html.twig";
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

{% endblock %}", "AdminBundle:CtImprimeTechUse:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtImprimeTechUse/edit.html.twig");
    }
}
