<?php

/* @Admin/CtUtilisation/add.html.twig */
class __TwigTemplate_a20516a1b6517181ddf311e9ad43c2283c5b904966a70ae82e8a04bde642f3bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUtilisation/add.html.twig", 1);
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
        $__internal_d8f365a339d0f0726fee815b84c31f1186217e1dd3d44d8f346b1abd662dac22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f365a339d0f0726fee815b84c31f1186217e1dd3d44d8f346b1abd662dac22->enter($__internal_d8f365a339d0f0726fee815b84c31f1186217e1dd3d44d8f346b1abd662dac22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUtilisation/add.html.twig"));

        $__internal_f28f5e55d3bd69f89288a2ce145de0492569b5c55cecdc7657cc3717b3485f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28f5e55d3bd69f89288a2ce145de0492569b5c55cecdc7657cc3717b3485f2a->enter($__internal_f28f5e55d3bd69f89288a2ce145de0492569b5c55cecdc7657cc3717b3485f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUtilisation/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_utilisation"] = true;
        // line 8
        $context["menu_utilisation_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8f365a339d0f0726fee815b84c31f1186217e1dd3d44d8f346b1abd662dac22->leave($__internal_d8f365a339d0f0726fee815b84c31f1186217e1dd3d44d8f346b1abd662dac22_prof);

        
        $__internal_f28f5e55d3bd69f89288a2ce145de0492569b5c55cecdc7657cc3717b3485f2a->leave($__internal_f28f5e55d3bd69f89288a2ce145de0492569b5c55cecdc7657cc3717b3485f2a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df6530068501e0c8d7d80f85ab57ba5cddb26af6b2319c1d24ebb70110539d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6530068501e0c8d7d80f85ab57ba5cddb26af6b2319c1d24ebb70110539d33->enter($__internal_df6530068501e0c8d7d80f85ab57ba5cddb26af6b2319c1d24ebb70110539d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f21914758009033d31722cfd697314842e14978973dc753e9f79a34c8a376161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21914758009033d31722cfd697314842e14978973dc753e9f79a34c8a376161->enter($__internal_f21914758009033d31722cfd697314842e14978973dc753e9f79a34c8a376161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_f21914758009033d31722cfd697314842e14978973dc753e9f79a34c8a376161->leave($__internal_f21914758009033d31722cfd697314842e14978973dc753e9f79a34c8a376161_prof);

        
        $__internal_df6530068501e0c8d7d80f85ab57ba5cddb26af6b2319c1d24ebb70110539d33->leave($__internal_df6530068501e0c8d7d80f85ab57ba5cddb26af6b2319c1d24ebb70110539d33_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3ad9c0c58f8f2265aa406a7bc6ef7db40281d7a6d24d3f5995d695c07a1d2e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ad9c0c58f8f2265aa406a7bc6ef7db40281d7a6d24d3f5995d695c07a1d2e9->enter($__internal_e3ad9c0c58f8f2265aa406a7bc6ef7db40281d7a6d24d3f5995d695c07a1d2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5610ea5a227c4b062fe39a314486b57220140bb9492b9047f64ce0728832fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5610ea5a227c4b062fe39a314486b57220140bb9492b9047f64ce0728832fad->enter($__internal_e5610ea5a227c4b062fe39a314486b57220140bb9492b9047f64ce0728832fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "utLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_utilisation\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_e5610ea5a227c4b062fe39a314486b57220140bb9492b9047f64ce0728832fad->leave($__internal_e5610ea5a227c4b062fe39a314486b57220140bb9492b9047f64ce0728832fad_prof);

        
        $__internal_e3ad9c0c58f8f2265aa406a7bc6ef7db40281d7a6d24d3f5995d695c07a1d2e9->leave($__internal_e3ad9c0c58f8f2265aa406a7bc6ef7db40281d7a6d24d3f5995d695c07a1d2e9_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUtilisation/add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Catégorie {% endblock %}

{% set menu_utilisation        = true %}
{% set menu_utilisation_create = true %}

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
                        <h3 class=\"box-title\">Créer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.utLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_utilisation\"/>
                        <a href=\"{{ path('utilisation_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtUtilisation/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUtilisation\\add.html.twig");
    }
}
