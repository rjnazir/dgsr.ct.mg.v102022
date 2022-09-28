<?php

/* AdminBundle:CtVisiteExtraTarif:add.html.twig */
class __TwigTemplate_7a5b3745336fb681868a97467213c70c4adb99239d7ffbb7991e5c283233ea0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtVisiteExtraTarif:add.html.twig", 1);
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
        $__internal_ba205a2e503e5a9bad7ff4c689aef2b752a6c9a95f7528c630a8eb6ce47becac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba205a2e503e5a9bad7ff4c689aef2b752a6c9a95f7528c630a8eb6ce47becac->enter($__internal_ba205a2e503e5a9bad7ff4c689aef2b752a6c9a95f7528c630a8eb6ce47becac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtraTarif:add.html.twig"));

        $__internal_273f532c361ea7ad69484f6cf1ad5a9f66acb393849f8326f1e6a7be87dc51e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273f532c361ea7ad69484f6cf1ad5a9f66acb393849f8326f1e6a7be87dc51e9->enter($__internal_273f532c361ea7ad69484f6cf1ad5a9f66acb393849f8326f1e6a7be87dc51e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtraTarif:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 8
        $context["menu_visite_extra_tarif"] = true;
        // line 9
        $context["menu_visite_extra_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba205a2e503e5a9bad7ff4c689aef2b752a6c9a95f7528c630a8eb6ce47becac->leave($__internal_ba205a2e503e5a9bad7ff4c689aef2b752a6c9a95f7528c630a8eb6ce47becac_prof);

        
        $__internal_273f532c361ea7ad69484f6cf1ad5a9f66acb393849f8326f1e6a7be87dc51e9->leave($__internal_273f532c361ea7ad69484f6cf1ad5a9f66acb393849f8326f1e6a7be87dc51e9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa5a14051863d6060919c6744658168fdb54009d9c823a070f0294dd3b52e258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5a14051863d6060919c6744658168fdb54009d9c823a070f0294dd3b52e258->enter($__internal_aa5a14051863d6060919c6744658168fdb54009d9c823a070f0294dd3b52e258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cce2aa1eb4706dd19914eb1b20db99db4e129cbb44d57061c90d02137d75031d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce2aa1eb4706dd19914eb1b20db99db4e129cbb44d57061c90d02137d75031d->enter($__internal_cce2aa1eb4706dd19914eb1b20db99db4e129cbb44d57061c90d02137d75031d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif Visite Extra ";
        
        $__internal_cce2aa1eb4706dd19914eb1b20db99db4e129cbb44d57061c90d02137d75031d->leave($__internal_cce2aa1eb4706dd19914eb1b20db99db4e129cbb44d57061c90d02137d75031d_prof);

        
        $__internal_aa5a14051863d6060919c6744658168fdb54009d9c823a070f0294dd3b52e258->leave($__internal_aa5a14051863d6060919c6744658168fdb54009d9c823a070f0294dd3b52e258_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_52f97158ca3585020278bb9960e522f1188cb074817846f05835574b2ad2a100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f97158ca3585020278bb9960e522f1188cb074817846f05835574b2ad2a100->enter($__internal_52f97158ca3585020278bb9960e522f1188cb074817846f05835574b2ad2a100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27b2b446cb647cac3978bb8e5a849ce99e5b85952af4281ef9834e4945756427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b2b446cb647cac3978bb8e5a849ce99e5b85952af4281ef9834e4945756427->enter($__internal_27b2b446cb647cac3978bb8e5a849ce99e5b85952af4281ef9834e4945756427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Ajouter tarif visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVisiteExtra", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vetPrix", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_index");
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
        
        $__internal_27b2b446cb647cac3978bb8e5a849ce99e5b85952af4281ef9834e4945756427->leave($__internal_27b2b446cb647cac3978bb8e5a849ce99e5b85952af4281ef9834e4945756427_prof);

        
        $__internal_52f97158ca3585020278bb9960e522f1188cb074817846f05835574b2ad2a100->leave($__internal_52f97158ca3585020278bb9960e522f1188cb074817846f05835574b2ad2a100_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtVisiteExtraTarif:add.html.twig";
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

{% block title %}{{ parent() }} Ajout Tarif Visite Extra {% endblock %}

{% set menu_visite_extra = true %}
{% set menu_visite_extra_tarif = true %}
{% set menu_visite_extra_tarif_create = true %}

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
                        <h3 class=\"box-title\">Ajouter tarif visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctVisiteExtra) }}
                        {{ form_row(form.vetPrix) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtVisiteExtraTarif:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtVisiteExtraTarif/add.html.twig");
    }
}
