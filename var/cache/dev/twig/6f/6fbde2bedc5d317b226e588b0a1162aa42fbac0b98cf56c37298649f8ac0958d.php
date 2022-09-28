<?php

/* AdminBundle:CtTypeDroitPtac:add.html.twig */
class __TwigTemplate_786f6d814449ace990767e9b7caa02357e080868151febbbd2423bd1266579e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeDroitPtac:add.html.twig", 1);
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
        $__internal_f21e595c96d3dafcadb2b0b5083708ef9692d814f5dda586d3e9224d0cf0fc92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21e595c96d3dafcadb2b0b5083708ef9692d814f5dda586d3e9224d0cf0fc92->enter($__internal_f21e595c96d3dafcadb2b0b5083708ef9692d814f5dda586d3e9224d0cf0fc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeDroitPtac:add.html.twig"));

        $__internal_411ea5c355c2b686723d2f81b72aa535e1429ec6025a0b0d85688ea556d69f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411ea5c355c2b686723d2f81b72aa535e1429ec6025a0b0d85688ea556d69f82->enter($__internal_411ea5c355c2b686723d2f81b72aa535e1429ec6025a0b0d85688ea556d69f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeDroitPtac:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_droit_ptac"] = true;
        // line 8
        $context["menu_type_droit_ptac_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f21e595c96d3dafcadb2b0b5083708ef9692d814f5dda586d3e9224d0cf0fc92->leave($__internal_f21e595c96d3dafcadb2b0b5083708ef9692d814f5dda586d3e9224d0cf0fc92_prof);

        
        $__internal_411ea5c355c2b686723d2f81b72aa535e1429ec6025a0b0d85688ea556d69f82->leave($__internal_411ea5c355c2b686723d2f81b72aa535e1429ec6025a0b0d85688ea556d69f82_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61d8b0d93099b01131504f03ebf04df203f66769930b9b2b02062f45d293c9ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d8b0d93099b01131504f03ebf04df203f66769930b9b2b02062f45d293c9ae->enter($__internal_61d8b0d93099b01131504f03ebf04df203f66769930b9b2b02062f45d293c9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d926059099c4820a573ded6949df77cd001a98120c41b96ba7319fc243eaea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d926059099c4820a573ded6949df77cd001a98120c41b96ba7319fc243eaea0->enter($__internal_0d926059099c4820a573ded6949df77cd001a98120c41b96ba7319fc243eaea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de droit_ptac ";
        
        $__internal_0d926059099c4820a573ded6949df77cd001a98120c41b96ba7319fc243eaea0->leave($__internal_0d926059099c4820a573ded6949df77cd001a98120c41b96ba7319fc243eaea0_prof);

        
        $__internal_61d8b0d93099b01131504f03ebf04df203f66769930b9b2b02062f45d293c9ae->leave($__internal_61d8b0d93099b01131504f03ebf04df203f66769930b9b2b02062f45d293c9ae_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab508746596bfc6c9bcd4e575e12379bd107b95e6d6bfd3370bb19fc50114f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab508746596bfc6c9bcd4e575e12379bd107b95e6d6bfd3370bb19fc50114f6b->enter($__internal_ab508746596bfc6c9bcd4e575e12379bd107b95e6d6bfd3370bb19fc50114f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2faa3c96292af59469bc8c2dab7cfa2fb645f84773d5a397baf31272eea475a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2faa3c96292af59469bc8c2dab7cfa2fb645f84773d5a397baf31272eea475a->enter($__internal_f2faa3c96292af59469bc8c2dab7cfa2fb645f84773d5a397baf31272eea475a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpDpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_droit_ptac\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_index");
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
        
        $__internal_f2faa3c96292af59469bc8c2dab7cfa2fb645f84773d5a397baf31272eea475a->leave($__internal_f2faa3c96292af59469bc8c2dab7cfa2fb645f84773d5a397baf31272eea475a_prof);

        
        $__internal_ab508746596bfc6c9bcd4e575e12379bd107b95e6d6bfd3370bb19fc50114f6b->leave($__internal_ab508746596bfc6c9bcd4e575e12379bd107b95e6d6bfd3370bb19fc50114f6b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeDroitPtac:add.html.twig";
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

{% block title %}{{ parent() }} Ajout Type de droit_ptac {% endblock %}

{% set menu_type_droit_ptac        = true %}
{% set menu_type_droit_ptac_create = true %}

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
                        <h3 class=\"box-title\">Créer un type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.tpDpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_droit_ptac\"/>
                        <a href=\"{{ path('type_droit_ptac_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeDroitPtac:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeDroitPtac/add.html.twig");
    }
}
