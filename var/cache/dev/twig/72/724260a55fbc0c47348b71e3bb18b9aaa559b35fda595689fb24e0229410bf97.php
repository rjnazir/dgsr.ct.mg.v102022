<?php

/* @Admin/CtTypeConstatationAvDedouanement/edit.html.twig */
class __TwigTemplate_85c923305cec63bcf895964d745ba4df6f9427d0cf4031f595e4bc5375ecdaa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig", 1);
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
        $__internal_52f23835e28f4408f441999e6fdb57edddbf96a8efe8797a99f3ccc5c25b53b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f23835e28f4408f441999e6fdb57edddbf96a8efe8797a99f3ccc5c25b53b1->enter($__internal_52f23835e28f4408f441999e6fdb57edddbf96a8efe8797a99f3ccc5c25b53b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig"));

        $__internal_da1572078db08497d08fe71d06b7d951e5b5550045849c7aebfaf2e7800b9849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1572078db08497d08fe71d06b7d951e5b5550045849c7aebfaf2e7800b9849->enter($__internal_da1572078db08497d08fe71d06b7d951e5b5550045849c7aebfaf2e7800b9849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded_type"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52f23835e28f4408f441999e6fdb57edddbf96a8efe8797a99f3ccc5c25b53b1->leave($__internal_52f23835e28f4408f441999e6fdb57edddbf96a8efe8797a99f3ccc5c25b53b1_prof);

        
        $__internal_da1572078db08497d08fe71d06b7d951e5b5550045849c7aebfaf2e7800b9849->leave($__internal_da1572078db08497d08fe71d06b7d951e5b5550045849c7aebfaf2e7800b9849_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_edd555b568751637fe3692f11014bd7089c6ba69011dfd3dc6c545bc734b7014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edd555b568751637fe3692f11014bd7089c6ba69011dfd3dc6c545bc734b7014->enter($__internal_edd555b568751637fe3692f11014bd7089c6ba69011dfd3dc6c545bc734b7014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6ea8c6b0ed83655ff0435de37fa0b780342068bd8c12dd0e6d635aa7dfb27b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ea8c6b0ed83655ff0435de37fa0b780342068bd8c12dd0e6d635aa7dfb27b4->enter($__internal_b6ea8c6b0ed83655ff0435de37fa0b780342068bd8c12dd0e6d635aa7dfb27b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type constatation avant dédouanement ";
        
        $__internal_b6ea8c6b0ed83655ff0435de37fa0b780342068bd8c12dd0e6d635aa7dfb27b4->leave($__internal_b6ea8c6b0ed83655ff0435de37fa0b780342068bd8c12dd0e6d635aa7dfb27b4_prof);

        
        $__internal_edd555b568751637fe3692f11014bd7089c6ba69011dfd3dc6c545bc734b7014->leave($__internal_edd555b568751637fe3692f11014bd7089c6ba69011dfd3dc6c545bc734b7014_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1d8956d67f2c166303f66a28e9cfa9cd28a0dda793b308f18da2b9213a8c353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d8956d67f2c166303f66a28e9cfa9cd28a0dda793b308f18da2b9213a8c353->enter($__internal_c1d8956d67f2c166303f66a28e9cfa9cd28a0dda793b308f18da2b9213a8c353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74d5e5859876294849d6ec1e136e1cd3a857a1b1ac5f6ff688b60ed7b8f7b209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d5e5859876294849d6ec1e136e1cd3a857a1b1ac5f6ff688b60ed7b8f7b209->enter($__internal_74d5e5859876294849d6ec1e136e1cd3a857a1b1ac5f6ff688b60ed7b8f7b209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Editer un type constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadTpLibelle", array()), 'row');
        echo "
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_const_av_ded\"/>
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_index");
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
        
        $__internal_74d5e5859876294849d6ec1e136e1cd3a857a1b1ac5f6ff688b60ed7b8f7b209->leave($__internal_74d5e5859876294849d6ec1e136e1cd3a857a1b1ac5f6ff688b60ed7b8f7b209_prof);

        
        $__internal_c1d8956d67f2c166303f66a28e9cfa9cd28a0dda793b308f18da2b9213a8c353->leave($__internal_c1d8956d67f2c166303f66a28e9cfa9cd28a0dda793b308f18da2b9213a8c353_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Type constatation avant dédouanement {% endblock %}

{% set menu_const_av_ded_type        = true %}
{% set menu_const_av_ded_type_create = true %}

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
                    <h3 class=\"box-title\">Editer un type constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(edit_form.cadTpLibelle) }}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_const_av_ded\"/>
                    <a href=\"{{ path('type_const_av_ded_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeConstatationAvDedouanement\\edit.html.twig");
    }
}
