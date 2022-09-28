<?php

/* @Admin/CtVisiteExtraTarif/edit.html.twig */
class __TwigTemplate_5bbdcad5fdd93b7b74d380782710263d65454806c10fd681a2ab14914138d1c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisiteExtraTarif/edit.html.twig", 1);
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
        $__internal_f7ea4f10135329ed3078bc682b3476f21e442eea97eb35cda2b799d50e9c9e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ea4f10135329ed3078bc682b3476f21e442eea97eb35cda2b799d50e9c9e6f->enter($__internal_f7ea4f10135329ed3078bc682b3476f21e442eea97eb35cda2b799d50e9c9e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtraTarif/edit.html.twig"));

        $__internal_78ddc14ed8339729b97b95e46736a7bf578540930629ffd5f1498d620ce81f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ddc14ed8339729b97b95e46736a7bf578540930629ffd5f1498d620ce81f13->enter($__internal_78ddc14ed8339729b97b95e46736a7bf578540930629ffd5f1498d620ce81f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtraTarif/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 8
        $context["menu_visite_extra_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7ea4f10135329ed3078bc682b3476f21e442eea97eb35cda2b799d50e9c9e6f->leave($__internal_f7ea4f10135329ed3078bc682b3476f21e442eea97eb35cda2b799d50e9c9e6f_prof);

        
        $__internal_78ddc14ed8339729b97b95e46736a7bf578540930629ffd5f1498d620ce81f13->leave($__internal_78ddc14ed8339729b97b95e46736a7bf578540930629ffd5f1498d620ce81f13_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a03b9c65ebbc23b018f5fd8b5f005b41aa780e5443d6856d4041554913d9e65a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03b9c65ebbc23b018f5fd8b5f005b41aa780e5443d6856d4041554913d9e65a->enter($__internal_a03b9c65ebbc23b018f5fd8b5f005b41aa780e5443d6856d4041554913d9e65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2459b0222827fc52766f3a82efc060fa646c6d07ff986415e31c34d41d85c9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2459b0222827fc52766f3a82efc060fa646c6d07ff986415e31c34d41d85c9b6->enter($__internal_2459b0222827fc52766f3a82efc060fa646c6d07ff986415e31c34d41d85c9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de visite extra ";
        
        $__internal_2459b0222827fc52766f3a82efc060fa646c6d07ff986415e31c34d41d85c9b6->leave($__internal_2459b0222827fc52766f3a82efc060fa646c6d07ff986415e31c34d41d85c9b6_prof);

        
        $__internal_a03b9c65ebbc23b018f5fd8b5f005b41aa780e5443d6856d4041554913d9e65a->leave($__internal_a03b9c65ebbc23b018f5fd8b5f005b41aa780e5443d6856d4041554913d9e65a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1f27d38b2e37543ff90f443d87b9f4592491e96a8488a1ece7a1f74ebdbb231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f27d38b2e37543ff90f443d87b9f4592491e96a8488a1ece7a1f74ebdbb231->enter($__internal_c1f27d38b2e37543ff90f443d87b9f4592491e96a8488a1ece7a1f74ebdbb231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5220ac15d7e5baebf5186f3850e350e0b766aa50a83ba64cf23d7e27ca58591d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5220ac15d7e5baebf5186f3850e350e0b766aa50a83ba64cf23d7e27ca58591d->enter($__internal_5220ac15d7e5baebf5186f3850e350e0b766aa50a83ba64cf23d7e27ca58591d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un tarif visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVisiteExtra", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vetPrix", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_index");
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
        
        $__internal_5220ac15d7e5baebf5186f3850e350e0b766aa50a83ba64cf23d7e27ca58591d->leave($__internal_5220ac15d7e5baebf5186f3850e350e0b766aa50a83ba64cf23d7e27ca58591d_prof);

        
        $__internal_c1f27d38b2e37543ff90f443d87b9f4592491e96a8488a1ece7a1f74ebdbb231->leave($__internal_c1f27d38b2e37543ff90f443d87b9f4592491e96a8488a1ece7a1f74ebdbb231_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisiteExtraTarif/edit.html.twig";
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

{% block title %}{{ parent() }} Modification tarif de visite extra {% endblock %}

{% set menu_visite_extra = true %}
{% set menu_visite_extra_tarif = true %}

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
                        <h3 class=\"box-title\">Editer un tarif visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctVisiteExtra) }}
                        {{ form_row(edit_form.vetPrix) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtVisiteExtraTarif/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisiteExtraTarif\\edit.html.twig");
    }
}
