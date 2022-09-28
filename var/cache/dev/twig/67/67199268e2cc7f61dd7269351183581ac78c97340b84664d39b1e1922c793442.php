<?php

/* @User/User/add.html.twig */
class __TwigTemplate_05ea7df26caf3b1677679e3ea0cee8132677958689ce11ae009e49e9700b30cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@User/User/add.html.twig", 1);
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
        $__internal_0c293fcf00e0fed718d81afb08313ebbf9c8a88fb5759661756bd0a55d4512e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c293fcf00e0fed718d81afb08313ebbf9c8a88fb5759661756bd0a55d4512e2->enter($__internal_0c293fcf00e0fed718d81afb08313ebbf9c8a88fb5759661756bd0a55d4512e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/User/add.html.twig"));

        $__internal_e78c18fe9708e01559663f9e40dc2e09903032c2c607f2a4e1e56a7f6a940277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78c18fe9708e01559663f9e40dc2e09903032c2c607f2a4e1e56a7f6a940277->enter($__internal_e78c18fe9708e01559663f9e40dc2e09903032c2c607f2a4e1e56a7f6a940277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/User/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCentre", array()), array(0 => $this));
        // line 33
        $context["menu_user"] = true;
        // line 34
        $context["menu_user_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c293fcf00e0fed718d81afb08313ebbf9c8a88fb5759661756bd0a55d4512e2->leave($__internal_0c293fcf00e0fed718d81afb08313ebbf9c8a88fb5759661756bd0a55d4512e2_prof);

        
        $__internal_e78c18fe9708e01559663f9e40dc2e09903032c2c607f2a4e1e56a7f6a940277->leave($__internal_e78c18fe9708e01559663f9e40dc2e09903032c2c607f2a4e1e56a7f6a940277_prof);

    }

    // line 6
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_6d46d0f2996020517053c0e7e8ea2595e4b2e65a2daec15c26119a19dfaab254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d46d0f2996020517053c0e7e8ea2595e4b2e65a2daec15c26119a19dfaab254->enter($__internal_6d46d0f2996020517053c0e7e8ea2595e4b2e65a2daec15c26119a19dfaab254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_ffd3648f57a82a3415b87d8590b3a3c25f5a3efa5292a16225d854a8c85e38de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd3648f57a82a3415b87d8590b3a3c25f5a3efa5292a16225d854a8c85e38de->enter($__internal_ffd3648f57a82a3415b87d8590b3a3c25f5a3efa5292a16225d854a8c85e38de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_ffd3648f57a82a3415b87d8590b3a3c25f5a3efa5292a16225d854a8c85e38de->leave($__internal_ffd3648f57a82a3415b87d8590b3a3c25f5a3efa5292a16225d854a8c85e38de_prof);

        
        $__internal_6d46d0f2996020517053c0e7e8ea2595e4b2e65a2daec15c26119a19dfaab254->leave($__internal_6d46d0f2996020517053c0e7e8ea2595e4b2e65a2daec15c26119a19dfaab254_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_785cfa150037a7de5ceb9b0c5cdb77bebacef274b6d6d999832d519c8a76af43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785cfa150037a7de5ceb9b0c5cdb77bebacef274b6d6d999832d519c8a76af43->enter($__internal_785cfa150037a7de5ceb9b0c5cdb77bebacef274b6d6d999832d519c8a76af43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1274dea44049dc8994f15545e5219dbc8fb89fdf28c23ae7fb64471fb12e4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1274dea44049dc8994f15545e5219dbc8fb89fdf28c23ae7fb64471fb12e4b7->enter($__internal_f1274dea44049dc8994f15545e5219dbc8fb89fdf28c23ae7fb64471fb12e4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Utilisateur ";
        
        $__internal_f1274dea44049dc8994f15545e5219dbc8fb89fdf28c23ae7fb64471fb12e4b7->leave($__internal_f1274dea44049dc8994f15545e5219dbc8fb89fdf28c23ae7fb64471fb12e4b7_prof);

        
        $__internal_785cfa150037a7de5ceb9b0c5cdb77bebacef274b6d6d999832d519c8a76af43->leave($__internal_785cfa150037a7de5ceb9b0c5cdb77bebacef274b6d6d999832d519c8a76af43_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_bddc8875e7e198d2a1dbafae109977880872d2c488ced1cfc5f944feaebd9075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bddc8875e7e198d2a1dbafae109977880872d2c488ced1cfc5f944feaebd9075->enter($__internal_bddc8875e7e198d2a1dbafae109977880872d2c488ced1cfc5f944feaebd9075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cee3dc20df9ce0dd64d963887d1d805a0a0a510e48fd317949c24008f2ad2bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee3dc20df9ce0dd64d963887d1d805a0a0a510e48fd317949c24008f2ad2bbf->enter($__internal_cee3dc20df9ce0dd64d963887d1d805a0a0a510e48fd317949c24008f2ad2bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un utilisateur</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCentre", array()), 'row');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usrName", array()), 'row');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usrAdresse", array()), 'row');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usrProfession", array()), 'row');
        echo "
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usrTelephone", array()), 'row');
        echo "
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                        <div class=\"hidden\">
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usrPresence", array()), 'row');
        echo "
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group\">
                                <div class=\"col-sm-6 col-md-6 col-lg-4\">
                                    <label for=\"ct_userbundle_user_role\">Rôle utilisateur</label>
                                    <select id=\"ct_userbundle_user_role\" name=\"ct_userbundle_user_role\" class=\"form-control\">
                                        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_roles"] ?? $this->getContext($context, "user_roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["user_role"]) {
            // line 72
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user_role"], "id", array()), "html", null, true);
            echo "\">
                                                ";
            // line 73
            if (($this->getAttribute($context["user_role"], "roleName", array()) == "Admin")) {
                // line 74
                echo "                                                    Chef de centre
                                                ";
            } else {
                // line 76
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user_role"], "roleName", array()), "html", null, true);
                echo "
                                                ";
            }
            // line 78
            echo "                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_user\"/>
                        <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\" 
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_cee3dc20df9ce0dd64d963887d1d805a0a0a510e48fd317949c24008f2ad2bbf->leave($__internal_cee3dc20df9ce0dd64d963887d1d805a0a0a510e48fd317949c24008f2ad2bbf_prof);

        
        $__internal_bddc8875e7e198d2a1dbafae109977880872d2c488ced1cfc5f944feaebd9075->leave($__internal_bddc8875e7e198d2a1dbafae109977880872d2c488ced1cfc5f944feaebd9075_prof);

    }

    public function getTemplateName()
    {
        return "@User/User/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 97,  281 => 92,  273 => 87,  269 => 86,  265 => 85,  258 => 80,  251 => 78,  245 => 76,  241 => 74,  239 => 73,  234 => 72,  230 => 71,  220 => 64,  215 => 62,  211 => 61,  207 => 60,  203 => 59,  199 => 58,  195 => 57,  186 => 51,  180 => 47,  171 => 44,  168 => 43,  163 => 42,  154 => 39,  151 => 38,  146 => 37,  137 => 36,  118 => 31,  107 => 27,  105 => 26,  103 => 25,  97 => 22,  95 => 21,  93 => 20,  91 => 19,  89 => 18,  84 => 15,  77 => 14,  75 => 13,  69 => 12,  65 => 10,  62 => 8,  60 => 7,  51 => 6,  41 => 1,  39 => 34,  37 => 33,  35 => 5,  33 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Utilisateur {% endblock %}

{% set menu_user        = true %}
{% set menu_user_create = true %}

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
                        <h3 class=\"box-title\">Créer un utilisateur</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctCentre) }}
                        {{ form_row(form.usrName) }}
                        {{ form_row(form.usrAdresse) }}
                        {{ form_row(form.usrProfession) }}
                        {{ form_row(form.usrTelephone) }}
                        {{ form_row(form.email) }}
                        <div class=\"hidden\">
                            {{ form_row(form.usrPresence) }}
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group\">
                                <div class=\"col-sm-6 col-md-6 col-lg-4\">
                                    <label for=\"ct_userbundle_user_role\">Rôle utilisateur</label>
                                    <select id=\"ct_userbundle_user_role\" name=\"ct_userbundle_user_role\" class=\"form-control\">
                                        {% for user_role in user_roles %}
                                            <option value=\"{{ user_role.id }}\">
                                                {% if (user_role.roleName == 'Admin') %}
                                                    Chef de centre
                                                {% else %}
                                                    {{ user_role.roleName }}
                                                {% endif %}
                                            </option>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        {{ form_row(form.username) }}
                        {{ form_row(form.plainPassword.first) }}
                        {{ form_row(form.plainPassword.second) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_user\"/>
                        <a href=\"{{ path('user_index') }}\" 
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@User/User/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle\\Resources\\views\\User\\add.html.twig");
    }
}
