<?php

/* AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig */
class __TwigTemplate_39b771f523e01f398b81e88fb63a4eea4c15e530001a46486483d847cf674709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig", 1);
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
        $__internal_5cfb0cb8425ee571af9b840c6868e92c45ef5e9e635a4215a53a8539aa7671ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfb0cb8425ee571af9b840c6868e92c45ef5e9e635a4215a53a8539aa7671ce->enter($__internal_5cfb0cb8425ee571af9b840c6868e92c45ef5e9e635a4215a53a8539aa7671ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig"));

        $__internal_08c21d5a37f4fbff474b0f21296cfb71e6c1fc69cfd9af0bec871cb21bf75a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c21d5a37f4fbff474b0f21296cfb71e6c1fc69cfd9af0bec871cb21bf75a25->enter($__internal_08c21d5a37f4fbff474b0f21296cfb71e6c1fc69cfd9af0bec871cb21bf75a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded_type"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cfb0cb8425ee571af9b840c6868e92c45ef5e9e635a4215a53a8539aa7671ce->leave($__internal_5cfb0cb8425ee571af9b840c6868e92c45ef5e9e635a4215a53a8539aa7671ce_prof);

        
        $__internal_08c21d5a37f4fbff474b0f21296cfb71e6c1fc69cfd9af0bec871cb21bf75a25->leave($__internal_08c21d5a37f4fbff474b0f21296cfb71e6c1fc69cfd9af0bec871cb21bf75a25_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf53c86631fdc2fd22ce398f7cf9a4aea49255404ef6db18962f6b2840e94cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf53c86631fdc2fd22ce398f7cf9a4aea49255404ef6db18962f6b2840e94cc6->enter($__internal_bf53c86631fdc2fd22ce398f7cf9a4aea49255404ef6db18962f6b2840e94cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27e5bf36b627ae1e7147e34a28b8c7261236b1b6f0b8ba1f5004ee6d5ea056a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e5bf36b627ae1e7147e34a28b8c7261236b1b6f0b8ba1f5004ee6d5ea056a4->enter($__internal_27e5bf36b627ae1e7147e34a28b8c7261236b1b6f0b8ba1f5004ee6d5ea056a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type constatation avant dédouanement ";
        
        $__internal_27e5bf36b627ae1e7147e34a28b8c7261236b1b6f0b8ba1f5004ee6d5ea056a4->leave($__internal_27e5bf36b627ae1e7147e34a28b8c7261236b1b6f0b8ba1f5004ee6d5ea056a4_prof);

        
        $__internal_bf53c86631fdc2fd22ce398f7cf9a4aea49255404ef6db18962f6b2840e94cc6->leave($__internal_bf53c86631fdc2fd22ce398f7cf9a4aea49255404ef6db18962f6b2840e94cc6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9675e791447a88b1a1fbf15dc033826412dc69481f2845bc1457cc3b9c240b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9675e791447a88b1a1fbf15dc033826412dc69481f2845bc1457cc3b9c240b72->enter($__internal_9675e791447a88b1a1fbf15dc033826412dc69481f2845bc1457cc3b9c240b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59b7863a4163a2620bf051bf3afb240054347951bd232eb7e34918ab8c676a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b7863a4163a2620bf051bf3afb240054347951bd232eb7e34918ab8c676a63->enter($__internal_59b7863a4163a2620bf051bf3afb240054347951bd232eb7e34918ab8c676a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Editer un type constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadTpLibelle", array()), 'row');
        echo "
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_const_av_ded\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_59b7863a4163a2620bf051bf3afb240054347951bd232eb7e34918ab8c676a63->leave($__internal_59b7863a4163a2620bf051bf3afb240054347951bd232eb7e34918ab8c676a63_prof);

        
        $__internal_9675e791447a88b1a1fbf15dc033826412dc69481f2845bc1457cc3b9c240b72->leave($__internal_9675e791447a88b1a1fbf15dc033826412dc69481f2845bc1457cc3b9c240b72_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Type constatation avant dédouanement {% endblock %}

{% set menu_const_av_ded_type        = true %}
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
                {{ form_start(edit_form) }}
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Editer un type constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(edit_form.cadTpLibelle) }}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_const_av_ded\"/>
                    <a href=\"{{ path('type_const_av_ded_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeConstatationAvDedouanement/edit.html.twig");
    }
}
