<?php

/* @Admin/CtConstatationAvDedouanementCarac/add.html.twig */
class __TwigTemplate_8ad108c5393af645ba2245973795dca24d5e527d6395542e8bbf2aad7404e43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtConstatationAvDedouanementCarac/add.html.twig", 1);
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
        $__internal_f0f6c518726a10f92c1e5c1795141322f6e84d7c5c46d1d3982fe938b57dfc22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f6c518726a10f92c1e5c1795141322f6e84d7c5c46d1d3982fe938b57dfc22->enter($__internal_f0f6c518726a10f92c1e5c1795141322f6e84d7c5c46d1d3982fe938b57dfc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtConstatationAvDedouanementCarac/add.html.twig"));

        $__internal_d186f36c59b5cd3f475faad50d44d8e687cd5706844d12c15511d047c828517a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d186f36c59b5cd3f475faad50d44d8e687cd5706844d12c15511d047c828517a->enter($__internal_d186f36c59b5cd3f475faad50d44d8e687cd5706844d12c15511d047c828517a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtConstatationAvDedouanementCarac/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0f6c518726a10f92c1e5c1795141322f6e84d7c5c46d1d3982fe938b57dfc22->leave($__internal_f0f6c518726a10f92c1e5c1795141322f6e84d7c5c46d1d3982fe938b57dfc22_prof);

        
        $__internal_d186f36c59b5cd3f475faad50d44d8e687cd5706844d12c15511d047c828517a->leave($__internal_d186f36c59b5cd3f475faad50d44d8e687cd5706844d12c15511d047c828517a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_44e4e491c0f1534b574fc0a00cd2cc8acb70a651cbb21f7221949a3e6ec15f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e4e491c0f1534b574fc0a00cd2cc8acb70a651cbb21f7221949a3e6ec15f99->enter($__internal_44e4e491c0f1534b574fc0a00cd2cc8acb70a651cbb21f7221949a3e6ec15f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c4c7e5dd96b06474fc35ea057a91edae30cbe288e120b3e0e534ffd252de692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4c7e5dd96b06474fc35ea057a91edae30cbe288e120b3e0e534ffd252de692->enter($__internal_8c4c7e5dd96b06474fc35ea057a91edae30cbe288e120b3e0e534ffd252de692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_8c4c7e5dd96b06474fc35ea057a91edae30cbe288e120b3e0e534ffd252de692->leave($__internal_8c4c7e5dd96b06474fc35ea057a91edae30cbe288e120b3e0e534ffd252de692_prof);

        
        $__internal_44e4e491c0f1534b574fc0a00cd2cc8acb70a651cbb21f7221949a3e6ec15f99->leave($__internal_44e4e491c0f1534b574fc0a00cd2cc8acb70a651cbb21f7221949a3e6ec15f99_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2004160a365609a6ba3713c970a14a80bb2c6f65f50ec528d3660b1f0ac05260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2004160a365609a6ba3713c970a14a80bb2c6f65f50ec528d3660b1f0ac05260->enter($__internal_2004160a365609a6ba3713c970a14a80bb2c6f65f50ec528d3660b1f0ac05260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad080a67d8f262f7206e34dece14b0918af79af118a3949f5de191cf5f42e058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad080a67d8f262f7206e34dece14b0918af79af118a3949f5de191cf5f42e058->enter($__internal_ad080a67d8f262f7206e34dece14b0918af79af118a3949f5de191cf5f42e058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Créer une constatation avant dedouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctConstAvDedType", array()), 'row');
        echo "
                    ";
        // line 33
        echo "                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_carac_index");
        echo "\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_ad080a67d8f262f7206e34dece14b0918af79af118a3949f5de191cf5f42e058->leave($__internal_ad080a67d8f262f7206e34dece14b0918af79af118a3949f5de191cf5f42e058_prof);

        
        $__internal_2004160a365609a6ba3713c970a14a80bb2c6f65f50ec528d3660b1f0ac05260->leave($__internal_2004160a365609a6ba3713c970a14a80bb2c6f65f50ec528d3660b1f0ac05260_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtConstatationAvDedouanementCarac/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  129 => 33,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout motif {% endblock %}

{% set menu_const_av_ded                = true %}
{% set menu_const_av_ded_type_create    = true %}

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
                    <h3 class=\"box-title\">Créer une constatation avant dedouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.ctConstAvDedType) }}
                    {#{{ form_row(form.ctConstAvDed.ctVerificateur) }}#}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                    <a href=\"{{ path('const_av_ded_carac_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtConstatationAvDedouanementCarac/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtConstatationAvDedouanementCarac\\add.html.twig");
    }
}
