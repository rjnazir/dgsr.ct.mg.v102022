<?php

/* AdminBundle:CtProvince:edit.html.twig */
class __TwigTemplate_ef7ea236f3e3a62285b60a5e6e7787b86aa5ba725cb965c476f5c31bf937a8d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtProvince:edit.html.twig", 1);
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
        $__internal_4c01665d257d4ad58dbcc6f9f0d5f812ad900b03fd30b6b27d8e619f2af3f93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c01665d257d4ad58dbcc6f9f0d5f812ad900b03fd30b6b27d8e619f2af3f93b->enter($__internal_4c01665d257d4ad58dbcc6f9f0d5f812ad900b03fd30b6b27d8e619f2af3f93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:edit.html.twig"));

        $__internal_c70c306bdb827817885b607abb92590ea3acaeb934188def4a9b1f0d1658f553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70c306bdb827817885b607abb92590ea3acaeb934188def4a9b1f0d1658f553->enter($__internal_c70c306bdb827817885b607abb92590ea3acaeb934188def4a9b1f0d1658f553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_province"] = true;
        // line 8
        $context["menu_province_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c01665d257d4ad58dbcc6f9f0d5f812ad900b03fd30b6b27d8e619f2af3f93b->leave($__internal_4c01665d257d4ad58dbcc6f9f0d5f812ad900b03fd30b6b27d8e619f2af3f93b_prof);

        
        $__internal_c70c306bdb827817885b607abb92590ea3acaeb934188def4a9b1f0d1658f553->leave($__internal_c70c306bdb827817885b607abb92590ea3acaeb934188def4a9b1f0d1658f553_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f1576dc5ede56fe852c11844111488975ec16c1a015bfbce36e9f39f4047486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1576dc5ede56fe852c11844111488975ec16c1a015bfbce36e9f39f4047486->enter($__internal_6f1576dc5ede56fe852c11844111488975ec16c1a015bfbce36e9f39f4047486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fbb1e195465155bbec9eff5f781870ad712675d5d80352bacdce716b8c742154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb1e195465155bbec9eff5f781870ad712675d5d80352bacdce716b8c742154->enter($__internal_fbb1e195465155bbec9eff5f781870ad712675d5d80352bacdce716b8c742154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Province ";
        
        $__internal_fbb1e195465155bbec9eff5f781870ad712675d5d80352bacdce716b8c742154->leave($__internal_fbb1e195465155bbec9eff5f781870ad712675d5d80352bacdce716b8c742154_prof);

        
        $__internal_6f1576dc5ede56fe852c11844111488975ec16c1a015bfbce36e9f39f4047486->leave($__internal_6f1576dc5ede56fe852c11844111488975ec16c1a015bfbce36e9f39f4047486_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c01fb51459cf0b9c0a40628404b0abfb602648460f036496348e04e71a2508c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01fb51459cf0b9c0a40628404b0abfb602648460f036496348e04e71a2508c2->enter($__internal_c01fb51459cf0b9c0a40628404b0abfb602648460f036496348e04e71a2508c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9eaf4054c9d878bc0fa9a7a3690056c3cdee04f4472effa267b58c7b266f32de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eaf4054c9d878bc0fa9a7a3690056c3cdee04f4472effa267b58c7b266f32de->enter($__internal_9eaf4054c9d878bc0fa9a7a3690056c3cdee04f4472effa267b58c7b266f32de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une province</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prvNom", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prvCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_province\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_index");
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
        
        $__internal_9eaf4054c9d878bc0fa9a7a3690056c3cdee04f4472effa267b58c7b266f32de->leave($__internal_9eaf4054c9d878bc0fa9a7a3690056c3cdee04f4472effa267b58c7b266f32de_prof);

        
        $__internal_c01fb51459cf0b9c0a40628404b0abfb602648460f036496348e04e71a2508c2->leave($__internal_c01fb51459cf0b9c0a40628404b0abfb602648460f036496348e04e71a2508c2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtProvince:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Province {% endblock %}

{% set menu_province        = true %}
{% set menu_province_create = true %}

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
                        <h3 class=\"box-title\">Editer une province</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.prvNom) }}
                        {{ form_row(edit_form.prvCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_province\"/>
                        <a href=\"{{ path('province_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtProvince:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtProvince/edit.html.twig");
    }
}
