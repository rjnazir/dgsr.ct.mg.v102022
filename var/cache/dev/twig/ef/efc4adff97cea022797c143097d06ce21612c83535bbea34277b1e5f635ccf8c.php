<?php

/* @Admin/CtCentre/add.html.twig */
class __TwigTemplate_9a19c043b15c440bcf4e47bfa3cb72492ad5b474980aa14e67d68ec584a513aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtCentre/add.html.twig", 1);
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
        $__internal_051a262152561bc27e34f6fae7db16ac672b1e2bbc6bc2f7f349eb95338ddc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051a262152561bc27e34f6fae7db16ac672b1e2bbc6bc2f7f349eb95338ddc2e->enter($__internal_051a262152561bc27e34f6fae7db16ac672b1e2bbc6bc2f7f349eb95338ddc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCentre/add.html.twig"));

        $__internal_1cb7bb5eb2a22118c9770860ee613c7598c6bac7ea73238d58b529057e451919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb7bb5eb2a22118c9770860ee613c7598c6bac7ea73238d58b529057e451919->enter($__internal_1cb7bb5eb2a22118c9770860ee613c7598c6bac7ea73238d58b529057e451919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCentre/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_centre"] = true;
        // line 8
        $context["menu_centre_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_051a262152561bc27e34f6fae7db16ac672b1e2bbc6bc2f7f349eb95338ddc2e->leave($__internal_051a262152561bc27e34f6fae7db16ac672b1e2bbc6bc2f7f349eb95338ddc2e_prof);

        
        $__internal_1cb7bb5eb2a22118c9770860ee613c7598c6bac7ea73238d58b529057e451919->leave($__internal_1cb7bb5eb2a22118c9770860ee613c7598c6bac7ea73238d58b529057e451919_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_404051683883d2919218af596846dc50c368bc06104416c88cb61e1c7781b8e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404051683883d2919218af596846dc50c368bc06104416c88cb61e1c7781b8e0->enter($__internal_404051683883d2919218af596846dc50c368bc06104416c88cb61e1c7781b8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4fabdca4a57d25bd0b643c43d8e9204b30ee05b04697cbe97710e72b7b7ea346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fabdca4a57d25bd0b643c43d8e9204b30ee05b04697cbe97710e72b7b7ea346->enter($__internal_4fabdca4a57d25bd0b643c43d8e9204b30ee05b04697cbe97710e72b7b7ea346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Centre ";
        
        $__internal_4fabdca4a57d25bd0b643c43d8e9204b30ee05b04697cbe97710e72b7b7ea346->leave($__internal_4fabdca4a57d25bd0b643c43d8e9204b30ee05b04697cbe97710e72b7b7ea346_prof);

        
        $__internal_404051683883d2919218af596846dc50c368bc06104416c88cb61e1c7781b8e0->leave($__internal_404051683883d2919218af596846dc50c368bc06104416c88cb61e1c7781b8e0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f6f1c0b00ec4d0ceab8295b1bb147fc1349d840e03b0e5cca57a1c7512de946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6f1c0b00ec4d0ceab8295b1bb147fc1349d840e03b0e5cca57a1c7512de946->enter($__internal_0f6f1c0b00ec4d0ceab8295b1bb147fc1349d840e03b0e5cca57a1c7512de946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22abbd2456286ebb1e1bb63e7ececfc4b8d0f1504b82f6cd8cf45bfe9c94c176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22abbd2456286ebb1e1bb63e7ececfc4b8d0f1504b82f6cd8cf45bfe9c94c176->enter($__internal_22abbd2456286ebb1e1bb63e7ececfc4b8d0f1504b82f6cd8cf45bfe9c94c176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un centre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctProvince", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctrNom", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctrCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_centre\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_index");
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
        
        $__internal_22abbd2456286ebb1e1bb63e7ececfc4b8d0f1504b82f6cd8cf45bfe9c94c176->leave($__internal_22abbd2456286ebb1e1bb63e7ececfc4b8d0f1504b82f6cd8cf45bfe9c94c176_prof);

        
        $__internal_0f6f1c0b00ec4d0ceab8295b1bb147fc1349d840e03b0e5cca57a1c7512de946->leave($__internal_0f6f1c0b00ec4d0ceab8295b1bb147fc1349d840e03b0e5cca57a1c7512de946_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtCentre/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  141 => 38,  133 => 33,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Centre {% endblock %}

{% set menu_centre        = true %}
{% set menu_centre_create = true %}

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
                        <h3 class=\"box-title\">Créer un centre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctProvince) }}
                        {{ form_row(form.ctrNom) }}
                        {{ form_row(form.ctrCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_centre\"/>
                        <a href=\"{{ path('centre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtCentre/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtCentre\\add.html.twig");
    }
}
