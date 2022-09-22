<?php

/* @Admin/CtMotif/add.html.twig */
class __TwigTemplate_3c231907eefca41b82e91f38860e8dc6e3d7a05ad59670c3112ade8039884cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMotif/add.html.twig", 1);
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
        $__internal_406a54f604723e469f77f74ce56d34c6e0e5ea8c95251ab5bd6280c941464f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406a54f604723e469f77f74ce56d34c6e0e5ea8c95251ab5bd6280c941464f90->enter($__internal_406a54f604723e469f77f74ce56d34c6e0e5ea8c95251ab5bd6280c941464f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotif/add.html.twig"));

        $__internal_f44a7fd2422fece0848e7bdecfc3a229680b1a70d217e2f5621ed7709e1a6ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44a7fd2422fece0848e7bdecfc3a229680b1a70d217e2f5621ed7709e1a6ff8->enter($__internal_f44a7fd2422fece0848e7bdecfc3a229680b1a70d217e2f5621ed7709e1a6ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotif/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif"] = true;
        // line 8
        $context["menu_motif_type"] = true;
        // line 9
        $context["menu_motif_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_406a54f604723e469f77f74ce56d34c6e0e5ea8c95251ab5bd6280c941464f90->leave($__internal_406a54f604723e469f77f74ce56d34c6e0e5ea8c95251ab5bd6280c941464f90_prof);

        
        $__internal_f44a7fd2422fece0848e7bdecfc3a229680b1a70d217e2f5621ed7709e1a6ff8->leave($__internal_f44a7fd2422fece0848e7bdecfc3a229680b1a70d217e2f5621ed7709e1a6ff8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a713f185012158fcb37fcfa9ac362298f1777da7079383c6312baf0c4aa33f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a713f185012158fcb37fcfa9ac362298f1777da7079383c6312baf0c4aa33f26->enter($__internal_a713f185012158fcb37fcfa9ac362298f1777da7079383c6312baf0c4aa33f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d12c0cccc0049f50f41b28698d4fe42e64d1c2f61079265dfae7755b5aa6b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d12c0cccc0049f50f41b28698d4fe42e64d1c2f61079265dfae7755b5aa6b97->enter($__internal_0d12c0cccc0049f50f41b28698d4fe42e64d1c2f61079265dfae7755b5aa6b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_0d12c0cccc0049f50f41b28698d4fe42e64d1c2f61079265dfae7755b5aa6b97->leave($__internal_0d12c0cccc0049f50f41b28698d4fe42e64d1c2f61079265dfae7755b5aa6b97_prof);

        
        $__internal_a713f185012158fcb37fcfa9ac362298f1777da7079383c6312baf0c4aa33f26->leave($__internal_a713f185012158fcb37fcfa9ac362298f1777da7079383c6312baf0c4aa33f26_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_17c628a93dad65502acd8cb3771ff6406bba6a064cac91a578991f3fbf6b1776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c628a93dad65502acd8cb3771ff6406bba6a064cac91a578991f3fbf6b1776->enter($__internal_17c628a93dad65502acd8cb3771ff6406bba6a064cac91a578991f3fbf6b1776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8091ec82e107564d42ab526f361e61b99fa55a26176cdd59d4c095ee6a9e838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8091ec82e107564d42ab526f361e61b99fa55a26176cdd59d4c095ee6a9e838->enter($__internal_f8091ec82e107564d42ab526f361e61b99fa55a26176cdd59d4c095ee6a9e838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfLibelle", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfIsCalculable", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_f8091ec82e107564d42ab526f361e61b99fa55a26176cdd59d4c095ee6a9e838->leave($__internal_f8091ec82e107564d42ab526f361e61b99fa55a26176cdd59d4c095ee6a9e838_prof);

        
        $__internal_17c628a93dad65502acd8cb3771ff6406bba6a064cac91a578991f3fbf6b1776->leave($__internal_17c628a93dad65502acd8cb3771ff6406bba6a064cac91a578991f3fbf6b1776_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMotif/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  139 => 38,  131 => 33,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% set menu_motif           = true %}
{% set menu_motif_type      = true %}
{% set menu_motif_type_create = true %}

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
                        <h3 class=\"box-title\">Créer une motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.mtfLibelle) }}
                        {{ form_row(form.mtfIsCalculable) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"{{ path('motif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtMotif/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMotif\\add.html.twig");
    }
}
