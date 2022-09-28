<?php

/* @Admin/CtMotifTarif/add.html.twig */
class __TwigTemplate_0416e92329156041d5c48a3b077f9e6c6cd2c90ea43259328b86b4e6e8429f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMotifTarif/add.html.twig", 1);
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
        $__internal_231a1da1eec765e65754c3204119117b422306a1c9f03d6e515dbe8fc7e865ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231a1da1eec765e65754c3204119117b422306a1c9f03d6e515dbe8fc7e865ba->enter($__internal_231a1da1eec765e65754c3204119117b422306a1c9f03d6e515dbe8fc7e865ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotifTarif/add.html.twig"));

        $__internal_777fc9d3178e6fdceabe33eb1400155094ba91351b4178fbe2ccc34f8cdcc5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777fc9d3178e6fdceabe33eb1400155094ba91351b4178fbe2ccc34f8cdcc5fb->enter($__internal_777fc9d3178e6fdceabe33eb1400155094ba91351b4178fbe2ccc34f8cdcc5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotifTarif/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif"] = true;
        // line 8
        $context["menu_motif_tarif"] = true;
        // line 9
        $context["menu_motif_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_231a1da1eec765e65754c3204119117b422306a1c9f03d6e515dbe8fc7e865ba->leave($__internal_231a1da1eec765e65754c3204119117b422306a1c9f03d6e515dbe8fc7e865ba_prof);

        
        $__internal_777fc9d3178e6fdceabe33eb1400155094ba91351b4178fbe2ccc34f8cdcc5fb->leave($__internal_777fc9d3178e6fdceabe33eb1400155094ba91351b4178fbe2ccc34f8cdcc5fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_23a9bfe873f6c2b6608cf9c844b54648103b908ec34c17817201223dab4cc56a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a9bfe873f6c2b6608cf9c844b54648103b908ec34c17817201223dab4cc56a->enter($__internal_23a9bfe873f6c2b6608cf9c844b54648103b908ec34c17817201223dab4cc56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a30d39a388f317e02825423317f5f0ba411c035897dd8558124e8f372a503b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a30d39a388f317e02825423317f5f0ba411c035897dd8558124e8f372a503b7->enter($__internal_1a30d39a388f317e02825423317f5f0ba411c035897dd8558124e8f372a503b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif motif ";
        
        $__internal_1a30d39a388f317e02825423317f5f0ba411c035897dd8558124e8f372a503b7->leave($__internal_1a30d39a388f317e02825423317f5f0ba411c035897dd8558124e8f372a503b7_prof);

        
        $__internal_23a9bfe873f6c2b6608cf9c844b54648103b908ec34c17817201223dab4cc56a->leave($__internal_23a9bfe873f6c2b6608cf9c844b54648103b908ec34c17817201223dab4cc56a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ab75726f4a9a4f81d7136460b6c335349b3f0d0ba7552ac80fe1aac4a2f8596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab75726f4a9a4f81d7136460b6c335349b3f0d0ba7552ac80fe1aac4a2f8596->enter($__internal_8ab75726f4a9a4f81d7136460b6c335349b3f0d0ba7552ac80fe1aac4a2f8596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ec3deb920b24aca9a609179cf90aae26059a16bb21bb857022acab4bb48091c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec3deb920b24aca9a609179cf90aae26059a16bb21bb857022acab4bb48091c->enter($__internal_7ec3deb920b24aca9a609179cf90aae26059a16bb21bb857022acab4bb48091c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Ajouter tarif motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctMotif", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfTrfPrix", array()), 'row');
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
        
        $__internal_7ec3deb920b24aca9a609179cf90aae26059a16bb21bb857022acab4bb48091c->leave($__internal_7ec3deb920b24aca9a609179cf90aae26059a16bb21bb857022acab4bb48091c_prof);

        
        $__internal_8ab75726f4a9a4f81d7136460b6c335349b3f0d0ba7552ac80fe1aac4a2f8596->leave($__internal_8ab75726f4a9a4f81d7136460b6c335349b3f0d0ba7552ac80fe1aac4a2f8596_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMotifTarif/add.html.twig";
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

{% block title %}{{ parent() }} Ajout Tarif motif {% endblock %}

{% set menu_motif = true %}
{% set menu_motif_tarif = true %}
{% set menu_motif_tarif_create = true %}

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
                        <h3 class=\"box-title\">Ajouter tarif motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctMotif) }}
                        {{ form_row(form.mtfTrfPrix) }}
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
{% endblock %}", "@Admin/CtMotifTarif/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMotifTarif\\add.html.twig");
    }
}
