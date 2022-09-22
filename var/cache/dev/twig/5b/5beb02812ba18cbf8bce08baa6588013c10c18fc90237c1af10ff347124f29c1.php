<?php

/* @Admin/CtZoneDeserte/add.html.twig */
class __TwigTemplate_8754a07feb3c448398d8436c8316cef689fbadceae53b806d345f5e23b54e96b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtZoneDeserte/add.html.twig", 1);
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
        $__internal_4c4e1bcb0a0da7edb35a8de7a5b2efef27270059685ae2e3ad11eb4248207fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4e1bcb0a0da7edb35a8de7a5b2efef27270059685ae2e3ad11eb4248207fcd->enter($__internal_4c4e1bcb0a0da7edb35a8de7a5b2efef27270059685ae2e3ad11eb4248207fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/add.html.twig"));

        $__internal_2a99a074a57d468c9c0beeddeeeb70754e89b9b6bad74a53c8f3b985d4364311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a99a074a57d468c9c0beeddeeeb70754e89b9b6bad74a53c8f3b985d4364311->enter($__internal_2a99a074a57d468c9c0beeddeeeb70754e89b9b6bad74a53c8f3b985d4364311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_zone_deserte"] = true;
        // line 8
        $context["menu_zone_deserte_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c4e1bcb0a0da7edb35a8de7a5b2efef27270059685ae2e3ad11eb4248207fcd->leave($__internal_4c4e1bcb0a0da7edb35a8de7a5b2efef27270059685ae2e3ad11eb4248207fcd_prof);

        
        $__internal_2a99a074a57d468c9c0beeddeeeb70754e89b9b6bad74a53c8f3b985d4364311->leave($__internal_2a99a074a57d468c9c0beeddeeeb70754e89b9b6bad74a53c8f3b985d4364311_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5c444cd101a7feecbd8628e350ace41668efd79c0973c47748a6124fb116cfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c444cd101a7feecbd8628e350ace41668efd79c0973c47748a6124fb116cfd->enter($__internal_e5c444cd101a7feecbd8628e350ace41668efd79c0973c47748a6124fb116cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_434c27f5efcfcd9a66342802eaad0f62b92fbf08634a7d10ac578b6743146236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434c27f5efcfcd9a66342802eaad0f62b92fbf08634a7d10ac578b6743146236->enter($__internal_434c27f5efcfcd9a66342802eaad0f62b92fbf08634a7d10ac578b6743146236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Zone de déserte ";
        
        $__internal_434c27f5efcfcd9a66342802eaad0f62b92fbf08634a7d10ac578b6743146236->leave($__internal_434c27f5efcfcd9a66342802eaad0f62b92fbf08634a7d10ac578b6743146236_prof);

        
        $__internal_e5c444cd101a7feecbd8628e350ace41668efd79c0973c47748a6124fb116cfd->leave($__internal_e5c444cd101a7feecbd8628e350ace41668efd79c0973c47748a6124fb116cfd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1733f65adb2e2501e40c3afc540a51fb08800ba85de134ce5b5b68223331c1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1733f65adb2e2501e40c3afc540a51fb08800ba85de134ce5b5b68223331c1f0->enter($__internal_1733f65adb2e2501e40c3afc540a51fb08800ba85de134ce5b5b68223331c1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf2ed5963e2a0ff7d8859fafe67d75e3614152ef602175cc8d833ed809ffc310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2ed5963e2a0ff7d8859fafe67d75e3614152ef602175cc8d833ed809ffc310->enter($__internal_bf2ed5963e2a0ff7d8859fafe67d75e3614152ef602175cc8d833ed809ffc310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une zone de déserte</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zdLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_zone_deserte\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_index");
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
        
        $__internal_bf2ed5963e2a0ff7d8859fafe67d75e3614152ef602175cc8d833ed809ffc310->leave($__internal_bf2ed5963e2a0ff7d8859fafe67d75e3614152ef602175cc8d833ed809ffc310_prof);

        
        $__internal_1733f65adb2e2501e40c3afc540a51fb08800ba85de134ce5b5b68223331c1f0->leave($__internal_1733f65adb2e2501e40c3afc540a51fb08800ba85de134ce5b5b68223331c1f0_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtZoneDeserte/add.html.twig";
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

{% block title %}{{ parent() }} Ajout Zone de déserte {% endblock %}

{% set menu_zone_deserte        = true %}
{% set menu_zone_deserte_create = true %}

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
                        <h3 class=\"box-title\">Créer une zone de déserte</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.zdLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_zone_deserte\"/>
                        <a href=\"{{ path('zone_deserte_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtZoneDeserte/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtZoneDeserte\\add.html.twig");
    }
}
