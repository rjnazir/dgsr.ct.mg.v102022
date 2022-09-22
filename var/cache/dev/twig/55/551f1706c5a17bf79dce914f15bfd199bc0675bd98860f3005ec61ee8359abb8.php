<?php

/* @Admin/CtVisiteExtraTarif/edit.html.twig */
class __TwigTemplate_5bbdcad5fdd93b7b74d380782710263d65454806c10fd681a2ab14914138d1c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisiteExtraTarif/edit.html.twig", 1);
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
        $__internal_6f363e71a1134e70698e66b3a9a76e361b007982c5c8aa8cb7f673eac8818f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f363e71a1134e70698e66b3a9a76e361b007982c5c8aa8cb7f673eac8818f9a->enter($__internal_6f363e71a1134e70698e66b3a9a76e361b007982c5c8aa8cb7f673eac8818f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtraTarif/edit.html.twig"));

        $__internal_87c8d80a8b7bc4da8ff623c852fc9acd639ee9652f838051f5f3b188cf69df79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c8d80a8b7bc4da8ff623c852fc9acd639ee9652f838051f5f3b188cf69df79->enter($__internal_87c8d80a8b7bc4da8ff623c852fc9acd639ee9652f838051f5f3b188cf69df79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtraTarif/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 8
        $context["menu_visite_extra_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f363e71a1134e70698e66b3a9a76e361b007982c5c8aa8cb7f673eac8818f9a->leave($__internal_6f363e71a1134e70698e66b3a9a76e361b007982c5c8aa8cb7f673eac8818f9a_prof);

        
        $__internal_87c8d80a8b7bc4da8ff623c852fc9acd639ee9652f838051f5f3b188cf69df79->leave($__internal_87c8d80a8b7bc4da8ff623c852fc9acd639ee9652f838051f5f3b188cf69df79_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b16b41505655a9c8734f21cd7837e1e8c93d6b46e7133fff3d718765640e786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b16b41505655a9c8734f21cd7837e1e8c93d6b46e7133fff3d718765640e786->enter($__internal_2b16b41505655a9c8734f21cd7837e1e8c93d6b46e7133fff3d718765640e786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8953945f9bb6dc58061264d6a2e6489d83ac50d90fceb5077db8204cfbc0e201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8953945f9bb6dc58061264d6a2e6489d83ac50d90fceb5077db8204cfbc0e201->enter($__internal_8953945f9bb6dc58061264d6a2e6489d83ac50d90fceb5077db8204cfbc0e201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de visite extra ";
        
        $__internal_8953945f9bb6dc58061264d6a2e6489d83ac50d90fceb5077db8204cfbc0e201->leave($__internal_8953945f9bb6dc58061264d6a2e6489d83ac50d90fceb5077db8204cfbc0e201_prof);

        
        $__internal_2b16b41505655a9c8734f21cd7837e1e8c93d6b46e7133fff3d718765640e786->leave($__internal_2b16b41505655a9c8734f21cd7837e1e8c93d6b46e7133fff3d718765640e786_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_096ebf78f99325b2c9471edbb4514c1afb03e155c1606623dd8acebd380874d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096ebf78f99325b2c9471edbb4514c1afb03e155c1606623dd8acebd380874d9->enter($__internal_096ebf78f99325b2c9471edbb4514c1afb03e155c1606623dd8acebd380874d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4593b84adabeafe6d63e6fae65200683487225c87558b556460b47babfcbb716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4593b84adabeafe6d63e6fae65200683487225c87558b556460b47babfcbb716->enter($__internal_4593b84adabeafe6d63e6fae65200683487225c87558b556460b47babfcbb716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un tarif visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVisiteExtra", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vetPrix", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_index");
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
        
        $__internal_4593b84adabeafe6d63e6fae65200683487225c87558b556460b47babfcbb716->leave($__internal_4593b84adabeafe6d63e6fae65200683487225c87558b556460b47babfcbb716_prof);

        
        $__internal_096ebf78f99325b2c9471edbb4514c1afb03e155c1606623dd8acebd380874d9->leave($__internal_096ebf78f99325b2c9471edbb4514c1afb03e155c1606623dd8acebd380874d9_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisiteExtraTarif/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification tarif de visite extra {% endblock %}

{% set menu_visite_extra = true %}
{% set menu_visite_extra_tarif = true %}

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
                        <h3 class=\"box-title\">Editer un tarif visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctVisiteExtra) }}
                        {{ form_row(edit_form.vetPrix) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtVisiteExtraTarif/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisiteExtraTarif\\edit.html.twig");
    }
}
