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
        $__internal_2d4e601817ce718f80d55ef6e2c4bb85a7e30d24f18ec4cef86ee8c63c3d3dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4e601817ce718f80d55ef6e2c4bb85a7e30d24f18ec4cef86ee8c63c3d3dfe->enter($__internal_2d4e601817ce718f80d55ef6e2c4bb85a7e30d24f18ec4cef86ee8c63c3d3dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/add.html.twig"));

        $__internal_2589e3fc36d5fdb915a2a9cadca5acd1576a02e32b3f564f0065724b6cf1a3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2589e3fc36d5fdb915a2a9cadca5acd1576a02e32b3f564f0065724b6cf1a3df->enter($__internal_2589e3fc36d5fdb915a2a9cadca5acd1576a02e32b3f564f0065724b6cf1a3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_zone_deserte"] = true;
        // line 8
        $context["menu_zone_deserte_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d4e601817ce718f80d55ef6e2c4bb85a7e30d24f18ec4cef86ee8c63c3d3dfe->leave($__internal_2d4e601817ce718f80d55ef6e2c4bb85a7e30d24f18ec4cef86ee8c63c3d3dfe_prof);

        
        $__internal_2589e3fc36d5fdb915a2a9cadca5acd1576a02e32b3f564f0065724b6cf1a3df->leave($__internal_2589e3fc36d5fdb915a2a9cadca5acd1576a02e32b3f564f0065724b6cf1a3df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d78e6b836d4d4379b021a4a722ddef23210d01d2b538bff40bfad27ac38763c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78e6b836d4d4379b021a4a722ddef23210d01d2b538bff40bfad27ac38763c2->enter($__internal_d78e6b836d4d4379b021a4a722ddef23210d01d2b538bff40bfad27ac38763c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff754f349669cd2f2da8f2d3fe8f560fa5a7b57432c9aa96984fcfd26830cd2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff754f349669cd2f2da8f2d3fe8f560fa5a7b57432c9aa96984fcfd26830cd2e->enter($__internal_ff754f349669cd2f2da8f2d3fe8f560fa5a7b57432c9aa96984fcfd26830cd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Zone de déserte ";
        
        $__internal_ff754f349669cd2f2da8f2d3fe8f560fa5a7b57432c9aa96984fcfd26830cd2e->leave($__internal_ff754f349669cd2f2da8f2d3fe8f560fa5a7b57432c9aa96984fcfd26830cd2e_prof);

        
        $__internal_d78e6b836d4d4379b021a4a722ddef23210d01d2b538bff40bfad27ac38763c2->leave($__internal_d78e6b836d4d4379b021a4a722ddef23210d01d2b538bff40bfad27ac38763c2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ac0c7706c1338c9f916b6f2c9d3add399ab2dffd0a2c6f643e3fac5f8212dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac0c7706c1338c9f916b6f2c9d3add399ab2dffd0a2c6f643e3fac5f8212dd5->enter($__internal_6ac0c7706c1338c9f916b6f2c9d3add399ab2dffd0a2c6f643e3fac5f8212dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_781a3c0155575fee2d65897f0ff37dd0e79ffca05ce71bc675a2ca6c71beed3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781a3c0155575fee2d65897f0ff37dd0e79ffca05ce71bc675a2ca6c71beed3c->enter($__internal_781a3c0155575fee2d65897f0ff37dd0e79ffca05ce71bc675a2ca6c71beed3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_781a3c0155575fee2d65897f0ff37dd0e79ffca05ce71bc675a2ca6c71beed3c->leave($__internal_781a3c0155575fee2d65897f0ff37dd0e79ffca05ce71bc675a2ca6c71beed3c_prof);

        
        $__internal_6ac0c7706c1338c9f916b6f2c9d3add399ab2dffd0a2c6f643e3fac5f8212dd5->leave($__internal_6ac0c7706c1338c9f916b6f2c9d3add399ab2dffd0a2c6f643e3fac5f8212dd5_prof);

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
