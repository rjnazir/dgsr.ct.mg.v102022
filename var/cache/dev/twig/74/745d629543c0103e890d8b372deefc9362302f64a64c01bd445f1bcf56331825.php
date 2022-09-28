<?php

/* @Admin/CtMotifTarif/edit.html.twig */
class __TwigTemplate_5da87f03c6efa286e1faccc0c2b3e821f127fed7e832aefb8c81f7e44c4f8a31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMotifTarif/edit.html.twig", 1);
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
        $__internal_7a1155e4c486765ff3eb6ffe72e704e312c09095c0c58efed3085abbc8e525c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1155e4c486765ff3eb6ffe72e704e312c09095c0c58efed3085abbc8e525c7->enter($__internal_7a1155e4c486765ff3eb6ffe72e704e312c09095c0c58efed3085abbc8e525c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotifTarif/edit.html.twig"));

        $__internal_e0d4716cedf4f536b35c9e19371eadcf1c346882f09f4d2088620b1ef2f2ecfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d4716cedf4f536b35c9e19371eadcf1c346882f09f4d2088620b1ef2f2ecfd->enter($__internal_e0d4716cedf4f536b35c9e19371eadcf1c346882f09f4d2088620b1ef2f2ecfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotifTarif/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a1155e4c486765ff3eb6ffe72e704e312c09095c0c58efed3085abbc8e525c7->leave($__internal_7a1155e4c486765ff3eb6ffe72e704e312c09095c0c58efed3085abbc8e525c7_prof);

        
        $__internal_e0d4716cedf4f536b35c9e19371eadcf1c346882f09f4d2088620b1ef2f2ecfd->leave($__internal_e0d4716cedf4f536b35c9e19371eadcf1c346882f09f4d2088620b1ef2f2ecfd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_67189c7fac299c04296d4fb1fea9ce7ec8f704c585b0d2fbb1144075b54f262d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67189c7fac299c04296d4fb1fea9ce7ec8f704c585b0d2fbb1144075b54f262d->enter($__internal_67189c7fac299c04296d4fb1fea9ce7ec8f704c585b0d2fbb1144075b54f262d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bf4ef9753c83977b41d7831f63c667c8087c04ac0ebf09dee91f7def856edbc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4ef9753c83977b41d7831f63c667c8087c04ac0ebf09dee91f7def856edbc2->enter($__internal_bf4ef9753c83977b41d7831f63c667c8087c04ac0ebf09dee91f7def856edbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de motif ";
        
        $__internal_bf4ef9753c83977b41d7831f63c667c8087c04ac0ebf09dee91f7def856edbc2->leave($__internal_bf4ef9753c83977b41d7831f63c667c8087c04ac0ebf09dee91f7def856edbc2_prof);

        
        $__internal_67189c7fac299c04296d4fb1fea9ce7ec8f704c585b0d2fbb1144075b54f262d->leave($__internal_67189c7fac299c04296d4fb1fea9ce7ec8f704c585b0d2fbb1144075b54f262d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_90f79468e797c98e48aea562017648698ce4266dd64d616c726d4ce079210020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f79468e797c98e48aea562017648698ce4266dd64d616c726d4ce079210020->enter($__internal_90f79468e797c98e48aea562017648698ce4266dd64d616c726d4ce079210020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed3e4def70200bd7eae60cc15c83ed2f0cb34ab426b2d5964aabe3ff113381b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3e4def70200bd7eae60cc15c83ed2f0cb34ab426b2d5964aabe3ff113381b8->enter($__internal_ed3e4def70200bd7eae60cc15c83ed2f0cb34ab426b2d5964aabe3ff113381b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif motif</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctMotif", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mtfTrfPrix", array()), 'row');
        echo "
                        ";
        // line 33
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_motif\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_index");
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
        
        $__internal_ed3e4def70200bd7eae60cc15c83ed2f0cb34ab426b2d5964aabe3ff113381b8->leave($__internal_ed3e4def70200bd7eae60cc15c83ed2f0cb34ab426b2d5964aabe3ff113381b8_prof);

        
        $__internal_90f79468e797c98e48aea562017648698ce4266dd64d616c726d4ce079210020->leave($__internal_90f79468e797c98e48aea562017648698ce4266dd64d616c726d4ce079210020_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMotifTarif/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  131 => 33,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification tarif de motif {% endblock %}

{% set menu_motif_tarif = true %}

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
                        <h3 class=\"box-title\">Editer un tarif motif</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctMotif) }}
                        {{ form_row(edit_form.mtfTrfPrix) }}
                        {#{{ form_row(edit_form.mtfTrfDate) }}#}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_motif\"/>
                        <a href=\"{{ path('motif_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtMotifTarif/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMotifTarif\\edit.html.twig");
    }
}
