<?php

/* AdminBundle:CtGenreTarif:edit.html.twig */
class __TwigTemplate_7e952b9f23a4ae384403fbda6337f71da69593f28d45816e81272617f703e970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtGenreTarif:edit.html.twig", 1);
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
        $__internal_50684111fb4b6c384f1d784b2b2d01fb2172ebb2a2a0cea4d65d588da73c962c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50684111fb4b6c384f1d784b2b2d01fb2172ebb2a2a0cea4d65d588da73c962c->enter($__internal_50684111fb4b6c384f1d784b2b2d01fb2172ebb2a2a0cea4d65d588da73c962c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreTarif:edit.html.twig"));

        $__internal_10d307f931c5955de3a028c2683cb8968229cb059b804467f205791a0c78b351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d307f931c5955de3a028c2683cb8968229cb059b804467f205791a0c78b351->enter($__internal_10d307f931c5955de3a028c2683cb8968229cb059b804467f205791a0c78b351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreTarif:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50684111fb4b6c384f1d784b2b2d01fb2172ebb2a2a0cea4d65d588da73c962c->leave($__internal_50684111fb4b6c384f1d784b2b2d01fb2172ebb2a2a0cea4d65d588da73c962c_prof);

        
        $__internal_10d307f931c5955de3a028c2683cb8968229cb059b804467f205791a0c78b351->leave($__internal_10d307f931c5955de3a028c2683cb8968229cb059b804467f205791a0c78b351_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9602074ee82cee5b1cc417294e006ffbcc9823ea0e92955afd7698699a31a44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9602074ee82cee5b1cc417294e006ffbcc9823ea0e92955afd7698699a31a44e->enter($__internal_9602074ee82cee5b1cc417294e006ffbcc9823ea0e92955afd7698699a31a44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab6e5dce8ddeb5788f33c31b210796217c546fa58761c5504d0a0487a33f9156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6e5dce8ddeb5788f33c31b210796217c546fa58761c5504d0a0487a33f9156->enter($__internal_ab6e5dce8ddeb5788f33c31b210796217c546fa58761c5504d0a0487a33f9156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de genre ";
        
        $__internal_ab6e5dce8ddeb5788f33c31b210796217c546fa58761c5504d0a0487a33f9156->leave($__internal_ab6e5dce8ddeb5788f33c31b210796217c546fa58761c5504d0a0487a33f9156_prof);

        
        $__internal_9602074ee82cee5b1cc417294e006ffbcc9823ea0e92955afd7698699a31a44e->leave($__internal_9602074ee82cee5b1cc417294e006ffbcc9823ea0e92955afd7698699a31a44e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a055b3e6c6af6372892ce4d3dffcb2316ec14d67bdab27a9d03936002683432d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a055b3e6c6af6372892ce4d3dffcb2316ec14d67bdab27a9d03936002683432d->enter($__internal_a055b3e6c6af6372892ce4d3dffcb2316ec14d67bdab27a9d03936002683432d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f04622024a3d40dd61d25b6410d5fc8aa09420a5cbcaf357904f3489ce45228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f04622024a3d40dd61d25b6410d5fc8aa09420a5cbcaf357904f3489ce45228->enter($__internal_6f04622024a3d40dd61d25b6410d5fc8aa09420a5cbcaf357904f3489ce45228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un tarif genre</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctGenre", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "grtPrix", array()), 'row');
        echo "
                        ";
        // line 33
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_tarif_index");
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
        
        $__internal_6f04622024a3d40dd61d25b6410d5fc8aa09420a5cbcaf357904f3489ce45228->leave($__internal_6f04622024a3d40dd61d25b6410d5fc8aa09420a5cbcaf357904f3489ce45228_prof);

        
        $__internal_a055b3e6c6af6372892ce4d3dffcb2316ec14d67bdab27a9d03936002683432d->leave($__internal_a055b3e6c6af6372892ce4d3dffcb2316ec14d67bdab27a9d03936002683432d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtGenreTarif:edit.html.twig";
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

{% block title %}{{ parent() }} Modification tarif de genre {% endblock %}

{% set menu_genre_tarif = true %}

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
                        <h3 class=\"box-title\">Editer un tarif genre</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctGenre) }}
                        {{ form_row(edit_form.grtPrix) }}
                        {#{{ form_row(edit_form.grtAnnee) }}#}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"{{ path('genre_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtGenreTarif:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtGenreTarif/edit.html.twig");
    }
}
