<?php

/* @Admin/CtTypeUsage/edit.html.twig */
class __TwigTemplate_7445052c4185103d748f9f2a2122951b86fd7af2ca41fdb5e6df743f649e7a2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeUsage/edit.html.twig", 1);
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
        $__internal_5d084e83b7f3d3f3fdf210603d6d249dbe228b804915b764f9156d17a984425f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d084e83b7f3d3f3fdf210603d6d249dbe228b804915b764f9156d17a984425f->enter($__internal_5d084e83b7f3d3f3fdf210603d6d249dbe228b804915b764f9156d17a984425f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeUsage/edit.html.twig"));

        $__internal_c457a074559acf7305a88c48359ae5a5a8bbbe677f7d9a7c3f60468b9c82efa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c457a074559acf7305a88c48359ae5a5a8bbbe677f7d9a7c3f60468b9c82efa8->enter($__internal_c457a074559acf7305a88c48359ae5a5a8bbbe677f7d9a7c3f60468b9c82efa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeUsage/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_usage"] = true;
        // line 8
        $context["menu_type_usage_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d084e83b7f3d3f3fdf210603d6d249dbe228b804915b764f9156d17a984425f->leave($__internal_5d084e83b7f3d3f3fdf210603d6d249dbe228b804915b764f9156d17a984425f_prof);

        
        $__internal_c457a074559acf7305a88c48359ae5a5a8bbbe677f7d9a7c3f60468b9c82efa8->leave($__internal_c457a074559acf7305a88c48359ae5a5a8bbbe677f7d9a7c3f60468b9c82efa8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec7a8f7a87489a6a887def317e173544210ffa28a51f9e7a932377258ff82f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7a8f7a87489a6a887def317e173544210ffa28a51f9e7a932377258ff82f0e->enter($__internal_ec7a8f7a87489a6a887def317e173544210ffa28a51f9e7a932377258ff82f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26a1ddbc7949217a86b9d3855180282bec2af4f319a4e1a5dccc941c98c63e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a1ddbc7949217a86b9d3855180282bec2af4f319a4e1a5dccc941c98c63e44->enter($__internal_26a1ddbc7949217a86b9d3855180282bec2af4f319a4e1a5dccc941c98c63e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type d'usage ";
        
        $__internal_26a1ddbc7949217a86b9d3855180282bec2af4f319a4e1a5dccc941c98c63e44->leave($__internal_26a1ddbc7949217a86b9d3855180282bec2af4f319a4e1a5dccc941c98c63e44_prof);

        
        $__internal_ec7a8f7a87489a6a887def317e173544210ffa28a51f9e7a932377258ff82f0e->leave($__internal_ec7a8f7a87489a6a887def317e173544210ffa28a51f9e7a932377258ff82f0e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_088f9afa1c28821378d9e1259e5a658baecdf5082e4ff8f46be03c08297aa709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088f9afa1c28821378d9e1259e5a658baecdf5082e4ff8f46be03c08297aa709->enter($__internal_088f9afa1c28821378d9e1259e5a658baecdf5082e4ff8f46be03c08297aa709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32a4232864160616a3957d8a9592adc2978361d92cef349d54978a08890eedfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a4232864160616a3957d8a9592adc2978361d92cef349d54978a08890eedfa->enter($__internal_32a4232864160616a3957d8a9592adc2978361d92cef349d54978a08890eedfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un type d'usage</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tpuLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_usage\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_usage_index");
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
        
        $__internal_32a4232864160616a3957d8a9592adc2978361d92cef349d54978a08890eedfa->leave($__internal_32a4232864160616a3957d8a9592adc2978361d92cef349d54978a08890eedfa_prof);

        
        $__internal_088f9afa1c28821378d9e1259e5a658baecdf5082e4ff8f46be03c08297aa709->leave($__internal_088f9afa1c28821378d9e1259e5a658baecdf5082e4ff8f46be03c08297aa709_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeUsage/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Type d'usage {% endblock %}

{% set menu_type_usage        = true %}
{% set menu_type_usage_create = true %}

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
                        <h3 class=\"box-title\">Editer un type d'usage</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tpuLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_usage\"/>
                        <a href=\"{{ path('type_usage_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeUsage/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeUsage\\edit.html.twig");
    }
}
