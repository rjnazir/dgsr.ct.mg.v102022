<?php

/* AdminBundle:CtGenreCategorie:edit.html.twig */
class __TwigTemplate_86d0f18fbd8a0ecac88719966fa16ca4e4432b9ec854d304425a55cebd11f0a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtGenreCategorie:edit.html.twig", 1);
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
        $__internal_21c4ceaed6e4d8a83601361826a31c5db59e7cc53a9c46e486fa2091ac22c455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c4ceaed6e4d8a83601361826a31c5db59e7cc53a9c46e486fa2091ac22c455->enter($__internal_21c4ceaed6e4d8a83601361826a31c5db59e7cc53a9c46e486fa2091ac22c455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreCategorie:edit.html.twig"));

        $__internal_090ae614b631952e1e95120f8c0f5003f2487083401f182ed13d96aed51ed64d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090ae614b631952e1e95120f8c0f5003f2487083401f182ed13d96aed51ed64d->enter($__internal_090ae614b631952e1e95120f8c0f5003f2487083401f182ed13d96aed51ed64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreCategorie:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_categorie"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21c4ceaed6e4d8a83601361826a31c5db59e7cc53a9c46e486fa2091ac22c455->leave($__internal_21c4ceaed6e4d8a83601361826a31c5db59e7cc53a9c46e486fa2091ac22c455_prof);

        
        $__internal_090ae614b631952e1e95120f8c0f5003f2487083401f182ed13d96aed51ed64d->leave($__internal_090ae614b631952e1e95120f8c0f5003f2487083401f182ed13d96aed51ed64d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5834319f5588eabf2b2a2c9546e6bd28dd57d3abedeac17349863d8d4c74e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5834319f5588eabf2b2a2c9546e6bd28dd57d3abedeac17349863d8d4c74e09->enter($__internal_a5834319f5588eabf2b2a2c9546e6bd28dd57d3abedeac17349863d8d4c74e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66561a984bd3996bbebfabdd4922c3f5dabb29d0381789e29ec23178622acaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66561a984bd3996bbebfabdd4922c3f5dabb29d0381789e29ec23178622acaf0->enter($__internal_66561a984bd3996bbebfabdd4922c3f5dabb29d0381789e29ec23178622acaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Genre Categorie ";
        
        $__internal_66561a984bd3996bbebfabdd4922c3f5dabb29d0381789e29ec23178622acaf0->leave($__internal_66561a984bd3996bbebfabdd4922c3f5dabb29d0381789e29ec23178622acaf0_prof);

        
        $__internal_a5834319f5588eabf2b2a2c9546e6bd28dd57d3abedeac17349863d8d4c74e09->leave($__internal_a5834319f5588eabf2b2a2c9546e6bd28dd57d3abedeac17349863d8d4c74e09_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_48f78dc4f2cb9c00f561e706bf1d4bff7532379f3632516cc5f5040f7e939c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f78dc4f2cb9c00f561e706bf1d4bff7532379f3632516cc5f5040f7e939c68->enter($__internal_48f78dc4f2cb9c00f561e706bf1d4bff7532379f3632516cc5f5040f7e939c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28e0d352be63da7724807fa48464579fecbaa715018c227d83b8b1c5a2bb277e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e0d352be63da7724807fa48464579fecbaa715018c227d83b8b1c5a2bb277e->enter($__internal_28e0d352be63da7724807fa48464579fecbaa715018c227d83b8b1c5a2bb277e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_28e0d352be63da7724807fa48464579fecbaa715018c227d83b8b1c5a2bb277e->leave($__internal_28e0d352be63da7724807fa48464579fecbaa715018c227d83b8b1c5a2bb277e_prof);

        
        $__internal_48f78dc4f2cb9c00f561e706bf1d4bff7532379f3632516cc5f5040f7e939c68->leave($__internal_48f78dc4f2cb9c00f561e706bf1d4bff7532379f3632516cc5f5040f7e939c68_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtGenreCategorie:edit.html.twig";
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
{% endblock %}", "AdminBundle:CtGenreCategorie:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtGenreCategorie/edit.html.twig");
    }
}
