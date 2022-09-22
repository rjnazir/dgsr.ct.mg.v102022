<?php

/* @Admin/CtTypeAnomalie/add.html.twig */
class __TwigTemplate_d369efc57a1e922720b71345722d149879a5489b1046af045475f989f92f9120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeAnomalie/add.html.twig", 1);
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
        $__internal_859f17303c56a6f05f801ed88796e8a167650e9975a2869e025f2fbc89c70752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859f17303c56a6f05f801ed88796e8a167650e9975a2869e025f2fbc89c70752->enter($__internal_859f17303c56a6f05f801ed88796e8a167650e9975a2869e025f2fbc89c70752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/add.html.twig"));

        $__internal_167056528151f6c0a9e839e585ab5cfb59faa7b9a832334afe41867e00be4634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167056528151f6c0a9e839e585ab5cfb59faa7b9a832334afe41867e00be4634->enter($__internal_167056528151f6c0a9e839e585ab5cfb59faa7b9a832334afe41867e00be4634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_type_anomalie"] = true;
        // line 9
        $context["menu_type_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_859f17303c56a6f05f801ed88796e8a167650e9975a2869e025f2fbc89c70752->leave($__internal_859f17303c56a6f05f801ed88796e8a167650e9975a2869e025f2fbc89c70752_prof);

        
        $__internal_167056528151f6c0a9e839e585ab5cfb59faa7b9a832334afe41867e00be4634->leave($__internal_167056528151f6c0a9e839e585ab5cfb59faa7b9a832334afe41867e00be4634_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f1938c90dacd95e2dae0ba8e98ca311634d859eeb3c17634e1e57ea008de4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1938c90dacd95e2dae0ba8e98ca311634d859eeb3c17634e1e57ea008de4ef->enter($__internal_6f1938c90dacd95e2dae0ba8e98ca311634d859eeb3c17634e1e57ea008de4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7837085f4f68f7219e3e08460a10edca7d279920eb2d7c6aa87f0283f5025296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7837085f4f68f7219e3e08460a10edca7d279920eb2d7c6aa87f0283f5025296->enter($__internal_7837085f4f68f7219e3e08460a10edca7d279920eb2d7c6aa87f0283f5025296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type anomalie ";
        
        $__internal_7837085f4f68f7219e3e08460a10edca7d279920eb2d7c6aa87f0283f5025296->leave($__internal_7837085f4f68f7219e3e08460a10edca7d279920eb2d7c6aa87f0283f5025296_prof);

        
        $__internal_6f1938c90dacd95e2dae0ba8e98ca311634d859eeb3c17634e1e57ea008de4ef->leave($__internal_6f1938c90dacd95e2dae0ba8e98ca311634d859eeb3c17634e1e57ea008de4ef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_456156312aff2f66047ed0de574ee470cdf0cd45cfba377a8c3b4094a859764d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456156312aff2f66047ed0de574ee470cdf0cd45cfba377a8c3b4094a859764d->enter($__internal_456156312aff2f66047ed0de574ee470cdf0cd45cfba377a8c3b4094a859764d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06f090cbd1be9396bf1a6ff3264807603de1184b430c9094103d90d3bb79bd32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f090cbd1be9396bf1a6ff3264807603de1184b430c9094103d90d3bb79bd32->enter($__internal_06f090cbd1be9396bf1a6ff3264807603de1184b430c9094103d90d3bb79bd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_anomalie\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_06f090cbd1be9396bf1a6ff3264807603de1184b430c9094103d90d3bb79bd32->leave($__internal_06f090cbd1be9396bf1a6ff3264807603de1184b430c9094103d90d3bb79bd32_prof);

        
        $__internal_456156312aff2f66047ed0de574ee470cdf0cd45cfba377a8c3b4094a859764d->leave($__internal_456156312aff2f66047ed0de574ee470cdf0cd45cfba377a8c3b4094a859764d_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeAnomalie/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Type anomalie {% endblock %}

{% set menu_anomalie             = true %}
{% set menu_type_anomalie        = true %}
{% set menu_type_anomalie_create = true %}

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
                        <h3 class=\"box-title\">Créer un type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.atpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_anomalie\"/>
                        <a href=\"{{ path('type_anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeAnomalie/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeAnomalie\\add.html.twig");
    }
}
