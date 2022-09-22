<?php

/* @Admin/CtImprimeTech/add.html.twig */
class __TwigTemplate_230f5fb0cbb7e57ab574c860ad705af71f92cfecaadba742ece45f1bcc71cfc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtImprimeTech/add.html.twig", 1);
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
        $__internal_c967f2402d95bbe824be1cc81635bb678fd77e5aec401e3abacac095d46a3644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c967f2402d95bbe824be1cc81635bb678fd77e5aec401e3abacac095d46a3644->enter($__internal_c967f2402d95bbe824be1cc81635bb678fd77e5aec401e3abacac095d46a3644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/add.html.twig"));

        $__internal_882a73ada269a154eeb8c531a74ecdf21b58d5f3426b16fdaadd34d54daa59a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882a73ada269a154eeb8c531a74ecdf21b58d5f3426b16fdaadd34d54daa59a5->enter($__internal_882a73ada269a154eeb8c531a74ecdf21b58d5f3426b16fdaadd34d54daa59a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_imprime_tech"] = true;
        // line 8
        $context["menu_imprime_tech_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c967f2402d95bbe824be1cc81635bb678fd77e5aec401e3abacac095d46a3644->leave($__internal_c967f2402d95bbe824be1cc81635bb678fd77e5aec401e3abacac095d46a3644_prof);

        
        $__internal_882a73ada269a154eeb8c531a74ecdf21b58d5f3426b16fdaadd34d54daa59a5->leave($__internal_882a73ada269a154eeb8c531a74ecdf21b58d5f3426b16fdaadd34d54daa59a5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce244f4f01bd1871319c3de403c505fc78627c25b0150a60f07d56a2f3dd7a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce244f4f01bd1871319c3de403c505fc78627c25b0150a60f07d56a2f3dd7a78->enter($__internal_ce244f4f01bd1871319c3de403c505fc78627c25b0150a60f07d56a2f3dd7a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a37f5859c84b34d4ea9698ea003c59bd5d14cb32090edb4140161cb374377a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37f5859c84b34d4ea9698ea003c59bd5d14cb32090edb4140161cb374377a66->enter($__internal_a37f5859c84b34d4ea9698ea003c59bd5d14cb32090edb4140161cb374377a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_a37f5859c84b34d4ea9698ea003c59bd5d14cb32090edb4140161cb374377a66->leave($__internal_a37f5859c84b34d4ea9698ea003c59bd5d14cb32090edb4140161cb374377a66_prof);

        
        $__internal_ce244f4f01bd1871319c3de403c505fc78627c25b0150a60f07d56a2f3dd7a78->leave($__internal_ce244f4f01bd1871319c3de403c505fc78627c25b0150a60f07d56a2f3dd7a78_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd4f71353c3c97fd00f85cd614a2c60f5586ce98867ffa1323bb04608f6db878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4f71353c3c97fd00f85cd614a2c60f5586ce98867ffa1323bb04608f6db878->enter($__internal_cd4f71353c3c97fd00f85cd614a2c60f5586ce98867ffa1323bb04608f6db878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cc4295ee9627bfbcda10754bdfd38c933a0ea69a7f00936662ee3f249b2150f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc4295ee9627bfbcda10754bdfd38c933a0ea69a7f00936662ee3f249b2150f->enter($__internal_8cc4295ee9627bfbcda10754bdfd38c933a0ea69a7f00936662ee3f249b2150f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "abrevImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "uteImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_imprime_tech\"/>
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_8cc4295ee9627bfbcda10754bdfd38c933a0ea69a7f00936662ee3f249b2150f->leave($__internal_8cc4295ee9627bfbcda10754bdfd38c933a0ea69a7f00936662ee3f249b2150f_prof);

        
        $__internal_cd4f71353c3c97fd00f85cd614a2c60f5586ce98867ffa1323bb04608f6db878->leave($__internal_cd4f71353c3c97fd00f85cd614a2c60f5586ce98867ffa1323bb04608f6db878_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTech/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 49,  147 => 44,  139 => 39,  132 => 35,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% set menu_imprime_tech        = true %}
{% set menu_imprime_tech_create = true %}

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
                        <h3 class=\"box-title\">Créer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.nomImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.abrevImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.uteImprimeTech) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_imprime_tech\"/>
                        <a href=\"{{ path('imprime_tech_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtImprimeTech/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTech\\add.html.twig");
    }
}
