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
        $__internal_807cf78f555ad98fffc2333af76a1622621e39f6ed72745757e38dbd8ef322e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807cf78f555ad98fffc2333af76a1622621e39f6ed72745757e38dbd8ef322e2->enter($__internal_807cf78f555ad98fffc2333af76a1622621e39f6ed72745757e38dbd8ef322e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/add.html.twig"));

        $__internal_f6cef8c0e4f2d5279ad9ec813be7c402929abc074bd2b2aaab679cfe58d77c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6cef8c0e4f2d5279ad9ec813be7c402929abc074bd2b2aaab679cfe58d77c59->enter($__internal_f6cef8c0e4f2d5279ad9ec813be7c402929abc074bd2b2aaab679cfe58d77c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded_type"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_807cf78f555ad98fffc2333af76a1622621e39f6ed72745757e38dbd8ef322e2->leave($__internal_807cf78f555ad98fffc2333af76a1622621e39f6ed72745757e38dbd8ef322e2_prof);

        
        $__internal_f6cef8c0e4f2d5279ad9ec813be7c402929abc074bd2b2aaab679cfe58d77c59->leave($__internal_f6cef8c0e4f2d5279ad9ec813be7c402929abc074bd2b2aaab679cfe58d77c59_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e519f434ea62627b4ec356090c1da425634288dca9c881a59ab1f22a64d6c2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e519f434ea62627b4ec356090c1da425634288dca9c881a59ab1f22a64d6c2ec->enter($__internal_e519f434ea62627b4ec356090c1da425634288dca9c881a59ab1f22a64d6c2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_38710ea1b7744ce82c9232df89f0d2a3364ff2b0324c533ffbad27a8b38501a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38710ea1b7744ce82c9232df89f0d2a3364ff2b0324c533ffbad27a8b38501a4->enter($__internal_38710ea1b7744ce82c9232df89f0d2a3364ff2b0324c533ffbad27a8b38501a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type constatation ";
        
        $__internal_38710ea1b7744ce82c9232df89f0d2a3364ff2b0324c533ffbad27a8b38501a4->leave($__internal_38710ea1b7744ce82c9232df89f0d2a3364ff2b0324c533ffbad27a8b38501a4_prof);

        
        $__internal_e519f434ea62627b4ec356090c1da425634288dca9c881a59ab1f22a64d6c2ec->leave($__internal_e519f434ea62627b4ec356090c1da425634288dca9c881a59ab1f22a64d6c2ec_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_46e87d8fb719bb5c35f5ec5bfbd77416d4e2380538d0620ed6ce0a70af147756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e87d8fb719bb5c35f5ec5bfbd77416d4e2380538d0620ed6ce0a70af147756->enter($__internal_46e87d8fb719bb5c35f5ec5bfbd77416d4e2380538d0620ed6ce0a70af147756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_197f2df38b4ae16ed7368f3701f219e0d5df472965d04afb829ddb867567ceac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197f2df38b4ae16ed7368f3701f219e0d5df472965d04afb829ddb867567ceac->enter($__internal_197f2df38b4ae16ed7368f3701f219e0d5df472965d04afb829ddb867567ceac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_197f2df38b4ae16ed7368f3701f219e0d5df472965d04afb829ddb867567ceac->leave($__internal_197f2df38b4ae16ed7368f3701f219e0d5df472965d04afb829ddb867567ceac_prof);

        
        $__internal_46e87d8fb719bb5c35f5ec5bfbd77416d4e2380538d0620ed6ce0a70af147756->leave($__internal_46e87d8fb719bb5c35f5ec5bfbd77416d4e2380538d0620ed6ce0a70af147756_prof);

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
