<?php

/* @Admin/CtTypeUsage/add.html.twig */
class __TwigTemplate_e4ae15a02616b6a6d3f2f59b2b262ee6fb1d3c40f209786088f04b7087940d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeUsage/add.html.twig", 1);
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
        $__internal_b45eeabdfad02ae18daccad35c9212ae8493d44a039e48c55172b475bb77c298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45eeabdfad02ae18daccad35c9212ae8493d44a039e48c55172b475bb77c298->enter($__internal_b45eeabdfad02ae18daccad35c9212ae8493d44a039e48c55172b475bb77c298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeUsage/add.html.twig"));

        $__internal_d293b95ddf01915982f09b39b321c47d74d960bd2437ed026222fc8a8f286c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d293b95ddf01915982f09b39b321c47d74d960bd2437ed026222fc8a8f286c9f->enter($__internal_d293b95ddf01915982f09b39b321c47d74d960bd2437ed026222fc8a8f286c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeUsage/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_usage"] = true;
        // line 8
        $context["menu_type_usage_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45eeabdfad02ae18daccad35c9212ae8493d44a039e48c55172b475bb77c298->leave($__internal_b45eeabdfad02ae18daccad35c9212ae8493d44a039e48c55172b475bb77c298_prof);

        
        $__internal_d293b95ddf01915982f09b39b321c47d74d960bd2437ed026222fc8a8f286c9f->leave($__internal_d293b95ddf01915982f09b39b321c47d74d960bd2437ed026222fc8a8f286c9f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_54ecb05135400685b3326417ea033587ca77f2b6dfb10fffea07c6ade8bccaab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ecb05135400685b3326417ea033587ca77f2b6dfb10fffea07c6ade8bccaab->enter($__internal_54ecb05135400685b3326417ea033587ca77f2b6dfb10fffea07c6ade8bccaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6cf25eb40f492a0c8c26bc48f862f5ee9ddd9671e1107e14a15848d020d2513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6cf25eb40f492a0c8c26bc48f862f5ee9ddd9671e1107e14a15848d020d2513->enter($__internal_a6cf25eb40f492a0c8c26bc48f862f5ee9ddd9671e1107e14a15848d020d2513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout type d'usage ";
        
        $__internal_a6cf25eb40f492a0c8c26bc48f862f5ee9ddd9671e1107e14a15848d020d2513->leave($__internal_a6cf25eb40f492a0c8c26bc48f862f5ee9ddd9671e1107e14a15848d020d2513_prof);

        
        $__internal_54ecb05135400685b3326417ea033587ca77f2b6dfb10fffea07c6ade8bccaab->leave($__internal_54ecb05135400685b3326417ea033587ca77f2b6dfb10fffea07c6ade8bccaab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc5dac74a49056637ac80176007558e827be2db78b30995270aa5f5c634424fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5dac74a49056637ac80176007558e827be2db78b30995270aa5f5c634424fa->enter($__internal_dc5dac74a49056637ac80176007558e827be2db78b30995270aa5f5c634424fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b369b752473d9aab800f6bacf5c224becda21071d3e0b309f8f747a1cc3bd01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b369b752473d9aab800f6bacf5c224becda21071d3e0b309f8f747a1cc3bd01->enter($__internal_9b369b752473d9aab800f6bacf5c224becda21071d3e0b309f8f747a1cc3bd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b369b752473d9aab800f6bacf5c224becda21071d3e0b309f8f747a1cc3bd01->leave($__internal_9b369b752473d9aab800f6bacf5c224becda21071d3e0b309f8f747a1cc3bd01_prof);

        
        $__internal_dc5dac74a49056637ac80176007558e827be2db78b30995270aa5f5c634424fa->leave($__internal_dc5dac74a49056637ac80176007558e827be2db78b30995270aa5f5c634424fa_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeUsage/add.html.twig";
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
{% endblock %}", "@Admin/CtTypeUsage/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeUsage\\add.html.twig");
    }
}
