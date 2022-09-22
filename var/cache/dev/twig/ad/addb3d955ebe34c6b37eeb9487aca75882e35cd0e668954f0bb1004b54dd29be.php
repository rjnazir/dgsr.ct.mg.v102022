<?php

/* AdminBundle:CtProvince:add.html.twig */
class __TwigTemplate_c16837f924693a0aad988cd794bea424cfdb3815fb66cbc18c505aa9bb01aed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtProvince:add.html.twig", 1);
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
        $__internal_16fb8e0db9ab04071713a7fad71033959179aaae523777fa3f24635673b4b160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16fb8e0db9ab04071713a7fad71033959179aaae523777fa3f24635673b4b160->enter($__internal_16fb8e0db9ab04071713a7fad71033959179aaae523777fa3f24635673b4b160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:add.html.twig"));

        $__internal_dd30c0a6a3e888e2c3aa51882de128f01da707d3eed90f7264955d018403fc22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd30c0a6a3e888e2c3aa51882de128f01da707d3eed90f7264955d018403fc22->enter($__internal_dd30c0a6a3e888e2c3aa51882de128f01da707d3eed90f7264955d018403fc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_province"] = true;
        // line 8
        $context["menu_province_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16fb8e0db9ab04071713a7fad71033959179aaae523777fa3f24635673b4b160->leave($__internal_16fb8e0db9ab04071713a7fad71033959179aaae523777fa3f24635673b4b160_prof);

        
        $__internal_dd30c0a6a3e888e2c3aa51882de128f01da707d3eed90f7264955d018403fc22->leave($__internal_dd30c0a6a3e888e2c3aa51882de128f01da707d3eed90f7264955d018403fc22_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6461f0d196141532beefdd6ad5abbc1cf8146e4e3113c56eac8d796c48cd65ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6461f0d196141532beefdd6ad5abbc1cf8146e4e3113c56eac8d796c48cd65ef->enter($__internal_6461f0d196141532beefdd6ad5abbc1cf8146e4e3113c56eac8d796c48cd65ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc8fb2505f0d7f9ba0b1f64750e61d44e1bae0430e552266c7cfc6e56abd782f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8fb2505f0d7f9ba0b1f64750e61d44e1bae0430e552266c7cfc6e56abd782f->enter($__internal_fc8fb2505f0d7f9ba0b1f64750e61d44e1bae0430e552266c7cfc6e56abd782f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Province ";
        
        $__internal_fc8fb2505f0d7f9ba0b1f64750e61d44e1bae0430e552266c7cfc6e56abd782f->leave($__internal_fc8fb2505f0d7f9ba0b1f64750e61d44e1bae0430e552266c7cfc6e56abd782f_prof);

        
        $__internal_6461f0d196141532beefdd6ad5abbc1cf8146e4e3113c56eac8d796c48cd65ef->leave($__internal_6461f0d196141532beefdd6ad5abbc1cf8146e4e3113c56eac8d796c48cd65ef_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1b155293c2a4792a2ebc62533daafc58ae38813b3f4cd728c2cf479e0b211c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b155293c2a4792a2ebc62533daafc58ae38813b3f4cd728c2cf479e0b211c6->enter($__internal_b1b155293c2a4792a2ebc62533daafc58ae38813b3f4cd728c2cf479e0b211c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1878a9d47d25247e8c3d43d0e0962d2a45c60836c225bed2140e114fb5f9971e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1878a9d47d25247e8c3d43d0e0962d2a45c60836c225bed2140e114fb5f9971e->enter($__internal_1878a9d47d25247e8c3d43d0e0962d2a45c60836c225bed2140e114fb5f9971e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une province</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prvNom", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prvCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_province\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_index");
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
        
        $__internal_1878a9d47d25247e8c3d43d0e0962d2a45c60836c225bed2140e114fb5f9971e->leave($__internal_1878a9d47d25247e8c3d43d0e0962d2a45c60836c225bed2140e114fb5f9971e_prof);

        
        $__internal_b1b155293c2a4792a2ebc62533daafc58ae38813b3f4cd728c2cf479e0b211c6->leave($__internal_b1b155293c2a4792a2ebc62533daafc58ae38813b3f4cd728c2cf479e0b211c6_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtProvince:add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Province {% endblock %}

{% set menu_province        = true %}
{% set menu_province_create = true %}

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
                        <h3 class=\"box-title\">Créer une province</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.prvNom) }}
                        {{ form_row(form.prvCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_province\"/>
                        <a href=\"{{ path('province_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtProvince:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtProvince/add.html.twig");
    }
}
