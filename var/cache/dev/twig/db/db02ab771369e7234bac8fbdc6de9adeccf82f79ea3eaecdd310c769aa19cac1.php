<?php

/* AdminBundle:CtTypeUsage:add.html.twig */
class __TwigTemplate_ad7a94ba23f7f60f61c57651b8806a748924a6d5064316042b224a672043f126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeUsage:add.html.twig", 1);
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
        $__internal_0ac4f66ba8277255ee3492c5d932d2fc0150d3b8d3439f8d8853686e4cce7a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac4f66ba8277255ee3492c5d932d2fc0150d3b8d3439f8d8853686e4cce7a34->enter($__internal_0ac4f66ba8277255ee3492c5d932d2fc0150d3b8d3439f8d8853686e4cce7a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeUsage:add.html.twig"));

        $__internal_da433f4e8a87e2ac65f4cfbb4212f544a16da23b732693c475cab285adad0893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da433f4e8a87e2ac65f4cfbb4212f544a16da23b732693c475cab285adad0893->enter($__internal_da433f4e8a87e2ac65f4cfbb4212f544a16da23b732693c475cab285adad0893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeUsage:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_usage"] = true;
        // line 8
        $context["menu_type_usage_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ac4f66ba8277255ee3492c5d932d2fc0150d3b8d3439f8d8853686e4cce7a34->leave($__internal_0ac4f66ba8277255ee3492c5d932d2fc0150d3b8d3439f8d8853686e4cce7a34_prof);

        
        $__internal_da433f4e8a87e2ac65f4cfbb4212f544a16da23b732693c475cab285adad0893->leave($__internal_da433f4e8a87e2ac65f4cfbb4212f544a16da23b732693c475cab285adad0893_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c56fa426256b7b5af0632ed0e7f586f53f6e6b55795c981691138e19802c56a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56fa426256b7b5af0632ed0e7f586f53f6e6b55795c981691138e19802c56a5->enter($__internal_c56fa426256b7b5af0632ed0e7f586f53f6e6b55795c981691138e19802c56a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93d84ca32a0c52775192808de7ae692232f9c1f0db17c2709b1e744d34276ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d84ca32a0c52775192808de7ae692232f9c1f0db17c2709b1e744d34276ac2->enter($__internal_93d84ca32a0c52775192808de7ae692232f9c1f0db17c2709b1e744d34276ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout type d'usage ";
        
        $__internal_93d84ca32a0c52775192808de7ae692232f9c1f0db17c2709b1e744d34276ac2->leave($__internal_93d84ca32a0c52775192808de7ae692232f9c1f0db17c2709b1e744d34276ac2_prof);

        
        $__internal_c56fa426256b7b5af0632ed0e7f586f53f6e6b55795c981691138e19802c56a5->leave($__internal_c56fa426256b7b5af0632ed0e7f586f53f6e6b55795c981691138e19802c56a5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c488cb803e3506d6a9c32c9b29cfd09ee2586c4a8392df8091942695ce07e31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c488cb803e3506d6a9c32c9b29cfd09ee2586c4a8392df8091942695ce07e31a->enter($__internal_c488cb803e3506d6a9c32c9b29cfd09ee2586c4a8392df8091942695ce07e31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ecd635d04beb2eb680952f32441c1e441e1ebf4be18e90cee8262ddb4530317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecd635d04beb2eb680952f32441c1e441e1ebf4be18e90cee8262ddb4530317->enter($__internal_5ecd635d04beb2eb680952f32441c1e441e1ebf4be18e90cee8262ddb4530317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un type d'usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpuLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_usage\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_5ecd635d04beb2eb680952f32441c1e441e1ebf4be18e90cee8262ddb4530317->leave($__internal_5ecd635d04beb2eb680952f32441c1e441e1ebf4be18e90cee8262ddb4530317_prof);

        
        $__internal_c488cb803e3506d6a9c32c9b29cfd09ee2586c4a8392df8091942695ce07e31a->leave($__internal_c488cb803e3506d6a9c32c9b29cfd09ee2586c4a8392df8091942695ce07e31a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeUsage:add.html.twig";
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

{% block title %}{{ parent() }} Ajout type d'usage {% endblock %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type d'usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.tpuLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_usage\"/>
                        <a href=\"{{ path('type_usage_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeUsage:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeUsage/add.html.twig");
    }
}
