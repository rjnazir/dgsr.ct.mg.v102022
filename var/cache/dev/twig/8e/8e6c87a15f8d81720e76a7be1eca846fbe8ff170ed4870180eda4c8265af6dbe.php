<?php

/* @Admin/CtGenreCategorie/edit.html.twig */
class __TwigTemplate_8f914ef47291da3a1eb227900c93789887de6cedc69fe0400f3cc38d3c507ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenreCategorie/edit.html.twig", 1);
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
        $__internal_f7944b4ba7d2120b92dd0f29d249edff4f85d14d73ba92810ef934d1d6b3b47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7944b4ba7d2120b92dd0f29d249edff4f85d14d73ba92810ef934d1d6b3b47d->enter($__internal_f7944b4ba7d2120b92dd0f29d249edff4f85d14d73ba92810ef934d1d6b3b47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/edit.html.twig"));

        $__internal_1076c27a2c7d8ffc27cd259ce4fbb50a2385e5108913fceb68bcf4cd45b70bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1076c27a2c7d8ffc27cd259ce4fbb50a2385e5108913fceb68bcf4cd45b70bac->enter($__internal_1076c27a2c7d8ffc27cd259ce4fbb50a2385e5108913fceb68bcf4cd45b70bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_categorie"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7944b4ba7d2120b92dd0f29d249edff4f85d14d73ba92810ef934d1d6b3b47d->leave($__internal_f7944b4ba7d2120b92dd0f29d249edff4f85d14d73ba92810ef934d1d6b3b47d_prof);

        
        $__internal_1076c27a2c7d8ffc27cd259ce4fbb50a2385e5108913fceb68bcf4cd45b70bac->leave($__internal_1076c27a2c7d8ffc27cd259ce4fbb50a2385e5108913fceb68bcf4cd45b70bac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a37206c081032e07df2cc3440922c5646991bd06b710d415368dcb2a41761275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37206c081032e07df2cc3440922c5646991bd06b710d415368dcb2a41761275->enter($__internal_a37206c081032e07df2cc3440922c5646991bd06b710d415368dcb2a41761275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26096fd49cfa53f0e7945515c39de493709b8b120f438405da388480428c189f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26096fd49cfa53f0e7945515c39de493709b8b120f438405da388480428c189f->enter($__internal_26096fd49cfa53f0e7945515c39de493709b8b120f438405da388480428c189f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Genre Categorie ";
        
        $__internal_26096fd49cfa53f0e7945515c39de493709b8b120f438405da388480428c189f->leave($__internal_26096fd49cfa53f0e7945515c39de493709b8b120f438405da388480428c189f_prof);

        
        $__internal_a37206c081032e07df2cc3440922c5646991bd06b710d415368dcb2a41761275->leave($__internal_a37206c081032e07df2cc3440922c5646991bd06b710d415368dcb2a41761275_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_017ccc6df583d1eaf1b75d5260992f9f52a74fe0771fff193728a5860985f4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017ccc6df583d1eaf1b75d5260992f9f52a74fe0771fff193728a5860985f4cb->enter($__internal_017ccc6df583d1eaf1b75d5260992f9f52a74fe0771fff193728a5860985f4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b3be5a6f6de57ba23849da760915ba2d5e35e1c31dfe8a56272a40e549ed09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3be5a6f6de57ba23849da760915ba2d5e35e1c31dfe8a56272a40e549ed09c->enter($__internal_9b3be5a6f6de57ba23849da760915ba2d5e35e1c31dfe8a56272a40e549ed09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une Genre Categorie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "gcLibelle", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "gcIsCalculable", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre_categorie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_categorie_index");
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
        
        $__internal_9b3be5a6f6de57ba23849da760915ba2d5e35e1c31dfe8a56272a40e549ed09c->leave($__internal_9b3be5a6f6de57ba23849da760915ba2d5e35e1c31dfe8a56272a40e549ed09c_prof);

        
        $__internal_017ccc6df583d1eaf1b75d5260992f9f52a74fe0771fff193728a5860985f4cb->leave($__internal_017ccc6df583d1eaf1b75d5260992f9f52a74fe0771fff193728a5860985f4cb_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenreCategorie/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  135 => 36,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Genre Categorie {% endblock %}

{% set menu_genre_categorie = true %}

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
                        <h3 class=\"box-title\">Editer une Genre Categorie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.gcLibelle) }}
                        {{ form_row(edit_form.gcIsCalculable) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre_categorie\"/>
                        <a href=\"{{ path('genre_categorie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtGenreCategorie/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenreCategorie\\edit.html.twig");
    }
}
