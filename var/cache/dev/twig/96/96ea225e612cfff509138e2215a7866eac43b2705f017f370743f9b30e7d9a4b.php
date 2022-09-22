<?php

/* UserBundle:Verificateur:edit.html.twig */
class __TwigTemplate_bfafdb1695aafe7e1746a97434fbc293111defbaa133e2e7017ccf018728c14c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "UserBundle:Verificateur:edit.html.twig", 2);
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
        $__internal_a8320b39f970c0521a2e146668782181e882b9d097fdaae2895bb34d7b946b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8320b39f970c0521a2e146668782181e882b9d097fdaae2895bb34d7b946b48->enter($__internal_a8320b39f970c0521a2e146668782181e882b9d097fdaae2895bb34d7b946b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Verificateur:edit.html.twig"));

        $__internal_b4290ec0156b4b7e194169a1cff9c083492f37d9de11eee41ea69b841d95b56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4290ec0156b4b7e194169a1cff9c083492f37d9de11eee41ea69b841d95b56f->enter($__internal_b4290ec0156b4b7e194169a1cff9c083492f37d9de11eee41ea69b841d95b56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Verificateur:edit.html.twig"));

        // line 1
        $context["current_route"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), array(0 => $this));
        // line 34
        $context["menu_verificateur"] = true;
        // line 35
        $context["menu_verificateur_create"] = true;
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8320b39f970c0521a2e146668782181e882b9d097fdaae2895bb34d7b946b48->leave($__internal_a8320b39f970c0521a2e146668782181e882b9d097fdaae2895bb34d7b946b48_prof);

        
        $__internal_b4290ec0156b4b7e194169a1cff9c083492f37d9de11eee41ea69b841d95b56f->leave($__internal_b4290ec0156b4b7e194169a1cff9c083492f37d9de11eee41ea69b841d95b56f_prof);

    }

    // line 7
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8ed3c69cc10c65771684da4dcdcb034acbea76a11150cba4c750f72c7fa4d379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed3c69cc10c65771684da4dcdcb034acbea76a11150cba4c750f72c7fa4d379->enter($__internal_8ed3c69cc10c65771684da4dcdcb034acbea76a11150cba4c750f72c7fa4d379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_55f21e3d5775a16f2fa995d8849015e887d4ed675c985a6c77c4b21d3cee9b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f21e3d5775a16f2fa995d8849015e887d4ed675c985a6c77c4b21d3cee9b4e->enter($__internal_55f21e3d5775a16f2fa995d8849015e887d4ed675c985a6c77c4b21d3cee9b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 8
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 9
            $context["required"] = false;
        }
        // line 11
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 13
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 14
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 15
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 16
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 19
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 20
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 21
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 22
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 23
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 26
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 27
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 28
        echo "</select>
    </span>";
        
        $__internal_55f21e3d5775a16f2fa995d8849015e887d4ed675c985a6c77c4b21d3cee9b4e->leave($__internal_55f21e3d5775a16f2fa995d8849015e887d4ed675c985a6c77c4b21d3cee9b4e_prof);

        
        $__internal_8ed3c69cc10c65771684da4dcdcb034acbea76a11150cba4c750f72c7fa4d379->leave($__internal_8ed3c69cc10c65771684da4dcdcb034acbea76a11150cba4c750f72c7fa4d379_prof);

    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        $__internal_33f17a9cef98f5310200d3f0b67c863620936e57d744b0fb47c9785b20f732b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f17a9cef98f5310200d3f0b67c863620936e57d744b0fb47c9785b20f732b4->enter($__internal_33f17a9cef98f5310200d3f0b67c863620936e57d744b0fb47c9785b20f732b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05c34ff4007ccf5d5ae4edf50a7cd9db659ebe555d2a10779b3ae3b54474a108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c34ff4007ccf5d5ae4edf50a7cd9db659ebe555d2a10779b3ae3b54474a108->enter($__internal_05c34ff4007ccf5d5ae4edf50a7cd9db659ebe555d2a10779b3ae3b54474a108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Vérificateur ";
        
        $__internal_05c34ff4007ccf5d5ae4edf50a7cd9db659ebe555d2a10779b3ae3b54474a108->leave($__internal_05c34ff4007ccf5d5ae4edf50a7cd9db659ebe555d2a10779b3ae3b54474a108_prof);

        
        $__internal_33f17a9cef98f5310200d3f0b67c863620936e57d744b0fb47c9785b20f732b4->leave($__internal_33f17a9cef98f5310200d3f0b67c863620936e57d744b0fb47c9785b20f732b4_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_c06c243edbfd35e29606c3ff4d27245e180ad3c7560423f9b45595611ffc0c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06c243edbfd35e29606c3ff4d27245e180ad3c7560423f9b45595611ffc0c3b->enter($__internal_c06c243edbfd35e29606c3ff4d27245e180ad3c7560423f9b45595611ffc0c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d74b853bc23cfe982fd1bcbe90110d730031cfb9b3b9bb69aaa8ed5cf2fb12f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74b853bc23cfe982fd1bcbe90110d730031cfb9b3b9bb69aaa8ed5cf2fb12f6->enter($__internal_d74b853bc23cfe982fd1bcbe90110d730031cfb9b3b9bb69aaa8ed5cf2fb12f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un vérificateur</h3>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"";
        // line 58
        if (( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") &&  !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            echo "hidden";
        }
        echo "\">
                        ";
        // line 60
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), 'row');
        echo "
                        </div>
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrName", array()), 'row');
        echo "
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrAdresse", array()), 'row');
        echo "
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrProfession", array()), 'row');
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrTelephone", array()), 'row');
        echo "
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'row');
        echo "
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrPresence", array()), 'row');
        echo "
                        <div class=\"hide\">
                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "username", array()), 'row');
        echo "
                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "plainPassword", array()), "first", array()), 'row');
        echo "
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "plainPassword", array()), "second", array()), 'row');
        echo "
                        </div>
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_verificateur\"/>
                        <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_d74b853bc23cfe982fd1bcbe90110d730031cfb9b3b9bb69aaa8ed5cf2fb12f6->leave($__internal_d74b853bc23cfe982fd1bcbe90110d730031cfb9b3b9bb69aaa8ed5cf2fb12f6_prof);

        
        $__internal_c06c243edbfd35e29606c3ff4d27245e180ad3c7560423f9b45595611ffc0c3b->leave($__internal_c06c243edbfd35e29606c3ff4d27245e180ad3c7560423f9b45595611ffc0c3b_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5699c4e93ef47d132c3629e046a6f06656e549ba24a93f3f186f76a8c8fe7b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5699c4e93ef47d132c3629e046a6f06656e549ba24a93f3f186f76a8c8fe7b34->enter($__internal_5699c4e93ef47d132c3629e046a6f06656e549ba24a93f3f186f76a8c8fe7b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_201713cdd601b8cc6640c54916fffdcfea5d0fa5851f3c9eed10781ff4d7343e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201713cdd601b8cc6640c54916fffdcfea5d0fa5851f3c9eed10781ff4d7343e->enter($__internal_201713cdd601b8cc6640c54916fffdcfea5d0fa5851f3c9eed10781ff4d7343e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            // Enlever l'obligation du champ mot de passe
            \$('#ct_userbundle_user_plainPassword_first, #ct_userbundle_user_plainPassword_second').removeAttr('required');
        });
    </script>
";
        
        $__internal_201713cdd601b8cc6640c54916fffdcfea5d0fa5851f3c9eed10781ff4d7343e->leave($__internal_201713cdd601b8cc6640c54916fffdcfea5d0fa5851f3c9eed10781ff4d7343e_prof);

        
        $__internal_5699c4e93ef47d132c3629e046a6f06656e549ba24a93f3f186f76a8c8fe7b34->leave($__internal_5699c4e93ef47d132c3629e046a6f06656e549ba24a93f3f186f76a8c8fe7b34_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Verificateur:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 89,  275 => 88,  260 => 82,  252 => 77,  243 => 71,  239 => 70,  235 => 69,  230 => 67,  226 => 66,  222 => 65,  218 => 64,  214 => 63,  210 => 62,  204 => 60,  198 => 58,  189 => 52,  183 => 48,  174 => 45,  171 => 44,  166 => 43,  157 => 40,  154 => 39,  149 => 38,  140 => 37,  121 => 32,  110 => 28,  108 => 27,  106 => 26,  100 => 23,  98 => 22,  96 => 21,  94 => 20,  92 => 19,  87 => 16,  80 => 15,  78 => 14,  72 => 13,  68 => 11,  65 => 9,  63 => 8,  54 => 7,  44 => 2,  42 => 35,  40 => 34,  38 => 6,  36 => 4,  34 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set current_route = app.request.attributes.get('_route') %}
{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% form_theme edit_form.ctCentre _self %}
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

{% block title %}{{ parent() }} Modification Vérificateur {% endblock %}

{% set menu_verificateur        = true %}
{% set menu_verificateur_create = true %}

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
                        <h3 class=\"box-title\">Editer un vérificateur</h3>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"{% if not is_granted('ROLE_SUPERADMIN') and not is_granted('ROLE_ADMIN') %}hidden{% endif %}\">
                        {# <div class=\"{% if (app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN')) and (app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_ADMIN')) %}hidden{% endif %}\"> #}
                            {{ form_row(edit_form.ctCentre) }}
                        </div>
                        {{ form_row(edit_form.usrName) }}
                        {{ form_row(edit_form.usrAdresse) }}
                        {{ form_row(edit_form.usrProfession) }}
                        {{ form_row(edit_form.usrTelephone) }}
                        {{ form_row(edit_form.email) }}
                        {{ form_row(edit_form.usrPresence) }}
                        <div class=\"hide\">
                            {{ form_row(edit_form.username) }}
                            {{ form_row(edit_form.plainPassword.first) }}
                            {{ form_row(edit_form.plainPassword.second) }}
                        </div>
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_verificateur\"/>
                        <a href=\"{{ path('verificateur_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            // Enlever l'obligation du champ mot de passe
            \$('#ct_userbundle_user_plainPassword_first, #ct_userbundle_user_plainPassword_second').removeAttr('required');
        });
    </script>
{% endblock %}", "UserBundle:Verificateur:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle/Resources/views/Verificateur/edit.html.twig");
    }
}
