<?php

/* AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig */
class __TwigTemplate_77e6925a5aeda02ad69ab598d1b74484d4473f9517bfd1541296098a357e7c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig", 1);
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
        $__internal_857bbdce1264e70c9dc78e2625404fd0ccf14451b0660d757a6fa274ccaabb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857bbdce1264e70c9dc78e2625404fd0ccf14451b0660d757a6fa274ccaabb39->enter($__internal_857bbdce1264e70c9dc78e2625404fd0ccf14451b0660d757a6fa274ccaabb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig"));

        $__internal_12a09cbf86c96134b7ccda64afddff5c3bab0b17e6596fc431fb6e877666d846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a09cbf86c96134b7ccda64afddff5c3bab0b17e6596fc431fb6e877666d846->enter($__internal_12a09cbf86c96134b7ccda64afddff5c3bab0b17e6596fc431fb6e877666d846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_857bbdce1264e70c9dc78e2625404fd0ccf14451b0660d757a6fa274ccaabb39->leave($__internal_857bbdce1264e70c9dc78e2625404fd0ccf14451b0660d757a6fa274ccaabb39_prof);

        
        $__internal_12a09cbf86c96134b7ccda64afddff5c3bab0b17e6596fc431fb6e877666d846->leave($__internal_12a09cbf86c96134b7ccda64afddff5c3bab0b17e6596fc431fb6e877666d846_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e66ae6ad9d71dd0181d49b121db7d4e55808d51247e5a6c72eefbae5bfa72cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e66ae6ad9d71dd0181d49b121db7d4e55808d51247e5a6c72eefbae5bfa72cc->enter($__internal_2e66ae6ad9d71dd0181d49b121db7d4e55808d51247e5a6c72eefbae5bfa72cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_205c6b7ae4dc98c8d2b5c94308e4285fb3738e43062b2171592f215786b18524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205c6b7ae4dc98c8d2b5c94308e4285fb3738e43062b2171592f215786b18524->enter($__internal_205c6b7ae4dc98c8d2b5c94308e4285fb3738e43062b2171592f215786b18524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_205c6b7ae4dc98c8d2b5c94308e4285fb3738e43062b2171592f215786b18524->leave($__internal_205c6b7ae4dc98c8d2b5c94308e4285fb3738e43062b2171592f215786b18524_prof);

        
        $__internal_2e66ae6ad9d71dd0181d49b121db7d4e55808d51247e5a6c72eefbae5bfa72cc->leave($__internal_2e66ae6ad9d71dd0181d49b121db7d4e55808d51247e5a6c72eefbae5bfa72cc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7306c104ac74c16bc0bfb4e7c8ef31e6429267d30081fbed38a055f01c768ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7306c104ac74c16bc0bfb4e7c8ef31e6429267d30081fbed38a055f01c768ce4->enter($__internal_7306c104ac74c16bc0bfb4e7c8ef31e6429267d30081fbed38a055f01c768ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ec57ad397c4cac804672c6e58a2ee6d028048eda08c3d10215e4ff6c42b5cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec57ad397c4cac804672c6e58a2ee6d028048eda08c3d10215e4ff6c42b5cab->enter($__internal_3ec57ad397c4cac804672c6e58a2ee6d028048eda08c3d10215e4ff6c42b5cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Créer une constatation avant dedouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctConstAvDedType", array()), 'row');
        echo "
                    ";
        // line 33
        echo "                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_carac_index");
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
        
        $__internal_3ec57ad397c4cac804672c6e58a2ee6d028048eda08c3d10215e4ff6c42b5cab->leave($__internal_3ec57ad397c4cac804672c6e58a2ee6d028048eda08c3d10215e4ff6c42b5cab_prof);

        
        $__internal_7306c104ac74c16bc0bfb4e7c8ef31e6429267d30081fbed38a055f01c768ce4->leave($__internal_7306c104ac74c16bc0bfb4e7c8ef31e6429267d30081fbed38a055f01c768ce4_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  129 => 33,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% set menu_const_av_ded                = true %}
{% set menu_const_av_ded_type_create    = true %}

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
                    <h3 class=\"box-title\">Créer une constatation avant dedouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.ctConstAvDedType) }}
                    {#{{ form_row(form.ctConstAvDed.ctVerificateur) }}#}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                    <a href=\"{{ path('const_av_ded_carac_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtConstatationAvDedouanementCarac/add.html.twig");
    }
}
