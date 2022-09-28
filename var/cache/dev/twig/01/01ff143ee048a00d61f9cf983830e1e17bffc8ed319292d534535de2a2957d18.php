<?php

/* AdminBundle:CtTypeVisite:edit.html.twig */
class __TwigTemplate_0ac6bd1ec31fcf54abc5c262dd8a29ff9e76446251d2770bf11b537f1d7b2445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeVisite:edit.html.twig", 1);
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
        $__internal_696d9688530441feb32cdf875529f70d0bf1dc55b2234838ebb53f723b4b535d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696d9688530441feb32cdf875529f70d0bf1dc55b2234838ebb53f723b4b535d->enter($__internal_696d9688530441feb32cdf875529f70d0bf1dc55b2234838ebb53f723b4b535d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:edit.html.twig"));

        $__internal_e74ee8c6381793a47d45c7ed3038f6916c40f2b21baa3d5e7b63a7736d5c5e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74ee8c6381793a47d45c7ed3038f6916c40f2b21baa3d5e7b63a7736d5c5e88->enter($__internal_e74ee8c6381793a47d45c7ed3038f6916c40f2b21baa3d5e7b63a7736d5c5e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite"] = true;
        // line 8
        $context["menu_type_visite"] = true;
        // line 9
        $context["menu_type_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_696d9688530441feb32cdf875529f70d0bf1dc55b2234838ebb53f723b4b535d->leave($__internal_696d9688530441feb32cdf875529f70d0bf1dc55b2234838ebb53f723b4b535d_prof);

        
        $__internal_e74ee8c6381793a47d45c7ed3038f6916c40f2b21baa3d5e7b63a7736d5c5e88->leave($__internal_e74ee8c6381793a47d45c7ed3038f6916c40f2b21baa3d5e7b63a7736d5c5e88_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_18df54eda36cb943c41d3b692e23f5c189d469471297ff5cedaa2d4e9b96b022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18df54eda36cb943c41d3b692e23f5c189d469471297ff5cedaa2d4e9b96b022->enter($__internal_18df54eda36cb943c41d3b692e23f5c189d469471297ff5cedaa2d4e9b96b022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4a46108df0b1a5a2742ee8d030721c9542e61018ea7ec2b6f31e99f253f03d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a46108df0b1a5a2742ee8d030721c9542e61018ea7ec2b6f31e99f253f03d0->enter($__internal_a4a46108df0b1a5a2742ee8d030721c9542e61018ea7ec2b6f31e99f253f03d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de visite ";
        
        $__internal_a4a46108df0b1a5a2742ee8d030721c9542e61018ea7ec2b6f31e99f253f03d0->leave($__internal_a4a46108df0b1a5a2742ee8d030721c9542e61018ea7ec2b6f31e99f253f03d0_prof);

        
        $__internal_18df54eda36cb943c41d3b692e23f5c189d469471297ff5cedaa2d4e9b96b022->leave($__internal_18df54eda36cb943c41d3b692e23f5c189d469471297ff5cedaa2d4e9b96b022_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1e46f7b9109d954c592604d73b97afc5018b4cdb346057373b81d0269c26bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e46f7b9109d954c592604d73b97afc5018b4cdb346057373b81d0269c26bf9->enter($__internal_b1e46f7b9109d954c592604d73b97afc5018b4cdb346057373b81d0269c26bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1653e9552a591744d8802234560025c97f559f60c6785e97b2d314f9a3a281d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1653e9552a591744d8802234560025c97f559f60c6785e97b2d314f9a3a281d->enter($__internal_b1653e9552a591744d8802234560025c97f559f60c6785e97b2d314f9a3a281d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tpvLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_visite\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_b1653e9552a591744d8802234560025c97f559f60c6785e97b2d314f9a3a281d->leave($__internal_b1653e9552a591744d8802234560025c97f559f60c6785e97b2d314f9a3a281d_prof);

        
        $__internal_b1e46f7b9109d954c592604d73b97afc5018b4cdb346057373b81d0269c26bf9->leave($__internal_b1e46f7b9109d954c592604d73b97afc5018b4cdb346057373b81d0269c26bf9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeVisite:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Type de visite {% endblock %}

{% set menu_visite             = true %}
{% set menu_type_visite        = true %}
{% set menu_type_visite_create = true %}

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
                        <h3 class=\"box-title\">Editer une type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tpvLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_visite\"/>
                        <a href=\"{{ path('type_visite_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeVisite:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeVisite/edit.html.twig");
    }
}
