<?php

/* AdminBundle:CtTypeDroitPtac:edit.html.twig */
class __TwigTemplate_c73e120022630deff51b7bb5b50e26a0f3d73d3611e8373a944cfad0a7ac5e4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeDroitPtac:edit.html.twig", 1);
        $this->blocks = array(
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
        $__internal_751a60c994b9daa2ed22b08d9b81e881f40ff51e4f3b830a9c858d314f9dc19e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_751a60c994b9daa2ed22b08d9b81e881f40ff51e4f3b830a9c858d314f9dc19e->enter($__internal_751a60c994b9daa2ed22b08d9b81e881f40ff51e4f3b830a9c858d314f9dc19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeDroitPtac:edit.html.twig"));

        $__internal_4902439b1ef8ec5932ebe2366c668c4653a1d0a9fe26fac82d9d1c11ec8303fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4902439b1ef8ec5932ebe2366c668c4653a1d0a9fe26fac82d9d1c11ec8303fb->enter($__internal_4902439b1ef8ec5932ebe2366c668c4653a1d0a9fe26fac82d9d1c11ec8303fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeDroitPtac:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_droit_ptac"] = true;
        // line 8
        $context["menu_type_droit_ptac_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_751a60c994b9daa2ed22b08d9b81e881f40ff51e4f3b830a9c858d314f9dc19e->leave($__internal_751a60c994b9daa2ed22b08d9b81e881f40ff51e4f3b830a9c858d314f9dc19e_prof);

        
        $__internal_4902439b1ef8ec5932ebe2366c668c4653a1d0a9fe26fac82d9d1c11ec8303fb->leave($__internal_4902439b1ef8ec5932ebe2366c668c4653a1d0a9fe26fac82d9d1c11ec8303fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7791dcc4b2aa78edaaf47aba04f3ec3b620af919cb49e425903ddeaee04763be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7791dcc4b2aa78edaaf47aba04f3ec3b620af919cb49e425903ddeaee04763be->enter($__internal_7791dcc4b2aa78edaaf47aba04f3ec3b620af919cb49e425903ddeaee04763be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_49149e5db7fca93dcce47bfa13c5546802dfb52f62bec3fafd27a401a4ef24c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49149e5db7fca93dcce47bfa13c5546802dfb52f62bec3fafd27a401a4ef24c3->enter($__internal_49149e5db7fca93dcce47bfa13c5546802dfb52f62bec3fafd27a401a4ef24c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de droit PTAC ";
        
        $__internal_49149e5db7fca93dcce47bfa13c5546802dfb52f62bec3fafd27a401a4ef24c3->leave($__internal_49149e5db7fca93dcce47bfa13c5546802dfb52f62bec3fafd27a401a4ef24c3_prof);

        
        $__internal_7791dcc4b2aa78edaaf47aba04f3ec3b620af919cb49e425903ddeaee04763be->leave($__internal_7791dcc4b2aa78edaaf47aba04f3ec3b620af919cb49e425903ddeaee04763be_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec30ae515ff27d7394c79165da7cee0455e5dcaa2747fe695ed10c8ffd299e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec30ae515ff27d7394c79165da7cee0455e5dcaa2747fe695ed10c8ffd299e88->enter($__internal_ec30ae515ff27d7394c79165da7cee0455e5dcaa2747fe695ed10c8ffd299e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c3d4815717cdedf4f2b95dca979c8b284232bc46d10b7063302086118d7e473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3d4815717cdedf4f2b95dca979c8b284232bc46d10b7063302086118d7e473->enter($__internal_3c3d4815717cdedf4f2b95dca979c8b284232bc46d10b7063302086118d7e473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tpDpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_droit_ptac\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_3c3d4815717cdedf4f2b95dca979c8b284232bc46d10b7063302086118d7e473->leave($__internal_3c3d4815717cdedf4f2b95dca979c8b284232bc46d10b7063302086118d7e473_prof);

        
        $__internal_ec30ae515ff27d7394c79165da7cee0455e5dcaa2747fe695ed10c8ffd299e88->leave($__internal_ec30ae515ff27d7394c79165da7cee0455e5dcaa2747fe695ed10c8ffd299e88_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeDroitPtac:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Type de droit PTAC {% endblock %}

{% set menu_type_droit_ptac        = true %}
{% set menu_type_droit_ptac_create = true %}

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
                        <h3 class=\"box-title\">Editer une type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tpDpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_droit_ptac\"/>
                        <a href=\"{{ path('type_droit_ptac_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeDroitPtac:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeDroitPtac/edit.html.twig");
    }
}
