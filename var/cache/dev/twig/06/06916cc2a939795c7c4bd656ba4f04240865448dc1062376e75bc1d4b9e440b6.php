<?php

/* @Admin/CtSourceEnergie/add.html.twig */
class __TwigTemplate_7dfc89abf63aedb6783bc439a020a1b772a62e8b57f8b8ea4cdbecd52e06ea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtSourceEnergie/add.html.twig", 1);
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
        $__internal_3071933307a17487880b5c57943e6e529a2786a11b9e10152867f45652444518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3071933307a17487880b5c57943e6e529a2786a11b9e10152867f45652444518->enter($__internal_3071933307a17487880b5c57943e6e529a2786a11b9e10152867f45652444518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtSourceEnergie/add.html.twig"));

        $__internal_5f65e51244e5f86ccdb6e3bebeb2b8a81aed7f5bb718d268e4d9eafb0acc0dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f65e51244e5f86ccdb6e3bebeb2b8a81aed7f5bb718d268e4d9eafb0acc0dd1->enter($__internal_5f65e51244e5f86ccdb6e3bebeb2b8a81aed7f5bb718d268e4d9eafb0acc0dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtSourceEnergie/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_energie"] = true;
        // line 8
        $context["menu_energie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3071933307a17487880b5c57943e6e529a2786a11b9e10152867f45652444518->leave($__internal_3071933307a17487880b5c57943e6e529a2786a11b9e10152867f45652444518_prof);

        
        $__internal_5f65e51244e5f86ccdb6e3bebeb2b8a81aed7f5bb718d268e4d9eafb0acc0dd1->leave($__internal_5f65e51244e5f86ccdb6e3bebeb2b8a81aed7f5bb718d268e4d9eafb0acc0dd1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6851caa635059f7ad54ef110a94dda19d7b41a373c3a23423824c5a4db727f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6851caa635059f7ad54ef110a94dda19d7b41a373c3a23423824c5a4db727f68->enter($__internal_6851caa635059f7ad54ef110a94dda19d7b41a373c3a23423824c5a4db727f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18979444858f281345c4722f04bdcbbb20bb366118ba62a1d78ef73519cdb830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18979444858f281345c4722f04bdcbbb20bb366118ba62a1d78ef73519cdb830->enter($__internal_18979444858f281345c4722f04bdcbbb20bb366118ba62a1d78ef73519cdb830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_18979444858f281345c4722f04bdcbbb20bb366118ba62a1d78ef73519cdb830->leave($__internal_18979444858f281345c4722f04bdcbbb20bb366118ba62a1d78ef73519cdb830_prof);

        
        $__internal_6851caa635059f7ad54ef110a94dda19d7b41a373c3a23423824c5a4db727f68->leave($__internal_6851caa635059f7ad54ef110a94dda19d7b41a373c3a23423824c5a4db727f68_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f0dd22cdbe8b297a7f267225bcd98cdaaabdba4b517539184c4f263049f245f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0dd22cdbe8b297a7f267225bcd98cdaaabdba4b517539184c4f263049f245f->enter($__internal_4f0dd22cdbe8b297a7f267225bcd98cdaaabdba4b517539184c4f263049f245f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79eb2a29c1ec5bd59791347dba4a28adcdbbfba023566fc2253141c7bf5c55ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79eb2a29c1ec5bd59791347dba4a28adcdbbfba023566fc2253141c7bf5c55ec->enter($__internal_79eb2a29c1ec5bd59791347dba4a28adcdbbfba023566fc2253141c7bf5c55ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une energie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sreLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_energie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_index");
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
        
        $__internal_79eb2a29c1ec5bd59791347dba4a28adcdbbfba023566fc2253141c7bf5c55ec->leave($__internal_79eb2a29c1ec5bd59791347dba4a28adcdbbfba023566fc2253141c7bf5c55ec_prof);

        
        $__internal_4f0dd22cdbe8b297a7f267225bcd98cdaaabdba4b517539184c4f263049f245f->leave($__internal_4f0dd22cdbe8b297a7f267225bcd98cdaaabdba4b517539184c4f263049f245f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtSourceEnergie/add.html.twig";
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

{% set menu_energie        = true %}
{% set menu_energie_create = true %}

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
                        <h3 class=\"box-title\">Créer une energie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.sreLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_energie\"/>
                        <a href=\"{{ path('energie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtSourceEnergie/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtSourceEnergie\\add.html.twig");
    }
}
