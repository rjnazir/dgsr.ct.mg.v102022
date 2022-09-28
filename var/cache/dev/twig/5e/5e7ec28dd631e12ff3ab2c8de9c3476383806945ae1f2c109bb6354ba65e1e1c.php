<?php

/* AdminBundle:CtTypeUsage:edit.html.twig */
class __TwigTemplate_53358530f2a2ffe09ec4929526c8244ada4e9c6b44dc0cbf1086ee63cae64a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeUsage:edit.html.twig", 1);
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
        $__internal_db36f8dff1f834b4a23c2c67cad0261135bb7ecd7b32270c7252e5971267e3f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db36f8dff1f834b4a23c2c67cad0261135bb7ecd7b32270c7252e5971267e3f9->enter($__internal_db36f8dff1f834b4a23c2c67cad0261135bb7ecd7b32270c7252e5971267e3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeUsage:edit.html.twig"));

        $__internal_71317602f563965c291f1bf2be1549a24f9f9e45d95ba3aeebcd9a72bf7c54c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71317602f563965c291f1bf2be1549a24f9f9e45d95ba3aeebcd9a72bf7c54c5->enter($__internal_71317602f563965c291f1bf2be1549a24f9f9e45d95ba3aeebcd9a72bf7c54c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeUsage:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_usage"] = true;
        // line 8
        $context["menu_type_usage_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db36f8dff1f834b4a23c2c67cad0261135bb7ecd7b32270c7252e5971267e3f9->leave($__internal_db36f8dff1f834b4a23c2c67cad0261135bb7ecd7b32270c7252e5971267e3f9_prof);

        
        $__internal_71317602f563965c291f1bf2be1549a24f9f9e45d95ba3aeebcd9a72bf7c54c5->leave($__internal_71317602f563965c291f1bf2be1549a24f9f9e45d95ba3aeebcd9a72bf7c54c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7cb28c3e6d590b2d46a2912416f726678ad19d82c185c552856cace2378d7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7cb28c3e6d590b2d46a2912416f726678ad19d82c185c552856cace2378d7da->enter($__internal_a7cb28c3e6d590b2d46a2912416f726678ad19d82c185c552856cace2378d7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aad1d540855742aa1cadb235ef8eca07c6183084c7db519683ac0e51447f2b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad1d540855742aa1cadb235ef8eca07c6183084c7db519683ac0e51447f2b06->enter($__internal_aad1d540855742aa1cadb235ef8eca07c6183084c7db519683ac0e51447f2b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type d'usage ";
        
        $__internal_aad1d540855742aa1cadb235ef8eca07c6183084c7db519683ac0e51447f2b06->leave($__internal_aad1d540855742aa1cadb235ef8eca07c6183084c7db519683ac0e51447f2b06_prof);

        
        $__internal_a7cb28c3e6d590b2d46a2912416f726678ad19d82c185c552856cace2378d7da->leave($__internal_a7cb28c3e6d590b2d46a2912416f726678ad19d82c185c552856cace2378d7da_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_511bfc8da8dfe3053e0e0649e30a29e105dc568ab827b874c8046f8c5d22b65d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511bfc8da8dfe3053e0e0649e30a29e105dc568ab827b874c8046f8c5d22b65d->enter($__internal_511bfc8da8dfe3053e0e0649e30a29e105dc568ab827b874c8046f8c5d22b65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31a5ac23975f497713aa5f3803f4b5dff5b0f279e4e3a2766b8ce194be4f5640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a5ac23975f497713aa5f3803f4b5dff5b0f279e4e3a2766b8ce194be4f5640->enter($__internal_31a5ac23975f497713aa5f3803f4b5dff5b0f279e4e3a2766b8ce194be4f5640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_31a5ac23975f497713aa5f3803f4b5dff5b0f279e4e3a2766b8ce194be4f5640->leave($__internal_31a5ac23975f497713aa5f3803f4b5dff5b0f279e4e3a2766b8ce194be4f5640_prof);

        
        $__internal_511bfc8da8dfe3053e0e0649e30a29e105dc568ab827b874c8046f8c5d22b65d->leave($__internal_511bfc8da8dfe3053e0e0649e30a29e105dc568ab827b874c8046f8c5d22b65d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeUsage:edit.html.twig";
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
{% endblock %}", "AdminBundle:CtTypeUsage:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeUsage/edit.html.twig");
    }
}
