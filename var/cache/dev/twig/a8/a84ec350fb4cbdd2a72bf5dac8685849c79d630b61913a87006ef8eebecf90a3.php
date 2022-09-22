<?php

/* AdminBundle:CtTypeConstatationAvDedouanement:add.html.twig */
class __TwigTemplate_0e7584483542b031d12363e54831eabac013f8e4e35b82cf1b1e8ccf15f69435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeConstatationAvDedouanement:add.html.twig", 1);
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
        $__internal_f387a9e2a9499c09eb4b7392ac1a5c8a7f5a7a07ff909027cc08b91dfe709f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f387a9e2a9499c09eb4b7392ac1a5c8a7f5a7a07ff909027cc08b91dfe709f6c->enter($__internal_f387a9e2a9499c09eb4b7392ac1a5c8a7f5a7a07ff909027cc08b91dfe709f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeConstatationAvDedouanement:add.html.twig"));

        $__internal_4594c72c7b75577e67cf9fcce7b7825ed9a8e07147270eb5e4fc6af1bb18ef97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4594c72c7b75577e67cf9fcce7b7825ed9a8e07147270eb5e4fc6af1bb18ef97->enter($__internal_4594c72c7b75577e67cf9fcce7b7825ed9a8e07147270eb5e4fc6af1bb18ef97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeConstatationAvDedouanement:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded_type"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f387a9e2a9499c09eb4b7392ac1a5c8a7f5a7a07ff909027cc08b91dfe709f6c->leave($__internal_f387a9e2a9499c09eb4b7392ac1a5c8a7f5a7a07ff909027cc08b91dfe709f6c_prof);

        
        $__internal_4594c72c7b75577e67cf9fcce7b7825ed9a8e07147270eb5e4fc6af1bb18ef97->leave($__internal_4594c72c7b75577e67cf9fcce7b7825ed9a8e07147270eb5e4fc6af1bb18ef97_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_55c2ff7a3399c5be769c698e3b0689708155723b0ad8c9be404db53bc395d78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c2ff7a3399c5be769c698e3b0689708155723b0ad8c9be404db53bc395d78b->enter($__internal_55c2ff7a3399c5be769c698e3b0689708155723b0ad8c9be404db53bc395d78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e62b036544c159942fe88273ed979a0e781403ddbb99864a256d5c77318f4cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62b036544c159942fe88273ed979a0e781403ddbb99864a256d5c77318f4cb9->enter($__internal_e62b036544c159942fe88273ed979a0e781403ddbb99864a256d5c77318f4cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type constatation ";
        
        $__internal_e62b036544c159942fe88273ed979a0e781403ddbb99864a256d5c77318f4cb9->leave($__internal_e62b036544c159942fe88273ed979a0e781403ddbb99864a256d5c77318f4cb9_prof);

        
        $__internal_55c2ff7a3399c5be769c698e3b0689708155723b0ad8c9be404db53bc395d78b->leave($__internal_55c2ff7a3399c5be769c698e3b0689708155723b0ad8c9be404db53bc395d78b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d1eaf90b8117bf2f39c8b1ec5bded8a0788dc87df8c134083b022d614b3959e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1eaf90b8117bf2f39c8b1ec5bded8a0788dc87df8c134083b022d614b3959e->enter($__internal_3d1eaf90b8117bf2f39c8b1ec5bded8a0788dc87df8c134083b022d614b3959e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_548789888a15e5722d63b72eef6e8cbb9f38358bd7b097dfb888707e5773b615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548789888a15e5722d63b72eef6e8cbb9f38358bd7b097dfb888707e5773b615->enter($__internal_548789888a15e5722d63b72eef6e8cbb9f38358bd7b097dfb888707e5773b615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Créer un type de constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadTpLibelle", array()), 'row');
        echo "
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_const_av_ded_type\"/>
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_index");
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
        
        $__internal_548789888a15e5722d63b72eef6e8cbb9f38358bd7b097dfb888707e5773b615->leave($__internal_548789888a15e5722d63b72eef6e8cbb9f38358bd7b097dfb888707e5773b615_prof);

        
        $__internal_3d1eaf90b8117bf2f39c8b1ec5bded8a0788dc87df8c134083b022d614b3959e->leave($__internal_3d1eaf90b8117bf2f39c8b1ec5bded8a0788dc87df8c134083b022d614b3959e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeConstatationAvDedouanement:add.html.twig";
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

{% block title %}{{ parent() }} Ajout Type constatation {% endblock %}

{% set menu_const_av_ded_type      = true %}
{% set menu_const_av_ded_type_create = true %}

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
                    <h3 class=\"box-title\">Créer un type de constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.cadTpLibelle) }}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_const_av_ded_type\"/>
                    <a href=\"{{ path('type_const_av_ded_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeConstatationAvDedouanement:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeConstatationAvDedouanement/add.html.twig");
    }
}
