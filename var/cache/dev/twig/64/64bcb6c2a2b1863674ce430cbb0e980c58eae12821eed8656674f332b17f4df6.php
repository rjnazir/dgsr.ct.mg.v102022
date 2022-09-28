<?php

/* @Admin/CtTypeConstatationAvDedouanement/add.html.twig */
class __TwigTemplate_c61e5acbd6f9f32f51535cb6cd06e603b75df3a154c1d5645ff11f9a8209a169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeConstatationAvDedouanement/add.html.twig", 1);
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
        $__internal_86a130c9d2d65e8a43ac721f8c1091da54f42a5b2d0ea8f89062aad375e203c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a130c9d2d65e8a43ac721f8c1091da54f42a5b2d0ea8f89062aad375e203c4->enter($__internal_86a130c9d2d65e8a43ac721f8c1091da54f42a5b2d0ea8f89062aad375e203c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/add.html.twig"));

        $__internal_8c219e223476a04f0b2c6f4edb4e8443488eeda5038316834e139e46c1caf157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c219e223476a04f0b2c6f4edb4e8443488eeda5038316834e139e46c1caf157->enter($__internal_8c219e223476a04f0b2c6f4edb4e8443488eeda5038316834e139e46c1caf157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded_type"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86a130c9d2d65e8a43ac721f8c1091da54f42a5b2d0ea8f89062aad375e203c4->leave($__internal_86a130c9d2d65e8a43ac721f8c1091da54f42a5b2d0ea8f89062aad375e203c4_prof);

        
        $__internal_8c219e223476a04f0b2c6f4edb4e8443488eeda5038316834e139e46c1caf157->leave($__internal_8c219e223476a04f0b2c6f4edb4e8443488eeda5038316834e139e46c1caf157_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4001f05ecaedf59f3b58b5f918cbe47681e4dd4fcf22d34f569092a4afe128cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4001f05ecaedf59f3b58b5f918cbe47681e4dd4fcf22d34f569092a4afe128cf->enter($__internal_4001f05ecaedf59f3b58b5f918cbe47681e4dd4fcf22d34f569092a4afe128cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc3472959a13233ff808e849767643db899154d81c2047d9542cd074d75c714a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3472959a13233ff808e849767643db899154d81c2047d9542cd074d75c714a->enter($__internal_fc3472959a13233ff808e849767643db899154d81c2047d9542cd074d75c714a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type constatation ";
        
        $__internal_fc3472959a13233ff808e849767643db899154d81c2047d9542cd074d75c714a->leave($__internal_fc3472959a13233ff808e849767643db899154d81c2047d9542cd074d75c714a_prof);

        
        $__internal_4001f05ecaedf59f3b58b5f918cbe47681e4dd4fcf22d34f569092a4afe128cf->leave($__internal_4001f05ecaedf59f3b58b5f918cbe47681e4dd4fcf22d34f569092a4afe128cf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6232e774b64688749b36070f58335fc9dbc578a9813c9a7689723e06261bb566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6232e774b64688749b36070f58335fc9dbc578a9813c9a7689723e06261bb566->enter($__internal_6232e774b64688749b36070f58335fc9dbc578a9813c9a7689723e06261bb566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71ca57d4a4e5422666e6940869545c8c762b01d2f5fedc3ba564949bea4b350e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ca57d4a4e5422666e6940869545c8c762b01d2f5fedc3ba564949bea4b350e->enter($__internal_71ca57d4a4e5422666e6940869545c8c762b01d2f5fedc3ba564949bea4b350e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Créer un type de constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadTpLibelle", array()), 'row');
        echo "
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_const_av_ded_type\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_71ca57d4a4e5422666e6940869545c8c762b01d2f5fedc3ba564949bea4b350e->leave($__internal_71ca57d4a4e5422666e6940869545c8c762b01d2f5fedc3ba564949bea4b350e_prof);

        
        $__internal_6232e774b64688749b36070f58335fc9dbc578a9813c9a7689723e06261bb566->leave($__internal_6232e774b64688749b36070f58335fc9dbc578a9813c9a7689723e06261bb566_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeConstatationAvDedouanement/add.html.twig";
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

{% block title %}{{ parent() }} Ajout Type constatation {% endblock %}

{% set menu_const_av_ded_type      = true %}
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
                {{ form_start(form) }}
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Créer un type de constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.cadTpLibelle) }}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_const_av_ded_type\"/>
                    <a href=\"{{ path('type_const_av_ded_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeConstatationAvDedouanement/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeConstatationAvDedouanement\\add.html.twig");
    }
}
