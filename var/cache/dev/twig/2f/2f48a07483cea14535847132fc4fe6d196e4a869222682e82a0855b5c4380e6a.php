<?php

/* AdminBundle:CtZoneDeserte:edit.html.twig */
class __TwigTemplate_b5b57f292ad8df042a761f3d050a0d5e6559e2750d982697eb0038f783ef017e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtZoneDeserte:edit.html.twig", 1);
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
        $__internal_8ae3d1dda58b53c382d058597b47f62a4a283ce234e569ec9f63c9c4d0f9cd5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae3d1dda58b53c382d058597b47f62a4a283ce234e569ec9f63c9c4d0f9cd5e->enter($__internal_8ae3d1dda58b53c382d058597b47f62a4a283ce234e569ec9f63c9c4d0f9cd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtZoneDeserte:edit.html.twig"));

        $__internal_55a4737603df5ca2d3545532cd3e34bdbb9219771ed34015bfdb785bc514a743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a4737603df5ca2d3545532cd3e34bdbb9219771ed34015bfdb785bc514a743->enter($__internal_55a4737603df5ca2d3545532cd3e34bdbb9219771ed34015bfdb785bc514a743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtZoneDeserte:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_zone_deserte"] = true;
        // line 8
        $context["menu_zone_deserte_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae3d1dda58b53c382d058597b47f62a4a283ce234e569ec9f63c9c4d0f9cd5e->leave($__internal_8ae3d1dda58b53c382d058597b47f62a4a283ce234e569ec9f63c9c4d0f9cd5e_prof);

        
        $__internal_55a4737603df5ca2d3545532cd3e34bdbb9219771ed34015bfdb785bc514a743->leave($__internal_55a4737603df5ca2d3545532cd3e34bdbb9219771ed34015bfdb785bc514a743_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_787c0534c565fa013381c78d35be777731131c25b057f7d246797d6ee3c570ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787c0534c565fa013381c78d35be777731131c25b057f7d246797d6ee3c570ed->enter($__internal_787c0534c565fa013381c78d35be777731131c25b057f7d246797d6ee3c570ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31dfcd7d3e097c634e14496f1c2d96fa2c6a019e771a29686e1e4c1afccd3f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dfcd7d3e097c634e14496f1c2d96fa2c6a019e771a29686e1e4c1afccd3f5b->enter($__internal_31dfcd7d3e097c634e14496f1c2d96fa2c6a019e771a29686e1e4c1afccd3f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Zone de déserte ";
        
        $__internal_31dfcd7d3e097c634e14496f1c2d96fa2c6a019e771a29686e1e4c1afccd3f5b->leave($__internal_31dfcd7d3e097c634e14496f1c2d96fa2c6a019e771a29686e1e4c1afccd3f5b_prof);

        
        $__internal_787c0534c565fa013381c78d35be777731131c25b057f7d246797d6ee3c570ed->leave($__internal_787c0534c565fa013381c78d35be777731131c25b057f7d246797d6ee3c570ed_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_45bfaa4eab9b01d67042a7900e96cd09276ee93bb46c9e16693dc0ab1a0d8a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45bfaa4eab9b01d67042a7900e96cd09276ee93bb46c9e16693dc0ab1a0d8a75->enter($__internal_45bfaa4eab9b01d67042a7900e96cd09276ee93bb46c9e16693dc0ab1a0d8a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_128d0aa452bfe85e3c6ed1ddb5bb8b7c472970408ce151eb8d895c14ef9a5245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128d0aa452bfe85e3c6ed1ddb5bb8b7c472970408ce151eb8d895c14ef9a5245->enter($__internal_128d0aa452bfe85e3c6ed1ddb5bb8b7c472970408ce151eb8d895c14ef9a5245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une zone_deserte</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "zdLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_zone_deserte\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_128d0aa452bfe85e3c6ed1ddb5bb8b7c472970408ce151eb8d895c14ef9a5245->leave($__internal_128d0aa452bfe85e3c6ed1ddb5bb8b7c472970408ce151eb8d895c14ef9a5245_prof);

        
        $__internal_45bfaa4eab9b01d67042a7900e96cd09276ee93bb46c9e16693dc0ab1a0d8a75->leave($__internal_45bfaa4eab9b01d67042a7900e96cd09276ee93bb46c9e16693dc0ab1a0d8a75_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtZoneDeserte:edit.html.twig";
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

{% block title %}{{ parent() }} Modification Zone de déserte {% endblock %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une zone_deserte</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.zdLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_zone_deserte\"/>
                        <a href=\"{{ path('zone_deserte_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtZoneDeserte:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtZoneDeserte/edit.html.twig");
    }
}
