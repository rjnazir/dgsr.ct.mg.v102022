<?php

/* AdminBundle:CtCarosserie:edit.html.twig */
class __TwigTemplate_07578c45abe1285cda1d167d913fad672c2a38327eef71033c45f8fe4c8811d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCarosserie:edit.html.twig", 1);
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
        $__internal_e0a54f7f037d40a709caca0d39ca2228fa948296945d36b8b9261a303b0850a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a54f7f037d40a709caca0d39ca2228fa948296945d36b8b9261a303b0850a7->enter($__internal_e0a54f7f037d40a709caca0d39ca2228fa948296945d36b8b9261a303b0850a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarosserie:edit.html.twig"));

        $__internal_bd1175198fdba788c77fd1af6470c9dc286b6162a512889803b6226630826e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1175198fdba788c77fd1af6470c9dc286b6162a512889803b6226630826e8b->enter($__internal_bd1175198fdba788c77fd1af6470c9dc286b6162a512889803b6226630826e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarosserie:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_carosserie"] = true;
        // line 8
        $context["menu_carosserie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0a54f7f037d40a709caca0d39ca2228fa948296945d36b8b9261a303b0850a7->leave($__internal_e0a54f7f037d40a709caca0d39ca2228fa948296945d36b8b9261a303b0850a7_prof);

        
        $__internal_bd1175198fdba788c77fd1af6470c9dc286b6162a512889803b6226630826e8b->leave($__internal_bd1175198fdba788c77fd1af6470c9dc286b6162a512889803b6226630826e8b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_903c41891553fb540272e4697c00320462a39353f5b95120c89d985d0615706a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903c41891553fb540272e4697c00320462a39353f5b95120c89d985d0615706a->enter($__internal_903c41891553fb540272e4697c00320462a39353f5b95120c89d985d0615706a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a8a0ae5c147650281baaf62d16489eab244e6d9c1ffb9601e8f23339faabc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8a0ae5c147650281baaf62d16489eab244e6d9c1ffb9601e8f23339faabc43->enter($__internal_6a8a0ae5c147650281baaf62d16489eab244e6d9c1ffb9601e8f23339faabc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Carrosserie ";
        
        $__internal_6a8a0ae5c147650281baaf62d16489eab244e6d9c1ffb9601e8f23339faabc43->leave($__internal_6a8a0ae5c147650281baaf62d16489eab244e6d9c1ffb9601e8f23339faabc43_prof);

        
        $__internal_903c41891553fb540272e4697c00320462a39353f5b95120c89d985d0615706a->leave($__internal_903c41891553fb540272e4697c00320462a39353f5b95120c89d985d0615706a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa90b6ae01cf15f4bd2df8b2f9c5c07d44c015e787a597f970cd802d8dee9eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa90b6ae01cf15f4bd2df8b2f9c5c07d44c015e787a597f970cd802d8dee9eaa->enter($__internal_aa90b6ae01cf15f4bd2df8b2f9c5c07d44c015e787a597f970cd802d8dee9eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de7e90f708a7ab8be10725514a276097108831aa09eceeb767108db15ef3957d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7e90f708a7ab8be10725514a276097108831aa09eceeb767108db15ef3957d->enter($__internal_de7e90f708a7ab8be10725514a276097108831aa09eceeb767108db15ef3957d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une carrosserie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "crsLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_carosserie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_index");
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
        
        $__internal_de7e90f708a7ab8be10725514a276097108831aa09eceeb767108db15ef3957d->leave($__internal_de7e90f708a7ab8be10725514a276097108831aa09eceeb767108db15ef3957d_prof);

        
        $__internal_aa90b6ae01cf15f4bd2df8b2f9c5c07d44c015e787a597f970cd802d8dee9eaa->leave($__internal_aa90b6ae01cf15f4bd2df8b2f9c5c07d44c015e787a597f970cd802d8dee9eaa_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCarosserie:edit.html.twig";
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

{% block title %}{{ parent() }} Modification Carrosserie {% endblock %}

{% set menu_carosserie        = true %}
{% set menu_carosserie_create = true %}

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
                        <h3 class=\"box-title\">Editer une carrosserie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.crsLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_carosserie\"/>
                        <a href=\"{{ path('carosserie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtCarosserie:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCarosserie/edit.html.twig");
    }
}
