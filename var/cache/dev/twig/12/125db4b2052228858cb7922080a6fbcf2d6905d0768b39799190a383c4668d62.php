<?php

/* @User/Verificateur/add.html.twig */
class __TwigTemplate_20c0ea77690f630b3505de10378bd304e9bf902c64464deb3b2afce756fbaea9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@User/Verificateur/add.html.twig", 2);
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
        $__internal_482cc6e6b0d5ecbd71d3a536163f3dc65194f4848bd3f927dd67ea2a267a32ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482cc6e6b0d5ecbd71d3a536163f3dc65194f4848bd3f927dd67ea2a267a32ed->enter($__internal_482cc6e6b0d5ecbd71d3a536163f3dc65194f4848bd3f927dd67ea2a267a32ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Verificateur/add.html.twig"));

        $__internal_392bad95a001c40cd898e41a2875700fb93cf9e958d1d17321140eec746c434f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392bad95a001c40cd898e41a2875700fb93cf9e958d1d17321140eec746c434f->enter($__internal_392bad95a001c40cd898e41a2875700fb93cf9e958d1d17321140eec746c434f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Verificateur/add.html.twig"));

        // line 1
        $context["current_route"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCentre", array()), array(0 => $this));
        // line 34
        $context["menu_verificateur"] = true;
        // line 35
        $context["menu_verificateur_create"] = true;
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_482cc6e6b0d5ecbd71d3a536163f3dc65194f4848bd3f927dd67ea2a267a32ed->leave($__internal_482cc6e6b0d5ecbd71d3a536163f3dc65194f4848bd3f927dd67ea2a267a32ed_prof);

        
        $__internal_392bad95a001c40cd898e41a2875700fb93cf9e958d1d17321140eec746c434f->leave($__internal_392bad95a001c40cd898e41a2875700fb93cf9e958d1d17321140eec746c434f_prof);

    }

    // line 7
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_822a70723beb188e03c5d44ecd316cc8a263537edb1a36323477058441b880ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822a70723beb188e03c5d44ecd316cc8a263537edb1a36323477058441b880ff->enter($__internal_822a70723beb188e03c5d44ecd316cc8a263537edb1a36323477058441b880ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_70352700ca4d054d48b2e8cd3ca87c810f62e889b9241a2696d4c3f5b3de65ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70352700ca4d054d48b2e8cd3ca87c810f62e889b9241a2696d4c3f5b3de65ef->enter($__internal_70352700ca4d054d48b2e8cd3ca87c810f62e889b9241a2696d4c3f5b3de65ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_70352700ca4d054d48b2e8cd3ca87c810f62e889b9241a2696d4c3f5b3de65ef->leave($__internal_70352700ca4d054d48b2e8cd3ca87c810f62e889b9241a2696d4c3f5b3de65ef_prof);

        
        $__internal_822a70723beb188e03c5d44ecd316cc8a263537edb1a36323477058441b880ff->leave($__internal_822a70723beb188e03c5d44ecd316cc8a263537edb1a36323477058441b880ff_prof);

    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        $__internal_061bae87758a069d713e412257ee7df863be5b4e1f73475a9727a4352e1454a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061bae87758a069d713e412257ee7df863be5b4e1f73475a9727a4352e1454a2->enter($__internal_061bae87758a069d713e412257ee7df863be5b4e1f73475a9727a4352e1454a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c8a2a900e79982df35a44d11f693cf934a536d9cc8389323e55c5fe08fd4f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8a2a900e79982df35a44d11f693cf934a536d9cc8389323e55c5fe08fd4f88->enter($__internal_6c8a2a900e79982df35a44d11f693cf934a536d9cc8389323e55c5fe08fd4f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Vérificateur ";
        
        $__internal_6c8a2a900e79982df35a44d11f693cf934a536d9cc8389323e55c5fe08fd4f88->leave($__internal_6c8a2a900e79982df35a44d11f693cf934a536d9cc8389323e55c5fe08fd4f88_prof);

        
        $__internal_061bae87758a069d713e412257ee7df863be5b4e1f73475a9727a4352e1454a2->leave($__internal_061bae87758a069d713e412257ee7df863be5b4e1f73475a9727a4352e1454a2_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_041a75e99db9c327d335224dd2a3bf69dc44bbbafe673439c2f4d2784fde4a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041a75e99db9c327d335224dd2a3bf69dc44bbbafe673439c2f4d2784fde4a1b->enter($__internal_041a75e99db9c327d335224dd2a3bf69dc44bbbafe673439c2f4d2784fde4a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c9cbf4373c1915507949bc1df88ff4af1087b4fee3d8f8f8d8f624289250d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9cbf4373c1915507949bc1df88ff4af1087b4fee3d8f8f8d8f624289250d7a->enter($__internal_6c9cbf4373c1915507949bc1df88ff4af1087b4fee3d8f8f8d8f624289250d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un vérificateur</h3>
                    </div>
                    <div class=\"box-body\">
                        <div class=\"";
        // line 57
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCentre", array()), 'row');
        echo "
                        </div>
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usrName", array()), 'row');
        echo "
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usrAdresse", array()), 'row');
        echo "
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usrProfession", array()), 'row');
        echo "
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usrTelephone", array()), 'row');
        echo "
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usrPresence", array()), 'row');
        echo "
                        <div class=\"hide\">
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
                        </div>
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_verificateur\"/>
                        <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_6c9cbf4373c1915507949bc1df88ff4af1087b4fee3d8f8f8d8f624289250d7a->leave($__internal_6c9cbf4373c1915507949bc1df88ff4af1087b4fee3d8f8f8d8f624289250d7a_prof);

        
        $__internal_041a75e99db9c327d335224dd2a3bf69dc44bbbafe673439c2f4d2784fde4a1b->leave($__internal_041a75e99db9c327d335224dd2a3bf69dc44bbbafe673439c2f4d2784fde4a1b_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a84dac3c304367c11d4ec3ef68432073e83aafc29b5dbd8dcb8d406286325a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84dac3c304367c11d4ec3ef68432073e83aafc29b5dbd8dcb8d406286325a37->enter($__internal_a84dac3c304367c11d4ec3ef68432073e83aafc29b5dbd8dcb8d406286325a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a35834577dffd9c67a961f5acf9e0d227c2fbe758d38de121390a9fd3b559c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35834577dffd9c67a961f5acf9e0d227c2fbe758d38de121390a9fd3b559c27->enter($__internal_a35834577dffd9c67a961f5acf9e0d227c2fbe758d38de121390a9fd3b559c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            // Enlever l'obligation du champ mot de passe
            \$('#ct_userbundle_user_username, #ct_userbundle_user_plainPassword_first, #ct_userbundle_user_plainPassword_second').removeAttr('required');
        });
    </script>
";
        
        $__internal_a35834577dffd9c67a961f5acf9e0d227c2fbe758d38de121390a9fd3b559c27->leave($__internal_a35834577dffd9c67a961f5acf9e0d227c2fbe758d38de121390a9fd3b559c27_prof);

        
        $__internal_a84dac3c304367c11d4ec3ef68432073e83aafc29b5dbd8dcb8d406286325a37->leave($__internal_a84dac3c304367c11d4ec3ef68432073e83aafc29b5dbd8dcb8d406286325a37_prof);

    }

    public function getTemplateName()
    {
        return "@User/Verificateur/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 87,  273 => 86,  258 => 80,  250 => 75,  241 => 69,  237 => 68,  233 => 67,  228 => 65,  224 => 64,  220 => 63,  216 => 62,  212 => 61,  208 => 60,  203 => 58,  197 => 57,  189 => 52,  183 => 48,  174 => 45,  171 => 44,  166 => 43,  157 => 40,  154 => 39,  149 => 38,  140 => 37,  121 => 32,  110 => 28,  108 => 27,  106 => 26,  100 => 23,  98 => 22,  96 => 21,  94 => 20,  92 => 19,  87 => 16,  80 => 15,  78 => 14,  72 => 13,  68 => 11,  65 => 9,  63 => 8,  54 => 7,  44 => 2,  42 => 35,  40 => 34,  38 => 6,  36 => 4,  34 => 1,  11 => 2,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% form_theme form.ctCentre _self %}
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

{% block title %}{{ parent() }} Ajout Vérificateur {% endblock %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un vérificateur</h3>
                    </div>
                    <div class=\"box-body\">
                        <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                            {{ form_row(form.ctCentre) }}
                        </div>
                        {{ form_row(form.usrName) }}
                        {{ form_row(form.usrAdresse) }}
                        {{ form_row(form.usrProfession) }}
                        {{ form_row(form.usrTelephone) }}
                        {{ form_row(form.email) }}
                        {{ form_row(form.usrPresence) }}
                        <div class=\"hide\">
                            {{ form_row(form.username) }}
                            {{ form_row(form.plainPassword.first) }}
                            {{ form_row(form.plainPassword.second) }}
                        </div>
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_verificateur\"/>
                        <a href=\"{{ path('verificateur_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            // Enlever l'obligation du champ mot de passe
            \$('#ct_userbundle_user_username, #ct_userbundle_user_plainPassword_first, #ct_userbundle_user_plainPassword_second').removeAttr('required');
        });
    </script>
{% endblock %}", "@User/Verificateur/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle\\Resources\\views\\Verificateur\\add.html.twig");
    }
}
