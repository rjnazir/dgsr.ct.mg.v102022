<?php

/* UserBundle:Verificateur:add.html.twig */
class __TwigTemplate_3676b0a9684f1b78e249806ae6c07e6c0562eb1377167fc2e0a70cd1f9ae73ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "UserBundle:Verificateur:add.html.twig", 2);
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
        $__internal_7fa525be02a8e1e8daa682f925e149c71b98fa88a6b8a766910de18dfa10dedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa525be02a8e1e8daa682f925e149c71b98fa88a6b8a766910de18dfa10dedd->enter($__internal_7fa525be02a8e1e8daa682f925e149c71b98fa88a6b8a766910de18dfa10dedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Verificateur:add.html.twig"));

        $__internal_30b77e569143122142069eb23a69b4a099a9d1918f0d43b587fb0a72c9b10fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b77e569143122142069eb23a69b4a099a9d1918f0d43b587fb0a72c9b10fed->enter($__internal_30b77e569143122142069eb23a69b4a099a9d1918f0d43b587fb0a72c9b10fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Verificateur:add.html.twig"));

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
        
        $__internal_7fa525be02a8e1e8daa682f925e149c71b98fa88a6b8a766910de18dfa10dedd->leave($__internal_7fa525be02a8e1e8daa682f925e149c71b98fa88a6b8a766910de18dfa10dedd_prof);

        
        $__internal_30b77e569143122142069eb23a69b4a099a9d1918f0d43b587fb0a72c9b10fed->leave($__internal_30b77e569143122142069eb23a69b4a099a9d1918f0d43b587fb0a72c9b10fed_prof);

    }

    // line 7
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3d13383c28ec0c8bf67768eb274b3a5a1bcd5ebb055fb3acf8825d9cc06c5f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d13383c28ec0c8bf67768eb274b3a5a1bcd5ebb055fb3acf8825d9cc06c5f6f->enter($__internal_3d13383c28ec0c8bf67768eb274b3a5a1bcd5ebb055fb3acf8825d9cc06c5f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_4537822c7d4ebc8fc0fed4137e79b64d758d265022e668169c1e34276ef39002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4537822c7d4ebc8fc0fed4137e79b64d758d265022e668169c1e34276ef39002->enter($__internal_4537822c7d4ebc8fc0fed4137e79b64d758d265022e668169c1e34276ef39002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_4537822c7d4ebc8fc0fed4137e79b64d758d265022e668169c1e34276ef39002->leave($__internal_4537822c7d4ebc8fc0fed4137e79b64d758d265022e668169c1e34276ef39002_prof);

        
        $__internal_3d13383c28ec0c8bf67768eb274b3a5a1bcd5ebb055fb3acf8825d9cc06c5f6f->leave($__internal_3d13383c28ec0c8bf67768eb274b3a5a1bcd5ebb055fb3acf8825d9cc06c5f6f_prof);

    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9f023356932cc5c4f0a5aa1cf85cbf383c2184d0c8c3d984cb0a60a60d49189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f023356932cc5c4f0a5aa1cf85cbf383c2184d0c8c3d984cb0a60a60d49189->enter($__internal_e9f023356932cc5c4f0a5aa1cf85cbf383c2184d0c8c3d984cb0a60a60d49189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7216bd7ce15ced0f3759ee66c6bd2ac0879a74bd4a9b6dbce29a8b28ee750017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7216bd7ce15ced0f3759ee66c6bd2ac0879a74bd4a9b6dbce29a8b28ee750017->enter($__internal_7216bd7ce15ced0f3759ee66c6bd2ac0879a74bd4a9b6dbce29a8b28ee750017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Vérificateur ";
        
        $__internal_7216bd7ce15ced0f3759ee66c6bd2ac0879a74bd4a9b6dbce29a8b28ee750017->leave($__internal_7216bd7ce15ced0f3759ee66c6bd2ac0879a74bd4a9b6dbce29a8b28ee750017_prof);

        
        $__internal_e9f023356932cc5c4f0a5aa1cf85cbf383c2184d0c8c3d984cb0a60a60d49189->leave($__internal_e9f023356932cc5c4f0a5aa1cf85cbf383c2184d0c8c3d984cb0a60a60d49189_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee96f717e477d7920b2426e882832d14a93b68bb742273bdb51cc967a0adbe03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee96f717e477d7920b2426e882832d14a93b68bb742273bdb51cc967a0adbe03->enter($__internal_ee96f717e477d7920b2426e882832d14a93b68bb742273bdb51cc967a0adbe03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c6a461b74b38c5718a504e95a48f5d2e845e9a5d2ba14f3773898261e5d53d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6a461b74b38c5718a504e95a48f5d2e845e9a5d2ba14f3773898261e5d53d6->enter($__internal_7c6a461b74b38c5718a504e95a48f5d2e845e9a5d2ba14f3773898261e5d53d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7c6a461b74b38c5718a504e95a48f5d2e845e9a5d2ba14f3773898261e5d53d6->leave($__internal_7c6a461b74b38c5718a504e95a48f5d2e845e9a5d2ba14f3773898261e5d53d6_prof);

        
        $__internal_ee96f717e477d7920b2426e882832d14a93b68bb742273bdb51cc967a0adbe03->leave($__internal_ee96f717e477d7920b2426e882832d14a93b68bb742273bdb51cc967a0adbe03_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a8a95027baeee991cbb9411559db125aa92c3aa2aa3cac03dc5cbba2d95448b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8a95027baeee991cbb9411559db125aa92c3aa2aa3cac03dc5cbba2d95448b->enter($__internal_4a8a95027baeee991cbb9411559db125aa92c3aa2aa3cac03dc5cbba2d95448b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_159826667ef055cd7440929f21c26bd51e3af0e281a96da2c58c5accf89f002e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159826667ef055cd7440929f21c26bd51e3af0e281a96da2c58c5accf89f002e->enter($__internal_159826667ef055cd7440929f21c26bd51e3af0e281a96da2c58c5accf89f002e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_159826667ef055cd7440929f21c26bd51e3af0e281a96da2c58c5accf89f002e->leave($__internal_159826667ef055cd7440929f21c26bd51e3af0e281a96da2c58c5accf89f002e_prof);

        
        $__internal_4a8a95027baeee991cbb9411559db125aa92c3aa2aa3cac03dc5cbba2d95448b->leave($__internal_4a8a95027baeee991cbb9411559db125aa92c3aa2aa3cac03dc5cbba2d95448b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Verificateur:add.html.twig";
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
{% endblock %}", "UserBundle:Verificateur:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle/Resources/views/Verificateur/add.html.twig");
    }
}
